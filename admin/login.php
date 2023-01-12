<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="shortcut icon" href="../dist/img/logo-smk.png">
    <style>
        html,body{
        background-image: url('../dist/img/background.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
        }

        .container{
        height: 100%;
        align-content: center;
        }

        .card{
        height: 43.5%;
        margin-top: auto;
        margin-bottom: auto;
        width: 450px;
        background-color: rgba(0,0,0,0.5) !important;
        }

        .social_icon span{
        font-size: 60px;
        margin-left: 10px;
        color: #FFC312;
        }

        .social_icon span:hover{
        color: white;
        cursor: pointer;
        }

        .card-header h3{
        color: white;
        }

        .social_icon{
        position: absolute;
        right: 20px;
        top: -45px;
        }

        .input-group-prepend span{
        width: 40px;
        background-color: #FFC312;
        color: black;
        border:0 !important;
        }

        input:focus{
        outline: 0 0 0 0  !important;
        box-shadow: 0 0 0 0 !important;

        }

        .login_btn{
        color: black;
        background-color: #FFC312;
        width: 100px;
        }

        .login_btn:hover{
        color: black;
        background-color: white;
        }

        .links{
        color: white;
        }

        .links a{
        margin-left: 4px;
        }
    </style>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   </head>
<body style="font-family: 'Comic Sans MS';">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <marquee><h3 class="text-center">Selamat Datang Di Aplikasi PPDB SMK Attaqwa 05, Silahkan Login Menggunakan Email dan Kata Sandi</h3></marquee>
                    <div class="d-flex justify-content-end social_icon">
                    
                </div>
                <div class="card-body">
                    <form action="proses.php" method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input style="height: 40px;" name="email_user" type="text" class="form-control" placeholder="Email..." required="true">
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input style="height: 40px;" name="password_user" type="password" class="form-control" placeholder="Kata Sandi..." required="true">
                        </div>
                        <div class="form-group">
                            <div class="float-right">
                                <button type="submit" class="btn btn-warning btn-block" style="width: 150px; height: 40px;">Sign In <i class="fas fa-sign-in-alt"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                    <span class="mt-0" style="text-align: center; color: whitesmoke;">Copyright &copy; 2023 By: <a href="">Kang Kopi Belajar Pemrograman</a></span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>