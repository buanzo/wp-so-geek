<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width-device-width, initial-scale-1.0" />
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!--
{property}{sides}-{breakpoint}-{size}
-->

<div class="container sg_container">
	<div class="row no-gutters">
		<div class="col-12 px-0">
			<div class="al-100 sg_header sg_shadow">
				<p>Header</p>
			</div>
		</div>
	</div>


	<div class="row no-gutters">
		<div class="col-12">
			<div class="row sg_general_content">
				<div class="col-xl-3 col-lg-4 px-0">
					<div class="sg_main_menu sg_shadow" id="sg_main_menu">
						<h3 class="sg_mod_title">MainMenu</h3>
						<?php
						wp_nav_menu( array(
							'menu' => 'Main Menu',
							'menu_class' => 'sg_menu_list',
							'walker' => new SG_Walker_Nav_Menu(),
						) );
						?>
					</div>
				</div>
				<div class="col-xl-9 col-lg-8 px-0 ps-lg-4 ps-xl-5 col_content">
					<div class="t-aaa sg_main_content" id="sg_main_content">
						<div class="al-300 sg_shadow sg_content_mod sg_content_blue">
							<div class="sg_content_header">
								<h2 class="sg_content_title">My faceplants expl&aacute;ined one by one</h2>
								<div class="sg_content_metadata">
									<span class="">Cat : My Notes</span>
									<span class="">Date : 10/12/2021</span>
									<span class="">By : @noobmaster</span>
								</div>
							</div>
							<div class="sg_mod_content">
								<div class="sg_mod_image">
									<img class="" src="" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



</div>

<?php wp_footer(); ?>
</body>
</html>