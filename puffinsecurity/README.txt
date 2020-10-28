Project topic:

Puffin is a website, used for the Sofia University course of WEB development. There you can register, select theme for your tasks (referrat, presentation and project), upload your work (different versions of the upload are saved and available for reviewing) and when needed, you can grade the work of a random assigned student. You can register in the website and you can change your password via email*.

There are 2 user groups: user and admin. The admin can manage other users privileges (user -> admin and admin -> user). Also, the admin can bad / unban specific users of the website. As an admin you can view all of the registered user as well as their data. Admins can preview the activity log which saves data about each login in the system - username, device, OS, browser, IP, date. Admins can preview uploaded works from the students and manage them.
Admins can preview grades and start/stop the grading proces, which disables this function in the students profiles.

There is a brute-force defence implemented, which blocks the account after 3 unsuccessfull login attempts with wrong password.
Another defense method is MFA. Each user has predefined amount of allowed devices which he can use to login. If the count is exceeded, the user is blocked and asked to verify the code received on his email. Then the new device is added and can be used freely.

"Plugins" for puffin / Security detection and prevention

Contents of the archive:
- The program code contains a folder puffinsecurity, and in it the code is divided into folders admin, css, js, mail, php, renders, student, as well as 2 files outside them - index.php and register.html, serving as home page and page for registration
- admin folder - administrator functionalities
grades folder - control and review of assessment
gradecomponents.php
start_grade.php
stop_grade.php
- folder renders - visualization of some of the administrative functionalities
inv.php
ref.php
pres.php
log.php
users.php
- role folder - management of the administrator functions for status and blocking
role.php
file clear - clears uploads or logs
log.txt file - contains the logs
- css folder - contains css files
- js folder - contains js files
- mail folder - contains PHP files used to send emails
- php folder
add_device folder - contains php files, which are the logic of adding a new device (MFA)
db folder - contains the files that communicate with the database
folder login - contains php files that implement the logic of input and output, as well as system registration
password_reset folder - contains the files that implement the password change logic
file validate.php - contains functions that validate the entered data during registration and login
- renders folder - contains the main view of some of the pages
- student folder - student functionalities
folder grades - php files that implement the logic of grading
folder uploads - contains php files, implementing the logic of choosing a topic and uploading files - abstract, presentation, invitation, as some perform the upload itself, others validate, others add to the database
- database folder - SQL to create the database

- complete project documentation

Instructions:

The project was launched with an Apache server and MySQL database via XAMPP. Once the server is started, the sql file located in the database folder can be used in MySQL to create and populate the database. If it is necessary to make corrections to the connection with it, this can be done in the file db_connection.php. The project can then be started (if the default settings are the default) via http://localhost/puffinsecurity/.
After importing the database and tables, there will be 2 users created:

mvalerievv / Pass123@@ - administrator
wus123 / Pass123@@ - student

For maximum useful testing the user should register with a real (own email)