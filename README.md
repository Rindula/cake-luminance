# Luminance plugin for CakePHP

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
$this->loadHelper('Luminance');
```

### In a Controller

_In Progress_

## Usage

Once the respective setup is done you can use it like this:

### View

```php
$this->Luminance->getContrastColor($hexColor);
```

### Controller

_In Progress_