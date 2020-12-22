drop database if exists OstCoverService;

create database OstCoverService;

create user IF NOT EXISTS 'OstServiceUser'@'localhost' identified by 'automationIsKing01';
grant select on OstCoverService.* to 'OstServiceUser'@'localhost';

use OstCoverService;

create table OriginalSoundTracks
(
    id          VARCHAR(8) primary key,
    name        varchar(50),
    videoGame   varchar(50),
    releaseYear int
);

insert into OriginalSoundTracks (id, name, videoGame, releaseYear)
values ('035D0C57', 'No justice', 'Czechdorile', 2015),
       ('78F912C1', 'Library of liberty', 'Brazue Rkeysouthden', 1631),
       ('4C385113', 'New dimension', 'Theme', 4324),
       ('84520CC2', 'Grains of salt', 'Shallblic Rutiale', 2314),
       ('6A75672F', 'Favoritism', 'Masdevi', 3245),
       ('A42C93BE', 'Emergency', 'Andnea Hongdankhstan', 6578),
       ('8703A4C7', 'Battle with myself', 'Layfe Andni', 7851);

create table Songs
(
    id       VARCHAR(8) primary key,
    name     varchar(50),
    artist   varchar(50),
    duration decimal(4, 2),
    ost_id   VARCHAR(8),
    foreign key (ost_id) references originalsoundtracks (id)
);

insert into Songs (id, name, artist, duration, ost_id)
VALUES ('345EF331', 'serious Surprise', 'Areeba Connolly', 3.71, '035D0C57'),
       ('DA7CB942', 'The Golden rest', 'Khadeejah Melendez', 3.95, '035D0C57'),
       ('C8413F28', 'The Golden Fantasy', 'Alaw Appleton', 6.87, '035D0C57'),
       ('053845B7', 'Every one need Images', 'Teagan Emerson', 7.89, '035D0C57'),
       ('67872394', 'space for Midnight', 'Karan Vance', 3.91, '78F912C1'),
       ('6B010AE7', 'The Golden Dream', 'Fox Palacios', 4.85, '78F912C1'),
       ('C37F8355', 'various dinner', 'Kitty Matthews', 4.62, '78F912C1'),
       ('A9C2A59A', 'castle of piano state', 'Safah Forrest', 4.93, '78F912C1'),
       ('A9524AA8', 'sexy Past', 'Dannielle Blackwell', 4.3, '4C385113'),
       ('37A9977D', 'Change Of sauce', 'Phillipa Connor', 8.86, '4C385113'),
       ('BD34D647', 'Sound Of Child', 'Harlow Harwood', 5.62, '4C385113'),
       ('C5C89DCE', 'zzZzZzZz Place', 'Rojin Brandt', 5.82, '4C385113'),
       ('A4C87BCA', 'lost with my Rhythm', 'Chelsy Barker', 3.66, '84520CC2'),
       ('4194152F', 'The last Midnight', 'Iman Burks', 3.87, '84520CC2'),
       ('B3BB9561', 'right Rhythm', 'Vanesa Lu', 3.68, '84520CC2'),
       ('08AB5346', 'the light rest', 'Amanpreet Foreman', 7.05, '84520CC2'),
       ('45A66808', 'fun at Life', 'Brittany Levy', 5.89, '6A75672F'),
       ('CCD3013E', 'restful valentine', 'Darcey Dawe', 9.36, '6A75672F'),
       ('02B6FC35', 'Tender Happiness', 'Anand Carlson', 7.41, '6A75672F'),
       ('4720D2A6', 'flowers in soul', 'Gabrielle Terry', 4.33, '6A75672F'),
       ('93AE4897', 'only good Solo Piano', 'Michalina Lewis', 6.01, 'A42C93BE'),
       ('7D74E5C1', 'popular summer', 'Kaisha Andrew', 8.25, 'A42C93BE'),
       ('7915A51A', 'still need brave Life', 'Roseanne Knapp', 9.49, 'A42C93BE'),
       ('E8533603', 'Thoughts Of Dream', 'Paisley Boyle', 7.26, 'A42C93BE'),
       ('B48BB62E', 'loud flute', 'Zoha Portillo', 6.68, '8703A4C7'),
       ('6C40DCB8', 'REWILD madness', 'Kaiya Millington', 9.65, '8703A4C7'),
       ('2CF18336', 'punk Lament', 'Kaila Kouma', 9.36, '8703A4C7'),
       ('4BCBF584', 'an introduction to color', 'Charmaine Thornton', 7.97, '8703A4C7');