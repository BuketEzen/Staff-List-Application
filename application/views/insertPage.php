<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url("Staff/insert"); ?>"  method="post">
    <input type="text" name="inputtitle" placeholder="enter title">
    <input type="text" name="inputdetail" placeholder="enter detail">
    <button type="submit">Insert</button>
    <a href="<?php echo base_url("staff") ?>">Back</a>
    </form>
</body>
</html>