<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input string from form
    $input = $_POST['numbers'];

    // Convert comma-separated string into an array
    $numbers = array_map('trim', explode(",", $input));

    // Display stored numbers
    echo "<h3>You entered these numbers:</h3>";
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Number Input</title>
</head>
<body>
    <h2>Enter a sequence of numbers (comma separated):</h2>
    <form method="post">
        <input type="text" name="numbers" placeholder="e.g., 10, 20, 30, 40" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
