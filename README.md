# Assessment: Order and Writer API

## Requirements

This API require the following application to be available on local:
- PHP version 7.4 and above
- MySQL
- PostMan
- xampp (for database)

## How to prepare the application

### Database
1. Open `xampp` and check for MySQL, then click the start button.
2. Open your SQL IDE (MySQL Workbench / SQLyog), and create a database named `codeigniter`.
NOTE:
- Needed tables for the database will be provided by the migration and seeders in the repository

### Repository
1. Clone this repository and open it in Visual Studio Code or any IDE you prefer.
2. Open the terminal (below the IDE) and run `php spark` to verify if PHP Spark is already available.
3. Run `php spark migrate` to execute DB commands on creating tables
4. Once done, run `php spark db:seed` to import default database values into their respective tables.
4. Run `php spark serve` and if no errors displayed, you can go to a browser and go to `http://localhost:8080`


## Run application using Postman
To try the application:

1. Download the sample postman collection here: https://drive.google.com/file/d/1XPt8Kpj2q8dPaHboZ1S3OqA8i6GEPayd/view?usp=drive_link
2. Open postman, click file -> import. The create a workspace or select an existing one, and drop the postman collection file to import.
3. Once done, check the postman collection where the import is applied.
- It should have 2 collections: Order API and Writer API
4. Try and run each of the endpoints.
