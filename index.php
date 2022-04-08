<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="text_mining" />
    <meta name="author" content="Group_21" />

    <title>Friends</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <!-- button css page -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/sidenav.css" />
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>

  <body id="page-top">
    <!-- Navigation -->
    <div class="navbar navbar-fixed-top" id="mainNav">
      <div class="navbar-header">
        <a class="link-header js-scroll-trigger" href="#page-top">Group 21</a>
      </div>
      <div class="navbar-nav links">
        <a class="link js-scroll-trigger" href="#sentiment">Sentiment</a>
        <a class="link js-scroll-trigger" href="#topic">Topics</a>
      </div>
      <div class="navbar-nav button hidden">
        <button class="navbutton">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </button>
      </div>
    </div>

    <!-- front page -->
    <div class="front-image">
      <div class="title" id="t1">Friends</div>
      <div class="title" id="t2">Simulator</div>
    </div>

    <div class="wrapper" id='sentiment-wrapper'>
      <!-- sentiment section -->
      <div class="sentiment-section" id='sentiment'>
        <div class="header">Sentiment analyses</div>
        <div>Here you can choose the season, episode and character of which you want to know the sentiment. It will return a measurement of how the mood of the character was during this episode in the series Friends.
        </div>
        <form id='form'>
          <label for="seasons">Season: <select class='btn-danger dropdown seasons' name="seasons" id="seasons">
            <?php 
              include 'seasons.php'
            ?>
          </select></label>
          <label for="episodes">Episode: <select class='btn-primary dropdown' name='episodes' id='episodes'>
          </select></label>
          <label for="characters">Character: <select class='btn-warning dropdown' name='characters' id='characters'>
            <?php 
              include 'character.php'
            ?>
          </select></label>
          <input class='btn-danger submitbtn' type="submit" id='submit-form'>
        </form>
        <div class='outputblock'></div>
      </div>
    </div>
    <div class="wrapper">
      <!-- skills section -->
      <div class="topic-section" id="topic">
        <div class="header">Topic modelling</div>
        <div>Here the topics of each episode are displayed in a word graph with more prominent topics displayed larger than the less prominent ones</div>
        <form id='form2'>
          <label for="seasons2">Season: <select class='btn-warning dropdown' name="seasons2" id="seasons2">
            <?php 
              include 'seasons.php'
            ?>
          </select></label>
          <label for="episodes2">Episode: <select class='btn-primary dropdown' name='episodes2' id='episodes2'>
          </select></label>
        </form>
        <div id='imagedisplay'></div>
      </div>
    </div>

    <!-- contact bar -->
    <div class="bottom">
      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="col-sm text-center">
              <a
                class="fa fa-google"
                href="#page-top"
              ></a>
              <a
                class="fa fa-linkedin"
                href="#page-top"
              ></a>
              <a href="#page-top" class="fa fa-facebook"></a>
              <a href="#page-top" class="fa fa-twitter"></a>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer id="footer">
        <div class="container">
          <p class="m-0 text-center text-white">
            Copyright &copy; group_21 2022
          </p>
        </div>
        <!-- /.container -->
      </footer>
    </div>

    <!-- additional files -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
