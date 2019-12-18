<?php
$args = pergo_testimonials_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$car_attr = apply_filters( 'pergo_carousel_attr', '', $atts );

if( !empty($paramsArr) && ($style == '1column')): ?>
	<div class="row" id="reviews-2">
		<div class="col-lg-12 testimonials text-center">
			<!-- TRANSPARENT QUOTE ICON -->
			<div class="quote-icon"></div>

			<!-- TESTIMONIALS CONTENT -->
			<div class="flexslider purple-nav">											
				<ul class="slides">

					<?php foreach ($paramsArr as $key => $value) : extract($value); ?>
						<!-- TESTIMONIAL #1 -->
						<li class="review-2">
							<!-- Testimonial Text -->
							<div class="review-txt">
								<?php echo wpautop($desc); ?>
							</div>	
							<!-- Testimonial Author Avatar -->
							<img src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($name) ?>">
							<!-- Testimonial Author -->
							<div class="review-author">
								<p class="testimonial-autor"><?php echo esc_attr($name) ?></p>	
								<span class="rose-color"><?php echo esc_attr($title) ?></span>									
							</div>														
						</li>
					<?php endforeach; ?>					

				</ul>
			</div><!-- .flexslider -->

		</div>
 	</div>	<!-- End row -->
<?php endif; ?>	


<?php if( !empty($paramsArr) && ($style == '3column')): ?> 
<div id="reviews-1" class="reviews-section">
	<!-- TESTIMONIALS CAROUSEL -->
	<div class="reviews-carousel">
		<div class="center slider"<?php echo $car_attr; ?>>

			<?php foreach ($paramsArr as $key => $value) : extract($value); ?>
			<!-- TESTIMONIAL #1 -->
			<div class="review-1">
				
				<!-- Testimonial Text -->
				<div class="review-txt">
					<?php echo wpautop($desc); ?>
				</div>

				<!-- Testimonial Author Avatar -->
				<div class="testimonial-avatar text-center">
					<img src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($name) ?>">
					<p class="testimonial-autor"><?php echo esc_attr($name) ?></p>
					<span><?php echo esc_attr($title) ?></span>
				</div>
																				
			</div>	<!-- END TESTIMONIAL #1 -->
			<?php endforeach; ?>

									
		</div>
	</div>	<!-- TESTIMONIALS CAROUSEL -->
</div>
<?php endif; ?>	