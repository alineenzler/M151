<!--Pizza Konfigurator-->
<?php
    session_start();
    $zutaten = $_SESSION['zutaten'];

    if (! is_array($zutaten)) {
        $_SESSION['zutaten'] = [];
        $zutaten = []; 
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $neue_zutat = $_POST['topping'];

    $zutaten [] = $neue_zutat;

    $_SESSION['zutaten'] = $zutaten;
    }
?>

<html>       
    <form method="POST" action="?">
        <h1>Pizza Konfigurator</h1>
        <p>Deine Pizza besteht aus folgenden Toppings:</p>

        <ul>
        <?php
            foreach ($zutaten as $zutat) {
                if($zutat) {
                    echo "<li>($zutat}</li>";
                }
            }
        ?>
        </ul>

        <label>Füge weitere Zutaten hinzu: </label><input type="text" name="zutat" placeholder="Zutat" /><br><br>
        <input type="submit" value="Hinzufügen" />
    </form>
</html>



