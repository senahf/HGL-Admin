<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>HGL Admin Panel</title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700italic,700,500italic,500,400italic,300,300italic' rel='stylesheet' type='text/css'>
    <link href="assets/Materialize/dist/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="assets/chartist/dist/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="orange darken-4">
        <div class="nav-wrapper">
          <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only">
            <i class="mdi-navigation-menu"></i>
          </a>
          <span href="#" class="brand-logo page-title">
            HearthGamingLeague
          </span>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="#">
                <span class="nav-badge">3</span>
                <i class="material-icons">chat_bubble</i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="material-icons">settings</i>
              </a>
            </li>
            <li>
              <a href="#" class="tooltipped" data-position="left" data-delay="50" data-tooltip="Logout">
                <i class="material-icons">exit_to_app</i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <ul id="nav-mobile" class="side-nav custom-side-nav fixed">
        <li class="grey darken-4">
          <div class="user">
            <div class="chip grey darken-3 white-text">
              <img src="https://goo.gl/AuaWP6" alt="Contact Person">
              User here
            </div>
          </div>
        </li>
        <li>
          <a class="grey white-text darken-3 waves-effect waves-grey">
            <i class="material-icons deep-orange-text">airplay</i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a class="waves-effect waves-grey">
            <i class="material-icons">perm_identity</i>
            <span class="badge deep-orange darken-1 white-text">33</span> Users
          </a>
        </li>
        <li>
          <a class="waves-effect waves-grey">
            <i class="material-icons">clear_all</i>
            Ban List
          </a>
        </li>
        <li>
          <a class="waves-effect waves-grey">
            <i class="material-icons">trending_up</i>
            Bot Responses
          </a>
        </li>
        <li>
          <a class="waves-effect waves-grey">
            <i class="material-icons">layers</i>
            Admin Handbook
          </a>
        </li>
      </ul>
    </header>
    <main>
    <div class="breadcrumb grey lighten-3 black-text">
      <h6>
      Dashboard
      </h6>
    </div>