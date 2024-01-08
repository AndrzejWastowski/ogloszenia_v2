@extends('layouts.app')

@section('content')
<!--wrapper-->
<div class="wrapper">
	<!--start header wrapper-->	
	<div class="header-wrapper">
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="topbar-logo-header">
						<div class="">
							<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
						</div>
						<div class="">
							<h4 class="logo-text">Synadmin</h4>
						</div>
					</div>
					<div class="mobile-toggle-menu d-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"><i class='bx bx-menu'></i></div>
					<div class="top-menu-left d-none d-lg-block">
						<ul class="nav">
						  <li class="nav-item">
							<a class="nav-link" href="app-emailbox.html"><i class='bx bx-envelope'></i></a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="app-chat-box.html"><i class='bx bx-message'></i></a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="app-fullcalender.html"><i class='bx bx-calendar'></i></a>
						  </li>
						  <li class="nav-item">
							  <a class="nav-link" href="app-to-do.html"><i class='bx bx-check-square'></i></a>
						  </li>
					  </ul>
					 </div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#"><i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dark-mode d-none d-sm-flex">
								<a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div class="row row-cols-3 g-3 p-3">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
											</div>
											<div class="app-title">Teams</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-burning text-white"><i class='bx bx-atom'></i>
											</div>
											<div class="app-title">Projects</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-shield'></i>
											</div>
											<div class="app-title">Tasks</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-kyoto text-dark"><i class='bx bx-notification'></i>
											</div>
											<div class="app-title">Feeds</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-blues text-dark"><i class='bx bx-file'></i>
											</div>
											<div class="app-title">Files</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-moonlit text-white"><i class='bx bx-filter-alt'></i>
											</div>
											<div class="app-title">Alerts</div>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
												ago</span></h6>
													<p class="msg-info">5 new user registered</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
												ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
												ago</span></h6>
													<p class="msg-info">The pdf files generated</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
												ago</span></h6>
													<p class="msg-info">5.1 min avarage time response</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span
												class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
												ago</span></h6>
													<p class="msg-info">New customer comments recived</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
												ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
												ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-warning text-warning"><i class='bx bx-door-open'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
												ago</span></h6>
													<p class="msg-info">45% less alerts last 4 weeks</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Notifications</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-comment'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Messages</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
												sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-3.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
												ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
												min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-5.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
												ago</span></h6>
													<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-6.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
												ago</span></h6>
													<p class="msg-info">The passage is attributed to an unknown</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-7.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
												ago</span></h6>
													<p class="msg-info">The point of using Lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
												ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-9.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
												ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-10.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
												ago</span></h6>
													<p class="msg-info">If you are going to use a passage</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
												ago</span></h6>
													<p class="msg-info">All the Lorem Ipsum generators</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Messages</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--navigation-->
		<div class="primary-menu">
			<nav class="navbar navbar-expand-lg align-items-center">
			   <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				 <div class="offcanvas-header border-bottom">
					 <div class="d-flex align-items-center">
						 <div class="">
							 <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
						 </div>
						 <div class="">
							 <h4 class="logo-text">Synadmin</h4>
						 </div>
					 </div>
				   <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				 </div>
				 <div class="offcanvas-body">
				   <ul class="navbar-nav align-items-center flex-grow-1">
					 <li class="nav-item dropdown">
						 <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
							 <div class="parent-icon"><i class='bx bx-home-alt'></i>
							 </div>
							 <div class="menu-title d-flex align-items-center">Dashboard</div>
							 <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
						 </a>
						 <ul class="dropdown-menu">
						   <li><a class="dropdown-item" href="index.html"><i class='bx bx-pie-chart-alt'></i>Analytics</a></li>
						   <li><a class="dropdown-item" href="index2.html"><i class='bx bx-shield-alt-2'></i>Sales</a></li>
						   <li><a class="dropdown-item" href="index3.html"><i class='bx bx-cart'></i>eCommerce</a></li>
						   <li><a class="dropdown-item" href="index4.html"><i class='bx bx-window-alt'></i>Alternate</a></li>
						   <li><a class="dropdown-item" href="index5.html"><i class='bx bx-briefcase'></i>Hospitality</a></li>
						 </ul>
					   </li>
					   <li class="nav-item dropdown">
						 <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
							 <div class="parent-icon"><i class='bx bx-cube'></i>
							 </div>
							 <div class="menu-title d-flex align-items-center">Apps & Pages</div>
							 <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
						 </a>
						 <ul class="dropdown-menu">
						   <li><a class="dropdown-item" href="app-emailbox.html"><i class='bx bx-envelope'></i>Email</a></li>
						   <li><a class="dropdown-item" href="app-chat-box.html"><i class='bx bx-conversation' ></i>Chat Box</a></li>
						   <li><a class="dropdown-item" href="app-file-manager.html"><i class='bx bx-file' ></i>File Manager</a></li>
						   <li><a class="dropdown-item" href="app-contact-list.html"><i class='bx bx-microphone' ></i>Contacts</a></li>
						   <li><a class="dropdown-item" href="app-to-do.html"><i class='bx bx-check-shield'></i>Todo</a></li>
						   <li><a class="dropdown-item" href="app-invoice.html"><i class='bx bx-printer' ></i>Invoice</a></li>
						   <li class="nav-item dropend">
							 <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-file'></i>Pages</a>
							 <ul class="dropdown-menu submenu">
								 <li class="nav-item dropend"><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-radio-circle'></i>Error</a>
									 <ul class="dropdown-menu">
										 <li><a class="dropdown-item" href="errors-404-error.html"><i class='bx bx-radio-circle'></i>404 Error</a></li>
										 <li><a class="dropdown-item" href="errors-500-error.html"><i class='bx bx-radio-circle'></i>500 rror</a></li>
										 <li><a class="dropdown-item" href="errors-coming-soon.html"><i class='bx bx-radio-circle'></i>Coming Soon</a></li>
										 <li><a class="dropdown-item" href="error-blank-page.html"><i class='bx bx-radio-circle'></i>Blank Page</a></li>
									   </ul>
								 </li>
								 <li><a class="dropdown-item" href="user-profile.html"><i class='bx bx-radio-circle'></i>User Profile</a></li>
								 <li><a class="dropdown-item" href="timeline.html"><i class='bx bx-radio-circle'></i>Timeline</a></li>
								 <li><a class="dropdown-item" href="faq.html"><i class='bx bx-radio-circle'></i>FAQ</a></li>
								 <li><a class="dropdown-item" href="pricing-table.html"><i class='bx bx-radio-circle'></i>Pricing</a></li>
							   </ul>
						   </li>
						 </ul>
					   </li>
					   <li class="nav-item dropdown">
						 <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
							 <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
							 </div>
							 <div class="menu-title d-flex align-items-center">Forms</div>
							 <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
						 </a>
						 <ul class="dropdown-menu">
							 <li> <a class="dropdown-item" href="form-elements.html"><i class='bx bx-message-square-dots'></i>Form Elements</a>
							 </li>
							 <li> <a class="dropdown-item" href="form-input-group.html"><i class='bx bx-book-content' ></i>Input Groups</a>
							 </li>
							 <li> <a class="dropdown-item" href="form-layouts.html"><i class='bx bx-layer'></i>Forms Layouts</a>
							 </li>
							 <li> <a class="dropdown-item" href="form-validations.html"><i class='bx bx-file-blank' ></i>Form Validation</a>
							 </li>
							 <li> <a class="dropdown-item" href="form-wizard.html"><i class='bx bx-glasses'></i>Form Wizard</a>
							 </li>
							 <li> <a class="dropdown-item" href="form-text-editor.html"><i class='bx bx-edit'></i>Text Editor</a>
							 </li>
							 <li> <a class="dropdown-item" href="form-file-upload.html"><i class='bx bx-upload'></i>File Upload</a>
							 </li>
							 <li> <a class="dropdown-item" href="form-date-time-pickes.html"><i class='bx bx-calendar-check' ></i>Date Pickers</a>
							 </li>
							 <li> <a class="dropdown-item" href="form-select2.html"><i class='bx bx-check-double'></i>Select2</a>
							 </li>
						 </ul>
					   </li>
					   <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
							<div class="parent-icon"><i class="bx bx-grid-alt"></i>
							</div>
							<div class="menu-title d-flex align-items-center">Authentication</div>
							<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="authentication-signin.html"><i class='bx bx-radio-circle'></i>Sign In</a></li>
							<li><a class="dropdown-item" href="authentication-signup.html"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
							<li><a class="dropdown-item" href="authentication-signin-with-header-footer.html"><i class='bx bx-radio-circle'></i>Sign In Header</a></li>
							<li><a class="dropdown-item" href="authentication-signup-with-header-footer.html"><i class='bx bx-radio-circle'></i>Sign Up Header</a></li>
							<li><a class="dropdown-item" href="authentication-forgot-password.html"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
							<li><a class="dropdown-item" href="authentication-reset-password.html"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
						  </ul>
					  </li>
					   <li class="nav-item dropdown">
						 <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
							 <div class="parent-icon"><i class='bx bx-briefcase-alt'></i>
							 </div>
							 <div class="menu-title d-flex align-items-center">UI Elements</div>
							 <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
						 </a>
						 <ul class="dropdown-menu">
						   <li> <a class="dropdown-item" href="widgets.html"><i class='bx bx-wine'></i>Widgets</a></li>
						   <li class="nav-item dropend">
							 <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-cart' ></i>eCommerce</a>
							 <ul class="dropdown-menu submenu">
								 <li><a class="dropdown-item" href="ecommerce-products.html"><i class='bx bx-radio-circle'></i>Products</a></li>
								 <li><a class="dropdown-item" href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Product Details</a></li>
								 <li><a class="dropdown-item" href="ecommerce-add-new-products.html"><i class='bx bx-radio-circle'></i>Add New Products</a></li>
								 <li><a class="dropdown-item" href="ecommerce-orders.html"><i class='bx bx-radio-circle'></i>Orders</a></li>
							   </ul>
						   </li>
						   <li class="nav-item dropend">
							 <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-ghost'></i>Components</a>
							 <ul class="dropdown-menu scroll-menu">
								 <li><a class="dropdown-item" href="component-alerts.html"><i class='bx bx-radio-circle'></i>Alerts</a></li>
								 <li><a class="dropdown-item" href="component-accordions.html"><i class='bx bx-radio-circle'></i>Accordions</a></li>
								 <li><a class="dropdown-item" href="component-badges.html"><i class='bx bx-radio-circle'></i>Badges</a></li>
								 <li><a class="dropdown-item" href="component-buttons.html"><i class='bx bx-radio-circle'></i>Buttons</a></li>
								 <li><a class="dropdown-item" href="component-cards.html"><i class='bx bx-radio-circle'></i>Cards</a></li>
								 <li><a class="dropdown-item" href="component-carousels.html"><i class='bx bx-radio-circle'></i>Carousels</a></li>
								 <li><a class="dropdown-item" href="component-list-groups.html"><i class='bx bx-radio-circle'></i>List Groups</a></li>
								 <li><a class="dropdown-item" href="component-media-object.html"><i class='bx bx-radio-circle'></i>Media Objects</a></li>
								 <li><a class="dropdown-item" href="component-modals.html"><i class='bx bx-radio-circle'></i>Modals</a></li>
								 <li><a class="dropdown-item" href="component-navs-tabs.html"><i class='bx bx-radio-circle'></i>Navs & Tabs</a></li>
								 <li><a class="dropdown-item" href="component-navbar.html"><i class='bx bx-radio-circle'></i>Navbar</a></li>
								 <li><a class="dropdown-item" href="component-paginations.html"><i class='bx bx-radio-circle'></i>Pagination</a></li>
								 <li><a class="dropdown-item" href="component-popovers-tooltips.html"><i class='bx bx-radio-circle'></i>Popovers & Tooltips</a></li>
								 <li><a class="dropdown-item" href="component-progress-bars.html"><i class='bx bx-radio-circle'></i>Progress</a></li>
								 <li><a class="dropdown-item" href="component-spinners.html"><i class='bx bx-radio-circle'></i>Spinners</a></li>
								 <li><a class="dropdown-item" href="component-notifications.html"><i class='bx bx-radio-circle'></i>Notifications</a></li>
								 <li><a class="dropdown-item" href="component-avtars-chips.html"><i class='bx bx-radio-circle'></i>Avatrs & Chips</a></li>
							   </ul>
						   </li>
						   <li class="nav-item dropend">
							 <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-card' ></i>Content</a>
							 <ul class="dropdown-menu submenu">
								 <li><a class="dropdown-item" href="content-grid-system.html"><i class='bx bx-radio-circle'></i>Grid System</a></li>
								 <li><a class="dropdown-item" href="content-typography.html"><i class='bx bx-radio-circle'></i>Typography</a></li>
								 <li><a class="dropdown-item" href="content-text-utilities.html"><i class='bx bx-radio-circle'></i>Text Utilities</a></li>
							   </ul>
						   </li>
						   <li class="nav-item dropend">
							 <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-droplet' ></i>Icons</a>
							 <ul class="dropdown-menu submenu">
								 <li><a class="dropdown-item" href="icons-line-icons.html"><i class='bx bx-radio-circle'></i>Line Icons</a></li>
								 <li><a class="dropdown-item" href="icons-boxicons.html"><i class='bx bx-radio-circle'></i>Boxicons</a></li>
								 <li><a class="dropdown-item" href="icons-feather-icons.html"><i class='bx bx-radio-circle'></i>Feather Icons</a></li>
							   </ul>
						   </li>
						 </ul>
					   </li>
					   <li class="nav-item dropdown">
						 <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
							 <div class="parent-icon"><i class='bx bx-line-chart'></i>
							 </div>
							 <div class="menu-title d-flex align-items-center">Charts</div>
							 <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
						 </a>
						 <ul class="dropdown-menu">
						   <li><a class="dropdown-item" href="charts-apex-chart.html"><i class='bx bx-bar-chart-alt-2' ></i>Apex</a></li>
						   <li><a class="dropdown-item" href="charts-chartjs.html"><i class='bx bx-line-chart'></i>Chartjs</a></li>
						   <li><a class="dropdown-item" href="charts-highcharts.html"><i class='bx bx-pie-chart-alt'></i>HighCharts</a></li>
						   <li class="nav-item dropend">
							 <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-map-pin'></i>Maps</a>
							 <ul class="dropdown-menu submenu">
								 <li><a class="dropdown-item" href="map-google-maps.html"><i class='bx bx-radio-circle'></i>Google Maps</a></li>
								 <li><a class="dropdown-item" href="map-vector-maps.html"><i class='bx bx-radio-circle'></i>Vector Maps</a></li>
							  </ul>
						   </li>
						 </ul>
					   </li>
					   <li class="nav-item dropdown">
						 <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
							 <div class="parent-icon"><i class="bx bx-grid-alt"></i>
							 </div>
							 <div class="menu-title d-flex align-items-center">Tables</div>
							 <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
						 </a>
						 <ul class="dropdown-menu">
						   <li><a class="dropdown-item" href="table-basic-table.html"><i class='bx bx-table'></i>Basic Table</a></li>
						   <li><a class="dropdown-item" href="table-datatable.html"><i class='bx bx-data' ></i>Data Table</a></li>
						 </ul>
					   </li>
				   </ul>
				 </div>
			   </div>
		   </nav>
	 </div>
	 <!--end navigation-->
	   </div>
	   <!--end header wrapper-->
	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

		 <div class="dash-wrapper dash-header">
			 <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-cols-xxl-5">
				 <div class="col border-end border-light-2">
					 <div class="card bg-transparent shadow-none mb-0">
						 <div class="card-body text-center">
							<p class="mb-1 text-white">Sessions</p>  
							<h3 class="mb-3 text-white">876</h3>
							<p class="font-13 text-white"><span class="text-success"><i class="lni lni-arrow-up"></i>2.1%</span> vs last 7 days</p>
							<div id="chart1"></div>
						 </div>
					 </div>
				 </div>
				 <div class="col border-end border-light-2">
					<div class="card bg-transparent shadow-none mb-0">
						<div class="card-body text-center">
						   <p class="mb-1 text-white">Total Users</p>  
						   <h3 class="mb-3 text-white">4.5M</h3>
						   <p class="font-13 text-white"><span class="text-success"><i class="lni lni-arrow-up"></i> 4.2% </span> last 7 days</p>
						   <div id="chart2"></div>
						</div>
					</div>
				</div>
				<div class="col border-end border-light-2">
					<div class="card bg-transparent shadow-none mb-0">
						<div class="card-body text-center">
						   <p class="mb-1 text-white">Page Views</p>  
						   <h3 class="mb-3 text-white">64,835</h3>
						   <p class="font-13 text-white"><span class="text-danger"><i class="lni lni-arrow-down"></i> 3.6%</span> vs last 7 days</p>
						   <div id="chart3"></div>
						</div>
					</div>
				</div>
				<div class="col border-end border-light-2">
					<div class="card bg-transparent shadow-none mb-0">
						<div class="card-body text-center">
						   <p class="mb-1 text-white">Bounce Rate</p>  
						   <h3 class="mb-3 text-white">42.68%</h3>
						   <p class="font-13 text-white"><span class="text-success"><i class="lni lni-arrow-up"></i> 2.5%</span> vs last 7 days</p>
						   <div id="chart4"></div>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card bg-transparent shadow-none mb-0">
						<div class="card-body text-center">
						   <p class="mb-1 text-white">Avg. Session Duration</p>  
						   <h3 class="mb-3 text-white">00:04:60</h3>
						   <p class="font-13 text-white"><span class="text-danger"><i class="lni lni-arrow-down"></i> 5.2%</span> vs last 7 days</p>
						   <div id="chart5"></div>
						</div>
					</div>
				</div>
			 </div><!--end row-->
		 </div>

		  <div class="row row-cols-1 row-cols-xl-2">
			<div class="col d-flex">
				<div class="card radius-10 w-100">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h6 class="mb-0">Sales Overview</h6>
							</div>
							  <div class="dropdown ms-auto">
									<button class="btn btn-white btn-sm radius-10 dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
										This Month
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<li><a class="dropdown-item" href="#">This Week</a></li>
										<li><a class="dropdown-item" href="#">This Month</a></li>
										<li><a class="dropdown-item" href="#">This Year</a></li>
									</ul>
								</div>
						</div>
					  <div id="chart6"></div>
					</div>
				</div>
			</div>
			<div class="col d-flex">
				<div class="card radius-10 w-100">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h6 class="mb-0">Visitor Status</h6>
							</div>
							<div class="d-flex align-items-center ms-auto font-13 gap-2">
								<span class="border px-1 rounded cursor-pointer"><i class='bx bxs-circle text-primary me-1'></i>New Visitor</span>
								<span class="border px-1 rounded cursor-pointer"><i class='bx bxs-circle text-sky-light me-1'></i>Old Visitor</span>
							</div>
						</div>
					  <div id="chart7"></div>
					</div>
				</div>
			</div>
		  </div><!--end row-->

		  <div class="row">
			  <div class="col-12 col-lg-8 d-flex">
				 <div class="card radius-10 w-100">
					 <div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h6 class="mb-0">Geographic</h6>
							</div>
							<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
							</div>
						</div>
						<div class="" id="geographic-map"></div>
					 </div>
				 </div>
			  </div>
			  <div class="col-12 col-lg-4 d-flex">
				<div class="card radius-10 w-100">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h6 class="mb-0">Impressions By Country</h6>
							</div>
							<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
							</div>
						</div>
					</div>
					<div class="dashboard-top-countries mb-3 p-3">

						<div class="row mb-4">
							<div class="col-2">
								<img src="assets/images/icons/united-states.png" width="42" alt="">
							</div>
							<div class="col">
								<p class="mb-2">United States <strong class="float-end">445,85</strong></p>
								<div class="progress radius-10" style="height:6px;">
									<div class="progress-bar bg-gradient-blues" role="progressbar" style="width: 86%"></div>
								</div>
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-2">
								<img src="assets/images/icons/germany.png" width="42" alt="">
							</div>
							<div class="col">
								<p class="mb-2">Germany <strong class="float-end">683,46</strong></p>
								<div class="progress radius-10" style="height:6px;">
									<div class="progress-bar bg-gradient-cosmic" role="progressbar" style="width: 66%"></div>
								</div>
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-2">
								<img src="assets/images/icons/canada.png" width="42" alt="">
							</div>
							<div class="col">
								<p class="mb-2">Canada <strong class="float-end">982,43</strong></p>
								<div class="progress radius-10" style="height:6px;">
									<div class="progress-bar bg-gradient-burning" role="progressbar" style="width: 56%"></div>
								</div>
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-2">
								<img src="assets/images/icons/india.png" width="42" alt="">
							</div>
							<div class="col">
								<p class="mb-2">India <strong class="float-end">852,35</strong></p>
								<div class="progress radius-10" style="height:6px;">
									<div class="progress-bar bg-gradient-lush" role="progressbar" style="width: 45%"></div>
								</div>
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-2">
								<img src="assets/images/icons/netherlands.png" width="42" alt="">
							</div>
							<div class="col">
								<p class="mb-2">Netherlands <strong class="float-end">785,24</strong></p>
								<div class="progress radius-10" style="height:6px;">
									<div class="progress-bar bg-gradient-kyoto" role="progressbar" style="width: 38%"></div>
								</div>
							</div>
						</div>
						<div class="row mb-0">
							<div class="col-2">
								<img src="assets/images/icons/malaysia.png" width="42" alt="">
							</div>
							<div class="col">
								<p class="mb-2">Malaysia <strong class="float-end">387,56</strong></p>
								<div class="progress radius-10" style="height:6px;">
									<div class="progress-bar bg-gradient-moonlit" role="progressbar" style="width: 28%"></div>
								</div>
							</div>
						</div>

					</div>
				</div>
			 </div>
		  </div><!--end row-->

		  <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
			<div class="col-12 col-lg-4  d-flex">
			  <div class="card radius-10 p-0 w-100 bg-transparent shadow-none">
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<p class="mb-0">New Sessions</p>
								<h5 class="mb-0">54.6%</h5>
							</div>
							<div class="widgets-icons bg-light-primary text-primary ms-auto"><i class="bx bxs-cookie"></i></div>
						</div>
						<div id="chart8"></div>
					</div>
				</div>
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<p class="mb-0">Average Pages</p>
								<h5 class="mb-0">38.5%</h5>
							</div>
							<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class="bx bxs-bookmark-alt-plus"></i></div>
						</div>
						<div id="chart9"></div>
					</div>
				</div>
				<div class="card radius-10 mb-0">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<p class="mb-0">Cloud Download</p>
								<h5 class="mb-0">24.5K</h5>
							</div>
							<div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bxs-cloud-download"></i></div>
						</div>
						<div id="chart10"></div>
					</div>
				</div>
			 </div>
			</div>
			 <div class="col-12 col-lg-4  d-flex">
				<div class="card radius-10 w-100">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h6 class="mb-0">Goal Statistics</h6>
							</div>
							<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
							</div>
						</div>
						<div id="chart11"></div>
						 <div class="row align-items-center py-2">
							 <div class="col-auto">
								<p class="mb-0">Sales</p>
							 </div>
							 <div class="col-auto">
								<p class="mb-0">1580</p>
							</div>
							<div class="col-auto">
								<p class="mb-0">875</p>
							</div>
							<div class="col">
								<div class="progress radius-10 mb-0" style="height:6px;">
									<div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
								</div>
							</div>
						 </div><!--end row-->

						 <div class="row align-items-center py-2">
							<div class="col-auto">
							   <p class="mb-0">Users</p>
							</div>
							<div class="col-auto">
							   <p class="mb-0">1852</p>
						   </div>
						   <div class="col-auto">
							   <p class="mb-0">356</p>
						   </div>
						   <div class="col">
							   <div class="progress radius-10 mb-0" style="height:6px;">
								   <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
							   </div>
						   </div>
						</div><!--end row-->
						
						<div class="row align-items-center py-2">
							<div class="col-auto">
							   <p class="mb-0">Visits</p>
							</div>
							<div class="col-auto">
							   <p class="mb-0">1280</p>
						   </div>
						   <div class="col-auto">
							   <p class="mb-0">867</p>
						   </div>
						   <div class="col">
							   <div class="progress radius-10 mb-0" style="height:6px;">
								   <div class="progress-bar bg-success" role="progressbar" style="width: 45%"></div>
							   </div>
						   </div>
						</div><!--end row-->
					</div>
				</div>
			  </div>
			  <div class="col-12 col-lg-4 d-flex">
				<div class="card radius-10 p-0 w-100 p-3">
				 <div class="card radius-10 shadow-none bg-transparent border">
					<div class="card-body">
						<div class="d-flex align-items-center justify-content-center justify-content-lg-start">
							<div id="chart12"></div>
							<div class="">
								<p class="mb-0 d-flex align-items-center"><i class='bx bx-male text-danger fs-4'></i><span class="mx-2">Male</span><span>65%</span></p>
								<p class="mb-0 d-flex align-items-center"><i class='bx bx-female text-primary fs-4'></i><span class="mx-2">Male</span><span>35%</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="card radius-10 mb-0 shadow-none bg-transparent mb-0 border">
					<div class="card-body">
						<div class="d-flex align-items-center mb-4">
							<div>
								<h6 class="mb-0">Device Type</h6>
							</div>
							<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
							</div>
						</div>
						<div class="row row-cols-3 g-3">
							<div class="col">
								<div class="d-flex gap-2">
									<h4 class="mb-1 d-flex">61 <span class="align-self-start fs-6">%</span></h4>
									<p class="mb-0 align-self-center text-success">(+8.4%)</p>
								</div>
								<p class="mb-0 d-flex align-items-center"><i class='bx bxs-circle text-info fs-6'></i><span class="mx-2">Android</span></p>
							</div>
							<div class="col">
								<div class="d-flex gap-2">
									<h4 class="mb-1 d-flex">28 <span class="align-self-start fs-6">%</span></h4>
									<p class="mb-0 align-self-center text-danger">(-1.9%)</p>
								</div>
								<p class="mb-0 d-flex align-items-center"><i class='bx bxs-circle text-success fs-6'></i><span class="mx-2">iOS</span></p>
							</div>
							<div class="col">
								<div class="d-flex gap-2">
									<h4 class="mb-1 d-flex">11 <span class="align-self-start fs-6">%</span></h4>
									<p class="mb-0 align-self-center text-success">(+6.8%)</p>
								</div>
								<p class="mb-0 d-flex align-items-center"><i class='bx bxs-circle text-warning fs-6'></i><span class="mx-2">Other</span></p>
							</div>
						</div>

						<div class="progress radius-10 mt-4" style="height: 10px">
							<div class="progress-bar bg-info" role="progressbar" style="width: 45%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
							<div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							<div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						
					</div>
				</div>
			   </div>
			  </div>
		  </div><!--end row-->

		  <div class="row">
			  <div class="col-12 col-lg-6">
				  <div class="card radius-10">
					  <div class="card-body">
						<div id="chart13"></div>
					  </div>
				  </div>
			  </div>
			  <div class="col-12 col-lg-6">
				<div class="card radius-10">
					<div class="card-body">
						<div id="chart14"></div>
					  </div>
				</div>
			</div>
		  </div><!--end row-->
		</div>
	</div>
	<!--end page wrapper -->
	<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
	<!--End Back To Top Button-->
	<footer class="page-footer">
		<p class="mb-0">Copyright © 2021. All right reserved.</p>
	</footer>
</div>
<!--end wrapper-->
@endsection
