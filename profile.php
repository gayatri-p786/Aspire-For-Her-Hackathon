<?php
    require_once "pdo.php";
    session_start();
    if(isset($_POST['Mobile']) && isset($_POST['firstname'])){
            if ( strlen($_POST['Mobile']) < 1 || strlen($_POST['firstname']) < 1 ) {
            $_SESSION["error"] = "Please Enter Required Fields";
            header( 'Location: signup.php' ) ;
            return;
            }else {
                if(isset($_POST['company-pass']) && $_POST['company-pass'] === "aspirecore123"){
                    $flag = "admin";
                }else{
                    $flag = "member";
                }
                if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["avatar"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            
            $image = $_FILES['avatar']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image));
            $sql = "UPDATE user_master SET `fname` = :fname, `lname` = :lname, `mobile` = :mobile,`dob` = :dob,`gender` = :gender,`occupation` = :occup,`interests` = :inter,`twitter` = :twitter,`linkedin` = :linkedin,`image` = ".$img_content.",`flag` = '".$flag."' WHERE `username` = '".$_SESSION["username"]."'";
                
                $stmt = $pdo->prepare($sql);
                        $stmt->execute(array(
                            ':fname' => htmlentities($_POST['firstname']),
                            ':lname' => htmlentities($_POST['lastname']),
                            ':mobile' => htmlentities($_POST['email']),
                            ':dob' => htmlentities($_POST['dob']),
                            ':gender' => htmlentities($_POST['gender']),
                            ':occup' => htmlentities($_POST['occupation']),
                            ':inter' => htmlentities($_POST['interests']),
                            ':twitter' => htmlentities($_POST['twitter']),
                            ':linkedin' => htmlentities($_POST['linkedin']))
                        );
                        $_SESSION["success"] = "Record Inserted";
                        header( 'Location: front-forum.php' );
                        return;
        }}else{
               $sql = "UPDATE user_master SET `fname` = :fname, `lname` = :lname, `mobile` = :mobile,`dob` = :dob,`gender` = :gender,`occupation` = :occup,`interests` = :inter,`twitter` = :twitter,`linkedin` = :linkedin,`flag` = '".$flag."' WHERE `username` = '".$_SESSION["username"]."'";
               $stmt = $pdo->prepare($sql);
                        $stmt->execute(array(
                            ':fname' => htmlentities($_POST['firstname']),
                            ':lname' => htmlentities($_POST['lastname']),
                            ':mobile' => htmlentities($_POST['email']),
                            ':dob' => htmlentities($_POST['dob']),
                            ':gender' => htmlentities($_POST['gender']),
                            ':occup' => htmlentities($_POST['occupation']),
                            ':inter' => htmlentities($_POST['interests']),
                            ':twitter' => htmlentities($_POST['twitter']),
                            ':linkedin' => htmlentities($_POST['linkedin']))
                        );
                        $_SESSION["success"] = "Record Inserted";
                        header( 'Location: front-forum.php' );
                        return;
            }
            
    }
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
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    
        <!-- Custom CSS-->
        <link rel="stylesheet" href="css/profile-design.css">
        <title>Profile</title>
    </head>

    <body>
        <div class="container my-3 my-sm-5">
            <header>
                <h1>Profile</h1>
                <p>Complete your profile to get started on the forum. This helps us know you better and provide you with personalized content. </p>
            </header>
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="firstname">First Name:*</label>
                          <input type="text" class="form-control" placeholder="Riya" id="firstname" name="firstname" required>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="lastname">Last Name:*</label>
                          <input type="text" class="form-control" placeholder="Shah" id="lastname" name="lastname" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="username">Username:</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION["username"];?>" id="username" name="username" readonly>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="email">Email Id:</label>
                          <input type="email" class="form-control" value="<?php echo $_SESSION["account"];?>" id="email" name="email" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="gender">Gender:*</label>
                          <select  class="form-control"  id="gender" name="gender" required>
                              <option value="female">F</option>
                              <option value="male">M</option>
                              <option value="other">Other</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="dob">Date of Birth:*</label>
                          <input type="date" class="form-control" id="dob" name="dob" value="2005-01-09"  max="2005-01-09"required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="occupation">Occupational Field:*</label>
                          <select  class="form-control" id="occupation" name="occupation" required>
                              <option value="Accounting">Accounting</option> 
                              <option value="Entrepreneurship">Entrepreneurship</option> 
                              <option value="Finance">Finance</option>
                              <option value="Human Resources">Human Resources</option>
                              <option value="Healthcare">Healthcare</option>
                              <option value="Legal">Legal</option>
                              <option value="Marketing">Marketing</option>
                              <option value="NGO">NGO</option>
                              <option value="Operations">Operations</option>
                              <option value="Student">Student</option>
                              <option value="Technology">Technology</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="Mobile">Mobile Number:*</label>
                          <input type="tel" class="form-control"  id="Mobile" name="Mobile" size=10 required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="company-pass">If you are a core member, enter the company password:</label>
                            <input type="password" class="form-control" id="company-pass" name="company-pass" >
                        </div>
                    </div>
                    
                </div>
                <div>
                    <div class="form-group">
                        <label for="interests">Interests:</label>
                        <textarea class="form-control" placeholder="sports, game development, etc" id="interests" name="interests" rows="5"></textarea>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label for="avatar">Upload a profile picture:</label>
                        <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="twitter">Twitter handle:</label>
                          <input type="text" class="form-control" id="twitter" name="twitter" >
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="linkedin">LinkedIn handle:</label>
                          <input type="text" class="form-control"  id="linkedin" name="linkedin" >
                        </div>
                    </div>
                </div>
                <div>
                    <input type="reset" class="buttons" value="Reset">
                    <input type="submit" name="submit" class="buttons" value="Submit">
                </div>
            </form>

        </div>
        <!-- jQuery first, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>