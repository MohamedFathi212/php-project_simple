<?php

session_start();


include "core/fuctions.php";

session_destroy();
redirect('login.php');
die;