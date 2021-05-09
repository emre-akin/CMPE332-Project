<?php
session_start();
session_destroy();
echo "You have successfully logged out.";
echo (' <a href="https://localhost/">Redireting to Home in 2 Seconds or Click this </a> ');
	header('Refresh: 2; URL=http://localhost/');
?>