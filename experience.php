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
                            <li class="active"><a href="experience.php">Ervaring</a></li>
                            <li><a href="skills.php">Skills</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <?php
            function queryFromCoursesTable($id)
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
                        $sql = "SELECT course_name FROM courses WHERE id = \"" . $id . "\"";
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
                <h2>Werk</h2>
                <ul class="list-unstyled">
                    <li><b>Sqills</b></li>
                    <p><em>Juni 2018 - heden</em></p>
                    <p>Als Software Test Developer ben ik verantwoordelijk voor het schrijven, beoordelen en uitvoeren van
                        geautomatiseerde testcases. Het testteam van Sqills heeft de ambitie om in ons vakgebied een van de
                        koplopers in Nederland te zijn. Om dit te bereiken, moedigen we innovatie in tools, programmeertalen en
                        processen sterk aan. </p>
                    <li><b>S.V. Almelo</b></li>
                    <p><em>Juli 2019 - Feb. 2021</em></p>
                    <p>
                        Als onderdeel van de communicatiecommissie was ik verantwoordelijk voor onze website, app en andere communicatie kanalen.</p>
                    <li><b>De Buren Afhaalcentrum</b></li>
                    <p><em>Juni 2016 - Mei 2017</em></p>
                    <p>
                        In deze rol was ik verantwoordelijk voor het functioneel testen van onze software. Ook was ik sterk
                        betrokken bij het verfijnen van huidige applicaties en het schrijven/beheren van functionele ontwerpen en
                        documentatie.</p>
                </ul>
                <br>
                <h2>Opleidingen</h2>
                <ul class="list-unstyled">
                    <li><b>Security Management - Saxion Hogescholen</b></li>
                    <p><em>2011 - 2016</em></p>
                    <p>Tijdens deze studie heb ik diverse specifieke Security vakken gevolgd, zoals bedrijfscontinuïteit en
                        risicomanagement. Het laatste studiejaar heb ik me gespecialiseerd in
                        cybersecurity door het volgen van de minor 'ICT & Security'.</p>
                </ul>
                <br>
                <h2>Cursussen</h2>
                <?php
                for ($id = 1; $id <= 5; $id++) {
                    $queryResult = queryFromCoursesTable($id);
                    echo '<li>' . $queryResult[0] . '</li>';
                }
                ?>
            </div>
        </div>

    </div>

</div>
</body>

</html>
