<?php

$vendorDir = dirname(__DIR__);

return array (
  'yiisoft/yii2-swiftmailer' => 
  array (
    'name' => 'yiisoft/yii2-swiftmailer',
    'version' => '2.0.7.0',
    'alias' => 
    array (
      '@yii/swiftmailer' => $vendorDir . '/yiisoft/yii2-swiftmailer',
    ),
  ),
  'yiisoft/yii2-bootstrap' => 
  array (
    'name' => 'yiisoft/yii2-bootstrap',
    'version' => '2.0.7.0',
    'alias' => 
    array (
      '@yii/bootstrap' => $vendorDir . '/yiisoft/yii2-bootstrap',
    ),
  ),
  'yiisoft/yii2-debug' => 
  array (
    'name' => 'yiisoft/yii2-debug',
    'version' => '2.0.12.0',
    'alias' => 
    array (
      '@yii/debug' => $vendorDir . '/yiisoft/yii2-debug',
    ),
  ),
  'yiisoft/yii2-gii' => 
  array (
    'name' => 'yiisoft/yii2-gii',
    'version' => '2.0.5.0',
    'alias' => 
    array (
      '@yii/gii' => $vendorDir . '/yiisoft/yii2-gii',
    ),
  ),
  'yiisoft/yii2-faker' => 
  array (
    'name' => 'yiisoft/yii2-faker',
    'version' => '2.0.3.0',
    'alias' => 
    array (
      '@yii/faker' => $vendorDir . '/yiisoft/yii2-faker',
    ),
  ),
  'mdmsoft/yii2-admin' => 
  array (
    'name' => 'mdmsoft/yii2-admin',
    'version' => '2.8.0.0',
    'alias' => 
    array (
      '@mdm/admin' => $vendorDir . '/mdmsoft/yii2-admin',
    ),
  ),
  'yiisoft/yii2-httpclient' => 
  array (
    'name' => 'yiisoft/yii2-httpclient',
    'version' => '2.0.4.0',
    'alias' => 
    array (
      '@yii/httpclient' => $vendorDir . '/yiisoft/yii2-httpclient',
    ),
  ),
  'yiisoft/yii2-authclient' => 
  array (
    'name' => 'yiisoft/yii2-authclient',
    'version' => '2.1.3.0',
    'alias' => 
    array (
      '@yii/authclient' => $vendorDir . '/yiisoft/yii2-authclient',
    ),
  ),
  'dektrium/yii2-user' => 
  array (
    'name' => 'dektrium/yii2-user',
    'version' => '0.9.12.0',
    'alias' => 
    array (
      '@dektrium/user' => $vendorDir . '/dektrium/yii2-user',
    ),
    'bootstrap' => 'dektrium\\user\\Bootstrap',
  ),
);
