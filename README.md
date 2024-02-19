Download XAMPP 8.1.25: Visit the official XAMPP website and download version 8.1.25 suitable for your operating system.

Install XAMPP: Follow the installation instructions provided on the website to install XAMPP on your system.

Download Composer: Go to the Composer website and download the Composer installer appropriate for your system.

Download MongoDB: Download MongoDB from the official website. Choose the version that best suits your requirements.

Download PECL MongoDB PHP Extension (1.13.0 stable): On the PECL website, locate the PHP MongoDB extension version 1.13.0 stable, released on 2022-03-23. Click on the provided link to download the DLL file. Ensure you download the "8.1 Thread Safe (TS) x64" version.

Configure PHP Extension for MongoDB:

After downloading the PHP MongoDB DLL file, navigate to the directory where XAMPP is installed (usually in the C drive).
Find the PHP extensions folder within XAMPP: xampp/php/ext.
Copy the php_mongodb.dll file and paste it into the PHP extensions folder.
Open the php.ini configuration file located in xampp/php.
Add the following line at line number 940: extension=php_mongodb.dll.
Save the changes to php.ini.
Restart XAMPP: Restart your computer to ensure the changes take effect.

Set up your project files:

Place your project files in the htdocs folder within your XAMPP directory.
Create a Composer configuration file (composer.json):

In your project directory, create a file named composer.json.
Inside composer.json, include the following code:


{
    "require": {
        "mongodb/mongodb": "^1.11"
    }
}

Install Dependencies using Composer:

Open a terminal or command prompt and navigate to your project directory.
Run the command: composer install.
Run your code: With all dependencies installed, you can now run your code within the XAMPP environment.
