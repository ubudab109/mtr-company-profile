<?php

use Illuminate\Support\Facades\Route;

function companyLogo()
{
  return asset('logo/logo.png');
}

function isCurrent($route) {
  return Route::getCurrentRoute()->getName() == $route;
}