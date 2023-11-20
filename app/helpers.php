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
      if (is_int($test_a[$c][$d])) {
        $test_a[$c][$d] = intval($test_a[$c][$d]);
      };
      if (is_float($test_a[$c][$d])) {
        $test_a[$c][$d] = floatval($test_a[$c][$d]);
      };
    };
  };
  $cart_content = $test_a;
  if ($request->cookie('cart')) {
    for ($i = 0; $i < count($cart_content); $i++) {
      if (floatval($cart_content[$i][2]) > 0) {
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

function check_memory_limit($unset_list) {
  for ($i = 0; count($unset_list) < $i; $i++) {
    $this_variable = $unset_list[$i];
    unset($this_variable);
  };

  // This measures how much free memory left is left (in kilobytes)
  $data = memory_get_usage();
  $peak = memory_get_peak_usage();
  $how_much_left = ($peak - $data) / 1000;

  // If there is less than the minimum free memory limit (in kilobytes), then it initiates the 'garbage collector'
  $minimum_free_memory = 30;
  if ($how_much_left < $minimum_free_memory) {
    unset($data);
    unset($peak);
    unset($how_much_left);
    unset($minimum_free_memory);
    gc_collect_cycles();
  };

  return true;
}
