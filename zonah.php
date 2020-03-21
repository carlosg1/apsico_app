<?php

    echo date_default_timezone_get();

    echo '<br>';

    echo date('d/m/Y');

    echo '<br>';

    echo date('w', mktime(date('H'), date('i'), date('s'), date('n'), date('j')-4, date('Y')));

    echo '<br>';

    echo date('l', mktime(date('H'), date('i'), date('s'), date('n'), date('j')-4, date('Y')));

    echo '<br>';

    echo date('d-m-Y', mktime(date('H'), date('i'), date('s'), date('n'), date('j'), date('Y')));




?>