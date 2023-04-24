<?php
$conn = mysqli_connect('localhost', 'cop4710ProjectAdmin', '@Database', 'broadwayshows') or die("Connection Failed:" . mysqli_connect_error());

$sql = "SELECT shows.Show_ID, shows.Names FROM shows";
$result = mysqli_query($conn, $sql);
$selectedShowID = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selectedShowID = $_POST['show_id'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Selection</title>
</head>
<body>
    <h1>Show Selection</h1>
    <form method="post">
        <label for="showSelect">Select a Show:</label>
        <select id="showSelect" name="show_id">
            <option value="">-- Select a Show --</option>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $showID = $row['Show_ID'];
                $showName = $row['Name'];
                $selected = ($showID == $selectedShowID) ? 'selected' : '';
                echo "<option value='$showID' $selected>$showName</option>";
            }
            ?>
        </select>
        <button type="submit">Submit</button>
    </form>
    <p>Selected Show ID: <?php echo $selectedShowID; ?></p>
</body>
</html>