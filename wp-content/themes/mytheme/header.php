<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory") ;?>/style.css" />
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
          crossorigin="anonymous">
    <?php wp_head() ;?>
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: white; border-bottom: 1px solid rgb(240, 240, 240)">
      <div class="container">
        <a class="navbar-brand" href="<?php home_url("/"); ?>">Anthony Benkhebbab</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
<!--        <div class="collapse navbar-collapse" id="navbarResponsive">-->
<!--          <ul class="navbar-nav ml-auto">-->
<!--            <li class="nav-item active">-->
<!--              <a class="nav-link" href="/">Home</a>-->
<!--            </li>-->
<!--          </ul>-->
<!--        </div>-->
      </div>
    </nav>
    <div class="container">
