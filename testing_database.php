<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>database connections</title>
    </head>
    <body>
        <?php
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "travel_website";

            $connector = mysqli_connect($host, $username, $password, $database)
                    or die("Unable to connect");

            //execute the SQL query and return records
            $result = mysqli_query($connector, "SELECT * FROM popular_eats");
        ?>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <div class='card_top'>
                        <img src='{$row['PE_image']}'>
                        <div class='pe_container'>
                            <h5><b>{$row['PE_location']}</b></h5>
                            <i class='fa fa-star'></i>
                            <h6>{$row['PE_rating']}</h6>
                            <p>From {$row['PE_price']}</p> 
                        </div>
                    </div>
                    
                </tr>\n";
        }
        ?>

        <?php mysqli_close($connector); ?>

    </body>
</html>