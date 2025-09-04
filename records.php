<?php
$students = ["Arun", "Meena", "Rahul", "Divya"];

echo "<h3>Student List</h3>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Record No</th><th>Name</th></tr>";

foreach ($students as $index => $name) {
    $recordNo = $index + 1; // index starts from 0, so add 1
    echo "<tr><td>$recordNo</td><td>$name</td></tr>";
}

echo "</table>";
?>
