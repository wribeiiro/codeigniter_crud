<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CI Crud Code Template</title>
    <link rel="stylesheet" href="<?php echo site_url("assets/css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>">
</head>
<body>

<div class="wrapper">

    <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>">CodeIgniter CRUD</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo site_url('user/userlist'); ?>">User List</a>

                        </li>
                        <li>
                            <a href="<?php echo site_url("user/adduser"); ?>">Add User</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("Login/login"); ?>">Login</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url("Login/registration"); ?>">Registration</a>
                        </li>
						
						

                        <li>
                            <a href="#">Logout</a>
                        </li>
						
						

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>