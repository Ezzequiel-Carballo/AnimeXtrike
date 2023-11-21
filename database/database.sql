CREATE database IF NOT EXISTS anime_Xtrike;

USE anime_Xtrike;

CREATE table IF NOT EXISTS anime_catalogo(

    id                  int(255) auto_increment not null,
    name                varchar(100),
    image_path          varchar(255),
    type                varchar(200),
    puntaje             int(255),
    description         varchar(255),
    created_at          datetime,

    CONSTRAINT pk_catalogo PRIMARY KEY (id)
    
) ENGINE = InnoDB;

CREATE table IF NOT EXISTS users(

    id                  int(255) auto_increment not null,
    role                varchar(20),
    name                varchar(100),
    surname             varchar(200),
    email               varchar(255),
    password            varchar(255),
    created_at          datetime,

    CONSTRAINT pk_users PRIMARY KEY (id)  

)ENGINE = InnoDB;

CREATE TABLE anime_episode(

    id              int(255) auto_increment not null,
    anime_id        int(255) not null,
    name            varchar(100) not null,
    episode         varchar(100),
    image_path      varchar(255),
    video_path      varchar(255),
    created_at      datetime,

    CONSTRAINT pk_animeEpisode PRIMARY KEY (id),
    CONSTRAINT fk_anime_episode FOREIGN KEY (anime_id) REFERENCES anime_catalogo(id)

)ENGINE = InnoDb;