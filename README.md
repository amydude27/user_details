This Application is being done on Codeignitor Environment.
 
There will be a sql file named as guest_data.sql(Database file)

Create a Database name as guest_data
Import the sql file into guest_data database.
And copy the folder user_info which is inside user_details paste it inside xampp/htdocs.

Database Connectivity - Go Through this path - user_info/admin/application/config/database.php

Search for this connection :
Change it into yours
$db['default']['hostname'] = "Host Name";//localhost
$db['default']['username'] = "Username"; //root
$db['default']['password'] = "Your Password";
$db['default']['database'] = "guest_data";//database name

Save it.

Run the xampp and application url is  - http://localhost/user_info/admin
