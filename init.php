<?php

    session_start();
    session_destroy();

    $_SESSION['chickens'] = 1;
    $_SESSION['money'] = 100;
