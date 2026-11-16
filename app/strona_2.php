<?php
echo "<h1>Narzędzie diagnostyczne PING</h1>";
echo "<p>Sprawdź dostępność serwera:</p>";
if(isset($_GET['ip'])) {
    echo "<pre>";
    system("ping -c 1 " . $_GET['ip']);
    echo "</pre>";
} else {
    echo "<p>Wprowadź adres IP w pasku adresu (?ip=127.0.0.1)</p>";
}
?>
