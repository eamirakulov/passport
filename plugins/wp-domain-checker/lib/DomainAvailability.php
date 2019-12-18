<?php
/*
	Author: Helge Sverre Hessevik Liseth
	Website: www.helgesverre.com

	Email: helge.sverre@gmail.com
	Twitter: @HelgeSverre

	License: Attribution-ShareAlike 4.0 International

*/


/**
 * Class responsible for checking if a domain is registered
 *
 * @author  Helge Sverre <email@helgesverre.com>
 *
 * @param boolean $error_reporting Set if the function should display errors or suppress them, default is false
 * @return boolean true means the domain is NOT registered
 */
class wdcDomainAvailability {

	private  $error_reporting;


	public function __construct($debug = false) {
		if ( $debug ) {
			error_reporting(E_ALL);
			$error_reporting = true;
		} else {
			error_reporting(0);
			$error_reporting = false;
		}

	}


	/**
	 * This function checks if the supplied domain name is registered
	 *
	 * @author  Helge Sverre <email@helgesverre.com>
	 *
	 * @param string $domain The domain that will be checked for registration.
	 * @param boolean $error_reporting Set if the function should display errors or suppress them, default is TRUE
	 * @return boolean true means the domain is NOT registered
	 */
	public function is_available($domain) {

		// make the domain lowercase
		$domain = strtolower($domain);

		// Set the timeout (in seconds) for the socket open function.
		$timeout = 10;



		/**
		 * This array contains the list of WHOIS servers and the "domain not found" string
		 * to be searched for to check if the domain is available for registration.
		 *
		 * NOTE: The "domain not found" string may change at any time for any reason.
		 */

			$file_dir = plugin_dir_path( __FILE__ ).'whois.json';
			$file_dir_open = fopen($file_dir,'r');
			$file = fread($file_dir_open, filesize($file_dir));
			fclose($file_dir_open);


		$whois_arr = json_decode($file,true);

		// gethostbyname returns the same string if it cant find the domain,
		// we do a further check to see if it is a false positive
		//if (gethostbyname($domain) == $domain) {
			// get the TLD of the domain
			$tld = $this->get_tld($domain);

			// If an entry for the TLD exists in the whois array
			if (isset($whois_arr[$tld][0])) {
				// set the hostname for the whois server
				$whois_server = $whois_arr[$tld][0];

				// set the "domain not found" string
				$bad_string = $whois_arr[$tld][1];
			} else {
				// TODO: REFACTOR THIS
				// TLD is not in the whois array, die
				//throw new Exception("WHOIS server not found for that TLD");

				//return 'not found';
    			return json_encode(array('status'=>2));


			}

			$status = $this->checkDomainNameAvailabilty($domain,$whois_server,$bad_string,null);

			return $status;
		//} else {
			// not available
		//	return FALSE;
		//}

}


	/**
	 * Extracts the TLD from a domain, supports URLS with "www." at the beginning.
	 *
	 * @author  Helge Sverre <email@helgesverre.com>
	 *
	 * @param string $domain The domain that will get it's TLD extracted
	 * @return string The TLD for $domain
	 */

	public function get_tld ($domain) {
		$split = explode('.', $domain,2);

		if(count($split) === 0) {
			//throw new Exception('Invalid domain extension');
			return false;
		}
		//return end($split);
		$tld = strtolower(array_pop($split));
		return $tld;

	}

	public function checkDomainNameAvailabilty($domain_name, $whois_server, $find_text){

		$port = 43;

    list($dom, $ext) = explode('.', $domain_name, 2);
		if($ext == 'my' || $ext == 'com.my' || $ext == 'net.my' || $ext == 'org.my' || $ext == 'edu.my' || $ext == 'gov.my' || $ext == 'name.my' ){

			$check = file_get_contents("http://whois.mynic.my/?type=domain&domain_extension=.name.my&searchtxt=$domain_name");

			if (preg_match('/does not exist in database/',$check)){

    			return json_encode(array('status'=>1));


			}else{

    			return json_encode(array('status'=>0));

			}

		}

	if($ext == 'ch'){
		$port = 4343;
	}

	$transient = get_transient( 'wdc_'.$domain_name );

		  // Yep!  Just return it and we're done.
		  if( ! empty( $transient ) ) {

		    // The function will return here every time after the first time it is run, until the transient expires.
		    $response = $transient;

		  // Nope!  We gotta make a call.
		  } else {
		    $con = fsockopen($whois_server, $port, $errno, $errstr, 3);
		    if (!$con) return file_get_contents("http://api.asdqwe.net/api/whois.php?d=$domain_name");

		    // Send the requested domain name
		    fputs($con, $domain_name."\r\n");

		    // Read and store the server response
		    //$response = "";
		    while(!feof($con))
		        $response .= fgets($con,128);

		    // Close the connection
		    fclose($con);
		    set_transient(  'wdc_'.$domain_name, $response, 1 * DAY_IN_SECONDS );
 	}
    // Check the Whois server response
		if ( ($ext == 'bo' || $ext == 'com.bo' || $ext == 'org.bo' || $ext == 'net.bo' || $ext == 'tv.bo' || $ext == 'web.bo') ){
			 if( !strpos($response, $find_text) ){
    		return json_encode(array('status'=>1));
    }else{
				return json_encode(array('status'=>0));
			}
		}
		
    if (strpos($response, $find_text) !== false){
    	return json_encode(array('status'=>1));
    }else{
    	return json_encode(array('status'=>0));
		}

	}

}
