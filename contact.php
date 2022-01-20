<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="images/favicon.ico">

  <title>Contact me</title>

  <!-- Bootstrap core CSS -->
<!--  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


  <!-- Custom styles for this template -->
  <link href="style.css" rel="stylesheet">

    <!--    Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</head>

<body>

  <div class="site-wrapper">

    <div class="site-wrapper-inner">

      <div class="cover-container">

        <div class="masthead clearfix">
          <div class="inner">
            <h3 class="masthead-brand">CV Koen Tibben</h3>
            <nav>
              <ul class="nav masthead-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="experience.php">Ervaring</a></li>
                <li><a href="skills.php">Skills</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="inner cover">

          <script src="script.js"></script>

            <p class="h4">Hierbij mijn prachtige, zelf-in-elkaar-geknutselde contactformulier!</p>

            <br>

            <div class="mb-3">
                <label for="naamVerzender" class="form-label">Wat is je volledige naam?</label>
                <textarea class="form-control" id="naamVerzender" rows="1"></textarea>
            </div>
            <br>
            <div class="mb-3">
                <label for="emailVerzender" class="form-label">Op welk mailadres kan ik contact met je opnemen?</label>
                <textarea class="form-control" id="emailVerzender" rows="1"> </textarea>
            </div>
            <br>
            <div class="mb-3">
                <label for="berichtVerzender" class="form-label">Wat zou je me graag willen laten weten?</label>
                <textarea class="form-control" id="berichtVerzender" rows="3"></textarea>
            </div>
            <br>

            <button type="button" class="btn btn-primary" data-toggle="tooltip" title="Wat fijn dat je me een berichtje wilt sturen!" onclick="verstuurContactFormulier();">Verstuur</button>

            </div>

            <p class="h4">Ik kom er zo snel mogelijk bij je op terug. Wie weet kunnen we iets voor elkaar betekenen. Een bakkie koffie kan nooit kwaad! :-]</p>


            <a href="https://github.com/koentibben/">
            <img alt="GitHub Koen Tibben" src="images/github.png" width="65" height="65">
          </a>
          <a href="https://www.linkedin.com/in/koentibben/">
            <img alt="LinkedIn Koen Tibben" src="images/linkedin.jpeg" width="65" height="65">
          </a>
            <a href="https://twitter.com/koentibben">
                <img alt="Twitter Koen Tibben" src="images/twitter.png" width="65" height="65">
            </a>

        </div>
      </div>

    </div>

<!--  </div>-->

</body>

</html>
