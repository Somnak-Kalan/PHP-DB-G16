<?php require_once('../templates/header.php') ?>
 <?php require_once '../models/user.php'?>
<?php
$id = $_GET['id'];
$get_user_id= get_user_name_from($id);
?>
<div style="background: rgb(192, 187, 187);" class=" container-fluid pt-4">
    <div class="w-75 m-auto ">
        <form action="../controllers/edit_profile.php" METHOD="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $id ?>">
            <!-- -------cover img ---------------- -->
            <div class="custom-file d-flex justify-content-center text-center bg-light">
                <label for="addImg">
                    COVER
                    <input type="file" name="cover_img" id="addImg" class="d-none ">
                    <img src="../images/<?php echo $get_user_id['cover_img'] ?>" alt="">
                </label>
    
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="m-3  d-flex">
                        <div class="m-3">
                            <!-- ======================================result of image here ================================= -->
                            <label for="addProfile">
    
                                <input type="file" name="profile" id="addProfile" class="d-none ">
                                <img style="border-radius:40px;" width="100%" height="80vh" src="../images/" alt="">
                            </label>
                        </div>
                        <div class="m-3">
                            <input type="text" name="full_name" value="<?php echo $get_user_id['full_name'] ?>"> 
                            <p><small>20M Friends</small></p>
                        </div>
                    </div>
                    <div class="">
                        <button class="btn " type="submit">Add</button>
                    </div>
                </div>
                <?php //} 
                ?>
                <div class="" style="border-top:5px solid white;">
                    <ul class="nav ">
                        <li class="nav-item"><a class="nav-link text-white" href="?pages=post">Post</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="">About</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="">Friends</a></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</div>
<?php require_once('../templates/footer.php') ?>