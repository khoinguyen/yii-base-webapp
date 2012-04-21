<?php

define("YII_ENV", "dev");

function configByEnv($configName, $env = YII_ENV) {
  return require($env . "." .$configName . ".php");
}