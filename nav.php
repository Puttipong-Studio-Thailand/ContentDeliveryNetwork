<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      CDN SYSTEM | Puttipong Studio
    </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 link-secondary">ระบบ CDN สำหรับเว็บไซต์ในเครือ Puttipong Studio</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <?php if (isset($_SESSION['user_login'])) { ?>
          <a href="logout.php" class="btn btn-danger"><i class="fad fa-sign-out-alt"></i> ออกจากระบบ</a>
           <a href="dashboard.php" class="btn btn-primary"><i class="fad fa-sliders-h"></i> หน้า Dashbord</a>
        <?php } else { ?>
          <a href="login.php" class="btn btn-outline-success me-2"><i class="fad fa-sign-in"></i> เข้าสู่ระบบ CDN Backend</a>
        <?php } ?>
      </div>
    </header>
</div>