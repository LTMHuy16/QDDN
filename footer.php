<?php 
	$footer_company = get_field('footer_company', 'options');
	$footer_features = get_field('footer_features', 'options');
	$footer_other_links = get_field('footer_other_links', 'options');
	$footer_logo_content = get_field('footer_logo_content', 'options');
	$footer_socials = get_field('logo_socials', 'options');
	$footer_right_text = get_field('footer_right_text', 'options');
?>

<footer class="footer">
    <div class="wrapper">
        <div class="row row-medium-flex">

			<!-- Company Col -->
            <div class="col col-medium-6 col-wide-3">

				<?php if(!empty($footer_company)): ?>

					<h4 class="footer__title">COMPANY</h4>

					<ul class="footer__list">

						<?php foreach($footer_company as $item): ?>

							<?php 
								$text = $item['text'];
								$link = $item['link'];
							?>
							
							<?php if(!empty($text) && !empty($link)): ?>

								<li class="footer__item">
									<a href="<?php echo esc_url($link)  ?>" class="footer__link">
										<?php echo esc_html($text)  ?>
									</a>
								</li>

							<?php endif; ?>

						<?php endforeach; ?>

					</ul>

				<?php endif; ?>

            </div>
			<!-- End Company Col -->


			<!-- Features Col -->
			<div class="col col-medium-6 col-wide-3">

				<?php if(!empty($footer_features)): ?>

					<h4 class="footer__title">Features</h4>

					<ul class="footer__list">

						<?php foreach($footer_features as $item): ?>

							<?php 
								$text = $item['text'];
								$link = $item['link'];
							?>
							
							<?php if(!empty($text) && !empty($link)): ?>

								<li class="footer__item">
									<a href="<?php echo esc_url($link)  ?>" class="footer__link">
										<?php echo esc_html($text)  ?>
									</a>
								</li>

							<?php endif; ?>

						<?php endforeach; ?>

					</ul>

				<?php endif; ?>

			</div>
			<!-- End Features Col -->


			<!-- Other Links Col -->
			<div class="col col-medium-6 col-wide-3">

				<?php if(!empty($footer_other_links)): ?>

					<h4 class="footer__title">Other Links</h4>

					<ul class="footer__list">

						<?php foreach($footer_other_links as $item): ?>

							<?php 
								$text = $item['text'];
								$link = $item['link'];
							?>
							
							<?php if(!empty($text) && !empty($link)): ?>

								<li class="footer__item">
									<a href="<?php echo esc_url($link)  ?>" class="footer__link">
										<?php echo esc_html($text)  ?>
									</a>
								</li>

							<?php endif; ?>

						<?php endforeach; ?>

					</ul>

				<?php endif; ?>

				</div>
			<!-- End Other Links Col -->

			
			<!-- Footer Logo Col -->
            <div class="col col-medium-6 col-wide-3">

				<?php if(!empty($footer_logo_content)): ?>

					<?php 
						$logo_img = $footer_logo_content['image'];
						$logo_link = $footer_logo_content['link'];
						$desc = $footer_logo_content['footer_desciption'];

						$logo_img['alt'] === "" ? $logo_img['alt'] = "QDN" : "";
					?>
					<?php ?>

					<?php if(!empty($logo_img) && !empty($logo_link)): ?>

						<a href="<?php echo esc_url($logo_link); ?>" class="footer__logo">

							<picture>

								<img src="<?php echo esc_url($logo_img['url']); ?>" alt="<?php echo esc_attr($logo_img['alt']); ?>" />

							</picture>

						</a>

					<?php endif ?>

					<?php if(!empty($desc)): ?>
						<p class="footer__desc">
							<?php echo esc_html($desc); ?>
						</p>
					<?php endif ?>

				<?php endif ?>

				<!-- Socials -->
				<?php if(!empty($footer_socials)): ?>

					<ul class="footer__socials">
					
						<?php foreach($footer_socials as $item): ?>
							<?php 
								$social_type = $item['icon_type'];
								$social_link = $item['social_link'];
							?>
							
							<?php if(!empty($social_type) && !empty($social_link)): ?>

								<li class="footer__social-item">
									<a href="<?php echo esc_url($social_link) ?>" class="footer__social-link">
										<span>
											<i class="fa-brands <?php echo esc_attr($social_type) ?> fa-xl"></i>
										</span>
									</a>
								</li>

							<?php endif; ?>

							
						<?php endforeach; ?>

					</ul>

				<?php endif; ?>
				<!-- End Socials -->

            </div>
			<!-- End Footer Logo Col -->

        </div>
    </div>
</footer>

<!-- FOOTER RIGHT SECTION -->
<?php if(!empty($footer_right_text)): ?>

	<div class="footer-right">
		<div class="wrapper">
			<p class="footer-right__content">

				<?php echo esc_html($footer_right_text) ?>

			</p>
		</div>
	</div>

<?php endif; ?>

<!-- END FOOTER RIGHT SECTION -->


<div class="overlay"></div>


<?php wp_footer(); ?>

</body>

</html>