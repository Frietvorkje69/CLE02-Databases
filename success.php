<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link
            rel="icon"
            href="https://cdn.glitch.me/dd3e24be-0f5e-4407-ac88-7e0d7057b1ff%2Ficon.png?v=1638789020824"
    />
    <title>Reservering geplaatst!</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/c7b1d33b1c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Gloria+Hallelujah&family=Mansalva&display=swap"
          rel="stylesheet">
</head>

<body style="text-align:center">
<nav>
    <div class="bigZoom"><a href="index.html">Home</a></div>
    <div class="bigZoom"><a href="reservation.php">Reserveren</a></div>
    <div class="bigZoom"><a href="about.php">Over ons</a></div>
    <div class="bigZoom"><a href="login.php">Log in</a></div>
</nav>

<header><h1>Gelukt!</h1></header>

<main>
    <section>
        <p>
            We hebben uw reservering ontvangen.
            U zal zo snel mogelijk een mailtje ontvangen met verdere details.
            Klik op de foto voor een leuk dierfeitje!
        </p>
        <div class="popup smallZoom" onclick="myFunction()"><img
                    src="https://www.landidee.nl/wp-content/uploads/sites/7/2015/09/egel-shutterstock-630.jpg"
            />
            <span class="popuptext" id="myPopup">Dierfeitje: dit is een egel!</span>
        </div>
        <br>
        <br>
        <a href="index.html">Terug naar home</a>
    </section>
    <style>
        /* Popup container */
        .popup {
            position: relative;
            display: inline-block;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Popup */
        .popup .popuptext {
            visibility: hidden;
            width: 160px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 8px 0;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -80px;
        }

        /* Popup arrow */
        .popup .popuptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        /* Popup animation */
        .popup .show {
            visibility: visible;
            -webkit-animation: fadeIn 1s;
            animation: fadeIn 1s;
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>

    <script>
        // When the user clicks on div, open the popup
        function myFunction() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
    </script>
</main>
