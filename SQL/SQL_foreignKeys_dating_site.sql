USE site_rencontre;

ALTER TABLE invitation
ADD CONSTRAINT invitation_personnalisation FOREIGN KEY (id_member_invitation) REFERENCES members(id_member);

ALTER TABLE members
ADD CONSTRAINT members_personnalisation FOREIGN KEY (id_personnalisation_member) REFERENCES  personnalisation(id_personnalisation);

ALTER TABLE members
ADD CONSTRAINT members_rights FOREIGN KEY (id_rights_member) REFERENCES user_rights(id_rights);

ALTER TABLE note
ADD CONSTRAINT note_member FOREIGN KEY (id_member_note) REFERENCES members(id_member);

ALTER TABLE pictures
ADD CONSTRAINT pictures_member FOREIGN KEY (id_member_pictures) REFERENCES members(id_member);

ALTER TABLE pictures
ADD CONSTRAINT pictures_profiles FOREIGN KEY (id_profiles_pictures) REFERENCES `profiles`(id_profiles);

ALTER TABLE `profiles`
ADD CONSTRAINT profiles_personnalisation FOREIGN KEY (id_personnalisation_profiles) REFERENCES personnalisation(id_personnalisation);

ALTER TABLE concerner
ADD PRIMARY KEY (id_profiles_concerner, id_member_concerner, id_note_concerner);

ALTER TABLE concerner
ADD CONSTRAINT concerner_profiles FOREIGN KEY (id_profiles_concerner) REFERENCES `profiles`(id_profiles);

ALTER TABLE concerner
ADD CONSTRAINT concerner_member FOREIGN KEY (id_member_concerner) REFERENCES members(id_member);

ALTER TABLE concerner
ADD CONSTRAINT concerner_note FOREIGN KEY (id_note_concerner) REFERENCES note(id_note);

