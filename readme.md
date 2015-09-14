##Skill Enhancement Programme Website

##Build Instruction
1. Clone<br>
2. composer install<br>
3. php artisan key:generate<br>
4. Add the details of DB_HOST,DB_DATABASE,DB_USERNAME,DB_PASSWORD in .env file<br>
   Add the details of mail_driver,mail_port,mail_host,mail_username,mail_password,mail_encryption<br>
   fill in the 'from' and 'name' in config\mail.php<br>
5. php artisan migrate<br>
6. php artisan db:seed<br>
7. php artisan serve<br>