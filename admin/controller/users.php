<?php

$totalRecord = $db->from('users')
    ->select('count(id) as total')
    ->total();

$pageLimit = 1;
$pageParam = 'page';
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from('users')
    ->orderby('id', 'DESC')
    ->limit($pagination['start'], $pagination['limit'])
    ->all();

require admin_view('users');
