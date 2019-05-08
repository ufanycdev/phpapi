<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
#$route['news/(:any)'] = 'news/view/$1';
#

#let resources = { articles: 1, "65-2s": 2, classifieds: 3, events: 4, "5-5-5-5s": 5, videos: 6, "info-faxes": 7, "historical-fires": 8}


$route['contents/(:any)'] = 'contents/view/$1';
$route['contents'] = 'contents';
$route['articles/index/(:any)'] = 'contents/catyear/1/$1';
$route['search/(:any)'] = 'contents/search/$1';
$route['65-2/index/(:any)'] = 'contents/catyear/2/$1';
$route['classifieds/index/(:any)'] = 'contents/catyear/3/$1';
$route['events/index/(:any)'] = 'contents/catyear/4/$1';
$route['5-5-5-5s/index/(:any)'] = 'contents/catyear/5/$1';
$route['videos/index/(:any)'] = 'contents/catyear/6/$1';
$route['info-faxes/index/(:any)'] = 'contents/catyear/7/$1';
$route['historical-fires/(:any)'] = 'contents/catyear/8/$1';
$route['sources'] = 'sources';
$route['calendar/(:any)/(:any)'] = 'contents/monthly_events/$1/$2';
