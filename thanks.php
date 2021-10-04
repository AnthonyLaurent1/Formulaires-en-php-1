<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$error = "Touts les champs doivent être remplis";
$firstName = $lastName = $email = $tel = $sujet = $message = "";
$isValidate = true;

if (empty($_POST["user_lastname"])) {
    $isValidate = false;
} else {
    $lastName = test_input($_POST["user_lastname"]);
}

if (empty($_POST["user_firstname"])) {
    $isValidate = false;
} else {
    $firstName = test_input($_POST["user_firstname"]);
}

if (empty($_POST["user_email"])) {
    $isValidate = false;
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValidate = false;
        echo "Mauvias format pour l'email <br>";
    } else {
        $email = test_input($_POST["user_email"]);
    }
}

if (empty($_POST["user_tel"])) {
    $isValidate = false;
} else {
    $tel = test_input($_POST["user_tel"]);
}

if (empty($_POST["user_sujet"])) {
    $isValidate = false;
} else {
    $sujet = test_input($_POST["user_sujet"]);
}

if (empty($_POST["user_message"])) {
    $isValidate = false;
} else {
    $message = test_input($_POST["user_message"]);
}


if ($isValidate === true) {
    echo 'Merci ' . $firstName . ' ' . $lastName. ' de nous avoir contacté à propos de ' . ' ' . $sujet;
    echo '<br>';
    echo 'Un de nos conseiller vous contactera soit à l\'adresse suivante ' . $email . ' ou par téléphone au '
        . $tel. ' dans les plus brefs délais pour traiter votre demande: ' . $message;

} else {
    echo $error;
}
















