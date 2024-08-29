<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abstract Methods</title>
</head>
<body>
    <?php
    require 'Cylinder.php';
    require'Sphere.php';

    $cylinder = new Cylinder(['radius' => 500, 'height'=> 10 ]);
    $cylinderVoume = $cylinder->volume();
    print_r( $cylinderVoume );

    $sphere = new Sphere(['radius' => 5] );
    $sphereVoume = $sphere->volume();
    print_r( '</br>'. $sphereVoume );
    
    
    
    ?>
</body>
</html>