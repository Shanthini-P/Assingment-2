<?php
// Step 1: Create an array of students with their scores
$students = [
    ["name" => "Alice", "scores" => [85, 78, 92]],
    ["name" => "Bob", "scores" => [65, 70, 58]],
    ["name" => "Charlie", "scores" => [90, 88, 95]],
];

// Step 2: Function to calculate grade
function calculateGrade($average) {
    if ($average >= 90) return "A";
    elseif ($average >= 75) return "B";
    elseif ($average >= 50) return "C";
    else return "F";
}

// Step 3: Process each student
foreach ($students as &$student) {
    $total = array_sum($student["scores"]);     // Sum of scores
    $count = count($student["scores"]);        // Number of subjects
    $average = $total / $count;                // Average score
    $student["grade"] = calculateGrade($average); // Assign grade
    $student["average"] = $average;            // Store average
}
unset($student); // break reference

// Step 4: Generate summary report
echo "<h2>Student Grade Report</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Name</th><th>Scores</th><th>Average</th><th>Grade</th></tr>";

foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student["name"] . "</td>";
    echo "<td>" . implode(", ", $student["scores"]) . "</td>"; // join scores
    echo "<td>" . number_format($student["average"], 2) . "</td>";
    echo "<td>" . $student["grade"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
