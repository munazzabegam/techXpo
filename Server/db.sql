

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
