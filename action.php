<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = $_POST["locations"];
    $end = $_POST["locations2"];
    // Process the data or perform other actions
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Passing PHP Values to JavaScript</title>
</head>
<body>
    <p>Welcome, <?php echo $username; ?>!</p>

    <script>
        // JavaScript code
        var user = "<?php echo $username; ?>";
        alert("Hello, " + user);
    </script>
</body>
</html>