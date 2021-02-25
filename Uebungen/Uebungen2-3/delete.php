<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "northwind";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  $ordersId = $_GET['id'];

  $statement = $conn->prepare("DELETE FROM users WHERE id = ?");
  $statement->execute(array(':ordersId' => $ordersId));
?>


<!--
$statement = $conn->prepare("DELETE FROM invoices WHERE order_id = :id");
$statement->execute(array(':id' => $IdtoDelete));

$statement = $conn->prepare("DELETE FROM order_details WHERE order_id = :id");
$statement->execute(array(':id' => $IdtoDelete));

$statement = $conn->prepare("DELETE FROM orders WHERE id = :id");
$statement->execute(array(':id' => $IdtoDelete));

