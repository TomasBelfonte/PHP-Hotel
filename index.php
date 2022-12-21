<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 3,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

$filteredData=[];

    $park = $_GET["parcheggio"] ?? '';
    $rating = isset($_GET["voto"]) ? $_GET["voto"] :'';
    $hasfilters = !empty($park) || !empty($rating);

if ($hasfilters) {

} else {

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>PHP-HOTEL</title>
</head>
<body>
    <div class="d-flex justify-content-center my-5">
        <h1 class="text-primary">PHP HOTEL</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-6" >
            <form action="" method="GET">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="parcheggio" >
                        <label class="form-check-label" for="flexCheckDefault">
                            Alberghi con parcheggio
                        </label>
                </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="voto" >
                        <label class="form-check-label" for="flexCheckDefault">
                            Alberghi con votazione almeno di 3 su 5. 
                        </label>
                </div>
                <button class="btn btn-primary my-3">Esegui</button>
            </form>
        </div>
    </div>
    <h1></h1>
    <table class="table">
        <thead>
            <tr>
                <th >Nome Hotel</th>
                <th >Descrizione Hotel</th>
                <th>Parcheggio</th>
                <th>Voto</th>
                <th>Distanza dal Centro</th>                
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ( $hotels as $hotel) {
                echo "<tr>";
                echo "<td>{$hotel['name']}</td>";
                echo "<td>{$hotel['description']}</td>";
                echo "<td>{$hotel['parking']}</td>";
                echo "<td>{$hotel['vote']}</td>";
                echo "<td>{$hotel['distance_to_center']}</td>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>