<?php

$subject1 = 70;
$subject2 = 76;
$subject3 = 90;
$subject4 = 78;
$subject5 = 80;

$obtainedmarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
$totalmarks = 500;
$percentage = ($obtainedmarks * 100) / $totalmarks;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($subject1 <= 50 || $subject2 <= 50 || $subject3 <= 50 || $subject4 <= 50 || $subject5 <= 50): ?>
        <h2>Result - you are fail in one or more subjects</h2>
        <h2>Obtained marks : <?php echo $obtainedmarks ?> out of : <?php echo $totalmarks ?> </h2>
        <h2>Percentage : <?php echo $percentage; ?>% </h2>
    <?php else : ?>
        <?php if ($percentage >= 80 && $percentage <= 100) : ?>
            <h2>Result - you acheive A+ Grade </h2>
        <?php elseif ($percentage >= 70 && $percentage < 80) : ?>
            <h2>Result - you acheive A Grade </h2>
        <?php elseif ($percentage >= 60 && $percentage < 70) : ?>
            <h2>Result - you acheive B Grade </h2>
        <?php elseif ($percentage >= 50 && $percentage < 60) : ?>
            <h2>Result - you acheive C Grade </h2>
        <?php endif ?>
        <h2>Obtained marks : <?php echo $obtainedmarks ?> out of : <?php echo $totalmarks ?> </h2>
        <h2>Percentage : <?php echo $percentage; ?>% </h2>
    <?php endif ?>





</body>

</html>