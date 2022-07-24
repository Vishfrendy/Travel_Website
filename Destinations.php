
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
        <link rel="stylesheet" href="css/ed.css">
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

            $sql = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 0,1";
            $sql2 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 1,1";
            $sql3 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 2,1";
            $sql4 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 3,1";
            $sql5 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 4,1";
            $sql6 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 5,1";
            $sql7 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 6,1";
            $sql8 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 7,1";
            $sql9 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 8,1";
            $sql10 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 9,1";
            $sql11 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 10,1";
            $sql12 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 11,1";
            $sql13 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 12,1";
            $sql14 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 13,1";
            $sql15 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 14,1";
            $sql16 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 15,1";
            $sql17 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 16,1";
            $sql18 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 17,1";
            $sql19 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 18,1";
            $sql20 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 19,1";
            $sql21 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 20,1";
            $sql22 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 21,1";
            $sql23 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 22,1";
            $sql24 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 23,1";
            $sql25 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 24,1";
            $sql26 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 25,1";
            $sql27 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 26,1";
            $sql28 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 27,1";
            $sql29 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 28,1";
            $sql30 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 29,1";
            $sql31 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 30,1";
            $sql32 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 31,1";
            $sql33 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 32,1";
            $sql34 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 33,1";
            $sql35 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 34,1";
            $sql36 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 35,1";
            $sql37 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 36,1";
            $sql38 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 37,1";
            $sql39 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 38,1";
            $sql40 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 39,1";
            $sql41 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 40,1";
            $sql42 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 41,1";
            $sql43 = "SELECT ED_location, ED_image FROM explore_destinations LIMIT 42,1";
            $result = $connector->query($sql);
            $result2 = $connector->query($sql2);
            $result3 = $connector->query($sql3);
            $result4 = $connector->query($sql4);
            $result5 = $connector->query($sql5);
            $result6 = $connector->query($sql6);
            $result7 = $connector->query($sql7);
            $result8 = $connector->query($sql8);
            $result9 = $connector->query($sql9);
            $result10 = $connector->query($sql10);
            $result11 = $connector->query($sql11);
            $result12 = $connector->query($sql12);
            $result13 = $connector->query($sql13);
            $result14 = $connector->query($sql14);
            $result15 = $connector->query($sql15);
            $result16 = $connector->query($sql16);
            $result17 = $connector->query($sql17);
            $result18 = $connector->query($sql18);
            $result19 = $connector->query($sql19);
            $result20 = $connector->query($sql20);
            $result21 = $connector->query($sql21);
            $result22 = $connector->query($sql22);
            $result23 = $connector->query($sql23);
            $result24 = $connector->query($sql24);
            $result25 = $connector->query($sql25);
            $result26 = $connector->query($sql26);
            $result27 = $connector->query($sql27);
            $result28 = $connector->query($sql28);
            $result29 = $connector->query($sql29);
            $result30 = $connector->query($sql30);
            $result31 = $connector->query($sql31);
            $result32 = $connector->query($sql32);
            $result33 = $connector->query($sql33);
            $result34 = $connector->query($sql34);
            $result35 = $connector->query($sql35);
            $result36 = $connector->query($sql36);
            $result37 = $connector->query($sql37);
            $result38 = $connector->query($sql38);
            $result39 = $connector->query($sql39);
            $result40 = $connector->query($sql40);
            $result41 = $connector->query($sql41);
            $result42 = $connector->query($sql42);
            $result43 = $connector->query($sql43);
            
            
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
                        <h2>Explore Destinations</h2>
                    </div>
                    
                    <hr class="hr_top">
                    <div class="hr_vertical"></div>
                    <!----------POPULAR ACTIVITIES---------->
                    <div class="popular_eats">
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
                            echo '<div class="region1"><p>East Asia</p></div>';
                        
                            $row1 = $result->fetch_assoc();
                                echo '<div class="card_1">';
                                echo "<img src='{$row1['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row1['ED_location']}</b></h5>"; 
                                echo '</div>';
                                echo '</div>';         
                               
                            
                            $row2 = $result2->fetch_assoc(); 
                                echo '<div class="card_2">';
                                echo "<img src='{$row2['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row2['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>'; 
                                
                            $row3 = $result3->fetch_assoc(); 
                                echo '<div class="card_3">';
                                echo "<img src='{$row3['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row3['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';    
                                
                            $row4 = $result4->fetch_assoc(); 
                                echo '<div class="card_4">';
                                echo "<img src='{$row4['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row4['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row5 = $result5->fetch_assoc(); 
                                echo '<div class="card_5">';
                                echo "<img src='{$row5['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row5['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            echo '<div class="region2"><p>South East Asia</p></div>'; 
                                
                            $row6 = $result6->fetch_assoc(); 
                                echo '<div class="card_6">';
                                echo "<img src='{$row6['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row6['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row7 = $result7->fetch_assoc(); 
                                echo '<div class="card_7">';
                                echo "<img src='{$row7['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row7['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row8 = $result8->fetch_assoc(); 
                                echo '<div class="card_8">';
                                echo "<img src='{$row8['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row8['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row9 = $result9->fetch_assoc(); 
                                echo '<div class="card_9">';
                                echo "<img src='{$row9['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row9['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row10 = $result10->fetch_assoc(); 
                                echo '<div class="card_10">';
                                echo "<img src='{$row10['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row10['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row11 = $result11->fetch_assoc(); 
                                echo '<div class="card_11">';
                                echo "<img src='{$row11['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row11['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row12 = $result12->fetch_assoc(); 
                                echo '<div class="card_12">';
                                echo "<img src='{$row12['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row12['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row13 = $result13->fetch_assoc(); 
                                echo '<div class="card_13">';
                                echo "<img src='{$row13['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row13['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row14 = $result14->fetch_assoc(); 
                                echo '<div class="card_14">';
                                echo "<img src='{$row14['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row14['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';

                            echo '<div class="region3"><p>South Asia</p></div>'; 
                                
                            $row15 = $result15->fetch_assoc(); 
                                echo '<div class="card_15">';
                                echo "<img src='{$row15['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row15['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row16 = $result16->fetch_assoc(); 
                                echo '<div class="card_16">';
                                echo "<img src='{$row16['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row16['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row17 = $result17->fetch_assoc(); 
                                echo '<div class="card_17">';
                                echo "<img src='{$row17['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row17['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row18 = $result18->fetch_assoc(); 
                                echo '<div class="card_18">';
                                echo "<img src='{$row18['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row18['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            echo '<div class="region4"><p>Oceania</p></div>'; 
                                
                            $row19 = $result19->fetch_assoc(); 
                                echo '<div class="card_19">';
                                echo "<img src='{$row19['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row19['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row20 = $result20->fetch_assoc(); 
                                echo '<div class="card_20">';
                                echo "<img src='{$row20['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row20['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            echo '<div class="region5"><p>Middle East</p></div>'; 
                                
                            $row21 = $result21->fetch_assoc(); 
                                echo '<div class="card_21">';
                                echo "<img src='{$row21['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row21['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row22 = $result22->fetch_assoc(); 
                                echo '<div class="card_22">';
                                echo "<img src='{$row22['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row22['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row23 = $result23->fetch_assoc(); 
                                echo '<div class="card_23">';
                                echo "<img src='{$row23['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row23['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>'; 
                                
                            echo '<div class="region6"><p>Northern Europe</p></div>'; 
                                
                            $row24 = $result24->fetch_assoc(); 
                                echo '<div class="card_24">';
                                echo "<img src='{$row24['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row24['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row25 = $result25->fetch_assoc(); 
                                echo '<div class="card_25">';
                                echo "<img src='{$row25['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row25['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row26 = $result26->fetch_assoc(); 
                                echo '<div class="card_26">';
                                echo "<img src='{$row26['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row26['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';   
                                
                            $row27 = $result27->fetch_assoc(); 
                                echo '<div class="card_27">';
                                echo "<img src='{$row27['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row27['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            echo '<div class="region7"><p>Western Europe</p></div>'; 
                                
                            $row28 = $result28->fetch_assoc(); 
                                echo '<div class="card_28">';
                                echo "<img src='{$row28['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row28['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row29 = $result29->fetch_assoc(); 
                                echo '<div class="card_29">';
                                echo "<img src='{$row29['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row29['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row30 = $result30->fetch_assoc(); 
                                echo '<div class="card_30">';
                                echo "<img src='{$row30['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row30['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';   
                                
                            $row31 = $result31->fetch_assoc(); 
                                echo '<div class="card_31">';
                                echo "<img src='{$row31['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row31['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';   
                                
                            $row32 = $result32->fetch_assoc(); 
                                echo '<div class="card_32">';
                                echo "<img src='{$row32['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row32['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';   
                                
                            echo '<div class="region8"><p>Southern Europe</p></div>'; 
                                
                            $row33 = $result33->fetch_assoc(); 
                                echo '<div class="card_33">';
                                echo "<img src='{$row33['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row33['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row34 = $result34->fetch_assoc(); 
                                echo '<div class="card_34">';
                                echo "<img src='{$row34['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row34['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row35 = $result35->fetch_assoc(); 
                                echo '<div class="card_35">';
                                echo "<img src='{$row35['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row35['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';   
                                
                            $row36 = $result36->fetch_assoc(); 
                                echo '<div class="card_36">';
                                echo "<img src='{$row36['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row36['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';   
                                
                            $row37 = $result37->fetch_assoc(); 
                                echo '<div class="card_37">';
                                echo "<img src='{$row37['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row37['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';  
                                
                            echo '<div class="region9"><p>Central Europe</p></div>'; 
                                
                            $row38 = $result38->fetch_assoc(); 
                                echo '<div class="card_38">';
                                echo "<img src='{$row38['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row38['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row39 = $result39->fetch_assoc(); 
                                echo '<div class="card_39">';
                                echo "<img src='{$row39['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row39['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row40 = $result40->fetch_assoc(); 
                                echo '<div class="card_40">';
                                echo "<img src='{$row40['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row40['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';  
                                
                            echo '<div class="region10"><p>North America</p></div>'; 
                                
                            $row41 = $result41->fetch_assoc(); 
                                echo '<div class="card_41">';
                                echo "<img src='{$row41['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row41['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                                
                            $row42 = $result42->fetch_assoc(); 
                                echo '<div class="card_42">';
                                echo "<img src='{$row42['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row42['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';
                            
                            echo '<div class="region11"><p>Africa</p></div>'; 
                                
                            $row43 = $result43->fetch_assoc(); 
                                echo '<div class="card_43">';
                                echo "<img src='{$row43['ED_image']}'>";
                                echo '<div class="pe_container">';
                                echo "<h5><b>{$row43['ED_location']}</b></h5>";
                                echo '</div>';
                                echo '</div>';    
                                
                            $connector->close();
                        ?>
                        
                    </div>
                    <!----------END OF POPULAR ACTIVITIES---------->
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
