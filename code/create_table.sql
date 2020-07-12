create table dis_score(
	num int,
	school varchar(15),
	department varchar(15),
	discipline_name varchar(15),
	gsat varchar(15),
	chi  float, 
	eng float,
	math_a float,
	math_b float,
	phy float,
	che float,
	bio float,
	his float,
	geo float,
	cit float,
	ele float,
	same_1 varchar(3),
	smae_2 varchar(3),
	smae_3 varchar(3),
	rank_108 int,
	select_score_108 float,
	ori_score_108 float,
	avg_108 float,
	num_want_108 int,
	num_sel_108 int,
	low_108 float,
	high_108 int,
	people_in_108 int,
	percent_in_108 float,
	rank_107 int,
	select_score_107 float,
	ori_score_107 float,
	avg_107 float,
	num_want_107 int,
	num_sel_107 int,
	low_107 float,
	high_107 int,
	people_in_107 int,
	percent_in_107 float,
	profile varchar(60)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table dis_school(
	num int,
	pm varchar(2),
	system int,
	name varchar(15),
	field int,
	field_name varchar(15),
	discipline int,
	discipline_name varchar(15),
	study int,
	study_name varchar(15),
	department int,
	department_name varchar(15),
	phone varchar(15),
	exten varchar(15),
	fax varchar(15),
	mail varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


create table names(
	num int,
	name varchar(15),
	pm varchar(2),
	city varchar(4),
	portal int ,
	address varchar(30),
	phone varchar(15),
	web varchar(60),
	system int
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

load data local infile './dis_school.csv'
into table dis_school
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile './dis_score.csv'
into table dis_score
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile './names.csv'
into table names
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

