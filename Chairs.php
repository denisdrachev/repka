<?php

class Chairs {

    public static function getMaxProfit($offers, $demands) {

        sort($offers);
        rsort($demands);
        $sum = 0;

        for ($i = 0; $i < min(count($demands), count($offers)); $i++) {
            if ($demands[$i] > $offers[$i]) {
                $sum +=$demands[$i] - $offers[$i];
            }
        }
        return $sum;
    }
}
?>