<?php
    class Clock
    {
        function angle($hour, $minute)
        {
            if ($hour < 13 && $minute < 60)
            {
                $degrees = ($hour * 30) - ($minute * 6);
            }
            else
            {
                $degrees = 'invalid entry';
            }

            return $degrees;
        }
    }
 ?>
