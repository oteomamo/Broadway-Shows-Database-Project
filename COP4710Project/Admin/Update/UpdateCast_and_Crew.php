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
    <div class="container12">
    <div><h2> Cast and Crew Table </h2></div>
    


	<div><h2> Update All </h2></div>
	<body bgcolor=white>
    <div class="container container1">
	<form  method="POST" action='UpdateCast_and_Crew.php'>
		<label for= "SSN">SSN:</label>
		<input type="int" name="SSN" id="SSN" required/>

		<label for= "Name">Name:</label>
		<input type="text" name="Name" id="Name" required/><br><br>

		<label for= "Working_Position">Working Position:</label>
		<input type="text" name="Working_Position" id="Working_Position" required/>
        <div class="space"></div><div class="space"></div>
		<label for= "Show_ID">Show ID:</label>
		<input type="int" name="Show_ID" id="Show_ID" required/><br><br>

        <label for= "Gender">Gender:</label>
		<input type="text" name="Gender" id="Gender" required/>
        <div class="space"></div><div class="space"></div>    
		<label for= "Theater_ID">Theater ID:</label>
		<input type="int" name="Theater_ID" id="Theater_ID" required/><br><br>

		<input type="submit" name="submit" id="submit" />
        <div class="space"></div><div class="space"></div>
        
        <div class="space1"></div>

	</form>

    
	</div>

    <div><h2> Update Name </h2></div>
    <div class="container container2">
	<form  method="POST" action='UpdateCast_and_Crew.php'>
		<label for= "SSN">SSN:</label>
		<input type="int" name="SSN" id="SSN" required/>
        <div class="space"></div>
		<label for= "Name">Name:</label>
		<input type="text" name="Name" id="Name" required/>
        <div class="space"></div>
		<input type="submit" name="submit1" id="submit1" />

	</form>  
	</div>
	


    <div><h2> Update Working Position </h2></div>
    <div class="container container3">
	<form  method="POST" action='UpdateCast_and_Crew.php'>
		<label for= "SSN">SSN:</label>
		<input type="int" name="SSN" id="SSN" required/>
        <div class="space"></div>
		<label for= "Working_Position">Working Position:</label>
		<input type="text" name="Working_Position" id="Working_Position" required/> 
        <div class="space"></div>  
		<input type="submit" name="submit2" id="submit2" />
        <div class="space"></div><div class="space"></div>

	</form>
	</div>

    <div><h2> Update Show ID</h2></div>
    <div class="container container4">
	<form  method="POST" action='UpdateCast_and_Crew.php'>
		<label for= "SSN">SSN:</label>
		<input type="int" name="SSN" id="SSN" required/>
        <div class="space"></div>  
		<label for= "Show_ID">Show ID:</label>
		<input type="int" name="Show_ID" id="Show_ID" required/>
        <div class="space"></div>  
		<input type="submit" name="submit3" id="submit3" />
        <div class="space"></div><div class="space"></div>

	</form>
    </div>

    <div><h2> Update Gender </h2></div>
    <div class="container container4">
	<form  method="POST" action='UpdateCast_and_Crew.php'>
		<label for= "SSN">SSN:</label>
		<input type="int" name="SSN" id="SSN" required/>
        <div class="space"></div>  
		<label for= "Gender">Gender:</label>
		<input type="text" name="Gender" id="Gender" required/>
        <div class="space"></div>  
		<input type="submit" name="submit4" id="submit4" />
        <div class="space"></div><div class="space"></div>

	</form>
    </div>

    <div><h2> Update Theater ID </h2></div>
    <div class="container container4">
	<form  method="POST" action='UpdateCast_and_Crew.php'>
		<label for= "SSN">SSN:</label>
		<input type="int" name="SSN" id="SSN" required/>
        <div class="space"></div>  
		<label for= "Theater_ID">Theater ID:</label>
		<input type="int" name="Theater_ID" id="Theater_ID" required/>
        <div class="space"></div>  
		<input type="submit" name="submit5" id="submit5" />
        <div class="space"></div><div class="space"></div>

	</form>
    </div>

    <script>
    function redirectToParentIndex() {
        window.location.href = '../Update.php';
    }
	</script>
    </div>

    <div class="container13">
    <form method="POST" action='UpdateCast_and_Crew.php'> 
        <input type="submit" name="show_table" id="show_table" value="Show/Reload Table" />
        </form>
        <button onclick="redirectToParentIndex()">Go to Index</button>


	<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());
        if (isset($_POST['SSN']) && isset($_POST['Name']) && isset($_POST['Working_Position']) && isset($_POST['Show_ID']) && isset($_POST['Gender']) && isset($_POST['Theater_ID'])) {
            $SSN = $_POST['SSN'];
            $Name = $_POST['Name'];
            $Working_Position = $_POST['Working_Position'];
            $Show_ID = $_POST['Show_ID'];
            $Gender = $_POST['Gender'];
            $Theater_ID = $_POST['Theater_ID'];

            $sql = "UPDATE cast_and_crew
            SET Name = '$Name',
                Working_Position = '$Working_Position',
                Show_ID = '$Show_ID',
                Gender = '$Gender',
                Theater_ID = '$Theater_ID'
            WHERE SSN = '$SSN'";
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
        if (isset($_POST['SSN']) && isset($_POST['Name']) ) {
            $SSN = $_POST['SSN'];
            $Name = $_POST['Name'];

            $sql = "UPDATE cast_and_crew
            SET Name = '$Name'
            WHERE SSN = '$SSN'";
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
        if (isset($_POST['SSN'])  && isset($_POST['Working_Position'])) {
            $SSN = $_POST['SSN'];
            $Working_Position = $_POST['Working_Position'];

            $sql = "UPDATE cast_and_crew
            SET Working_Position = '$Working_Position'
            WHERE SSN = '$SSN'";
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
        if (isset($_POST['SSN']) && isset($_POST['Show_ID'])) {
            $SSN = $_POST['SSN'];
            $Show_ID = $_POST['Show_ID'];

            $sql = "UPDATE cast_and_crew
            SET Show_ID = '$Show_ID'
            WHERE SSN = '$SSN'";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo '<div id="message" style="display:block;">Entry Successful</div>';
            } else {
                echo '<div id="message" style="display:block;">Error</div>';
            }
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit4'])) {
        $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());
        if (isset($_POST['SSN']) && isset($_POST['Gender']) ) {
            $SSN = $_POST['SSN'];
            $Gender = $_POST['Gender'];
            $sql = "UPDATE cast_and_crew
            SET Gender = '$Gender'
            WHERE SSN = '$SSN'";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo '<div id="message" style="display:block;">Entry Successful</div>';
            } else {
                echo '<div id="message" style="display:block;">Error</div>';
            }
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit5'])) {
        $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());
        if (isset($_POST['SSN']) && isset($_POST['Theater_ID'])) {
            $SSN = $_POST['SSN'];
            $Theater_ID = $_POST['Theater_ID'];

            $sql = "UPDATE cast_and_crew
            SET Theater_ID = '$Theater_ID'
            WHERE SSN = '$SSN'";
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

        $query = "SELECT * FROM cast_and_crew";
        $result = mysqli_query($conn, $query);
        echo "<div style='text-align: center;'>";
        echo "<table style='margin: 0 auto;'>";
        echo "<tr><th>SSN</th><th>Name</th><th>Working_Position</th><th>Show_ID</th><th>Gender</th><th>Theater_ID</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['SSN'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Working_Position'] . "</td>";
            echo "<td>" . $row['Show_ID'] . "</td>";
            echo "<td>" . $row['Gender'] . "</td>";
            echo "<td>" . $row['Theater_ID'] . "</td>";
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