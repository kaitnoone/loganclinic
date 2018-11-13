<?php
/**
 * The default page template.
 *
 * Used when a default template individual page is queried.
 */
get_header();
?>
<div class="hero--interior" style="background-image: url('<?php the_field("interior_hero_image");?>')"></div>
<?php if (get_field('sidebar_headline')): ?>
	<div class="container interior two-col">
<?php else: ?>
	<div class="container interior one-col">
<?php endif;?>

	<div class="content">
		<h1><?php the_title();?></h1>
		<?php if (have_posts()): while (have_posts()): the_post();?>																																																		<?php the_content();
    endwhile;endif;?>

		<?php if (get_field('0-18_years')): ?>
			<div class="membership-levels membership-levels--interior">
				<h2 class="headline">Pricing</h2>
				<div class="table">
					<table class="membership-levels--info" cellpadding="0" cellspacing="0">
						<thead>
							<tr>
								<th>Age</th>
								<th>Cost / Month</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>0-18 Years</td>
								<td><?php the_field('0-18_years');?></td>
							</tr>
							<tr>
								<td>19-44 Years</td>
								<td><?php the_field('19-44_years');?></td>
							</tr>
							<tr>
								<td>45-64 Years</td>
								<td><?php the_field('45-64_years');?></td>
							</tr>
							<tr>
								<td>65+ Years</td>
								<td><?php the_field('65_years');?></td>
							</tr>
						</tbody>
					</table>
					<div class="disclaimer">
						<?php the_field('membership_disclaimer');?>
					</div>
					<div class="more-info">
						<?php the_field('more_info');?>
					</div>
				</div>
			</div>
		<?php endif;?>

		<?php if (get_field('intro_text')): ?>
			<div class="providers">
				<h2>About our Providers</h2>
				<div class="intro"><?php the_field('intro_text');?></div>
				<div class="provider">
					<div class="image"><img src="<?php the_field('staff_1_photo');?>" alt="<?php the_field('staff_1_name');?>" /></div>
					<div class="info">
						<p><strong><?php the_field('staff_1_name');?></strong></p>
						<p><?php the_field('staff_1_bio');?></p>
					</div>
				</div>
				<div class="provider">
					<div class="image"><img src="<?php the_field('staff_2_photo');?>" alt="<?php the_field('staff_2_name');?>" /></div>
					<div class="info">
						<p><strong><?php the_field('staff_2_name');?></strong></p>
						<p><?php the_field('staff_2_bio');?></p>
					</div>
				</div>
			</div>
		<?php endif;?>
	</div>
	<aside class="sidebar">
		<div class="sidebar--overlay"></div>
		<div class="sidebar--title"><?php the_field('sidebar_headline');?></div>
		<div class="sidebar--content"><?php the_field('sidebar_content');?></div>
	</aside>
</div>


<?php
get_footer();
?>
