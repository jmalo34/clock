<?php
    class Clock
    {
        function angle($hour, $minute)
        {
            if ($hour < 13 && $minute < 60)
            {
                $degrees = (($hour * 30) - ($minute * 6));
                if ($degrees < 0)
                {
                    $degrees = ($degrees * -1);
                }
                if ($degrees > 180)
                {
                    $degrees = (360 - $degrees);
                }
            }
            else
            {
                $degrees = 'invalid entry';
            }

            return $degrees;
        }
    }
 ?>
