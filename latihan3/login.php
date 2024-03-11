<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="container">
    <div class="card mt-4">
        <h5 class="card-header">Sign In</h5>
        <div class="card-body">
            <h5 class="card-title">Welcome to our site</h5>
            <form action="postPage.php" method="post">
                <div class="row">
                    <div class="row g-2 my-2">
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" required>
                        <br>
                    </div>
                    <div class="row g-2 my-2">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        <br>
                    </div>
                </div>
                <input name="btnSubmit" type="submit" value="Sign in">
                <input name="reset" type="reset" value="Cancel">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@523distjsbootstrapbundleminjs"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>