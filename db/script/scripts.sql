create table mobileshop.user (
	user_id SERIAL primary key,
	user_name varchar(100) not null unique,
	user_pass varchar(100),
	user_email varchar(100)
);
drop table mobileshop.user;

select * from mobileshop.user;
delete from mobileshop.user;

