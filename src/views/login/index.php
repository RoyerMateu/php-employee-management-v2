<!DOCTYPE html>
<html>

<head>
    <title>Ajax Test</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo CSS;?>/login.css">
</head>
<body class="text-center">
    <main class="form-signin">
        <form action="<?php echo BASE_URL ?>login/loginUser" method="POST">
            <h3 class="mb-3">PLEASE LOGIN</h3>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="login-name" name="email">
                <label for="login-name">Email address or username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="login-pass" name="password">
                <label for="login-pass">Password</label>
            </div>

            <div class="mb-3">
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">SIGN IN</button>
        </form>
    </main>
</body>
</html>