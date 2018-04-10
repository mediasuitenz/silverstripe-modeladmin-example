## Silverstripe CMS bug example

This project was created with `composer create-project silverstripe/installer modeladmin-bug 4.2.0`. Since then I've just added `mysite/code/ExampleModel.php` and `mysite/code/ExampleModelAdmin.php` (also a docker-compose and readme).

### Installation

 - `docker-compose up -d` or however you run your SS environments
 - `docker-compose exec web bash ./vendor/silverstripe/framework/sake dev/build`

### Steps to reproduce

 - Log into CMS http://localhost:8005/admin (admin/password)
 - Go to "Example Model Admin"
 - Navigate to the second page of results
 - Import the `example-models.csv` file to get more than 1 page of items
 - Click on a row or attempt to leave the page - get "WARNING: Your changes have not been saved."
