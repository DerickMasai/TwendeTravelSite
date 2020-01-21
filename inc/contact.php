<?php
    require("initialize.php");
    //  Initialize & sanitize User data variables
    $contactName = mysqli_real_escape_string($connect, strip_tags(trim($_POST['contactName'])));$contactEmail = mysqli_real_escape_string($connect, strip_tags(trim($_POST['contactEmail'])));$contactNumber = mysqli_real_escape_string($connect, strip_tags(trim($_POST['contactNumber'])));$contactMessage = mysqli_real_escape_string($connect, strip_tags(trim($_POST['contactMessage'])));
    $messageSuccess = "Message sent successfully. We'll get back<br>to you within 12 hours. Thank you!";$messageFail = "There was a problem sending your message. Please try again.";

    //  Check data and submit to 'contact' table
    if ($contactName != "" && $contactEmail != "" && $contactNumber != "" && $contactMessage != "") {
        $sql = "INSERT INTO contact VALUES ('', '$contactName', '$contactEmail', '$contactNumber', '$contactMessage', NOW())";
        $query = mysqli_query($connect, $sql);
        if ($query) { echo $messageSuccess; } else { echo $messageFail; }
    }

?>
