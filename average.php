/**
 * Average an array
 *
 * I can't belive this isn't built in to PHP.
 *
 * @param  float[] $array
 * @return float
 */
function array_average($array) {
    return array_sum($array) / count($array);
}


// https://gist.github.com/rjmunro/9e1b441ac46d1608dae0
