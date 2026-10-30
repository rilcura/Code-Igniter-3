# CodeIgniter 3 Blog Exercise

A small PHP MVC exercise built on the bundled CodeIgniter 3 framework. The custom blog controller reads database rows and passes them to a server-rendered view.

## Implementation

- `application/controllers/Blog.php` loads the database library and queries `blog_table_name`.
- `application/views/blog_view.php` renders each row's `blog_title`, `blog_description`, and `date_posted`.
- `application/config/routes.php` retains the default welcome controller.

**Stack:** PHP, CodeIgniter 3, a configured database driver.

This repository demonstrates controller-to-view data flow and a basic database read. The bundled framework is third-party code, not a claim of original framework development.

## Local setup

1. Use a local PHP environment compatible with the bundled CodeIgniter version. The legacy minimum in `composer.json` does not establish compatibility with every current PHP release.
2. Configure your local database connection in `application/config/database.php`.
3. Create a table named `blog_table_name` with the three fields used by the view. No database migration or seed script is included.
4. Serve the repository root through a local PHP web server.

For a development preview:

```sh
php -S 127.0.0.1:8000
```

Open `http://127.0.0.1:8000/index.php/blog`. The root route displays the framework welcome page.

## Current scope and limitations

The custom code lists blog records. There is no complete authoring interface, authentication flow, or application-specific automated test suite. The view prints database values directly, so output escaping and input validation need attention before any public deployment.

The Composer development scripts reference framework test infrastructure and dependencies. Their presence does not establish working application tests.

## Further work

Add a reproducible schema, sample records, escaped rendering, and a tested setup guide before extending the exercise into a blog application.

## Framework documentation and license

Preserved upstream information is available in [readme.rst](readme.rst) and [license.txt](license.txt).
