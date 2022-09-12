<?php
namespace App\Traits;

trait CompanyPlant {
  public static function allCompanyPlant()
  {
    $data = [
      asset('company-plant/1.jpeg'),
      asset('company-plant/2.jpeg'),
      asset('company-plant/3.jpeg'),
    ];

    return $data;
  }
}