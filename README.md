# Kindmetrics PHP Library

This is the php library for Kindmetrics.

You can get your domains, create new and get data on specific domains, like current visitors, sources, mediums, pages, and more.


## Getting started
Using composer, you run this command:
```
composer require kindmetrics/kindmetrics
```

if you want to do it manually you would need to download, and run composer to add the required libraries this library is dependent on.

## Example

Here is an example when you have autoload the required files:
```
$token = "IlkoAAfas75468IBQ0tE8T1sdFhhgsdf7IidsgASd-c_m4";

$kind = new \Kindmetrics\Kindmetrics($token);

$domains = $kind->getDomains();
print_r($domains);

$domain = $kind->getDomain(2);
print_r($domain);
$sources = $domain->getSources();
print_r($sources);
```
