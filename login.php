<!DOCTYPE html>
<html lang="en">
<?php 
    include 'includes/variables.php';
    include 'includes/head.php';
?>
<body>
<?php include 'includes/header.php';?>
    <section class="landing-page text-shadow-smoke inner-shadow">
        <h3>You have to login first before you can access the gallery</h3>
        <div class="card" style="width: 32%;padding: 50px;">
            <form action="" method="post">
                <label for="username">Username:</label>
                <input autocomplete="off" type="text" name="username">
                
                <label for="password">Password:</label>
                <input autocomplete="off" type="text" name="password">     
                
                <button type="submit">Login</button>
                
                <span class="centerer"><a href="register.php" class="btn btn--skew btn-default">Register</a></span>

            </form>
        </div>

        <!-- <div class="container" id="container">
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
        </div> -->
    </section>

    <?php
    // header("Location: /login.php");
        if(isset($_POST["submit"])){  
        
            if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
                $user=$_POST['user'];  
                $pass=$_POST['pass'];  
            
                $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
                mysqli_select_db('user_registration') or die("cannot select DB");  
            
                $query=mysqli_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
                $numrows=mysqli_num_rows($query);  
                if($numrows!=0)  
                {  
                while($row=mysqli_fetch_assoc($query))  
                {  
                $dbusername=$row['username'];  
                $dbpassword=$row['password'];  
                }  
            
                if($user == $dbusername && $pass == $dbpassword)  
                {  
                session_start();  
                $_SESSION['sess_user']=$user;  
            
                /* Redirect browser */  
                header("Location: member.php");  
                }  
                } else {  
                echo "Invalid username or password!";  
                }  
            
            } else {  
                echo "All fields are required!";  
            }  
        }  
    ?>  
</body>
    <!-- <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script> -->
</html>