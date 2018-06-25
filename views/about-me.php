<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- custom CSS -->
    <link rel="stylesheet" href="../styles/custom.css">
    <title>M. Gordon Morse</title>
  </head>
  <body class="light-mode">
    <!-- *************************************************************************
                                  top horizontal navbar
    ************************************************************************** -->
    <?php include("./shared/topnav.php"); ?>
    <!-- Sidebar and page content wrappers -->
    <div class="container-fluid">
      <div class="row">
        <!-- *********************************************************************
                                    responsive sidebar
        ********************************************************************** -->
        <?php include("./shared/sidenav.php"); ?>
        <!-- *********************************************************************
                                      page content
        ********************************************************************** -->
        <div class="col-sm-12 page-content">
          <div class="row">
            <div class="col-xl">
              <span class="h3 page-title">about me <?php include("../images/Octicons/three-bars.svg"); ?></span>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      $("#aboutMeBtn").addClass("active"); //add active class to Business Insights button
    </script>
    <script type="text/javascript" src="../scripts/toggleBackground.js"></script>
  </body>
</html>
