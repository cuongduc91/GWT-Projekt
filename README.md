# Project-2020

# Docker

- Download and Install [Docker](https://www.docker.com)
- Run the .yml file to build the containers as environment
  `docker-compose build`
- Run docker: `docker-compose up`
- Run docker in background
  `docker-compose up -d`

# db

- As local MySQL database running on port 3320

# DBeaver

- Download and install [DBeaver](https://dbeaver.io) as GUI configuration to the MySQL database
- Configuration as MYSQL_USER/MYSQL_PASSWORD in development.env file on port 3320

# Environment file

- Create the development.env file in the main folder.
- Env. Parameters: MYSQL_USER, MYSQL_PASSWORD, MYSQL_ROOT_PASSWORD...

# www

- As the php dockerfile folder running on localhost:8010

# Important!

## Granting privileges to another user

## In terminal:

```
docker exec -it <container name or id>   bash
mysql -u root -p
//loging with root password
GRANT ALL PRIVILEGES ON php_data.* TO '<user name>'@'%' WITH GRANT OPTION;
```
