<!--Pizza Konfigurator-->
<form method="POST" action="?">
    <h1>Pizza Konfigurator</h1>
    <p>Deine Pizza besteht aus folgenden Toppings:</p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $zutat = $_POST['zutat'];
            echo "{$zutat}</br></br>";
        }
        ?>
    <label>Füge weitere Zutaten hinzu: </label><input type="text" name="zutat" placeholder="Zutat" /><br><br>
    <input type="submit" value="Hinzufügen" />
</form>



