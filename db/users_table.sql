CREATE TABLE `Users` ( 
	`isOnline` TinyInt( 1 ) NOT NULL DEFAULT '0', 
	`Password` VarChar( 20 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL, 
	`User Name` VarChar( 20 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL UNIQUE, 
	`UserID` Int( 255 ) UNSIGNED NOT NULL,
	 PRIMARY KEY ( `UserID` )
, 
	CONSTRAINT `unique_User Name` UNIQUE( `User`, `Name` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
