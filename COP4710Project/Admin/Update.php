<!DOCTYPE html>
<html>
<head>
    <title>COP4710Project</title>
    <style>
        .container {
            height: 100vh; 
            display: flex; 
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            color: #1d3c45;
            text-align: center; 
        }
        button {
            color: #d2601a;
            border-radius: 5%;
            margin-top: 10px; 
            margin-bottom: 30px; 
            padding: 15px 30px; 
            font-size: 18px; 
            width: 400px; 
        }
    </style>
</head>
<body bgcolor="fff1e1">
    <h1>Broadway Shows Database</h1>
    <div class="container">
        <button onclick="redirect('Update/UpdateShows.php')">Update Show</button>
        <button onclick="redirect('Update/UpdateTheater.php')">Update Theater</button>
        <button onclick="redirect('Update/UpdateTicket_Sale.php')">Update Ticket</button>
        <button onclick="redirect('Update/UpdateCast_and_Crew.php')">Update Cast/Crew</button>
        <button onclick="redirect('../admin.php')">Return to Admin</button>
    </div>

    <script>
        function redirect(url) {
                window.location.href = url;
            }
    </script>
</body>
</html>