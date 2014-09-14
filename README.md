
![MAD MAN](/title.png)
====
 
 A  Social  network . Feel  free to report any bugs by mailing to  manitejavarma@yahoo.com.

 
### Run On Localhost (Linux)

Here is a simple tutorial on how to run Open on a Linux Apache Web Server.

1) Install Git by Running the following commands
```
sudo apt-get update && sudo apt-get install git
```

2) CD (Change Directory) to the Apache directory by running
```
cd /var/www/
```  
   in Apache Server versions 2.5 and above, the folder is `/var/www/html` instead of `/var/www`
      
3) Now do this to pull the source code from GitHub to the folder "open" in /var/www
```
git clone https://github.com/manitejavarma/warmani.git open
```
	Now open's files will be in the `/var/www/open` directory

4) 	Import mysql database `database.sql` through phpmyadmin and username,host,password in `connect_func.php`

5) 	Go To http://localhost/open to see it live in action

### Run On Localhost (Windows)
 For windows it is good to get with xampp.

1)Download zip file of my repo and paste it in  `/xampp/htdocs/` folder.

2)Import mysql database `database.sql` through phpmyadmin and username,host,password in `connect_func.php`.

3)Run server and enter `localhost:80` in web browser.

#### Languages used
 Basic Php,html,css,mysql,ajax

#### Libraries used in mad-man
 Jquery pace progress bar .Inline script for pace progress plugin is written.

###Pros
 * Hard for mysql injection.
 * A simple social feed 
 * Displaying profile picture after entering email-id in login page.

###Cons
 As I said it is plain and simple it may have cons.
 * Wierd looking login page with no validation.
 * More redirected pages in script.
 
#About

 Mad-Man has been developed by mani teja varma for over a month and is used as testimonial server.

 



