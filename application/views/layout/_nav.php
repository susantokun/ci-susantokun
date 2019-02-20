<nav class="navbar navbar-static-top">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<!-- Messages: style can be found in dropdown.less-->
			<li class="dropdown messages-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
				<ul class="dropdown-menu">
					<li class="header">You have 4 messages</li>
					<li>
						<!-- inner menu: contains the actual data -->
						<ul class="menu">
							<li>
								<!-- start message -->
								<a href="#">
									<div class="pull-left">
										<img src="<?php echo base_url() ?>assets/vendor/AdminLTE-2.4.3/img/user2-160x160.jpg" class="img-circle" alt="User Image">
									</div>
									<h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
									<p>Why not buy a new awesome theme?</p>
								</a>
							</li>
							<!-- end message -->
							<li>
								<a href="#">
									<div class="pull-left">
										<img src="<?php echo base_url() ?>assets/vendor/AdminLTE-2.4.3/img/user3-128x128.jpg" class="img-circle" alt="User Image">
									</div>
									<h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
									<p>Why not buy a new awesome theme?</p>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="pull-left">
										<img src="<?php echo base_url() ?>assets/vendor/AdminLTE-2.4.3/img/user4-128x128.jpg" class="img-circle" alt="User Image">
									</div>
									<h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
									<p>Why not buy a new awesome theme?</p>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="pull-left">
										<img src="<?php echo base_url() ?>assets/vendor/AdminLTE-2.4.3/img/user3-128x128.jpg" class="img-circle" alt="User Image">
									</div>
									<h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
									<p>Why not buy a new awesome theme?</p>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="pull-left">
										<img src="<?php echo base_url() ?>assets/vendor/AdminLTE-2.4.3/img/user4-128x128.jpg" class="img-circle" alt="User Image">
									</div>
									<h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
									<p>Why not buy a new awesome theme?</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="footer"><a href="#">See All Messages</a></li>
				</ul>
			</li>
			<!-- Notifications: style can be found in dropdown.less -->
			<li class="dropdown notifications-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
				<ul class="dropdown-menu">
					<li class="header">You have 10 notifications</li>
					<li>
						<!-- inner menu: contains the actual data -->
						<ul class="menu">
							<li>
								<a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
							</li>
							<li>
								<a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
							</li>
							<li>
								<a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
							</li>
							<li>
								<a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
							</li>
							<li>
								<a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
							</li>
						</ul>
					</li>
					<li class="footer"><a href="#">View all</a></li>
				</ul>
			</li>
			<!-- Tasks: style can be found in dropdown.less -->

			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('assets/upload/images/foto_profil/'.$this->session->userdata('photo')); ?>" class="user-image">
                <span class="hidden-xs"><?php echo $this->session->userdata('first_name'); ?> <?php echo $this->session->userdata('last_name'); ?></span>
            </a>
				<ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header">
						<img src="<?php echo base_url('assets/upload/images/foto_profil/'.$this->session->userdata('photo')); ?>" class="img-circle">
						<p>
							<?php echo $this->session->userdata('email'); ?>
							<small>Terakhir Masuk , <?php echo $this->session->userdata('last_login'); ?></small>
						</p>
					</li>
					<!-- Menu Footer-->
					<li class="user-footer">
						<div class="pull-left">
							<a href="<?php echo base_url() ?>auth/profile/<?php echo $this->session->userdata('id_user'); ?>" class="btn btn-default btn-flat"><i class="fa fa-user" aria-hidden="true"></i> Profil</a>
						</div>
						<div class="pull-right">
							<a href="<?php echo base_url() ?>auth/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</a>
						</div>
					</li>
				</ul>
			</li>
			<!-- Control Sidebar Toggle Button -->
		</ul>
	</div>
</nav>
