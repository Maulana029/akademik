<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../dist/img/logo-smk.png">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <title>PPDB || SMK Attaqwa 05 Kebalen</title>
  <style>
    body {
      padding: 0;
      margin: auto;
      overflow-x: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #334756;
      font-family: "Poppins", sans-serif;
    }

    h1 {
      font-size: 1.2em;
      padding: 0;
      margin: 0;
    }

    h2 {
      font-size: 1.1em;
      padding: 0;
      margin: 0;
    }

    p {
      font-size: 1em;
      padding: 0;
      margin: 0;
    }

    .container {
      width: 100%;
      display: grid;
      grid-template-columns: repeat(8, 1fr);
      gap: 10px;
      margin: 10px;
      box-shadow: 15px 20px 15px rgba(0, 0, 1);
      border-radius: 15px;
      background-color: #fff;
      overflow: hidden;
    }

    .container-left {
      grid-column: 1/9;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      margin-bottom: 8px;
      padding: 20px;
      background-color: #eeee;
    }

    .container-left img {
      width: 100%;
    }

    .container-left h1 {
      text-align: center;
      font-size: 1.5em;
      padding: 10px 0;
    }

    .container-left p {
      text-align: center;
    }

    .container-right {
      grid-column: 1/9;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 5px;
      margin: 0;
    }

    .container-right h2 {
      display: none;
    }

    .container-right img {
      padding-top: 10px;
    }

    .container-right form {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .container-right .input {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      margin: 8px 0;
      width: 90%;
    }

    .input input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      outline: none;
      border: 1px solid #ccc;
      border-radius: 5px;
      transition: 0.5s;
      font-family: arial narrow;
      font-size: 18px;
    }

    .input input:focus {
      border: 1px solid #038ade;
      transition: 0.5s;
    }

    @media screen and (min-width: 450px) {
      .container {
        width: 400px;
      }
    }

    @media screen and (min-width: 760px) {
      .container {
        width: 100%;
      }

      body {
        height: 100vh;
      }

      .container-left {
        grid-column: 1/6;
        margin-bottom: 0;
        padding: 20px;
      }

      .container-left img {
        width: 85%;
      }

      .container-left .text {
        padding: 10px 0 0;
        width: 350px;
      }

      .container-left h1 {
        font-size: 1.5em;
      }

      .container-right h2 {
        display: block;
      }

      .container-left p {
        font-size: 0.9em;
      }

      .container-right {
        grid-column: 6/9;
      }
    }

    @media screen and (min-width: 960px) {
      .container {
        width: 900px;
        height: 450px;
      }

      .container-left {
        padding: 0;
      }

      .container-left .text {
        padding: 10px 0 0;
        width: 480px;
      }
    }

    .paragraf,
    p {
      margin-top: 20px;
      font-family: arial narrow;
      font-size: 25px;
      text-align: center;
      font-weight: bold;
    }

    p {
      font-style: italic;
      font-weight: bold;
      ;
    }

    label {
      font-family: arial narrow;
      font-size: 18px;
      text-align: center;
      font-weight: bold;
    }

    .footer-1 {
      padding: 25px;
      margin-top: 30px;
      font-size: 14px;
      color: grey;
      font-family: arial narrow;

    }

    a {
      text-decoration: none;
      list-style: none;
      color: grey;
    }

    a:hover {
      color: #038ade;
      text-decoration: underline;
    }
    button {
      float: right;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="container-left">
      <img src="../dist/img/background.jpg" alt="form-login">
      <div class="paragraf">
        Penerimaan Peserta Didik Baru <br>
        SMK Attaqwa 05 Kebalen
      </div>
      <p style="font-size: 12px;">Jl. KH. Ahmad Tajuddin (Warung Ayu) Rt.005/003 Kelurahan Kebalen <br> Kecamatan Babelan Kabbupaten Bekasi Provinsi Jawa Barat</p>
    </div>
    <div class="container-right">
      <center><img src="../dist/img/logo-smk.png" width="84" height="80" alt=""></center>
      <form method="post" action="proses.php">
      <label for="">Selamat Datang Di Aplikasi PPDB <br> Silahkan Login</label>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email_user" id="email_user" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_user" id="password_user" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <button class="form-control btn btn-primary btn-block" type="submit">Masuk</button>
        </div>
      </form>
      <div class="footer-1">
        Copyright &copy; 2023 by <a href="https://www.instagram.com/web_programming_developer_09/">Web Programming Developer</a>
      </div>
    </div>
  </div>
</body>
</html>
