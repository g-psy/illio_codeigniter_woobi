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
