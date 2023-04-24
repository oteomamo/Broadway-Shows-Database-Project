<!DOCTYPE html>
<html>

<head>
    <title>PHP Container Example</title>
    <style>

        .container22 {
            display: flex;
            flex-wrap: wrap;
        }

        .container11 {
            width: 100%;
            text-align: left;
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
            max-height: 420px;
            align-items: center;
            border-color: #f2f2ff;
            border: 5px;
            border: solid 5px #f2f2ff; /* Add right border */
        }

        .container13 {
            justify-content: center;
            max-height: 420px;
            padding-top: 100px;
            padding-bottom: 100px;
            width: 49%;
            text-align: center;
            border-color: #f2f2ff;
            border: 5px;
            border: solid 5px #f2f2ff; /* Add left border */
        }  
        .container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .container13::-webkit-scrollbar {
            width: 2em;
            height: 20px;
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
            background: hsl(194 76% 42% /1);}

        .container1 {
            justify-content: flex-start;
            max-height: 300px; 
            overflow: hidden; 
        }

        img {
            max-width: 300px; 
            max-height: 250px; 
            height: auto; 
            padding: 25px;
        }

        .container2 {
            justify-content: center;
        }
        .container3 {
            justify-content: center;
        }

        .container p {
            margin: 0;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .form-container input {
            margin-bottom: 10px;
        }

        .form-container button {
            padding: 10px 20px;
        }
    </style>
</head>

<body>
<div class="container22">

    <?php
    // Example data for the containers
    $container1Text1 = "Funny Girl";
    $container1Text2 = "Welcome to musical comedy heaven! Featuring one of the most iconic scores of all time by Jule Styne and Bob Merrill, a revised book from Harvey Fierstein based on the original classic by Isobel Lennart, tap choreography by Ayodele Casel, choreography by Ellenore Scott, and direction from Michael Mayer, this love letter to the theatre has the whole shebang! The sensational cast, starring Drama Desk Award® nominee Lea Michele as Fanny Brice, Tony Award® nominee Ramin Karimloo, Jeff Award winner Jared Grimes, and Tony Award nominee Tovah Feldshuh, dazzles with the songs “Don’t Rain On My Parade,” “I’m the Greatest Star,” and “People.” This bittersweet comedy is the story of the indomitable Fanny Brice, a girl from the Lower East Side who dreamed of a life on the stage. Everyone told her she’d never be a star, but then something funny happened—she became one of the most beloved performers in history, shining brighter than the brightest lights of Broadway. ";
    ?>

    
        
<div class="container11" style="display: flex; align-items: center;">
    <img src="/COP4710Project/IMGDatabase/Funny_Girl.jpg" alt="Example Image" style="flex: 0 0 auto; margin-right: 10px;">
    <div style="flex: 1;">
        <p><?php echo $container1Text1; ?></p>
        <p><?php echo $container1Text2; ?></p>
    </div>
</div>
<div class="container12">      
    <div class="form-container">
        <h2>Search Tickets</h2>
        <form method="post" action="simpleFunction4.php">
            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date" required>
            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date" required>
            <button type="submit" name="submit">Show Avaliable Dates</button>
        </form>
    </div>


    
        <div class="form-container">
                <h2>Buy Ticket</h2>
                <form method="post">
                    <label for="select_date">Date:</label>
                    <input type="date" id="select_date" name="select_date" required>
                    <label for="ticket_nr">Number of Tickets:</label>
                    <input type="int" id="ticket_nr" name="ticket_nr" required>
                    <button type="submit" name="update_tickets">Buy Tickets</button>
                </form>

        <?php
            if (isset($_POST['update_tickets'])) {
                $ticketsDate = $_POST['select_date'];
                $ticketsCount = $_POST['ticket_nr'];
                $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());
                $query = "UPDATE ticket_sale SET Number_of_Tickets = Number_of_Tickets - '$ticketsCount' WHERE Date = '$ticketsDate' AND Theater_ID = 704;";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    echo "<p>Successfully updated number of tickets.</p>";
                } else {
                    echo "<p>Error updating number of tickets.</p>";
                }
                mysqli_close($conn);
            }
            

        ?>

        </div>
</div>
<div class="container13" style="overflow-y: auto;">
      <?php

        if (isset($_POST['submit'])) {
            $startDate = $_POST['start_date'];
            $endDate = $_POST['end_date'];

            // Connect to MySQL database
            $conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());

            $query = "SELECT DISTINCT theater.Name, ticket_sale.Ticket_Sale_ID, ticket_sale.Date, ticket_sale.Time, ticket_sale.Price, ticket_sale.Number_of_Tickets
            FROM shows
            INNER JOIN cast_and_crew ON shows.Show_ID = cast_and_crew.Show_ID
            INNER JOIN theater ON cast_and_crew.Theater_ID = theater.Theater_ID
            INNER JOIN ticket_sale ON theater.Theater_ID = ticket_sale.Theater_ID
            WHERE shows.Show_ID = 504 AND ticket_sale.Date BETWEEN '$startDate' AND '$endDate';";
            $result = mysqli_query($conn, $query);

            echo "<div style='text-align: center;'>";
            echo "<table style='margin: 0 auto; border-collapse: collapse; border: 1px solid white;'>";
            echo "<tr style='background-color: hsl(194, 76%, 52%, 1);'><th style='border: 1px solid white; padding: 5px;'>Theater Name</th><th style='border: 1px solid white; padding: 5px;'>Ticket Sale ID</th><th style='border: 1px solid white; padding: 5px;'>Date</th><th style='border: 1px solid white; padding: 5px;'>Time</th><th style='border: 1px solid white; padding: 5px;'>Price</th><th style='border: 1px solid white; padding: 5px;'>Number of Tickets</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Name'] . "</td>";
                echo "<td style='background-color: hsl(194, 76%, 92%, 1); border: 1px solid white; padding: 5px;'>" . $row['Ticket_Sale_ID'] . "</td>";
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
