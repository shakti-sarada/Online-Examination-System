<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="OES.css">
    <title>Registration Page</title>
    <script>
      // function myfun(){
      //   var a=document.getElementById("Password").value;
      //   var b=document.getElementById("Passwords").value;
        
      //   if(a==""){
      //     document.getElementById("messages").innerHTML="** Please Fill Password";
      //     return false;
      //   }
      //   if(a.length<6){
      //     document.getElementById("messages").innerHTML="** Password Length Must Be Greater Than 6";
      //     return false;
      //   }
      //   if(a.length>12){
      //     document.getElementById("messages").innerHTML="** Password Length Must Be Less Than 12";
      //     return false;
      //   }
  
      //   if(a!=b){
      //     document.getElementById("messages").innerHTML="** Password Does Not Match";
      //     return false;
      //   }
      //  }
    </script>
</head>
<body class="c2">
      <form method="post" onsubmit="return myfun()">
        <label class="c"><b><em><marquee direction="right">Welcome To Registration Page</marquee></label></b></em>
          <fieldset><center>
          <label class="c"><b>First Name: <input type="textbox" value="" id="First" name="FirstName" required><br><br></label></b>
          <label class="c"><b>Last Name: <input type="textbox" value="" id="Last" name="LastName" required><br><br></label></b>
          <label class="c"><b>Age: <input type="textbox" value="" name="Age" required><br><br></label></b>
          <label class="c"><b>Email Id: <input type="textbox" value=""  name="EmailId" required><br><br></label></b>
          <label class="c"><b>Password: <input type="password" value="" id="Password"  name="Password" required><br><br></label></b>
          <span id="messages" style= color:crimson>  </span><br><br>
          <label class="c"><b>Confirm Password: <input type="password" value="" id="Passwords" required><br><br></label></b>
          <span id="messagess" style= color:crimson>  </span><br><br>
          <input type="submit" value="Submit" required><br><br>
          <a href="LoginPage.html">Sign-in</a><br/>
          <label class="c"><b><input type="Reset" required><br><br></label></b>
          </fieldset></center>
      </form>
</body>
</html>
<?php
	$FirstName = filter_input(INPUT_POST, 'FirstName');
    $LastName = filter_input(INPUT_POST, 'LastName');
    $Age = filter_input(INPUT_POST, 'Age');
    $EmailId = filter_input(INPUT_POST, 'EmailId');
    $Password = filter_input(INPUT_POST, 'Password');

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "test";
    
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname) or die("cannot connect");

    $sql = "INSERT INTO account values ('$FirstName','$LastName', '$Age', '$EmailId', '$Password')";
    
    $rs = mysqli_query($conn, $sql);
    
    // $conn->close();
?>

