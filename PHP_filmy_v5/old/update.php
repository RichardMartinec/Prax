<?php include 'php/update_user.php';?>
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
    <form action="php/update_user.php" method="POST">
        <h2>Update user</h2><hr><br>       

        <div class="mb-3">
            <label for="full_name" class="form-label">Full name</label>
            <input type="text" class="form-control" 
                id="full_name" 
                name="full_name"
                value="<?php echo $row['full_name_db']; ?>"
            >
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Password</label>
            <input type="email" class="form-control" 
                id="email" 
                name="email"
                value="<?php echo $row['email_db']; ?>"
            >
        </div><br>
        <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>"><br>

        <button type="submit" class="btn btn-primary" name="update_uzivatel">Update user</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>