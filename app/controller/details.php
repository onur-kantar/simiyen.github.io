<?php

$details = $db->from('blog')
    ->join('users', '%s.id = %s.user_id', 'left')
    ->where('url', $post_url)
    ->first();

require view('details');
