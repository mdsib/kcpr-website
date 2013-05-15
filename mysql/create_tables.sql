use kcpr;

create table artists (
  a_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(256),
  description TEXT(3000)
);

create table labels (
  l_id int not null auto_increment primary key,
  name varchar(256),
  description text(3000)
);

create table djs (
  d_id int not null auto_increment primary key,
  first_name varchar(256),
  last_name varchar(256),
  email varchar(256),
  phone varchar(256),
  pw char(60)
);

create table shows (
  s_id int not null auto_increment primary key,
  start_date date,
  end_date date,
  show_type int,
  title varchar(256),
  days int,
  start_time time,
  end_time time,
  description text(3000)
);

create table hosts (
  h_id int not null auto_increment primary key,
  show_id int references shows.s_id,
  dj int references djs.d_id,
  name varchar(256)
);

create table albums (
  a_id int not null auto_increment primary key,
  year int,
  label int references labels.l_id,
  entry_date date,
  add_date date,
  format int,
  category int,
  description text(3000)
);

create table tracks (
  t_id int not null auto_increment primary key,
  duration time,
  tempo int,
  ending int,
  vox_start time,
  track_no int,
  album int references albums.a_id,
  description text(3000)
);

create table track_artists (
  ta_id int not null auto_increment primary key,
  track int references tracks.t_id,
  artist int references artists.a_id
);

/*create table spins (
  id int not null auto_increment primary key,
  track int references gracks.id,
  show int references show.id,
  playlist_no int
);*/
  



  
