<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, inital-scale=1.0">
		<title>COP4710 Project</title>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery library -->
        <style>

        .container22 {
            display: flex;
            flex-wrap: wrap;
        }

        .container11 {
            width: 100%;
            text-align: center;
            max-height: 300px;
            border-bottom: #f2f2ff;
            border-bottom-width: 30px;
        }

        .container12 {
            justify-content: center;
            padding-top: 100px;
            padding-bottom: 100px;
            width: 49%;
            text-align: center;
            max-height: 740px;
            align-items: center;
            border-color: #f2f2ff;
            border: 5px;
            border: solid 5px #f2f2ff; /* Add right border */
        }

        .container13 {
            justify-content: center;
            padding-top: 100px;
            width: 49%;
            text-align: center;
            border-color: #f2f2ff;
            border: 5px;
            border: solid 5px #f2f2ff; /* Add left border */
        }  

            .container13::-webkit-scrollbar {
            width: 2em;
            }
            .container13::-webkit-scrollbar-track {
            background: hsl(194 76% 92% /1);
            }
            .container13::-webkit-scrollbar-thumb {
            background: hsl(194 76% 52% /1);
            border: .25em solid hsl(194 76% 92% /1);
            border-radius: 100vw;
            }
            .container13::-webkit-scrollbar-thumb:hover {
            background: hsl(194 76% 42% /1);
            }
            h1 {
                color: #1d3c45;
                text-align: center; 
            }
            h2 {
                color: #1d3c45;
                text-align: center; 
            }
            label {
                color: #d2601a;
                border-radius: 5%;
                font-size: 18px; 
            }
            input {
                color: #d2601a;
                border-radius: 5%;
                margin-top: 10px; 
                font-size: 18px; 
                width: 200px; 
            }
            button {
                color: #d2601a;
                border-radius: 5%;
                margin-top: 10px; 
                font-size: 18px; 
                width: 200px; 
            }
        </style>
    </head>

<?php
$conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());

$sqlShows = "SELECT shows.Show_ID, shows.Names FROM shows";
$resultShows = mysqli_query($conn, $sqlShows);
$selectedShowID = null;
$sqlgenres = "SELECT DISTINCT genre FROM shows";
$resultgenres = mysqli_query($conn, $sqlgenres);
$selectedGenre = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selectedShowID = isset($_POST['Show_ID']) ? $_POST['Show_ID'] : null;
    $selectedGenre = isset($_POST['genre']) ? $_POST['genre'] : null;
}
?>

<body>

<div class="container22">
    <div class="container11">
	<h1>BROADWAY SHOWS DATABASE!!!</h1>
    </div>
    <div class="container12">
        <div class="form-container">
            <h2>Search Shows </h2>
            <form method="post">
            <label for="showSelect">Select a Show:</label>
            <select id="showSelect" name="Show_ID">
                <option value=""<?php echo ($selectedShowID == "*") ? ' selected' : ''; ?>>-- Select a Show --</option>
                <?php
                while ($row = mysqli_fetch_assoc($resultShows)) {
                    $showID = $row['Show_ID'];
                    $showName = $row['Names'];
                    $selected = ($showID == $selectedShowID) ? 'selected' : '*';
                    echo "<option value='$showID' $selected>$showName</option>";
                }
                ?>
            </select>
                <br><br>
                <label for="start_date">Start Date:</label>
                <input type="date" id="start_date" name="start_date" required>
                &emsp;
                <label for="end_date">End Date:</label>
                <input type="date" id="end_date" name="end_date" required>
                <br><br>
                <label for="start_time">Start Time:</label>
                <input type="time" id="start_time" name="start_time" required>
                &emsp;
                <label for="end_time">End Time:</label>
                <input type="time" id="end_time" name="end_time" required>
                <br><br>
                <label for="genreSelect">Select a Genre:</label>
                <select id="genreSelect" name="genre">
                <option value=""<?php echo ($selectedGenre == "*") ? ' selected' : ''; ?>>-- Select a genre --</option>
                    <?php
                    while ($row = mysqli_fetch_assoc($resultgenres)) {
                        $genre = $row['genre'];
                        $selected = ($genre == $selectedGenre) ? 'selected' : '';
                        echo "<option value='$genre' $selected>$genre</option>";
                    }
                    ?>
                </select>
                <br><br>
                <label for="price">Max Price:</label>
                <input type="number" id="price" name="price" step="0.01" required>
                <br><br>
                <br>
                <button type="submit" name="submit">Show Available Dates</button>
                <button onclick="redirectToParentIndex()">Go to Index</button>
        <script>
            function redirectToParentIndex() {
                window.location.href = '../user.php';
            }
        </script>
            </form>
        </div>
        </div>
        <div class="container13" style="overflow-y: auto; max-height: 740px;">
            <?php

            if (isset($_POST['submit'])) {
                $startDate = $_POST['start_date'];
                $endDate = $_POST['end_date'];
                $startTime = $_POST['start_time'];
                $endTime = $_POST['end_time'];
                $price = $_POST['price'];

                // Connect to MySQL database
                $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());
                $Show_ID = isset($_POST['Show_ID']) ? $_POST['Show_ID'] : null;
                $genre = isset($_POST['genre']) ? $_POST['genre'] : null;
                error_reporting(E_ALL);
                ini_set('display_errors', 1);
                $query = "SELECT DISTINCT shows.Names, theater.Name, shows.Genre, ticket_sale.Date, ticket_sale.Time, ticket_sale.Price, ticket_sale.Number_of_Tickets
                FROM shows
                INNER JOIN cast_and_crew ON shows.Show_ID = cast_and_crew.Show_ID
                INNER JOIN theater ON cast_and_crew.Theater_ID = theater.Theater_ID
                INNER JOIN ticket_sale ON theater.Theater_ID = ticket_sale.Theater_ID
                WHERE  ticket_sale.Date BETWEEN '$startDate' AND '$endDate' AND ticket_sale.Time BETWEEN '$startTime' AND '$endTime' AND ticket_sale.Price <= '$price' AND 1=1";
                    if (!empty($Show_ID)) {
                        $query .= " AND shows.Show_ID = '$Show_ID'";
                    }
                    if (!empty($genre)) {
                        $query .= " AND shows.Genre = '$genre'";
                    }
                    error_reporting(E_ALL);
                    ini_set('display_errors', 1);
                $result = mysqli_query($conn, $query);

                echo "<div style='text-align: center;'>";
                echo "<table style='margin: 0 auto; border-collapse: collapse; border: 1px solid white;'>";
                echo "<tr style='background-color: hsl(194, 76%, 52%, 1);'><th style='border: 1px solid white; padding: 5px;'>Show Name</th><th style='border: 1px solid white; padding: 5px;'>Theater Name</th><th style='border: 1px solid white; padding: 5px;'>Genre</th><th style='border: 1px solid white; padding: 5px;'>Date</th><th style='border: 1px solid white; padding: 5px;'>Time</th><th style='border: 1px solid white; padding: 5px;'>Price</th><th style='border: 1px solid white; padding: 5px;'>Number of Tickets</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Names'] . "</td>";
                    echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Name'] . "</td>";
                    echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Genre'] . "</td>";
                    echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Date'] . "</td>";
                    echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Time'] . "</td>";
                    echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Price'] . "</td>";
                    echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Number_of_Tickets'] . "</td>";
                    echo "</tr>";
            
                }
                echo "</table></div></p>";
                mysqli_close($conn);
            }
            ?>

        </div>

    </div>

</body>

</html>
