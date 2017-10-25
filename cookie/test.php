<?php
setcookie("name", 12, time() + 3600, "/phpExample", "localhost");

echo $_COOKIE["name"];