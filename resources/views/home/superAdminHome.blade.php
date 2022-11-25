@extends('layouts.adminLayout')

@section('title')

@endsection

@section('nanbar')
    <x-nanbar></x-nanbar>
@endsection

@section('main')
    <aside class="sidebar mCustomScrollbar _mCS_1 mCS-autoHide" style="overflow: visible;">
        <div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: none;"
             tabindex="0">
            <div id="mCSB_1_container" class="mCSB_container" style="position: relative; left: 0px; top: -63px;"
                 dir="ltr">
                <div class="sidebar__menu-group">
                    <ul class="sidebar_nav">
                        <li class="menu-title">
                            <span>Main menu </span>
                        </li>
                        <li class="has-child open">
                            <a href="#" class="active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-home nav-icon">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span class="menu-text">Dashboard</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="">
                                <li>
                                    <a class="active"
                                       href="https://strikingdash-laravel.masudr.com/dashboards/social-media">Social
                                        Media</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/dashboards/business">FineTech
                                        / Business</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/dashboards/performance">Site
                                        Performance</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/dashboards/ecommerce">Ecommerce</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/dashboards/crm">CRM <span
                                                class="badge badge-success menuItem">New</span></a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/dashboards/sales">Sales
                                        Performance <span class="badge badge-success menuItem">New</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-layout nav-icon">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="3" y1="9" x2="21" y2="9"></line>
                                    <line x1="9" y1="21" x2="9" y2="9"></line>
                                </svg>
                                <span class="menu-text">Layouts </span>
                                <span class="toggle-icon"></span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                            <ul class="subMenu" style="display: none;">
                                <li class="l_sidebar">
                                    <a href="#" data-layout="light">Light Mode</a>
                                </li>
                                <li class="l_sidebar">
                                    <a href="#" data-layout="dark">Dark Mode</a>
                                </li>
                                <li class="l_navbar">
                                    <a href="#" data-layout="top">Top Menu</a>
                                </li>
                                <li class="l_navbar">
                                    <a href="#" data-layout="side">Side Menu</a>
                                </li>
                                <li class="layout">
                                    <a href="https://strikingdash-laravel.masudr.com/setlayout/rtl">RTL</a>
                                </li>
                                <li class="layout">
                                    <a href="https://strikingdash-laravel.masudr.com/setlayout/ltr">LTR</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/pages/changelog" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-activity nav-icon">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                                <span class="menu-text">Changelog</span>
                                <span class="badge badge-primary menuItem">1.3.0</span>
                            </a>
                        </li>
                        <li class="menu-title m-top-30">
                            <span>Applications </span>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-mail nav-icon">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span class="menu-text">Email</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/applications/email/inbox">Inbox</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/applications/email/read-email">Read
                                        Email</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/applications/chat" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-message-square nav-icon">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <span class="menu-text">Chat</span>
                            </a>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-shopping-cart nav-icon">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <span class="menu-text">eCommerce</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/applications/ecommerce/products "
                                       class="">Products</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/applications/ecommerce/product-details"
                                       class="">Product
                                        Details</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/applications/ecommerce/add-product"
                                       class="">Product Add</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/applications/ecommerce/edit-product"
                                       class="">Product
                                        Edit</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/applications/ecommerce/cart"
                                       class="">Cart</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/applications/ecommerce/orders"
                                       class="">Orders</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/applications/ecommerce/sellers"
                                       class="">Sellers</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/applications/ecommerce/invoice"
                                       class="">Invoices</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-user nav-icon">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="menu-text">Social App  </span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/applications/social-app/profile"
                                       class="">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-timeline"
                                       href="https://strikingdash-laravel.masudr.com/applications/social-app/profile#timeline">Timeline</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-activity"
                                       href="https://strikingdash-laravel.masudr.com/applications/social-app/profile#activity">Activity</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-layout nav-icon">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="3" y1="9" x2="21" y2="9"></line>
                                    <line x1="9" y1="21" x2="9" y2="9"></line>
                                </svg>
                                <span class="menu-text">Project</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/projects/index">Project
                                        Grid</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/projects/project_table">Project
                                        List</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/projects/create">Create
                                        Project</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/projects/details">Project
                                        Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/applications/calendar" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-calendar nav-icon">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="menu-text">Calendar</span>
                            </a>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-users nav-icon">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span class="menu-text">Users</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/applications/users/team">Team</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/applications/users/users-grid">Users
                                        Grid <span class="badge badge-success menuItem">New</span></a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/applications/users/users-list">Users
                                        List</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/applications/users/users">Users
                                        Grid Style</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/applications/users/users-group">Users
                                        Group</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/applications/users/add-users">Add
                                        User <span class="badge badge-success menuItem">New</span></a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/applications/users/users-datatable">Users
                                        Table</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-user-check nav-icon">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <polyline points="17 11 19 13 23 9"></polyline>
                                </svg>
                                <span class="menu-text">Contact</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/applications/contact/grid">Contact
                                        Grid</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/applications/contact/list">Contact
                                        List</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/applications/contact/contact-create">Contact
                                        Create <span class="badge badge-success menuItem">New</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/applications/note" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-bookmark nav-icon">
                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <span class="menu-text">Note</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/applications/todo" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-activity nav-icon">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                                <span class="menu-text">To-Do</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/pages/kanban-board" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-columns nav-icon">
                                    <path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path>
                                </svg>
                                <span class="menu-text">Kanban Board</span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-repeat nav-icon">
                                    <polyline points="17 1 21 5 17 9"></polyline>
                                    <path d="M3 11V9a4 4 0 0 1 4-4h14"></path>
                                    <polyline points="7 23 3 19 7 15"></polyline>
                                    <path d="M21 13v2a4 4 0 0 1-4 4H3"></path>
                                </svg>
                                <span class="menu-text">Import &amp; Export</span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/applications/import-export/import">Import</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/applications/import-export/export">Export</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/applications/import-export/export/selected">Export
                                        Selected</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/pages/file-manager" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-file nav-icon">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span class="menu-text">File Manager</span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/pages/task" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-clipboard nav-icon">
                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                </svg>
                                <span class="menu-text">Task App</span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/pages/bookmarks" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-bookmark nav-icon">
                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <span class="menu-text">Bookmarks<span
                                            class="badge badge-success menuItem">New</span></span>
                            </a>
                        </li>
                        <li class="menu-title m-top-30">
                            <span>CRUD</span>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-repeat nav-icon">
                                    <polyline points="17 1 21 5 17 9"></polyline>
                                    <path d="M3 11V9a4 4 0 0 1 4-4h14"></path>
                                    <polyline points="7 23 3 19 7 15"></polyline>
                                    <path d="M21 13v2a4 4 0 0 1-4 4H3"></path>
                                </svg>
                                <span class="menu-text">Laravel Crud</span>
                                <span class="toggle-icon"></span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/firestore/view-all">View
                                        All</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/firestore/add-new">Add
                                        New</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-users nav-icon">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span class="menu-text">Customer Crud</span>
                                <span class="toggle-icon"></span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/customer/list">Customer
                                        List</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/customer/new">Add New</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title m-top-30">
                            <span>Features</span>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-layers nav-icon">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                <span class="menu-text">UI Elements</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/alert">Alert</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/avatar">Avatar</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/badge">Badge</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/breadcrumbs">Breadcrumb</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/buttons">Button</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/cards">Cards</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/carousel">Carousel</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/checkbox">Checkbox</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/collapse">Collapse</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/comments">Comments</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/dashboard-base">Dashboard
                                        Base</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/date-picker">DatePicker</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/drag-drop">Drag
                                        &amp; Drop</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/drawer">Drawer</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/dropdown">Dropdown</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/empty">Empty</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/grid">Grid
                                        <span class="badge badge-success menuItem">New</span></a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/input">Input</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/list">List</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/menu">Menu</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/message">Message</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/modal">Modals</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/notifications">Notification</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/page-header">Page
                                        Headers</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/pagination">Paginations</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/progressbar">Progress</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/radio">Radio</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/rate">Rate</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/result">Result</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/select">Select</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/skeleton">Skeleton</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/slider">Slider</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/spin">Spinner</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/statistics">Statistic</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/steps">Steps</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/switch">Switch</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/tab">Tabs</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/tag">Tags</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/timeline">Timeline</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/timeline2">Timeline2</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/timeline3">Timeline3</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/components/time-picker">Timepicker</a>
                                </li>
                                <li>
                                    <a class=""
                                       href="https://strikingdash-laravel.masudr.com/components/uploads">Upload</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-bar-chart-2 nav-icon">
                                    <line x1="18" y1="20" x2="18" y2="10"></line>
                                    <line x1="12" y1="20" x2="12" y2="4"></line>
                                    <line x1="6" y1="20" x2="6" y2="14"></line>
                                </svg>
                                <span class="menu-text">Charts</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/charts/chart">Chart
                                        JS</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/charts/google-chart">Google
                                        Charts</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/charts/peity-chart">Peity
                                        Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-disc nav-icon">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                                <span class="menu-text">Froms</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/forms/basic">Basic</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/forms/layouts">Layouts
                                        <span class="badge badge-success menuItem">New</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/forms/elements">Elements
                                        <span class="badge badge-success menuItem">New</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/forms/components">Components
                                        <span class="badge badge-success menuItem">New</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/forms/validations">Validations
                                        <span class="badge badge-success menuItem">New</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-cpu nav-icon">
                                    <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                    <rect x="9" y="9" width="6" height="6"></rect>
                                    <line x1="9" y1="1" x2="9" y2="4"></line>
                                    <line x1="15" y1="1" x2="15" y2="4"></line>
                                    <line x1="9" y1="20" x2="9" y2="23"></line>
                                    <line x1="15" y1="20" x2="15" y2="23"></line>
                                    <line x1="20" y1="9" x2="23" y2="9"></line>
                                    <line x1="20" y1="14" x2="23" y2="14"></line>
                                    <line x1="1" y1="9" x2="4" y2="9"></line>
                                    <line x1="1" y1="14" x2="4" y2="14"></line>
                                </svg>
                                <span class="menu-text">Table</span>
                                <span class="badge badge-success menuItem">New</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/pages/table/basic-table" class="">Basic
                                        Table
                                    </a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/pages/table/data-table" class="">Data
                                        Table</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/pages/table/ajax-data-table"
                                       class="">Ajax Data Table</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-server nav-icon">
                                    <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                    <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                    <line x1="6" y1="6" x2="6.01" y2="6"></line>
                                    <line x1="6" y1="18" x2="6.01" y2="18"></line>
                                </svg>
                                <span class="menu-text">Widget</span>
                                <span class="badge badge-success menuItem">New</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/widget/charts" class="">Widget
                                        Charts</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/widget/mixed" class="">Widget
                                        Mixed</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/widget/card" class="">Widget
                                        Card</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-square nav-icon">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                </svg>
                                <span class="menu-text">Wizards</span>
                                <span class="badge badge-success menuItem">New</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/wizard/wizard-one" class="">Wizard
                                        1</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/wizard/wizard-two" class="">Wizard
                                        2</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/wizard/wizard-three" class="">Wizard
                                        3</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/wizard/wizard-four" class="">Wizard
                                        4</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/wizard/wizard-five" class="">Wizard
                                        5</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-grid nav-icon">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                                <span class="menu-text">Icons</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/icons/father-icons" class="">Feather
                                        icons (svg)</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/icons/font-awesome" class="">Font
                                        Awesome</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/icons/line-awesome" class="">Line
                                        Awesome</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-map nav-icon">
                                    <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                    <line x1="8" y1="2" x2="8" y2="18"></line>
                                    <line x1="16" y1="6" x2="16" y2="22"></line>
                                </svg>
                                <span class="menu-text">Maps</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/maps/google-map" class="">Google
                                        Maps</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/maps/leaflet-map" class="">Leaflet
                                        Maps</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/maps/vector-map" class="">Vector
                                        Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title m-top-30">
                            <span>PAGES </span>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/pages/profile-setting" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-settings nav-icon">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                </svg>
                                <span class="menu-text">Settings</span>
                            </a>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-image nav-icon">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                    <polyline points="21 15 16 10 5 21"></polyline>
                                </svg>
                                <span class="menu-text">Gallery</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/pages/gallery">Gallery</a>
                                </li>
                                <li>
                                    <a class="" href="https://strikingdash-laravel.masudr.com/pages/gallery2">Gallery 2
                                        <span class="badge badge-success menuItem">New</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/pages/pricing" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-dollar-sign nav-icon">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                                <span class="menu-text">Pricing</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/pages/banner" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-cast nav-icon">
                                    <path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path>
                                    <line x1="2" y1="20" x2="2.01" y2="20"></line>
                                </svg>
                                <span class="menu-text">Banners</span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/pages/testimonial" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-book-open nav-icon">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                </svg>
                                <span class="menu-text">Testimonial</span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/pages/faq" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-help-circle nav-icon">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                </svg>
                                <span class="menu-text">FAQ's</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/pages/search" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-search nav-icon">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                                <span class="menu-text">Search Results</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/pages/blank-page" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-octagon nav-icon">
                                    <polygon
                                            points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                </svg>
                                <span class="menu-text">Blank Page</span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                        </li>
                        <li class="has-child ">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-book nav-icon">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                </svg>
                                <span class="menu-text">Knowledge Base</span>
                                <span class="toggle-icon"></span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                            <ul style="display: none;">
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/pages/knowledgebase/base" class="">Knowledge
                                        Base</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/pages/knowledgebase/all-article"
                                       class="">All Article</a>
                                </li>
                                <li>
                                    <a href="https://strikingdash-laravel.masudr.com/pages/knowledgebase/singale-article"
                                       class="">Singale Article</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/pages/support" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-headphones nav-icon">
                                    <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                    <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                                </svg>
                                <span class="menu-text">Support Center</span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/maintenance">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-airplay nav-icon">
                                    <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                </svg>
                                <span class="menu-text">Maintenance</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/404">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-info nav-icon">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg>
                                <span class="menu-text">404</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://strikingdash-laravel.masudr.com/pages/coming-soon" class="" "="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-clock nav-icon">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span class="menu-text">Coming Soon</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mCSB_1_scrollbar_vertical"
             class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical"
             style="display: block;">
            <div class="mCSB_draggerContainer">
                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                     style="position: absolute; min-height: 50px; display: block; height: 47px; max-height: 308px; top: 9px;">
                    <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                    <div class="mCSB_draggerRail"></div>
                </div>
            </div>
        </div>
    </aside>
    <div class="contents">
        <div class="container-fluid">
            <div class="social-dash-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Social Media Dashboard</h4>
                            <div class="breadcrumb-action justify-content-center flex-wrap">
                                <div class="action-btn">
                                    <div class="form-group mb-0">
                                        <div class="input-container icon-left position-relative">
                              <span class="input-icon icon-left">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                   fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                   stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18"
                                                                                                  height="18" rx="2"
                                                                                                  ry="2"></rect><line
                                          x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line
                                          x1="3" y1="10" x2="21" y2="10"></line></svg>
                              </span>
                                            <input type="text" class="form-control form-control-default date-ranger"
                                                   name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                                            <span class="input-icon icon-right">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                   fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                   stroke-linejoin="round" class="feather feather-chevron-down"><polyline
                                          points="6 9 12 15 18 9"></polyline></svg>
                              </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown action-btn">
                                    <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button"
                                            id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        <i class="la la-download"></i> Export
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <span class="dropdown-item">Export With</span>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-print"></i> Printer</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-file-pdf"></i> PDF</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-file-text"></i> Google Sheets</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-file-excel"></i> Excel (XLSX)</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-file-csv"></i> CSV</a>
                                    </div>
                                </div>
                                <div class="dropdown action-btn">
                                    <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button"
                                            id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        <i class="la la-share"></i> Share
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                        <span class="dropdown-item">Share Link</span>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-facebook"></i> Facebook</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-twitter"></i> Twitter</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-google"></i> Google</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-feed"></i> Feed</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-instagram"></i> Instagram</a>
                                    </div>
                                </div>
                                <div class="action-btn">
                                    <a href="" class="btn btn-sm btn-primary btn-add">
                                        <i class="la la-plus"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-25">
                        <div class="social-overview-wrap">
                            <div class="card border-0">
                                <div class="card-header">
                                    <h6>Social Media Overview</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="social-overview">
                                        <li>
                                            <div class="social-box bg-facebook">
                                                <span class="la la-facebook"></span>
                                            </div>
                                            <h3>5,461</h3>
                                            <p>Likes</p>
                                        </li>
                                        <li>
                                            <div class="social-box bg-twitter">
                                                <span class="la la-twitter"></span>
                                            </div>
                                            <h3>5,461</h3>
                                            <p>Followers</p>
                                        </li>
                                        <li>
                                            <div class="social-box gradientInstragram">
                                                <span class="la la-instagram"></span>
                                            </div>
                                            <h3>5,461</h3>
                                            <p>Followers</p>
                                        </li>
                                        <li>
                                            <div class="social-box bg-youtube">
                                                <span class="la la-youtube"></span>
                                            </div>
                                            <h3>5,461</h3>
                                            <p>Subscribers</p>
                                        </li>
                                        <li>
                                            <div class="social-box bg-pinterest">
                                                <span class="la la-pinterest"></span>
                                            </div>
                                            <h3>5,461</h3>
                                            <p>Followers</p>
                                        </li>
                                        <li>
                                            <div class="social-box bg-linkedin">
                                                <span class="la la-linkedin"></span>
                                            </div>
                                            <h3>5,461</h3>
                                            <p>Followers</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-25">
                        <div class="card card-overview border-0">
                            <div class="card-header">
                                <h6>Facebook Overview</h6>
                                <div class="card-extra">
                                    <div class="card-tab btn-group nav nav-tabs">
                                        <a class="btn btn-xs btn-white active border-light" id="f_today-tab"
                                           data-toggle="tab" href="#f_overview-today" role="tab"
                                           area-controls="f_overview" aria-selected="true">Today</a>
                                        <a class="btn btn-xs btn-white border-light" id="f_week-tab" data-toggle="tab"
                                           href="#f_overview-week" role="tab" area-controls="f_overview"
                                           aria-selected="false">Week</a>
                                        <a class="btn btn-xs btn-white border-light" id="f_month-tab" data-toggle="tab"
                                           href="#f_overview-month" role="tab" area-controls="f_overview"
                                           aria-selected="false">Month</a>
                                        <a class="btn btn-xs btn-white border-light" id="f_year-tab" data-toggle="tab"
                                           href="#f_overview-year" role="tab" area-controls="f_overview"
                                           aria-selected="false">Year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 pb-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="f_overview-today" role=""
                                         aria-labelledby="f_overview-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-overview__left">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>25,845</h1>
                                                                    <p>Engaged Users</p>
                                                                    <div>
                                                    <span class="color-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round"
                                                                                     class="feather feather-trending-up"><polyline
                                                                    points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                                                    points="17 6 23 6 23 12"></polyline></svg>
                                                        <strong>25%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <div class="chartjs-size-monitor">
                                                                                <div class="chartjs-size-monitor-expand">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                                <div class="chartjs-size-monitor-shrink">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="chartjs-size-monitor">
                                                                                <div class="chartjs-size-monitor-expand">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                                <div class="chartjs-size-monitor-shrink">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                            </div>
                                                                            <canvas id="lineChartOne" height="115"
                                                                                    style="display: block; width: 133px; height: 115px;"
                                                                                    width="133"
                                                                                    class="chartjs-render-monitor"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>2,534</h1>
                                                                    <p>Page Impressions</p>
                                                                    <div>
                                                    <span class="color-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round"
                                                                                     class="feather feather-trending-up"><polyline
                                                                    points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                                                    points="17 6 23 6 23 12"></polyline></svg>
                                                        <strong>40%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <div class="chartjs-size-monitor">
                                                                                <div class="chartjs-size-monitor-expand">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                                <div class="chartjs-size-monitor-shrink">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="chartjs-size-monitor">
                                                                                <div class="chartjs-size-monitor-expand">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                                <div class="chartjs-size-monitor-shrink">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                            </div>
                                                                            <canvas id="lineChartTwo" height="115"
                                                                                    style="display: block; width: 122px; height: 115px;"
                                                                                    width="122"
                                                                                    class="chartjs-render-monitor"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-overview__right">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>2,142</h1>
                                                                    <p>Total Page Likes</p>
                                                                    <div>
                                                    <span class="color-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-trending-down"><polyline
                                                                    points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline
                                                                    points="17 18 23 18 23 12"></polyline></svg>
                                                        <strong>15%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <div class="chartjs-size-monitor">
                                                                                <div class="chartjs-size-monitor-expand">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                                <div class="chartjs-size-monitor-shrink">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="chartjs-size-monitor">
                                                                                <div class="chartjs-size-monitor-expand">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                                <div class="chartjs-size-monitor-shrink">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                            </div>
                                                                            <canvas id="lineChartThree" height="115"
                                                                                    style="display: block; width: 119px; height: 115px;"
                                                                                    width="119"
                                                                                    class="chartjs-render-monitor"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>1,132</h1>
                                                                    <p>New Page LIke</p>
                                                                    <div>
                                                    <span class="color-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round"
                                                                                     class="feather feather-trending-up"><polyline
                                                                    points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                                                    points="17 6 23 6 23 12"></polyline></svg>
                                                        <strong>13%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <div class="chartjs-size-monitor">
                                                                                <div class="chartjs-size-monitor-expand">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                                <div class="chartjs-size-monitor-shrink">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="chartjs-size-monitor">
                                                                                <div class="chartjs-size-monitor-expand">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                                <div class="chartjs-size-monitor-shrink">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                            </div>
                                                                            <canvas id="lineChartFour" height="115"
                                                                                    style="display: block; width: 134px; height: 115px;"
                                                                                    width="134"
                                                                                    class="chartjs-render-monitor"></canvas>
                                                                        </div>
                                                                        <div class="chartjs-tooltip top center"
                                                                             style="opacity: 0; left: 35.3333px; top: 179.385px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; padding: 6px;">
                                                                            <table>
                                                                                <thead></thead>
                                                                                <div class="tooltip-title">4</div>
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <span class="chartjs-tooltip-key"
                                                                                              style="background:#FA8B0C; border-color:transparent; border-width: 2px; border-radius: 30px"></span>Label:
                                                                                        150
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="f_overview-week" role=""
                                         aria-labelledby="f_overview-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-overview__left">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>26,845</h1>
                                                                    <p>Engaged Users</p>
                                                                    <div>
                                                    <span class="color-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round"
                                                                                     class="feather feather-trending-up"><polyline
                                                                    points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                                                    points="17 6 23 6 23 12"></polyline></svg>
                                                        <strong>25%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <canvas id="lineChartFive"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>3,534</h1>
                                                                    <p>Page Impressions</p>
                                                                    <div>
                                                    <span class="color-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round"
                                                                                     class="feather feather-trending-up"><polyline
                                                                    points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                                                    points="17 6 23 6 23 12"></polyline></svg>
                                                        <strong>26%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <canvas id="lineChartSix"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-overview__right">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>9,142</h1>
                                                                    <p>3,142</p>
                                                                    <div>
                                                    <span class="color-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-trending-down"><polyline
                                                                    points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline
                                                                    points="17 18 23 18 23 12"></polyline></svg>
                                                        <strong>23%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <canvas id="lineChartSeven"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>2,132</h1>
                                                                    <p>New Page LIke</p>
                                                                    <div>
                                                    <span class="color-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round"
                                                                                     class="feather feather-trending-up"><polyline
                                                                    points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                                                    points="17 6 23 6 23 12"></polyline></svg>
                                                        <strong>44%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <canvas id="lineChartEight"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="f_overview-month" role=""
                                         aria-labelledby="f_overview-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-overview__left">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>28,845</h1>
                                                                    <p>Engaged Users</p>
                                                                    <div>
                                                    <span class="color-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round"
                                                                                     class="feather feather-trending-up"><polyline
                                                                    points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                                                    points="17 6 23 6 23 12"></polyline></svg>
                                                        <strong>25%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <canvas id="lineChartNine"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>8,534</h1>
                                                                    <p>Page Impressions</p>
                                                                    <div>
                                                    <span class="color-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round"
                                                                                     class="feather feather-trending-up"><polyline
                                                                    points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                                                    points="17 6 23 6 23 12"></polyline></svg>
                                                        <strong>36%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <canvas id="lineChartTen"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-overview__right">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>9,142</h1>
                                                                    <p>Total Page Likes</p>
                                                                    <div>
                                                    <span class="color-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-trending-down"><polyline
                                                                    points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline
                                                                    points="17 18 23 18 23 12"></polyline></svg>
                                                        <strong>13%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <canvas id="lineChartEleven"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>5,132</h1>
                                                                    <p>New Page LIke</p>
                                                                    <div>
                                                    <span class="color-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round"
                                                                                     class="feather feather-trending-up"><polyline
                                                                    points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                                                    points="17 6 23 6 23 12"></polyline></svg>
                                                        <strong>14%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <canvas id="lineChartTwelve"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="f_overview-year" role=""
                                         aria-labelledby="f_overview-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-overview__left">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>24,845</h1>
                                                                    <p>Engaged Users</p>
                                                                    <div>
                                                    <span class="color-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round"
                                                                                     class="feather feather-trending-up"><polyline
                                                                    points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                                                    points="17 6 23 6 23 12"></polyline></svg>
                                                        <strong>25%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <canvas id="lineChartThirteen"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>5,534</h1>
                                                                    <p>Page Impressions</p>
                                                                    <div>
                                                    <span class="color-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round"
                                                                                     class="feather feather-trending-up"><polyline
                                                                    points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                                                    points="17 6 23 6 23 12"></polyline></svg>
                                                        <strong>36%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <canvas id="lineChartFourteen"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-overview__right">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>6,142</h1>
                                                                    <p>Total Page Likes</p>
                                                                    <div>
                                                    <span class="color-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-trending-down"><polyline
                                                                    points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline
                                                                    points="17 18 23 18 23 12"></polyline></svg>
                                                        <strong>13%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <canvas id="lineChartFifteen"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                            <div class="overview-single">
                                                                <div class="overview-content">
                                                                    <h1>3,132</h1>
                                                                    <p>New Page LIke</p>
                                                                    <div>
                                                    <span class="color-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     stroke="currentColor"
                                                                                     stroke-width="2"
                                                                                     stroke-linecap="round"
                                                                                     stroke-linejoin="round"
                                                                                     class="feather feather-trending-up"><polyline
                                                                    points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                                                    points="17 6 23 6 23 12"></polyline></svg>
                                                        <strong>14%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>
                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">
                                                                        <div>
                                                                            <canvas id="lineChartSixteen"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .row -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-md-6 mb-25">
                        <div class="card border-0">
                            <div class="card-header">
                                <h6>Youtube Subscribers</h6>
                                <div class="card-extra">
                                    <ul class="card-tab-links nav-tabs nav">
                                        <li>
                                            <a href="#y_subscriber-week" class="active" data-toggle="tab"
                                               id="ys_week-tab" role="tab" area-controls="y_subscriber"
                                               aria-selected="true">Week</a>
                                        </li>
                                        <li>
                                            <a href="#y_subscriber-month" data-toggle="tab" id="ys_month-tab" role="tab"
                                               area-controls="y_subscriber" aria-selected="false">Month</a>
                                        </li>
                                        <li>
                                            <a href="#y_subscriber-year" id="ys_year-tab" data-toggle="tab" role="tab"
                                               area-controls="y_subscriber" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="y_subscriber-week" role="tabpanel"
                                         aria-labelledby="y_subscriber-week">
                                        <div class="card-chart-bar d-flex justify-content-between">
                                            <div class="card-bar-top">
                                                <p>Subscribers</p>
                                                <h3 class="card-bar-info d-flex align-items-end">25,472
                                                    <sub class="color-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-arrow-up">
                                                            <line x1="12" y1="19" x2="12" y2="5"></line>
                                                            <polyline points="5 12 12 5 19 12"></polyline>
                                                        </svg>
                                                        25%</sub>
                                                </h3>
                                            </div>
                                            <ul class="legend-static">
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(95, 99, 242);"></span>Gained
                                                </li>
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(255, 77, 79);"></span>Lost
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-chart">
                                            <div class="parentContainer">
                                                <div>
                                                    <div class="chartjs-size-monitor">
                                                        <div class="chartjs-size-monitor-expand">
                                                            <div class=""></div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink">
                                                            <div class=""></div>
                                                        </div>
                                                    </div>
                                                    <canvas id="ys_barChartOne" height="256"
                                                            style="display: block; width: 440px; height: 256px;"
                                                            width="440" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="y_subscriber-month" role="tabpanel"
                                         aria-labelledby="y_subscriber-week">
                                        <div class="card-chart-bar d-flex justify-content-between">
                                            <div class="card-bar-top">
                                                <p>Subscribers</p>
                                                <h3 class="card-bar-info d-flex align-items-end">75,582
                                                    <sub class="color-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-arrow-up">
                                                            <line x1="12" y1="19" x2="12" y2="5"></line>
                                                            <polyline points="5 12 12 5 19 12"></polyline>
                                                        </svg>
                                                        45%</sub>
                                                </h3>
                                            </div>
                                            <ul class="legend-static">
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(95, 99, 242);"></span>Gained
                                                </li>
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(255, 77, 79);"></span>Lost
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-chart">
                                            <div class="parentContainer">
                                                <div>
                                                    <canvas id="ys_barChartTwo"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="y_subscriber-year" role="tabpanel"
                                         aria-labelledby="y_subscriber-week">
                                        <div class="card-chart-bar d-flex justify-content-between">
                                            <div class="card-bar-top">
                                                <p>Subscribers</p>
                                                <h3 class="card-bar-info d-flex align-items-end">124,892
                                                    <sub class="color-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-arrow-up">
                                                            <line x1="12" y1="19" x2="12" y2="5"></line>
                                                            <polyline points="5 12 12 5 19 12"></polyline>
                                                        </svg>
                                                        65%</sub>
                                                </h3>
                                            </div>
                                            <ul class="legend-static">
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(95, 99, 242);"></span>Gained
                                                </li>
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(255, 77, 79);"></span>Lost
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-chart">
                                            <div class="parentContainer">
                                                <div>
                                                    <canvas id="ys_barChartThree"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-md-6 mb-25">
                        <div class="card border-0">
                            <div class="card-header">
                                <h6>Twitter Overview</h6>
                                <div class="card-extra">
                                    <ul class="card-tab-links nav-tabs nav">
                                        <li>
                                            <a class="active" href="#to_week" data-toggle="tab" id="to_week-tab"
                                               role="tab" area-controls="to_week" aria-selected="true">Week</a>
                                        </li>
                                        <li>
                                            <a href="#to_month" data-toggle="tab" id="to_month-tab" role="tab"
                                               area-controls="to_month" aria-selected="false">Month</a>
                                        </li>
                                        <li>
                                            <a href="#to_year" data-toggle="tab" id="to_year-tab" role="tab"
                                               area-controls="to_year" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body linechart-overview-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="to_week" role="tabpanel"
                                         aria-labelledby="to_week-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweets</span>
                                                <p class="m-0">
                                                    <strong>472</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharpOne" height="55"
                                                                style="display: block; width: 440px; height: 55px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweet Impressions</span>
                                                <p class="m-0">
                                                    <strong>2K</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharpTwo" height="55"
                                                                style="display: block; width: 440px; height: 55px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>178</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharpThree" height="55"
                                                                style="display: block; width: 440px; height: 55px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>4.8</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharpFour" height="55"
                                                                style="display: block; width: 440px; height: 55px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Retweets</span>
                                                <p class="m-0">
                                                    <strong>78</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharpFive" height="55"
                                                                style="display: block; width: 440px; height: 55px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="to_month" role="tabpanel"
                                         aria-labelledby="to_month-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweets</span>
                                                <p class="m-0">
                                                    <strong>2472</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpOneM"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweet Impressions</span>
                                                <p class="m-0">
                                                    <strong>8K</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpTwoM"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>778</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpThreeM"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>3.8</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpFourM"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Retweets</span>
                                                <p class="m-0">
                                                    <strong>278</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpFiveM"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="to_year" role="tabpanel"
                                         aria-labelledby="to_year-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweets</span>
                                                <p class="m-0">
                                                    <strong>2472</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpOneY"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweet Impressions</span>
                                                <p class="m-0">
                                                    <strong>78K</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpTwoY"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>5778</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpThreeY"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>4.8</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpFourY"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Retweets</span>
                                                <p class="m-0">
                                                    <strong>2078</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpFiveY"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ends: .card-body -->
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-25">
                        <div class="card border-0">
                            <div class="card-header">
                                <h6>Instagram Overview</h6>
                                <div class="card-extra">
                                    <ul class="card-tab-links nav-tabs nav">
                                        <li>
                                            <a class="active" href="#io_week" data-toggle="tab" id="io_week-tab"
                                               role="tab" area-controls="io_week" aria-selected="true">Week</a>
                                        </li>
                                        <li>
                                            <a href="#io_month" data-toggle="tab" id="io_month-tab" role="tab"
                                               area-controls="io_month" aria-selected="false">Month</a>
                                        </li>
                                        <li>
                                            <a href="#io_year" data-toggle="tab" id="io_year-tab" role="tab"
                                               area-controls="io_year" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body linechart-overview-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="io_week" role="tabpanel"
                                         aria-labelledby="io_week-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>278</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharpSix" height="55"
                                                                style="display: block; width: 440px; height: 55px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharpSeven" height="55"
                                                                style="display: block; width: 440px; height: 55px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharpEight" height="55"
                                                                style="display: block; width: 440px; height: 55px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharpNine" height="55"
                                                                style="display: block; width: 440px; height: 55px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharpTen" height="55"
                                                                style="display: block; width: 440px; height: 55px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="io_month" role="tabpanel"
                                         aria-labelledby="io_month-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>378</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpSixM"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpSevenM"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpEightM"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpNineM"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpTenM"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="io_year" role="tabpanel"
                                         aria-labelledby="io_year-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>578</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpSixY"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpSevenY"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpEightY"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpNineY"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharpTenY"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-25">
                        <div class="card border-0">
                            <div class="card-header">
                                <h6>Linkedin Overview</h6>
                                <div class="card-extra">
                                    <ul class="card-tab-links nav-tabs nav">
                                        <li>
                                            <a class="active" href="#lo_week" data-toggle="tab" id="lo_week-tab"
                                               role="tab" area-controls="lo_week" aria-selected="true">Week</a>
                                        </li>
                                        <li>
                                            <a href="#lo_month" data-toggle="tab" id="lo_month-tab" role="tab"
                                               area-controls="lo_week" aria-selected="false">Month</a>
                                        </li>
                                        <li>
                                            <a href="#lo_year" data-toggle="tab" id="lo_year-tab" role="tab"
                                               area-controls="lo_week" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body linechart-overview-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="lo_week" role="tabpanel"
                                         aria-labelledby="lo_week-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>178</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharp11" height="60"
                                                                style="display: block; width: 440px; height: 60px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharp12" height="55"
                                                                style="display: block; width: 440px; height: 55px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharp13" height="55"
                                                                style="display: block; width: 440px; height: 55px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharp14" height="55"
                                                                style="display: block; width: 440px; height: 55px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <div class="chartjs-size-monitor">
                                                            <div class="chartjs-size-monitor-expand">
                                                                <div class=""></div>
                                                            </div>
                                                            <div class="chartjs-size-monitor-shrink">
                                                                <div class=""></div>
                                                            </div>
                                                        </div>
                                                        <canvas id="lineChartSharp15" height="55"
                                                                style="display: block; width: 440px; height: 55px;"
                                                                width="440" class="chartjs-render-monitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="lo_month" role="tabpanel"
                                         aria-labelledby="lo_month-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>378</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharp11M"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharp12M"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharp13M"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharp14M"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharp15M"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="lo_year" role="tabpanel"
                                         aria-labelledby="lo_year-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>578</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharp11Y"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharp12Y"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharp13Y"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharp14Y"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="lineChartSharp15Y"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 mb-25">
                        <div class="card border-0">
                            <div class="card-header">
                                <h6>Social Traffic Metrics</h6>
                                <div class="card-extra">
                                    <div class="card-tab btn-group atbd-button-group mr-3 nav nav-tabs">
                                        <a class="btn btn-xs btn-white active border" id="f_today-tab" data-toggle="tab"
                                           href="#st_matrics-today" role="tab" area-controls="st_matrics"
                                           aria-selected="true">Today</a>
                                        <a class="btn btn-xs btn-white border" id="f_week-tab" data-toggle="tab"
                                           href="#st_matrics-week" role="tab" area-controls="st_matrics"
                                           aria-selected="false">Week</a>
                                        <a class="btn btn-xs btn-white border" id="f_month-tab" data-toggle="tab"
                                           href="#st_matrics-month" role="tab" area-controls="st_matrics"
                                           aria-selected="false">Month</a>
                                        <a class="btn btn-xs btn-white border" id="f_year-tab" data-toggle="tab"
                                           href="#st_matrics-year" role="tab" area-controls="st_matrics"
                                           aria-selected="false">Year</a>
                                    </div>
                                    <div class="dropdown dropleft">
                                        <a href="#" role="button" id="Today" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-more-horizontal">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="Today">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="st_matrics-today" role=""
                                         aria-labelledby="st_matrics-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-social">
                                                <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col" colspan="3">Acquisition</th>
                                                    <th scope="col" colspan="3">Behavior</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Social Network</td>
                                                    <td>Users</td>
                                                    <td>New Users</td>
                                                    <td>Sessions</td>
                                                    <td>Bounce Rate</td>
                                                    <td>Pages / Sessions</td>
                                                    <td>Avg. Session Duration</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Facebook</a>
                                                    </td>
                                                    <td>1,458</td>
                                                    <td>452</td>
                                                    <td>9,245%</td>
                                                    <td>35</td>
                                                    <td>5.9</td>
                                                    <td>00:08:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Twitter</a>
                                                    </td>
                                                    <td>4,785</td>
                                                    <td>426</td>
                                                    <td>8,156%</td>
                                                    <td>-26</td>
                                                    <td>1.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Linkedin</a>
                                                    </td>
                                                    <td>3,416</td>
                                                    <td>951</td>
                                                    <td>6,124%</td>
                                                    <td>56</td>
                                                    <td>5.3</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Youtube</a>
                                                    </td>
                                                    <td>5,426</td>
                                                    <td>753</td>
                                                    <td>9,147%</td>
                                                    <td>15</td>
                                                    <td>7.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Instagram</a>
                                                    </td>
                                                    <td>6,258</td>
                                                    <td>852</td>
                                                    <td>4,369%</td>
                                                    <td>75</td>
                                                    <td>2.7</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Google+</a>
                                                    </td>
                                                    <td>9,632</td>
                                                    <td>123</td>
                                                    <td>1,256%</td>
                                                    <td>46</td>
                                                    <td>2.6</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="st_matrics-week" role="tabpanel"
                                         aria-labelledby="st_matrics-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-social">
                                                <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col" colspan="3">Acquisition</th>
                                                    <th scope="col" colspan="3">Behavior</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Social Network</td>
                                                    <td>Users</td>
                                                    <td>New Users</td>
                                                    <td>Sessions</td>
                                                    <td>Bounce Rate</td>
                                                    <td>Pages / Sessions</td>
                                                    <td>Avg. Session Duration</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Facebook</a>
                                                    </td>
                                                    <td>2,458</td>
                                                    <td>552</td>
                                                    <td>10,245%</td>
                                                    <td>38</td>
                                                    <td>6.9</td>
                                                    <td>00:08:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Twitter</a>
                                                    </td>
                                                    <td>5,785</td>
                                                    <td>526</td>
                                                    <td>6,156%</td>
                                                    <td>-36</td>
                                                    <td>2.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Linkedin</a>
                                                    </td>
                                                    <td>34,416</td>
                                                    <td>151</td>
                                                    <td>6,124%</td>
                                                    <td>36</td>
                                                    <td>6.3</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Youtube</a>
                                                    </td>
                                                    <td>6,426</td>
                                                    <td>553</td>
                                                    <td>10,147%</td>
                                                    <td>55</td>
                                                    <td>6.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Instagram</a>
                                                    </td>
                                                    <td>60,258</td>
                                                    <td>5552</td>
                                                    <td>2,369%</td>
                                                    <td>95</td>
                                                    <td>6.7</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Google+</a>
                                                    </td>
                                                    <td>2,632</td>
                                                    <td>223</td>
                                                    <td>3,256%</td>
                                                    <td>26</td>
                                                    <td>5.6</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="st_matrics-month" role="tabpanel"
                                         aria-labelledby="st_matrics-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-social">
                                                <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col" colspan="3">Acquisition</th>
                                                    <th scope="col" colspan="3">Behavior</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Social Network</td>
                                                    <td>Users</td>
                                                    <td>New Users</td>
                                                    <td>Sessions</td>
                                                    <td>Bounce Rate</td>
                                                    <td>Pages / Sessions</td>
                                                    <td>Avg. Session Duration</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Facebook</a>
                                                    </td>
                                                    <td>26,458</td>
                                                    <td>5052</td>
                                                    <td>15,245%</td>
                                                    <td>58</td>
                                                    <td>3.9</td>
                                                    <td>00:08:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Twitter</a>
                                                    </td>
                                                    <td>52,785</td>
                                                    <td>6026</td>
                                                    <td>60,156%</td>
                                                    <td>-66</td>
                                                    <td>6.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Linkedin</a>
                                                    </td>
                                                    <td>34,416</td>
                                                    <td>151</td>
                                                    <td>6,124%</td>
                                                    <td>36</td>
                                                    <td>6.3</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Youtube</a>
                                                    </td>
                                                    <td>60,426</td>
                                                    <td>553</td>
                                                    <td>10,147%</td>
                                                    <td>55</td>
                                                    <td>8.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Instagram</a>
                                                    </td>
                                                    <td>60,258</td>
                                                    <td>5552</td>
                                                    <td>2,369%</td>
                                                    <td>95</td>
                                                    <td>6.7</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Google+</a>
                                                    </td>
                                                    <td>20,632</td>
                                                    <td>223</td>
                                                    <td>30,256%</td>
                                                    <td>26</td>
                                                    <td>6.6</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="st_matrics-year" role="tabpanel"
                                         aria-labelledby="st_matrics-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-social">
                                                <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col" colspan="3">Acquisition</th>
                                                    <th scope="col" colspan="3">Behavior</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Social Network</td>
                                                    <td>Users</td>
                                                    <td>New Users</td>
                                                    <td>Sessions</td>
                                                    <td>Bounce Rate</td>
                                                    <td>Pages / Sessions</td>
                                                    <td>Avg. Session Duration</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Facebook</a>
                                                    </td>
                                                    <td>1,458</td>
                                                    <td>452</td>
                                                    <td>9,245%</td>
                                                    <td>35</td>
                                                    <td>5.9</td>
                                                    <td>00:08:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Twitter</a>
                                                    </td>
                                                    <td>4,285</td>
                                                    <td>424</td>
                                                    <td>8,356%</td>
                                                    <td>-25</td>
                                                    <td>1.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Linkedin</a>
                                                    </td>
                                                    <td>3,416</td>
                                                    <td>951</td>
                                                    <td>6,124%</td>
                                                    <td>56</td>
                                                    <td>5.3</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Youtube</a>
                                                    </td>
                                                    <td>5,426</td>
                                                    <td>753</td>
                                                    <td>9,147%</td>
                                                    <td>15</td>
                                                    <td>7.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Instagram</a>
                                                    </td>
                                                    <td>6,258</td>
                                                    <td>852</td>
                                                    <td>4,369%</td>
                                                    <td>75</td>
                                                    <td>2.7</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">Google+</a>
                                                    </td>
                                                    <td>9,632</td>
                                                    <td>123</td>
                                                    <td>1,256%</td>
                                                    <td>46</td>
                                                    <td>2.6</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-copyright">
                        <p>
                            2022 @<a href="https://sovware.com/">Sovware</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-menu text-right">
                        <ul>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Team</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- ends: .Footer Menu -->
                </div>
            </div>
        </div>
    </footer>
@endsection
