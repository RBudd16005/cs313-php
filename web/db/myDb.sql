//heroku pg:psql --app afternoon-earth-34301

CREATE TABLE user_profile
(
    id serial NOT NULL,
    username varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE sounds
(
    id serial NOT NULL,
    sname varchar(30) NOT NULL,
    author varchar(30),
    created date,
    PRIMARY KEY(id)
);
