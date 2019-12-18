<?php
$args = pergo_single_portfolio_info_shortcode_vc(true);
print_r($args);
$atts = shortcode_atts( $args, $atts);
extract($atts);
echo $template;
get_template_part($template);
?>