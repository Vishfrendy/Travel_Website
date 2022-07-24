<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>vfTravels - Explore Destinations And Things To Do</title>
        <!----------ICONSCOUT CDN---------->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!----------STYLESHEET---------->
        <link rel="stylesheet" href="css/Style.css">
        <link rel="stylesheet" href="css/javascript.css">
    </head>

    <body>
        <button onclick="topFunction()" id="myBtn"><i class="fa fa-arrow-up"></i></button>
        
        <div class="container-fluid">
            <!----------HEADER---------->
            <nav>
                <div class="menubar">
                    <div class="logo">
                        <img src="./images/logo.jpg">
                    </div>

                    <h2 class="log"><a href="index.php">vfTravels</a></h2>

                    <div class="search-bar">
                        <i class="uil uil-search"></i>
                        <input type="search" placeholder="Search for destinations or activites">
                    </div>

                    <div class="button">
                        <a href="Help.php" class="btn non-primary1">Help</a>
                        <a href="SignUp.php" class="btn non-primary2">Sign Up</a>
                        <a href="LogIn.php" class="btn btn-primary">Log In</a>
                    </div>	
                </div>

                <hr class="solid">

                <div class="container_down">
                    <ul class="navbar">
                        <li><a href="Destinations.php">Explore destinations</a>
                        <li><a href="ThingsToDo.php">Things To Do</a>
                        <li><a href="Events.php">Events</a>
                        <li><a href="Transport.php">Transport</a>
                        <li><a href="PlacesToStay.php">Places To Stay</a>
                        <li><a href="Food&Dining.php">Food & Dining</a>
                    </ul>
                </div>
            </nav>
            <!----------END OF HEADER---------->



            <!----------MAIN---------->
            <main>
                <div class="container">
                    <!----------MIDDLE---------->
                    <div class="middle">
                        <div class="search_background">
                            <img src="./images/picnic.jpg">
                        </div>

                        <div class="text">
                            <h2>Your world of joy</h2>
                            <h3>From local escapes to far-flung adventures, find what makes you happy anytime, anywhere</h3>
                        </div>
                        <form class="middle_search">
                            <i class="uil uil-search"></i>
                            <input type="search" placeholder="Search destinations or activities" id="search">
                            <input type="submit" value="Search" class="btn btn-primary">
                        </form>


                        <!----------INCREDIBLE DESTINATIONS---------->
                        <div class="incredible_destinations">
                            <h2>Incredible Destinations</h2>

                            <div class="destinations">
                                <div class="card">
                                    <img src="./images/destination-1.jpg" alt="Legoland">
                                    <div class="destination">
                                        <h5><b>Kuala Lumpur</b></h5> 
                                    </div>
                                </div>

                                <div class="card">
                                    <img src="./images/destination-2.jpg" alt="Legoland">
                                    <div class="destination">
                                        <h5><b>Langkawi</b></h5> 
                                    </div>
                                </div>

                                <div class="card">
                                    <img src="./images/destination-3.jpg" alt="Legoland">
                                    <div class="destination">
                                        <h5><b>Penang</b></h5> 
                                    </div>
                                </div>

                                <div class="card">
                                    <img src="./images/destination-4.jpg" alt="Legoland">
                                    <div class="destination">
                                        <h5><b>Johor Bahru</b></h5> 
                                    </div>
                                </div>

                                <div class="card">
                                    <img src="./images/destination-5.jpg" alt="Legoland">
                                    <div class="destination">
                                        <h5><b>Ipoh</b></h5> 
                                    </div>
                                </div>

                                <div class="card">
                                    <img src="./images/destination-6.jpg" alt="Legoland">
                                    <div class="destination">
                                        <h5><b>Sabah</b></h5> 
                                    </div>
                                </div>
                            </div>	

                            <div>
                                <button class="see_more_1">See More</button>
                            </div>
                        </div>
                        <!----------END OF INCREDIBLE DESTINATIONS---------->	


                        <!----------POPULAR ACTIVITIES---------->
                        <div class="popular_activities">
                            <h2>Popular Activities</h2>

                            <div class="card">
                                <img src="./images/activities-1.jpg" alt="Legoland">
                                <div class="container">
                                    <h5><b>LEGOLAND Malaysia</b></h5> 
                                    <p>From RM 70.00</p> 
                                </div>
                            </div>

                            <div class="card">
                                <img src="./images/activities-2.jpg" alt="Legoland">
                                <div class="container">
                                    <h5><b>Genting SkyWorlds Outdoor Theme Park</b></h5> 
                                    <p>From RM 151.00</p> 
                                </div>
                            </div>

                            <div class="card">
                                <img src="./images/activities-3.jpg" alt="Legoland">
                                <div class="container">
                                    <h5><b>Sunway Lagoon</b></h5> 
                                    <p>From RM 98.00</p> 
                                </div>
                            </div>

                            <div class="card">
                                <img src="./images/activities-4.jpg" alt="Legoland">
                                <div class="container">
                                    <h5><b>Langkawi Skycab Cable Car</b></h5> 
                                    <p>From RM 16.00</p> 
                                </div>
                            </div>

                            <div>
                                <button class="see_more_2">See More</button>
                            </div>
                        </div>
                        <!----------END OF POPULAR ACTIVITIES---------->



                        <!----------AMAZING EXPERIENCES---------->
                        <div class="amazing_experiences">
                            <h2>Amazing Experiences</h2>

                            <div class="card_am">
                                <img src="./images/popular_eats.jpg" alt="Popular Eats">
                                <h5><b>Popular Eats</b></a></h5> 
                                <p>Lookout for these special deals on some of the most popular F&B outlets!</p> 
                                <button><a href="PopularEats.php" class="see_activities_1">See Activities</a></button>
                            </div>

                            <div class="card_am">
                                <img src="./images/top_staycations.jpg" alt="Top Staycations">
                                <h5><b>Top Staycations</b></h5> 
                                <p>Enjoy these cool staycation promotions in Malaysia!</p> 
                                <button><a href="TopStaycations.php" class="see_activities_2">See Activities</a></button>
                            </div>
                        </div>
                        <!----------END OF AMAZING EXPERIENCES---------->
                    </div>
                </div>

                <hr class="solid2">



                <!----------FOOTER---------->
                <footer>
                    <div class="footer_inner">
                        <div>
                            <div class="footer_copyright"><span>© 2022-2022</span> <span>vfTravels. All Rights Reserved. Malaysia</span></div>
                        </div>

                        <div class="footer_internal-link">
                            <div class="footer_links">
                                <span class="footer_label">About vfTravels</span> 
                                <ul>
                                    <li><a href="/en-MY/about/">About Us</a></li>
                                    <li><a href="/en-MY/blog/">vfTravels Blog</a></li>
                                    <li><a href="https://www.klookcareers.com/" target="_blank">Careers</a></li>
                                </ul>
                            </div>

                            <div class="footer_links">
                                <span class="footer_label">Partnerships</span> 
                                <ul>
                                    <li><a href="https://affiliate.klook.com/">Affiliate Partnership</a></li>
                                    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdL2Ih8naxwUEQDs4Zl5GPtbJYR1sdD7azMwVEi9vDiX85ReQ/viewform">Influencer Program</a></li>
                                    <li><a href="https://klook.klktech.com/">Agent Marketplace</a></li>
                                </ul>
                            </div>

                            <div class="footer_links">
                                <span class="footer_label">Terms of use</span> 
                                <ul>
                                    <li><a href="/en-MY/conditions/">Terms &amp; Conditions</a></li>
                                    <li><a href="/en-MY/policy/">Privacy policy</a></li>
                                    <li><a href="/en-MY/cookiepolicy/">Cookie Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!----------END OF FOOTER---------->    
            </main>
        </div>  
    </body>
</html>

<script src="javascript/javascript.js"></script>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
