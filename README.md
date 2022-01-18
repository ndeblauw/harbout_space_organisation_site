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

    https: git clone https://github.com/ndeblauw/harbout_space_organisation_site.git

Install composer dependencies

    composer install

Copy <code>.env.example</code> to <code>.env</code> and make sure to set the application name, application url and database parameters.

Make sure the application key is set

    php artisan key:generate

Migrate so the tables are created

    php artisan migrate

If wanted, you can seed the app with some test data

    php artisan db:seed

### Executing program

* How to run the program
* Step-by-step bullets
```
code blocks for commands
```

## Help

Any advise for common problems or issues.
```
command to run if program contains helper info
```

## Authors

Nico Deblauwe
- github: [ndeblauw](https://github.com/ndeblauw)

## Version History
No formal versioning is used in this project.

## License
This project is [copyleft](https://en.wikipedia.org/wiki/Copyleft) protected.

## Acknowledgments
Thank you to [Harbour.Space University](https://harbour.space) for organising the Modern Web Application II course.
