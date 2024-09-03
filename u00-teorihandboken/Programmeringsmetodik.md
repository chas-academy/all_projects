# Teorihandboken - Programmeringsmetodik (PG)
Studerande: Förnamn Efternamn

## PG 1.1 Versionshantering (Git)

**What is Version Control (Git)?**

Version control is a system that tracks changes to files over time, allowing multiple versions of a project to be managed and maintained. Git is a popular distributed version control system that enables developers to collaborate on code, track changes, and manage different versions of a project.

**How is Git used?**

Git is used to manage code changes through commands like `git init` to start a repository, `git add` to stage changes, and `git commit` to save changes. It supports branching and merging, allowing developers to work on features independently and integrate changes into the main codebase.

**Why use Git?**

Git provides a robust way to manage code versions and collaborate with other developers. It helps in tracking changes, resolving conflicts, and maintaining a history of the project. Using Git ensures that code changes are documented and can be reverted if necessary, facilitating collaboration and maintaining code quality.

## PG 1.2 Benchmarking

**What is Benchmarking?**

Benchmarking is the process of measuring the performance of a system, application, or piece of code under various conditions. It helps to assess the efficiency and speed of a program or algorithm by comparing it against predefined standards or other implementations.

**How is Benchmarking done?**

Benchmarking is performed by running tests that simulate different usage scenarios and measuring metrics like execution time, memory usage, and response time. Tools and frameworks for benchmarking can automate these tests and provide detailed performance reports.

**Why use Benchmarking?**

Benchmarking helps identify performance bottlenecks and optimize code for better efficiency. It provides objective data to compare different implementations or configurations and ensures that performance improvements are quantifiable and effective.

## PG 1.3 Testdriven utveckling

**What is Test-Driven Development (TDD)?**

Test-Driven Development (TDD) is a software development methodology where tests are written before the actual code. The process involves writing a failing test case, implementing the minimum code necessary to pass the test, and then refactoring the code.

**How is TDD implemented?**

TDD follows a cycle known as Red-Green-Refactor:
1. **Red**: Write a test case that fails because the feature is not yet implemented.
2. **Green**: Write code to make the test pass.
3. **Refactor**: Improve the code while ensuring that the test still passes.

**Why use TDD?**

TDD ensures that code is thoroughly tested and meets the specified requirements from the start. It promotes writing clean, maintainable code and helps catch bugs early in the development process. By having a suite of tests, it also makes future changes and refactoring safer.

## PG 1.4 Deploy och staging

**What are Deployment and Staging?**

Deployment is the process of moving a software application from a development environment to a production environment where it is accessible to end users. Staging is a pre-production environment that closely mimics the production environment, used for final testing before deployment.

**How are Deployment and Staging managed?**

Deployment involves transferring code to production servers, configuring environments, and ensuring that the application is fully operational. Staging is used to test the application in a production-like setting to catch any issues that might not have been identified in development.

**Why use Deployment and Staging?**

Staging helps catch issues that may arise in a production environment, reducing the risk of downtime or errors affecting end users. Deployment ensures that new features or fixes are delivered to users. Both processes are crucial for maintaining application stability and delivering a quality user experience.

## PG 1.5 Debugging

**What is Debugging?**

Debugging is the process of identifying, analyzing, and fixing bugs or issues in software. It involves using various tools and techniques to trace code execution, inspect variables, and find the root cause of problems.

**How is Debugging done?**

Debugging can be performed using integrated development environments (IDEs) with built-in debuggers or external tools. Techniques include setting breakpoints, stepping through code, and examining variable states to understand where and why an issue occurs.

**Why use Debugging?**

Debugging is essential for resolving issues and ensuring that software behaves as expected. It helps maintain code quality and reliability by identifying and fixing bugs that could affect functionality, performance, or security.

## PG 1.6 Dokumentation

**What is Documentation?**

Documentation refers to written or digital materials that describe the functionality, design, and usage of software. It includes user manuals, API references, code comments, and developer guides.

