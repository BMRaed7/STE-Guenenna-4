<?php

if (isset($_POST['send'])) {
    $Fname = $_POST['first-N'];
    $Lname = $_POST['last-N'];
    $mailFrom = $_POST['E-mail'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $ZIP = $_POST['ZIP'];

    $mailTo = "exemple@exemple.com";
    $subject = "Want to Trade";
    $headers = "Client e-mail: ".$mailFrom;
    $addressC = "Client Phone Number: ".$phone." From: ".$country." / ".$city." / ".$address." / ".$ZIP;
    $txt = "Client Name: ".$Fname." ".$Lname.".\n\n".$addressC;

    mail($mailTo, $subject, $txt, $addressC, $headers);
    header("Location: trade-send.html");
}

?>
