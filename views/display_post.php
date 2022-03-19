<?php
// ================================= require database from models folder =======================
require_once "models/post.php";

require_once "get_comment.php";
// ================================= function to insert input into DB ==================================
function display_post()
{
    global $database;
    $statement = $database->prepare("SELECT*FROM posts");
    $statement->execute();
    return $statement->fetchAll();
}

// ================================== To check input NULL/NOT ==============================================
?>

<div class="container-fluid mt-3">


    <div class="row  my-auto">
        <!-- sideleft -->
        <div style="position:fixed;" class="left  col-md-2 ">
            <div class="d-flex">
                <!-- <p class="w-25" style="background:grey;border-radius: 40px;padding:25px;"> </p> -->
                <img src="../images/lisa.png" alt="30" class="rounded-circle" width="40%" height="90vh">
                <p class="fw-bold mt-3">Lalalisa</p>
            </div>
            <div class="d-flex mt-5"><i class="fa-solid fa-user-group m-2"></i><a href="" class="nav-link">Friends</a></div>
            <div class="d-flex mt-5"><i class="fa-solid fa-clock m-2"></i><a href="" class="nav-link">Memories</a></div>
            <div class="d-flex mt-5"><i class="fa-solid fa-circle-chevron-down m-2"></i><a href="" class="nav-link">Mores</a></div>
        </div>
        <!--side  right -->
        <div class="w-50 m-auto  col-md-3">
            <div style="background: rgb(192, 187, 187);" class="card-post rounded p-4 ">
                <div class="logo d-flex">

                    <div><img src="../images/lisa.png" alt="30" class="rounded-circle" width="100%" height="70vh"></div>
                    <p style="background: rgb(192, 187, 187);" class=" form-control form-group">
                        <a class="btn w-100 bg-light rounded-pill form-control" data-bs-toggle="modal" href="../home.php#exampleModalToggle" role="button">What is your mind?</a>



                    </p>
                </div>
                <div style="border-top:5px solid white;padding:10px">
                    <ul class="nav  ">
                        <li><a class="nav-link text-white" href="">Photos/Video </a></li>
                    </ul>
                </div>
            </div>


            <!-- ================================= Loop post======================================================== -->
            <?php
            $get_posts = display_post();
            foreach ($get_posts as $post) :
            ?>
                <div style="background: rgb(192, 187, 187);" class="right mt-3 p-3 rounded">
                    <div class="card-body d-flex justify-content-between">
                        <!-- make it to edit post   -->
                        <div class=" d-flex ">
                            <div class=" bg-secondary rounded m-3"><img src="../images/logo/avatar.png" alt="" class="logo"></div>
                            <div class="text-white  fw-bold">
                                <?php
                                $get_user = get_user();
                                ?>
                                <p><?= $get_user['full_name'] ?></p>

                                <p><small><?php echo $post['post_date'] ?></small></p>
                            </div>
                        </div>
                        <p class="card-text text-end d-flex">
                            <a class="nav-link text-black fw-bold" href="../views/edit_post.php?id=<?php echo $post['post_id'] ?>">EDIT</a>
                            <a class="nav-link text-black fw-bold" href="../controllers/delete_post.php?id=<?php echo $post['post_id'] ?>">DELETE</a>
                            <!-- <a class="" data-bs-toggle="modal" href="#somnakexampleModalToggle" role="button"><i class="fa-solid fa-ellipsis fs-5 text-black fw-bold"></i></a> -->
                        </p>
                    </div>
                    <!-- ============================================== post photos and content=================================== -->
                    <div class="text-white fw-bold">
                        <p><?php echo $post['content'] ?></p>
                    </div>
                    <div class="text-center">
                        <img src="../images/<?= $post['img'] ?>" class="card-img-top" alt="...">
                    

                    </div>
                    <!-- =================================================== Like and comment number======================================= -->
                    <?php
                    $comments_total = count_comment();
                    foreach ($comments_total as $comment_num) :

                    ?>
                        <div>
                            <div class="d-flex justify-content-between text-white fw-bold">
                                <!-- ==================================== Like btn ============================================= -->
                                <ul class="navbar nav text-white fw-bold p-0 m-0">
                                    <div class="d-flex"><i class="fa-solid fa-thumbs-up m-1"></i>
                                        <li>10M Like</li>
                                    </div>

                                </ul>
                                <!-- ======================================== btn to show comment list ================================ -->
                                <button type="button" id='show_comment' class="btn text-white"><b><?= $comment_num[0] ?>M comments</b></button>

                            </div>
                            <hr>
                        <?php endforeach ?>
                        <!-- ================================================== comment list============================================== -->
                        <div class=" comment card border border-0" style="background: rgb(192, 187, 187);">
                            <?php
                            $comments = get_comment();
                            foreach ($comments as $comment) :
                            ?>
                                <p class="border border-white text-white p-1 " style="background:rgb(162, 187, 187)"><?= $comment["comment_content"] ?></p>
                            <?php endforeach ?>
                            <!-- ======================== btn to hide comment list================== -->
                            <button type="button" id='hide_comment' class="btn text-white btn-primary"><b>Hide comment</b></button>
                        </div>
                        <!-- ======================================== break line of eacher post ================================== -->
                        <div>
                            <ul class="navbar nav text-white fw-bold p-0 m-0"></ul>

                        </div>
                        <hr>

                        <div class="logo d-flex">
                            <p style="background:grey;border-radius: 40px;padding:25px;"></p>
                            <!-- <p style="margin-left:40px;margin-top:5px;padding:1px;" class="bg-light form-control rounded-pill" ><a class="nav-link" href="">comment</a></p> -->
                            <form action="../controllers/add_comment.php" method="post" class="form-control border-0" style="background: rgb(192, 187, 187);">
                                <!-- ======== add comment==== -->
                                <div class="input-group mb-3">
                                    <input type="text" name="comment" id="comment_btn" class="form-control  " placeholder="Write comment..." aria-label="Write comment..." aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn rounded-0 bg-white"><img src="../images/send.png" alt="" width="80%"></button>
                                    </div>
                                </div>
                            </form>

                        </div>

                        </div>
                        <!-- </div> -->

                </div>
            <?php endforeach ?>

        </div>
    </div>
</div>
<script src="../js/main.js"></script>
