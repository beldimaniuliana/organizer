<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title ?></title>

    <meta charset=”UTF-8”>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel = "stylesheet" type = "text/css" href = "http://localhost/organizer/assets/css/organizer.css">
    <link rel = "stylesheet" type = "text/css" href = "http://localhost/organizer/assets/css/home.css">

</head>

<body>

    <div class="wrap">

        <div class="header container" >

            <nav class="menu navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">** Organizer **</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo  base_url(),"organizer/view/organizer"?>">Home</a></li>
                        <li><a href="<?php echo  base_url(),"organizer/view/summary"?>">Summary</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Others
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Learn</a></li>
                        <li><a href="#">Diagram</a></li>
                    </ul>

                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </nav>

        </div>

        <div class="main">

