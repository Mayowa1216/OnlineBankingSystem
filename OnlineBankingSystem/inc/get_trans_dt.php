<?php
 include '../dbconnect.php';
 include 'getdetails.php';
 $database = new Database();
$db = $database->dbConnection(); 
 // getting all transaction details of the account 
 $trans_result = $db->prepare("SELECT * FROM transaction WHERE sender = '".$row_cust["account_no"]."'  														 										 OR receiver = '".$row_cust["account_no"]."'" );
 $trans_result->execute();
 $row_trans = $trans_result->fetchall();//setFetchMode(PDO::FETCH_ASSOC);
 /*
  suppose we want to show amount tranfered in transaction we can show it by echo $row_trans["money"] and like this every column 
 */
 
 ?>