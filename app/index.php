<?php
echo "<h1>Panel testowy aplikacji</h1>";
echo "<p>Wybierz scenariusz ataku, aby przetestować działanie WAF:</p>";

echo "<ul>";
echo "<li><a href='index.php?file=/etc/passwd'>Atak LFI (Local File Inclusion)</a></li>";
echo "<li><a href='strona_1.php?imie=<script>alert(\"strona_1\")</script>'>Atak strona1 (Cross-Site Scripting)</a></li>";
echo "<li><a href='strona_2.php?ip=127.0.0.1; cat /etc/passwd'>Atak strona2 (RCE)</a></li>";
echo "</ul>";

if(isset($_GET['file'])) {
    echo "<hr><h3>Wynik:</h3>";
    system("cat " . $_GET['file']);
}
?>
