<?php
session_start();

include("../config.php");


$email = $_SESSION['email'];

$sql = "SELECT * FROM reveletionsRegistrations WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();


if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $SketchPart1 = $row['SketchPart1'];
    $MimicryPart1 = $row['MimicryPart1'];
    $FreestylePart1 = $row['FreestylePart1'];
    $StandupPart1 = $row['StandupPart1'];
    $PhotographyPart1 = $row['PhotographyPart1'];
    $DumbCharadesPart1 = $row['DumbCharadesPart1'];
    $DumbCharadesPart2 = $row['DumbCharadesPart2'];
    $MehendiPart1 = $row['MehendiPart1'];
    $MehendiPart2 = $row['MehendiPart2'];
    $pookalamPart1 = $row['pookalamPart1'];
    $pookalamPart2 = $row['pookalamPart2'];
    $DebatePart1 = $row['DebatePart1'];
    $DebatePart2 = $row['DebatePart2'];
    $FruitsPart1 = $row['FruitsPart1'];
    $FruitsPart2 = $row['FruitsPart2'];
    $cookingPart1 = $row['cookingPart1'];
    $cookingPart2 = $row['cookingPart2'];
    $cookingPart3 = $row['cookingPart3'];
    $cookingPart4 = $row['cookingPart4'];
    $SingingPart1 = $row['SingingPart1'];
    $SkitPart1 = $row['SkitPart1'];
    $SkitPart2 = $row['SkitPart2'];
    $SkitPart3 = $row['SkitPart3'];
    $SkitPart4 = $row['SkitPart4'];
    $SkitPart5 = $row['SkitPart5'];
    $SkitPart6 = $row['SkitPart6'];
    $SkitPart7 = $row['SkitPart7'];
    $SkitPart8 = $row['SkitPart8'];
    $DancePart1 = $row['DancePart1'];
    $DancePart2 = $row['DancePart2'];
    $DancePart3 = $row['DancePart3'];
    $DancePart4 = $row['DancePart4'];
    $DancePart5 = $row['DancePart5'];
    $DancePart6 = $row['DancePart6'];
    $DancePart7 = $row['DancePart7'];
    $DancePart8 = $row['DancePart8'];
    $DancePart9 = $row['DancePart9'];
    $DancePart10 = $row['DancePart10'];
    $DancePart11 = $row['DancePart11'];
    $DancePart12 = $row['DancePart12'];
    $MimePart1 = $row['MimePart1'];
    $MimePart2 = $row['MimePart2'];
    $MimePart3 = $row['MimePart3'];
    $MimePart4 = $row['MimePart4'];
    $MimePart5 = $row['MimePart5'];
    $MimePart6 = $row['MimePart6'];
    $MimePart7 = $row['MimePart7'];
    $MimePart8 = $row['MimePart8'];
    $MimePart9 = $row['MimePart9'];
    $MimePart10 = $row['MimePart10'];
    $MimePart11 = $row['MimePart11'];
    $MimePart12 = $row['MimePart12'];
    


} else {
    echo "0 results";
}

mysqli_close($conn);
?>
