<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EcoAgriLink | Sri Lanka's Sustainable Farming Hub</title>


    <!-- css -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/login.css">
    
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
                            <div class="link_item"><a href="signup.p"><i class="bi bi-person-fill-add"></i> Sign Up</a></div>
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
        
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Harvesting Harmony: Your Gateway to Sustainable Farming 
                                        with Sri Lanka's Department of Agriculture</h4>
                                    <p class="small mb-0">Welcome to our digital oasis, where sustainable 
                                        farming meets innovation. Explore the art of ecological agriculture 
                                        through expert guidance, eco-friendly products, and a vibrant community 
                                        of eco-conscious farmers. Join us in cultivating a greener tomorrow, 
                                        one crop at a time.</p>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                    
                                    <div class="text-center">
                                        <h4 class="mt-1 mb-5 pb-1">Create an Eco<label style="color: #7DBA34;">Agri</label>Link account</h4>
                                    </div>
                    
                                <form>
                                        
                                <!-- Name input -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="firstname" class="form-control" placeholder="First name"/>
                                            </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="lastname" class="form-control" placeholder="Last Name"/>
                                        </div>
                                    </div>
                                </div>

                                <!-- Username input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="username" class="form-control" placeholder="Username"/>
                                </div>
  
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" class="form-control" placeholder="Email address"/>
                                </div>

                                <!-- Contact input -->
                                <div class="form-outline mb-4">
                                   <input type="number" id="number" class="form-control" placeholder="Contact number"/>
                                </div>

                                <!-- District input -->
                                <div class="form-outline mb-4">
                                    <select class="form-control">
                                        <option>--Select your district--</option>
                                        <option value="Colombo">Colombo</option>
                                        <option value="Gampaha">Gampaha</option>
                                        <option value="Kalutara">Kalutara</option>
                                        <option value="Kandy">Kandy</option>
                                        <option value="Matale">Matale</option>
                                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                                        <option value="Galle">Galle</option>
                                        <option value="Matara">Matara</option>
                                        <option value="Hambantota">Hambantota</option>
                                        <option value="Jaffna">Jaffna</option>
                                        <option value="Kilinochchi">Kilinochchi</option>
                                        <option value="Mannar">Mannar</option>
                                        <option value="Vavuniya">Vavuniya</option>
                                        <option value="Mullaitivu">Mullaitivu</option>
                                        <option value="Batticaloa">Batticaloa</option>
                                        <option value="Ampara">Ampara</option>
                                        <option value="Trincomalee">Trincomalee</option>
                                        <option value="Kurunegala">Kurunegala</option>
                                        <option value="Puttalam">Puttalam</option>
                                        <option value="Anuradhapura">Anuradhapura</option>
                                        <option value="Polonnaruwa">Polonnaruwa</option>
                                        <option value="Badulla">Badulla</option>
                                        <option value="Monaragala">Monaragala</option>
                                        <option value="Ratnapura">Ratnapura</option>
                                        <option value="Kegalle">Kegalle</option>
                                    </select>                                      
                                </div>
                
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="pw" class="form-control" placeholder="Password"/>
                                </div>
  
                                <div class="form-outline mb-4">
                                    <input type="password" id="pw2" class="form-control" placeholder="Re Enter Password"/>
                                </div>
                    
                                <div class="text-center" style="margin-bottom: 2rem;">
                                    <button class="btn btn-success btn-block fa-lg mb-3" type="button">
                                        Create new account
                                    </button>
                                </div>

                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <p class="mb-0 me-2">Already have an account?</p>
                                    <a href="login.php"><button type="button" class="btn btn-outline-success">Log in</button></a>
                                </div>

                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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