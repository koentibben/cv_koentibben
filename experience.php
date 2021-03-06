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

function showCourses()
{
    for ($id = 1; $id <= 5; $id++) {
        echo '<p>' . queryFromCoursesTable($id)[0] . '</p>';
    }
}

?>
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

            <div class="inner cover">
                <h2>Werk</h2>
                <p><b><em>Juni 2018 - heden</em></b></p>
                <p>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#sqills" aria-expanded="false"
                            aria-controls="sqills">
                        Software Test Developer bij Sqills
                    </button>
                </p>
                <div class="collapse" id="sqills">
                    <div class="card card-body">
                        Als Software Test Developer ben ik verantwoordelijk voor het schrijven, beoordelen en uitvoeren van-->
                        geautomatiseerde testcases. Het testteam van Sqills heeft de ambitie om in ons vakgebied een van de
                        koplopers in Nederland te zijn. Om dit te bereiken, moedigen we innovatie in tools, programmeertalen en
                        processen sterk aan.
                    </div>
                </div>
                <br>

                <p><b><em>Juli 2019 - Feb. 2021</em></b></p>
                <p>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#svalmelo" aria-expanded="false"
                            aria-controls="svalmelo">
                        Communicatiecommissie bij S.V. Almelo
                    </button>
                </p>
                <div class="collapse" id="svalmelo">
                    <div class="card card-body">
                        Als onderdeel van de communicatiecommissie was ik verantwoordelijk voor onze website, app en andere communicatie kanalen.
                    </div>
                </div>
                <br>

                <p><b><em>Juni 2016 - Mei 2017</em></b></p>
                <p>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#deBuren" aria-expanded="false"
                            aria-controls="deBuren">
                        Operationeel medewerker bij De Buren Afhaalcentrum
                    </button>
                </p>
                <div class="collapse" id="deBuren">
                    <div class="card card-body">
                        In deze rol was ik verantwoordelijk voor het functioneel testen van onze software. Ook was ik sterk-->
                        betrokken bij het verfijnen van huidige applicaties en het schrijven/beheren van functionele ontwerpen en
                        documentatie.
                    </div>
                </div>
                <br>

                <h2>Opleidingen</h2>
                <p><b><em>2011 - 2016</em></b></p>
                <p>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#securityManagement" aria-expanded="false"
                            aria-controls="securityManagement">
                        Bachelor of Science (Security Management)
                    </button>
                </p>
                <div class="collapse" id="securityManagement">
                    <div class="card card-body">
                        Tijdens deze studie heb ik diverse specifieke Security vakken gevolgd, zoals bedrijfscontinu??teit en
                        risicomanagement. Het laatste studiejaar heb ik me gespecialiseerd in
                        cybersecurity door het volgen van de minor 'ICT & Security'.
                    </div>
                </div>
                <br>
                <h2>Cursussen</h2>
                <?php showCourses(); ?>
            </div>
        </div>

    </div>

</div>
</body>

</html>
