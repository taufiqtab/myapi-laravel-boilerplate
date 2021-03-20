# Laravel 7 Boilerplate Project with InfyOm and Passport for RESTFUL Api 

Laravel Boilerplate with [AdminLTE](https://adminlte.io/) Theme with [InfyOm Laravel Generator](https://github.com/InfyOmLabs/laravel-generator).
Following things are ready to be used directly with AdminLTE Theme.

- Signup
- Login
- Forgot Password
- Password Reset
- Home Layout with Sidebar
- Oauth2 / Passport token
- Permission
- Postman json Example
- OpenAPI/Swagger Documentation *WIP
## Packages Installed

- InfyOm Laravel Generator
- AdminLTE Templates
- Laravel UI
- Laravel Collective
- Laravel Passport
- Spatie

## Usage

1. Clone/Download a repo.
2. Copy `.env.example` file to `.env` & Setup your environment variables
3. Run `composer install`
4. Generate application key by running `php artisan key:generate`

### Create CRUD Model

Powered by InfinyOm:

php artisan infyom:api $MODEL_NAME

php artisan infyom:scaffold $MODEL_NAME

php artisan infyom:api_scaffold $MODEL_NAME

custom Table Name :
php artisan infyom:scaffold $MODEL_NAME --tableName=custom_table_name

custom primary_Key :
php artisan infyom:scaffold $MODEL_NAME --primary=custom_name_id

custom Prulal :
php artisan infyom:scaffold $MODEL_NAME --plural=AuthorBooks

prefix :
php artisan infyom:scaffold $MODEL_NAME --prefix=admin

ignore field :
php artisan infyom:scaffold $MODEL_NAME --ignoreFields=geo_location,last_login

paginate :
php artisan infyom:api $MODEL_NAME --paginate=10

datatable :
php artisan infyom:scaffold $MODEL_NAME --datatables=true

spesific view only :
php artisan infyom:scaffold $MODEL_NAME --views=index,create,edit,show



### Create SCAFFOLD API From Table 

php artisan infyom:scaffold $MODEL_NAME --fromTable --tableName=$TABLE_NAME

with Spesific DB:
php artisan infyom:scaffold $MODEL_NAME --fromTable --tableName=$TABLE_NAME --connection=connectionName

### Feel free to Contribute
- clone this repo
- make your new branch
- modify / fix / add new feature
- push it
- create a pull request
