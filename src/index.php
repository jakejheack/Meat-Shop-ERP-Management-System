
<?php 
session_start();

require_once('../system/config.php');

if(isset($_POST['login']))
{
  if(!empty($_POST['username']) && !empty($_POST['password']))
  {
    $username    = trim($_POST['username']);
    $password   = trim($_POST['password']);
    $md5Password = md5($password);
    
    $sql = "select * from access where username = '".$username."' and password = '".$md5Password."' and accstatus = 'on'";
    $rs = mysqli_query($conn,$sql);
    $getNumRows = mysqli_num_rows($rs);
    
    if($getNumRows == 1)
    {
      $getUserRow = mysqli_fetch_assoc($rs);
      unset($getUserRow['password']);
      
      $_SESSION = $getUserRow;

      header('location:admin/view/welcome');
      exit;
  }
  else
  {
      $errorMsg = "Wrong username or password";
  }
}
}

if(isset($_GET['logout']) && $_GET['logout'] == true)
{
  session_destroy();
  header("location:index");
  exit;
}


if(isset($_GET['lmsg']) && $_GET['lmsg'] == true)
{
  $errorMsg = "Login required to access";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="admin/view/assets/images/logo_icon.png">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/iofrm-theme4.css">
    <style>
#text {display:none;color:red}
</style>
</head>
<body>

    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="../assets/images/graphic1.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 style="color:#0093FF;">Hello, Welcome Back !</h3>
                        <p>Sign in to continue to erp system.</p>
                        <?php 
                        if(isset($errorMsg))
                        {
                            echo '<div class="alert alert-danger">';
                            echo $errorMsg;
                            echo '</div>';
                            unset($errorMsg);
                        }
                        ?>
                        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="needs-validation" novalidate>
                            <input class="form-control" type="text" name="username" placeholder="Username" id="login__username" autocomplete="off" required>

                            <input class="form-control" type="password" name="password" placeholder="Password" id="myInput" autocomplete="off" required>
                            <h6 id="text">Caps lock is on</h6>

                            <div class="form-button">
                                <button type="submit" class="ibtn" value="Sign In" name="login">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <!-- parsleyjs -->
    <script src="admin/view/assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="admin/view/assets/js/pages/form-validation.init.js"></script>
    <script>
        var input = document.getElementById("myInput");
        var text = document.getElementById("text");
        input.addEventListener("keyup", function(event) {

            if (event.getModifierState("CapsLock")) {
                text.style.display = "block";
            } else {
                text.style.display = "none"
            }
        });
    </script>
</body>
</html>