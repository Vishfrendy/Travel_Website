
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
        <link rel="stylesheet" href="css/fad.css">
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

            $sql = "SELECT FAD_location, FAD_price, FAD_rating, FAD_state, FAD_image FROM food_and_dining LIMIT 0,1";
            $sql2 = "SELECT FAD_location, FAD_price, FAD_rating, FAD_state, FAD_image FROM food_and_dining LIMIT 1,1";
            $sql3 = "SELECT FAD_location, FAD_price, FAD_rating, FAD_state, FAD_image FROM food_and_dining LIMIT 2,1";
            $sql4 = "SELECT FAD_location, FAD_price, FAD_rating, FAD_state, FAD_image FROM food_and_dining LIMIT 3,1";
            $sql5 = "SELECT FAD_location, FAD_price, FAD_rating, FAD_state, FAD_image FROM food_and_dining LIMIT 4,1";
            $sql6 = "SELECT FAD_location, FAD_price, FAD_rating, FAD_state, FAD_image FROM food_and_dining LIMIT 5,1";
            $sql7 = "SELECT FAD_location, FAD_price, FAD_rating, FAD_state, FAD_image FROM food_and_dining LIMIT 6,1";
            $sql8 = "SELECT FAD_location, FAD_price, FAD_rating, FAD_state, FAD_image FROM food_and_dining LIMIT 7,1";
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
                    <div class="text">
                        <h2>Food & Dining</h2>
                    </div>
                    
                    <hr class="hr_top">
                    <div class="hr_vertical"></div>
                    <!----------FOOD AND DINING ACTIVITIES---------->
                    <div class="Food_And_Dining">
                        <h2>Destinations</h2>
                        
                        <div class="checkbox">
                            <input type="checkbox" id="EastAsia">
                            <label for="EastAsia">East Asia</label><br>
                            
                            <input type="checkbox" id="SouthEastAsia">
                            <label for="SouthEastAsia">South East Asia</label><br>
                            
                            <input type="checkbox" id="SouthAsia">
                            <label for="SouthAsia">South Asia</label><br>
                            
                            <input type="checkbox" id="Oceania">
                            <label for="Oceania">Oceania</label><br>
                            
                            <input type="checkbox" id="MiddleEast">
                            <label for="MiddleEast">Middle East</label><br>
                            
                            <input type="checkbox" id="NorthernEurope">
                            <label for="NorthernEurope">Northern Europe</label><br>
                            
                            <input type="checkbox" id="WesternEurope">
                            <label for="WesternEurope">Western Europe</label><br>
                            
                            <input type="checkbox" id="SouthernEurope">
                            <label for="SouthernEurope">Southern Europe</label><br>
                            
                            <input type="checkbox" id="CentralEurope">
                            <label for="CentralEurope">Central Europe</label><br>
                            
                            <input type="checkbox" id="NorthAmerica">
                            <label for="NorthAmerica">North America</label><br>
                            
                            <input type="checkbox" id="Africa">
                            <label for="Africa">Africa</label><br>
                        </div>
                        
                        <?php
                        
                        $row1 = $result->fetch_assoc();
                        echo '<div class="card_1">';
                            echo "<img src='{$row1['FAD_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row1['FAD_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row1['FAD_rating']}</h6>";
                                echo "<p>From {$row1['FAD_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row1['FAD_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        $row2 = $result2->fetch_assoc();
                        echo '<div class="card_2">';
                            echo "<img src='{$row2['FAD_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row2['FAD_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row2['FAD_rating']}</h6>";
                                echo "<p>From {$row2['FAD_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row2['FAD_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        $row3 = $result3->fetch_assoc();
                        echo '<div class="card_3">';
                            echo "<img src='{$row3['FAD_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row3['FAD_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row3['FAD_rating']}</h6>";
                                echo "<p>From {$row3['FAD_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row3['FAD_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        $row4 = $result4->fetch_assoc();
                        echo '<div class="card_4">';
                            echo "<img src='{$row4['FAD_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row4['FAD_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row4['FAD_rating']}</h6>";
                                echo "<p>From {$row4['FAD_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row4['FAD_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                            
                        $row5 = $result5->fetch_assoc();
                        echo '<div class="card_5">';
                            echo "<img src='{$row5['FAD_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row5['FAD_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row5['FAD_rating']}</h6>";
                                echo "<p>From {$row5['FAD_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row5['FAD_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        $row6 = $result6->fetch_assoc();
                        echo '<div class="card_6">';
                            echo "<img src='{$row6['FAD_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row6['FAD_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row6['FAD_rating']}</h6>";
                                echo "<p>From {$row6['FAD_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row6['FAD_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        $row7 = $result7->fetch_assoc();
                        echo '<div class="card_7">';
                            echo "<img src='{$row7['FAD_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row7['FAD_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row7['FAD_rating']}</h6>";
                                echo "<p>From {$row7['FAD_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row7['FAD_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        $row8 = $result8->fetch_assoc();
                        echo '<div class="card_8">';
                            echo "<img src='{$row8['FAD_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row8['FAD_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row8['FAD_rating']}</h6>";
                                echo "<p>From {$row8['FAD_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row8['FAD_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        
                        $connector->close();
                        ?>
                        
                    </div>
                    <!----------END OF FOOD AND DINING ACTIVITIES---------->
                </div>
            </div>

            <hr class="hr_bottom">

            <!----------FOOTER---------->
            <footer>
                <div class="footer_pe">
                    <div>
                        <div class="footer_copyright">
                            <span>© 2022-2022</span>
                            <span>vfTravels. All Rights Reserved. Malaysia</span>
                        </div>
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
