<?php

function index_index() {
    $data = array();
    // model('')->fc();
    $data['template_file'] = 'index/index.php';
    render('layout.php', $data);

}
