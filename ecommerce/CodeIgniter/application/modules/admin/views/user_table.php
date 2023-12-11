<html>
    <head><title>admin product table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
    .container{
      padding-left: 10px;
      padding-right: 10px;
      border-radius: 5px;
      text-decoration: none;
      padding-top: 50px;
    }
    </style>
    </head>
    <body>
        <center>
        <div class="container">
        <table class="table" border="1">
            <tr>
            <th>id</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>city</th>
            </tr>
            <?php foreach($users as $user){ ?>
            <tr>
                <td><?= $user->id  ?></td>
                <td><?= $user->username  ?></td>
                <td><?= $user->email  ?></td>
                <td><?= $user->password  ?></td>
                <td><?= $user->city  ?></td>
              
            </tr>
            <?php } ?>
        </table>
        <button><a href="<?= base_url('index.php/admin/admin_panel') ?>">Back</a></button>
        </div>
</center>
    </body>
</html>