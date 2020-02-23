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
    <link href="<?php echo base_url(); ?>assets/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/select2/css/select2.min.css" rel="stylesheet">
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bracket.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="#"><span>[</span>Dish Delight<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20"></label>
      <div class="br-sideleft-menu">
        <a href="dashboard.html" class="br-menu-link active">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="dashboard.html" class="br-menu-link">
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
    <div class="br-mainpanel pd-y-15">
      <div class="br-pagebody" >
        <div class="br-section-wrapper">
          <div class="pd-30">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                  <h4 class="mg-r-auto tx-gray-800 mg-b-5">
                      Amenities 
                  </h4>
                </div>
                <div class="col-lg-8 col-md-12 d-flex justify-content-end">
                  <a href="#" class="btn btn-teal-info btn-with-icon" data-toggle="modal" data-target="#modal" id="add">
                    <div class="ht-35 justify-content-between">
                      <span class="icon wd-40"><i class="ion-ios-person-add tx-20"></i></span>
                      <span class="pd-15">Add New Amenities</span>
                    </div>
                  </a>
                </div>
            </div>
          </div><!-- d-flex -->

          <div id="modal" class="modal fade">
            <div class="modal-dialog" role="document">
               <form method="post" id="user_form">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  
                  <div class="pd-x-30 pd-y-10">
                    <h5 class="tx-inverse  mg-b-30 model-title">Add Amenites</h5>
                    <div class="form-group">
                       <input type="text" name="name" id="name" class="form-control pd-y-12" placeholder="Enter Name">
                    </div><!-- form-group -->
                    <div class="form-group ">
                      <input type="text" name="description" id="description" class="form-control pd-y-12" placeholder="Enter Description">
                    </div><!-- form-group -->
                    <div class="form-group ">
                      <input type="number" name="charges" id="charges" class="form-control pd-y-12" placeholder="Enter Charges">
                    </div><!-- form-group -->
                    <div class="modal-footer">  
                          <input type="hidden" name="aid" id="aid" />  
                          <input type="hidden" name="op" id="op" />  
                          <input type="submit" name="action" id="action" class="btn btn-teal pd-y-12 btn-block" value="Add" />  
                    </div> 
                  </div>
               
                </div><!-- modal-body -->
              </div><!-- modal-content -->
            </form>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
          
          
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-5p tx-center">Id</th>
                  <th class="wd-15p tx-center">Name</th>
                  <th class="wd-25p tx-center">Description</th>
                  <th class="wd-20p tx-center">Charges</th>
                  <th class="wd-10p tx-center">Status</th>
                  <th class="wd-25p tx-center">Action</th>
                </tr>
              </thead>
              <tbody>
              
              </tbody>
            </table>
          

         

        
         

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Bracket. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
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
    <script src="<?php echo base_url(); ?>assets/lib/highlightjs/highlight.pack.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/datatables-responsive/dataTables.responsive.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/select2/js/select2.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/bracket.js"></script>
    <script>
      
      $(document).ready(function(){ 
        $('#add').click(function(){  
           $('#user_form')[0].reset();  
           $('.model-title').text("Add Amenities");  
           $('#action').val("Add");
           $('#op').val("Add");
      });  

       var dataTable =  $('#datatable1').DataTable({
          "ajax": {
            url : "<?php echo base_url(); ?>amenities/displayAmenities",
            type : 'GET'
            },
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });
      // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
        $(document).on('submit', '#user_form', function(event){  
           event.preventDefault();  
           var name = $('#name').val();  
           var description = $('#description').val(); 
           var charges = $('#charges').val();  
           var aid = $('#aid').val();
           var op = $('#op').val();

           if(name != '' && description != '' && charges != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url() . 'amenities/amenities_action'?>",  
                     method:'POST',  
                     data:{amenities_name:name,description:description,charges:charges,amenities_id:aid,op:op},   
                     success:function(data)  
                     {  
                          alert(data);  
                          $('#user_form')[0].reset();  
                          $('#modal').modal('hide');  
                          dataTable.ajax.reload();  
                     }  
                });  
           }  
           else  
           {  
                alert("All Fields are Required");  
           }  
        });  
        //Edit amenities
        $(document).on('click', '.update', function(){  
           var aid = $(this).attr("id"); 
           $.ajax({  
                url:"<?php echo base_url(); ?>amenities/fetch_single_amenities",  
                method:"POST",  
                data:{aid:aid},  
                dataType:"json", 
  
                success:function(data)  
                {  
                    $('#modal').modal('show');  
                     $('#name').val(data.amenities_name);  
                     $('#description').val(data.description); 
                     $('#charges').val(data.charges);  
                     $('.model-title').text("Edit amenities");  
                     $('#aid').val(aid);    
                     $('#action').val("Edit"); 
                     $('#op').val("Edit");
                }  
           })  
        });  

        /*//Delete amenities 
         $(document).on('click', '.delete', function(){  
            var mid = $(this).attr("id");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>amenities/delete_single_amenities",  
                     method:"POST",  
                     data:{mid:mid},  
                     success:function(data)  
                     {  
                          alert(data);  
                          dataTable.ajax.reload();  
                     }  
                });  
           }  
           else  
           {  
                return false;       
           }  
      }); */ 
    });
    </script>
  </body>
</html>
