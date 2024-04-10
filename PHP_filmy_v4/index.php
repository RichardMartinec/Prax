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
    <form action="php/add.php" method="POST">
        <h2>Zadaj</h2><hr><br>

        <?php if(isset($_GET['err'])) { ?>
           <div class="alert alert-danger" role="alert">
                <?php echo $_GET['err'];?>
            </div> 
        <?php } ?>


        <a href="view.php" class="btn btn-primary mb-3">Spat na view</a>
        
        <div class="mb-3">
            <label for="full_name" class="form-label">Meno filmu</label>
            <input type="text" class="form-control" 
                id="meno-filmu" 
                name="meno_filmu"
                placeholder="Zadaj meno filmu"
                value="<?php if(isset ($_GET['meno_filmu'])){
                        echo $_GET['meno_filmu'];}?>">
        </div>

        <div class="mb-3">
            <label for="zaner" class="form-label">Žaner</label>
            <input type="text" class="form-control" 
                id="zaner" 
                name="zaner"
                placeholder="Zadaj žáner"
                value="<?php if(isset ($_GET['zaner'])){
                        echo $_GET['zaner'];}?>">
        </div>

        <div class="mb-3">
            <label for="dlzka" class="form-label">Dĺžka</label>
            <input type="numbers" class="form-control" 
                id="dlzka" 
                name="dlzka"
                placeholder="Zadaj dĺžku"
                value="<?php if(isset ($_GET['dlzka'])){
                        echo $_GET['dlzka'];}?>">
        </div>

        <div class="mb-3">
            <label for="krajina" class="form-label">Krajina</label>
            <input type="text" class="form-control" 
                id="krajina" 
                name="krajina"
                placeholder="Zadaj krajinu"
                value="<?php if(isset ($_GET['zaner'])){
                        echo $_GET['krajina'];}?>">
        </div>

        <button type="submit" class="btn btn-primary" name="save_film">Ulož</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>