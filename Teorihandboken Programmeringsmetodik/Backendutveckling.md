# Teorihandboken - Backendutveckling (BE)
Studerande: Elias Luzwehimana

## BE 1.1 PHP

**What:**
PHP is a server-side scripting language designed primarily for web development but also used as a general-purpose language. It is embedded within HTML and provides dynamic content generation.

**How:**
PHP can be used to handle form submissions, interact with databases, and perform various server-side tasks. Here’s a basic example of PHP embedded in an HTML file:

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example</title>
</head>
<body>
    <h1><?php echo "Hello, World!"; ?></h1>
</body>
</html>
Why: PHP is widely used due to its ease of use, rich feature set, and integration with various databases. It is a crucial tool for creating dynamic and interactive web applications.

BE 1.2 OOP i PHP
What: Object-Oriented Programming (OOP) in PHP is a programming paradigm based on the concept of objects, which can contain both data and methods. OOP helps in organizing code and making it reusable.

How: In PHP, classes and objects are used to implement OOP principles. Here’s a simple example:

php
Copy code
<?php
class Person {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }

    function greet() {
        return "Hello, my name is " . $this->name;
    }
}

$person = new Person("Alice");
echo $person->greet(); // Outputs: Hello, my name is Alice
?>
Why: OOP enhances code organization and reusability. It allows for creating scalable and maintainable applications by using principles like inheritance, encapsulation, and polymorphism.

BE 1.3 Säkerhet i PHP
What: Security in PHP involves implementing practices to protect applications from vulnerabilities like SQL injection, XSS, and CSRF attacks.

How: Secure coding practices include using prepared statements for database queries, validating user inputs, and escaping outputs. Example of using prepared statements:

php
Copy code
<?php
$mysqli = new mysqli("localhost", "user", "password", "database");

$stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$email = $_POST['email'];
$stmt->execute();
$result = $stmt->get_result();
?>
Why: Security is crucial to protect sensitive data and maintain the integrity of the application. Implementing security measures helps in preventing common attacks and safeguarding user information.

BE 1.4 MVC
What: MVC (Model-View-Controller) is a design pattern used to separate an application into three interconnected components: the Model (data), the View (UI), and the Controller (logic).

How: In an MVC framework, the Model handles data logic, the View displays the data, and the Controller processes user input and updates the Model. Example:

Model: Manages data and business logic.
View: Renders the user interface.
Controller: Handles user input and updates the Model.
Why: MVC helps in organizing code, making it easier to manage, maintain, and scale. It allows for separation of concerns, which improves code quality and reusability.

BE 1.5 Wordpress
What: WordPress is a content management system (CMS) that allows users to create and manage websites easily. It is built with PHP and MySQL.

How: WordPress provides themes and plugins to customize the functionality and appearance of websites. Example of creating a basic theme:

Create a directory in wp-content/themes.
Add style.css and index.php files.
Why: WordPress is popular for its ease of use, flexibility, and extensive plugin ecosystem. It enables users to build websites without extensive coding knowledge.

BE 1.6 Heirarkiska databaser
What: Hierarchical databases organize data in a tree-like structure, with parent-child relationships. This model is suitable for data that has a clear hierarchical relationship.

How: Data is stored in records with a parent-child relationship. Example: An organizational chart where employees report to managers.

Why: Hierarchical databases are useful for applications with hierarchical data relationships, but they are less flexible compared to relational databases.

BE 1.7 Relationsdatabaser, SQL och ER-modellering
What: Relational databases use tables to store data and SQL (Structured Query Language) to manage and query the data. ER (Entity-Relationship) modeling helps in designing the database schema.

How: SQL queries are used to perform operations like selecting, inserting, updating, and deleting data. Example:

sql
Copy code
SELECT * FROM users WHERE age > 21;
ER modeling involves creating diagrams to represent entities, attributes, and relationships between entities.

Why: Relational databases are widely used due to their flexibility and powerful querying capabilities. ER modeling helps in designing databases that efficiently store and retrieve data.

BE 1.8 OAuth i backend
What: OAuth is an authorization framework that allows third-party applications to access user resources without exposing user credentials. It is commonly used for single sign-on (SSO) and secure API access.

How: OAuth involves exchanging tokens to authorize access. Example of initiating an OAuth flow:

Redirect user to the authorization server.
User grants permission.
Authorization server redirects back with an authorization code.
Exchange code for an access token.
Why: OAuth provides a secure way to authorize access and is widely used in applications that integrate with external services or APIs.

BE 1.9 HTTP-protokollet
What: HTTP (HyperText Transfer Protocol) is the protocol used for transmitting data over the web. It defines how messages are formatted and transmitted.

How: HTTP methods include GET, POST, PUT, and DELETE. Example of a GET request:

http
Copy code
GET /index.html HTTP/1.1
Host: example.com
Why: HTTP is the foundation of data communication on the web. Understanding HTTP helps in building and debugging web applications and services.

BE 1.10 cURL
What: cURL is a command-line tool and library for transferring data with URLs. It supports various protocols including HTTP, HTTPS, FTP, and more.

How: cURL can be used to make requests to web servers. Example of a GET request using cURL in PHP:

php
Copy code
<?php
$ch = curl_init("http://example.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
echo $response;
?>
Why: cURL is useful for interacting with APIs, downloading files, and automating web requests. It provides a flexible way to handle different types of data transfers.

BE 1.11 REST
What: REST (Representational State Transfer) is an architectural style for designing networked applications. It uses standard HTTP methods and URLs to access and manipulate resources.

How: RESTful services use URLs to represent resources and HTTP methods (GET, POST, PUT, DELETE) to perform operations. Example of a RESTful API endpoint:

GET /users - Retrieve a list of users
POST /users - Create a new user
PUT /users/{id} - Update user with specific ID
DELETE /users/{id} - Delete user with specific ID
Why: REST provides a simple and scalable way to build web services. It is widely used due to its statelessness and ease of integration with web technologies.

BE 1.12 XML och andra dataformat
What: XML (eXtensible Markup Language) is a markup language used for storing and transporting data. Other data formats include JSON and YAML.

How: XML data is structured with tags and can be parsed using various libraries. Example of XML data:

xml
Copy code
<user>
    <name>Alice</name>
    <age>30</age>
</user>
JSON is a more lightweight format commonly used in web applications:

json
Copy code
{
    "name": "Alice",
    "age": 30
}
Why: XML and JSON are used for data interchange between systems. JSON is often preferred for its simplicity and ease of use in JavaScript applications.

BE 1.13 Webbservrar
What: Web servers are software or hardware systems that serve web pages to clients over HTTP. They handle requests from users and deliver responses.

How: Common web servers include Apache, Nginx, and IIS. They can be configured to serve static files, handle dynamic content, and manage virtual hosts.

Why: Web servers are essential for hosting websites and web applications. Understanding web servers helps in configuring and optimizing them for performance and security.