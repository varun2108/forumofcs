<?php 
ob_start();
session_start();
error_reporting(0);
if(!isset($_SESSION['user'])){
    header("location:index.php");
}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="mycss/userinfosignup.css">
</head>
  <body>
  <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="images/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p><?php echo "<strong>".$_SESSION['user']['name']."..</strong>!<br>";?>Register with us, we make your life easy!</p>
                        <form method="post" action="usesrinfosignup.php">
                        <input type="submit" name="login" value="Login"/><br/>
                    </form>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#student" role="tab" aria-controls="home" aria-selected="true">Student</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#faculty" role="tab" aria-controls="profile" aria-selected="false">Faculty</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
                                <h3 class="register-heading">As a Student</h3>
                                <form method="post" action="usesrinfosignup.php">
                                <div class="row register-form">
                                    <div class="col-md-10  registerfield">
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtstdPhone" class="form-control" placeholder="Your Phone *" value="" required="true" />
                                        </div>
                                        <div class="form-group">
                                           <input type="date" name="dob" placeholder="Date Of Birth" class="form-control" required="true">
                                        </div>
                                        <div class="form-group">
                                           <input type="text" name="usn" placeholder="USN" class="form-control" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label>profile picture</label>
                                            <div style="padding:0px;overflow:hidden">
                                             <input type="file" id="fileInput" name="fileInput" />
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                        <input name="stdreg" type="submit" class="btnRegister" value="Register"/>
                                    </div>
                                   </form>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="faculty" role="tabpanel" aria-labelledby="faculty-tab">
                                <h3 class="register-heading">As a Faculty</h3>
                                <form method="post" action="usesrinfosignup.php">
                                <div class="row register-form">
                                    <div class="col-md-10  registerfield">
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtstdPhone" class="form-control" placeholder="Your Phone *" value="" required="true" />
                                        </div>
                                        <div class="form-group">
                                           <input type="date" name="dob" placeholder="Date Of Birth" class="form-control" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="FileID">Profile picture</label>
                                            <input type="file" class="form-control" placeholder="picture" value=""/>
                                        </div>
                                         <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                        <input name="facreg" type="submit" class="btnRegister"   value="Register"/>
                                    </div>
                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<?php
session_start();
if(isset($_POST["stdreg"])){
    echo "<script>alert('facultyreg');</script>";
}
if(isset($_POST["facreg"])){
    echo "<script>alert('facultyreg');</script>";
}
if(isset($_POST["login"]))
{
session_unset();
session_destroy();
header("location:index.php");
}
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
<!------ Include the above in your HEAD tag ---------->



            