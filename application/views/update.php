<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  print_r($row); 
     ?>
    <form action="<?php echo base_url("Staff/update/$row->id"); ?>"  method="post">
    <input type="text" name="inputtitle" value="<?php echo $row->title ?>">
    <input type="text" name="inputdetail" value="<?php echo $row->detail ?>">
    <button type="submit">Update</button>
    <a href="<?php echo base_url("staff") ?>">Back</a>
    </form>
</body>
</html>