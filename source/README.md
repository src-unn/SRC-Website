#![alt text](../docs/src-logo.jpg "SRC Logo") Website of the Software & Robotics Club (SRC)

* [Source Directory Overview](#overview)
* [Coding Style Standards](#standards)
* [System Requirements](#requirements)
* [Development Setup Procedure](#setup)
* [Contributing to the Project](#submit)

###<a name="overview"></a> Source Directory Overview
As the name implies, this directory contains the source codes which implement the designs expressed 
by the system designers. These codes are built on the Laravel PHP Framework (v5.3~).
Check out [Laravel Documentation](https://laravel.com/docs/5.3/) for further details.

###<a name="standards"></a> Coding Style Standards
To ensure that the source code remains maintainable in the foreseeable future, standards are strictly 
adhered to (unless otherwise dictated), from framework setups to to API integrations. All contributors are advised to 
write and submit standard codes, with consistent styles. Precisely, the [PSR standards](http://www.php-fig.org/psr/) 
are applied in this project.
Refer to [PSR-1_Basic Coding Standards](../docs/PSR-1_BCS.pdf) and [PSR-2_Coding Style Guide](../docs/PSR-2_CSG.pdf)
for details.

###<a name="requirements"></a> System Requirements
The Laravel framework has a few system requirements. You need to make sure your local server server (XAMPP or WAMP) 
meets the following requirements:
 
* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

If you're using the latest version of your XAMPP or WAMP distribution, you have nothing to worry about.

Also, Laravel utilizes [Composer](https://getcomposer.org/) to manage its dependencies. 
So, before using Laravel, make sure you have Composer installed on your machine.

###<a name="setup"></a> Development Setup Procedure

* Step1: Install any git client of your choice. These are recommended
    * [SourceTree](https://www.sourcetreeapp.com/download/) //easier to install if you're using mobile data
    * [GitHub Desktop](https://desktop.github.com/)
* If you have not installed [Composer](https://getcomposer.org/) already, install it and add the path to composer.phar to your path-variables.
* Clone your fork of the this repository into a folder/directory in your **htdocs** (for XAMPP users) or **www** (WAMP) directory
* After a successful clone, open your windows command prompt (Linux Shell).
* Navigate to the project directory **project-clone/source/** and run the following command:

    ```shell
    php composer update
    ```

* After a successful update, make a copy of /source/.env.example and rename it to .env using your IDE.
* Run the following command to generate a unique app key in your newly created .env file:

    ```shell
    php artisan key:generate
    ```

* Open the .env file and set these parameters -APP_URL, DB_HOST, DB_DATABASE,DB_USERNAME, DB_PASSWORD.
  Leave the rest as you found them.


**If you've followed these procedures without errors, you are ready to go.**

Turn on your local server and visit the app-url with you web browser. The next thing to do is up to you.

###<a name="submit"></a> Contributing to the Project
Check out our [contribution guide](../CONTRIBUTING.md) for instructions on how to contribute to this project.