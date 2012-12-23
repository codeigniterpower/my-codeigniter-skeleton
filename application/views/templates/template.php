<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>My Codeigniter Boilerplate</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="/assets/twitter-bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/twitter-bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="/assets/twitter-bootstrap/css/style.css">

    <script src="/assets/twitter-bootstrap/js/libs/jquery-1.8.3.min.js"></script>

    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-transition.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-collapse.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-transition.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-alert.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-modal.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-dropdown.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-scrollspy.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-tab.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-tooltip.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-popover.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-button.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-collapse.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-carousel.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-typeahead.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/bootstrap-affix.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/modernizr-2.6.1.custom.js"></script>
    <script src="/assets/twitter-bootstrap/js/libs/bootstrap/application.js"></script>

    <?php
    if(!empty($css_files)){
        foreach($css_files as $file):
            ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php
        endforeach;
    }
    if(!empty($js_files)){
        foreach($js_files as $file):
            ?>
        <script src="<?php echo $file; ?>"></script>
        <?php
        endforeach;
    }?>
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="javascript:void(0);">Grocery CRUD</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="dropdown"><a href="javascript:void(0);"  class="dropdown-toggle" data-toggle="dropdown">Images examples</a>
                            <ul class="dropdown-menu">
                                <li class=""><a href="/images_examples/example1"><i class="icon-share"></i>Example 1 - Simple</a></li>
                                <li class=""><a href="/images_examples/example2"><i class="icon-tasks"></i>Example 2 - Ordering</a></li>
                                <li class=""><a href="/images_examples/example3/22"><i class="icon-tasks"></i>Example 3 - With group id</a></li>
                                <li class=""><a href="/images_examples/example4"><i class="icon-tasks"></i>Example 4 - Images with title</a></li>
                                <li class=""><a href="/images_examples/simple_photo_gallery"><i class="icon-tasks"></i>Simple Photo Gallery</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0);"  class="dropdown-toggle" data-toggle="dropdown">Grocery CRUD</a>
                            <ul class="dropdown-menu">
                                <li><a href="/films" >Films</a></li>
                                <li><a href="/products" >Products</a></li>
                                <li><a href="/orders" >Orders</a></li>
                                <li><a href="/employees" >Employees</a></li>
                                <li><a href="/offices" >Offices</a></li>
                                <li><a href="/customers" >Customers</a></li>
                            </ul>
                        </li>
                        <li><a href="/testtwig" >Twig template enginner for PHP</a></li>
                        <li><a href="/auth" >Codeigniter Ion Auth</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?php
        echo (isset($output) and !is_null($output)) ? $output : '';
        if(isset($page))
            $this->load->view($page);
        ?>

        <hr>
        <footer>
            <p>&copy; Company 2012</p>
        </footer>
    </div>
</body>
</html>