**How is Documentation created?**

Documentation is created by writing detailed descriptions of software features, code functionality, and usage instructions. It often involves creating manuals, API docs, and inline code comments to provide clear and comprehensive information to users and developers.

**Why use Documentation?**

Documentation helps users and developers understand how to use and maintain software. It facilitates onboarding, troubleshooting, and future development by providing essential information and guidelines. Well-documented code also improves collaboration and reduces the learning curve for new team members.

## PG 1.7 Struktur av kod i projekt

**What is Code Structure in Projects?**

Code structure refers to the organization of code within a software project. It involves arranging files, directories, and code components in a logical and maintainable manner, following best practices and design patterns.

**How is Code Structure managed?**

Code structure is managed by following conventions and patterns that suit the project’s needs. This includes organizing files into directories, using modular design principles, and applying naming conventions to ensure that the codebase is easy to navigate and maintain.

**Why use a structured code approach?**

A well-structured codebase enhances readability, maintainability, and scalability. It helps developers quickly locate and understand code components, reduces duplication, and promotes consistent coding practices across the project, leading to higher quality and more manageable software.

## PG 1.8 Automatisering av arbetsflöde

**What is Workflow Automation?**

Workflow automation involves using tools and scripts to automate repetitive tasks and processes in software development. It helps streamline and optimize workflows, reducing manual effort and improving efficiency.

**How is Workflow Automation implemented?**

Workflow automation is implemented by creating scripts, using automation tools, and setting up continuous integration/continuous deployment (CI/CD) pipelines. These tools automate tasks such as testing, building, and deploying code, allowing for more efficient and error-free processes.

**Why use Workflow Automation?**

Workflow automation improves productivity by reducing the time and effort required for repetitive tasks. It ensures consistency, minimizes human error, and accelerates the development cycle, leading to faster delivery of features and bug fixes.

## PG 1.9 Virtualisering av utvecklingsmiljö

**What is Virtualization of Development Environments?**

Virtualization of development environments involves creating virtual machines or containers that replicate the production environment for development and testing purposes. It ensures that code is developed and tested in an environment that closely mirrors production.

**How is Development Environment Virtualization managed?**

Development environment virtualization is managed using tools like Docker for containerization or virtual machine software like VMware. Developers set up and configure virtual environments to match production settings, ensuring consistency and reducing environment-related issues.

**Why use Virtualization?**

Virtualization provides consistency between development and production environments, reducing the risk of environment-specific issues. It allows developers to test applications in isolated environments, ensuring that code runs correctly before deployment and improving overall reliability.

## PG 1.10 Bundeling-verktyg

**What are Bundling Tools?**

Bundling tools are used to combine multiple files, such as JavaScript, CSS, and other assets, into a single file or a smaller set of files. This process reduces the number of requests required by a web application and improves performance.

**How are Bundling Tools used?**

Bundling tools like Webpack, Parcel, and Rollup are used to configure and automate the process of combining and optimizing files. These tools support features like code splitting, minification, and module resolution to enhance the efficiency of web applications.

**Why use Bundling Tools?**

Bundling tools improve performance by reducing the number of files that need to be loaded by the browser, minimizing load times, and optimizing resource usage. They also help manage dependencies and ensure that code is organized and ready for production deployment.

## PG 1.11 Terminalinterface

**What is Terminal Interface?**

A terminal interface (or command-line interface) allows users to interact with a computer system by typing commands into a terminal or command prompt. It provides a text-based way to execute commands, scripts, and programs.

**How is Terminal Interface used?**

Terminal interfaces are used to perform a wide range of tasks, including file management, running scripts, and executing system commands. Developers use terminal commands to interact with version control systems, build tools, and deployment processes.

**Why use Terminal Interface?**

The terminal interface is powerful for performing tasks quickly and efficiently, especially for development and system administration. It offers precise control over tasks, supports automation through scripting, and provides access to a wide range of tools and functionalities.
