<?php
if ($post_url = route(1)) {
    require controller('details');
} else {

    if (isset($_GET['id']))
        $id = $_GET['id'];

    $pageLimit = 3;
    $pageParam = 'page';
    if (post('searchBtn')) {
        $search = $_POST['search'];

        $totalRecord = $db->from('blog')
            ->select('count(id) as total')
            ->where('category_id', $id)
            ->like('content', $search)
            ->total();

        $pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

        $query = $db->from('blog')
            ->join('users', '%s.id = %s.user_id', 'left')
            ->orderby('blog.id', 'DESC')
            ->limit($pagination['start'], $pagination['limit'])
            ->where('category_id', $id)
            ->like('content', $search)
            ->all();
    } else {
        $totalRecord = $db->from('blog')
            ->select('count(id) as total')
            ->where('category_id', $id)
            ->total();

        $pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

        $query = $db->from('blog')
            ->join('users', '%s.id = %s.user_id', 'left')
            ->orderby('blog.id', 'DESC')
            ->limit($pagination['start'], $pagination['limit'])
            ->where('category_id', $id)
            ->all();
    }
    require view('blog');
}
