This is an example project showcasing how to work with Yii3's web application template.

What it covers:
* application params
* views
* asset bundles
* routes
* tests

The commits are organized to make each step easy to follow. This README provides a brief overview of the project and extra guidance creating the project, installing dependencies, working with image assets, and running tests.

## Requirements

This project assumes you are familiar with command-line interfaces and have some experience with PHP, JavaScript, and package management.
* PHP (8.4.15 recommended)
* Composer (2.9.4 recommended)
* Node.js (v20.18.0 recommended)
* npm (10.8.2 recommended)

Recommended versions are just what were used when making this project. If other versions work for you, great!

## Create the project

Creating the project is simple using composer's project creation command. First, in a command-line interface, navigate to the directory where you want to create the project. Then, run the following command.

```cmd
composer create-project yiisoft/app personal-website
```

## Installing dependencies
This project uses Bootstrap, which does not come with the project template. Navigate into the project directory and run the following commands to install the Bootstrap dependencies.

```cmd
composer require yiisoft/bootstrap5
```

```cmd
npm install bootstrap
```

## Images
The about-me images are not included in the repository. To add them, create a directory called `images` in the `public/assets` directory, and put images with the following names into the `public/assets/images` directory.
* sunrise.jpg
* security_system.jpg
* slot_cars.jpg
* cat.jpg

## Serving the application
To serve the application, navigate into the project directory, set the `APP_ENV` environment variable to `dev`, and serve the application using the following commands depending on your system. See [the project creation guide](https://yiisoft.github.io/docs/guide/start/creating-project.html) for more information about creating a Yii3 project.

```sh
APP_ENV=dev ./yii serve --port=80
```

For Windows Command Prompt users, run:

```cmd
set APP_ENV=dev
yii serve --port=80
```

For Windows PowerShell users, run:

```powershell
$env:APP_ENV = "dev"
.\yii serve --port=80
```

For Docker users, run:

```sh
make up
```

## Running tests
To run the tests, navigate to the project directory in two command-line interfaces, set the APP_ENV environment variable in both command-line interfaces, serve the app in one of the command-line interfaces, and run codeception in the other command-line interface.

```sh
APP_ENV=dev
./yii serve
```

```sh
APP_ENV=test
./vendor/bin/codecept run
```

For Windows Command Prompt users, run:

```cmd
set APP_ENV=dev
yii serve
```

```cmd
set APP_ENV=test
vendor\bin\codecept run
```

For Windows PowerShell users, run:

```powershell
$env:APP_ENV = "dev"
.\yii serve
```

```powershell
$env:APP_ENV = "test"
.\vendor\bin\codecept run
```
