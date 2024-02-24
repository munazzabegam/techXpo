<?php
session_start(); // Start the session

include("../config.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
$email = $_SESSION['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $SketchPart1 = $_POST['SketchPart1'];
    $MimicryPart1 = $_POST['MimicryPart1'];
    $FreestylePart1 = $_POST['FreestylePart1'];
    $StandupPart1 = $_POST['StandupPart1'];
    $PhotographyPart1 = $_POST['PhotographyPart1'];
    $DumbCharadesPart1 = $_POST['DumbCharadesPart1'];
    $DumbCharadesPart2 = $_POST['DumbCharadesPart2'];
    $MehendiPart1 = $_POST['MehendiPart1'];
    $MehendiPart2 = $_POST['MehendiPart2'];
    $pookalamPart1 = $_POST['pookalamPart1'];
    $pookalamPart2 = $_POST['pookalamPart2'];
    $DebatePart1 = $_POST['DebatePart1'];
    $DebatePart2 = $_POST['DebatePart2'];
    $FruitsPart1 = $_POST['FruitsPart1'];
    $FruitsPart2 = $_POST['FruitsPart2'];
    $cookingPart1 = $_POST['cookingPart1'];
    $cookingPart2 = $_POST['cookingPart2'];
    $cookingPart3 = $_POST['cookingPart3'];
    $cookingPart4 = $_POST['cookingPart4'];
    $SingingPart1 = $_POST['SingingPart1'];
    $SkitPart1 = $_POST['SkitPart1'];
    $SkitPart2 = $_POST['SkitPart2'];
    $SkitPart3 = $_POST['SkitPart3'];
    $SkitPart4 = $_POST['SkitPart4'];
    $SkitPart5 = $_POST['SkitPart5'];
    $SkitPart6 = $_POST['SkitPart6'];
    $SkitPart7 = $_POST['SkitPart7'];
    $SkitPart8 = $_POST['SkitPart8'];
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
    $DancePart11 = $_POST['DancePart11'];
    $DancePart12 = $_POST['DancePart12'];
    $MimePart1 = $_POST['MimePart1'];
    $MimePart2 = $_POST['MimePart2'];
    $MimePart3 = $_POST['MimePart3'];
    $MimePart4 = $_POST['MimePart4'];
    $MimePart5 = $_POST['MimePart5'];
    $MimePart6 = $_POST['MimePart6'];
    $MimePart7 = $_POST['MimePart7'];
    $MimePart8 = $_POST['MimePart8'];
    $MimePart9 = $_POST['MimePart9'];
    $MimePart10 = $_POST['MimePart10'];
    $MimePart11 = $_POST['MimePart11'];
    $MimePart12 = $_POST['MimePart12'];


    $sql = "UPDATE reveletionsRegistrations 
    SET 
        SketchPart1 = '$SketchPart1', 
        MimicryPart1 = '$MimicryPart1', 
        FreestylePart1 = '$FreestylePart1', 
        StandupPart1 = '$StandupPart1',
        PhotographyPart1 = '$PhotographyPart1',
        DumbCharadesPart1 = '$DumbCharadesPart1',
        DumbCharadesPart2 = '$DumbCharadesPart2',
        MehendiPart1 = '$MehendiPart1',
        MehendiPart2 = '$MehendiPart2',
        pookalamPart1 = '$pookalamPart1',
        pookalamPart2 = '$pookalamPart2',
        DebatePart1 = '$DebatePart1',
        DebatePart2 = '$DebatePart2',
        FruitsPart1 = '$FruitsPart1',
        FruitsPart2 = '$FruitsPart2',
        cookingPart1 = '$cookingPart1',
        cookingPart2 = '$cookingPart2',
        cookingPart3 = '$cookingPart3',
        cookingPart4 = '$cookingPart4',
        SingingPart1 = '$SingingPart1',
        SkitPart1 = '$SkitPart1',
        SkitPart2 = '$SkitPart2',
        SkitPart3 = '$SkitPart3',
        SkitPart4 = '$SkitPart4',
        SkitPart5 = '$SkitPart5',
        SkitPart6 = '$SkitPart6',
        SkitPart7 = '$SkitPart7',
        SkitPart8 = '$SkitPart8',
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
        DancePart11 = '$DancePart11',
        DancePart12 = '$DancePart12',
        MimePart1 = '$MimePart1',
        MimePart2 = '$MimePart2',
        MimePart3 = '$MimePart3',
        MimePart4 = '$MimePart4',
        MimePart5 = '$MimePart5',
        MimePart6 = '$MimePart6',
        MimePart7 = '$MimePart7',
        MimePart8 = '$MimePart8',
        MimePart9 = '$MimePart9',
        MimePart10 = '$MimePart10',
        MimePart11 = '$MimePart11',
        MimePart12 = '$MimePart12'
    WHERE email = '$email'";


    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
