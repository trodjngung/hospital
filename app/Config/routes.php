<?php
/**
  * This file is setup router links….
  * Developed by PHP language program, use Framework Cakephp.
  * Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  * Short name: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=eng 
  * Email: vietoregon.tech.com@gmail.com
  * Thanks and best regard !
  * —————————————————————————————————————
  * Đây là file dùng để cài đặt link router. 
  * Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  * Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
  * Tên ngắn giao dịch: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=vn
  * Địa chỉ Email: vietoregon.tech.com@gmail.com
  * Cám ơn quý đối tác !
  **/
Router::connect ( '/admin/staffs', array (
		'controller' => 'staffs',
		'action' => 'index' 
) );

Router::connect ( '/admin/staffs/:action', array (
		'controller' => 'staffs' 
) );

Router::connect ( '/user', array (
		'controller' => 'users',
		'action' => 'index'
) );

Router::connect ( '/user/:action/*', array (
		'controller' => 'users',
) );

Router::connect ( '/:action/*', array (
		'controller' => 'hospital' 
) );

Router::connect ( '/', array (
		'controller' => 'hospital',
		'action' => 'index',
) );
/**
 * Load all plugin routes.
 * See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes ();

/**
 * Load the CakePHP default routes.
 * Only remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';
