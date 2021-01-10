<?php
require_once "pdo.php";
session_start();
if (!isset($_SESSION['account'])) {
    die('Not logged in');
}


if(!empty($_FILES["file"]["name"])){
    $targetDir = "BlogFiles/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $allowTypes = array('pdf','doc','docx');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $sql = "INSERT INTO blog_master (`u_id`,`descp`,`content`,`likes`,`post_time`,`blog_topic`)
VALUES(:user,:desc,'".$fileName."',0,now(),:topic);";
            $insert = $pdo->prepare($sql);
                        $insert->execute(array(
                            ':user' => $_SESSION['account'],
                            ':desc' => htmlentities($_POST['des']),
                            ':topic' => htmlentities($_POST['topic']))
                        );
            if($insert){
                $_SESSION["success"] = "The file ".$fileName. " has been uploaded successfully.";
                header('Location: post.php');
            }else{
                $_SESSION["error"] = "File upload failed, please try again.";
            } 
        }else{
            $_SESSION["error"] = "Sorry, there was an error uploading your file.";
        }
    }else{
        $_SESSION["error"] = 'Sorry, only PDF, DOC, DOCX files are allowed to upload.';
    }
}else{
    $_SESSION["error"] = 'Please select a file to upload.';
}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Discussion Page</title>
    </head>
    <body>
        <?php
        include_once 'Header_2.php';
        ?>
        <div class="container">
            <?php
            
            if (isset($_SESSION['account'])) {
                echo "<h1> Welcome";
                echo htmlentities($_SESSION['account']);
                echo "</h1>\n";
            }
            ?>
            <form method="POST" enctype="multipart/form-data">
                <table id="mytable" border='0' cellpadding='5' cellspacing='0' align='center'>
                <center/>
                    <tr>
                        <td align="center" class="bgcol" style="color: white;"><h2>Blog Create</h2></td>
                    </tr>
                    
                <tr>
                    <td>
                        <?php
                            if ( isset($_SESSION["error"]) ) {
                                echo('<p style="color:red">'.$_SESSION["error"]."</p>\n");
                                unset($_SESSION["error"]);
                            }
                        ?>
                    </td>
                </tr>  
                <tr>
                    <td align='right'>                        
                        <label for="email" style="margin-left: 30px;">
                            <input type='text' name='topic' id="topic" size="25"><span>Blog Name</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td align='right'>                        
                        <label for="email" style="margin-left: 30px;">
                            <input type='text' name='des' id="des" size="25"><span>Description</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td align='center'>                        
                        <label for="pswd" style="margin-left: 30px;">
                            <input type='file' name='file' id="file" size="25"><span>Blog Content File</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td align='center'><input type='submit' name='upload' value="UPLOAD" class="square_btn"></td>
                </tr>             
            </table>   
                </form>
        </div>
    </body>
</html>