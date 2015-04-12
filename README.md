# Mobilefor database

This repository allows you to query location data stored in a MySQL database. The database contains the location data of P&D machines throughout the city of Leuven with their corresponding [4411](https://www.4411.be/en/how-does-it-work/on-street/) parking code, which you can use to start and stop a parking session.

Layout of the webpages are built with the [Bootstrap](http://getbootstrap.com/) framework. All pages have been tested with Apache/2.2.26 , PHP v.5.4.30 and MySQL v5.6.20

Download and copy the content of this repository to the DocumentRoot of your webserver… 



#### Setup of the MySQL database:

- The table structure of the “MapsData” database can be found in the data/ directory. Import the `LocationData.sql` file in you MySQL.
- Edit `db_connect.php` and `xml_write.php` in the include/ directory and change the database settings : replace 'host’, 'username' and 'password' with the proper values.



### Functionality

The main page `index.php` offers a user to query the database, using two methods:

- The **'Query with dynamic search filtering’-** method allows you to enter the street name or parking code yourself. Based on your input, the table will be dynamically completed with the information you are looking for.
- The **'Query with a dropdown list’-** method requires you to select a street name from a dropdown list. After selecting an entrie, the information will be displayed in a table similar to the first method.

Switch to the contents of the view/ directory (via [http://localhost/view](http://localhost/view/index.php) ) and you will see a map with a visual representation of P&D machines throughout the city. This uses [**Google Maps Javascript API v3**](https://developers.google.com/maps/documentation/javascript/) and requires you to edit the `index.php` file in the view/ directory, where you’ll need to insert your own developer key: `maps.googleapis.com/maps/api/js?key=_insert_your_own_developer_key_&sensor=false` 



#### Other

The data/ directory contains a general overview about dependencies between files: [LocationData.png](https://cloud.githubusercontent.com/assets/2085226/7105212/7adfb34e-e10e-11e4-9c03-c089bef26d67.png)

The include/ directory contains two additonal pages for handling XML:

- `xml_load.php` outputs the content of the database in your browser using standard XML formatting
- `xml_write.php` writes the content of the database in a XML file called `LocationData.xml` located within the data/ directory (**note**: this requires write access on the data/ directory).