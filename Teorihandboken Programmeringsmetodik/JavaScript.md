# Teorihandboken - JavaScript (JS)
Studerande: Elias Luzwehimana

## JS 1.1 JavaScript / ECMAScript

**What:**
JavaScript is a programming language that enables interactive web pages. It follows the ECMAScript specification, which standardizes the language.

**How:**
JavaScript is used for both client-side and server-side development. It can manipulate web page content, handle events, and communicate with servers. Example:

```javascript
// JavaScript Example
let greeting = "Hello, World!";
console.log(greeting);
Why: JavaScript is essential for creating dynamic and interactive web applications. It allows developers to implement complex features on web pages, enhancing user experience.

JS 1.2 JavaScript-ramverk och -bibliotek
What: JavaScript frameworks and libraries are tools that help streamline and simplify JavaScript development. Examples include React, Angular, and Vue.js (frameworks), and jQuery (library).

How: Frameworks and libraries provide pre-written code for common tasks, improving efficiency and consistency. Example using jQuery:

javascript
Copy code
// jQuery Example
$(document).ready(function() {
    $("button").click(function() {
        alert("Button clicked!");
    });
});
Why: Using frameworks and libraries can significantly speed up development, reduce errors, and improve code maintainability. They offer robust solutions for common problems and complex features.

JS 1.3 Promises
What: Promises are objects that represent the eventual completion or failure of an asynchronous operation. They help manage asynchronous code by providing a cleaner syntax compared to callbacks.

How: A promise can be in one of three states: pending, fulfilled, or rejected. Example:

javascript
Copy code
let myPromise = new Promise((resolve, reject) => {
    let success = true; // Example condition
    if (success) {
        resolve("Operation successful!");
    } else {
        reject("Operation failed.");
    }
});

myPromise.then(message => console.log(message))
         .catch(error => console.error(error));
Why: Promises simplify handling asynchronous operations, making code more readable and easier to manage. They are essential for tasks like API calls and file operations.

JS 1.4 OOP i JavaScript
What: Object-Oriented Programming (OOP) in JavaScript involves creating objects that encapsulate data and methods. JavaScript supports OOP through prototypes and classes.

How: You can create objects and define methods using constructor functions or the class syntax. Example:

javascript
Copy code
// Class Example
class Person {
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }

    greet() {
        return `Hello, my name is ${this.name}.`;
    }
}

let person = new Person("Alice", 30);
console.log(person.greet());
Why: OOP helps in organizing and structuring code, making it more modular and reusable. It supports concepts like inheritance and encapsulation, enhancing code maintainability.

JS 1.5 DOM-manipulation
What: DOM (Document Object Model) manipulation involves changing the structure, style, or content of a web page dynamically using JavaScript.

How: JavaScript can interact with HTML elements via the DOM API. Example:

javascript
Copy code
// DOM Manipulation Example
document.getElementById("myButton").addEventListener("click", function() {
    document.getElementById("myText").textContent = "Button clicked!";
});
Why: DOM manipulation is crucial for creating interactive and dynamic web pages. It allows developers to update the content and style of web pages in response to user actions.

JS 1.6 HTTP-requests
What: HTTP requests are used to communicate with servers and fetch or send data. JavaScript handles these requests using APIs like fetch or XMLHttpRequest.

How: Example using fetch:

javascript
Copy code
// Fetch API Example
fetch('https://api.example.com/data')
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
Why: HTTP requests enable web applications to retrieve data from servers and interact with external APIs. They are fundamental for data-driven applications and services.

JS 1.7 Lexical scope
What: Lexical scope refers to the visibility of variables based on their location in the source code. In JavaScript, function scopes are lexical, meaning nested functions have access to variables in their outer functions.

How: Example of lexical scope:

javascript
Copy code
function outerFunction() {
    let outerVar = 'I am outside!';
    
    function innerFunction() {
        console.log(outerVar); // Accesses outerVar
    }
    
    innerFunction();
}

outerFunction();
Why: Understanding lexical scope helps in managing variable access and avoiding issues with variable shadowing. It is crucial for designing function closures and managing state.

JS 1.8 Event handling
What: Event handling involves responding to user actions or system events, such as clicks, keypresses, or page loads.

How: JavaScript attaches event listeners to HTML elements to execute code when events occur. Example:

javascript
Copy code
// Event Handling Example
document.getElementById("myButton").addEventListener("click", function() {
    alert("Button was clicked!");
});
Why: Event handling is essential for interactive web applications. It allows developers to create responsive and dynamic user interfaces that react to user inputs.

JS 1.9 Prototype inheritance
What: Prototype inheritance allows JavaScript objects to inherit properties and methods from other objects. This is achieved via the prototype chain.

How: Example of prototype inheritance:

javascript
Copy code
function Animal(name) {
    this.name = name;
}

Animal.prototype.speak = function() {
    console.log(`${this.name} makes a noise.`);
};

let dog = new Animal("Dog");
dog.speak();
Why: Prototype inheritance is a fundamental concept in JavaScript that supports object reuse and code organization. It helps in building object-oriented applications and extending functionalities.

JS 1.10 Higher-order functions
What: Higher-order functions are functions that can accept other functions as arguments or return functions as their results.

How: Example:

javascript
Copy code
// Higher-order Function Example
function filter(array, callback) {
    let result = [];
    for (let item of array) {
        if (callback(item)) {
            result.push(item);
        }
    }
    return result;
}

let numbers = [1, 2, 3, 4, 5];
let evenNumbers = filter(numbers, num => num % 2 === 0);
console.log(evenNumbers);
Why: Higher-order functions enable functional programming techniques, making code more flexible and reusable. They help in creating abstract and higher-level operations.

JS 1.11 Single-thread programming
What: JavaScript operates in a single-threaded environment, meaning it can execute one operation at a time in a single sequence of execution.

How: JavaScript uses event loops and callbacks to handle asynchronous operations without blocking the main thread. Example:

javascript
Copy code
// Single-threaded Example
console.log("Start");
setTimeout(() => console.log("Timeout"), 0);
console.log("End");
Why: Understanding single-threaded execution is crucial for managing performance and avoiding blocking operations. It helps in designing efficient and responsive applications.

JS 1.12 OAuth från frontend
What: OAuth is an authorization framework that allows third-party applications to access user data without exposing credentials. Frontend applications use OAuth to authenticate and authorize users.

How: Frontend applications use OAuth to redirect users to an authorization server and obtain tokens. Example:

javascript
Copy code
// OAuth Redirect Example
window.location.href = "https://example.com/oauth/authorize?response_type=token&client_id=your_client_id";
Why: OAuth is important for secure authentication and authorization in web applications. It helps protect user data and integrate with external services securely.

JS 1.13 Websockets
What: Websockets provide a full-duplex communication channel over a single, long-lived connection, allowing real-time data exchange between the client and server.

How: Example using Websockets:

javascript
Copy code
// Websockets Example
let socket = new WebSocket('ws://example.com/socket');

socket.onopen = function() {
    socket.send('Hello Server!');
};

socket.onmessage = function(event) {
    console.log('Message from server ', event.data);
};
Why: Websockets are essential for real-time applications, such as chat applications or live data feeds. They offer efficient, low-latency communication compared to traditional HTTP requests.