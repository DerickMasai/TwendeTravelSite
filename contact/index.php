<?php
    define("ACCESS_TOKEN","4MK9JfLRPF8PmrQN");(constant("ACCESS_TOKEN") != "4MK9JfLRPF8PmrQN") ? header("location: ../") : "Welcome";session_start();require "../inc/initialize.php";error_reporting(0);@ini_set('display_errors', 0);ob_get_contents();ob_end_clean();
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <!-- UTF-8  -->
    <meta charset="utf-8">

    <!-- Title -->
    <title>Contact &bull; Twende &trade;</title>

    <!--  Meta tags -->
    <meta name="robots" content="noindex">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png" sizes="16x16" />

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/fonts.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/assets.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/nav.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">

    <!-- jQuery -->
    <script type="application/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="application/javascript" src="../js/ajax.min.js"></script>

</head>
<body>

    <main id="main">
        <nav>
            <a href="../" class="logo" title="Home"></a>
        </nav>

        <section class="bottom">
            <p title="Click 'Derick Masai' to get in touch!">© 2020 Twende. Made with &hearts; by <a href="mailto:derickmasai@gmail.com?Subject=I'd%20like%20to%20hire%20you!" class="hire-me">Derick Masai</a>.</p>
        </section>

        <section class="center" id="center">
            <section class="content">
                <h1>You can also<br>reach out to us at:</h1>
                <div class="row">
                    <span></span>
                    <p>hello@twende.co.ke</p>
                </div>
                <div class="row">
                    <span></span>
                    <p>derickmasai@gmail.com</p>
                </div>
                <div class="row">
                    <span></span>
                    <p>+254 719 510 503</p>
                </div>
                <div class="social">
                    <div class="row">
                        <a href="https://www.twitter.com/derickmasai" title="Twitter"></a>
                        <a href="https://www.facebook.com/masaiderick" title="Facebook"></a>
                        <a href="https://www.instagram.com/derickmasai" title="Instagram"></a>
                    </div>
                    <p>@twende</p>
                </div>
            </section>
            <form action="../inc/contact.php" method="post" id="contact-form">
                <h2>Say hello</h2>
                <label for="contact-name">Name *
                    <input type="text" autocomplete="off" placeholder="Jon Snow" name="contactName" id="contact-name" spellcheck="false">
                </label>
                <label for="contact-email">Email *
                    <input type="text" autocomplete="off" placeholder="jonsnow@winterfell.com" name="contactEmail" id="contact-email" spellcheck="false">
                </label>
                <label for="contact-number">Number *
                    <input type="text" autocomplete="off" placeholder="0700 123 456" name="contactNumber" id="contact-number">
                </label>
                <label for="contact-message">Message *
                    <input type="text" autocomplete="off" placeholder="Hello, I'd like to..." name="contactMessage" id="contact-message" spellcheck="true">
                </label>
                <button name="contactSubmit" id="contact-submit">Send</button>
            </form>
        </section>

        <section class="confirmation" id="confirmation">
            <button id="close-btn"></button>
            <i></i>
            <h3 id="confirmation-message">Message sent successfully. We'll get back<br>to you within 12 hours. Thank you!</h3>
            <small>
                Redirecting you in a moment...
            </small>
        </section>

        <section class="message" id="message">
            <div class="content-message">
                <i></i>
                <p id="p-message"></p>
                <a href="javascript: void(0)" class="message-close-btn" id="message-close-btn"></a>
            </div>
        </section>
    </main>

    <script type="application/javascript" src="../js/contact.min.js"></script>

</body>

</html>
