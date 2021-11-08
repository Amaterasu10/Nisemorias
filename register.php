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
        <div class="card" style="width: 32%;padding: 50px;>
            <form action="" method="post">
                 <label for="name">Name:</label>
                <input autocomplete="off" type="text" name="name">

                <label for="username">Username:</label>
                <input autocomplete="off" type="text" name="username">
                
                <label for="password">Password:</label>
                <input autocomplete="off" type="text" name="password">     
                
                <button type="submit">Register</button>    
                
                <span class="centerer"><a href="login.php" class="btn btn--skew btn-default">Login</a></span>

            </form>
        </div>
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