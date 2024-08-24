<?php
session_start();
session_destroy();
header('Location: /nigerian_coffee_express/');
exit();