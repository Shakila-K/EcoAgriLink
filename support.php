<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EcoAgriLink | Sri Lanka's Sustainable Farming Hub</title>


    <!-- css -->
    <link rel="stylesheet" href="CSS/support.css">
    <link rel="stylesheet" href="CSS/style.css">
    
    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Mono:wght@400;500;600&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Righteous">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
    
    <div class="main">
        <div class="navibar">

            <div class="logo">
                <!-- <img src="images/doa.png"> -->
                <div class="name">Eco<label class="agri">Agri</label>Link</div>
            </div>

            <div class="links">
                <div class="link_item"><a href="index.php">Home</a></div>
                <div class="link_item"><a href="about.php">About Us</a></div>              
                <div class="link_item"><a href="services.php">Services</a></div>
                <div class="link_item">
                    <div class="account-dropdown"><a href="#">Account</a>     
                        <div class="dropdown-content">
                            <div class="link_item"><a href="login.php"><i class="bi bi-person-fill"></i> Sign In</a></div>
                            <div class="link_item"><a href="signup.php"><i class="bi bi-person-fill-add"></i> Sign Up</a></div>
                        </div>
                    </div>
                </div>
                <div class="link_item">
                    <div class="search-dropdown"><a href="#"><i class="bi bi-search"></i></a>
                        <div class="search">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                              </form>
                        </div>
                    </div>
                </div>              
            </div>
        </div>

        <div class="support">
            
            <label class="support-info">Get support from a field officer</label>
        
            <div class="left-container">
                <label class="support-title">Please Fill the following form</label>
                <div class="support-form">
                    <form>
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="problem">Your Problem</label>
                            <textarea class="form-control" id="problem" rows="3" placeholder="Enter the problem you are having regarding Eco Farming"></textarea>
                          </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </form>
                </div>  
            </div>
            
            <div class="right-container">
                <img src="images/support_2.webp">
            </div>
        </div>

    </div>


    <div class="footer">
        <label class="footer-title">Eco<label class="footer-title-green">Agri</label>Link</label>
        <label class="footer-info">Nurturing Agriculture, Fostering Sustainability, and Growing a Greener Future Together.</label>
        <div class="footer-links">
            <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://www.x.com" target="_blank"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.youtube.com" target="_blank"><i class="bi bi-youtube"></i></a>
            <a href="https://www.whatsapp.com" target="_blank"><i class="bi bi-whatsapp"></i></a>
        </div>

        <div class="copyright">
            <label>Copyright © 2023 EcoAgriLink.</label>
        </div>
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>