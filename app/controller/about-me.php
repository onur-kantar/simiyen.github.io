<?php

$query = $db->from('about')
    ->first();

require view('about-me');