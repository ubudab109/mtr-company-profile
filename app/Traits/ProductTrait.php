<?php

namespace App\Traits;

trait ProductTrait {
  
  public static function allDataProducts()
  {
    $data = [
      [
        'name'  => trans('product.product-0.name'),
        'desc'  => trans('product.product-0.desc'),
        'image' => asset('product/pallet_kayu.png'),
      ],
      [
        'name'  => trans('product.product-1.name'),
        'desc'  => trans('product.product-1.desc'),
        'image' => asset('product/peti_kayu.png'),
      ],
      [
        'name'  => trans('product.product-2.name'),
        'desc'  => trans('product.product-2.desc'),
        'image' => asset('product/gulungan_kabel.png'),
      ],
    ];

    return $data;
  }
}