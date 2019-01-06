<?php
/**
 * The front page template.
 *
 * Used when a single post is queried.
 */
get_header();
?>

<div class="hero--home" style="background-image: url('<?php the_field('home_hero_image');?>' )">
    <h1 class="hero--home_headline"><span>
            <?php the_field('home_hero_headline');?></span></h1>
</div>

<div class="subscribe">
    <div class="container">
        <div class="form--teaser">
            <img src="/wp-content/themes/loganclinic/assets/img/email-icon.png" alt="email icon" />
            <p>Get our information delivered straight to your inbox</p>
        </div>

        <div class="form--wrap">
            <?php echo do_shortcode('[mc4wp_form id="94"]'); ?>
        </div>
    </div>
</div>

<div class="cta">
    <div class="container">
        <h2 class="cta--title">
            <?php the_field('cta_headline');?>
        </h2>
        <div class="cta--content">
            <?php the_field('cta_content');?>
        </div>
        <a class="button" href="/about">Learn More</a>

    </div>
</div>

<div class="offset-container" style="background-image: url('<?php the_field('offset-background_image');?>')">
    <div class="container">
        <div class="content">
            <h3>
                <?php the_field('offset-headline');?>
            </h3>
            <?php the_field('offset-content');?>
        </div>
    </div>
</div>

<div class="video--full-width">
    <div class="container">
        <div class="wrap">
            <h3>Patient Care</h3>
            <div class="video">
                <iframe width="100%" height="500" src="<?php the_field('video_embed_link');?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="membership-levels">
    <div class="container">
        <h3 class="headline">Monthly Membership</h3>
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
                        <td>
                            <?php the_field('0-18_years');?>
                        </td>
                    </tr>
                    <tr>
                        <td>19-44 Years</td>
                        <td>
                            <?php the_field('19-44_years');?>
                        </td>
                    </tr>
                    <tr>
                        <td>45-64 Years</td>
                        <td>
                            <?php the_field('45-64_years');?>
                        </td>
                    </tr>
                    <tr>
                        <td>65+ Years</td>
                        <td>
                            <?php the_field('65_years');?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="disclaimer">
                <?php the_field('membership_disclaimer');?>
            </div>
        </div>
    </div>
</div>


<?php
if (have_posts()):

    while (have_posts()): the_post();

    endwhile;

endif;

get_footer();
?>