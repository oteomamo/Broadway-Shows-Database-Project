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

$sqlGenders = "SELECT DISTINCT Gender FROM cast_and_crew";
$resultGenders = mysqli_query($conn, $sqlGenders);
$selectedGender = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selectedShowID = isset($_POST['Show_ID']) ? $_POST['Show_ID'] : null;
    $selectedPositionID = isset($_POST['position_id']) ? $_POST['position_id'] : null;
    $selectedGender = isset($_POST['gender']) ? $_POST['gender'] : null;
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
            <h2>Search Cast and Crew by Show Name, Position and Gender </h2>
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
                <div></div><div></div>
                <label for="positionSelect">Select a Position:</label>
                <select id="positionSelect" name="position_id">
                <option value=""<?php echo ($selectedPositionID == "*") ? ' selected' : ''; ?>>-- Select a Position --</option>
                    <?php
                    while ($row = mysqli_fetch_assoc($resultPositions)) {
                        $positionID = $row['Working_Position'];
                        $selected = ($positionID == $selectedPositionID) ? 'selected' : '';
                        echo "<option value='$positionID' $selected>$positionID</option>";
                    }
                    ?>
                </select>
                <div></div><div></div>
                <label for="genderSelect">Select a Gender:</label>
                <select id="genderSelect" name="gender">
                <option value=""<?php echo ($selectedGender == "*") ? ' selected' : ''; ?>>-- Select a Gender --</option>
                    <?php
                    while ($row = mysqli_fetch_assoc($resultGenders)) {
                        $gender = $row['Gender'];
                        $selected = ($gender == $selectedGender) ? 'selected' : '';
                        echo "<option value='$gender' $selected>$gender</option>";
                    }
                    ?>
                </select>
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

    $Show_ID = isset($_POST['Show_ID']) ? $_POST['Show_ID'] : null;
    $position = isset($_POST['position_id']) ? $_POST['position_id'] : null;
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null;

    $query = "SELECT cast_and_crew.Name, cast_and_crew.Working_Position, cast_and_crew.Gender, shows.Names
    FROM cast_and_crew
    JOIN shows ON cast_and_crew.Show_ID = shows.Show_ID
    WHERE 1=1"; // Use a placeholder condition that will always be true

    if (!empty($Show_ID)) {
        $query .= " AND cast_and_crew.Show_ID = '$Show_ID'";
    }
    if (!empty($position)) {
        $query .= " AND cast_and_crew.Working_Position = '$position'";
    }
    if (!empty($gender)) {
        $query .= " AND cast_and_crew.Gender = '$gender'";
    }
    $result = mysqli_query($conn, $query);

    echo "<div style='text-align: center;'>";
    echo "<table style='margin: 0 auto; border-collapse: collapse; border: 1px solid white;'>";
    echo "<tr style='background-color: hsl(194, 76%, 52%, 1);'><th style='border: 1px solid white; padding: 5px;'>Name</th><th style='border: 1px solid white; padding: 5px;'>Working Position</th><th style='border: 1px solid white; padding: 5px;'>Gender</th><th style='border: 1px solid white; padding: 5px;'>Show Name</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Name'] . "</td>";
        echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Working_Position'] . "</td>";
        echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Gender'] . "</td>";
        echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Names'] . "</td>";
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


