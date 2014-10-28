<?php

use NoahBuscher\Macaw\Macaw as Route;

Route::get('', 'HomeController@home');

Route::get('foo', function() {
  echo "Foo!";
});

Route::$error_callback = function() {
  throw new Exception("404 Not Found");
};

Route::dispatch();