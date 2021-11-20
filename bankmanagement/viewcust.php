<?php

include('connection.php');
?>
<!DOCTYPE html>

<html>
<head>
    
    <title>NAvigaotr</title>
    <meta charset="utf-8">
    <meta name= "viewport" content="width=device-width" initial-scale=1.0>
    <link rel="stylesheet" type="text/css" href="indexpage.css">
    
    
    
    
    
    
    
    
    <style>
        
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
  align-content: center;
 margin:auto;
    margin-top: none;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color:#e60073;
  color: white;
        }

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
        
        
        
        
</style>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</head>
<body>
    
    
    
    <div class="container2">
            <nav>
            <label class="logo">AXIS&nbsp;&nbsp;BANK</label>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="amounttransfer.php">amount transfer</a></li>
                <li><a href="viewcust.php">view cutomers</a></li>
                <li><a href="transhisttory.php">TRANSCATION HISTORY</a></li>
                </ul>
            </nav>
    </div>
   
    
    <div class="container8">
   <table id="customers">
  <tr>
    <th>ACCOUNT NO</th>
    <th>ACCOUNT HOLDER NAME</th>
    <th>MOBILE NUMBER</th>
      <th> EMAIL ID</th>
      <th>BALENCE($)</th>
      <th>JOIN DATE</th>
      <th>transfer money</th>
  </tr>
        <?php 
               
                $query = mysqli_query($conn,"select * from persons");
        
    
                while($res = mysqli_fetch_array($query))
    {
                   
     echo "<tr>
            <td>".$res['accountno']."</td>
            <td>".$res['accountname']."</td>
            <td>".$res['mobileno']."</td>
            <td>".$res['emailid']."</td>
            <td>".$res['amount']."</td>
            <td>".$res['date']."</td>
            <td><a href='amounttrans.php? an=$res[accountno]'><center><button style='background-color: #809fff; /* Green */
  border: none;
  color: white;
  padding:10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
                font-size: 10px;'>TRANSFER</center></button></center></a></td>
            </tr><br>";
            
      }

        ?>
</table>    
    
    
    
    
    
    
    
    
    
    
    
    </div>  
        
    
    
    
    
    
    <div class="container5">
        <center><p>By Pramod &copy;. 2021-2022</p></center>
    
    </div>
    
    
    

</body>


</html>