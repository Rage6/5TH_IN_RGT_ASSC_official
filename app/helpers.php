<?php

use App\Http\Controllers\stdClass;

function get_cart_count($request) {
  $cart_count = 0;

  $cookie_string = $request->cookie('cart');
  $test_a = explode("&",$cookie_string);
  for ($b = 0; $b < count($test_a); $b++) {
    $test_a[$b] = explode("#",$test_a[$b]);
  };
  for ($c = 0; $c < count($test_a); $c++) {
    for ($d = 0; $d < count($test_a[$c]); $d++) {
      if (is_numeric($test_a[$c][$d])) {
        $test_a[$c][$d] = intval($test_a[$c][$d]);
      };
    };
  };
  $cart_content = $test_a;
  if ($request->cookie('cart')) {
    for ($i = 0; $i < count($cart_content); $i++) {
      if (intval($cart_content[$i][2]) > 0) {
        $cart_count += intval($cart_content[$i][3]);
      } else {
        $cart_content[$i][2] = 0;
      };
    };
  };
  $cart_values = new \stdClass;
  $cart_values->cart_count = $cart_count;
  $cart_values->cart_content = $cart_content;
  $cart_values->test_a = $test_a;
  return $cart_values;
};
