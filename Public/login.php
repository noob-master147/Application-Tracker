<?php
$host="localhost";
$username="root";
$password="";
$db="demo";

mysqli_connect($host,$username,$password);
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}
mysqli_select_db($con,$db);

If(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from loginform where username='.$uname.'&& 'password='.$password.'limit 1";
        $result=mysql_query($sql);
    if(mysql_num_rows($result)==1){
        echo "You have successfully logged in";
        exit();
    }
    else{
        echo "You have Entered Incorrect Password";
        exit();
    }
}