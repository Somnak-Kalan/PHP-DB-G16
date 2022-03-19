<?php require_once('models/post.php') ?>
<?php require_once('models/like.php') ?>
<?php require_once('models/user.php') ?>
<?php
// function
$posts = get_all_posts();
$get_user_id = get_user_id();

foreach ($posts as $post) {
?>
    <div styelay="">
        <div class="w-50 m-auto">

            <div style="background: rgb(192, 187, 187);" class="right mt-3 p-3 rounded ">
                <div class="card-body d-flex justify-content-between">

                    <div class=" d-flex ">
                        <div><img src="../images/lisa.png" alt="30" class="rounded-circle" width="100%" height="70vh"></div>
                        <div class="text-dark  fw-bold m-3">
                            <p> Lalalisa</p>
                            <p><small>Sep 7 at 12:00 AM</small></p>
                        </div>
                    </div>
                    <!-- delete icon  -->
                    <p class="card-text text-end d-flex">
                        <a class="nav-link text-black fw-bold" href="../views/edit_post.php?id=<?php echo $post['post_id'] ?>">EDIT</a>
                        <a class="nav-link text-black fw-bold" href="controllers/delete_post.php?id=<?php echo $post['post_id'] ?>">DELETE</a>
                </div>
                <div class="text-white fw-bold">
                    <p><?php echo $post['content'] ?></p>
                </div>
                <div class="text-center">
                    <img src="../images/<?= $post['img'] ?>" class="card-img-top" alt="...">
                </div>
                <div>
                    <div class="d-flex justify-content-between text-white fw-bold">
                        <a class="nav-link" href="controllers/add_like.php?id=<?= $post['post_id'] ?>&user_id=<?php echo $get_user_id['user_id'] ?>">
                            <div>
                                <ul class="navbar nav text-white fw-bold p-0 m-0">
                                    <div class="d-flex"><i class="fa-solid fa-thumbs-up m-1"></i>
                                        <li>Like
                                            <?php
                                            $count_like = count_like($post['post_id']);
                                            echo $count_like['number'];
                                            ?>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </a>
                        <li class="nav">comment</li>
                    </div>
                    <hr>
                    <hr>

                    <div class="logo d-flex">
                        <p style="background:grey;border-radius: 40px;padding:25px;"></p>
                        <p style="margin-left:40px;margin-top:5px;padding:1px;" class="bg-light form-control rounded-pill"><a class="nav-link" href="">comment</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php } ?>