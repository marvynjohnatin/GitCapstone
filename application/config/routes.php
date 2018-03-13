<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Webpage Route (Dynamic)
$route['test'] = 'portals/test';
//login of Users
$route['loginuser'] = 'logins/login';
$route['user/logout'] = 'logins/logout';
//========================================================================>
//Student Portal Routes
$route['portals/dashboard'] = 'portals/view';
$route['portals/grade'] = 'portals/viewgrades';
$route['portals/gradelist'] = 'portals/viewgradeslist';
$route['portals/enrollment'] = 'portals/viewenrollment';
$route['portals/schedule'] = 'portals/viewschedule';
$route['portals/account'] = 'portals/viewaccount';
$route['portals/paymentsuccess'] = 'portals/paymentsuccess';
$route['portals/payment'] = 'portals/viewpayment';
$route['portals/maintenance'] = 'portals/viewmaintenance';
$route['portals/addinvoicerecord'] = 'portals/addinvoicerecord';
$route['portals/details'] = 'portals/viewdetails';
$route['login'] = 'portals/login';
$route['accountsetupview'] = 'portals/accountsetupview';
$route['accountsetup'] = 'portals/accountsetup';
$route['logout'] = 'portals/logout';

//========================================================================>
//Registrar Routes
$route['registrar/studentlist'] = 'registrars/viewstudentlist';
$route['registrars/create'] = 'registrars/createstudentview';
$route['registrars/docreate'] = 'registrars/docreate';
$route['registrar/logout'] = 'registrars/logout';

//========================================================================>
//Faculty Routes
$route['faculties/login'] = 'faculties/loginfaculty';
$route['faculty/logout'] = 'faculties/logoutfaculty';
$route['faculty/dashboard'] = 'faculties/profile';
$route['faculty/subjects'] = 'faculties/subjects';
$route['faculty/maintenance'] = 'faculties/maintenance';
$route['faculty/subjectlist'] = 'faculties/subjectlist';
$route['faculty/sectionlist'] = 'faculties/sectionlist';
$route['faculty/studentlist'] = 'faculties/studentlist';

//Parent Routes
$route['parent/dashboard'] = 'parents/dashboard';
$route['parent/maintenance'] = 'parents/maintenance';
$route['parent/sample'] = 'parents/sample';
//========================================================================>

//Accounting Routes
$route['accounting/studentlist'] = 'accountings/studentlist';
$route['accounting/account'] = 'accountings/account';
$route['accounting/payment'] = 'accountings/payment';
//========================================================================>

//SystemAdmin Routes
$route['systemadmin/studentlist'] = 'systemadmins/studentlist';
$route['systemadmin/yearlist'] = 'systemadmins/yearlist';
$route['systemadmin/sectionlist'] = 'systemadmins/sectionlist';
$route['systemadmin/subjects'] = 'systemadmins/subjects';
$route['systemadmin/managefees'] = 'systemadmins/managefees';
$route['systemadmin/addfee'] = 'systemadmins/addfee';
//========================================================================>

//Admission Routes
$route['admission/addstudent'] = 'admissions/viewcreatestudent';
$route['admission/create'] = 'admissions/createstudent';
$route['admission/activatestudent'] = 'admissions/activatestudent';
$route['admission/activatestudent/activating'] = 'admissions/activating';
$route['admission/activate'] = 'admissions/activate';
$route['admission/getparentdetails'] = 'admissions/getparentdetails';
$route['admission/viewapplicant'] = 'admissions/viewapplicant';
$route['admission/viewcreateapplicant'] = 'admissions/viewcreateapplicant';
$route['admission/createapplicant'] = 'admissions/createapplicant';


$route['(:any)'] = 'webpages/view/$1';
$route['default_controller'] = 'webpages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

