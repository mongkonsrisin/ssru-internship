<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>IT SSRU</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
	<style>
  body {
    padding-top: 80px;
		height: 100%;
  }
	.kanit {
		font-family: 'Kanit', sans-serif;
	}
	.bg-purple {
		background-color: #563d7c;
	}
  </style>
  </head>
<body <?php if($this->router->fetch_class()=='map') echo ' onload="initialize()"';?>>
  <nav class="navbar navbar-expand-lg navbar-dark bg-purple fixed-top kanit">
    <a class="navbar-brand" href="<?=base_url();?>">IT SSRU</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1)=="student"){echo 'active';}?>" href="<?=base_url();?>student/">รายชื่อนักศึกษา</a>
        </li>
				<li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1)=="company"){echo 'active';}?>" href="<?=base_url();?>company/">รายชื่อบริษัท</a>
        </li>
				<li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1)=="map"){echo 'active';}?>" href="<?=base_url();?>map/">แผนที่ทั้งหมด</a>
        </li>
				<li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1)=="zone"){echo 'active';}?>" href="<?=base_url();?>zone/">แบ่งโซน</a>
        </li>
    </div>
  </nav>
