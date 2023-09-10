<html>

<head>
	<meta charset="UTF-8">
	<title>Signup and give your pet the best</title>
        <style>
            form {
      background-color:black;
      padding: 15px;
      color: white;
      border:transparent;
     }      
     input {
      padding:10px;
      margin:5px;
     }
     input:focus {
      background: gold;
      color: brown;
      font-size:24px;
     }
     input[type=color]:focus {
       border:2px solid black;
     }	 	 
     input:hover {
       width:250px;
     }
     input:active {
       background: white;
     }
     body{
         font-family: 'Montserrat', sans-serif;
         text-align: center;
         background-image: url("https://th.bing.com/th/id/R.3e42598b69d276a6720a9dbc428a8107?rik=FqNd%2fIk9Bz3JLg&riu=http%3a%2f%2f2.bp.blogspot.com%2f_dedcXqzPdxo%2fTSXg518rNiI%2fAAAAAAAAB1w%2fCvIeEX7RPvg%2fs1600%2fcute-puppies-pic3.jpg&ehk=BvkDLJ3ouuxzLy3LI%2fInMyuiuVn7w3zWowKCaMl3%2fGs%3d&risl=&pid=ImgRaw&r=0"); 
     }
        </style>
</head>

<body>
	<?php
	// put you<?php
	 $Name = $pet_type = $email = $mobile = $time = "" ;
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = $_POST['name'];
            $pet_type= $_POST['pet_type'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $time = $_POST['time'];
            
            
            $con = mysqli_connect("localhost","root","","user");                     
       
			$query = "DELETE FROM bookings WHERE name='$name' and mobile=$mobile";
                        $result = mysqli_query($con,$query);
                        if($result){
			 echo ("booking  deletion Succesful");
                         echo($query=("SELECT * FROM bookings"));
			            }
                                    else
                                    {
                                        echo ("Fail"); 
                                    }
                         } 
        
        
        
	?>
    <form  action="" method="post" >
            <div class="center">
            <h1>Sorry for not having a great time... </h1>
            
            <label>name</label></br><input type="text"   name="name"><br/> 
            <label>pet_type</label></br><input type="text"   name="pet_type"><br/> 
            <label>email</label></br><input type="text"   name="email"><br/> 
            <label>mobile</label></br><input type="password"   name="mobile"><br/>
            <label>time</label></br><input type="text"   name="time"><br/></br>
            <button type="submit"  name="submit" value="Register" >Update</button>
            
            </div>
        </form>

	
</body>

</html>



