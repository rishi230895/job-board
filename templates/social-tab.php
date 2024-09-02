<!--  Social Media Section Start  -->

<?php 

if( have_rows('social_media','option') ){ ?>

    <div class="social-media-tab ">

        <?php while( have_rows('social_media','option') ) {
             the_row();
             
             $social_media_icon = get_sub_field('social_media_icon'); 
             $social_medial_alt_text = get_sub_field('social_medial_alt_text');
             $social_media_url = get_sub_field('social_media_url') ? get_sub_field('social_media_url'): "javascript:void(0)";
             if(!empty($social_media_icon)){?>
                <a href="<?php echo $social_media_url; ?>"><img src="<?php echo $social_media_icon; ?>" alt="<?php echo $social_medial_alt_text; ?>" width="24" /></a>
        
        <?php } }?>

    </div>

<?php } ?>
<!-- Social Media Section Start  -->
