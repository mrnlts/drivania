# Drivania CRUD

### 1) Installation

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

[... to be completed]
