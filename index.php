 <?php
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Origin");
  ?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/styles.imageuploader.css" rel="stylesheet">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
     <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
   <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script  src="js/index.js"></script>
</head>

<body>

    <body class="sidebar-is-reduced sidebar-is-reduced sidebar-is-expanded">
        <header class="l-header head--nrespon">
            <div class="l-header__inner clearfix">
                <div class="c-header-icon js-hamburger">
                    <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
                </div>

                <div class="header-icons-group">
              
                    <ul class="nav navbar-nav cust_hdr_rig">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">
                                <div class="PRofile_text">
                                    <div class="pull-left">
                                        <img class="img-responsive IMG_profile" src="images/propic.jpg">
                                    </div>
                                    <div class="pull-left">
                                        <p class="DATE_time">Welcome</p>
                                        <h2 class="User_profile">john smith</h2>

                                    </div>
                                   <img src="images/arrow-white.png" class="img-responsive arrow-white">
                                </div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li class="dropdown-item"><a href="profile.html">Profile</a></li>
                                <!-- <li class="divider"></li> -->
                                <li class="dropdown-item"><a href="help.html">Help</a></li>
                                <!-- <li class="divider"></li> -->
                                <li class="dropdown-item"><a href="#"><span class="logout-text">Log Out</span> <img src="images/logout.png" class="logout img-responsive"></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
        </header>
        <div class="l-sidebar">
            <div class="logo">
                <div class="logo__txt">Vendor Portal</div>
            </div>
            <div class="l-sidebar__content">
                <nav class="c-menu js-menu">
                    <ul class="u-list">
                        <li class="c-menu__item is-active" data-toggle="tooltip" title="Open jobs count">
                            <div class="c-menu__item__inner"><i class="fa fa-file-text-o"></i>
                                <!-- <img class="img-responsive" src="images/custumer_icon.png"> -->
                                <div class="c-menu-item__title"><span>Open jobs count</span> <span id = "teER" class="label label-primary"></span> </div>
                            </div>
                        </li>
                        <div class="filter_text">
                            <div data-toggle="collapse" data-target="#service" class="collapsed active">
                                <a href="javascript:void(0)"><img src="images/filter.png" class="img-responsive"><span class="filter_text_fil space-gotext"> Filters 
                                    <span class="pull-right arrow"><i class="fa fa-angle-down"></i> </span>
                                    </span>
                                </a>
                            </div>
                            <ul class="sub-menu collapse" id="service">
                                <li class="active">
                                    <a href="#search">
                                        <input type="checkbox" id="chkCodeudor" /> <span class="MGNLE"> Customer </span></a>
                                </li>
                                <li>
                                    <a href="#search">
                                        <input type="checkbox" id="chkCodeudor" /> <span class="MGNLE"> City </span></a>
                                </li>
                                <li>
                                    <a href="#search">
                                        <input type="checkbox" id="chkCodeudor" /> <span class="MGNLE"> State </span></a>
                                </li>
                                <li>
                                    <a href="#search">
                                        <input type="checkbox" id="chkCodeudor" /> <span class="MGNLE"> Coordinator </span></a>
                                </li>
                                <li>
                                    <a href="#search">
                                        <input type="checkbox" id="chkCodeudor" /> <span class="MGNLE"> BG# </span></a>
                                </li>
                                <li>
                                    <a href="#search">
                                        <input type="checkbox" id="chkCodeudor" /> <span class="MGNLE"> PO# </span></a>
                                </li>
                                <li class="Apply_css">
                                    <a href="">
                                        <span class="MGNLE">Apply</span></a>
                                </li>
                            </ul>
                        </div>

                    </ul>
                </nav>
            </div>
        </div>
    </body>
    <main class="l-main">
        <div class="content-wrapper content-wrapper--with-bg">
            <div class="row middle_content">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="tittle_heading">Open jobs</h4>
                        </div>
                    </div>
                    <div class="row Custom_tablepenal">
                        <div class="col-md-12">
                            <div class="list-group">
                                <div class="table-responsive12">
                                  <!--   <table class="table"> -->
                                       <table class="table table-responsive tabletoptobtm_set"  id="myJobs">
                                        <thead>
                                            <tr>
                                         
                                                <th class="cust_class">BG#</th>
                                                <th class="cust_class">Status</th>
                                                <th class="cust_class">Customer</th>
                                                <th class="cust_col_2">Address</th>
                                                <th class="cust_class">City</th>
                                                <th class="cust_class">State</th>
                                                <th class="cust_class">Zip</th>
                                                <th class="cust_class">Scheduled Date</th>
                                                <th class="cust_class">DNE</th>
                                                <th class="cust_class">Coordinator</th>
                                                <th class="cust_class">Coordinator Phone</th>
                                                <th class="cust_class">Coordinator Email</th>
                                    <!--             <th class="cust_class">Notes</th> -->
                                            </tr>
                                        </thead>
                                        <!--Table head-->
                                        <!--Table body-->
                                        <tbody>
                                     
                                        </tbody>
                                        <!--Table body-->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row PENAL_job">
                        <!--<div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="sdow Box_penal">
                                <div class="faq-wrapper">
                                    <input id="question1" type="checkbox" name="toggle" class="question" />
                                    <label for="question1">
                                        <p>JOB INFO</p>
                                    </label>
                                    <section id="answer1">
                                        <div class="askqustion_box">
                                            <div class="form-group">
                                      <!--           <select name="category" id="cityy" class="form-control drop select_boxx">
                                                    <option>City</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select> 
                                                <input type = "text" class="form-control" value = "" id="cityy" placeholder="city" >
                                            </div>
                                            <div class="form-group">
                               <!--                  <select name="category" id="statee" class="form-control drop select_boxx">
                                                    <option>State</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select> 
                                                    <input type = "text" class="form-control" value = "" id="statee" placeholder="state" >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="customerr" placeholder=" Customer">
                                            </div>
                                            <div class="form-group">
                                                <textarea id="askcomment" placeholder="Notes"  rows="5" class="form-control" required="" name="description"></textarea>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>-->
                        <div class="col-md-4 col-sm-4 col-xs-12 mediatab-respon">
                            <div class="sdow Box_penal">
                                <div class="faq-wrapper">
                                    <input id="question1" type="checkbox" name="toggle" class="question" />
                                    <label for="question1">
                                        <p>Rate Your Codinator</p>
                                    </label>
                                    <section id="answer1">
                                        <div class="askqustion_box">
                                            <div class="rating-info">
                                                <div class="star-rating">
                                                    <div class='rating-stars text-center'>
                                                        <ul id='stars'>
                                                          <li class='star' title='Poor' data-value='1'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                          </li>
                                                          <li class='star' title='Fair' data-value='2'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                          </li>
                                                          <li class='star' title='Good' data-value='3'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                          </li>
                                                          <li class='star' title='Excellent' data-value='4'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                          </li>
                                                          <li class='star' title='WOW!!!' data-value='5'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                          </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="str-dec">
                                                    <p>If you like, choose an option below:</p>
                                                    <div class="select-oneoption">
                                                        <ul class="radiopoin-ts">
                                                            <li><input type="radio" name="rating" value="All Star Coordinator">All Star Coordinator</li>
                                                            <li><input type="radio" name="rating" value="Great Communication">Great Communication</li>
                                                            <li><input type="radio" name="rating" value="Easy To Work With">Easy To Work With</li>
                                                            <li><input type="radio" name="rating" value="Very Knowledgeable">Very Knowledgeable</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 mediatab-respon">
                            <div class="sdow Box_penal">
                                <div class="faq-wrapper">
                                    <input id="question2" type="checkbox" name="toggle" class="question" />
                                    <label for="question2">
                                        <p>SCOPE OF WORK</p>
                                    </label>
                                    <section id="answer2">
                                        <div class="askqustion_box">
                                            <div class="form-group">
                                                <textarea id="askcomment" placeholder="Enter your scope of work here.." rows="4" class="form-control" required="" name="description"></textarea>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="sdow Box_penal">
                                <div class="faq-wrapper">
                                    <input id="question3" type="checkbox" name="toggle" class="question" />
                                    <label for="question3">
                                        <p>DOCUMENTS</p>
                                    </label>
                                    <section id="answer3">
                                        <div class="askqustion_box">
                                            <div role="main" class="l-main">
                                                <div class="uploader__box js-uploader__box l-center-box">
                                                    <form action="your/nonjs/fallback/" method="POST">
                                                        <div class="uploader__contents">
                                                            <label class="button button--secondary" for="fileinput">
                                                               <i class="fas fa-plus"></i> Select Files</label>
                                                            <input id="fileinput" class="uploader__file-input" type="file" multiple value="Select Files">
                                                        </div>
                                                        <input class="button button--big-bottom" type="submit" value="Upload">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="BTN_cust pull-right">
                                            <button type="button" class="btn btn-cons Add"> <i class="glyphicon glyphicon-plus"></i> Add</button>
                                            <button type="button" class="btn btn-cons DEL"> <i class="glyphicon glyphicon-trash"></i> Delete</button>
                                        </div> -->
                                    </section>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 mediatab-respon">
                            <div class="sdow Box_penal">
                                <div class="faq-wrapper">
                                    <input id="question4" type="checkbox" name="toggle" class="question" />
                                    <label for="question4">
                                        <p>INVOICING</p>
                                    </label>
                                    <section id="answer4">
                                        <div class="table-responsive1">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <table id="myTable" class="table-responsive table table-condensed table order-list" style="border-collapse:collapse;">
                                                        <thead>
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Quantity</th>
                                                                <th>Amount</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- First Start-->
                                                            <tr data-toggle="collapse" data-target="#demo" class="accordion-toggle">
                                                                <td>
                                                                   <img src="images/arrow.png" class="img-responsive"/>Labor
                                                                </td>
                                                                <td>2</td>
                                                                <td>$100</td>
                                                                <td>$200</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="12" class="hiddenRow">
                                                                    <div class="accordian-body collapse" id="demo">
                                                                        <table class="table table-striped">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Peson1</td>
                                                                                    <td>2</td>
                                                                                    <td>$50</td>
                                                                                    <td>$100</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Peson2</td>
                                                                                    <td>2</td>
                                                                                    <td>$50</td>
                                                                                    <td>$100</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Peson3</td>
                                                                                    <td>2</td>
                                                                                    <td>$50</td>
                                                                                    <td>$100</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Peson4</td>
                                                                                    <td>2</td>
                                                                                    <td>$50</td>
                                                                                    <td>$100</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <!-- First End-->
                                                            <!-- second Start-->
                                                            <tr data-toggle="collapse" data-target="#demo2" class="accordion-toggle">
                                                                <td>
                                                                    <img src="images/arrow.png" class="img-responsive"/>Material
                                                                </td>
                                                                <td>2</td>
                                                                <td>$100</td>
                                                                <td>$200</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="12" class="hiddenRow">
                                                                    <div class="accordian-body collapse" id="demo2">
                                                                        <table class="table table-striped">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Peson1</td>
                                                                                    <td>2</td>
                                                                                    <td>$50</td>
                                                                                    <td>$100</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Peson2</td>
                                                                                    <td>2</td>
                                                                                    <td>$50</td>
                                                                                    <td>$100</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Peson3</td>
                                                                                    <td>2</td>
                                                                                    <td>$50</td>
                                                                                    <td>$100</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Peson4</td>
                                                                                    <td>2</td>
                                                                                    <td>$50</td>
                                                                                    <td>$100</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <!-- Second End -->
                                                            <!-- second Start-->
                                                            <tr data-toggle="collapse" data-target="#demo3" class="accordion-toggle">
                                                                <td>
                                                                    <img src="images/arrow.png" class="img-responsive"/>Tax
                                                                </td>
                                                                <td>2</td>
                                                                <td>$100</td>
                                                                <td>$200</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="12" class="hiddenRow" style="padding: 0px; ">
                                                                    <div class="accordian-body collapse" id="demo3">
                                                                        <table class="table table-striped">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Peson1</td>
                                                                                    <td>2</td>
                                                                                    <td>$50</td>
                                                                                    <td>$100</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Peson2</td>
                                                                                    <td>2</td>
                                                                                    <td>$50</td>
                                                                                    <td>$100</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Peson3</td>
                                                                                    <td>2</td>
                                                                                    <td>$50</td>
                                                                                    <td>$100</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Peson4</td>
                                                                                    <td>2</td>
                                                                                    <td>$50</td>
                                                                                    <td>$100</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <!-- Second End -->
                                                        </tbody>
                                                        <tr class="TOTALlast">
                                                            <td>Total</td>
                                                            <td>35</td>
                                                            <td>$258</td>
                                                            <td>$500</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="addrow" type="" class="Add_new_one"> <img class="img-responsive" src="images/addnew_icon.png"> Add new item</div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="SUbmit_btn">
                                <button type="button" class="btn btn-cons SubmiTT">Save</button>
                                <button type="button" class="btn btn-cons SubmiTT"> <i class="fas fa-check"></i> Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script> -->
    <!--  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script> -->
 <!--   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src='https://use.fontawesome.com/2188c74ac9.js'></script>
    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script> -->
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.imageuploader.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('a[href="#search"]').on('click', function(event) {
            $('#search').addClass('open');
            $('#search > form > input[type="search"]').focus();
        });
        $('#search, #search button.close').on('click keyup', function(event) {
            if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
                $(this).removeClass('open');
            }
        });
    });
    </script>
    <script type="text/javascript">
    $(function() {
        $('#chkCodeudor').click(function() {
            if ($('#chkCodeudor').is(":checked")) {
                $('#myModal').modal('show');
            } else {
                $('#myModal').modal('hide');
            }
        });
    });
    </script>
    <script type="text/javascript">
    "use strict";

    var Dashboard = function() {
        var global = {
            tooltipOptions: {
                placement: "right"
            },
            menuClass: ".c-menu"
        };

        var menuChangeActive = function menuChangeActive(el) {
            var hasSubmenu = $(el).hasClass("has-submenu");
            $(global.menuClass + " .is-active").removeClass("is-active");
            $(el).addClass("is-active");

            // if (hasSubmenu) {
            //  $(el).find("ul").slideDown();
            // }
        };

        var sidebarChangeWidth = function sidebarChangeWidth() {
            var $menuItemsTitle = $("li .menu-item__title");

            $("body").toggleClass("sidebar-is-reduced sidebar-is-expanded");
            $(".hamburger-toggle").toggleClass("is-opened");

            if ($("body").hasClass("sidebar-is-expanded")) {
                $('[data-toggle="tooltip"]').tooltip("destroy");
            } else {
                $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
            }
        };

        return {
            init: function init() {
                $(".js-hamburger").on("click", sidebarChangeWidth);

                $(".js-menu li").on("click", function(e) {
                    menuChangeActive(e.currentTarget);
                });

                $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
            }
        };
    }();

    Dashboard.init();
    //# sourceURL=pen.js
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        var counter = 0;

        $("#addrow").on("click", function() {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><i class="ibtnDel glyphicon glyphicon-trash"></i> Trip</td>';
            cols += '<td>11</td>';
            cols += '<td>$1215</td>';
            cols += '<td>$123</td>';

            /*cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';*/
            newRow.append(cols);
            $("table.order-list").append(newRow);
            counter++;
        });



        $("table.order-list").on("click", ".ibtnDel", function(event) {
            $(this).closest("tr").remove();
            counter -= 1
        });


    });



    function calculateRow(row) {
        var price = +row.find('input[name^="price"]').val();

    }

    function calculateGrandTotal() {
        var grandTotal = 0;
        $("table.order-list").find('input[name^="price"]').each(function() {
            grandTotal += +$(this).val();
        });
        $("#grandtotal").text(grandTotal.toFixed(2));
    }
    </script>
    <!-- Search Form -->
    <div id="search">
        <span class="close">X</span>
        <form role="search" id="searchform" action="/search" method="get">
            <input value="" name="q" type="search" placeholder="Type to Customer name search" />
        </form>
    </div>
    <!--     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h1>Search</h1>
                    <form class="navbar-form " role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <script type="text/javascript">
    (function() {
        var options = {};
        $('.js-uploader__box').uploader(options);
    }());
    </script>
    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

