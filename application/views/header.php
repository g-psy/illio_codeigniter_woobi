<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
  <title>illio landing page</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="../assets/favicon.ico">

  <!-- CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../assets/css/normalize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!-- Scripts -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../assets/js/init.js"></script>
  <script type="text/javascript" src="../assets/js/chkBrowser.js"></script>

  <!-- Materialize CSS -->
  <!-- <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
  <!-- <script type="text/javascript" src="../assets/js/materialize.js"></script> -->

  <!-- Bootstrap -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>


  <!-- Maps API -->
  <!-- <script type="text/javascript" src="//apis.daum.net/maps/maps3.js?aae93eb0fc2ed71fe6c21764e33a5313"></script>
  <script type="text/javascript" src="js/maps.js"></script> -->
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img class="brand-logo" alt="illio" src="../assets/img/logo/illioLogoWhite.png"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#link-about" class="scroll">About</a></li>
          <li><a href="#link-team" class="scroll">Team</a></li>
          <li><a href="#link-service" class="scroll">Service</a></li>
          <li><a href="#link-contact" class="scroll">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <?php
              if($this->session->userdata('is_login')){
              ?>
                <li><a href="auth/logout">로그아웃</a></li>
              <?php
              } else {
              ?>
                <li><a href="auth/login">로그인</a></li>
                <li><a href="auth/register">회원가입</a></li>
              <?php
              }
              ?>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

