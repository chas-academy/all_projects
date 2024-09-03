# Teorihandboken - JavaScript (JS)
Studerande: Förnamn Efternamn

## JS 1.1 JavaScript / ECMAScript

**What is JavaScript / ECMAScript?**

JavaScript is a high-level, interpreted programming language that is primarily used for creating interactive and dynamic content on websites. ECMAScript is the standard upon which JavaScript is based, defining the language's syntax, semantics, and core features. The most recent version of ECMAScript is ECMAScript 2024 (ES2024), which includes new features and improvements.

**How is JavaScript / ECMAScript used?**

JavaScript is embedded within HTML pages and executed in the browser to create dynamic web content, such as interactive forms, animations, and real-time updates. ECMAScript defines the standard features that JavaScript implements, including variables, functions, objects, and classes.

**Why use JavaScript / ECMAScript?**

JavaScript is essential for modern web development as it enables interactive and dynamic user experiences. ECMAScript ensures consistency across different JavaScript environments and allows developers to write reliable and predictable code by adhering to standardized language features.

## JS 1.2 JavaScript-ramverk och -bibliotek

**What are JavaScript Frameworks and Libraries?**

JavaScript frameworks and libraries are tools that simplify and streamline the development of complex applications. Libraries like jQuery provide utility functions to simplify common tasks, while frameworks like React, Angular, and Vue.js offer structured ways to build and manage applications.

**How are JavaScript frameworks and libraries used?**

Frameworks and libraries are integrated into projects to provide pre-written code and patterns that speed up development. For example, React helps manage user interfaces and state, while Angular provides a complete framework for building single-page applications. Libraries like jQuery simplify DOM manipulation and event handling.

**Why use JavaScript frameworks and libraries?**

They enhance productivity by providing reusable components and reducing the amount of code developers need to write. Frameworks offer robust solutions for building complex applications, while libraries provide focused tools for specific tasks, making development faster and more efficient.

## JS 1.3 Promises

**What are Promises?**

Promises are a feature of JavaScript that represent the eventual completion (or failure) of an asynchronous operation and its resulting value. A promise is an object that may resolve to a value or reject with an error, allowing asynchronous code to be written in a more manageable way.

**How are Promises used?**

Promises are used to handle asynchronous operations like network requests or file reading. They provide methods such as `.then()` for handling successful results and `.catch()` for handling errors. This approach helps avoid callback hell and makes asynchronous code easier to read and maintain.

**Why use Promises?**

Promises provide a more structured and readable way to handle asynchronous operations compared to traditional callback methods. They simplify error handling and make it easier to chain multiple asynchronous tasks together, improving code clarity and maintainability.

## JS 1.4 OOP i JavaScript

**What is Object-Oriented Programming (OOP) in JavaScript?**

OOP in JavaScript is a programming paradigm that uses objects and classes to structure code. It allows developers to model real-world entities and behaviors, making code more modular and reusable. JavaScript supports OOP through prototypes and ES6 classes.

**How is OOP implemented in JavaScript?**

JavaScript uses prototypes to enable inheritance, where objects can inherit properties and methods from other objects. ES6 introduced class syntax, which provides a more familiar and syntactic sugar way to create and manage objects and inheritance.

**Why use OOP in JavaScript?**

OOP helps organize code into logical units and promotes reuse through inheritance and encapsulation. It makes it easier to manage complex codebases by breaking down functionality into objects and classes, leading to better maintainability and scalability.

## JS 1.5 DOM-manipulation

**What is DOM Manipulation?**

DOM (Document Object Model) manipulation involves changing the structure, style, and content of a web page dynamically using JavaScript. It allows developers to interact with HTML elements and update the page without requiring a full reload.

**How is DOM Manipulation done in JavaScript?**

DOM manipulation is done using JavaScript methods like `document.getElementById()`, `document.querySelector()`, and properties like `innerHTML` and `style`. Developers can add, remove, or modify elements and their attributes in response to user actions or other events.

**Why perform DOM Manipulation?**

DOM manipulation is crucial for creating interactive and dynamic web experiences. It allows developers to update content in response to user actions, improve user engagement, and create a responsive interface without reloading the page.

## JS 1.6 HTTP-requests

**What are HTTP Requests?**

HTTP requests are messages sent from a client (such as a web browser) to a server to request data or perform actions. JavaScript can make HTTP requests to communicate with servers using methods like `fetch()` or `XMLHttpRequest`.

**How are HTTP Requests made in JavaScript?**

JavaScript uses the `fetch()` API or the older `XMLHttpRequest` to make HTTP requests. The `fetch()` API is modern and provides a more flexible and powerful way to handle requests and responses. It allows for making GET, POST, PUT, and DELETE requests, handling responses, and catching errors.

**Why use HTTP Requests?**

HTTP requests enable web applications to communicate with servers, fetch data, and perform actions like submitting forms or retrieving information. They are essential for building dynamic and data-driven web applications that interact with backend services.

## JS 1.7 Lexical Scope

**What is Lexical Scope?**

