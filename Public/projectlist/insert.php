<?php
//insert.php;

if(isset($_POST["Name"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=projectlist", "root", "");
 $order_id = uniqid();
 for($count = 0; $count < count($_POST["item_name"]); $count++)
 {  
  $query = "INSERT INTO `project1`(`ID`, `Name`, `Registration Number`, `Role`, `Skills Required`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    
    ':ID'   => $ID,
    ':Name'  => $_POST["Name"][$count], 
    ':Registration Number' => $_POST["Registration Number"][$count], 
    ':Role'  => $_POST["Role"][$count]
    ':Skills Required'  => $_POST["Skills Required"][$count]
       
   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}
?>