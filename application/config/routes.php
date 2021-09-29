<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'Frontend';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//  FRONTEND
$route['networkMap'] = 'Frontend/Frontend/networkMap';
$route['partnerUs'] = 'Frontend/Frontend/partnerUs';
$route['associateUs'] = 'Frontend/Frontend/AssociateUs';
$route['attachVehicle'] = 'Frontend/Frontend/attachVehicle';
$route['career'] = 'Frontend/Frontend/career';
$route['Career'] = 'Frontend/Home/Career';
$route['contactUs'] = 'Frontend/Frontend/contactUs';
$route['requestcall']='Frontend/Home/RequestCallBack';
$route['pickuprequest']='Frontend/Home/Peckup_Request_Form';
$route['message']='Frontend/Home/Message';
$route['associate']='Frontend/Home/AssociateUs';
$route['associateVehicle']='Frontend/Home/AssociateVehicle';
$route['drtc']='Frontend/Frontend/index';
$route['aboutUs'] = 'Frontend/Frontend/aboutUs';
$route['our_services'] = 'Frontend/Frontend/our_services';
$route['customerCare'] = 'Frontend/Frontend/customer_care';
$route['timeAndDistance'] = 'Frontend/Frontend/timeAndDistance';
$route['pickupRequest'] = 'Frontend/Frontend/pickupRequest';

//BACKEND ROUTES
$route['admin']='Backend/admin/AdminDashboard/index';
$route['login']='Backend/admin/AdminLoginController/showLoginForm';
$route['logout']='Backend/admin/AdminLogoutController/logout';
$route['Registration']='Backend/admin/AdminLoginController/index';
$route['registration']='Backend/admin/AdminLoginController/register_user';
$route['request']='Backend/admin/Home/Request';
$route['Message']='Backend/admin/Home/Message_Request';
$route['peckup']='Backend/admin/Home/Pickup_Request';
$route['AssociateUs']='Backend/admin/Home/AssociateUs';
$route['AssociateVehicle']='Backend/admin/Home/AssociateVehicle';


