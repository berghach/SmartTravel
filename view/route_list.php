<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>Route list</title>
</head>
<body>
<h2 class=" text-secondary">Route list</h2>
        <table>
            <thead>
                <tr>
                    <th>Start city</th>
                    <th>Arrival city</th>
                    <th>Distance</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($R as $row) {

                        echo "<tr>
                            <td>".$row->getStartCity()."</td>
                            <td>".$row->getArrivalCity()."</td>
                            <td>".$row->getDistance()."</td>
                            <td>".$row->getDuration()."</td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>