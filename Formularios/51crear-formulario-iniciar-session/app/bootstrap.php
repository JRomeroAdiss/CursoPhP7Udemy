<?php

require __DIR__ . "/../vendor/autoload.php";
$containerBuild = new \DI\ContainerBuilder();
$containerBuild->addDefinitions(__DIR__ . "/config.php");
return $containerBuild->build();
