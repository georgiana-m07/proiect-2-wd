<?php

$admin_email = "georgiana.matyus02@e-uvt.ro";
$nume = $_POST['nume'];
$email = $_POST['email'];
$mesaj = $_POST['mesaj'];

if (empty($nume) || empty($email) || empty($mesaj)) 
{
    die("Completati toate campurile!");
} 
else 
{
    mail($admin_email, "Formular contact", $mesaj, "De la: " . $email);

    header("Location: afisare.php?nume=" . urlencode($nume) . "&email=" . urlencode($email) . "&mesaj=" . urlencode($mesaj));
    exit();
}
?>
