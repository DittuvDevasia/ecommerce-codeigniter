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
            <th>title</th>
            <th>description</th>
            <th>image</th>
            <th>action</th>
            </tr>
            <?php foreach($categorys as $category){ ?>
            <tr>
                <td><?= $category->id  ?></td>
                <td><?= $category->title  ?></td>
                <td><?= $category->description  ?></td>
                <td><?= $category->image  ?></td>
                <td>
                <a onclick="return confirm('Are you sure to delete category?')" href="<?php echo site_url('admin/deletec/'.$category->id); ?>" class="btn btn-xs btn-danger">Delete</a>
            </td>
            </tr>
            <?php } ?>
        </table>
        <button><a href="<?= base_url('index.php/admin/admin_panel') ?>">Back</a></button>
        </div>
</center>
    </body>
</html>