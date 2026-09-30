<?php 

include("./connection/config.php");

$con = connection();


if (isset($_POST["submitbtn"])) {

    $email = $_POST["email"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $inquiries = $_POST["inquiries"];

    $sql = "INSERT INTO inquiries (email, first_name, last_name, inquiries)
            VALUES (?, ?, ?, ?)";

    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssss", $email, $fname, $lname, $inquiries);

    if ($stmt->execute()) {
        echo "<script>
        alert('Message sent successfully!');
        window.location.href='index.php#contact';
        </script>";
    } else {
        echo "Error: " . $stmt->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="design.css">
    <style>

    </style>
</head>

<body>

<div class = "main-content">    
    
    <!--Navigation Bar -->
    <nav class="navbar navbar-expand-lg sticky-top " >
        <div class="container-fluid" >
            <img class= "me-4" src="./images/controller.png" width="40px" >
            <a class="navbar-brand text-white" id="webname">Ahri Gaming Cafe</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarlinks">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarlinks">
                <div class="navbar-nav ms-4 " >
                    <a class="nav-link me-4" href="#home">Home</a>
                    <a class="nav-link me-4" href=#services>Services</a>
                    <a class="nav-link me-4" href="#products">Products</a>
                    <a class="nav-link me-4" href="#about-us">About Us</a>
                    <a class="nav-link me-4" href="#contact-us">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!--Home Section-->
    <section id="home" class="home" >

        <div class = "home-text-section text-center"  >
            <h1 class="home-header" >A GAMING PLACE FOR YOU</h1>
                <p>Ahri Gaming Cafe is a premium gaming lounge designed to provide an exceptional gaming experience with high-quality equipment, comfortable spaces, and excellent service.
                    Whether you want to relax, have fun with friends, or enjoy competitive gaming, our café has something for you. 
                    Experience powerful gaming PCs, immersive setups, and a welcoming environment built for every type of gamer.
                    We also sell gaming accessories </p>
                <h7>PLAY • RELAX • CONNECT</h7>
            <hr>
        </div>

    </section>

    <hr class="sectionline">

    <!--Services -->
    <section  id="services" class="services">

    <div class="services-text-section text-center">
        <h1 id="services-header">Services We Offer</h1>
            <p id = "services-textbox" class="text-center" >Here Are The Different Services We Offer </p>
        <h7>GAMING STATION • TOURNAMENT HUB • </h7>
    </div>
        <hr>



    <div class="services-item container">
        <div class="row justify-content-center">
        <h1 class="text-center text-white mb-5 mt-5">GAMING PC</h1>
            <!--Services Cards -->
            <!--Services Card 1 -->
            <div class="col-sm-6 col-lg-4 ">
                <div class="card text-bg-dark mb-3 ">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Regular PC</h5>
                        <p class="card-text text-center">Rate: ₱15/hour</p>
                        <ul>
                            <li>Processor: AMD Ryzen 5 5600G</li>
                            <li>Graphics: Integrated Radeon Graphics</li>
                            <li>Ram:16GB</li>
                            <li>Monitor: 165HZ Flat Gaming Monitor</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--Services Card 2 -->
            <div class="col-sm-6 col-lg-4 ">
                <div class="card text-bg-dark mb-3 ">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">VIP PC</h5>
                        <p class="card-text text-center">Rate: ₱25/hour</p>
                        <ul>
                            <li>Processor: AMD Ryzen 5 7600</li>
                            <li>Graphics: RTX 4060 8GB</li>
                            <li>Ram:16GB DDR5</li>
                            <li>Monitor: 180HZ Monitor</li>
                        </ul>
                    </div>
                </div>
            </div>

        <h1 class="text-center text-white mb-5 mt-5">CONSOLES</h1>
            <!--Services Card 3 -->
            <div class="col-sm-6 col-lg-4 ">
                <div class="card text-bg-dark mb-3 ">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">PS4/XBOX ONE</h5>
                        <p class="card-text text-center">Rate: ₱80/hour</p>
                        <ul>
                            <li>40+ Console Games</li>
                            <li>Online Multiplayer Available</li>
                            <li>2 Controllers</li>
                            <li>HD Gaming Display</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--Services Card 4 -->
            <div class="col-sm-6 col-lg-4 ">
                <div class="card text-bg-dark mb-3 ">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">PS4/XBOX ONE</h5>
                        <p class="card-text text-center">Rate: ₱120/hour</p>
                        <ul>
                            <li>40+ Console Games</li>
                            <li>Online Multiplayer Available</li>
                            <li>2 Controllers</li>
                            <li>4K Gaming Display</li>
                        </ul>
                    </div>
                </div>
            </div>


        <h1 class="text-center text-white mb-5 mt-5">TOURNAMENT HUB</h1>
        <!--Tournament Hub Card -->
        <div class="col-sm-6 col-lg-4 ">
            <div class="card text-bg-dark mb-3 ">
                <div class="card-body text-center">
                    <h5 class="card-title text-center">TOURNAMENT HUB</h5>
                    <p class="card-text text-center">Rate: ₱200/hour</p>
                    <ul>
                        <li>High Performance Gaming PCs</li>
                        <li>High Refresh Rate Monitors</li>
                        <li>Tournament Ready Setup</li>
                        <li>Team Gaming Area</li>
                    </ul>
                </div>
            </div>
        </div>
        
        </div>
    </div>    

</section>




<hr class ="sectionline">

<!--Products Section -->
    <section id="products">

        <div class="products-text-section text-center">
            <h1 id="products-header">Products We Sell</h1>
                <p id = "services-textbox" class="text-center" >Here Are The Different Gaming Accessories We Sell </p>
        </div>
        <hr>

    <div class="product-item container">
        <div class="row justify-content-center">
            <!--Products Cards -->
            <!--Products Card 1 -->
            <div class="col-sm-6 col-lg-4 ">
                <div class="card text-bg-dark mb-3 h-100">
                    <div class="card-body">
                        <img class  = "card-img" src="./images/headset.jpg" class="card-img-top">
                        <h5 class="card-title">SteelSeries Arctis Nova 5</h5>
                        <p class="card-text">Price: ₱7,500</p>
                    </div>
                </div>
            </div>

            <!--Products Card 2 -->
            <div class="col-sm-6 col-lg-4">
                <div class="card text-bg-dark mb-3 h-100">
                    <img class  = "card-img" src="./images/keyboard.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">AULA F75 75% Wireless Mechanical Keyboard</h5>
                        <p class="card-text">Price: ₱2,700</p>
                    </div>
                </div>
            </div>

            <!--Products Card 3 -->
            <div class="col-sm-6 col-lg-4">
                <div class="card text-bg-dark mb-3 h-100">
                    <img class  = "card-img" src="./images/mousepad.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Tecware Haste XXL Topo Mousemat</h5>
                        <p class="card-text">Price: ₱650</p>
                    </div>
                </div>
            </div>


        </div>
    </div>    

    </section>

<hr class ="sectionline">

<!--About US-->
    <section id="about-us">
        <div class="about-text-container justify-content-center ">
            <h1 class="text-center  mt-5 mb-5">About Us</h1>
            <p class="text-center  mt-5">I Am Carl Vinzon Paz a student from FEU Roosevelt Marikina, This Website is developed for an activity.
                I chose to do a gaming cafe website I am interested in gaming and wanted to create a website based on something that I enjoy. I designed Ahri Gaming Cafe to show the different services, gaming stations, and products that a gaming cafe could offer. 
                I also wanted to make the website simple, easy to navigate, and visually appealing for users.
            </p>

        </div>

    </section>

<hr class ="sectionline">

<!--Contact Us-->
    <section id="contact-us">
            <div class="contact-us-text-container justify-content-center ">
                <h1 class="text-center  mt-5 mb-5">Contact Us</h1>
                <form action="" method="POST">
                    <div class= "mb-5 text-center">
                        <label>Email: </label>
                    <br>
                        <Input type="text" name="email" placeholder="@gmail.com" required></Input>
                    </div>

                    <div class= "mb-5 text-center">
                        <label>First Name: </label>
                    <br>
                        <Input type="text" name="fname" required></Input>
                    </div>

                    <br>

                    <div class= "mb-5 text-center">
                        <label>Last Name: </label>
                    <br>
                        <Input type="text" name="lname" required></Input>
                    </div>

                    <br>

                    <div class= "mb-5 text-center">
                        <label>Inquiries: </label>
                    <br>
                        <Input type="text" name="inquiries" required></Input>
                    </div>

                    <br>
                    
                    <div class= "mb-5 text-center">
                    <button type="submit" name="submitbtn">Submit</button>
                    </div>
                </form>
        </div>
    </section>


</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

