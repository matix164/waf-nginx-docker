<?php
echo "<h1>Test ataku na Strone1</h1>";

if(isset($_GET['imie'])) {
    echo "<p>Witaj, " . $_GET['imie'] . "</p>";
} else {
    echo "<p>Dopisz do adresu URL: ?imie=&lt;script&gt;alert('XSS')&lt;/script&gt;</p>";
}
?>
