<?php
// ================================= require database from models folder =======================
require_once "models/post.php";
// ================================= function to insert input into DB ==================================
function display_post()
{
    global $database;
    $statement=$database->prepare("SELECT*FROM posts");
    $statement->execute();
    return $statement-> fetchAll();

        // return $statement -> rowCount()>0;
}
// ================================== To check input NULL/NOT ==============================================
?>
    <div  class="container-fluid mt-3">
    

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
                    <!-- <p style="background:grey;border-radius: 40px;padding:25px;"></p> -->
                    <div ><img src="../images/lisa.png" alt="30" class="rounded-circle" width="100%" height="70vh"></div>
                    <p  style="background: rgb(192, 187, 187);" class=" form-control form-group" >
                        <a class="btn w-100 bg-light rounded-pill form-control" data-bs-toggle="modal" href="../home.php#exampleModalToggle" role="button">What is your mind?</a>

                    </p>
                </div>
                <div style="border-top:5px solid white;padding:10px">
                    <ul class="nav  ">
                        <li><a class="nav-link text-white" href="">Photos/Video</a></li>
                    </ul>
                    </div>
                </div>
                <?php
                $getItems=display_post();
                foreach ($getItems as $item):
                ?>
                <div style="background: rgb(192, 187, 187);" class="right mt-3 p-3 rounded">
                        <div class="card-body d-flex justify-content-between">

                            <div  class=" d-flex ">
                                    <div class=" bg-secondary rounded m-3"><img src="../images/logo/avatar.png" alt="" class="logo"></div>
                                    <div class="text-white  fw-bold">
                                        <p> Somnak Kalan</p>
                                        <p><small>Sep 7 at 12:00 AM</small></p>
                                    </div>
                            </div>
                            <!-- <p class="card-text text-end"><a href="" class="nav-link"><i class="fa-solid fa-ellipsis fs-5"></i></a> </p> -->
                            <p class="card-text text-end">
                                <a class="" data-bs-toggle="modal" href="#somnakexampleModalToggle" role="button"><i class="fa-solid fa-ellipsis fs-5 text-black fw-bold"></i></a>
                            </p>
                        </div>
                        <div class="text-white fw-bold">
                            <p><?php echo $item['content']?></p>
                        </div>
                        <div class="text-center">
                            <img src="../images/lisa.jpg" class="card-img-top" alt="...">
                          
                        </div>
                        <div>
                            <div class="d-flex justify-content-between text-white fw-bold">
                                <p>20Likes</p>
                                <p>10M comments</p>
                            </div>
                            <hr>
                            <div>
                                <ul class="navbar nav text-white fw-bold p-0 m-0">
                                    <div class="d-flex"><i class="fa-solid fa-thumbs-up m-1"></i><li>Like</li></div>
                                    <li>comment</li>
                                </ul>
                            </div>
                            <hr>
    
                            <div class="logo d-flex">
                                <p style="background:grey;border-radius: 40px;padding:25px;"></p>
                                <p style="margin-left:40px;margin-top:5px;padding:1px;" class="bg-light form-control rounded-pill" ><a class="nav-link" href="">comment</a></p>
                            </div>
                        
                        </div>
                    <!-- </div> -->
                    
                </div>
                <?php endforeach?>

            </div>
        </div>
    </div>
