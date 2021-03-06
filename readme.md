## Broadway Musicals API

With the Broadway musicals API, you can keep track of musicals, actors, and songs. You can use it to keep a database of shows you've seen or want to see, or just track all the musicals that are currently open on Broadway. The API is designed to be easy to use for everyone, even those who don't have much experience coding.

This API uses RESTful principles. REST stands for representational state transfer, an architectural style for designing applications. The standard HTTP methods of a RESTful API usually allow you to Create, Read, Update, or Delete a database entry. You can create, read, and update each record via AJAX.

View the API documentation [here](https://audreysharp.gitbooks.io/broadway-musicals-api/content/).

### Setup

1. Clone this repository.
2. In MAMP, set the project root to the '**public**' folder of the project.
3. The database the tables are stored in is named '**broadway**'.
4. Ensure that you already have or have created a database named '**broadway**'.
5. Run `php artisan:migrate` to make the tables for the API.
6. Point your browser to **http://localhost:8888**.  This is where you will find the link to the documentation.

You can use any code library or GUI that allows you to make POST requests to interact with the API.
