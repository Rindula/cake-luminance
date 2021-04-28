# Luminance plugin for CakePHP
[![Release](https://github.com/Rindula/cake-luminance/actions/workflows/release.yml/badge.svg)](https://github.com/Rindula/cake-luminance/actions/workflows/release.yml)

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require rindula/luminance
```

## Setup

To activate the Plugin in CakePHP, you have to add the following to the end of `config/bootstrap.php`:

```php
Plugin::load('Luminance');
```

### In a View

To use this Helper in a view, you have two options:

1. Add the Helper to one Controller only

add the following code to your controller:

```php
public $helpers = ['Luminance'];
```

2. Add it globally to your AppView

Add the following to the initialize method of `src/View/AppView.php`:

```php
$this->loadHelper('Luminance.Luminance');
```

### In a Controller

Add this to the initialize function of the Controller you need the Component in, below `parent::initialize()`:

```php
$this->loadComponent('Luminance.Luminance')
```

## Usage

Once the respective setup is done you can use it like this:

### View and Controller

```php
$color = $this->Luminance->getContrastColor($hexColor);
```
`$color` then contains the hex color of the contrast color, which is either black (#000000) or white (#FFFFFF).
