<!DOCTYPE html>
<html lang="en">
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
            }
        </style>
    </head>
    <div class="container22">
    <div class="container11">
	<h1>BROADWAY SHOWS DATABASE!!!</h1>
    </div>
    <div class="container12">
	<div><h2> Theater Table </h2></div>
	<body bgcolor=white>
	<!--<form method="POST">-->
	<form  method="POST" action='RemoveTheater.php'>
		<label for= "Theater_ID">Theater ID:</label><br>
		<input type="int" name="Theater_ID" id="Theater_ID" required/><br><br>

		<input type="submit" name="submit" id="submit" />

	</form>


</div>
<div class="container13">
<button onclick="redirectToParentIndex()">Go to Index</button>
    <form method="POST" action='RemoveTheater.php'>
        <input type="submit" name="show_table" id="show_table" value="Show/Reload Table" />
	<script>
    function redirectToParentIndex() {
        window.location.href = '../Remove.php';
    }
	</script>
	<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());
        if (isset($_POST['Theater_ID']) ) {
            $Theater_ID = $_POST['Theater_ID'];
            $sql = "DELETE FROM theater WHERE Theater_ID = '$Theater_ID';";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo '<div id="message" style="display:block;">Entry Successful</div>';
            } else {
                echo '<div id="message" style="display:block;">Error</div>';
            }
            $query = mysqli_query($conn, $sql);
            $sql1 = "DELETE FROM cast_and_crew WHERE Theater_ID = '$Theater_ID';";
            if ($query) {
                echo '<div id="message" style="display:block;">Entry Successful</div>';
            } else {
                echo '<div id="message" style="display:block;">Error</div>';
            }
            $query = mysqli_query($conn, $sql1);
            $sql2 = "DELETE FROM ticket_sale WHERE Theater_ID = '$Theater_ID';";
            if ($query) {
                echo '<div id="message" style="display:block;">Entry Successful</div>';
            } else {
                echo '<div id="message" style="display:block;">Error</div>';
            }
            $query = mysqli_query($conn, $sql2);
        }
    }

    
    if (isset($_POST['show_table'])) {

        // Connect to MySQL database
        $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());

        $query = "SELECT * FROM theater";
        $result = mysqli_query($conn, $query);
        echo "<div style='text-align: center;'>";
        echo "<table style='margin: 0 auto;'>";
        echo "<tr><th>Show Name</th><th>Theater_ID</th><th>Address</th><th>Number_of_Seats</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Theater_ID'] . "</td>";
            echo "<td>" . $row['Address'] . "</td>";
            echo "<td>" . $row['Number_of_Seats'] . "</td>";
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