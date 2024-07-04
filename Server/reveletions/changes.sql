
-- not required

ALTER TABLE `reveletionsRegistrations` CHANGE `SkitPart1` `girlsdancePart1`
VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Not Assigned'; 

ALTER TABLE `reveletionsRegistrations` CHANGE `SkitPart3` `girlsdancePart3` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Not Assigned'; 
ALTER TABLE `reveletionsRegistrations` CHANGE `SkitPart4` `girlsdancePart4` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Not Assigned'; 
ALTER TABLE `reveletionsRegistrations` CHANGE `SkitPart5` `girlsdancePart5` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Not Assigned'; 
ALTER TABLE `reveletionsRegistrations` CHANGE `SkitPart6` `girlsdancePart6` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Not Assigned';
ALTER TABLE `reveletionsRegistrations` CHANGE `SkitPart7` `girlsdancePart7` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Not Assigned'; 
ALTER TABLE `reveletionsRegistrations` CHANGE `SkitPart8` `girlsdancePart8` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Not Assigned';  


ALTER TABLE `reveletionsRegistrations` ADD `girlsdancePart9` VARCHAR(255) NOT NULL AFTER `SkitPart8`, ADD `girlsdancePart10` VARCHAR(255) NOT NULL AFTER `girlsdancePart9`; 
ALTER TABLE `reveletionsRegistrations` ADD `SketchPart2` VARCHAR(255) NOT NULL AFTER `SketchPart1`; 
ALTER TABLE `reveletionsRegistrations` ADD `KitePart1` VARCHAR(255) NOT NULL AFTER `MimePart8`; 

-- shortmovie

ALTER TABLE `reveletionsRegistrations` ADD `MoviePart1` VARCHAR(255) NOT NULL AFTER `KitePart1`, 
ADD `MoviePart2` VARCHAR(255) NOT NULL AFTER `MoviePart1`, ADD `MoviePart3` VARCHAR(255) NOT NULL AFTER `MoviePart2`,
ADD `MoviePart4` VARCHAR(255) NOT NULL AFTER `MoviePart3`, ADD `MoviePart5` VARCHAR(255) NOT NULL AFTER `MoviePart4`,
ADD `MoviePart6` VARCHAR(255) NOT NULL AFTER `MoviePart5`; 

ALTER TABLE `reveletionsRegistrations` ADD `VediographyPart1` VARCHAR(255) NOT NULL AFTER `PhotographyPart1`, 
ADD `VediographyPart2` VARCHAR(255) NOT NULL AFTER `VediographyPart1`; 


--   group song karoke
ALTER TABLE `reveletionsRegistrations` ADD `KarokePart1` VARCHAR(255) NOT NULL AFTER `MoviePart6`, ADD `KarokePart2` VARCHAR(255) NOT NULL AFTER `KarokePart1`, 
ADD `KarokePart3` VARCHAR(255) NOT NULL AFTER `KarokePart2`, ADD `KarokePart4` VARCHAR(255) NOT NULL AFTER `KarokePart3`, ADD `KarokePart5` VARCHAR(255)
 NOT NULL AFTER `KarokePart4`, ADD `KarokePart6` VARCHAR(255) NOT NULL AFTER `KarokePart5`; 