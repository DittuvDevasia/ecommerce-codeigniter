<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
</head>
<body>
    <h1>Data</h1>
</html>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
           
        </tr>
        <?php foreach($result as $row): ?>
            <tr>
                <td><?php echo $row->name ?></td>
                <td><?php echo $row->email ?></td>
                
            </tr>
            <?php endforeach ?>

    </table>
</body>
</html>
