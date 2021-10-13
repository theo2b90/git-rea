USE site_rencontre;

ALTER TABLE note
ADD CONSTRAINT note_members FOREIGN KEY (id_member_note)  REFERENCES members(id_member) ;

ALTER TABLE note
ADD CONSTRAINT note_profiles FOREIGN KEY (id_profiles_note)  REFERENCES `profiles`(id_profiles);

ALTER TABLE pictures
ADD CONSTRAINT pictures_members FOREIGN KEY (id_member_pictures) REFERENCES members(id_member);

ALTER TABLE pictures
ADD CONSTRAINT pictures_profiles FOREIGN KEY (id_profiles_pictures) REFERENCES `profiles`(id_profiles);

ALTER TABLE invitation
ADD CONSTRAINT invitation_members FOREIGN KEY (id_member_invitation) REFERENCES members(id_member);

ALTER TABLE city
ADD CONSTRAINT city_region FOREIGN KEY (id_region_city)  REFERENCES region(id_region);

ALTER TABLE region
ADD CONSTRAINT region_country FOREIGN KEY (id_country_region) REFERENCES country(id_country);

ALTER TABLE members
ADD CONSTRAINT members_personality  FOREIGN KEY (id_personality_members) REFERENCES personality(id_personality) ;

ALTER TABLE members
ADD CONSTRAINT members_rights FOREIGN KEY (id_rights_members) REFERENCES user_rights(id_rights);

ALTER TABLE members
ADD CONSTRAINT members_country FOREIGN KEY (id_country_members) REFERENCES country(id_country);

ALTER TABLE `clone`
ADD PRIMARY KEY (id_profiles_clone, id_member_clone);

ALTER TABLE `clone`
ADD CONSTRAINT clone_profiles FOREIGN KEY (id_profiles_clone) REFERENCES `profiles`(id_profiles);

ALTER TABLE `clone`
ADD CONSTRAINT clone_member FOREIGN KEY (id_member_clone) REFERENCES members(id_member);