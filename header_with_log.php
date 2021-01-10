<?php

?>
<!DOCTYPE html>
<html>

<body>


      <div>
        <!--navbar with logout-->
       <div>
                <nav class="navbar navbar-expand-md navbar-custom">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">AspireForHer</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav navbar-left">
                                <li class="nav-item dropdown dropdown-sm active">
                                    <a href="#0" class="nav-link dropdown-toggle" id="blogDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Visit <span
                                            class="sr-only">(current)</span></a>
                                    <div class="dropdown-menu" role="menu" aria-labelledby="blogDropdown">
                                        <a href="front-forum.html" class="dropdown-item active navbar-custom">Forum</a>
                                        <a href="blog-overview-grid.html" class="dropdown-item ">Blog</a>
                                    </div>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="main-page.html">About Us</a>
                                </li>

                                <form class="d-flex"
                                    style="margin-left: 5em; margin-right: 1em; margin-top: 5px; margin-bottom: 0;">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search" size="30">
                                    <input type="submit" id="search-navbar" value="Search">
                                </form>
                            </ul>
                            <ul class="navbar-nav nav navbar-right" style="position: absolute; right: 0; top:10px;">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
      </div>
      
</body>
</html>