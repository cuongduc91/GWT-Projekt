# Project-2020

A Project 🚀 only for the subject, namely Fundamental Web-Technique, applied Docker containers, PHP, MySQL, HTML, CSS.

# Docker

- Download and Install [Docker](https://www.docker.com)
- Run the .yml file to build the containers as environment
  `docker-compose build`
- Run docker: `docker-compose up`
  or
- Run docker in background
  `docker-compose up -d`

# db

- As local MySQL database running on port 3320

# DBeaver

- Download and install [DBeaver](https://dbeaver.io) as GUI configuration to the MySQL database
- Configuration as MYSQL_USER/MYSQL_PASSWORD/MYSQL_ROOT_PASSWORD in development.env file on port 3320 (/extra/connection.php)
- There is a button (+ 🔌) --> select MySQL.
- Execute the db/script/cripts.sql in the new MySQL editor to create a table for storing users

# Environment file

- Create the development.env file in the main folder.
- Env. Parameters: MYSQL_ROOT_PASSWORD, MYSQL_USER (optional), MYSQL_PASSWORD (optional)

# www

- As the php dockerfile folder running on localhost:8010

# Note for granting privileges to another user

## In terminal:

```
#indentify the docker ID
docker ps

docker exec -it <container name or id>   bash
mysql -u root -p
//loging with root password
GRANT ALL PRIVILEGES ON php_data.* TO '<user name>'@'%' WITH GRANT OPTION;
```
