<?php
session_start();

if (!empty($_SESSION['username'])) {
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>...:::PT. Seraya Indah | Administrasi Surat Masuk::......</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />




<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#login').submit(function(){
            var u = jQuery('#username').val();
            var p = jQuery('#password').val();
            if(u == '' && p == '') {
                jQuery('.login-alert').fadeIn();
                return false;
            }
        });
    });
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="loginpage">
  <div class="logo">
                                <a href="index.html" title="">
                                    <img src="assets/img/log.jpg" alt="Logo" />
                                </a>
                            </div>
<div class="loginpanel">
    <div class="loginpanelinner">
        <div class="logo animate0 bounceIn"><img src="images/logo.png" width="200" alt="" /></div>
        <form id="login" action ="proseslogin.php" method="post" />
            <div class="inputwrapper login-alert">
                <div class="alert alert-error">Invalid username or password</div>
            </div>
            <div class="inputwrapper animate1 bounceIn">
                <input type="text" name="username" id="username" placeholder="Enter any username" />
            </div>
            <div class="inputwrapper animate2 bounceIn">
                <input type="password" name="password" id="password" placeholder="Enter any password" />
            </div>
            <div class="inputwrapper animate3 bounceIn">
                <button name="submit">Sign In</button>
            </div>

            
        </form>
    </div><!--loginpanelinner-->
</div>
<!--loginpanel-->

<div class="loginfooter">
    <p>&copy; 2017. Mas Adi 085717130111</p>
</div>

</body>
</html>
