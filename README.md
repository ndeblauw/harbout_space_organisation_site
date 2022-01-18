# Organisation website
This is a dummy Laravel website for an organisation. 

## Description
The repository servers as a real-life demo for the matter taught in the
[Modern Web Application II](https://harbour.space/computer-science/courses/modern-web-application-2-431) course at
[Harbour.Space University](https://harbour.space) in January 2022.

## Getting Started

### Dependencies
This is a standard Laravel project. All dependencies are listed in <code>composer.json</code>.

### Installing
The standard way of installing a Laravel application suffices

Clone the repository
```
git clone https://github.com/ndeblauw/harbout_space_organisation_site.git
```

Go into the app directory & install composer dependencies

```
composer install
```

Copy <code>.env.example</code> to <code>.env</code> and make sure to set the application name, application url and database parameters.

Set the application key

```
php artisan key:generate
```

Migrate so the tables are created

```
php artisan migrate
```

If wanted, you can seed the app with some test data

```
php artisan db:seed
```

Install npm dependencies and compile assets

```
npm install && npm run dev
```

### Executing the program
There are three levels of access:
* **Browsing** the site: go to the main domain of the site and start browsing.
* **User functions**: create an account and/or login to get access to the user functions. Now it is possible to register for activities.
* **Admin functions**: set the "is_admin" property of a user to 1. Once you have an admin, you can make other users admin as well through the website interface

## Help
If you don't understand something:
* Use the knowledge you gained during class. Debug, add ray commands (or dd() statements to watch inbetween pieces in the code execution)
* Get help from a fellow (student) to get you going

## Authors

Nico Deblauwe
- github: [ndeblauw](https://github.com/ndeblauw)

## Version History
No formal versioning is used in this project.

## License
This project is [copyleft](https://en.wikipedia.org/wiki/Copyleft) protected.

## Acknowledgments
Thank you to [Harbour.Space University](https://harbour.space) for organising the Modern Web Application II course.
