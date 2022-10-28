    <?php
    require "conn.php";
    if (!isset($_GET['age1'])) {
        $agePR = "";
    } else {
        $agePR = $_GET['age1'];
    }
    if (!isset($_GET['age2'])) {
        $agesc = "";
    } else {
        $agesc = $_GET['age2'];
    }
    if (!isset($_GET['yearReclamataion'])) {
        $yearRec = "";
    } else {
        $yearRec = $_GET['yearReclamataion'];
    }
    if (!isset($_GET['idCategorie'])) {
        $idCategorieAge = "";
    } else {
        $idCategorieAge = $_GET['idCategorie'];
    }



    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>


        <link rel="stylesheet" href="style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.10.1/d3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.js" integrity="sha512-+IpCthlNahOuERYUSnKFjzjdKXIbJ/7Dd6xvUp+7bEw0Jp2dg6tluyxLs+zq9BMzZgrLv8886T4cBSqnKiVgUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.css" integrity="sha512-cznfNokevSG7QPA5dZepud8taylLdvgr0lDqw/FEZIhluFsSwyvS81CMnRdrNSKwbsmc43LtRd2/WMQV+Z85AQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--=====================================CSS============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <style type="text/css">
            .xxx:hover {
                border: 1px solid green;
                border-radius: 15px;
                padding-left: 15px;
            }

            .myButton {
                box-shadow: 0px 10px 14px -7px #3e7327;
                background: linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
                background-color: #77b55a;
                border-radius: 5px;
                border: 1px solid #4b8f29;
                display: inline-block;
                cursor: pointer;
                color: #ffffff;
                font-family: Arial;
                font-size: 13px;
                font-weight: bold;
                padding: 6px 20px;
                text-decoration: none;
                text-shadow: 0px 1px 0px #5b8a3c;
            }

            .sidNav {
                min-height: 100vh;
                background: linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
            }

            .myButton:hover {
                background: linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
                background-color: #72b352;
            }

            .myButton:active {
                position: relative;
                top: 1px;
            }

            .txt {
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                /* number of lines to show */
                -webkit-box-orient: vertical;
            }

            body {
                background-color: whitesmoke;
                margin: 0;
                padding: 0;
            }

            .background {
                background-color: #ffffff;
                border-bottom-left-radius: 10px;
                border-top-left-radius: 10px;

                border-bottom-right-radius: 10px;
                border-top-right-radius: 10px;
            }

            .main {
                margin-left: 160px;
                /* Same as the width of the sidenav */
                font-size: 28px;
                /* Increased text to enable scrolling */
                padding: 0px 10px;
            }
        </style>
    </head>
    <!-- -->

    <body onload="loaded()">

        <header id="header" id="home" style="max-height: 80px;">

            <div class="container-fluid mt-1 main-menu">
                <div class="row align-items-center justify-content-between d-flex">

                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <!--<li style="margin-bottom: -10px;margin-top: -7px;"><span id="logochu"><a href="index.html"><img src="img/logo.png" alt="" title="" style="border-radius: 10px;" /></a></span></li>-->
                            <li class="menu-active"><a href="index.php">Home</a></li>
                            <li class="menu-has-children"><a href="">Article</a>
                                <ul>
                                    <li class="xxx"><a href="publique/sinformer.php">informe us</a></li>
                                    <li class="xxx"><a href="publique/Articles.php">news</a></li>
                                </ul>
                            </li>
                            <li class="menu-has-children"><a href="">declare</a>
                                <ul>
                                    <li class="xxx"><a href="formulaire_responsive/formulaireResponsive.html">personnel de santé</a></li>
                                    <li class="xxx"><a href="formulaire_responsive/formulaireResponsive2.html">Patient</a></li>
                                </ul>
                            </li>
                            <li><a href="#apprp">about us</a></li>
                        </ul>
                    </nav><!-- #nav-menu-container -->

                    <!-- Login -->
                    <div id="commentcm">
                        <a href="Loginhtml(chu)/Login.php">log out</a>
                    </div>
                </div>
            </div>
        </header>
        <div class="d-flex pt-3">
            <div class="d-flex flex-column col-2 sidNav  mt-4  ">
                <div class="border-bottom border-white py-3">
                    <h6 class="d-flex justify-content-start text-white pt-2 pb-2" for="">choose category</h6>
                    <select class="form-control" class="input form-control" style="width:90%" name="idCategorieAge" id="age" onchange="myFunction()">
                        <option class="text-center" value=""> all</option>
                        <option class="text-center" value="1"> Children</option>
                        <option class="text-center" value="2"> Adults</option>
                        <option class="text-center" value="3"> Elderly</option>


                    </select>
                </div>


                <div class="pt-3 border-bottom border-white py-3" id="intervalAge" style="display:block;" onchange="myFunction()">


                    <div class="d-flex  m-2 ">

                        <div class="d-flex flex-column">

                            <h5 class="d-flex justify-content-center text-white m-1 font-weight-bold" for=""> insert age</h5>

                            <label class="d-flex justify-content-start text-white m-1" for=""> from</label>
                            <input style="width:80%" type="number" name="age1PHP " id="age1" value="<?= $agePR ?>" onchange="myFunction()">
                            <label class="d-flex justify-content-start text-white m-1" for="">to</label>
                            <input style="width:80%" type="number" name="age2PHP" id="age2" value="<?= $agesc ?>" onchange="myFunction()">
                        </div>


                    </div>
                </div>

                <div class="border-bottom border-white py-3">
                    <h6 class="d-flex justify-content-start text-white pt-2  pb-2" for="">choose year</h6>
                    <select class="form-control" class="input form-control" style="width:90%" name="" id="yearSelect" onchange="myFunction()">
                        <option class="text-center" selected value="">all</option>
                        <?php
                        $queryGetAllYears = "SELECT YEAR(dateReclamation) as 'year'from   formulaire
                GROUP BY YEAR(dateReclamation)";
                        $statementGetAllYears = $con->prepare($queryGetAllYears);
                        $statementGetAllYears->execute();
                        $GetAllYears = $statementGetAllYears->fetchall();
                        foreach ($GetAllYears as $year) {
                        ?>
                            <option class="text-center"><?= $year["year"] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="m-2">
                    <h6 class="d-flex justify-content-start text-white pt-2  pb-2" for="">choose display</h6>
                    <select class="input form-control text-center" style="width:90%" name="" id="affichage" onchange="myFunction()">
                        <option value="">all</option>
                        <option value="1">Men/women</option>
                        <option value="2">Patient/employe</option>
                        <option value="3">death</option>
                        <option value="4">Healing</option>
                        <option value="5">monthly</option>
                        <option value="6">yearly</option>
                    </select>
                </div>


            </div>

            <div class="col-10 pt-4">
                <h1 class="text-center text-primary pt-5 ">Dashboard analytics </h1>
                <div class="d-flex justify-content-center  m-0 pt-5">

                    <div class="d-flex flex-column background  m-1  p-3 col-3" id="femmeHomme">
                        <h6 class=" text-center  "> claims by men/women </h6>
                        <div class="d-flex justify-content-center" id="chart1"></div>
                    </div>


                    <div class="d-flex flex-column background m-1 p-3  col-3" id="patientPersonnel">
                        <h6 class=" text-center  "> claims by patient/employe </h6>
                        <div class="d-flex justify-content-center " id="chart3"></div>
                    </div>



                    <div class="d-flex flex-column  background  m-1  p-3 col-3 " id="Décès">
                        <h6 class="text-center"> death</h6>

                        <div class="d-flex justify-content-center  my-auto" id="chart4"> </div>

                    </div>

                    <div class="d-flex flex-column background  m-1 p-3  col-3" id="Guérison">
                        <h6 class="text-center "> Healing</h6>

                        <div class="d-flex justify-content-center my-auto" id="chart5"> </div>

                    </div>

                </div>
                <div class="pt-5">

                </div>

                <div class="d-flex justify-content-between pt-5">
                    <div class="d-flex flex-column justify-content-center background  m-1 mb-5 p-3 col-6 " id="parMois">
                        <?php
                        if (empty($yearRec)) {
                        ?>
                            <h6 class="text-center mt-5"> claims by month(year <?= date('Y') ?> )</h6>
                        <?php
                        } else {
                        ?>
                            <h6 class="text-center mt-5"> claims by each month(year <?= $_GET["yearReclamataion"] ?>)</h6>
                        <?php
                        }
                        ?>

                        <div class="d-flex justify-content-center mt-5 " id="chart2"> </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center background  m-1 mb-5 p-3  col-6" id="parAnnes">
                        <h6 class="text-center mt-5"> claims yearly</h6>

                        <div class="d-flex justify-content-center mt-5 " id="chart6"> </div>
                    </div>
                </div>
            </div>

        </div>
    </body>

    </html>
    <script type="text/javascript">
        var chart1 = c3.generate({
            bindto: "#chart1",
            data: {
                columns: [
                    <?php


                    ?>['men', 0],
                    ['women', 0],
                    <?php


                    ?>

                ],
                type: 'pie'

            },
            pie: {
                label: {
                    format: function(value, ratio, id) {
                        return d3.format('')(value);
                    }
                }
            }
        });

        setTimeout(function() {
            chart1.load({

                columns: [

                    <?php {
                        $ageBetweenQeury = "true";
                        $yearQeury = "true";


                        if (!empty($agePR) && !empty($agesc)) {
                            $ageBetweenQeury = "Age between $agePR and $agesc";
                        }
                        if (!empty($yearRec)) {
                            $yearQeury = "YEAR(dateReclamation)=$yearRec";
                        }

                        if (!empty($idCategorieAge)) {
                            if ($idCategorieAge == 1) {
                                $ageBetweenQeury = "Age between 00 and 17";
                            } else if ($idCategorieAge == 2) {
                                $ageBetweenQeury = "Age between 18 and 59";
                            } else  if ($idCategorieAge == 3) {
                                $ageBetweenQeury = "Age between 60 and 160";
                            }
                        }


                        $querySexHomme = " SELECT count(*) FROM chu.formulaire
    where Sexe like 'Homme' and {$ageBetweenQeury} and {$yearQeury}";

                        $statSexHomme = $con->prepare($querySexHomme);
                        $statSexHomme->execute();
                        $dataSexHomme = $statSexHomme->fetchall();
                        $countSexHomme = $dataSexHomme[0][0];

                        $querySexFemme = "SELECT count(*) FROM chu.formulaire
    where Sexe like 'Femme' and  {$ageBetweenQeury} and {$yearQeury}";

                        $statSexFemme = $con->prepare($querySexFemme);
                        $statSexFemme->execute();
                        $dataSexFemme = $statSexFemme->fetchall();
                        $countSexFemme = $dataSexFemme[0][0];

                    ?>['men', <?= $countSexHomme ?>],
                        ['women', <?= $countSexFemme ?>],

                    <?php
                    }

                    ?>
                ]
            });
        }, 1000);
        /*-----------------------------------------------------------------*/
    </script>
    <script type="text/javascript">
        var chart3 = c3.generate({
            bindto: "#chart3",
            data: {
                columns: [
                    <?php


                    ?>['patient', 0],
                    ['employe', 0],
                    <?php


                    ?>

                ],
                type: 'pie'

            },
            pie: {
                label: {
                    format: function(value, ratio, id) {
                        return d3.format('')(value);
                    }
                }
            }
        });

        setTimeout(function() {
            chart3.load({

                columns: [

                    <?php {

                        $ageBetweenQeury = "true";
                        $yearQeury = "true";


                        if (!empty($agePR) && !empty($agesc)) {
                            $ageBetweenQeury = "Age between $agePR and $agesc";
                        }
                        if (!empty($yearRec)) {
                            $yearQeury = "YEAR(dateReclamation)=$yearRec";
                        }
                        if (!empty($idCategorieAge)) {
                            if ($idCategorieAge == 1) {
                                $ageBetweenQeury = "Age between 00 and 17";
                            }
                            if ($idCategorieAge == 2) {
                                $ageBetweenQeury = "Age between 18 and 59";
                            }
                            if ($idCategorieAge == 3) {
                                $ageBetweenQeury = "Age between 60 and 160";
                            }
                        }


                        $queryCountPersonnel = "SELECT count(*) as 'nombreReclamationPersonnel'
    from formulaire  where Profil <>'' and  {$ageBetweenQeury} and {$yearQeury}";

                        $statCountPersonnel = $con->prepare($queryCountPersonnel);
                        $statCountPersonnel->execute();
                        $dataCountPersonnel = $statCountPersonnel->fetchall();
                        $countCountPersonnel = $dataCountPersonnel[0][0];


                        $queryCountPatient = "SELECT count(*) as 'nombreReclamationPatient'
        from formulaire 
        where Profil is NULL and  {$ageBetweenQeury} and {$yearQeury}";

                        $statCountPatient = $con->prepare($queryCountPatient);
                        $statCountPatient->execute();
                        $dataCountPatient = $statCountPatient->fetchall();
                        $countCountPatient = $dataCountPatient[0][0];


                    ?>['patient', <?= $countCountPatient ?>],
                        ['employe', <?= $countCountPersonnel ?>],

                    <?php
                    }

                    ?>
                ]
            });
        }, 1000);
    </script>

    <script>
        var chart2 = c3.generate({
            bindto: "#chart2",
            data: {

                columns: [
                    <?php


                    for ($i = 1; $i <= 12; $i++) {

                        $dateObj   = DateTime::createFromFormat('!m', $i);
                        $monthName = $dateObj->format('F');
                    ?>['<?= $monthName ?>', 0],
                    <?php
                    }

                    ?>
                ],

                type: 'bar',
                colors: {
                    data1: '#ff0000',
                    data2: '#00ff00',
                    data3: '#0000ff'
                },
                labels: true
            }
        });
        setTimeout(function() {
            chart2.load({
                columns: [
                    <?php
                    if (!empty($agePR) && !empty($agesc)) {
                        $ageBetweenQeury = "Age between $agePR and $agesc";
                    }
                    if (!empty($yearRec)) {
                        $yearQeury = "YEAR(dateReclamation)=$yearRec";
                    }
                    for ($i = 1; $i <= 12; $i++) {
                        if (empty($yearRec)) {
                            $queryMonthReclamation = "SELECT count(*)   FROM formulaire  WHERE  YEAR(dateReclamation)=year(curdate()) and MONTH(dateReclamation)=$i";
                            $statMonthReclamation = $con->prepare($queryMonthReclamation);
                            $statMonthReclamation->execute();
                            $dataMonthReclamation = $statMonthReclamation->fetchall();
                            $countMonthReclamation = $dataMonthReclamation[0][0];
                        } else {
                            $queryMonthReclamation = "SELECT count(*)   FROM formulaire  WHERE  {$yearQeury} and MONTH(dateReclamation)=$i";
                            $statMonthReclamation = $con->prepare($queryMonthReclamation);
                            $statMonthReclamation->execute();
                            $dataMonthReclamation = $statMonthReclamation->fetchall();
                            $countMonthReclamation = $dataMonthReclamation[0][0];
                        }


                        $dateObj   = DateTime::createFromFormat('!m', $i);
                        $monthName = $dateObj->format('F');
                    ?>['<?= $monthName ?>', <?= $countMonthReclamation ?>],
                    <?php
                    }

                    ?>

                ]
            });
        }, 1000);
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        <?php

        $queryGetYears = "SELECT YEAR(dateReclamation),dateReclamation from   formulaire
 
GROUP BY YEAR(dateReclamation)";
        $statGetYears = $con->prepare($queryGetYears);
        $statGetYears->execute();
        $dataGetYears = $statGetYears->fetchall();

        ?>
        var chart6 = c3.generate({
            bindto: "#chart6",
            data: {
                x: 'x',
                columns: [
                    ['x'
                        <?php
                        foreach ($dataGetYears as $data) {
                            $queryCountYear = "SELECT dateReclamation,count(*)  as'NBR REC' FROM formulaire
                         where  YEAR(dateReclamation)=$data[0] ";
                            $statCountYear = $con->prepare($queryCountYear);
                            $statCountYear->execute();
                            $dataCountYear = $statCountYear->fetchall();



                        ?>, "<?= $dataCountYear[0][0] ?>"
                        <?php

                        }
                        ?>
                    ],



                    ['claims'
                        <?php
                        foreach ($dataGetYears as $data) {
                            $queryCountYear = "SELECT dateReclamation,count(*)  as'NBR REC' FROM formulaire
                         where  YEAR(dateReclamation)=$data[0] ";
                            $statCountYear = $con->prepare($queryCountYear);
                            $statCountYear->execute();
                            $dataCountYear = $statCountYear->fetchall();



                        ?>, <?= $dataCountYear[0][1] ?>
                        <?php

                        }
                        ?>
                    ],
                    ['healed'
                        <?php
                        foreach ($dataGetYears as $data) {
                            $queryCountYear = "SELECT dateReclamation,count(*)  as'NBR REC' FROM formulaire
                        where Evolution like 'Guerison sans sequelle'  and YEAR(dateReclamation)=$data[0] ";
                            $statCountYear = $con->prepare($queryCountYear);
                            $statCountYear->execute();
                            $dataCountYear = $statCountYear->fetchall();



                        ?>, <?= $dataCountYear[0][1] ?>
                        <?php

                        }
                        ?>
                    ],
                    ['death'
                        <?php
                        foreach ($dataGetYears as $data) {
                            $queryCountYear = "SELECT dateReclamation,count(*)  as'NBR REC' FROM formulaire
                        where Evolution like 'Deces du a leffet'  and YEAR(dateReclamation)=$data[0] ";
                            $statCountYear = $con->prepare($queryCountYear);
                            $statCountYear->execute();
                            $dataCountYear = $statCountYear->fetchall();



                        ?>, <?= $dataCountYear[0][1] ?>
                        <?php

                        }
                        ?>
                    ],

                ]
            },
            axis: {
                x: {
                    type: 'timeseries',
                    tick: {
                        format: function(x) {
                            return x.getFullYear();
                        }
                        //format: '%Y' // format string is also available for timeseries data
                    }
                }
            }
        });
    </script>



    <script>
        var chart4 = c3.generate({
            bindto: "#chart4",
            data: {
                <?php
                $queryNbrRec = "SELECT count(*)   FROM formulaire ";
                $statNbrRec = $con->prepare($queryNbrRec);
                $statNbrRec->execute();
                $dataNbrRec = $statNbrRec->fetchall();
                $countNbrRec = $dataNbrRec[0][0];

                ?>
                columns: [
                    ['death', 0]
                ],
                type: 'gauge',
                onclick: function(d, i) {
                    console.log("onclick", d, i);
                },
                onmouseover: function(d, i) {
                    console.log("onmouseover", d, i);
                },
                onmouseout: function(d, i) {
                    console.log("onmouseout", d, i);
                }
            },
            gauge: {
                label: {
                    format: function(value, ratio) {
                        return value;
                    },
                    show: true // to turn off the min/max labels.
                },
                //    min: 0, // 0 is default, //can handle negative min e.g. vacuum / voltage / current flow / rate of change
                max: <?= $countNbrRec ?>, // 100 is default
                units: 'death',
                //    width: 39 // for adjusting arc thickness
            },
            color: {
                pattern: ['#FF0000', '#F97600', '#F6C600', '#60B044'], // the three color levels for the percentage values.
                threshold: {
                    //            unit: 'value', // percentage is default
                    //            max: 200, // 100 is default
                    values: [30, 60, 90, 100]
                }
            },
            size: {
                height: 180
            }
        });

        setTimeout(function() {
            chart4.load({
                <?php
                $ageBetweenQeury = "true";
                $yearQeury = "true";


                if (!empty($agePR) && !empty($agesc)) {
                    $ageBetweenQeury = "Age between $agePR and $agesc";
                }
                if (!empty($yearRec)) {
                    $yearQeury = "YEAR(dateReclamation)=$yearRec";
                }
                //    $idCategorieAge = $_GET["idCategorie"];
                if (!empty($idCategorieAge)) {
                    if ($idCategorieAge == 1) {
                        $ageBetweenQeury = "Age between 00 and 17";
                    }
                    if ($idCategorieAge == 2) {
                        $ageBetweenQeury = "Age between 18 and 59";
                    }
                    if ($idCategorieAge == 3) {
                        $ageBetweenQeury = "Age between 60 and 160";
                    }
                }


                $queryNbrMort = "SELECT count(*)   FROM formulaire  WHERE Evolution like 'Deces du a leffet'  and  {$ageBetweenQeury} and {$yearQeury}";
                $statNbrMort = $con->prepare($queryNbrMort);
                $statNbrMort->execute();
                $dataNbrMort = $statNbrMort->fetchall();
                $countNbrMort = $dataNbrMort[0][0];

                ?>
                columns: [
                    ['death', <?= $countNbrMort ?>]
                ]
            });
        }, 1000);
    </script>


    <script>
        var chart5 = c3.generate({
            bindto: "#chart5",
            data: {
                <?php
                $queryNbrRec = "SELECT count(*)   FROM formulaire ";
                $statNbrRec = $con->prepare($queryNbrRec);
                $statNbrRec->execute();
                $dataNbrRec = $statNbrRec->fetchall();
                $countNbrRec = $dataNbrRec[0][0];
                ?>
                columns: [
                    ['healed', 0]
                ],
                type: 'gauge',
                onclick: function(d, i) {
                    console.log("onclick", d, i);
                },
                onmouseover: function(d, i) {
                    console.log("onmouseover", d, i);
                },
                onmouseout: function(d, i) {
                    console.log("onmouseout", d, i);
                }
            },
            gauge: {
                label: {
                    format: function(value, ratio) {
                        return value;
                    },
                    show: true // to turn off the min/max labels.
                },
                //    min: 0, // 0 is default, //can handle negative min e.g. vacuum / voltage / current flow / rate of change
                max: <?= $countNbrRec ?>, // 100 is default
                units: 'healed',
                //    width: 39 // for adjusting arc thickness
            },
            color: {
                pattern: ['#FF0000', '#F97600', '#F6C600', '#60B044'], // the three color levels for the percentage values.
                threshold: {
                    //            unit: 'value', // percentage is default
                    //            max: 200, // 100 is default
                    values: [30, 60, 90, 100]
                }
            },
            size: {
                height: 180
            }
        });

        setTimeout(function() {
            chart5.load({
                <?php
                $ageBetweenQeury = "true";
                $yearQeury = "true";


                if (!empty($agePR) && !empty($agesc)) {
                    $ageBetweenQeury = "Age between $agePR and $agesc";
                }
                if (!empty($yearRec)) {
                    $yearQeury = "YEAR(dateReclamation)=$yearRec";
                }
                //  $idCategorieAge = $_GET["idCategorie"];
                if (!empty($idCategorieAge)) {
                    if ($idCategorieAge == 1) {
                        $ageBetweenQeury = "Age between 00 and 17";
                    }
                    if ($idCategorieAge == 2) {
                        $ageBetweenQeury = "Age between 18 and 59";
                    }
                    if ($idCategorieAge == 3) {
                        $ageBetweenQeury = "Age between 60 and 160";
                    }
                }


                $queryNbrVivre = "SELECT count(*)   FROM formulaire  WHERE Evolution like 'Guerison sans sequelle'  and  {$ageBetweenQeury} and {$yearQeury}";
                $statNbrVivre = $con->prepare($queryNbrVivre);
                $statNbrVivre->execute();
                $dataNbrVivre = $statNbrVivre->fetchall();
                $countNbrVivre = $dataNbrVivre[0][0];

                ?>
                columns: [
                    ['healed', <?= $countNbrVivre ?>]
                ]
            });
        }, 1000);
    </script>



    <script language="javascript" type="text/javascript">
        function myFunction() {
            var firstAge = document.getElementById("age1").value;
            var secondAge = document.getElementById("age2").value;
            var age = document.getElementById('age');
            var idAge = age[age.selectedIndex].value;
            var year = document.getElementById('yearSelect').value;
            var affichage = document.getElementById('affichage').value;

            window.location.href = ` http://localhost/stage/statistique.php?age1=${firstAge}&age2=${secondAge}&yearReclamataion=${year}&idCategorie=${idAge}&affichage=${affichage}`;


        }


        function getquerystring(querystr) {
            const urlParams = new URLSearchParams(window.location.search);
            const val = urlParams.get(querystr);
            return val;
        }

        function hideDiv() {
            var affichage = getquerystring('affichage');

            var hommeFemme = document.getElementById("femmeHomme");
            var patientPersonnel = document.getElementById("patientPersonnel");
            var deces = document.getElementById("Décès");
            var guerison = document.getElementById("Guérison");
            var mois = document.getElementById("parMois");
            var annes = document.getElementById("parAnnes");



            if (affichage == 1) {
                hommeFemme.style.setProperty('display', 'block', 'important');
                patientPersonnel.style.setProperty('display', 'none', 'important');
                deces.style.setProperty('display', 'none', 'important');
                guerison.style.setProperty('display', 'none', 'important');
                mois.style.setProperty('display', 'none', 'important');
                annes.style.setProperty('display', 'none', 'important');

            } else if (affichage == 2) {
                patientPersonnel.style.setProperty('display', 'block', 'important');
                hommeFemme.style.setProperty('display', 'none', 'important');
                deces.style.setProperty('display', 'none', 'important');
                guerison.style.setProperty('display', 'none', 'important');
                mois.style.setProperty('display', 'none', 'important');
                annes.style.setProperty('display', 'none', 'important');
            } else if (affichage == 3) {
                deces.style.setProperty('display', 'block', 'important');
                hommeFemme.style.setProperty('display', 'none', 'important');
                patientPersonnel.style.setProperty('display', 'none', 'important');
                guerison.style.setProperty('display', 'none', 'important');
                mois.style.setProperty('display', 'none', 'important');
                annes.style.setProperty('display', 'none', 'important');
            } else if (affichage == 4) {
                guerison.style.setProperty('display', 'block', 'important');
                hommeFemme.style.setProperty('display', 'none', 'important');
                patientPersonnel.style.setProperty('display', 'none', 'important');
                deces.style.setProperty('display', 'none', 'important');
                mois.style.setProperty('display', 'none', 'important');
                annes.style.setProperty('display', 'none', 'important');
            } else if (affichage == 5) {
                mois.style.setProperty('display', 'block', 'important');
                hommeFemme.style.setProperty('display', 'none', 'important');
                patientPersonnel.style.setProperty('display', 'none', 'important');
                deces.style.setProperty('display', 'none', 'important');
                guerison.style.setProperty('display', 'none', 'important');
                annes.style.setProperty('display', 'none', 'important');
                mois.position = "fixed";
                mois.style.left = "50%";
                mois.style.right = "50%";
                mois.style.top = '100px';
                mois.style.setProperty('transform', 'translate(-50%, -50%)');

            } else if (affichage == 6) {
                annes.style.setProperty('display', 'block', 'important');
                hommeFemme.style.setProperty('display', 'none', 'important');
                patientPersonnel.style.setProperty('display', 'none', 'important');
                deces.style.setProperty('display', 'none', 'important');
                guerison.style.setProperty('display', 'none', 'important');
                mois.style.setProperty('display', 'none', 'important');
                annes.position = "fixed";
                annes.style.left = "50%";
                annes.style.right = "50%";
                annes.style.top = '100px';
                annes.style.setProperty('transform', 'translate(-50%, -50%)');
            } else {
                annes.style.setProperty('display', 'block', 'important');
                hommeFemme.style.setProperty('display', 'block', 'important');
                patientPersonnel.style.setProperty('display', 'block', 'important');
                deces.style.setProperty('display', 'block', 'important');
                guerison.style.setProperty('display', 'block', 'important');
                mois.style.setProperty('display', 'block', 'important');
            }

        }



        function loaded() {

            var affichageSelectedId = getquerystring('affichage');
            var affichageOptions = document.getElementById('affichage');
            affichageOptions.selectedIndex = affichageSelectedId;

            var yearSelectedId = getquerystring('yearReclamataion');
            if (typeof yearSelectedId !== "undefined" && yearSelectedId !== null) {
                var yearOptions = document.getElementById('yearSelect');
                yearOptions.value = yearSelectedId;
            } else {
                yearOptions.selectedIndex = 0;
            }



            var categorySelectedId = getquerystring('idCategorie');
            var categoryOptions = document.getElementById('age');
            categoryOptions.selectedIndex = categorySelectedId;

            var age = document.getElementById('age');
            var idAge = age[age.selectedIndex].value;
            var x = document.getElementById("intervalAge");
            if (idAge == "") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }

            hideDiv();



        }
    </script>