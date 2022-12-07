<header class="header-top">
    <nav class="navbar navbar-light">
        <div class="navbar-left">
            <a href="" class="sidebar-toggle">
                <img class="svg" src="{{asset('admin/img/svg/bars.svg')}}" alt="img"></a>
            <a style="height: 40px;" class="navbar-brand" href="#">

                <div style="display: flex;height: 40px;">
                    <img style="height: 65px" src="{{asset('alwaan/alwaan_logo.png')}}" class="rounded-circle svg dark">
                    <p style="padding-top: 7px;font-weight: bold">{{__('lang.alwan')}}</p>
                </div>
            </a>
            <div class="top-menu">

                <div class="strikingDash-top-menu position-relative">
                    <ul>
                        <li class="has-subMenu">
                            <a href="#" class="active">Dashboard</a>
                            <ul class="subMenu">
                                <li>
                                    <a class="active" href="index.html">Social Media</a>
                                </li>
                                <li>
                                    <a class="" href="business.html">FineTech /
                                        Business</a>
                                </li>
                                <li>
                                    <a class="" href="performance.html">Site
                                        Performance</a>
                                </li>
                                <li>
                                    <a class="" href="ecommerce.html">Ecommerce</a>
                                </li>
                                <li>
                                    <a class="" href="crm.html">
                                        CRM</a>
                                </li>
                                <li>
                                    <a class="" href="sales.html">
                                        Sales Performance</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-subMenu">
                            <a href="#" class="">Layouts</a>
                            <ul class="subMenu">
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
                                    <a href="../rtl">RTL</a>
                                </li>
                                <li class="layout">
                                    <a href="../ltr">LTR</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-subMenu">
                            <a href="#" class="">Apps</a>
                            <ul class="subMenu">
                                <li>
                                    <a href="chat.html" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-message-square nav-icon">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                        <span class="menu-text">Chat</span>
                                    </a>
                                </li>
                                <li class="has-subMenu-left">
                                    <a href="#" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-shopping-cart nav-icon">
                                            <circle cx="9" cy="21" r="1"></circle>
                                            <circle cx="20" cy="21" r="1"></circle>
                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                        </svg>
                                        <span class="menu-text">eCommerce</span>
                                    </a>
                                    <ul class="subMenu">
                                        <li>
                                            <a href="products.html" class="">Products</a>
                                        </li>
                                        <li>
                                            <a href="product-details.html" class="">Product Details</a>
                                        </li>
                                        <li>
                                            <a href="add-product.html" class="">Product
                                                Add</a>
                                        </li>
                                        <li>
                                            <a href="" class="">Product Edit</a>
                                        </li>
                                        <li>
                                            <a href="cart.html" class="">Cart</a>
                                        </li>
                                        <li>
                                            <a href="order.html" class="">Orders</a>
                                        </li>
                                        <li>
                                            <a href="sellers.html" class="">Sellers</a>
                                        </li>
                                        <li>
                                            <a href="invoice.html" class="">Invoices</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-subMenu-left">
                                    <a href="#" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-mail nav-icon">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="menu-text">Email</span>
                                    </a>
                                    <ul class="subMenu">
                                        <li>
                                            <a href="inbox.html" class="">Inbox</a>
                                        </li>
                                        <li>
                                            <a href="read-email.html" class="">Read
                                                Email</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="chat.html" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-bookmark nav-icon">
                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                        <span class="menu-text">Note</span>
                                    </a>
                                </li>
                                <li class="has-subMenu-left">
                                    <a href="#" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-user nav-icon">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="menu-text">Profile</span>
                                    </a>
                                    <ul class="subMenu">
                                        <li>
                                            <a href="profile.html" class="">Profile</a>
                                        </li>
                                        <li>
                                            <a href="profile-setting.html" class="">Settings</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-subMenu-left">
                                    <a href="#" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-user-check nav-icon">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="8.5" cy="7" r="4"></circle>
                                            <polyline points="17 11 19 13 23 9"></polyline>
                                        </svg>
                                        <span class="menu-text">Contact</span>
                                    </a>
                                    <ul class="subMenu">
                                        <li>
                                            <a class="" href="contact-1.html">Contact 1</a>
                                        </li>
                                        <li>
                                            <a class="" href="contact-2.html">Contact 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="chat.html" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-activity nav-icon">
                                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                        </svg>
                                        <span class="menu-text">To-Do</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="kanban.html" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-columns nav-icon">
                                            <path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path>
                                        </svg>
                                        <span class="menu-text">Kanban Board</span>
                                    </a>
                                </li>
                                <li class="has-subMenu-left">
                                    <a href="#" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-repeat nav-icon">
                                            <polyline points="17 1 21 5 17 9"></polyline>
                                            <path d="M3 11V9a4 4 0 0 1 4-4h14"></path>
                                            <polyline points="7 23 3 19 7 15"></polyline>
                                            <path d="M21 13v2a4 4 0 0 1-4 4H3"></path>
                                        </svg>
                                        <span class="menu-text">Import &amp; Export</span>
                                    </a>
                                    <ul class="subMenu">
                                        <li>
                                            <a class="" href="import.html">Import</a>
                                        </li>
                                        <li>
                                            <a class="" href="export.html">Export</a>
                                        </li>
                                        <li>
                                            <a class="" href="export-selected.html">Export Selected
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="file-manager.html" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-file nav-icon">
                                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                            <polyline points="13 2 13 9 20 9"></polyline>
                                        </svg>
                                        <span class="menu-text">File Manager</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="task-app.html" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-clipboard nav-icon">
                                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                        </svg>
                                        <span class="menu-text">Task App</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="has-subMenu">
                            <a href="#" class="">Crud</a>
                            <ul class="subMenu">
                                <li class="has-subMenu-left">
                                    <a href="#" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-shopping-cart nav-icon">
                                            <circle cx="9" cy="21" r="1"></circle>
                                            <circle cx="20" cy="21" r="1"></circle>
                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                        </svg>
                                        <span class="menu-text">Firestore Crud</span>
                                    </a>
                                    <ul class="subMenu">
                                        <li>
                                            <a class="" href="firestore.html">View All</a>
                                        </li>
                                        <li>
                                            <a class="" href="firestore-add.html">Add
                                                New</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="mega-item has-subMenu">
                            <a href="#" class="">Pages</a>
                            <ul class="megaMenu-wrapper megaMenu-small">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="projects.html" class="">Project</a>
                                        </li>
                                        <li>
                                            <a href="application-ui.html" class="">Project Details</a>
                                        </li>
                                        <li>
                                            <a href="create.html" class="">Create
                                                Project</a>
                                        </li>
                                        <li>
                                            <a href="users-card.html" class="">Team</a>
                                        </li>
                                        <li>
                                            <a href="users-card2.html" class="">Users</a>
                                        </li>
                                        <li>
                                            <a href="user-info.html" class="">Users
                                                Info</a>
                                        </li>
                                        <li>
                                            <a href="users-list.html" class="">Users
                                                List</a>
                                        </li>
                                        <li>
                                            <a href="users-group.html" class="">Users
                                                Group</a>
                                        </li>
                                        <li>
                                            <a href="banner.html" class="">
                                                <span class="menu-text">Banners</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="testimonial.html" class="">
                                                <span class="menu-text">Testimonial</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="support.html" class="">
                                                <span class="menu-text">Support Center</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <a href="users-datatable.html" class="">Users
                                                Table</a>
                                        </li>
                                        <li>
                                            <a href="gallery.html" class="">Gallery 1</a>
                                        </li>
                                        <li>
                                            <a href="gallery2.html" class="">Gallery 2</a>
                                        </li>
                                        <li>
                                            <a href="pricing.html" class="">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="faq.html" class="">FAQ's</a>
                                        </li>
                                        <li>
                                            <a href="search.html" class="">Search
                                                Results</a>
                                        </li>
                                        <li>
                                            <a href="maintenance.html" class="">Coming
                                                Soon</a>
                                        </li>
                                        <li>
                                            <a href="404.html" class="">404</a>
                                        </li>
                                        <li>
                                            <a href="maintenance.html" class="">
                                                <span class="menu-text">Maintenance</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login.html" class="">
                                                <span class="menu-text">Log In</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sign-up.html" class="">
                                                <span class="menu-text">Sign Up</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blank.html" class="">
                                                <span class="menu-text">Blank</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-item has-subMenu">
                            <a href="#" class="">Components</a>
                            <ul class="megaMenu-wrapper megaMenu-wide">
                                <li>
                                    <span class="mega-title">Components</span>
                                    <ul>
                                        <li>
                                            <a class="" href="alert.html">Alert</a>
                                        </li>
                                        <li>
                                            <a class="" href="avatar.html">Avatar</a>
                                        </li>
                                        <li>
                                            <a class="" href="badge.html">Badge</a>
                                        </li>
                                        <li>
                                            <a class="" href="breadcrumbs.html">Breadcrumb</a>
                                        </li>
                                        <li>
                                            <a class="" href="buttons.html">Button</a>
                                        </li>
                                        <li>
                                            <a class="" href="cards.html">Cards</a>
                                        </li>
                                        <li>
                                            <a class="" href="carousel.html">Carousel</a>
                                        </li>
                                        <li>
                                            <a class="" href="checkbox.html">Checkbox</a>
                                        </li>
                                        <li>
                                            <a class="" href="collapse.html">Collapse</a>
                                        </li>
                                        <li>
                                            <a class="" href="comments.html">Comments</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="mega-title">Components</span>
                                    <ul>
                                        <li>
                                            <a class="" href="dashboard-base.html">Dashboard
                                                Base</a>
                                        </li>
                                        <li>
                                            <a class="" href="date-picker.html">DatePicker</a>
                                        </li>
                                        <li>
                                            <a class="" href="drawer.html">Drawer</a>
                                        </li>
                                        <li>
                                            <a class="" href="drag-drop.html">Drag &amp;
                                                Drop</a>
                                        </li>
                                        <li>
                                            <a class="" href="dropdown.html">Dropdown</a>
                                        </li>
                                        <li>
                                            <a class="" href="empty.html">Empty</a>
                                        </li>
                                        <li>
                                            <a class="" href="input.html">Input</a>
                                        </li>
                                        <li>
                                            <a class="" href="list.html">List</a>
                                        </li>
                                        <li>
                                            <a class="" href="menu.html">Menu</a>
                                        </li>
                                        <li>
                                            <a class="" href="message.html">Message</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="mega-title">Components</span>
                                    <ul>
                                        <li>
                                            <a class="" href="modal.html">Modals</a>
                                        </li>
                                        <li>
                                            <a class="" href="notifications.html">Notification</a>
                                        </li>
                                        <li>
                                            <a class="" href="page-header.html">Page
                                                Headers</a>
                                        </li>
                                        <li>
                                            <a class="" href="pagination.html">Paginations</a>
                                        </li>
                                        <li>
                                            <a class="" href="progressbar.html">Progress</a>
                                        </li>
                                        <li>
                                            <a class="" href="radio.html">Radio</a>
                                        </li>
                                        <li>
                                            <a class="" href="rate.html">Rate</a>
                                        </li>
                                        <li>
                                            <a class="" href="result.html">Result</a>
                                        </li>
                                        <li>
                                            <a class="" href="select.html">Select</a>
                                        </li>
                                        <li>
                                            <a class="" href="skeleton.html">Skeleton</a>
                                        </li>
                                        <li>
                                            <a class="" href="time-picker.html">Timepicker</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="mega-title">Components</span>
                                    <ul>
                                        <li>
                                            <a class="" href="slider.html">Slider</a>
                                        </li>
                                        <li>
                                            <a class="" href="spin.html">Spinner</a>
                                        </li>
                                        <li>
                                            <a class="" href="statistics.html">Statistic</a>
                                        </li>
                                        <li>
                                            <a class="" href="steps.html">Steps</a>
                                        </li>
                                        <li>
                                            <a class="" href="switch.html">Switch</a>
                                        </li>
                                        <li>
                                            <a class="" href="tab.html">Tabs</a>
                                        </li>
                                        <li>
                                            <a class="" href="tag.html">Tags</a>
                                        </li>
                                        <li>
                                            <a class="" href="timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a class="" href="timeline-2.html">Timeline
                                                2</a>
                                        </li>
                                        <li>
                                            <a class="" href="timeline-3.html">Timeline
                                                3</a>
                                        </li>
                                        <li>
                                            <a class="" href="uploads.html">Upload</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-subMenu">
                            <a href="#" class="">Features</a>
                            <ul class="subMenu">
                                <li>
                                    <a href="editors.html" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-edit nav-icon">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                        <span class="menu-text">Editors</span>
                                    </a>
                                </li>
                                <li class="has-subMenu-left">
                                    <a href="#" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-grid nav-icon">
                                            <rect x="3" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="14" width="7" height="7"></rect>
                                            <rect x="3" y="14" width="7" height="7"></rect>
                                        </svg>
                                        <span class="menu-text">Icons</span>
                                    </a>
                                    <ul class="subMenu">
                                        <li>
                                            <a href="feather.html" class="">Feather icons
                                                (svg)</a>
                                        </li>
                                        <li>
                                            <a href="fontawesome.html" class="">Font
                                                Awesome</a>
                                        </li>
                                        <li>
                                            <a href="lineawesome.html" class="">Line
                                                Awesome</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-subMenu-left">
                                    <a href="#" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-bar-chart-2 nav-icon">
                                            <line x1="18" y1="20" x2="18" y2="10"></line>
                                            <line x1="12" y1="20" x2="12" y2="4"></line>
                                            <line x1="6" y1="20" x2="6" y2="14"></line>
                                        </svg>
                                        <span class="menu-text">Charts</span>
                                    </a>
                                    <ul class="subMenu">
                                        <li>
                                            <a class="" href="charts.html">Chart JS</a>
                                        </li>
                                        <li>
                                            <a class="" href="google-chart.html">Google
                                                Charts</a>
                                        </li>
                                        <li>
                                            <a class="" href="peity-chart.html">Peity
                                                Charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-subMenu-left">
                                    <a href="#" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-disc nav-icon">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                        <span class="menu-text">Froms</span>
                                    </a>
                                    <ul class="subMenu">
                                        <li>
                                            <a class="" href="form.html">Basics</a>
                                        </li>
                                        <li>
                                            <a class="" href="form-layouts.html">Layouts</a>
                                        </li>
                                        <li>
                                            <a class="" href="form-elements.html">Elements</a>
                                        </li>
                                        <li>
                                            <a class="" href="form-components.html">Components</a>
                                        </li>
                                        <li>
                                            <a class="" href="form-validations.html">Validations</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="has-subMenu-left">
                                    <a href="#" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-map nav-icon">
                                            <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                            <line x1="8" y1="2" x2="8" y2="18"></line>
                                            <line x1="16" y1="6" x2="16" y2="22"></line>
                                        </svg>
                                        <span class="menu-text">Maps</span>
                                    </a>
                                    <ul class="subMenu">
                                        <li>
                                            <a href="google-map.html" class="">Google
                                                Maps</a>
                                        </li>
                                        <li>
                                            <a href="leaflet-map.html" class="">Leaflet
                                                Maps</a>
                                        </li>
                                        <li>
                                            <a href="vector-map.html" class="">Vector
                                                Maps</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-subMenu-left">
                                    <a href="#" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-server nav-icon">
                                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                            <line x1="6" y1="6" x2="6.01" y2="6"></line>
                                            <line x1="6" y1="18" x2="6.01" y2="18"></line>
                                        </svg>
                                        <span class="menu-text">Widget</span>
                                    </a>
                                    <ul class="subMenu">
                                        <li>
                                            <a class="" href="widget-charts.html">Chart</a>
                                        </li>
                                        <li>
                                            <a class="" href="widget-mixed.html">Mixed</a>
                                        </li>
                                        <li>
                                            <a class="" href="widget-card.html">Card</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-subMenu-left">
                                    <a href="#" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-square nav-icon">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        </svg>
                                        <span class="menu-text">Wizards</span>
                                    </a>
                                    <ul class="subMenu">
                                        <li>
                                            <a href="checkout-wizard6.html" class="">Wizard
                                                1</a>
                                        </li>
                                        <li>
                                            <a href="checkout-wizard7.html" class="">Wizard
                                                2</a>
                                        </li>
                                        <li>
                                            <a href="checkout-wizard8.html" class="">Wizard
                                                3</a>
                                        </li>
                                        <li>
                                            <a href="checkout-wizard9.html" class="">Wizard
                                                4</a>
                                        </li>
                                        <li>
                                            <a href="checkout-wizard10.html" class="">Wizard
                                                5</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-subMenu-left">
                                    <a href="#" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-book nav-icon">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                        </svg>
                                        <span class="menu-text">Knowledge Base</span>
                                    </a>
                                    <ul class="subMenu">
                                        <li>
                                            <a class="" href="knowledgebase.html">Knowledge
                                                Base</a>
                                        </li>
                                        <li>
                                            <a class="" href="knowledgebase-2.html">All
                                                Article</a>
                                        </li>

                                        <li>
                                            <a class="" href="knowledgebase-3.html">Single Article</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- ends: navbar-left -->

        <div class="navbar-right">
            <ul class="navbar-right__menu">
                <li class="nav-notification">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                        </a>
                        <div class="dropdown-wrapper">
                            <h2 class="dropdown-wrapper__title">Notifications <span
                                        class="badge-circle badge-warning ml-1">4</span></h2>
                            <ul>
                                <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                    <div class="nav-notification__type nav-notification__type--primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-inbox">
                                            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                            <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                        </svg>
                                    </div>
                                    <div class="nav-notification__details">
                                        <p>
                                            <a href="" class="subject stretched-link text-truncate"
                                               style="max-width: 180px;">James</a>
                                            <span>sent you a message</span>
                                        </p>
                                        <p>
                                            <span class="time-posted">5 hours ago</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                    <div class="nav-notification__type nav-notification__type--secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-upload">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="17 8 12 3 7 8"></polyline>
                                            <line x1="12" y1="3" x2="12" y2="15"></line>
                                        </svg>
                                    </div>
                                    <div class="nav-notification__details">
                                        <p>
                                            <a href="" class="subject stretched-link text-truncate"
                                               style="max-width: 180px;">James</a>
                                            <span>sent you a message</span>
                                        </p>
                                        <p>
                                            <span class="time-posted">5 hours ago</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                    <div class="nav-notification__type nav-notification__type--success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-log-in">
                                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                            <polyline points="10 17 15 12 10 7"></polyline>
                                            <line x1="15" y1="12" x2="3" y2="12"></line>
                                        </svg>
                                    </div>
                                    <div class="nav-notification__details">
                                        <p>
                                            <a href="" class="subject stretched-link text-truncate"
                                               style="max-width: 180px;">James</a>
                                            <span>sent you a message</span>
                                        </p>
                                        <p>
                                            <span class="time-posted">5 hours ago</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                    <div class="nav-notification__type nav-notification__type--info">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-at-sign">
                                            <circle cx="12" cy="12" r="4"></circle>
                                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                        </svg>
                                    </div>
                                    <div class="nav-notification__details">
                                        <p>
                                            <a href="" class="subject stretched-link text-truncate"
                                               style="max-width: 180px;">James</a>
                                            <span>sent you a message</span>
                                        </p>
                                        <p>
                                            <span class="time-posted">5 hours ago</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                    <div class="nav-notification__type nav-notification__type--danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-heart">
                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                        </svg>
                                    </div>
                                    <div class="nav-notification__details">
                                        <p>
                                            <a href="" class="subject stretched-link text-truncate"
                                               style="max-width: 180px;">James</a>
                                            <span>sent you a message</span>
                                        </p>
                                        <p>
                                            <span class="time-posted">5 hours ago</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <a href="" class="dropdown-wrapper__more">See all incoming activity</a>
                        </div>
                    </div>
                </li>
                <!-- ends: .nav-notification -->
                <li class="nav-flag-select">
                    <div class="dropdown-custom">
                        @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                            <a style="padding: 2px" class="btn btn-primary"
                               href="{{url('lang/set/ar')}}">
                                <h1 style="color: white ;font-size: 15px">AR</h1>
                            </a>
                        @else
                            <a style="padding: 2px" class="btn btn-primary"
                               href="{{url('lang/set/en')}}">
                                <h1 style="color: white;font-size: 15px">EN</h1>
                            </a>
                        @endif
                    </div>
                </li>
                <!-- ends: .nav-flag-select -->
                <li class="nav-author">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle">
                            <img src="{{asset('uploads/'. Auth::user()->img)}}" class="rounded-circle"></a>
                        <div class="dropdown-wrapper">
                            <div class="nav-author__info">
                                <div class="author-img">
                                    <img src="{{asset('uploads/'. Auth::user()->img)}}" class="rounded-circle"></a>
                                </div>
                                <div>
                                    <h6>{{Auth::user()->name}}</h6>
                                    <span>{{Auth::user()->role->name}}</span>
                                </div>
                            </div>
                            <div class="nav-author__options">
                                <ul>
                                    <li>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            Profile</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-settings">
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                            </svg>
                                            Settings</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-key">
                                                <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>
                                            </svg>
                                            Billing</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-users">
                                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                            Activity</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-bell">
                                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                            </svg>
                                            Help</a>
                                    </li>
                                </ul>
                                <form style="display: none" id="logout-form" action="{{ route('logout') }}"
                                      method="POST">
                                    @csrf
                                </form>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                   class="nav-author__signout">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    Sign Out</a>
                            </div>
                        </div>
                        <!-- ends: .dropdown-wrapper -->
                    </div>
                </li>
                <!-- ends: .nav-author -->
            </ul>
            <!-- ends: .navbar-right__menu -->
            <div class="navbar-right__mobileAction d-md-none">
                <a href="#" class="btn-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </a>
                <a href="#" class="btn-author-action">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-more-vertical">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                    </svg>
                </a>
            </div>
        </div>
        <!-- ends: .navbar-right -->
    </nav>
</header>