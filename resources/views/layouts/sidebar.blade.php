<?php $url = url()->current(); ?>
<div class="col-md-3 left_col menu_fixed">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">

      <div class="profile_pic dashlogo">
        <a href="{{route('home')}}">
          <img src="{{asset('assets/build/images/3H Logo.png')}}" class="profile_img img-circle">
        </div>
        <div class="profile_info">
          <h2>Infant Management System</h2>
        </div>
      </a>
      
              <!-- <div class="profile_pic">
                  <img src="../build/images/3H Logo.png" alt="..." class="img-circle profile_img">
                </div> -->
              </div>
              <!-- /menu profile quick info -->

              <br />

              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <ul class="nav side-menu">
                    <li <?php if(preg_match("/dashboard/i",$url)){ ?> class="active" <?php } ?>>
                      <a href="{{route('home')}}"><i class="fa fa-home"></i> 
                        <span>Dashboard</span>
                      </a>
                    </li>
                    <li <?php if(preg_match("/parent-list/i",$url)){ ?> class="active" <?php } ?> >
                      <a href="{{route('children.index')}}"><i class="fa fa-info-circle"></i>
                        <span> Information</span>
                      </a>
                    </li>
                    <li <?php if(preg_match("/vaccn-info/i",$url)){ ?> class="active" <?php } ?>>
                      <a href="{{route('vaccination.index')}}"><i class="fa fa-edit"></i> 
                      <span>Vaccination Information</span> 
                    </a>
                  </li>
                  <li <?php if(preg_match("/complain/i",$url)){ ?> class="active" <?php } ?>>
                    <a href="{{route('complain.index')}}"><i class="fa fa-desktop"></i>
                    <span> Patient Complain</span>
                  </a>
                </li>
                <li <?php if(preg_match("/report/i",$url)){ ?> class="active" <?php } ?>>
                  <a href="{{route('report.index')}}"><i class="fa fa-table"></i> 
                  <span>Report</span>
                </a>
              </li>

            </ul>
          </div>

        </div>
        <!-- /sidebar menu -->
      </div>
    </div>
