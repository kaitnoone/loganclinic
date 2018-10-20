<?php // Close main ?>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer--logo">
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/logo.png" alt="Logan clinic logo" />
        </div>
        <div id="footer-area1" class="footer--widgets">
            <?php
if (is_active_sidebar('footer-widget')) {
    dynamic_sidebar('footer-widget');
}
?>
        </div>
        <div class="footer--social"><a href="https://www.facebook.com/Logan-Medical-Clinic-149921599044056/" class="footer--social_facebook"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewbox="0 0 24 24"><path d="M0 0v24h24v-24h-24zm16 7h-1.923c-.616 0-1.077.252-1.077.889v1.111h3l-.239 3h-2.761v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"/></svg></a>
            <!--a href="#" class="footer--social_twitter"><svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55"><path d="M0 0v24h24v-24h-24zm18.862 9.237c.208 4.617-3.235 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.079-4.03 3.198-4.03.944 0 1.797.398 2.396 1.037.748-.147 1.451-.42 2.085-.796-.245.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.44.656-.997 1.234-1.638 1.697z"/></svg></a-->
        </div>
    </div>
</footer>

<?php wp_footer();?>
</body>
</html>
