<?php
//cloture la session
session_start();
session_unset();
session_destroy();
exit;