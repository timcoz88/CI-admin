<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta http-equiv="Content-Language" content="en"/>
    <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>
    <title>Blank page - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    
    <link href="<?= base_url('assets/admin/libs/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet"/>
    <link href="<?= base_url('assets/admin/libs/selectize/dist/css/selectize.css') ?>" rel="stylesheet"/>
    <link href="<?= base_url('assets/admin/libs/fullcalendar/core/main.min.css') ?>" rel="stylesheet"/>
    <link href="<?= base_url('assets/admin/libs/fullcalendar/daygrid/main.min.css') ?>" rel="stylesheet"/>
    <link href="<?= base_url('assets/admin/libs/fullcalendar/timegrid/main.min.css') ?>" rel="stylesheet"/>
    <link href="<?= base_url('assets/admin/libs/fullcalendar/list/main.min.css') ?>" rel="stylesheet"/>
    
    <link href="<?= base_url('assets/admin/css/tabler.min.css') ?>" rel="stylesheet"/>
    <link href="<?= base_url('assets/admin/css/tabler-flags.min.css') ?>" rel="stylesheet"/>
    <link href="<?= base_url('assets/admin/css/tabler-payments.min.css') ?>" rel="stylesheet" />

  </head>
  <body class="antialiased">
    <div class="wrapper">
      <aside class="sidebar sidebar-dark">
        <!-- Sidebar logo -->
        <a href="." class="sidebar-brand">
          <img src="<?= base_url('assets/admin') ?>/static/logo.svg" alt="Tabler" class="sidebar-brand-logo sidebar-brand-logo-lg">
          <img src="<?= base_url('assets/admin') ?>/static/logo-small.svg" alt="Tabler" class="sidebar-brand-logo sidebar-brand-logo-sm">
        </a>
        <div class="sidebar-content">
          <div>
            <!-- Sidebar menu -->
            <ul class="sidebar-nav">
              <li class="sidebar-nav-title">Navigation</li>
              <li class="sidebar-nav-item">
                <a href="./index.html" class="sidebar-nav-link" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon nav-icon"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  <span class="nav-text">Dashboard</span>
                  <span class="badge bg-blue"></span>
                </a>
              </li>
              <li class="sidebar-nav-item">
                <a href="./form-elements.html" class="sidebar-nav-link" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon nav-icon"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                  <span class="nav-text">Form elements</span>
                  <span class="badge bg-red">New</span>
                </a>
              </li>
              <li class="sidebar-nav-item">
                <a  class="sidebar-nav-link" data-toggle="collapse" data-target="#sidebar-menu-error">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon nav-icon"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                  <span class="nav-text">Error pages</span>
                  <span class="sidebar-nav-arrow"></span>
                </a>
                <ul class="sidebar-subnav collapse" id="sidebar-menu-error">
                  <li class="sidebar-nav-item">
                    <a  href="./400.html" class="sidebar-nav-link" >
                      <span>400 page</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./401.html" class="sidebar-nav-link" >
                      <span>401 page</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./403.html" class="sidebar-nav-link" >
                      <span>403 page</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./404.html" class="sidebar-nav-link" >
                      <span>404 page</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./500.html" class="sidebar-nav-link" >
                      <span>500 page</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./503.html" class="sidebar-nav-link" >
                      <span>503 page</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./maintenance.html" class="sidebar-nav-link" >
                      <span>Maintenance page</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-nav-item">
                <a  class="sidebar-nav-link" data-toggle="collapse" data-target="#sidebar-menu-base" aria-expanded="true">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon nav-icon"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                  <span class="nav-text">Base</span>
                  <span class="sidebar-nav-arrow"></span>
                </a>
                <ul class="sidebar-subnav collapse show" id="sidebar-menu-base">
                  <li class="sidebar-nav-item">
                    <a  href="./blank.html" class="sidebar-nav-link active" >
                      <span>Starter page</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./buttons.html" class="sidebar-nav-link" >
                      <span>Buttons</span>
                      <span class="badge bg-green">New</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./cards.html" class="sidebar-nav-link" >
                      <span>Cards</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./datatables.html" class="sidebar-nav-link" >
                      <span>Data Tables</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./calendar.html" class="sidebar-nav-link" >
                      <span>Calendar</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./carousel.html" class="sidebar-nav-link" >
                      <span>Carousel</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./users.html" class="sidebar-nav-link" >
                      <span>Users</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./gallery.html" class="sidebar-nav-link" >
                      <span>Gallery</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./profile.html" class="sidebar-nav-link" >
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./music.html" class="sidebar-nav-link" >
                      <span>Music</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-nav-item">
                <a href="./charts.html" class="sidebar-nav-link" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon nav-icon"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                  <span class="nav-text">Charts</span>
                </a>
              </li>
              <li class="sidebar-nav-item">
                <a  class="sidebar-nav-link" data-toggle="collapse" data-target="#sidebar-menu-a">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon nav-icon"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                  <span class="nav-text">A</span>
                  <span class="sidebar-nav-arrow"></span>
                </a>
                <ul class="sidebar-subnav collapse" id="sidebar-menu-a">
                  <li class="sidebar-nav-item">
                    <a  class="sidebar-nav-link" data-toggle="collapse" data-target="#sidebar-menu-b">
                      <span>B</span>
                      <span class="sidebar-nav-arrow"></span>
                    </a>
                    <ul class="sidebar-subnav collapse" id="sidebar-menu-b">
                      <li class="sidebar-nav-item">
                        <a href="./tmp.html" class="sidebar-nav-link">
                          <span>C</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="sidebar-nav-item">
                <a href="./layouts.html" class="sidebar-nav-link" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon nav-icon"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                  <span class="nav-text">Layouts</span>
                </a>
              </li>
              <li class="sidebar-nav-item">
                <a  class="sidebar-nav-link" data-toggle="collapse" data-target="#sidebar-menu-extra">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon nav-icon"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                  <span class="nav-text">Extra</span>
                  <span class="sidebar-nav-arrow"></span>
                </a>
                <ul class="sidebar-subnav collapse" id="sidebar-menu-extra">
                  <li class="sidebar-nav-item">
                    <a  href="./invoice.html" class="sidebar-nav-link" >
                      <span>Invoice</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./blog.html" class="sidebar-nav-link" >
                      <span>Blog cards</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-nav-item">
                <a  class="sidebar-nav-link" data-toggle="collapse" data-target="#sidebar-menu-docs">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon nav-icon"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  <span class="nav-text">Documentation</span>
                  <span class="sidebar-nav-arrow"></span>
                </a>
                <ul class="sidebar-subnav collapse" id="sidebar-menu-docs">
                  <li class="sidebar-nav-item">
                    <a  href="./docs/index.html" class="sidebar-nav-link" >
                      <span>Introduction</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/alerts.html" class="sidebar-nav-link" >
                      <span>Alerts</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/autosize.html" class="sidebar-nav-link" >
                      <span>Autosize</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/avatars.html" class="sidebar-nav-link" >
                      <span>Avatars</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/badges.html" class="sidebar-nav-link" >
                      <span>Badges</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/breadcrumb.html" class="sidebar-nav-link" >
                      <span>Breadcrumb</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/buttons.html" class="sidebar-nav-link" >
                      <span>Buttons</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/cards.html" class="sidebar-nav-link" >
                      <span>Cards</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/carousel.html" class="sidebar-nav-link" >
                      <span>Carousel</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/colors.html" class="sidebar-nav-link" >
                      <span>Colors</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/countup.html" class="sidebar-nav-link" >
                      <span>Countup</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/cursors.html" class="sidebar-nav-link" >
                      <span>Cursors</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/charts.html" class="sidebar-nav-link" >
                      <span>Charts</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/divider.html" class="sidebar-nav-link" >
                      <span>Divider</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/empty.html" class="sidebar-nav-link" >
                      <span>Empty states</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/flags.html" class="sidebar-nav-link" >
                      <span>Flags</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/form-elements.html" class="sidebar-nav-link" >
                      <span>Form elements</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/form-helpers.html" class="sidebar-nav-link" >
                      <span>Form helpers</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/input-mask.html" class="sidebar-nav-link" >
                      <span>Form input mask</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/progress.html" class="sidebar-nav-link" >
                      <span>Progress</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/ribbons.html" class="sidebar-nav-link" >
                      <span>Ribbons</span>
                      <span class="badge bg-green">New</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/spinners.html" class="sidebar-nav-link" >
                      <span>Spinners</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/steps.html" class="sidebar-nav-link" >
                      <span>Steps</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/tables.html" class="sidebar-nav-link" >
                      <span>Tables</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/tabs.html" class="sidebar-nav-link" >
                      <span>Tabs</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/timelines.html" class="sidebar-nav-link" >
                      <span>Timelines</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/toasts.html" class="sidebar-nav-link" >
                      <span>Toasts</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/tooltips.html" class="sidebar-nav-link" >
                      <span>Tooltips</span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a  href="./docs/typography.html" class="sidebar-nav-link" >
                      <span>Typography</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="mt-auto">
            <a href="#" class="btn btn-primary btn-block">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
              Logout
            </a>
          </div>
        </div>
      </aside>
      <div class="content">
        <header class="topnav topbar">
          <div class="container">
            <div class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-search d-none d-xl-block">
                <form action="." method="get">
                  <div class="input-icon">
                    <span class="input-icon-addon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search&hellip;">
                  </div>
                </form>
              </div>
              <ul class="nav navbar-menu align-items-center ml-auto">
                <li class="nav-item d-none d-lg-flex mr-3">
                  <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-success" target="_blank">Source code</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" data-toggle="dropdown"
         class="nav-link d-flex align-items-center py-0 px-lg-0 px-2 text-reset ml-2">
                    <span class="avatar avatar-sm" style="background-image: url(<?= base_url('assets/admin') ?>/static/avatars/004f.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block lh-1">
                      Leesa Beaty
                      <span class="text-muted d-block mt-1 text-h6">Administrator</span>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon dropdown-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                      Profile
                    </a>
                    <a class="dropdown-item" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon dropdown-icon"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                      Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon dropdown-icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                      Inbox
                      <span class="badge bg-primary ml-auto">6</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon dropdown-icon"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                      Message
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon dropdown-icon"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12" y2="17"></line></svg>
                      Need help?
                    </a>
                    <a class="dropdown-item" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon dropdown-icon"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                      Sign out
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </header>
        <div class="content-page">
          <main class="container my-4 flex-fill">
            <div class="empty">
              <div class="empty-icon">
                <img src="<?= base_url('assets/admin') ?>/static/illustrations/undraw_printing_invoices_5r4r.svg" class="h-8 mb-4" alt="">
              </div>
              <p class="empty-title h3">No results found</p>
              <p class="empty-subtitle text-muted">
                Try adjusting your search or filter to find what you're looking for.
              </p>
              <div class="empty-action">
                <a href="./index.html" class="btn btn-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                  Add your first client
                </a>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <script src="<?= base_url('assets/admin/libs/jquery/dist/jquery.slim.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/tabler.min.js') ?>"></script>
  </body>
</html>