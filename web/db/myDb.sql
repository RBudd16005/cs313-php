//heroku pg:psql --app afternoon-earth-34301

CREATE TABLE user_profile
(
    id int,
    username varchar(30),
    dob date,
    created date,
    PRIMARY KEY(id)
);

CREATE TABLE songs
(
    id int,
    name varchar(30),
    author varchar(30),
    year int,
    PRIMARY KEY(id)
);
