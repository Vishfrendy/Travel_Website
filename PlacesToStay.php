
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
        <link rel="stylesheet" href="css/pts.css">
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

            $sql = "SELECT PTS_location, PTS_price, PTS_rating, PTS_address, PTS_state, PTS_image FROM places_to_stay LIMIT 0,1";
            $sql2 = "SELECT PTS_location, PTS_price, PTS_rating, PTS_address, PTS_state, PTS_image FROM places_to_stay LIMIT 1,1";
            $sql3 = "SELECT PTS_location, PTS_price, PTS_rating, PTS_address, PTS_state, PTS_image FROM places_to_stay LIMIT 2,1";
            $sql4 = "SELECT PTS_location, PTS_price, PTS_rating, PTS_address, PTS_state, PTS_image FROM places_to_stay LIMIT 3,1";
            $sql5 = "SELECT PTS_location, PTS_price, PTS_rating, PTS_address, PTS_state, PTS_image FROM places_to_stay LIMIT 4,1";
            $sql6 = "SELECT PTS_location, PTS_price, PTS_rating, PTS_address, PTS_state, PTS_image FROM places_to_stay LIMIT 5,1";
            $sql7 = "SELECT PTS_location, PTS_price, PTS_rating, PTS_address, PTS_state, PTS_image FROM places_to_stay LIMIT 6,1";
            $sql8 = "SELECT PTS_location, PTS_price, PTS_rating, PTS_address, PTS_state, PTS_image FROM places_to_stay LIMIT 7,1";
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
                    <div class="places_to_stay_image">
                        <img src="./images/places_to_stay.jpg" alt="Places To Stay">
                    </div>

                    <div class="text">
                        <h2>Places To Stay</h2>
                        <h3>Save on amazing places to stay and explore unique experiences!</h3>
                    </div>

                    <div class="texts">
                        <div class="text">
                            <img src="./images/icon_1.png">
                            <p><b>Special savings</b></p>
                            <p>Compare packages, get great prices and find a deal right for you</p>
                        </div>

                        <div class="text">
                            <img src="./images/icon_2.png">
                            <p><b>Reliable customer support</b></p>
                            <p>Get in touch before or during your stay - we are always here when you need us</p>
                        </div>

                        <div class="text">
                            <img src="./images/icon_3.png">
                            <p><b>A platform made for you</b></p>
                            <p>23 languages covered, with 42 currencies and various payment methods accepted</p>
                        </div>
                    </div>

                    <hr class="solid2">

                    <!----------PLACES TO STAY---------->
                    <div class="places_to_stay">
                        <h2>Places To Stay</h2>
                        <?php
                        
                        $row1 = $result->fetch_assoc();
                        echo '<div class="card_top1">';
                            echo "<img src='{$row1['PTS_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row1['PTS_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row1['PTS_rating']}</h6>";
                                echo "<p>From {$row1['PTS_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row1['PTS_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        $row2 = $result2->fetch_assoc();
                        echo '<div class="card_top2">';
                            echo "<img src='{$row2['PTS_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row2['PTS_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row2['PTS_rating']}</h6>";
                                echo "<p>From {$row2['PTS_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row2['PTS_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        $row3 = $result3->fetch_assoc();
                        echo '<div class="card_top3">';
                            echo "<img src='{$row3['PTS_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row3['PTS_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row3['PTS_rating']}</h6>";
                                echo "<p>From {$row3['PTS_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row3['PTS_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        $row4 = $result4->fetch_assoc();
                        echo '<div class="card_top4">';
                            echo "<img src='{$row4['PTS_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row4['PTS_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row4['PTS_rating']}</h6>";
                                echo "<p>From {$row4['PTS_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row4['PTS_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                            
                        $row5 = $result5->fetch_assoc();
                        echo '<div class="card_bottom1">';
                            echo "<img src='{$row5['PTS_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row5['PTS_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row5['PTS_rating']}</h6>";
                                echo "<p>From {$row5['PTS_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row5['PTS_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        $row6 = $result6->fetch_assoc();
                        echo '<div class="card_bottom2">';
                            echo "<img src='{$row6['PTS_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row6['PTS_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row6['PTS_rating']}</h6>";
                                echo "<p>From {$row6['PTS_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row6['PTS_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        $row7 = $result7->fetch_assoc();
                        echo '<div class="card_bottom3">';
                            echo "<img src='{$row7['PTS_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row7['PTS_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row7['PTS_rating']}</h6>";
                                echo "<p>From {$row7['PTS_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row7['PTS_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        $row8 = $result8->fetch_assoc();
                        echo '<div class="card_bottom4">';
                            echo "<img src='{$row8['PTS_image']}'>";
                            echo '<div class="pts_container">';
                                echo "<h5><b>{$row8['PTS_location']}</b></h5>";
                                echo '<div class="rating"></div>';
                                echo '<i class="fa fa-star"></i>';
                                echo "<h6>{$row8['PTS_rating']}</h6>";
                                echo "<p>From {$row8['PTS_price']}</p>";
                                echo '<div class="state">';
                                    echo "<p>{$row8['PTS_state']}</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        
                        $connector->close();
                        ?>
                    </div>
                    <!----------END OF PLACES TO STAY---------->
                </div>
            </div>

            <hr class="solid_pts">

            <!----------FOOTER---------->
            <footer>
                <div class="footer_pts">
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
    mybutton.style.display = "block
            } else {
    mybutton.style.display = "none
            }
    }

// When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
</script>
