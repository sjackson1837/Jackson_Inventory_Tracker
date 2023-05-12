<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <tr>
            <th class="table-dark">Barcode</th>
            <th class="table-dark">Name</th>
            <th class="table-dark">Category</th>
            <th class="table-dark">Min Qty</th>
            <th class="table-dark">OH Qty</th>
        </tr>
    <?php
            $conn = pg_connect("host=localhost dbname=lexus user=postgres password=ert33MNB");
            if ($conn -> connect_error){
                die("Connection failed:" . $conn-> connect_error);
            }

            $sql = "Select barcode, name, category, minqty, ohqty from items";
            $result = pg_query($conn, $sql);

            if(pg_num_rows($result) > 0){
                while ($row = pg_fetch_assoc($result)){
                    echo "<tr><td>". $row["barcode"]. "</td><td>". $row["name"]. "</td><td>". $row["category"]. "</td><td>".
                    $row["minqty"]. "</td><td>". $row["ohqty"]. "</td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 results";
            }

            pg_close($conn);
        ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            
</body>
</html>
