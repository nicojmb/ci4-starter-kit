# CodeIgniter 4 + InertiaJS + Vue3 Starter Kit

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nicojmb/ci4-starter-kit.svg?style=flat-square)](https://packagist.org/packages/nicojmb/ci4-starter-kit)
[![Tests](https://img.shields.io/github/actions/workflow/status/nicojmb/ci4-starter-kit/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/nicojmb/ci4-starter-kit/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/nicojmb/ci4-starter-kit.svg?style=flat-square)](https://packagist.org/packages/nicojmb/ci4-starter-kit)

## Description

This is a starter kit for CodeIgniter 4 that includes InertiaJS, Vue3, Vite, and TailwindCSS. It is a great starting point for building modern web applications with CodeIgniter 4.

## Features:

- Latest Codeigniter version 4.6.0
- Latest Vue 3 version with TypeScript.
- Latest InertiaJS version.
- Latest Vite version.
- Latest TailwindCSS version.
- Hot reloading for both PHP and Vue.
- Clean code...

## Installation:

> Make sure your server meets [CI4 requirements](https://www.codeigniter.com/user_guide/intro/requirements.html).

run the following command to create a project:

```
composer create-project nicojmb/ci4-starter-kit:dev-main my-project
```

## Setup

- Run: `npm intall` to install node dependencies.
- Run: `npm run dev` to serve your assets.
- Run: `composer update` to update your PHP dependencies.

- Now start you CI server: `php spark serve` or access it through you virtual host.

> **IMPORTANT:**
>
> After the installation, there will be no bundled assets, so make sure to run `npm run dev` to serve them or just build them with `npm run build` command.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Nicolás Javier Martinez](https://github.com/nicojmb)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
