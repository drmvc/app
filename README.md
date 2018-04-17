# DrMVC Application

Skeleton of application based on DrMVC Framework.

## What inside

* Support for environment variables is implemented through `Dotenv\Dotenv` class
* Few dummy classes inside `app/Controllers` folder
* Ready for usage TWIG template engine, templates in `app/Views`
* Several popular modules added to `packages.json`
* `gulpfile.js` configured to simplify the assembly of static files

## How to install

For first need to create new project from the skeleton:

    composer create-project drmvc/app application
    cd application

For enabling support of `gulpfile.js` need to install `gulp` tool

    npm install -g gulp

Now need to install dependencies and build static files

    npm install
    gulp

Let's run the php localhost server

    cd public
    php -S localhost:8000

Now you can open your web-browser and go to http://localhost:8000

## Links

* [DrMVC Project](https://drmvc.com/)
* [DrMVC Demo](https://github.com/drmvc/demo)
