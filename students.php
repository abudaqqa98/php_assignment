<?php

$students = [
    [
        "name" => "Ahmed",
        "grade" => 95,
        "age" => 20
    ],
    [
        "name" => "Sara",
        "grade" => 85,
        "age" => 19
    ],
    [
        "name" => "Omar",
        "grade" => 74,
        "age" => 21
    ],
    [
        "name" => "Lina",
        "grade" => 62,
        "age" => 18
    ],
    [
        "name" => "Khaled",
        "grade" => 45,
        "age" => 22
    ]
];
function calculateStatus($grade) {
    if ($grade >= 90) {
        return "ممتاز";
    } elseif ($grade >= 80) {
        return "جيد جدا";
    } elseif ($grade >= 70) {
        return "جيد";
    } elseif ($grade >= 60) {
        return "مقبول";
    } else {
        return "راسب";
    }
}
?>
<h2>Student Table</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Grade</th>
        <th>Age</th>
        <th>Status</th>
    </tr>
 <?php
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student["name"] . "</td>";
    echo "<td>" . $student["grade"] . "</td>";
    echo "<td>" . $student["age"] . "</td>";
   echo "<td>" . calculateStatus($student["grade"]) . "</td>";
echo "</tr>";
}
?>
</table>
<?php
$grades = array_column($students, 'grade');

$maxGrade = max($grades);
$minGrade = min($grades);
$avgGrade = array_sum($grades) / count($grades);

$passedCount = 0;

foreach ($students as $student) {
    if ($student['grade'] >= 60) {
        $passedCount++;
    }
}
?>

<h3>Statistics</h3>
<p>Highest Grade: <?php echo $maxGrade; ?></p>
<p>Lowest Grade: <?php echo $minGrade; ?></p>
<p>Average Grade: <?php echo round($avgGrade, 2); ?></p>
<p>Passed Students: <?php echo $passedCount; ?></p>