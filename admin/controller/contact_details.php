<?php

$id = get('id');

$row = $db->from('contact')
    ->where('contact_id', $id)
    ->first();

require admin_view('contact_details');
