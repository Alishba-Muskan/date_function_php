<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellspacing="0">
        <?php for ($row = 1; $row <= 8; $row++): ?>
            <tr>
                <?php for ($column = 1; $column <= 8; $column++): ?>
                    <?php
                    $total = $row + $column;
                    if ($total % 2 == 0): ?>
                        <td width="30" height="30" bgcolor="white"></td>
                    <?php else: ?>
                        <td width="30" height="30" bgcolor="pink"></td>
                    <?php endif ?>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>
</body>

</html>