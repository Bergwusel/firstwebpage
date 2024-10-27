<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $satisfaction = $_POST['satisfaction'];

    $data = "Name: $name, Email: $email, comment: $comment\n";
    file_put_contents('responses.txt', $data, FILE_APPEND);
    
    echo "Vielen Dank für Ihre Teilnahme!";
} else {
    echo "Ungültige Anfrage.";
}
?>