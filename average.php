/**
 * Average an array
 *
 * @param  float[] $array
 * @return float
 */
function array_average($array) {
     $array_length = count($array);
     return $array_length > 0 ? array_sum($array) / $array_length : 0;
}


// https://gist.github.com/rjmunro/9e1b441ac46d1608dae0
