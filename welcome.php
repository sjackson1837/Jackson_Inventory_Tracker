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
        echo "Hello<br>\n";
        echo "Date is: " . date('j-m-y, h:i:s');
        echo "<br>\n";
        echo "<br>\n";
        phpinfo();
        echo "<br>\n";
        echo "<br>\n";
        
        $conn = pg_connect("host=dpg-chb67f2k728tp9c87hsg-a.oregon-postgres.render.com port=5432 dbname=items user=jackson_inventory_user password=ert33MNB");
        
    ?>
</body>
</html>