<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="images/favicon.ico">

  <title>CV Koen Tibben</title>

    <!-- Bootstrap core CSS -->
    <!--  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!--    Bootstrap JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
                <li class="active"><a href="skills.php">Skills</a></li>
                <li><a href="contact.php">Contact</a></li>
            </nav>
          </div>
        </div>

        <?php
        function queryFromSkillsTable($skill)
        {
            $host = 'localhost';
            $db = 'cv_koentibben';
            $username = 'bit_academy';
            $password = 'bit_academy';
            $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
            try {
                $con = new PDO($dsn, $username, $password);
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                if ($con) {
                    $sql = "SELECT percentage FROM skills WHERE skill = \"" . $skill . "\"";
                    $stmt = $con->prepare($sql);
                    $stmt->execute();
                    return $stmt->fetch();
                }
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }
        ?>

        <div class="inner cover">
          <h3 class="display-6">Programmeertalen</h3>
          <p class="h5">PHP</p>
          <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: <?php $queryResult = queryFromSkillsTable('PHP'); echo $queryResult[0]; ?>%;" aria-valuenow="<?php $queryResult = queryFromSkillsTable('PHP'); echo $queryResult[0]; ?>"
                   aria-valuemin="0" aria-valuemax="100"><?php $queryResult = queryFromSkillsTable('PHP'); echo $queryResult[0]; ?>%
              </div>          </div>
          <p class="h5">Java</p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?php $queryResult = queryFromSkillsTable('Java'); echo $queryResult[0]; ?>%;" aria-valuenow="<?php $queryResult = queryFromSkillsTable('Java'); echo $queryResult[0]; ?>"
              aria-valuemin="0" aria-valuemax="100"><?php $queryResult = queryFromSkillsTable('Java'); echo $queryResult[0]; ?>%
            </div>
          </div>
          <p class="h5">JavaScript</p>
          <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: <?php $queryResult = queryFromSkillsTable('JavaScript'); echo $queryResult[0]; ?>%;" aria-valuenow="<?php $queryResult = queryFromSkillsTable('JavaScript'); echo $queryResult[0]; ?>"
                   aria-valuemin="0" aria-valuemax="100"><?php $queryResult = queryFromSkillsTable('JavaScript'); echo $queryResult[0]; ?>%
              </div>
          </div>
          <p class="h5">HTML</p>
          <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: <?php $queryResult = queryFromSkillsTable('HTML'); echo $queryResult[0]; ?>%;" aria-valuenow="<?php $queryResult = queryFromSkillsTable('HTML'); echo $queryResult[0]; ?>"
                   aria-valuemin="0" aria-valuemax="100"><?php $queryResult = queryFromSkillsTable('HTML'); echo $queryResult[0]; ?>%
              </div>
          </div>
          <p class="h5">CSS</p>
          <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: <?php $queryResult = queryFromSkillsTable('CSS'); echo $queryResult[0]; ?>%;" aria-valuenow="<?php $queryResult = queryFromSkillsTable('CSS'); echo $queryResult[0]; ?>"
                   aria-valuemin="0" aria-valuemax="100"><?php $queryResult = queryFromSkillsTable('CSS'); echo $queryResult[0]; ?>%
              </div>
          </div>
        </div>
        <h3 class="display-6">Overig</h3>
          <p class="h5">Git</p>
          <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: <?php $queryResult = queryFromSkillsTable('Git'); echo $queryResult[0]; ?>%;" aria-valuenow="<?php $queryResult = queryFromSkillsTable('Git'); echo $queryResult[0]; ?>"
                   aria-valuemin="0" aria-valuemax="100"><?php $queryResult = queryFromSkillsTable('Git'); echo $queryResult[0]; ?>%
              </div>
          </div>
          <p class="h5">Docker</p>
          <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: <?php $queryResult = queryFromSkillsTable('Docker'); echo $queryResult[0]; ?>%;" aria-valuenow="<?php $queryResult = queryFromSkillsTable('Docker'); echo $queryResult[0]; ?>"
                   aria-valuemin="0" aria-valuemax="100"><?php $queryResult = queryFromSkillsTable('Docker'); echo $queryResult[0]; ?>%
              </div>
          </div>
          <p class="h5">Atlassian</p>
          <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: <?php $queryResult = queryFromSkillsTable('Atlassian'); echo $queryResult[0]; ?>%;" aria-valuenow="<?php $queryResult = queryFromSkillsTable('Atlassian'); echo $queryResult[0]; ?>"
                   aria-valuemin="0" aria-valuemax="100"><?php $queryResult = queryFromSkillsTable('Atlassian'); echo $queryResult[0]; ?>%
              </div>
          </div>
        <p class="h5">Selenium</p>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?php $queryResult = queryFromSkillsTable('Selenium'); echo $queryResult[0]; ?>%;" aria-valuenow="<?php $queryResult = queryFromSkillsTable('Selenium'); echo $queryResult[0]; ?>"
                 aria-valuemin="0" aria-valuemax="100"><?php $queryResult = queryFromSkillsTable('Selenium'); echo $queryResult[0]; ?>%
            </div>
        </div>
        <p class="h5">Behat</p>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?php $queryResult = queryFromSkillsTable('Behat'); echo $queryResult[0]; ?>%;" aria-valuenow="<?php $queryResult = queryFromSkillsTable('Behat'); echo $queryResult[0]; ?>"
                 aria-valuemin="0" aria-valuemax="100"><?php $queryResult = queryFromSkillsTable('Behat'); echo $queryResult[0]; ?>%
            </div>
        </div>
        <p class="h5">Cypress</p>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?php $queryResult = queryFromSkillsTable('Cypress'); echo $queryResult[0]; ?>%;" aria-valuenow="<?php $queryResult = queryFromSkillsTable('Cypress'); echo $queryResult[0]; ?>"
                 aria-valuemin="0" aria-valuemax="100"><?php $queryResult = queryFromSkillsTable('Cypress'); echo $queryResult[0]; ?>%
            </div>
        </div>
      </div>
    </div>

  </div>

  </div>
</body>

</html>
