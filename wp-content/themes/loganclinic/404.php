<?php
/**
 * The 404 Not Found template.
 *
 * Used when WordPress encounters an unknown URL.
 */
get_header();
?>

  <section class="error-404">
    <p>This page wasn't found. Let's go back <a href="/">home</a> and try again!</p>
    <p><a href="/" class="button">Return Home</a></p>

  </section>

<?php
get_footer();
