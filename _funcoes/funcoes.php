<?php
    function somar ($a, $b) {
        return $a+$b;
    }
    function soma ($a, $b) {
        echo "<p>A soma entre $a e $b vale ".($a+$b)."</p>";
    }
    function soma1 (&$a) {
        return ++$a;
    }
    function somatodos () {
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for ($i=0; $i<$t; $i++) { 
              $s += $p[$i];
            }
            return $s;
    }
?>