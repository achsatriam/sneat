<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home');
});

Route::get('/without-menu', function () {
    return view('Layouts/WithoutMenu');
});

Route::get('/without-navbar', function () {
    return view('Layouts/WithoutNavbar');
});

Route::get('/container', function () {
    return view('Layouts/Container');
});

Route::get('/fluid', function () {
    return view('Layouts/Fluid');
});

Route::get('/blank', function () {
    return view('Layouts/Blank');
});

Route::get('/account', function () {
    return view('Pages/AccountSettings/Account');
});

Route::get('/notifications', function () {
    return view('Pages/AccountSettings/Notifications');
});

Route::get('/connections', function () {
    return view('Pages/AccountSettings/Connections');
});

Route::get('/login', function () {
    return view('Pages/Authentications/Login');
});

Route::get('/register', function () {
    return view('Pages/Authentications/Register');
});

Route::get('/forgot-password', function () {
    return view('Pages/Authentications/ForgotPassword');
});

Route::get('/error', function () {
    return view('Pages/Misc/Error');
});

Route::get('/under-maintenance', function () {
    return view('Pages/Misc/UnderMaintenance');
});

Route::get('/cards', function () {
    return view('Components/Cards');
});

Route::get('/accordion', function () {
    return view('Components/UserInterface/Accordion');
});

Route::get('/alerts', function () {
    return view('Components/UserInterface/Alerts');
});

Route::get('/badges', function () {
    return view('Components/UserInterface/Badges');
});

Route::get('/buttons', function () {
    return view('Components/UserInterface/Buttons');
});

Route::get('/carousel', function () {
    return view('Components/UserInterface/Carousel');
});

Route::get('/collapse', function () {
    return view('Components/UserInterface/Collapse');
});

Route::get('/dropdowns', function () {
    return view('Components/UserInterface/Dropdowns');
});

Route::get('/footer', function () {
    return view('Components/UserInterface/Footer');
});

Route::get('/list-groups', function () {
    return view('Components/UserInterface/ListGroups');
});

Route::get('/modals', function () {
    return view('Components/UserInterface/Modals');
});

Route::get('/navbar', function () {
    return view('Components/UserInterface/Navbar');
});

Route::get('/offcanvas', function () {
    return view('Components/UserInterface/Offcanvas');
});

Route::get('/pagination-breadcrumbs', function () {
    return view('Components/UserInterface/PaginationBreadcrumbs');
});

Route::get('/progress', function () {
    return view('Components/UserInterface/Progress');
});

Route::get('/spinners', function () {
    return view('Components/UserInterface/Spinners');
});

Route::get('/tabs-pills', function () {
    return view('Components/UserInterface/TabsPills');
});

Route::get('/toasts', function () {
    return view('Components/UserInterface/Toasts');
});

Route::get('/tooltips-popovers', function () {
    return view('Components/UserInterface/TooltipsPopovers');
});

Route::get('/typography', function () {
    return view('Components/UserInterface/Typography');
});

Route::get('/perfect-scrollbar', function () {
    return view('Components/ExtendedUI/PerfectScrollbar');
});

Route::get('/text-divider', function () {
    return view('Components/ExtendedUI/TextDivider');
});

Route::get('/boxicons', function () {
    return view('Components/Boxicons');
});

Route::get('/basic-inputs', function () {
    return view('FormsTables/FormElements/BasicInputs');
});

Route::get('/input-groups', function () {
    return view('FormsTables/FormElements/InputGroups');
});

Route::get('/vertical-form', function () {
    return view('FormsTables/FormLayouts/VerticalForm');
});

Route::get('/horizontal-form', function () {
    return view('FormsTables/FormLayouts/HorizontalForm');
});

Route::get('/tables', function () {
    return view('FormsTables/Tables');
});