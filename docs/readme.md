## deploy doc

###c9.io

1. Setup c9.io

	```
	create new project
	select php
	```

2. Clone the repository.

	```
	https://github.com/MarijnBrosens/web-development3-periode2-landoretti.git
	```

3. Install composer(shell)

	```
	composer install
	```

4. Update composer(shell)

	```
	composer update
	```

[https://docs.c9.io/docs/laravel](example - src)

5. As Lavarel is serving its content from the public directory we need to modify the apache config using nano (a text editor):

	```
	sudo nano /etc/apache2/sites-enabled/001-cloud9.conf
	```


6. In the document: (lookout you dont forget 'code' in the path)

	```
	// Change this line
	DocumentRoot /home/ubuntu/workspace

	// To following
	DocumentRoot /home/ubuntu/workspace/code/public

	```

7. Accept changes

	```
	// press
	F2    
	Y     
	ENTER

	```

8. Database setup ( first we need to know the hostname, username and database name. )

	```
	// run
	mysql-ctl cli
	use c9;
	select @@hostname;
	exit

	```

9. Now we have our details ( scroll up to see all in the cli )

	```
	// we see
	Root User: YOURUSERNAME
	Database Name: c9
	@@hostname : YOURHOSTNAME

	```
10. Update .env.example file to .env

11. Update .env file with db settings from above

	```
	DB_HOST=127.0.0.1
	DB_DATABASE=c9
	DB_USERNAME=USERNAME
	DB_PASSWORD=
	```

12. Strart the database

	```
	press run button
	```

13. If you get following error: No supported encrypter found. The cipher and / or key length are invalid.
	```
	// run
	php artisan key:generate

	```

14. If you have ssl problems (css)
```
	// use
	https:// path
	or change them like this : {!! Html::style('css/app.css', array(), true)  !!}

	```

15. Seed database
	
	```
	$php artisan db:seed
	```

16. Set cronjob with cron

	```
	* * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1
	```