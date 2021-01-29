<!--Übung 1-5-->
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        $klasse = $_POST['klasse'];
        echo "Hallo {$username}! Du bist in der Klasse {$klasse}¨!</br></br>";
    }
?>

<form method="POST" action="?">
    <input type="text" name="name" placeholder="Benutzername" required/><br><br>
    <input list="klasse" name="klasse" placeholder="Klasse" /><br><br>
        <datalist id="klasse">
            <option value="Inf18s">
            <option value="Inf19s">
            <option value="Inf20s">
        </datalist>
    <input type="submit" value="Absenden" />
</form>