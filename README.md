# Simple Customers DB

This is very small database application meant to demonstrate my ability to connect 
an Access front-end user interface with a web app.

## 3 Different Methods

I will be connecting the Access front-end to the web app in three ways.
1. Using ODBC table links
    This requires port 3306 to be open on the router, and it requires
    that the public IP address of the location of the Access file be listed
    in the 'Remote SQL' option on the web server.

2. Using ADO models. 
    This also has the same requirements for port 3306 and IP whitelisting.
    However, it has the distinct advantage of being more secure, at least on
    the Access user interface side.

3. Using a RESTful API.
    This does NOT require opening port 3306 and does NOT need to be whitelisted.
    However, it does require security tokens be used to prevent attacks by hackers.
    That will be a challenge.

## Keeping It Simple
I am only going to add two tables to this database. I have several other example database
applications with more complex structure. The purpose of this sample is only to demonstrate
the techniques for connecting an Access front-end user interface with a web application.

-- John Osmond