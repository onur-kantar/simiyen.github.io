<?php
if ($post_url = route(1)) {
    require controller('details');
} else {
    if (isset($_GET['name']))
        $name = $_GET['name'];

    $pageLimit = 3;
    $pageParam = 'page';
    if ($name == 'news') {

        $totalRecord = $db->from('blog')
            ->select('count(id) as total')
            ->where('category_id', 2)
            ->total();

        $pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

        $query = $db->from('blog')
            ->join('users', '%s.id = %s.user_id', 'left')
            ->orderby('blog.id', 'DESC')
            ->limit($pagination['start'], $pagination['limit'])
            ->where('category_id', 2)
            ->all();
        require view('blog');
    } elseif ($name == 'notice') {

        $totalRecord = $db->from('blog')
            ->select('count(id) as total')
            ->where('category_id', 1)
            ->total();

        $pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

        $query = $db->from('blog')
            ->join('users', '%s.id = %s.user_id', 'left')
            ->orderby('blog.id', 'DESC')
            ->limit($pagination['start'], $pagination['limit'])
            ->where('category_id', 1)
            ->all();

        require view('blog');
    }
}
