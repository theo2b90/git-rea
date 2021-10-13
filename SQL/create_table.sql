create database site_rencontre;

use site_rencontre;

CREATE TABLE personality(
        id_personality          Int primary key Auto_increment NOT NULL ,
        description_personality Text (2000) NOT NULL ,
        dredger_personality     Text (2000) NOT NULL ,
        lifestyle_personality   Text (2000) NOT NULL ,
        fashion_personality     Text (2000) NOT NULL ,
        romantic_personality    Text (2000) NOT NULL ,
        funny_personality       Text (2000) NOT NULL ,
        animal_personality      Text (2000) NOT NULL ,
        politics_personality    Text (2000) NOT NULL ,
        sex_personality         Text (2000) NOT NULL ,
        family_personality      Text (2000) NOT NULL ,
        selfImage_personality   Text (2000) NOT NULL ,
        tagsCloud_personality   Char NOT NULL ,
        tags_quirks_personality Char ,
        tagsIhaitit_personality Char ,
        tips_personality        Varchar (255) NOT NULL ,
        me_personality          Text (2000) NOT NULL
);



CREATE TABLE user_rights(
        id_rights   Int primary key Auto_increment NOT NULL ,
        type_rights Varchar (100) NOT NULL
);

CREATE TABLE `profiles`(
        id_profiles              Int primary key Auto_increment NOT NULL ,
        date_lastchange_profiles Datetime NOT NULL
);

CREATE TABLE country(
        id_country   Int primary key Auto_increment NOT NULL ,
        country_name Varchar (50) NOT NULL
);
CREATE TABLE members(
        id_member                Int primary key Auto_increment NOT NULL ,
        pseudo_member            Varchar (50) NOT NULL ,
        lastname_member          Varchar (50) NOT NULL ,
        firstname_member         Varchar (50) NOT NULL ,
        age_member               Int NOT NULL ,
        password_member          Varchar (100) NOT NULL ,
        sexe_member              Char (10) NOT NULL ,
        sexualorientation_member Char (10) NOT NULL ,
        address_mail_member      Char (10) NOT NULL ,
        admin_comment            Text NOT NULL ,
        subscription_date_member Date NOT NULL ,
        last_connexion_member    Datetime NOT NULL ,
        unsubscribe_member       Varchar (255) NOT NULL ,
        id_personality_members          Int ,
        id_rights_members                Int ,
        id_country_members               Int
);

CREATE TABLE pictures(
        ID_multimedia   Int primary key Auto_increment NOT NULL ,
        Link_multimedia Varchar (100) NOT NULL ,
        Date_multimedia Date NOT NULL ,
        id_member_pictures       Int ,
        id_profiles_pictures    Int
);

CREATE TABLE note(
        id_note           Int primary key Auto_increment NOT NULL ,
        Send_Content_note Text (2000) NOT NULL ,
        date_note         Datetime NOT NULL ,
        id_member_note         Int ,
        id_profiles_note       Int
);

CREATE TABLE invitation(
        id_invitation         Int primary key Auto_increment NOT NULL ,
        invitation_invitation Datetime NOT NULL ,
        answer_invitation     Datetime NOT NULL ,
        status_invitation     Int NOT NULL ,
        messages_invitation   TinyText NOT NULL ,
        id_member_invitation             Int
);
CREATE TABLE region(
        id_region   Int primary key Auto_increment NOT NULL ,
        region_name Varchar (50) NOT NULL ,
        id_country_region  Int
);


CREATE TABLE city(
        id_city   Int primary key Auto_increment NOT NULL ,
        city_name Varchar (50) NOT NULL ,
        city_area Varchar (50) NOT NULL ,
        id_region_city Int
);


CREATE TABLE `clone`(
        id_profiles_clone Int NOT NULL ,
        id_member_clone   Int NOT NULL
);