
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
        <link rel="stylesheet" href="css/pe.css">
        <link rel="stylesheet" href="css/javascript.css">
    </head>

    <body>
        <?php
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "travel_website";

            $connector = mysqli_connect($host, $username, $password, $database)
                         or die("Unable to connect");

            $sql = "SELECT PE_location, PE_image,PE_rating, PE_price FROM popular_eats LIMIT 0,1";
            $sql2 = "SELECT PE_location, PE_image,PE_rating, PE_price FROM popular_eats LIMIT 1,1";
            $sql3 = "SELECT PE_location, PE_image,PE_rating, PE_price FROM popular_eats LIMIT 2,1";
            $sql4 = "SELECT PE_location, PE_image,PE_rating, PE_price FROM popular_eats LIMIT 3,1";
            $sql5 = "SELECT PE_location, PE_image,PE_rating, PE_price FROM popular_eats LIMIT 4,1";
            $sql6 = "SELECT PE_location, PE_image,PE_rating, PE_price FROM popular_eats LIMIT 5,1";
            $sql7 = "SELECT PE_location, PE_image,PE_rating, PE_price FROM popular_eats LIMIT 6,1";
            $sql8 = "SELECT PE_location, PE_image,PE_rating, PE_price FROM popular_eats LIMIT 7,1";
            $result = $connector->query($sql);
            $result2 = $connector->query($sql2);
            $result3 = $connector->query($sql3);
            $result4 = $connector->query($sql4);
            $result5 = $connector->query($sql5);
            $result6 = $connector->query($sql6);
            $result7 = $connector->query($sql7);
            $result8 = $connector->query($sql8);
            
        ?>
        
        <button onclick="topFunction()" id="myBtn"><i class="fa fa-arrow-up"></i></button>
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
                    <div class="popular_eats_image">
                        <img src="./images/popular_eats.jpg" alt="Popular Eats">
                    </div>

                    <div class="text">
                        <h2>Popular Eats</h2>
                        <h3>Lookout for these special deals on some of the most popular F&B outlets in KL town!</h3>
                    </div>

                    <!----------POPULAR ACTIVITIES---------->
                    <div class="popular_eats">
                        <h2>Popular Eats</h2>
                        
                        <?php    
                            $row1 = $result->fetch_assoc();
                                echo '<div class="card_top1">';
                                echo "<img src='{$row1['PE_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row1['PE_location']}</b></h5>";
                                echo "<i class='fa fa-star'></i>";
                                echo "<h6>{$row1['PE_rating']}</h6>";
                                echo "<p>From {$row1['PE_price']}</p>"; 
                                echo '</div>';
                                echo '</div>';         
                               
                            
                            $row2 = $result2->fetch_assoc(); 
                                echo '<div class="card_top2">';
                                echo "<img src='{$row2['PE_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row2['PE_location']}</b></h5>";
                                echo "<i class='fa fa-star'></i>";
                                echo "<h6>{$row2['PE_rating']}</h6>";
                                echo "<p>From {$row2['PE_price']}</p>";
                                echo '</div>';
                                echo '</div>'; 
                                
                            $row3 = $result3->fetch_assoc(); 
                                echo '<div class="card_top3">';
                                echo "<img src='{$row3['PE_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row3['PE_location']}</b></h5>";
                                echo "<i class='fa fa-star'></i>";
                                echo "<h6>{$row3['PE_rating']}</h6>";
                                echo "<p>From {$row3['PE_price']}</p>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row4 = $result4->fetch_assoc(); 
                                echo '<div class="card_top4">';
                                echo "<img src='{$row4['PE_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row4['PE_location']}</b></h5>";
                                echo "<i class='fa fa-star'></i>";
                                echo "<h6>{$row4['PE_rating']}</h6>";
                                echo "<p>From {$row4['PE_price']}</p>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row5 = $result5->fetch_assoc(); 
                                echo '<div class="card_bottom1">';
                                echo "<img src='{$row5['PE_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row5['PE_location']}</b></h5>";
                                echo "<i class='fa fa-star'></i>";
                                echo "<h6>{$row5['PE_rating']}</h6>";
                                echo "<p>From {$row5['PE_price']}</p>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row6 = $result6->fetch_assoc(); 
                                echo '<div class="card_bottom2">';
                                echo "<img src='{$row6['PE_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row6['PE_location']}</b></h5>";
                                echo "<i class='fa fa-star'></i>";
                                echo "<h6>{$row6['PE_rating']}</h6>";
                                echo "<p>From {$row6['PE_price']}</p>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row7 = $result7->fetch_assoc(); 
                                echo '<div class="card_bottom3">';
                                echo "<img src='{$row7['PE_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row7['PE_location']}</b></h5>";
                                echo "<i class='fa fa-star'></i>";
                                echo "<h6>{$row7['PE_rating']}</h6>";
                                echo "<p>From {$row7['PE_price']}</p>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row8 = $result8->fetch_assoc(); 
                                echo '<div class="card_bottom4">';
                                echo "<img src='{$row8['PE_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row8['PE_location']}</b></h5>";
                                echo "<i class='fa fa-star'></i>";
                                echo "<h6>{$row8['PE_rating']}</h6>";
                                echo "<p>From {$row8['PE_price']}</p>";
                                echo '</div>';
                                echo '</div>';
                            
                            
                            $connector->close();
                        ?>
                    
                    </div>
                    <!----------END OF POPULAR ACTIVITIES---------->
                </div>
            </div>

            <hr class="solid_pe">

            <!----------FOOTER---------->
            <footer>
                <div class="footer_pe">
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
    </body>
</html>

<script src="javascript/javascript.js"></script>

<script>
//Get the button
            var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

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
