<?php include 'php/read.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filmy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <div class="wrapper">
        <h2>Filmy statistika</h2><hr><br>
        <?php if (isset($_GET['succ'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['succ']; ?>
            </div>
        <?php } elseif(isset($_GET['err'])){?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['err']; ?>    
        </div>
        <?php }?>

        <a href="view.php" class="btn btn-primary mb-3">Spat na view</a>
        <table class="table">
            <thead>
                <th scope="row">Počet filmov</th>
                <th scope="row">Počet Komédii</th>
                <th scope="row">Počet Fantasy</th>
                <th scope="row">Počet Sci-fi</th>
                <th scope="row">Počet Komiks</th>
                <th scope="row">Počet Detektívka</th>
                <th scope="row">Počet Dráma</th>
            </thead>
            <tbody>
                <?php
                    $pocet_filmov = 0;
                    $pocet_komedie = 0;   
                    $pocet_fantasy = 0;   
                    $pocet_scifi = 0;   
                    $pocet_komiks = 0;   
                    $pocet_detektivka = 0;
                    $pocet_drama = 0;
                    while($row = mysqli_fetch_assoc($result)){ 
                        $pocet_filmov +=1;
                        if ($row['žáner'] == 'Komedia') 
                            $pocet_komedie += 1;
                        elseif ($row['žáner'] == 'Fantasy')    
                            $pocet_fantasy += 1;
                        elseif ($row['žáner'] == 'Sci-fi')    
                            $pocet_scifi += 1;
                        elseif ($row['žáner'] == 'Komiks')    
                            $pocet_komiks += 1;
                        elseif ($row['žáner'] == 'Detektivka')    
                            $pocet_detektivka += 1;
                        elseif ($row['žáner'] == 'Drama')    
                            $pocet_drama += 1;
                     } ?>
                    <tr>
                        <td><?php echo $pocet_filmov; ?></td>
                        <td><?php echo $pocet_komedie; ?></td>
                        <td><?php echo $pocet_fantasy; ?></td>
                        <td><?php echo $pocet_scifi; ?></td>
                        <td><?php echo $pocet_komiks; ?></td>
                        <td><?php echo $pocet_detektivka; ?></td>
                        <td><?php echo $pocet_drama; ?></td>
                    </tr>
            </tbody>
        </table>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>