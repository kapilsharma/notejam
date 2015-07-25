# Creating and using database

For simplicity, we are using SQLite database. You can easily switch it to MySQL or any other database.

## Settings

SQLite database is already configured in `application/config/application.ini` file. Exact lines are:

```
[production]
resources.db.adapter = "PDO_SQLITE"
resources.db.params.dbname = APPLICATION_PATH "/../data/db/notejam.db"

[testing : production]
resources.db.adapter = "PDO_SQLITE"
resources.db.params.dbname = APPLICATION_PATH "/../data/db/notejam-testing.db"

[development : production]
resources.db.adapter = "PDO_SQLITE"
resources.db.params.dbname = APPLICATION_PATH "/../data/db/notejam-development.db"
```

Since out default environment is development, you must be expecting file `notejam/data/db/notejam-development.db` to exist. However this file do not exist and you have to create it.

## Setting up SQLite

In case SQLite is not already installed on your system, please first install it. On ubuntu 14.04, you can use following command to install SQLite

```bash
sudo apt-get install sqlite3 libsqlite3-dev
```

## Creating database

Once you installed SQLite, go to project root `<clonedir>/zendframework1/notejam` and run following command

```bash
php scripts/load.sqlite.php
```

This will create database file.