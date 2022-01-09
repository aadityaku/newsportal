<?php include "dbconnect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php include "header.php";?>
    <div class="container">
        <div class="row">
         <div class="col-lg-8">
             <div class="card">
                 <div class="card-body">
                     <form action="insert.php" method="post">
                         <div class="mb-3">
                             <label for="">Title</label>
                             <input type="text" name="title" class="form-control">
                         </div>
                         <div class="mb-3">
                             <label for="">author</label>
                             <input type="text" name="author" class="form-control">
                         </div>
                         <div class="mb-3">
                             <label for="">content</label>
                             <input type="text" name="content" class="form-control">
                         </div>
                         <div class="mb-3">
                            
                             <input type="submit" name="Go" class="btn btn-danger w-100">
                         </div>
                     </form>
                     <?php 
                     if(isset($_POST['Go'])){
                         $title=$_POST['title'];
                         $author=$_POST['author'];
                         $content=$_POST['content'];
                         $query=mysqli_query($connect,"insert into posts(title,author,content) value('$title',
                         '$author','$content')");
                         if($query){
                             echo "<script>window.open('index.php','_self')</script>";
                         }
                     }
                     ?>
                 </div>
             </div>
         </div>
        </div>
    </div>
</body>
</html>