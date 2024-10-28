![workflow](https://github.com/skodnik/platformaofd-api-client/actions/workflows/main.yml/badge.svg)

# Клиент для работы с PlatformaOFD Client API

PlatformaOFD Client API — программный интерфейс для получения данных о кассах пользователя и документами с данных касс,
полученные оператором фискальных данных.

## Возможности:

С помомощью данного клиента пользователь может получать следующую информацию:

- **Кассы** - список касс, зарегистрированных в личном кабинете «Платформы ОФД»;
- **Документы кассы** - список всех документов кассы за период;
- **Отчеты о закрытии смены** - отчеты о закрытии смены кассы (Z-отчетов) за период;
- **Чеки** - кассовые чеки (БСО), чеки (БСО)  коррекции кассы за период;
- **Чеки с тегом 1084** - выборка кассовых чеков по значению из тегов 1084, либо с заполненным тегом 1084, либо поиск
  кассового чека (БСО), чек (БСО) коррекции с определенным значением тега 1084.

## Зависимости

Для выполнения запросов к API используются токены. Предоставление значения <TOKEN> осуществляется оператором фискальных
данных в индивидуальном порядке.

## Установка библиотеки

```bash
composer require platformaofd/client-api
```

## Работа с API

Пример конфигурации клиента смотри в [TestCaseBase.php](tests/TestCaseBase.php)

### Получение списка Касс

```php
try {
    /** @var \Platformaofd\ClientApi\Model\ResponseKktList $responseKktList */
    $responseKktList = $this->apiClient->sendRequest(
        token: 'access_token',
        apiEndpoint: \Platformaofd\ClientApi\Model\ApiEndpoint::KKTS,
    );
} catch (ApiException $exception) {
    echo $exception->getMessage();

    exit();
}
```

Все методы объекта ответа см. [ResponseKktList](src/Model/ResponseKktList.php)

### Получение Документов кассы

```php
$dateFrom = new DateTimeImmutable('2023-05-06 10:00:00');
$dateTo = new DateTimeImmutable('2023-06-06 10:00:00');
$requestDocuments = (new \Platformaofd\ClientApi\Model\RequestDocuments())
    ->setRnm('0000000123456789')
    ->setDateFrom($dateFrom)
    ->setDateTo($dateTo);
    
try {
    /** @var \Platformaofd\ClientApi\Model\ResponseDocuments $responseDocuments */
    $responseDocuments = $this->apiClient->sendRequest(
        token: 'access_token',
        apiEndpoint: \Platformaofd\ClientApi\Model\ApiEndpoint::ALL_DOCUMENTS,
        requestObject: $requestDocuments
    );
} catch (ApiException $exception) {
    echo $exception->getMessage();

    exit();
}
```

Все методы объекта ответа см. [ResponseDocuments](src/Model/ResponseDocuments.php)

### Получение Чеков с тегом 1084

```php
$receiptDate = new DateTimeImmutable('2023-05-06 10:00:00');
$requestReceiptsWithTag1084 = (new \Platformaofd\ClientApi\Model\RequestReceiptsWithTag1084())
    ->setReceiptDate($receiptDate)
    ->setKktRegIds(['0000000000000000', '0000000000000001'])
    ->setProperties1084(['значение1', 'значение2']);
    
try {
    /** @var \Platformaofd\ClientApi\Model\ResponseReceiptsWithTag1084 $responseReceiptsWithTag1084 */
    $responseReceiptsWithTag1084 = $this->apiClient->sendRequest(
        token: 'access_token',
        apiEndpoint: \Platformaofd\ClientApi\Model\ApiEndpoint::WITH_TAG1084,
        requestObject: $requestReceiptsWithTag1084
    );
} catch (ApiException $exception) {
    echo $exception->getMessage();

    exit();
}
```

Все методы объекта ответа см. [ResponseReceiptsWithTag1084](src/Model/ResponseReceiptsWithTag1084.php)

Работа с остальными методами производится аналогичным образом.

## Debug

Для отладки можно использовать debug режим с сохранением запросов и ответов. Для этого при создании клиента в
конфигурации следует это определить. В интеграционных тестах опция определяется переменной конфига phpunit.
Запросы сохраняются в файл `.http`, его можно использовать в дальнейшем для отладки в IDE, например, в PhpStorm.
По умолчанию режим выключен.

## Тесты

```bash
composer tests-feature
```

## Источники

- [PlatformaOFD Client API](https://docs.google.com/document/d/1CxPzFKaBG4Ox7wlSrZoAAiOMGc6lhj4lgpw-zJpEFWM/edit#)
