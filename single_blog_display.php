<?php
    require_once "pdo.php";
    session_start();
   // $sql = "SELECT * FROM blog_master WHERE blog_id =".$blog_id;
    /*$stmt = $pdo->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        //display blog
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
  <link rel="stylesheet" href="css_pr/text-post-styles.css">
  <link rel="stylesheet" href="css_pr/footer.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,400&display=swap" rel="stylesheet">

  <title>Blog Post</title>

</head>

<body>
  <div>
    <!--navbar without logout-->
    <nav class="navbar navbar-expand-md navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">AspireForHer</a>
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
                <a href="front-forum.html" class="dropdown-item ">Forum</a>
                <a href="blog-overview-grid.html" class="dropdown-item active navbar-custom">Blog</a>
              </div>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="main-page.html">About Us</a>
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



  <div class="container my-3 my-sm-5">
    <div class="row">
      <div class="col-12 col-lg-8">
        <article class="mb-3">
          <header class="mb-2">

            <h1>Text blog post title</h1>
            <div>Author Name</div>
            <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30 PM</time></div>
            <div class="small"><span class="badge badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13
                <span class="sr-only">likes</span></span> <span class="badge badge-primary"><i class="fa fa-comments"
                  aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>

          </header>
          <section id="main" class="mb-3">
            <figure class="figure">
              <img
                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/12A9B/production/_111434467_gettyimages-1143489763.jpg"
                class="figure-img img-fluid" alt="Figure image">
              <figcaption class="figure-caption small">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet pellentesque lorem
                  sed elementum.</p>
                <p class="mb-0"><i class="fa fa-camera" aria-hidden="true"></i><span class="sr-only">Photo by:</span>
                  Artist Name</p>
              </figcaption>
            </figure>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod
              scelerisque. Morbi porttitor tellus tempor metus posuere dictum. Interdum et malesuada fames ac ante ipsum
              primis in faucibus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum ullamcorper sem, vel
              ultrices elit ultrices consectetur. Proin interdum congue velit nec mollis. Curabitur non tellus sit amet
              diam suscipit vehicula a eget tellus. Sed neque mauris, consectetur eget ipsum elementum, vulputate
              condimentum nisl. Mauris lobortis eros at vulputate blandit. Aenean varius porttitor tellus. Suspendisse
              pretium feugiat dolor, a vulputate turpis. Mauris in consectetur libero. In eget commodo eros.
              Pellentesque vel risus odio.</p>
            <p>Aliquam imperdiet molestie odio at aliquet. Cras convallis tristique tellus eget ultricies. Donec
              accumsan magna et dapibus condimentum. Nunc et velit convallis, aliquam sapien non, pellentesque nisl.
              Donec nunc velit, congue faucibus laoreet sit amet, hendrerit sit amet dolor. Aenean euismod lorem vitae
              ligula convallis commodo id ultricies tortor. Mauris scelerisque in ex ac vulputate. Interdum et malesuada
              fames ac ante ipsum primis in faucibus.</p>
            <blockquote class="blockquote">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet pellentesque lorem sed elementum.
              </p>
              <footer class="blockquote-footer">Firstname Lastname</footer>
            </blockquote>
            <p>Donec a nibh id elit hendrerit efficitur vitae nec nisi. Nulla facilisi. Nullam venenatis gravida mattis.
              Pellentesque viverra massa non rutrum rutrum. Mauris vulputate dapibus condimentum. Sed faucibus sapien
              nec lectus aliquet, at efficitur nisi egestas. Curabitur consectetur lectus ut tellus sagittis bibendum.
              Nulla pulvinar dapibus elit, et rhoncus orci dignissim at. Morbi rhoncus sit amet magna vel molestie.
              Aliquam ex elit, mattis vitae efficitur non, dapibus vel orci. Sed hendrerit magna non pulvinar ultrices.
              Nunc ac nunc sit amet sem mollis porta. Maecenas vulputate aliquet tortor, rutrum pulvinar nisl vehicula
              non.</p>
            <h2>Subheading</h2>
            <p>Nam purus eros, dignissim quis pretium vitae, tempus convallis ligula. Fusce et lectus fringilla, tempor
              metus egestas, fringilla sapien. Nulla non laoreet purus, id ullamcorper diam. Praesent faucibus et mi
              eget cursus. Cras lectus tortor, gravida vel facilisis vel, volutpat a lorem. Proin tincidunt, libero eget
              feugiat sagittis, felis turpis aliquam tortor, non vestibulum quam libero non sem. Mauris eget ex lacus.
              Aliquam pretium congue diam non sodales.</p>
            <p>Aliquam eleifend libero quis dignissim tristique. Sed semper magna odio, vitae porttitor odio congue
              mollis. Vivamus ultricies tellus at diam vestibulum tempor. Aenean arcu dui, eleifend ac felis non,
              suscipit mollis tellus. Integer a vestibulum ex. Sed eu viverra purus. Morbi eu felis a erat suscipit
              hendrerit a a massa. Integer accumsan justo ante, nec placerat sem viverra et. Vestibulum congue vehicula
              ligula, nec condimentum ex elementum a. Nulla eu imperdiet sem, quis dictum ante. Sed efficitur vitae leo
              egestas faucibus. Etiam pharetra in urna vel tincidunt. Morbi rutrum nunc bibendum sapien dapibus
              elementum. Etiam sed ipsum dapibus, semper elit eu, ullamcorper urna. Vivamus scelerisque, nisi nec
              lobortis eleifend, urna ipsum lacinia nibh, vitae ornare ante purus sed mauris.</p>
          </section>
          <section id="comments" class="small">
            <button class="btn btn-lg btn-primary mb-3 hover-effect-btn"><i class="fa fa-thumbs-up"
                aria-hidden="true"></i> <span class="sr-only">Like</span></button>
            <h2>Comments</h2>
            <div class="media">
              <img src="https://placehold.it/64x64" alt="Media object image" class="mr-3">
              <div class="media-body">
                <p><a class="card-title" href="mailto:example@domain.com">Author Name</a> (Posted on: <time
                    datetime="2021-01-09T17:30">January 9, 2021 at 5:30 PM</time>)</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod
                  scelerisque. Morbi porttitor tellus tempor metus posuere dictum. Interdum et malesuada fames ac ante
                  ipsum primis in faucibus.</p>
              </div>
            </div>
            <hr>
            <div class="media">
              <img src="https://placehold.it/64x64" alt="Media object image" class="mr-3">
              <div class="media-body">
                <p><a class="card-title" href="mailto:example@domain.com">Author Name</a> (Posted on: <time
                    datetime="2021-01-09T17:30">January 9, 2021 at 5:30 PM</time>)</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod
                  scelerisque. Morbi porttitor tellus tempor metus posuere dictum. Interdum et malesuada fames ac ante
                  ipsum primis in faucibus.</p>
              </div>
            </div>
            <hr>
            <div class="media">
              <img src="https://placehold.it/64x64" alt="Media object image" class="mr-3">
              <div class="media-body">
                <p><a class="card-title" href="mailto:example@domain.com">Author Name</a> (Posted on: <time
                    datetime="2021-01-09T17:30">January 9, 2021 at 5:30 PM</time>)</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod
                  scelerisque. Morbi porttitor tellus tempor metus posuere dictum. Interdum et malesuada fames ac ante
                  ipsum primis in faucibus.</p>
              </div>
            </div>
            <hr>
            <form>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" placeholder="example@email.com" id="email" name="email"
                      required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="comment">Your comment:</label>
                <textarea class="form-control" id="comment" name="comment" rows="5"
                  placeholder="Write your comment here. Maximum 500 characters." required></textarea>
              </div>
              <button type="submit" class="btn btn-primary hover-effect-btn">Submit</button>
              <button type="reset" class="btn btn-danger">Reset</button>
            </form>
          </section>
        </article>
      </div>
      <div class="col-12 col-lg-4">
        <aside>
          <h2 class="mb-3">About the author</h2>
          <div class="card mb-3">
            <div class="card-body">
              <div class="text-center">
                <img
                  src="https://static.scientificamerican.com/sciam/cache/file/92E141F8-36E4-4331-BB2EE42AC8674DD3_source.jpg?w=590&h=800&62C6A28D-D2CA-4635-AA7017C94E6DDB72"
                  class="img-fluid rounded-circle" alt="Figure image">
                <ul>
                  <li class="list-inline-item small"><a class="hover-effect" href="#0">Twitter</a></li>
                  <li class="list-inline-item small"><a class="hover-effect" href="#0">LinkedIn</a></li>
                </ul>
              </div>
              <h5><a class="hover-effect" href="#0">Author Name</a></h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa
                euismod scelerisque. Morbi porttitor tellus tempor metus posuere dictum. Interdum et malesuada fames ac
                ante ipsum primis in faucibus.</p>
            </div>
          </div>
          <h2 class="mb-3">Related posts</h2>
          <div class="list-group mb-3">
            <a href="#0" class="list-group-item list-group-item-action">

              <h5 class="card-title">Blog post title</h5>
              <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30 PM</time>)
              </p>
              <div class="small mb-2"><span class="badge badge-primary"><i class="fa fa-thumbs-up"
                    aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                  class="badge badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span
                    class="sr-only">comments</span></span></div>
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </a>
            <a href="#0" class="list-group-item list-group-item-action">

              <h5 class="card-title">Blog post title</h5>
              <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30 PM</time>)
              </p>
              <div class="small mb-2"><span class="badge badge-primary"><i class="fa fa-thumbs-up"
                    aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                  class="badge badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span
                    class="sr-only">comments</span></span></div>
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </a>
            <a href="#0" class="list-group-item list-group-item-action">

              <h5 class="card-title">Blog post title</h5>
              <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30 PM</time>)
              </p>
              <div class="small mb-2"><span class="badge badge-primary"><i class="fa fa-thumbs-up"
                    aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                  class="badge badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span
                    class="sr-only">comments</span></span></div>
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </a>
            <a href="#0" class="list-group-item list-group-item-action">

              <h5 class="card-title">Blog post title</h5>
              <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30 PM</time>)
              </p>
              <div class="small mb-2"><span class="badge badge-primary"><i class="fa fa-thumbs-up"
                    aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                  class="badge badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span
                    class="sr-only">comments</span></span></div>
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </a>
            <a href="#0" class="list-group-item list-group-item-action">

              <h5 class="card-title">Blog post title</h5>
              <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30 PM</time>)
              </p>
              <div class="small mb-2"><span class="badge badge-primary"><i class="fa fa-thumbs-up"
                    aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span
                  class="badge badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span
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
                <button type="submit" class="btn btn-primary hover-effect-btn">Signup</button>
              </form>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  <footer class="small bg-light" id="footer-gradient">
    <div class="container py-3 py-sm-5">
      <div class="row text-center">
        <div class="col-12 col-sm-6 col-md-4">
          <h6>Quick links</h6>
          <ul class="list-unstyled">
            <li><a href="main-page.html">Home</a></li>
            <li><a href="blog-overview-grid.html">Blog</a></li>
            <li><a href="front-forum.html">Forum</a></li>
            <li><a href="#0">Newsletter</a></li>
          </ul>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
          <h6>Follow us</h6>
          <ul class="list-unstyled">
            <li><a href="https://www.facebook.com/aspireforher/">Facebook</a></li>
            <li><a href="https://www.instagram.com/aspireforher/">Instagram</a></li>
            <li><a href="https://twitter.com/her_aspire">Twitter</a></li>
            <li><a href="https://www.youtube.com/channel/UCHyAxtHoi_jAHHcuGm5At8Q">YouTube</a>
            </li>
            <li><a href="https://www.linkedin.com/company/aspire-for-her">LinkedIn</a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
          <h6>Contact us</h6>
          <address>
            <strong>Aspire For Her</strong><br>
            Mumbai, IN<br>
            <abbr title="Telephone">Mob: </abbr>(+91)9826357990<br>
            <abbr title="Mail">Mail: </abbr> <a href="mailto:aspireforher@afh.org">aspireforher@afh.org</a>
          </address>
        </div>
      </div>
      <ul class="list-inline text-center">
        <li class="list-inline-item">&copy; 2021 Aspire For Her</li>
        <li class="list-inline-item">All rights reserved.</li>
        <li class="list-inline-item"><a href="#0">Terms of use and privacy policy</a>.</li>
      </ul>
    </div>
  </footer>
  <!-- jQuery first, then Bootstrap JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>