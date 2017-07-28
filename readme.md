![myimage-alt-tag](https://github.com/sunil16/laravel5.4_demo_application/blob/master/public/img/Selection_012.png)
Things you have to check:

    php and laravel version
    PHP 7.0.15
    Laravel Framework 5.4.17

    Installation
    $git clone https://github.com/sunil16/Mailer_Test_Forgot_Passward_RESTapi.git projectname
    $cd projectname
    $composer install
        Create a database with name "mailer_laravel_db".
        set your Database Name,User,Password in the two files .env and database.yml!
        set your smtp datils in your .env file.
          MAIL_DRIVER=smtp
          MAIL_HOST=smtp.gmail.com
          MAIL_PORT=465
          MAIL_USERNAME=example@gmail.com
          MAIL_PASSWORD=exampl123
          MAIL_ENCRYPTION=ssl
        $php artisan migrate
        $php artisan serve
        to start the app on http://127.0.0.1:8000/send_mail

        Test api method with PostMan:

         1) succuss =>
         ![myimage-alt-tag](https://github.com/sunil16/Mailer_Test_Forgot_Passward_RESTapi/blob/master/public/images/Selection_019.png)
          <br>
         2) failure =>
          ![image](https://github.com/sunil16/Mailer_Test_Forgot_Passward_RESTapi/blob/master/public/images/Selection_020.png)
