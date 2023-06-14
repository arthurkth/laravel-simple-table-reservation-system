## Steps

Follow the steps below to run the project locally:

1. Create a MySQL database with the name `reservation_db`.
2. Configure the `.env` file with the necessary database credentials.
3. Run the following commands in the terminal:

   ```shell
   php artisan key:generate
   php artisan migrate
   php artisan db:seed --class=UserSeeder
   php artisan db:seed --class=TableSeeder

These commands will generate the application key, migrate the database tables, and seed the database with sample data.

## Usage
Once the project is set up and the database is seeded, you can use the following credentials to log in:

Email: joao@email.com
Password: usuario123

Email: arthur@email.com
Password: usuario123

Email: maria@email.com
Password: usuario123