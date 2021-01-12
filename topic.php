<?php
    require_once "pdo.php";
    session_start();
    if (!isset($_SESSION['account'])) {
        header('Location: login.php');
        return;
    }
    $topic_name;
    if(isset( $_GET["topic"])){
        $topic_name = $_GET["topic"];
        $_SESSION['topic'] = $topic_name;        
    }
    
    if(isset($_POST['comment'])){
        $sql = "INSERT INTO ".$_SESSION['topic']."(`content`, `comm_author`, `post_time`, `post_subject`)"
                . "VALUES(:comm, :auth, now(), :comm)";   
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':auth' => $_SESSION['account'], 
                             ':comm' => htmlentities($_POST['comment'])));
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/forum.css">
    <link rel="stylesheet" href="css_pr/navbar-styles.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css_pr/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
    <title>Forum - Post</title>
</head>

<body style="background-color: #dceae8;">

    <div id="bod">
        <?php include_once('header_with_log.php');?>

        <div class="container my-3">

            <!--Board overview-->
            <div class="row">
                <div class="col-12">
                    <h2 class="h4 mb-0 p-4 rounded-top" id="forum1"><?php echo $_SESSION['topic'];?></h2>                    
                    <table class="table table-striped table-bordered table-responsive-lg">
                        <tbody id="tablebody">
                    <?php  
                    $sql4 = "SELECT * FROM ".$_SESSION['topic']." ORDER BY cont_id DESC LIMIT 15";   
                    //echo $sql4;
                    $stmt4 = $pdo->prepare($sql4);
                    $stmt4->execute();
                    while ( $row4 = $stmt4->fetch(PDO::FETCH_ASSOC) ){ 
                    
                    
                           echo' <tr>
                                <td class="author-col" id="authcol">
                                    <div>by <a href="#">'.$row4['comm_author'].'</a></div>
                                </td>
                                <td class="post-col d-lg-flex justify-content-lg-between">
                                    <div><span class="font-weight-bold">Post subject:</span>'.$row4['post_subject'].'</div>
                                    <div><span class="font-weight-bold">Posted:</span>'.$row4['post_time'].'</div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=3 align="center">
                                    <p>'.$row4['content'].'</p>
                                </td>
                            </tr>';
                        
                     } ?>
                            </tbody>
                    </table>
                </div>
            </div>
            <div class="mb-3 clearfix">
                <nav aria-label="Navigate post pages" class="float-lg-right">
                    <ul class="pagination pagination-sm mb-lg-0">
                        <li class="page-item active"><a href="#" class="page-link">1 <span
                                    class="sr-only">(current)</span></a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">&hellip; 15</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </nav>
            </div>
            <form class="mb-3" method="POST">
                <div class="form-group">
                    <label for="comment">Reply to this post:</label>
                    <textarea class="form-control" id="comment" name="comment" rows="10" placeholder="Write your comment here."
                        required></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Reply" style="color: white;">
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>

    <?php include_once('footer.php');?>

    <!-- jQuery first, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
