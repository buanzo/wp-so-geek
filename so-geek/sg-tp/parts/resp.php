				<div class="col-xl-9 col-lg-8 px-0 ps-lg-4 ps-xl-5 col_content">
					<div class="sg_main_content" id="sg_main_content">

							
							<?php if ( have_posts() ): ?>
								<?php while ( have_posts() ): ?>
									<?php the_post(); ?>
									
									<div class="sg_shadow sg_content_mod sg_content_blue">
										<div class="sg_content_header _mx-4">
											<h2 class="sg_content_title _w-auto _mx-7 _px-2">
												<span class="linea izq"></span>
												<span class="texto"><?php the_title() ?></span>
												<span class="linea der"></span>
											</h2>
											<div class="sg_content_metadata">
												<div class="minicont">
													<?php if( true == sg_get_option( 'sg_article_show_cat' , true ) ): ?>
														<span class="">Cat : My Notes</span>
													<?php endif; ?>

													<?php if( true == sg_get_option( 'sg_article_show_date' , true ) ): ?>
														<span class="">Date : 10/12/2021</span>
													<?php endif; ?>

													<?php if( true == sg_get_option( 'sg_article_show_author' , true ) ): ?>
														<span class="">By : @noobmaster</span>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="sg_mod_content">
											<div class="sg_mod_image">
												<?php if( true == sg_get_option( 'sg_article_show_thumbnail' , true ) ): ?>
													<?php if ( has_post_thumbnail() ) : ?>
														<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
															<?php the_post_thumbnail(); ?>
														</a>
													<?php endif; ?>
												<?php endif; ?>
											</div>
											<div class="sg_mod_text">
												<?php the_content( false ) ?>
											</div>
											<?php if( true == sg_get_option( 'sg_article_button_more' , true ) ): ?>
												<a class="sg_button_more" href="<?php the_permalink() ?>"><?php echo sg_get_option( 'sg_more_text' ) ?></a>
											<?php endif; ?>
										</div>
									</div>

								<?php endwhile; ?>
							<?php else: ?>

							<?php endif; ?>
							<?php wp_reset_postdata(); ?>




					</div>
				</div>




