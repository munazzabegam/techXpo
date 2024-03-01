<?php include("./fetch.php");

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ../../forms/form3.php"); 
    exit(); 
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Revelations '24</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./reveletions.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <form action="./update.php" method="post">
        <div class="navBarTop">
            <p>Revelations '24</p>
            <i id="editBtn" onclick="enableEditing()" class="fa fa-pencil"></i>
            <button id="saveBtn" type="submit"><i class="fa fa-save"></i></button>
            </i>
        </div>
        <div class="waviy">
            <span style="--i:1">R</span>
            <span style="--i:2">E</span>
            <span style="--i:3">V</span>
            <span style="--i:4">E</span>
            <span style="--i:5">L</span>
            <span style="--i:6">A</span>
            <span style="--i:7">T</span>
            <span style="--i:8">I</span>
            <span style="--i:9">O</span>
            <span style="--i:10">N</span>
            <span style="--i:11">S</span>
            <span style="--i:12">'</span>
            <span style="--i:13">2</span>
            <span style="--i:14">4</span>
        </div>

        <div class="nothing"></div>

        <div class="updates">
            <div class=" mt-5 text-light">
                <h2 class="text-center mb-4">Event Registration</h2>
                <p class="lead mb-4">Before proceeding with the registration, please read and adhere to the following rules and regulations:</p>
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item">Participants must provide accurate and truthful information during registration.</li>
                    <li class="list-group-item">Each participant can only register for one competition category.</li>
                    <li class="list-group-item">Registrations submitted after the deadline will not be considered.</li>
                    <li class="list-group-item">Participants must agree to abide by the event's code of conduct and behavior guidelines.</li>
                    <li class="list-group-item">The event organizers reserve the right to disqualify any participant found violating the rules or engaging in misconduct.</li>
                </ol>
                <div class="mt-4">
                    <p class="text-light">By proceeding with the registration, participants acknowledge that they have read and understood the above rules and regulations.</p>
                </div>
            </div>

            <!-- pecil sketch and Vediography  -->
            <div class="row">
                <div class="sideContainers mt-5">
                    <div>
                        <div style="flex-direction: column;" class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">Pencil Sketch</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text"  value="<?php echo $SketchPart1; ?>" class="form-control" name="SketchPart1" data="name-f" placeholder="Enter Participant Name">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 2 Name</label>
                                <input type="text"  value="<?php echo $SketchPart2; ?>" class="form-control" name="SketchPart2" data="name-f" placeholder="Enter Participant Name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sideContainers mt-5">
                    <div style="flex-direction: column;" class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">VedioGraphy</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text" value="<?php echo $vediographyPart1   ?>" class="form-control" name="vediographyPart1" data="name-f" placeholder="Enter Participant Name">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text" value="<?php echo $vediographyPart1   ?>" class="form-control" name="vediographyPart1" data="name-f" placeholder="Enter Participant Name">
                            </div>
                        </div>
                </div>
            </div>

            <!-- freestyle | standup comedy  -->
            <div class="row">
                <div class="sideContainers mt-5">
                    <div>
                        <div style="flex-direction: column;" class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">Freestyle</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text" value="<?php echo $FreestylePart1   ?>" class="form-control" name="FreestylePart1" data="name-f" placeholder="Enter Participant Name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sideContainers mt-5">
                    <div>
                        <div style="flex-direction: column;" class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">Standup Comedy</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text" value="<?php echo $StandupPart1   ?>" class="form-control" name="StandupPart1" data="name-f" placeholder="Enter Participant Name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Photography | dumb charades  -->
            <div class="row">
                <div class="sideContainers mt-5">
                    <div>
                        <div style="flex-direction: column;" class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">Photography</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text" value="<?php echo $PhotographyPart1   ?>" class="form-control" name="PhotographyPart1" data="name-f" placeholder="Enter Participant Name">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sideContainers mt-5">
                    <div>
                        <div style="flex-direction: column;" class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">Dumb Charades</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text" value="<?php echo $DumbCharadesPart1   ?>" class="form-control" name="DumbCharadesPart1" data="name-f" placeholder="Enter Participant Name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mehendi | mimicry  -->

            <div class="row">
                <div class="sideContainers mt-5">
                    <div>
                        <div style="flex-direction: column;" class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">Mehendi Design</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text" value="<?php echo $MehendiPart1   ?>" class="form-control" name="MehendiPart1" data="name-f" placeholder="Enter Participant Name">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="sideContainers mt-5">
                    <div>
                        <div>
                        <div style="flex-direction: column;" class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">Mimicry</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text" value="<?php echo $MimicryPart1   ?>" class="form-control" name="MimicryPart1" data="name-f" placeholder="Enter Participant Name">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <!-- debate | fuits carving  -->

            <div class="row">
                <div class="sideContainers mt-5">
                    <div>
                        <div style="flex-direction: column;" class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">Debate</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text" value="<?php echo $DebatePart1   ?>" class="form-control" name="DebatePart1" data="name-f" placeholder="Enter Participant Name">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-l">Participant 2 Name</label>
                                <input type="text" value="<?php echo $DebatePart2   ?>" class="form-control" name="DebatePart2" data="name-l" placeholder="Enter Participant Name">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="sideContainers mt-5">
                    <div>
                        <div style="flex-direction: column;" class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">Fruits Carving</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text" value="<?php echo $FruitsPart1   ?>" class="form-control" name="FruitsPart1" data="name-f" placeholder="Enter Participant Name">
                            </div>
                            <div class="col-sm-12form-group">
                                <label for="name-l">Participant 2 Name</label>
                                <input type="text" value="<?php echo $FruitsPart2   ?>" class="form-control" name="FruitsPart2" data="name-l" placeholder="Enter Participant Name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- face painting and kite fest -->

            <div class="row">
                <div class="sideContainers mt-5">
                    <div>
                        <div style="flex-direction: column;" class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">Kite Fest</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text" value="<?php echo $kitePart1   ?>" class="form-control" name="kitePart1" data="name-f" placeholder="Enter Participant Name">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="sideContainers mt-5">
                    <div>
                        <div style="flex-direction: column;" class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">Face Painting</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text" value="<?php echo $FacePart1   ?>" class="form-control" name="FacePart1" data="name-f" placeholder="Enter Participant Name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- cooking without fire  and pookalam -->
            <div class="row">

                <div class="sideContainers mt-5">
                    <div>
                        <div style="flex-direction: column;" class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">Cooking without Fire</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text" value="<?php echo $cookingPart1   ?>" class="form-control" name="cookingPart1" data="name-f" placeholder="Enter Participant Name">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 2 Name</label>
                                <input type="text" value="<?php echo $cookingPart2  ?>" class="form-control" name="cookingPart2" data="name-f" placeholder="Enter Participant Name">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 3 Name</label>
                                <input type="text" value="<?php echo $cookingPart3  ?>" class="form-control" name="cookingPart3" data="name-f" placeholder="Enter Participant Name">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 4 Name</label>
                                <input type="text" value="<?php echo $cookingPart4   ?>" class="form-control" name="cookingPart4" data="name-f" placeholder="Enter Participant Name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sideContainers mt-5">
                    <div style="flex-direction: column;" class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">Pookalam</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="name-f">Participant 1 Name</label>
                                <input type="text" value="<?php echo $pookalamPart1   ?>" class="form-control" name="pookalamPart1" data="name-f" placeholder="Enter Participant Name">
                            </div>
                            <div class="col-sm-12form-group">
                                <label for="name-l">Participant 2 Name</label>
                                <input type="text" value="<?php echo $pookalamPart2   ?>" class="form-control" name="pookalamPart2" data="name-l" placeholder="Enter Participant Name">
                            </div>  <div class="col-sm-12form-group">
                                <label for="name-l">Participant 2 Name</label>
                                <input type="text" value="<?php echo $pookalamPart3   ?>" class="form-control" name="pookalamPart3" data="name-l" placeholder="Enter Participant Name">
                            </div>
                        </div> 
                    </div>
                    </div>
                </div>
            </div>

            <!-- solo song -->
            <div class="row">
                <div class="sideContainers mt-5">
                    <div>
                    <div style="flex-direction: column;" class="row jumbotron box8">
                                <div class="col-sm-12 mx-t3 mb-4">
                                    <h2 class="text-center text-info">Singing Solo/ Group</h2>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label for="name-f">Lead Name</label>
                                    <input type="text" value="<?php echo $SingingPart1   ?>" class="form-control" name="SingingPart1" data="name-f" placeholder="Enter Participant Name">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            
            <!-- girls dance -->
            <div class="container mt-5">
                <div>
                    <div class="row jumbotron box8">
                        <div class="col-sm-12 mx-t3 mb-4">
                            <h2 class="text-center text-info">Girls Dance</h2>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Participant 1 Name</label>
                            <input type="text" value="<?php echo $girlsdancePart1; ?>" class="form-control" name="girlsdancePart1" data="name-f" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-l">Participant 2 Name</label>
                            <input type="text" value="<?php echo $girlsdancePart2; ?>" class="form-control" name="girlsdancePart2" data="name-l" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email">Participant 3 Name</label>
                            <input type="text" value="<?php echo $girlsdancePart3; ?>" class="form-control" name="girlsdancePart3" data="email" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address-1">Participant 4 Name</label>
                            <input type="text" value="<?php echo $girlsdancePart4; ?>" class="form-control" name="girlsdancePart4" data="address-1" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address-2">Participant 5 Name</label>
                            <input type="text" value="<?php echo $girlsdancePart5; ?>" class="form-control" name="girlsdancePart5" data="address-2" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Participant 6 Name</label>
                            <input type="text" value="<?php echo $girlsdancePart6; ?>" class="form-control" name="girlsdancePart6" data="name-f" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="Country">Participant 7 Name</label>
                            <input type="text" value="<?php echo $girlsdancePart7; ?>" class="form-control" name="girlsdancePart7" data="Country" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-g">Participant 8 Name</label>
                            <input type="text" value="<?php echo $girlsdancePart8; ?>" class="form-control" name="girlsdancePart8" data="name-g" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="Country">Participant 7 Name</label>
                            <input type="text" value="<?php echo $girlsdancePart9; ?>" class="form-control" name="girlsdancePart9" data="Country" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-g">Participant 8 Name</label>
                            <input type="text" value="<?php echo $girlsdancePart10; ?>" class="form-control" name="girlsdancePart10" data="name-g" placeholder="Enter Participant Name">
                        </div>
                    </div>
                </div>

            </div>
            <!-- dance form  -->
            <div class="container mt-5">
                <div>
                    <div class="row box8">
                        <div class="col-sm-12 mx-t3 mb-4">
                            <h2 class="text-center text-info">Dance</h2>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Participant 1 Name: </label>
                            <input type="text" value="<?php echo $DancePart1; ?>" class="form-control" name="DancePart1" data="name-f" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-l">Participant 2 Name: </label>
                            <input type="text" value="<?php echo $DancePart2; ?>" class="form-control" name="DancePart2" data="name-l" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email">Participant 3 Name: </label>
                            <input type="text" value="<?php echo $DancePart3; ?>" class="form-control" name="DancePart3" data="email" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address-1">Participant 4 Name: </label>
                            <input type="text" value="<?php echo $DancePart4; ?>" class="form-control" name="DancePart4" data="address-1" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address-2">Participant 5 Name: </label>
                            <input type="text" value="<?php echo $DancePart5; ?>" class="form-control" name="DancePart5" data="address-2" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Participant 6 Name: </label>
                            <input type="text" value="<?php echo $DancePart6; ?>" class="form-control" name="DancePart6" data="name-f" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-g">Participant 7 Name: </label>
                            <input type="text" value="<?php echo $DancePart7; ?>" class="form-control" name="DancePart7" data="name-g" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-h">Participant 8 Name: </label>
                            <input type="text" value="<?php echo $DancePart8; ?>" class="form-control" name="DancePart8" data="name-h" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-i">Participant 9 Name: </label>
                            <input type="text" value="<?php echo $DancePart9; ?>" class="form-control" name="DancePart9" data="name-i" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-j">Participant 10 Name: </label>
                            <input type="text" value="<?php echo $DancePart10; ?>" class="form-control" name="DancePart10" data="name-j" placeholder="Enter Participant Name">
                        </div>
                    </div>

                </div>
            </div>

            <!-- mime  show -->
            <div class="container mt-5">
                <div>
                    <div class="row jumbotron box8">
                        <div class="col-sm-12 mx-t3 mb-4">
                            <h2 class="text-center text-info">Mime Show</h2>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Participant 1 Name</label>
                            <input type="text" value="<?php echo $MimePart1; ?>" class="form-control" name="MimePart1" data="name-f" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-l">Participant 2 Name</label>
                            <input type="text" value="<?php echo $MimePart2; ?>" class="form-control" name="MimePart2" data="name-l" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email">Participant 3 Name</label>
                            <input type="text" value="<?php echo $MimePart3; ?>" class="form-control" name="MimePart3" data="email" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address-1">Participant 4 Name</label>
                            <input type="text" value="<?php echo $MimePart4; ?>" class="form-control" name="MimePart4" data="address-1" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address-2">Participant 5 Name</label>
                            <input type="text" value="<?php echo $MimePart5; ?>" class="form-control" name="MimePart5" data="address-2" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Participant 6 Name</label>
                            <input type="text" value="<?php echo $MimePart6; ?>" class="form-control" name="MimePart6" data="name-f" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-g">Participant 7 Name</label>
                            <input type="text" value="<?php echo $MimePart7; ?>" class="form-control" name="MimePart7" data="name-g" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-h">Participant 8 Name</label>
                            <input type="text" value="<?php echo $MimePart8; ?>" class="form-control" name="MimePart8" data="name-h" placeholder="Enter Participant Name">
                        </div>
                    </div>
                </div>
            </div>
            <!-- ramp walk -->

            <div class="container mt-5">
                <div>
                    <div class="row jumbotron box8">
                        <div class="col-sm-12 mx-t3 mb-4">
                            <h2 class="text-center text-info">Traditional Outfit Ramp Walk</h2>
                    </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Participant 1 Name</label>
                            <input type="text" value="<?php echo $RampPart1; ?>" class="form-control" name="RampPart1" data="name-f" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-l">Participant 2 Name</label>
                            <input type="text" value="<?php echo $RampPart2; ?>" class="form-control" name="RampPart2" data="name-l" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email">Participant 3 Name</label>
                            <input type="text" value="<?php echo $RampPart3; ?>" class="form-control" name="RampPart3" data="email" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address-1">Participant 4 Name</label>
                            <input type="text" value="<?php echo $RampPart4; ?>" class="form-control" name="RampPart4" data="address-1" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address-2">Participant 5 Name</label>
                            <input type="text" value="<?php echo $RampPart5; ?>" class="form-control" name="RampPart5" data="address-2" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Participant 6 Name</label>
                            <input type="text" value="<?php echo $RampPart6; ?>" class="form-control" name="RampPart6" data="name-f" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-g">Participant 7 Name</label>
                            <input type="text" value="<?php echo $RampPart7; ?>" class="form-control" name="RampPart7" data="name-g" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-h">Participant 8 Name</label>
                            <input type="text" value="<?php echo $RampPart8; ?>" class="form-control" name="RampPart8" data="name-h" placeholder="Enter Participant Name">
                        </div>
                    </div>
                </div>
            </div>

            <!-- karoke -->
            <div class="container mt-5">
                <div>
                        <div class="row jumbotron box8">
                            <div class="col-sm-12 mx-t3 mb-4">
                                <h2 class="text-center text-info">Group Song Karoke</h2>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Participant 1 Name</label>
                            <input type="text" value="<?php echo $karokePart1; ?>" class="form-control" name="karokePart1" data="name-f" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-l">Participant 2 Name</label>
                            <input type="text" value="<?php echo $karokePart2; ?>" class="form-control" name="karokePart2" data="name-l" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email">Participant 3 Name</label>
                            <input type="text" value="<?php echo $karokePart3; ?>" class="form-control" name="karokePart3" data="email" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address-1">Participant 4 Name</label>
                            <input type="text" value="<?php echo $karokePart4; ?>" class="form-control" name="karokePart4" data="address-1" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address-2">Participant 5 Name</label>
                            <input type="text" value="<?php echo $karokePart5; ?>" class="form-control" name="karokePart5" data="address-2" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Participant 6 Name</label>
                            <input type="text" value="<?php echo $karokePart6; ?>" class="form-control" name="karokePart6" data="name-f" placeholder="Enter Participant Name">
                        </div>
                    </div>
                </div>
            </div>

            <!-- short movies -->
            <div class="container mt-5">
                <div>
                    <div class="row jumbotron box8">
                        <div class="col-sm-12 mx-t3 mb-4">
                            <h2 class="text-center text-info">Short Movie</h2>
                    </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Participant 1 Name</label>
                            <input type="text" value="<?php echo $moviePart1; ?>" class="form-control" name="moviePart1" data="name-f" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-l">Participant 2 Name</label>
                            <input type="text" value="<?php echo $moviePart2; ?>" class="form-control" name="moviePart2" data="name-l" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email">Participant 3 Name</label>
                            <input type="text" value="<?php echo $moviePart3; ?>" class="form-control" name="moviePart3" data="email" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address-1">Participant 4 Name</label>
                            <input type="text" value="<?php echo $moviePart4; ?>" class="form-control" name="moviePart4" data="address-1" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address-2">Participant 5 Name</label>
                            <input type="text" value="<?php echo $moviePart5; ?>" class="form-control" name="moviePart5" data="address-2" placeholder="Enter Participant Name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Participant 6 Name</label>
                            <input type="text" value="<?php echo $moviePart6; ?>" class="form-control" name="moviePart6" data="name-f" placeholder="Enter Participant Name">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5"></div>


        </div><!-- updates end -->

    </form>
    <div class="logout"><a href="./logout.php">Logout</a></div>

    <footer style="width: 100vw;" class="footer-section">

        <div class="copyright-area">
            <div class="container">
                <div class="row footerRow">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2024, All Right Reserved <a href="#">TechXpo</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right rightContent">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="https://codewizy.in"><img class="codeWizyCred" height="50" src="../../images/codewizycredits.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <a class="phoneLogo" href="https://codewizy.in"><img src="../../images/codewizycredits.png" alt=""></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./revelations.js"></script>
</body>

</html>