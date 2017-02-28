<?php
$fileData = file_get_contents(__DIR__.'/data.json');
$data = json_decode($fileData ,true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список анкет</title>
    <style>

    </style>
</head>
<body>
<table border="1">
    <thead>
    <tr>
    <th>Имя</th>
        <th>Фамилия</th>
        <th>Адрес</th>
        <th>Номер</th>
    </tr>
    </thead>
    <tbody>
     <?php foreach($data as $item){ ?>
    <tr>
        <td><?php echo $item['firstName'] ?></td>
        <td><?php echo $item['lastName'] ?></td>
        <td><?php echo $item['address'] ?></td>
        <td><?php echo $item['phoneNumber'] ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>