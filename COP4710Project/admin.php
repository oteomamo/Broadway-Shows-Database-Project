<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
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
    <div class="container">
    
        <button onclick="redirect('./Admin/Add.php')">Add New Attributes Separately</button>
 
        <button onclick="redirect('./Admin/Remove.php')">Remove Existing Attributes Separately</button>

        <button onclick="redirect('./Admin/Update.php')">Update Existing Attributes Separately</button>

        <button onclick="redirect('./Admin/Search.php')">Search by Attribute</button>

        <button onclick="redirectToParentIndex()">Go to Start Page</button>
        <script>
            function redirectToParentIndex() {
                window.location.href = '../Index.php';
            }
        </script>
    </div>





    <script>
        function redirect(url) {
                window.location.href = url;
            }
    </script>
</body>

</html>