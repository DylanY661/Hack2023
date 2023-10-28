<!DOCTYPE html>
<html>

<?php
/* if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = $_POST["locations"];
    $end = $_POST["locations2"];
    // Process the data or perform other actions
} */
echo "My first PHP script!"
?>

<head>
    <title>Passing PHP Values to JavaScript</title>
</head>
<body>
    <p>Welcome, <?php echo $start; ?>!</p>

    <script>
        // JavaScript code
        var user = "<?php echo $end; ?>";
        alert("Hello, " + user);
    </script>
</body>

</html>