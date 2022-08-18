<?php
session_start();

include "../connect.php";

if(!isset($_SESSION['user'])){
    header('location:../login.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/LOGO2.png" type="image/x-icon">
    <title>Edit-Blog - MaxMovies</title>

</head>
<body class="bg-dark">
    <?php include 'adheader.php' ?>

    

    <div class="container">
        <h1 class="border-bottom border-secondary border-5 p-3">Update Post</h1>
        <?php foreach($query as $q){ ?>
            <form method="POST">
                <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                <input type="text" placeholder="Title" class="form-control my-3 bg-light text-dark" name="title" value="<?php echo $q['title']?>">
                <textarea name="content" class="form-control my-3 bg-light text-dark" cols="30" rows="10"><?php echo $q['content']?></textarea>
                <div class="d-flex justify-content-center"><button class="btn btn-info" name="update">Update</button></div>
            </form>
        <?php } ?>    
   <?php include 'adfooter.php' ?>   
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
