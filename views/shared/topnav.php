<!-- *************************************************************************
                                top menu
************************************************************************** -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="top-menu">
  <!-- Start brand/logo element -->
  <a class="navbar-brand" href="./index.php">
    M.G.Morse
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item mr-2">
       <a class="btn btn-outline-dark" href="./about-me.php">about me</a>
     </li>
     <li class="nav-item mr-2">
       <a class="btn btn-outline-dark" href="#">projects</a>
     </li>
     <li class="nav-item mr-2">
       <a class="btn btn-outline-dark" href="#">blog</a>
     </li>
     <li class="nav-item mr-3">
       <a class="btn btn-outline-dark" href="#">contact me</a>
     </li>
   </ul>

  <!-- End brand/logo element -->
  <!-- Start logout button -->
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
    <button class="btn btn-outline-dark mr-3" type="submit">
      <?php include("../images/Octicons/search.svg"); ?>
      <span class="btn-txt">
        &nbsp;search
      </span>
    </button>
  </form>
  <button id="dark-btn" class="btn btn-outline-dark top-nav-btn">
    <?php include("../images/Octicons/telescope.svg"); ?>
    &nbsp;<span id="btn-txt">dark</span>
  </button>
  <button id="light-btn" class="btn btn-outline-dark top-nav-btn" style="display:none;">
    <?php include("../images/Octicons/light-bulb.svg"); ?>
    &nbsp;<span id="btn-txt">light</span>
  </button>
</div>
</nav>
<!-- End top menu -->
