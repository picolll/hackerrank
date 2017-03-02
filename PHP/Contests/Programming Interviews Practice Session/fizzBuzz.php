<?php
$i=0;while($i<100){echo(!(++$i%15)?'FizzBuzz':(!($i%3)?'Fizz':(!($i%5)?'Buzz':$i)))."\n";}
