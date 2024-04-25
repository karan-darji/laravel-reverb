## About Laravel Reverb

Reverb is a first-party WebSocket server for Laravel applications, bringing real-time communication between client and server directly to your fingertips. 

## Setup Instructions
- Clone this repository in your local
- Create .env file, copy all the variables from .env.example and configure your database credentials in .env file
- Run the below commands
```
# install PHP dependency
composer install

# install node dependency
npm install

# run the Vite development server
npm run dev

# start the queue worker
php artisan queue:work

# start the reverb
php artisan reverb:start
