    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website With Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
        <a class="navbar-brand" href="#"><span class="text-warning">Bell</span>Computer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="orders.php">Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="layanan.php">Layanan</a> 
                <div class="sub-menu">
                <a href="#" class="sub-link">Service Apple Device</a>
                <a href="#" class="sub-link">Service Motherboard & Logic Board</a>
                <a href="#" class="sub-link">Install Ulang Windows</a>
                <a href="#" class="sub-link">Service & Repair LCD</a>
                <a href="#" class="sub-link">Upgrade SSD</a>
                </div>
            </li>        
            <li class="nav-item">
                <a class="nav-link" href="produk.php">Produk</a>
                <div class="sub-menu">
                <a href="#" class="sub-link">Baterai Laptop</a>
                <a href="#" class="sub-link">Charger Laptop</a>
                <a href="#" class="sub-link">Hardisk</a>
                <a href="#" class="sub-link">SSD</a>
                <a href="#" class="sub-link">RAM</a>
                <a href="#" class="sub-link">Port</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="payment.php">Payment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Logout</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="image4.jpg" class="d-block w-100" alt="image1.jpg">
        <div class="carousel-caption">
            <h5>Your PC Solutions</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium inventore delectus tenetur at eaque facere!</p>
            <p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="image5.jpg" class="d-block w-100" alt="image1.jpg">
        <div class="carousel-caption">
            <h5>Your PC Solutions</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium inventore delectus tenetur at eaque facere!</p>
            <p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="image1.jpg" class="d-block w-100" alt="image1.jpg">
        <div class="carousel-caption">
            <h5>Your PC Solutions</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium inventore delectus tenetur at eaque facere!</p>
            <p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <section id="about" class="about section-padding">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
            <img src="image6.jpg" alt="img-fluid">
            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text">
            <h2>Our Product</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nisi non doloremque saepe? Necessitatibus laborum, accusantium reprehenderit iste, dicta porro a facilis qui architecto debitis perferendis ratione. Eligendi nemo repudiandae expedita doloribus, accusamus repellat, maiores beatae fugiat tenetur in nostrum est exercitationem ducimus hic facere autem id. Cupiditate, nemo sed?</p>
            <a href="#" class="btn btn-warning">Learn More</a>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section id="about" class="about section-padding">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
            <img src="image7.jpg" alt="img-fluid">
            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text">
            <h2>Our Popular</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nisi non doloremque saepe? Necessitatibus laborum, accusantium reprehenderit iste, dicta porro a facilis qui architecto debitis perferendis ratione. Eligendi nemo repudiandae expedita doloribus, accusamus repellat, maiores beatae fugiat tenetur in nostrum est exercitationem ducimus hic facere autem id. Cupiditate, nemo sed?</p>
            <a href="#" class="btn btn-warning">Learn More</a>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section id="about" class="about section-padding">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
            <img src="image8.jpg" alt="img-fluid">
            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text">
            <h2>Our Product</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nisi non doloremque saepe? Necessitatibus laborum, accusantium reprehenderit iste, dicta porro a facilis qui architecto debitis perferendis ratione. Eligendi nemo repudiandae expedita doloribus, accusamus repellat, maiores beatae fugiat tenetur in nostrum est exercitationem ducimus hic facere autem id. Cupiditate, nemo sed?</p>
            <a href="#" class="btn btn-warning">Learn More</a>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section id="services" class="services-padding">
    <div class="row">
        <div class="col-md-12">
        <div class="section-header text-center pb-5">
            <h2>Our services</h2>
            <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. Itaque, at.</p>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body">
                <i class="bi bi-star-fill"></i>
                <h3 class="card-title">Best Quality</h3>
                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non maiores corporis itaque nam quia reprehenderit? Molestiae, hic unde ipsam porro amet rerum quidem ullam velit?</p>
                <button class="btn btn-warning text-dark">Read More</button>
                </div>
            </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body">
                <i class="bi bi-check-square-fill"></i>
                <h3 class="card-title">Trusted</h3>
                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non maiores corporis itaque nam quia reprehenderit? Molestiae, hic unde ipsam porro amet rerum quidem ullam velit?</p>
                <button class="btn btn-warning text-dark">Read More</button>
                </div>
            </div>
        </div>
            <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body">
                <i class="bi bi-clock-history"></i>
                <h3 class="card-title">Quickly</h3>
                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non maiores corporis itaque nam quia reprehenderit? Molestiae, hic unde ipsam porro amet rerum quidem ullam velit?</p>
                <button class="btn btn-warning text-dark">Read More</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <footer class="bg-dark text-light py-4 mt-5">
    <div class="container">
        <div class="row">
        <div class="col-md-3">
            <h5 class="footer-title">Bantuan</h5>
            <ul class="list-unstyled">
            <li><a href="#" class="footer-link">Cara Pembelian</a></li>
            <li><a href="#" class="footer-link">Pembayaran</a></li>
            <li><a href="#" class="footer-link">Pengiriman</a></li>
            <li><a href="#" class="footer-link">Cara Pengembalian</a></li>
            </ul>
        </div>   
        <div class="col-md-3">
            <h5 class="footer-title">Populer</h5>
            <ul class="list-unstyled">
            <li><a href="#" class="footer-link">Laptop</a></li>
            <li><a href="#" class="footer-link">Charger Laptop</a></li>
            <li><a href="#" class="footer-link">Aksesoris</a></li>
            <li><a href="#" class="footer-link">Keyboard</a></li>
            <li><a href="#" class="footer-link">Baterai Laptop</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h5 class="footer-title">More Info</h5>
            <ul class="list-unstyled">
            <li><a href="#" class="footer-link">About</a></li>
            <li><a href="#" class="footer-link">Terms & Conditions</a></li>
            <li><a href="#" class="footer-link">Privacy Policy</a></li>
            <li><a href="#" class="footer-link">Contact</a></li>
            <li><a href="#" class="footer-link">Site Map</a></li>
            </ul>
        </div>  
        <div class="col-md-3">
            <h5 class="footer-title">Follow Us</h5>
            <div class="social-links">
            <a href="#" class="text-light me-3 icon-link"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-light me-3 icon-link"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-light me-3 icon-link"><i class="bi bi-instagram"></i></a>
            </div>
            <br>
            &copy;2024 Bell Computer. All Rights Reserved. 
            Created by : beldaputii

        </div>
        </div>
    </div>
    </footer>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll("a");
        links.forEach(function(link) {
            link.addEventListener("click", function(event) {
                const href = link.getAttribute("href");
                if (href && !href.endsWith(".php")) {
                    event.preventDefault(); // Menghentikan tindakan bawaan tautan
                    alert("Mohon maaf, fitur belum tersedia.");
                }
            });
        });
    });
</script>

    <script>
        document.getElementById('alertButton').addEventListener('click', function() {
            alert('Maaf fitur ini belum release');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    </html>