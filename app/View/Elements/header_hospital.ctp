   <!-- Main Menu -->
    <nav class="navbar navbar-default navbar-fixed-top am-top-header">
        <div class="container-fluid">
          <div class="navbar-header">
            <div class="page-title"><span>
            </span></div><a href="#" class="am-toggle-left-sidebar navbar-toggle collapsed"><span class="icon-bar"><span></span><span></span><span></span></span></a><a href="index.php" class="navbar-brand"></a>
          </div><a href="#" class="am-toggle-right-sidebar"><span class="icon s7-menu2"></span></a><a href="#" data-toggle="collapse" data-target="#am-navbar-collapse" class="am-toggle-top-header-menu collapsed"><span class="icon s7-angle-down"></span></a>
          <div id="am-navbar-collapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right am-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="https://scontent-sit4-1.xx.fbcdn.net/hphotos-xla1/v/t1.0-9/12360031_965742293492339_239744005739847135_n.jpg?oh=2fd35d530cfbeef2eecd60827fe9b62f&oe=5776C5C7"><span class="user-name">Samantha Amaretti</span><span class="angle-down s7-angle-down"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <?php
                    echo $this->Html->link(
                      '<span class="icon s7-user"></span> Trang cá nhân ',
                      array (
                        'controller' => 'users',
                        'action' => 'view',
                        $auth['id']
                      ),
                      array('escape' => FALSE)
                    ); ?>
                  </li>
                  <li>
                    <?php
                    echo $this->Html->link(
                      '<span class="icon s7-config"></span> Cài đặt ',
                      array (
                        'controller' => 'users',
                        'action' => 'edit',
                        $auth['id']
                      ),
                      array('escape' => FALSE)
                    ); ?>
                  </li>
                  <li><a href="#"> <span class="icon s7-help1"></span>Trợ giúp</a></li> 
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav am-nav-right">
              <li><a href="#">Trang chủ</a></li>
              <li><a href="#">Thông tin </a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">Ngôn ngữ - Language <span class="angle-down s7-angle-down"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#">Tiếng Việt</a></li>
                  <li><a href="#">English</a></li>
                </ul>
              </li>
              <li><a href="#">Trợ Giúp</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right am-icons-nav">
             <li><?php echo $this->Html->link('<span class="icon s7-power">
               Thoát </span> ', array ('controller' => 'users', 'action' => 'logout'),array('escape' => FALSE)); ?></li>
             
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon s7-comment"></span></a>
                <ul class="dropdown-menu am-messages">
                  <li>
                    <div class="title">Tin nhắn<span class="badge">3</span></div>
                    <div class="list">
                      <div class="am-scroller nano">
                        <div class="content nano-content">
                          <ul>
                            <li class="active"><a href="#">
                                <div class="logo"><img src="/img/hospital/avatar2.jpg"></div>
                                <div class="user-content"><span class="date">ngày 25 tháng 4 </span><span class="name">Bác sỹ A </span><span class="text-content">Việc này giải quyết thế nào</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><img src="/img/hospital/avatar3.jpg"></div>
                                <div class="user-content"><span class="date">ngày 25 tháng 4</span><span class="name">Y Tá C </span><span class="text-content"> chúng tôi đã lên kế hoạch.</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><img src="/img/hospital/avatar4.jpg"></div>
                                <div class="user-content"><span class="date">ngày 25 tháng 4</span><span class="name">Giám đốc D</span><span class="text-content">Tất cả làm tốt lắm</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><img src="/img/hospital/avatar5.jpg"></div>
                                <div class="user-content"><span class="date">ngày 25 tháng 4</span><span class="name">Bệnh nhân F</span><span class="text-content"> Chúng tôi sẽ cố gắng thêm</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">Xem tất cả</a></div>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon s7-bell"></span><span class="indicator"></span></a>
                <ul class="dropdown-menu am-notifications">
                  <li>
                    <div class="title">Chú ý<span class="badge">3</span></div>
                    <div class="list">
                      <div class="am-scroller nano">
                        <div class="content nano-content">
                          <ul>
                            <li class="active"><a href="#">
                                <div class="logo"><span class="icon s7-pin"></span></div>
                                <div class="user-content"><span class="circle"></span><span class="name">Bác sỹ A</span><span class="text-content">bệnh nhân Z đang nguy kịch.</span><span class="date">2 min ago</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><span class="icon s7-add-user"></span></div>
                                <div class="user-content"><span class="name">Y Tá C</span><span class="text-content"> chúng tôi cần thêm kinh phí</span><span class="date">2 days ago</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><span class="icon s7-gleam"></span></div>
                                <div class="user-content"><span class="name">Giám đốc D</span><span class="text-content">chúng ta cần đưa việc kinh doanh này phát triển</span><span class="date">2 days ago</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><span class="icon s7-add-user"></span></div>
                                <div class="user-content"><span class="name">Bệnh nhân F</span><span class="text-content">chúng tôi đã nhận được lương sơm 5 ngày</span><span class="date">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">Kết Nối</a></div>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon s7-share"></span></a>
                <ul class="dropdown-menu am-connections">
                  <li>
                    <div class="title">Kết Nối</div>
                    <div class="list">
                      <div class="content">
                        <ul>
                          <li>
                            <div class="logo"><img src="https://www.facebook.com/images/fb_icon_325x325.png"></div>
                            <div class="field"><span>Facebook</span>
                              <div class="pull-right">
                                <div class="switch-button switch-button-sm">
                                  <input type="checkbox" checked="" name="check1" id="switch1"><span>
                                    <label for="switch1"></label></span>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="logo"><img src="https://pmcdeadline2.files.wordpress.com/2014/06/twitter-logo.png?w=970"></div>
                            <div class="field"><span>Twitter</span>
                              <div class="pull-right">
                                <div class="switch-button switch-button-sm">
                                  <input type="checkbox" name="check2" id="switch2"><span>
                                    <label for="switch2"></label></span>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="logo"><img src="https://bookswithchemistry.files.wordpress.com/2015/06/google.png"></div>
                            <div class="field"><span>Google</span>
                              <div class="pull-right">
                                <div class="switch-button switch-button-sm">
                                  <input type="checkbox" checked="" name="check3" id="switch3"><span>
                                    <label for="switch3"></label></span>
                                </div>
                              </div>
                            </div>
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">Xem tất cả kết nối</a></div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
         <!-- End Main Menu -->
      <!-- Left Menu -->
      <div class="am-left-sidebar">
        <div class="content">
          <div class="am-logo"></div>
          <ul class="sidebar-elements">
            <li class="parent"><a href="#"><i class="icon s7-home"></i><span>Tổng Quan</span></a>
              <ul class="sub-menu">
              <li><a href="/hospital/overview"><span class="label label-primary pull-right">New</span>Hôm nay</a>
                </li>
                <li><a href="/hospital/overview"><span class="label label-primary pull-right">New</span>Hôm qua</a>
                <li class="active"><a href="/hospital/overview">Ngày 12/2/2016 </a>
                </li>
                <li><a href="/hospital/overview">Ngày 11/2/2016 </a>
                </li>
                
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-note"></i><span>Tiếp Nhận Bệnh Nhân </span></a>
              <ul class="sub-menu">
                <li><a href="/hospital/receive">Tiếp Nhận Bệnh Nhân</a>
                </li>
               
              </ul>
            </li>
            <li class="parent"><a href="charts.php"><i class="icon s7-monitor"></i><span>Kết Luận </span></a>
              <ul class="sub-menu">
              <li><a href="/hospital/conclusion"><span class="label label-primary pull-right">New</span>Hôm nay</a>
                <li><a href="/hospital/conclusion">Hôm qua</a>
                </li>
                
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-ribbon"></i><span>Danh sách bệnh nhân </span></a>
              <ul class="sub-menu">
                <li><a href="/hospital/list_hospital">Danh Sách Bệnh Nhân</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-search"></i><span>Tìm kiếm bệnh nhân </span></a>
              <ul class="sub-menu">
                <li><a href="/hospital/search_hospital">Tìm kiếm bệnh nhân</a>
                </li>
                
              </ul>
            </li>
           
            <li class="parent"><a href="#"><i class="icon s7-settings"></i><span>Quản lý</span></a>
              <ul class="sub-menu">
                <li><a href="/hospital/form_hospital"><span class="label label-primary pull-right">New</span>Mẫu</a>
                </li>
                <li><a href="/hospital/makham"><span class="label label-primary pull-right">New</span>Mã khám</a>
                </li>
                <li><a href="/hospital/hethong"><span class="label label-primary pull-right">New</span>Thiết lập hệ thống</a>
                </li>
              </ul>
            </li>
             <li class="parent">
              <?php 
                echo $this->Html->link(
                  '<i class="icon s7-users"></i> Người dùng ',
                  array (
                    'controller' => 'users',
                    'action' => 'index'
                  ),
                  array('escape' => FALSE)
                );
              ?>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-browser"></i><span>Giao diện</span></a>
              <ul class="sub-menu">
                <li><a href="/hospital/giaodienquantri">Giao diện Quản trị</a>
                </li>
            
               
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-map-marker"></i><span>Địa chỉ</span></a>
              <ul class="sub-menu">
                <li><a href="#">Google Maps</a>
                </li>
                <li><a href="#">Vector Maps</a>
                </li>
              </ul>
            </li>
          </ul>
          <!--Sidebar bottom content-->
        </div>
      </div>
      <!-- End Left Menu -->