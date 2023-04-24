<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, inital-scale=1.0">
		<title>COP4710 Project</title>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
        <style>

            .container22 {
                display: flex;
                flex-wrap: wrap;
            }

            .container11 {
                width: 100%;
                text-align: center;
                align-items: center;
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
                max-height: 100%;
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
                max-height: 100%;
                border-color: #f2f2ff;
                border: 5px;
                border: solid 5px #f2f2ff; /* Add left border */
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
                margin-bottom: 30px;
            }
            .space {
                width: 35px;
                height: auto;
                display: inline-block;
            }
            .space1 {
                height: 35%;
                height: auto;
                display: inline-block;
            }

            .container0 show_table{
            height: 50px;
            position: center;
            }

            .container {
            display: flex;
            margin-top: 30px;
            margin-bottom: 30px;
            flex-wrap: wrap;

            }
            .nextline{
                max-height: 30px;
            }
        </style>
	</head>
    <div class="container22">
    <div class="container11">
	<h1>BROADWAY SHOWS DATABASE!!!</h1>
    </div>
    <div class="container12" >
	<div><h2> Show/Reload Table </h2></div>

    <script>
    function redirectToParentIndex() {
        window.location.href = '../Update.php';
    }
	</script>

    
	<body bgcolor=white>
   <div><h2> Update All </h2></div>
    <div class="container container1">
 
	<form  method="POST" action='UpdateShows.php'>
		<label for= "Show_ID">show ID:</label><br>
		<input type="int" name="Show_ID" id="Show_ID" required/><br><br>

		<label for= "Names">Name:</label><br>
		<input type="text" name="Names" id="Names" required/><br><br>

		<label for= "Release_Date">Release_Date:</label><br>
		<input type="date" name="Release_Date" id="Release_Date" required/><br><br>

		<label for= "Genre">Genre:</label><br>
		<input type="text" name="Genre" id="Genre" required/><br><br>

		<input type="submit" name="submit" id="submit" />

	</form>
    </div>

    <div><h2> Update Name </h2></div>
    <div class="container container2">

	<form  method="POST" action='UpdateShows.php'>
		<label for= "Show_ID">show ID:</label><br>
		<input type="int" name="Show_ID" id="Show_ID" required/><br><br>

		<label for= "Names">Show Name:</label><br>
		<input type="text" name="Names" id="Names" required/><br><br>

		<input type="submit" name="submit1" id="submit1" />

	</form>
    </div>

    <div><h2> Update Release Date </h2></div>
    <div class="container container3">
    
	<form  method="POST" action='UpdateShows.php'>
		<label for= "Show_ID">show ID:</label><br>
		<input type="int" name="Show_ID" id="Show_ID" required/><br><br>

		<label for= "Release_Date">Release_Date:</label><br>
		<input type="date" name="Release_Date" id="Release_Date" required/><br><br>

		<input type="submit" name="submit2" id="submit2" />

	</form>
    </div>

    <div><h2> Update Genre </h2></div>
    <div class="container container4">
    
	<form  method="POST" action='UpdateShows.php'>
		<label for= "Show_ID">show ID:</label><br>
		<input type="int" name="Show_ID" id="Show_ID" required/><br><br>

		<label for= "Genre">Genre:</label><br>
		<input type="text" name="Genre" id="Genre" required/><br><br>

		<input type="submit" name="submit3" id="submit3" />

	</form>
    </div>

</div>
    <div class="container13">
    <form method="POST" action='UpdateShows.php'> 
        <input type="submit" name="show_table" id="show_table" value="Show/Reload Table" />
        </form>
        <button onclick="redirectToParentIndex()">Go to Index</button>


	<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());
        if (isset($_POST['Show_ID']) && isset($_POST['Names']) && isset($_POST['Release_Date']) && isset($_POST['Genre'])) {
            $Show_ID = $_POST['Show_ID'];
            $Names = $_POST['Names'];
            $Release_Date = $_POST['Release_Date'];
            $Genre = $_POST['Genre'];

            $sql = "UPDATE shows
            SET 
            Names = '$Names',
            Release_Date = '$Release_Date',
            Genre = '$Genre'
            WHERE Show_ID = '$Show_ID'";

            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo '<div id="message" style="display:block;">Entry Successful</div>';
                 
            } else {
                echo '<div id="message" style="display:block;">Error</div>';
                 
            }
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit1'])) {
        $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());
        if (isset($_POST['Show_ID']) && isset($_POST['Names'])) {
            $Show_ID = $_POST['Show_ID'];
            $Names = $_POST['Names'];
            $sql = "UPDATE shows
            SET Names = '$Names'
            WHERE Show_ID = '$Show_ID'";

            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo '<div id="message" style="display:block;">Entry Successful</div>';

            } else {
                echo '<div id="message" style="display:block;">Error</div>';
                 
            }
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit2'])) {
        $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());
        if (isset($_POST['Show_ID']) && isset($_POST['Release_Date'])) {
            $Show_ID = $_POST['Show_ID'];
            $Release_Date = $_POST['Release_Date'];

            $sql = "UPDATE shows
            SET Release_Date = '$Release_Date'
            WHERE Show_ID = '$Show_ID'";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo '<div id="message" style="display:block;">Entry Successful</div>';
                 
            } else {
                echo '<div id="message" style="display:block;">Error</div>';
                 
            }
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit3'])) {
        $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());
        if (isset($_POST['Show_ID']) && isset($_POST['Genre'])) {
            $Show_ID = $_POST['Show_ID'];
            $Genre = $_POST['Genre'];

            $sql = "UPDATE shows
            SET Genre = '$Genre'
            WHERE Show_ID = '$Show_ID'";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo '<div id="message" style="display:block;">Entry Successful</div>';
                 
            } else {
                echo '<div id="message" style="display:block;">Error</div>';
                 
            }
        }
    }

    




    if (isset($_POST['show_table'])) {

        // Connect to MySQL database
        $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());

        $query = "SELECT * FROM shows";
        $result = mysqli_query($conn, $query);
        echo "<div style='text-align: center;'>";
        echo "<table style='margin: 0 auto; border-collapse: collapse; border: 1px solid white;'>";
        echo "<tr style='background-color: hsl(194, 76%, 52%, 1);'><th style='border: 1px solid white; padding: 5px;'>Show Name</th><th style='border: 1px solid white; padding: 5px;'>Show ID</th><th style='border: 1px solid white; padding: 5px;'>Release Date</th><th style='border: 1px solid white; padding: 5px;'>Genre</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Names'] . "</td>";
            echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Show_ID'] . "</td>";
            echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Release_Date'] . "</td>";
            echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Genre'] . "</td>";
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