<?php include "dbconnect.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body>
    <?php include "header.php"?>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <?php
            $query =mysqli_query($connect,"select * from posts");
            while($row=mysqli_fetch_array($query)){

            ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="h4"><?php echo $row['title'];?></h2>
                        <div class="container my-2">
                            <div class="row small text-mutted">
                                <div class="col"><i class="bi bi-person-fill"></i><?php echo $row['author'];?></div>
                                <div class="col"><i class="bi bi-clock"></i><?php echo $row['date'];?></div>
                                <div class="col"><i class="bi bi-eye"></i><?php echo $row['views'];?></div>
                            </div>
                        </div>
                        <p class="small"><?php echo  substr($row['content'],0,700);?>...</p>
                        <a href="posts.php?id=<?php echo $row['id'];?>" class="btn btn-success float-end">Read More</a>

                    </div>
                </div>
<?php }?>
            </div>
            <div class="col-3">
                <?php include "side.php";?>
            </div>
        </div>
    </div>
</body>
</html>