# Teorihandboken - HTML & CSS (HC)
Studerande: Elias Luzwehimana

## HC 1.1 HTML & CSS

**What:**
HTML (HyperText Markup Language) is the standard language for creating web pages. It structures the content on the web. CSS (Cascading Style Sheets) controls the presentation, layout, and design of HTML elements.

**How:**
HTML uses tags to create elements like headings, paragraphs, and links. CSS uses selectors and properties to style these elements. Example:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML & CSS Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: blue;
        }
        p {
            color: gray;
        }
    </style>
</head>
<body>
    <h1>Hello, World!</h1>
    <p>This is a sample paragraph.</p>
</body>
</html>
Why: HTML and CSS are fundamental for web development. HTML provides the structure, while CSS enhances the design and layout, making web pages visually appealing and user-friendly.

HC 1.2 Responsiv design
What: Responsive design ensures that web pages look good and function well on a variety of devices and screen sizes, including desktops, tablets, and smartphones.

How: Responsive design uses flexible grids, layouts, and media queries to adapt the web page to different screen sizes. Example of a media query in CSS:

css
Copy code
/* Base styles */
body {
    font-size: 16px;
}

/* Styles for screens smaller than 600px */
@media (max-width: 600px) {
    body {
        font-size: 14px;
    }
}
Why: Responsive design improves user experience by ensuring that web pages are accessible and usable on any device. It helps in reaching a wider audience and enhances overall usability.

HC 1.3 Tillgänglighet inom webb
What: Web accessibility involves designing and developing websites that are usable by people with disabilities. This includes considerations for screen readers, keyboard navigation, and color contrast.

How: Accessibility can be improved by using semantic HTML elements, providing text alternatives for images, and ensuring sufficient color contrast. Example:

html
Copy code
<img src="logo.png" alt="Company Logo">
Why: Making websites accessible ensures that all users, regardless of their abilities or disabilities, can access and use web content. It is also often required by law and improves the inclusivity of your web applications.

HC 1.4 Aktuella webbstandarder (gällande och kommande standarder)
What: Web standards are guidelines and specifications that ensure web technologies are used consistently across different browsers and devices. They include HTML, CSS, and JavaScript standards.

How: Standards are defined by organizations like W3C (World Wide Web Consortium) and WHATWG (Web Hypertext Application Technology Working Group). Keeping up with current standards involves following their specifications and updates.

Why: Adhering to web standards ensures compatibility and interoperability across different platforms. It helps maintain a consistent user experience and facilitates the development of future-proof web applications.

HC 1.5 CSS Pre-processorer (ex SASS/LESS)
What: CSS preprocessors like SASS (Syntactically Awesome Style Sheets) and LESS (Leaner Style Sheets) extend CSS with features like variables, nesting, and mixins, making it easier to write and maintain complex stylesheets.

How: Preprocessors are compiled into standard CSS before being used in web pages. Example using SASS:

scss
Copy code
$primary-color: #333;

body {
    color: $primary-color;
}

.nav {
    margin: 0;
    padding: 0;
    list-style: none;
}
Why: CSS preprocessors streamline and enhance CSS development by providing advanced features and improved organization. They make it easier to manage large stylesheets and maintain consistent design across a website.

HC 1.6 Optimering och validering av HTML & CSS
What: Optimization and validation involve improving the performance and correctness of HTML and CSS code. This includes minimizing file sizes, reducing redundancies, and ensuring code adheres to standards.

How:

Optimization: Minify HTML and CSS files, use efficient selectors, and reduce the number of HTTP requests.
Validation: Use tools like W3C Markup Validation Service to check for errors and ensure compliance with standards.
Why: Optimizing and validating code improves website performance, load times, and user experience. It helps in ensuring that web pages are correctly rendered across different browsers and devices.