CREATE TABLE user_profile ( 
id    int
, note int
, PRIMARY KEY(id));

CREATE TABLE conference
(
id      int,
year    int,
month   VARCHAR(8),
PRIMARY KEY(id)
);

ALTER TABLE conference 
ADD COLUMN session varchar(20)

CREATE TABLE note
(
id            int,
speaker_id    int,
conference_id int,
notes         VARCHAR(250),
PRIMARY KEY(id)
);

CREATE TABLE speaker
( 
id      int,
name    VARCHAR(30),
PRIMARY KEY(id)
);

ALTER TABLE note
  ADD CONSTRAINT  note_fk  FOREIGN KEY(speaker_id) REFERENCES  speaker(id);
	ADD CONSTRAINT  note_fk_1  FOREIGN KEY(conference_id) REFERENCES  conference(id);
  
ALTER TABLE user_profile
  ADD CONSTRAINT  user_fk  FOREIGN KEY(note) REFERENCES  note(id);    
      
INSERT INTO conference (id, year, month) VALUES (1, 2019, 'October');
INSERT INTO speaker (id, name) VALUES (1, 'President Nelson');
INSERT INTO speaker (id, name) VALUES (2, 'President Oaks');
INSERT INTO speaker (id, name) VALUES (3, 'President Eyering');
INSERT INTO note (id, speaker_id, conference_id, notes) VALUES (1, 1, 1, 'I am so excited for next conference - OH YEAH!');
INSERT INTO note (id, speaker_id, conference_id, notes) VALUES (2, 1, 1, 'Revelation is happiness');

INSERT INTO note (id, speaker_id, conference_id, notes) VALUES (3, 2, 1, 'Yay Oaks');
INSERT INTO note (id, speaker_id, conference_id, notes) VALUES (4, 2, 1, 'Families are forever');

INSERT INTO note (id, speaker_id, conference_id, notes) VALUES (3, 2, 1, 'School Presidents dad!');
INSERT INTO note (id, speaker_id, conference_id, notes) VALUES (4, 2, 1, 'Feel the spirit on a regular basis.');

      
      
ADD [ COLUMN ] [ IF NOT EXISTS ] column_name data_type [ COLLATE collation ] [ column_constraint [ ... ] ]