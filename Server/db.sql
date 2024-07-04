

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+05:30";

CREATE TABLE TechXpo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    UId VARCHAR(30),
    TeamName VARCHAR(255),
    CollegeName VARCHAR(255),
    CollegeAddress TEXT,
    TeamLeaderFullName VARCHAR(255),
    TeamLeaderEmail VARCHAR(255),
    TeamLeaderPhone VARCHAR(15),
    AltMobile VARCHAR(15),
    ReelVistaParticipantName VARCHAR(255),
    BattleRoyalParticipantName VARCHAR(255),
    BattleRoyalParticipantName2 VARCHAR(255),
    TurboTrackParticipantName VARCHAR(255),
    ColorCanvasParticipantName1 VARCHAR(255),
    ColorCanvasParticipantName2 VARCHAR(255),
    TechnoQuotientParticipantName1 VARCHAR(255),
    TechnoQuotientParticipantName2 VARCHAR(255),
    FocusFiestaParticipantName VARCHAR(255),
    ProjectExpoParticipantName VARCHAR(255),
    date_time DATETIME
);

CREATE TABLE PaceConnect (
    id INT AUTO_INCREMENT PRIMARY KEY,
    UId VARCHAR(30),
    TeamName VARCHAR(255) NOT NULL,
    CollegeName VARCHAR(255) NOT NULL,
    CollegeAddress TEXT NOT NULL,
    TeamLeaderFullName VARCHAR(255) NOT NULL,
    TeamLeaderEmail VARCHAR(255) NOT NULL,
    TeamLeaderPhone VARCHAR(20) NOT NULL,
    AltMobile VARCHAR(20),
    colorPaletteParticipantName VARCHAR(255),
    BrainBurstParticipantName VARCHAR(255),
    BrainBurstParticipantName2 VARCHAR(255),
    ScicraftParticipantName1 VARCHAR(255),
    ScicraftParticipantName2 VARCHAR(255),
    ScicraftParticipantName3 VARCHAR(255),
    date_time DATETIME NOT NULL
);


CREATE TABLE ParticipationCredentials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);
INSERT INTO ParticipationCredentials (email, password)
VALUES ('azlan@codewizy.in', 'pass');

CREATE TABLE reveletionsRegistrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    SketchPart1 VARCHAR(255) DEFAULT 'Not Assigned',
    MimicryPart1 VARCHAR(255) DEFAULT 'Not Assigned',
    FreestylePart1 VARCHAR(255) DEFAULT 'Not Assigned',
    StandupPart1 VARCHAR(255) DEFAULT 'Not Assigned',
    PhotographyPart1 VARCHAR(255) DEFAULT 'Not Assigned',
    DumbCharadesPart1 VARCHAR(255) DEFAULT 'Not Assigned',
    DumbCharadesPart2 VARCHAR(255) DEFAULT 'Not Assigned',
    MehendiPart1 VARCHAR(255) DEFAULT 'Not Assigned',
    MehendiPart2 VARCHAR(255) DEFAULT 'Not Assigned',
    pookalamPart1 VARCHAR(255) DEFAULT 'Not Assigned',
    pookalamPart2 VARCHAR(255) DEFAULT 'Not Assigned',
    DebatePart1 VARCHAR(255) DEFAULT 'Not Assigned',
    DebatePart2 VARCHAR(255) DEFAULT 'Not Assigned',
    FruitsPart1 VARCHAR(255) DEFAULT 'Not Assigned',
    FruitsPart2 VARCHAR(255) DEFAULT 'Not Assigned',
    cookingPart1 VARCHAR(255) DEFAULT 'Not Assigned',
    cookingPart2 VARCHAR(255) DEFAULT 'Not Assigned',
    cookingPart3 VARCHAR(255) DEFAULT 'Not Assigned',
    cookingPart4 VARCHAR(255) DEFAULT 'Not Assigned',
    SingingPart1 VARCHAR(255) DEFAULT 'Not Assigned',
    SkitPart1 VARCHAR(255) DEFAULT 'Not Assigned',
    SkitPart2 VARCHAR(255) DEFAULT 'Not Assigned',
    SkitPart3 VARCHAR(255) DEFAULT 'Not Assigned',
    SkitPart4 VARCHAR(255) DEFAULT 'Not Assigned',
    SkitPart5 VARCHAR(255) DEFAULT 'Not Assigned',
    SkitPart6 VARCHAR(255) DEFAULT 'Not Assigned',
    SkitPart7 VARCHAR(255) DEFAULT 'Not Assigned',
    SkitPart8 VARCHAR(255) DEFAULT 'Not Assigned',
    DancePart1 VARCHAR(255) DEFAULT 'Not Assigned',
    DancePart2 VARCHAR(255) DEFAULT 'Not Assigned',
    DancePart3 VARCHAR(255) DEFAULT 'Not Assigned',
    DancePart4 VARCHAR(255) DEFAULT 'Not Assigned',
    DancePart5 VARCHAR(255) DEFAULT 'Not Assigned',
    DancePart6 VARCHAR(255) DEFAULT 'Not Assigned',
    DancePart7 VARCHAR(255) DEFAULT 'Not Assigned',
    DancePart8 VARCHAR(255) DEFAULT 'Not Assigned',
    DancePart9 VARCHAR(255) DEFAULT 'Not Assigned',
    DancePart10 VARCHAR(255) DEFAULT 'Not Assigned',
    DancePart11 VARCHAR(255) DEFAULT 'Not Assigned',
    DancePart12 VARCHAR(255) DEFAULT 'Not Assigned',
    MimePart1 VARCHAR(255) DEFAULT 'Not Assigned',
    MimePart2 VARCHAR(255) DEFAULT 'Not Assigned',
    MimePart3 VARCHAR(255) DEFAULT 'Not Assigned',
    MimePart4 VARCHAR(255) DEFAULT 'Not Assigned',
    MimePart5 VARCHAR(255) DEFAULT 'Not Assigned',
    MimePart6 VARCHAR(255) DEFAULT 'Not Assigned',
    MimePart7 VARCHAR(255) DEFAULT 'Not Assigned',

    MimePart8 VARCHAR(255) DEFAULT 'Not Assigned',
    MimePart9 VARCHAR(255) DEFAULT 'Not Assigned',
    MimePart10 VARCHAR(255) DEFAULT 'Not Assigned',
    MimePart11 VARCHAR(255) DEFAULT 'Not Assigned',
    MimePart12 VARCHAR(255) DEFAULT 'Not Assigned'
);
