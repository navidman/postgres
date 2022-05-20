hello everyone.
this is a test app.
please config .env file. there is env.examle as sample.
please run:
php artisan migrate
php artisan db:seed
please provide data like described below in postman to test this app.
sapmle api request for test in postman:
{
"table": "cars"
"columns": ["name", "color"]
}
there is products table there too. please check the migrations to see 
the fields that you can use for group by.
