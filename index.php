<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Brainless Quotes</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styling.css">
    <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid" id="contents">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 headingDiv">
                <div class="header">
                    <div class="logo">
                        <h1>Brainless Quotes</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 randomDiv">
                <a href="#" id="randomButton">Give Me a New Quote</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-12" style="padding : 5%;">
                <div class="mainArea col-md-8 col-md-offset-2">
                    <div class="quoteArea">
                        <p id="quoteHere"></p>
                        <p class="quoteAuthor">
                            <span class="hyphen">-</span>
                            <span class="authorName"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
<!--
        <div class="row">
            <div class="col-lg-3 col-lg-offset-8 col-md-4 col-md-offset-8 col-xs-8 col-xs-offset-4">
                <a href="#" id="randomButton">Give Me a New Quote</a>
            </div>
        </div>
-->
        <footer>
            Developed by <a href="https://www.facebook.com/BhavikJoshi07">Bhavik Joshi</a>
        </footer>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>