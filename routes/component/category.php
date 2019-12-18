<?php
$prefixCategory = sc_config('PREFIX_CATEGORY')??'category';

Route::group(['prefix' => $prefixCategory], function ($router) use($suffix) {
    $router->get('/', 'ShopFront@getCategories')->name('categories');
    $router->get('/{name}_{id}', 'ShopFront@productToCategory')
        ->where(['id' => '[0-9]+'])->name('category');
});