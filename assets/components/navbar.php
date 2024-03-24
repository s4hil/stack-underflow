<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="assets/imgs/favicon.png" width="50">
      StackOverFlow
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php"> 
          <i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="feedback.php"><i class="fas fa-info-circle"></i> Feedback</a>
        </li>
        <li class="nav-item dropdown"> 
          <a class="nav-link dropdown-toggle" href="#" id="accountSetting" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i>
          <?php echo ucwords($_SESSION['userName']); ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="accountSetting" style="margin-left: -15px;">
            <li>
              <a class="dropdown-item" href="settings.php">
                <i class="fas fa-cogs mr-1"></i> Settings
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="?logout">
                <i class="fas fa-power-off mr-1"></i> Logout
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>