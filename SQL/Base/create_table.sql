create database dating_website;
use dating_webSite;

#------------------------------------------------------------
# Table: rights
#------------------------------------------------------------

CREATE TABLE `rights` (
        rights_id    Int(9) primary key Auto_increment  NOT NULL ,
        rights_users Int(9) NOT NULL
        );

#------------------------------------------------------------
# Table: country
#------------------------------------------------------------

CREATE TABLE `country`(
        country_id   Int(9) primary key Auto_increment  NOT NULL ,
        country_name Varchar (50) NOT NULL
        );

#------------------------------------------------------------
# Table: department
#------------------------------------------------------------

CREATE TABLE `department`(
        department_id   Int(9) primary key Auto_increment  NOT NULL ,
        department_name Varchar (50) NOT NULL ,
        country_id      Int(9)
        );

#------------------------------------------------------------
# Table: city
#------------------------------------------------------------

CREATE TABLE `city`(
        city_id       Int(9) primary key Auto_increment  NOT NULL ,
        city_name     Varchar (50) NOT NULL ,
        city_cp		  Varchar (255) NOT NULL ,
        city_Ygrd	  Varchar (9) NOT NULL,
        city_Xgrd	  Varchar (8) NOT NULL,
        department_id Int(9)
        );

#------------------------------------------------------------
# Table: tagsQuirkPersonality
#------------------------------------------------------------

CREATE TABLE `tagsQuirkPersonality`(
        tagsQuirkPersonality_id   Int(10) primary key Auto_increment  NOT NULL ,
        tagsQuirkPersonality_word Char (20) NOT NULL
        );

#------------------------------------------------------------
# Table: tagsIhaititPersonality
#------------------------------------------------------------

CREATE TABLE `tagsIhaititPersonality`(
        tagsIhaititPersonality_id  Int(10) primary key Auto_increment  NOT NULL ,
        tagsIhaititPersonality_word Char (20) NOT NULL
        );

#------------------------------------------------------------
# Table: tagsCloudPersonality
#------------------------------------------------------------

CREATE TABLE `tagsCloudPersonality`(
        tagsCloudPersonality_id   Int(10) primary key Auto_increment  NOT NULL ,
        tagsCloudPersonality_word Char (20) NOT NULL
        );

#------------------------------------------------------------
# Table: erosPersonality
#------------------------------------------------------------

CREATE TABLE `erosPersonality`(
        erosPersonality_id          Int(9) primary key Auto_increment  NOT NULL ,
        erosPersonality_txt         Text NOT NULL ,
        erosPersonality_wrongTxt    Text NOT NULL ,
        erosPersonality_number      Int(9) NOT NULL ,
        erosPersonality_WrongNumber Int(9) NOT NULL
        );

#------------------------------------------------------------
# Table: flirter_personality
#------------------------------------------------------------

CREATE TABLE `flirterPersonality`(
        flirterPersonality_id          Int(9) primary key Auto_increment  NOT NULL ,
        flirterPersonality_txt         Text NOT NULL ,
        flirterPersonality_wrongTxt    Text NOT NULL ,
        flirterPersonality_number      Int(9) NOT NULL ,
        flirterPersonality_wrongNumber Int(9) NOT NULL
        );

#------------------------------------------------------------
# Table: archetypPersonality
#------------------------------------------------------------

CREATE TABLE `archetypPersonality`(
        archetypPersonality_id          Int(9) primary key Auto_increment  NOT NULL ,
        archetypPersonality_txt         Text NOT NULL ,
        archetypPersonality_wrongTxt    Text NOT NULL ,
        archetypPersonality_wrongNumber Int(9) NOT NULL ,
        archetypPersonality_number      Int(9) NOT NULL
        );

#------------------------------------------------------------
# Table: members
#------------------------------------------------------------

CREATE TABLE `members`(
        members_id                Int (9) primary key Auto_increment  NOT NULL ,
        members_pseudo            Varchar (50) NOT NULL ,
        members_lastname          Varchar (50) NOT NULL ,
        members_firstname         Varchar (50) NOT NULL ,
        members_age               Int (9) NOT NULL ,
        members_password          Varchar (100) NOT NULL ,
        members_sexe              Char (10) NOT NULL ,
        members_sexualOrientation Char (10) NOT NULL ,
        members_addressEmail      Char (10) NOT NULL ,
        members_adminComments     Text NOT NULL ,
        members_subscriptionDate  Date NOT NULL ,
        members_lastConnexion     Datetime NOT NULL ,
        members_unsubscribe       Varchar (255) NOT NULL ,
        members_description       Text NOT NULL ,
        members_tips              Varchar (500) NOT NULL ,
        rights_id                 Int (9) NOT NULL ,
        country_id                Int (9),
        city_id                   Int (9),
        department_id             Int (9),
        erosPersonality_id        Int (9) NOT NULL ,
        flirterPersonality_id     Int (9) NOT NULL ,
        archetypPersonality_id    Int (9) NOT NULL
        );
	
#------------------------------------------------------------
# Table: media
#------------------------------------------------------------

CREATE TABLE `media`(
        media_id   Int (9) primary key Auto_increment  NOT NULL ,
        media_link Varchar (100) NOT NULL ,
        media_date Date NOT NULL ,
        members_id Int (9) NOT NULL
        );
        
#------------------------------------------------------------
# Table: note
#------------------------------------------------------------

CREATE TABLE `note`(
        note_id               bigint(14) primary key Auto_increment  NOT NULL ,
        note_SendContent      Text NOT NULL ,
        note_date             Datetime NOT NULL ,
        members_id            Int (9) NOT NULL ,
        members_id_correspond Int (9) NOT NULL
        );

#------------------------------------------------------------
# Table: post
#------------------------------------------------------------

CREATE TABLE `post`(
        tagsQuirkPersonality_id Int (9) NOT NULL ,
        members_id              Int (9) NOT NULL
        );

#------------------------------------------------------------
# Table: link
#------------------------------------------------------------

CREATE TABLE `link`(
        tagsIhaititPersonality_id Int (9) NOT NULL ,
        members_id                Int (9) NOT NULL
        );

#------------------------------------------------------------
# Table: own
#------------------------------------------------------------

CREATE TABLE `own`(
        tagsCloudPersonality_id Int (9) NOT NULL ,
        members_id              Int (9) NOT NULL
        );


