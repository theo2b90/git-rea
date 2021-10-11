
create database site_rencontre;

use site_rencontre;

CREATE TABLE personnalisation(
        id_personnalisation             Int primary key Auto_increment NOT NULL ,
        tstars_personnalisation         Varchar (255) ,
        tcarractere_personnalisation    Varchar (255) ,
        ttags_personnalisation          Varchar (255) ,
        tanimal_personnalisation        Varchar (255) NOT NULL ,
        tparfum_personnalisation        Varchar (255) NOT NULL ,
        tmanies_personnalisation        Varchar (255) NOT NULL ,
        spolitique_personnalisation     Varchar (255) NOT NULL ,
        svestimentaire_personnalisation Varchar (255) NOT NULL ,
        smeloman_personnalisation       Varchar (255) NOT NULL ,
        ssportif_personnalisation       Varchar (255) NOT NULL ,
        sromantisme_personnalisation    Varchar (255) NOT NULL ,
        spersonnalite_personnalisation  Varchar (255) NOT NULL ,
        sphysique_personnalisation      Varchar (255) NOT NULL ,
        sdragueur_personnalisation      Varchar (255) NOT NULL ,
        slibido_personnalisation        Varchar (255) NOT NULL ,
        shygiene_personnalisation       Varchar (255) NOT NULL ,
        shumour_personnalisation        Varchar (255) NOT NULL ,
        sfamille_personnalisation       Varchar (255) NOT NULL ,
        tdescription_personnalisation   Text (4000) NOT NULL
);

CREATE TABLE user_rights(
        id_rights   					Int primary key Auto_increment NOT NULL ,
        type_rights 					Varchar (100) NOT NULL
);

CREATE TABLE members(
        id_member                	Int primary key Auto_increment NOT NULL ,
        pseudo_member            	Varchar (50) NOT NULL ,
        lastname_member          	Varchar (50) NOT NULL ,
        firstname_member         	Varchar (50) NOT NULL ,
        password_member          	Varchar (100) NOT NULL ,
        sexe_member              	Char (10) NOT NULL ,
        sexualorientation_member 	Char (10) NOT NULL ,
        address_member          	Char (10) NOT NULL ,
        admin_comment            	Text (4000) NOT NULL ,
        subscription_date_member 	Date NOT NULL ,
        last_connexion_member    	Datetime NOT NULL ,
        unsubscribe_member       	Varchar (255) NOT NULL ,
        id_personnalisation_member	Int ,
        id_rights_member            Int
);

CREATE TABLE note(
        id_note           			Int primary key Auto_increment NOT NULL ,
        Send_Content_note 			Text (4000) NOT NULL ,
        date_note         			Datetime NOT NULL ,
        id_member_note         		Int
);

CREATE TABLE invitation(
        id_invitation         		Int primary key Auto_increment NOT NULL ,
        invitation_invitation 		Datetime NOT NULL ,
        answer_invitation     		Datetime NOT NULL ,
        status_invitation     		Int NOT NULL ,
        messages_invitation   		text(4000) NOT NULL ,
        id_member_invitation        Int
);

CREATE TABLE profiles(
        id_profiles              		Int primary key Auto_increment NOT NULL ,
        date_lastchange_profiles 		Datetime NOT NULL ,
        id_personnalisation_profiles    Int
);

CREATE TABLE pictures(
        ID_multimedia   				Int primary key Auto_increment NOT NULL ,
        Link_multimedia 				Varchar (100) NOT NULL ,
        Date_multimedia 				Date NOT NULL ,
        id_member_pictures       		Int ,
        id_profiles_pictures     		Int
);

CREATE TABLE concerner(
        id_profiles_concerner 			Int NOT NULL ,
        id_member_concerner   			Int NOT NULL ,
        id_note_concerner     			Int NOT NULL
);

