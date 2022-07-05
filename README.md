# Drivania CRUD

### 1) Installation


Install the dependencies and start the server.

```sh
$ cd drivania
$ composer install
$ php bin/console server:start
```

Your server address in your preferred browser: **localhost:8000**

Run migrations.

### 2) .env

- **DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name** change for Database.

[... to be completed]

## Backlog:
- Finish create and list routes
- Form validation
- Make vehicle_type field enum
- Start update and delete routes
- Testing
- Dockerize the app
