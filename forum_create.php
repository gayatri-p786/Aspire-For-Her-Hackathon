<?php
    require_once "pdo.php";
    session_start();
    if (!isset($_SESSION['account'])) {
        header('Location: login.php');
        return;
    }
    if(isset($_POST["topic"]) && isset($_POST["comment"])){
        $forum_top = trim($_GET["forum_top"]);
        $sql = "SELECT * FROM forums WHERE forum_topics = '".$forum_top."'";        
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $table = htmlentities($_POST["topic"]);
        $tab_exp = trim($table);
        $exp = explode(' ', $table);
        $tab_name = $exp[0]."_".$row['topic_id'];        
        
        $sql2 = "CREATE TABLE `".$tab_name."` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(305) DEFAULT NULL,
  `comm_author` varchar(45) DEFAULT NULL,
  `post_time` datetime DEFAULT NULL,
  `post_subject` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
";
        //echo $sql2;
        $stmt2 = $pdo->prepare($sql2);
        $stmt2->execute();
        
        $sql3 = "INSERT INTO ".$tab_name."(`content`, `comm_author`, `post_time`, `post_subject`)"
                . "VALUES(:comm, :auth, now(), :name)";
        $stmt3 = $pdo->prepare($sql3);
        $stmt3->execute(array(
                            ':comm' => htmlentities($_POST['comment']),
                            ':auth' => $_SESSION['account'],
                            ':name' => htmlentities($_POST['topic']))
                        );
        $sql4 = "INSERT INTO forums (`forum_id`,`catg_id`,`forum_names`,`forum_topics`,`table_name`) VALUES (".$row['forum_id'].",".$row['catg_id'].",'".$row['forum_names']."','".$table."','".$tab_name."')";
        //echo $sql4;
        $stmt4 = $pdo->prepare($sql4);
        $stmt4->execute();
        $_SESSION["success"] = "Forum Created";
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
    <link rel="stylesheet" href="css/navbar-styles.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css_pr/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
    
    <title>Forum - Create New Topic</title>
</head>

<body style="background-color: #dceae8;">
    <div id="bod">
        
            <?php include_once('header_with_log.php');?>
         <div class="container my-3">

        <!--Board overview-->
        <div class="row">
            <div class="col-12">
                <?php
                            if ( isset($_SESSION["success"]) ) {
                                echo('<p style="color:green">'.$_SESSION["success"]."</p>\n");
                                unset($_SESSION["success"]);
                            }
                        ?>
                <h2 class="h4 bg-info mb-3 p-4 rounded">Create New Topic</h2>
                <form method="POST" class="mb-3">
                    <div class="form-group">
                        <label for="topic">Title:</label>
                        <input type="text" class="form-control" id="topic" name="topic" placeholder="Give your topic a title"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" id="comment" name="comment" rows="10" placeholder="Write your comment here"
                            required></textarea>
                    </div>
                    <p>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox" value="notification">
                        <label class="form-check-label" for="checkbox">Notify me upon replies</label>
                    </div>
                    </p>
                    <input type="submit" class="btn btn-primary" value="Create Topic" style="color: white;">
                    <input type="reset" class="btn btn-danger" value="Reset">
                </form>
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
