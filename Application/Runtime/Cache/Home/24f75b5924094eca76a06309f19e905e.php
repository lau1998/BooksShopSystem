<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Be Angular | Bootstrap Admin Web App with AngularJS</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="/tp2018.4.24test/Public/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="/tp2018.4.24test/Public/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="/tp2018.4.24test/Public/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="/tp2018.4.24test/Public/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="/tp2018.4.24test/Public/css/font.css" type="text/css" />
  <link rel="stylesheet" href="/tp2018.4.24test/Public/css/app.css" type="text/css" />
  <style>
  </style>
</head>
<body >
  <div class="app app-header-fixed" id="app">
    <!-- navbar -->
   <!-- top -->
   
<div class="app-header navbar">
      <!-- navbar header -->
      <div class="navbar-header bg-dark">
        <button class="pull-right visible-xs dk" data-toggle="class:show" data-target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" data-toggle="class:off-screen" data-target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">
          <i class="fa fa-btc"></i>
          <img src="/tp2018.4.24test/Public/images/logo.png" alt="." class="hide img-thumbnail" >
          <span class="hidden-folded m-l-xs">Angulr</span>
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
          <a href="#" class="btn no-shadow navbar-btn" data-toggle="class:app-aside-folded" data-target=".app">
            <i class="fa fa-dedent fa-fw text"></i>
            <i class="fa fa-indent fa-fw text-active"></i>
          </a>
          <a href class="btn no-shadow navbar-btn" data-toggle="class:show" data-target="#aside-user">
            <i class="icon-user fa-fw"></i>
          </a>
        </div>
        <!-- / buttons -->

        <!-- link and dropdown -->
        <ul class="nav navbar-nav hidden-sm">
          <li class="dropdown pos-stc">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <span>Mega</span> 
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu wrapper w-full bg-white">
              <div class="row">
                <div class="col-sm-4">
                  <div class="m-l-xs m-t-xs m-b-xs font-bold">Pages <span class="badge badge-sm bg-success">10</span></div>
                  <div class="row">
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Profile</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Post</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Search</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Invoice</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Price</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Lock screen</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign in</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign up</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 b-l b-light">
                  <div class="m-l-xs m-t-xs m-b-xs font-bold">UI Kits <span class="label label-sm bg-primary">12</span></div>
                  <div class="row">
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Buttons</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Icons <span class="badge badge-sm bg-warning">1000+</span></a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Grid</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Widgets</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Bootstap</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sortable</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Portlet</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Timeline</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 b-l b-light">
                  <div class="m-l-xs m-t-xs m-b-sm font-bold">Analysis</div>
                  <div class="text-center">
                    <div class="inline">
                      <div ui-jq="easyPieChart" ui-options="{
                          percent: 65,
                          lineWidth: 50,
                          trackColor: '{{app.color.light}}',
                          barColor: '{{app.color.info}}',
                          scaleColor: false,
                          size: 100,
                          rotate: 90,
                          lineCap: 'butt',
                          animate: 2000
                        }">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
              <span translate="header.navbar.new.NEW">New</span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#" translate="header.navbar.new.PROJECT">Projects</a></li>
              <li>
                <a href>
                  <span class="badge bg-info pull-right">5</span>
                  <span translate="header.navbar.new.TASK">Task</span>
                </a>
              </li>
              <li><a href translate="header.navbar.new.USER">User</a></li>
              <li class="divider"></li>
              <li>
                <a href>
                  <span class="badge bg-danger pull-right">4</span>
                  <span translate="header.navbar.new.EMAIL">Email</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- / link and dropdown -->

        <!-- search form -->
        <form class="navbar-form navbar-form-sm navbar-left shift" ui-shift="prependTo" data-target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
          <div class="form-group">
            <div class="input-group">
              <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control input-sm bg-light no-border rounded padder" placeholder="Search projects...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </div>
        </form>
        <!-- / search form -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="icon-bell fa-fw"></i>
              <span class="visible-xs-inline">Notifications</span>
              <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
            </a>
            <!-- dropdown -->
            <div class="dropdown-menu w-xl animated fadeInUp">
              <div class="panel bg-white">
                <div class="panel-heading b-light bg-light">
                  <strong>You have <span>2</span> notifications</strong>
                </div>
                <div class="list-group">
                  <a href class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="/tp2018.4.24test/Public/txphoto/<?php echo ($userphoto); ?>" alt="..." >
                    </span>
                    <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                  </a>
                  <a href class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                  </a>
                </div>
                <div class="panel-footer text-sm">
                  <a href class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                </div>
              </div>
            </div>
            <!-- / dropdown -->
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="/tp2018.4.24test/Public/txphoto/<?php echo ($userphoto); ?>" alt="..." class="img-circle" ">
                <i class="on md b-white bottom"></i>
              </span>
              <span class="hidden-sm hidden-md"><?php echo ($_SESSION['username']); ?></span> <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
                <div>
                  <p>用300mb 500MB</p>
                </div>
                <progressbar value="60" class="progress-xs m-b-none bg-white"></progressbar>
              </li>
              <li>
                <a href>
                  <span class="badge bg-danger pull-right">30%</span>
                  <span>设置</span>
                </a>
              </li>
              <li>
                <a ui-sref="app.page.profile" href="/tp2018.4.24test/index.php/Home/Index/userdata">用户信息</a>
              </li>
              <li>
                <a ui-sref="app.docs" href="/tp2018.4.24test/index.php/Home/Index/xguserdata">
                  <span class="label bg-info pull-right">Go</span>
                  修改用户信息
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a ui-sref="access.signin" href="/tp2018.4.24test/index.php/Home/Index/logout">登出</a>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->

      </div>
      <!-- / navbar collapse -->
    </div>
     <div class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- user -->
          <div class="clearfix hidden-xs text-center hide" id="aside-user">
            <div class="dropdown wrapper">
              <a ui-sref="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="/tp2018.4.24test/Public/txphoto/<?php echo ($userphoto); ?>"  alt="...">
                </span>
              </a>
              <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt"><?php echo ($username); ?></strong> 
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">Art Director</span>
                </span>
              </a>
              <!-- dropdown -->
              <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
                  <span class="arrow top hidden-folded arrow-info"></span>
                  <div>
                  <a href="/tp2018.4.24test/index.php/Home/Index/userdata">
                    <p>查看信息</p>
                    </a>
                  </div>
                  <progressbar value="60" type="white" class="progress-xs m-b-none dker"></progressbar>
                </li>
                <li>
                  <a href="/tp2018.4.24test/index.php/Home/Index/xguserdata"> <span class="label bg-info pull-right">Go</span>修改信息</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a ui-sref="access.signin" href="/tp2018.4.24test/index.php/Home/Index/logout">登出</a>
                </li>
              </ul>
              <!-- / dropdown -->
            </div>
            <div class="line dk hidden-folded"></div>
          </div>
          <!-- / user -->


   <!-- /top -->
    <!-- / navbar -->
    <!-- left  -->
      <nav ui-nav class="navi">
        <ul class="nav">
          <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
            <span translate="aside.nav.HEADER">Navigation</span>
          </li>
          <li>
            <a href class="auto">      
              <span class="pull-right text-muted">
                <i class="fa fa-fw fa-angle-right text"></i>
                <i class="fa fa-fw fa-angle-down text-active"></i>
              </span>
              <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
              <span class="font-bold" translate="aside.nav.DASHBOARD">实验室</span>
            </a>
            <ul class="nav nav-sub dk">
              <li class="nav-sub-header">
                <a href>
                  <span translate="aside.nav.DASHBOARD">实验室</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a href=" /tp2018.4.24test/index.php/Home/Index/sys">
                  <span>项目</span><b class="label bg-success pull-right">GO</b>
                </a>
              </li>
            </ul>
          </li>
          <li ui-sref-active="active">
            <a href="/tp2018.4.24test/index.php/Home/Index/books">
              <i class="glyphicon glyphicon-calendar icon text-info-dker"></i>
              <span class="font-bold" translate="aside.nav.CALENDAR">图书馆</span>
            </a>
          </li>
          <li ui-sref-active="active">
            <a ui-sref="app.mail.list">
              <b class="badge bg-info pull-right">9</b>
              <i class="glyphicon glyphicon-envelope icon text-info-lter"></i>
              <span class="font-bold" translate="aside.nav.EMAIL">Email</span>
            </a>
          </li>
          <li>
            <a href class="auto">
              <span class="pull-right text-muted">
                <i class="fa fa-fw fa-angle-right text"></i>
                <i class="fa fa-fw fa-angle-down text-active"></i>
              </span>
              <i class="glyphicon glyphicon-th-large icon text-success"></i>
              <span class="font-bold">Apps</span>
            </a>
            <ul class="nav nav-sub dk">
              <li class="nav-sub-header">
                <a href>
                  <span>Apps</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="apps.note">
                  <span>Note</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="apps.contact">
                  <span>Contacts</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.weather">
                  <span>Weather</span>
                </a>
              </li>
            </ul>
          </li>
      
          <li class="line dk"></li>
      
          <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
            <span translate="aside.nav.components.COMPONENTS">Components</span>
          </li>
          <li>
            <a href class="auto">      
              <span class="pull-right text-muted">
                <i class="fa fa-fw fa-angle-right text"></i>
                <i class="fa fa-fw fa-angle-down text-active"></i>
              </span>
              <b class="badge bg-info pull-right">3</b>
              <i class="glyphicon glyphicon-th"></i>
              <span>Layout</span>
            </a>
            <ul class="nav nav-sub dk">
              <li class="nav-sub-header">
                <a href>
                  <span>Layout</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="layout.app">
                  <span>Application</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="layout.fullwidth">
                  <span>Full width</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="layout.mobile">
                  <span>Mobile</span>
                </a>
              </li>      
            </ul>
          </li>
          <li ng-class="{active:$state.includes('app.ui')}">
            <a href class="auto">
              <span class="pull-right text-muted">
                <i class="fa fa-fw fa-angle-right text"></i>
                <i class="fa fa-fw fa-angle-down text-active"></i>
              </span>
              <i class="glyphicon glyphicon-briefcase icon"></i>
              <span translate="aside.nav.components.ui_kits.UI_KITS">UI Kits</span>
            </a>
            <ul class="nav nav-sub dk">
              <li class="nav-sub-header">
                <a href>
                  <span translate="aside.nav.components.ui_kits.UI_KITS">UI Kits</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.ui.buttons">
                  <span translate="aside.nav.components.ui_kits.BUTTONS">Buttons</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.ui.icons">
                  <b class="badge bg-info pull-right">3</b>
                  <span translate="aside.nav.components.ui_kits.ICONS">Icons</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.ui.grid">
                  <span translate="aside.nav.components.ui_kits.GRID">Grid</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.ui.widgets">
                  <b class="badge bg-success pull-right">13</b>
                  <span translate="aside.nav.WIDGETS">Widgets</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.ui.bootstrap">
                  <b class="badge bg-primary pull-right">16</b>
                  <span translate="aside.nav.components.ui_kits.BOOTSTRAP">Bootstrap</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.ui.sortable">
                  <span translate="aside.nav.components.ui_kits.SORTABLE">Sortable</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.ui.portlet">
                  <span translate="aside.nav.components.ui_kits.PORTLET">Portlet</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.ui.timeline">
                  <span translate="aside.nav.components.ui_kits.TIMELINE">Timeline</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.ui.tree">
                  <span>Tree</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.ui.toaster">
                  <span>Toaster</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.ui.jvectormap">
                  <span translate="aside.nav.components.ui_kits.VECTOR_MAP">Vector Map</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.ui.googlemap">
                  <span>Google Map</span>
                </a>
              </li>
            </ul>
          </li>
          <li ng-class="{active:$state.includes('app.table')}">
            <a href class="auto">
              <span class="pull-right text-muted">
                <i class="fa fa-fw fa-angle-right text"></i>
                <i class="fa fa-fw fa-angle-down text-active"></i>
              </span>
              <b class="label bg-primary pull-right">2</b>
              <i class="glyphicon glyphicon-list"></i>
              <span translate="aside.nav.components.table.TABLE">Table</span>
            </a>
            <ul class="nav nav-sub dk">
              <li class="nav-sub-header">
                <a href>
                  <span translate="aside.nav.components.table.TABLE">Table</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.table.static">
                  <span translate="aside.nav.components.table.TABLE_STATIC">Table static</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.table.datatable">
                  <span translate="aside.nav.components.table.DATATABLE">Datatable</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.table.footable">
                  <span translate="aside.nav.components.table.FOOTABLE">Footable</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.table.grid">
                  <span>ngGrid</span>
                </a>
              </li>
            </ul>
          </li>
          <li ng-class="{active:$state.includes('app.form')}">
            <a href class="auto">
              <span class="pull-right text-muted">
                <i class="fa fa-fw fa-angle-right text"></i>
                <i class="fa fa-fw fa-angle-down text-active"></i>
              </span>
              <i class="glyphicon glyphicon-edit"></i>
              <span translate="aside.nav.components.form.FORM">Form</span>
            </a>
            <ul class="nav nav-sub dk">
              <li class="nav-sub-header">
                <a href>
                  <span translate="aside.nav.components.form.FORM">Form</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.form.elements">
                  <span translate="aside.nav.components.form.FORM_ELEMENTS">Form elements</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.form.validation">
                  <span translate="aside.nav.components.form.FORM_VALIDATION">Form validation</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.form.wizard">
                  <span translate="aside.nav.components.form.FORM_WIZARD">Form wizard</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.form.fileupload">
                  <span>File upload</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.form.imagecrop">
                  <span>Image crop</span>
                </a>
              </li>
            </ul>
          </li>
          <li ui-sref-active="active">
            <a ui-sref="app.chart">
              <i class="glyphicon glyphicon-signal"></i>
              <span translate="aside.nav.components.CHART">Chart</span>
            </a>
          </li>
          <li ng-class="{active:$state.includes('app.page')}">
            <a href class="auto">
              <span class="pull-right text-muted">
                <i class="fa fa-fw fa-angle-right text"></i>
                <i class="fa fa-fw fa-angle-down text-active"></i>
              </span>
              <i class="glyphicon glyphicon-file icon"></i>
              <span translate="aside.nav.components.pages.PAGES">Pages</span>
            </a>
            <ul class="nav nav-sub dk">
              <li class="nav-sub-header">
                <a href>
                  <span translate="aside.nav.components.pages.PAGES">Pages</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.page.profile">
                  <span translate="aside.nav.components.pages.PROFILE">Profile</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.page.post">
                  <span translate="aside.nav.components.pages.POST">Post</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.page.search">
                  <span translate="aside.nav.components.pages.SEARCH">Search</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.page.invoice">
                  <span translate="aside.nav.components.pages.INVOICE">Invoice</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.page.price">
                  <span>Price</span>
                </a>
              </li>
              <li>
                <a ui-sref="lockme">
                  <span translate="aside.nav.components.pages.LOCK_SCREEN">Lock screen</span>
                </a>
              </li>
              <li>
                <a ui-sref="access.signin">
                  <span translate="aside.nav.components.pages.SIGNIN">Signin</span>
                </a>
              </li>
              <li>
                <a ui-sref="access.signup">
                  <span translate="aside.nav.components.pages.SIGNUP">Signup</span>
                </a>
              </li>
              <li>
                <a ui-sref="access.forgotpwd">
                  <span translate="aside.nav.components.pages.FORGOT_PASSWORD">Forgot password</span>
                </a>
              </li>
              <li>
                <a ui-sref="access.404">
                  <span translate="aside.nav.components.pages.404">404</span>
                </a>
              </li>
            </ul>
          </li>
      
          <li class="line dk hidden-folded"></li>
      
          <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">          
            <span translate="aside.nav.your_stuff.YOUR_STUFF">Your Stuff</span>
          </li>  
          <li>
            <a ui-sref="app.page.profile">
              <i class="icon-user icon text-success-lter"></i>
              <b class="badge bg-success pull-right">30%</b>
              <span translate="aside.nav.your_stuff.PROFILE">Profile</span>
            </a>
          </li>
          <li>
            <a ui-sref="app.docs">
              <i class="icon-question icon"></i>
              <span translate="aside.nav.your_stuff.DOCUMENTS">Documents</span>
            </a>
          </li>
        </ul>
      </nav>
           <!-- aside footer -->
      <div class="wrapper m-t">
     <!--    <div class="text-center-folded">
          <span class="pull-right pull-none-folded">60%</span>
          <span class="hidden-folded" translate="aside.MILESTONE">Milestone</span>
        </div> -->
      <!--   <div class="progress progress-xxs m-t-sm dk">
          <div class="progress-bar progress-bar-info" style="width: 60%;">
          </div>
        </div> -->
       <!--  <div class="text-center-folded">
          <span class="pull-right pull-none-folded">35%</span>
          <span class="hidden-folded" translate="aside.RELEASE">Release</span>
        </div>
        <div class="progress progress-xxs m-t-sm dk">
          <div class="progress-bar progress-bar-primary" style="width: 35%;">
          </div>
        </div> -->
      </div>
     </div>
  </div>
