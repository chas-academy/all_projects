# Teorihandboken - Backendutveckling (BE)
Studerande: Förnamn Efternamn

## BE 1.1 PHP

**What is PHP?**

PHP (Hypertext Preprocessor) is a server-side scripting language designed for web development but also used as a general-purpose language. It is embedded into HTML and is known for its ability to interact with databases and manage server-side logic.

**How is PHP used?**

PHP is used to create dynamic web pages and manage server-side tasks such as form handling, session management, and database interactions. It is often used in conjunction with MySQL or other databases to build data-driven websites.

**Why use PHP?**

PHP is widely used because it is easy to learn, has extensive documentation, and integrates well with HTML and various databases. It supports a range of databases and is compatible with most web servers, making it a versatile choice for server-side scripting.

## BE 1.2 OOP i PHP

**What is OOP in PHP?**

Object-Oriented Programming (OOP) in PHP is a programming paradigm that uses objects and classes to structure code. OOP helps in organizing code into reusable components, making it easier to manage and extend.

**How is OOP used in PHP?**

In PHP, OOP is used to create classes and objects. Classes define the structure and behavior of objects, while objects are instances of classes. Features like inheritance, encapsulation, and polymorphism are used to build complex applications more manageably.

**Why use OOP in PHP?**

OOP in PHP promotes code reusability, maintainability, and scalability. By structuring code into objects and classes, developers can create more modular and organized code, which simplifies debugging and enhances the ability to extend functionality.

## BE 1.3 Säkerhet i PHP

**What is Security in PHP?**

Security in PHP involves implementing practices and techniques to protect PHP applications from vulnerabilities and attacks. Common security concerns include SQL injection, cross-site scripting (XSS), and cross-site request forgery (CSRF).

**How is security implemented in PHP?**

Security measures in PHP include using prepared statements to prevent SQL injection, validating and sanitizing user inputs, and using built-in functions like `password_hash()` for secure password storage. Implementing proper session management and using HTTPS are also crucial for securing PHP applications.

**Why focus on security in PHP?**

Securing PHP applications is essential to protect sensitive data and prevent unauthorized access. Proper security practices help in safeguarding applications against common threats and ensuring that user data remains confidential and secure.

## BE 1.4 MVC

**What is MVC?**

MVC (Model-View-Controller) is a design pattern used in software development to separate an application into three interconnected components: Model, View, and Controller. This pattern helps in organizing code and promoting modularity.

**How is MVC used?**

In the MVC pattern:
- **Model** handles data and business logic.
- **View** manages the presentation layer and displays data to the user.
- **Controller** processes user input, interacts with the model, and updates the view.

**Why use MVC?**

MVC helps in separating concerns within an application, making it easier to manage and scale. It allows developers to work on different aspects of the application independently and enhances maintainability by organizing code into distinct components.

## BE 1.5 Wordpress

**What is WordPress?**

WordPress is a content management system (CMS) that allows users to create and manage websites easily. It is built using PHP and MySQL and provides a user-friendly interface for managing content, themes, and plugins.

**How is WordPress used?**

WordPress is used to build and manage websites, blogs, and online stores. It offers themes for design customization and plugins for extending functionality. Users can create and publish content without needing to write code directly.

**Why use WordPress?**

WordPress is popular due to its ease of use, extensive plugin ecosystem, and customizable themes. It allows users to create professional websites quickly and efficiently, making it a preferred choice for many individuals and businesses.

## BE 1.6 Heirarkiska databaser

**What are Hierarchical Databases?**

Hierarchical databases organize data in a tree-like structure where each record has a single parent and can have multiple children. This model represents data with parent-child relationships, similar to a file system.

**How are hierarchical databases used?**

Hierarchical databases are used for applications that require a clear parent-child relationship in data, such as organizational charts or file systems. They are accessed using hierarchical paths, making it suitable for structured data with a predefined hierarchy.

**Why use hierarchical databases?**

Hierarchical databases are efficient for querying data with a clear hierarchy. They provide fast access to data with a known structure and are useful for applications where relationships between data elements are hierarchical.

## BE 1.7 Relationsdatabaser, SQL och ER-modellering

**What are Relational Databases, SQL, and ER Modeling?**

Relational databases organize data into tables with rows and columns. SQL (Structured Query Language) is used to interact with relational databases, allowing for querying, updating, and managing data. ER (Entity-Relationship) modeling is a technique for designing database schemas.

**How are relational databases and SQL used?**

