<?php
add_action( 'vc_load_default_templates_action','pergo_startup_2_template_for_vc' ); // Hook in
function pergo_startup_2_template_for_vc() {
    $data               = array(); // Create new array
    $data['name']       = __( 'Template: 17 - startup-2', 'pergo' ); // Assign name for your custom template
    $data['weight']     = 0; 
    $data['image_path'] = '';
    $data['custom_class'] = ''; // CSS class name
    $data['content']    = <<<CONTENT
    [vc_section][vc_row][vc_column][pergo_hero_startup2 params="%5B%7B%22icon%22%3A%22fa%20fa-angle-double-right%22%2C%22button_text%22%3A%22Find%20Out%20More%22%2C%22button_url%22%3A%22%23content-7-title%22%2C%22button_target%22%3A%22_self%22%2C%22button_size%22%3A%22btn-md%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_row][vc_column][vc_column_text]
[/vc_column_text][/vc_column][/vc_row][vc_section el_id="about"][vc_row][vc_column][pergo_section_title title=""][vc_row_inner][vc_column_inner width="1/3"][pergo_service_box icon="flaticon-idea" title="Concept &amp; Idea" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp" animation_delay="300"][pergo_service_box icon="flaticon-settings-2" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp" animation_delay="300"][/vc_column_inner][vc_column_inner width="1/3"][pergo_service_box icon="flaticon-share-2" title="Keyword Research" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp" animation_delay="300"][pergo_service_box icon="flaticon-price-tag" title="Brand Identity" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp" animation_delay="500"][/vc_column_inner][vc_column_inner width="1/3"][pergo_service_box icon="flaticon-fingerprint" title="User Experience" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp" animation_delay="400"][pergo_service_box icon="flaticon-worldwide" title="SEO &amp; SMM Services" subtitle="Semper lacus cursus porta, feugiat primis in ultrice ligula risus tempus auctor cubilia congue ipsum ipsum mauris lectus laoreet" css_animation="fadeInUp" animation_delay="600"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-0"][vc_row][vc_column][pergo_section_title title="Beautifully handcrafted HTML5 landing page template for your business" subtitle="Donec enim ipsum porta justo integer at velna vitae auctor integer congue magna at risus auctor purus unt pretium ligula rutrum sapien ultrice eros dolor"][/vc_column][/vc_row][vc_row][vc_column][pergo_watch_video image="http://jthemes.org/wp/pergo/files/images/banner-3-img.png"][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-0" bg_class="bg-dark" el_id="content-7-title"][vc_row][vc_column][pergo_what_we_do_best]An enim nullam tempor sapien gravida enim ipsum blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus ligula congue vitae auctor erat[/pergo_what_we_do_best][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-0" bg_class="bg-tra" el_id="content-7-boxes"][vc_row][vc_column width="1/3"][pergo_card_box css_animation="fadeInUp" animation_delay="800"]An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae purus primis ipsum congue magna odio augue pretium ligula rutrum nullam[/pergo_card_box][/vc_column][vc_column width="1/3"][pergo_card_box image="http://jthemes.org/wp/pergo/files/images/image-04.jpg" title="Professional Design" css_animation="fadeInUp" animation_delay="900"]An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae purus primis ipsum congue magna odio augue pretium ligula rutrum nullam[/pergo_card_box][/vc_column][vc_column width="1/3"][pergo_card_box image="http://jthemes.org/wp/pergo/files/images/image-05.jpg" title="Free Consultation" css_animation="fadeInUp" animation_delay="1000"]An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae purus primis ipsum congue magna odio augue pretium ligula rutrum nullam[/pergo_card_box][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-0" el_id="content-70-title"][vc_row][vc_column][pergo_digital_solutions display="counter" counter_group="%5B%7B%22title%22%3A%22Happy%20Clients%22%2C%22count%22%3A%221154%22%7D%2C%7B%22title%22%3A%22Tickets%20Closed%22%2C%22count%22%3A%22409%22%7D%5D"]An enim nullam tempor sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor integer congue magna at pretium purus pretium ligula rutrum luctus risus ultrice luctus ligula congue vitae auctor eros erat magna morbi pretium neque[/pergo_digital_solutions][/vc_column][/vc_row][/vc_section][vc_section full_width="container-wide"][vc_row full_width="stretch_row_content_no_spaces"][vc_column][pergo_digital_strategy strategy_list="%5B%7B%22title%22%3A%22Fully+Responsive+Design%22%7D%2C%7B%22title%22%3A%22Bootstrap+4.0+Based%22%7D%2C%7B%22title%22%3A%22Google+Analytics+Ready%22%7D%2C%7B%22title%22%3A%22Cross+Browser+Compatability%22%7D%2C%7B%22title%22%3A%22Developer+Friendly+Commented+Code%22%7D%2C%7B%22title%22%3A%22and+much+more%5Cu2026%22%7D%5D"]An enim tempor sapien gravida donec ipsum blandit porta justo integer odio velna vitae auctor integer congue magna pretium purus pretium ligula rutrum luctus risus ultrice luctus[/pergo_digital_strategy][/vc_column][/vc_row][/vc_section][vc_section padding_class="wide-70" bg_class="bg-lightgrey" el_id="clients"][vc_row][vc_column][pergo_section_title title="Trusted by thousands of companies" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius augue luctus donec volutpat sapien"][pergo_our_clients params="%5B%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fpergo%2Ffiles%2Fimages%2Fbrand-21.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fpergo%2Ffiles%2Fimages%2Fbrand-7.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fpergo%2Ffiles%2Fimages%2Fbrand-23.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fpergo%2Ffiles%2Fimages%2Fbrand-21.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fpergo%2Ffiles%2Fimages%2Fbrand-29.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fpergo%2Ffiles%2Fimages%2Fbrand-26.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fpergo%2Ffiles%2Fimages%2Fbrand-24.png%22%7D%2C%7B%22title%22%3A%22Brand%20image%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fpergo%2Ffiles%2Fimages%2Fbrand-25.png%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section el_id="team"][vc_row][vc_column][pergo_section_title title="Our Creative Team" subtitle="Our team and staff is presented here, we do what we love. Who we are, what we do and our social networks, connect with us." tag="h2:h2-xs"][pergo_team_template order="desc" orderby="date"][/vc_column][/vc_row][/vc_section][vc_section parallax="content-moving" parallax_image="http://jthemes.org/wp/pergo/files/images/reviews.jpg" padding_class="wide-100" bg_class="bg-dark" parallax_image_repeat="" parallax_image_position="50% 0" parallax_image_attachment="inherit" el_id="testimonials"][vc_row][vc_column][pergo_testimonials params="%5B%7B%22name%22%3A%22pebz13%22%2C%22title%22%3A%22Programmer%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fpergo%2Fstartup%2Fwp-content%2Fthemes%2Fpergo%2Fimages%2Freview-author-1.jpg%22%2C%22desc%22%3A%22%5C%22%20Etiam%20sapien%20sem%20at%20sagittis%20congue%20augue%20massa%20varius%20sodales%20sapien%20undo%20tempus%20dolor%20%20%20%20%20%20%20%20egestas%20magna%20suscipit%20magna%20tempus%20aliquet%20porta%20sodales%20augue%20suscipit%20luctus%20neque%20%5C%22%22%7D%2C%7B%22name%22%3A%22Evelyn%20Martinez%22%2C%22title%22%3A%22Housewife%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fpergo%2Fstartup%2Fwp-content%2Fthemes%2Fpergo%2Fimages%2Freview-author-2.jpg%22%2C%22desc%22%3A%22%5C%22%20Etiam%20sapien%20sem%20at%20sagittis%20congue%20augue%20massa%20varius%20sodales%20sapien%20undo%20tempus%20dolor%20%20%20%20%20%20%20%20egestas%20magna%20suscipit%20magna%20tempus%20aliquet%20porta%20sodales%20augue%20suscipit%20luctus%20neque%20%5C%22%22%7D%2C%7B%22name%22%3A%22Robert%20Peterson%22%2C%22title%22%3A%22SEO%20Manager%22%2C%22image%22%3A%22http%3A%2F%2Fjthemes.org%2Fwp%2Fpergo%2Fstartup%2Fwp-content%2Fthemes%2Fpergo%2Fimages%2Freview-author-3.jpg%22%2C%22desc%22%3A%22%5C%22%20Etiam%20sapien%20sem%20at%20sagittis%20congue%20augue%20massa%20varius%20sodales%20sapien%20undo%20tempus%20dolor%20%20%20%20%20%20%20%20egestas%20magna%20suscipit%20magna%20tempus%20aliquet%20porta%20sodales%20augue%20suscipit%20luctus%20neque%20%5C%22%22%7D%5D"][/vc_column][/vc_row][/vc_section][vc_section el_id="blog"][vc_row][vc_column][pergo_section_title title="Our Stories &amp; Latest News" tag="h2:h2-xs"][pergo_posts img_size="pergo-400x400-crop" tax_term=""][/vc_column][/vc_row][/vc_section]
CONTENT;
  
    vc_add_default_templates( $data );   
}

