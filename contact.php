<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/uikit.css"/>
    <script src="js/uikit.js"></script>
    <script src="js/uikit-icons.js"></script>
    <script src="uikit/dist/js/uikit-icons.min.js"></script>
</head>
<body>
    <header class="uk-visible@m">
        <div media="@m" animation="uk-animation-slide-top"  uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <div class="uk-navbar-container">
                <div class="uk-container" >
                    <nav class="uk-navbar" uk-navbar="">
                        <div class="uk-navbar-left">
                            <a href="index.html" aria-label="Acasă" class="uk-logo uk-navbar-item">
                                <img alt="Timi Cafe" loading="eager" src="img/logo-no-background.png"/>
                            </a>
                        </div>

                        <div class="uk-navbar-center">
                            <ul class="uk-navbar-nav">
                                <li class="nav-item-1">
                                    <a href="index.html">Acasă</a>
                                </li>
                                <li class="nav-item-2">
                                    <a href="despre-noi.html">Despre</a>
                                </li>
                                <li class="nav-item-3">
                                    <a href="produse-si-servicii.html">Produse și servicii</a>
                                </li>
                                <li class="nav-item-4">
                                    <a href="retete.html">Rețete</a>
                                </li>
                                <li class="nav-item-5">
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <header class="uk-hidden@m">
        <div class="uk-navbar-container" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <div class="uk-container uk-container-expand">
                <nav class="uk-navbar" uk-navbar>
                    <div class="uk-navbar-left">
                        <a href="index.html" class="uk-logo">
                            <img src="img/logo-no-background.png" alt="Timi Cafe">
                        </a>
                    </div>
                    <div class="uk-navbar-right">
                        <a uk-navbar-toggle-icon href="#offcanvas-nav" uk-toggle aria-label="Open menu"></a>
                    </div>
                </nav>
            </div>
        </div>
    
        <div id="offcanvas-nav" uk-offcanvas="overlay: true; flip: true">
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <ul class="uk-nav uk-nav-default">
                    <li><a href="index.html">Acasă</a></li>
                    <li><a href="despre-noi.html">Despre noi</a></li>
                    <li><a href="produse-si-servicii.html">Produse și servicii</a></li>
                    <li><a href="retete.html">Rețete</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>        
    </header>

    <main>
        <section class="uk-section uk-section-default">
            <div class="uk-container">
                <h1>Mulțumim pentru mesaj!</h1>
                <p>Ne-ați oferit următoarele date:</p>
                <?php

                $admin_email = "georgiana.matyus02@e-uvt.ro";
                $nume = $_POST['nume'];
                $prenume = $_POST['prenume'];
                $email = $_POST['email'];
                $mesaj = $_POST['mesaj'];

                if (empty($nume) || empty($email) || empty($mesaj)) 
                {
                    die("Completati toate campurile!");
                } 
                else 
                {
                    mail($admin_email, "Formular contact", $mesaj, "De la: " . $email);

                    echo "<h2>Nume:</h2><p>$nume</p>";
                    echo "<h2>Prenume:</h2><p>$prenume</p>";
                    echo "<h2>Email:</h2><p>$email</p>";
                    echo "<h2>Mesaj:</h2><p>$mesaj</p>";
                }
                ?>

            </div>
        </section>
    </main>

    <footer>
        <section class="uk-section uk-section-default">
            <div class="uk-container">
                <div class="uk-grid uk-grid-margin uk-grid-stack">
                    <div class="uk-width-1-3@m uk-first-column">
                        <div class="uk-margin">
                            <a href="index.html">
                                <img class="uk-width-small" src="img/logo-no-background.png" alt="Logo Timi Cafe">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="uk-grid uk-grid-margin">
                    <div class="uk-width-1-2@s uk-width-1-4@m uk-first-column">
                        <div class="uk-panel uk-text-primary uk-margin">
                            <h5>Contactează-ne!</h5>
                        </div>
                        <div>
                            <ul class="uk-margin-remove-bottom uk-nav uk-nav-default">
                                <li>
                                    <a class="uk-disabled"> +4078462748 </a>
                                </li>
                                <li>
                                    <a class="uk-disabled">
                                        <joomla-hidden-mail is-link="1" is-email="1" first="aGVsbG8="
                                            last="dGltaWNhZmUucm8=" text="aGVsbG9AdGltaWNhZmUucm8="
                                            base="/proiect-1-wd"><a href="mailto:hello@timicafe.ro"
                                                base="/proiect-1-wd">hello@timicafe.ro</a></joomla-hidden-mail>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x47455d84610655bf:0xfd169ff24d29f192?sa=X&amp;ved=1t:8290&amp;ictx=111">
                                        Bulevardul Vasile Pârvan 4, Timișoara 300223
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s uk-width-1-4@m">
                        <div class="uk-panel uk-text-primary uk-margin">
                            <h5>Timi Cafe</h5>
                        </div>
                        <div>
                            <ul class="uk-margin-remove-bottom uk-nav uk-nav-default">
                                <li>
                                    <a href="index.html">
                                        Acasă
                                    </a>
                                </li>
                                <li>
                                    <a href="despre-noi.html">
                                        Despre noi
                                    </a>
                                </li>
                                <li>
                                    <a href="produse-si-servicii.html">
                                        Produse și servicii
                                    </a>
                                </li>
                                <li>
                                    <a href="retete.html">
                                        Rețete
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s uk-width-1-4@m uk-first-column">
                        <div class="uk-panel uk-text-primary uk-margin">
                            <h5>Legal</h5>
                        </div>
                        <div>
                            <ul class="uk-margin-remove-bottom uk-nav uk-nav-default">
                                <li>
                                    <a href="" target="_blank" rel="noopener noreferrer">
                                        Termeni și condiții
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank" rel="noopener noreferrer">
                                        Confidențialitate
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank" rel="noopener noreferrer">
                                        Cookie Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="https://anpc.ro/" target="_blank" rel="noopener noreferrer">
                                        ANPC
                                    </a>
                                </li>
                                <li>
                                    <a href="https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home.chooseLanguage" target="_blank" rel="noopener noreferrer">
                                        SOL
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-grid uk-grid-margin uk-grid-stack">
                    <div class="uk-width-3-4@m uk-first-column">
                        <div class="uk-panel uk-text-meta uk-margin">
                            <p>Copyright © 2024 Timi Cafe. Toate drepturile rezervate</p>
                        </div>
                    </div>
                    <div class="uk-width-1-4@m">
                        <div class="uk-position-relative uk-margin uk-width-small uk-margin-auto-left">
                            <a href="" title="To the top" uk-totop></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>