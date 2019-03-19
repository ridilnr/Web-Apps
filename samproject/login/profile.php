<?php
session_start();
$conn = mysqli_connect("localhost", "root","");
$db = mysqli_select_db($conn, "mishovau");
$email= $_SESSION['login_user'];


$sql = mysqli_query($conn, "select * from userinfo where email_id='$email'");
$tql = mysqli_query($conn, "select * from userinfo where email_id='$email'");

// }
// else{
// 	$sql = mysqli_query($conn, "select * from userinfo");
// 	$tql = mysqli_query($conn, "select * from userinfo where email_id='$email'");
// }
$row=mysqli_fetch_array($sql);
$row1=mysqli_fetch_array($tql);


?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>
  <div class="formfirst">
   
     <div style="float:right;" >     
          <table>
		  <tr>
				<th colspan="8">Complete Database Info</th>

			</tr>
			<tr>
				<th>Image</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone Number</th> 
				<th>Email</th>
				
			</tr>
			<?php for($i=0;$i<mysqli_num_rows($sql);$i++){ ?>
			<tr>
				<td><center><?php echo '<img style="height:25px;width:40px;" onclick="window.open(this.src)" src="data:image/jpeg;base64,'.base64_encode( $row['frpage'] ).'"/>';?></center></td>
				<td><center><?php echo $row['firstname']; ?></center></td>
				<td><center><?php echo $row['lastname'];?></center></td> 
				<td><center><?php echo $row['phone_no'];?></center></td>
				<td><center><?php echo $row['email_id'];?></center></td>
			</tr>
			<?php $row=mysqli_fetch_array($sql);} ?>
		  </table>
  </div><div class="profileImage">
  <?php echo '<img style="height:100%;width:100%;" onclick="window.open(this.src)" src="data:image/jpeg;base64,'.base64_encode( $row1['frpage'] ).'"/>';?>
  </div>
  <div style="color: rgba(255, 255, 255, 0.5);font-size: 22px;margin-left:6%;"><?php echo $row1['firstname']; ?>&nbsp;<?php echo $row1['lastname'];?></div>
 <a href="logout.php"><button name="logout" class="button button-blocklogout"/>logout</button></a> 
  
  
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

       <script src="js/index.js"></script>   

    
    
    
  </body>
</html>