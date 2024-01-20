<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-dark text-white">
    <div class="container mt-5">
        <?php
        include('../config.php');

        $prefix = 'TechXpo24';
        $uniqueId = $prefix . rand(100000, 999999);
        $msg = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $teamName = $_POST['TeamName'];
            $collegeName = $_POST['CollegeName'];
            $collegeAddress = $_POST['CollegeAddress'];
            $teamLeaderFullName = $_POST['TeamLeaderFullName'];
            $teamLeaderEmail = $_POST['TeamLeaderEmail'];
            $teamLeaderPhone = $_POST['TeamLeaderPhone'];
            $altMobile = $_POST['AltMobile'];
            $reelVistaParticipantName = $_POST['ReelVistaParticipantName'];
            $battleRoyalParticipantName = $_POST['BattleRoyalParticipantName'];
            $battleRoyalParticipantName2 = $_POST['BattleRoyalParticipantName2'];
            $turboTrackParticipantName = $_POST['TurboTrackParticipantName'];
            $colorCanvasParticipantName1 = $_POST['ColorCanvasParticipantName1'];
            $colorCanvasParticipantName2 = $_POST['ColorCanvasParticipantName2'];
            $technoQuotientParticipantName1 = $_POST['TechnoQuotientParticipantName1'];
            $technoQuotientParticipantName2 = $_POST['TechnoQuotientParticipantName2'];
            $focusFiestaParticipantName = $_POST['FocusFiestaParticipantName'];
            $ProjectExpoParticipantName = $_POST['ProjectExpoParticipantName'];

            $dateTime = date("Y-m-d H:i:s");

            $duplicateCheckQuery = "SELECT * FROM RegistrationFormData WHERE TeamLeaderEmail = '$teamLeaderEmail'";
            $result = $conn->query($duplicateCheckQuery);

            if ($result->num_rows > 0) {
                $msg = "We're sorry, but it seems that you have already registered for TechXpo. If you believe this is a mistake or if you have any concerns, please contact our support team.";
                echo '<p class="alert alert-danger">' . $msg . '</p>';
            } else {
                $sql = "INSERT INTO RegistrationFormData (Uid, TeamName, CollegeName, CollegeAddress, TeamLeaderFullName, TeamLeaderEmail, TeamLeaderPhone, AltMobile, ReelVistaParticipantName, BattleRoyalParticipantName,BattleRoyalParticipantName2, TurboTrackParticipantName, ColorCanvasParticipantName1, ColorCanvasParticipantName2, TechnoQuotientParticipantName1, TechnoQuotientParticipantName2, FocusFiestaParticipantName, ProjectExpoParticipantName, date_time) VALUES ('$uniqueId', '$teamName', '$collegeName', '$collegeAddress', '$teamLeaderFullName', '$teamLeaderEmail', '$teamLeaderPhone', '$altMobile', '$reelVistaParticipantName', '$battleRoyalParticipantName','$battleRoyalParticipantName2', '$turboTrackParticipantName', '$colorCanvasParticipantName1', '$colorCanvasParticipantName2', '$technoQuotientParticipantName1', '$technoQuotientParticipantName2', '$focusFiestaParticipantName', '$ProjectExpoParticipantName', '$dateTime')";

                if ($conn->query($sql) === TRUE) {
                    $msg = "Thank you for registering for TechXpo! An email will be sent to you with the registration details.";
                    echo '<p class="alert alert-success">' . $msg . '</p>';

                    // Send email to the submitter
                    $to = array($teamLeaderEmail,"muhammedazlan20@gmail.com");
                    $subject = "TechXpo Registration Successful";
                    $message = "Dear $teamLeaderFullName,

Congratulations! Your registration for TechXpo has been successfully received.
                    
Our team will verify your registration details, and upon successful verification, you will receive a confirmation email with further instructions.
                    
Please note that your Team ID for the Registration is: $uniqueId.
                    
Registration Details:
- Team Name: $teamName
- College Name: $collegeName
- College Address: $collegeAddress
- Team Leader Phone: $teamLeaderPhone
- Alternative Mobile: $altMobile
- Reel Vista Participant: $reelVistaParticipantName
- Battle Royal Participant: $battleRoyalParticipantName, $battleRoyalParticipantName2 
- Turbo Track Participant: $turboTrackParticipantName
- Color Canvas Participants: $colorCanvasParticipantName1, $colorCanvasParticipantName2
- Techno Quotient Participants: $technoQuotientParticipantName1, $technoQuotientParticipantName2
- Focus Fiesta Participant: $focusFiestaParticipantName
- Project Expo Participant: $ProjectExpoParticipantName

We appreciate your participation in TechXpo. If you have any questions or concerns, feel free to contact us.

Best Regards,
TechXpo Team";
                    

                    // Additional headers
                    $headers = "From: info@techxpo.com";

                    // Send email
                    if (mail(implode(', ', $to), $subject, $message, $headers)) {
                        // echo '<p class="alert alert-success">Email sent successfully!</p>';
                    } else {
                        echo '<p class="alert alert-danger">Error sending email.</p>';
                    }
                } else {
                    $msg = "Error: " . $sql . "<br>" . $conn->error;
                    echo '<p class="alert alert-danger">' . $msg . '</p>';
                }
            }
        }
        ?>

        <div class="home"><a href="../../index.html" class="btn btn-warning">Return Home</a></div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
