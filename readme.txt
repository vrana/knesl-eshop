This is a simple PHP web application how it was written in its early days.
It doesn't use any framework, dependency injection, just a bunch of simple global functions.
Everything starts in file .htaccess where routes and error document are defined.
It also prepends file functions.php to all PHP files so that they don't need to include it.
It requires Apache 2.4 (rewrite rule flag [END]) and PHP 5.1 (PDO).
You should specify RewriteBase if running the application not in the web root directory.
