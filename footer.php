<!-- footer section  -->
<?php wp_footer(); ?>
<!-- <footer class="container">
    <div class="inner-container cstm-footer">
        <div class="social-media align">
            <a href="#"><img src="</?php echo get_stylesheet_directory_uri(). '/assets/images/facebbok.png' ?>" alt="Facebook" width="24" /></a>
            <a href="#"><img src="</?php echo get_stylesheet_directory_uri(). '/assets/images/instagram.png' ?>" alt="Instagram" width="24" /></a>
            <a href="#"><img src="</?php echo get_stylesheet_directory_uri(). '/assets/images/youtube.png' ?>" alt="YouTube" width="24" /></a>
            <a href="#"><img src="</?php echo get_stylesheet_directory_uri(). '/assets/images/twitch.png' ?>" alt="Twitch" width="24" /></a>
            <a href="#"><img src="</?php echo get_stylesheet_directory_uri(). '/assets/images/tiktok.png' ?>" alt="TikTok" width="24" /></a>
            <a href="#"><img src="</?php echo get_stylesheet_directory_uri(). '/assets/images/twitter-x.png' ?>" alt="X" width="24" /></a>
        </div>
        <div class="footer-links align terms">
            <a href="#">Contact</a>  
         <a href="#">Terms & Conditions</a> 
            <a href="#">Cookies/User</a>
        </div>
        <p class="align copyright">&copy; Copyright APRNJobs.org - All Rights Reserved 2024</p>
    </div>
</footer> -->
<?php 
$copy_right_text = get_field('copy_right_text', 'option');

?>
<footer class="container">
    <div class="inner-container cstm-footer">
        <div class="footer-links align terms">

            <!-- Dymanic Footer Menu Start   -->
                <?php
                    wp_nav_menu(array(
                        'menu' => 'footer-menu',
                        'theme_location' => 'secondary-menu',
                        'container' => false,                )
                    );
                ?>
            <!-- Dymanic Footer Menu Start   -->

        </div>
        
        <?php if(!empty($copy_right_text)){ ?>
            <p class="align copyright"><?php echo $copy_right_text; ?></p>
        <?php } ?>
    </div>
</footer>

</body>
</html> 