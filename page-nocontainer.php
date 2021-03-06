<?php
/**
* Template Name: No Container Page
*/

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="page-fullwidth.php" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
						<?php get_template_part("static/static-title"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="content">
		<div class="fullwidth-content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
			<?php get_template_part("loop/loop-page"); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>