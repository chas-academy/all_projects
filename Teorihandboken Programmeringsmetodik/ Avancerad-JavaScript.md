# Teorihandboken - Avancerad JavaScript (AJ)
Studerande: Elias Luzwehimana

## AJ 1.1 Node.js

**What:**
Node.js is a runtime environment for executing JavaScript code outside a web browser. It uses the V8 JavaScript engine and allows developers to build server-side applications with JavaScript.

**How:**
You can create a simple server with Node.js using the `http` module. Here’s a basic example:

```javascript
const http = require('http');

const server = http.createServer((req, res) => {
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain');
    res.end('Hello World\n');
});

server.listen(3000, '127.0.0.1', () => {
    console.log('Server running at http://127.0.0.1:3000/');
});
Why: Node.js is used for building scalable network applications. It is particularly good for real-time applications like chat and live updates due to its non-blocking architecture.

AJ 1.2 Express
What: Express is a web application framework for Node.js that simplifies the creation of web servers and APIs. It provides a set of tools and middleware to handle HTTP requests and responses.

How: With Express, you can set up routes and handle different HTTP methods easily. Example:

javascript
Copy code
const express = require('express');
const app = express();

app.get('/', (req, res) => {
    res.send('Hello World!');
});

app.listen(3000, () => {
    console.log('Server is running on http://localhost:3000');
});
Why: Express streamlines server-side development by providing a straightforward API and useful features like middleware for request processing and routing.

AJ 1.3 Progressive Web Apps
What: Progressive Web Apps (PWAs) are web applications that offer an app-like experience. They work offline, load quickly, and can be installed on a user’s device.

How: PWAs use service workers to handle caching and offline functionality. Here’s a basic example of registering a service worker:

javascript
Copy code
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/service-worker.js').then(registration => {
            console.log('Service Worker registered with scope:', registration.scope);
        }).catch(error => {
            console.log('Service Worker registration failed:', error);
        });
    });
}
Why: PWAs enhance user experience by providing offline access and faster load times. They improve accessibility and user retention by making web applications behave like native apps.

AJ 1.4 Typningssystem för Javascript (ex TypeScript, Flow)
What: TypeScript and Flow are tools that add static type checking to JavaScript. They help catch type errors during development and improve code quality.

How: TypeScript allows you to add type annotations to your JavaScript code. Example:

typescript
Copy code
function greet(name: string): string {
    return `Hello, ${name}`;
}

console.log(greet('World')); // Outputs: Hello, World
Why: Typing systems help prevent runtime errors by catching type mismatches during development. They also make code more readable and maintainable.

AJ 1.5 Funktionell programmering i JavaScript
What: Functional programming is a paradigm where functions are first-class citizens and state and mutable data are avoided. It emphasizes the use of pure functions and higher-order functions.

How: In JavaScript, functional programming can be demonstrated with higher-order functions. Example:

javascript
Copy code
const numbers = [1, 2, 3, 4];
const doubled = numbers.map(n => n * 2);

console.log(doubled); // Outputs: [2, 4, 6, 8]
Why: Functional programming leads to code that is easier to test and reason about. It promotes immutability and side-effect-free functions, making code more predictable.

AJ 1.6 Avancerad funktionalitet i ES.next
What: ES.next refers to the latest features of ECMAScript, including new syntax and advanced functionality that enhance JavaScript.

How: ES.next includes features like async/await for handling asynchronous operations more effectively. Example:

javascript
Copy code
async function fetchData() {
    try {
        let response = await fetch('https://api.example.com/data');
        let data = await response.json();
        console.log(data);
    } catch (error) {
        console.error('Error:', error);
    }
}
Why: These advanced features make JavaScript more powerful and expressive, simplifying complex operations and improving code readability and maintainability.

AJ 1.7 JavaScript i integrerade system
What: JavaScript can be used in integrated systems, including hardware and IoT devices. It allows developers to build applications that interact with physical devices or other systems.

How: For example, using the Johnny-Five library, you can control hardware devices with JavaScript:

javascript
Copy code
const five = require('johnny-five');
const board = new five.Board();

board.on('ready', () => {
    const led = new five.Led(13);
    led.blink(500);
});
Why: JavaScript’s versatility makes it suitable for interacting with a wide range of systems and devices. This flexibility allows developers to use a single language across different parts of their projects.

AJ 1.8 Native bundeling av JavaScript för olika operativsystem och enheter
What: Native bundling involves packaging JavaScript code into a format that can be executed natively on different operating systems and devices. This can be achieved with tools like Electron or NW.js.

How: Electron allows you to build cross-platform desktop applications with JavaScript. Here’s a basic setup:

javascript
Copy code
const { app, BrowserWindow } = require('electron');

function createWindow () {
    const win = new BrowserWindow({
        width: 800,
        height: 600,
        webPreferences: {
            nodeIntegration: true
        }
    });

    win.loadFile('index.html');
}

app.whenReady().then(() => {
    createWindow();

    app.on('activate', () => {
        if (BrowserWindow.getAllWindows().length === 0) {
            createWindow();
        }
    });
});

app.on('window-all-closed', () => {
    if (process.platform !== 'darwin') {
        app.quit();
    }
});
Why: Native bundling allows JavaScript applications to run on various platforms with a native look and feel. It enables developers to build applications that can be distributed and run outside of a web browser.