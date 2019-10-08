<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require_once ("koneksi.php");
if (isset($_SESSION['admin'])) {
session_start();
  header('Location: index.php');
  exit();
} else
if (isset($_POST['masuk']) == 'on') {
	// Memfilter Inputan
	if (!ctype_alnum($_POST['username']) OR !ctype_alnum($_POST['password'])){
		echo "<script>
                    alert('SQL Injection Detected');
                    window.location='login.php';
             </script>";
		} else {
			// Query SQL Untuk Mengambbil Data dari tabel admin
			$query = "SELECT * FROM user WHERE username='" .$_POST['username']. "' AND password='" .($_POST['password']). "'";
			if ($query = $con->query($query)) {
				if ($query->num_rows) {
					session_start();
            while ($data = $query->fetch_array()) {
                $_SESSION['admin'] = true;
                $_SESSION['username'] = $data['username'];
                $_SESSION['password'] = $data['password'];
                $_SESSION['nama'] = $data['nama'];
                
            }
            header('Location: index.php');
        } else {
            echo "
                <script>
                    alert('Username atau Password Salah!');
                    window.location='login.php';
                </script>
            ";
        }
    } else {
        echo "<script>alert('Gagal');</script>";
    }
}
}
?>
<html>
 
<head>
    <title>SID Parampuan | Sign In</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="form_login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="form_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="form_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="form_login/vendor/animate/animate.css">    
    <link rel="stylesheet" type="text/css" href="form_login/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="form_login/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="form_login/vendor/select2/select2.min.css">    
    <link rel="stylesheet" type="text/css" href="form_login/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="form_login/css/util.css">
    <link rel="stylesheet" type="text/css" href="form_login/css/main.css">
    <!-- <link rel="icon" href="img/logo2.png"> -->
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    <script type="text/javascript">
    function validate()
    {
    var error="";
    var name = document.getElementById( "nama" );
    if( name.value == "" )
    {
    error = " Username Harus Diisi ";
    document.getElementById( "error_para" ).innerHTML = error;
    return false;
    }
    var error="";
    var name = document.getElementById( "pass" );
    if( name.value == "" )
    {
    error = " Password Harus Diisi ";
    document.getElementById( "error_para" ).innerHTML = error;
    return false;
    }
    else
    {
    return true;
    }
    }
</script>
</head>

<body class="gray-bg">
    <div class="limiter">
        <div class="container-login100" style="background-image: url('form_login/images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <form class="login100-form validate-form p-b-33 p-t-5" method="post" id="login-form" class="login100-form validate-form" onsubmit="return validate(); ">

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text" id="username" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" id="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn" name="masuk">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    <script src="form_login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="form_login/vendor/animsition/js/animsition.min.js"></script>
    <script src="form_login/vendor/bootstrap/js/popper.js"></script>
    <script src="form_login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="form_login/vendor/select2/select2.min.js"></script>
    <script src="form_login/vendor/daterangepicker/moment.min.js"></script>
    <script src="form_login/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="form_login/vendor/countdowntime/countdowntime.js"></script>
    <script src="form_login/js/main.js"></script>
</body>
</html>
