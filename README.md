# FEEDBACK APP WITH VANILLA PHP

## Setup
- Clone this repository on your computer
- Move it to the `/opt/lampp/htdocs`(linux) or `\xampp\htdocs`(windows) folder on your computer
- Start your PHP server(Apache or Nginx).
- Create a database and add a column `feedback` with the fields below

| key | type|
|-----|------|
|id(PK)| use db default(auto-increment)|
|name| string|
|email| string|
|feedback| text|
|date| current_timestamp/date|

> Note: Database type should be MySQL.

- Visit `localhost:[default-server-port]/feedback-app-php` in your browser
- The floor is yours from here.
