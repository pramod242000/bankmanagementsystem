<?php
include('connection.php');
error_reporting(0);

$dacn = $_POST['debit'];
$cacn = $_POST['credit'];
$am = $_POST['amount'];

$query1 = mysqli_query($conn,"SELECT * FROM `persons` WHERE accountno in ($dacn)");
$res = mysqli_fetch_array($query1);
 $updated = 0;
$updatec = 0;
if($res['amount'] > $am )
{
 
    $val = substr($cacn,0,8);
 
    echo $res['amount']."\n";
    echo $res['accountno']."\n";
    echo $res['accountname']."\n";
    $updated = $res['amount'] - $am;
    
    $query2= mysqli_query($conn,"SELECT * FROM `persons` WHERE accountno in ($val)");
    $res1 = mysqli_fetch_array($query2);
    
    echo $res1['amount']."\n";
     echo $res1['accountno']."\n";
    echo $res1['accountname']."\n";
    $updatec = $res1['amount'] + $am;    

    
    $query3 = mysqli_query($conn,"UPDATE `persons` SET amount='$updated' WHERE accountno in ($dacn)");
    $query4 = mysqli_query($conn,"UPDATE `persons` SET amount='$updatec' WHERE accountno in ($val)");
    
      $query = "INSERT INTO `transhist`(`sender`, `receiver`, `amount`) VALUES ('$dacn','$val','$am')";
  $data = mysqli_query($conn , $query);
    echo $data;
    
    echo "<script>alert(\"Amount transferred sucessfully.\")</script>";
	echo "<script> window.location = \"viewcust.php\"</script>";
}
else
{
  echo "<script>alert(\"Insufficient balence.\")</script>";
	echo "<script> window.location = \"viewcust.php\"</script>";  
}
    


?>