<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <form action="php/add.php" method="POST">
        <h2>Create</h2><hr><br>

        <?php if(isset($_GET['err'])) { ?>
           <div class="alert alert-danger" role="alert">
                <?php echo $_GET['err'];?>
            </div> 
        <?php } ?>
        

        <div class="mb-3">
            <label for="full_name" class="form-label">Full name</label>
            <input type="text" class="form-control" 
                id="full-name" 
                name="full_name"
                placeholder="Enter full name"
                value="<?php if(isset ($_GET['full_name'])){
                        echo $_GET['full_name'];}?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Password</label>
            <input type="email" class="form-control" 
                id="email" 
                name="email"
                placeholder="Enter full name"
                value="<?php if(isset ($_GET['email'])){
                        echo $_GET['email'];}?>">
        </div>

        <button type="submit" class="btn btn-primary" name="save_user">Save user</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>