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
</head>
<body>
    
    
    
    <div class="container2">
            <nav>
            <label class="logo">AXIS&nbsp;&nbsp;BANK</label>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="amounttransfer.php">amount transfer</a></li>
                <li><a href="viewcust.php">view cutomers</a></li>
                <li><a href="transhist.html">TRANSCATION HISTORY</a></li>
                </ul>
            </nav>
    </div>
    
    
     <div class="acontainer2">
       <b>National Electronic Funds Transfer</b><br>
       <b style="font-size: 15px;">(NEFT transfer).</b>
        </div>
    <div class="acontainer3">
        
           <form>
                <label for="adminid" style="font-family: cursive; color: white;">Admin id</label>
    <select>  
               <?php 
               
                $query = mysqli_query($conn,"select accountno,accountname from persons");
    
                while($res = mysqli_fetch_array($query))
    {
               ?>
               
      <option><?php echo $res['accountno']."(".$res['accountname'].")";?></option>
                   <?php
    }
               ?>
     </select>
                
                <label for="adminname" style="font-family: cursive; color: white;">User Name</label>
                <select>  
               <?php 
               
                $query = mysqli_query($conn,"select accountno,accountname from persons");
    
                while($res = mysqli_fetch_array($query))
    {
               ?>
               
      <option><?php echo $res['accountno']."(".$res['accountname'].")";?></option>
                   <?php
    }
               ?>
     </select>
               
                <label for="adminname" style="font-family: cursive; color: white;">ENTER AMOUNT</label>
                
                <input type="text"  name="adminnames" placeholder="Admin Name">
               


                <input type="submit" id="submit" name="submit" placeholder="submit" style="margin-top: 10px;">
               
    </form>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="container5">
        <center><p>By Pramod &copy;. 2021-2022</p></center>
    
    </div>
    
    
    

</body>


</html>