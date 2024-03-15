<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--Bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!--font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <!--css file-->
  <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!--navbar -->
    <div class="container-fluid p-0">
        <!--first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info"> 
            <div class="container-fluid">
                <img src="../images/logo.avif" alt="" class="logo">
                <nav class="navbar navbar-expand-lg navbar-light bg-info"> 
                   <ul class ="navbar-nav ">
                        <li class="nav-item">
                           <a href="" class="nav-link">Welcome guest</a>
                        </li>
                   </ul>
                </nav>
            </div>
        </nav>
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">
                Manage Details
            </h3>
        </div>
        <!--third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#">
                       <img src="../images/logo.avif" alt="" class="admin_image"> 
                    </a>
                    <p class="text-light text-center">Admin Name</p>


                </div>
                <div class="button text-center">
                <button class ="my-3"><a href="" class="nav-link text-light bg-info my-1">Insert Posters</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View Posters</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Catogeries</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View Catogeries</a></button>
                <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div> 
        </div>
          
        <!--fourth child-->
         <div class="container my-5">
          <?php
           if(isset($_GET['insert_category'])){
            include('cat.php');
           }

           if(isset($_GET['insert_brand'])){
            include('brand.php');
           }

           ?>
         </div>






         <!--last child-->
         <div class="bg-info p-3 text-center footer">
           <p> All rights reserved ©- Designed by spiderWeb-2024
         </div>
    </div>



<!--bootstrap js link-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
</body>
</html>