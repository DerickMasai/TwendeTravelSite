<?php
    define("ACCESS_TOKEN","4MK9JfLRPF8PmrQN");(constant("ACCESS_TOKEN") != "4MK9JfLRPF8PmrQN") ? header("location: ../") : "Welcome";session_start();require "inc/initialize.php";error_reporting(0);@ini_set('display_errors', 0);ob_get_contents();ob_end_clean();

    //  Obtain random quote from 'quote' table
    $quotesArray = array();
    $quoteSQL = "SELECT * FROM quote";
    $quoteQuery = mysqli_query($connect, $quoteSQL);
    if ($quoteQuery && mysqli_num_rows($quoteQuery) > 0) {
        while ($row = mysqli_fetch_array($quoteQuery)) {
            $quote_id = $row['quote_id'];
            array_push($quotesArray, $quote_id);
        }
        $randomQuoteID = rand(0,count($quotesArray) - 1);
        $randomQuoteSQL = "SELECT * FROM quote WHERE quote_id = '$randomQuoteID'";
        $randomQuoteQuery = mysqli_query($connect, $randomQuoteSQL);
        if (mysqli_num_rows($randomQuoteQuery) == 1) {
            while ($row = mysqli_fetch_array($randomQuoteQuery)) {
                $quoteText = $row['quote_text'];
                $quoteAuthor = $row['quote_author'];
            }
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en-GB">

<head>

    <!-- UTF-8  -->
    <meta charset="utf-8">

    <!-- Title -->
    <title>Hello - Twende &trade;</title>

    <!--  Meta tags -->
    <meta name="robots" content="noindex">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" sizes="16x16" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/assets.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/footer.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/scrollbar.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/nav.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <!-- JS -->
    <script type="application/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="application/javascript" src="js/main_min.js"></script>

</head>

<body>

    <header>
        <nav>
            <div class="logo" title="twende &trade;"></div>
            <ul>
                <li><a href="https://www.twitter.com/derickmasai" title="Twitter"></a></li>
                <li><a href="https://www.facebook.com/masaiderick" title="Facebook"></a></li>
                <li><a href="https://www.instagram.com/derickmasai" title="Instagram"></a></li>
            </ul>
        </nav>
        <hr>
        <div class="bg"></div>
        <h1 class="txt-type" data-wait="2000" data-words='["Travel", "Explore", "Discover"]'></h1>
        <section id="header-section">
            <div class="col">
                <h3 id="h3">Book our most popular destination package!</h3>
                <p id="p">And get to visit 3 countries in 10 days all across Africa!</p>
            </div>
            <a href="#" class="btn" id="btn">
                <span>Book Now!</span>
                <i></i>
            </a>
        </section>
    </header>
    <section class="destinations">
        <h2>Popular Destinations</h2>
        <div class="row">
            <div class="col">
                <figure style="background-image: url(img/bg3.jpg)">
                    <div class="bg"></div>
                    <span class="round-corner"></span>
                    <div>
                        <h3>Khentum, Ghana</h3>
                        <div class="rating" style="background-image: url(img/5_str_grd.svg);"></div>
                    </div>
                </figure>
            </div>
            <div class="col">
                <div class="row">
                    <figure style="background-image: url(img/grrf.jpg)">
                        <div class="bg"></div>
                        <span class="round-corner-s"></span>
                        <div>
                            <h3 class="h3-s">Abedares, Kenya</h3>
                            <div class="rating rating-s" style="background-image: url(img/4_str_grd.svg);"></div>
                        </div>
                    </figure>
                    <figure style="background-image: url(img/mntn.jpg)">
                        <div class="bg"></div>
                        <span class="round-corner-s"></span>
                        <div>
                            <h3 class="h3-s">Kilimanjaro, Tanzania</h3>
                            <div class="rating rating-s" style="background-image: url(img/3.5_str_grd.svg);"></div>
                        </div>
                    </figure>
                </div>
                <div class="row">
                    <figure style="background-image: url(img/bg5.jpg)">
                        <div class="bg"></div>
                        <span class="round-corner-s"></span>
                        <div>
                            <h3 class="h3-s">Highpoint, South Africa</h3>
                            <div class="rating rating-s" style="background-image: url(img/3_str_grd.svg);"></div>
                        </div>
                    </figure>
                    <figure style="background-image: url(img/wht-trs.jpg)">
                        <div class="bg"></div>
                        <span class="round-corner-s"></span>
                        <div>
                            <h3 class="h3-s">Diani, kenya</h3>
                            <div class="rating rating-s" style="background-image: url(img/5_str_grd.svg);"></div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="quote">
        <i>&quot;</i>
        <p><?php echo strtolower($quoteText);?>.</p>
        <small>~ <?php echo strtolower($quoteAuthor);?></small>
    </section>
    <section class="cta">
        <figure style="background-image: url(img/bg3.jpg);"></figure>
        <div class="col">
            <small>Most Popular</small>
            <h2>3 Countries/10 Days Africa Expedition</h2>
            <p>To travel is to expand one's mind and thinking, which ultimately leads to wisdom in humanity's collective culture. To travel is to expand one's mind and thinking, which ultimately.</p>
            <div class="row">
                <a href="#" class="cta-btn">
                    <span>Book Now!</span>
                    <i></i>
                </a>
            </div>
        </div>
    </section>
    <section class="contact">
        <h2>Want to talk to us?</h2>
        <small>Please feel free to reach out to us via our Contact page or details listed on the page.</small>
        <a href="contact/" class="contact-btn">
            <span>Get in touch</span>
            <i></i>
        </a>
    </section>

    <footer>
        <section>
            <ul>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Jobs</a>
                </li>
                <li>
                    <a href="#">Terms</a>
                </li>
                <li>
                    <a href="#">Security</a>
                </li>
                <li>
                    <a href="#">Privacy</a>
                </li>
                <li>
                    <a href="contact/" class="footer-cta">Talk to us</a>
                </li>
            </ul>
            <div class="social">
                <a href="https://www.twitter.com/derickmasai" title="Twitter"></a>
                <a href="https://www.facebook.com/masaiderick" title="Facebook"></a>
                <a href="https://www.instagram.com/derickmasai" title="Instagram"></a>
            </div>
        </section>
        <section>
            <p title="Click 'Derick Masai' to get in touch!">© 2020 Twende. Made with &hearts; by <a href="mailto:derickmasai@gmail.com?Subject=I'd%20like%20to%20hire%20you!" class="hire-me">Derick Masai</a>.</p>
        </section>
    </footer>
    
    <script>
        function uxTransitions() {
            document.querySelector('#header-section').classList.add('fadeInUp');
            document.querySelector('#h3').classList.add('fadeInRight');
            document.querySelector('#p').classList.add('fadeInUp');
            document.querySelector('#btn').classList.add('fadeInLeft');
        }
        uxTransitions();
    </script>

</body>

</html>
