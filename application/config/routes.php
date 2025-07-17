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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['frontuser'] = "home";




$route['form-filling'] = "home/formfill";
$route['form-filling/(:num)'] = "home/formfill";
$route['form-filling/(:num)/(:num)'] = "home/formfill";
$route['pg/fetchsubcategory'] = "home/fetchsubcategory";
$route['pg/fetchcommodity'] = "home/fetchcommodity";
$route['verifierpanel'] = "home/verifierpanel";
$route['verifierpanel/(:num)'] = "home/verifierpanel";
$route['approverpanel'] = "home/approverpanel";
$route['approverpanel/(:num)'] = "home/approverpanel";
$route['memberpanel'] = "home/memberpanel";
$route['memberpanel/(:num)'] = "home/memberpanel";
$route['rejectmember'] = "home/rejectmember";
$route['rejectmember/(:num)'] = "home/rejectmember";
$route['verifymember'] = "home/verifymember";
$route['verifymember/(:num)'] = "home/verifymember";
$route['approvemember'] = "home/approvemember";
$route['approvemember/(:num)'] = "home/approvemember";
$route['memberpanel/(:num)/(:num)'] = "home/memberpanel";
$route['members/memberslist/(:num)'] = "members/memberslist";

$route['admin-manager'] = "home/manageadmin";
$route['admin-manager/fetch_block'] = "home/fetch_block";
$route['admin-manager/fetchgrampachayat'] = "home/fetchgrampachayat";
$route['admin-manager/fetchvillage'] = "home/fetchvillage";
$route['admin-manager/fetchproducergroup'] = "home/fetchproducergroup";

$route['pgreview/(:num)'] = "home/pgreview";
$route['reviewmember/(:num)'] = "members/reviewmember";
$route['upload-data'] = "home/uploadrecords";
$route['buyer-details'] = "home/buyersdetails";
$route['buyerdetails-list'] = "home/buyersdetails_list";
$route['members/memberslist/delete/(:num)']="home/memberdelete";
/*** certificate ***/
$route['certificate/(:num)'] = "certificate";
$route['zwemschool'] = "certificate";
$route['certificate/add']="certificate/add";
$route['organization/(:num)'] = "organization";
$route['organization/add']="organization/add";


/*** tcbp ***/
$route['tcbp/(:num)'] = "tcbp";
$route['tcbp'] = "tcbp";
$route['tcbp/add']="tcbp/add";
$route['verifier-manager'] = "tcbp/verifierlist";
$route['approval-manager'] = "tcbp/approverlist";
$route['tcbp/rejectdoc'] = "tcbp/rejectdoc";
$route['tcbp/rejectdoc/(:num)'] = "tcbp/rejectdoc";
$route['tcbp/verifydoc'] = "tcbp/verifydoc";
$route['tcbp/verifydoc/(:num)'] = "tcbp/verifydoc";
$route['tcbp/approvedoc'] = "tcbp/approvedoc";
$route['tcbp/approvedoc/(:num)'] = "tcbp/approvedoc";


/*** task-list ***/
$route['task-list'] = "tcbp";
$route['task-list/(:num)'] = "tcbp";
$route['task-list/add']="tcbp/add";
$route['task-list/deletedoc']="tcbp/deletedoc";
$route['task-list/deletedoc/(:num)']="tcbp/deletedoc";

/*** task-manager ***/
$route['task-manager/(:num)'] = "tcbp/taskmanager";
$route['task-manager'] = "tcbp/taskmanager";
$route['task-manager/add']="tcbp/add";

/*** state-list ***/
$route['state-list/(:num)'] = "tcbp/statelist";
$route['state-list'] = "tcbp/statelist";
$route['state-list/add']="tcbp/statelistadd";

/*** users ***/
$route['user-profile/(:any)'] = "user/userprofile";
$route['user-profile'] = "user/userprofile";
$route['change-password'] = "user/changepassword";
$route['register'] = "user/register";
$route['users-list'] = "user";

/*** Block list */
$route['get-dist-blocks'] = "User/getdistblocks";

/** New Sidebar  */
$route['overview'] = "AdminDashboard/overview";
$route['pg-profile'] = "AdminDashboard/pgprofile";
$route['pg-profile/(:num)'] = "AdminDashboard/pgprofile";
$route['pg-profile/(:num)/(:num)'] = "AdminDashboard/pgprofile";
$route['training'] = "AdminDashboard/training";
$route['training/(:num)'] = "AdminDashboard/training";
$route['training/(:num)/(:num)'] = "AdminDashboard/training";
$route['business-plan'] = "AdminDashboard/businessplan";
$route['fund-disbursement'] = "AdminDashboard/funddisbursement";
$route['monthly-business-summary'] = "AdminDashboard/monthly_business_summary";
$route['monthly-business-summary/(:num)'] = "AdminDashboard/monthly_business_summary";
$route['monthly-business-summary/(:num)/(:num)'] = "AdminDashboard/monthly_business_summary";
$route['member-transaction/get-members-by-id'] = "AdminDashboard/get_members_by_pgid";
$route['member-transaction'] = "AdminDashboard/member_transaction";
$route['member-transaction/(:num)'] = "AdminDashboard/member_transaction";
$route['member-transaction/(:num)/(:num)'] = "AdminDashboard/member_transaction";
$route['buyers-details'] = "AdminDashboard/buyers_details";
$route['reports'] = "Report/reports";
$route['reports/(:num)'] = "Report/reports";
$route['reports/(:num)/(:num)'] = "Report/reports";

