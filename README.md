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
<?= \inquid\zendeskchat\ZendeskChat::widget(); ?>```

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
...
```
