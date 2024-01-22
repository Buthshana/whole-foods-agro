<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vm.css">
    <script src="https://kit.fontawesome.com/c9f5871d83.js" crossorigin="anonymous"></script>
    <title>loginmy</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="whole_foods_welcome.php">Home</a>
            <a href="about.html">About</a>
            <a href="mission.php">Mission</a>
        </nav>
        <div class="search">
            <i class="fa-solid fa-user"></i>
        </div>
    </header>
    <div class="background"></div>
    <section class="home">
        <div class="content">
            <a href="#" class="logo"><i class="fa-solid fa-paper-plane"></i>EVERY THINGS FOR YOU!</a>
            <h2>Welcome</h2>
            <h3>To the WHOLE FOODS Place</h3>
            <pre>Buying Fruits , Learnmore ,Regisetering</pre>
            <div class="icon">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-whatsapp"></i>
            </div>
        </div>
        <div class="login">
            <h2> Login </h2>
            <div class="input">
                <input type="text" class="input1" placeholder="Email" required id="email">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input">
                <input type="password" class="input1" placeholder="Password" required id="password">
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="check">
                <label><input type="checkbox">Remember me </label>
                <a href="#">Forget password</a>
            </div>
            <div class="button">
                <button class="btn" onclick="performLogin()"><a href="productpage.php">Login</a></button>
            </div>
            <div class="sign-up">
                <p> Don't have an account- </p>
                <a href="create_account.html">Sign-up</a>
            </div>
        </div>
    </section>

    <script>
    function performLogin() {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

        // Send login request to the server for authentication
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "login_check.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    if (xhr.responseText === "success") {
                        // Redirect the user to the product page after successful login
                        window.location.href = "productpage.php";
                    } else {
                        // Display error message for incorrect credentials
                        alert("Invalid email or password. Please try again.");
                    }
                } else {
                    // Handle any error that occurred during the request
                    alert("Error occurred while processing your request. Please try again later.");
                }
            }
        };
        xhr.send("email=" + email + "&password=" + password);
    }
</script>
</body>

</html>
