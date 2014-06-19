		<nav class="navbar-default navbar-static-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="side-menu">
					<li>
						<a href="#">Hello, <?php echo $fullname;?></a>
					</li>
					<!-- <li class="sidebar-search">
						<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div> -->
						<!-- /input-group -->
					<!-- </li> -->
					<li>
						<a href="<?php echo site_url('homepage'); ?>"><i class="fa fa-home fa-fw"></i> Homepage</a>
					</li>
					<li>
						<a href="<?php echo site_url('inbox'); ?>"><i class="fa fa-envelope fa-fw">
							</i> Inbox
							<?php if($unread_message > 0){ echo ' ('.$unread_message.')';} ?>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('news'); ?>"><i class="fa fa-pencil fa-fw"></i> News</a>
					</li>
					<li>
						<a href="<?php echo site_url('profile'); ?>"><i class="fa fa-users fa-fw"></i> Profile</a>
					</li>
					<li>
						<a href="<?php echo site_url('treatment'); ?>"><i class="fa fa-clock-o fa-fw"></i> Treatment</a>
					</li>
					<li>
						<a href="<?php echo site_url('about_us'); ?>"><i class="fa fa-star fa-fw"></i> About Us</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-user fa-fw"></i> User<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="#"><i class="fa fa-cog fa-fw"></i> User Profile</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-wrench fa-fw"></i> Setting</a>
							</li>
							<li>
								<a href="<?php echo site_url('logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</li>
						</ul>
						<!-- /.nav-second-level -->
					</li>
					<!--
					<li>
						<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="flot.html">Flot Charts</a>
							</li>
							<li>
								<a href="morris.html">Morris.js Charts</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
					</li>
					<li>
						<a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="panels-wells.html">Panels and Wells</a>
							</li>
							<li>
								<a href="buttons.html">Buttons</a>
							</li>
							<li>
								<a href="notifications.html">Notifications</a>
							</li>
							<li>
								<a href="typography.html">Typography</a>
							</li>
							<li>
								<a href="grid.html">Grid</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="#">Second Level Item</a>
							</li>
							<li>
								<a href="#">Second Level Item</a>
							</li>
							<li>
								<a href="#">Third Level <span class="fa arrow"></span></a>
								<ul class="nav nav-third-level">
									<li>
										<a href="#">Third Level Item</a>
									</li>
									<li>
										<a href="#">Third Level Item</a>
									</li>
									<li>
										<a href="#">Third Level Item</a>
									</li>
									<li>
										<a href="#">Third Level Item</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="blank.html">Blank Page</a>
							</li>
							<li>
								<a href="login.html">Login Page</a>
							</li>
						</ul>
					</li>
					-->
				</ul>
				<!-- /#side-menu -->
			</div>
			<!-- /.sidebar-collapse -->
		</nav>
		<!-- /.navbar-static-side -->