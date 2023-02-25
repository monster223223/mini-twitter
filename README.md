# Mini-Twitter
This repository represents a mini-twitter system that supports some features, and it is built by Laravel

site: <a href="http://mini-twitter-hashim.herokuapp.com/">http://mini-twitter-hashim.herokuapp.com/</a>
					github: <a href="https://github.com/cse-hashim/Mini-Twitter/">https://github.com/cse-hashim/Mini-Twitter/</a>
                    <div style="color:red">
                    <br><hr>
		 هذا الموقع لأغراض تعليمية. لا تضع عليه بيانات شخصية حقيقية. المطور غير مسؤول عن اي استخدام سيئ او في غير محله لهذا الموقع. ايضا سيتم الغاء البيانات من قاعدة البيانات الخاصة بالموقع بشكل متكرر. لان قاعدة البيانات صغيرة جدا.
	<br><hr>
	This site is for educational purposes. Do not submit real personal data into it. The developer is not responsible for any misuseuse of this site. also the supported database for this site is too small and data will be deleted frequently from it.
    </div>
<hr><br>

#info

developped By: Hashim Hossam <hashimhossam@outlook.com>.
creation and uploading to github was after a request from Abdulrahman Karim <akarim@tendegrees.sa>.

#specifications-email

From: Abdulrahman Karim عبدالرحمن كريم <akarim@tendegrees.sa>
Sent: Wednesday, October 2, 2019 2:26 PM
To: hashimhossam@outlook.com
Subject: WorkShop Laravel

We need you to implement a simple task that we will review and based on the task we will start a technical interview.
If you are interested please read the following task requirements carefully and confirm with us that you are interested.

We need you to implement micro blogging social network service on which users post and interact with messages known as "tweets".
Users can post tweets and only the followers of them can see that tweets.

Using laravel please implement the following apis:-

1. User signup => the following data is required (name, password, email and image).
2. User login => the following data is required (password, email).
3. User create tweet => the following data is required (tweet text maximum 140 character).
4. User delete tweet.
5. User follow another user.
6. User time line => the time line should return all the tweets of the followed users paginated.

For all the implemented apis please note the following:-
1. Best practices is the main target of this apis (code ,api and php practices).
2. Json is the only required format.
3. The apis must support 2 languages Arabic and English.
4. All the apis should not be publicly accessed it will only be accessed from our apps.

The time of this task should not exceed one week from receiving this email.
Please commit the code on a public github or bitbucket repository and reply on this email with the link of the repository after you finish.

You need to implement Repository design pattern for the ORM code and a service layer for the logic . 

If you need to ask about anything related to the task do not hesitate to contact me and If you are not interested please let us know.

Thank you for your time.

Best regards 

-- 

Abdel Rahman Karim 
 Branch Manager 
TenDegrees Inc 
https://tendegrees.sa

#deploy

1. Install php.7.3.9 and any mysql server and any webserver and configure them.
2. Install composer.
3. From composer install laravel-6:
	$ composer global require laravel/installer
4. Install project dependencies:
	$ php composer.phar install
5. Create database with name hashimlaravel with username "root" and no password
6. Tun the given "hashimlaravel.sql" if you want to get small test data
7. Sll users have "12345678" as a password
8. Then:
	$ php artisan migrate:refresh
	$ php artisan serve
