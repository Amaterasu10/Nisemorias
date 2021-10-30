<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/main.min.css">

</head>
<body class="login">
    <section class="landing-page">
        <!-- <div class="form-container centerer" style="margin-top: 20px">
            <form action="" method="post" class="card">
                
                <label for="username">Username:</label>
                <input autocomplete="off" type="text" name="username">
                
                <label for="password">Password:</label>
                <input autocomplete="off" type="text" name="password">     
                
                <button type="submit">Login</button>    
                
                <span class="centerer"><a href="#">Forgot password?</a></span>

            </form>
        </div> -->

        <div class="container" id="container">
	<div class="form-container sign-up-container">
                <form action="home.php">
                    <h1>Create Account</h1>

                    <input type="text" placeholder="Username" />
                    <input type="password" placeholder="Password" />
                    <button>Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="home.php">
                    <h1>Sign in</h1>
                    <input type="text" placeholder="Username" />
                    <input type="password" placeholder="Password" />
                    <a href="#">Forgot your password?</a>
                    <button>Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</html>