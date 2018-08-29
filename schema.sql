--MYSQL QUERIES
create table if not exists digimons (
  `id` int(11) auto_increment,
  `name` varchar(255) not null,
  `level` varchar(40) not null,
  `type` varchar(40) null,
  `desc` text null,
  primary key (id)
) engine=innodb;

create table if not exists digievolutions (
  `id` int auto_increment,
  `from_digimon_id` int(11),
  `to_digimon_id` int(11),
  primary key (id),
  foreign key (from_digimon_id) references digimons(id),
  foreign key (to_digimon_id) references digimons(id)
) engine=innodb;


--POSTGRES QUERIES
create table if not exists digimons (
  id int,
  name varchar not null,
  level varchar not null,
  type varchar null,
  "desc" text null,
  primary key (id)
);

create table if not exists digievolutions (
  id serial primary key,
  from_digimon_id int,
  to_digimon_id int,
  foreign key (from_digimon_id) references digimons(id),
  foreign key (to_digimon_id) references digimons(id)
);
