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

    <header class="container cstm-header-container">
      <div class="cstm-header inner-container">
        <a href="#" class="logo">
          <img src="<?php echo get_stylesheet_directory_uri(). '/assets/images/Logo-Final.png' ?>" alt="APRN Jobs Logo" />
          <!-- <h1>APRN<span>Jobs</span>.org</h1> -->
        </a>
        <nav>
          <a href="#" class="primary-btn button">User Sign-Up</a>
          <a href="#" class="primary-btn button">Job Poster Sign-Up</a>
          <a href="#" class="primary-btn button">Log In</a>
        </nav>
      </div>
    </header>