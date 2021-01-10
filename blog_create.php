<?php
    require_once "pdo.php";
    session_start();
   /* if (!isset($_SESSION['account'])) {
        header('Location: login.php');
        return;
    }
    if($_SESSION["flag"] !== "admin"){
        $_SESSION["error"] = "You are not a core member. Cannot create blog post!";
        header( 'Location: blog_grid_display.php' );
        return;
    }else{
        $sql2 = "INSERT INTO blog_master (`u_id`,`descp`,`content`,`likes`,`post_time`,`blog_title`,`images`)
VALUES(".$u_id.",:desc,:cont,0,now(),:title,:image)";
        $stmt = $pdo->prepare($sql2);
        $stmt->execute(array(
                            ':desc' => htmlentities($_POST['desc']),
                            ':cont' => htmlentities($_POST['content']),
                            ':title' => htmlentities($_POST['title']))
                        );
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

    <!--Custom CSS-->
    <link rel="stylesheet" href="css_pr/navbar-styles.css">
    <link rel="stylesheet" href="css_pr/create-blog-styles.css">
    <link rel="stylesheet" href="css_pr/footer.css">

    <title>Create Blog</title>
</head>

<body>
    
    <?php include_once('header_with_log.php');?>

    <div class="container my-3 my-sm-5">
        <header id="headding">
            <h2>Create a new Blog Post</h2>
            <p>Fill in the following details. All fields are mandatory.</p>
        </header>
        <form>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" placeholder="Title" name="title" required>
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label for="comment">Your content:</label>
                <textarea class="form-control" id="comment" name="comment" rows="15"
                    placeholder="Write your content here." required></textarea>
            </div>
            <div>
                <div class="form-group">
                    <label for="avatar">Upload a picture:</label>
                    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary hover-effect-btn">Submit</button>
            <button type="reset" class="btn btn-danger" id="red-hov">Reset</button>
        </form>
    </div>


<?php include_once('footer.php'); ?>

</body>

</html>
