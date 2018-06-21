#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Starweb\Starweb;
use Starweb\Authentication\ClientCredentials;
use Starweb\Resource\ResourceInterface;

// create the credentials object
//$credentials = new ClientCredentials(CLIENT_ID, CLIENT_SECRET);
$credentials = new ClientCredentials('default.test', '7kmbpv9zvtytzdmy52ue7txbnlo0gl0cxpfg0a2z8uqkqbi');

// create the sdk object
$starweb = new Starweb($credentials, 'http://dev-shop.sws.local/api/v2');

// get a resource by its name in this case
$shopResource = $starweb->get(ResourceInterface::SHOP_RESOURCE);
echo $shopResource->get();