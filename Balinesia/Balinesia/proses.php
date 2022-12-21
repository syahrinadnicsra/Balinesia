<?php
$koneksi = mysqli_connect("localhost", "root", "", "balinesia");

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO register VALUES('$nama', '$email', '$password')"; 

mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Travel- Balinesia</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container nav-wrapper">
                <a href="#home" class="logo">Bali<span>nesia</span></a>
                <div class="menu-wrapper">
                    <ul class="menu">
                        <li class="menu-item"><a href="#home" class="menu-link active">Home</a></li>
                        <li class="menu-item"><a href="#service" class="menu-link">Services</a></li>
                        <li class="menu-item"><a href="#produk" class="menu-link">Pricing</a></li>
                        <li class="menu-item"><a href="#statistik" class="menu-link">About us</a></li>
                        <li class="menu-item"><a href="#footer" class="menu-link">Contact</a></li>
                    </ul>
                    <a href="signin.html" class="btn-member">Member area</a>
                </div>
                <div class="menu-toggle bx bxs-grid-alt">
                </div>
            </div>
        </nav>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".menu-toggle").click(function() {
                    $(".menu-toggle").toggleClass("active")
                    $("nav").toggleClass("active")
                })
            })
        </script>

        <section class="home" id="home">
            <div class="container home-wrapper">
                <div class="content-left" data-aos="fade-right">
                    <h1 class="heading">Make Your Trip Memorable Book With Bali<span>nesia</span></h1>
                    <p class="subheading">We have partners with several destinations that you might feel at home there, we will guide you with our best service.</p>
                    <div class="box-wrapper">
                        <div class="box">
                            <i class='bx bxs-check-square'></i>
                            <p>Plan your trip</p>
                        </div>
                        <div class="box">
                            <i class='bx bxs-check-square'></i>
                            <p>Fly with us</p>
                        </div>
                    </div>
                    <div class="form-panel">
                        <img src="assets/img/form.png" alt="">
                        <div class="title-form">
                            <p>Get the schedule</p>
                        </div>
                        <div class="form-location">
                            <i class='bx bxs-map loc'></i>
                            <div class="location">
                                <p>Location <i class='bx bx-chevron-down'></i></p>
                                <select>
                                    <option value="">Kuta Beach Bali, Indonesia</option>
                                    <option value="">Raja Ampat Papua Barat, Indonesia</option>
                                    <option value="">Borobudur Tample Yogyakarta, Indonesia</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-date">
                            <i class='bx bxs-calendar-alt cal'></i>
                            <div class="date">
                                <p>Date <i class='bx bx-chevron-down'></i></p>
                                <input type="date">
                            </div>
                        </div>
                        <div class="btn-search">
                            <a href="daftar.php"><i class='bx bx-search'></i></a>
                        </div>
                    </div>
                    <p class="sugestion">Popular search : Kuta beach, Raja Ampat Beach, Borobudur temple</p>
                </div>
                <div class="content-right" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="assets/img/hero-tavel.png" alt="">
                    </div>

                </div>

            </div>
        </section>
    </header>

    <!-- Service Start -->
    <section class="service" id="service">
        <div class="container service-wrapper">
            <div class="row1">
                <p class="label-service">What we serve</p>
                <h1 class="heading-service">Top Values For You</h1>
                <p class="subheading-service">The best service that will be with you every time</p>
            </div>
            <div class="row2" data-aos="fade-up">
                <div class="box-service">
                    <i class='bx bx-globe'></i>
                    <h3>Lot of Choises</h3>
                    <p>Total of more than 450 destinations in various countries in the world become partners with us</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="box-service">
                    <i class='bx bxs-notepad'></i>
                    <h3>Tour Guide</h3>
                    <p>There are 3 guides for each destination in the place you visit</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="box-service">
                    <i class='bx bxs-cart-add'></i>
                    <h3>Easy Booking</h3>
                    <p>We provide all services online which can be accessed easily through our website</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="box-service">
                    <i class='bx bxs-hotel'></i>
                    <h3>Luxury Hotel</h3>
                    <p>We also provide lodging near the destination where you are visiting.</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- Produk start -->
    <section class="produk" id="produk">
        <div class="container produk-wrapper">
            <div class="row1">
                <div class="title-produk" data-aos="fade-right">
                    <p class="label-produk">TOP DESTINATION</p>
                    <h1 class="heading-produk">Explore Top Destination</h1>
                </div>
                <div class="toggle-slider" data-aos="fade-left">
                    <i class='bx bxs-chevron-left-circle'></i>
                    <i class='bx bxs-chevron-right-circle'></i>
                </div>
            </div>
            <div class="row2">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card-produk">
                            <img src="assets/img/produk.png" alt="">
                            <div class="detail-produk">
                                <div class="kategori">
                                    <p class="label-kategori">Beach</p>

                                    <p class="price">$300</p>
                                </div>
                                <div class="title-card">
                                    <h1>Kuta, Indonesia</h1>
                                </div>
                                <div class="review">
                                    <div class="star">
                                        <i class='bx bxs-star'></i> 5.0
                                    </div>
                                    <p>1.6k reviewer</p>
                                </div>
                                <div class="body-card">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui nesciunt totam vel nihil id est corporis voluptatum sunt.</p>
                                </div>
                                <div class="btn-produk">
                                    <a href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card-produk">
                            <img src="assets/img/produk.png" alt="">
                            <div class="detail-produk">
                                <div class="kategori">
                                    <p class="label-kategori">Beach</p>

                                    <p class="price">$300</p>
                                </div>
                                <div class="title-card">
                                    <h1>Kuta, Indonesia</h1>
                                </div>
                                <div class="review">
                                    <div class="star">
                                        <i class='bx bxs-star'></i> 5.0
                                    </div>
                                    <p>1.6k reviewer</p>
                                </div>
                                <div class="body-card">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui nesciunt totam vel nihil id est corporis voluptatum sunt.</p>
                                </div>
                                <div class="btn-produk">
                                    <a href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card-produk">
                            <img src="assets/img/produk.png" alt="">
                            <div class="detail-produk">
                                <div class="kategori">
                                    <p class="label-kategori">Beach</p>

                                    <p class="price">$300</p>
                                </div>
                                <div class="title-card">
                                    <h1>Kuta, Indonesia</h1>
                                </div>
                                <div class="review">
                                    <div class="star">
                                        <i class='bx bxs-star'></i> 5.0
                                    </div>
                                    <p>1.6k reviewer</p>
                                </div>
                                <div class="body-card">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui nesciunt totam vel nihil id est corporis voluptatum sunt.</p>
                                </div>
                                <div class="btn-produk">
                                    <a href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card-produk">
                            <img src="assets/img/produk.png" alt="">
                            <div class="detail-produk">
                                <div class="kategori">
                                    <p class="label-kategori">Beach</p>

                                    <p class="price">$300</p>
                                </div>
                                <div class="title-card">
                                    <h1>Kuta, Indonesia</h1>
                                </div>
                                <div class="review">
                                    <div class="star">
                                        <i class='bx bxs-star'></i> 5.0
                                    </div>
                                    <p>1.6k reviewer</p>
                                </div>
                                <div class="body-card">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui nesciunt totam vel nihil id est corporis voluptatum sunt.</p>
                                </div>
                                <div class="btn-produk">
                                    <a href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card-produk">
                            <img src="assets/img/produk.png" alt="">
                            <div class="detail-produk">
                                <div class="kategori">
                                    <p class="label-kategori">Beach</p>

                                    <p class="price">$300</p>
                                </div>
                                <div class="title-card">
                                    <h1>Kuta, Indonesia</h1>
                                </div>
                                <div class="review">
                                    <div class="star">
                                        <i class='bx bxs-star'></i> 5.0
                                    </div>
                                    <p>1.6k reviewer</p>
                                </div>
                                <div class="body-card">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui nesciunt totam vel nihil id est corporis voluptatum sunt.</p>
                                </div>
                                <div class="btn-produk">
                                    <a href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card-produk">
                            <img src="assets/img/produk.png" alt="">
                            <div class="detail-produk">
                                <div class="kategori">
                                    <p class="label-kategori">Beach</p>

                                    <p class="price">$300</p>
                                </div>
                                <div class="title-card">
                                    <h1>Kuta, Indonesia</h1>
                                </div>
                                <div class="review">
                                    <div class="star">
                                        <i class='bx bxs-star'></i> 5.0
                                    </div>
                                    <p>1.6k reviewer</p>
                                </div>
                                <div class="body-card">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui nesciunt totam vel nihil id est corporis voluptatum sunt.</p>
                                </div>
                                <div class="btn-produk">
                                    <a href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card-produk">
                            <img src="assets/img/produk.png" alt="">
                            <div class="detail-produk">
                                <div class="kategori">
                                    <p class="label-kategori">Beach</p>

                                    <p class="price">$300</p>
                                </div>
                                <div class="title-card">
                                    <h1>Kuta, Indonesia</h1>
                                </div>
                                <div class="review">
                                    <div class="star">
                                        <i class='bx bxs-star'></i> 5.0
                                    </div>
                                    <p>1.6k reviewer</p>
                                </div>
                                <div class="body-card">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui nesciunt totam vel nihil id est corporis voluptatum sunt.</p>
                                </div>
                                <div class="btn-produk">
                                    <a href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Produk end -->

    <!-- Statistk start -->
    <section class="statistik" id="statistik">
        <div class="container statistik-wrapper">
            <div class="content-img" data-aos="fade-right">
                <img src="assets/img/statistik.png" alt="">
            </div>
            <div class="content-statis" data-aos="fade-left">
                <p class="label-statis">OUR PERFORMANCE</p>
                <h1 class="heading-statis">Most people are satisfied with our service</h1>
                <p class="subheading-statis">We always provide the best service to customers, we will direct you from ordering tickets to the journey</p>

                <div class="angka-wrapper">
                    <div class="box-angka">
                        <h1>20</h1>
                        <p>Years Experience
                        </p>
                    </div>
                    <div class="box-angka">
                        <h1>300++</h1>
                        <p>Destination Collaboration
                        </p>
                    </div>
                    <div class="box-angka">
                        <h1>2k++</h1>
                        <p>Customers Happy
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- statistik end -->


    <!-- Banner2 -->
    <section class="banner2">
        <div class="container banner2-wrapper">
            <div class="content-banner2">
                <h1 class="heading">ARE YOU NEW MEMBER FOR THIS TRIP ? </h1>
                <p class="subheading">Let's register now and get cashback</p>

                <p class="disc">UP TO 20%</p>
            </div>
            <div class="btn-banner2">
                <a href="signup.php" class="btn-regis">Register</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="footer">
        <div class="container footer-wrapper">
            <div class="col-1-footer">
                <h1 class="logo-footer"><a href="#home" class="logo">Bali<span>nesia</span></a></h1>
                <p class="subheading-footer">The best service to customers is our top priority in building a business
                </p>
                <div class="sosmed-icon">
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="#"><i class='bx bxl-whatsapp'></i></a>
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                </div>
                <p class="copy">&copy;Copyright 2022 All Right Reserved | Built by A11.2020.12602</p>
            </div>
            <div class="col-2-footer">
                <h3>About</h3>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Menu</a></li>
                </ul>
            </div>
            <div class="col-3-footer">
                <h3>Company</h3>
                <ul>
                    <li><a href="#">Why Touravel ?</a></li>
                    <li><a href="#">Partners with us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Blogs</a></li>
                </ul>
            </div>
            <div class="col-4-footer">
                <h3>Support</h3>
                <ul>
                    <li><a href="#">Account</a></li>
                    <li><a href="#">Support Center</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Accessbility</a></li>
                </ul>
            </div>
            <div class="col-5-footer">
                <h3>Get in touch</h3>
                <p>Questions or Feedback</p>
                <div class="form-input">
                    <input type="text" placeholder="Type your email">
                    <a href="#" class="btn-footer">Submit</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 3000
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>