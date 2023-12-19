<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width= , initial-scale=1.0" />
    <title>Rich Ricasso</title>
    <link rel="stylesheet" href="signUp.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="main-container">
        <div class="sign-login">
            <h2>Sign up</h2>
            <p>
                <a class="have-account" href="login.html">have an account?</a>
            </p>
        </div>

        <form action="index.php" method="POST" id="form-signUp">
            <input type="hidden" name="newsletter" />
            <div class="input-container">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />
            </div>
            <div class="input-checkbox">
                <input type="checkbox" name="news" id="newsLetter" class="checkbox" value="news" />
                <label class="news" for="newsLetter">I want to be subscribe to your news letter</label>
            </div>
        </form>

        <button type="submit" form="form-signUp">Sign me up to the news letter</button>
    </div>
</body>

</html>