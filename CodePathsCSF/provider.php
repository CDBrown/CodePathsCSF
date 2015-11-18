<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        
 <?php 
    include("conn.php");
    $username=$_POST['login-username'];
    $password=sha1($_POST['login-password']); //my passwords are hashed in the database using the sha1

    $checklogin="SELECT * FROM providers WHERE Username=? AND Password=?";
    $query = $connection->prepare($checklogin);
    $query->bind_param("ss",$username,$password);
    $query->execute() or die($connection->error);
    $count = $query->num_rows;
    if($count==1)
   {
    while($row=$query->fetch_assoc)
        {
     $_SESSION['login-username']=$row['Username'];
    }
header("Location:index.php")
   }
 ?>
    </body>
</html>
