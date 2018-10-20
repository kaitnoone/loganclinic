<?php
/**
 * The default page template.
 *
 * Used when a default template individual page is queried.
 */
get_header();
?>
<?php if (get_field('sidebar_headline')): ?>
	<div class="container interior two-col">
<?php else: ?>
	<div class="container interior one-col">
<?php endif;?>

		<div class="content">
			<?php if (have_posts()): while (have_posts()): the_post();?>
																<h1><?php the_title();?></h1>
																<?php the_content();
    endwhile;endif;?>
		</div>

		<aside class="sidebar">
			<div class="sidebar--title"><?php the_field('sidebar_headline');?></div>
			<div class="sidebar--content"><?php the_field('sidebar_content');?></div>
		</aside>
</div>


<?php
get_footer();
?>
