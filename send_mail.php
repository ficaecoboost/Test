<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prikupljanje podataka iz forme
    $licensePlate = $_POST['licensePlate'];
    $carBrand = $_POST['carBrand'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Detalji emaila
    $to = "ficolica@gmail.com";
    $subject = "Nova narudžbina za pranje auta";
    $message = "Podaci o narudžbini:\n\n";
    $message .= "Tablice: $licensePlate\n";
    $message .= "Marka automobila: $carBrand\n";
    $message .= "Ime: $name\n";
    $message .= "Email: $email\n";

    // Podešavanje headera
    $headers = "From: no-reply@tvoj-sajt.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Slanje emaila
    if (mail($to, $subject, $message, $headers)) {
        echo "Uspešno ste poslali podatke! Proverite email za potvrdu.";
    } else {
        echo "Došlo je do greške. Pokušajte ponovo.";
    }
}
?>
