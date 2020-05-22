<?php

$notice = $db->from('blog')
    ->orderby('blog.id', 'DESC')
    ->limit(0, 3)
    ->where('category_id', 1)
    ->all();

$news = $db->from('blog')
    ->orderby('blog.id', 'DESC')
    ->limit(0, 3)
    ->where('category_id', 2)
    ->all();



require view('index');
