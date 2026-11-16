<?php
echo "<h1>Wyszukiwarka użytkowników</h1>";

if(isset($_GET['imie'])) {
    echo "<p>Wyniki wyszukiwania dla: " . $_GET['imie'] . "</p>";
} else {
    echo "<p>Podaj imię w adresie URL (?imie=...)</p>";
}
?>
