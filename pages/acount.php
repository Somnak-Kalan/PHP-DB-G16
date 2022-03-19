<?php 
    require_once('models/post.php');
    $getUser = getUser();

?>
  <?php
    foreach ($getUser as  $value){


?>
<?php } ?>
<div class="">
    <div style="background: rgb(192, 187, 187);" class=" container-fluid pt-4">
        <div style="" class="w-75 m-auto " >
            <!-- -------cover img ---------------- -->
        <div class="custom-file d-flex justify-content-center text-center bg-light">
                <label for="addImg">
                    <input type="file" name="cover_img" id="addImg" class="d-none ">
                    <img src="../images/<?php echo $value['cover_img'] ?>" alt="" width="50%">
                </label>
        
        </div>
          <div class="card-body">
            <div  class="d-flex justify-content-between">
                <div class="m-3  d-flex">
                    <div class="m-3">
                        <!-- <img src="../images/lisa.png" alt="30" class="rounded-circle" width="150%" height="70vh"> -->
                        <label for="addProfile">
                            <input type="file" name="profile" id="addProfile" class="d-none ">
                            <img src="../images/<?php echo $value['profile_img'] ?>" alt="" width="50%">
                        </label>
                </div>
                    <div class="m-3">
                        <p> <b> <?php echo $value['full_name']; ?></b> </p>
                        <p><small>20M Friends</small></p>
                    </div>
                </div>
                <div class="">
                    <button class="btn " type="submit"><a class="nav-link text-light fw-bold"href="views/user_view.php?id=<?php echo $value['user_id']?>">Edit Profile</a></button>
                </div>
            </div>
            <?php //} ?>
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
    <?php   require_once('post.php'); ?>
</div>