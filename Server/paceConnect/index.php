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

        $prefix = 'PC24';
        $uniqueId = $prefix . rand(100, 999);
        $msg = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $teamName = $_POST['TeamName'];
            $collegeName = $_POST['CollegeName'];
            $collegeAddress = $_POST['CollegeAddress'];
            $teamLeaderFullName = $_POST['TeamLeaderFullName'];
            $teamLeaderEmail = $_POST['TeamLeaderEmail'];
            $teamLeaderPhone = $_POST['TeamLeaderPhone'];
            $altMobile = $_POST['AltMobile'];
            $colorPaletteParticipantName = $_POST['colorPaletteParticipantName'];
            $brainBurstParticipantName = $_POST['brainBurstParticipantName'];
            $brainBurstParticipantName2 = $_POST['brainBurstParticipantName2'];
            $scicraftParticipantName1 = $_POST['scicraftParticipantName1'];
            $scicraftParticipantName2 = $_POST['scicraftParticipantName2'];
            $scicraftParticipantName3 = $_POST['scicraftParticipantName3'];

            $dateTime = date("Y-m-d H:i:s");

            $duplicateCheckQuery = "SELECT * FROM PaceConnect WHERE TeamLeaderEmail = '$teamLeaderEmail'";
            $result = $conn->query($duplicateCheckQuery);

            if ($result->num_rows > 0) {
                $msg = "We're sorry, but it seems that you have already registered for PaceConnect. If you believe this is a mistake or if you have any concerns, please contact our support team.";
                echo '<p class="alert alert-danger">' . $msg . '</p>';
            } else {
                $sql = "INSERT INTO PaceConnect (Uid, TeamName, CollegeName, CollegeAddress, TeamLeaderFullName, TeamLeaderEmail, TeamLeaderPhone, AltMobile, colorPaletteParticipantName, brainBurstParticipantName, brainBurstParticipantName2, scicraftParticipantName1, scicraftParticipantName2, scicraftParticipantName3, date_time) VALUES ('$uniqueId', '$teamName', '$collegeName', '$collegeAddress', '$teamLeaderFullName', '$teamLeaderEmail', '$teamLeaderPhone', '$altMobile', '$colorPaletteParticipantName', '$brainBurstParticipantName', '$brainBurstParticipantName2', '$scicraftParticipantName1', '$scicraftParticipantName2', '$scicraftParticipantName3', '$dateTime')";

                if ($conn->query($sql) === TRUE) {
                    $msg = "Thank you for registering for Pace Connect! An email will be sent to you with the registration details.";
                    echo '<p class="alert alert-success">' . $msg . '</p>';

                    // Send email to the submitter
                    $to = array($teamLeaderEmail, "muhammedazlan20@gmail.com");
                    $subject = "TechXpo Registration Successful";
                    $message = "Dear $teamLeaderFullName,

Congratulations! Your registration for Pace Connect has been successfully received.
                    
Our team will verify your registration details, and upon successful verification, you will receive a confirmation email with further instructions.
                    
Please note that your Team ID for the Registration is: $uniqueId.
                    
Registration Details:
- Team Name: $teamName
- College Name: $collegeName
- College Address: $collegeAddress
- Team Leader Phone: $teamLeaderPhone
- Alternative Mobile: $altMobile
- Color Palette Participant: $colorPaletteParticipantName
- Brain Burst Participants: $brainBurstParticipantName, $brainBurstParticipantName2
- Sci-Craft Participants: $scicraftParticipantName1, $scicraftParticipantName2, $scicraftParticipantName3

We appreciate your participation in TechXpo. If you have any questions or concerns, feel free to contact us.

Best Regards,
TechXpo Team
+91 6361557581
";

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
