USE dating_website;
#------------------------------------------------------------
# Table: department
#------------------------------------------------------------
ALTER TABLE `department`
ADD CONSTRAINT department_country FOREIGN KEY (country_id) REFERENCES `country`(country_id);
#------------------------------------------------------------
# Table: city
#------------------------------------------------------------
ALTER TABLE `city`
ADD CONSTRAINT city_department FOREIGN KEY (department_id) REFERENCES `department`(department_id);

#------------------------------------------------------------
# Table: members
#------------------------------------------------------------
ALTER TABLE `members`
ADD CONSTRAINT members_rights FOREIGN KEY (rights_id) REFERENCES `rights`(rights_id);

ALTER TABLE `members`
ADD CONSTRAINT members_country  FOREIGN KEY (country_id) REFERENCES `country`(country_id);

ALTER TABLE `members`
ADD CONSTRAINT members_city  FOREIGN KEY (city_id) REFERENCES `city`(city_id);

ALTER TABLE `members`
ADD CONSTRAINT members_department  FOREIGN KEY (department_id) REFERENCES `department`(department_id);

ALTER TABLE `members`
ADD CONSTRAINT members_erosPersonality  FOREIGN KEY (erosPersonality_id) REFERENCES `erosPersonality`(erosPersonality_id);

ALTER TABLE `members`
ADD CONSTRAINT members_flirterPersonality  FOREIGN KEY (flirterPersonality_id) REFERENCES `flirterPersonality`(flirterPersonality_id);

ALTER TABLE `members`
ADD CONSTRAINT members_archetypPersonality  FOREIGN KEY (archetypPersonality_id) REFERENCES `archetypPersonality`(archetypPersonality_id);
#------------------------------------------------------------
# Table: media
#------------------------------------------------------------
ALTER TABLE `media`
ADD CONSTRAINT media_members FOREIGN KEY (members_id) REFERENCES `members`(members_id);

#------------------------------------------------------------
# Table: note
#------------------------------------------------------------
ALTER TABLE `note`
ADD CONSTRAINT note_members FOREIGN KEY (members_id) REFERENCES `members`(members_id);

ALTER TABLE `note`
ADD CONSTRAINT note_members0 FOREIGN KEY (members_id) REFERENCES `members`(members_id);
#------------------------------------------------------------
# Table: post
#------------------------------------------------------------
ALTER TABLE `post`
ADD PRIMARY KEY (tagsQuirkPersonality_id, members_id);

ALTER TABLE `post`
ADD CONSTRAINT post_members FOREIGN KEY (members_id) REFERENCES `members`(members_id);

ALTER TABLE `post`
ADD CONSTRAINT post_tagsQuirkPersonality FOREIGN KEY (tagsQuirkPersonality_id) REFERENCES `tagsQuirkPersonality`(tagsQuirkPersonality_id);
#------------------------------------------------------------
# Table: link
#------------------------------------------------------------
ALTER TABLE `link`
ADD PRIMARY KEY (tagsIhaititPersonality_id, members_id);

ALTER TABLE `link`
ADD CONSTRAINT link_members FOREIGN KEY (members_id) REFERENCES `members`(members_id);

ALTER TABLE `link`
ADD CONSTRAINT link_tagsIhaititPersonality FOREIGN KEY (tagsIhaititPersonality_id) REFERENCES `tagsIhaititPersonality`(tagsIhaititPersonality_id);

#------------------------------------------------------------
# Table: own
#------------------------------------------------------------
ALTER TABLE `own`
ADD PRIMARY KEY (tagsCloudPersonality_id, members_id);

ALTER TABLE `own`
ADD CONSTRAINT own_tagsCloudPersonality FOREIGN KEY (tagsCloudPersonality_id) REFERENCES `tagsCloudPersonality`(tagsCloudPersonality_id);

ALTER TABLE `own`
ADD CONSTRAINT own_members FOREIGN KEY (members_id) REFERENCES `members`(members_id);

