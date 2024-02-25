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

<p align=center>
    <img src="https://api.microlink.io?url=https%3A%2F%2Fexamples.contributte.org%2Fgui-skeleton%2F&overlay.browser=light&screenshot=true&meta=false&embed=screenshot.url"></img>
</p>

-----

## Goal

Main goal is to provide example of Contributte packages.

Focused on:

- PHP 8.2+
- `nette/*` packages
- bunch of `contributte/*` packages
- codestyle checking via **CodeSniffer** and `contributte/qa`
- static analysing via **phpstan** and `contributte/phpstan`
- unit / integration tests via **Nette Tester** and `contributte/tester`

You can try it out yourself either by running it with docker, or more easily with docker-compose.

## Demo

https://examples.contributte.org/gui-skeleton/

## Installation

To install latest version of `contributte/gui-skeleton` use [Composer](https://getcomposer.org).

```
composer create-project -s dev contributte/gui-skeleton acme
```

### Install using [docker](https://github.com/docker/docker/)

1) At first, clone this repository.

   ```
   git clone https://github.com/contributte/gui-skeleton.git
   ```

2) Run docker via docker compose.

   ```
   docker-compose up
   ```

3) Open http://0.0.0.0:8000 and enjoy!

If you need enter into container (such as `composer update`) run command `docker-compose run web bash`.

### Composer packages

Take a detailed look :eyes: at:
- [contributte/forms-bootstrap](https://contributte.org/packages/contributte/forms-bootstrap.html)
- [contributte/forms-wizard](https://contributte.org/packages/contributte/forms-wizard.html)
- [contributte/live-form-validation](https://contributte.org/packages/contributte/live-form-validation.html)
- [contributte/reCAPTCHAp](https://contributte.org/packages/contributte/reCAPTCHA.html)

## Development

See [how to contribute](https://contributte.org/contributing.html) to this package.

This package is currently maintaining by these authors.

<a href="https://github.com/f3l1x">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>
<a href="https://github.com/petrparolek">
  <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/6066243?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team. Also thank you for using this project.
