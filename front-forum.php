<?php
    require_once "pdo.php";
    session_start();
    if (!isset($_SESSION['account'])) {
        header('Location: login.php');
    }
    $topic_sum=0;
    $post_sum=0;
    $sql = "SELECT count(DISTINCT u_id) as members FROM user_master";
    $stmt = $pdo->query($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $members = $row['members'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/forum.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navbar-styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css_pr/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
   
    <title>Forum - Board overview</title>

</head>

<body>
    <div id="bod">
    <?php include_once('header_with_log.php');?>
    <div class="container">

        <!--Board overview-->
        <div class="row">
                <div class="col-12 col-xl-9" id="tab">
                
                    <?php 
                        $sql = "SELECT * FROM forum_catgry";
                        $stmt = $pdo->query($sql);
                        $stmt->execute();
                        while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                            $id = $row['catg_id'];
                            $name = $row['catg_name'];
                            echo'<h2 class="h4 mb-0 p-4 rounded-top bg-info">'.$row['catg_name'].'</h2>';
                            //echo '<h2 class="h4 mb-0 p-4 rounded-top bg-info" id="forum1"><a href="forum_category.php?id='.$id.'&name='.$name.'">'.$row['catg_name'].'</a></h2>';
                            $sql2 = "SELECT DISTINCT forum_id,forum_names from forums WHERE catg_id = ".$id;
                            $stmt2 = $pdo->prepare($sql2);
                            $stmt2->execute();
                            echo '
                                <table class="table table-striped table-bordered table-responsive" style="margin-bottom: 30px; border: 0ch;">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="forum-col">Forum</th>
                                        <th scope="col">Topics</th>
                                        <th scope="col">Posts</th>
                                    </tr>
                                </thead>';
                            while ( $row2 = $stmt2->fetch(PDO::FETCH_ASSOC) ) { 
                                echo'<tbody id="tablebody">
                                    <tr>
                                        <td>
                                            <h3 class="h5"><a href="forum_name.php?forum='.$row2['forum_names'].'">'.$row2['forum_names'].'</a></h3><ul>';
                                            $sql5 = "SELECT DISTINCT count(forum_topics) as topics FROM forums WHERE forum_id =".$row2['forum_id'];
                                            $stmt5 = $pdo->prepare($sql5);
                                            $stmt5->execute();
                                            $row5 = $stmt5->fetch(PDO::FETCH_ASSOC);
                                            $topic_sum = $topic_sum + $row5['topics'];                                            
                                            $sql4 = "SELECT DISTINCT * FROM forums WHERE forum_id =".$row2['forum_id'];                               
                                            $stmt4 = $pdo->prepare($sql4);
                                            $stmt4->execute();
                                            while ( $row4 = $stmt4->fetch(PDO::FETCH_ASSOC) ){
                                                
                                                $_SESSION["topic_id"] = $row4['topic_id'];
                                                echo'<li><a href="topic.php?topic='.$row4['table_name'].'">'.$row4['forum_topics'].', </a></li>';
                                                $sql6 = "SELECT DISTINCT count(cont_id) as posts FROM ".$row4['table_name'].";";
                                                $stmt6 = $pdo->prepare($sql6);
                                                $stmt6->execute();
                                                $row6 = $stmt6->fetch(PDO::FETCH_ASSOC);  
                                                 $post_sum = $post_sum + $row6['posts'];
                                                
                                            }
                                            echo'</ul><td>'.$row5['topics'].'</td>
                                                    <td>
                                                    <div>'.$row6['posts'].'</div>
                                                </td></tr> ';                                                                   
                               
                            }
                            echo'
                                </tbody>
                                </table>';
                            
                        }                        
                    ?>
              
            </div>

            <!--Members and statistics-->
            <div class="col-12 col-xl-3">
                <aside>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-xl-12" id="trend">
                                <div class="card">
                                    <div class="card-body" style="background-color: #f7f7f7;">
                                        <h2 class="h4 card-title">Trending Topics</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="post.html">Blockchain Technology</a>
                                            </li>
                                            <li><a href="post.html">Vitamin Cheat-Sheet</a>
                                            </li>
                                            <li><a href="post.html">Hottest Fashion Trends</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                            <div id="stats" class="card">
                                <div class="card-body" style="background-color: #f7f7f7;">
                                    <h2 class="h4 card-title">Forum statistics</h2>
                                    <dl class="row">
                                        <?php
                                        $sql = "SELECT count(DISTINCT forum_id) as forums FROM forums";
                                        $stmt6 = $pdo->prepare($sql);
                                        $stmt6->execute();
                                        $row6 = $stmt6->fetch(PDO::FETCH_ASSOC); 
                                        echo'<dt class="col-8">Total forums:</dt>
                                        <dd class="col-4">'.$row6['forums'].'</dd>
                                                
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-8">Total topics:</dt>
                                        <dd class="col-4">'.$topic_sum.'</dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-8">Total posts:</dt>
                                        <dd class="col-4">'.$post_sum.'</dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-8">Total members:</dt>
                                        <dd class="col-4">'.$members.'</dd>'?>
                                    </dl>
                                </div>
                            </div>
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