<p align="center">
    <a href="http://www.yiiframework.com/" target="_blank">
        <img src="http://static.yiiframework.com/files/logo/yii.png" width="400" alt="Yii Framework" />
    </a>
</p>

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact@inquid.co&item_name=Yii2+extensions+support&item_number=22+Campaign&amount=5%2e00&currency_code=USD)

Yii2 Inquid Zendesk Chat
========================
Embed Zendesk chat widget for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist inquid/yii2-inquid-zendesk-chat "*"
```

or add

```
"inquid/yii2-inquid-zendesk-chat": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply add an echo of this line, like this:
(For single view)
```php
<?= \inquid\zendeskchat\ZendeskChat::widget(); ?>
```

If you want to use it in all views add this in your layout file, for example:
```php
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?= \inquid\zendeskchat\ZendeskChat::widget(); ?>
</head>
<body>
<?php $this->beginBody() ?>
```

Set the param from your params config file
```php
<?php

return [
    'adminEmail' => 'admin@example.com',
    'zendesk_host' => 'inquid',
];
```
Or add it directly in the call
```php
<?= \inquid\zendeskchat\ZendeskChat::widget(['host'=>'inquid']); ?>
```

NOTE that ".zendesk.com" its optional, if missing it will be added

SUPPORT
-----
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact@inquid.co&item_name=Yii2+extensions+support&item_number=22+Campaign&amount=5%2e00&currency_code=USD)
