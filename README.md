# **Intergaz test task**

## Content:
  1. About project
  2. What was used in the project
  3. How to launch project?

## About project
  Is a database that contains information about the company's activities. The company supplies goods to customers, each customer can have multiple delivery locations. The delivery order consists of general information (Address, type, status and etc.) and delivery lines (item, quantity, price, etc.). Deliveries are grouped on routes, there is always one driver on the same route and the journey takes place on a specific date.

## What was used in the project
  - Visual Studio Code v1.63.1
  - OpenServer v5.4.0
  - PHP v7.4
  - JavaScript
  - Apache v2.4
  - T-SQL
  - SQL Server Management Studio v15.0.18390.0
  - Microsoft SQL Server 
  - SCSS v3.5.5
  - CSS
 
## How to launch project?
  1. Clone this repository or download them.
  2. Put project in server folder. I'm use OpenServer and this path to folder where need put project: *"C:\openserver\domains\"*. You can use some other server.
  3. Upload database.
  4. Change database config. In *[database config](https://github.com/Kythadrin/intergaz/blob/3619e330485d8a00dd97e57039c004f571c73b00/conf/database.ini#L1)* set database connection information(*set hostname, username, password and database name*).
  5. Open terminal in project folder and start command ***composer install*** and ****composer dump-autoload -o***.
  6. Start server or restart.
  7. Open browser and write in the address bar data to connect. For OpenServer it is folder name of project, for others it is usually: *localhost*. 
     - For enter on main page needed write in the address bar domain name. For example: *intergaz/* or *localhost*. 
     - For adminsitrator page needed enter domain-name/admin. For example: *intergaz/admin* or *localhost/admin*.

> Author: Vadim Sirits
