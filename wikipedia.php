<?php
# wikipedia.php

$html = file_get_contents('https://en.wikipedia.org/wiki/December_10');

echo $html;