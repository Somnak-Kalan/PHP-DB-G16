<?php
  require_once('header.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-primary m-0 p-0 position-sticky top-0">
  <div class="container-fluid">
    <a class="navbar" href="?pages=face"><img class="text-white w-75"  src="../images/logo/facebook.png" alt=""></a>
    <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div style="margin-left: 5em;" class="collapse navbar-collapse " id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link" href="?pages=home"><img class="w-50" src="../images/logo/home.png" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled"><img class="w-50" src="../images/logo/video.png" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled"><img class="w-50" src="../images/logo/friend.png" alt=""></a>
          </li>
        </ul>
        <!-- logo left  -->
        <div style="margin-right:10em" class="">
          <ul class="d-flex nav">
            <li><a href="?pages=acount" class="logo rounded-5 p-2"><img style="" class="w-50"  src="../images/logo/avatar.png" alt=""></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</nav>
<?php
  require_once('footer.php');
?>