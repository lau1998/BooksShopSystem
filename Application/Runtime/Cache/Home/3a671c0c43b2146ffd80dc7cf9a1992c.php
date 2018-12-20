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
 <!--   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Form Elements</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">Basic form</div>
        <div class="panel-body">
          <form role="form">
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="checkbox">
              <label class="i-checks">
                <input type="checkbox" checked disabled><i></i> Check me out
              </label>
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">Horizontal form</div>
        <div class="panel-body">
          <form class="bs-example form-horizontal">
            <div class="form-group">
              <label class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input type="email" class="form-control" placeholder="Email">
                <span class="help-block m-b-none">Example block-level help text here.</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
                <input type="password" class="form-control" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <div class="checkbox">
                  <label class="i-checks">
                    <input type="checkbox" checked><i></i> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button type="submit" class="btn btn-sm btn-info">Sign in</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading font-bold">                  
      Inline form
    </div>
    <div class="panel-body">
      <form class="form-inline" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox m-l m-r-xs">
          <label class="i-checks">
            <input type="checkbox"><i></i> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-default">Sign in</button>
        <span ng-controller="ModalDemoCtrl">
          <script type="text/ng-template" id="myModalContent.html">
            <div ng-include="'tpl/modal.form.html'"></div>
          </script>
          <button class="btn btn-success" ng-click="open('lg')">Form in a modal</button>
        </span>
      </form>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
      Form elements
    </div>
    <div class="panel-body">
      <form class="form-horizontal" method="get">
        <div class="form-group">
          <label class="col-sm-2 control-label">Rounded</label>
          <div class="col-sm-10">
            <input type="text" class="form-control rounded">                        
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">With help</label>
          <div class="col-sm-10">
            <input type="text" class="form-control">
            <span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Label focus</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="input-id-1">
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="password" class="form-control">
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Placeholder</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" placeholder="placeholder">
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Disabled</label>
          <div class="col-lg-10">
            <input class="form-control" type="text" placeholder="Disabled input here..." disabled>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Static control</label>
          <div class="col-lg-10">
            <p class="form-control-static">email@example.com</p>
          </div>
        </div>                    
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Checkboxes and radios</label>
          <div class="col-sm-10">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="">
                Option one is this and that&mdash;be sure to include why it's great
              </label>
            </div>

            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                Option one is this and that&mdash;be sure to include why it's great
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Option two can be something else and selecting it will deselect option one
              </label>
            </div>
          </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Inline checkboxes</label>
          <div class="col-sm-10">
            <label class="checkbox-inline">
              <input type="checkbox" value="option1"> a
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" value="option2"> b
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" value="option3"> c
            </label>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">CSS3 Checkboxes & radios</label>
          <div class="col-sm-10">
            <div class="checkbox">
              <label class="i-checks">
                <input type="checkbox" value="">
                <i></i>
                Option one
              </label>
            </div>
            <div class="checkbox">
              <label class="i-checks">
                <input type="checkbox" checked value="">
                <i></i>
                Option two checked
              </label>
            </div>
            <div class="checkbox">
              <label class="i-checks">
                <input type="checkbox" checked disabled value="">
                <i></i>
                Option three checked and disabled
              </label>
            </div>
            <div class="checkbox">
              <label class="i-checks">
                <input type="checkbox" disabled value="">
                <i></i>
                Option four disabled
              </label>
            </div>
            <div class="radio">
              <label class="i-checks">
                <input type="radio" name="a" value="option1">
                <i></i>
                Option one
              </label>
            </div>
            <div class="radio">
              <label class="i-checks">
                <input type="radio" name="a" value="option2" checked>
                <i></i>
                Option two checked
              </label>
            </div>
            <div class="radio">
              <label class="i-checks">
                <input type="radio" value="option2" checked disabled>
                <i></i>
                Option three checked and disabled
              </label>
            </div>
            <div class="radio">
              <label class="i-checks">
                <input type="radio" name="a" disabled>
                <i></i>
                Option four disabled
              </label>
            </div>

            <div class="radio">
              <label class="i-checks i-checks-sm">
                <input type="radio" name="a">
                <i></i>
                Small size radio
              </label>
            </div>
            <div class="checkbox">
              <label class="i-checks i-checks-sm">
                <input type="checkbox">
                <i></i>
                Small size checkbox
              </label>
            </div>
            <div class="m-b-xs m-t">
              <label class="i-checks i-checks-lg">
                <input type="radio" name="a">
                <i></i>
                Large size radio
              </label>
            </div>
            <div class="checkbox">
              <label class="i-checks i-checks-lg">
                <input type="checkbox">
                <i></i>
                Large size checkbox
              </label>
            </div>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Inline checkboxes</label>
          <div class="col-sm-10">
            <label class="checkbox-inline i-checks">
              <input type="checkbox" value="option1"><i></i> a
            </label>
            <label class="checkbox-inline i-checks">
              <input type="checkbox" value="option2"><i></i> b
            </label>
            <label class="checkbox-inline i-checks">
              <input type="checkbox" value="option3"><i></i> c
            </label>
          </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Switch</label>
          <div class="col-sm-10">
            <label class="i-switch m-t-xs m-r">
              <input type="checkbox" checked>
              <i></i>
            </label>
            <label class="i-switch bg-info m-t-xs m-r">
              <input type="checkbox" checked>
              <i></i>
            </label>
            <label class="i-switch bg-primary m-t-xs m-r">
              <input type="checkbox" checked>
              <i></i>
            </label>
            <label class="i-switch bg-danger m-t-xs m-r">
              <input type="checkbox" checked>
              <i></i>
            </label>
          </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Radio Switch</label>
          <div class="col-sm-10">
            <label class="i-switch bg-primary m-t-xs m-r">
              <input type="radio" name='switch' checked>
              <i></i>
            </label>
            <label class="i-switch bg-warning m-t-xs m-r">
              <input type="radio" name='switch'>
              <i></i>
            </label>
          </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Switch size</label>
          <div class="col-sm-10">
            <label class="i-switch i-switch-md bg-info m-t-xs m-r">
              <input type="checkbox" checked>
              <i></i>
            </label>
            <label class="i-switch i-switch-lg bg-dark m-t-xs m-r">
              <input type="checkbox" >
              <i></i>
            </label>
          </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Select</label>
          <div class="col-sm-10">
            <select name="account" class="form-control m-b">
              <option>option 1</option>
              <option>option 2</option>
              <option>option 3</option>
              <option>option 4</option>
            </select>
            <div class="col-lg-4 m-l-n">
              <select multiple class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
              </select>
            </div>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group has-success">
          <label class="col-sm-2 control-label">Input with success</label>
          <div class="col-sm-10">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group has-warning">
          <label class="col-sm-2 control-label">Input with warning</label>
          <div class="col-sm-10">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group has-error">
          <label class="col-sm-2 control-label">Input with error</label>
          <div class="col-sm-10">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Control sizing</label>
          <div class="col-sm-10">
            <input class="form-control input-lg m-b" type="text" placeholder=".input-lg">
            <input class="form-control m-b" type="text" placeholder="Default input">
            <input class="form-control input-sm" type="text" placeholder=".input-sm">
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Column sizing</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-md-2">
                <input type="text" class="form-control" placeholder=".col-md-2">
              </div>
              <div class="col-md-3">
                <input type="text" class="form-control" placeholder=".col-md-3">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" placeholder=".col-md-4">
              </div>
            </div>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Input groups</label>
          <div class="col-sm-10">
            <div class="input-group m-b">
              <span class="input-group-addon">@</span>
              <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="input-group m-b">
              <input type="text" class="form-control">
              <span class="input-group-addon">.00</span>
            </div>
            <div class="input-group m-b">
              <span class="input-group-addon">$</span>
              <input type="text" class="form-control">
              <span class="input-group-addon">.00</span>
            </div>
            <div class="input-group m-b">
              <span class="input-group-addon">
                <input type="checkbox">
              </span>
              <input type="text" class="form-control">
            </div>
            <div class="input-group">
              <span class="input-group-addon">
                <input type="radio">
              </span>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Button addons</label>
          <div class="col-sm-10">
            <div class="input-group m-b">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
              <input type="text" class="form-control">
            </div>
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">With dropdowns</label>
          <div class="col-sm-10">
            <div class="input-group m-b">
              <div class="input-group-btn dropdown" dropdown>
                <button type="button" class="btn btn-default" dropdown-toggle>Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href>Action</a></li>
                  <li><a href>Another action</a></li>
                  <li><a href>Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href>Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <input type="text" class="form-control">
            </div>
            <div class="input-group">
              <input type="text" class="form-control">
              <div class="input-group-btn dropdown" dropdown>
                <button type="button" class="btn btn-default" dropdown-toggle>Action <span class="caret"></span></button>
                <ul class="dropdown-menu pull-right">
                  <li><a href>Action</a></li>
                  <li><a href>Another action</a></li>
                  <li><a href>Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href>Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
            </div>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Segmented</label>
          <div class="col-sm-10">
            <div class="input-group m-b">
              <div class="input-group-btn dropdown" dropdown>
                <button type="button" class="btn btn-default" tabindex="-1">Action</button>
                <button type="button" class="btn btn-default" dropdown-toggle><span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href>Action</a></li>
                  <li><a href>Another action</a></li>
                  <li><a href>Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href>Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <input type="text" class="form-control">
            </div>
            <div class="input-group">
              <input type="text" class="form-control">
              <div class="input-group-btn dropdown" dropdown>
                <button type="button" class="btn btn-default" tabindex="-1">Action</button>
                <button type="button" class="btn btn-default" dropdown-toggle><span class="caret"></span></button>
                <ul class="dropdown-menu pull-right">
                  <li><a href>Action</a></li>
                  <li><a href>Another action</a></li>
                  <li><a href>Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href>Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
            </div>
          </div>
        </div>
        
        
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Button radio</label>
          <div class="col-sm-10">
            <div class="btn-group m-r" ng-controller="ButtonsDemoCtrl" >
              <label class="btn btn-default" ng-model="radioModel" btn-radio="'Left'" uncheckable>Left</label>
              <label class="btn btn-default" ng-model="radioModel" btn-radio="'Middle'" uncheckable>Middle</label>
              <label class="btn btn-default" ng-model="radioModel" btn-radio="'Right'" uncheckable>Right</label>
            </div>
          </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Button checkbox</label>
          <div class="col-sm-10">
            <div class="btn-group">
                <label class="btn btn-default" ng-model="checkModel.left" btn-checkbox>Left</label>
                <label class="btn btn-default" ng-model="checkModel.middle" btn-checkbox>Middle</label>
                <label class="btn btn-default" ng-model="checkModel.right" btn-checkbox>Right</label>
            </div>
          </div>          
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Slider</label>
          <div class="col-sm-10">
            <input id="slider" ui-jq="slider" ui-options="{
              min: 0,
              max: 20,
              step: 1,
              value: {{val}}
            }" class="slider slider-horizontal form-control" type="text"> {{val}}
          </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Vertical slider</label>
          <div class="col-sm-10">
            <input ui-jq="slider" class="slider slider-vertical form-control" type="text" value="" data-slider-min="5" data-slider-max="20" data-slider-step="1" data-slider-value="11" data-slider-orientation="vertical">
            <input ui-jq="slider" class="slider slider-vertical form-control" type="text" value="" data-slider-min="5" data-slider-max="20" data-slider-step="1" data-slider-value="15" data-slider-orientation="vertical">
            <input ui-jq="slider" class="slider slider-vertical form-control" type="text" value="" data-slider-min="5" data-slider-max="20" data-slider-step="1" data-slider-value="12" data-slider-orientation="vertical">
          </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Range selector</label>
          <div class="col-sm-10">
            <input type="text" ui-jq="slider" class="slider form-control" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,750]" >
          </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Spinner</label>
          <div class="col-sm-10">
            <div class="m-b">
              <input ui-jq="TouchSpin" type="text" value="0" class="form-control" data-min='0' data-max="10" data-step="0.1" data-decimals="2" data-prefix="$">
            </div>
            <div class="m-b">
              <input ui-jq="TouchSpin" type="text" value="5" class="form-control" data-min='0' data-max="10" data-step="0.1" data-decimals="2" data-postfix="%">
            </div>
            <div>
              <input ui-jq="TouchSpin" type="text" value="10" class="form-control" data-min='0' data-max="20" data-verticalbuttons="true" data-verticalupclass="fa fa-caret-up"  data-verticaldownclass="fa fa-caret-down">
            </div>
          </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Chosen</label>
          <div class="col-sm-10">
            <select ui-jq="chosen" class="w-md">
                <optgroup label="Alaskan/Hawaiian Time Zone">
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                </optgroup>
                <optgroup label="Pacific Time Zone">
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                </optgroup>
                <optgroup label="Mountain Time Zone">
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MT">Montana</option><option value="NE">Nebraska</option>
                    <option value="NM">New Mexico</option>
                    <option value="ND">North Dakota</option>
                    <option value="UT">Utah</option>
                    <option value="WY">Wyoming</option>
                </optgroup>
                <optgroup label="Central Time Zone">
                    <option value="AL">Alabama</option>
                    <option value="AR">Arkansas</option>
                    <option value="IL">Illinois</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="OK">Oklahoma</option>
                    <option value="SD">South Dakota</option>
                    <option value="TX">Texas</option>
                    <option value="TN">Tennessee</option>
                    <option value="WI">Wisconsin</option>
                </optgroup>
                <optgroup label="Eastern Time Zone">
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="IN">Indiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="OH">Ohio</option>
                    <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                    <option value="VT">Vermont</option><option value="VA">Virginia</option>
                    <option value="WV">West Virginia</option>
                </optgroup>
            </select>
          </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Chosen multiple</label>
          <div class="col-sm-10">
            <select ui-jq="chosen" multiple class="w-md">
              <option value="AK">Alaska</option>
              <option value="HI">Hawaii</option>
              <option value="CA">California</option>
              <option value="NV">Nevada</option>
              <option value="OR">Oregon</option>
              <option value="WA">Washington</option>
            </select>
          </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Datepicker</label>
          <div class="col-sm-10" ng-controller="DatepickerDemoCtrl">
            <div class="input-group w-md">
              <input type="text" class="form-control" datepicker-popup="{{format}}" ng-model="dt" is-open="opened" datepicker-options="dateOptions" ng-required="true" close-text="Close" />
              <span class="input-group-btn">
                <button type="button" class="btn btn-default" ng-click="open($event)"><i class="glyphicon glyphicon-calendar"></i></button>
              </span>
            </div>
          </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">File input</label>
          <div class="col-sm-10">
            <input ui-jq="filestyle" type="file" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s">
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Wysiwyg</label>
          <div class="col-sm-10">
            <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor">
              <div class="btn-group dropdown" dropdown>
                <a class="btn btn-default" dropdown-toggle tooltip="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href data-edit="fontName Serif" style="font-family:'Serif'">Serif</a></li> 
                  <li><a href data-edit="fontName Sans" style="font-family:'Sans'">Sans</a></li>
                  <li><a href data-edit="fontName Arial" style="font-family:'Arial'">Arial</a></li></ul>
              </div>
              <div class="btn-group dropdown" dropdown>
                <a class="btn btn-default" dropdown-toggle data-toggle="dropdown" tooltip="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href data-edit="fontSize 5" style="font-size:24px">Huge</a></li>
                  <li><a href data-edit="fontSize 3" style="font-size:18px">Normal</a></li>
                  <li><a href data-edit="fontSize 1" style="font-size:14px">Small</a></li>
                </ul>
              </div>
              <div class="btn-group">
                <a class="btn btn-default" data-edit="bold" tooltip="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                <a class="btn btn-default" data-edit="italic" tooltip="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                <a class="btn btn-default" data-edit="strikethrough" tooltip="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                <a class="btn btn-default" data-edit="underline" tooltip="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
              </div>
              <div class="btn-group">
                <a class="btn btn-default" data-edit="insertunorderedlist" tooltip="Bullet list"><i class="fa fa-list-ul"></i></a>
                <a class="btn btn-default" data-edit="insertorderedlist" tooltip="Number list"><i class="fa fa-list-ol"></i></a>
                <a class="btn btn-default" data-edit="outdent" tooltip="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                <a class="btn btn-default" data-edit="indent" tooltip="Indent (Tab)"><i class="fa fa-indent"></i></a>
              </div>
              <div class="btn-group">
                <a class="btn btn-default" data-edit="justifyleft" tooltip="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                <a class="btn btn-default" data-edit="justifycenter" tooltip="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                <a class="btn btn-default" data-edit="justifyright" tooltip="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                <a class="btn btn-default" data-edit="justifyfull" tooltip="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
              </div>
              <div class="btn-group dropdown" dropdown>
                <a class="btn btn-default" dropdown-toggle tooltip="Hyperlink"><i class="fa fa-link"></i></a>
                <div class="dropdown-menu">
                  <div class="input-group m-l-xs m-r-xs">
                    <input class="form-control input-sm" id="LinkInput" placeholder="URL" type="text" data-edit="createLink"/>
                    <div class="input-group-btn">
                      <button class="btn btn-sm btn-default" type="button">Add</button>
                    </div>
                  </div>
                </div>
                <a class="btn btn-default" data-edit="unlink" tooltip="Remove Hyperlink"><i class="fa fa-cut"></i></a>
              </div>
              
              <div class="btn-group">
                <a class="btn btn-default" tooltip="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                <input type="file" data-edit="insertImage" style="position:absolute; opacity:0; width:41px; height:34px" />
              </div>
              <div class="btn-group">
                <a class="btn btn-default" data-edit="undo" tooltip="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                <a class="btn btn-default" data-edit="redo" tooltip="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
              </div>
            </div>
            <div ui-jq="wysiwyg" class="form-control" style="overflow:scroll;height:200px;max-height:200px">
              Go ahead&hellip;
            </div>
          </div>
        </div>
        
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <div class="col-sm-4 col-sm-offset-2">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
   <hr>
     <!-- navbar -->
  <div data-ng-include=" 'tpl/blocks/header.html' " class="app-header navbar">
  </div>
  <!-- / navbar -->

  <!-- menu -->
  <div data-ng-include=" 'tpl/blocks/aside.html' " class="app-aside hidden-xs {{app.settings.asideColor}}">
  </div>
  <!-- / menu -->

  <!-- content -->
  <div class="app-content">
    <div ui-butterbar></div>
    <a href class="off-screen-toggle hide" ui-toggle-class="off-screen" data-target=".app-aside" ></a>
    <div class="app-content-body fade-in-up" ui-view></div>
  </div>
  <!-- /content -->

  <!-- aside right -->
  <div class="app-aside-right pos-fix no-padder w-md w-auto-xs bg-white b-l animated fadeInRight hide">
    <div class="vbox">
      <div class="wrapper b-b b-t b-light m-b">
        <a href class="pull-right text-muted text-md" ui-toggle-class="show" target=".app-aside-right"><i class="icon-close"></i></a>
        Chat
      </div>
      <div class="row-row">
        <div class="cell">
          <div class="cell-inner padder">
            <!-- chat list -->
            <div class="m-b">
              <a href class="pull-left thumb-xs avatar"><img src="img/a2.jpg" alt="..."></a>
              <div class="clear">
                <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                  <span class="arrow left pull-up"></span>
                  <p class="m-b-none">Hi John, What's up...</p>
                </div>
                <small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i> 2 minutes ago</small>
              </div>
            </div>
            <div class="m-b">
              <a href class="pull-right thumb-xs avatar"><img src="img/a3.jpg" class="img-circle" alt="..."></a>
              <div class="clear">
                <div class="pos-rlt wrapper-sm bg-light r m-r-sm">
                  <span class="arrow right pull-up arrow-light"></span>
                  <p class="m-b-none">Lorem ipsum dolor :)</p>
                </div>
                <small class="text-muted">1 minutes ago</small>
              </div>
            </div>
            <div class="m-b">
              <a href class="pull-left thumb-xs avatar"><img src="img/a2.jpg" alt="..."></a>
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
    <span class="pull-right">{{app.version}} <a href ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
    &copy; 2014 Copyright.
  </div>
  <!-- / footer -->

  <div data-ng-include=" 'tpl/blocks/settings.html' " class="settings panel panel-default">
  </div>
   <hr>
   <div ng-controller="FullcalendarCtrl">
  <div class="wrapper-md bg-light b-b">
    <button type="button" class="btn btn-default btn-addon pull-right m-t-n-xs" ui-toggle-class="show" target="#aside">
      <i class="fa fa-bars"></i> List
    </button>
    <h1 class="m-n font-thin h3">Fullcalendar</h1>
  </div>
  <div class="hbox hbox-auto-xs hbox-auto-sm">
    <div class="col wrapper-md">
      <div class="clearfix m-b">
        <button type="button" tooltip="Double click on calendar day to create event" class="btn btn-sm btn-primary btn-addon" ng-click="addEvent()">
          <i class="fa fa-plus"></i>Add
        </button>
        <div class="pull-right">
          <button type="button" class="btn btn-sm btn-default" ng-click="today()">today</button>
          <div class="btn-group m-l-xs">
            <button class="btn btn-sm btn-default" ng-click="changeView('agendaDay')">Day</button>
            <button class="btn btn-sm btn-default" ng-click="changeView('agendaWeek')">Week</button>
            <button class="btn btn-sm btn-default" ng-click="changeView('month')">Month</button>
          </div>
        </div>
      </div>
      <div class="pos-rlt">
        <div class="fc-overlay">
          <div class="panel bg-white b-a pos-rlt">
            <span class="arrow"></span>
            <div class="h4 font-thin m-b-sm">{{event.title}}</div>
            <div class="line b-b b-light"></div>
            <div><i class="icon-calendar text-muted m-r-xs"></i> {{event.start | date:'medium'}}</div>
            <div class="ng-hide" ng-show='event.end'><i class="icon-clock text-muted m-r-xs"></i> {{event.end | date:'medium'}}</div>
            <div class="ng-hide" ng-show='event.location'><i class="icon-pointer text-muted m-r-xs"></i> {{event.location}}</div>
            <div class="m-t-sm">{{event.info}}</div>
            <div class="m-t-sm">{{event.url}}</div>
          </div>
        </div>
        <div class="calendar" ng-model="eventSources" config="uiConfig.calendar" ui-calendar="uiConfig.calendar"></div>
      </div>
    </div>
    <div class="col w-md w-auto-xs bg-light dk bg-auto b-l hide" id="aside">
      <div class="wrapper">
        <div ng-repeat="e in events" class="bg-white-only r r-2x m-b-xs wrapper-sm {{e.className[0]}}">          
          <input ng-model="e.title" class="form-control m-t-n-xs no-border no-padder no-bg">
          <a class="pull-right text-xs text-muted" ng-click="remove($index)"><i class="fa fa-trash-o"></i></a>
          <div class="text-xs text-muted">{{e.start | date:"MMM dd"}} - {{e.end | date:"MMM dd"}}</div>
        </div>
      </div>
    </div>
  </div>
</div>
   <hr>
   <div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
    app.settings.asideFolded = false; 
    app.settings.asideDock = false;
  ">
  <!-- main -->
  <div class="col">
    <!-- main header -->
    <div class="bg-light lter b-b wrapper-md">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3 text-black">Dashboard</h1>
          <small class="text-muted">Welcome to angulr application</small>
        </div>
        <div class="col-sm-6 text-right hidden-xs">
          <div class="inline m-r text-left">
            <div class="m-b-xs">1290 <span class="text-muted">items</span></div>
            <div ng-init="data1=[ 106,108,110,105,110,109,105,104,107,109,105,100,105,102,101,99,98 ]" 
              ui-jq="sparkline" 
              ui-options="{{data1}}, {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}" 
              class="sparkline inline">loading...
            </div>
          </div>
          <div class="inline text-left">
            <div class="m-b-xs">$30,000 <span class="text-muted">revenue</span></div>
            <div ng-init="data2=[ 105,102,106,107,105,104,101,99,98,109,105,100,108,110,105,110,109 ]" 
              ui-jq="sparkline" 
              ui-options="{{data2}}, {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}" 
              class="sparkline inline">loading...
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / main header -->
    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
      <!-- stats -->
      <div class="row">
        <div class="col-md-5">
          <div class="row row-sm text-center">
            <div class="col-xs-6">
              <div class="panel padder-v item">
                <div class="h1 text-info font-thin h1">521</div>
                <span class="text-muted text-xs">New items</span>
                <div class="top text-right w-full">
                  <i class="fa fa-caret-down text-warning m-r-sm"></i>
                </div>
              </div>
            </div>
            <div class="col-xs-6">
              <a href class="block panel padder-v bg-primary item">
                <span class="text-white font-thin h1 block">930</span>
                <span class="text-muted text-xs">Uploads</span>
                <span class="bottom text-right w-full">
                  <i class="fa fa-cloud-upload text-muted m-r-sm"></i>
                </span>
              </a>
            </div>
            <div class="col-xs-6">
              <a href class="block panel padder-v bg-info item">
                <span class="text-white font-thin h1 block">432</span>
                <span class="text-muted text-xs">Comments</span>
                <span class="top text-left">
                  <i class="fa fa-caret-up text-warning m-l-sm"></i>
                </span>
              </a>
            </div>
            <div class="col-xs-6">
              <div class="panel padder-v item">
                <div class="font-thin h1">129</div>
                <span class="text-muted text-xs">Feeds</span>
                <div class="bottom text-left">
                  <i class="fa fa-caret-up text-warning m-l-sm"></i>
                </div>
              </div>
            </div>
            <div class="col-xs-12 m-b-md">
              <div class="r bg-light dker item hbox no-border">
                <div class="col w-xs v-middle hidden-md">
                  <div ng-init="data1=[60,40]" ui-jq="sparkline" ui-options="{{data1}}, {type:'pie', height:40, sliceColors:['{{app.color.warning}}','#fff']}" class="sparkline inline"></div>
                </div>
                <div class="col dk padder-v r-r">
                  <div class="text-primary-dk font-thin h1"><span>$12,670</span></div>
                  <span class="text-muted text-xs">Revenue, 60% of the goal</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="panel wrapper">
            <label class="i-switch bg-warning pull-right" ng-init="showSpline=true">
              <input type="checkbox" ng-model="showSpline">
              <i></i>
            </label>
            <h4 class="font-thin m-t-none m-b text-muted">Latest Campaign</h4>
            <div ui-jq="plot" ui-refresh="showSpline" ui-options="
              [
                { data: {{d0_1}}, label:'TV', points: { show: true, radius: 1}, splines: { show: showSpline, tension: 0.4, lineWidth: 1, fill: 0.8 } },
                { data: {{d0_2}}, label:'Mag', points: { show: true, radius: 1}, splines: { show: showSpline, tension: 0.4, lineWidth: 1, fill: 0.8 } }
              ], 
              {
                colors: ['{{app.color.info}}', '{{app.color.primary}}'],
                series: { shadowSize: 3 },
                xaxis:{ font: { color: '#a1a7ac' } },
                yaxis:{ font: { color: '#a1a7ac' }, max:20 },
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
                tooltip: true,
                tooltipOpts: { content: 'Visits of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
              }
            " style="height:246px" >
            </div>
          </div>
        </div>
      </div>
      <!-- / stats -->

      <!-- service -->
      <div class="panel hbox hbox-auto-xs no-border">
        <div class="col wrapper">
          <i class="fa fa-circle-o text-info m-r-sm pull-right"></i>
          <h4 class="font-thin m-t-none m-b-none text-primary-lt">Managed Services</h4>
          <span class="m-b block text-sm text-muted">Service report of this year (updated 1 hour ago)</span>
          <div ui-jq="plot" ui-options="
            [
              { data: {{d4}}, lines: { show: true, lineWidth: 1, fill:true, fillColor: { colors: [{opacity: 0.2}, {opacity: 0.8}] } } }
            ], 
            {
              colors: ['{{app.color.light}}'],
              series: { shadowSize: 3 },
              xaxis:{ show:false },
              yaxis:{ font: { color: '#a1a7ac' } },
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
              tooltip: true,
              tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
            }
          " style="height:240px" >
          </div>
        </div>
        <div class="col wrapper-lg w-lg bg-light dk r-r">
          <h4 class="font-thin m-t-none m-b">Reports</h4>
          <div class="">
            <div class="">
              <span class="pull-right text-primary">60%</span>
              <span>Consulting</span>
            </div>
            <progressbar value="60" class="progress-xs m-t-sm bg-white" animate="true" type="primary"></progressbar>
            <div class="">
              <span class="pull-right text-info">35%</span>
              <span>Online tutorials</span>
            </div>
            <progressbar value="35" class="progress-xs m-t-sm bg-white" animate="true" type="info"></progressbar>
            <div class="">
              <span class="pull-right text-warning">25%</span>
              <span>EDU management</span>
            </div>
            <progressbar value="25" class="progress-xs m-t-sm bg-white" animate="true" type="warning"></progressbar>
          </div>
          <p class="text-muted">Dales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
        </div>
      </div>
      <!-- / service -->

      <!-- tasks -->
      <div class="panel wrapper">
        <div class="row">
          <div class="col-md-6 b-r b-light no-border-xs">
            <a href class="text-muted pull-right text-lg"><i class="icon-arrow-right"></i></a>
            <h4 class="font-thin m-t-none m-b-md text-muted">My Tasks</h4>
            <div class=" m-b">
              <div class="m-b">
                <span class="label text-base bg-warning pos-rlt m-r"><i class="arrow right arrow-warning"></i> 19:30</span>
                <a href>Feed cat</a>
              </div>
              <div class="m-b">
                <span class="label text-base bg-info pos-rlt m-r"><i class="arrow right arrow-info"></i> 12:30</span>
                <a href>Fishing Time</a>
              </div>
              <div class="m-b">
                <span class="label text-base bg-primary pos-rlt m-r"><i class="arrow right arrow-primary"></i> 10:30</span>
                <a href>Kick-off meeting</a>
              </div>
              <div class="m-b">
                <span class="label text-base bg-light pos-rlt m-r"><i class="arrow right arrow-light"></i> 07:30</span>
                <a href>Morning running</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">            
            <div class="row row-sm">
              <div class="col-xs-6 text-center">
                <div ui-jq="easyPieChart" ui-options="{
                    percent: 75,
                    lineWidth: 4,
                    trackColor: '{{app.color.light}}',
                    barColor: '{{app.color.primary}}',
                    scaleColor: false,
                    size: 115,
                    rotate: 90,
                    lineCap: 'butt'
                  }" class="inline m-t">
                  <div>
                    <span class="text-primary h4">75%</span>
                  </div>
                </div>
                <div class="text-muted font-bold text-xs m-t m-b">Work Done</div>
              </div>
              <div class="col-xs-6 text-center">
                <div ui-jq="easyPieChart" ui-options="{
                    percent: 50,
                    lineWidth: 4,
                    trackColor: '{{app.color.light}}',
                    barColor: '{{app.color.info}}',
                    scaleColor: false,
                    size: 115,
                    rotate: 180,
                    lineCap: 'butt'
                  }" class="inline m-t">
                  <div>
                    <span class="text-info h4">50%</span>
                  </div>
                </div>
                <div class="text-muted font-bold text-xs m-t m-b">Started</div>
              </div>
            </div>            
          </div>
        </div>
      </div>
      <!-- / tasks -->

      <!-- tasks -->
      <div class="row">
        <div class="col-md-6">
          <div class="panel no-border">
            <div class="panel-heading wrapper b-b b-light">
              <span class="text-xs text-muted pull-right">
                <i class="fa fa-circle text-primary m-r-xs"></i> 12
                <i class="fa fa-circle text-info m-r-xs m-l-sm"></i> 30
                <i class="fa fa-circle text-warning m-r-xs m-l-sm"></i> 98
              </span>
              <h4 class="font-thin m-t-none m-b-none text-muted">Teammates</h4>              
            </div>
            <ul class="list-group list-group-lg m-b-none">
              <li class="list-group-item">
                <a href class="thumb-sm m-r">
                  <img src="img/a1.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-primary inline m-t-sm">Admin</span>
                <a href>Damon Parker</a>
              </li>
              <li class="list-group-item">
                <a href class="thumb-sm m-r">
                  <img src="img/a2.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-info inline m-t-sm">Member</span>
                <a href>Joe Waston</a>
              </li>
              <li class="list-group-item">
                <a href class="thumb-sm m-r">
                  <img src="img/a3.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-warning inline m-t-sm">Editor</span>
                <a href>Jannie Dvis</a>
              </li>
              <li class="list-group-item">
                <a href class="thumb-sm m-r">
                  <img src="img/a4.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-warning inline m-t-sm">Editor</span>
                <a href>Emma Welson</a>
              </li>
            </ul>
            <div class="panel-footer">
              <span class="pull-right badge badge-bg m-t-xs">32</span>
              <button class="btn btn-primary btn-addon btn-sm"><i class="fa fa-plus"></i>Add Teammate</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">            
          <div class="list-group list-group-lg list-group-sp">
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a4.jpg" alt="...">
                <i class="on b-white right"></i>
              </span>
              <span class="clear">
                <span>Chris Fox</span>
                <small class="text-muted clear text-ellipsis">What's up, buddy</small>
              </span>
            </a>
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a5.jpg" alt="...">
                <i class="on b-white right"></i>
              </span>
              <span class="clear">
                <span>Amanda Conlan</span>
                <small class="text-muted clear text-ellipsis">Come online and we need talk about the plans that we have discussed</small>
              </span>
            </a>
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a6.jpg" alt="...">
                <i class="busy b-white right"></i>
              </span>
              <span class="clear">
                <span>Dan Doorack</span>
                <small class="text-muted clear text-ellipsis">Hey, Some good news</small>
              </span>
            </a>
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a7.jpg" alt="...">
                <i class="busy b-white right"></i>
              </span>
              <span class="clear">
                <span>Lauren Taylor</span>
                <small class="text-muted clear text-ellipsis">Nice to talk with you.</small>
              </span>
            </a>
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a8.jpg" alt="...">
                <i class="away b-white right"></i>
              </span>
              <span class="clear">
                <span>Mike Jackson</span>
                <small class="text-muted clear text-ellipsis">This is nice</small>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- / tasks -->
    </div>
  </div>
  <!-- / main -->
  <!-- right col -->
  <div class="col w-md bg-white-only b-l bg-auto no-border-xs">
    <tabset class="nav-tabs-alt" justified="true">
      <tab>
        <tab-heading>
          <i class="glyphicon glyphicon-user text-md text-muted wrapper-sm"></i>
        </tab-heading>
        <div class="wrapper-md">
          <div class="m-b-sm text-md">Who to follow</div>
          <ul class="list-group no-bg no-borders pull-in">
            <li class="list-group-item">
              <a herf class="pull-left thumb-sm avatar m-r">
                <img src="img/a4.jpg" alt="..." class="img-circle">
                <i class="on b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href>Chris Fox</a></div>
                <small class="text-muted">Designer, Blogger</small>
              </div>
            </li>
            <li class="list-group-item">
              <a herf class="pull-left thumb-sm avatar m-r">
                <img src="img/a5.jpg" alt="..." class="img-circle">
                <i class="on b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href>Mogen Polish</a></div>
                <small class="text-muted">Writter, Mag Editor</small>
              </div>
            </li>
            <li class="list-group-item">
              <a herf class="pull-left thumb-sm avatar m-r">
                <img src="img/a6.jpg" alt="..." class="img-circle">
                <i class="busy b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href>Joge Lucky</a></div>
                <small class="text-muted">Art director, Movie Cut</small>
              </div>
            </li>
            <li class="list-group-item">
              <a herf class="pull-left thumb-sm avatar m-r">
                <img src="img/a7.jpg" alt="..." class="img-circle">
                <i class="away b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href>Folisise Chosielie</a></div>
                <small class="text-muted">Musician, Player</small>
              </div>
            </li>
            <li class="list-group-item">
              <a herf class="pull-left thumb-sm avatar m-r">
                <img src="img/a8.jpg" alt="..." class="img-circle">
                <i class="away b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href>Aron Gonzalez</a></div>
                <small class="text-muted">Designer</small>
              </div>
            </li>
          </ul>
          <div class="text-center">
            <a href class="btn btn-sm btn-primary padder-md m-b">More Connections</a>
          </div>
        </div>
      </tab>
      <tab>
        <tab-heading>
          <i class="glyphicon glyphicon-comment text-md text-muted wrapper-sm"></i>
        </tab-heading>
        <div class="wrapper-md">
          <div class="m-b-sm text-md">Chat</div>
          <ul class="list-group no-borders pull-in auto">
            <li class="list-group-item">
              <span class="pull-left thumb-sm m-r"><img src="img/a1.jpg" alt="..." class="img-circle"></span>
              <a href class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
              <div class="clear">
                <div><a href="">Chris Fox</a></div>
                <small class="text-muted">about 2 minutes ago</small>
              </div>
            </li>
            <li class="list-group-item">
              <span class="pull-left thumb-sm m-r"><img src="img/a2.jpg" alt="..." class="img-circle"></span>
              <a href class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
              <div class="clear">
                <div><a href="">Amanda Conlan</a></div>
                <small class="text-muted">about 2 hours ago</small>
              </div>
            </li>
            <li class="list-group-item">
              <span class="pull-left thumb-sm m-r"><img src="img/a3.jpg" alt="..." class="img-circle"></span>
              <a href class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
              <div class="clear">
                <div><a href="">Dan Doorack</a></div>
                <small class="text-muted">3 days ago</small>
              </div>
            </li>
            <li class="list-group-item">
              <span class="pull-left thumb-sm m-r"><img src="img/a4.jpg" alt="..." class="img-circle"></span>
              <a href class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
              <div class="clear">
                <div><a href="">Lauren Taylor</a></div>
                <small class="text-muted">about 2 minutes ago</small>
              </div>
            </li>
          </ul>
        </div>
      </tab>
      <tab>
        <tab-heading>
          <i class="glyphicon glyphicon-transfer text-md text-muted wrapper-sm"></i>
        </tab-heading>
        <div class="wrapper-md">
          <div class="m-b-sm text-md">Transaction</div>
          <ul class="list-group list-group-sm list-group-sp list-group-alt auto m-t">
            <li class="list-group-item">
              <span class="text-muted">Transfer to Jacob at 3:00 pm</span>
              <span class="block text-md text-info">B 15,000.00</span>
            </li>
            <li class="list-group-item">
              <span class="text-muted">Got from Mike at 1:00 pm</span>
              <span class="block text-md text-primary">B 23,000.00</span>
            </li>
            <li class="list-group-item">
              <span class="text-muted">Sponsored ORG at 9:00 am</span>
              <span class="block text-md text-warning">B 3,000.00</span>
            </li>
            <li class="list-group-item">
              <span class="text-muted">Send to Jacob at 8:00 am</span>
              <span class="block text-md">B 11,000.00</span>
            </li>
          </ul>
        </div>
      </tab>      
    </tabset>
    <div class="padder-md">      
      <!-- streamline -->
      <div class="m-b text-md">Recent Activity</div>
      <div class="streamline b-l m-b">
        <div class="sl-item">
          <div class="m-l">
            <div class="text-muted">5 minutes ago</div>
            <p><a href class="text-info">Jessi</a> commented your post.</p>
          </div>
        </div>
        <div class="sl-item">
          <div class="m-l">
            <div class="text-muted">11:30</div>
            <p>Join comference</p>
          </div>
        </div>
        <div class="sl-item b-success b-l">
          <div class="m-l">
            <div class="text-muted">10:30</div>
            <p>Call to customer <a href class="text-info">Jacob</a> and discuss the detail.</p>
          </div>
        </div>
        <div class="bg-info wrapper-sm m-l-n m-r-n m-b r r-2x">
          Create tasks for the team
        </div>
        <div class="sl-item b-primary b-l">
          <div class="m-l">
            <div class="text-muted">Wed, 25 Mar</div>
            <p>Finished task <a href class="text-info">Testing</a>.</p>
          </div>
        </div>
        <div class="sl-item b-warning b-l">
          <div class="m-l">
            <div class="text-muted">Thu, 10 Mar</div>
            <p>Trip to the moon</p>
          </div>
        </div>
        <div class="sl-item b-info b-l">
          <div class="m-l">
            <div class="text-muted">Sat, 5 Mar</div>
            <p>Prepare for presentation</p>
          </div>
        </div>
        <div class="sl-item b-l">
          <div class="m-l">
            <div class="text-muted">Sun, 11 Feb</div>
            <p><a href class="text-info">Jessi</a> assign you a task <a href class="text-info">Mockup Design</a>.</p>
          </div>
        </div>
        <div class="sl-item b-l">
          <div class="m-l">
            <div class="text-muted">Thu, 17 Jan</div>
            <p>Follow up to close deal</p>
          </div>
        </div>
      </div>
      <!-- / streamline -->
    </div>
  </div>
  <!-- / right col -->
</div>
      <hr>
   <div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
    app.settings.asideFolded = true; 
    app.settings.asideDock = true;
  ">
  <!-- main -->
  <div class="col">
    <div class="bg-black dker wrapper-lg" ng-controller="FlotChartDemoCtrl">
        <ul class="nav nav-pills nav-xxs nav-rounded m-b-lg">
          <li class="active"><a href>Day</a></li>
          <li><a href ng-click="refreshData()">Week</a></li>
          <li><a href ng-click="refreshData()">Month</a></li>
        </ul>
        <div ui-jq="plot" ui-refresh="d0_1" ui-options="
        [
          { data: {{d0_1}}, points: { show: true, radius: 2}, splines: { show: true, tension: 0.4, lineWidth: 1 } }
        ],
        {
          colors: ['{{app.color.info}}', '{{app.color.primary}}'],
          series: { shadowSize: 3 },
          xaxis:{ font: { color: '#507b9b' } },
          yaxis:{ font: { color: '#507b9b' }, max:16 },
          grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#1c2b36' },
          tooltip: true,
          tooltipOpts: { content: 'Visits of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
        }
      " style="min-height:360px" >
      </div>
    </div>
    <div class="wrapper-md bg-white-only b-b">
      <div class="row text-center">
        <div class="col-sm-3 col-xs-6">
          <div>Users <i class="fa fa-fw fa-caret-up text-success text-sm"></i></div>
          <div class="h2 m-b-sm">219k</div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div>Items <i class="fa fa-fw fa-caret-down text-warning text-sm"></i></div>
          <div class="h2 m-b-sm">1230</div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div>Orders <i class="fa fa-fw fa-caret-up text-success text-sm"></i></div>
          <div class="h2 m-b-sm">2839</div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div>Visits <i class="fa fa-fw fa-caret-down text-danger text-sm"></i></div>
          <div class="h2 m-b-sm">2,300</div>
        </div>
      </div>
    </div>
    <div class="wrapper-md">
      <div class="row text-center">
        <div class="col-sm-3 col-xs-6">
          <div>Todays activity</div>
          <div ui-jq="easyPieChart" ui-options="{
              percent: 75,
              lineWidth: 4,
              trackColor: '{{app.color.light}}',
              barColor: '{{app.color.primary}}',
              scaleColor: false,
              size: 115,
              rotate: 90,
              lineCap: 'butt'
            }" class="inline m-t">
            <div>
              <span class="text-primary h3">75%</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div>Active Players</div>
          <div ui-jq="easyPieChart" ui-options="{
              percent: 35,
              lineWidth: 4,
              trackColor: '{{app.color.light}}',
              barColor: '{{app.color.info}}',
              scaleColor: false,
              size: 115,
              rotate: 0,
              lineCap: 'butt'
            }" class="inline m-t">
            <div>
              <span class="text-info h3">35%</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div>Weekly Changes</div>
          <div ui-jq="easyPieChart" ui-options="{
              percent: 50,
              lineWidth: 4,
              trackColor: '{{app.color.light}}',
              barColor: '{{app.color.warning}}',
              scaleColor: false,
              size: 115,
              rotate: 180,
              lineCap: 'butt'
            }" class="inline m-t">
            <div>
              <span class="text-warning h3">50%</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div>Monthly Changes</div>
          <div ui-jq="easyPieChart" ui-options="{
              percent: 60,
              lineWidth: 4,
              trackColor: '{{app.color.light}}',
              barColor: '{{app.color.success}}',
              scaleColor: false,
              size: 115,
              rotate: 90,
              lineCap: 'butt'
            }" class="inline m-t">
            <div>
              <span class="text-success h3">60%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wrapper-md">
      <!-- users -->
      <div class="row">
        <div class="col-md-6">
          <div class="panel no-border">
            <div class="panel-heading wrapper b-b b-light">
              <span class="text-xs text-muted pull-right">
                <i class="fa fa-circle text-primary m-r-xs"></i> 12
                <i class="fa fa-circle text-info m-r-xs m-l-sm"></i> 30
                <i class="fa fa-circle text-warning m-r-xs m-l-sm"></i> 98
              </span>
              <h5 class="font-thin m-t-none m-b-none text-muted">Teammates</h5>              
            </div>
            <ul class="list-group list-group-lg m-b-none">
              <li class="list-group-item">
                <a href class="thumb-sm m-r">
                  <img src="img/a1.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-primary inline m-t-sm">Admin</span>
                <a href>Damon Parker</a>
              </li>
              <li class="list-group-item">
                <a href class="thumb-sm m-r">
                  <img src="img/a2.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-info inline m-t-sm">Member</span>
                <a href>Joe Waston</a>
              </li>
              <li class="list-group-item">
                <a href class="thumb-sm m-r">
                  <img src="img/a3.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-warning inline m-t-sm">Editor</span>
                <a href>Jannie Dvis</a>
              </li>
              <li class="list-group-item">
                <a href class="thumb-sm m-r">
                  <img src="img/a4.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-warning inline m-t-sm">Editor</span>
                <a href>Emma Welson</a>
              </li>
            </ul>
            <div class="panel-footer">
              <span class="pull-right badge badge-bg m-t-xs">32</span>
              <button class="btn btn-primary btn-addon btn-sm"><i class="fa fa-plus"></i>Add Teammate</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">            
          <div class="list-group list-group-lg list-group-sp">
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a4.jpg" alt="...">
                <i class="on b-white right"></i>
              </span>
              <span class="clear">
                <span>Chris Fox</span>
                <small class="text-muted clear text-ellipsis">What's up, buddy</small>
              </span>
            </a>
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a5.jpg" alt="...">
                <i class="on b-white right"></i>
              </span>
              <span class="clear">
                <span>Amanda Conlan</span>
                <small class="text-muted clear text-ellipsis">Come online and we need talk about the plans that we have discussed</small>
              </span>
            </a>
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a6.jpg" alt="...">
                <i class="busy b-white right"></i>
              </span>
              <span class="clear">
                <span>Dan Doorack</span>
                <small class="text-muted clear text-ellipsis">Hey, Some good news</small>
              </span>
            </a>
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a7.jpg" alt="...">
                <i class="busy b-white right"></i>
              </span>
              <span class="clear">
                <span>Lauren Taylor</span>
                <small class="text-muted clear text-ellipsis">Nice to talk with you.</small>
              </span>
            </a>
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a8.jpg" alt="...">
                <i class="away b-white right"></i>
              </span>
              <span class="clear">
                <span>Mike Jackson</span>
                <small class="text-muted clear text-ellipsis">This is nice</small>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- / users -->
    </div>
  </div>
  <!-- / main -->
  <!-- right col -->
  <div class="col w-md bg-black dk bg-auto">
    <div class="wrapper">
      <div class="m-b-sm text-md">Who to follow</div>
      <ul class="list-group no-bg no-borders pull-in">
        <li class="list-group-item">
          <a herf class="pull-left thumb-sm avatar m-r">
            <img src="img/a4.jpg" alt="..." class="img-circle">
            <i class="on b-white bottom"></i>
          </a>
          <div class="clear">
            <div><a href>Chris Fox</a></div>
            <small class="text-muted">Designer, Blogger</small>
          </div>
        </li>
        <li class="list-group-item active">
          <a herf class="pull-left thumb-sm avatar m-r">
            <img src="img/a5.jpg" alt="..." class="img-circle">
            <i class="on b-white bottom"></i>
          </a>
          <div class="clear">
            <div><a href>Mogen Polish</a></div>
            <small class="text-muted">Writter, Mag Editor</small>
          </div>
        </li>
        <li class="list-group-item">
          <a herf class="pull-left thumb-sm avatar m-r">
            <img src="img/a6.jpg" alt="..." class="img-circle">
            <i class="busy b-white bottom"></i>
          </a>
          <div class="clear">
            <div><a href>Joge Lucky</a></div>
            <small class="text-muted">Art director, Movie Cut</small>
          </div>
        </li>
        <li class="list-group-item">
          <a herf class="pull-left thumb-sm avatar m-r">
            <img src="img/a7.jpg" alt="..." class="img-circle">
            <i class="away b-white bottom"></i>
          </a>
          <div class="clear">
            <div><a href>Folisise Chosielie</a></div>
            <small class="text-muted">Musician, Player</small>
          </div>
        </li>
        <li class="list-group-item">
          <a herf class="pull-left thumb-sm avatar m-r">
            <img src="img/a8.jpg" alt="..." class="img-circle">
            <i class="away b-white bottom"></i>
          </a>
          <div class="clear">
            <div><a href>Aron Gonzalez</a></div>
            <small class="text-muted">Designer</small>
          </div>
        </li>
      </ul>
      <div class="text-center">
        <a href class="btn btn-sm btn-primary padder-md m-b">More Connections</a>
      </div>
    </div>
  </div>
  <!-- / right col -->
</div>
      <hr>
   <!-- hbox layout -->
<div class="hbox hbox-auto-xs hbox-auto-sm bg-light " ng-init="
  app.settings.asideFixed = true;
  app.settings.asideDock = false;
  app.settings.container = false;
  app.hideAside = false;
  app.hideFooter = true;
  " ng-controller="ContactCtrl">

  <!-- column -->
  <div class="col w b-r">
    <div class="vbox">
      <div class="row-row">
        <div class="cell scrollable hover">
          <div class="cell-inner">
            <div class="list-group no-radius no-border no-bg m-b-none">
              <a class="list-group-item b-b" ng-class="{'focus': (filter == '')}" ng-click="selectGroup({name:''})">ALL Contacts</a>
              <a ng-repeat="item in groups" ng-dblclick="editItem(item)" class="list-group-item m-l hover-anchor b-a no-select" ng-class="{'focus m-l-none': item.selected}" ng-click="selectGroup(item)">
                <span ng-click='deleteGroup(item)' class="pull-right text-muted hover-action"><i class="fa fa-times"></i></span>
                <span class="block m-l-n" ng-class="{'m-n': item.selected }">{{ item.name ? item.name : 'Untitled' }}</span>
                <input type="text" class="form-control pos-abt" ng-show="item.editing" ng-blur="doneEditing(item)" ng-model="item.name" style="top:3px;left:2px;width:98%" ui-focus="item.editing">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper b-t">
        <span tooltip="Double click to Edit" class="pull-right text-muted inline wrapper-xs m-r-sm"><i class="fa fa-question"></i></span>
        <a href class="btn btn-sm btn-default" ng-click="createGroup()"><i class="fa fa-plus fa-fw m-r-xs"></i> New Group</a>
      </div>
    </div>
  </div>
  <!-- /column -->
  <!-- column -->
  <div class="col w-lg lter b-r">
    <div class="vbox">
      <div class="wrapper-xs b-b">
        <div class="input-group m-b-xxs">
          <span class="input-group-addon input-sm no-border no-bg"><i class="icon-magnifier text-md m-t-xxs"></i></span>
          <input type="text" class="form-control input-sm no-border no-bg text-md" placeholder="Search {{group.name ? group.name : 'All Contacts'}}" ng-model="query">
        </div>
      </div>
      <div class="row-row">
        <div class="cell scrollable hover">
          <div class="cell-inner">
            <div class="m-t-n-xxs">
              <div class="list-group list-group-lg no-radius no-border no-bg m-b-none">
                <a ng-repeat="item in items | filter:{group:filter} | filter:query | orderBy:'first'" class="list-group-item m-l" ng-class="{'select m-l-none': item.selected }" ng-click="selectItem(item)">
                  <span class="block text-ellipsis m-l-n text-md" ng-class="{'m-l-none': item.selected }">
                    {{ item.first }} <strong>{{ item.last }}</strong>
                    <span ng-hide="item.first || item.last">No Name</span>
                  </span>
                </a>
              </div>
            </div>
            <div class="text-center pos-abt w-full" style="top:50%;" ng-hide="(items | filter:{group:filter} | filter:query).length">No Contacts</div>
          </div>
        </div>
      </div>
      <div class="wrapper b-t text-center">
        <a href class="btn btn-sm btn-default btn-addon" ng-click="createItem()"><i class="fa fa-plus fa-fw m-r-xs"></i> New Contact</a>
      </div>
    </div>
  </div>
  <!-- /column -->

  <!-- column -->
  <div class="col bg-white-only">
    <div class="vbox">
      <div class="wrapper-sm b-b">
        <div class="m-t-n-xxs m-b-n-xxs m-l-xs">
          <a class="btn btn-xs btn-default pull-right" ng-hide="!item" ng-click="deleteItem(item)"><i class="fa fa-times"></i></a>
          <a class="btn btn-xs btn-default" ng-hide="item.editing" ng-click="editItem(item)">Edit</a>
          <a class="btn btn-xs btn-default" ng-show="item.editing" ng-click="doneEditing(item)">Done</a>
        </div>
      </div>
      <div class="row-row">
        <div class="cell">
          <div class="cell-inner">
            <div class="wrapper-lg">
              <div class="hbox h-auto m-b-lg">
                <div class="col text-center w-sm">
                  <div class="thumb-lg avatar inline">
                    <img ng-src="{{item.avatar}}" ng-show="item.avatar">
                  </div>
                </div>
                <div class="col v-middle h1 font-thin">
                  <div ng-hide="item.editing">{{item.first}} {{item.last}}</div>
                  <div ng-show="item.editing">
                    <input type="text" placeholder="First" class="form-control w-auto input-lg m-b-n-xxs font-bold" ng-model="item.first" >
                    <input type="text" placeholder="Last" class="form-control w-auto input-lg font-bold" ng-model="item.last" >
                  </div>
                </div>
              </div>
              <!-- fields -->
              <div class="form-horizontal">
                <div class="form-group m-b-sm" ng-hide="!item.mobile && !item.editing">
                  <label class="col-sm-3 control-label">Mobile</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" ng-hide="item.editing">{{item.mobile}}</p>
                    <input type="text" class="form-control" ng-show="item.editing" ng-model="item.mobile" >
                  </div>
                </div>
                <div class="form-group m-b-sm" ng-hide="!item.home && !item.editing">
                  <label class="col-sm-3 control-label">Home</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" ng-hide="item.editing">{{item.home}}</p>
                    <input type="text" class="form-control" ng-show="item.editing" ng-model="item.home" >
                  </div>
                </div>
                <div class="form-group m-b-sm" ng-hide="!item.work && !item.editing">
                  <label class="col-sm-3 control-label">Work</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" ng-hide="item.editing">{{item.work}}</p>
                    <input type="text" class="form-control" ng-show="item.editing" ng-model="item.work" >
                  </div>
                </div>
                <div class="form-group m-b-sm" ng-hide="!item.company && !item.editing">
                  <label class="col-sm-3 control-label">Company</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" ng-hide="item.editing">{{item.company}}</p>
                    <input type="text" class="form-control" ng-show="item.editing" ng-model="item.company" >
                  </div>
                </div>
                <div class="form-group m-b-sm" ng-hide="!item.note && !item.editing">
                  <label class="col-sm-3 control-label">Note</label>
                  <div class="col-sm-9">
                    <p class="form-control-static" ng-hide="item.editing">{{item.note}}</p>
                    <textarea class="form-control" ng-show="item.editing" ng-model="item.note" rows="5"></textarea>
                  </div>
                </div>
              </div>
              <!-- / fields -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /column -->
</div>
<!-- /hbox layout -->
      <hr>
   <!-- hbox layout -->
<div class="hbox hbox-auto-xs bg-light " ng-init="
  app.settings.asideFixed = true;
  app.settings.asideDock = false;
  app.settings.container = false;
  app.hideAside = false;
  app.hideFooter = true;
  " ng-controller="NoteCtrl">
  <!-- column -->
  <div class="col w-lg lt b-r">
    <div class="vbox">
      <div class="wrapper">
        <a href class="pull-right btn btn-sm btn-info m-t-n-xs" ng-click="createNote()">New</a>
        <div class="h4">Notes</div>
      </div>
      <div class="wrapper b-t m-t-xxs">
        <div class="input-group">
          <span class="input-group-addon input-sm"><i class="fa fa-search"></i></span>
          <input type="text" class="form-control input-sm" placeholder="search" ng-model="query">
        </div>
      </div>
      <div class="row-row">
        <div class="cell scrollable hover">
          <div class="cell-inner">
            <div class="padder">
              <div class="list-group">
                <a ng-repeat="note in notes | filter:query | orderBy:'date':true" class="list-group-item b-l-{{note.color}} b-l-3x hover-anchor" ng-class="{'hover': note.selected }" ng-click="selectNote(note)">
                  <span ng-click='deleteNote(note)' class="pull-right text-muted hover-action"><i class="fa fa-times"></i></span>
                  <span class="block text-ellipsis">{{ note.content ? note.content : 'Empty note' }}</span>
                  <small class="text-muted">{{ note.date | fromNow }}</small>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /column -->

  <!-- column -->
  <div class="col">
    <div class="vbox">
      <div class="wrapper bg-light lt b-b">
        <span class="text-muted">Created on:</span> <span>{{ note.date  | date:'MMM-dd-yyyy H:mm' }}</span>
        <div class="m-l inline dropdown" dropdown>
          <a class="v-middle pos-rlt inline bg-{{note.color}}" dropdown-toggle style="width:16px;height:16px;top:-2px"></a>
          <div class="dropdown-menu animated fadeInUp w wrapper">
            <a ng-repeat="color in colors" class="inline m-xs bg-{{color}}" style="width:18px;height:18px" ng-click=" note.color = color "></a>
          </div>
        </div>
      </div>
      <div class="row-row">
        <div class="cell">
          <div class="cell-inner">
            <textarea class="form-control no-radius no-border no-bg wrapper-lg text-md" style="height:100%;" ng-model="note.content">
            </textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /column -->
</div>
<!-- /hbox layout -->
      <hr>
   <div class="hbox hbox-auto-xs hbox-auto-sm" ng-controller="WeatherCtrl">
  <div class="col w-lg bg-light dk b-r bg-auto">
    <div class="wrapper-md dker b-b">
      <div class="input-group">
         <input type="text" class="form-control" ng-model="userSearchText" placeholder="Town State Country...">
         <div class="input-group-btn">
            <button type="button" class="btn btn-default" ng-click="getLocations()">Search</button>
         </div>
      </div>
    </div>
    <!-- show search results for user input -->
    <div class="wrapper-md">
      <ul class="list-group list-group-sp" ng-show="search.query.count > 1">
        <li class="list-group-item" ng-repeat="loc in search.query.results.place">
          <a class="clear text-ellipsis" ng-click="getWeather(loc.woeid, loc.name, loc.country.content)">{{loc.name}}, {{loc.admin1.content}}, {{loc.country.content}}</a>
        </li>
      </ul>
      <ul class="list-group list-group-sp">
        <li class="list-group-item">
          <a href ng-click="getWeather(2459115,'New York','United States')">New York</a>
        </li>
        <li class="list-group-item">
          <a href ng-click="getWeather(615702,'Paris','France')">Paris</a>
        </li>
        <li class="list-group-item">
          <a href ng-click="getWeather(44418,'London','United Kingdom')">London</a>
        </li>
        <li class="list-group-item">
          <a href ng-click="getWeather(1105779,'Sydney','Australia')">Sydney</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="col">
    <div class="wrapper-lg clearfix bg-info dker" ng-show="data.query.results">
      <h4 class="m-t-none m-b-lg"><span class="text-xs text-muted m-l pull-right">{{ data.query.results.channel.item.condition.date }}</span>{{place.city}}, {{place.country}}</h4>
      <div class="hbox">
        <div class="col v-middle w-sm">
          <skycon icon="data.query.results.channel.item.condition.icon" color="#fff" size="128" id=""></skycon>
        </div>
        <div class="col v-middle">
          <div class="h1">
            <span class="text-2x text-white">{{ data.query.results.channel.item.condition.temp }}&deg;</span>            
          </div>
          <span class="text-muted">{{ data.query.results.channel.item.condition.text }} - Feels like {{ data.query.results.channel.item.condition.temp }}&deg;</span>
        </div>
      </div>
    </div>
    
    <!-- display weather forecast -->
    <div class="list-group no-border no-radius">
      <div class="list-group-item" ng-show="data.query.results.channel.item.forecast.length" ng-repeat="forecast in data.query.results.channel.item.forecast">
        <div class="hbox">
          <div class="col v-middle w-xxs">
            <span class="h4">{{forecast.day}}</span>           
          </div>
          <div class="col v-middle w-xxs">
            <skycon icon="forecast.icon" color="app.color.dark" size="32"></skycon>
          </div>
          <div class="col v-middle">
            {{forecast.text}} <span class="text-white">{{forecast.code}}</span>
          </div>
          <div class="col v-middle">
            {{forecast.high}}&deg; -  {{forecast.low}}&deg;
          </div>
          <div class="col v-middle text-right hidden-xs">                
            <small class="text-muted">{{forecast.date}}</small>
          </div>           
        </div>
      </div>
    </div>
  </div>
</div>

      <hr>
   
      <hr>
   <div class="hbox hbox-auto-xs hbox-auto-sm">
  <!-- .aside -->
  <div class="col w w-auto-xs bg-light inherit dk b-r">
    <div class="wrapper-md b-b">
      <a class="btn btn-link pull-right m-t-n-xs m-r-n-sm visible-sm visible-xs" ui-toggle-class="show" data-target="#nav-docs">
        <i class="fa fa-bars"></i>
      </a>
      <span class="h4">Documents</span>
    </div>
    <div class="hidden-sm hidden-xs" id="nav-docs">
      <ul class="nav">
        <li class="padder b-b l-h-2x bg text-info"><em>Build</em></li>
        <li><a ui-scroll="node-req">Requirements</a></li>
        <li><a ui-scroll="bower">Bower</a></li>
        <li><a ui-scroll="grunt">Grunt</a></li>      
        <li><a ui-scroll="dev-server">Local Server</a></li>

        <li class="padder b-b l-h-2x bg text-success"><em>CSS</em></li>
        <li><a ui-scroll="bootstrap">Bootstrap</a></li>
        <li><a ui-scroll="icons">Icons</a></li>
        <li><a ui-scroll="animate">Animate</a></li>
        <li><a ui-scroll="colors">Colors</a></li>
        <li><a ui-scroll="layout">Layout</a></li>
        <li><a ui-scroll="utilities">Utilities</a></li>

        <li ui-scroll="core" class="padder b-b b-t l-h-2x bg text-danger"><em>Core</em></li>        
        <li><a ui-scroll="ui-router">ui-router</a></li>
        <li><a ui-scroll="ui-load">ui-load</a></li>
        <li><a ui-scroll="ui-jq">ui-jq</a></li>
        <li><a ui-scroll="ui-module">ui-module</a></li>
        <li><a ui-scroll="ui-validate">ui-validate</a></li>

        <li ui-scroll="directives" class="padder b-b b-t l-h-2x bg text-primary"><em>Directives</em></li>
        <li><a ui-scroll="ui-toggle-class">ui-toggle-class</a></li>
        <li><a ui-scroll="ui-shift">ui-shift</a></li>
        <li><a ui-scroll="ui-scroll">ui-scroll</a></li>
        <li><a ui-scroll="ui-fullscreen">ui-fullscreen</a></li>

        <li ui-scroll="plugins" class="padder b-b b-t l-h-2x bg text-info"><em>Plugins</em></li>
        <li><a ui-scroll="plugins">Plugins docs</a></li>
      </ul>
    </div>
  </div>
  <!-- /.aside -->
  <div class="col">
    <div class="clearfix padder-md">
      <h3 class="text-info m-t-xl font-thin m-b-none">Build </h3>
      <div>Build your project with grunt and manage dependencies with bower.</div>

      <div id="node-req" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">Requirements</h4>
      <p>
        In order to utilize <a href="http://gruntjs.com" class="text-info font-bold">Grunt</a> you will need to have installed <a href="http://nodejs.org" class="text-info font-bold">Node.js</a> on your computer. Also
        insure that you have <a href="https://www.npmjs.org/" class="text-info font-bold">NPM</a> installed. <br />
        You can check if these are installed properly by opening up a Terminal (Linux or Mac) or Command Prompt (Windows) <br /> 
        and entering the command: <code>node --version</code> and <code>npm --version</code>
        These commands should output something similar to "v0.10.31" and "1.4.23" respectively.
      </p>
      <p>
        Once you have installed these programs, you'll need to get grunt and bower. You can achieve this by running the following command:
        <code>npm install -g bower grunt-cli</code> <br />
        Now you should be able to exectue the commands "grunt" and "bower". 
      </p>
      <p class="well b bg-light lt wrapper-sm m-t text-danger font-bold">
        Please note that any commands we tell you to run must be ran from the project's root folder.
      </p>

      <div id="bower" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">Bower Dependency Management</h4>
      <p>
        To ensure you have all updated the Javascript libraries managed by bower, run the command <code>bower install</code> in a terminal or command prompt
        while you are in the current working directory of the project.
      </p>

      <div id="grunt" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">Grunt Build Tool</h4>
      <p>
        This project supports build steps with Grunt. The supported Grunt tasks that this project ships with is:
      </p>
      <ul>
        <li>Less Compilation</li>
        <li>Bower Depenecy Inclusion</li>
        <li>Release Tagging (requires project to be a <a href="http://git-scm.com/" class="text-info font-bold">GIT repository</a>)</li>
      </ul>
      <p>
        To build your project, just run the command <code>grunt build:dev</code>. This will compile your less files and
        copy over your bower dependencies.
      </p>
      <p>
        Release tagging allows you to bump your current project's version and tag it with git. It also creates a changelog based on your
        prevoius commit history. Checkout <a href="https://github.com/ericmatthys/grunt-changelog" class="text-info font-bold">the grunt-changelog module</a> for more
        details and how to customize.
      </p>

      <div id="dev-server" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">Local Server Development</h4>
      <p>
        We've made it easy to develop and test on your local machine. Once you've installed the bower dependencies and built your project,
        you can start a local server by running the command <code>npm start</code>. This will start a local server and open up your browser.
      </p>

      <div id="css" class="wrapper"></div>
      <div class="line b-b"></div>
      <h3 class="text-success m-t-xl font-thin m-b-none">CSS </h3>
      <div>Extensible classes</div>

      <div id="bootstrap" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">Bootstrap CSS</h4>
      <p>
        For the bootstrap css and components, please check the <a href="http://getbootstrap.com" class="text-info font-bold">Bootstrap 3</a>
      </p>
      <p><strong>Angular UI Bootstrap</strong>, This project does not use bootstrap.js, but use Angular UI Bootstrap written in pure AngularJS, check <a ui-sref="app.ui.bootstrap" class="text-info font-bold">UI Boostrap</a> and <a href="http://angular-ui.github.io/bootstrap" class="text-info font-bold">Official Documents</a></p>


      <div id="less" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">LESS</h4>
      <p>This file's css is generated by LESS files. There are many Variables, Mixins you can use.</p>
      <p><strong>Compile</strong>, you can use the less.php to output the css. </p>


      <div id="icons" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">Icons</h4>
      <ul>
        <li>FontAwesome icons <label class="label bg-info">4.1</label>  <p>Check <strong><a href="http://fortawesome.github.io/Font-Awesome/">FontAwesome</a></strong> for more details to see how to use and examples</p></li>            
        <li>Glyphicons <p>Bootstrap default icons</p></li>
        <li>Simple Line Icons</li>
      </ul>


      <div id="animate" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4  class="m-t-xl">Animate</h4>
      <p><a href="http://daneden.me/animate/"><strong>animate.css</strong></a> is a bunch of cool, fun, and cross-browser animations for you to use in your projects. Great for emphasis, home pages, sliders, and general just-add-water-awesomeness. </p>
      <p><strong>Page view transition</strong>, This project also used Animate css for <strong>ui-view animation</strong>, you can use <code>.fade-in, .fade-in-left, .fade-in-right, .fade-in-up, .fade-in-down, .fade-in-right-big, .fade-in-left-big, .fade-in-up-big, .fade-in-down-big</code>, if you want to use the big animation, you can use a <code>.smooth</code> class for smoothing animation.</p>


      <div id="colors" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4  class="m-t-xl">Colors</h4>

       <p><strong>8 default color palettes</strong>, build colorful widgets. you can open the less/app.variables.less to config your own colors(<code>@brand-primary, @brand-success, @brand-warning, @brand-danger, @brand-info, @brand-black, @brand-dark, @brand-light</code>).
      </p>
      <p><strong>Use less file to build your colors</strong>, You can use the mixin wariant. use <code>.color-variant</code> and <code>.font-variant</code> to build the color scheme, check more details in the css/less/app.colors.less.</p>

      <div class="row">
        <div class="col-sm-6">
          <p>.bg-light</p>
          <div class="m-b">
            <span class="bg-light hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
          </div>
          <p>.bg-dark</p>
          <div class="m-b">
            <span class="bg-dark hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
          </div>
          <p>.bg-black</p>
          <div class="m-b">
            <span class="bg-black hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
          </div>
          <p>.bg-primary</p>
          <div class="m-b">
            <span class="bg-primary hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
          </div>
        </div>
        <div class="col-sm-6">
          <p>.bg-info</p>
          <div class="m-b">
            <span class="bg-info hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
          </div>
          <p>.bg-success</p>
          <div class="m-b">
            <span class="bg-success hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
          </div>
          <p>.bg-warning</p>
          <div class="m-b">
            <span class="bg-warning hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
          </div>
          <p>.bg-danger</p>
          <div class="m-b">
            <span class="bg-danger hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
          </div>
        </div>
      </div>


      <div id="layout" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4  class="m-t-xl">Layout</h4>
      <p>
        <strong>Fix header</strong>, use <code>.app-header-fixed</code> class on ".app" to fixed header.position
      </p>
      <p>
        <strong>Fix aside</strong>, use <code>.app-aside-fixed</code> class on ".app" to fixed aside position.
      </p>
      <p>
        <strong>Fold aside</strong>, use <code>.app-aside-folded</code> class on ".app" to fold aside.
      </p>
      <p><strong>Hbox</strong>, use <code>.hbox</code> and <code>.col</code> to build column layout. and you can use the <code>.w-lg, .w-md, .w, .w-sm, .w-xs</code> to fix column width. and use <code>.hbox-auto-sm, .hbox-auto-xs</code> to disable hbox on small screen.</p>

      <div id="utilities" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4  class="m-t-xl">CSS Utilities</h3>
      <table class="table table-border bg-white-only b-a">
        <tbody>
          <tr class="bg-light lt">
            <td colspan="2">Margin</td>
          </tr>
          <tr>
            <td>.m</td>
            <td>margin: 15px</td>
          </tr>
          <tr>
            <td>.m-xs</td>
            <td>margin: 5px</td>
          </tr>
          <tr>
            <td>.m-sm</td>
            <td>margin: 10px</td>
          </tr>
          <tr>
            <td>.m-md</td>
            <td>margin: 20px</td>
          </tr>
          <tr>
            <td>.m-lg</td>
            <td>margin: 30px</td>
          </tr>
          <tr>
            <td>.m-n</td>
            <td>margin: 0px</td>
          </tr>
          <tr>
            <td>.m-l</td>
            <td>margin-left: 15px</td>
          </tr>
          <tr>
            <td>.m-l-xs</td>
            <td>margin-left: 5px</td>
          </tr>
          <tr>
            <td>.m-l-sm</td>
            <td>margin-left: 10px</td>
          </tr>
          <tr>
            <td>.m-l-md</td>
            <td>margin-left: 20px</td>
          </tr>
          <tr>
            <td>.m-l-lg</td>
            <td>margin-left: 30px</td>
          </tr>
          <tr>
            <td>.m-l-xl</td>
            <td>margin-left: 40px</td>
          </tr>
          <tr>
            <td>.m-l-xxl</td>
            <td>margin-left: 50px</td>
          </tr>
          <tr>
            <td>.m-l-none</td>
            <td>margin-left: 0px</td>
          </tr>
          <tr>
            <td>.m-l-n</td>
            <td>margin-left: -15px</td>
          </tr>
          <tr>
            <td>.m-l-n-xxs</td>
            <td>margin-left: -1px</td>
          </tr>
          <tr>
            <td>.m-l-n-xs</td>
            <td>margin-left: -5px</td>
          </tr>
          <tr>
            <td>.m-l-n-sm</td>
            <td>margin-left: -10px</td>
          </tr>
          <tr>
            <td>.m-l-n-md</td>
            <td>margin-left: -20px</td>
          </tr>
          <tr>
            <td>.m-l-n-lg</td>
            <td>margin-left: -30px</td>
          </tr>
          <tr>
            <td>.m-l-n-xl</td>
            <td>margin-left: -40px</td>
          </tr>
          <tr>
            <td>.m-l-n-xxl</td>
            <td>margin-left: -50px</td>
          </tr>
          <tr>
            <td colspan="2">.m-r <em>(margin right)</em> , m-t <em>(margin top)</em> , m-b <em>(margin bottom)</em> have the same classes as the .m-l.</td>
          </tr>
          <tr class="bg-light lt">
            <td colspan="2">Border</td>
          </tr>
          <tr>
            <td>.b-a</td>
            <td>border:1px solid @border-color(see app.variables.less)</td>
          </tr>
          <tr>
            <td>.b-l</td>
            <td>border left</td>
          </tr>
          <tr>
            <td>.b-t</td>
            <td>border top</td>
          </tr>
          <tr>
            <td>.b-r</td>
            <td>border right</td>
          </tr>
          <tr>
            <td>.b-b</td>
            <td>border bottom</td>
          </tr>
          <tr>
            <td>.b-light, .b-dark, .b-primary, .b-success, .b-info, .b-warning, .b-danger, .b-black, .b-white</td>
            <td>border with specific color.</td>
          </tr>
          <tr>
            <td>.b-2x</td>
            <td>border width with 2px</td>
          </tr>
          <tr>
            <td>.b-3x</td>
            <td>border width with 3px</td>
          </tr>
          <tr>
            <td>.no-border</td>
            <td>border width: 0</td>
          </tr>
          <tr>
            <td>.no-border-xs</td>
            <td>border width: 0 on etremely small screen.</td>
          </tr>
          <tr class="bg-light lt">
            <td colspan="2">Radius</td>
          </tr>
          <tr>
            <td>.r</td>
            <td>border-radius: @border-radius-base</td>
          </tr>
          <tr>
            <td>.r-l</td>
            <td>border-radius: @border-radius-base 0 0 @border-radius-base</td>
          </tr>
          <tr>
            <td>.r-r</td>
            <td>border-radius: 0 @border-radius-base @border-radius-base 0</td>
          </tr>
          <tr>
            <td>.r-t</td>
            <td>border-radius: @border-radius-base @border-radius-base 0 0</td>
          </tr>
          <tr>
            <td>.r-b</td>
            <td>border-radius: 0 0 @border-radius-base @border-radius-base</td>
          </tr>
          <tr>
            <td>.r-2x</td>
            <td>radius size: 2 x @border-radius-base</td>
          </tr>
          <tr>
            <td>.r-3x</td>
            <td>radius size: 3 x @border-radius-base</td>
          </tr>
          <tr class="bg-light lt">
            <td colspan="2">Padder and Wrapper</td>
          </tr>
          <tr>
            <td>.padder</td>
            <td>padding-left: 15px; padding-right: 15px</td>
          </tr>
          <tr>
            <td>.padder-md</td>
            <td>padding-left: 20px; padding-right: 20px</td>
          </tr>
          <tr>
            <td>.padder-lg</td>
            <td>padding-left: 30px; padding-right: 30px</td>
          </tr>
          <tr>
            <td>.no-padder</td>
            <td>padding: 0</td>
          </tr>
          <tr>
            <td>.wrapper</td>
            <td>padding: 15px</td>
          </tr>
          <tr>
            <td>.wrapper-sm</td>
            <td>padding: 10px</td>
          </tr>
          <tr>
            <td>.wrapper-xs</td>
            <td>padding: 5px</td>
          </tr>
          <tr>
            <td>.wrapper-md</td>
            <td>padding: 20px</td>
          </tr>
          <tr>
            <td>.wrapper-lg</td>
            <td>padding: 30px</td>
          </tr>
          <tr>
            <td>.wrapper-xl</td>
            <td>padding: 50px</td>
          </tr>
          <tr class="bg-light lt">
            <td colspan="2">Text</td>
          </tr>
          <tr>
            <td>.text-u-c</td>
            <td>text uppercase</td>
          </tr>
          <tr>
            <td>.text-l-t</td>
            <td>text line through</td>
          </tr>
          <tr>
            <td>.text-u-l</td>
            <td>text under line</td>
          </tr>
          <tr>
            <td>.text-ellipsis</td>
            <td>display text in one line with ellipsis</td>
          </tr>
          <tr>
            <td>.text-center-xs</td>
            <td>center text only on extremely small devices</td>
          </tr>
          <tr>
            <td>.text-left-xs</td>
            <td>align text left only on extremely small devices</td>
          </tr>
          <tr>
            <td>.text-right-xs</td>
            <td>align text right only on extremely small devices</td>
          </tr>
          <tr class="bg-light lt">
            <td colspan="2">Width and Height</td>
          </tr>
          <tr>
            <td>.w-xxl</td>
            <td>width: 360px</td>
          </tr>
          <tr>
            <td>.w-xl</td>
            <td>width: 320px</td>
          </tr>
          <tr>
            <td>.w-lg</td>
            <td>width: 280px</td>
          </tr>
          <tr>
            <td>.w-md</td>
            <td>width: 240px</td>
          </tr>
          <tr>
            <td>.w</td>
            <td>width: 200px</td>
          </tr>
          <tr>
            <td>.w-sm</td>
            <td>width: 158px</td>
          </tr>
          <tr>
            <td>.w-xs</td>
            <td>width: 90px</td>
          </tr>
          <tr>
            <td>.w-xxs</td>
            <td>width: 60px</td>
          </tr>
          <tr>
            <td>.w-full</td>
            <td>width: 100%</td>
          </tr>
          <tr>
            <td>.w-auto-xs</td>
            <td>width: auto on extremely small screen.</td>
          </tr>
          <tr>
            <td>.h-full</td>
            <td>height: 100%</td>
          </tr>
          <tr class="bg-light lt">
            <td colspan="2">Thumb</td>
          </tr>
          <tr>
            <td>.thumb-xl</td>
            <td>width: 128px</td>
          </tr>
          <tr>
            <td>.thumb-lg</td>
            <td>width: 96px</td>
          </tr>
          <tr>
            <td>.thumb-md</td>
            <td>width: 64px</td>
          </tr>
          <tr>
            <td>.thumb</td>
            <td>width: 50px</td>
          </tr>
          <tr>
            <td>.thumb-sm</td>
            <td>width: 48px</td>
          </tr>
          <tr>
            <td>.thumb-xs</td>
            <td>width: 34px</td>
          </tr>
          <tr>
            <td>.thumb-xxs</td>
            <td>width: 30px</td>
          </tr>          
          <tr>
            <td>.img-full</td>
            <td>width: 100%</td>
          </tr>
          <tr class="bg-light lt">
            <td colspan="2">Avatar</td>
          </tr>
          <tr>
            <td>.avatar</td>
            <td>circle photo</td>
          </tr>
          <tr>
            <td>status</td>
            <td>status, '.on', '.off', '.busy', '.away'</td>
          </tr>
          <tr>
            <td>status position</td>
            <td>status position, '.left', '.right', '.bottom'</td>
          </tr>
          <tr class="bg-light lt">
            <td colspan="2">Arrow</td>
          </tr>
          <tr>
            <td>.arrow</td>
            <td>base class</td>
          </tr>
          <tr>
            <td>.left</td>
            <td>left arrow, position:middle</td>
          </tr>
          <tr>
            <td>.right</td>
            <td>right arrow, position:middle</td>
          </tr>
          <tr>
            <td>.top</td>
            <td>top arrow, position:center</td>
          </tr>
          <tr>
            <td>.bottom</td>
            <td>bottom arrow, position:center</td>
          </tr>
          <tr>
            <td>.pull-left</td>
            <td>.top and .bottom arrow with left position</td>
          </tr>
          <tr>
            <td>.pull-right</td>
            <td>.top and .bottom arrow with right position</td>
          </tr>
          <tr>
            <td>.pull-up</td>
            <td>.left and .right arrow with up position</td>
          </tr>
          <tr>
            <td>.pull-down</td>
            <td>.left and .right arrow with down position</td>
          </tr>
          <tr class="bg-light lt">
            <td colspan="2">Item</td>
          </tr>
          <tr>
            <td>.item-overlay</td>
            <td>overlay the element on an item, default display:none, with '.active' class will show</td>
          </tr>
          <tr>
            <td>.top</td>
            <td>top element on a item element</td>
          </tr>
          <tr>
            <td>.bottom</td>
            <td>bottom element on a item element</td>
          </tr>
          <tr>
            <td>.center</td>
            <td>center element on a item element</td>
          </tr>
          <tr class="bg-light lt">
            <td colspan="2">Button</td>
          </tr>
          <tr>
            <td class="w">.btn-rounded</td>
            <td>rounded button</td>
          </tr>
          <tr>
            <td>.btn-icon</td>
            <td>icon only button</td>
          </tr>
          <tr>
            <td>.btn-addon</td>
            <td>icon addon, must have a i tag, and can use .pull-left and .pull-right</td>
          </tr>
          <tr class="bg-light lt">
            <td colspan="2">Timeline</td>
          </tr>
          <tr>
            <td class="w">.timeline</td>
            <td>timeline wrapper class</td>
          </tr>
          <tr>
            <td class="w">.timeline-center</td>
            <td>timeline with center position</td>
          </tr>
          <tr>
            <td class="w">.tl-item</td>
            <td>timeline item</td>
          </tr>
          <tr>
            <td class="w">.tl-wrap</td>
            <td>timeline item wrap</td>
          </tr>
          <tr>
            <td class="w">.tl-date</td>
            <td>timeline date</td>
          </tr>
          <tr>
            <td class="w">.tl-content</td>
            <td>timeline content</td>
          </tr>
          <tr class="bg-light lt">
            <td colspan="2">Streamline</td>
          </tr>
          <tr>
            <td class="w">.streamline</td>
            <td>streamline class</td>
          </tr>
          <tr>
            <td class="w">.sl-item</td>
            <td>streamline item, you can use .b-l and .b-info, b-danger... class to make it colorful.</td>
          </tr>
          <tr class="bg-light lt">
            <td colspan="2">Hbox</td>
          </tr>
          <tr>
            <td>.hbox</td>
            <td>display: table</td>
          </tr>
          <tr>
            <td>.col</td>
            <td>display: table-cell</td>
          </tr>
          <tr>
            <td>.v-middle</td>
            <td>vertical align: middle</td>
          </tr>
          <tr>
            <td>.v-top</td>
            <td>vertical align: top</td>
          </tr>
          <tr>
            <td>.v-bottom</td>
            <td>vertical align: bottom</td>
          </tr>
        </tbody>
      </table>

      <div id="core" class="wrapper"></div>
      <div class="line b-b"></div>
      <h3 class="text-danger font-thin m-t-xl m-b-none">Core</h3>
      <div>You must know AngularJS, "ui-router" and "ui-jq" to get started your project.</div>

      <div id="ui-router" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">ui-router</h4>
      <p>
        ui-router for <strong>Nested Routing</strong> and <strong>Nested View</strong>, check the <a href="http://angular-ui.github.io/ui-router/" class="text-info">official documents</a>
      </p>

      <div id="ui-load" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">ui-load</h4>
      <p>ui-load for <strong>lazy loading</strong> the js and css files. </p>
      <p class="well text-black bg-light lter">        
        angular.module('myModule', ['ui.load']);<br><br>
        uiLoad.load( 
          ['path/style.css', 'path/script.js']
        ).then(function() {<br>
          <span class="text-muted m-l">// loaded succesfully.</span><br>
        }).catch(function() {<br>
          <span class="text-muted m-l">// There was some error loading the files.</span><br>
        });<br>
      </p>
      <p>ui-load also used in the ui-router <code>resolve:{}</code> for lazy loading Angular Directives, Controllers and Services.</p>

      <div id="ui-jq" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">ui-jq</h4>
      <p>
        <code>ui-jq</code> Call the jQuery function or plugin specified on the element. check the <a href="http://angular-ui.github.io/ui-utils/#/jq" class="text-info">official documents</a>
      </p>

      <div id="ui-module" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">ui-module</h4>
      <p>
        <code>ui-module</code> Load other dependences for child directive. 
        you need config the dependences in "js/app.js" constant "MODULE_CONFIG".
        <br>example: check the "ui-select2" directive on "form/element"
      </p>

      <div id="ui-validate" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">ui-validate</h4>
      <p>
        The <code>ui-validate</code> directive makes it very easy to create custom validator expressions. check the <a href="http://angular-ui.github.io/ui-utils/#/validate" class="text-info">official documents</a>
      </p>

      <div id="directives" class="wrapper"></div>
      <div class="line b-b"></div>
      <h3 class="text-primary font-thin m-t-xl m-b-none">Directives</h3>

      <div id="ui-toggle-class" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">ui-toggle-class</h4>
      <p>
        Toggle class when click on the element, attr <code>target</code> for target element.
        <code>&lt;div ui-toggle-class="show" target="#nav">&lt;/div></code>
      </p>

      <div id="ui-shift" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">ui-shift</h4>
      <p>
        Shift element on xs screen, attr <code>target</code> for target element.
        <code>&lt;div ui-shift="append" target="#nav">&lt;/div></code>
      </p>

      <div id="ui-scroll" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">ui-scroll</h4>
      <p>
        Scroll to element when click, attr value for target element.
        <code>&lt;a ui-scroll="target">&lt;/a></code>
      </p>

      <div id="ui-fullscreen" class="wrapper"></div>
      <div class="line b-b"></div>
      <h4 class="m-t-xl">ui-fullscreen</h4>
      <p>
        Request fullscreen mode for element.
        <code>&lt;a ui-fullscreen>&lt;/a></code> or <code>&lt;a ui-fullscreen target="#target">&lt;/a></code>
      </p>

      <div id="plugins" class="wrapper"></div>
      <div class="line b-b"></div>
      <h3 class="text-info font-thin m-t-xl m-b-lg">Plugins</h3>
      <p>All jQuery plugins are depended on <code>ui-jq</code>, do not need create the Angular Directive for each of the plugin. you can config in the js/app.js Angular Constant <code>JQ_CONFIG</code>, <code>functionName => pluginPath</code>, the js and css files are lazy loaded.</p>       
      <div class="row m-b-xl">
        <div class="col-md-6">
            <h4 class="m-t-md">FullCalendar</h4>
            <p>Check the online <a href="http://arshaw.com/fullcalendar/"><strong>document</strong></a> and <a href="http://angular-ui.github.io/ui-calendar/"><strong>Angular Fullcalendar Wrapper</strong></a></p>

            <h4 class="m-t-md">Datatables</h4>
            <p>Check the online <a href="http://datatables.net/"><strong>document</strong></a>. </p>
            
            <h4 class="m-t-md">Chosen</h4>
            <p>Check the online <a href="http://github.com/harvesthq/chosen"><strong>document</strong></a>. </p>
            
            <h4 class="m-t-md">File-input</h4>
            <p>Check the online <a href="http://dev.tudosobreweb.com.br/bootstrap-filestyle/"><strong>document</strong></a>. </p>

            <h4 class="m-t-md">Slider</h4>
            <p>Check the online <a href="http://www.eyecon.ro/bootstrap-slider"><strong>document</strong></a>.</p>

            <h4 class="m-t-md">TouchSpin</h4>
            <p>Check the online <a href="http://www.virtuosoft.eu/code/bootstrap-touchspin/"><strong>document</strong></a>. </p>

            <h4 class="m-t-md">WYSISYG</h4>
            <p>Check the online <a href="http://github.com/mindmup/bootstrap-wysiwyg"><strong>document</strong></a>. </p>
        </div>
        <div class="col-md-6">

            <h4 class="m-t-md">Flotchart</h4>
            <p>Check the online <a href="http://www.flotcharts.org/"><strong>document</strong></a>. </p>

            <h4 class="m-t-md">Sparklines</h4>
            <p>Check the online <a href="http://omnipotent.net/jquery.sparkline"><strong>document</strong></a>. </p>

            <h4 class="m-t-md">Easy pie chart</h4>
            <p>Check the online <a href="http://rendro.github.io/easy-pie-chart"><strong>document</strong></a>. </p>

            <h4 class="m-t-md">Sortable</h4>
            <p>Check the online <a href="http://farhadi.ir/projects/html5sortable"><strong>document</strong></a>. </p>

            <h4 class="m-t-md">Nestable</h4>
            <p>Check the online <a href="http://dbushell.github.io/Nestable/"><strong>document</strong></a>. </p>

            <h4 class="m-t-md">SlimScroll</h4>
            <p>Check the online <a href="http://rocha.la"><strong>document</strong></a>. </p>

            <h4 class="m-t-md">JvectorMap</h4>
            <p>Check the online <a href="http://jvectormap.com/"><strong>document</strong></a>. </p>
        </div>
      </div>
 
    </div>
  </div>
</div>
      <hr> -->
  <!--  <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Editor</h1>
</div>
<div class="wrapper-md">
  <div lazy-load="textAngular">
    <div text-angular ng-model="htmlVariable" class="btn-groups"></div>
  </div>
</div>   <hr>
   <div class="hbox hbox-auto-xs hbox-auto-sm" ng-controller="FileUploadCtrl"  nv-file-drop="" uploader="uploader" filters="queueLimit, customFilter">
  <div class="col w-lg bg-light b-r bg-auto">
    <div class="wrapper-md dker b-b">
      <h3 class="m-n font-thin">Select files</h3>
    </div>
    <div class="wrapper-md">      
      <div ng-show="uploader.isHTML5" class="m-b-md">
          <!-- 3. nv-file-over uploader="link" over-class="className" -->
          <div class="b-a b-2x b-dashed wrapper-lg bg-white text-center m-b" nv-file-over="" over-class="b-info" uploader="uploader">
              Base drop zone
          </div>

          <!-- Example: nv-file-drop="" uploader="{Object}" options="{Object}" filters="{String}" -->
          <div nv-file-drop="" uploader="uploader" options="{ url: '/foo' }">
              <div nv-file-over="" uploader="uploader" over-class="b-danger" class="b-a b-2x b-dashed wrapper-lg lter text-center">
                  Another drop zone with its own settings
              </div>
          </div>
      </div>

      <!-- Example: nv-file-select="" uploader="{Object}" options="{Object}" filters="{String}" -->
      <p>Multiple</p>
      <input type="file" nv-file-select="" uploader="uploader" multiple  />

      <p class="m-t-md">Single</p>
      <input type="file" nv-file-select="" uploader="uploader" />
    </div>
  </div>
  <div class="col">
    <div class="wrapper-md bg-light dk b-b">
      <span class="pull-right m-t-xs">Queue length: <b class="badge bg-info">{{ uploader.queue.length }}</b></span>
      <h3 class="m-n font-thin">Upload queue</h3>      
    </div>
    <div class="wrapper-md">
      <table class="table bg-white-only b-a">
          <thead>
              <tr>
                  <th width="50%">Name</th>
                  <th ng-show="uploader.isHTML5">Size</th>
                  <th ng-show="uploader.isHTML5">Progress</th>
                  <th>Status</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              <tr ng-repeat="item in uploader.queue">
                  <td><strong>{{ item.file.name }}</strong></td>
                  <td ng-show="uploader.isHTML5" nowrap>{{ item.file.size/1024/1024|number:2 }} MB</td>
                  <td ng-show="uploader.isHTML5">
                      <div class="progress progress-sm m-b-none m-t-xs">
                          <div class="progress-bar bg-info" role="progressbar" ng-style="{ 'width': item.progress + '%' }"></div>
                      </div>
                  </td>
                  <td class="text-center">
                      <span ng-show="item.isSuccess" class="text-success"><i class="glyphicon glyphicon-ok"></i></span>
                      <span ng-show="item.isCancel" class="text-warning"><i class="glyphicon glyphicon-ban-circle"></i></span>
                      <span ng-show="item.isError" class="text-danger"><i class="glyphicon glyphicon-remove"></i></span>
                  </td>
                  <td nowrap>
                      <button type="button" class="btn btn-default btn-xs" ng-click="item.upload()" ng-disabled="item.isReady || item.isUploading || item.isSuccess">
                          Upload
                      </button>
                      <button type="button" class="btn btn-default btn-xs" ng-click="item.cancel()" ng-disabled="!item.isUploading">
                          Cancel
                      </button>
                      <button type="button" class="btn btn-default btn-xs" ng-click="item.remove()">
                          Remove
                      </button>
                  </td>
              </tr>
          </tbody>
      </table>
      <div>
        <div>
          <p>Queue progress:</p>
          <div class="progress bg-light dker" style="">
              <div class="progress-bar progress-bar-striped bg-info" role="progressbar" ng-style="{ 'width': uploader.progress + '%' }"></div>
          </div>
        </div>
        <button type="button" class="btn btn-addon btn-success" ng-click="uploader.uploadAll()" ng-disabled="!uploader.getNotUploadedItems().length">
          <i class="fa fa-arrow-circle-o-up"></i> Upload all
        </button>
        <button type="button" class="btn btn-addon btn-warning" ng-click="uploader.cancelAll()" ng-disabled="!uploader.isUploading">
          <i class="fa fa-ban"></i> Cancel all
        </button>
        <button type="button" class="btn btn-addon btn-danger" ng-click="uploader.clearQueue()" ng-disabled="!uploader.queue.length">
            <i class="fa fa-trash-o"></i> Remove all
        </button>
        <p class="text-muted m-t-xl">Note: upload.php file included, files will be uploaded to "src/js/controllers/uploads".</p>
      </div>
    </div>
  </div>
</div>
      <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Image Crop</h1>
</div>
<div class="wrapper-md" ng-controller="ImgCropCtrl">
  <div class="m-b">
    Select an image file
    <input type="file" id="fileInput" />
  </div>
  <div class="hbox hbox-auto-xs">
    <div class="col">
      <div class="wrapper-sm b-a bg-white m-r-xs m-b-xs">
        <div class="bg-light" style="height:320px">
          <img-crop 
            image="myImage" 
            result-image="myCroppedImage"
            result-image-size="160"
            area-type="{{cropType}}"
          ></img-crop>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="inline bg-white wrapper-sm b-a">
        <div class="bg-light">
          <img ng-src="{{myCroppedImage}}" />
        </div>
      </div>
    </div>
  </div>
  <div class="btn-group m-t">
      <label class="btn btn-default" ng-model="cropType" btn-radio="'circle'">Circle</label>
      <label class="btn btn-default" ng-model="cropType" btn-radio="'square'">Square</label>
  </div>
<div>   <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">UI Selects</h1>
</div>
<div class="wrapper-md">
  <form class="form-horizontal">
    <fieldset>
      <div class="form-group">
        <label class="col-sm-3 control-label text-left">Address</label>
        <div class="col-sm-6">

          <ui-select ng-model="address.selected"
                     theme="bootstrap"
                     ng-disabled="disabled"
                     reset-search-input="false"
                     style="width: 300px;">
            <ui-select-match placeholder="Enter an address...">{<?php echo ($select["selected"]["formatted_address"]); ?>}</ui-select-match>
            <ui-select-choices repeat="address in addresses track by $index"
                     refresh="refreshAddresses($select.search)"
                     refresh-delay="0">
              <div ng-bind-html="address.formatted_address | highlight: $select.search"></div>
            </ui-select-choices>
          </ui-select>
          <span class="help-block">{{address.selected.formatted_address}}</span>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label text-left">Default</label>
        <div class="col-sm-6">

          <ui-select ng-model="person.selected" theme="bootstrap">
            <ui-select-match placeholder="Select or search a person in the list...">{<?php echo ($select["selected"]["name"]); ?>}</ui-select-match>
            <ui-select-choices repeat="item in people | filter: $select.search">
              <div ng-bind-html="item.name | highlight: $select.search"></div>
              <small ng-bind-html="item.email | highlight: $select.search"></small>
            </ui-select-choices>
          </ui-select>

        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label text-left">Grouped</label>
        <div class="col-sm-6">

          <ui-select ng-model="person.selected" theme="bootstrap">
            <ui-select-match placeholder="Select or search a person in the list...">{<?php echo ($select["selected"]["name"]); ?>}</ui-select-match>
            <ui-select-choices group-by="'group'" repeat="item in people | filter: $select.search">
              <span ng-bind-html="item.name | highlight: $select.search"></span>
              <small ng-bind-html="item.email | highlight: $select.search"></small>
            </ui-select-choices>
          </ui-select>

        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label text-left">Grouped using a string</label>
        <div class="col-sm-6">

          <ui-select ng-model="person.selected" theme="bootstrap" ng-disabled="disabled" style="min-width: 300px;">
            <ui-select-match placeholder="Select a person in the list or search his name/age...">{<?php echo ($select["selected"]["name"]); ?>}</ui-select-match>
            <ui-select-choices group-by="'country'" repeat="person in people | propsFilter: {name: $select.search, age: $select.search}">
              <div ng-bind-html="person.name | highlight: $select.search"></div>
              <small>
                email: {{person.email}}
                age: <span ng-bind-html="''+person.age | highlight: $select.search"></span>
              </small>
            </ui-select-choices>
          </ui-select>

        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label text-left">Group using a function</label>
        <div class="col-sm-6">

          <ui-select ng-model="person.selected" theme="bootstrap" ng-disabled="disabled" style="min-width: 300px;">
            <ui-select-match placeholder="Select a person in the list or search his name/age...">{<?php echo ($select["selected"]["name"]); ?>}</ui-select-match>
            <ui-select-choices group-by="someGroupFn" repeat="person in people | propsFilter: {name: $select.search, age: $select.search}">
              <div ng-bind-html="person.name | highlight: $select.search"></div>
              <small>
                email: {{person.email}}
                age: <span ng-bind-html="''+person.age | highlight: $select.search"></span>
              </small>
            </ui-select-choices>
          </ui-select>

        </div>
      </div>        

      <div class="form-group">
        <label class="col-sm-3 control-label text-left">With a clear button</label>
        <div class="col-sm-6">
          <div class="input-group">

            <ui-select ng-model="person.selected" theme="bootstrap">
              <ui-select-match placeholder="Select or search a person in the list...">{<?php echo ($select["selected"]["name"]); ?>}</ui-select-match>
              <ui-select-choices repeat="item in people | filter: $select.search">
                <span ng-bind-html="item.name | highlight: $select.search"></span>
                <small ng-bind-html="item.email | highlight: $select.search"></small>
              </ui-select-choices>
            </ui-select>

            <span class="input-group-btn">
              <button ng-click="person.selected = undefined" class="btn btn-default">
                <span class="glyphicon glyphicon-trash"></span>
              </button>
            </span>

          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label text-left">Multiple</label>
        <div class="col-sm-6">

          <ui-select multiple ng-model="multipleDemo.selectedPeopleWithGroupBy" theme="bootstrap" ng-disabled="disabled">
            <ui-select-match placeholder="Select person...">{<?php echo ($item["name"]); ?>} &lt;{<?php echo ($item["email"]); ?>}&gt;</ui-select-match>
            <ui-select-choices group-by="someGroupFn" repeat="person in people | propsFilter: {name: $select.search, age: $select.search}">
              <div ng-bind-html="person.name | highlight: $select.search"></div>
              <small>
                email: {{person.email}}
                age: <span ng-bind-html="''+person.age | highlight: $select.search"></span>
              </small>
            </ui-select-choices>
          </ui-select>

        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label text-left">Disabled</label>
        <div class="col-sm-6">

          <ui-select ng-model="person.selected" theme="bootstrap" ng-disabled="true">
            <ui-select-match placeholder="Select or search a person in the list...">{<?php echo ($select["selected"]["name"]); ?>}</ui-select-match>
            <ui-select-choices repeat="item in people | filter: $select.search">
              <div ng-bind-html="item.name | highlight: $select.search"></div>
              <small ng-bind-html="item.email | highlight: $select.search"></small>
            </ui-select-choices>
          </ui-select>

        </div>
      </div>

    </fieldset>
  </form>
</div>
      <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Validation</h1>
</div>
<div class="wrapper-md">
  <div ng-controller="FormDemoCtrl">
    <div class="row">
      <div class="col-sm-6">
        <form name="form" class="form-validation">
          <div class="panel panel-default">
            <div class="panel-heading">
              <span class="h4">Register</span>
            </div>
            <div class="panel-body">
              <p class="text-muted">Please fill the information to continue</p>
              <div class="form-group">
                <label>Username <em class="text-muted">(allow 'a-zA-Z0-9', 4-10 length)</em></label>
                <input type="text" class="form-control" ng-model="user.name" ng-pattern="/^[a-zA-Z0-9]{4,10}$/" required >
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" ng-model="user.email" required >
              </div>
              <div class="form-group pull-in clearfix">
                <div class="col-sm-6">
                  <label>Enter password</label>
                  <input type="password" class="form-control" name="password" ng-model="password" required >   
                </div>
                <div class="col-sm-6">
                  <label>Confirm password</label>
                  <input type="password" class="form-control" name="confirm_password" required ng-model="confirm_password" ui-validate=" '$value==password' " ui-validate-watch=" 'password' ">
                  <span ng-show='form.confirm_password.$error.validator'>Passwords do not match!</span>
                </div>
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="(XXX) XXXX XXX" ng-model="phone" ng-pattern="/\([0-9]{3}\) ([0-9]{3}) ([0-9]{3})$/" required >
              </div>
              <div class="checkbox">
                <label class="i-checks">
                  <input type="checkbox" ng-model="agree" required><i></i> I agree to the <a href class="text-info">Terms of Service</a>
                </label>
              </div>
            </div>
            <footer class="panel-footer text-right bg-light lter">
              <button type="submit" class="btn btn-success" ng-disabled="form.$invalid">Submit</button>
            </footer>
          </div>
        </form>
      </div>
      <div class="col-sm-6">
        <form name="form-contact" class="form-validation">
          <div class="panel panel-default">
            <div class="panel-heading">
              <span class="h4">Contact</span>
            </div>
            <div class="panel-body">
              <p class="text-muted">Need support? please fill the fields below.</p>                        
                <div class="form-group pull-in clearfix">
                  <div class="col-sm-6">
                    <label>Your name</label>
                    <input type="text" class="form-control" placeholder="Name" ng-model="contact.name" required >
                  </div>
                  <div class="col-sm-6">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter email" ng-model="contact.email" required >
                  </div>
                </div>
                <div class="form-group">
                  <label>Your website</label>
                  <input type="url" class="form-control" placeholder="http://" ng-model="contact.url" required>
                </div>
                <div class="form-group">
                  <label>Message</label>
                  <textarea class="form-control" rows="6" placeholder="Type your message"></textarea>
                </div>
            </div>
            <footer class="panel-footer text-right bg-light lter">
              <button type="submit" class="btn btn-success">Submit</button>
            </footer>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <form name="formValidate" class="form-horizontal form-validation">
          <div class="panel panel-default">
            <div class="panel-heading">
              <strong>Basic constraints</strong>
            </div>
            <div class="panel-body">                    
              <div class="form-group">
                <label class="col-sm-3 control-label">Required</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="required field" ng-model="f.a" required >
                  <select class="form-control m-t" ng-model="f.b" required >
                      <option value="">Please choose</option>
                      <option value="foo">Foo</option>
                      <option value="bar">Bar</option>
                  </select>
                  <label class="checkbox i-checks">
                    <input type="checkbox" ng-model="f.c" required><i></i> Agree to the policy
                  </label>
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Min Length</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="minlength = 5" ng-model="f.d" ng-minlength="5" required>
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Max Length</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="maxlength = 5" ng-model="f.e" ng-maxlength="5" required>
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Range Length</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="minlength = 5 maxlength = 10" ng-model="f.f" ng-minlength="5" ng-maxlength="10" required>
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Min</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" placeholder="min = 5" ng-model="f.g" ui-validate=" '$value >= 5' " required>
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Max</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" placeholder="max = 5" ng-model="f.h" ui-validate=" '$value <= 5' " required>
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Range</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" placeholder="min = 5 max = 10" ng-model="f.i" ui-validate="{ a:'$value >= 5', b:'$value <= 10' }" required>
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">RegExp</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="hexa color code" ng-model="f.j" ng-pattern="/^#(?:[0-9a-fA-F]{3}){1,2}$/" required>
                </div>
              </div>
            </div>
            <footer class="panel-footer text-right bg-light lter">
              <button type="submit" class="btn btn-success">Submit</button>
            </footer>
          </div>
        </form>
      </div>
      <div class="col-sm-6">
        <form name="forma" class="form-horizontal form-validation">
          <div class="panel panel-default">
            <div class="panel-heading">
              <strong>Type constraints</strong>
            </div>
            <div class="panel-body">                    
              <div class="form-group">
                <label class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" placeholder="email" ng-model="g.a" required >    
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Url</label>
                <div class="col-sm-9">
                  <input type="url" class="form-control" placeholder="http://" ng-model="g.b" required >
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Digits</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="digits" ng-model="g.c" ng-pattern="/^[0-9]+$/" required >
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Number</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" placeholder="number" ng-model="g.d" required >
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Alphanum</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="alphanumeric string" ng-model="g.e" ng-pattern="/^[a-zA-Z]+$/" required >
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Date Iso</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="YYYY-MM-DD" ng-model="g.f" ng-pattern="/[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])$/" required >
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Phone</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="(XXX) XXXX XXX" ng-model="g.g" ng-pattern="/\([0-9]{3}\) ([0-9]{3}) ([0-9]{3})$/" required >
                </div>
              </div>            
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Equal To</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-sm-6"><input type="text" name="foo" class="form-control" ng-model="g.h" required></div>
                    <div class="col-sm-6"><input type="text" name="confirm_foo" class="form-control" required ng-model="g.i" ui-validate=" '$value==g.h' " ui-validate-watch=" 'g.h' ">
                    <span ng-show='forma.confirm_foo.$error.validator'>Not match!</span></div>
                  </div>
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Black-list</label>
                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" placeholder="input 'bad@domain.com'" ng-model="g.j" ui-validate="{blacklist : 'notBlackListed($value)' }" required>
                  <span ng-show='forma.email.$error.blacklist'>This e-mail is black-listed!</span>
                </div>
              </div>
            </div>
            <footer class="panel-footer text-right bg-light lter">
              <button type="submit" class="btn btn-success">Submit</button>
            </footer>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
      <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Form Wizard</h1>
</div>
<div class="wrapper-md">
  <tabset class="tab-container" ng-init="steps={percent:20, step1:true, step2:false, step3:false}">
    <tab heading="Step 1" active="steps.step1" select="steps.percent=10">
      <p class="m-b">Use the Bootstrap tab components and ngForm to build the form wizard.</p>
      <progressbar value="steps.percent" class="progress-xs" type="success"></progressbar>
      <h4>Validate Form</h4>
      <form name="step1" class="form-validation">
        <p>Your email:</p>
        <input type="email" name="email" class="form-control" ng-model="email" required ng-change="step1.email.$valid ? (steps.percent=30) : (steps.percent=20)">
        <p class="m-t">Your website:</p>
        <input type="url" name="url" placeholder="http://" class="form-control" ng-model="website" required>
        <div class="m-t m-b">
          <button type="submit" ng-disabled="step1.$invalid" class="btn btn-default btn-rounded" ng-click="steps.step2=true">Next</button>
        </div>
      </form>
    </tab>
    <tab heading="Step 2" disabled="step1.$invalid" active="steps.step2" select="steps.percent=30">
      <form name="step2" class="form-validation">
        <p class="m-b">Continue the next step</p>
        <progressbar value="steps.percent" class="progress-xs" type="success"></progressbar>
        <p>Your age:</p>
        <input type="number" name="age" class="form-control" ng-model="age" required>
        <div class="m-t m-b">
          <button type="button" class="btn btn-default btn-rounded" ng-click="steps.step1=true">Prev</button>
          <button type="submit" ng-disabled="step2.$invalid" class="btn btn-default btn-rounded" ng-click="steps.step3=true">Next</button>
        </div>
      </form>
    </tab>
    <tab heading="Step 3" disabled="step2.$invalid" active="steps.step3" select="steps.percent=60">
      <p class="m-b">Congraduations! You got the last step.</p>
      <progressbar value="steps.percent" class="progress-xs" type="success"></progressbar>
      <p>Just one click to finish it.</p>
      <div class="m-t m-b">
        <button type="button" class="btn btn-default btn-rounded" ng-click="steps.step2=true">Prev</button>
        <button type="button" class="btn btn-default btn-rounded" ng-click="steps.percent=100">Click me to Finish</button>
      </div>
    </tab>
  </tabset>
</div>
      <hr> -->
 <!--     <!-- navbar -->
  <div data-ng-include=" 'tpl/blocks/header.html' " class="app-header navbar">
  </div>
  <!-- / navbar -->

  <!-- menu -->
  <div data-ng-include=" 'tpl/blocks/aside.html' " class="app-aside hidden-xs {{app.settings.asideColor}}" ng-class="{'hide': app.hideAside }">
  </div>
  <!-- / menu -->

  <!-- view -->
  <div class="app-content" ng-class="{'m-n': app.hideAside, 'h-full': app.hideFooter }">
    <div class="app-content-body app-content-full fade-in-up" ng-class="{'h-full': app.hideFooter }" ui-view>
    </div>
  </div>
  <!-- / view -->
  <!-- navbar -->
  <div class="app-footer navbar navbar-fixed-bottom bg-light lt b-t" ng-class="{'m-n': app.hideAside, 'hide': app.hideFooter}" ui-view="footer">
    
  </div>
  <!-- /navbar -->
      <hr>
   <!-- hbox layout -->
<div class="hbox hbox-auto-xs bg-light " ng-init="
  app.settings.asideFolded = true; 
  app.settings.asideFixed = true;
  app.settings.asideDock = false;
  app.settings.container = false;
  app.hideAside = false
  ">
  <!-- column -->
  <div class="col w lter b-r" ng-controller="CustomTabController">
    <div class="vbox">
      <div class="wrapper b-b">
        <div class="font-thin h4">Header</div>
      </div>
      <div class="nav-tabs-alt">
        <ul class="nav nav-tabs nav-justified">
          <li ng-class="{'active': tabs[0]}">
            <a href ng-click="tab(0)">Day</a>
          </li>
          <li ng-class="{'active': tabs[1]}">
            <a href ng-click="tab(1)">Month</a>
          </li>
          <li ng-class="{'active': tabs[2]}">
            <a href ng-click="tab(2)">Year</a>
          </li>
        </ul>
      </div>
      <div class="row-row">
        <div class="cell scrollable hover">
          <div class="cell-inner">
            <div class="tab-content">
              <div class="tab-pane" ng-class="{'active': tabs[0]}">
                <div class="wrapper-md">
                  This is the scrollable content, hover to show the scrollbar
                  <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                  You got the bottom
                </div>
              </div>
              <div class="tab-pane" ng-class="{'active': tabs[1]}">
                <div class="wrapper-md">
                  Month report
                </div>
              </div>
              <div class="tab-pane" ng-class="{'active': tabs[2]}">
                <div class="wrapper-md">
                  Year report
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /column -->

  <!-- column -->
  <div class="col">
    <div class="vbox">
      <div class="row-row">
        <div class="cell">
          <div class="cell-inner">
            <div class="wrapper-md">
              This is the scrollable content
              <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
              You got the bottom
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /column -->

  <!-- column -->
  <div class="col w-md lter b-l">
    <div class="vbox">
      <div class="wrapper b-b b-light">
        <div class="font-thin h4">Header</div>
        <small class="text-muted">with fluid height</small>
      </div>
      <div class="row-row">
        <div class="cell">
          <div class="cell-inner">
            <div class="wrapper-md">
              This is the scrollable content
              <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
              You got the bottom
            </div>
          </div>
        </div>
      </div>
      <div class="padder b-t b-light text-center">
        <div class="m-xs">Footer with fluid height</div>
      </div>
    </div>
  </div>
  <!-- /column -->
</div>
<!-- /hbox layout -->
   <hr>
     <ul class="nav nav-pills nav-md pull-left">
    <li><a href>Link</a></li>
    <li class="dropdown" dropdown>
      <a href class="dropdown-toggle" dropdown-toggle>Dropup <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href>Action</a></li>
        <li><a href>Another action</a></li>
        <li><a href>Something else here</a></li>
        <li class="divider"></li>
        <li><a href>Separated link</a></li>
        <li class="divider"></li>
        <li><a href>One more separated link</a></li>
      </ul>
    </li>
  </ul>
  <ul class="nav nav-pills nav-md pull-right">
    <li><a href>Link</a></li>
    <li class="dropdown" dropdown>
      <a href dropdown-toggle>Dropup <span class="caret"></span></a>
      <ul class="dropdown-menu pull-right" role="menu">
        <li><a href>Action</a></li>
        <li><a href>Another action</a></li>
        <li><a href>Something else here</a></li>
        <li class="divider"></li>
        <li><a href>Separated link</a></li>
      </ul>
    </li>
  </ul>
   <hr>
   <div class="row">
  <div class="col-sm-2 hidden-xs">

  </div>
  <div class="col-sm-8">
    <div class="w-xl w-auto-xs center-block">
      <div class="btn-group btn-group-justified text-center text-sm">
        <div class="btn-group">
          <a class="wrapper-xs block">
            <i class="block text-md m-t-xs icon-user"></i>
            <span class="text-sm">Account</span>
          </a>
        </div>
        <div class="btn-group">
          <a class="wrapper-xs block">
            <i class="block text-md m-t-xs icon-cloud-upload"></i>
            <span class="text-sm">Upload</span>
          </a>
        </div>
        <div class="btn-group">
          <a class="wrapper-xs block">
            <i class="block text-md m-t-xs icon-clock"></i>
            <span class="text-sm">Watch</span>
          </a>
        </div>
        <div class="btn-group">    
          <a class="wrapper-xs block">
            <i class="block text-md m-t-xs icon-bag"></i>
            <span class="text-sm">Shopping</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-2 hidden-xs">

  </div>
</div>
   <hr>
   <!-- hbox layout -->
<div class="hbox hbox-auto-xs bg-light " ng-controller="JVectorMapDemoCtrl" ng-init="
  app.settings.asideFolded = true;
  app.settings.asideDock = false;
  app.settings.container = false;
  app.hideAside = true" 
  >
  <!-- column -->
  <div class="col item">
    <div ui-jq="vectorMap" class="h-full" style="min-height:240px;" ui-options="{
      map: 'us_aea_en',
      markers: {{usa_markers}},
      normalizeFunction: 'polynomial',
      backgroundColor: 'transparent',
      zoomMin: 0.5,            
      regionsSelectable: true,
      markersSelectable: true,
      regionsSelectableOne: true,
      markersSelectableOne: true,
      focusOn: {
        x:0,
        y:0,
        scale: 0.6
      },
      series: {
        markers: [{
          attribute: 'r',
          scale: [5, 15],
          values: [
            100.70,
            255.16,
            310.69,
            605.17,
            248.31,
            107.35,
            217.22
          ]
        }]
      },
      regionStyle: {
        initial: {
          fill: '#dde6e9',
          stroke: '#edf1f2',
          'stroke-width': 2,
          'stroke-opacity': 1
        },
        hover: {
          fill: '#fff'
        },
        selected: {
          fill: '{{app.color.info}}'
        },
      },
      markerStyle: {
        initial: {
          fill: '{{app.color.info}}',
          stroke: '#fff',
          r: 10
        },
        hover: {
          stroke: '#fff'
        },
        selected: {
          fill: '{{app.color.warning}}'
        }
      }
    }">
    </div>
    <div class="top" style="top:20px;left:60px">
      <div class="panel no-border w-md">
        <div class="panel-heading ">
          <a href class="pull-right" ng-click="isCollapsed = !isCollapsed" ui-toggle-class>
            <i class="fa fa-angle-up text"></i>
            <i class="fa fa-angle-down text-active"></i>
          </a>
          <span class="font-bold">Mark Detail</span>
        </div>
        <div collapse="isCollapsed">
          <div class="panel-body bg-light lter">
            <div class="scrollable" style="max-height:110px" ui-jq="slimScroll" ui-options="{height:'110px', size:'6px'}">
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. 
              </p>
              <p>
              Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat.
              </p>
            </div>
          </div>
          <div class="panel-footer">
            <i class="fa fa-fw m-r-xs text-info fa-bookmark"></i><span class="font-bold">37</span>
            <i class="fa fa-fw m-r-xs text-info fa-star m-l"></i><span class="font-bold">120</span>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom text-right w-full">
      <small class="text-muted wrapper-sm block">Data @ naturalearthdata.com.</small>
    </div>
  </div>
  <!-- /column -->

  <!-- column -->
  <div class="col w-md lter b-l">
    <div class="vbox">
      <div class="wrapper b-b b-light">Map</div>
      <div class="row-row">
        <div class="cell">
          <div class="cell-inner">
            <div class="wrapper-md">
              This is the scrollable content
              <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
              You got the bottom
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper b-t b-light text-center">
        <p>Footer with fluid height</p>
        <a href class="btn btn-info">Create Marker</a>
      </div>
    </div>
  </div>
  <!-- /column -->
</div>
<!-- /hbox layout -->
   <hr>
   <div class="hbox hbox-auto-xs" ng-init="
  app.settings.asideFixed = true;
  app.settings.asideDock = false;
  app.settings.container = false;
  app.hideAside = false;
  app.hideFooter = false;
  ">
  <div class="col w-md w-auto-xs bg-light lter b-r">
    <div class="wrapper">
      Left
    </div>
  </div>
  <div class="col">
    <div class="wrapper">
      Main
    </div>
  </div>
</div>
   <hr> -->
 <!--   <div ng-controller="MailDetailCtrl">
  <!-- header -->
  <div class="wrapper bg-light lter b-b">
    <a ui-sref="app.mail.list" class="btn btn-sm btn-default w-xxs m-r-sm" tooltip="Back to Inbox"><i class="fa fa-long-arrow-left"></i></a>
    <div class="btn-group m-r-sm">
      <button class="btn btn-sm btn-default w-xxs w-auto-xs" tooltip="Archive"><i class="fa fa-archive"></i></button>
      <button class="btn btn-sm btn-default w-xxs w-auto-xs" tooltip="Report"><i class="fa fa-exclamation-circle"></i></button>
      <button class="btn btn-sm btn-default w-xxs w-auto-xs" tooltip="Delete"><i class="fa fa-trash-o"></i></button>
    </div>
    <div class="btn-group">
      <div class="btn-group dropdown">
        <button class="btn btn-sm btn-default w-xxs w-auto-xs dropdown-toggle" tooltip="Move to"><i class="fa fa-fw fa-folder"></i> <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href>Trash</a></li>
          <li><a href>Spam</a></li>
        </ul>
      </div>
      <div class="btn-group dropdown">
        <button class="btn btn-sm btn-default w-xxs w-auto-xs dropdown-toggle" tooltip="Move to"><i class="fa fa-fw fa-tag"></i> <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li ng-repeat="label in labels">
            <a href>
              <i class="fa fa-fw fa-circle text-muted text-xs" color="{{label.color}}" label-color ></i>
              {{label.name}}
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- / header -->
  <div class="wrapper b-b">
    <h2 class="font-thin m-n">{{mail.subject}}</h2>
  </div>
  <div class="wrapper b-b">
    <img ng-src="{{mail.avatar}}" class="img-circle thumb-xs m-r-sm">
    from <a href>{{mail.from}}</a> on {{mail.date}}
  </div>
  <div class="wrapper">
    {{mail.content}}
  </div>
  <div class="wrapper">
    <div ng-repeat="attach in mail.attach" class="panel b-a inline m-r-sm m-b-sm bg-light">
      <div class="wrapper-xs b-b"><i class="fa fa-paperclip"></i> {{attach.name}}</div>
      <div class="wrapper-xs w-sm lt">
        <a ng-href="{{attach.url}}"><img ng-src="{{attach.url}}" class="img-full"></a>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="panel b-a">
      <div class="panel-heading ng-show" ng-hide="reply">
        <div class="m-b-lg">
        Click here to <a href class="text-u-l" ng-click="reply=!reply">Reply</a> or <a href class="text-u-l" ng-click="reply=!reply">Forward</a>
        </div>
      </div>
      <div class="ng-hide" ng-show="reply">
        <div class="panel-heading b-b b-light">
          {{mail.from}}
        </div>
        <div class="wrapper" contenteditable="true" style="min-height:100px"></div>
        <div class="panel-footer bg-light lt">
          <button class="btn btn-link pull-right" ng-click="reply=!reply"><i class="fa fa-trash-o"></i></button>
          <button class="btn btn-info w-xs font-bold">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
   <hr>
   
<div class="hbox hbox-auto-xs hbox-auto-sm" ng-controller="MailCtrl">
  <div class="col w-md bg-light dk b-r bg-auto">
    <div class="wrapper b-b bg">
      <button class="btn btn-sm btn-default pull-right visible-sm visible-xs" ui-toggle-class="show" target="#email-menu"><i class="fa fa-bars"></i></button>
      <a ui-sref="app.mail.compose" class="btn btn-sm btn-danger w-xs font-bold">Compose</a>
    </div>
    <div class="wrapper hidden-sm hidden-xs" id="email-menu">
      <ul class="nav nav-pills nav-stacked nav-sm">
        <li ng-repeat="fold in folds" ui-sref-active="active">
          <a ui-sref="app.mail.list({fold:fold.filter})">
            {{fold.name}}
          </a>
        </li>
      </ul>
      <div class="wrapper">Labels</div>
      <ul class="nav nav-pills nav-stacked nav-sm">
        <li ng-repeat="label in labels" ui-sref-active="active">
          <a ui-sref="app.mail.list({fold:label.filter})">
            <i class="fa fa-fw fa-circle text-muted" color="{{label.color}}" label-color ></i>
            {{label.name}}
          </a>
        </li>
      </ul>
      <div class="wrapper">
        <form name="label">
          <div class="input-group">
            <input type="text" class="form-control input-sm" ng-model="newLabel.name" placeholder="New label" required>
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="button" ng-click="addLabel()" ng-disabled="label.$invalid">Add</button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col">
    <div ui-view ></div>
  </div>
</div>
   <hr>
   
<div ng-controller="MailListCtrl">
  <!-- header -->
  <div class="wrapper bg-light lter b-b">
    <div class="btn-group pull-right">
      <button type="button" class="btn btn-sm btn-bg btn-default"><i class="fa fa-chevron-left"></i></button>
      <button type="button" class="btn btn-sm btn-bg btn-default"><i class="fa fa-chevron-right"></i></button>
    </div>
    <div class="btn-toolbar">
      <div class="btn-group dropdown">
        <button class="btn btn-default btn-sm btn-bg dropdown-toggle" data-toggle="dropdown">
          <span class="dropdown-label">Filter</span>                    
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu text-left text-sm">
          <li><a ui-sref="app.mail.list({fold:'unread'})">Unread</a></li>
          <li><a ui-sref="app.mail.list({fold:'starred'})">Starred</a></li>
        </ul>
      </div>
      <div class="btn-group">
        <button class="btn btn-sm btn-bg btn-default" data-toggle="tooltip" data-placement="bottom" data-title="Refresh" data-original-title="" title=""><i class="fa fa-refresh"></i></button>
      </div>
    </div>
  </div>
  <!-- / header -->

  <!-- list -->
  <ul class="list-group list-group-lg no-radius m-b-none m-t-n-xxs">
    <li ng-repeat="mail in mails | filter:fold" ng-class="labelClass(mail.label)" class="list-group-item clearfix b-l-3x">
      <a ui-sref="app.page.profile" class="avatar thumb pull-left m-r">
        <img ng-src="{{mail.avatar}}">
      </a>
      <div class="pull-right text-sm text-muted">
        <span class="hidden-xs">{{ mail.date | fromNow }}</span>
        <i class="fa fa-paperclip ng-hide m-l-sm" ng-show="{{mail.attach}}"></i>
      </div>
      <div class="clear">
        <div><a ui-sref="app.mail.detail({mailId:mail.id})" class="text-md">{{mail.subject}}</a><span class="label bg-light m-l-sm">{{mail.label}}</span></div>
        <div class="text-ellipsis m-t-xs">{{mail.content | limitTo:100}}</div>
      </div>      
    </li>
  </ul>
  <!-- / list -->
</div>
   <hr>
   <div ng-controller="MailNewCtrl">
  <!-- header -->
  <div class="wrapper bg-light lter b-b">
    <div class="btn-group m-r-sm">
      <a href class="btn btn-sm btn-default w-xxs w-auto-xs" tooltip="Save"><i class="fa fa-file"></i></a>
      <a ui-sref="app.mail.list" class="btn btn-sm btn-default w-xxs w-auto-xs" tooltip="Discard"><i class="fa fa-trash-o"></i></a>
    </div>
  </div>
  <!-- / header -->
  <div class="wrapper">
    <form name="newMail" class="form-horizontal m-t-lg">
      <div class="form-group">
        <label class="col-lg-2 control-label">To:</label>
        <div class="col-lg-8">
          <select ui-jq="chosen" data-placeholder="Choose email" class="form-control" multiple ng-model="mail.to">
            <option ng-repeat="list in tolist" value="{{list.email}}">{{list.name}} <{{list.email}}></option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-lg-2 control-label">Subject:</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" ng-model="mail.subject">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10">
          <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor">
            <div class="btn-group dropdown">
              <a class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" tooltip="Font"><i class="fa text-base fa-font"></i><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href dropdown-toggle data-edit="fontName Serif" style="font-family:'Serif'">Serif</a></li> 
                <li><a href dropdown-toggle data-edit="fontName Sans" style="font-family:'Sans'">Sans</a></li>
                <li><a href dropdown-toggle data-edit="fontName Arial" style="font-family:'Arial'">Arial</a></li></ul>
            </div>
            <div class="btn-group dropdown">
              <a class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" tooltip="Font Size"><i class="fa text-base fa-text-height"></i>&nbsp;<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href dropdown-toggle data-edit="fontSize 5" style="font-size:24px">Huge</a></li>
                <li><a href dropdown-toggle data-edit="fontSize 3" style="font-size:18px">Normal</a></li>
                <li><a href dropdown-toggle data-edit="fontSize 1" style="font-size:14px">Small</a></li>
              </ul>
            </div>
            <div class="btn-group">
              <a class="btn btn-sm btn-default" data-edit="bold" tooltip="Bold (Ctrl/Cmd+B)"><i class="fa text-base fa-bold"></i></a>
              <a class="btn btn-sm btn-default" data-edit="italic" tooltip="Italic (Ctrl/Cmd+I)"><i class="fa text-base fa-italic"></i></a>
              <a class="btn btn-sm btn-default" data-edit="strikethrough" tooltip="Strikethrough"><i class="fa text-base fa-strikethrough"></i></a>
              <a class="btn btn-sm btn-default" data-edit="underline" tooltip="Underline (Ctrl/Cmd+U)"><i class="fa text-base fa-underline"></i></a>
            </div>
            <div class="btn-group">
              <a class="btn btn-sm btn-default" data-edit="insertunorderedlist" tooltip="Bullet list"><i class="fa text-base fa-list-ul"></i></a>
              <a class="btn btn-sm btn-default" data-edit="insertorderedlist" tooltip="Number list"><i class="fa text-base fa-list-ol"></i></a>
              <a class="btn btn-sm btn-default" data-edit="outdent" tooltip="Reduce indent (Shift+Tab)"><i class="fa text-base fa-dedent"></i></a>
              <a class="btn btn-sm btn-default" data-edit="indent" tooltip="Indent (Tab)"><i class="fa text-base fa-indent"></i></a>
            </div>
            <div class="btn-group">
              <a class="btn btn-sm btn-default" data-edit="justifyleft" tooltip="Align Left (Ctrl/Cmd+L)"><i class="fa text-base fa-align-left"></i></a>
              <a class="btn btn-sm btn-default" data-edit="justifycenter" tooltip="Center (Ctrl/Cmd+E)"><i class="fa text-base fa-align-center"></i></a>
              <a class="btn btn-sm btn-default" data-edit="justifyright" tooltip="Align Right (Ctrl/Cmd+R)"><i class="fa text-base fa-align-right"></i></a>
              <a class="btn btn-sm btn-default" data-edit="justifyfull" tooltip="Justify (Ctrl/Cmd+J)"><i class="fa text-base fa-align-justify"></i></a>
            </div>
          </div>
          <div ui-jq="wysiwyg" class="form-control h-auto" style="min-height:200px;">
            Go ahead&hellip;
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-8 col-lg-offset-2">
          <button class="btn btn-info w-xs">Send</button>
        </div>
      </div>
    </form>
  </div>
</div>
   <hr>
   <div class="modal-body wrapper-lg">
  <div class="row">
    <div class="col-sm-6 b-r">
      <h3 class="m-t-none m-b font-thin">Sign in</h3>
      <p>Sign in to meet your friends.</p>
      <form role="form">
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Password">
        </div>
        <div class="checkbox m-t-lg">
          <button type="submit" class="btn btn-sm btn-success pull-right text-uc m-t-n-xs" ng-click="ok()"><strong>Log in</strong></button>
          <label class="i-checks">
            <input type="checkbox"><i></i> Remember me
          </label>
        </div>
      </form>
    </div>
    <div class="col-sm-6">
      <h4>Not a member?</h4>
      <p>You can create an account <a href class="text-info">here</a></p>
      <p>OR</p>
      <a href class="btn btn-primary btn-block m-b-sm"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a>
      <a href class="btn btn-info btn-block m-b-sm"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a>
      <a href class="btn btn-danger btn-block"><i class="fa fa-google-plus pull-left"></i>Sign in with Google+</a>
    </div>
  </div>
</div>
   <hr>
   <div class="modal-header">
    <h3 class="modal-title">Modal!</h3>
</div>
<div class="modal-body">
    <ul>
        <li ng-repeat="item in items">
            <a ng-click="selected.item = item">{{ item }}</a>
        </li>
    </ul>
    Selected: <b>{{ selected.item }}</b>
</div>
<div class="modal-footer">                  
    <button class="btn btn-default" ng-click="cancel()">Cancel</button>
    <button class="btn btn-primary" ng-click="ok()">OK</button>
</div>

   <hr> -->
 <!--   <div class="hbox hbox-auto-xs hbox-auto-sm">
  <!-- main -->
  <div class="col">
    <div class="wrapper-md">
      <h3 class="m-t-none text-black">Tincidunt ut laoreet</h3>
      <p class="text-muted m-b-md">Retur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper Neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</p>
      <div class="hbox hbox-auto-xs">
        <div class="col w-sm">
          <img src="img/b1.jpg" class="img-full m-b">
        </div>
        <div class="col">
          <div class="m-l-md">
            <div class="clearfix m-b-md">
              <a class="thumb-sm pull-left m-r">
                <img src="img/a0.jpg" class="img-circle">
              </a>
              <div class="clear">
                <a class="text-info">Mike Mcalidek</a>
                <small class="block text-muted">Published: 3 days ago</small>
              </div>
            </div>
            <div class="m-b-md">
              <a class="btn btn-icon btn-rounded btn-info"><i class="fa fa-play m-r-n-xxs"></i></a> 
              <a class="btn btn-default btn-sm btn-rounded " tooltip="Comments">3</a>
              <a class="btn btn-default btn-sm btn-rounded " tooltip="likes">9</a>
            </div>
            <div>
              Tags: <a class="badge bg-light">Musik</a> <a class="badge bg-light">Pashion</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-white-only">
      <h4 class="m-n wrapper">Tracklist</h4>
      <ul class="list-group no-radius no-border list-group-lg">
        <li class="list-group-item">
          <div class="pull-right m-l">
            <a class="m-r-sm"><i class="icon-cloud-download"></i></a>
            <a class="m-r-sm"><i class="icon-plus"></i></a>
            <a><i class="icon-close"></i></a>
          </div>
          <a class="jp-play-me m-r-sm pull-left">
            <i class="icon-control-play text"></i>
            <i class="icon-control-pause text-active"></i>
          </a>
          <div class="clear text-ellipsis">
            <span>E.T.M</span>
            <span class="text-muted"> -- 04:35</span>
          </div>
        </li>
        <li class="list-group-item">
          <div class="pull-right m-l">
            <a class="m-r-sm"><i class="icon-cloud-download"></i></a>
            <a><i class="icon-plus"></i></a>
          </div>
          <a class="jp-play-me m-r-sm pull-left">
            <i class="icon-control-play text"></i>
            <i class="icon-control-pause text-active"></i>
          </a>
          <div class="clear text-ellipsis">
            <span>Vestibulum id ligula porta</span>
            <span class="text-muted"> -- 04:15</span>
          </div>
        </li>
        <li class="list-group-item">
          <div class="pull-right m-l">
            <a class="m-r-sm"><i class="icon-cloud-download"></i></a>
            <a><i class="icon-plus"></i></a>
          </div>
          <a class="jp-play-me m-r-sm pull-left">
            <i class="icon-control-play text"></i>
            <i class="icon-control-pause text-active"></i>
          </a>
          <div class="clear text-ellipsis">
            <span>Praesent commodo cursus magna</span>
            <span class="text-muted"> -- 02:25</span>
          </div>
        </li>
        <li class="list-group-item">
          <div class="pull-right m-l">
            <a class="m-r-sm"><i class="icon-cloud-download"></i></a>
            <a><i class="icon-plus"></i></a>
          </div>
          <a class="jp-play-me m-r-sm pull-left">
            <i class="icon-control-play text"></i>
            <i class="icon-control-pause text-active"></i>
          </a>
          <div class="clear text-ellipsis">
            <span>Curabitur blandit tempus</span>
            <span class="text-muted"> -- 05:00</span>
          </div>
        </li>
        <li class="list-group-item">
          <div class="pull-right m-l">
            <a class="m-r-sm"><i class="icon-cloud-download"></i></a>
            <a><i class="icon-plus"></i></a>
          </div>
          <a class="jp-play-me m-r-sm pull-left">
            <i class="icon-control-play text"></i>
            <i class="icon-control-pause text-active"></i>
          </a>
          <div class="clear text-ellipsis">
            <span>Faucibus dolor auctor</span>
            <span class="text-muted"> -- 03:50</span>
          </div>
        </li>
        <li class="list-group-item">
          <div class="pull-right m-l">
            <a class="m-r-sm"><i class="icon-cloud-download"></i></a>
            <a><i class="icon-plus"></i></a>
          </div>
          <a class="jp-play-me m-r-sm pull-left">
            <i class="icon-control-play text"></i>
            <i class="icon-control-pause text-active"></i>
          </a>
          <div class="clear text-ellipsis">
            <span>Get lacinia odio sem nec elit cibus dolor auctor sed odio dui mollis ornare</span>
            <span class="text-muted"> -- 04:05</span>
          </div>
        </li>
        <li class="list-group-item">
          <div class="pull-right m-l">
            <a class="m-r-sm"><i class="icon-cloud-download"></i></a>
            <a><i class="icon-plus"></i></a>
          </div>
          <a class="jp-play-me m-r-sm pull-left">
            <i class="icon-control-play text"></i>
            <i class="icon-control-pause text-active"></i>
          </a>
          <div class="clear text-ellipsis">
            <span>Faucibus dolor auctor</span>
            <span class="text-muted"> -- 02:55</span>
          </div>
        </li>
        <li class="list-group-item">
          <div class="pull-right m-l">
            <a class="m-r-sm"><i class="icon-cloud-download"></i></a>
            <a><i class="icon-plus"></i></a>
          </div>
          <a class="jp-play-me m-r-sm pull-left">
            <i class="icon-control-play text"></i>
            <i class="icon-control-pause text-active"></i>
          </a>
          <div class="clear text-ellipsis">
            <span>Donec sed odio dui</span>
            <span class="text-muted"> -- 04:35</span>
          </div>
        </li>
        <li class="list-group-item">
          <div class="pull-right m-l">
            <a class="m-r-sm"><i class="icon-cloud-download"></i></a>
            <a><i class="icon-plus"></i></a>
          </div>
          <a class="jp-play-me m-r-sm pull-left">
            <i class="icon-control-play text"></i>
            <i class="icon-control-pause text-active"></i>
          </a>
          <div class="clear text-ellipsis">
            <span>Urna mollis ornare vel eu leo</span>
            <span class="text-muted"> -- 05:10</span>
          </div>
        </li>
        <li class="list-group-item">
          <div class="pull-right m-l">
            <a class="m-r-sm"><i class="icon-cloud-download"></i></a>
            <a><i class="icon-plus"></i></a>
          </div>
          <a class="jp-play-me m-r-sm pull-left">
            <i class="icon-control-play text"></i>
            <i class="icon-control-pause text-active"></i>
          </a>
          <div class="clear text-ellipsis">
            <span>Vivamus sagittis lacus vel augue</span>
            <span class="text-muted"> -- 02:35</span>
          </div>
        </li>
      </ul>
    </div>
    <div class="padder-md m-b-lg">
      <h4 class="m-t-lg m-b">3 Comments</h4>
      <div>
        <div>
          <a class="pull-left thumb-sm">
            <img src="img/a0.jpg" class="img-circle">
          </a>
          <div class="m-l-xxl m-b">
            <div>
              <a href><strong>John smith</strong></a>
              <label class="label bg-info m-l-xs">Editor</label> 
              <span class="text-muted text-xs block m-t-xs">
                24 minutes ago
              </span>
            </div>
            <div class="m-t-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum.</div>
          </div>
        </div>

        <div class="m-l-xxl">
          <a class="pull-left thumb-sm">
            <img src="img/a1.jpg" class="img-circle">
          </a>
          <div class="m-l-xxl m-b">
            <div>
              <a href><strong>John smith</strong></a>
              <label class="label bg-dark m-l-xs">Admin</label> 
              <span class="text-muted text-xs block m-t-xs">
                26 minutes ago
              </span>
            </div>
            <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
          </div>
        </div>

        <div>
          <a class="pull-left thumb-sm">
            <img src="img/a2.jpg" class="img-circle">
          </a>
          <div class="m-l-xxl m-b">
            <div>
              <a href><strong>John smith</strong></a>
              <label class="label bg-dark m-l-xs">Admin</label> 
              <span class="text-muted text-xs block m-t-xs">
                26 minutes ago
              </span>
            </div>
            <blockquote class="m-t">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
            <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
          </div>
        </div>

      </div>
      <h4 class="m-t-lg m-b">Leave a comment</h4>
      <form>
        <div class="form-group pull-in clearfix">
          <div class="col-sm-6">
            <label>Your name</label>
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="col-sm-6">
            <label >Email</label>
            <input type="email" class="form-control" placeholder="Enter email">
          </div>
        </div>
        <div class="form-group">
          <label>Comment</label>
          <textarea class="form-control" rows="5" placeholder="Type your comment"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Submit comment</button>
        </div>
      </form>
    </div>
  </div>
  <!-- / main -->
  <!-- right col -->
  <div class="col w-md bg-light dker b-l bg-auto no-border-xs">    
    <div class="wrapper-md">      
      <div class="m-b-sm text-md">Top Plays</div>
      <ul class="list-group no-bg no-borders pull-in">
        <li class="list-group-item">
          <a herf class="pull-left thumb-sm m-r">
            <img src="img/b1.jpg" alt="..." class="r">
          </a>
          <div class="clear">
            <div><a href>On the road</a></div>
            <small class="text-muted">by Chris Fox</small>
          </div>
        </li>
        <li class="list-group-item">
          <a herf class="pull-left thumb-sm m-r">
            <img src="img/b2.jpg" alt="..." class="r">
          </a>
          <div class="clear">
            <div><a href>Find a way</a></div>
            <small class="text-muted">by Lucy</small>
          </div>
        </li>
        <li class="list-group-item">
          <a herf class="pull-left thumb-sm m-r">
            <img src="img/b3.jpg" alt="..." class="r">
          </a>
          <div class="clear">
            <div><a href>Nothing to lose</a></div>
            <small class="text-muted">Joge Lucky</small>
          </div>
        </li>
        <li class="list-group-item">
          <a herf class="pull-left thumb-sm m-r">
            <img src="img/b4.jpg" alt="..." class="r">
          </a>
          <div class="clear">
            <div><a href>New day</a></div>
            <small class="text-muted">by Folisise Chosielie</small>
          </div>
        </li>
        <li class="list-group-item">
          <a herf class="pull-left thumb-sm m-r">
            <img src="img/b5.jpg" alt="..." class="r">
          </a>
          <div class="clear">
            <div><a href>Running</a></div>
            <small class="text-muted">by Aron Gonzalez</small>
          </div>
        </li>
      </ul>
      <div class="text-center">
        <a href class="btn btn-sm btn-info padder-md m-b">More</a>
      </div>
    </div>
    <!-- streamline -->
    <div class="text-md wrapper-md">Activity</div>
    <div class="list-group no-borders no-bg m-l-xs m-r-xs m-t-n">
      <div class="list-group-item">
        <div class="text-muted">5 minutes ago</div>
        <div><a href class="text-info">Jessi</a> commented your post.</div>
      </div>
      <div class="list-group-item">
        <div class="text-muted">11:30</div>
        <div><a ui-sref="music.detail">Jone</a> published a song</div>
      </div>
      <div class="list-group-item">
        <div class="text-muted">Sun, 11 Feb</div>
        <div><a href class="text-info">Jessi</a> upload a video <a href class="text-info">Cat</a>.</div>
      </div>
      <div class="list-group-item">
        <div class="text-muted">Thu, 17 Jan</div>
        <div>Mike Followed you</div>
      </div>
    </div>
    <!-- / streamline -->
  </div>
  <!-- / right col -->
</div>
   <hr>
   <div class="hbox hbox-auto-xs hbox-auto-sm">
  <!-- right col -->
  <div class="col w bg-light dker bg-auto">    
    <div class="list-group no-radius no-border no-bg m-t-n-xxs m-b-none auto">
      <a class="list-group-item">
        All
      </a>
      <a class="list-group-item active">
        acoustic
      </a>
      <a class="list-group-item">
        ambient
      </a>
      <a class="list-group-item">
        blues
      </a>
      <a class="list-group-item">
        classical
      </a>
      <a class="list-group-item">
        country
      </a>
      <a class="list-group-item">
        electronic
      </a>
      <a class="list-group-item">
        emo
      </a>
      <a class="list-group-item">
        folk
      </a>
      <a class="list-group-item">
        hardcore
      </a>
      <a class="list-group-item">
        hip hop
      </a>
      <a class="list-group-item">
        indie
      </a>
      <a class="list-group-item">
        jazz
      </a>
      <a class="list-group-item">
        latin
      </a>
      <a class="list-group-item">
        metal
      </a>
      <a class="list-group-item">
        pop
      </a>
      <a class="list-group-item">
        pop punk
      </a>
      <a class="list-group-item">
        punk
      </a>
      <a class="list-group-item">
        reggae
      </a>
      <a class="list-group-item">
        rnb
      </a>
      <a class="list-group-item">
        rock
      </a>
      <a class="list-group-item">
        soul
      </a>
      <a class="list-group-item">
        world
      </a>
    </div>
  </div>
  <!-- / right col -->
  <!-- main -->
  <div class="col wrapper-lg">
    <h3 class="font-thin m-t-n-xs m-b">Acoustic</h3>
    <div class="row row-sm">
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="top">
              <span class="badge bg-info m-l-sm m-t-sm">04:10</span>
            </div>
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b16.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Tempered Song</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Miaow</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b17.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Vivamus vel tincidunt libero</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Lauren Taylor</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b18.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Morbi id neque quam liquam sollicitudin</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Allen JH</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <div class="top w-full">
              <span class="pull-right m-t-n-xs m-r-sm text-white">
                <i class="fa fa-bookmark i-lg"></i>
              </span>
            </div>
            <a ui-sref="music.detail"><img src="img/b19.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Tincidunt libero</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Amanda Conlan</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b20.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Fermentum diam</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Nisa Colen</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="top w-full">
              <span class="pull-right m-t-sm m-r-sm badge bg-info">6</span>
            </div>
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>                         
            <a ui-sref="music.detail"><img src="img/b6.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Habitant</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Dan Doorack</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b7.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Vivamus vel tincidunt libero</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Ligula H</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b8.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Aliquam sollicitudin venenati</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">James East</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <div class="top">
              <span class="badge bg-warning m-l-sm m-t-sm">03:10</span>
            </div>
            <a ui-sref="music.detail"><img src="img/b9.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Lementum ligula vitae</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Lauren Taylor</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b10.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Egestas dui nec fermentum </a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Chris Fox</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b11.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Aliquam sollicitudin venenatis ipsum</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Jack Jason</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b12.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Vestibulum ullamcorper</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">MM &amp; DD</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="bottom">
              <span class="badge m-l-sm m-b-sm">MTV</span>
            </div>
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b13.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Aliquam sollicitudin venenatis ipsum</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Jack Jason</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b14.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Vestibulum ullamcorper</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">MM &amp; DD</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="top">
              <span class="badge bg-info m-l-sm m-t-sm">04:10</span>
            </div>
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b1.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Tempered Song</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Miaow</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b2.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Vivamus vel tincidunt libero</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Lauren Taylor</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b3.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Morbi id neque quam liquam sollicitudin</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Allen JH</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <div class="top w-full">
              <span class="pull-right m-t-n-xs m-r-sm text-white">
                <i class="fa fa-bookmark i-lg"></i>
              </span>
            </div>
            <a ui-sref="music.detail"><img src="img/b4.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Tincidunt libero</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Amanda Conlan</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b5.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Fermentum diam</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Nisa Colen</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="top w-full">
              <span class="pull-right m-t-sm m-r-sm badge bg-info">6</span>
            </div>
            <div class="item-overlay bg-black-opacity">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>                         
            <a ui-sref="music.detail"><img src="img/b6.jpg" alt="" class="img-full"></a>
          </div>
          <div class="wrapper bg-white m-b">
            <a ui-sref="music.detail" class="text-ellipsis">Habitant</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Dan Doorack</a>
          </div>
        </div>
      </div>
    </div>
    <ul class="pagination pagination">
      <li><a ui-sref="music.detail"><i class="fa fa-chevron-left"></i></a></li>
      <li class="active"><a ui-sref="music.detail">1</a></li>
      <li><a ui-sref="music.detail">2</a></li>
      <li><a ui-sref="music.detail">3</a></li>
      <li><a ui-sref="music.detail">4</a></li>
      <li><a ui-sref="music.detail">5</a></li>
      <li><a ui-sref="music.detail"><i class="fa fa-chevron-right"></i></a></li>
    </ul>
  </div>
  <!-- / main -->
</div><hr>
   <div class="hbox hbox-auto-xs hbox-auto-sm">
  <!-- main -->
  <div class="col wrapper-lg">
    <h3 class="font-thin m-t-n-xs m-b">Recommendation</h3>
    <div class="row row-sm">
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="top">
              <span class="badge bg-info m-l-sm m-t-sm">04:10</span>
            </div>
            <div class="item-overlay bg-black-opacity r r-2x r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b1.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Tempered Song</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Miaow</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b2.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Vivamus vel tincidunt libero</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Lauren Taylor</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b3.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Morbi id neque quam liquam sollicitudin</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Allen JH</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <div class="top w-full">
              <span class="pull-right m-t-n-xs m-r-sm text-white">
                <i class="fa fa-bookmark i-lg"></i>
              </span>
            </div>
            <a ui-sref="music.detail"><img src="img/b4.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Tincidunt libero</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Amanda Conlan</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b5.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Fermentum diam</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Nisa Colen</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="top w-full">
              <span class="pull-right m-t-sm m-r-sm badge bg-info">6</span>
            </div>
            <div class="item-overlay bg-black-opacity r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>                         
            <a ui-sref="music.detail"><img src="img/b6.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Habitant</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Dan Doorack</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b7.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Vivamus vel tincidunt libero</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Ligula H</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b8.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Aliquam sollicitudin venenati</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">James East</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <div class="top">
              <span class="badge bg-warning m-l-sm m-t-sm">03:10</span>
            </div>
            <a ui-sref="music.detail"><img src="img/b9.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Lementum ligula vitae</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Lauren Taylor</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b10.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Egestas dui nec fermentum </a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Chris Fox</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b11.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Aliquam sollicitudin venenatis ipsum</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Jack Jason</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b12.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Vestibulum ullamcorper</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">MM &amp; DD</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="bottom">
              <span class="badge m-l-sm m-b-sm">MTV</span>
            </div>
            <div class="item-overlay bg-black-opacity r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b13.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Aliquam sollicitudin venenatis ipsum</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Jack Jason</a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b14.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Vestibulum ullamcorper</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">MM &amp; DD</a>
          </div>
        </div>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
        <div class="item">
          <div class="pos-rlt">
            <div class="item-overlay bg-black-opacity r r-2x">
              <div class="center text-center m-t-n w-full">
                <a><i class="fa fa-2x fa-play-circle-o text-white"></i></a>
              </div>
            </div>
            <a ui-sref="music.detail"><img src="img/b15.jpg" alt="" class="img-full r r-2x"></a>
          </div>
          <div class="padder-v">
            <a ui-sref="music.detail" class="text-ellipsis">Aliquam sollicitudin venenatis ipsum</a>
            <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Jack Jason</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <h3 class="font-thin">New Songs</h3>
        <div class="row row-sm">
          <div class="col-xs-6 col-sm-3">
            <div class="item">
              <div class="pos-rlt">
                <div class="item-overlay bg-black-opacity r r-2x">
                  <div class="center text-center m-t-n w-full">
                    <a ui-sref="music.detail"><i class="fa fa-2x fa-play-circle text-white"></i></a>
                  </div>
                </div>
                <a ui-sref="music.detail"><img src="img/b15.jpg" alt="" class="img-full r r-2x"></a>
              </div>
              <div class="padder-v">
                <a ui-sref="music.detail" class="text-ellipsis">Spring rain</a>
                <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Miaow</a>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="item">
              <div class="pos-rlt">
                <div class="item-overlay bg-black-opacity r r-2x">
                  <div class="center text-center m-t-n w-full">
                    <a ui-sref="music.detail"><i class="fa fa-2x fa-play-circle text-white"></i></a>
                  </div>
                </div>
                <a ui-sref="music.detail"><img src="img/b16.jpg" alt="" class="img-full r r-2x"></a>
              </div>
              <div class="padder-v">
                <a ui-sref="music.detail" class="text-ellipsis">Hope</a>
                <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Miya</a>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="item">
              <div class="pos-rlt">
                <div class="item-overlay bg-black-opacity r r-2x">
                  <div class="center text-center m-t-n w-full">
                    <a ui-sref="music.detail"><i class="fa fa-2x fa-play-circle text-white"></i></a>
                  </div>
                </div>
                <a ui-sref="music.detail"><img src="img/b17.jpg" alt="" class="img-full r r-2x"></a>
              </div>
              <div class="padder-v">
                <a ui-sref="music.detail" class="text-ellipsis">Listen wind</a>
                <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Soyia Jess</a>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="item">
              <div class="pos-rlt">
                <div class="item-overlay bg-black-opacity r r-2x">
                  <div class="center text-center m-t-n w-full">
                    <a ui-sref="music.detail"><i class="fa fa-2x fa-play-circle text-white"></i></a>
                  </div>
                </div>
                <a ui-sref="music.detail"><img src="img/b18.jpg" alt="" class="img-full r r-2x"></a>
              </div>
              <div class="padder-v">
                <a ui-sref="music.detail" class="text-ellipsis">Breaking me</a>
                <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Pett JA</a>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="item">
              <div class="pos-rlt">
                <div class="item-overlay bg-black-opacity r r-2x">
                  <div class="center text-center m-t-n w-full">
                    <a ui-sref="music.detail"><i class="fa fa-2x fa-play-circle text-white"></i></a>
                  </div>
                </div>
                <a ui-sref="music.detail"><img src="img/b19.jpg" alt="" class="img-full r r-2x"></a>
              </div>
              <div class="padder-v">
                <a ui-sref="music.detail" class="text-ellipsis">Nothing</a>
                <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Willion</a>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="item">
              <div class="pos-rlt">
                <div class="item-overlay bg-black-opacity r r-2x">
                  <div class="center text-center m-t-n w-full">
                    <a ui-sref="music.detail"><i class="fa fa-2x fa-play-circle text-white"></i></a>
                  </div>
                </div>
                <a ui-sref="music.detail"><img src="img/b20.jpg" alt="" class="img-full r r-2x"></a>
              </div>
              <div class="padder-v">
                <a ui-sref="music.detail" class="text-ellipsis">Panda Style</a>
                <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Lionie</a>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="item">
              <div class="pos-rlt">
                <div class="item-overlay bg-black-opacity r r-2x">
                  <div class="center text-center m-t-n w-full">
                    <a ui-sref="music.detail"><i class="fa fa-2x fa-play-circle text-white"></i></a>
                  </div>
                </div>
                <a ui-sref="music.detail"><img src="img/b0.jpg" alt="" class="img-full r r-2x"></a>
              </div>
              <div class="padder-v">
                <a ui-sref="music.detail" class="text-ellipsis">Hook Me</a>
                <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Gossi</a>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="item">
              <div class="pos-rlt">
                <div class="item-overlay bg-black-opacity r r-2x">
                  <div class="center text-center m-t-n w-full">
                    <a ui-sref="music.detail"><i class="fa fa-2x fa-play-circle text-white"></i></a>
                  </div>
                </div>
                <a ui-sref="music.detail"><img src="img/b6.jpg" alt="" class="img-full r r-2x"></a>
              </div>
              <div class="padder-v">
                <a ui-sref="music.detail" class="text-ellipsis">Tempered Song</a>
                <a ui-sref="music.detail" class="text-ellipsis text-xs text-muted">Miaow</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <h3 class="font-thin">Top Songs</h3>
        <div class="list-group bg-white list-group-lg no-bg auto">                          
          <a ui-sref="music.detail" class="list-group-item clearfix">
            <span class="pull-right h2 text-muted m-l">1</span>
            <span class="pull-left thumb-sm avatar m-r">
              <img src="img/a4.jpg" alt="..." class="r">
            </span>
            <span class="clear">
              <span>Little Town</span>
              <small class="text-muted clear text-ellipsis">by Chris Fox</small>
            </span>
          </a>
          <a ui-sref="music.detail" class="list-group-item clearfix">
            <span class="pull-right h2 text-muted m-l">2</span>
            <span class="pull-left thumb-sm avatar m-r">
              <img src="img/a5.jpg" alt="..." class="r">
            </span>
            <span class="clear">
              <span>Lementum ligula vitae</span>
              <small class="text-muted clear text-ellipsis">by Amanda Conlan</small>
            </span>
          </a>
          <a ui-sref="music.detail" class="list-group-item clearfix">
            <span class="pull-right h2 text-muted m-l">3</span>
            <span class="pull-left thumb-sm avatar m-r">
              <img src="img/a6.jpg" alt="..." class="r">
            </span>
            <span class="clear">
              <span>Aliquam sollicitudin venenatis</span>
              <small class="text-muted clear text-ellipsis">by Dan Doorack</small>
            </span>
          </a>
          <a ui-sref="music.detail" class="list-group-item clearfix">
            <span class="pull-right h2 text-muted m-l">4</span>
            <span class="pull-left thumb-sm avatar m-r">
              <img src="img/a7.jpg" alt="..." class="r">
            </span>
            <span class="clear">
              <span>Aliquam sollicitudin venenatis ipsum</span>
              <small class="text-muted clear text-ellipsis">by Lauren Taylor</small>
            </span>
          </a>
          <a ui-sref="music.detail" class="list-group-item clearfix">
            <span class="pull-right h2 text-muted m-l">5</span>
            <span class="pull-left thumb-sm avatar m-r">
              <img src="img/a8.jpg" alt="..." class="r">
            </span>
            <span class="clear">
              <span>Vestibulum ullamcorper</span>
              <small class="text-muted clear text-ellipsis">by Dan Doorack</small>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- / main -->
  <!-- right col -->
  <div class="col w-md bg-light dker b-l bg-auto no-border-xs">    
    <div class="wrapper-md">      
      <div class="m-b-sm text-md">Top Plays</div>
      <ul class="list-group no-bg no-borders pull-in">
        <li class="list-group-item">
          <a herf class="pull-left thumb-sm m-r">
            <img src="img/b1.jpg" alt="..." class="r">
          </a>
          <div class="clear">
            <div><a href>On the road</a></div>
            <small class="text-muted">by Chris Fox</small>
          </div>
        </li>
        <li class="list-group-item">
          <a herf class="pull-left thumb-sm m-r">
            <img src="img/b2.jpg" alt="..." class="r">
          </a>
          <div class="clear">
            <div><a href>Find a way</a></div>
            <small class="text-muted">by Lucy</small>
          </div>
        </li>
        <li class="list-group-item">
          <a herf class="pull-left thumb-sm m-r">
            <img src="img/b3.jpg" alt="..." class="r">
          </a>
          <div class="clear">
            <div><a href>Nothing to lose</a></div>
            <small class="text-muted">Joge Lucky</small>
          </div>
        </li>
        <li class="list-group-item">
          <a herf class="pull-left thumb-sm m-r">
            <img src="img/b4.jpg" alt="..." class="r">
          </a>
          <div class="clear">
            <div><a href>New day</a></div>
            <small class="text-muted">by Folisise Chosielie</small>
          </div>
        </li>
        <li class="list-group-item">
          <a herf class="pull-left thumb-sm m-r">
            <img src="img/b5.jpg" alt="..." class="r">
          </a>
          <div class="clear">
            <div><a href>Running</a></div>
            <small class="text-muted">by Aron Gonzalez</small>
          </div>
        </li>
      </ul>
      <div class="text-center">
        <a href class="btn btn-sm btn-info padder-md m-b">More</a>
      </div>
    </div>
    <!-- streamline -->
    <div class="text-md wrapper-md">Activity</div>
    <div class="list-group no-borders no-bg m-l-xs m-r-xs m-t-n">
      <div class="list-group-item">
        <div class="text-muted">5 minutes ago</div>
        <div><a href class="text-info">Jessi</a> commented your post.</div>
      </div>
      <div class="list-group-item">
        <div class="text-muted">11:30</div>
        <div><a ui-sref="music.detail">Jone</a> published a song</div>
      </div>
      <div class="list-group-item">
        <div class="text-muted">Sun, 11 Feb</div>
        <div><a href class="text-info">Jessi</a> upload a video <a href class="text-info">Cat</a>.</div>
      </div>
      <div class="list-group-item">
        <div class="text-muted">Thu, 17 Jan</div>
        <div>Mike Followed you</div>
      </div>
    </div>
    <!-- / streamline -->
  </div>
  <!-- / right col -->
</div>
   <hr>
     <!-- navbar -->
  <div data-ng-include=" 'tpl/blocks/header.music.html' " class="app-header navbar">
  </div>
  <!-- / navbar -->

  <!-- menu -->
  <div data-ng-include=" 'tpl/blocks/aside.music.html' " class="app-aside hidden-xs {{app.settings.asideColor}}">
  </div>
  <!-- / menu -->

  <!-- content -->
  <div class="app-content">
    <div ui-butterbar></div>
    <a href class="off-screen-toggle hide" ui-toggle-class="off-screen" data-target=".app-aside" ></a>
    <div class="app-content-body fade-in-up" ui-view>

    </div>
  </div>
  <!-- /content -->

  <!-- footer -->
  <div class="app-footer app-footer-fixed" data-ng-include=" 'tpl/music.player.html' ">
  </div>
  <!-- / footer -->

  <div data-ng-include=" 'tpl/blocks/settings.html' " class="settings panel panel-default">
  </div>
   <hr>
   <div class="wrapper-lg">
  <div class="row">
    <div class="col-sm-9">
      <div class="blog-post">                   
        <div class="panel no-border">
          <div>
            <videogular vg-theme="config.theme.url">
              <vg-video vg-src="video.sources">
              </vg-video>

              <vg-controls vg-autohide="video.plugins.controls.autoHide" vg-autohide-time="video.plugins.controls.autoHideTime">
                <vg-play-pause-button></vg-play-pause-button>
                <vg-timedisplay>{{ currentTime | date:'mm:ss' }}</vg-timedisplay>
                <vg-scrubBar>
                  <vg-scrubbarcurrenttime class="bg-info"></vg-scrubbarcurrenttime>
                </vg-scrubBar>
                <vg-timedisplay>{{ timeLeft | date:'mm:ss' }}</vg-timedisplay>
                <vg-timedisplay>{{ totalTime | date:'mm:ss' }}</vg-timedisplay>
                <vg-volume>
                  <vg-mutebutton></vg-mutebutton>
                  <vg-volumebar></vg-volumebar>
                </vg-volume>
                <vg-fullscreenButton></vg-fullscreenButton>
              </vg-controls>
              <vg-overlay-play></vg-overlay-play>
              <vg-poster-image vg-url='video.plugins.poster'></vg-poster-image>
              <vg-buffering></vg-buffering>
            </videogular>
          </div>
          <div class="wrapper-lg">
            <h2 class="m-t-none"><a href>Big Buck Bunny Trailer</a></h2>
            <div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. 
              <br><br>
              Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>
            </div>
            <div class="line line-lg b-b b-light"></div>
            <div class="text-muted">
              <i class="fa fa-user text-muted"></i> by <a href class="m-r-sm">Admin</a>
              <i class="fa fa-clock-o text-muted"></i> Feb 20, 2013
              <a href class="m-l-sm"><i class="fa fa-comment-o text-muted"></i> 2 comments</a>
            </div>
          </div>
        </div>
      </div>

      <h4 class="m-t-lg m-b">3 Comments</h4>
      <div>
        <div>
          <a class="pull-left thumb-sm">
            <img src="img/a0.jpg" class="img-circle">
          </a>
          <div class="m-l-xxl m-b">
            <div>
              <a href><strong>John smith</strong></a>
              <label class="label bg-info m-l-xs">Editor</label> 
              <span class="text-muted text-xs block m-t-xs">
                24 minutes ago
              </span>
            </div>
            <div class="m-t-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum.</div>
          </div>
        </div>

        <div class="m-l-xxl">
          <a class="pull-left thumb-sm">
            <img src="img/a1.jpg" class="img-circle">
          </a>
          <div class="m-l-xxl m-b">
            <div>
              <a href><strong>John smith</strong></a>
              <label class="label bg-dark m-l-xs">Admin</label> 
              <span class="text-muted text-xs block m-t-xs">
                26 minutes ago
              </span>
            </div>
            <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
          </div>
        </div>

        <div>
          <a class="pull-left thumb-sm">
            <img src="img/a2.jpg" class="img-circle">
          </a>
          <div class="m-l-xxl m-b">
            <div>
              <a href><strong>John smith</strong></a>
              <label class="label bg-dark m-l-xs">Admin</label> 
              <span class="text-muted text-xs block m-t-xs">
                26 minutes ago
              </span>
            </div>
            <blockquote class="m-t">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
            <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
          </div>
        </div>

      </div>
      <h4 class="m-t-lg m-b">Leave a comment</h4>
      <form>
        <div class="form-group pull-in clearfix">
          <div class="col-sm-6">
            <label>Your name</label>
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="col-sm-6">
            <label >Email</label>
            <input type="email" class="form-control" placeholder="Enter email">
          </div>
        </div>
        <div class="form-group">
          <label>Comment</label>
          <textarea class="form-control" rows="5" placeholder="Type your comment"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Submit comment</button>
        </div>
      </form>
    </div>
    <div class="col-sm-3">
      <h5 class="font-bold">Recent Posts</h5>
      <div>
        <div>
          <a class="pull-left thumb thumb-wrapper m-r">
            <img src="img/b0.jpg">
          </a>
          <div class="clear">                        
            <a href class="font-semibold text-ellipsis">Bootstrap 3: What you need to know</a>
            <div class="text-xs block m-t-xs"><a href>Travel</a> 2 minutes ago</div>
          </div>
        </div>
        <div class="line"></div>
        <div>
          <a class="pull-left thumb thumb-wrapper m-r">
            <img src="img/b1.jpg">
          </a>
          <div class="clear">                        
            <a href class="font-semibold text-ellipsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
            <div class="text-xs block m-t-xs"><a href>Design</a> 2 hours ago</div>
          </div>
        </div>
        <div class="line"></div>
        <div>
          <a class="pull-left thumb thumb-wrapper m-r">
            <img src="img/b2.jpg">
          </a>
          <div class="clear">                        
            <a href class="font-semibold text-ellipsis">Sed diam nonummy nibh euismod tincidunt ut laoreet</a>
            <div class="text-xs block m-t-xs"><a href>MFC</a> 1 week ago</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
   <hr>
   <div class="wrapper-md">
  <h3 class="font-thin m-b m-t-none">Video</h3>
  <div class="row row-sm">
    <div class="col-xs-12 col-sm-4">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="center text-center m-t-n w-full">
            <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
          </div>
          <div class="top">
            <span class="badge bg-dark m-l-sm m-t-sm">03:20</span>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c9.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Tempered Song</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Miaow</a>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-4">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="center text-center m-t-n w-full">
            <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
          </div>
          <div class="top">
            <span class="badge bg-dark m-l-sm m-t-sm">02:10</span>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c1.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Morbi id neque quam</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Phasellus</a>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-4">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="center text-center m-t-n w-full">
            <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
          </div>
          <div class="top">
            <span class="badge bg-dark m-l-sm m-t-sm">05:40</span>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c2.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Aliquam sollicitudin venenatis ipsum</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Malesuada</a>
        </div>
      </div>
    </div>
  </div>
  <h3 class="font-thin m-b">Video List</h3>
  <div class="row row-sm">
    <div class="col-xs-6 col-sm-4 col-md-3">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="item-overlay bg-white-opacity">
            <div class="center text-center m-t-n w-full">
              <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
            </div>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c3.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Tempered Song</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Miaow</a>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-3">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="item-overlay bg-white-opacity">
            <div class="center text-center m-t-n w-full">
              <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
            </div>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c4.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Morbi id neque quam</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Phasellus</a>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-3">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="item-overlay bg-white-opacity">
            <div class="center text-center m-t-n w-full">
              <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
            </div>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c5.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Aliquam sollicitudin venenatis ipsum</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Malesuada</a>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-3">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="item-overlay bg-white-opacity">
            <div class="center text-center m-t-n w-full">
              <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
            </div>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c6.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Citudin venenatis ipsum ac</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Volutpat</a>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-3">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="item-overlay bg-white-opacity">
            <div class="center text-center m-t-n w-full">
              <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
            </div>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c7.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Vestibulum ullamcorper sodales nisi</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Mauris Qiaos</a>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-3">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="item-overlay bg-white-opacity">
            <div class="center text-center m-t-n w-full">
              <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
            </div>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c8.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Mauris convallis mauris at</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Neque</a>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-3">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="item-overlay bg-white-opacity">
            <div class="center text-center m-t-n w-full">
              <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
            </div>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c9.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Sodales nisi nec condimentum</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Augue</a>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-3">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="item-overlay bg-white-opacity">
            <div class="center text-center m-t-n w-full">
              <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
            </div>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c0.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Nisi nec condimentum</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Miaow</a>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-3">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="item-overlay bg-white-opacity">
            <div class="center text-center m-t-n w-full">
              <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
            </div>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c1.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Phasellus at ultricies nequ</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Volutpat</a>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-3">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="item-overlay bg-white-opacity">
            <div class="center text-center m-t-n w-full">
              <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
            </div>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c2.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Quis malesuada augue</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Feugiat</a>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-3">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="item-overlay bg-white-opacity">
            <div class="center text-center m-t-n w-full">
              <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
            </div>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c3.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Ipsum ac feugiat</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Quam AC</a>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-3">
      <div class="item">
        <div class="pos-rlt b-a bg-white wrapper-xs">
          <div class="item-overlay bg-white-opacity">
            <div class="center text-center m-t-n w-full">
              <a ui-sref="music.mtvdetail"><i class="fa fa-play-circle fa-2x text-white"></i></a>
            </div>
          </div>
          <a ui-sref="music.mtvdetail"><img src="img/c4.jpg" alt="" class="img-full"></a>
        </div>
        <div class="padder-v">
          <a ui-sref="music.mtvdetail" class="text-ellipsis">Ullamcorper sodales nisi nec condimentu</a>
          <a ui-sref="music.mtvdetail" class="text-ellipsis text-xs text-muted">Convallis</a>
        </div>
      </div>
    </div>                
  </div>
  <ul class="pagination pagination">
    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
  </ul>
</div>
   <hr>
   <div class="videogular-container bg-light lter">
  <videogular 
    vg-player-ready="onPlayerReady" 
    vg-complete="onComplete" 
    vg-theme="config.theme.url"  
    vg-autoplay="config.autoPlay" 
    class="videogular-container audio">
    <vg-audio vg-src="config.sources"></vg-audio>
    <vg-controls>
      <vg-button ng-show="audios.length-1" ng-click="play('prev')"><i class="fa fa-backward"></i></vg-button>
      <vg-play-pause-button></vg-play-pause-button>
      <vg-button ng-show="audios.length-1" ng-click="play('next')"><i class="fa fa-forward"></i></vg-button>
      <vg-timedisplay class="hidden-xs">{{ currentTime | date:'mm:ss' }}</vg-timedisplay>
      <vg-scrubBar>
        <vg-title class="hidden-xs">{{config.title}}</vg-title>
        <vg-scrubbarcurrenttime class="bg-info" style="height: 4px"></vg-scrubbarcurrenttime>
      </vg-scrubBar>
      <vg-timedisplay>{{ timeLeft | date:'mm:ss' }}</vg-timedisplay>
       
      <vg-button ng-click="toggleShuffle()" title="Shuffle"><i class="fa fa-random" ng-class="{'text-info':config.shuffle}"></i></vg-button>
      <vg-button ng-click="toggleRepeat()" title="Repeat"><i class="fa fa-retweet" ng-class="{'text-info':config.repeat}"></i></vg-button>

      <vg-volume>
        <vg-mutebutton></vg-mutebutton>
      </vg-volume>
    </vg-controls>
  </videogular>
</div>
   <hr>
   <div class="container w-xxl w-auto-xs" ng-init="app.settings.container = false;">
  <div class="text-center m-b-lg">
    <h1 class="text-shadow text-white">404</h1>
  </div>
  <div class="list-group bg-info auto m-b-sm m-b-lg">
    <a href="#/" class="list-group-item">
      <i class="fa fa-chevron-right text-muted"></i>
      <i class="fa fa-fw fa-mail-forward m-r-xs"></i> Goto application
    </a>
    <a ui-sref="access.signin" class="list-group-item">
      <i class="fa fa-chevron-right text-muted"></i>
      <i class="fa fa-fw fa-sign-in m-r-xs"></i> Sign in
    </a>
    <a ui-sref="access.signup" class="list-group-item">
      <i class="fa fa-chevron-right text-muted"></i>
      <i class="fa fa-fw fa-unlock-alt m-r-xs"></i> Sign up
    </a>
  </div>
  <div class="text-center" ng-include="'tpl/blocks/page_footer.html'"></div>
</div> -->
  <!--  <hr>
   <div class="container w-xl w-auto-xs" ng-init="app.settings.container = false;">
  <a href class="navbar-brand block m-t">{{app.name}}</a>
  <div class="m-b-lg">
    <div class="wrapper text-center">
      <strong>Input your email to reset your password</strong>
    </div>
    <form name="reset" ng-init="isCollapsed=true">
      <div class="list-group list-group-sm">
        <div class="list-group-item">
          <input type="email" placeholder="Email" ng-model="email" class="form-control no-border" required>
        </div>
      </div>
      <button type="submit" ng-disabled="reset.$invalid" class="btn btn-lg btn-primary btn-block"  ng-click="isCollapsed = !isCollapsed" >Send</button>
    </form>
    <div collapse="isCollapsed" class="m-t">
      <div class="alert alert-success">
        <p>A reset link sent to your email address, please check it in 7 days. <a ui-sref="access.signin" class="btn btn-sm btn-success">Sign in</a></p>
      </div>
    </div>
  </div>
  <div class="text-center" ng-include="'tpl/blocks/page_footer.html'"></div>
</div>
   <hr>
   <div class="bg-light lter b-b wrapper-md hidden-print">
  <a href class="btn btn-sm btn-info pull-right" onClick="window.print();">Print</a>
  <h1 class="m-n font-thin h3">Invoice</h1>
</div>
<div class="wrapper-md">
  <div>
    <i class="fa fa-apple fa fa-3x"></i>
    <div class="row">
      <div class="col-xs-6">
        <h4>Apple Inc.</h4>
        <p><a href="http://www.apple.com">www.apple.com</a></p>
        <p>1 Infinite Loop <br>
          95014 Cuperino, CA<br>
          United States
        </p>
        <p>
          Telephone:  800-692-7753<br>
          Fax:  800-692-7753
        </p>
      </div>
      <div class="col-xs-6 text-right">
        <p class="h4">#9048392</p>
        <h5>29th Mar 2013</h5>           
      </div>
    </div>
    <div class="well m-t bg-light lt">
      <div class="row">
        <div class="col-xs-6">
          <strong>TO:</strong>
          <h4>John Smith</h4>
          <p>
            2nd Floor<br>
            St John Street, Aberdeenshire 2541<br>
            United Kingdom<br>
            Phone: 031-432-678<br>
            Email: youemail@gmail.com<br>
          </p>
        </div>
        <div class="col-xs-6">
          <strong>SHIP TO:</strong>
          <h4>John Smith</h4>
          <p>
            2nd Floor<br>
            St John Street, Aberdeenshire 2541<br>
            United Kingdom<br>
            Phone: 031-432-678<br>
            Email: youemail@gmail.com<br>
          </p>
        </div>
      </div>
    </div>
    <p class="m-t m-b">Order date: <strong>26th Mar 2013</strong><br>
        Order status: <span class="label bg-success">Shipped</span><br>
        Order ID: <strong>#9399034</strong>
    </p>
    <div class="line"></div>
    <table class="table table-striped bg-white b-a">
      <thead>
        <tr>
          <th style="width: 60px">QTY</th>
          <th>DESCRIPTION</th>
          <th style="width: 140px">UNIT PRICE</th>
          <th style="width: 90px">TOTAL</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>iPhone 5 32GB White & Silver (GSM) Unlocked</td>
          <td>$749.00</td>
          <td>$749.00</td>
        </tr>
        <tr>
          <td>2</td>
          <td>iPad mini with Wi-Fi 32GB - White & Silver</td>
          <td>$429.00</td>
          <td>$858.00</td>
        </tr>
        <tr>
          <td colspan="3" class="text-right"><strong>Subtotal</strong></td>
          <td>$1607.00</td>
        </tr>
        <tr>
          <td colspan="3" class="text-right no-border"><strong>Shipping</strong></td>
          <td>$0.00</td>
        </tr>
        <tr>
          <td colspan="3" class="text-right no-border"><strong>VAT Included in Total</strong></td>
          <td>$0.00</td>
        </tr>
        <tr>
          <td colspan="3" class="text-right no-border"><strong>Total</strong></td>
          <td><strong>$1607.00</strong></td>
        </tr>
      </tbody>
    </table>              
  </div>
</div>
   <hr>
   <div class="modal-over bg-black">
  <div class="modal-center animated fadeInUp text-center" style="width:200px;margin:-100px 0 0 -100px;">
    <div class="thumb-lg">
      <img src="img/a0.jpg" class="img-circle">
    </div>
    <p class="h4 m-t m-b">John.Smith</p>
    <div class="input-group">
      <input type="password" class="form-control text-sm btn-rounded no-border" placeholder="Enter pwd to continue">
      <span class="input-group-btn">
        <a href="#/" class="btn btn-success btn-rounded no-border"><i class="fa fa-arrow-right"></i></a>
      </span>
    </div>
  </div>
</div>
   <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Post</h1>
</div>
<div class="wrapper-md">
  <div class="row">
    <div class="col-sm-9">
      <div class="blog-post">                   
        <div class="panel">
          <div>
            <img src="img/c0.jpg" class="img-full">
          </div>
          <div class="wrapper-lg">
            <h2 class="m-t-none"><a href>7 things you need to know about the flat design</a></h2>
            <div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. 
              <br><br>
              Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>
            </div>
            <div class="line line-lg b-b b-light"></div>
            <div class="text-muted">
              <i class="fa fa-user text-muted"></i> by <a href class="m-r-sm">Admin</a>
              <i class="fa fa-clock-o text-muted"></i> Feb 20, 2013
              <a href class="m-l-sm"><i class="fa fa-comment-o text-muted"></i> 2 comments</a>
            </div>
          </div>
        </div>
        <div class="panel">
          <div class="wrapper-lg">
            <h2 class="m-t-none"><a href>Bootstrap 3: What you need to know</a></h2>
            <div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. 
              </p>
              <h3>Html5 and CSS3</h3>
              <p>
              Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>
            </div>
            <div class="line line-lg b-b b-light"></div>
            <div class="text-muted">
              <i class="fa fa-user text-muted"></i> by <a href class="m-r-sm">Admin</a>
              <i class="fa fa-clock-o text-muted"></i> Feb 15, 2013
              <a href class="m-l-sm"><i class="fa fa-comment-o text-muted"></i> 4 comments</a>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center m-t-lg m-b-lg">
        <ul class="pagination pagination-md">
          <li><a href><i class="fa fa-chevron-left"></i></a></li>
          <li class="active"><a href>1</a></li>
          <li><a href>2</a></li>
          <li><a href>3</a></li>
          <li><a href>4</a></li>
          <li><a href>5</a></li>
          <li><a href><i class="fa fa-chevron-right"></i></a></li>
        </ul>
      </div>
      <h4 class="m-t-lg m-b">3 Comments</h4>
      <div>
        <div>
          <a class="pull-left thumb-sm">
            <img src="img/a0.jpg" class="img-circle">
          </a>
          <div class="m-l-xxl m-b">
            <div>
              <a href><strong>John smith</strong></a>
              <label class="label bg-info m-l-xs">Editor</label> 
              <span class="text-muted text-xs block m-t-xs">
                24 minutes ago
              </span>
            </div>
            <div class="m-t-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum.</div>
          </div>
        </div>

        <div class="m-l-xxl">
          <a class="pull-left thumb-sm">
            <img src="img/a1.jpg" class="img-circle">
          </a>
          <div class="m-l-xxl m-b">
            <div>
              <a href><strong>John smith</strong></a>
              <label class="label bg-dark m-l-xs">Admin</label> 
              <span class="text-muted text-xs block m-t-xs">
                26 minutes ago
              </span>
            </div>
            <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
          </div>
        </div>

        <div>
          <a class="pull-left thumb-sm">
            <img src="img/a2.jpg" class="img-circle">
          </a>
          <div class="m-l-xxl m-b">
            <div>
              <a href><strong>John smith</strong></a>
              <label class="label bg-dark m-l-xs">Admin</label> 
              <span class="text-muted text-xs block m-t-xs">
                26 minutes ago
              </span>
            </div>
            <blockquote class="m-t">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
            <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
          </div>
        </div>

      </div>
      <h4 class="m-t-lg m-b">Leave a comment</h4>
      <form>
        <div class="form-group pull-in clearfix">
          <div class="col-sm-6">
            <label>Your name</label>
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="col-sm-6">
            <label >Email</label>
            <input type="email" class="form-control" placeholder="Enter email">
          </div>
        </div>
        <div class="form-group">
          <label>Comment</label>
          <textarea class="form-control" rows="5" placeholder="Type your comment"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Submit comment</button>
        </div>
      </form>
    </div>
    <div class="col-sm-3">
      <h5 class="font-bold">Categories</h5>
      <ul class="list-group">
        <li class="list-group-item">
          <a href>
            <span class="badge pull-right">15</span>
            Photograph
          </a>
        </li>
        <li class="list-group-item">
          <a href>
            <span class="badge pull-right">30</span>
            Life style
          </a>
        </li>
        <li class="list-group-item">
          <a href>
            <span class="badge pull-right">9</span>
            Food
          </a>
        </li>
        <li class="list-group-item">
          <a href>
            <span class="badge pull-right">4</span>
            Travel world
          </a>
        </li>
      </ul>
      <div class="tags m-b-lg l-h-2x">
        <a href class="label bg-primary">Bootstrap</a> <a href class="label bg-primary">Application</a> <a href class="label bg-primary">Apple</a> <a href class="label bg-primary">Less</a> <a href class="label bg-primary">Theme</a> <a href class="label bg-primary">Wordpress</a>
      </div>
      <h5 class="font-bold">Recent Posts</h5>
      <div>
        <div>
          <a class="pull-left thumb thumb-wrapper m-r">
            <img src="img/b0.jpg">
          </a>
          <div class="clear">                        
            <a href class="font-semibold text-ellipsis">Bootstrap 3: What you need to know</a>
            <div class="text-xs block m-t-xs"><a href>Travel</a> 2 minutes ago</div>
          </div>
        </div>
        <div class="line"></div>
        <div>
          <a class="pull-left thumb thumb-wrapper m-r">
            <img src="img/b1.jpg">
          </a>
          <div class="clear">                        
            <a href class="font-semibold text-ellipsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
            <div class="text-xs block m-t-xs"><a href>Design</a> 2 hours ago</div>
          </div>
        </div>
        <div class="line"></div>
        <div>
          <a class="pull-left thumb thumb-wrapper m-r">
            <img src="img/b2.jpg">
          </a>
          <div class="clear">                        
            <a href class="font-semibold text-ellipsis">Sed diam nonummy nibh euismod tincidunt ut laoreet</a>
            <div class="text-xs block m-t-xs"><a href>MFC</a> 1 week ago</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

   <hr> -->
   <div class="bg-light lter b-b wrapper-md hidden-print">
  <h1 class="m-n font-thin h3">Price</h1>
</div>
<div class="wrapper-md">
  <div class="row row-sm">
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="panel b-a">
        <div class="panel-heading text-center bg-info no-border">
          <h4 class="text-u-c m-b-none">Start</h4>
          <h2 class="m-t-none">
            <sup class="pos-rlt" style="top:-22px">$</sup>
            <span class="text-2x text-lt">99</span>
            <span class="text-xs">/ mo</span>
          </h2>
        </div>
        <ul class="list-group">
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Email preview on air
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Spam testing and blocking
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 100 GB Space
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 200 user accounts
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Free support for two years
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Free upgrade for one year
          </li>
        </ul>
        <div class="panel-footer text-center">
          <a href class="btn btn-info font-bold m">Start your free trial</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="panel b-a">
        <div class="panel-heading text-center bg-warning no-border">
          <span class="text-u-c m-b-none font-bold">Premium</span>          
        </div>
        <div class="wrapper text-center b-b b-light">
          <h2 class="m-t-none">
            <sup class="pos-rlt" style="top:-22px">$</sup>
            <span class="text-2x text-lt">199</span>
            <span class="text-xs">/ mo</span>
          </h2>
        </div>
        <ul class="list-group text-center no-borders m-t-sm">
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Email preview on air
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Spam testing and blocking
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 100 GB Space
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 200 user accounts
          </li>
          <li class="list-group-item">
            <i class="icon-close text-danger m-r-xs"></i> <span class="text-l-t">Free support for two years</span>
          </li>
          <li class="list-group-item">
            <i class="icon-close text-danger m-r-xs"></i> <span class="text-l-t">Free upgrade for one year</span>
          </li>
        </ul>
        <div class="panel-footer text-center">
          <a href class="btn btn-warning font-bold m">Start your free trial</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="panel b-a">
        <div class="panel-heading wrapper-xs bg-success no-border">          
        </div>
        <div class="wrapper text-center">
          <h4 class="text-u-c m-b-none">Bussiness</h4>
          <h2 class="m-t-none">
            <sup class="pos-rlt" style="top:-22px">$</sup>
            <span class="text-2x text-lt">299</span>
            <span class="text-xs">/ mo</span>
          </h2>
        </div>
        <ul class="list-group">
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Email preview on air
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Spam testing and blocking
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 100 GB Space
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 200 user accounts
          </li>
          <li class="list-group-item">
            <i class="icon-close text-danger m-r-xs"></i> <span class="text-l-t">Free support for two years</span>
          </li>
          <li class="list-group-item">
            <i class="icon-close text-danger m-r-xs"></i> <span class="text-l-t">Free upgrade for one year</span>
          </li>
        </ul>
        <div class="panel-footer text-center">
          <a href class="btn btn-success font-bold m">Start your free trial</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 hidden-md">
      <div class="panel b-a">
        <div class="panel-heading wrapper-xs bg-primary no-border">
          
        </div>
        <div class="wrapper text-center b-b b-light">
          <h4 class="text-u-c m-b-none">Enterprise</h4>
          <h2 class="m-t-none">
            <sup class="pos-rlt" style="top:-22px">$</sup>
            <span class="text-2x text-lt">399</span>
            <span class="text-xs">/ mo</span>
          </h2>
        </div>
        <ul class="list-group text-center no-borders m-t-sm">
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Email preview on air
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Spam testing and blocking
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 100 GB Space
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 200 user accounts
          </li>
          <li class="list-group-item">
            <i class="icon-close text-danger m-r-xs"></i> <span class="text-l-t">Free support for two years</span>
          </li>
          <li class="list-group-item">
            <i class="icon-close text-danger m-r-xs"></i> <span class="text-l-t">Free upgrade for one year</span>
          </li>
        </ul>
        <div class="panel-footer text-center">
          <a href class="btn btn-primary font-bold m">Start your free trial</a>
        </div>
      </div>
    </div>
  </div>
  <h2 class="font-thin m-b-lg">Combine</h2>
  <div class="row no-gutter">
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="panel b-a">
        <div class="panel-heading wrapper-xs bg-primary no-border">          
        </div>
        <div class="wrapper text-center b-b b-light">
          <h4 class="text-u-c m-b-none">Start</h4>
          <h2 class="m-t-none">
            <sup class="pos-rlt" style="top:-22px">$</sup>
            <span class="text-2x text-lt">99</span>
            <span class="text-xs">/ mo</span>
          </h2>
        </div>
        <ul class="list-group text-center no-borders m-t-sm">
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Email preview on air
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Spam testing and blocking
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 100 GB Space
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 200 user accounts
          </li>
          <li class="list-group-item">
            <i class="icon-close text-danger m-r-xs"></i> <span class="text-l-t">Free support for two years</span>
          </li>
          <li class="list-group-item">
            <i class="icon-close text-danger m-r-xs"></i> <span class="text-l-t">Free upgrade for one year</span>
          </li>
        </ul>
        <div class="panel-footer text-center">
          <a href class="btn btn-primary font-bold m">Start your free trial</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="panel b-a m-t-n-md m-b-xl">
        <div class="panel-heading wrapper-xs bg-warning dker no-border">
          
        </div>
        <div class="wrapper bg-warning text-center m-l-n-xxs m-r-n-xxs">
          <h4 class="text-u-c m-b-none">Premium</h4>
          <h2 class="m-t-none">
            <sup class="pos-rlt" style="top:-22px">$</sup>
            <span class="text-2x text-lt">199</span>
            <span class="text-xs">/ mo</span>
          </h2>
        </div>
        <ul class="list-group text-center no-borders m-t-sm">
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Email preview on air
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Spam testing and blocking
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 100 GB Space
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 200 user accounts
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Free support for two years
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Free upgrade for one year
          </li>
        </ul>
        <div class="panel-footer text-center b-t m-t bg-light lter">
          <div class="m-t-sm">Recommanded for you</div>
          <a href class="btn btn-warning font-bold m">Start your free trial</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="panel b-a">
        <div class="panel-heading wrapper-xs bg-primary no-border">          
        </div>
        <div class="wrapper text-center b-b b-light">
          <h4 class="text-u-c m-b-none">Business</h4>
          <h2 class="m-t-none">
            <sup class="pos-rlt" style="top:-22px">$</sup>
            <span class="text-2x text-lt">299</span>
            <span class="text-xs">/ mo</span>
          </h2>
        </div>
        <ul class="list-group text-center no-borders m-t-sm">
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Email preview on air
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Spam testing and blocking
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 500 GB Space
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 1000 user accounts
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Free support for two years
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Free upgrade for one year
          </li>
        </ul>
        <div class="panel-footer text-center">
          <a href class="btn btn-primary font-bold m">Start your free trial</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 hidden-md">
      <div class="panel b-a">
        <div class="panel-heading wrapper-xs bg-primary no-border">
          
        </div>
        <div class="wrapper text-center b-b b-light">
          <h4 class="text-u-c m-b-none">Enterprise</h4>
          <h2 class="m-t-none">
            <sup class="pos-rlt" style="top:-22px">$</sup>
            <span class="text-2x text-lt">399</span>
            <span class="text-xs">/ mo</span>
          </h2>
        </div>
        <ul class="list-group text-center no-borders m-t-sm">
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Email preview on air
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Spam testing and blocking
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Unlimited Space
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Unlimited user accounts
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Free support for two years
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Free upgrade for one year
          </li>
        </ul>
        <div class="panel-footer text-center">
          <a href class="btn btn-primary font-bold m">Start your free trial</a>
        </div>
      </div>
    </div>
  </div>
</div>
   <hr>
   <div class="hbox hbox-auto-xs hbox-auto-sm">
  <div class="col">
    <div style="background:url(img/c4.jpg) center center; background-size:cover">
      <div class="wrapper-lg bg-white-opacity">
        <div class="row m-t">
          <div class="col-sm-7">
            <a href class="thumb-lg pull-left m-r">
              <img src="img/a0.jpg" class="img-circle">
            </a>
            <div class="clear m-b">
              <div class="m-b m-t-sm">
                <span class="h3 text-black">John.Smith</span>
                <small class="m-l">London, UK</small>
              </div>
              <p class="m-b">
                <a href class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i class="fa fa-twitter"></i></a>
                <a href class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i class="fa fa-facebook"></i></a>
                <a href class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i class="fa fa-google-plus"></i></a>
              </p>
              <a href class="btn btn-sm btn-success btn-rounded">Follow</a>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="pull-right pull-none-xs text-center">
              <a href class="m-b-md inline m">
                <span class="h3 block font-bold">2k</span>
                <small>Followers</small>
              </a>
              <a href class="m-b-md inline m">
                <span class="h3 block font-bold">250</span>
                <small>Following</small>
              </a>
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
    <div class="padder">      
      <div class="streamline b-l b-info m-l-lg m-b padder-v">
        <div>
          <a class="pull-left thumb-sm avatar m-l-n-md">
            <img src="img/a9.jpg" class="img-circle" alt="...">
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
        <!-- .comment-reply -->
        <div class="m-l-lg">
          <a class="pull-left thumb-sm avatar">
            <img src="img/a5.jpg" alt="...">
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
        <!-- / .comment-reply -->
        <div>
          <a class="pull-left thumb-sm avatar m-l-n-md">
            <img src="img/a3.jpg" alt="...">
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
            <img src="img/a6.jpg" class="img-circle" alt="...">
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
              <img src="img/c5.jpg" class="b b-a wrapper-xs bg-white img-responsive">
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
            <img src="img/a4.jpg" class="img-circle" alt="...">
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
            <img src="img/a2.jpg" alt="...">
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
    </div>
  </div>
  <div class="col w-lg bg-light lter b-l bg-auto">
    <div class="wrapper">
      <div class="">
        <h4 class="m-t-xs m-b-xs">Who to follow</h4>
        <ul class="list-group no-bg no-borders pull-in">
          <li class="list-group-item">
            <a herf class="pull-left thumb-sm avatar m-r">
              <img src="img/a4.jpg" alt="..." class="img-circle">
              <i class="on b-white bottom"></i>
            </a>
            <div class="clear">
              <div><a href>Chris Fox</a></div>
              <small class="text-muted">Designer, Blogger</small>
            </div>
          </li>
          <li class="list-group-item">
            <a herf class="pull-left thumb-sm avatar m-r">
              <img src="img/a5.jpg" alt="..." class="img-circle">
              <i class="on b-white bottom"></i>
            </a>
            <div class="clear">
              <div><a href>Mogen Polish</a></div>
              <small class="text-muted">Writter, Mag Editor</small>
            </div>
          </li>
          <li class="list-group-item">
            <a herf class="pull-left thumb-sm avatar m-r">
              <img src="img/a6.jpg" alt="..." class="img-circle">
              <i class="busy b-white bottom"></i>
            </a>
            <div class="clear">
              <div><a href>Joge Lucky</a></div>
              <small class="text-muted">Art director, Movie Cut</small>
            </div>
          </li>
          <li class="list-group-item">
            <a herf class="pull-left thumb-sm avatar m-r">
              <img src="img/a7.jpg" alt="..." class="img-circle">
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
            <img src="img/a0.jpg" class="img-circle">
          </a>
          <div class="clear">
            <a href class="text-info">@Mike Mcalidek <i class="fa fa-twitter"></i></a>
            <small class="block text-muted">2,415 followers / 225 tweets</small>
            <a href class="btn btn-xs btn-success m-t-xs">Follow</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
   <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3"><i class="icon-magnifier i-sm m-r-sm"></i> Search</h1>
</div>
<div class="wrapper-md">
  <form action="#" class="m-b-md">
    <div class="input-group">
      <input type="text" class="form-control input-lg" placeholder="Type keyword">
      <span class="input-group-btn">
        <button class="btn btn-lg btn-default" type="button">Search</button>
      </span>
    </div>
  </form>
  <p class="m-b-md"><strong>23</strong> Results found for: <strong>Keyword</strong></p>
  <tabset class="tab-container">
    <tab>
      <tab-heading>
        All <span class="badge badge-sm m-l-xs">16</span>
      </tab-heading>
      <ul class="list-group no-borders pull-in m-b-none">
        <li class="list-group-item">
          <a href="#" class="h4 text-primary m-b-sm m-t-sm block">Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum</p>
          <p><span class="label bg-primary pos-rlt m-r inline wrapper-xs"><i class="arrow right arrow-primary"></i> Tags:</span> <a href class="m-r-sm">admin</a> <a href>app</a>
          </p>
        </li>
        <li class="list-group-item">
          <a href="#" class="h4 text-primary m-b-sm m-t-sm block">Vestibulum ullamcorper sodales nisi nec condimentum</a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum</p>
          <p><span class="label bg-info pos-rlt m-r inline wrapper-xs"><i class="arrow right arrow-info"></i> Tags:</span> <a href class="m-r-sm">admin</a> <a href>app</a>
          </p>
        </li>
        <li class="list-group-item">
          <a href="#" class="h4 text-primary m-b-sm m-t-sm block">Mauris convallis mauris at pellentesque volutpat</a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum</p>
          <p><span class="label bg-info pos-rlt m-r inline wrapper-xs"><i class="arrow right arrow-info"></i> Tags:</span> <a href class="m-r-sm">admin</a> <a href>app</a>
          </p>
        </li>
        <li class="list-group-item">
          <a href="#" class="h4 text-primary m-b-sm m-t-sm block">Phasellus at ultricies neque, quis malesuada augu</a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum</p>
          <p><span class="label bg-info pos-rlt m-r inline wrapper-xs"><i class="arrow right arrow-info"></i> Tags:</span> <a href class="m-r-sm">admin</a> <a href>app</a>
          </p>
        </li>
        <li class="list-group-item">
          <a href="#" class="h4 text-primary m-b-sm m-t-sm block">Morbi nec nunc condimentum, egestas dui nec, fermentum diam</a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum</p>
          <p><span class="label bg-info pos-rlt m-r inline wrapper-xs"><i class="arrow right arrow-info"></i> Tags:</span> <a href class="m-r-sm">admin</a> <a href>app</a>
          </p>
        </li>
        <li class="list-group-item">
          <a href="#" class="h4 text-primary m-b-sm m-t-sm block">Vestibulum ullamcorper sodales nisi nec condimentum Mauris convallis</a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum</p>
          <p><span class="label bg-info pos-rlt m-r inline wrapper-xs"><i class="arrow right arrow-info"></i> Tags:</span> <a href class="m-r-sm">admin</a> <a href>app</a>
          </p>
        </li>
      </ul>
    </tab>
    <tab>
      <tab-heading>
        Users <span class="badge bg-danger badge-sm m-l-xs">6</span>
      </tab-heading>
      <ul class="list-group list-group-alt list-group-lg no-borders pull-in m-b-none">
        <li class="list-group-item">
          <a href="#" class="pull-left thumb-md m-r">
            <img src="img/a0.jpg" alt="..." class="img-circle">
          </a>
          <div class="clear">
            <a href="#" class="h4 text-primary m-b-sm block">Jone Dosh <span class="label label-sm bg-info">Editor</span></a>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin egestas dui nec, fermentum diam. Vivamus vel tincidunt libero</div>
          </div>
        </li>
        <li class="list-group-item">
          <a href="#" class="pull-left thumb-md m-r">
            <img src="img/a1.jpg" alt="..." class="img-circle">
          </a>
          <div class="clear">
            <a href="#" class="h4 text-primary m-b-sm block">Miya Soe <span class="label label-sm bg-danger">VIP</span></a>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin egestas dui nec, fermentum diam. Vivamus vel tincidunt libero</div>
          </div>
        </li>
        <li class="list-group-item">
          <a href="#" class="pull-left thumb-md m-r">
            <img src="img/a2.jpg" alt="..." class="img-circle">
          </a>
          <div class="clear">
            <a href="#" class="h4 text-primary m-b-sm block">Jocob</a>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin egestas dui nec, fermentum diam. Vivamus vel tincidunt libero</div>
          </div>
        </li>
        <li class="list-group-item">
          <a href="#" class="pull-left thumb-md m-r">
            <img src="img/a3.jpg" alt="..." class="img-circle">
          </a>
          <div class="clear">
            <a href="#" class="h4 text-primary m-b-sm block">Goal De</a>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin egestas dui nec, fermentum diam. Vivamus vel tincidunt libero</div>
          </div>
        </li>
        <li class="list-group-item">
          <a href="#" class="pull-left thumb-md m-r">
            <img src="img/a4.jpg" alt="..." class="img-circle">
          </a>
          <div class="clear">
            <a href="#" class="h4 text-primary m-b-sm block">Miia Se</a>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin egestas dui nec, fermentum diam. Vivamus vel tincidunt libero</div>
          </div>
        </li>
      </ul>
    </tab>
    <tab>
      <tab-heading>
        Comments <span class="badge bg-primary badge-sm m-l-xs">9</span>
      </tab-heading>
      <ul class="list-group list-group-lg no-borders pull-in m-b-none">
        <li class="list-group-item">
          <a href="#" class="h4 text-primary m-b-sm block">Mauris convallis mauris at pellentesque volutpat</a>
          <p class="b wrapper-md pos-rlt bg-light r r-2x"><span class="arrow top pull-left arrow-light"></span>Lorem ipsum dolor sit amet, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum</p>
        </li>
        <li class="list-group-item">
          <a href="#" class="h4 text-primary m-b-sm block">Phasellus at ultricies neque, quis malesuada augu</a>
          <p class="b wrapper-md pos-rlt"><span class="arrow top pull-left"></span>Fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum</p>
        </li>
        <li class="list-group-item">
          <a href="#" class="h4 text-primary m-b-sm block">Morbi nec nunc condimentum, egestas dui nec, fermentum diam</a>
          <p class="b wrapper-md pos-rlt bg-info text-lt r r-2x"><span class="arrow top pull-left arrow-info"></span>Vivamus vel tincidunt libero, vitae elementum ligula venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum</p>
        </li>
        <li class="list-group-item">
          <a href="#" class="h4 text-primary m-b-sm block">Vestibulum ullamcorper sodales nisi nec condimentum Mauris convallis</a>
          <p class="b wrapper-md pos-rlt"><span class="arrow top pull-left"></span>Egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum</p>
        </li>
      </ul>
    </tab>
  </tabset>
</div>
   <hr>
   <div class="container w-xxl w-auto-xs" ng-controller="SigninFormController" ng-init="app.settings.container = false;">
  <a href class="navbar-brand block m-t">{{app.name}}</a>
  <div class="m-b-lg">
    <div class="wrapper text-center">
      <strong>Sign in to get in touch</strong>
    </div>
    <form name="form" class="form-validation">
      <div class="text-danger wrapper text-center" ng-show="authError">
          {{authError}}
      </div>
      <div class="list-group list-group-sm">
        <div class="list-group-item">
          <input type="email" placeholder="Email" class="form-control no-border" ng-model="user.email" required>
        </div>
        <div class="list-group-item">
           <input type="password" placeholder="Password" class="form-control no-border" ng-model="user.password" required>
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-primary btn-block" ng-click="login()" ng-disabled='form.$invalid'>Log in</button>
      <div class="text-center m-t m-b"><a ui-sref="access.forgotpwd">Forgot password?</a></div>
      <div class="line line-dashed"></div>
      <p class="text-center"><small>Do not have an account?</small></p>
      <a ui-sref="access.signup" class="btn btn-lg btn-default btn-block">Create an account</a>
    </form>
  </div>
  <div class="text-center" ng-include="'tpl/blocks/page_footer.html'"></div>
</div>
   <hr>
       <div class="container w-xxl w-auto-xs" ng-controller="SignupFormController" ng-init="app.settings.container = false;">
      <a href class="navbar-brand block m-t">{{app.name}}</a>
      <div class="m-b-lg">
        <div class="wrapper text-center">
          <strong>Sign up to find interesting thing</strong>
        </div>
        <form name="form" class="form-validation">
          <div class="text-danger wrapper text-center" ng-show="authError">
              {{authError}}
          </div>
          <div class="list-group list-group-sm">
            <div class="list-group-item">
              <input placeholder="Name" class="form-control no-border" ng-model="user.name" required>
            </div>
            <div class="list-group-item">
              <input type="email" placeholder="Email" class="form-control no-border" ng-model="user.email" required>
            </div>
            <div class="list-group-item">
               <input type="password" placeholder="Password" class="form-control no-border" ng-model="user.password" required>
            </div>
          </div>
          <div class="checkbox m-b-md m-t-none">
            <label class="i-checks">
              <input type="checkbox" ng-model="agree" required><i></i> Agree the <a href>terms and policy</a>
            </label>
          </div>
          <button type="submit" class="btn btn-lg btn-primary btn-block" ng-click="signup()" ng-disabled='form.$invalid'>Sign up</button>
          <div class="line line-dashed"></div>
          <p class="text-center"><small>Already have an account?</small></p>
          <a ui-sref="access.signin" class="btn btn-lg btn-default btn-block">Sign in</a>
        </form>
      </div>
      <div class="text-center" ng-include="'tpl/blocks/page_footer.html'"></div>
    </div>
   <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Footable</h1>
</div>
<div class="wrapper-md">
  <div class="panel panel-default">
    <div class="panel-heading">
      Footable - make HTML tables on smaller devices look awesome
    </div>
    <div class="panel-body b-b b-light">
      Search: <input id="filter" type="text" class="form-control input-sm w-sm inline m-r"/>
    </div>
    <div>
      <table class="table m-b-none" ui-jq="footable" data-filter="#filter" data-page-size="5">
        <thead>
          <tr>
              <th data-toggle="true">
                  First Name
              </th>
              <th>
                  Last Name
              </th>
              <th data-hide="phone,tablet">
                  Job Title
              </th>
              <th data-hide="phone,tablet" data-name="Date Of Birth">
                  DOB
              </th>
              <th data-hide="phone">
                  Status
              </th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td>Isidra</td>
              <td><a href>Boudreaux</a></td>
              <td>Traffic Court Referee</td>
              <td data-value="78025368997">22 Jun 1972</td>
              <td data-value="1"><span class="label bg-success" title="Active">Active</span></td>
          </tr>
          <tr>
              <td>Shona</td>
              <td>Woldt</td>
              <td><a href>Airline Transport Pilot</a></td>
              <td data-value="370961043292">3 Oct 1981</td>
              <td data-value="2"><span class="label bg-light" title="Disabled">Disabled</span></td>
          </tr>
          <tr>
              <td>Granville</td>
              <td>Leonardo</td>
              <td>Business Services Sales Representative</td>
              <td data-value="-22133780420">19 Apr 1969</td>
              <td data-value="3"><span class="label bg-warning" title="Suspended">Suspended</span>
              </td>
          </tr>
          <tr>
              <td>Easer</td>
              <td>Dragoo</td>
              <td>Drywall Stripper</td>
              <td data-value="250833505574">13 Dec 1977</td>
              <td data-value="1"><span class="label bg-success" title="Active">Active</span></td>
          </tr>
          <tr>
              <td>Maple</td>
              <td>Halladay</td>
              <td>Aviation Tactical Readiness Officer</td>
              <td data-value="694116650726">30 Dec 1991</td>
              <td data-value="3"><span class="label bg-warning" title="Suspended">Suspended</span>
              </td>
          </tr>
          <tr>
              <td>Maxine</td>
              <td><a href>Woldt</a></td>
              <td><a href>Business Services Sales Representative</a></td>
              <td data-value="561440464855">17 Oct 1987</td>
              <td data-value="2"><span class="label bg-light" title="Disabled">Disabled</span></td>
          </tr>
          <tr>
              <td>Lorraine</td>
              <td>Mcgaughy</td>
              <td>Hemodialysis Technician</td>
              <td data-value="437400551390">11 Nov 1983</td>
              <td data-value="2"><span class="label bg-light" title="Disabled">Disabled</span></td>
          </tr>
          <tr>
              <td>Lizzee</td>
              <td><a href>Goodlow</a></td>
              <td>Technical Services Librarian</td>
              <td data-value="-257733999319">1 Nov 1961</td>
              <td data-value="3"><span class="label bg-warning" title="Suspended">Suspended</span>
              </td>
          </tr>
          <tr>
              <td>Judi</td>
              <td>Badgett</td>
              <td>Electrical Lineworker</td>
              <td data-value="362134712000">23 Jun 1981</td>
              <td data-value="1"><span class="label bg-success" title="Active">Active</span></td>
          </tr>
          <tr>
              <td>Lauri</td>
              <td>Hyland</td>
              <td>Blackjack Supervisor</td>
              <td data-value="500874333932">15 Nov 1985</td>
              <td data-value="3"><span class="label bg-warning" title="Suspended">Suspended</span>
              </td>
          </tr>
        </tbody>
        <tfoot class="hide-if-no-paging">
          <tr>
              <td colspan="5" class="text-center">
                  <ul class="pagination"></ul>
              </td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
   <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">ngGrid</h1>
</div>
<div class="wrapper-md" ng-controller="GridDemoCtrl">
  <div class="panel panel-default">
    <div class="panel-heading">
      ngGrid
    </div>
    <div class="table-responsive">
      <div ng-grid="gridOptions" style="min-height:420px"></div>
    </div>
  </div>
</div>
   <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Static Table</h1>
</div>
<div class="wrapper-md">
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <span class="label bg-danger pull-right m-t-xs">4 left</span>
          Tasks
        </div>
        <table class="table table-striped m-b-none">
          <thead>
            <tr>
              <th>Progress</th>
              <th>Item</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="progress progress-sm progress-striped active m-t-xs m-b-none">
                  <div class="progress-bar bg-success" data-toggle="tooltip" data-original-title="80%" style="width: 80%"></div>
                </div>
              </td>
              <td>App prototype design</td>
            </tr>
            <tr>                    
              <td>
                <div class="progress progress-xs m-t-xs m-b-none">
                  <div class="progress-bar bg-info" data-toggle="tooltip" data-original-title="40%" style="width: 40%"></div>
                </div>
              </td>
              <td>Design documents</td>
            </tr>
            <tr>                    
              <td>
                <div class="progress progress-xs m-t-xs m-b-none">
                  <div class="progress-bar bg-warning" data-toggle="tooltip" data-original-title="20%" style="width: 20%"></div>
                </div>
              </td>
              <td>UI toolkit</td>
            </tr>
            <tr>                    
              <td>
                <div class="progress progress-xs m-t-xs m-b-none">
                  <div class="progress-bar bg-danger" data-toggle="tooltip" data-original-title="15%" style="width: 15%"></div>
                </div>
              </td>
              <td>Testing</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">Stats</div>
        <table class="table table-striped m-b-none">
          <thead>
            <tr>
              <th style="width:60px;" class="text-center">Graph</th>
              <th>Item</th>                    
              <th style="width:70px;"></th>
            </tr>
          </thead>
          <tbody>
            <tr>                    
              <td>
                <div ng-init="data1=[ 16,15,15,14,17,18,16,15,16 ]" ui-jq="sparkline" ui-options="{{data1}}, {type:'bar', height:19, barWidth:4, barSpacing:2, barColor:'{{app.color.success}}'}" class="sparkline inline">loading...</div>
              </td>
              <td>App downloads</td>
              <td class="text-success">
                <i class="fa fa-level-up"></i> 40%
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <div ng-init="data2=[ 60,30,10 ]" ui-jq="sparkline" ui-options="{{data2}}, {type:'pie', height:19, sliceColors:['{{app.color.info}}','#fff','{{app.color.warning}}']}" class="sparkline inline">loading...</div>
              </td>
              <td>Social connection</td>
              <td class="text-success">
                <i class="fa fa-level-up"></i> 20%
              </td>
            </tr>
            <tr>                    
              <td>
                <div ng-init="data3=[ 16,15,15,14,17,18,16,15,16 ]" ui-jq="sparkline" ui-options="{{data3}}, {type:'line', height:19, width:60, lineColor:'{{app.color.primary}}', fillColor:'#fff'}" class="sparkline inline">loading...</div>
              </td>
              <td>Revenue</td>
              <td class="text-warning">
                <i class="fa fa-level-down"></i> 5%
              </td>
            </tr>
            <tr>                    
              <td>
                <div ng-init="data4=[ 16,15,15,14,17,18,16,15,16 ]" ui-jq="sparkline" ui-options="{{data4}}, {type:'discrete', height:19, width:60, lineColor:'{{app.color.success}}'}" class="sparkline inline">loading...</div>
              </td>
              <td>Customer increase</td>
              <td class="text-danger">
                <i class="fa fa-level-down"></i> 20%
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      Responsive Table
    </div>
    <div class="row wrapper">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Project</th>
            <th>Task</th>
            <th>Date</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>Idrawfast</td>
            <td>4c</td>
            <td>Jul 25, 2013</td>
            <td>
              <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>Formasa</td>
            <td>8c</td>
            <td>Jul 22, 2013</td>
            <td>
              <a href ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>Avatar system</td>
            <td>15c</td>
            <td>Jul 15, 2013</td>
            <td>
              <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>Throwdown</td>
            <td>4c</td>
            <td>Jul 11, 2013</td>
            <td>
              <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>Idrawfast</td>
            <td>4c</td>
            <td>Jul 7, 2013</td>
            <td>
              <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>Formasa</td>
            <td>8c</td>
            <td>Jul 3, 2013</td>
            <td>
              <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>Avatar system</td>
            <td>15c</td>
            <td>Jul 2, 2013</td>
            <td>
              <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>Videodown</td>
            <td>4c</td>
            <td>Jul 1, 2013</td>
            <td>
              <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-4 hidden-xs">
          <select class="input-sm form-control w-sm inline v-middle">
            <option value="0">Bulk action</option>
            <option value="1">Delete selected</option>
            <option value="2">Bulk edit</option>
            <option value="3">Export</option>
          </select>
          <button class="btn btn-sm btn-default">Apply</button>                  
        </div>
        <div class="col-sm-4 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-4 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href><i class="fa fa-chevron-left"></i></a></li>
            <li><a href>1</a></li>
            <li><a href>2</a></li>
            <li><a href>3</a></li>
            <li><a href>4</a></li>
            <li><a href>5</a></li>
            <li><a href><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
   <hr>
<!--    <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">UI Bootstrap <span class="badge">16</span></h1>
  <small class="text-muted">Bootstrap components written in pure AngularJS</small>
</div>
<div class="wrapper-md">
  <div class="row">
    <div class="col-lg-6">
      <!-- accordion -->      
      <div ng-controller="AccordionDemoCtrl">
        <accordion close-others="oneAtATime">
          <accordion-group heading="Accordion Header, initially expanded" is-open="status.isFirstOpen" is-disabled="status.isFirstDisabled">
            <p>
              <button class="btn btn-default btn-sm" ng-click="status.open = !status.open">Toggle last panel</button>
              <button class="btn btn-default btn-sm" ng-click="status.isFirstDisabled = ! status.isFirstDisabled">Enable / Disable first panel</button>
            </p>
          </accordion-group>
          <accordion-group heading="{{group.title}}" ng-repeat="group in groups">
            {{group.content}}
          </accordion-group>
          <accordion-group heading="Dynamic body content">
            <p>The body of the accordion group grows to fit the contents</p>
              <button class="btn btn-default btn-sm" ng-click="addItem()">Add Item</button>
              <div class="list-group m-t">
                <div ng-repeat="item in items" class="list-group-item">{{item}}</div>
              </div>
          </accordion-group>
          <accordion-group is-open="status.open" class="b-info">
              <accordion-heading>
                  I can have markup, too! <i class="pull-right fa fa-angle-right" ng-class="{'fa-angle-down': status.open, 'fa-angle-right': !status.open}"></i>
              </accordion-heading>
              This is just some content to illustrate fancy headings.
          </accordion-group>
        </accordion>
        <label class="checkbox i-checks m-l-md m-b-md">
          <input type="checkbox" ng-model="oneAtATime"><i></i>
          Open only one at a time
        </label>
      </div>
      <!-- / accordion -->

      <!-- alert -->
      <div ng-controller="AlertDemoCtrl" class="m-b-md">
        <alert ng-repeat="alert in alerts" type="{{alert.type}}" close="closeAlert($index)">{{alert.msg}}</alert>
        <button class='btn btn-default' ng-click="addAlert()">Add Alert</button>
      </div>
      <!-- / alert -->

      <!-- button -->
      <div ng-controller="ButtonsDemoCtrl" class="panel panel-default">
        <div class="panel-heading">
          Buttons
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4">
              <h5>Single toggle</h5>
              <div class="well b bg-light lter wrapper-sm">{{singleModel}}</div>
              <button type="button" class="btn btn-primary" ng-model="singleModel" btn-checkbox btn-checkbox-true="1" btn-checkbox-false="0">
                  Single Toggle
              </button>
            </div>
            <div class="col-md-8">
              <h5>Checkbox</h5>
              <div class="well b bg-light lter wrapper-sm">{{checkModel}}</div>
              <div class="btn-group">
                  <label class="btn btn-primary" ng-model="checkModel.left" btn-checkbox>Left</label>
                  <label class="btn btn-primary" ng-model="checkModel.middle" btn-checkbox>Middle</label>
                  <label class="btn btn-primary" ng-model="checkModel.right" btn-checkbox>Right</label>
              </div>
            </div>
          </div>
          <div class="m-t m-b">
            <h5>Radio &amp; Uncheckable Radio</h5>
            <div class="well b bg-light lter wrapper-sm">{{radioModel || 'null'}}</div>
            <div class="btn-group">
                <label class="btn btn-primary" ng-model="radioModel" btn-radio="'Left'">Left</label>
                <label class="btn btn-primary" ng-model="radioModel" btn-radio="'Middle'">Middle</label>
                <label class="btn btn-primary" ng-model="radioModel" btn-radio="'Right'">Right</label>
            </div>
            <div class="btn-group">
                <label class="btn btn-success" ng-model="radioModel" btn-radio="'Left'" uncheckable>Left</label>
                <label class="btn btn-success" ng-model="radioModel" btn-radio="'Middle'" uncheckable>Middle</label>
                <label class="btn btn-success" ng-model="radioModel" btn-radio="'Right'" uncheckable>Right</label>
            </div>
          </div>
        </div>
      </div>
      <!-- / button -->

      <!-- carousel -->
      <div ng-controller="CarouselDemoCtrl" class="panel b-a" set-ng-animate="false">
        <div class="panel-heading">
          Carousel
        </div>
        <carousel interval="myInterval">
          <slide ng-repeat="slide in slides" active="slide.active">
            <img ng-src="{{slide.image}}" class="img-full">
            <div class="carousel-caption">
              <h4>Slide {<?php echo ($index); ?>}</h4>
              <p>{{slide.text}}</p>
            </div>
          </slide>
        </carousel>
        <div class="panel-footer">
          <button type="button" class="btn btn-default m-r" ng-click="addSlide()">Add Slide</button>
          Interval: <input type="number" class="form-control w-sm inline" ng-model="myInterval"> ms          
        </div>
      </div>
      <!-- / carousel -->      

      <!-- collapse -->
      <div class="panel b-a">
        <div class="panel-heading b-b b-light">Collapse 
          <button class="btn btn-default btn-xs pull-right" ng-init="isCollapsed = false" ng-click="isCollapsed = !isCollapsed">Toggle collapse</button>
        </div>
        <div collapse="isCollapsed" class="panel-body">
          Some content
        </div>
      </div>
      <!-- / collapse -->

      <!-- dropdown -->
      <div ng-controller="DropdownDemoCtrl" class="panel b-a">
        <div class="panel-heading">Dropdown</div>
        <div class="panel-body">
          <!-- Simple dropdown -->
          <span class="dropdown" on-toggle="toggled(open)">
            <a href class="dropdown-toggle">
              Click me for a dropdown, yo!
            </a>
            <ul class="dropdown-menu">
              <li ng-repeat="choice in items">
                <a href>{{choice}}</a>
              </li>
            </ul>
          </span>

          <!-- Single button -->
          <div class="btn-group" dropdown is-open="status.isopen">
            <button type="button" class="btn btn-primary" dropdown-toggle ng-disabled="disabled">
              Button dropdown <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href>Action</a></li>
              <li><a href>Another action</a></li>
              <li><a href>Something else here</a></li>
              <li class="divider"></li>
              <li><a href>Separated link</a></li>
            </ul>
          </div>

          <!-- Split button -->
          <div class="btn-group" dropdown>
            <button type="button" class="btn btn-danger">Action</button>
            <button type="button" class="btn btn-danger dropdown-toggle" dropdown-toggle>
              <span class="caret"></span>
              <span class="sr-only">Split button!</span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href>Action</a></li>
              <li><a href>Another action</a></li>
              <li><a href>Something else here</a></li>
              <li class="divider"></li>
              <li><a href>Separated link</a></li>
            </ul>
          </div>
          <p class="m-t">
              <button type="button" class="btn btn-default btn-sm" ng-click="toggleDropdown($event)">Toggle button dropdown</button>
              <button type="button" class="btn btn-default btn-sm" ng-click="disabled = !disabled">Enable/Disable</button>
          </p>
        </div>
      </div>
      <!-- / dropdown -->

      <!-- modal -->
      <div ng-controller="ModalDemoCtrl" class="panel b-a">
          <script type="text/ng-template" id="myModalContent.html">
            <div ng-include="'tpl/modal.html'"></div>
          </script>
          <div class="panel-heading b-b b-light">Modal</div>
          <div class="panel-body">
            <button class="btn btn-success" ng-click="open()">Open me!</button>
            <button class="btn btn-default" ng-click="open('lg')">Large modal</button>
            <button class="btn btn-default" ng-click="open('sm')">Small modal</button>
          </div>
      </div>
      <!-- /modal -->

      <!-- pagination -->
      <div ng-controller="PaginationDemoCtrl">
        <h4>Pagination</h4>
        <pagination total-items="totalItems" ng-model="currentPage" ng-change="pageChanged()" class="m-t-none m-b"></pagination>
        <pagination boundary-links="true" total-items="totalItems" ng-model="currentPage" class="pagination-sm m-t-none m-b" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;"></pagination>
        <pagination direction-links="false" boundary-links="true" total-items="totalItems" ng-model="currentPage" class="m-t-none m-b"></pagination>
        <pagination direction-links="false" total-items="totalItems" ng-model="currentPage" num-pages="smallnumPages" class="m-t-none m-b"></pagination>
        <div>
          <span class="m-r">The selected page no: <strong>{{currentPage}}</strong></span>
          <button class="btn btn-default" ng-click="setPage(3)">Set current page to: 3</button>
        </div>
        <h4>Pager</h4>
        <pager total-items="totalItems" ng-model="currentPage"></pager>
        <h4>Limit the maximum visible buttons <span class="text-sm">(Page: {{bigCurrentPage}} / {{numPages}})</span></h4>
        <pagination total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm m-t-sm m-b" boundary-links="true"></pagination>
        <pagination total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm m-t-none m-b" boundary-links="true" rotate="false" num-pages="numPages"></pagination>
      </div>
      <!-- / pagination -->

      <!-- popover -->
      <div ng-controller="PopoverDemoCtrl" class="m-b">
        <h4>Popover</h4>
        <div class="row">
          <div class="form-group col-sm-6">
            <label>Popup Text:</label>
            <input type="text" ng-model="dynamicPopover" class="form-control">
          </div>
          <div class="form-group col-sm-6">
            <label>Popup Title:</label>
            <input type="text" ng-model="dynamicPopoverTitle" class="form-control">
          </div>
        </div>
        <button popover="{{dynamicPopover}}" popover-title="{{dynamicPopoverTitle}}" class="btn btn-info">Dynamic Popover</button>
        
        <h5 class="m-t-md">Positional</h5>
        <button popover-placement="top" popover="On the Top!" class="btn btn-default">Top</button>
        <button popover-placement="left" popover="On the Left!" class="btn btn-default">Left</button>
        <button popover-placement="right" popover="On the Right!" class="btn btn-default">Right</button>
        <button popover-placement="bottom" popover="On the Bottom!" class="btn btn-default">Bottom</button>
        
        <h5 class="m-t-md">Triggers</h5>
        <div class="row">
          <div class="col-sm-6">
            <button popover="I appeared on mouse enter!" popover-trigger="mouseenter" class="btn btn-success">Mouseenter</button>
          </div>
          <div class="col-sm-6">
            <input type="text" value="Click me!" popover="I appeared on focus! Click away and I'll vanish..."  popover-trigger="focus" class="form-control">
          </div>
        </div>

        <h5 class="m-t-md">Other</h5>
        <button Popover-animation="true" popover="I fade in and out!" class="btn btn-default">fading</button>
        <button popover="I have a title!" popover-title="The title." class="btn btn-default">title</button>
      </div>
      <!-- / popover -->
    </div>
    <div class="col-lg-6">
      <!-- progressbar -->
      <div ng-controller="ProgressDemoCtrl" class="panel panel-default">
        <div class="panel-heading">
          <ul class="nav nav-pills pull-right">
            <li><a href ng-click="random()">Random</a></li>
            <li><a href ng-click="randomStacked()">Stack</a></li>
          </ul>
          Progressbar
        </div>
        <div class="list-group">
          <div class="list-group-item">
            <progressbar value="35" class="progress-xxs m-t-sm"></progressbar>
            <progressbar value="55" class="progress-xs" type="info"></progressbar>
            <progressbar class="progress-striped progress-xs" value="22" type="success">22%</progressbar>
            <progressbar class="progress-striped active progress-xs m-b-sm" max="200" value="90" type="warning"><i>90 / 200</i></progressbar>
          </div>
          <div class="list-group-item">
            <progressbar max="max" value="dynamic" type="info" class="progress-sm m-t-sm"><span style="white-space:nowrap;">{{dynamic}} / {{max}}</span></progressbar>            
            <progressbar animate="false" value="dynamic" type="success"><b>{{dynamic}}%</b></progressbar>
            <progressbar class="progress-striped active m-b-sm" value="dynamic" type="{{type}}">{{type}} <i ng-show="showWarning">!!! Watch out !!!</i></progressbar>
          </div>
          <div class="list-group-item">
            <progress class="m-t-sm m-b-sm">
              <bar ng-repeat="bar in stacked track by $index" value="bar.value" type="{{bar.type}}">
                <span ng-hide="bar.value < 5">{{bar.value}}%</span>
              </bar>
            </progress>
          </div>
        </div>
      </div>
      <!-- / progressbar -->

      <!-- rating -->
      <div ng-controller="RatingDemoCtrl" class="m-b-lg">
        <h4>Rating</h4>
        <rating ng-model="rate" max="max" readonly="isReadonly" on-hover="hoveringOver(value)" on-leave="overStar = null"></rating>
        <span class="label" ng-class="{'label-warning': percent<30, 'label-info': percent>=30 && percent<70, 'label-success': percent>=70}" ng-show="overStar && !isReadonly">{{percent}}%</span>

        <div class="well b bg-light lt wrapper-sm m-t">Rate: <b>{{rate}}</b> - Readonly is: <i>{{isReadonly}}</i> - Hovering over: <b>{{overStar || "none"}}</b></div>

        <button class="btn btn-sm btn-default" ng-click="rate = 0" ng-disabled="isReadonly">Clear</button>
        <button class="btn btn-sm btn-default" ng-click="isReadonly = ! isReadonly">Toggle Readonly</button>

        <h5 class="m-t">Custom icons</h5>
        <div ng-init="xx = 4" class="m-b text-lg">
          <rating ng-model="xx" max="5" state-on="'fa fa-star text-warning'" state-off="'fa fa-star-o'"></rating> <b>({{xx}})</b>
        </div>
        <div ng-init="x = 5">
          <rating ng-model="x" max="15" state-on="'fa fa-female text-info'" state-off="'fa fa-female'"></rating> <b>(<i>Person:</i> {{x}})</b>
        </div>
      </div>
      <!-- / rating -->

      <!-- tab -->
      <div ng-controller="TabsDemoCtrl">
        <h4>Tabs</h4>
        <p>Select a tab by setting active binding to true:</p>
        <p>
          <button class="btn btn-default btn-sm" ng-click="tabs[0].active = true">Select second tab</button>
          <button class="btn btn-default btn-sm" ng-click="tabs[1].active = true">Select third tab</button>
          <button class="btn btn-default btn-sm" ng-click="tabs[1].disabled = ! tabs[1].disabled">Enable / Disable third tab</button>
        </p>

        <tabset class="tab-container">
          <tab heading="Static title">Static content</tab>
          <tab ng-repeat="tab in tabs" heading="{{tab.title}}" active="tab.active" disabled="tab.disabled">
            {{tab.content}}
          </tab>
          <tab>
            <tab-heading>
              <i class="glyphicon glyphicon-bell"></i> Alert!
            </tab-heading>
            I've got an HTML heading, and a select callback. Pretty cool!
          </tab>
        </tabset>

        <tabset vertical="true" type="pills" class="tab-container">
          <tab heading="Vertical 1">Vertical content 1</tab>
          <tab heading="Vertical 2">Vertical content 2</tab>
        </tabset>

        <tabset justified="true" class="tab-container">
          <tab heading="Justified">Justified content</tab>
          <tab heading="SJ">Short Labeled Justified content</tab>
          <tab heading="Long Justified">Long Labeled Justified content</tab>
        </tabset>
      </div>
      <!-- / tab -->

      <!-- tooltip -->
      <div ng-controller="TooltipDemoCtrl" class="panel panel-default">
        <div class="panel-heading">Tooltip</div>
        <div class="panel-body">
          <div class="row">
            <div class="form-group col-sm-6">
              <label>Dynamic Tooltip Text</label>
              <input type="text" ng-model="dynamicTooltipText" class="form-control">
            </div>
            <div class="form-group col-sm-6">
              <label>Dynamic Tooltip Popup Text</label>
              <input type="text" ng-model="dynamicTooltip" class="form-control">
            </div>
          </div>
          <p>
            Pellentesque <a href="#" class="text-info" tooltip="{{dynamicTooltip}}">{{dynamicTooltipText}}</a>,
            sit amet 
            <a href="#" class="text-info" tooltip-placement="left" tooltip="On the Left!">left</a> eget arcu
            <a href="#" class="text-info" tooltip-placement="right" tooltip="On the Right!">right</a> unc sed 
            <a href="#" class="text-info" tooltip-placement="bottom" tooltip="On the Bottom!">bottom</a> pharetra convallis, 
            <a href="#" class="text-info" tooltip-animation="false" tooltip="I don't fade. :-(">fading</a> at elementum eu
            <a href="#" class="text-info" tooltip-popup-delay='1000' tooltip='appears with delay'>delayed</a> turpis.
          </p>
          <p>
            I can even contain HTML. <a href="#" class="text-info" tooltip-html-unsafe="{{htmlTooltip}}">Check me out!</a>
          </p>
          <form role="form">
            <div class="form-group">
              <label>Or use custom triggers, like focus: </label>
              <input type="text" value="Click me!" tooltip="See? Now click away..."  tooltip-trigger="focus" tooltip-placement="top" class="form-control" />
            </div>
          </form>
        </div>
      </div>
      <!-- / tooltip -->

      <!-- typehead -->
      <div ng-controller="TypeaheadDemoCtrl" class="m-b-lg">
        <h4>Typehead</h4>
        <h5>Static arrays</h5>
        <div class="well b bg-light wrapper-sm">Model: {{selected | json}}</div>
        <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control">

        <h5>Asynchronous results</h5>
        <div class="well b bg-light wrapper-sm">Model: {{asyncSelected | json}}</div>
        <div class="pos-rlt">
          <i ng-show="loadingLocations" class="fa fa-spinner fa-spin form-control-spin"></i>
          <input type="text" ng-model="asyncSelected" placeholder="Locations loaded via $http" typeahead="address for address in getLocation($viewValue)" typeahead-loading="loadingLocations" class="form-control">
        </div>        
      </div>
      <!-- / typehead -->

      <!-- datepicker -->
      <div ng-controller="DatepickerDemoCtrl" class="m-b-lg">
        <h4>Datepicker</h4>
        <h5>Inline</h5>
        <div class="m-b">
          <datepicker ng-model="dt" min-date="minDate" show-weeks="true" class="datepicker"></datepicker>
        </div>
        <pre class="alert alert-info">Selected date is: <em>{{dt | date:'fullDate' }}</em></pre>    
        <div class="row">
          <div class="col-md-6">
            <label>Popup</label>
            <p class="input-group">
              <input type="text" class="form-control" datepicker-popup="{{format}}" ng-model="dt" is-open="opened" min-date="minDate" max-date="'2015-06-22'" datepicker-options="dateOptions" date-disabled="disabled(date, mode)" ng-required="true" close-text="Close" />
              <span class="input-group-btn">
                <button type="button" class="btn btn-default" ng-click="open($event)"><i class="glyphicon glyphicon-calendar"></i></button>
              </span>
            </p>
          </div>
          <div class="col-md-6">
            <label>Format:</label> <select class="form-control" ng-model="format" ng-options="f for f in formats"><option></option></select>
          </div>
        </div>
        <button type="button" class="btn btn-sm btn-info" ng-click="today()">Today</button>
        <button type="button" class="btn btn-sm btn-default" ng-click="dt = '2009-08-24'">2009-08-24</button>
        <button type="button" class="btn btn-sm btn-default" ng-click="clear()">Clear</button>
        <button type="button" class="btn btn-sm btn-default" ng-click="toggleMin()" tooltip="After today restriction">Min date</button>
      </div>
      <!-- / datepicker -->

      <!-- timepicker -->
      <div ng-controller="TimepickerDemoCtrl" class="m-b-lg">
        <h4>Timepicker</h4>
        <timepicker ng-model="mytime" ng-change="changed()" hour-step="hstep" minute-step="mstep" show-meridian="ismeridian"></timepicker>

        <pre class="alert alert-info">Time is: {{mytime | date:'shortTime' }}</pre>

        <div class="row m-b"> 
          <div class="col-xs-6">
              Hours step is:
            <select class="form-control" ng-model="hstep" ng-options="opt for opt in options.hstep"></select>
          </div>
          <div class="col-xs-6">
              Minutes step is:
            <select class="form-control" ng-model="mstep" ng-options="opt for opt in options.mstep"></select>
          </div>
        </div>
        <button class="btn btn-info" ng-click="toggleMode()">12H / 24H</button>
        <button class="btn btn-default" ng-click="update()">Set to 14:00</button>
        <button class="btn btn-default" ng-click="clear()">Clear</button>
      </div>
      <!-- / tiempicker -->

      <!-- dropdown-menu -->
      <div class="pos-rlt clearfix m-b-lg">
        <h4>Dropdown menu</h4>
        <div class="dropdown pull-left m-r">
          <ul class="dropdown-menu pos-stc inline" role="menu">
            <li><a tabindex="-1" href>Action</a></li>
            <li><a tabindex="-1" href>Another action</a></li>
            <li><a tabindex="-1" href>Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href>Separated link</a>
              <ul class="dropdown-menu" role="menu">
                <li><a tabindex="-1" href>Action</a></li>
                <li><a tabindex="-1" href>Another action</a></li>
                <li><a tabindex="-1" href>Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown dropup pull-left">
          <ul class="dropdown-menu pos-stc inline" role="menu">
            <li><a tabindex="-1" href>Action</a></li>
            <li><a tabindex="-1" href>Another action</a></li>
            <li><a tabindex="-1" href>Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href>Separated link</a>
              <ul class="dropdown-menu" role="menu">
                <li class="dropdown-submenu  pull-left">
                  <a tabindex="-1" href>Action</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a tabindex="-1" href>Action</a></li>
                    <li><a tabindex="-1" href>Another action</a></li>
                    <li><a tabindex="-1" href>Something else here</a></li>
                  </ul>
                </li>
                <li><a tabindex="-1" href>Another action</a></li>
                <li><a tabindex="-1" href>Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- / dropdown-menu -->
      <!-- breadcrumb -->
      <div>
        <h4>Breadcrumb</h4>
        <ul class="breadcrumb bg-white b-a">
          <li><a href><i class="fa fa-home"></i> Breadcrumb</a></li>
          <li><a href>Elements</a></li>
          <li class="active">Components</li>
        </ul>
      </div>
      <!-- / breadcrumb -->
      <!-- label and badge -->
      <div class="m-b-lg">
        <h4>Lable &amp; Badge</h4>
        <p>
          <span class="label bg-primary">Primary</span>
          <span class="label bg-success">Success</span>
          <span class="label bg-info">Info</span>
          <span class="label bg-dark">dark</span>
          <span class="label bg-warning">Warning</span>
          <span class="label bg-danger">Danger</span>
          <span class="label bg-light dk">Light</span>
        </p>
        <p class="m-b-none">          
          <span class="badge bg-primary">15</span>
          <span class="badge bg-success">20</span>
          <span class="badge bg-info">21</span>
          <span class="badge bg-dark">13</span>
          <span class="badge bg-warning">35</span>
          <span class="badge bg-danger">32</span>
          <span class="badge">9</span>
        </p>
      </div>
      <!-- / label and badge -->
    </div>
  </div>
</div>
   <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Buttons</h1>
</div>
<div class="wrapper-md">
  <div class="row">
    <div class="col-md-6">
      <h4 class="m-t-xs">Button options</h4>
      <div>
        <button class="btn m-b-xs w-xs btn-default">Default</button>
        <button class="btn m-b-xs w-xs btn-primary">Primary</button>
        <button class="btn m-b-xs w-xs btn-success">Success</button>
        <button class="btn m-b-xs w-xs btn-info">Info</button>
        <button class="btn m-b-xs w-xs btn-warning">Warning</button>
        <button class="btn m-b-xs w-xs btn-danger">Danger</button>
        <button class="btn m-b-xs w-xs btn-dark">Dark</button>
        <button class="btn m-b-xs w-xs btn-default disabled">Disabled</button>
      </div>

      <h4 class="m-t-lg">
        Button addon
      </h4>
      <p>
        <button class="btn m-b-xs btn-sm btn-primary btn-addon"><i class="fa fa-plus"></i>Primary</button>
        <button class="btn m-b-xs btn-sm btn-info btn-addon"><i class="fa fa-trash-o"></i>Info</button>
        <button class="btn m-b-xs btn-sm btn-success btn-addon"><i class="fa fa-minus pull-right"></i>Success</button>
        <button class="btn m-b-xs btn-sm btn-warning btn-addon"><i class="fa fa-circle"></i>Warning</button>
        <button class="btn m-b-xs btn-sm btn-default btn-addon"><i class="fa fa-plus"></i>Default</button>
      </p>
      <p>
        <button class="btn btn-default btn-addon"><i class="fa fa-music"></i>Default</button>
        <button class="btn btn-info btn-addon"><i class="fa fa-play"></i>Info</button>
      </p>
      
      <h4 class="m-t">Button size</h4>
      <p>
        <button class="btn btn-default btn-lg">Large</button>
        <button class="btn btn-primary btn-addon btn-lg"><i class="fa fa-plus"></i>Addon</button>
      </p>
      <p>
        <button class="btn btn-default">Default button</button>
      </p>
      <p>
        <button class="btn btn-default btn-sm">Small button</button>
      </p>
      <p>
        <button class="btn btn-default btn-xs">Extra small button</button>
      </p>
 
      <h4 class="m-t-lg">Button dropdowns</h4>
      <p class="text-muted">Single button dropdowns</p>
      <div class="m-b-sm">
        <div class="btn-group dropdown" dropdown>
          <button class="btn btn-default" dropdown-toggle>Action <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href>Action</a></li>
            <li><a href>Another action</a></li>
            <li><a href>Something else here</a></li>
            <li class="divider"></li>
            <li><a href>Separated link</a></li>
          </ul>
        </div>
        <div class="btn-group dropdown" dropdown>
          <button class="btn btn-success" dropdown-toggle>Action <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href>Action</a></li>
            <li><a href>Another action</a></li>
            <li><a href>Something else here</a></li>
            <li class="divider"></li>
            <li><a href>Separated link</a></li>
          </ul>
        </div>
      </div>
      <div class="m-b-sm">
        <div class="btn-group dropdown" dropdown>
          <button class="btn btn-default btn-sm" dropdown-toggle>Action <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href>Action</a></li>
            <li><a href>Another action</a></li>
            <li><a href>Something else here</a></li>
            <li class="divider"></li>
            <li><a href>Separated link</a></li>
          </ul>
        </div>
      </div>
      <div class="m-b-sm">
        <div class="btn-group dropdown" dropdown>
          <button class="btn btn-default btn-xs" dropdown-toggle>Action <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href>Action</a></li>
            <li><a href>Another action</a></li>
            <li><a href>Something else here</a></li>
            <li class="divider"></li>
            <li><a href>Separated link</a></li>
          </ul>
        </div>
      </div>
      <p class="text-muted">Split button dropdowns & variation </p>
      <div class="m-b-sm">
        <div class="btn-group dropdown" dropdown>
          <button class="btn btn-default">Action</button>
          <button class="btn btn-default" dropdown-toggle><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href>Action</a></li>
            <li><a href>Another action</a></li>
            <li><a href>Something else here</a></li>
            <li class="divider"></li>
            <li><a href>Separated link</a></li>
          </ul>
        </div>
        <div class="btn-group dropdown dropup" dropdown>
          <button class="btn btn-default">Action</button>
          <button class="btn btn-default" dropdown-toggle><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href>Action</a></li>
            <li><a href>Another action</a></li>
            <li><a href>Something else here</a></li>
            <li class="divider"></li>
            <li><a href>Separated link</a></li>
          </ul>
        </div>
      </div>

      <h4 class="m-t-lg">Button with icon</h4>
      <p>
        <button class="btn btn-default"><i class="fa fa-html5"></i> Html5</button>
        <button class="btn btn-info"><i class="fa fa-css3"></i> CSS3</button>
      </p>            
      <p>
        <button class="btn btn-default btn-lg btn-block"><i class="fa fa-bars pull-right"></i> Block button with icon</button>
      </p>
      <p>
        <button class="btn btn-default btn-block"><i class="fa fa-bars pull-left"></i> Block button with icon</button>
      </p>      
      <h4 class="m-t-lg">
        Button icon
      </h4>
      <p>
        <button class="btn btn-sm btn-icon btn-info"><i class="fa fa-twitter"></i></button>
        <button class="btn btn-sm btn-icon btn-danger"><i class="fa fa-google-plus"></i></button>
      </p>
      <h4 class="m-t-lg">
        Button icon rounded
      </h4>
      <p>
        <button class="btn btn-rounded btn-sm btn-icon btn-default"><i class="fa fa-twitter"></i></button>
        <button class="btn btn-rounded btn btn-icon btn-default"><i class="fa fa-facebook"></i></button>
        <button class="btn btn-rounded btn-lg btn-icon btn-default"><i class="fa fa-google-plus"></i></button>
      </p>       
    </div>
    <div class="col-md-6">
      <h4 class="m-t-xs">Rounded button</h4>
      <div>
        <button class="btn m-b-xs w-xs btn-default btn-rounded">Default</button>
        <button class="btn m-b-xs w-xs btn-primary btn-rounded">Primary</button>
        <button class="btn m-b-xs w-xs btn-success btn-rounded">Success</button>
        <button class="btn m-b-xs w-xs btn-info btn-rounded">Info</button>
        <button class="btn m-b-xs w-xs btn-warning btn-rounded">Warning</button>
        <button class="btn m-b-xs w-xs btn-danger btn-rounded">Danger</button>
        <button class="btn m-b-xs w-xs btn-dark btn-rounded">Dark</button>
        <button class="btn m-b-xs w-xs btn-default btn-rounded disabled">Disabled</button>
      </div>

      <h4 class="m-t-lg">Button groups</h4>
      <div class="m-b-sm">
        <div class="btn-group">
          <button type="button" class="btn btn-default">Left</button>
          <button type="button" class="btn btn-default">Middle</button>
          <button type="button" class="btn btn-default">Right</button>
        </div>              
      </div>
      <p class="text-muted">Vertical button groups</p>
      <div class="btn-group-vertical m-b-sm">
        <button type="button" class="btn btn-default">Top</button>
        <button type="button" class="btn btn-default">Middle</button>
        <button type="button" class="btn btn-default">Bottom</button>
      </div>
      <p class="text-muted">Nested button groups</p>
      <div class="btn-group m-b-sm">
        <button type="button" class="btn btn-default">1</button>
        <button type="button" class="btn btn-success">2</button>
        <button type="button" class="btn btn-default">3</button>
        <div class="btn-group dropdown" dropdown>
          <button type="button" class="btn btn-default" dropdown-toggle>
            Dropdown
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href>Dropdown link</a></li>
            <li><a href>Dropdown link</a></li>
            <li><a href>Dropdown link</a></li>
          </ul>
        </div>
      </div>
      <p class="text-muted">Justified button groups</p>
      <div class="m-b-sm">
        <div class="btn-group btn-group-justified">
          <a href class="btn btn-primary">Left</a>
          <a href class="btn btn-info">Middle</a>
          <a href class="btn btn-success">Right</a>
        </div>
      </div>
      <p class="text-muted">Multiple button groups</p>
      <div class="btn-toolbar">
        <div class="btn-group">
          <button type="button" class="btn btn-default">1</button>
          <button type="button" class="btn btn-default active">2</button>
          <button type="button" class="btn btn-default">3</button>
          <button type="button" class="btn btn-default">4</button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-default">5</button>
          <button type="button" class="btn btn-default">6</button>
          <button type="button" class="btn btn-default">7</button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-default">8</button>
        </div>
      </div>
    
      <h4 class="m-t-lg">Button components</h4>
      <p class="text-muted">
        <span>There are a few easy ways to quickly get started with Bootstrap, each one ...</span>
        <span class="text-muted hide" id="moreless"> appealing to a different skill level and use case. Read through to see what suits your particular needs.</span>
      </p>
      <p>
        <button class="btn btn-sm btn-default" ui-toggle-class="show" target="#moreless">
          <i class="fa fa-plus text"></i>
          <span class="text">More</span>
          <i class="fa fa-minus text-active"></i>
          <span class="text-active">Less</span>
        </button>
      </p>
      <p>
        <button class="btn btn-default" ui-toggle-class="btn-success">
          <i class="fa fa-cloud-upload text"></i>
          <span class="text">Upload</span>
          <i class="fa fa-check text-active"></i>
          <span class="text-active">Success</span>
        </button>
        <a class="btn btn-default" ui-toggle-class="button">
          <i class="fa fa-heart-o text"></i>
          <i class="fa fa-heart text-active text-danger"></i>
        </a>
        <a class="btn btn-default" ui-toggle-class="button">
          <span class="text">
            <i class="fa fa-thumbs-up text-success"></i> 25
          </span>
          <span class="text-active">
            <i class="fa fa-thumbs-down text-danger"></i> 10
          </span>
        </a>
        <button class="btn btn-success" ui-toggle-class="show inline" target="#spin">
          <span class="text">Save</span>
          <span class="text-active">Saving...</span>
        </button> 
        <i class="fa fa-spin fa-spinner hide" id="spin"></i>
      </p>
      <div class="m-b-sm">
        <div class="btn-group" ng-init="radioModel = 'Male'">
          <label class="btn btn-sm btn-info"    ng-model="radioModel" btn-radio="'Male'"><i class="fa fa-check text-active"></i> Male</label>
          <label class="btn btn-sm btn-success" ng-model="radioModel" btn-radio="'Female'"><i class="fa fa-check text-active"></i> Female</label>
          <label class="btn btn-sm btn-primary" ng-model="radioModel" btn-radio="'N/A'"><i class="fa fa-check text-active"></i> N/A</label>
        </div>
      </div>

      <div class="m-b-sm">
        <div class="btn-group" ng-init="checkModel = {option1: true, option2: false}">
          <label class="btn btn-sm btn-default" ng-model="checkModel.option1" btn-checkbox>Option1</label>
          <label class="btn btn-sm btn-default" ng-model="checkModel.option3" btn-checkbox>Option2</label>
        </div>                
      </div>

      <h4 class="m-t-lg">
        <button class="pull-right text-sm btn btn-xs btn-default" ui-toggle-class="btn-rounded" target="#social-buttons button">Toggle</button>
        Social buttons
      </h4>
      <p id="social-buttons">
        <button class="btn btn-rounded btn-sm btn-info"><i class="fa fa-fw fa-twitter"></i> Twitter</button>
        <button class="btn btn-rounded btn-sm btn-danger"><i class="fa fa-fw fa-google-plus"></i> Google+</button>
      </p>
    </div>
  </div>
</div>
   <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Beauty Your Data</h1>
</div>
<div class="wrapper-md">
  <div ng-controller="FlotChartDemoCtrl">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading font-bold">Spline</div>
          <div class="panel-body">
            <div ui-jq="plot" ui-options="
              [
                { data: {{d}}, points: { show: true, radius: 6}, splines: { show: true, tension: 0.45, lineWidth: 5, fill: 0 } }
              ], 
              {
                colors: ['{{app.color.info}}'],
                series: { shadowSize: 3 },
                xaxis:{ 
                  font: { color: '#ccc' },
                  position: 'bottom',
                  ticks: [
                    [ 1, 'Jan' ], [ 2, 'Feb' ], [ 3, 'Mar' ], [ 4, 'Apr' ], [ 5, 'May' ], [ 6, 'Jun' ], [ 7, 'Jul' ], [ 8, 'Aug' ], [ 9, 'Sep' ], [ 10, 'Oct' ], [ 11, 'Nov' ], [ 12, 'Dec' ]
                  ]
                },
                yaxis:{ font: { color: '#ccc' } },
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                tooltip: true,
                tooltipOpts: { content: '%x.1 is %y.4',  defaultTheme: false, shifts: { x: 0, y: 20 } }
              }
            " style="height:240px" >
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading font-bold">Multiple</div>
          <div class="panel-body">
            <div ui-jq="plot" ui-options="
              [
                { data: {{d0_1}}, label: 'Unique Visits', points: { show: true } }, 
                { data: {{d0_2}}, label: 'Page Views', bars: { show: true, barWidth: 0.6, fillColor: { colors: [{ opacity: 0.2 }, { opacity: 0.4}] } } }
              ],
              {                
                colors: [ '{{app.color.info}}','{{app.color.success}}' ],
                series: { shadowSize: 2 },
                xaxis:{ font: { color: '#ccc' } },
                yaxis:{ font: { color: '#ccc' } },
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                tooltip: true,
                tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 0, y: 20 } }
              }
            " style="height:240px"></div>
          </div>                  
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading font-bold">Order bar</div>
          <div class="panel-body">
            <div ui-jq="plot" ui-options="
              [ 
                { label: 'A', data: {{d1_1}} },
                { label: 'B', data: {{d1_2}} },
                { label: 'C', data: {{d1_3}} }
              ],
              {
                bars: { show: true, fill: true, lineWidth: 1, order: 1, fillColor: { colors: [{ opacity: 0.5 }, { opacity: 0.9}] } },
                colors: ['{{app.color.info}}', '{{app.color.success}}', '{{app.color.primary}}'],
                series: { shadowSize: 1 },
                xaxis:{ font: { color: '#ccc' } },
                yaxis:{ font: { color: '#ccc' } },
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },                
                tooltip: true
              }
            " style="height:240px"></div>
          </div>                  
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading font-bold">Bar</div>
          <div class="panel-body">
            <div ui-jq="plot" ui-options="
              [
                { data: {{d2}}, label: 'Pressure', color: '{{app.color.info}}' }
              ],
              {
                bars: { show: true, barWidth: 0.6, fillColor: { colors: [{ opacity: 0.5 }, { opacity: 0.9}] }  },
                xaxis: { font: { color: '#ccc' } },
                yaxis: { font: { color: '#ccc' }, min: -2, max: 2 },
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                series: { shadowSize: 1 },
                tooltip: true
              }
            " style="height:240px"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading font-bold">Compose</div>
          <div class="panel-body">
            <div ui-jq="plot" ui-options="
              [
                { data: {{d0_1}}, label: 'A', points: { show: true }, lines: { show: true, fill: true, fillColor: { colors: [{ opacity: 0.1 }, { opacity: 0.1}] } } }, 
                { data: {{d0_2}}, label: 'B', points: { show: true, radius: 4 } }
              ],
              {
                colors: [ '{{app.color.info}}','{{app.color.warning}}' ],
                series: { shadowSize: 2 },
                xaxis:{ font: { color: '#ccc' } },
                yaxis:{ font: { color: '#ccc' } },
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                tooltip: true,
                tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 0, y: 20 } }
              }
            " style="height:240px"></div>
          </div>                  
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading font-bold">Donut Pie</div>
          <div class="panel-body">
            <div ui-jq="plot" ui-options="
              {{d3}},
              {
                series: { pie: { show: true, innerRadius: 0.5, stroke: { width: 0 }, label: { show: true, threshold: 0.05 } } },
                colors: ['{{app.color.primary}}','{{app.color.info}}','{{app.color.success}}','{{app.color.warning}}','{{app.color.danger}}'],
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },   
                tooltip: true,
                tooltipOpts: { content: '%s: %p.0%' }
              }
            " style="height:240px"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">Pie</div>
        <div class="panel-body text-center">              
          <div ng-init="data1=[60,40]" ui-jq="sparkline" ui-options="{{data1}}, {type:'pie', height:154, sliceColors:['{{app.color.info}}','#eaeeea']}" class="sparkline inline"></div>
          <div class="line pull-in"></div>
          <div class="text-xs">
            <i class="fa fa-circle text-info"></i> 60%
            <i class="fa fa-circle text-muted m-l"></i> 40%
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">Data graph</div>
        <div class="bg-light dker wrapper m-t-n-xxs">
          <span class="pull-right">Friday</span>
          <span class="h4">$540</span>
          <div class="text-center m-b-n m-t-sm">
              <div ng-init="data2=[50.32,45.23,47.56,36.25,53.85,40.15,41.25,50.15,57.14,36.15,97.26,50.15,45.32,47.19,37.75,25.15,56.34,50.35,47.25,53.15]" ui-jq="sparkline" ui-options="{{data2}}, {type:'line', height:65, width: '100%', lineWidth:2, valueSpots:{'0:':'#fff'}, lineColor:'#fff', spotColor:'#fff', fillColor:'', highlightLineColor:'#fff', spotRadius:3}"></div>

              <div ng-init="data3=[ 10,9,11,10,11,10,12,10,9,10,11,9,8 ]" ui-jq="sparkline" ui-options="{{data3}}, {type:'bar', height:45, barWidth:6, barSpacing:6, barColor:'{{app.color.primary}}'}" class="sparkline inline">loading...</div>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-4">
              <small class="text-muted block">Market</small>
              <span>$1500.00</span>
            </div>
            <div class="col-xs-4">
              <small class="text-muted block">Referal</small>
              <span>$600.00</span>
            </div>
            <div class="col-xs-4">
              <small class="text-muted block">Affiliate</small>
              <span>$400.00</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">Stacked</div>
        <div class="panel-body">
          <div class="m-b-md">
            <p class="h3 font-thin">Investings</p>
            Avarage investing in last year.
          </div>
          <div class="row m-b">
            <div class="col-xs-6">
              <div ng-init="data4 = [ [2, 8], [4, 6], [6, 4], [8, 2], [10, 0], [8, 2], [6, 4], [4, 6], [2,8] ]" ui-jq="sparkline" ui-options="{{data4}}, {type:'bar', height:112, barWidth:6, barSpacing:10, stackedBarColor:['{{app.color.success}}', '#d7e5e8']}" class="sparkline inline"></div>
            </div>
            <div class="col-xs-6">
              Revenue
              <div class="h3 text-black m-b">4500,00</div>
              Costs
              <div class="h3 text-success">3450,00</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">
          Easypiechart
        </div>
        <div class="panel-body text-center">
          <h4>62.5<small> hrs</small></h4>
          <small class="text-muted block">Updated at 2 minutes ago</small>
          <div class="inline">
            <div ui-jq="easyPieChart" ui-options="{
                      percent: 75,
                      lineWidth: 10,
                      trackColor: '{{app.color.light}}',
                      barColor: '{{app.color.warning}}',
                      scaleColor: '{{app.color.light}}',
                      size: 188,
                      lineCap: 'butt'
                    }">
              <div>
                <span class="h2 m-l-sm step">75</span>%
                <div class="text text-sm">new</div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-footer"><small>% of avarage rate of the Conversion</small></div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">
          Animate
        </div>
        <div class="panel-body text-center">
          <h4><small>last </small>12<small> hrs</small></h4>
          <small class="text-muted block">yesterday: 20%</small>
          <div class="inline">
            <div ui-jq="easyPieChart"  ui-options="{
                      percent: 25,
                      lineWidth: 10,
                      trackColor: '{{app.color.light}}',
                      barColor: '{{app.color.success}}',
                      scaleColor: '{{app.color.light}}',
                      size: 188,
                      lineCap: 'butt',
                      animate: 1000
                    }">
              <div>
                <span class="h2 m-l-sm step">25</span>%
                <div class="text text-sm">today</div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-footer"><small>% of change</small></div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">
          Rotate
        </div>
        <div class="panel-body text-center">
          <h4>3,450</h4>
          <small class="text-muted block">Worldwide visitors</small>
          <div class="inline m-t m-b">
            <div ui-jq="easyPieChart" ui-options="{
                      percent: 50,
                      lineWidth: 10,
                      trackColor: '{{app.color.light}}',
                      barColor: '{{app.color.info}}',
                      scaleColor: false,
                      size: 158,
                      rotate: 90,
                      lineCap: 'butt'
                    }">
              <div>
                <span class="h2 m-l-sm step">50</span>%
                <div class="text text-sm">new visits</div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-footer"><small>% of avarage rate of the visits</small></div>
      </div>
    </div>
  </div>
</div>
   <hr>
   <div class="wrapper-md">
  <div class="panel b-a" ng-controller="MapCtrl">
    <div class="panel-heading">Google Map</div>
    <div id="map_canvas" style="min-height:400px" ui-map="myMap"
         ui-event="{'map-click': 'addMarker($event, $params)', 'map-zoom_changed': 'setZoomMessage(myMap.getZoom())' }"
         ui-options="mapOptions">
    </div>
    <div class="panel-body">
        <h4 class="m-t-none">Click to add a marker!</h4>
        <p>{{zoomMessage}}</p>
        <ul class="list-unstyled list-inline">
          <li ng-repeat="marker in myMarkers">
            <a class="btn btn-default m-b-sm" ng-click="myMap.panTo(marker.getPosition())">
              Pan to Marker {<?php echo ($index); ?>}
            </a>
          </li>
        </ul>

        <!-- this is the confusing part. we have to point the map marker directive
            at an existing google.maps.Marker object, so it can hook up events -->
        <div ng-repeat="marker in myMarkers" ui-map-marker="myMarkers[$index]"
             ui-event="{'map-click': 'openMarkerInfo(marker)'}">
        </div>

        <div ui-map-info-window="myInfoWindow">
          <div class="m-b-sm">Marker</div>
          <div class="m-b-sm">
            <div class="pull-left m-t-xs">Lat: </div>
            <input ng-model="currentMarkerLat" class="form-control input-sm w-sm m-l-lg">
          </div>
          <div class="m-b-sm">
            <div class="pull-left m-t-xs">Lng: </div>
            <input ng-model="currentMarkerLng" class="form-control input-sm w-sm m-l-lg">
          </div>
          <a class="btn btn-default btn-sm m-l-lg m-b-sm" ng-click="setMarkerPosition(currentMarker, currentMarkerLat, currentMarkerLng)">Set Position</a>
        </div>
    </div>
  </div>
</div>
   <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Grid System</h1>
</div>
<div class="wrapper-md">
  <div class="row">
    <div class="col-lg-12">
      <p>Base on Bootstrap grid system, you can get the columns as you want. 12 / (cols) = col-lg-(each-col-width-taken), like 12/3 = col-lg-4, 12/5 = col-lg-2.4 <span class="text-muted">(replace the '.' with '-')</span></p>
    </div>
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-12</div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-6</div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-6</div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-4</div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-4</div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-4</div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-3</div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-3</div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-3</div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-3</div>
      </div>
    </div>
    <div class="col-lg-2-4">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-2-4</div>
      </div>
    </div>
    <div class="col-lg-2-4">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-2-4</div>
      </div>
    </div>
    <div class="col-lg-2-4">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-2-4</div>
      </div>
    </div>
    <div class="col-lg-2-4">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-2-4</div>
      </div>
    </div>
    <div class="col-lg-2-4">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-2-4</div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-2</div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-2</div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-2</div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-2</div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-2</div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-2</div>
      </div>
    </div>
    <div class="col-lg-12">
      <p>Mobile, tablet, and desktop</p>
    </div>
    <div class="col-lg-4">
      <div class="row">
        <div class="col-xs-6">
          <div class="panel panel-default">
            <div class="panel-body">col-xs-6</div>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="panel panel-default">
            <div class="panel-body">col-xs-6</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-8</div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="row">
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-body">col-sm-6</div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-body">col-sm-6</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-6</div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-body">col-md-6</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-body">col-md-6</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-body">col-lg-4</div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-body">col-sm-6</div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-body">col-sm-6</div>
      </div>
    </div>
  </div>
</div>

   <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Icons</h1>
</div>
<div class="wrapper-md">
  <h3 class="font-thin m-t-xs">Simple Line Icons</h3>
  <div class="row list-icon">
      <div class="col-md-3 col-sm-4">
          <i class="icon-user"></i>
          icon-user
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-user-female"></i>
          icon-user-female
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-users"></i>
          icon-users
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-user-follow"></i>
          icon-user-follow
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-user-following"></i>
          icon-user-following
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-user-unfollow"></i>
          icon-user-unfollow
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-trophy"></i>
          icon-trophy
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-speedometer"></i>
          icon-speedometer
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-social-youtube"></i>
          icon-social-youtube
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-social-twitter"></i>
          icon-social-twitter
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-social-tumblr"></i>
          icon-social-tumblr
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-social-facebook"></i>
          icon-social-facebook
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-social-dropbox"></i>
          icon-social-dropbox
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-social-dribbble"></i>
          icon-social-dribbble
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-shield"></i>
          icon-shield
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-screen-tablet"></i>
          icon-screen-tablet
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-screen-smartphone"></i>
          icon-screen-smartphone
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-screen-desktop"></i>
          icon-screen-desktop
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-plane"></i>
          icon-plane
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-notebook"></i>
          icon-notebook
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-moustache"></i>
          icon-moustache
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-mouse"></i>
          icon-mouse
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-magnet"></i>
          icon-magnet
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-magic-wand"></i>
          icon-magic-wand
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-hourglass"></i>
          icon-hourglass
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-graduation"></i>
          icon-graduation
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-ghost"></i>
          icon-ghost
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-game-controller"></i>
          icon-game-controller
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-fire"></i>
          icon-fire
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-eyeglasses"></i>
          icon-eyeglasses
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-envelope-open"></i>
          icon-envelope-open
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-envelope-letter"></i>
          icon-envelope-letter
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-energy"></i>
          icon-energy
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-emoticon-smile"></i>
          icon-emoticon-smile
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-disc"></i>
          icon-disc
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-cursor-move"></i>
          icon-cursor-move
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-crop"></i>
          icon-crop
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-credit-card"></i>
          icon-credit-card
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-chemistry"></i>
          icon-chemistry
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-bell"></i>
          icon-bell
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-badge"></i>
          icon-badge
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-anchor"></i>
          icon-anchor
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-action-redo"></i>
          icon-action-redo
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-action-undo"></i>
          icon-action-undo
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-bag"></i>
          icon-bag
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-basket"></i>
          icon-basket
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-basket-loaded"></i>
          icon-basket-loaded
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-book-open"></i>
          icon-book-open
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-briefcase"></i>
          icon-briefcase
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-bubbles"></i>
          icon-bubbles
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-calculator"></i>
          icon-calculator
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-call-end"></i>
          icon-call-end
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-call-in"></i>
          icon-call-in
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-call-out"></i>
          icon-call-out
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-compass"></i>
          icon-compass
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-cup"></i>
          icon-cup
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-diamond"></i>
          icon-diamond
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-direction"></i>
          icon-direction
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-directions"></i>
          icon-directions
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-docs"></i>
          icon-docs
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-drawer"></i>
          icon-drawer
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-drop"></i>
          icon-drop
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-earphones"></i>
          icon-earphones
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-earphones-alt"></i>
          icon-earphones-alt
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-feed"></i>
          icon-feed
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-film"></i>
          icon-film
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-folder-alt"></i>
          icon-folder-alt
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-frame"></i>
          icon-frame
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-globe"></i>
          icon-globe
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-globe-alt"></i>
          icon-globe-alt
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-handbag"></i>
          icon-handbag
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-layers"></i>
          icon-layers
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-map"></i>
          icon-map
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-picture"></i>
          icon-picture
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-pin"></i>
          icon-pin
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-playlist"></i>
          icon-playlist
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-present"></i>
          icon-present
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-printer"></i>
          icon-printer
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-puzzle"></i>
          icon-puzzle
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-speech"></i>
          icon-speech
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-vector"></i>
          icon-vector
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-wallet"></i>
          icon-wallet
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-arrow-down"></i>
          icon-arrow-down
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-arrow-left"></i>
          icon-arrow-left
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-arrow-right"></i>
          icon-arrow-right
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-arrow-up"></i>
          icon-arrow-up
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-bar-chart"></i>
          icon-bar-chart
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-bulb"></i>
          icon-bulb
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-calendar"></i>
          icon-calendar
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-control-end"></i>
          icon-control-end
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-control-forward"></i>
          icon-control-forward
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-control-pause"></i>
          icon-control-pause
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-control-play"></i>
          icon-control-play
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-control-rewind"></i>
          icon-control-rewind
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-control-start"></i>
          icon-control-start
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-cursor"></i>
          icon-cursor
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-dislike"></i>
          icon-dislike
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-equalizer"></i>
          icon-equalizer
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-graph"></i>
          icon-graph
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-grid"></i>
          icon-grid
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-home"></i>
          icon-home
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-like"></i>
          icon-like
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-list"></i>
          icon-list
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-login"></i>
          icon-login
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-logout"></i>
          icon-logout
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-loop"></i>
          icon-loop
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-microphone"></i>
          icon-microphone
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-music-tone"></i>
          icon-music-tone
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-music-tone-alt"></i>
          icon-music-tone-alt
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-note"></i>
          icon-note
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-pencil"></i>
          icon-pencil
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-pie-chart"></i>
          icon-pie-chart
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-question"></i>
          icon-question
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-rocket"></i>
          icon-rocket
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-share"></i>
          icon-share
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-share-alt"></i>
          icon-share-alt
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-shuffle"></i>
          icon-shuffle
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-size-actual"></i>
          icon-size-actual
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-size-fullscreen"></i>
          icon-size-fullscreen
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-support"></i>
          icon-support
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-tag"></i>
          icon-tag
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-trash"></i>
          icon-trash
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-umbrella"></i>
          icon-umbrella
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-wrench"></i>
          icon-wrench
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-ban"></i>
          icon-ban
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-bubble"></i>
          icon-bubble
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-camcorder"></i>
          icon-camcorder
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-camera"></i>
          icon-camera
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-check"></i>
          icon-check
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-clock"></i>
          icon-clock
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-close"></i>
          icon-close
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-cloud-download"></i>
          icon-cloud-download
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-cloud-upload"></i>
          icon-cloud-upload
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-doc"></i>
          icon-doc
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-envelope"></i>
          icon-envelope
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-eye"></i>
          icon-eye
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-flag"></i>
          icon-flag
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-folder"></i>
          icon-folder
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-heart"></i>
          icon-heart
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-info"></i>
          icon-info
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-key"></i>
          icon-key
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-link"></i>
          icon-link
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-lock"></i>
          icon-lock
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-lock-open"></i>
          icon-lock-open
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-magnifier"></i>
          icon-magnifier
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-magnifier-add"></i>
          icon-magnifier-add
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-magnifier-remove"></i>
          icon-magnifier-remove
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-paper-clip"></i>
          icon-paper-clip
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-paper-plane"></i>
          icon-paper-plane
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-plus"></i>
          icon-plus
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-pointer"></i>
          icon-pointer
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-power"></i>
          icon-power
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-refresh"></i>
          icon-refresh
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-reload"></i>
          icon-reload
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-settings"></i>
          icon-settings
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-star"></i>
          icon-star
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-symbol-female"></i>
          icon-symbol-female
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-symbol-male"></i>
          icon-symbol-male
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-target"></i>
          icon-target
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-volume-1"></i>
          icon-volume-1
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-volume-2"></i>
          icon-volume-2
      </div>
      <div class="col-md-3 col-sm-4">
          <i class="icon-volume-off"></i>
          icon-volume-off
      </div>
  </div>
  <h3 class="font-thin">FontAwesome! <span class="label label-lg bg-info">4.2</span></h3>
  <p>Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop shadow, and anything that can be done with the power of CSS.</p>
  <div>
    <section id="web-application">
      <h4 class="page-header">Web Application Icons</h4>

      <div class="row list-icon">
        

        
          <div class="col-md-3 col-sm-4"><i class="fa fa-adjust"></i> fa-adjust</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-anchor"></i> fa-anchor</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-archive"></i> fa-archive</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrows"></i> fa-arrows</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-asterisk"></i> fa-asterisk</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-automobile"></i> fa-automobile <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-ban"></i> fa-ban</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bank"></i> fa-bank <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-barcode"></i> fa-barcode</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bars"></i> fa-bars</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-beer"></i> fa-beer</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bell"></i> fa-bell</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bell-o"></i> fa-bell-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bolt"></i> fa-bolt</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bomb"></i> fa-bomb</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-book"></i> fa-book</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bookmark"></i> fa-bookmark</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bookmark-o"></i> fa-bookmark-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-briefcase"></i> fa-briefcase</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bug"></i> fa-bug</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-building"></i> fa-building</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-building-o"></i> fa-building-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bullhorn"></i> fa-bullhorn</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bullseye"></i> fa-bullseye</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-cab"></i> fa-cab <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-calendar"></i> fa-calendar</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-calendar-o"></i> fa-calendar-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-camera"></i> fa-camera</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-camera-retro"></i> fa-camera-retro</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-car"></i> fa-car</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-certificate"></i> fa-certificate</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-check"></i> fa-check</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-check-circle"></i> fa-check-circle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-check-circle-o"></i> fa-check-circle-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-check-square"></i> fa-check-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-child"></i> fa-child</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-circle"></i> fa-circle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> fa-circle-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-circle-thin"></i> fa-circle-thin</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-clock-o"></i> fa-clock-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-cloud"></i> fa-cloud</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-cloud-download"></i> fa-cloud-download</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-cloud-upload"></i> fa-cloud-upload</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-code"></i> fa-code</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-code-fork"></i> fa-code-fork</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-coffee"></i> fa-coffee</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-cog"></i> fa-cog</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-cogs"></i> fa-cogs</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-comment"></i> fa-comment</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-comment-o"></i> fa-comment-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-comments"></i> fa-comments</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-comments-o"></i> fa-comments-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-compass"></i> fa-compass</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-credit-card"></i> fa-credit-card</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-crop"></i> fa-crop</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-crosshairs"></i> fa-crosshairs</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-cube"></i> fa-cube</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-cubes"></i> fa-cubes</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-cutlery"></i> fa-cutlery</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-database"></i> fa-database</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-desktop"></i> fa-desktop</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-download"></i> fa-download</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-ellipsis-h"></i> fa-ellipsis-h</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-ellipsis-v"></i> fa-ellipsis-v</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-envelope"></i> fa-envelope</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-envelope-o"></i> fa-envelope-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-envelope-square"></i> fa-envelope-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-eraser"></i> fa-eraser</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-exchange"></i> fa-exchange</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation"></i> fa-exclamation</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-external-link"></i> fa-external-link</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-external-link-square"></i> fa-external-link-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-eye"></i> fa-eye</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-eye-slash"></i> fa-eye-slash</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-fax"></i> fa-fax</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-female"></i> fa-female</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-fighter-jet"></i> fa-fighter-jet</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-code-o"></i> fa-file-code-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-image-o"></i> fa-file-image-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-movie-o"></i> fa-file-movie-o <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-photo-o"></i> fa-file-photo-o <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-picture-o"></i> fa-file-picture-o <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-sound-o"></i> fa-file-sound-o <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-video-o"></i> fa-file-video-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-word-o"></i> fa-file-word-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-zip-o"></i> fa-file-zip-o <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-film"></i> fa-film</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-filter"></i> fa-filter</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-fire"></i> fa-fire</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-flag"></i> fa-flag</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-flag-checkered"></i> fa-flag-checkered</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-flag-o"></i> fa-flag-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-flask"></i> fa-flask</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-folder"></i> fa-folder</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-folder-o"></i> fa-folder-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-folder-open"></i> fa-folder-open</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-folder-open-o"></i> fa-folder-open-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-frown-o"></i> fa-frown-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-gamepad"></i> fa-gamepad</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-gavel"></i> fa-gavel</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-gift"></i> fa-gift</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-glass"></i> fa-glass</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-globe"></i> fa-globe</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-graduation-cap"></i> fa-graduation-cap</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-group"></i> fa-group <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-hdd-o"></i> fa-hdd-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-headphones"></i> fa-headphones</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-heart"></i> fa-heart</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-heart-o"></i> fa-heart-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-history"></i> fa-history</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-home"></i> fa-home</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-image"></i> fa-image <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-inbox"></i> fa-inbox</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-info"></i> fa-info</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-info-circle"></i> fa-info-circle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-institution"></i> fa-institution <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-key"></i> fa-key</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-keyboard-o"></i> fa-keyboard-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-language"></i> fa-language</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-laptop"></i> fa-laptop</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-leaf"></i> fa-leaf</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-lemon-o"></i> fa-lemon-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-level-down"></i> fa-level-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-level-up"></i> fa-level-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-life-bouy"></i> fa-life-bouy <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-life-ring"></i> fa-life-ring</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-life-saver"></i> fa-life-saver <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-location-arrow"></i> fa-location-arrow</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-lock"></i> fa-lock</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-magic"></i> fa-magic</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-magnet"></i> fa-magnet</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-mail-reply-all"></i> fa-mail-reply-all <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-male"></i> fa-male</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-map-marker"></i> fa-map-marker</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-meh-o"></i> fa-meh-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-microphone"></i> fa-microphone</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-microphone-slash"></i> fa-microphone-slash</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-minus"></i> fa-minus</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-minus-circle"></i> fa-minus-circle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> fa-minus-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-mobile"></i> fa-mobile</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-money"></i> fa-money</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-moon-o"></i> fa-moon-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-mortar-board"></i> fa-mortar-board <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-music"></i> fa-music</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-navicon"></i> fa-navicon <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-paper-plane"></i> fa-paper-plane</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-paper-plane-o"></i> fa-paper-plane-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-paw"></i> fa-paw</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-pencil"></i> fa-pencil</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-pencil-square"></i> fa-pencil-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-pencil-square-o"></i> fa-pencil-square-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-phone"></i> fa-phone</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-phone-square"></i> fa-phone-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-photo"></i> fa-photo <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-picture-o"></i> fa-picture-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-plane"></i> fa-plane</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-plus"></i> fa-plus</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-plus-circle"></i> fa-plus-circle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-power-off"></i> fa-power-off</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-print"></i> fa-print</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-puzzle-piece"></i> fa-puzzle-piece</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-qrcode"></i> fa-qrcode</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-question"></i> fa-question</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-question-circle"></i> fa-question-circle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-quote-left"></i> fa-quote-left</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-quote-right"></i> fa-quote-right</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-random"></i> fa-random</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-recycle"></i> fa-recycle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-refresh"></i> fa-refresh</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-reorder"></i> fa-reorder <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-reply"></i> fa-reply</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-reply-all"></i> fa-reply-all</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-retweet"></i> fa-retweet</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-road"></i> fa-road</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-rocket"></i> fa-rocket</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-rss"></i> fa-rss</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-rss-square"></i> fa-rss-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-search"></i> fa-search</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-search-minus"></i> fa-search-minus</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-search-plus"></i> fa-search-plus</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-send"></i> fa-send <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-send-o"></i> fa-send-o <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-share"></i> fa-share</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-share-alt"></i> fa-share-alt</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-share-square"></i> fa-share-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-share-square-o"></i> fa-share-square-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-shield"></i> fa-shield</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-shopping-cart"></i> fa-shopping-cart</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sign-in"></i> fa-sign-in</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sign-out"></i> fa-sign-out</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-signal"></i> fa-signal</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sitemap"></i> fa-sitemap</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sliders"></i> fa-sliders</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-smile-o"></i> fa-smile-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sort"></i> fa-sort</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sort-asc"></i> fa-sort-asc</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sort-desc"></i> fa-sort-desc</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-space-shuttle"></i> fa-space-shuttle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-spinner"></i> fa-spinner</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-spoon"></i> fa-spoon</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-square"></i> fa-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-square-o"></i> fa-square-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-star"></i> fa-star</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-star-half"></i> fa-star-half</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-o"></i> fa-star-half-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-star-o"></i> fa-star-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-suitcase"></i> fa-suitcase</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-sun-o"></i> fa-sun-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-support"></i> fa-support <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-tablet"></i> fa-tablet</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-tachometer"></i> fa-tachometer</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-tag"></i> fa-tag</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-tags"></i> fa-tags</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-tasks"></i> fa-tasks</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-taxi"></i> fa-taxi</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-terminal"></i> fa-terminal</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-thumb-tack"></i> fa-thumb-tack</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-down"></i> fa-thumbs-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-up"></i> fa-thumbs-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-ticket"></i> fa-ticket</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-times"></i> fa-times</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-times-circle"></i> fa-times-circle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-times-circle-o"></i> fa-times-circle-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-tint"></i> fa-tint</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-trash-o"></i> fa-trash-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-tree"></i> fa-tree</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-trophy"></i> fa-trophy</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-truck"></i> fa-truck</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-umbrella"></i> fa-umbrella</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-university"></i> fa-university</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-unlock"></i> fa-unlock</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-unlock-alt"></i> fa-unlock-alt</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-upload"></i> fa-upload</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-user"></i> fa-user</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-users"></i> fa-users</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-video-camera"></i> fa-video-camera</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-volume-down"></i> fa-volume-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-volume-off"></i> fa-volume-off</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-volume-up"></i> fa-volume-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-wrench"></i> fa-wrench</div>
        
      </div>

    </section>

    <section id="file-type">
      <h4 class="page-header">File Type Icons</h4>

      <div class="row list-icon">
        

        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file"></i> fa-file</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-code-o"></i> fa-file-code-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-image-o"></i> fa-file-image-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-movie-o"></i> fa-file-movie-o <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-o"></i> fa-file-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-photo-o"></i> fa-file-photo-o <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-picture-o"></i> fa-file-picture-o <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-sound-o"></i> fa-file-sound-o <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-text"></i> fa-file-text</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-text-o"></i> fa-file-text-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-video-o"></i> fa-file-video-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-word-o"></i> fa-file-word-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-zip-o"></i> fa-file-zip-o <span class="text-muted">(alias)</span></div>
        
      </div>

    </section>

    <section id="spinner">
      <h4 class="page-header">Spinner Icons</h4>

      <div class="alert alert-success">
        These icons work great with the <code>fa-spin</code> class. Check out the
        <a href class="alert-link">spinning icons example</a>.
      </div>

      <div class="row list-icon">
        

        
          <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-cog"></i> fa-cog</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-refresh"></i> fa-refresh</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-spinner"></i> fa-spinner</div>
        
      </div>
    </section>

    <section id="form-control">
      <h4 class="page-header">Form Control Icons</h4>

      <div class="row list-icon">
        

        
          <div class="col-md-3 col-sm-4"><i class="fa fa-check-square"></i> fa-check-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-circle"></i> fa-circle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> fa-circle-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> fa-minus-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-square"></i> fa-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-square-o"></i> fa-square-o</div>
        
      </div>
    </section>

    <section id="currency">
      <h4 class="page-header">Currency Icons</h4>

      <div class="row list-icon">
        

        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-btc"></i> fa-btc</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-cny"></i> fa-cny <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-eur"></i> fa-eur</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-euro"></i> fa-euro <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-gbp"></i> fa-gbp</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-inr"></i> fa-inr</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-jpy"></i> fa-jpy</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-krw"></i> fa-krw</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-money"></i> fa-money</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-rub"></i> fa-rub</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-try"></i> fa-try</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-usd"></i> fa-usd</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-won"></i> fa-won <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-yen"></i> fa-yen <span class="text-muted">(alias)</span></div>
        
      </div>

    </section>

    <section id="text-editor">
      <h4 class="page-header">Text Editor Icons</h4>

      <div class="row list-icon">
        

        
          <div class="col-md-3 col-sm-4"><i class="fa fa-align-center"></i> fa-align-center</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-align-justify"></i> fa-align-justify</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-align-left"></i> fa-align-left</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-align-right"></i> fa-align-right</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bold"></i> fa-bold</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-chain"></i> fa-chain <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-chain-broken"></i> fa-chain-broken</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-clipboard"></i> fa-clipboard</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-columns"></i> fa-columns</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-copy"></i> fa-copy <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-cut"></i> fa-cut <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-eraser"></i> fa-eraser</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file"></i> fa-file</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-o"></i> fa-file-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-text"></i> fa-file-text</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-file-text-o"></i> fa-file-text-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-files-o"></i> fa-files-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-floppy-o"></i> fa-floppy-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-font"></i> fa-font</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-header"></i> fa-header</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-indent"></i> fa-indent</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-italic"></i> fa-italic</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-link"></i> fa-link</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-list"></i> fa-list</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-list-alt"></i> fa-list-alt</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-list-ol"></i> fa-list-ol</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-list-ul"></i> fa-list-ul</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-outdent"></i> fa-outdent</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-paperclip"></i> fa-paperclip</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-paragraph"></i> fa-paragraph</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-paste"></i> fa-paste <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-repeat"></i> fa-repeat</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-save"></i> fa-save <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-scissors"></i> fa-scissors</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-strikethrough"></i> fa-strikethrough</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-subscript"></i> fa-subscript</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-superscript"></i> fa-superscript</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-table"></i> fa-table</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-text-height"></i> fa-text-height</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-text-width"></i> fa-text-width</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-th"></i> fa-th</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-th-large"></i> fa-th-large</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-th-list"></i> fa-th-list</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-underline"></i> fa-underline</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-undo"></i> fa-undo</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span></div>
        
      </div>

    </section>

    <section id="directional">
      <h4 class="page-header">Directional Icons</h4>

      <div class="row list-icon">
        

        
          <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-down"></i> fa-angle-double-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-left"></i> fa-angle-double-left</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-right"></i> fa-angle-double-right</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-up"></i> fa-angle-double-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-angle-down"></i> fa-angle-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-angle-left"></i> fa-angle-left</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-angle-right"></i> fa-angle-right</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-angle-up"></i> fa-angle-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-down"></i> fa-arrow-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-left"></i> fa-arrow-left</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-right"></i> fa-arrow-right</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-up"></i> fa-arrow-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrows"></i> fa-arrows</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-caret-down"></i> fa-caret-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-caret-left"></i> fa-caret-left</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-caret-right"></i> fa-caret-right</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-caret-up"></i> fa-caret-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-down"></i> fa-chevron-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-left"></i> fa-chevron-left</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-right"></i> fa-chevron-right</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-up"></i> fa-chevron-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-down"></i> fa-hand-o-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-left"></i> fa-hand-o-left</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-right"></i> fa-hand-o-right</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-up"></i> fa-hand-o-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-down"></i> fa-long-arrow-down</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-left"></i> fa-long-arrow-left</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-right"></i> fa-long-arrow-right</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-up"></i> fa-long-arrow-up</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></div>
        
      </div>

    </section>

    <section id="video-player">
      <h4 class="page-header">Video Player Icons</h4>

      <div class="row list-icon">
        

        
          <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-backward"></i> fa-backward</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-compress"></i> fa-compress</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-eject"></i> fa-eject</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-expand"></i> fa-expand</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-fast-backward"></i> fa-fast-backward</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-fast-forward"></i> fa-fast-forward</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-forward"></i> fa-forward</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-pause"></i> fa-pause</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-play"></i> fa-play</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-play-circle"></i> fa-play-circle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-play-circle-o"></i> fa-play-circle-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-step-backward"></i> fa-step-backward</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-step-forward"></i> fa-step-forward</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-stop"></i> fa-stop</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>
        
      </div>

    </section>

    <section id="brand">
      <h4 class="page-header">Brand Icons</h4>

      <div class="alert alert-success">
        <ul class="margin-bottom-none padding-left-lg">
          <li>All brand icons are trademarks of their respective owners.</li>
          <li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
        </ul>

      </div>
        <div class="row list-icon">
        

        
          <div class="col-md-3 col-sm-4"><i class="fa fa-adn"></i> fa-adn</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-android"></i> fa-android</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-apple"></i> fa-apple</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-behance"></i> fa-behance</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-behance-square"></i> fa-behance-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bitbucket"></i> fa-bitbucket</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-btc"></i> fa-btc</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-codepen"></i> fa-codepen</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-css3"></i> fa-css3</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-delicious"></i> fa-delicious</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-deviantart"></i> fa-deviantart</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-digg"></i> fa-digg</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-dribbble"></i> fa-dribbble</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-dropbox"></i> fa-dropbox</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-drupal"></i> fa-drupal</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-empire"></i> fa-empire</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-facebook"></i> fa-facebook</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-facebook-square"></i> fa-facebook-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-flickr"></i> fa-flickr</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-foursquare"></i> fa-foursquare</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-ge"></i> fa-ge <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-git"></i> fa-git</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-git-square"></i> fa-git-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-github"></i> fa-github</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-github-alt"></i> fa-github-alt</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-github-square"></i> fa-github-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-gittip"></i> fa-gittip</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-google"></i> fa-google</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-google-plus"></i> fa-google-plus</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-google-plus-square"></i> fa-google-plus-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-hacker-news"></i> fa-hacker-news</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-html5"></i> fa-html5</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-instagram"></i> fa-instagram</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-joomla"></i> fa-joomla</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-jsfiddle"></i> fa-jsfiddle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-linkedin"></i> fa-linkedin</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-linkedin-square"></i> fa-linkedin-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-linux"></i> fa-linux</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-maxcdn"></i> fa-maxcdn</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-openid"></i> fa-openid</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-pagelines"></i> fa-pagelines</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-pied-piper"></i> fa-pied-piper</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-pied-piper-alt"></i> fa-pied-piper-alt</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-pied-piper-square"></i> fa-pied-piper-square <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-pinterest"></i> fa-pinterest</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-pinterest-square"></i> fa-pinterest-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-qq"></i> fa-qq</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-ra"></i> fa-ra <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-rebel"></i> fa-rebel</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-reddit"></i> fa-reddit</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-reddit-square"></i> fa-reddit-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-renren"></i> fa-renren</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-share-alt"></i> fa-share-alt</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-skype"></i> fa-skype</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-slack"></i> fa-slack</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-soundcloud"></i> fa-soundcloud</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-spotify"></i> fa-spotify</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-stack-overflow"></i> fa-stack-overflow</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-steam"></i> fa-steam</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-steam-square"></i> fa-steam-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-stumbleupon"></i> fa-stumbleupon</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-stumbleupon-circle"></i> fa-stumbleupon-circle</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-tencent-weibo"></i> fa-tencent-weibo</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-trello"></i> fa-trello</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-tumblr"></i> fa-tumblr</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-tumblr-square"></i> fa-tumblr-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-twitter"></i> fa-twitter</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-twitter-square"></i> fa-twitter-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-vine"></i> fa-vine</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-vk"></i> fa-vk</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-wechat"></i> fa-wechat <span class="text-muted">(alias)</span></div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-weibo"></i> fa-weibo</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-weixin"></i> fa-weixin</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-windows"></i> fa-windows</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-wordpress"></i> fa-wordpress</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-xing"></i> fa-xing</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-xing-square"></i> fa-xing-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-yahoo"></i> fa-yahoo</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-youtube"></i> fa-youtube</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-square"></i> fa-youtube-square</div>
        
        </div>
    </section>

    <section id="medical">
      <h4 class="page-header">Medical Icons</h4>

      <div class="row list-icon">
        

        
          <div class="col-md-3 col-sm-4"><i class="fa fa-ambulance"></i> fa-ambulance</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-h-square"></i> fa-h-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-hospital-o"></i> fa-hospital-o</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-medkit"></i> fa-medkit</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-stethoscope"></i> fa-stethoscope</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-user-md"></i> fa-user-md</div>
        
          <div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>
        
      </div>

    </section>
   </div>
  <h3 class="font-thin">Glyphicons</h3>
  <div class="row list-icon">      
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-asterisk"></i>
        <span>glyphicon-asterisk</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-plus"></i>
        <span>glyphicon-plus</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-euro"></i>
        <span>glyphicon-euro</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-minus"></i>
        <span>glyphicon-minus</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-cloud"></i>
        <span>glyphicon-cloud</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-envelope"></i>
        <span>glyphicon-envelope</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-pencil"></i>
        <span>glyphicon-pencil</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-glass"></i>
        <span>glyphicon-glass</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-music"></i>
        <span>glyphicon-music</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-search"></i>
        <span>glyphicon-search</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-heart"></i>
        <span>glyphicon-heart</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-star"></i>
        <span>glyphicon-star</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-star-empty"></i>
        <span>glyphicon-star-empty</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-user"></i>
        <span>glyphicon-user</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-film"></i>
        <span>glyphicon-film</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-th-large"></i>
        <span>glyphicon-th-large</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-th"></i>
        <span>glyphicon-th</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-th-list"></i>
        <span>glyphicon-th-list</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-ok"></i>
        <span>glyphicon-ok</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-remove"></i>
        <span>glyphicon-remove</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-zoom-in"></i>
        <span>glyphicon-zoom-in</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-zoom-out"></i>
        <span>glyphicon-zoom-out</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-off"></i>
        <span>glyphicon-off</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-signal"></i>
        <span>glyphicon-signal</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-cog"></i>
        <span>glyphicon-cog</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-trash"></i>
        <span>glyphicon-trash</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-home"></i>
        <span>glyphicon-home</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-file"></i>
        <span>glyphicon-file</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-time"></i>
        <span>glyphicon-time</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-road"></i>
        <span>glyphicon-road</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-download-alt"></i>
        <span>glyphicon-download-alt</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-download"></i>
        <span>glyphicon-download</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-upload"></i>
        <span>glyphicon-upload</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-inbox"></i>
        <span>glyphicon-inbox</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-play-circle"></i>
        <span>glyphicon-play-circle</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-repeat"></i>
        <span>glyphicon-repeat</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-refresh"></i>
        <span>glyphicon-refresh</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span>glyphicon-list-alt</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-lock"></i>
        <span>glyphicon-lock</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-flag"></i>
        <span>glyphicon-flag</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-headphones"></i>
        <span>glyphicon-headphones</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-volume-off"></i>
        <span>glyphicon-volume-off</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-volume-down"></i>
        <span>glyphicon-volume-down</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-volume-up"></i>
        <span>glyphicon-volume-up</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-qrcode"></i>
        <span>glyphicon-qrcode</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-barcode"></i>
        <span>glyphicon-barcode</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-tag"></i>
        <span>glyphicon-tag</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-tags"></i>
        <span>glyphicon-tags</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-book"></i>
        <span>glyphicon-book</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-bookmark"></i>
        <span>glyphicon-bookmark</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-print"></i>
        <span>glyphicon-print</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-camera"></i>
        <span>glyphicon-camera</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-font"></i>
        <span>glyphicon-font</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-bold"></i>
        <span>glyphicon-bold</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-italic"></i>
        <span>glyphicon-italic</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-text-height"></i>
        <span>glyphicon-text-height</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-text-width"></i>
        <span>glyphicon-text-width</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-align-left"></i>
        <span>glyphicon-align-left</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-align-center"></i>
        <span>glyphicon-align-center</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-align-right"></i>
        <span>glyphicon-align-right</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-align-justify"></i>
        <span>glyphicon-align-justify</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-list"></i>
        <span>glyphicon-list</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-indent-left"></i>
        <span>glyphicon-indent-left</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-indent-right"></i>
        <span>glyphicon-indent-right</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-facetime-video"></i>
        <span>glyphicon-facetime-video</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-picture"></i>
        <span>glyphicon-picture</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-map-marker"></i>
        <span>glyphicon-map-marker</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-adjust"></i>
        <span>glyphicon-adjust</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-tint"></i>
        <span>glyphicon-tint</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-edit"></i>
        <span>glyphicon-edit</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-share"></i>
        <span>glyphicon-share</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-check"></i>
        <span>glyphicon-check</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-move"></i>
        <span>glyphicon-move</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-step-backward"></i>
        <span>glyphicon-step-backward</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-fast-backward"></i>
        <span>glyphicon-fast-backward</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-backward"></i>
        <span>glyphicon-backward</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-play"></i>
        <span>glyphicon-play</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-pause"></i>
        <span>glyphicon-pause</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-stop"></i>
        <span>glyphicon-stop</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-forward"></i>
        <span>glyphicon-forward</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-fast-forward"></i>
        <span>glyphicon-fast-forward</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-step-forward"></i>
        <span>glyphicon-step-forward</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-eject"></i>
        <span>glyphicon-eject</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-chevron-left"></i>
        <span>glyphicon-chevron-left</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-chevron-right"></i>
        <span>glyphicon-chevron-right</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-plus-sign"></i>
        <span>glyphicon-plus-sign</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-minus-sign"></i>
        <span>glyphicon-minus-sign</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-remove-sign"></i>
        <span>glyphicon-remove-sign</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-ok-sign"></i>
        <span>glyphicon-ok-sign</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-question-sign"></i>
        <span>glyphicon-question-sign</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-info-sign"></i>
        <span>glyphicon-info-sign</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-screenshot"></i>
        <span>glyphicon-screenshot</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-remove-circle"></i>
        <span>glyphicon-remove-circle</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-ok-circle"></i>
        <span>glyphicon-ok-circle</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-ban-circle"></i>
        <span>glyphicon-ban-circle</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-arrow-left"></i>
        <span>glyphicon-arrow-left</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-arrow-right"></i>
        <span>glyphicon-arrow-right</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-arrow-up"></i>
        <span>glyphicon-arrow-up</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-arrow-down"></i>
        <span>glyphicon-arrow-down</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-share-alt"></i>
        <span>glyphicon-share-alt</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-resize-full"></i>
        <span>glyphicon-resize-full</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-resize-small"></i>
        <span>glyphicon-resize-small</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-exclamation-sign"></i>
        <span>glyphicon-exclamation-sign</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-gift"></i>
        <span>glyphicon-gift</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-leaf"></i>
        <span>glyphicon-leaf</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-fire"></i>
        <span>glyphicon-fire</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-eye-open"></i>
        <span>glyphicon-eye-open</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-eye-close"></i>
        <span>glyphicon-eye-close</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-warning-sign"></i>
        <span>glyphicon-warning-sign</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-plane"></i>
        <span>glyphicon-plane</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-calendar"></i>
        <span>glyphicon-calendar</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-random"></i>
        <span>glyphicon-random</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-comment"></i>
        <span>glyphicon-comment</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-magnet"></i>
        <span>glyphicon-magnet</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-chevron-up"></i>
        <span>glyphicon-chevron-up</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-chevron-down"></i>
        <span>glyphicon-chevron-down</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-retweet"></i>
        <span>glyphicon-retweet</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-shopping-cart"></i>
        <span>glyphicon-shopping-cart</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-folder-close"></i>
        <span>glyphicon-folder-close</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-folder-open"></i>
        <span>glyphicon-folder-open</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-resize-vertical"></i>
        <span>glyphicon-resize-vertical</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-resize-horizontal"></i>
        <span>glyphicon-resize-horizontal</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-hdd"></i>
        <span>glyphicon-hdd</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-bullhorn"></i>
        <span>glyphicon-bullhorn</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-bell"></i>
        <span>glyphicon-bell</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-certificate"></i>
        <span>glyphicon-certificate</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-thumbs-up"></i>
        <span>glyphicon-thumbs-up</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-thumbs-down"></i>
        <span>glyphicon-thumbs-down</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-hand-right"></i>
        <span>glyphicon-hand-right</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-hand-left"></i>
        <span>glyphicon-hand-left</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-hand-up"></i>
        <span>glyphicon-hand-up</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-hand-down"></i>
        <span>glyphicon-hand-down</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-circle-arrow-right"></i>
        <span>glyphicon-circle-arrow-right</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-circle-arrow-left"></i>
        <span>glyphicon-circle-arrow-left</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-circle-arrow-up"></i>
        <span>glyphicon-circle-arrow-up</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-circle-arrow-down"></i>
        <span>glyphicon-circle-arrow-down</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-globe"></i>
        <span>glyphicon-globe</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-wrench"></i>
        <span>glyphicon-wrench</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-tasks"></i>
        <span>glyphicon-tasks</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-filter"></i>
        <span>glyphicon-filter</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-briefcase"></i>
        <span>glyphicon-briefcase</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-fullscreen"></i>
        <span>glyphicon-fullscreen</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-dashboard"></i>
        <span>glyphicon-dashboard</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-paperclip"></i>
        <span>glyphicon-paperclip</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-heart-empty"></i>
        <span>glyphicon-heart-empty</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-link"></i>
        <span>glyphicon-link</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-phone"></i>
        <span>glyphicon-phone</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-pushpin"></i>
        <span>glyphicon-pushpin</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-usd"></i>
        <span>glyphicon-usd</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-gbp"></i>
        <span>glyphicon-gbp</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-sort"></i>
        <span>glyphicon-sort</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-sort-by-alphabet"></i>
        <span>glyphicon-sort-by-alphabet</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-sort-by-alphabet-alt"></i>
        <span>glyphicon-sort-by-alphabet-alt</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-sort-by-order"></i>
        <span>glyphicon-sort-by-order</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-sort-by-order-alt"></i>
        <span>glyphicon-sort-by-order-alt</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-sort-by-attributes"></i>
        <span>glyphicon-sort-by-attributes</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-sort-by-attributes-alt"></i>
        <span>glyphicon-sort-by-attributes-alt</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-unchecked"></i>
        <span>glyphicon-unchecked</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-expand"></i>
        <span>glyphicon-expand</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-collapse-down"></i>
        <span>glyphicon-collapse-down</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-collapse-up"></i>
        <span>glyphicon-collapse-up</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-log-in"></i>
        <span>glyphicon-log-in</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-flash"></i>
        <span>glyphicon-flash</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-log-out"></i>
        <span>glyphicon-log-out</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-new-window"></i>
        <span>glyphicon-new-window</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-record"></i>
        <span>glyphicon-record</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-save"></i>
        <span>glyphicon-save</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-open"></i>
        <span>glyphicon-open</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-saved"></i>
        <span>glyphicon-saved</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-import"></i>
        <span>glyphicon-import</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-export"></i>
        <span>glyphicon-export</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-send"></i>
        <span>glyphicon-send</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-floppy-disk"></i>
        <span>glyphicon-floppy-disk</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-floppy-saved"></i>
        <span>glyphicon-floppy-saved</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-floppy-remove"></i>
        <span>glyphicon-floppy-remove</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-floppy-save"></i>
        <span>glyphicon-floppy-save</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-floppy-open"></i>
        <span>glyphicon-floppy-open</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-credit-card"></i>
        <span>glyphicon-credit-card</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-transfer"></i>
        <span>glyphicon-transfer</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-cutlery"></i>
        <span>glyphicon-cutlery</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-header"></i>
        <span>glyphicon-header</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-compressed"></i>
        <span>glyphicon-compressed</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-earphone"></i>
        <span>glyphicon-earphone</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-phone-alt"></i>
        <span>glyphicon-phone-alt</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-tower"></i>
        <span>glyphicon-tower</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-stats"></i>
        <span>glyphicon-stats</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-sd-video"></i>
        <span>glyphicon-sd-video</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-hd-video"></i>
        <span>glyphicon-hd-video</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-subtitles"></i>
        <span>glyphicon-subtitles</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-sound-stereo"></i>
        <span>glyphicon-sound-stereo</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-sound-dolby"></i>
        <span>glyphicon-sound-dolby</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-sound-5-1"></i>
        <span>glyphicon-sound-5-1</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-sound-6-1"></i>
        <span>glyphicon-sound-6-1</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-sound-7-1"></i>
        <span>glyphicon-sound-7-1</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-copyright-mark"></i>
        <span>glyphicon-copyright-mark</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-registration-mark"></i>
        <span>glyphicon-registration-mark</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-cloud-download"></i>
        <span>glyphicon-cloud-download</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-cloud-upload"></i>
        <span>glyphicon-cloud-upload</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-tree-conifer"></i>
        <span>glyphicon-tree-conifer</span>
      </div>
    
      <div class="col-md-3 col-sm-4">
        <i class="glyphicon glyphicon-tree-deciduous"></i>
        <span>glyphicon-tree-deciduous</span>
      </div>
    
  </div>
</div>
   <hr>
   <div class="wrapper-md" ng-controller="JVectorMapDemoCtrl">
  <div class="panel b-a">
    <div class="panel-heading b-b b-light">World Map</div>
    <div class="panel-body">
      <div class="h3 m-b font-thin">World Map with information</div>
      <p class="m-b-lg text-muted">This map is based on data available at <a href="http://www.naturalearthdata.com/downloads/110m-cultural-vectors/110m-admin-0-countries/">http://www.naturalearthdata.com</a>. Data is in <a href="http://www.naturalearthdata.com/about/terms-of-use/">public domain</a>.</p>
      <div class="row">
        <div class="col-sm-8">
          <div style="height:240px;" ui-jq="vectorMap" ui-options="{            
            map: 'world_mill_en',
            markers: {{world_markers}},
            normalizeFunction: 'polynomial',
            backgroundColor: '#fff',
            regionStyle: {
              initial: {
                fill: '{{app.color.light}}'
              },
             hover: {
                fill: '{{app.color.primary}}'
              },
            },
            markerStyle: {
              initial: {
                fill: '{{app.color.info}}',
                stroke: '#fff'
              }
            }
          }" >
          </div>
          <div class="m-t-xl m-b clearfix">
            <i class="i i-local i-2x text-info pull-left m-r m-l m-t-xs"></i>
            <div class="clear text-sm">
              Countries distinguish between metropolitan (homeland) and independent and semi-independent portions of sovereign states.
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="h4 m-b font-thin">Statistics</div>
          <p class="m-b-xs">Population growth</p>
          <div class="progress progress-xs">
            <div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="80%" style="width: 80%"></div>
          </div>
          <p class="m-b-xs">Desertification</p>
          <div class="progress progress-xs">
            <div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="60%" style="width: 60%"></div>
          </div>
          <p class="m-b-xs">Natural Disasters</p>
          <div class="progress progress-xs">
            <div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="70%" style="width: 70%"></div>
          </div>
          <p class="m-b-xs">World Forest</p>
          <div class="progress progress-xs">
            <div class="progress-bar progress-bar-primary lter" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="panel b-a">
    <div class="panel-heading b-b b-light">USA Map</div>
    <div class="panel-body">
      <div class="h3 m-b font-thin">Map with selection</div>
      <p class="m-b-lg text-muted">This map is based on data available at <a href="http://www.naturalearthdata.com/downloads/10m-cultural-vectors/10m-admin-1-states-provinces/">http://www.naturalearthdata.com</a>. Data is in <a href="http://www.naturalearthdata.com/about/terms-of-use/">public domain</a>.</p>
      <div class="row m-b-xl">
        <div class="col-sm-8">                      
          <div style="height:240px;" ui-jq="vectorMap" ui-options="{
            map: 'us_aea_en',
            markers: {{usa_markers}},
            backgroundColor: '#fff',
            regionsSelectable: true,
            markersSelectable: true,
            markerStyle: {
              initial: {
                fill: '{{app.color.warning}}'
              },
              selected: {
                fill: '#ffffff'
              }
            },
            regionStyle: {
              initial: {
                fill: '{{app.color.info}}'
              },
              selected: {
                fill: '{{app.color.success}}'
              }
            },
            series: {
              markers: [{
                attribute: 'r',
                scale: [5, 15],
                values: [
                  187.70,
                  255.16,
                  310.69,
                  605.17,
                  248.31,
                  107.35,
                  217.22
                ]
              }]
            }
          }" >
          </div>
        </div>
        <div class="col-sm-4">
          <div class="h4 m-b font-thin">Statistics</div>
          <p>Internal administrative boundaries</p>
          <div>
            <div class="inline text-center">
              <div ui-jq="easyPieChart" ui-options="{
                      percent: 60,
                      lineWidth: 4,
                      trackColor: '{{app.color.light}}',
                      barColor: '{{app.color.info}}',
                      scaleColor: '#fff',
                      size: 100,
                      lineCap: 'butt',
                      animate: 1000
                    }">
                <div>
                  <span class="step">60</span>%
                </div>
              </div>
              <p class="text-info font-bold">data</p>
            </div>
            <div class="inline text-center">
              <div ui-jq="easyPieChart"  ui-options="{
                      percent: 30,
                      lineWidth: 4,
                      trackColor: '{{app.color.light}}',
                      barColor: '{{app.color.warning}}',
                      scaleColor: '#fff',
                      size: 100,
                      lineCap: 'butt',
                      animate: 1000
                    }">
                <div>
                  <span class="step">30</span>%
                </div>
              </div>
              <p class="text-warning font-bold">info</p>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
   <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Portlet</h1>
</div>
<div class="wrapper-md">
  <div class="row">
    <div class="col-sm-6 connected" ui-jq="sortable" ui-options="{items:'.panel', handle:'.panel-heading', connectWith:'.connected'}">
      <div class="panel panel-info">
        <div class="panel-heading">
          Quick link
        </div>
        <div class="list-group bg-white">
          <a href class="list-group-item">
            <i class="fa fa-fw fa-envelope"></i> Inbox
          </a>
          <a href class="list-group-item">
            <i class="fa fa-fw fa-eye"></i> Profile visits
          </a>
          <a href class="list-group-item">
            <i class="fa fa-fw fa-phone"></i> Call
          </a>
          <a href class="list-group-item">
            <i class="fa fa-fw fa-comments-o"></i> Messages
          </a>
          <a href class="list-group-item">
            <i class="fa fa-fw fa-bookmark"></i> Bookmarks
          </a>
          <a href class="list-group-item">
            <i class="fa fa-fw fa-bell"></i> Notifications
          </a>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          News <span class="badge">32</span>                    
        </div>
        <div class="panel-body">
          <article class="media">
            <div class="pull-left">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-bold fa-stack-1x text-white"></i>
              </span>
            </div>
            <div class="media-body">                        
              <a href class="h4">Bootstrap 3: What you need to know</a>
              <small class="block m-t-xs">Sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</small>
              <em class="text-xs">Posted on <span class="text-danger">Feb 23, 2013</span></em>
            </div>
          </article>
          <div class="line pull-in"></div>
          <article class="media">
            <div class="pull-left">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x text-info"></i>
                <i class="fa fa-file-o fa-stack-1x text-white"></i>
              </span>
            </div>
            <div class="media-body">
              <a href class="h4">Bootstrap documents</a>
              <small class="block m-t-xs">There are a few easy ways to quickly get started with Bootstrap, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</small>
              <em class="text-xs">Posted on <span class="text-danger">Feb 12, 2013</span></em>
            </div>
          </article>
          <div class="line pull-in"></div>
          <article class="media">
            <div class="pull-left">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-mobile fa-stack-1x text-white"></i>
              </span>
            </div>
            <div class="media-body">
              <a href class="h4 text-success">Mobile first html/css framework</a>
              <small class="block m-t-xs">Bootstrap, Ratchet</small>
              <em class="text-xs">Posted on <span class="text-danger">Feb 05, 2013</span></em>
            </div>
          </article>
        </div>
      </div>
    </div>
    <div class="col-sm-6 connected" ui-jq="sortable" ui-options="{items:'.panel', handle:'.panel-heading', connectWith:'.connected'}">
      <div class="panel panel-success">
        <div class="panel-heading">
          Connection
        </div>
        <ul class="list-group alt">
          <li class="list-group-item">
            <div class="media">
              <span class="pull-left thumb-sm"><img src="img/a1.jpg" alt="..." class="img-circle"></span>
              <div class="pull-right text-success m-t-sm">
                <i class="fa fa-circle"></i>
              </div>
              <div class="media-body">
                <div><a href>Chris Fox</a></div>
                <small class="text-muted">about 2 minutes ago</small>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="media">
              <span class="pull-left thumb-sm"><img src="img/a2.jpg" alt="..." class="img-circle"></span>
              <div class="pull-right text-muted m-t-sm">
                <i class="fa fa-circle"></i>
              </div>
              <div class="media-body">
                <div><a href>Amanda Conlan</a></div>
                <small class="text-muted">about 2 hours ago</small>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="media">
              <span class="pull-left thumb-sm"><img src="img/a3.jpg" alt="..." class="img-circle"></span>
              <div class="pull-right text-warning m-t-sm">
                <i class="fa fa-circle"></i>
              </div>
              <div class="media-body">
                <div><a href>Dan Doorack</a></div>
                <small class="text-muted">3 days ago</small>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="media">
              <span class="pull-left thumb-sm"><img src="img/a4.jpg" alt="..." class="img-circle"></span>
              <div class="pull-right text-danger m-t-sm">
                <i class="fa fa-circle"></i>
              </div>
              <div class="media-body">
                <div><a href>Lauren Taylor</a></div>
                <small class="text-muted">about 2 minutes ago</small>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">                    
          <span class="label bg-dark">15</span> Inbox
        </div>
        <div class="panel-body">
          <article class="media">
            <span class="pull-left thumb-sm"><img src="img/a1.jpg" alt="..." class="img-circle"></span>
            <div class="media-body">
              <div class="pull-right text-center text-muted">
                <strong class="h4">12:18</strong><br>
                <small class="label bg-light">pm</small>
              </div>
              <a href class="h4">Bootstrap 3 released</a>
              <small class="block"><a href class="">John Smith</a> <span class="label label-success">Circle</span></small>
              <small class="block m-t-sm">Sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</small>
            </div>
          </article>
          <div class="line pull-in"></div>
          <article class="media">
            <span class="pull-left thumb-sm"><i class="fa fa-file-o fa-3x"></i></span>                
            <div class="media-body">
              <div class="pull-right text-center text-muted">
                <strong class="h4">17</strong><br>
                <small class="label bg-light">feb</small>
              </div>
              <a href class="h4">Bootstrap documents</a>
              <small class="block"><a href class="">John Smith</a> <span class="label label-info">Friends</span></small>
              <small class="block m-t-sm">There are a few easy ways to quickly get started with Bootstrap, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</small>
            </div>
          </article>
          <div class="line pull-in"></div>
          <article class="media">
            <div class="media-body">
              <div class="pull-right text-center text-muted">
                <strong class="h4">09</strong><br>
                <small class="label bg-light">jan</small>
              </div>
              <a href class="h4 text-success">Mobile first html/css framework</a>
              <small class="block m-t-sm">Bootstrap, Ratchet</small>
            </div>
          </article>
        </div>
      </div>    
    </div>
  </div>
</div>
   <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Sortable</h1>
</div>
<div class="wrapper-md">
  <h4 class="m-t-none m-b">Drag to sort list <small>(no touch)</small></h4>
  <ul ui-jq="sortable" class="list-group gutter list-group-lg list-group-sp" >
    <li class="list-group-item bg-primary">
      <span class="pull-right" >
        <a href><i class="fa fa-pencil fa-fw m-r-xs"></i></a>
        <a href><i class="fa fa-plus fa-fw m-r-xs"></i></a>
        <a href><i class="fa fa-times fa-fw"></i></a>                  
      </span>
      <span class="pull-left"><i class="fa fa-sort text-muted fa m-r-sm"></i> </span>
      <div class="clear">
        Browser compatibility
      </div>
    </li>
    <li class="list-group-item bg-info">
      <span class="pull-right" >
        <a href><i class="fa fa-pencil fa-fw m-r-xs"></i></a>
        <a href><i class="fa fa-plus fa-fw m-r-xs"></i></a>
        <a href><i class="fa fa-times fa-fw"></i></a>
      </span>
      <span class="pull-left"><i class="fa fa-sort text-muted fa m-r-sm"></i> </span>
      <div class="clear">
        Looking for more example templates
      </div>
    </li>
    <li class="list-group-item bg-success">
     <span class="pull-right" >
        <a href><i class="fa fa-pencil fa-fw m-r-xs"></i></a>
        <a href><i class="fa fa-plus fa-fw m-r-xs"></i></a>
        <a href><i class="fa fa-times fa-fw"></i></a>                  
      </span>
      <span class="pull-left"><i class="fa fa-sort text-muted fa m-r-sm"></i> </span>
      <div class="clear">
        Customizing components
      </div>
    </li>
    <li class="list-group-item">
      <span class="pull-right" >
        <a href><i class="fa fa-pencil fa-fw m-r-xs"></i></a>
        <a href><i class="fa fa-plus fa-fw m-r-xs"></i></a>
        <a href><i class="fa fa-times fa-fw"></i></a>                  
      </span>
      <span class="pull-left"><i class="fa fa-sort text-muted fa m-r-sm"></i> </span>
      <div class="clear">
        The fastest way to get started
      </div>
    </li>
    <li class="list-group-item">
      <span class="pull-right" >
        <a href><i class="fa fa-fw m-r-xs fa-pencil"></i></a>
        <a href><i class="fa fa-fw m-r-xs fa-plus"></i></a>
        <a href><i class="fa fa-fw fa-times"></i></a>
      </span>
      <span class="pull-left"><i class="fa fa-sort text-muted fa m-r-sm"></i> </span>
      <div class="clear">
        HTML5 doctype required
      </div>
    </li>
  </ul>
  <h4 class="m-t-none m-b">Nestable list <small>(touch support)</small></h4>
  <div class="row">
    <div class="col-sm-4">
      <div ui-jq="nestable" class="dd">
        <ol class="dd-list">
          <li class="dd-item" data-id="1">
              <div class="dd-handle">Item 1</div>
          </li>
          <li class="dd-item" data-id="2">
              <div class="dd-handle">Item 2</div>
              <ol class="dd-list">
                  <li class="dd-item" data-id="3"><div class="dd-handle">Item 3</div></li>
                  <li class="dd-item" data-id="4"><div class="dd-handle">Item 4</div></li>
                  <li class="dd-item" data-id="5">
                      <div class="dd-handle">Item 5</div>
                      <ol class="dd-list">
                          <li class="dd-item" data-id="6"><div class="dd-handle">Item 6</div></li>
                          <li class="dd-item" data-id="7"><div class="dd-handle">Item 7</div></li>
                          <li class="dd-item" data-id="8"><div class="dd-handle">Item 8</div></li>
                      </ol>
                  </li>
                  <li class="dd-item" data-id="9"><div class="dd-handle">Item 9</div></li>
              </ol>
          </li>
      </ol>
      </div>
    </div>
    <div class="col-sm-4">
      <div ui-jq="nestable" class="dd">
        <ol class="dd-list">
          <li class="dd-item" data-id="10">                    
            <div class="dd-handle">Item 10</div>
            <ol class="dd-list">
              <li class="dd-item" data-id="11">
                <div class="dd-handle">Item 11</div>
              </li>
            </ol>
          </li>                  
          <li class="dd-item" data-id="12">
              <div class="dd-handle">Item 12</div>
          </li>
          <li class="dd-item" data-id="13">
              <div class="dd-handle">Item 13</div>
          </li>
          <li class="dd-item" data-id="14">
              <div class="dd-handle">Item 14</div>
          </li>
          <li class="dd-item" data-id="15">
              <div class="dd-handle">Item 15</div>
              <ol class="dd-list">
                  <li class="dd-item" data-id="16"><div class="dd-handle">Item 16</div></li>
                  <li class="dd-item" data-id="17"><div class="dd-handle">Item 17</div></li>
                  <li class="dd-item" data-id="18"><div class="dd-handle">Item 18</div></li>
              </ol>
          </li>
        </ol>
      </div>
    </div>
    <div class="col-sm-4">
      <div ui-jq="nestable" class="dd">
        <ol class="dd-list">
          <li class="dd-item dd3-item" data-id="13">
              <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 13</div>
          </li>
          <li class="dd-item dd3-item" data-id="14">
              <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 14</div>
          </li>
          <li class="dd-item dd3-item" data-id="15">
              <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 15</div>
              <ol class="dd-list">
                  <li class="dd-item dd3-item" data-id="16">
                      <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 16</div>
                  </li>
                  <li class="dd-item dd3-item" data-id="17">
                      <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 17</div>
                  </li>
                  <li class="dd-item dd3-item" data-id="18">
                      <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 18</div>
                  </li>
              </ol>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>

   <hr>
   <div class="hbox hbox-auto-xs hbox-auto-sm">
  <!-- .col -->
  <div class="col w-lg bg-light dk b-r bg-auto" id="aside">
    <div class="wrapper bg b-b">
      <button class="btn btn-sm btn-success pull-right" ui-toggle-class="timeline-center" target=".timeline">Center</button>
      <h3 class="m-n font-thin">Timeline</h3>
    </div>
    <div class="wrapper">
      <form>
        <div class="form-group">
          <label>Name</label>
          <input type="text" placeholder="Event name" class="input-sm form-control">
        </div>
        <div class="form-group">
          <label>Date</label>
          <input type="text" placeholder="Event name" class="input-sm form-control">
        </div>
        <div class="form-group">
          <label>Time</label>
          <input type="text" placeholder="eg. 3:00 pm" class="input-sm form-control">
        </div>
        <div class="form-group">
          <label>Type</label>
          <div>
            <div class="btn-group dropdown" dropdown>
              <button class="btn btn-sm btn-default dropdown-toggle" dropdown-toggle>
                <span class="dropdown-label">Choose a type</span> 
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href>Travel</a></li>
                <li><a href>Phone</a></li>
                <li><a href>Meeting</a></li>
                <li><a href>Appointment</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="m-t-md m-b-md"><button class="btn btn-sm btn-primary">Add an event</button></div>
      </form>
    </div>
  </div>
  <!-- /.col -->
  <!-- .col -->
  <div class="col">
    <div class="wrapper">
      <ul class="timeline">
        <li class="tl-header">
          <div class="btn btn-info">Now</div>
        </li>
        <li class="tl-item">
          <div class="tl-wrap b-info">
            <span class="tl-date">5s ago</span>
            <div class="tl-content">
              Just a title
            </div>
          </div>
        </li>
        <li class="tl-item">
          <div class="tl-wrap">
            <span class="tl-date">2h ago</span>
            <div class="tl-content panel padder b-a">
              <span class="arrow left pull-up"></span>
              <div>Content in a panel</div>
            </div>
          </div>
        </li>
        <li class="tl-item tl-left">
          <div class="tl-wrap b-success">
            <span class="tl-date">7:30 am</span>
            <div class="tl-content panel bg-success padder">
              <span class="arrow arrow-success left pull-up hidden-left"></span>
              <span class="arrow arrow-success right pull-up visible-left"></span>
              <div class="text-lt">Oh! Colorful</div>
            </div>
          </div>
        </li>
        <li class="tl-item">
          <div class="tl-wrap b-primary">
            <span class="tl-date">04.2014</span>
            <div class="tl-content panel padder b-a w-md w-auto-xs">
              <span class="arrow left pull-up"></span>
              <div class="text-lt m-b-sm">With Title</div>
              <div class="panel-body pull-in b-t b-light">
                <a href="" class="thumb pull-right m-l m-t-xs avatar">
                  <img src="img/a4.jpg" alt="...">
                  <i class="on md b-white bottom"></i>
                </a>
                <div class="clear">
                  <a href="" class="text-primary block m-b-xs">@Mike Mcalidek <i class="icon-twitter"></i></a>
                  <a href="" class="btn btn-addon btn-sm btn-primary m-t-xs"><i class="fa fa-eye"></i> Follow</a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="tl-item tl-left">
          <div class="tl-wrap b-primary">
            <span class="tl-date">04.2014</span>
            <div class="tl-content panel padder b-a block">
              <span class="arrow left pull-up hidden-left"></span>
              <span class="arrow right pull-up visible-left"></span>
              <div class="text-lt m-b-sm">Block</div>
              <div class="panel-body pull-in b-t b-light">
                <p>I'm working on a realy amazing application, It will be available soon. here is a little tease. </p>
                <div class="m-b m-t">                  
                  <a href class="avatar thumb-xs m-r-xs">
                    <img src="img/a7.jpg" alt="...">
                    <i class="on b-white left"></i>
                  </a>
                  <a href class="avatar thumb-xs m-r-xs">
                    <img src="img/a8.jpg" alt="...">
                    <i class="busy b-white left"></i>
                  </a>
                  <a href class="avatar thumb-xs m-r-xs">
                    <img src="img/a9.jpg" alt="...">
                    <i class="away b-white left"></i>
                  </a>
                  <a href class="avatar thumb-xs m-r-xs">
                    <img src="img/a10.jpg" alt="...">
                    <i class="on b-white left"></i>
                  </a>
                  <a href class="btn btn-success btn-rounded font-bold"> +152 </a>
                  <span class="h5 m-l-sm">Liked</span>              
                </div>
                <div class="panel panel-default m-t-md m-b-n-sm pos-rlt">
                  <span class="arrow top pull-left"></span>
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
        </li>
        <li class="tl-header">
          <div class="btn btn-sm btn-default btn-rounded">2014</div>
        </li>
        <li class="tl-item">
          <div class="tl-wrap">
            <span class="tl-date">10.08.2013</span>
            <div class="tl-content panel padder b-a">
              <span class="arrow left pull-up hidden-left"></span>
              <span class="arrow right pull-up visible-left"></span>
              <div class="text-lt">A good story to hear.</div>
            </div>
          </div>
        </li>
        <li class="tl-header">
          <div class="btn btn-icon btn-rounded btn-default"><i class="fa fa-twitter"></i></div>
        </li>
        <li class="tl-item tl-left">
          <div class="tl-wrap b-white">
            <span class="tl-date">5.07.2013</span>
            <div class="tl-content panel padder b-a">
              <span class="arrow left pull-up hidden-left"></span>
              <span class="arrow right pull-up visible-left"></span>
              <div class="text-lt">Yesterday is History</div>
            </div>
          </div>
        </li>
        <li class="tl-header">
          <div class="btn btn-sm btn-default btn-rounded">more</div>
        </li>
      </ul>
    </div>
  </div>
  <!-- /.col -->            
</div>
   <hr>
   <div class="hbox hbox-auto-xs hbox-auto-sm" ng-controller="AbnTestController">
  <div class="col w-lg bg-light b-r bg-auto">
    <div class="wrapper-md">
      <button ng-click="try_changing_the_tree_data()" class="btn btn-default btn-block m-b">Change The Tree Definition</button>
      <button ng-click="try_async_load()" class="btn btn-default btn-block">Load Tree Data Asynchronously</button>
      <div class="line b-b line-lg"></div>
      <h5>Test the Tree Control API:</h5>
      <button ng-click="my_tree.select_first_branch()" class="btn btn-default btn-sm">First Branch</button>
      <div class="m-t-sm m-b-sm">
        <button ng-click="my_tree.select_next_sibling()" class="btn btn-default btn-sm">Next Sibling</button>
        <button ng-click="my_tree.select_prev_sibling()" class="btn btn-default btn-sm">Prev Sibling</button>
      </div>
      <div class="m-b-sm">
        <button ng-click="my_tree.select_next_branch()" class="btn btn-default btn-sm">Next Branch</button>
        <button ng-click="my_tree.select_prev_branch()" class="btn btn-default btn-sm">Prev Branch</button>
      </div>
      <button ng-click="my_tree.select_parent_branch()" class="btn btn-default btn-sm">Parent</button>
      <div class="m-t-sm m-b-sm">
        <button ng-click="my_tree.expand_branch()" class="btn btn-default btn-sm">Expand</button>
        <button ng-click="my_tree.collapse_branch()" class="btn btn-default btn-sm">Collapse</button>
      </div>
      <div class="m-t-sm m-b-sm">
        <button ng-click="my_tree.expand_all()" class="btn btn-default btn-sm">Expand All</button>
        <button ng-click="my_tree.collapse_all()" class="btn btn-default btn-sm">Collapse All</button>
      </div>
      <div class="line b-b line-lg"></div>
      <button ng-click="try_adding_a_branch()" class="btn btn-success btn-sm"><i class="fa fa-fw m-r-xs fa-plus"></i> Add Branch</button>
    </div>
  </div>
  <div class="col">
    <div class="wrapper-md">
      <div class="b-a bg-light dk r r-2x">
        <span ng-if="doing_async">...loading...</span>
        <abn-tree 
          tree-data         = "my_data" 
          tree-control      = "my_tree" 
          on-select         = "my_tree_handler(branch)" 
          expand-level      = "2" 
          initial-selection = "Granny Smith"
          icon-leaf         = "fa fa-file-o"
          icon-expand       = "fa fa-plus"
          icon-collapse     = "fa fa-minus"
          >
        </abn-tree>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="wrapper-md">
      <div class="alert alert-info">{{output}}</div>
    </div>
  </div>
</div>
    <hr>
   <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Widgets</h1>
</div>
<div class="wrapper-md">
  <div class="row">
    <div class="col-md-4">
      <div class="panel b-a">
        <div class="panel-heading no-border bg-primary">          
          <span class="text-lt">The Restaurant</span>
        </div>
        <div class="item m-l-n-xxs m-r-n-xxs">
          <div ng-init="x = 3" class="top text-right padder m-t-xs w-full">
            <rating ng-model="x" max="5" state-on="'fa fa-star text-white'" state-off="'fa fa-star-o text-white'"></rating>
          </div>
          <div class="center text-center w-full" style="margin-top:-60px">
            <div ui-jq="easyPieChart" ui-refresh="x" ui-options="{
                percent: {{x*15}},
                lineWidth: 60,
                trackColor: 'rgba(255,255,255,0)',
                barColor: 'rgba(35,183,229,0.7)',
                scaleColor: false,
                size: 120,
                lineCap: 'butt',
                rotate: 0,
                animate: 1000
              }" class="inline">
            </div>
          </div>
          <div class="bottom wrapper bg-gd-dk text-white">            
            <div class="text-u-c h3 m-b-sm text-primary-lter">Coffee</div>
            <div>Restaurant</div>
            <div>9:00 am - 12:00 pm</div>
          </div>
          <img src="img/c0.jpg" class="img-full">
        </div>
        <div class="hbox text-center b-b b-light text-sm">          
          <a href class="col padder-v text-muted b-r b-light">
            <i class="icon-call-end block m-b-xs fa-2x"></i>
            <span>Call</span>
          </a>
          <a href class="col padder-v text-muted b-r b-light">
            <i class="icon-pointer block m-b-xs fa-2x"></i>
            <span>Location</span>
          </a>
          <a href class="col padder-v text-muted">
            <i class="icon-cursor block m-b-xs fa-2x"></i>
            <span>Direction</span>
          </a>
        </div>
        <div class="hbox text-center text-sm">          
          <a href class="col padder-v text-muted b-r b-light">
            <i class="icon-plus block m-b-xs fa-2x"></i>
            <span>Add a tip</span>
          </a>
          <a href class="col padder-v text-muted b-r b-light">
            <i class="icon-like block m-b-xs fa-2x"></i>
            <span>Like it</span>
          </a>
          <a href class="col padder-v text-muted">
            <i class="icon-link block m-b-xs fa-2x"></i>
            <span>Website</span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6">
          <div class="panel b-a">
            <div class="panel-heading bg-info dk no-border wrapper-lg">
              <button class="btn btn-sm btn-icon btn-rounded btn-info pull-right m-r"><i class="fa fa-phone"></i></button>
              <button class="btn btn-sm btn-icon btn-rounded btn-info m-l"><i class="fa fa-heart"></i></button>
            </div>
            <div class="text-center m-b clearfix">
              <div class="thumb-lg avatar m-t-n-xxl">
                <img src="img/a5.jpg" alt="..." class="b b-3x b-white">
                <div class="h4 font-thin m-t-sm">Jacobs Simon</div>
              </div>
            </div>
            <div class="padder-v b-t b-light bg-light lter row text-center no-gutter">
              <div class="col-xs-4">
                <div>Facebook</div>
                <div class="inline m-t-sm">
                  <div ui-jq="easyPieChart" ui-options="{
                      percent: 30,
                      lineWidth: 3,
                      trackColor: '{{app.color.light}}',
                      barColor: '{{app.color.primary}}',
                      scaleColor: false,
                      color: '#fff',
                      size: 65,
                      lineCap: 'butt',
                      rotate: 45,
                      animate: 1000
                    }">
                    <div>
                      <span class="step">30</span>%
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-4">
                <div>Twitter</div>
                <div class="inline m-t-sm">
                  <div ui-jq="easyPieChart" ui-options="{
                      percent: 50,
                      lineWidth: 3,
                      trackColor: '{{app.color.light}}',
                      barColor: '{{app.color.info}}',
                      scaleColor: false,
                      color: '#fff',
                      size: 65,
                      lineCap: 'butt',
                      rotate: 90,
                      animate: 1000
                    }">
                    <div>
                      <span class="step">50</span>%
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-4">
                <div>Linkin</div>
                <div class="inline m-t-sm">
                  <div ui-jq="easyPieChart" ui-options="{
                      percent: 20,
                      lineWidth: 3,
                      trackColor: '{{app.color.light}}',
                      barColor: '{{app.color.warning}}',
                      scaleColor: false,
                      color: '#fff',
                      size: 65,
                      lineCap: 'butt',
                      rotate: 180,
                      animate: 1000
                    }">
                    <div>
                      <span class="step">20</span>%
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hbox text-center b-t b-light">          
              <a href class="col padder-v text-muted b-r b-light">
                <div class="h4">5032</div>
                <span>Posts</span>
              </a>
              <a href class="col padder-v text-muted">
                <div class="h4">689</div>
                <span>Photos</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="panel no-border">
            <div class="panel-heading bg-primary lt">
              <div class="m-sm">
                <span class="pull-right"><i class="fa fa-caret-up text-warning text-lg"></i></span>
                <span class="h4 text-white">Member Stats</span>
              </div>              
              <div class="text-center m-t-md">
                  <div ng-init="data2=[50.32,45.23,47.56,36.25,53.85,40.15,41.25,50.15,57.14,36.15,97.26,50.15,45.32,47.19,37.75,25.15,56.34,50.35,47.25,53.15]" ui-jq="sparkline" ui-options="
                  {{data2}}, 
                  {type:'line', height:80, width: '100%', lineWidth:4, lineColor:'#fff', spotColor:'#fff', fillColor:'', highlightLineColor:'#fff', spotRadius:6, minSpotColor:'{{app.color.warning}}', maxSpotColor:'{{app.color.info}}'}
                  ">loading...</div>

                  <div ng-init="data3=[ 10,9,11,10,11,10,12,10,9,10,11,9,8 ]" ui-jq="sparkline" ui-options="{{data3}}, 
                  {type:'bar', height:60, barWidth:4, barSpacing:6, barColor:'{{app.color.primary}}'}
                  " class="sparkline inline m-t m-b-n-sm"></div>
              </div>
            </div>
            <div class="hbox bg-primary bg">
              <div class="col wrapper">
                <span>Customers</span>
                <div class="h1 text-info font-thin">12,790</div>
              </div>
              <div class="col wrapper bg-info">
                <span>VIP</span>
                <div class="h1 text-warning font-thin">2,560</div>
              </div>
            </div>
            <div class="panel-footer bg-light lter wrapper">
              <div class="row">
                <div class="col-xs-4">
                  <small class="text-muted block">Active</small>
                  <span class="text-md">1,500</span>
                </div>
                <div class="col-xs-4">
                  <small class="text-muted block">Inactive</small>
                  <span class="text-md">10,430</span>
                </div>
                <div class="col-xs-4">
                  <small class="text-muted block">Sleeping</small>
                  <span class="text-md">400</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="row">
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="clearfix">
                <a href class="pull-left thumb-md avatar b-3x m-r">
                  <img src="img/a2.jpg" alt="...">
                </a>
                <div class="clear">
                  <div class="h3 m-t-xs m-b-xs">
                    John.Smith 
                    <i class="fa fa-circle text-success pull-right text-xs m-t-sm"></i>
                  </div>
                  <small class="text-muted">Art director</small>
                </div>
              </div>
            </div>
            <div class="list-group no-radius alt">
              <a class="list-group-item" href>
                <span class="badge bg-success">25</span>
                <i class="fa fa-comment fa-fw text-muted"></i> 
                Messages
              </a>
              <a class="list-group-item" href>
                <span class="badge bg-info">16</span>
                <i class="fa fa-envelope fa-fw text-muted"></i> 
                Inbox
              </a>
              <a class="list-group-item" href>
                <span class="badge bg-light">5</span>
                <i class="fa fa-eye fa-fw text-muted"></i> 
                Profile visits
              </a>
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-body">
              <a href class="thumb pull-right m-l m-t-xs avatar">
                <img src="img/a4.jpg" alt="...">
                <i class="on md b-white bottom"></i>
              </a>
              <div class="clear">
                <a href class="text-info block m-b-xs">@Mike Mcalidek <i class="icon-twitter"></i></a>
                <a href class="btn btn-addon btn-sm btn-info m-t-xs"><i class="fa fa-eye"></i> Follow</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="panel panel-default">
            <a href class="text-muted m-t-sm m-l inline"  ng-click="data=[40, 40, 20]"><i class="icon-pie-chart"></i></a>
            <div class="text-center wrapper m-b-sm">              
              <div ng-init="data = [55, 30, 15] " ui-refresh="data" ui-jq="sparkline" ui-options="
              {{data}}, 
              {
                type:'pie', 
                height:126, 
                sliceColors:['{{app.color.primary}}','{{app.color.info}}','{{app.color.warning}}']
              }
              " class="sparkline inline"></div>
            </div>
            <ul class="list-group no-radius">
              <li class="list-group-item">
                <span class="pull-right">45,000</span>
                <span class="label bg-primary">1</span>
                .inc company
              </li>
              <li class="list-group-item">
                <span class="pull-right">23,200</span>
                <span class="label bg-info">2</span>
                Gamecorp
              </li>
              <li class="list-group-item">
                <span class="pull-right">21,000</span>
                <span class="label bg-warning">3</span>
                Starup
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="clearfix text-center m-t">
            <div class="inline">
              <div ui-jq="easyPieChart" ui-options="{
                    percent: 75,
                    lineWidth: 5,
                    trackColor: '{{app.color.light}}',
                    barColor: '{{app.color.info}}',
                    scaleColor: false,
                    color: '{{app.color.dark}}',
                    size: 134,
                    lineCap: 'butt',
                    rotate: -90,
                    animate: 1000
                  }">
                <div class="thumb-xl">
                  <img src="img/a8.jpg" class="img-circle" alt="...">
                </div>
              </div>
              <div class="h4 m-t m-b-xs">John.Smith</div>
              <small class="text-muted m-b">Art director</small>
            </div>                      
          </div>
        </div>
        <footer class="panel-footer bg-info text-center no-padder">
          <div class="row no-gutter">
            <div class="col-xs-4">
              <div class="wrapper">
                <span class="m-b-xs h3 block text-white">245</span>
                <small class="text-muted">Followers</small>
              </div>
            </div>
            <div class="col-xs-4 dk">
              <div class="wrapper">
                <span class="m-b-xs h3 block text-white">55</span>
                <small class="text-muted">Following</small>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="wrapper">
                <span class="m-b-xs h3 block text-white">2,035</span>
                <small class="text-muted">Tweets</small>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <!-- chat -->
      <div class="panel panel-default">
        <div class="panel-heading">Chat</div>
        <div class="panel-body">
          <div class="m-b">
            <a href class="pull-left thumb-sm avatar"><img src="img/a2.jpg" alt="..."></a>
            <div class="m-l-xxl">
              <div class="pos-rlt wrapper b b-light r r-2x">
                <span class="arrow left pull-up"></span>
                <p class="m-b-none">Hi John, What's up...</p>
              </div>
              <small class="text-muted"><i class="fa fa-ok text-success"></i> 2 minutes ago</small>
            </div>
          </div>
          <div class="m-b">
            <a href class="pull-right thumb-sm avatar"><img src="img/a3.jpg" class="img-circle" alt="..."></a>
            <div class="m-r-xxl">
              <div class="pos-rlt wrapper bg-primary r r-2x">
                <span class="arrow right pull-up arrow-primary"></span>
                <p class="m-b-none">Lorem ipsum dolor sit amet, conse <br>adipiscing eli...<br>:)</p>
              </div>
              <small class="text-muted">1 minutes ago</small>
            </div>
          </div>                          
        </div>
        <footer class="panel-footer">
          <!-- chat form -->
          <div>
            <a class="pull-left thumb-xs avatar"><img src="img/a3.jpg" class="img-circle" alt="..."></a>
            <form class="m-b-none m-l-xl">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Say something">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">SEND</button>
                </span>
              </div>
            </form>
          </div>
        </footer>
      </div>
      <!-- /chat -->            
      <div class="panel panel-default">
        <div class="panel-heading">                    
          <span class="label bg-dark">15</span> News
        </div>
        <div class="panel-body" ui-jq="slimScroll" ui-options="{height:'250px', size:'8px'}">
          <div class="media">
            <span class="pull-left thumb-sm"><img src="img/a2.jpg" alt="..."></span>
            <div class="media-body">
              <div class="pull-right text-center text-muted">
                <strong class="h4">12:18</strong><br>
                <small class="label bg-light">pm</small>
              </div>
              <a href class="h4">Bootstrap 3 released</a>
              <small class="block"><a href class="">John Smith</a> <span class="label label-success">Circle</span></small>
              <small class="block m-t-sm">Sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</small>
            </div>
          </div>
          <div class="line pull-in"></div>
          <div class="media">
            <span class="pull-left thumb-sm"><i class="fa fa-file-o fa-3x text-muted"></i></span>                
            <div class="media-body">
              <div class="pull-right text-center text-muted">
                <strong class="h4">17</strong><br>
                <small class="label bg-light">feb</small>
              </div>
              <a href class="h4">Bootstrap documents</a>
              <small class="block"><a href>John Smith</a> <span class="label label-info">Friends</span></small>
              <small class="block m-t-sm">There are a few easy ways to quickly get started with Bootstrap, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</small>
            </div>
          </div>
          <div class="line pull-in"></div>
          <div class="media">
            <div class="media-body">
              <div class="pull-right text-center text-muted">
                <strong class="h4">09</strong><br>
                <small class="label bg-light">jan</small>
              </div>
              <a href class="h4 text-success">Mobile first html/css framework</a>
              <small class="block m-t-sm">Bootstrap, Ratchet</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <!-- .comment-list -->
      <div class="m-b b-l m-l-md streamline">
        <div>
          <a class="pull-left thumb-sm avatar m-l-n-md">
            <img src="img/a1.jpg" class="img-circle" alt="...">
          </a>
          <div class="m-l-lg panel b-a">
            <div class="panel-heading pos-rlt b-b b-light">
              <span class="arrow left"></span>
              <a href>John smith</a>
              <label class="label bg-info m-l-xs">Editor</label> 
              <span class="text-muted m-l-sm pull-right">
                <i class="fa fa-clock-o"></i>
                Just now
              </span>
            </div>
            <div class="panel-body">
              <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
              <div class="m-t-sm">
                <a href ui-toggle-class class="btn btn-default btn-xs active">
                  <i class="fa fa-star-o text-muted text"></i>
                  <i class="fa fa-star text-danger text-active"></i> 
                  Like
                </a>
                <a href class="btn btn-default btn-xs">
                  <i class="fa fa-mail-reply text-muted"></i> Reply
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- .comment-reply -->
        <div class="m-l-lg">
          <a class="pull-left thumb-sm avatar">
            <img src="img/a8.jpg" alt="...">
          </a>          
          <div class="m-l-xxl panel b-a">
            <div class="panel-heading pos-rlt">
              <span class="arrow left pull-up"></span>
              <span class="text-muted m-l-sm pull-right">
                <i class="fa fa-clock-o"></i>
                10m ago
              </span>
              <a href>Mika Sam</a> 
              Report this comment is helpful                           
            </div>
          </div>
        </div>
        <!-- / .comment-reply -->
        <div>
          <a class="pull-left thumb-sm avatar m-l-n-md">
            <img src="img/a9.jpg" alt="...">
          </a>          
          <div class="m-l-lg panel b-a">
            <div class="panel-heading pos-rlt b-b b-light">
              <span class="arrow left"></span>                    
              <a href>By me</a>
              <label class="label bg-success m-l-xs">User</label> 
              <span class="text-muted m-l-sm pull-right">
                <i class="fa fa-clock-o"></i>
                1h ago
              </span>
            </div>
            <div class="panel-body">
              <div>This comment was posted by you.</div>
            </div>
          </div>
        </div>
        <div>
          <a class="pull-left thumb-sm avatar m-l-n-md"><img src="img/a5.jpg" alt="..."></a>          
          <div class="m-l-lg panel b-a">
            <div class="panel-heading pos-rlt b-b b-light">
              <span class="arrow left"></span>
              <a href>Peter</a>
              <label class="label bg-primary m-l-xs">Vip</label> 
              <span class="text-muted m-l-sm pull-right">
                <i class="fa fa-clock-o"></i>
                2hs ago
              </span>
            </div>
            <div class="panel-body">
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
              </blockquote>
              <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit...</div>
              <div class="m-t-sm">
                <a href data-toggle="class" class="btn btn-default btn-xs">
                  <i class="fa fa-star-o text-muted text"></i>
                  <i class="fa fa-star text-danger text-active"></i> 
                  Like
                </a>
                <a href class="btn btn-default btn-xs"><i class="fa fa-mail-reply text-muted"></i> Reply</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix m-b-lg">
        <a class="pull-left thumb-sm avatar"><img src="img/a6.jpg" alt="..."></a>
        <div class="m-l-xxl">
          <form class="m-b-none">
            <div class="input-group">
              <input type="text" class="form-control input-lg" placeholder="Input your comment here">
              <span class="input-group-btn">
                <button class="btn btn-info btn-lg" type="button">POST</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="list-group">
        <a href class="list-group-item">
          <span class="badge badge-empty">201</span>
          <i class="fa fa-envelope fa-fw m-r-xs"></i> Inbox
        </a>
        <a href class="list-group-item">
          <span class="badge bg-info">5021</span>
          <i class="fa fa-eye fa-fw m-r-xs"></i> Profile visits
        </a>
        <a href class="list-group-item">
          <i class="fa fa-chevron-right text-muted"></i>
          <span class="badge bg-success">14</span>
          <i class="fa fa-phone fa-fw m-r-xs"></i> Call
        </a>
        <a href class="list-group-item">
          <span class="badge bg-dark">20</span>
          <i class="fa fa-comments-o fa-fw m-r-xs"></i> Messages
        </a>
        <a href class="list-group-item">
          <span class="badge bg-warning">14</span>
          <i class="fa fa-bookmark fa-fw m-r-xs"></i> Bookmarks
        </a>
        <a href class="list-group-item">
          <span class="badge bg-info">30</span>
          <i class="fa fa-bell fa-fw m-r-xs"></i> Notifications
        </a>
        <a href class="list-group-item">
          <span class="badge bg-danger">10</span>
          <i class="fa fa-clock-o fa-fw m-r-xs"></i> Watch
        </a>
      </div>
      <div class="m-b m-t-lg">
        <a href class="avatar thumb-xs m-r-xs">
          <img src="img/a7.jpg" alt="...">
          <i class="on b-white"></i>
        </a>
        <a href class="avatar thumb-xs m-r-xs">
          <img src="img/a8.jpg" alt="...">
          <i class="busy b-white"></i>
        </a>
        <a href class="avatar thumb-xs m-r-xs">
          <img src="img/a9.jpg" alt="...">
          <i class="away b-white"></i>
        </a>
        <a href class="avatar thumb-xs m-r-xs">
          <img src="img/a10.jpg" alt="...">
          <i class="on b-white"></i>
        </a>
        <a href class="btn btn-success btn-rounded font-bold"> +152 </a>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="panel b-a">
        <div class="panel-heading b-b b-light">
          <span class="badge bg-warning pull-right">10</span>
          <a href class="font-bold">Messages</a>
        </div>
        <ul class="list-group list-group-lg no-bg auto">
          <li class="list-group-item clearfix">
            <span class="pull-left thumb-sm avatar m-r">
              <img src="img/a4.jpg" alt="...">
              <i class="on b-white bottom"></i>
            </span>
            <span class="clear">
              <span>Chris Fox</span>
              <small class="text-muted clear text-ellipsis">What's up, buddy</small>
            </span>
          </li>
          <li class="list-group-item clearfix">
            <span class="pull-left thumb-sm avatar m-r">
              <img src="img/a5.jpg" alt="...">
              <i class="on b-white bottom"></i>
            </span>
            <span class="clear">
              <span>Amanda Conlan</span>
              <small class="text-muted clear text-ellipsis">Come online and we need talk about the plans that we have discussed</small>
            </span>
          </li>
          <li class="list-group-item clearfix">
            <span class="pull-left thumb-sm avatar m-r">
              <img src="img/a6.jpg" alt="...">
              <i class="busy b-white bottom"></i>
            </span>
            <span class="clear">
              <span>Dan Doorack</span>
              <small class="text-muted clear text-ellipsis">Hey, Some good news</small>
            </span>
          </li>
          <li class="list-group-item clearfix">
            <span class="pull-left thumb-sm avatar m-r">
              <img src="img/a7.jpg" alt="...">
              <i class="away b-white bottom"></i>
            </span>
            <span class="clear">
              <span>Lauren Taylor</span>
              <small class="text-muted clear text-ellipsis">Nice to talk with you.</small>
            </span>
          </li>
        </ul>
        <div class="clearfix panel-footer">
          <div class="input-group">
            <input type="text" class="form-control input-sm btn-rounded" placeholder="Search">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-default btn-sm btn-rounded"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </div>
      </div>       
    </div>
  </div>
</div> -->
    <hr>
   <!--  <hr>
   <div class="aside-wrap">
  <!-- if you want to use a custom scroll when aside fixed, use the slimScroll
    <div class="navi-wrap" ui-jq="slimScroll" ui-options="{height:'100%', size:'8px'}">
  -->
  <div class="navi-wrap">
    <!-- user -->
    <div class="clearfix hidden-xs text-center hide" id="aside-user">
      <div class="dropdown wrapper" dropdown>
        <a ui-sref="app.page.profile">
          <span class="thumb-lg w-auto-folded avatar m-t-sm">
            <img src="img/a0.jpg" class="img-full" alt="...">
          </span>
        </a>
        <a href class="dropdown-toggle hidden-folded" dropdown-toggle>
          <span class="clear">
            <span class="block m-t-sm">
              <strong class="font-bold text-lt">John.Smith</strong> 
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
              <p>300mb of 500mb used</p>
            </div>
            <progressbar value="60" type="white" class="progress-xs m-b-none dker"></progressbar>
          </li>
          <li>
            <a href>Settings</a>
          </li>
          <li>
            <a ui-sref="app.page.profile">Profile</a>
          </li>
          <li>
            <a href>
              <span class="badge bg-danger pull-right">3</span>
              Notifications
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a ui-sref="access.signin">Logout</a>
          </li>
        </ul>
        <!-- / dropdown -->
      </div>
      <div class="line dk hidden-folded"></div>
    </div>
    <!-- / user -->

    <!-- nav -->
    <nav ui-nav class="navi" ng-include="'tpl/blocks/nav.html'"></nav>
    <!-- nav -->

    <!-- aside footer -->
    <div class="wrapper m-t">
      <div class="text-center-folded">
        <span class="pull-right pull-none-folded">60%</span>
        <span class="hidden-folded" translate="aside.MILESTONE">Milestone</span>
      </div>
      <progressbar value="60" class="progress-xxs m-t-sm dk" type="info"></progressbar>
      <div class="text-center-folded">
        <span class="pull-right pull-none-folded">35%</span>
        <span class="hidden-folded" translate="aside.RELEASE">Release</span>
      </div>
      <progressbar value="35" class="progress-xxs m-t-sm dk" type="primary"></progressbar>
    </div>
    <!-- / aside footer -->
  </div>
</div>
    <hr>
   <div class="aside-wrap">
  <div class="app-aside-footer dk">    
    <div class="dropdown dropup" dropdown>
      <a href class="pull-right wrapper m-r-xs" ng-click="app.settings.asideFolded = !app.settings.asideFolded">
        <i class="fa {{app.settings.asideFolded ? 'fa-indent' : 'fa-dedent'}} fa-fw"></i>
      </a>
      <a href class="dropdown-toggle clear hidden-folded wrapper-sm padder" dropdown-toggle>
        <span class="thumb-xxs avatar pull-left m-r-sm">
          <img src="img/a0.jpg" alt="...">
        </span>
        <span class="hidden-sm hidden-md m-t-xs text-ellipsis">John.Smith</span>
      </a>      
      <!-- dropdown -->
      <ul class="dropdown-menu animated fadeInRight w">
        <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
          <div>
            <p>300mb of 500mb used</p>
          </div>
          <progressbar value="60" class="progress-xs m-b-none bg-white"></progressbar>
        </li>
        <li>
          <a href>
            <span class="badge bg-danger pull-right">30%</span>
            <span>Settings</span>
          </a>
        </li>
        <li>
          <a ui-sref="app.page.profile">Profile</a>
        </li>
        <li>
          <a ui-sref="app.docs">
            <span class="label bg-info pull-right">new</span>
            Help
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a ui-sref="access.signin">Logout</a>
        </li>
      </ul>
      <!-- / dropdown -->
    </div>
  </div>
  <div class="navi-wrap">
    <!-- nav -->
    <nav ui-nav class="navi">
      <!-- list -->
      <ul class="nav dk">
        <li class="hidden-folded padder m-t m-b-sm text-muted text-u-c text-xs">
          <span>Discovery</span>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="music.home">
            <i class="icon-disc icon"></i>
            <span>Recommendation</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="music.genres">
            <i class="icon-list icon"></i>
            <span>Genres</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="music.mtv">
            <i class="icon-social-youtube icon"></i>
            <span>MTV</span>
          </a>
        </li>
      </ul>
      <ul class="nav">
        <li class="hidden-folded padder m-t m-b-sm text-muted text-u-c text-xs">
          <span>Your Music</span>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="music.playlist({fold:'bookmarkd'})">
            <i class="icon-star icon"></i>
            <span>Bookmarked</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="music.playlist({fold:'loved'})">
            <i class="icon-heart icon"></i>
            <span>Loved</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="music.playlist({fold:'history'})">
            <i class="icon-clock icon"></i>
            <span>History</span>
          </a>
        </li>
        <li class="hidden-folded padder m-t m-b-sm text-muted text-u-c text-xs">
          <span>Playlists</span>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="music.playlist({fold:'nature'})">
            <b class="badge bg-info pull-right">3</b>
            <i class="icon-playlist icon"></i>
            <span>Nature</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="music.playlist({fold:'soundtracks'})">
            <b class="badge dk pull-right">5</b>
            <i class="icon-playlist icon"></i>
            <span>Soundtracks</span>
          </a>
        </li>
      </ul>
      <!-- / list -->
    </nav>
    <!-- nav -->    
  </div>
</div>
    <hr>
         <!-- navbar header -->
      <div class="navbar-header {{app.settings.navbarHeaderColor}}">
        <button class="pull-right visible-xs dk" ui-toggle-class="show" data-target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle-class="off-screen" data-target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">
          <i class="fa fa-btc"></i>
          <img src="img/logo.png" alt="." class="hide">
          <span class="hidden-folded m-l-xs">{{app.name}}</span>
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse box-shadow {{app.settings.navbarCollapseColor}}">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
          <a href class="btn no-shadow navbar-btn" ng-click="app.settings.asideFolded = !app.settings.asideFolded">
            <i class="fa {{app.settings.asideFolded ? 'fa-indent' : 'fa-dedent'}} fa-fw"></i>
          </a>
          <a href class="btn no-shadow navbar-btn" ui-toggle-class="show" target="#aside-user">
            <i class="icon-user fa-fw"></i>
          </a>
        </div>
        <!-- / buttons -->

        <!-- link and dropdown -->
        <ul class="nav navbar-nav hidden-sm">
          <li class="dropdown pos-stc" dropdown>
            <a href class="dropdown-toggle" dropdown-toggle>
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
          <li class="dropdown" dropdown>
            <a href class="dropdown-toggle" dropdown-toggle>
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
        <form class="navbar-form navbar-form-sm navbar-left shift" ui-shift="prependTo" target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
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
          <li class="dropdown hidden-sm" is-open="lang.isopen" dropdown>
            <a href class="dropdown-toggle" dropdown-toggle>
              {{selectLang}} <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <li ng-repeat="(langKey, label) in langs">
                <a ng-click="setLang(langKey, $event)" href>{{label}}</a>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
          <li class="hidden-xs">
            <a ui-fullscreen></a>
          </li>
          <li class="dropdown" dropdown>
            <a href class="dropdown-toggle" dropdown-toggle>
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
                      <img src="img/a0.jpg" alt="..." class="img-circle">
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
          <li class="dropdown" dropdown>
            <a href class="dropdown-toggle clear" dropdown-toggle>
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="img/a0.jpg" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
              <span class="hidden-sm hidden-md">John.Smith</span> <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
                <div>
                  <p>300mb of 500mb used</p>
                </div>
                <progressbar value="60" class="progress-xs m-b-none bg-white"></progressbar>
              </li>
              <li>
                <a href>
                  <span class="badge bg-danger pull-right">30%</span>
                  <span>Settings</span>
                </a>
              </li>
              <li>
                <a ui-sref="app.page.profile">Profile</a>
              </li>
              <li>
                <a ui-sref="app.docs">
                  <span class="label bg-info pull-right">new</span>
                  Help
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a ui-sref="access.signin">Logout</a>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->

      </div>
      <!-- / navbar collapse -->
    <hr>
         <!-- navbar header -->
      <div class="navbar-header {{app.settings.navbarHeaderColor}}">
        <button class="pull-right visible-xs dk" ui-toggle-class="show" data-target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle-class="off-screen" data-target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">
          <i class="fa fa-play-circle"></i>
          <img src="img/logo.png" alt="." class="hide">
          <span class="hidden-folded m-l-xs">MUSIC</span>
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse {{app.settings.navbarCollapseColor}}">
        <!-- search form -->
        <form class="navbar-form navbar-form-sm navbar-left no-padder" role="search" ng-controller="TypeaheadDemoCtrl">
          <div class="form-group">
            <div class="input-group w-lg w-auto-xs">
              <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control input-sm bg-light no-border padder" placeholder="Search songs and artists...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </div>
        </form>
        <!-- / search form -->
        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden-xs">
            <a ui-fullscreen></a>
          </li>
          <li class="dropdown" dropdown>
            <a href class="dropdown-toggle" dropdown-toggle>
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
                      <img src="img/a0.jpg" alt="..." class="img-circle">
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
          <li class="bg-light">
            <a href class="bg-info text-white" tooltip-placement="left" tooltip="Upload"><i class="fa fa-plus fa-fw"></i></a>
          </li>
        </ul>
        <!-- / navbar right -->

      </div>
      <!-- / navbar collapse -->
    <hr>
   <!-- list -->
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
      <span class="font-bold" translate="aside.nav.DASHBOARD">Dashboard</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href>
          <span translate="aside.nav.DASHBOARD">Dashboard</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.dashboard-v1">
          <span>Dashboard v1</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.dashboard-v2">
          <b class="label bg-info pull-right">N</b>
          <span>Dashboard v2</span>
        </a>
      </li>
    </ul>
  </li>
  <li ui-sref-active="active">
    <a ui-sref="app.calendar">
      <i class="glyphicon glyphicon-calendar icon text-info-dker"></i>
      <span class="font-bold" translate="aside.nav.CALENDAR">Calendar</span>
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
      <li ui-sref-active="active">
        <a ui-sref="app.form.select">
          <span>Select</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.form.slider">
          <span>Slider</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.form.editor">
          <span>Editor</span>
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
<!-- / list -->
    <hr>
   <p>
  <small class="text-muted">Web app framework base on Bootstrap and AngularJS<br>&copy; 2014</small>
</p>
   <hr>
   <!-- settings -->
  <button class="btn btn-default no-shadow pos-abt" ui-toggle-class="active" target=".settings">
    <i class="fa fa-spin fa-gear"></i>
  </button>
  <div class="panel-heading">
    Settings
  </div>
  <div class="panel-body"> 
    <div class="m-b-sm">
      <label class="i-switch bg-info pull-right">
        <input type="checkbox" ng-model="app.settings.headerFixed">
        <i></i>
      </label>
      Fixed header 
    </div>
    <div class="m-b-sm">
      <label class="i-switch bg-info pull-right">
        <input type="checkbox" ng-model="app.settings.asideFixed">
        <i></i>
      </label>
      Fixed aside 
    </div>
    <div class="m-b-sm">
      <label class="i-switch bg-info pull-right">
        <input type="checkbox" ng-model="app.settings.asideFolded">
        <i></i>
      </label>
      Folded aside 
    </div>
    <div class="m-b-sm">
      <label class="i-switch bg-info pull-right">
        <input type="checkbox" ng-model="app.settings.asideDock">
        <i></i>
      </label>
      Dock aside
    </div>
    <div>
      <label class="i-switch bg-info pull-right">
        <input type="checkbox" ng-model="app.settings.container">
        <i></i>
      </label>
      Boxed layout
    </div>
  </div>
  <div class="wrapper b-t b-light bg-light lter r-b">
    <div class="row row-sm">
      <div class="col-xs-6">
        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-black'; 
          app.settings.navbarCollapseColor='bg-white-only'; 
          app.settings.asideColor='bg-black';
         ">
          <input type="radio" name="a" ng-model="app.settings.themeID" value="1">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-black header"></b>
            <b class="bg-white header"></b>
            <b class="bg-black"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-dark'; 
          app.settings.navbarCollapseColor='bg-white-only'; 
          app.settings.asideColor='bg-dark';
         ">
          <input type="radio" name="a" ng-model="app.settings.themeID" value="13">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-dark header"></b>
            <b class="bg-white header"></b>
            <b class="bg-dark"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-white-only'; 
          app.settings.navbarCollapseColor='bg-white-only'; 
          app.settings.asideColor='bg-black';
         ">
          <input type="radio" ng-model="app.settings.themeID" value="2">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-white header"></b>
            <b class="bg-white header"></b>
            <b class="bg-black"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-primary'; 
          app.settings.navbarCollapseColor='bg-white-only'; 
          app.settings.asideColor='bg-dark';
         ">
          <input type="radio" ng-model="app.settings.themeID" value="3">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-primary header"></b>
            <b class="bg-white header"></b>
            <b class="bg-dark"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-info'; 
          app.settings.navbarCollapseColor='bg-white-only'; 
          app.settings.asideColor='bg-black';
         ">
          <input type="radio" ng-model="app.settings.themeID" value="4">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-info header"></b>
            <b class="bg-white header"></b>
            <b class="bg-black"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-success'; 
          app.settings.navbarCollapseColor='bg-white-only'; 
          app.settings.asideColor='bg-dark';
         ">
          <input type="radio" ng-model="app.settings.themeID" value="5">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-success header"></b>
            <b class="bg-white header"></b>
            <b class="bg-dark"></b>
          </span>
        </label>

        <label class="i-checks block" ng-click="
          app.settings.navbarHeaderColor='bg-danger'; 
          app.settings.navbarCollapseColor='bg-white-only'; 
          app.settings.asideColor='bg-dark';
         ">
          <input type="radio" ng-model="app.settings.themeID" value="6">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-danger header"></b>
            <b class="bg-white header"></b>
            <b class="bg-dark"></b>
          </span>
        </label>
      </div>
      <div class="col-xs-6">
        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-black'; 
          app.settings.navbarCollapseColor='bg-black'; 
          app.settings.asideColor='bg-white b-r';
         ">
          <input type="radio" ng-model="app.settings.themeID" value="7">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-black header"></b>
            <b class="bg-black header"></b>
            <b class="bg-white"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-dark'; 
          app.settings.navbarCollapseColor='bg-dark'; 
          app.settings.asideColor='bg-light';
         ">
          <input type="radio" name="a" ng-model="app.settings.themeID" value="14">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-dark header"></b>
            <b class="bg-dark header"></b>
            <b class="bg-light"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-info dker'; 
          app.settings.navbarCollapseColor='bg-info dker'; 
          app.settings.asideColor='bg-light dker b-r';
         ">
          <input type="radio" ng-model="app.settings.themeID" value="8">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-info dker header"></b>
            <b class="bg-info dker header"></b>
            <b class="bg-light dker"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-primary'; 
          app.settings.navbarCollapseColor='bg-primary'; 
          app.settings.asideColor='bg-dark';
         ">
          <input type="radio" ng-model="app.settings.themeID" value="9">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-primary header"></b>
            <b class="bg-primary header"></b>
            <b class="bg-dark"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-info dker'; 
          app.settings.navbarCollapseColor='bg-info dk'; 
          app.settings.asideColor='bg-black';
         ">
          <input type="radio" ng-model="app.settings.themeID" value="10">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-info dker header"></b>
            <b class="bg-info dk header"></b>
            <b class="bg-black"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-success'; 
          app.settings.navbarCollapseColor='bg-success';
          app.settings.asideColor='bg-dark';
          ">
          <input type="radio" ng-model="app.settings.themeID" value="11">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-success header"></b>
            <b class="bg-success header"></b>
            <b class="bg-dark"></b>
          </span>
        </label>
        
        <label class="i-checks block" ng-click="
          app.settings.navbarHeaderColor='bg-danger dker bg-gd'; 
          app.settings.navbarCollapseColor='bg-danger dker bg-gd'; 
          app.settings.asideColor='bg-dark';
         ">
          <input type="radio" ng-model="app.settings.themeID" value="12">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-danger dker header"></b>
            <b class="bg-danger dker header"></b>
            <b class="bg-dark"></b>
          </span>
        </label>
      </div>
    </div>
  </div>
<!-- /settings --> -->



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