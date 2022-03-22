
<?php require_once('models/user.php')?>
<?php 
    $get_value=get_all_user_info();
    foreach ($get_value as $value){

    }
?>
<form action="../controllers/add_user.php" method="post">
    <input type="hidden" name='id' value="<?php echo $value['user_id']; ?>" />
    <div style="background: rgb(192, 187, 187);" class=" container-fluid pt-4">
        <div class="w-75 m-auto ">
    
            <div class="custom-file d-flex justify-content-center text-center bg-light">
                <label for="addImg">
                    <input type="file" name="cover_img" id="addImg" class="d-none ">
                    <img src="../images/<?php echo $value['cover_img'] 
                                        ?>" alt="" width="50%">
                </label>
    
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="m-3  d-flex">
                        <div class="m-3">
                            <!-- ======================================result of image here ================================= -->
                            <label for="addProfile">
    
                                <input type="file" name="profile" id="addProfile" class="d-none ">
                                <img style="border-radius: 100px;" width="90%" height="90vh" src="../images/<?php echo $value['profile_img'] ?>" alt="">
                            </label>
                        </div>
                        <div class="m-3">
                            <p><strong><?php echo $value['full_name']?></strong></p>
                            <p><small>20M Friends</small></p>
                        </div>
                    </div>
                    <div class="">
                        <button class="btn " type="submit"><a class="nav-link text-light fw-bold" href="../views/edit_user_view.php?id=<?php echo $value['user_id'] ?>">Edit Profile</a></button>
                    </div>
                </div>
                <?php //} 
                ?>
                <div class="" style="border-top:5px solid white;">
                    <ul class="nav ">
                        <li class="nav-item"><a class="nav-link text-white" href="">Post</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="?pages=photo">Photos</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="">Friends</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</form>
    
    <div class="row">
        <div class="col-md-3">
            <?php
            require_once('photo.php');
            ?>
        </div>
        <div class="col-md-9 mt-2" >
            <?php require_once('add_post_question.php') ?>
            <?php require_once('post_container.php'); ?>
        </div>
    </div>