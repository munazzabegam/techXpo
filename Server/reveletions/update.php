<?php
session_start(); // Start the session

include("../config.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
$email = $_SESSION['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $DancePart1 = $_POST['DancePart1'];
    $DancePart2 = $_POST['DancePart2'];
    $DancePart3 = $_POST['DancePart3'];
    $DancePart4 = $_POST['DancePart4'];
    $DancePart5 = $_POST['DancePart5'];
    $DancePart6 = $_POST['DancePart6'];
    $DancePart7 = $_POST['DancePart7'];
    $DancePart8 = $_POST['DancePart8'];
    $DancePart9 = $_POST['DancePart9'];
    $DancePart10 = $_POST['DancePart10'];
    $MimePart1 = $_POST['MimePart1'];
    $MimePart2 = $_POST['MimePart2'];
    $MimePart3 = $_POST['MimePart3'];
    $MimePart4 = $_POST['MimePart4'];
    $MimePart5 = $_POST['MimePart5'];
    $MimePart6 = $_POST['MimePart6'];
    $MimePart7 = $_POST['MimePart7'];
    $MimePart8 = $_POST['MimePart8'];
    $FreestylePart1 = $_POST['FreestylePart1'];
    $StandupPart1 = $_POST['StandupPart1'];
    $RampPart1 = $_POST['RampPart1'];
    $RampPart2 = $_POST['RampPart2'];
    $RampPart3 = $_POST['RampPart3'];
    $RampPart4 = $_POST['RampPart4'];
    $RampPart5 = $_POST['RampPart5'];
    $RampPart6 = $_POST['RampPart6'];
    $RampPart7 = $_POST['RampPart7'];
    $RampPart8 = $_POST['RampPart8'];
    $SingingPart1 = $_POST['SingingPart1'];
    $MimicryPart1 = $_POST['MimicryPart1'];
    $karokePart1 = $_POST['karokePart1'];
    $karokePart2 = $_POST['karokePart2'];
    $karokePart3 = $_POST['karokePart3'];
    $karokePart4 = $_POST['karokePart4'];
    $karokePart5 = $_POST['karokePart5'];
    $karokePart6 = $_POST['karokePart6'];
    $girlsdancePart1 = $_POST['girlsdancePart1'];
    $girlsdancePart2 = $_POST['girlsdancePart2'];
    $girlsdancePart3 = $_POST['girlsdancePart3'];
    $girlsdancePart4 = $_POST['girlsdancePart4'];
    $girlsdancePart5 = $_POST['girlsdancePart5'];
    $girlsdancePart6 = $_POST['girlsdancePart6'];
    $girlsdancePart7 = $_POST['girlsdancePart7'];
    $girlsdancePart8 = $_POST['girlsdancePart8'];
    $girlsdancePart9 = $_POST['girlsdancePart9'];
    $girlsdancePart10 = $_POST['girlsdancePart10'];
    $KitePart1 =$_POST['kitePart1'];
    $MoviePart1 = $_POST['moviePart1'];
    $MoviePart2 = $_POST['moviePart2'];
    $MoviePart3 = $_POST['moviePart3'];
    $MoviePart4 = $_POST['moviePart4'];
    $MoviePart5 = $_POST['moviePart5'];
    $MoviePart6 = $_POST['moviePart6'];
    $PhotographyPart1 = $_POST['PhotographyPart1'];
    $vediographyPart1 = $_POST['vediographyPart1'];
    $vediographyPart1 = $_POST['vediographyPart1'];
    $DebatePart1 = $_POST['DebatePart1'];
    $DebatePart2 = $_POST['DebatePart2'];
    $MehendiPart1 = $_POST['MehendiPart1'];
    $pookalamPart1 = $_POST['pookalamPart1'];
    $pookalamPart2 = $_POST['pookalamPart2'];
    $pookalamPart3 = $_POST['pookalamPart3'];
    $DumbCharadesPart1 = $_POST['DumbCharadesPart1'];
    $cookingPart1 = $_POST['cookingPart1'];
    $cookingPart2 = $_POST['cookingPart2'];
    $cookingPart3 = $_POST['cookingPart3'];
    $cookingPart4 = $_POST['cookingPart4'];
    $FruitsPart1 = $_POST['FruitsPart1'];
    $FruitsPart2 = $_POST['FruitsPart2'];
    $FacePart1 = $_POST['FacePart1'];
    $SketchPart1 = $_POST['SketchPart1'];
    $SketchPart2 = $_POST['SketchPart2'];

    $sql1 = "INSERT INTO On_stage_reveletions 
    (email,DancePart1, DancePart2, DancePart3, DancePart4, DancePart5, DancePart6, DancePart7, DancePart8, DancePart9, DancePart10,
     MimePart1, MimePart2, MimePart3, MimePart4, MimePart5, MimePart6, MimePart7, MimePart8,
     FreestylePart1, StandupPart1, RampPart1, RampPart2, RampPart3, RampPart4, RampPart5, RampPart6, RampPart7, RampPart8,
     SingingPart1, MimicryPart1, KarokePart1, KarokePart2, KarokePart3, KarokePart4, KarokePart5, KarokePart6,
     girlsdancePart1, girlsdancePart2, girlsdancePart3, girlsdancePart4, girlsdancePart5, girlsdancePart6,
     girlsdancePart7, girlsdancePart8, girlsdancePart9, girlsdancePart10)
    VALUES 
    ('$email','$DancePart1', '$DancePart2', '$DancePart3', '$DancePart4', '$DancePart5', '$DancePart6', '$DancePart7', '$DancePart8', '$DancePart9', '$DancePart10',
     '$MimePart1', '$MimePart2', '$MimePart3', '$MimePart4', '$MimePart5', '$MimePart6', '$MimePart7', '$MimePart8',
     '$FreestylePart1', '$StandupPart1', '$RampPart1', '$RampPart2', '$RampPart3', '$RampPart4', '$RampPart5', '$RampPart6', '$RampPart7', '$RampPart8',
     '$SingingPart1', '$MimicryPart1', '$karokePart1', '$karokePart2', '$karokePart3', '$karokePart4', '$karokePart5', '$karokePart6',
     '$girlsdancePart1', '$girlsdancePart2', '$girlsdancePart3', '$girlsdancePart4', '$girlsdancePart5', '$girlsdancePart6',
     '$girlsdancePart7', '$girlsdancePart8', '$girlsdancePart9', '$girlsdancePart10')";


    $sql2 = "INSERT INTO Off_stage_reveletions 
    (email,KitePart1, MoviePart1, MoviePart2, MoviePart3, MoviePart4, MoviePart5, MoviePart6, PhotographyPart1,
    VediographyPart1, DebatePart1, DebatePart2, MehendiPart1, pookalamPart1, pookalamPart2, pookalamPart3,
    DumbCharadesPart1, cookingPart1, cookingPart2, cookingPart3, cookingPart4,
    FruitsPart1, FruitsPart2, FacepaintPart1, SketchPart1, SketchPart2)
    VALUES 
    ('$email','$KitePart1', '$MoviePart1', '$MoviePart2', '$MoviePart3', '$MoviePart4', '$MoviePart5', '$MoviePart6', '$PhotographyPart1',
    '$vediographyPart1', '$DebatePart1', '$DebatePart2', '$MehendiPart1', '$pookalamPart1', '$pookalamPart2', '$pookalamPart3',
    '$DumbCharadesPart1',  '$cookingPart1', '$cookingPart2', '$cookingPart3', '$cookingPart4',
    '$FruitsPart1', '$FruitsPart2', '$FacePart1', '$SketchPart1', '$SketchPart2')";


  
    $sql3 = "UPDATE On_stage_reveletions
    SET 
        DancePart1 = '$DancePart1',
        DancePart2 = '$DancePart2',
        DancePart3 = '$DancePart3',
        DancePart4 = '$DancePart4',
        DancePart5 = '$DancePart5',
        DancePart6 = '$DancePart6',
        DancePart7 = '$DancePart7',
        DancePart8 = '$DancePart8',
        DancePart9 = '$DancePart9',
        DancePart10 = '$DancePart10',
        MimePart1 = '$MimePart1',
        MimePart2 = '$MimePart2',
        MimePart3 = '$MimePart3',
        MimePart4 = '$MimePart4',
        MimePart5 = '$MimePart5',
        MimePart6 = '$MimePart6',
        MimePart7 = '$MimePart7',
        MimePart8 = '$MimePart8',
        FreestylePart1 = '$FreestylePart1', 
        StandupPart1 = '$StandupPart1',
        RampPart1 = '$RampPart1',
        RampPart2 = '$RampPart2',
        RampPart3 = '$RampPart3',
        RampPart4 = '$RampPart4',
        RampPart5 = '$RampPart5',
        RampPart6 = '$RampPart6',
        RampPart7 = '$RampPart7',
        RampPart8 = '$RampPart8',
        SingingPart1 = '$SingingPart1',
        MimicryPart1 = '$MimicryPart1', 
        KarokePart1 = '$karokePart1',
        KarokePart2 = '$karokePart2',
        KarokePart3 = '$karokePart3',
        KarokePart4 = '$karokePart4',
        KarokePart5 = '$karokePart5',
        KarokePart6 = '$karokePart6',
        girlsdancePart1 = '$girlsdancePart1',
        girlsdancePart2 = '$girlsdancePart2',
        girlsdancePart3 = '$girlsdancePart3',
        girlsdancePart4 = '$girlsdancePart4',
        girlsdancePart5 = '$girlsdancePart5',
        girlsdancePart6 = '$girlsdancePart6',
        girlsdancePart7 = '$girlsdancePart7',
        girlsdancePart8 = '$girlsdancePart8',
        girlsdancePart9 = '$girlsdancePart9',
        girlsdancePart10 = '$girlsdancePart10'
        WHERE email = '$email'";


    $sql4 = "UPDATE Off_stage_reveletions
    SET 
        KitePart1 ='$KitePart1',
        MoviePart1 ='$MoviePart1',
        MoviePart2 ='$MoviePart2',
        MoviePart3 ='$MoviePart3',
        MoviePart4 ='$MoviePart4',
        MoviePart5 ='$MoviePart5',
        MoviePart6 ='$MoviePart6',
        PhotographyPart1 = '$PhotographyPart1',
        VediographyPart1 = '$vediographyPart1',
        VediographyPart1 = '$vediographyPart1',
        DebatePart1 = '$DebatePart1',
        DebatePart2 = '$DebatePart2',
        MehendiPart1 = '$MehendiPart1',
        pookalamPart1 = '$pookalamPart1',
        pookalamPart2 = '$pookalamPart2',
        pookalamPart3 = '$pookalamPart3',
        DumbCharadesPart1 = '$DumbCharadesPart1',
        cookingPart1 = '$cookingPart1',
        cookingPart2 = '$cookingPart2',
        cookingPart3 = '$cookingPart3',
        cookingPart4 = '$cookingPart4',
        FruitsPart1 = '$FruitsPart1',
        FruitsPart2 = '$FruitsPart2',
        FacepaintPart1 ='$FacePart1 ',
        SketchPart1 = '$SketchPart1', 
        SketchPart2 = '$SketchPart2'
        WHERE email = '$email'";

    // for the insertion
    if ($conn->query($sql1) === TRUE && $conn->query($sql2)===TRUE) {
        echo "Record inserted successfully";
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
    // for updation
    // if ($conn->query($sql3) === TRUE && $conn->query($sql4)===TRUE) {
    //     echo "Record updated successfully";
    //     header("Location: index.php");
    // } else {
    //     echo "Error updating record: " . $conn->error;
    // }
}

$conn->close();
?>