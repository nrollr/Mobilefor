# Mobilefor database

This repository allows you to query location data stored in a MySQL database. The database contains the location data of P&D machines throughout the city of Leuven with their corresponding [4411](https://www.4411.be/en/how-does-it-work/on-street/) parking code, which you can use to start and stop a parking session.

Layout of the webpages are built with the [**Semantic UI**](https://semantic-ui.com/) framework. All pages have been tested with Apache **2.4.33** , PHP **7.1.6** and MySQL **5.7.22**

Download and copy the content of this repository to the DocumentRoot of your webserver… 



### Setup of the MySQL database:

- The table structure of the **MapsData** database can be found in the `data/` directory. Import the `LocationData.sql` file in you MySQL.
- Edit `db_connect.php` in the `include/` directory and change the database settings : replace '**hostname**’, '**username**' and '**password**' with the proper values.



## Functionality

The main page `index.php` offers a user to query the database, using two methods:

- The **'Query with dynamic search filtering’-** method allows you to enter the street name or parking code yourself. Based on your input, the table will be dynamically completed with the information you are looking for.
- The **'Query with a dropdown list’-** method requires you to select a street name from a dropdown list. After selecting an entrie, the information will be displayed in a table similar to the first method.

Switch to the contents of the `view/` directory (eg. [http://localhost/view](http://localhost/view/index.php) ) and you will see a map with a visual representation of P&D machines throughout the city. This uses the [**Google Maps Javascript API**](https://developers.google.com/maps/documentation/javascript/tutorial) and requires you to edit the `index.php` file in the `view/` directory, where you’ll need to insert your own developer key.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details


