<?php
    require_once "src/Clock.php";

    class ClockTest extends PHPUnit_Framework_TestCase
    {
        function test_angle_hour()
        {
            //Arrange
            $test_angle = new Clock;
            $input = 1;
            $input2 = 20;

            //Act
            $result = $test_angle->angle($input, $input2);

            //Assert
            $this->assertEquals(-90, $result);
        }

        function test_angle_invalidhr()
        {
            //Arrange
            $test_angle = new Clock;
            $input = 13;
            $input2 = 40;

            //Act
            $result = $test_angle->angle($input, $input2);

            //Assert
            $this->assertEquals('invalid entry', $result);
        }
    }
 ?>
