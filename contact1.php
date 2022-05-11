
<?php include('partials-front/menu.php'); ?>



<div class="main-content">
    <div class="wrapper">
        <h1>Contact Us</h1>
      <div >
        <br><br>
 <?php 
            if(isset($_SESSION['add'])) //Checking whether the SEssion is Set of Not
            {
                echo $_SESSION['add']; //Display the SEssion Message if SEt
                unset($_SESSION['add']); //Remove Session Message
            }
        ?>
        
        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;

}
td{
font-size:25px;
width:50%;
padding:10px;
font-weight:bold;
color:black;
}
input{
height:25px;
width:100%;
padding:10px;
font-size:20px;

border-radius:10px;
}
.split {
  height:500px;
  width: 50%;
  position: absolute;
  z-index: 1;
  top: 125px;
  overflow-x: hidden;
  padding-top:100px;
}

.left {
  left: 0;
  background-image: url('images/contact.jpg');
}

.right {
  right: 0;
   background-image: url('images/contact1.jpg');
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.centered1{
  position: absolute;
  top: 30%;
  left: 40%;
  transform: translate(-30%, -30%);
  text-align: center;
}


</style>
</head>
<body>

<div class="split left">
  <div class="centered1">
   
    <h2 style="font-size:48px;font-weight:bold;padding:10px;color:#15f4ee;">let's get in touch</h2>
    <p style="font-size:24px;font-weight:bold;padding:20px;color:#d3d3d3">Frankie Leo is a photography and videography platform where you can book for the session.</p>
<i class="fa fa-envelope" style="font-size:24px;"></i>
<span style="font-size:24px; padding:10px;color:#00008b;"> frankieleo.nic.in@gmail.com</span><br><br>
<i class="fa fa-phone" style="font-size:24px;"></i>
<span style="font-size:24px; padding:10px;color:#00008b;">+91 7061026832</span>
<br><br>
<p style="font-size:32px; padding:10px;font-weight:bold; color:#900090;">Connect with us..</p>
<i class="fa fa-facebook" style="font-size:24px;background:#3B5998;padding:10px;width:20px;border-radius:10px;margin:20px;"></i>
<i class="fa fa-instagram" style="font-size:24px;background:red;padding:10px;width:20px;border-radius:10px;margin:20px;"></i>
<i class="fa fa-twitter" style="font-size:24px;background:#0276ab;padding:10px;width:20px;border-radius:10px;margin:20px;"></i>
  </div>
</div>
<?php 
    
    $a=" ";
    if(isset($_POST['submit']))
    {
        
        $username = $_POST['user_name'];
        $email = $_POST['email'];
$phone = $_POST['phone'];
$review = $_POST['review'];
        $sql = "INSERT INTO message SET 
            username='$username',
            email='$email',
            phone='$phone',
            review='$review'
        ";
        $res = mysqli_query($conn, $sql) ;
        if($res==TRUE)
        {   $a=1;
           //$_SESSION['add'] =  "<tr><td colspan=2 style='font-size:24px;'>Message Successfully.</td></tr>";
         //  header("location:".SITEURL.'contact1.php'); 
        }
        else
        {$a=2;
            //$_SESSION['add'] = "<tr><td colspan=2 style='font-size:24px;'>Message not sent Successfully.</td></tr>";
           //$_SESSION['add'] = "<div class='error'>Failed to message</div>";
        }

    }
    
?>
<div class="split right">
  <div class="centered">
<h2 style="font-size:48px;font-weight:bold;"> Contact Us</h2>
    <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>User Name: </td>
                    <td>
                        <input type="text" name="user_name" required>
                    </td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td>
                        <input type="email" name="email" required>
                    </td>
                </tr>

                <tr>
                    <td>Phone no. : </td>
                    <td>
                        <input type="text" name="phone" required>
                    </td>
                </tr>
<tr>
                    <td>Message: </td>
                    <td>
                        <input type="text" name="review" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Send" class="btn-secondary" style="height:50px;background-color:#00008B;border-radius:10px;width:60%;color:#d3d3d3;font-weight:bold;">
                    </td>
                </tr>
<?php
if($a=="1")
echo("<tr ><td colspan=2 align='center'  style='font-size:24px;color:green;font-weight:bold;'>Message sent Sucessfully ..</td></tr>");
else if($a=="2")
echo("<tr ><td colspan=2 align='center'  style='font-size:24px;color:red;font-weight:bold;'>Message not sent ,Some Problem</td></tr>");


?>


</table>
  </div>

 
</div>
<br><br><br><br>
<br><br><br><br>
 <?php include('partials-front/footer.php'); ?>
</div>

     </form>

</body>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br><br><br>
 <?php include('partials-front/footer.php'); ?>
</html> 
