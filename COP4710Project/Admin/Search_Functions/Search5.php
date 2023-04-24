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

$sqlPositions = "SELECT DISTINCT cast_and_crew.Working_Position FROM cast_and_crew";
$resultPositions = mysqli_query($conn, $sqlPositions);
$selectedPositionID = null;

$sqlgenres = "SELECT DISTINCT genre FROM shows";
$resultgenres = mysqli_query($conn, $sqlgenres);
$selectedGenre = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selectedShowID = isset($_POST['Show_ID']) ? $_POST['Show_ID'] : null;
    $selectedPositionID = isset($_POST['position_id']) ? $_POST['position_id'] : null;
    $selectedGenre = isset($_POST['genre']) ? $_POST['genre'] : null;
}
?>

<body>

<div class="container22">
    <div class="container11">
	<h1>BROADWAY SHOWS DATABASE!!!</h1>
    </div>
    <div class="container12">
    <div class="container container2">
        <div class="form-container">
            <h2>Search Cast and Crew by Name </h2>
            <form method="post">
            
                <div></div><div></div>
                <label for="Name">Name:</label>
                <input type="text" id="Name" name="Name" required>
                <br><br>
                
                <input type="submit" name="show_table" id="show_table" value="Show/Reload Table" />
            </form>
            <button onclick="redirectToParentIndex()">Go to Index</button>
        <script>
            function redirectToParentIndex() {
                window.location.href = '../Search.php';
            }
        </script>
        </div>
    </div>
    </div>

    <div class="container13" style="overflow-y: auto; max-height: 740px;">




<?php

if (isset($_POST['show_table'])) {

    // Connect to MySQL database
    $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());


    $Name = $_POST['Name'];


    $query = "SELECT DISTINCT cast_and_crew.Name, cast_and_crew.Working_Position, cast_and_crew.Gender, cast_and_crew.SSN
            FROM cast_and_crew
            WHERE Name Like '%$Name%' ";
    $result = mysqli_query($conn, $query);
    echo "<div style='text-align: center;'>";
    echo "<table style='margin: 0 auto; border-collapse: collapse; border: 1px solid white;'>";
    echo "<tr style='background-color: hsl(194, 76%, 52%, 1);'><th style='border: 1px solid white; padding: 5px;'>Name</th><th style='border: 1px solid white; padding: 5px;'>Working_Position</th><th style='border: 1px solid white; padding: 5px;'>Gender</th><th style='border: 1px solid white; padding: 5px;'>SSN</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Name'] . "</td>";
        echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Working_Position'] . "</td>";
        echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Gender'] . "</td>";
        echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['SSN'] . "</td>";
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


