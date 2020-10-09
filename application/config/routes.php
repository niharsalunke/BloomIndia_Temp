<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* FRONT END PAGES *************************************************************************/
$route['default_controller'] = "welcome_public";
$route['search-donor'] = "welcome_public/search_donor";
$route['become-donor'] = "welcome_public/register_donor";
///$route['become-donor'] = "welcome_public/pledge";
///$route['register-donor'] = "welcome_public/register_donor";
$route['available'] = "welcome_public/available";
$route['seekerpopup'] = "welcome_public/seekerpopup";
$route['events'] = "welcome_public/events";
$route['offers'] = "welcome_public/offers";
$route['eventsw'] = "welcome_public/eventsw";
$route['offersw'] = "welcome_public/offersw";
$route['events_api'] = "welcome_public/events_api";
$route['offers_api'] = "welcome_public/offers_api";
$route['terms'] = "welcome_public/terms";
$route['bloom-story'] = "welcome_public/bloom_story";
$route['blog'] = "welcome_public/blog";
$route['learnmore'] = "welcome_public/learnmore";
$route['data_analytics'] = "welcome_public/data_analytics";

$route['partners'] = "welcome_public/partners";
$route['partners_api'] = "welcome_public/partners_api";

$route['updateUser'] = "welcome_public/updateUser";
$route['login'] = "welcome_public/login";
$route['profile'] = "welcome_public/profile";

// $route['update'] = "welcome_public/update";
 $route['logoutUser'] = "welcome_public/logoutUser";

// $route['fbLogin'] = "welcome_public/fbLogin";
$route['eventpage'] = "welcome_public/eventpage";
$route['refer'] = "welcome_public/refer";
$route['refertofriend'] = "welcome_public/refertofriend";

$route['partner'] ="welcome_public/partner";
$route['add_partner'] ="welcome_public/add_partner";
$route['add_testimonial'] ="welcome_public/add_testimonial";

$route['eventsw/(:num)'] = 'welcome_public/eventsw';
$route['offersw/(:num)'] = 'welcome_public/offersw';
$route['partner/(:num)'] = 'welcome_public/partner';


$route['api_getuser'] = "api_getuser/index";
$route['api_getuser2'] = "api_getuser2/index";
$route['bombay_blood_group'] = "welcome_public/bombay_blood_group";
////$route['blog3'] = "welcome_public/blog3";
$route['voluntary_blood_donation'] = "welcome_public/voluntary_blood_donation";
////$route['blog2'] = "welcome_public/blog2";
$route['biology_of_blood_groups'] = "welcome_public/biology_of_blood_groups";
////$route['blog1'] = "welcome_public/blog1";
////$route['blog4'] = "welcome_public/blog4";
$route['be_a_superhero'] = "welcome_public/be_a_superhero";

$route['user_display/(:any)'] = 'welcome_public/user_display/$1';


/* ADMIN CONSOLE *******************************************************************************/
$route['admin'] = "welcome_admin/admin";
$route['dashboard'] = "welcome_admin/dashboard";
$route['change-password'] ="welcome_admin/change_password";
$route['add-donor'] ="welcome_admin/add_donor";
$route['donor-list'] ="welcome_admin/donor_list";
$route['search-list'] ="welcome_admin/search_list";
$route['logout'] ="welcome_admin/logout";
$route['add-bloodgroup'] ="welcome_admin/add_bloodgroup";
$route['manage-bloodgroup'] ="welcome_admin/manage_bloodgroup";
$route['delete-donor/(:any)'] = "welcome_admin/delete_donor/$1";
$route['add-event'] ="welcome_admin/add_event";
$route['event-list'] ="welcome_admin/event_list";
$route['delete-event/(:any)'] = "welcome_admin/delete_event/$1";
$route['add-offer'] ="welcome_admin/add_offer";
$route['offer-list'] ="welcome_admin/offer_list";
$route['delete-offer/(:any)'] = "welcome_admin/delete_offer/$1";
$route['add-partner'] ="welcome_admin/add_partner";
$route['partner-list'] ="welcome_admin/partner_list";
$route['delete-partner/(:any)'] = "welcome_admin/delete_partner/$1";
$route['partner-status/(:any)'] = "welcome_admin/partner_status/$1";
$route['add-gallery'] ="welcome_admin/add_gallery";
$route['gallery-list'] ="welcome_admin/gallery_list";
$route['delete-gallery/(:any)'] = "welcome_admin/delete_gallery/$1";
$route['add-testimonial'] ="welcome_admin/add_testimonial";
$route['testimonial-list'] ="welcome_admin/testimonial_list";
$route['delete-testimonial/(:any)'] = "welcome_admin/delete_testimonial/$1";
$route['testimonial-status/(:any)'] = "welcome_admin/testimonial_status/$1";


/* API List *******************************************************************************/
$route['registration'] = "welcome_api/registration";
$route['search_donor'] = "welcome_api/search_donor";
$route['reach_out'] = "welcome_api/reach_out";
$route['test_api'] = "welcome_api/test_api";


$route['404_override'] = 'welcome_public/pageerror';
