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
        <h2>Filmy</h2><hr><br>
        <?php if (isset($_GET['succ'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['succ']; ?>
            </div>
        <?php } elseif(isset($_GET['err'])){?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['err']; ?>    
        </div>
        <?php }?>

        <form action="filter.php" method="GET">
            <button type="submit" class="btn btn-primary" name="filter_html">Filtrovat</button>
                    <label for="filter_krajina" class="form-label">Filter krajina</label>
                    <input type="text" class="form-control" id="krajina_filtrovanie" name="krajina_filtrovanie" value="">
         </form> 
         <form action="filter.php" method="GET">
            <button type="submit" class="btn btn-primary" name="filter_html">Filtrovat</button>
                    <label for="filter_zaner" class="form-label">Filter žáner</label>
                    <input type="text" class="form-control" id="zaner_filtrovanie" name="zaner_filtrovanie" value="">
         </form> 
         <form action="filter.php" method="GET">
            <button type="submit" class="btn btn-primary" name="filter_html">Filtrovat</button>
                    <label for="filter_zaner" class="form-label">Filter žáner</label>
                    <input type="text" class="form-control" id="dlzka_filtrovanie" name="dlzka_filtrovanie" value="">
         </form> 
        <a href="index.php" class="btn btn-primary mb-3">Pridaj film</a>
        <a href="statistics.php" class="btn btn-primary mb-3">Statistika filmov</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Názov filmu</th>
                <th scope="col">Žáner</th>
                <th scope="col">Dĺžka</th>
                <th scope="col">Krajina</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <th scope="row"><?php echo $row['id_film']; ?></th>
                            <td><?php echo $row['názov_filmu']; ?></td>
                            <td><?php echo $row['žáner']; ?></td>
                            <td><?php echo $row['dĺžka']; ?></td>
                            <td><?php echo $row['krajina']; ?></td>
                            <td>
                                <a href="info.php?id=<?php echo $row['id_film']; ?>" class="btn btn-info btn-sm">Info</a>
                                <a href="update.php?id=<?php echo $row['id_film']; ?>" class="btn btn-warning btn-sm">Upraviť</a>
                                <a href="php/delete.php?id=<?php echo $row['id_film']; ?>" class="btn btn-danger btn-sm">Odstrániť</a>
                            </td>
                        </tr>
                    <?php } ?>
            </tbody>
      <!--      <div class="btn btn-primary mb-3">
                 <select name="filter_html" id="filter_html" size="1" onchange="window.location.href=this.value">
                    <option value ="">Krajina</option>
                    <option value ="filter.php?filter_html=USA">USA</option>
                    <option value ="filter.php?filter_html=Francuzsko">Francuzsko</option>
                    <option value ="filter.php?filter_html=Taliansko">Taliansko</option>
                </select>
            </div> 
            <a href="filter.php?filter_html=USA" class="btn btn-primary mb-3">Filter USA</a>
            <a href="filter.php?filter_html=Francuzsko" class="btn btn-primary mb-3">Filter Francuzsko</a>       
            <a href="filter.php?filter_html=Taliansko" class="btn btn-primary mb-3">Filter Taliansko</a>       -->
            

        </table>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>