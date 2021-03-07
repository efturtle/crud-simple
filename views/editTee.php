<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Edit</title>
</head>
<body>
<?php require 'navbar.php'; ?>
    <!-- content -->
    <div class="ps-3">
        <form action="../controllers/edit.php" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo $_POST['id']?>">
            <!-- name -->
            <label for="name"> Tee name </label>
            <input type="text" name="name" id="name"  value="<?php echo $_POST['name'] ?>">

            <!-- flavor -->
            <label for="flavor" > Tee flavor </label>
            <input type="text" name="flavor" id="flavor"  value="<?php echo $_POST['flavor'] ?>">

            <!-- Grade -->
            <label for="grade"> Tee grade</label>
            <input type="number" name="grade" id="grade"  value="<?php echo $_POST['grade'] ?>">
            <br>
            <button> Submit </button>
        </form>
    </div>
</body>
</html>