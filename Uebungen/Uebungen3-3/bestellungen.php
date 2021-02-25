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

  $customerId = $_GET['id'];

  $sql = "SELECT * FROM orders WHERE customer_id = :customerId";

  $statement = $conn->prepare($sql);
  $statement->execute(array(':customerId' => $customerId));
?>

<style>
  td {
    padding: 5px;
  }

  .bold {
    font-weight: bold;
  }
</style>

<h1>Bestellungen des Kunden</h1>
<table>
  <tr>
    <td class="bold"> ID: </td>
    <td class="bold"> Name: </td>
    <td class="bold"> Bestelldatum: </td>
    <td class="bold"> Adresse: </td>
    <td class="bold"> Stadt: </td>
    <td class="bold"> Bestellung löschen</td>
  </tr>
<?php
foreach ($statement->fetchAll()as $row) {
  ?>
  <tr>
    <td><?= $row['customer_id']; ?></td>
    <td><?= $row['ship_name']; ?></td>
    <td><?= $row['order_date']; ?></td>
    <td><?= $row['ship_address']; ?></td>
    <td><?= $row['ship_city']; ?></td>
    <td><a href="delete.php?id=<?= $row['id']; ?>">löschen</a></td>
  </tr>
  <?php
}
echo "</table>";
?>