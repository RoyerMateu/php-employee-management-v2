
<nav class="navbar navbar-light bg-light">
  <div class="navFlex">
    <a class="navbar-brand" href="dashboard.php">
      <img src="<?php echo IMG; ?>/logo.png" width="70" height="30" class="d-inline-block align-top" alt="">
    </a>
    <p class="navbar-brand">Employees management</p>
    <a class="nav-link" href="dashboard.php">Dashboard</a>
    <a class="nav-link" href="employee.php">Employees</a>
  </div>
  <a href="./library/loginController.php">
    <form action="<?= BASE_URL ?>login/logoutUser" method="post" class="form-inline ml-auto">
      <button class="btn btn-danger" type="submit">Log Out</button>
    </form>
  </a>
</nav>