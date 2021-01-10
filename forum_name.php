<?php
    require_once "pdo.php";
    session_start();
    if (!isset($_SESSION['account'])) {
       header('Location: login.php');
       return;
    }
    $forum_name = $_GET['forum'];
    
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
    <title>Forum - Create New Topic</title>
</head>

<body>

    <div id="bod">
        <?php include_once('header_with_log.php');?>
       
        <div class="container my-3">

            <!--Board overview-->
            <div class="row">
                <div class="col-12">
                    <h2 class="h4 mb-0 p-4 rounded-top bg-info"><?php echo $forum_name; ?></h2>
                    <table class="table table-striped table-bordered table-responsive-lg">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="topic-col">Topics</th>
                                <th scope="col" class="created-col">Origin</th>
                                <th scope="col" class="last-post-col">Last post</th>
                            </tr>
                        </thead>
                        <tbody id="tablebody">
                           <?php  
                           $sql4 = "SELECT DISTINCT forum_topics, table_name FROM forums WHERE forum_names = '".$forum_name."'";                               
                            $stmt4 = $pdo->prepare($sql4);
                            $stmt4->execute();
                           while ( $row4 = $stmt4->fetch(PDO::FETCH_ASSOC) ){?>
                            <tr>
                                <td>
                                    <h3 class="h6"><a href="topic.php?topic=<?php echo $row4['table_name'];?>"><?php echo $row4['forum_topics']; ?></a>
                                    </h3>
                                    <div class="small">Go to page: <a href="#0">1</a>, <a href="#0">2</a>, <a
                                            href="#0">3</a> &hellip; <a href="#0">4</a>
                                    </div>
                                </td>
                                <?php 
                                $sql = "SELECT * FROM ". $row4['table_name']. " WHERE cont_id = (SELECT min(cont_id) FROM ".$row4['table_name'].")";                               
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute();
                                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                echo'<td>
                                    <div>Created by <p>'.$row['comm_author'].'</p></div>
                                    <div>'.$row['post_time'].'</div>
                                </td>';
                                } 
                                $sql3 = "SELECT * FROM ". $row4['table_name']. " WHERE cont_id = (SELECT max(cont_id) FROM ".$row4['table_name'].")";                               
                                $stmt3 = $pdo->prepare($sql3);
                                $stmt3->execute();
                                while($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){
                                echo'<td>
                                    <div>by <p>'.$row3['comm_author'].'</p></div>
                                    <div><p>'.$row3['post_time'].'</p></div>
                                </td>
                           </tr>';
                                
                                }} ?>
                        </tbody>
                    </table>
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
                <form class="form-inline float-lg-left d-block d-sm-flex">
                    <div class="mb-2 mb-sm-0 mr-2">Display posts from previous:</div>
                    <div class="form-group mr-2">
                        <label class="sr-only" for="select-time">Time period</label>
                        <select class="form-control form-control-sm" id="select-time">
                            <option value="all-posts" selected>All posts</option>
                            <option value="day">1 day</option>
                            <option value="week">1 week</option>
                            <option value="month">1 month</option>
                            <option value="year">1 year</option>
                        </select>
                    </div>
                    <div class="mb-2 mb-sm-0 mr-2">Sort by:</div>
                    <div class="form-group mr-2">
                        <label class="sr-only" for="select-sort">Sort by</label>
                        <select class="form-control form-control-sm" id="select-sort">
                            <option value="author">Author</option>
                            <option value="post-time" selected>Post time</option>
                            <option value="replies">Replies</option>
                            <option value="subject">Subject</option>
                            <option value="views">Views</option>
                        </select>
                    </div>
                    <div class="form-group mr-2">
                        <label class="sr-only" for="select-direction">Sort direction</label>
                        <select class="form-control form-control-sm" id="select-direction">
                            <option value="post-time">Ascending</option>
                            <option value="author" selected="">Descending</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Go</button>
                </form>
            </div>
                <a href="forum_create.php?" class="btn btn-lg btn-primary">New Topic</a>
            </div>

    </div>
<?php include_once('footer.php');?>

    <!-- jQuery first, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>