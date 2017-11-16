<?php
require_once __DIR__ . '/vendor/autoload.php';

use yii\bootstrap\Progress;

Progress::widget(['percent' => 60, 'label' => 'test']);