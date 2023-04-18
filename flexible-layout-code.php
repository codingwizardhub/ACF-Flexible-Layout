			<?php if(have_rows('services_flexible_layout')):?>
				<?php while(have_rows('services_flexible_layout')): the_row();?>
				
				<?php
				if(get_row_layout() == 'content_with_left_image'): ?>
				<div class="container-fluid services-container">
					<div class="container">
						<section class="services-left-block">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-4 image-left">
											<?php $left_img = get_sub_field('image');?>
											<img class="image-left-block" src="<?php echo esc_url($left_img['url']);?>" alt="<?php echo esc_attr($left_img['alt']);?>">
										</div>
										<div class="col-md-8 content-left">
											<h1><?php the_sub_field('heading');?></h1>
											<p><?php the_sub_field('text');?></p>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				
				<?php
				elseif(get_row_layout() == 'content_with_right_image'): ?>
				<div class="container-fluid services-container">
					<div class="container">
						<section class="services-right-block">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-8 content-right">
											<h1><?php the_sub_field('heading');?></h1>
											<p><?php the_sub_field('text');?></p>
										</div>
										<div class="col-md-4 image-right">
											<?php $right_img = get_sub_field('image');?>
											<img class="image-right-block" src="<?php echo esc_url($right_img['url']);?>" alt="<?php echo esc_attr($right_img['alt']);?>">
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				
				<?php
				elseif(get_row_layout() == 'content_without_image'): ?>
				<div class="container-fluid services-container-text">
					<div class="container">
						<section class="">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<p><?php the_sub_field('text');?></p>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				
					<?php endif;?>
				<?php endwhile;?>
			<?php endif;?>