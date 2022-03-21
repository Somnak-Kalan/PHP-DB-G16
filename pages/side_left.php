<?php
require_once('models/user.php');
$get_profile_img = get_user_name_img();
foreach ($get_profile_img as $profile_img){

}
?>
    <div style="position:fixed; margin-left:2em" class="col-md-2 ">
        <div class="d-flex m-2">
            <img src="../images/<?php echo  $profile_img['profile_img'] ?>" alt="" class="rounded-circle" width="40%" height="90vh">
            <p class="fw-bold mt-3"><?php  echo  $profile_img['full_name'] ?></p>
        </div>
        <div class="d-flex mt-5"><i class="fa-solid fa-user-group m-2"></i><a href="" class="nav-link">Friends</a></div>
        <div class="d-flex mt-5"><i class="fa-solid fa-clock m-2"></i><a href="" class="nav-link">Memories</a></div>
        <div class="d-flex mt-5"><i class="fa-solid fa-circle-chevron-down m-2"></i><a href="" class="nav-link">Mores</a></div>
    </div>

