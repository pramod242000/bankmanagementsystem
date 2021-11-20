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
        
#customers1 {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
  align-content: center;
 margin:auto;
    margin-top: 50px;
}

#customers1 td, #customers1 th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers1 tr:nth-child(even){background-color: #f2f2f2;}

#customers1 tr:hover {background-color: #ddd;}

#customers1 th {
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
   <table id="customers1">
  <tr>
    <th>sl no</th>
    <th>DEBITER</th>
    <th>CREDITER</th>
    <th>AMOUNT</th>
      <th>DATE OF TRANSATION</th>
  </tr>
        <?php 
               
                $query = mysqli_query($conn,"select * from transhist");
            while($res = mysqli_fetch_array($query))
    {
                   
     echo "<tr>
            <td>".$res['ID']."</td>
            <td>".$res['sender']."</td>
            <td>".$res['receiver']."</td>
            <td>".$res['amount']."</td>
            <td>".$res['dot']."</td>
            <tr>";
            
      }

        ?>
</table>    
    
    
    
    
    
    
    
    
    
    
    
    </div>  
        
    
    
    
    
    
    <div class="container5">
        <center><p>By Pramod &copy;. 2021-2022</p></center>
    
    </div>
    
    
    

</body>


</html>