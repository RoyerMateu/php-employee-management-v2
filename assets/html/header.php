
<nav id="mainNav" data-base_url="<?= BASE_URL ?>" class="navbar navbar-light bg-light">
<div class="navFlex">
    <a class="navbar-brand" href="<?php echo BASE_URL;?>employee/dashboard">
      <img src="<?php echo IMG; ?>/logo.png" width="70" height="30" class="d-inline-block align-top" alt="">
    </a>
    <p class="navbar-brand">Employees management</p>
    <a class="nav-link" href="<?php echo BASE_URL;?>employee/dashboard">Dashboard</a>
  </div>

    <form action="<?= BASE_URL ?>login/logoutUser" method="post" class="form-inline ml-auto">
      <button class="btn btn-danger" type="submit">Log Out</button>
    </form>
</nav>