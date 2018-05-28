<?php
$n = trim(fgets(STDIN));
if($n % 6 == 0) { echo "6"; }
else if($n % 2 == 0) {echo "2"; }
else if($n % 3 == 0) {echo "3"; }
else { echo "1"; }