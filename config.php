<?php
$client = new MongoDB\Client(
    'mongodb+srv://<root>:<>@<cluster-address>/test?retryWrites=true&w=school'
);
$db = $client->test;