</div>
      <!--/ aside footer -->
    <!-- /left -->
    <!-- / menu -->
    <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
          <div class="hbox hbox-auto-xs hbox-auto-sm">
            <div class="col">
              <div style="background:url(../../../public/images/bg4.png) center center; background-size:cover">
               <div class="wrapper-lg bg-white-opacity">
                 <div class="row m-t">
                   <div class="col-sm-12">
                     <div class="clear m-b">  
                      <div class="col-sm-12" >
                      <a href class="thumb-lg pull-left m-r col-md-4">
                       <img src="/tp2018.4.24test/Public/txphoto/<?php echo ($userphoto); ?>"  >
                     </a>
                      <div class="m-b m-t-sm" >
                         <span class="h2 text-black"><?php echo ($_SESSION['username']); ?></span>
                         <small class="m-l">London, UK</small><br><br><br>
                       </div> 
                        <div class="panel panel-default">
                          <div class="panel-heading font-bold">用户信息</div>
                          <div class="panel-body">
                          <form class="bs-example form-horizontal" method="post" action="/tp2018.4.24test/index.php/Home/Index/xguserdata" >
                         
                            <div class="form-group">
                              <label class="col-lg-2 control-label">密码：</label>
                              <div class="col-lg-10">
                                <span class="help-block m-b-none"><?php echo ($username); ?></span>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">性别：</label>
                              <div class="col-lg-10">
                                 <span class="help-block m-b-none"><?php echo ($usersex); ?></span>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">电话号码：</label>
                              <div class="col-lg-10">
                                <span class="help-block m-b-none"><?php echo ($usertel); ?></span>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">爱好：</label>
                              <div class="col-lg-10">
                                <textarea class="form-control" rows="6" placeholder="Type your message" disabled><?php echo ($useraihao); ?></textarea>
                              </div>
                            </div>
                           
                            <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-sm btn-info" name="xg">修改用户信息</button></a>
                              </div>
                            </div>
                          </form>
                        </div>
                        </div>
                      </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
              <div class="wrapper bg-white b-b">
                <ul class="nav nav-pills nav-sm">
                  <li class="active"><a href>Stream</a></li>
                  <li><a href>Profile</a></li>
                  <li><a href>Messages</a></li>
                </ul>
              </div>

            <!--   <div class="padder">      
             <div class="streamline b-l b-info m-l-lg m-b padder-v">
               <div>
                 <a class="pull-left thumb-sm avatar m-l-n-md">
                   <img src="/tp2018.4.24test/Public/images/a9.jpg" class="img-circle" alt="...">
                 </a>
                 <div class="m-l-lg">
                   <div class="m-b-xs">
                     <a href class="h4">John smith</a>
                     <span class="text-muted m-l-sm pull-right">
                       Just now
                     </span>
                   </div>
                   <div class="m-b">
                     <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. ullamcorper sodales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin </div>
                     <div class="m-t-sm">
                       <a href class="text-muted m-xs"><i class="icon-action-redo"></i></a>
                       <a href class="text-muted m-xs"><i class="icon-star"></i></a>
                       <a href class="text-muted m-xs"><i class="icon-refresh"></i> 13</a>
                     </div>
                   </div>
                 </div>
               </div>
               .comment-reply
               <div class="m-l-lg">
                 <a class="pull-left thumb-sm avatar">
                   <img src="/tp2018.4.24test/Public/images/a5.jpg" alt="...">
                 </a>          
                 <div class="m-l-xxl panel b-a">
                   <div class="panel-heading pos-rlt">
                     <span class="arrow left pull-up"></span>
                     <span class="text-muted m-l-sm pull-right">
                       10m ago
                     </span>
                     <a href>Mika Sam</a>
                     Report this comment is helpful                           
                   </div>
                 </div>
               </div>
               / .comment-reply
               <div>
                 <a class="pull-left thumb-sm avatar m-l-n-md">
                   <img src="/tp2018.4.24test/Public/images/a3.jpg" alt="...">
                 </a>          
                 <div class="m-l-lg m-b-lg panel b-a bg-light lt">
                   <div class="panel-heading pos-rlt b-light">
                     <span class="arrow arrow-light left"></span>                    
                     <a href>By me</a>
                     <span class="text-muted m-l-sm pull-right">
                       1h ago
                     </span>
                   </div>
                   <div class="panel-body">
                     <div>This comment was posted by you.</div>
                   </div>
                 </div>
               </div>
               <div>
                 <a class="pull-left thumb-sm avatar m-l-n-md">
                   <img src="/tp2018.4.24test/Public/images/a6.jpg" class="img-circle" alt="...">
                 </a>
                 <div class="m-l-lg m-b-lg">
                   <div class="m-b-xs">
                     <a href class="h4">Jessica</a>
                     <span class="text-muted m-l-sm pull-right">
                       3h ago
                     </span>
                   </div>
                   <div class="m-b">
                     <div class="m-b">Cecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. ullamcorper sodales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin </div>
                     <img src="/tp2018.4.24test/Public/images/c5.jpg" class="b b-a wrapper-xs bg-white img-responsive">
                     <div class="m-t-sm">
                       <a href class="text-muted m-xs"><i class="icon-action-redo"></i></a>
                       <a href class="text-muted m-xs"><i class="icon-star"></i></a>
                       <a href class="text-muted m-xs"><i class="icon-refresh"></i> 13</a>
                     </div>
                   </div>
                 </div>
               </div>
               <div>
                 <a class="pull-left thumb-sm avatar m-l-n-md">
                   <img src="/tp2018.4.24test/Public/images/a4.jpg" class="img-circle" alt="...">
                 </a>
                 <div class="m-l-lg m-b-lg">
                   <div class="m-b-xs">
                     <a href class="h4">Fisio</a>
                     <span class="text-muted m-l-sm pull-right">
                       4h ago
                     </span>
                   </div>
                   <div>
                     <div class="m-b">Diam nonummy nibh euismod tincidunt ut laoreet. ullamcorper sodales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin </div>
                     <div class="panel panel-default m-t-md m-b-n-sm pos-rlt">
                       <form>
                         <textarea class="form-control no-border" rows="3" placeholder="Your comment..."></textarea>
                       </form>
                       <div class="panel-footer bg-light lter">
                         <button class="btn btn-info pull-right btn-sm">Comment</button>
                         <ul class="nav nav-pills nav-sm">
                           <li><a href><i class="fa fa-camera text-muted"></i></a></li>
                           <li><a href><i class="fa fa-video-camera text-muted"></i></a></li>
                         </ul>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div>
                 <a class="pull-left thumb-sm avatar m-l-n-md">
                   <img src="/tp2018.4.24test/Public/images/a2.jpg" alt="...">
                 </a>          
                 <div class="m-l-lg panel b-a">
                   <div class="panel-heading pos-rlt b-b b-light">
                     <span class="arrow left"></span>
                     <a href>Peter</a>
                     <label class="label bg-light m-l-xs">VIP</label> 
                     <span class="text-muted m-l-sm pull-right">
                       9h ago
                     </span>
                   </div>
                   <div class="panel-body">
                     <blockquote>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                       <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                     </blockquote>
                     <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit...</div>
                   </div>
                 </div>
               </div>
             </div>
                         </div> -->

            </div>
            <div class="col w-lg bg-light lter b-l bg-auto">
            <!-- right -->

              <div class="wrapper">
               <div class="">
                 <h4 class="m-t-xs m-b-xs">Who to follow</h4>
                 <ul class="list-group no-bg no-borders pull-in">
                   <li class="list-group-item">
                     <a herf class="pull-left thumb-sm avatar m-r">
                       <img src="/tp2018.4.24test/Public/images/a4.jpg" alt="..." class="img-circle">
                       <i class="on b-white bottom"></i>
                     </a>
                     <div class="clear">
                       <div><a href>Chris Fox</a></div>
                       <small class="text-muted">Designer, Blogger</small>
                     </div>
                   </li>
                   <li class="list-group-item">
                     <a herf class="pull-left thumb-sm avatar m-r">
                       <img src="/tp2018.4.24test/Public/images/a5.jpg" alt="..." class="img-circle">
                       <i class="on b-white bottom"></i>
                     </a>
                     <div class="clear">
                       <div><a href>Mogen Polish</a></div>
                       <small class="text-muted">Writter, Mag Editor</small>
                     </div>
                   </li>
                   <li class="list-group-item">
                     <a herf class="pull-left thumb-sm avatar m-r">
                       <img src="/tp2018.4.24test/Public/images/a6.jpg" alt="..." class="img-circle">
                       <i class="busy b-white bottom"></i>
                     </a>
                     <div class="clear">
                       <div><a href>Joge Lucky</a></div>
                       <small class="text-muted">Art director, Movie Cut</small>
                     </div>
                   </li>
                   <li class="list-group-item">
                     <a herf class="pull-left thumb-sm avatar m-r">
                       <img src="/tp2018.4.24test/Public/images/a7.jpg" alt="..." class="img-circle">
                       <i class="away b-white bottom"></i>
                     </a>
                     <div class="clear">
                       <div><a href>Folisise Chosielie</a></div>
                       <small class="text-muted">Musician, Player</small>
                     </div>
                   </li>
                 </ul>
               </div>
               <div class="panel b-a">
                 <h4 class="font-thin padder">Latest Tweets</h4>
                 <ul class="list-group">
                   <li class="list-group-item">
                       <p>Wellcome <a href class="text-info">@Drew Wllon</a> and play this web application template, have fun1 </p>
                       <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 2 minuts ago</small>
                   </li>
                   <li class="list-group-item">
                       <p>Morbi nec <a href class="text-info">@Jonathan George</a> nunc condimentum ipsum dolor sit amet, consectetur</p>
                       <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 1 hour ago</small>
                   </li>
                   <li class="list-group-item">                     
                       <p><a href class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
                       <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 2 hours ago</small>
                   </li>
                 </ul>
               </div>
               <div class="panel b-light clearfix">
                 <div class="panel-body">
                   <a href class="thumb pull-left m-r">
                     <img src="/tp2018.4.24test/Public/images/a0.jpg" class="img-circle">
                   </a>
                   <div class="clear">
                     <a href class="text-info">@Mike Mcalidek <i class="fa fa-twitter"></i></a>
                     <small class="block text-muted">2,415 followers / 225 tweets</small>
                     <a href class="btn btn-xs btn-success m-t-xs">Follow</a>
                   </div>
                 </div>
               </div>
             </div>
            <!-- /right -->
            </div>
          </div>
        <!-- PASTE above -->
      </div>
    </div>
    <!-- /content -->

    <!-- aside right -->
    <div class="app-aside-right pos-fix no-padder w-md w-auto-xs bg-white b-l animated fadeInRight hide">
      <div class="vbox">
        <div class="wrapper b-b b-t b-light m-b">
          <a href class="pull-right text-muted text-md" data-toggle="class:show" data-target=".app-aside-right"><i class="icon-close"></i></a>
          Chat
        </div>
        <div class="row-row">
          <div class="cell">
            <div class="cell-inner padder">
              <!-- chat list -->
              <div class="m-b">
                <a href class="pull-left thumb-xs avatar"><img src="/tp2018.4.24test/Public/images/a2.jpg" alt="..."></a>
                <div class="clear">
                  <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                    <span class="arrow left pull-up"></span>
                    <p class="m-b-none">Hi John, What's up...</p>
                  </div>
                  <small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i> 2 minutes ago</small>
                </div>
              </div>
              <div class="m-b">
                <a href class="pull-right thumb-xs avatar"><img src="/tp2018.4.24test/Public/images/a3.jpg" class="img-circle" alt="..."></a>
                <div class="clear">
                  <div class="pos-rlt wrapper-sm bg-light r m-r-sm">
                    <span class="arrow right pull-up arrow-light"></span>
                    <p class="m-b-none">Lorem ipsum dolor :)</p>
                  </div>
                  <small class="text-muted">1 minutes ago</small>
                </div>
              </div>
              <div class="m-b">
                <a href class="pull-left thumb-xs avatar"><img src="/tp2018.4.24test/Public/images/a2.jpg" alt="..."></a>
                <div class="clear">
                  <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                    <span class="arrow left pull-up"></span>
                    <p class="m-b-none">Great!</p>
                  </div>
                  <small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i>Just Now</small>
                </div>
              </div>
              <!-- / chat list -->
            </div>
          </div>
        </div>
        <div class="wrapper m-t b-t b-light">
          <form class="m-b-none">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Say something">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">SEND</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- / aside right -->

    <!-- footer -->
           <div class="app-footer wrapper b-t bg-light">

      <span class="pull-right">点我上去>><a href="" class="m-l-sm text-muted"><i class="glyphicon glyphicon-hand-up"></i></a></span>
      &copy; 2018 Copyright. More Templates <a href="http://www.laucher.com/" target="_blank" title="LAUCEHR">LAUCEHR</a> - Collect from <a href="http://www.laucehr.com/" title="LAUCEHR" target="_blank">LACUEHR</a>
 </div>

       <!-- / footer -->
  </div>
  <!-- jQuery -->
  <script src="/tp2018.4.24test/Public/vendor/jquery/jquery.min.js"></script>
  <script src="/tp2018.4.24test/Public/vendor/jquery/bootstrap.js"></script>
  <script type="text/javascript">
    +function ($) {
      $(function(){
        // class
        $(document).on('click', '[data-toggle^="class"]', function(e){
          e && e.preventDefault();
          console.log('abc');
          var $this = $(e.target), $class , $target, $tmp, $classes, $targets;
          !$this.data('toggle') && ($this = $this.closest('[data-toggle^="class"]'));
          $class = $this.data()['toggle'];
          $target = $this.data('target') || $this.attr('href');
          $class && ($tmp = $class.split(':')[1]) && ($classes = $tmp.split(','));
          $target && ($targets = $target.split(','));
          $classes && $classes.length && $.each($targets, function( index, value ) {
            if ( $classes[index].indexOf( '*' ) !== -1 ) {
              var patt = new RegExp( '\\s' + 
                  $classes[index].
                    replace( /\*/g, '[A-Za-z0-9-_]+' ).
                    split( ' ' ).
                    join( '\\s|\\s' ) + 
                  '\\s', 'g' );
              $($this).each( function ( i, it ) {
                var cn = ' ' + it.className + ' ';
                while ( patt.test( cn ) ) {
                  cn = cn.replace( patt, ' ' );
                }
                it.className = $.trim( cn );
              });
            }
            ($targets[index] !='#') && $($targets[index]).toggleClass($classes[index]) || $this.toggleClass($classes[index]);
          });
          $this.toggleClass('active');
        });

        // collapse nav
        $(document).on('click', 'nav a', function (e) {
          var $this = $(e.target), $active;
          $this.is('a') || ($this = $this.closest('a'));
          
          $active = $this.parent().siblings( ".active" );
          $active && $active.toggleClass('active').find('> ul:visible').slideUp(200);
          
          ($this.parent().hasClass('active') && $this.next().slideUp(200)) || $this.next().slideDown(200);
          $this.parent().toggleClass('active');
          
          $this.next().is('ul') && e.preventDefault();

          setTimeout(function(){ $(document).trigger('updateNav'); }, 300);      
        });
      });
    }(jQuery);
  </script>
</body>
</html>