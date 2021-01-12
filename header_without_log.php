<?php

?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- Local CSS-->
        <link rel="stylesheet" href="css_pr/navbar-styles.css">
        <link rel="stylesheet" href="css_pr/text-post-styles.css"/>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
   
</head>

<body>
 <div>
    <!--navbar without logout-->
    <nav class="navbar navbar-expand-md navbar-custom">
      <div class="container-fluid">
          <a class="navbar-brand" href="index.php">AspireForHer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav navbar-left">
              <li class="nav-item dropdown dropdown-sm active">
                <a href="#0" class="nav-link dropdown-toggle" id="blogDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Visit <span class="sr-only">(current)</span></a>
                <div class="dropdown-menu" aria-labelledby="blogDropdown">
                  <a href="front-forum.php" class="dropdown-item">Forum</a>
                  <a href="blog_grid_display.php" class="dropdown-item active navbar-custom">Blog</a>
                </div>
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">About Us</a>
              </li>

              <form class="d-flex" style="margin-left: 5em; margin-right: 1em; margin-top: 5px; margin-bottom: 0;">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" size="30">
                <input type="submit" id="search-navbar" value="Search">
              </form>
            </ul>

          </div>
      </div>
    </nav>
  </div>
</body>
</html>