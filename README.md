
# Codeigniter 4 - seed - docker

This code are contain PHP with Codeigniter 4 Framework, which was configure for web Apps & Rest API. Web Apps is used in www/web folder and Rest API is used in www/html. This .git contains CRUD both web and api with example Too


## Installation

Clone this project

```bash
    gh repo clone taufikrendi/codeigniter4-seed-docker
    or 
    git clone https://github.com/taufikrendi/codeigniter4-seed-docker.git
```

Create .env in www/web or www/html (depends on your apps) and add this code snippet.
(This) Standard from docker-compose.yml project.

```bash
    CI_ENVIRONMENT = development
    database.default.hostname = db-master
    database.default.database = account_db
    database.default.username = account_master_db
    database.default.password = secret_password
    database.default.DBDriver = Postgre
    database.default.port = 5432
    database.default.DBPrefix = <fill this>
```

Then Migrate database with 

```bash
    php spark migrate
```

To Run the Web Apps 

```bash
    http://yourip/
```

To Run the Web Apps 

```bash
    http://yourip:81/
```
## Authors

- [@taufikrendi](https://github.com/taufikrendi) - Taufik Rendi Anggara

