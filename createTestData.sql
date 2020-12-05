drop database if exists OstCoverService;

create database OstCoverService;

create user IF NOT EXISTS 'OstServiceUser'@'localhost' identified by 'automationIsKing01';

use OstCoverService;

create table Songs
(
    id VARCHAR
);
