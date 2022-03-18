<?php 
    require_once('models/post.php');
    $getUser = getUser();
    foreach ($getUser as  $value){

    }
?>
<div class="">
    <div style="background: rgb(192, 187, 187);" class=" container-fluid pt-4">
        <div style="" class="w-75 m-auto mt-4" >
            <div class="">
                <img style="width:100%;height:50vh" src="../images/header1.jpg" class="card-img-top" alt="...">
            </div>
          <div class="card-body">
            <div  class="d-flex justify-content-between">
                <div class="m-3  d-flex">
                    <div class="m-3"><img src="../images/lisa.png" alt="30" class="rounded-circle" width="150%" height="70vh"></div>
                    <div class="m-3">
                        <p> <b> <?php echo $value['full_name']; ?></b> </p>
                        <p><small>20M Friends</small></p>
                    </div>
                </div>
                <div class="">
                    <button class="btn " type="submit">Edit Profile</button>
                </div>
            </div>
            <div class="" style="border-top:5px solid white;">
                <ul class="nav ">
                    <li class="nav-item"><a class="nav-link text-white" href="?pages=post">Post</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="">Friends</a></li>
                </ul>
            </div>
          </div>
        </div>
    </div>
    <?php require_once('post.php'); ?>
</div>