<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "northwind";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $sql = "SELECT * FROM customers";
?>

<style>
  td {
    padding: 5px;
  }

  .bold {
    font-weight: bold;
  }
</style>

<table>
  <tr>
    <td class="bold"> ID: </td>
    <td class="bold"> Firma: </td>
    <td class="bold"> Vorname: </td>
    <td class="bold"> Nachname: </td>
    <td class="bold"> Job Title: </td>
  </tr>
<?php
foreach ($conn->query($sql) as $row) {
  ?>
  <tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['company']; ?></td>
    <td><?= $row['first_name']; ?></td>
    <td><?= $row['last_name']; ?></td>
    <td><?= $row['job_title']; ?></td>
  </tr>
  <?php
}
echo "</table>";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>