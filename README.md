# PHP Diadoc API v.0.0.5

Модуль для работы с системой документооборота [Диадок](http://www.diadoc.ru) из PHP

### Внешние зависимости

Для успешного запуска модуля необходимо уставновленное в PHP расширение [php-protobuf](https://github.com/allegro/php-protobuf)

### Конфишурация для использования через DI Symfony 2

parameters:
    docflow.api.diadoc:
        url: https://diadoc-api.kontur.ru
        login: 
        password: 
        key: 
        boxId: 

services:
    docflow.client:
        class: CRM\Lib\Docflow\Api\Diadoc\ClientAdapter
        arguments: [ %docflow.api.diadoc% ]