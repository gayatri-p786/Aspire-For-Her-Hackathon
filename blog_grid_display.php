<?php
     require_once "pdo.php";
    session_start();
 
    //recent blogs
    $sql = "SELECT * FROM blog_master ORDER BY blog_id DESC LIMIT 15";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        //display blogs
    }
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

    <!--Custom CSS-->
    <link rel="stylesheet" href="css_pr/custom_grid_blog.css">

    <title>Blog - Overview: Grid</title>

  </head>
  <body>
         <?php 
         if(isset($_SESSION["account"])){
       include_once('header_with_log.php');
    }else{
        include_once('header_without_log.php');
    }?>
    
    <div class="container-fluid my-3 my-sm-5 ">
      <div class="row">
        <div class="col-12 col-md-8 col-lg-9">
          <h2 class="mb-3">Recent posts</h2>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid" src="https://static.scientificamerican.com/sciam/cache/file/92E141F8-36E4-4331-BB2EE42AC8674DD3_source.jpg?w=590&h=800&62C6A28D-D2CA-4635-AA7017C94E6DDB72" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">
                      
                      <h1 class="h4"><a href="single_blog_display.php">Text blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time></div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                      
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod scelerisque.</p>
                    <a href="single_blog_display.php" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid" src="https://ichef.bbci.co.uk/news/976/cpsprodpb/12A9B/production/_111434467_gettyimages-1143489763.jpg" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">
                      
                      <h1 class="h4"><a href="single_blog_display.php">Video blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time></div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                      
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod scelerisque.</p>
                    <a href="single_blog_display.php" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>
            
            <div class="col-12  col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid" src="https://static.scientificamerican.com/sciam/cache/file/92E141F8-36E4-4331-BB2EE42AC8674DD3_source.jpg?w=590&h=800&62C6A28D-D2CA-4635-AA7017C94E6DDB72" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">
                      
                      <h1 class="h4"><a href="single_blog_display.php">Audio blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time></div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                      
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod scelerisque. </p>
                    <a href="single_blog_display.php" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>
            <hr>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid" src="https://static.scientificamerican.com/sciam/cache/file/92E141F8-36E4-4331-BB2EE42AC8674DD3_source.jpg?w=590&h=800&62C6A28D-D2CA-4635-AA7017C94E6DDB72" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">
                      
                      <h1 class="h4"><a href="single_blog_display.php">Photo gallery blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time></div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                      
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod scelerisque. </p>
                    <a href="single_blog_display.php" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid" src="https://ichef.bbci.co.uk/news/976/cpsprodpb/12A9B/production/_111434467_gettyimages-1143489763.jpg" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">
                      
                      <h1 class="h4"><a href="single_blog_display.php">Text blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time></div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                      
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod scelerisque. </p>
                    <a href="single_blog_display.php" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid" src="https://static.scientificamerican.com/sciam/cache/file/92E141F8-36E4-4331-BB2EE42AC8674DD3_source.jpg?w=590&h=800&62C6A28D-D2CA-4635-AA7017C94E6DDB72" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">
                      
                      <h1 class="h4"><a href="single_blog_display.php">Text blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time></div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                      
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod scelerisque. </p>
                    <a href="single_blog_display.php" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>
            <hr>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid" src="https://ichef.bbci.co.uk/news/976/cpsprodpb/12A9B/production/_111434467_gettyimages-1143489763.jpg" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">
                      
                      <h1 class="h4"><a href="single_blog_display.php">Video blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time></div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                      
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod scelerisque. </p>
                    <a href="single_blog_display.php" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>
           
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid" src="https://static.scientificamerican.com/sciam/cache/file/92E141F8-36E4-4331-BB2EE42AC8674DD3_source.jpg?w=590&h=800&62C6A28D-D2CA-4635-AA7017C94E6DDB72" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">
                      
                      <h1 class="h4"><a href="single_blog_display.php">Audio blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time></div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                      
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod scelerisque. </p>
                    <a href="blog-post-audio.html" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img alt="Card image cat" class="card-img-top img-fluid" src="https://ichef.bbci.co.uk/news/976/cpsprodpb/12A9B/production/_111434467_gettyimages-1143489763.jpg" />
                <div class="card-body">
                  <article>
                    <header class="mb-2">
                      
                        <h1 class="h4"><a href="single_blog_display.php">Photo gallery blog post title</a></h1>
                      <div>Author Name</div>
                      <div class="small">Posted on: <time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time></div>
                      <div class="small"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                      
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed arcu bibendum massa euismod scelerisque. </p>
                    <a href="blog-post-photo-gallery.html" class="btn btn-outline-primary">Read more</a>
                  </article>
                </div>
              </div>
            </div>            
          </div>
          <nav aria-label="Blog pages">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <span class="page-link" aria-label="Previous">
                  <span aria-hidden="true">«</span>
                  <span class="sr-only">Previous</span>
                </span>
              </li>
              <li class="page-item active">
                <a href="#0" class="page-link">
                  1 <span class="sr-only">(current)</span>
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
                
                <h5>Blog post title</h5>
                <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>)</p>
                <div class="small mb-2"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <a href="#0" class="list-group-item list-group-item-action">
                
                <h5>Blog post title</h5>
                <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>)</p>
                <div class="small mb-2"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <a href="#0" class="list-group-item list-group-item-action">
                
                <h5>Blog post title</h5>
                <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>)</p>
                <div class="small mb-2"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <a href="#0" class="list-group-item list-group-item-action">
                
                <h5>Blog post title</h5>
                <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>)</p>
                <div class="small mb-2"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <a href="#0" class="list-group-item list-group-item-action">
                
                <h5>Blog post title</h5>
                <p class="small mb-2">Author Name (<time datetime="2021-01-09T17:30">January 9, 2021 at 5:30</time>)</p>
                <div class="small mb-2"><span class="badge badge-pill badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-pill badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
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
                    <input type="email" class="form-control" name="email" placeholder="Enter your email" aria-describedby="addon-left" required>
                  </div>
                  <button type="submit" class="btn btn-outline-primary">Signup</button>
                </form>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
    <?php include_once('footer.php');?>
    <!-- jQuery first, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>