Lexical scope refers to the scope in which variables are defined and accessible based on their location in the source code. In JavaScript, lexical scoping means that the scope of a variable is determined by its position in the code, and nested functions have access to variables in their parent scopes.

**How is Lexical Scope used?**

Lexical scope is used to manage variable visibility and encapsulation in JavaScript. Functions created inside other functions have access to variables defined in the outer function’s scope. This allows for creating closures and controlling variable access.

**Why is Lexical Scope important?**

Lexical scope is fundamental to understanding how variable scope works in JavaScript. It helps in managing data privacy and creating functions with access to specific variables without exposing them globally, thus promoting modular and maintainable code.

## JS 1.8 Event Handling

**What is Event Handling?**

Event handling is the process of responding to user interactions or other events occurring on a webpage, such as clicks, key presses, or mouse movements. JavaScript can attach event listeners to elements to trigger specific functions when events occur.

**How is Event Handling implemented?**

Event handling is implemented by adding event listeners to HTML elements using methods like `addEventListener()`. Developers can define functions to be executed when an event occurs, such as clicking a button or submitting a form.

**Why use Event Handling?**

Event handling is essential for creating interactive and responsive web applications. It allows developers to execute code in response to user actions, providing a dynamic and engaging experience by updating content or triggering actions based on user input.

## JS 1.9 Prototype Inheritance

**What is Prototype Inheritance?**

Prototype inheritance is a feature in JavaScript that allows objects to inherit properties and methods from other objects. Each JavaScript object has a prototype object from which it can inherit features, enabling the creation of inheritance hierarchies.

**How is Prototype Inheritance used?**

Prototype inheritance is used to share properties and methods across objects. By setting an object's prototype to another object, properties and methods from the prototype are accessible to the child object. This mechanism allows for efficient code reuse and organization.

**Why use Prototype Inheritance?**

Prototype inheritance allows developers to create object hierarchies and share functionality among objects, reducing code duplication and enhancing maintainability. It supports the object-oriented programming paradigm by enabling inheritance and polymorphism.

## JS 1.10 Higher-Order Functions

**What are Higher-Order Functions?**

Higher-order functions are functions that can accept other functions as arguments or return functions as results. They enable functional programming patterns and provide a way to abstract and manipulate behavior in a flexible manner.

**How are Higher-Order Functions used?**

Higher-order functions are used for tasks like mapping, filtering, and reducing arrays. Functions such as `Array.prototype.map()`, `Array.prototype.filter()`, and `Array.prototype.reduce()` are higher-order functions that operate on arrays and accept callback functions to perform operations.

**Why use Higher-Order Functions?**

Higher-order functions promote code reusability and functional programming practices. They allow developers to create more abstract and flexible code by treating functions as first-class citizens, leading to cleaner and more expressive code.

## JS 1.11 Single-Thread Programming

**What is Single-Thread Programming?**

Single-thread programming refers to executing code on a single thread, where tasks are processed sequentially. JavaScript is single-threaded, meaning it executes one operation at a time, using an event loop to handle asynchronous operations and prevent blocking.

**How does Single-Thread Programming work in JavaScript?**

JavaScript uses an event loop to manage asynchronous operations and ensure smooth execution. While JavaScript code runs on a single thread, the event loop allows the language to handle multiple tasks, such as user events and network requests, without blocking the main thread.

**Why is Single-Thread Programming important?**

Single-thread programming simplifies the concurrency model by avoiding issues related to multi-threaded environments, such as race conditions and deadlocks. It makes it easier to reason about code execution, though it requires careful handling of asynchronous tasks to maintain responsiveness.

## JS 1.12 OAuth från frontend

**What is OAuth from Frontend?**

OAuth is an authorization framework that allows applications to obtain limited access to user accounts on a third-party service. OAuth from the frontend involves handling the OAuth flow in client-side applications to authenticate users and obtain access tokens.

**How is OAuth handled from the Frontend?**

OAuth is handled from the frontend by initiating the OAuth flow through redirecting users to the authorization server and handling the returned authorization code or token. The frontend then uses this token to access protected resources from the API.

**Why use OAuth from Frontend?**

OAuth is used to securely authorize users and access protected resources without exposing credentials. Handling OAuth from the frontend allows for seamless integration with third-party services, enabling applications to leverage external authentication and authorization mechanisms.

## JS 1.13 Websockets

**What are Websockets?**

Websockets are a protocol for full-duplex communication channels over a single TCP connection. They provide a way to open interactive communication sessions between a user’s browser and a server, allowing for real-time data exchange.

**How are Websockets used?**

Websockets are used by creating a `WebSocket` object in JavaScript and establishing a connection to a server. Developers can then send and receive messages through this connection, enabling features like live chat, real-time notifications, and collaborative applications.

**Why use Websockets?**

Websockets are used to enable real-time communication and reduce latency in applications that require continuous data exchange, such as live chat or gaming. They provide a more efficient alternative to HTTP polling, allowing for instant updates and interactive experiences.
