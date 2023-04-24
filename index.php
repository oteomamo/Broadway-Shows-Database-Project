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
            flex-direction: row;
        }

        h1 {
            color: #1d3c45;
            text-align: center;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
        }

        .button-container img {
            width: 300px;
            height: 300px;
            margin-bottom: 100px;
            border: 2px solid #ffffff;
            cursor: pointer;
        }

        .button-container + .button-container {
            margin-left: 100px;
        }

        button {
            color: #d2601a;
            border-radius: 5%;
            padding: 15px 30px;
            font-size: 18px;
            width: 300px;
            margin-top: -100px;
        }
    </style>
</head>

<body bgcolor="fff1e1">
    <h1>Broadway Shows Database</h1>
    <div class="container">
        <div class="button-container">
            <a href="/COP4710Project/admin.php">
                <img src="COP4710Project/IMGDatabase/adminIMG.jpg" alt="Image 1">
            </a>
            <button onclick="redirect('COP4710Project/admin.php')">Admin Interface</button>
        </div>
        <div class="button-container">
            <a href="COP4710Project/user.php">
                <img src="/COP4710Project/IMGDatabase/UserIMG.jpg" alt="Image 2">
            </a>
            <button onclick="redirect('COP4710Project/user.php')">User Interface</button>
        </div>
    </div>

    <script>
        function redirect(url) {
            window.location.href = url;
        }
    </script>
</body>

</html>
