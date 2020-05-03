<?php

// Admin Routes
Route::group(['prefix'=>'admin','as'=>'admin.', 'namespace' => 'Admin'],function(){
  Route::get('/login','AdminLoginController@login_form')->name('login');
  Route::post('/login','AdminLoginController@loginAdmin');
  Route::get('/logout','AdminLoginController@logout')->name('logout');

  // Ajax Routes
  Route::group(['prefix'=>'ajax','as'=>'ajax.'],function(){
    Route::get('/search-products','Product\ProductController@searchProducts')->name('search-products');
    Route::get('/search-category','Category\CategoryController@search_category')->name('search-category');
});
//End Ajax Routes
  Route::get('/all-customers','AdminController@users')->name('users');
  Route::get('/contact-us/{id}','AdminController@view_contact')->name('details-contact');
  Route::get('/contact-us','AdminController@contact')->name('contact');
  Route::get('/newsletter-subscibed','AdminController@get_subsciber')->name('newsletter');
  Route::resource('/dashboard','AdminController');
  // Popular category
  Route::get('/popular-category','Category\PopularCategoryController@index')->name('popular-category');
  Route::post('/popular-category/add','Category\PopularCategoryController@add_popular_c')->name('add.popular-category');
  Route::get('/popular-category/edit/{id}','Category\PopularCategoryController@edit_popular_c')->name('popular-category.edit');
  Route::get('/popular-category/delete/{id}','Category\PopularCategoryController@delete_popular_c')->name('popular-category.delete');
  // End Popular Category
  Route::resource('categories','Category\CategoryController');
  Route::resource('menus','Category\MenuController');
  Route::resource('sub-categories','Category\SubcategoryController');
  //Deal Days Star
  Route::group(['prefix'=>'products/advance-products','as'=>'products.advance-products.', 'namespace' => 'Product'],function(){
    Route::get('/daily-deals','AdvanceProductController@manageDailyDeals')->name('daily-deals');
    Route::post('/daily-deals/add','AdvanceProductController@addDailyDeals')->name('daily-deals.add');
    Route::get('/daily-deals/{id}','AdvanceProductController@deleteDailyDeals')->name('daily-deals.delete');
    Route::get('/daily-deals/{id}/change','AdvanceProductController@changeDailyDeals')->name('daily-deals.change');
    Route::post('/daily-deals/{id}/change','AdvanceProductController@updateDailyDeals');
  });
  //Deal Days End
  Route::resource('products','Product\ProductController');
  Route::resource('product_options','Product\ProductOptionController');
  Route::resource('coupons','CouponController');
  Route::resource('sliders','SliderController');
  //Orders
  Route::get('delivery-pdf/','OrderController@deliveryPDF')->name('delivery-orders');
  Route::get('pending-orders-pdf/{id}','OrderController@viewPDF')->name('pending-orders');
  Route::get('delivered-orders','OrderController@delivered_order')->name('delivered_order');
  Route::get('confirmed-orders','OrderController@confrimed_order')->name('confrimed_order');
  Route::post('orders/{id}','OrderController@updateStatus')->name('updateStatus');
  Route::resource('orders','OrderController');
  Route::resource('payment-methods','PaymentMethodController');
  Route::resource('shipping-zone','ShippingZoneController');
  Route::resource('ads','AdsController');
  Route::resource('payment-methods','PaymentMethodController');
  Route::get('selling-reports','SellingReportController@selling_report')->name('selling-reports');




  // Seller Controller
  Route::post('saved-product','Seller\ProductController@store')->name('seller_product');
  Route::resource('sellers','SellerController');
  Route::get('/seller-products','AdminController@get_seller_product')->name('seller-product');
  Route::post('/customer-delete/{id}','AdminController@delete_users')->name('customer-delete');
  Route::resource('seller-profiles','Seller\ProfileController');
  Route::post('product/{id}','AdminController@updateStatus')->name('changedStatus');
  Route::get('order-view/{id}','Seller\ProductController@view_orders')->name('order-view');
  Route::get('total-orders','Seller\ProductController@show_orders')->name('seller-order');
  // Route::resource('/dashboard','Seller\SellerProductController');








 });

?>
