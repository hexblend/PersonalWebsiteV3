# bedrock-sage-vue-starter

Boilerplate for a modern wordpress theme development environment based on:

-   [Bedrock](https://roots.io/bedrock/)
-   [Sage](https://roots.io/sage/)
-   [Vue.js](https://vuejs.org/)
-   [Tailwinds CSS](https://tailwindcss.com/)
-   [Laravel Mix](https://laravel-mix.com/)

Sage theme setup by [robbinworks](https://github.com/robbinworks/sage). Go and show him some love 🌟

## Installation

1. Clone this repository:
    ```sh
    $ git clone https://github.com/vladbbr/bedrock-sage-vue-starter
    ```
2. Run
    ```sh
    $ composer install
    ```
3. Update environment variables in the `.env` file:

-   Database variables
    -   `DB_NAME` - Database name
    -   `DB_USER` - Database user
    -   `DB_PASSWORD` - Database password
    -   `DB_HOST` - Database host
    -   Optionally, you can define `DATABASE_URL` for using a DSN instead of using the variables above (e.g. `mysql://user:password@127.0.0.1:3306/db_name`)
-   `WP_ENV` - Set to environment (`development`, `staging`, `production`)
-   `WP_HOME` - Full URL to WordPress home (https://example.com)
-   `WP_SITEURL` - Full URL to WordPress including subdirectory (https://example.com/wp)
-   `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`
    -   Generate with [wp-cli-dotenv-command](https://github.com/aaemnnosttv/wp-cli-dotenv-command)
    -   Generate with [our WordPress salts generator](https://roots.io/salts.html)

4. Go to your theme's folder (i.e. `web/app/themes/sage`) and run:

```
$ composer install
$ yarn
```

5. Set the document root on your webserver to Bedrock's `web` folder: `/path/to/site/web/`

6. Access WordPress admin at `https://example.com/wp/wp-admin/`

## Documentation

-   Bedrock - [https://roots.io/bedrock/docs/](https://roots.io/bedrock/docs/).
-   Sage - [https://roots.io/sage/docs/theme-installation/](https://roots.io/sage/docs/theme-installation/)
-   Tailwinds - [https://tailwindcss.com/docs/installation/](https://tailwindcss.com/docs/installation/)
-   Laravel Mix - [https://laravel.com/docs/5.8/mix](https://laravel.com/docs/5.8/mix)

## Credits

-   [Roots](https://roots.io)
-   [robbinworks](https://github.com/robbinworks/)
