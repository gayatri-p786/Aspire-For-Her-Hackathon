<?php
     require_once "pdo.php";
    session_start();
 
    //recent blogs
    /*$sql = "SELECT * FROM blog_master ORDER BY blog_id DESC LIMIT 15";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        //display blogs
    }*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css_pr/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css_pr/font-awesome.min.css">

  <!--Custom css-->
  <link rel="stylesheet" href="css_pr/navbar-styles.css">
  <link rel="stylesheet" href="css_pr/text-post-styles.css"/>
  
  <link rel="stylesheet" href="css_pr/footer.css"/>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,400&display=swap" rel="stylesheet">

  <title>Blog Overview</title>

</head>

<body>
  <div id="bgimg">

      <?php 
          if(!isset($_SESSION["account"])){
              include_once('header_without_log.php');
          }else{
             echo'<div>
                <nav class="navbar navbar-expand-md navbar-custom">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">AspireForHer</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav navbar-left">
              <li class="nav-item dropdown dropdown-sm active">
                <a href="#0" class="nav-link dropdown-toggle" id="blogDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Visit <span class="sr-only">(current)</span></a>
                <div class="dropdown-menu" aria-labelledby="blogDropdown">
                  <a href="front-forum.php" class="dropdown-item ">Forum</a>
                  <a href="blog_grid_display.php" class="dropdown-item active navbar-custom ">Blog</a>
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
            </div>';
          }
      
      ?>
    <div class="container-fluid my-3 my-sm-5 ">
      <div class="row">
        <div class="col-12 col-md-8 col-lg-9">
          <h2 class="mb-3">Recent posts</h2>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid"
                  src="https://images.pexels.com/photos/4504343/pexels-photo-4504343.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">

                        <h1 class="h4"><a class="card-title" href="single_blog_display.php">Blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>
                      </div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up"
                            aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                          class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3
                          <span class="sr-only">comments</span></span></div>

                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod
                      scelerisque.</p>
                    <a class="hover-effect" href="blog-post-text.html" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid"
                  src="https://images.pexels.com/photos/2349211/pexels-photo-2349211.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">

                      <h1 class="h4"><a class="card-title" href="blog-post-video.html">Blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>
                      </div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up"
                            aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                          class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3
                          <span class="sr-only">comments</span></span></div>

                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod
                      scelerisque.</p>
                    <a class="hover-effect" href="blog-post-video.html" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>

            <div class="col-12  col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid"
                  src="https://images.pexels.com/photos/3961066/pexels-photo-3961066.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">

                      <h1 class="h4"><a class="card-title" href="blog-post-audio.html">Blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>
                      </div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up"
                            aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                          class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3
                          <span class="sr-only">comments</span></span></div>

                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod
                      scelerisque. </p>
                    <a class="hover-effect" href="blog-post-audio.html" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>
            <hr>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid"
                  src="https://images.pexels.com/photos/2349211/pexels-photo-2349211.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">

                      <h1 class="h4"><a class="card-title" href="blog-post-photo-gallery.html">Blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>
                      </div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up"
                            aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                          class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3
                          <span class="sr-only">comments</span></span></div>

                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod
                      scelerisque. </p>
                    <a class="hover-effect" href="blog-post-photo-gallery.html" class="btn btn-outline-primary">Read
                      more</a>
                  </article>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid"
                  src="https://images.pexels.com/photos/2349211/pexels-photo-2349211.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">

                      <h1 class="h4"><a class="card-title" href="blog-post-text.html">Blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>
                      </div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up"
                            aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                          class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3
                          <span class="sr-only">comments</span></span></div>

                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod
                      scelerisque. </p>
                    <a class="hover-effect" href="blog-post-text.html" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid"
                  src="https://images.pexels.com/photos/4504343/pexels-photo-4504343.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" >
                <div class="card-body">
                  <article>
                    <header class="mb-2">

                      <h1 class="h4"><a class="card-title" href="blog-post-text.html">Blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>
                      </div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up"
                            aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                          class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3
                          <span class="sr-only">comments</span></span></div>

                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod
                      scelerisque. </p>
                    <a class="hover-effect" href="blog-post-text.html" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>
            <hr>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid"
                  src="https://ichef.bbci.co.uk/news/976/cpsprodpb/12A9B/production/_111434467_gettyimages-1143489763.jpg" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">

                      <h1 class="h4"><a class="card-title" href="blog-post-video.html">Blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>
                      </div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up"
                            aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                          class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3
                          <span class="sr-only">comments</span></span></div>

                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod
                      scelerisque. </p>
                    <a class="hover-effect" href="blog-post-video.html" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid"
                  src="https://images.pexels.com/photos/2349211/pexels-photo-2349211.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">

                      <h1 class="h4"><a class="card-title" href="blog-post-audio.html">Blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>
                      </div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up"
                            aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                          class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3
                          <span class="sr-only">comments</span></span></div>

                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod
                      scelerisque. </p>
                    <a class="hover-effect" href="blog-post-audio.html" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid"
                  src="https://images.pexels.com/photos/2349211/pexels-photo-2349211.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">

                      <h1 class="h4"><a class="card-title" href="blog-post-photo-gallery.html">Blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>
                      </div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up"
                            aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                          class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3
                          <span class="sr-only">comments</span></span></div>

                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod
                      scelerisque. </p>
                    <a class="hover-effect" href="blog-post-photo-gallery.html" class="btn btn-outline-primary">Read
                      more</a>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <nav aria-label="Blog pages">
            <ul class="pagination justify-content-center">
              <li class="page-item ">
                <span class="page-link" aria-label="Previous">
                  <span aria-hidden="true">«</span>
                  <span class="sr-only">Previous</span>
                </span>
              </li>
              <li class="page-item ">
                <a href="#0" class="page-link">
                  1<span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="page-item"><a href="#0" class="page-link">2</a></li>
              <li class="page-item"><a href="#0" class="page-link">3</a></li>
              <li class="page-item"><a href="#0" class="page-link">4</a></li>
              <li class="page-item"><a href="#0" class="page-link">5</a></li>
              <li class="page-item">
                <a href="#0" class="page-link" aria-label="Next">
                  <span aria-hidden="true">»</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-12 col-md-4 col-lg-3">
          <aside>
            <h2 class="mb-3">Popular posts</h2>
            <div class="list-group mb-3">
              <a href="#0" class="list-group-item list-group-item-action">

                <h5 class="card-title">Blog post title</h5>
                <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>)</p>
                <div class="small mb-2"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up"
                      aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                    class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span
                      class="sr-only">comments</span></span></div>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <a href="#0" class="list-group-item list-group-item-action">

                <h5 class="card-title">Blog post title</h5>
                <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>)</p>
                <div class="small mb-2"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up"
                      aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                    class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span
                      class="sr-only">comments</span></span></div>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <a href="#0" class="list-group-item list-group-item-action">

                <h5 class="card-title">Blog post title</h5>
                <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>)</p>
                <div class="small mb-2"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up"
                      aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                    class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span
                      class="sr-only">comments</span></span></div>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <a href="#0" class="list-group-item list-group-item-action">

                <h5 class="card-title">Blog post title</h5>
                <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>)</p>
                <div class="small mb-2"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up"
                      aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                    class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span
                      class="sr-only">comments</span></span></div>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <a href="#0" class="list-group-item list-group-item-action">

                <h5 class="card-title">Blog post title</h5>
                <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>)</p>
                <div class="small mb-2"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up"
                      aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                    class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span
                      class="sr-only">comments</span></span></div>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
            </div>

            <div class="card">
              <div class="card-body bg-light">
                <h5 class="card-title">Signup for our newsletter</h5>
                <form>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="addon-left">@</span>
                    </div>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email"
                      aria-describedby="addon-left" required>
                  </div>
                  <button type="submit" class="btn btn-outline-primary hover-effect-btn">Signup</button>
                </form>
              </div>
            </div>
            <div class="card" id="add">
              <div class="card-body bg-light">
                <h5 class="card-title">Click here to add another Blog Post</h5>
                <button class="btn btn-outline-primary hover-effect-btn">ADD</button>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>

 <?php include_once('footer.php');?>
  <!-- jQuery first, then Bootstrap JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>