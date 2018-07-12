<?php
// Home 
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Trang chủ', route('home'));
});

// Home > bang-gia
Breadcrumbs::for('bang-gia', function ($trail) {
    $trail->parent('home');
    $trail->push('Bảng giá', route('pricelist'));
});

// Home > lien-he
Breadcrumbs::for('lien-he', function ($trail) {
    $trail->parent('home');
    $trail->push('Liên hệ', route('contact'));
});
// Home > tin-tuc
Breadcrumbs::for('tin-tuc', function ($trail) {
    $trail->parent('home');
    $trail->push('Tin tức', route('news'));
});
// Home > tin-tuc > title
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('tin-tuc');
    $trail->push($post->title, route('breadcumbBanner', $post));
});

Breadcrumbs::for('gioi-thieu', function ($trail) {
    $trail->parent('home');
    $trail->push('Gioi thieu', route('introduce'));
}); 
Breadcrumbs::for('gioi-thieu-fti', function ($trail) {
    $trail->parent('gioi-thieu');
    $trail->push('Gioi thieu FTI', route('introduce'));
}); 