Relational databases are used to store structured data with relationships between tables. SQL is used to perform operations such as retrieving data with `SELECT`, updating records with `UPDATE`, and defining schemas with `CREATE TABLE`. ER modeling helps in designing the database structure by identifying entities, relationships, and attributes.

**Why use relational databases, SQL, and ER modeling?**

Relational databases and SQL provide a powerful and flexible way to manage structured data. ER modeling helps in designing efficient and well-structured databases. These tools and techniques are essential for building scalable and maintainable data-driven applications.

## BE 1.8 OAuth i backend

**What is OAuth in Backend?**

OAuth is an authorization framework that allows third-party applications to obtain limited access to user accounts on a web service. OAuth enables secure access to APIs and resources without sharing user credentials.

**How is OAuth used in the backend?**

In backend development, OAuth is used to implement secure authentication and authorization mechanisms. OAuth tokens are used to grant access to resources on behalf of users. The backend handles token issuance, validation, and access control.

**Why use OAuth in the backend?**

OAuth provides a secure way to manage access to APIs and user data. It allows for granular permissions and helps in protecting user credentials. Using OAuth improves security and enables third-party integrations while maintaining control over user data.

## BE 1.9 HTTP-protokollet

**What is the HTTP Protocol?**

The HTTP (Hypertext Transfer Protocol) is a protocol used for transferring data over the web. It defines how requests and responses are formatted and transmitted between clients (like web browsers) and servers.

**How is HTTP used?**

HTTP is used to request and deliver web pages, images, videos, and other resources. It operates over various methods such as `GET`, `POST`, `PUT`, and `DELETE` to perform different actions. HTTP headers and status codes are used to provide additional information about requests and responses.

**Why use HTTP?**

HTTP is the foundation of data communication on the web. It is essential for retrieving and sending web content, enabling the interaction between web browsers and servers. Understanding HTTP is crucial for building and troubleshooting web applications.

## BE 1.10 cURL

**What is cURL?**

cURL is a command-line tool and library for transferring data with URLs. It supports various protocols, including HTTP, HTTPS, FTP, and more. cURL is used to perform network operations and interact with web services.

**How is cURL used?**

cURL is used to send requests and receive responses from URLs. It can be used to test APIs, download files, and automate web interactions. It provides a way to interact with different types of web services and servers programmatically.

**Why use cURL?**

cURL is a versatile tool for network operations and testing. It is useful for interacting with APIs, debugging network issues, and automating tasks. Its support for multiple protocols makes it a valuable tool for developers and system administrators.

## BE 1.11 REST

**What is REST?**

REST (Representational State Transfer) is an architectural style for designing networked applications. It uses standard HTTP methods and stateless communication to interact with resources identified by URLs.

**How is REST used?**

RESTful APIs are used to create web services that adhere to REST principles. They use HTTP methods such as `GET`, `POST`, `PUT`, and `DELETE` to perform operations on resources. REST APIs are commonly used to build scalable and maintainable web services.

**Why use REST?**

REST provides a simple and scalable way to design web services. It uses standard HTTP methods and is stateless, making it easy to understand and implement. RESTful APIs are widely adopted due to their flexibility and ease of integration with various platforms.

## BE 1.12 XML och andra dataformat

**What are XML and Other Data Formats?**

XML (eXtensible Markup Language) is a markup language used to encode data in a readable format. Other data formats include JSON (JavaScript Object Notation), YAML (YAML Ain't Markup Language), and CSV (Comma-Separated Values).

**How are XML and other data formats used?**

XML is used to represent structured data and is often used in configuration files and data interchange. JSON is widely used in web APIs due to its simplicity and ease of use with JavaScript. YAML is used for configuration files, while CSV is used for tabular data.

**Why use XML and other data formats?**

Different data formats are used based on the requirements of data interchange and storage. XML provides a flexible and hierarchical way to represent data, while JSON offers a lightweight and easy-to-parse format. Choosing the right format depends on the use case and the requirements of the system.

## BE 1.13 Webbservrar

**What are Web Servers?**

Web servers are software applications that handle HTTP requests from clients and serve web content. They process incoming requests, retrieve data from databases or files, and return responses to clients.

**How are web servers used?**

Web servers are used to host websites and web applications. They handle requests for web pages, images, scripts, and other resources. Popular web servers include Apache, Nginx, and Microsoft IIS. They can be configured to serve static content, run server-side scripts, and manage virtual hosts.

**Why use web servers?**

Web servers are essential for delivering web content and applications to users. They manage incoming traffic, handle requests efficiently, and ensure that web resources are served reliably. Understanding web server configurations and performance is crucial for building and maintaining web applications.
