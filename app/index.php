<?php
echo "<h1>Podatna aplikacja PHP</h1>";

if(isset($_GET['file'])) {
    system("cat " . $_GET['file']);
} else {
    echo "<p>Strona testowa. Dopisz do adresu URL: ?file=/etc/passwd aby przetestować atak na pliki systemowe.<p>"
}
?>
