drop database if exists OstCoverService;

create database OstCoverService;

create user IF NOT EXISTS 'OstServiceUser'@'localhost' identified by 'automationIsKing01';

use OstCoverService;

create table Songs
(
    id       VARCHAR(8) primary key,
    name     varchar(50),
    artist   varchar(50),
    duration decimal(2, 2),
    ost_id   VARCHAR(8)
);

insert into Songs (id, name, artist, duration, ost_id)
VALUES ('345EF331', 'serious Surprise', 'Areeba Connolly', 3.71),
       ('DA7CB942', 'The Golden rest', 'Khadeejah Melendez', 3.95),
       ('C8413F28', 'The Golden Fantasy', 'Alaw Appleton', 6.87),
       ('053845B7', 'Every one need Images', 'Teagan Emerson', 7.89),
       ('67872394', 'space for Midnight', 'Karan Vance', 3.91),
       ('6B010AE7', 'The Golden Dream', 'Fox Palacios', 4.85),
       ('C37F8355', 'various dinner', 'Kitty Matthews', 4.62),
       ('A9C2A59A', 'castle of piano state', 'Safah Forrest', 4.93),
       ('A9524AA8', 'sexy Past', 'Dannielle Blackwell', 4.3),
       ('37A9977D', 'Change Of sauce', 'Phillipa Connor', 8.86),
       ('BD34D647', 'Sound Of Child', 'Harlow Harwood', 5.62),
       ('C5C89DCE', 'zzZzZzZz Place', 'Rojin Brandt', 5.82),
       ('A4C87BCA', 'lost with my Rhythm', 'Chelsy Barker', 3.66),
       ('4194152F', 'The last Midnight', 'Iman Burks', 3.87),
       ('B3BB9561', 'right Rhythm', 'Vanesa Lu', 3.68),
       ('08AB5346', 'the light rest', 'Amanpreet Foreman', 7.05),
       ('45A66808', 'fun at Life', 'Brittany Levy', 5.89),
       ('CCD3013E', 'restful valentine', 'Darcey Dawe', 9.36),
       ('02B6FC35', 'Tender Happiness', 'Anand Carlson', 7.41),
       ('4720D2A6', 'flowers in soul', 'Gabrielle Terry', 4.33),
       ('93AE4897', 'only good Solo Piano', 'Michalina Lewis', 6.01),
       ('7D74E5C1', 'popular summer', 'Kaisha Andrew', 8.25),
       ('7915A51A', 'still need brave Life', 'Roseanne Knapp', 9.49),
       ('E8533603', 'Thoughts Of Dream', 'Paisley Boyle', 7.26),
       ('B48BB62E', 'loud flute', 'Zoha Portillo', 6.68),
       ('6C40DCB8', 'REWILD madness', 'Kaiya Millington', 9.65),
       ('2CF18336', 'punk Lament', 'Kaila Kouma', 9.36),
       ('4BCBF584', 'an introduction to color', 'Charmaine Thornton', 7.97),
       ('605862A1', 'heavy Dreams', 'Breanna Wharton', 3.49),
       ('D89E75B6', 'your backseat kiss', 'Khushi Reed', 8.47);

create table OriginalSoundTracks
(
    id          VARCHAR(8) primary key,
    name        varchar(50),
    videoGame   varchar(50),
    releaseYear int
);