<?php

$isEnabled = in_array('mod_rewrite', apache_get_modules());
echo ($isEnabled) ? 'Enabled' : 'Not enabled';

?>