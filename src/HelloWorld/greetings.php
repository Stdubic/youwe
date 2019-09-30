<?php

namespace HelloWorld;

class Greetings {
    public static function generateTrip($arr) {

        $n = sizeof($arr);

        for($i = 0; $i < $n; $i++)
        {

            for ($j = 0; $j < $n - $i - 1; $j++)
            {
                if ($arr[$j]['order'] > $arr[$j+1]['order'])
                {
                    $t = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $t;

                }
            }
        }

        $letters = '';
        foreach($arr as $key => $value){
            $letters .= " Take ". $value['type']." from ".$value['from']. " to ".$value['to']." seat ".$value['seat']." Baggage ". $value['baggage']  .  ';' ;
        }

        return $letters;
    }


}
