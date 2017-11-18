# Installation steps
* clone the repo `git clone https://github.com/mpdx/fictional-pancake.git`
* install dependencies `composer install`
* set up enviorment variables `cp .env.example .env`
* (optionally) edit `.env` file
* migrate sqlite db `php artisan migrate`
* add someone who quitted recenlty `php artisan quitter`
* set up your http server or use php build-in: `php -S localhost:8000 -t ./public` 
