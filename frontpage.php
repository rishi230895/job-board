<?php

/* template name: Front Page   */ 


get_header();?>

<!-- hero section start  -->
<main class="container">
<?php 
$division_type_heading = get_field('division_type_heading');

?>
    <div class="inner-container">
        <div>
            
            <?php if(!empty($division_type_heading)){?>
                <h2 class="job-cate-text"><?php echo $division_type_heading; ?></h2>
            <?php } 

            if( have_rows('division_type') ){ ?>
                <div class="job-categories inner-container">

                    <?php while( have_rows('division_type') ) {
                    the_row();

                        $text = get_sub_field('text'); 
                        $url = get_sub_field('url')? get_sub_field('url') :"javascript:void(0)";

                        if(!empty($text)){?>

                            <a href="<?php echo $url; ?>"><span><?php echo $text; ?></span></a>

                        <?php } }?>
                </div>
            <?php } ?>

        </div>
        <?php  get_template_part('templates/social-tab'); ?>
  
    </div>

 
  
</main>


<?php
get_footer();