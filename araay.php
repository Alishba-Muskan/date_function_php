<?php


// $fruits = ['apple', 'mango', 'pineapple', 'orange'];

// foreach($fruits as $data){
//      echo $data.'<br>';
// }


$students = [
    ['Muskan', 'Muskan@gmail.com', 20],
    ['Abeerah', 'Abeerah@gmail.com', 20],
    ['Neha', 'Neha@gmail.com', 20],
    ['Raima', 'Raima@gmail.com', 20]
];


// foreach ($students as $data) {
//     foreach ($data as $final) {
//         echo $final . ' ';
//     } 
//     echo '<br>';
// }


// $name = [
//     'name' => 'Muskan',
//     'Email' => 'Muskan@gmail.com',
//     'postal code' => 78968,
//     'Age' => 20 
// ];



// foreach($name as $key => $value){
//     echo ''. $key . ':  '. $value . '<br>';
// }

$employee = [
    [
        'name' => 'Muskan',
        'email'=> 'Muskan@gmail.com',
        'Age' => 20,
        'Postal code' => 7659
    ],
    [
        'name' => 'Abeerah',
        'email'=> 'Abeerah@gmail.com',
        'Age' => 20,
        'Postal code' => 7659
    ],
    [
        'name' => 'Neha',
        'email'=> 'Neha@gmail.com',
        'Age' => 20,
        'Postal code' => 7659
    ],
    [
        'name' => 'Raima',
        'email'=> 'Raima@gmail.com',
        'Age' => 20,
        'Postal code' => 7659
    ]
    ];



//     foreach($employee as $data){
//         foreach($data as $key => $value){
//             echo ''. $key .':   '. $value .'<br>';
//     } 
//     echo '<br>';
// }





?>








<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <table border="1" cellspacing = '0' width = '100%'>
        <thead bgcolor= 'yellow'>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // foreach($students as $data){
            //     echo '<tr>';
            //     echo '<td>'. $data[0] . '</td>';
            //     echo '<td>'. $data[1] . '</td>';
            //     echo '<td>'. $data[2] . '</td>';
            //     echo '</tr>';
            // }
            ?>

<?php //foreach($students as $student){ ?>


    <tr>
        <td><?php //echo $student[0]; ?></td>
        <td><?php //echo $student[1]; ?></td>
        <td><?php //echo $student[2]; ?></td>
    </tr>

    <?php //}?>

        </tbody>
    </table>
</body>
</html> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <table width="100%" border="1" cellspacing="0">
        <thead bgcolor="pink">
            <?php foreach($employee as $data){ ?>
                
                <tr>
                <?php foreach($data as $key => $value){?>
                    <th><?php echo $key;?></th>
                <?php }  ?>
            </tr>
           <?php break; }?>
        </thead>
        <tbody>
            <?php foreach($employee as $row){ ?>
                <tr>
                    <th><?php echo $row['name'] ?></th>
                    <th><?php echo $row['email'] ?></th>
                    <th><?php echo $row['Age'] ?></th>
                    <th><?php echo $row['Postal code'] ?></th>
                </tr>


                <?php } ?>
        </tbody>
    </table>
</body>
</html>


