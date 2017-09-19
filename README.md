# Formbuilder

[![Latest Version on Packagist](https://img.shields.io/packagist/v/black-bits/formbuilder.svg?style=flat-square)](https://packagist.org/packages/black-bits/formbuilder)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/black-bits/formbuilder/master.svg?style=flat-square)](https://travis-ci.org/black-bits/formbuilder)
[![Total Downloads](https://img.shields.io/packagist/dt/black-bits/formbuilder.svg?style=flat-square)](https://packagist.org/packages/black-bits/formbuilder)

HTML and Form Builder for the Laravel Framework

## How to use

```php
<div class="col-md-6">

        {{ Formbuilder::title('Edit User', 'h2') }}

        {{ Formbuilder::open(route('form1.post'), 'post') }}

            {{ csrf_field() }}

            {{ Formbuilder::text(
                "full_name",
                old('full_name', $user->get('full_name')),
                "Full Name",
                "Max Mustermann")
            }}

            {{ Formbuilder::text(
                "username",
                old('username', $user->get('username')),
                "Username",
                "mmustermann")
            }}

            {{ Formbuilder::email(
                "email",
                old('email', $user->get('email')),
                "Email",
                "max@mustermann.de")
            }}

            {{ Formbuilder::password(
                "password",
                '',
                "Password",
                "your-secret-password")
            }}

            {{ Formbuilder::password(
                "password_repeat",
                '',
                "Password Repeat",
                "your-secret-password")
            }}

            {{ Formbuilder::buttons(
                route('home'))
            }}

        {{ Formbuilder::close() }}

    </div>
```