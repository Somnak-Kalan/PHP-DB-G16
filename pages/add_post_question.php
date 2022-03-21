<?php require_once('modal.php') ?>
<?php require_once('models/user.php') ?>
<?php $get_profile_img = get_user_name_img();
foreach ($get_profile_img as $profile_img) {


?>
<?php } ?>
<div style="background: rgb(192, 187, 187);" class="card-post rounded p-4 w-50 m-auto ">
    <div class="logo d-flex">
        <div><img src="../images/<?php echo $profile_img['profile_img'] ?>" alt="30" class="rounded-circle" width="100%" height="70vh"></div>
        <p style="background: rgb(192, 187, 187);" class=" form-control form-group">
            <a class="btn w-100 bg-light rounded-pill form-control" data-bs-toggle="modal" href="../home.php#exampleModalToggle" role="button">What is your mind?</a>
        </p>
    </div>
</div>
