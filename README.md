# Drivania CRUD

### 1) Installation


Install the dependencies and start the server.

```sh
$ cd drivania
$ composer install
$ php bin/console server:start
```

Your server address in your preferred browser: **localhost:8000**


Create the ride services table: 

```
create table ride_services

(
uuid        varchar(255) not null,
pickup      json         not null,
dropOff     json         not null,
vehicleType enum('sedan', 'van', 'suv')         not null
);

create unique index ride_services_uuid_uindex
on ride_services (uuid);

alter table ride_services
add constraint ride_services_pk
primary key (uuid);
```

### 2) .env

- **DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name** change for Database.

[... to be completed]

## Backlog:
- Finish create and list routes
- Form validation
- Make vehicle_type field enum
- Start update and delete routes
