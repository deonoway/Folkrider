<?php
$connect_error = 'Sorry we\'re experiencing connection problems';
mysql_connect('localhost', 'deonoway', 'tle20125') or die ($connect_error);
mysql_select_db('deonoway_folkrider') or die ($connect_error);
mysql_select_db('deonoway_guestbook') or die ($connect_error);
?>