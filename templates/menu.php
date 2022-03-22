<?php
  require_once('header.php');
?>

<nav style="z-index:1;" class="navbar navbar-expand-lg navbar-light bg-primary shadow-lg    m-0 p-0 position-sticky top-0">
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
            <a class="nav-link" href="?pages=home"><img class="w-50" src="" alt=""><i class="fa-solid fa-house text-white display-6"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled"><img class="w-50" src="" alt=""></a>
          </li>
          <li class="nav-item">
            <a href="?pages=friend" class="nav-link "><img class="w-50" src="." alt=""><i class="fa-solid fa-user-group text-white display-6"></i></a>
          </li>
        </ul>
        <!-- logo left  -->
        <div style="margin-right:10em" class="">
          <ul class="d-flex nav">
            <li><a href="?pages=account" class="logo rounded-5 p-2"><img class="w-50"  src="." alt=""><i class="fa-solid fa-user-tie text-white display-6"></i></a></li>
          </ul>
        </div>
        <div style="margin-right:10em" class="">
          <ul class="d-flex nav">
            <li><a href="../form/logout.php" class="logo rounded-5 p-2"><img class="w-50"  src="" alt=""><i class="fa-solid fa-arrow-right-from-bracket text-white display-6"></i></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</nav>
<?php
  require_once('footer.php');
?>