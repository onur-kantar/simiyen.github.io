<?php

$totalRecord = $db->from('users')
    ->select('count(id) as total')
    ->total();

$pageLimit = 10;
$pageParam = 'page';
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from('users')
    ->join('roles','%s.role_id = %s.role_id' ,'left')
    ->orderby('users.id', 'DESC')
    ->limit($pagination['start'], $pagination['limit'])
    ->all();


require admin_view('users');
