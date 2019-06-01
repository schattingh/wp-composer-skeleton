#  WordPress Composer Skeleton

##  Why?

Installing WordPress using Composer makes Wordpress a dependency of the current project, which is typically focussed on the development of a theme.  It keeps the WordPress core and plugins out of source control, and makes it very easy to update or roll back versions by updating the `composer.json` file.

##  Dependencies

- [Composer](https://getcomposer.org/)
- All the usual Wordpress dependencies

##  How to use

- Clone this repository
- Remove the git history and origin info if desired by deleting the `.git` directory
- Copy `sample-local-config.php` to `local-config.php` and update with the relevant details.  The `local-config.php` file contains sensitive information and is not (and should not) be committed to source control.
- From the repository root, run `composer install`.  This will download the wordpress core, selected plugins and themes as defined in `composer.json`
- If additional plugins are required, locate them on https://wpackagist.org/, update `composer.json` and run `composer install`
