<?php
echo "<h1>Test ataku Command Injection</h1>";
if(isset($_GET['ip'])) {
    echo "<pre>";
    system("ping -c 1 " . $_GET['ip']);
    echo "</pre>";
} else {
    echo "<p>Dopisz do adresu URL: ?ip=127.0.0.1; ls -la</p>";
}
?>
