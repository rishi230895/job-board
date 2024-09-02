<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Board</title>
    <?php wp_head(); ?> 
  </head>
  <body>
    <!-- Header start  -->

  <?php 
  $logo = get_field('logo','option');
  $home_url = get_site_url();
  ?>
    <header class="container cstm-header-container">
      <div class="cstm-header inner-container">
        <?php 

          if(!empty( $logo)){?>
            <a href="<?php echo $home_url; ?>" class="logo">
              <img src="<?php echo  $logo; ?>" alt="APRN Jobs Logo" />
            </a>
          <?php } 
          
          if( have_rows('sign_up_buttons','option') ){ ?>
              <nav>
                  <?php while( have_rows('sign_up_buttons','option') ) {
                  the_row();
             
                  $text = get_sub_field('text'); 
                  $url = get_sub_field('url');

                  if(!empty($text)){?>

                    <a href="<?php echo $url; ?>" class="primary-btn button"><?php echo $text; ?></a>

                  <?php } }?>
              </nav>
          <?php } ?>
        
      </div>
    </header>