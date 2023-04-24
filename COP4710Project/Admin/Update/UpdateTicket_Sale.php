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
    <div><h2> Ticket Sale Table </h2></div>


    


	<div><h2> Update All </h2></div>
	<body bgcolor=white>
    <div class="container container1">
	<form  method="POST" action='UpdateTicket_Sale.php'>
		<label for= "Ticket_Sale_ID">Ticket Sale ID:</label>
		<input type="int" name="Ticket_Sale_ID" id="Ticket_Sale_ID" required/>

		<label for= "Time">Time:</label>
		<input type="time" name="Time" id="Time" required/><br><br>

		<label for= "Date">Date:</label>
		<input type="date" name="Date" id="Date" required/>
        <div class="space"></div><div class="space"></div>
		<label for= "Number_of_Tickets">Number of Tickets:</label>
		<input type="int" name="Number_of_Tickets" id="Number_of_Tickets" required/><br><br>

        <label for= "Price">Price:</label>
		<input type="int" name="Price" id="Price" required/>
        <div class="space"></div><div class="space"></div>    
		<label for= "Theater_ID">Theater ID:</label>
		<input type="int" name="Theater_ID" id="Theater_ID" required/><br><br>

		<input type="submit" name="submit" id="submit" />
        <div class="space"></div><div class="space"></div>
        
        <div class="space1"></div>

	</form>

    
	</div>

    <div><h2> Update Time </h2></div>
    <div class="container container2">
	<form  method="POST" action='UpdateTicket_Sale.php'>
		<label for= "Ticket_Sale_ID">Ticket Sale ID:</label>
		<input type="int" name="Ticket_Sale_ID" id="Ticket_Sale_ID" required/>
        <div class="space"></div>
		<label for= "Time">Time:</label>
		<input type="time" name="Time" id="Time" required/>
        <div class="space"></div>
		<input type="submit" name="submit1" id="submit1" />

	</form>  
	</div>
	


    <div><h2> Update Date </h2></div>
    <div class="container container3">
	<form  method="POST" action='UpdateTicket_Sale.php'>
		<label for= "Ticket_Sale_ID">Ticket Sale ID:</label>
		<input type="int" name="Ticket_Sale_ID" id="Ticket_Sale_ID" required/>
        <div class="space"></div>
		<label for= "Date">Date:</label>
		<input type="date" name="Date" id="Date" required/> 
        <div class="space"></div>  
		<input type="submit" name="submit2" id="submit2" />
        <div class="space"></div><div class="space"></div>

	</form>
	</div>

    <div><h2> Update Number of Tickets </h2></div>
    <div class="container container4">
	<form  method="POST" action='UpdateTicket_Sale.php'>
		<label for= "Ticket_Sale_ID">Ticket Sale ID:</label>
		<input type="int" name="Ticket_Sale_ID" id="Ticket_Sale_ID" required/>
        <div class="space"></div>  
		<label for= "Number_of_Tickets">Number of Tickets:</label>
		<input type="int" name="Number_of_Tickets" id="Number_of_Tickets" required/>
        <div class="space"></div>  
		<input type="submit" name="submit3" id="submit3" />
        <div class="space"></div><div class="space"></div>

	</form>
    </div>

    <div><h2> Update Price </h2></div>
    <div class="container container4">
	<form  method="POST" action='UpdateTicket_Sale.php'>
		<label for= "Ticket_Sale_ID">Ticket Sale ID:</label>
		<input type="int" name="Ticket_Sale_ID" id="Ticket_Sale_ID" required/>
        <div class="space"></div>  
		<label for= "Price">Price:</label>
		<input type="int" name="Price" id="Price" required/>
        <div class="space"></div>  
		<input type="submit" name="submit4" id="submit4" />
        <div class="space"></div><div class="space"></div>

	</form>
    </div>

    <div><h2> Update Theater_ID </h2></div>
    <div class="container container4">
	<form  method="POST" action='UpdateTicket_Sale.php'>
		<label for= "Ticket_Sale_ID">Ticket Sale ID:</label>
		<input type="int" name="Ticket_Sale_ID" id="Ticket_Sale_ID" required/>
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


    <form method="POST" action='UpdateTicket_Sale.php'> 
        <input type="submit" name="show_table" id="show_table" value="Show/Reload Table" />
        </form>
        <button onclick="redirectToParentIndex()">Go to Index</button>


	<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());
        if (isset($_POST['Ticket_Sale_ID']) && isset($_POST['Time']) && isset($_POST['Date']) && isset($_POST['Number_of_Tickets']) && isset($_POST['Price']) && isset($_POST['Theater_ID'])) {
            $Ticket_Sale_ID = $_POST['Ticket_Sale_ID'];
            $Time = $_POST['Time'];
            $Date = $_POST['Date'];
            $Number_of_Tickets = $_POST['Number_of_Tickets'];
            $Price = $_POST['Price'];
            $Theater_ID = $_POST['Theater_ID'];

            $sql = "UPDATE ticket_sale
            SET Time = '$Time',
                Date = '$Date',
                Number_of_Tickets = '$Number_of_Tickets',
                Price = '$Price',
                Theater_ID = '$Theater_ID'
            WHERE Ticket_Sale_ID = '$Ticket_Sale_ID'";
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
        if (isset($_POST['Ticket_Sale_ID']) && isset($_POST['Time']) ) {
            $Ticket_Sale_ID = $_POST['Ticket_Sale_ID'];
            $Time = $_POST['Time'];

            $sql = "UPDATE ticket_sale
            SET Time = '$Time'
            WHERE Ticket_Sale_ID = '$Ticket_Sale_ID'";
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
        if (isset($_POST['Ticket_Sale_ID'])  && isset($_POST['Date'])) {
            $Ticket_Sale_ID = $_POST['Ticket_Sale_ID'];
            $Date = $_POST['Date'];

            $sql = "UPDATE ticket_sale
            SET Date = '$Date'
            WHERE Ticket_Sale_ID = '$Ticket_Sale_ID'";
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
        if (isset($_POST['Ticket_Sale_ID']) && isset($_POST['Number_of_Tickets'])) {
            $Ticket_Sale_ID = $_POST['Ticket_Sale_ID'];
            $Number_of_Tickets = $_POST['Number_of_Tickets'];

            $sql = "UPDATE ticket_sale
            SET Number_of_Tickets = '$Number_of_Tickets'
            WHERE Ticket_Sale_ID = '$Ticket_Sale_ID'";
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
        if (isset($_POST['Ticket_Sale_ID']) && isset($_POST['Price']) ) {
            $Ticket_Sale_ID = $_POST['Ticket_Sale_ID'];
            $Price = $_POST['Price'];
            $sql = "UPDATE ticket_sale
            SET Price = '$Price'
            WHERE Ticket_Sale_ID = '$Ticket_Sale_ID'";
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
        if (isset($_POST['Ticket_Sale_ID']) && isset($_POST['Theater_ID'])) {
            $Ticket_Sale_ID = $_POST['Ticket_Sale_ID'];
            $Theater_ID = $_POST['Theater_ID'];

            $sql = "UPDATE ticket_sale
            SET Theater_ID = '$Theater_ID'
            WHERE Ticket_Sale_ID = '$Ticket_Sale_ID'";
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

        $query = "SELECT * FROM ticket_sale";
        $result = mysqli_query($conn, $query);
        echo "<div style='text-align: center;'>";
        echo "<table style='margin: 0 auto;'>";
        echo "<tr><th>Ticket_Sale_ID</th><th>Time</th><th>Date</th><th>Number_of_Tickets</th><th>Price</th><th>Theater_ID</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['Ticket_Sale_ID'] . "</td>";
            echo "<td>" . $row['Time'] . "</td>";
            echo "<td>" . $row['Date'] . "</td>";
            echo "<td>" . $row['Number_of_Tickets'] . "</td>";
            echo "<td>" . $row['Price'] . "</td>";
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