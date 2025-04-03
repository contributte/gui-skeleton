![](https://heatbadger.now.sh/github/readme/contributte/gui-skeleton/)

<p align=center>
  <a href="https://github.com/contributte/gui-skeleton/actions"><img src="https://badgen.net/github/checks/contributte/gui-skeleton/master"></a>
  <a href="https://codecov.io/gh/contributte/gui-skeleton"><img src="https://badgen.net/codecov/c/github/contributte/gui-skeleton"></a>
  <a href="https://packagist.org/packages/contributte/gui-skeleton"><img src="https://badgen.net/packagist/dm/contributte/gui-skeleton"></a>
  <a href="https://packagist.org/packages/contributte/gui-skeleton"><img src="https://badgen.net/packagist/v/contributte/gui-skeleton"></a>
</p>
<p align=center>
  <a href="https://packagist.org/packages/contributte/gui-skeleton"><img src="https://badgen.net/packagist/php/contributte/gui-skeleton"></a>
  <a href="https://github.com/contributte/gui-skeleton"><img src="https://badgen.net/github/license/contributte/gui-skeleton"></a>
  <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
  <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
  <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

## Overview

This is a comprehensive example project showcasing the integration of various Contributte packages. It serves as a reference implementation for developers looking to build modern PHP applications using the Nette framework and Contributte ecosystem.

### Key Features

- Built with PHP 8.2+
- Powered by Nette framework packages
- Integrated Contributte packages
- Comprehensive code quality tools:
  - CodeSniffer for code style checking
  - PHPStan for static analysis
  - Nette Tester for unit and integration testing

## Demo

<p align=center>
    <img src="https://api.microlink.io?url=https%3A%2F%2Fexamples.contributte.org%2Fgui-skeleton%2F&overlay.browser=light&screenshot=true&meta=false&embed=screenshot.url"></img>
</p>

Visit the live demo at: https://examples.contributte.org/gui-skeleton/

## Getting Started

### Non-Docker Installation

1. Create a new project:
   ```bash
   composer create-project -s dev contributte/gui-skeleton acme
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Start PHP development server:
   ```bash
   make dev
   ```

4. Access the application at http://0.0.0.0:8080

### Docker Installation

1. Create a new project:
   ```bash
   composer create-project -s dev contributte/gui-skeleton acme
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Start the application using Docker Compose:
    ```bash
    docker compose up
    ```

    To access the container for development tasks (e.g., `composer update`):

    ```bash
    docker compose run web bash
    ```

4. Access the application at http://0.0.0.0:8080

## Development

See [how to contribute](https://contributte.org/contributing.html) to this package.

This package is currently maintaining by these authors.

<a href="https://github.com/f3l1x">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team. Also thank you for using this project.
