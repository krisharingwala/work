<?php 
  if(empty($_SESSION['log_user'])) {
  header("Location: ".base_url());
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Home</title>

    <!-- vendor css -->
    <link href="<?php echo base_url(); ?>assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/chartist/chartist.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bracket.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="#"><span>[</span>Dish Delight<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20"></label>
      <div class="br-sideleft-menu">
        <a href="admin" class="br-menu-link active">
          <div class="br-menu-item">
            <i class="menu-item-icon fa fa-home tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="admin/users" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon fa fa-users tx-22"></i>
            <span class="menu-item-label">Users</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="admin/meetings" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon fa fa-calendar tx-22"></i>
            <span class="menu-item-label">Meetings</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="admin/committeeRole" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon fa fa-calendar tx-22"></i>
            <span class="menu-item-label">Committee Role</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="admin/committee" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon fa fa-calendar tx-22"></i>
            <span class="menu-item-label">Committee</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        
        <a href="admin/amenities" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon fa fa-calendar tx-22"></i>
            <span class="menu-item-label">Amenities</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        
        <a href="admin/amenitiesBook" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon fa fa-calendar tx-22"></i>
            <span class="menu-item-label">Booked Amenities</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="admin/notice" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon fa fa-calendar tx-22"></i>
            <span class="menu-item-label">Notice</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
       
        <a href="admin/flates" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon fa fa-building tx-22"></i>
            <span class="menu-item-label">Flates</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
      </div><!-- br-sideleft-menu -->

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-ios-menu"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-ios-menu"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
          <input id="searchbox" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div><!-- input-group -->
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-mail tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
              <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
                <a href="#" class="tx-11">+ Add New Message</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="#" class="media-list-link">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Donna Seay</p>
                        <span class="tx-11 tx-gray-500">2 minutes ago</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Samantha Francis</p>
                        <span class="tx-11 tx-gray-500">3 hours ago</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Robert Walker</p>
                        <span class="tx-11 tx-gray-500">5 hours ago</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Larry Smith</p>
                        <span class="tx-11 tx-gray-500">Yesterday</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="pd-y-10 tx-center bd-t">
                  <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-notifications tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
              <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
                <a href="#" class="tx-11">Mark All as Read</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span class="tx-12">October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                      <span class="tx-12">October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                      <span class="tx-12">October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                      <span class="tx-12">October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="pd-y-10 tx-center bd-t">
                  <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down"><?php echo $logininfo[0]['fname'];?></span>
              <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="#"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li><a href="#"><i class="icon ion-ios-cog"></i> Change Password</a></li>
                <li><a href="#"><i class="icon ion-ios-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-orange-info rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-users tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-14 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Users</p>
                  <p class="tx-24 tx-white tx-lato mg-b-2 lh-1">1,975</p>
                  <span class="tx-11 tx-roboto tx-white-6"> &nbsp;</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-primary-info rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-cutlery tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-14 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Restaurant</p>
                  <p class="tx-24 tx-white tx-lato mg-b-2 lh-1"> 291</p>
                   <span class="tx-11 tx-roboto tx-white-6"> &nbsp;</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-danger-info rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-shopping-bag tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                 <p class="tx-14 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Orders</p>
                  <p class="tx-24 tx-white tx-lato mg-b-2 lh-1">29,291</p>
                  <span class="tx-11 tx-roboto tx-white-6">&nbsp;</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-teal-info rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-inr tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                   <p class="tx-14 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Earning</p>
                  <p class="tx-24 tx-white tx-lato mg-b-2 lh-1">&#8377; 35,256</p>
                  <span class="tx-11 tx-roboto tx-white-6">&nbsp;</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->

        <!---- recent orders -->
          <div class="card mg-t-10">
             <div class="card-header">
                   <span class="tx-dark tx-20 tx-bold"> Recent Orders</span>
             </div><!-- card-header -->
             <div class="card-body bd bd-t-0 rounded-bottom">
                 <div class="bd bd-gray-300 rounded table-responsive">
                    <table class="table mg-b-0">
                      <thead>
                        <tr>
                          <th>Order Id</th>
                          <th>Order Status</th>
                          <th>Price</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Tiger Nixon</td>
                          <td>&#8377; 320,800</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Garrett Winters</td>
                          <td>&#8377; 170,750</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Ashton Cox</td>
                          <td>&#8377; 86,000</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Cedric Kelly</td>
                          <td>&#8377; 433,060</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Airi Satou</td>
                          <td>&#8377; 162,700</td>
                        </tr>
                      </tbody>
                    </table>
                 </div><!-- bd -->
            </div><!-- card-body -->
          </div><!-- card -->


          <!---- New Users-->
          <div class="card mg-t-10">
             <div class="card-header">
                   <span class="tx-dark tx-20 tx-bold"> New Users</span>
             </div><!-- card-header -->
             <div class="card-body bd bd-t-0 rounded-bottom">
                 <div class="bd bd-gray-300 rounded table-responsive">
                    <table class="table mg-b-0">
                      <thead>
                        <tr>
                          <th>Order Id</th>
                          <th>Order Status</th>
                          <th>Price</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Tiger Nixon</td>
                          <td>$320,800</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Garrett Winters</td>
                          <td>$170,750</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Ashton Cox</td>
                          <td>$86,000</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Cedric Kelly</td>
                          <td>$433,060</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Airi Satou</td>
                          <td>$162,700</td>
                        </tr>
                      </tbody>
                    </table>
                 </div><!-- bd -->
            </div><!-- card-body -->
          </div><!-- card -->

      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2019. Dish Delight. All Rights Reserved.</div>
        </div>
      </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="<?php echo base_url(); ?>assets/lib/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/popper.js/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/bootstrap/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/moment/moment.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery-ui/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/peity/jquery.peity.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/chartist/chartist.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/d3/d3.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/rickshaw/rickshaw.min.js"></script>


    <script src="<?php echo base_url(); ?>assets/js/bracket.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/ResizeSensor.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
  </body>
</html>
