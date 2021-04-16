<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff List</title>
</head>

<body>
    <a href="<?php echo site_url("Staff/insertPage")?>">Insert</a> <br><br>
    <table border="1">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>Title</th>
            <th>Process</th>
        </thead>
        <tbody>
            <?php foreach($rows as $value) {  ?>
            <tr>
                <td><?php echo $value->id; ?></td>
                <td><?php echo $value->title; ?></td>
                <td><?php echo $value->detail; ?></td>
                <td>
                    <a href="<?php echo base_url("Staff/updatePage/$value->id")   ?>">Update</a>
                    <a href="<?php echo base_url("Staff/delete/$value->id")   ?>">Delete</a>
                    
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>