<?php include 'php/update_user.php';?>
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
     <form action="php/update_user.php" method="POST">
        <h2>Info</h2><hr><br>       

        <div class="mb-3">
            <label for="meno_filmu" class="form-label">Názov filmu</label>
            <input type="text" class="form-control" 
                id="meno_filmu" 
                name="meno_filmu"
                value="<?php echo $row['názov_filmu']; ?>"
                disabled>
        </div>

        <div class="mb-3">
            <label for="zaner" class="form-label">Žaner</label>
            <input type="text" class="form-control" 
                id="zaner" 
                name="zaner"
                value="<?php echo $row['žáner']; ?>"
                disabled>
        </div>
        
        
        <div class="mb-3">
            <label for="dlzka" class="form-label">Dĺžka</label>
            <input type="numbers" class="form-control" 
                id="dlzka" 
                name="dlzka"
                value="<?php echo $row['dĺžka']; ?>"
                disabled>
        </div>
        
        
        <div class="mb-3">
            <label for="krajina" class="form-label">Krajina</label>
            <input type="text" class="form-control" 
                id="krajina" 
                name="krajina"
                value="<?php echo $row['krajina']; ?>"
                disabled>
        </div><br>

        <a href="view.php" class="btn btn-primary">Späť</a>
        
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>