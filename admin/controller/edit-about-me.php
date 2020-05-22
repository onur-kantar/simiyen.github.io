<?php
if (post('submit')) {
    $data = form_control('name');
    $db->update('about')
        ->where('id', 1)
        ->set($data);
}

$query = $db->from('about')
    ->first();

require admin_view('edit-about-me');
