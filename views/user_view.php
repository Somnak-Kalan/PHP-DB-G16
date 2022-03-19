<?php  require_once('../templates/header.php'); ?>
<?php require_once '../models/post.php'?>
<?php 
$id = $_GET['id'];
$getValue = getUserById($id)
?>
<div class="">
    <form action="../controllers/edit_profile.php" method="POST" >
        <input type="hidden" name="name" value="<?php echo $getValue['user_id']?>" />
    <div style="background: rgb(192, 187, 187);" class=" container-fluid pt-4">
        <div style="" class="w-75 m-auto mt-4" >
        <div style="background: rgb(192, 187, 187);" class="custom-file d-flex justify-content-center ">
            <!-- -----------cover img ----------- -->
                <label class="text-white fw-bold fs-5" for="addImg">
                    COVER 
                    <input type="file" name="cover_img" id="addImg" class="d-none ">
                    <img src="../images/<?php echo $value['cover_img'] ?>" alt="" width="30%">
                </label>
        
        </div>
          <div class="card-body">
            <div  class="d-flex justify-content-between">
                <div class="m-3  d-flex">
                    <div class="m-3"><img src="../images/lisa.png" alt="30" class="rounded-circle" width="150%" height="70vh"></div>
                    <div class="m-3">
                        <p> <b> <input type="text" class="border-0 " name="full_name" value="<?php echo $getValue['full_name']?>"> </b> </p>
                        <p><small>20M Friends</small></p>
                    </div>
                </div>
                <div class="">
                    <button class="btn " type="submit"><a href="" class="nav-link text-white fw-bold"></a> Edit Profile</button>
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
    </form>
</div>