$(document).ready(function(){

   //  jQuery.support.cors = true;
    // $("button").click(function(){
        // $.ajax({
        //     url: "http://phphosting.osvin.net/vgportal/connect.php",
        //      success: function(result){
        //     alert(result);
        // }});
    // });


            /*alert('ghjhdgsdj');*/
    $.ajax(
    {
        type: "GET",
        url: "https://ginger-brownthorne.appspot.com/vendorOpenJobs?k=sdfjklsdfj28dsf6sd78v6c786dv6sd78zv6zvzcdfzd678zvzcvzv67z8cv68dfznxssj",
        //data: "{}",
        dataType: "json",
       // contentType: "application/json; charset=utf-8",
        headers: {
                    'Access-Control-Allow-Headers': 'x-requested-with' 
                },
        crossDomain: true,
        success: function (data) {
           // console.log(data);
         var trHTML = '';
                
         /*(alert(JSON.parse(data));*/
      $.each(data, function (i, item) {
        //alert(item);
      trHTML += '<tr><td class="cust_class" item="'+item.id+'" id="ab'+item.id+'">' + item.BGNumber +  '</td><td class="cust_class" item="'+item.id+'" id="ab'+item.id+'">' + item.Status +  '</td><td class="cust_class" item="'+item.id+'" id="ab'+item.id+'">' + item.Customer +  '</td><td item="'+item.id+'" class="cust_class" id="ab'+item.id+'">' + item.Address +  '</td><td item="'+item.id+'" class="cust_class" id="ab'+item.id+'">' + item.City +  '</td><td item="'+item.id+'" class="cust_class" id="ab'+item.id+'">' + item.State +  '</td><td item="'+item.id+'" class="cust_class" id="ab'+item.id+'">' + item.Zip +  '</td><td item="'+item.id+'" class="cust_class" id="ab'+item.id+'">' + item.ScheduledDate +  '</td><td item="'+item.id+'" class="cust_class" id="ab'+item.id+'">' + item.DNE +  '</td><td item="'+item.id+'" class="cust_class" id="ab'+item.id+'">' + item.Coordinator +  '</td><td item="'+item.id+'" class="cust_class" id="ab'+item.id+'">' + item.CoordinatorPhone +  '</td><td item="'+item.id+'" class="cust_class" id="ab'+item.id+'">' + item.CoordinatorEmail +  '</td></tr>';


        });
        
        $('#myJobs').append(trHTML);
        
        },
        
        // error: function (msg) {
            
        //     alert(msg.responseText);
        // }
    });

        $.ajax(
    {
        type: "GET",
        url: "https://ginger-brownthorne.appspot.com/vendorOpenJobs?k=sdfjklsdfj28dsf6sd78v6c786dv6sd78zv6zvzcdfzd678zvzcvzv67z8cv68dfznxssj",
        //data: "{}",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        headers: {
                    'Access-Control-Allow-Headers': 'x-requested-with' 
                },
        crossDomain: true,
        success: function (data) {
            var cntVal = data.length;


       document.getElementById("teER").textContent= cntVal;
    
        },
        
    });
});

</script>
</body>

</html>