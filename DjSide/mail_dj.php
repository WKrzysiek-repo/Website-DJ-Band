<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='http://fonts.googleapis.com/css?family=Advent+Pro&subset=latin,latin-ext' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/4f3f568397.js" crossorigin="anonymous"></script>
    <title>DJ - Pozytwnie Zakręcony</title>
    <link rel="stylesheet" href="../dist/css/lightbox.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body>

<?php

$to      = 'triko42@gmail.com';
$name    = $_POST['name1'];
$surname    = $_POST['surname1'];
$email   = $_POST['mail1'];
$tel     =  $_POST['tel1'];
$subject = 'Nowy e-mail od ' . $name . ' ' . $surname . ' (' . $tel . ') (' . $email . ')';
$message = $_POST['message1'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= 'Content-Type: text/html; charset=utf-8';

mail($to, $subject, $message, $headers);

echo '<h1>Wiadomość wysłana :)</h1>';

?>

    <!--BUTTON CONTACT -->
    <button class="kontaktbutton"><i class="fas fa-mail-bulk"></i></button>


    <!--BURGER -->
    <div class="burger">
        <i class="fas fa-bars show"></i>
        <i class="fas fa-times"></i>
    </div>

    <!--NAVIGATION -->
    <aside>
        <nav>
            <ul>
                <li>
                    <a href="../MainSide/main_side.html">
                    <i class="fas fa-home"></i>Główna</a>
                </li>
                <li>
                    <a class="Start" href="#">
                    <i class="fas fa-compact-disc"></i>Start</a>
                </li>
                <li>
                    <a class="About-me" href="#">
                    <i class="fas fa-info-circle"></i>O mnie</a>
                </li>
                <li>
                    <a class="animation-section" href="#">
                    <i class="fab fa-buffer"></i></i>Stanowisko</a>
                </li>
                <li>
                    <a class="offer-section" href="#">
                    <i class="fas fa-box-open"></i></i>Oferta</a>
                </li>
                <li>
                    <a class="gallery-section" href="#">
                    <i class="fas fa-images"></i></i>Galeria</a>
                </li>
                <li>
                    <a class="contact-section" href="#">
                    <i class="far fa-envelope"></i>Kontakt</a>
                </li>

            </ul>

        </nav>
    </aside>


    <!--POP-UP -->
    <section class="modal-wrap">

        <div class="modal">

            <span class="hide">X</span>

            <div class="contact-container">
                <h2>Napisz do mnie</h2>
                <form>
                    <input type="name" name="name1" placeholder="Imie">
                    <input type="surname" name="surname1" placeholder="Nazwisko">
                    <input type="mail" name="mail1" placeholder="E-mail">
                    <input type="tel" name="tel11" placeholder="Numer telefonu">
                    <textarea required rows="10" cols="20" name="message1" id="message1"
                        title="Wpisz treść swojej wiadomości" placeholder="Treść wiadomości"></textarea>
                    <input id="submit" type="submit" type="name" value="Wyślij">
                </form>
            </div>

        </div>

    </section>


    <section class="all-wrapper">


        <section data-section="start" id="start" class="head-wrapper">

            <!--STATUS BAR -->
            <div class="status-bar">
                <div class="bar-position">
                    <a href="#" class="About-me"><i class="far fa-circle dot1"></i></a>
                    <a href="#" class="animation-section"><i class="far fa-circle dot2"></i></a>
                    <a href="#" class="offer-section"><i class="far fa-circle dot3"></i></a>
                    <a href="#" class="gallery-section"><i class="far fa-circle dot4 fas"></i></a>
                    <a href="#" class="contact-section"><i class="far fa-circle dot5"></i></a>
                </div>
            </div>


            <!--PHOTO -->
            <div class="foto1">
                <p>Pozytywnie zakręcony DJ</p>
            </div>

            <!--ARROWS -->
            <button class="arrow">
                <i class="fas fa-angle-down"></i>
            </button>




        </section>



        <section class="main-side">

            <!--BODY_WRAPPER -->
            <section data-section="About-me" id="About-me" class="body-wrapper">
                <h1>Witam serdecznie</h1>
                <div class="info">
                    <div class="infophoto1">
                        <img src="DjSideImg/glowne1.jpg" alt="">
                    </div>
                    <div class="infotext1">
                        <p class="opis1">Lorem ipsum dolor sit amet consectetur adipisicing elit. In quas debitis a
                            aliquam consequatur laudantium voluptas deleniti incidunt. Dolores saepe dignissimos cumque!
                            Eligendi,
                            voluptate eveniet enim corporis autem cumque cum?Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit. In quas debitis a
                            aliquam consequatur laudantium voluptas deleniti incidunt. Dolores saepe dignissimos cumque!
                            Eligendi
                        </p>
                    </div>
                    <div class="infotext2">
                        <p class="opis1">Lorem ipsum dolor sit amet consectetur adipisicing elit. In quas debitis a
                            aliquam consequatur laudantium voluptas deleniti incidunt. Dolores saepe dignissimos cumque!
                            Eligendi,
                            voluptate eveniet enim corporis autem cumque cum?Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit. In quas debitis a
                            aliquam consequatur laudantium voluptas deleniti incidunt. Dolores saepe dignissimos cumque!
                            Eligendi</p>
                    </div>
                    <div class="infophoto2">
                        <img src="DjSideImg/głowne2.jpg" alt="">
                    </div>
                </div>
            </section>



            <!--PHOTO_ANIMATION -->
            <section data-section="animation-section" id="animation-section" class="photo_animation">
                <h1>Stanowisko</h1>
                <div class="photo_inside">
                    <img src="DjSideImg/hotel2.jpg" alt="">
                    <img src="DjSideImg/3slajd.jpeg" alt="">
                    <img src="DjSideImg/new1.jpg" alt="">
                </div>

            </section>


            <!--ORNAMENT NR. 1 -->
            <section class="ornament1">
            </section>


            <!--OFFER WRAPPER -->
            <section data-section="offer-section" id="offer-section" class="offer-wrapper">
                <h1>Oferta</h1>
                <div class="offer">
                    <div class="col1">
                        <h3>oferta 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quas debitis a
                            aliquam consequatur laudantium voluptas deleniti incidunt. Dolores saepe dignissimos cumque!
                            Eligendi,
                            voluptate eveniet enim corporis autem cumque cum?Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit. In quas debitis a
                            aliquam consequatur laudantium voluptas deleniti incidunt. Dolores saepe dignissimos cumque!
                            Eligendi</p>
                    </div>
                    <div class="col1">
                        <h3>oferta 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quas debitis a
                            aliquam consequatur laudantium voluptas deleniti incidunt. Dolores saepe dignissimos cumque!
                            Eligendi,
                            voluptate eveniet enim corporis autem cumque cum?Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit. In quas debitis a
                            aliquam consequatur laudantium voluptas deleniti incidunt. Dolores saepe dignissimos cumque!
                            Eligendi</p>
                    </div>
                    <div class="col2">
                        <h3>oferta 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quas debitis a
                            aliquam consequatur laudantium voluptas deleniti incidunt. Dolores saepe dignissimos cumque!
                            Eligendi,
                            voluptate eveniet enim corporis autem cumque cum?Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit. In quas debitis a
                            aliquam consequatur laudantium voluptas deleniti incidunt. Dolores saepe dignissimos cumque!
                            Eligendi</p>
                    </div>
                    <div class="col2">
                        <h3>oferta 4</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quas debitis a
                            aliquam consequatur laudantium voluptas deleniti incidunt. Dolores saepe dignissimos cumque!
                            Eligendi,
                            voluptate eveniet enim corporis autem cumque cum?Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit. In quas debitis a
                            aliquam consequatur laudantium voluptas deleniti incidunt. Dolores saepe dignissimos cumque!
                            Eligendi</p>
                    </div>
                </div>

            </section>

            <!--GALLERY -->
            <section data-section="gallery-section" id="gallery-section" class="gallery">
                <h1>Galeria</h1>
                <div class="images">
                    <a data-lightbox="article1" href="DJ images/image1.jpg"><img src="DJ images/Min/image1_min.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/image2.jpg"><img src="DJ images/Min/image2_min.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/newimage1.jpg"><img src="DJ images/newimage1.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/image4.jpg"><img src="DJ images/Min/image4_min.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/image5.jpg"><img src="DJ images/Min/image5_min.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/image6.jpg"><img src="DJ images/Min/image6_min.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/image7.jpg"><img src="DJ images/Min/image7_min.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/image8.jpg"><img src="DJ images/Min/image8_min.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/image9.jpg"><img src="DJ images/Min/image9_min.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/image10.jpg"><img src="DJ images/Min/image10_min.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/image11.jpg"><img src="DJ images/Min/image11_min.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/image12.jpg"><img src="DJ images/Min/image12_min.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/image13.jpg"><img src="DJ images/Min/image13_min.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/image14.jpg"><img src="DJ images/Min/image14_min.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/image15.jpg"><img src="DJ images/Min/image15_min.jpg" alt=""></a>
                    <a data-lightbox="article1" href="DJ images/image16.jpg"><img src="DJ images/Min/image16_min.jpg" alt=""></a>

                </div>
            </section>



            <!--ORNAMENT NR. 2 -->
            <section class="ornament2">
            </section>


            <!--contact-wrapper -->
            <section data-section="contact-section" id="contact-section" class="contact-wrapper">
                <h1>Kontakt</h1>
                <div class="all-contact">
                    <div class="contact-container">
                        <h2>Napisz do mnie</h2>
                        <form>
                            <input type="name" name="name1" placeholder="Imie">
                            <input type="surname" name="surname1" placeholder="Nazwisko">
                            <input type="mail" name="mail1" placeholder="E-mail">
                            <input type="tel" name="tel11" placeholder="Numer telefonu">
                            <textarea required rows="10" cols="20" name="message1" id="message1"
                                title="Wpisz treść swojej wiadomości" placeholder="Treść wiadomości"></textarea>
                            <input id="submit" type="submit" type="name" value="Wyślij">
                        </form>
                    </div>


                    <!--CONTACT INFO -->
                    <div class="contact-info">
                        <h2>Zadzwoń do mnie</h2>
                        <p><i class="fas fa-phone"></i>Telefon: 000 000 000</p>
                        <p><i class="fas fa-envelope"></i>E-mail: blabla@gmail.com</p>
                        <div class="icons">
                            <a href="https://www.facebook.com/DjMichal/"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/dj_michal_krzysiek/?hl=pl"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                </div>

            </section>


            <!--end main -->
        </section>



        <footer>
            <button class="top1"><i class="fas fa-arrow-up"></i></button>
        </footer>

    </section>
    <!--PRELOADER -->
    <div id="preloader">
        <div class="load"></div>
    </div>


    <script src="../dist/js/lightbox-plus-jquery.js"></script>
    <script src="../dist/js/lightbox.js"></script>
    <script src="../jquery-3.2.1.min.js"></script>
    <!-- <script src="js_jd_side.js"></script> -->
    <script src="jss.js"></script>

</body>

</html>