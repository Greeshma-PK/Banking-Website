<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank_database";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM history" ;
$result = $conn->query($sql);
?>

            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>

        <style>
        html {
            position: relative;
            min-height: 50%;
        }

        body {
               padding-top: 50px;
               font-size:25px;
               padding-bottom: 100px;
               background: #f5fce3;
               background: -webkit-linear-gradient(to right, #f5fce3, #e1e6d6 );
               background: linear-gradient(to right, #f5fce3, #e1e6d6 );
              }
        .container{
            padding-top:3px;
            display: block;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            width: 75%;
        }
            body{
	background-image: url('a5.jpg');
	background-repeat: no-repeat;
	background-size: cover;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 1050px;

}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr{background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
    </style>
</head>

<body>
  <!-- navbar -->
  <?php include('navbar.php'); ?>
	<div class="container">
        <h2 style="text-align: center">Transaction History</h2>

       <br>
       <div>
    <table id="customers">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Payer</th>
                <th>Payer Acc ID</th>
                <th>Payee</th>
                <th>Payee Acc ID</th>
                <th>Amount</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>

        <?php

    while($row = $result->fetch_assoc()) {
  ?>
 <tr>
        <td><?php echo $row['sno']; ?></td>
        <td><?php echo $row['payer']; ?></td>
        <td><?php echo $row['payerAcc']; ?></td>
        <td><?php echo $row['payee']; ?></td>
        <td><?php echo $row['payeeAcc']; ?></td>
        <td><?php echo $row['amount']; ?></td>
        <td><?php echo $row['time']; ?></td>


        </tr>
 <?php
    }

$conn->close();
?>
</
</table>
    </div>
</div>

<body>

</html>
