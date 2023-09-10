<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<style>
    .center {
        text-align: center;
        background: black;
        border:1px;
        
    }
    body{
        font-family: 'Montserrat', sans-serif;
        background-image: url("https://th.bing.com/th/id/R.3e42598b69d276a6720a9dbc428a8107?rik=FqNd%2fIk9Bz3JLg&riu=http%3a%2f%2f2.bp.blogspot.com%2f_dedcXqzPdxo%2fTSXg518rNiI%2fAAAAAAAAB1w%2fCvIeEX7RPvg%2fs1600%2fcute-puppies-pic3.jpg&ehk=BvkDLJ3ouuxzLy3LI%2fInMyuiuVn7w3zWowKCaMl3%2fGs%3d&risl=&pid=ImgRaw&r=0"); 
        
    }
    
</style>

<body>
    <form role="form" id="templatemo-preferences-form" name="login" action="" method="post">
        <div class="center">
            <h1><b>Login </b></h1>
            <label>NAME</label><br />

            <input type="text" id="name" placeholder="enter name" name="name" required> <br />
            <label>PASSWORD</label><br />

            <input type="text" id="pwd" placeholder="enter password" name="password" required><br />
            <br />
            <button type="submit" name="submit" value="Register">Login</button>



            <br>
            Click here to <a href="signup.php" title="Registration"> Register
        </div>
    </form>





    <?php
    // put your code here
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];

        $password = $_POST['password'];

        $con = mysqli_connect("localhost", "root", "", "user");

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }


        $query = "SELECT * FROM user_details WHERE name='$name' and password='$password'";
        $result = mysqli_query($con, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                session_start();
                $_SESSION['username'] = $name;

                header("Location: indexafterlogin.html");
            } else {
                echo ("Invalid credenatials");
            }
        } else {
            echo ("Invalid credenatials");
        }
    }
    ?>
</body>

</html>
