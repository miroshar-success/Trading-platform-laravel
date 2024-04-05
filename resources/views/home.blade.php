<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

	<title>Connect.Ltd - Dashboard</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('css/vendors_css.css')}}">

	<!-- Style-->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/skin_color.css')}}">
	<link rel="stylesheet" href="{{asset('css/custom2.css')}}">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

	<div class="wrapper">
		<div id="loader"></div>

        @extends('layouts.header')

		@extends('layouts.sidebar')

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full">
				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-12">
							<h1 class="Heading-main">Current App Tickets</h1>
							<h4>Total Tickets: <Span>10</Span></h4>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-2">
							</div>
							<div class="col-7">
								<div class="section-tab">
									<ul>
										<li class="l1"><span><svg class="change-my-color" width="3" height="3"
													viewBox="0 0 3 3" fill="" xmlns="http://www.w3.org/2000/svg">
													<circle cx="1.28564" cy="1.28394" r="1" fill="" />
												</svg></span> All <span><svg class="change-my-color" width="3"
													height="3" viewBox="0 0 3 3" fill=""
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="1.28564" cy="1.28394" r="1" fill="" />
												</svg></span></li>
										<li class="l2"><span><svg class="change-my-color" width="3" height="3"
													viewBox="0 0 3 3" fill="" xmlns="http://www.w3.org/2000/svg">
													<circle cx="1.28564" cy="1.28394" r="1" fill="" />
												</svg></span> New <span><svg class="change-my-color" width="3"
													height="3" viewBox="0 0 3 3" fill=""
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="1.28564" cy="1.28394" r="1" fill="w" />
												</svg></span></li>
										<li class="l3"><span><svg class="change-my-color" width="3" height="3"
													viewBox="0 0 3 3" fill="" xmlns="http://www.w3.org/2000/svg">
													<circle cx="1.28564" cy="1.28394" r="1" fill="w" />
												</svg></span> In Progress <span><svg class="change-my-color" width="3"
													height="3" viewBox="0 0 3 3" fill=""
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="1.28564" cy="1.28394" r="1" fill="w" />
												</svg></span></li>
										<li class="l4"><span><svg class="change-my-color" width="3" height="3"
													viewBox="0 0 3 3" fill="" xmlns="http://www.w3.org/2000/svg">
													<circle cx="1.28564" cy="1.28394" r="1" fill="w" />
												</svg></span> In Hold <span><svg class="change-my-color" width="3"
													height="3" viewBox="0 0 3 3" fill=""
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="1.28564" cy="1.28394" r="1" fill="w" />
												</svg></span></li>
										<li class="l5"><span><svg class="change-my-color" width="3" height="3"
													viewBox="0 0 3 3" fill="" xmlns="http://www.w3.org/2000/svg">
													<circle cx="1.28564" cy="1.28394" r="1" fill="w" />
												</svg></span> In Delaeyed <span><svg class="change-my-color" width="3"
													height="3" viewBox="0 0 3 3" fill=""
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="1.28564" cy="1.28394" r="1" fill="w" />
												</svg></span></li>
										<li class="l6"><span><svg class="change-my-color" width="3" height="3"
													viewBox="0 0 3 3" fill="" xmlns="http://www.w3.org/2000/svg">
													<circle cx="1.28564" cy="1.28394" r="1" fill="w" />
												</svg></span> In Checked <span><svg class="change-my-color" width="3"
													height="3" viewBox="0 0 3 3" fill=""
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="1.28564" cy="1.28394" r="1" fill="w" />
												</svg></span></li>
										<li class="l7"><span><svg class="change-my-color" width="3" height="3"
													viewBox="0 0 3 3" fill="" xmlns="http://www.w3.org/2000/svg">
													<circle cx="1.28564" cy="1.28394" r="1" fill="w" />
												</svg></span> In Completed <span><svg class="change-my-color" width="3"
													height="3" viewBox="0 0 3 3" fill=""
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="1.28564" cy="1.28394" r="1" fill="w" />
												</svg></span></li>
									</ul>
								</div>
							</div>
							<div class="col-3">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="box">
								<div class="boxTask box-body">
									<div class="table-responsive">
										<div class="table no-border">
											<div class="main-table">
													<div class="row">
														<div class="col-12">
															<div class="Heading">
																<h3>New Tickets</h3>
															</div>
															<div class="bg-lightest">
																<div class=" bg-flex">
																	<div class=" ticket-dex-main ps-0 py-0 pt-0">
																		<div class="d-flex align-items-center">
																			<div class="uM flex-shrink-0 ml-2 me-10">
																				<div class="bg-img h-50 w-50"
																					style="background-image: url(../images/profile.png)">
																				</div>
																			</div>

																			<div class="ticket-des">
																				<a href="#"
																					class="text-dark fw-300 hover-primary mb-1 fs-16">Ticket
																					Title</a>
																				<span class=" d-block">Desribtion</span>
																			</div>
																		</div>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Date & Time
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			21.10.2022 - 19:00
																		</span>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Created by
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			Admin Name
																		</span>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Total Taks
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			Tasks: 1
																		</span>
																	</div>
																	<div class="ticket-icon-box">
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M9.89209 19.5146C14.8627 19.5146 18.8921 15.4852 18.8921 10.5146C18.8921 5.54409 14.8627 1.51465 9.89209 1.51465C4.92153 1.51465 0.89209 5.54409 0.89209 10.5146C0.89209 11.9544 1.23014 13.3151 1.83121 14.5219C1.99093 14.8426 2.0441 15.2091 1.9515 15.5552L1.41545 17.5586C1.18275 18.4283 1.9784 19.224 2.8481 18.9913L4.85154 18.4552C5.19763 18.3626 5.56418 18.4158 5.88487 18.5755C7.09162 19.1766 8.45238 19.5146 9.89209 19.5146Z" stroke="#1C274C" stroke-width="1.5"/>
																					<path opacity="0.5" d="M6.29199 10.5146H6.30009M9.88389 10.5146H9.89199M13.4839 10.5146H13.492" stroke="#1C274C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M8.51465 7.849C8.51465 6.91702 9.27017 6.1615 10.2021 6.1615C11.1341 6.1615 11.8896 6.91702 11.8896 7.849C11.8896 8.4677 11.5567 9.00863 11.0602 9.30239C10.6324 9.55549 10.2021 9.93944 10.2021 10.4365V11.5615" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<circle cx="10.2022" cy="14.2613" r="0.9" fill="#1C274C"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M10.2021 6.1615V11.5615" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<circle cx="10.2022" cy="14.2614" r="0.9" fill="#1C274C"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M12.4521 8.41152L7.95215 12.9115M7.95213 8.4115L12.4521 12.9115" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					</svg>
																			</a>
																		</span>
																	</div>
																	<div class="text-end">
																		<a href="#"
																			class="btn-sqaure waves-effect waves-light "><svg
																				width="20" height="19" viewBox="0 0 20 19"
																				fill="none" xmlns="http://www.w3.org/2000/svg">
																				<g clip-path="url(#clip0_3082_4336)">
																					<path opacity="0.5" d="M3.38574 17.3207H15.8857"
																						stroke="#1C274C" stroke-width="1.5"
																						stroke-linecap="round" />
																					<path
																						d="M11.6901 2.41554L11.1108 2.99484L5.78501 8.32061C5.42428 8.68134 5.24392 8.86171 5.0888 9.06058C4.90583 9.29517 4.74895 9.549 4.62096 9.81757C4.51245 10.0452 4.43179 10.2872 4.27047 10.7712L3.58687 12.822L3.41977 13.3233C3.34038 13.5614 3.40237 13.824 3.57989 14.0015C3.7574 14.1791 4.01998 14.241 4.25814 14.1616L4.75944 13.9945L6.81023 13.311C7.29419 13.1496 7.53618 13.069 7.76385 12.9605C8.03242 12.8325 8.28625 12.6756 8.52085 12.4926C8.71972 12.3375 8.90008 12.1571 9.26081 11.7964L14.5866 6.47064L15.1659 5.89134C16.1257 4.93152 16.1257 3.37536 15.1659 2.41554C14.2061 1.45572 12.6499 1.45572 11.6901 2.41554Z"
																						stroke="#1C274C" stroke-width="1.5" />
																					<path opacity="0.5"
																						d="M11.1108 2.995C11.1108 2.995 11.1832 4.22601 12.2694 5.31219C13.3556 6.39838 14.5866 6.47079 14.5866 6.47079M4.75948 13.9947L3.58691 12.8221"
																						stroke="#1C274C" stroke-width="1.5" />
																				</g>
																				<defs>
																					<clipPath id="clip0_3082_4336">
																						<rect width="18.75" height="18.75"
																							fill="white"
																							transform="translate(0.260742 0.133179)" />
																					</clipPath>
																				</defs>
																			</svg></a>
																		<a href="#" class="btn-sqaure waves-effect waves-light ms-30 me-10">
																			<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.5" d="M9.26074 17.1332C4.84238 17.1332 1.26059 13.5515 1.26059 9.13321C1.26059 4.71491 4.84238 1.13318 9.26074 1.13318" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																				<path d="M7.26055 9.13319H17.2607M17.2607 9.13319L14.2607 6.13318M17.2607 9.13319L14.2607 12.1332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																				</svg>
																		</a>
																	</div>
																</div>
																<div class="des-tagline ms-15 me-5">
																	<div class="bg-primary d-flex ps-2 pe-2 rounded ">
																		<p>Ticket ID: <span>Prefix</span></p>
																	<p>Start Date: <span>12.10.2012</span></p>
																	<p>Dead Line: <span>12.10.2012</span></p>
																	<p><img class="tag-img" src="../images/Rectangle.png" alt=""> <span>Developer name</span></p>
																	</div>
																	<div class="process-scene">
																		<div class="update-box">
																			<div class="box-left">
																				<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M20.7259 16.1673V12.9772C20.7259 10.712 18.8896 8.87567 16.6243 8.87567H10.2441C7.97891 8.87567 6.14258 10.712 6.14258 12.9772V16.1673C6.14258 20.1944 9.40717 23.459 13.4342 23.459C17.4613 23.459 20.7259 20.1944 20.7259 16.1673Z" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M18.1216 9.39652V8.35486C18.1216 5.76602 16.0229 3.66736 13.4341 3.66736C10.8452 3.66736 8.74658 5.76602 8.74658 8.35486V9.39652" stroke="#1C274C" stroke-width="1.5"/>
																					<path opacity="0.5" d="M20.7256 15.1257H23.8506" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M6.14258 15.1257H3.01758" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M16.0381 4.18817L18.6423 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M10.8301 4.18817L8.22591 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M22.2884 21.3759L20.2051 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M22.2884 8.87547L20.2051 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M4.57975 21.3759L6.66309 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M4.57975 8.87547L6.66309 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M13.4341 22.9382V16.1674" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					</svg>

																			</div>
																			<div class="box-right p-pink	">
																				<p><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle cx="1" cy="1" r="1" fill="white"/>
																					</svg>
																					</span> new <span><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<circle cx="1" cy="1" r="1" fill="white"/>
																						</svg>
																						</span></p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div>
																<div class="box-proces-out bg-low">
																	<div class=" bg-flex">
																		<div class=" ticket-dex-main ps-0 py-0 pt-0">
																			<div class="d-flex align-items-center">
																				<div class="uM flex-shrink-0 ml-2 me-10">
																					<div class="bg-img h-50 w-50" style="background-image: url(../images/profile.png)">
																					</div>
																				</div>

																				<div class="ticket-des">
																					<a href="#" class="text-dark fw-300 hover-primary mb-1 fs-16">Ticket
																						Title</a>
																					<span class=" d-block">Desribtion</span>
																				</div>
																			</div>
																		</div>
																		<div class="ticket-des">
																			<span class="text-dark fw-600 d-block fs-16">
																				Date &amp; Time
																			</span>
																			<span class=" fw-300 d-block fs-16">
																				21.10.2022 - 19:00
																			</span>
																		</div>
																		<div class="ticket-des">
																			<span class="text-dark fw-600 d-block fs-16">
																				Created by
																			</span>
																			<span class=" fw-300 d-block fs-16">
																				Admin Name
																			</span>
																		</div>
																		<div class="inner-end text-end">
																			<a href="#" class="btn-sqaure waves-effect waves-light "><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<g clip-path="url(#clip0_3082_4336)">
																						<path opacity="0.5" d="M3.38574 17.3207H15.8857" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path d="M11.6901 2.41554L11.1108 2.99484L5.78501 8.32061C5.42428 8.68134 5.24392 8.86171 5.0888 9.06058C4.90583 9.29517 4.74895 9.549 4.62096 9.81757C4.51245 10.0452 4.43179 10.2872 4.27047 10.7712L3.58687 12.822L3.41977 13.3233C3.34038 13.5614 3.40237 13.824 3.57989 14.0015C3.7574 14.1791 4.01998 14.241 4.25814 14.1616L4.75944 13.9945L6.81023 13.311C7.29419 13.1496 7.53618 13.069 7.76385 12.9605C8.03242 12.8325 8.28625 12.6756 8.52085 12.4926C8.71972 12.3375 8.90008 12.1571 9.26081 11.7964L14.5866 6.47064L15.1659 5.89134C16.1257 4.93152 16.1257 3.37536 15.1659 2.41554C14.2061 1.45572 12.6499 1.45572 11.6901 2.41554Z" stroke="#1C274C" stroke-width="1.5"></path>
																						<path opacity="0.5" d="M11.1108 2.995C11.1108 2.995 11.1832 4.22601 12.2694 5.31219C13.3556 6.39838 14.5866 6.47079 14.5866 6.47079M4.75948 13.9947L3.58691 12.8221" stroke="#1C274C" stroke-width="1.5"></path>
																					</g>
																					<defs>
																						<clipPath id="clip0_3082_4336">
																							<rect width="18.75" height="18.75" fill="white" transform="translate(0.260742 0.133179)"></rect>
																						</clipPath>
																					</defs>
																				</svg></a>
																		</div>
																	</div>
																	<div class="des-tagline ms-15 me-5">
																		<div class="bg-primary d-flex ps-2 pe-2 rounded ">
																			<p>Ticket ID: <span>Prefix</span></p>
																		<p>Start Date: <span>12.10.2012</span></p>
																		<p>Dead Line: <span>12.10.2012</span></p>
																		<p><img class="tag-img" src="../images/Rectangle.png" alt=""> <span>Developer name</span></p>
																		</div>
																		<div class="process-scene">
																			<div class="update-box">
																				<div class="box-left">
																					<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<path d="M20.7259 16.1673V12.9772C20.7259 10.712 18.8896 8.87567 16.6243 8.87567H10.2441C7.97891 8.87567 6.14258 10.712 6.14258 12.9772V16.1673C6.14258 20.1944 9.40717 23.459 13.4342 23.459C17.4613 23.459 20.7259 20.1944 20.7259 16.1673Z" stroke="#1C274C" stroke-width="1.5"></path>
																						<path d="M18.1216 9.39652V8.35486C18.1216 5.76602 16.0229 3.66736 13.4341 3.66736C10.8452 3.66736 8.74658 5.76602 8.74658 8.35486V9.39652" stroke="#1C274C" stroke-width="1.5"></path>
																						<path opacity="0.5" d="M20.7256 15.1257H23.8506" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M6.14258 15.1257H3.01758" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M16.0381 4.18817L18.6423 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M10.8301 4.18817L8.22591 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M22.2884 21.3759L20.2051 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M22.2884 8.87547L20.2051 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M4.57975 21.3759L6.66309 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M4.57975 8.87547L6.66309 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M13.4341 22.9382V16.1674" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						</svg>

																				</div>
																				<div class="box-right p-pink">
																					<p><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<circle cx="1" cy="1" r="1" fill="white"></circle>
																						</svg>
																						 new <span><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<circle cx="1" cy="1" r="1" fill="white"></circle>
																							</svg>
																							</span></p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-12">
															<div class="Heading">
																<h3>Tickets In Progess</h3>
															</div>
															<div class="bg-lightest">
																<div class=" bg-flex">
																	<div class=" ticket-dex-main ps-0 py-0 pt-0">
																		<div class="d-flex align-items-center">
																			<div class="uM flex-shrink-0 ml-2 me-10">
																				<div class="bg-img h-50 w-50"
																					style="background-image: url(../images/profile.png)">
																				</div>
																			</div>

																			<div class="ticket-des">
																				<a href="#"
																					class="text-dark fw-300 hover-primary mb-1 fs-16">Ticket
																					Title</a>
																				<span class=" d-block">Desribtion</span>
																			</div>
																		</div>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Date & Time
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			21.10.2022 - 19:00
																		</span>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Created by
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			Admin Name
																		</span>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Total Taks
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			Tasks: 1
																		</span>
																	</div>
																	<div class="ticket-icon-box">
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M9.89209 19.5146C14.8627 19.5146 18.8921 15.4852 18.8921 10.5146C18.8921 5.54409 14.8627 1.51465 9.89209 1.51465C4.92153 1.51465 0.89209 5.54409 0.89209 10.5146C0.89209 11.9544 1.23014 13.3151 1.83121 14.5219C1.99093 14.8426 2.0441 15.2091 1.9515 15.5552L1.41545 17.5586C1.18275 18.4283 1.9784 19.224 2.8481 18.9913L4.85154 18.4552C5.19763 18.3626 5.56418 18.4158 5.88487 18.5755C7.09162 19.1766 8.45238 19.5146 9.89209 19.5146Z" stroke="#1C274C" stroke-width="1.5"/>
																					<path opacity="0.5" d="M6.29199 10.5146H6.30009M9.88389 10.5146H9.89199M13.4839 10.5146H13.492" stroke="#1C274C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M8.51465 7.849C8.51465 6.91702 9.27017 6.1615 10.2021 6.1615C11.1341 6.1615 11.8896 6.91702 11.8896 7.849C11.8896 8.4677 11.5567 9.00863 11.0602 9.30239C10.6324 9.55549 10.2021 9.93944 10.2021 10.4365V11.5615" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<circle cx="10.2022" cy="14.2613" r="0.9" fill="#1C274C"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M10.2021 6.1615V11.5615" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<circle cx="10.2022" cy="14.2614" r="0.9" fill="#1C274C"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M12.4521 8.41152L7.95215 12.9115M7.95213 8.4115L12.4521 12.9115" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					</svg>
																			</a>
																		</span>
																	</div>
																	<div class="text-end">
																		<a href="#"
																			class="btn-sqaure waves-effect waves-light "><svg
																				width="20" height="19" viewBox="0 0 20 19"
																				fill="none" xmlns="http://www.w3.org/2000/svg">
																				<g clip-path="url(#clip0_3082_4336)">
																					<path opacity="0.5" d="M3.38574 17.3207H15.8857"
																						stroke="#1C274C" stroke-width="1.5"
																						stroke-linecap="round" />
																					<path
																						d="M11.6901 2.41554L11.1108 2.99484L5.78501 8.32061C5.42428 8.68134 5.24392 8.86171 5.0888 9.06058C4.90583 9.29517 4.74895 9.549 4.62096 9.81757C4.51245 10.0452 4.43179 10.2872 4.27047 10.7712L3.58687 12.822L3.41977 13.3233C3.34038 13.5614 3.40237 13.824 3.57989 14.0015C3.7574 14.1791 4.01998 14.241 4.25814 14.1616L4.75944 13.9945L6.81023 13.311C7.29419 13.1496 7.53618 13.069 7.76385 12.9605C8.03242 12.8325 8.28625 12.6756 8.52085 12.4926C8.71972 12.3375 8.90008 12.1571 9.26081 11.7964L14.5866 6.47064L15.1659 5.89134C16.1257 4.93152 16.1257 3.37536 15.1659 2.41554C14.2061 1.45572 12.6499 1.45572 11.6901 2.41554Z"
																						stroke="#1C274C" stroke-width="1.5" />
																					<path opacity="0.5"
																						d="M11.1108 2.995C11.1108 2.995 11.1832 4.22601 12.2694 5.31219C13.3556 6.39838 14.5866 6.47079 14.5866 6.47079M4.75948 13.9947L3.58691 12.8221"
																						stroke="#1C274C" stroke-width="1.5" />
																				</g>
																				<defs>
																					<clipPath id="clip0_3082_4336">
																						<rect width="18.75" height="18.75"
																							fill="white"
																							transform="translate(0.260742 0.133179)" />
																					</clipPath>
																				</defs>
																			</svg></a>
																		<a href="#" class="btn-sqaure waves-effect waves-light ms-30 me-10">
																			<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.5" d="M9.26074 17.1332C4.84238 17.1332 1.26059 13.5515 1.26059 9.13321C1.26059 4.71491 4.84238 1.13318 9.26074 1.13318" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																				<path d="M7.26055 9.13319H17.2607M17.2607 9.13319L14.2607 6.13318M17.2607 9.13319L14.2607 12.1332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																				</svg>
																		</a>
																	</div>
																</div>
																<div class="des-tagline ms-15 me-5">
																	<div class="bg-primary d-flex ps-2 pe-2 rounded ">
																		<p>Ticket ID: <span>Prefix</span></p>
																	<p>Start Date: <span>12.10.2012</span></p>
																	<p>Dead Line: <span>12.10.2012</span></p>
																	<p><img class="tag-img" src="../images/Rectangle.png" alt=""> <span>Developer name</span></p>
																	</div>
																	<div class="process-scene">
																		<div class="update-box">
																			<div class="box-left">
																				<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M20.7259 16.1673V12.9772C20.7259 10.712 18.8896 8.87567 16.6243 8.87567H10.2441C7.97891 8.87567 6.14258 10.712 6.14258 12.9772V16.1673C6.14258 20.1944 9.40717 23.459 13.4342 23.459C17.4613 23.459 20.7259 20.1944 20.7259 16.1673Z" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M18.1216 9.39652V8.35486C18.1216 5.76602 16.0229 3.66736 13.4341 3.66736C10.8452 3.66736 8.74658 5.76602 8.74658 8.35486V9.39652" stroke="#1C274C" stroke-width="1.5"/>
																					<path opacity="0.5" d="M20.7256 15.1257H23.8506" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M6.14258 15.1257H3.01758" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M16.0381 4.18817L18.6423 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M10.8301 4.18817L8.22591 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M22.2884 21.3759L20.2051 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M22.2884 8.87547L20.2051 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M4.57975 21.3759L6.66309 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M4.57975 8.87547L6.66309 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M13.4341 22.9382V16.1674" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					</svg>

																			</div>
																			<div class="box-right p-blue">
																				<p><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle cx="1" cy="1" r="1" fill="white"/>
																					</svg>
																					</span> In Progress <span><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<circle cx="1" cy="1" r="1" fill="white"/>
																						</svg>
																						</span></p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-12">
															<div class="Heading">
																<h3>Tickets In Hold</h3>
															</div>
															<div class="bg-lightest">
																<div class=" bg-flex">
																	<div class=" ticket-dex-main ps-0 py-0 pt-0">
																		<div class="d-flex align-items-center">
																			<div class="uM flex-shrink-0 ml-2 me-10">
																				<div class="bg-img h-50 w-50"
																					style="background-image: url(../images/profile.png)">
																				</div>
																			</div>

																			<div class="ticket-des">
																				<a href="#"
																					class="text-dark fw-300 hover-primary mb-1 fs-16">Ticket
																					Title</a>
																				<span class=" d-block">Desribtion</span>
																			</div>
																		</div>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Date & Time
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			21.10.2022 - 19:00
																		</span>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Created by
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			Admin Name
																		</span>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Total Taks
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			Tasks: 1
																		</span>
																	</div>
																	<div class="ticket-icon-box">
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M9.89209 19.5146C14.8627 19.5146 18.8921 15.4852 18.8921 10.5146C18.8921 5.54409 14.8627 1.51465 9.89209 1.51465C4.92153 1.51465 0.89209 5.54409 0.89209 10.5146C0.89209 11.9544 1.23014 13.3151 1.83121 14.5219C1.99093 14.8426 2.0441 15.2091 1.9515 15.5552L1.41545 17.5586C1.18275 18.4283 1.9784 19.224 2.8481 18.9913L4.85154 18.4552C5.19763 18.3626 5.56418 18.4158 5.88487 18.5755C7.09162 19.1766 8.45238 19.5146 9.89209 19.5146Z" stroke="#1C274C" stroke-width="1.5"/>
																					<path opacity="0.5" d="M6.29199 10.5146H6.30009M9.88389 10.5146H9.89199M13.4839 10.5146H13.492" stroke="#1C274C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M8.51465 7.849C8.51465 6.91702 9.27017 6.1615 10.2021 6.1615C11.1341 6.1615 11.8896 6.91702 11.8896 7.849C11.8896 8.4677 11.5567 9.00863 11.0602 9.30239C10.6324 9.55549 10.2021 9.93944 10.2021 10.4365V11.5615" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<circle cx="10.2022" cy="14.2613" r="0.9" fill="#1C274C"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M10.2021 6.1615V11.5615" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<circle cx="10.2022" cy="14.2614" r="0.9" fill="#1C274C"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M12.4521 8.41152L7.95215 12.9115M7.95213 8.4115L12.4521 12.9115" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					</svg>
																			</a>
																		</span>
																	</div>
																	<div class="text-end">
																		<a href="#"
																			class="btn-sqaure waves-effect waves-light "><svg
																				width="20" height="19" viewBox="0 0 20 19"
																				fill="none" xmlns="http://www.w3.org/2000/svg">
																				<g clip-path="url(#clip0_3082_4336)">
																					<path opacity="0.5" d="M3.38574 17.3207H15.8857"
																						stroke="#1C274C" stroke-width="1.5"
																						stroke-linecap="round" />
																					<path
																						d="M11.6901 2.41554L11.1108 2.99484L5.78501 8.32061C5.42428 8.68134 5.24392 8.86171 5.0888 9.06058C4.90583 9.29517 4.74895 9.549 4.62096 9.81757C4.51245 10.0452 4.43179 10.2872 4.27047 10.7712L3.58687 12.822L3.41977 13.3233C3.34038 13.5614 3.40237 13.824 3.57989 14.0015C3.7574 14.1791 4.01998 14.241 4.25814 14.1616L4.75944 13.9945L6.81023 13.311C7.29419 13.1496 7.53618 13.069 7.76385 12.9605C8.03242 12.8325 8.28625 12.6756 8.52085 12.4926C8.71972 12.3375 8.90008 12.1571 9.26081 11.7964L14.5866 6.47064L15.1659 5.89134C16.1257 4.93152 16.1257 3.37536 15.1659 2.41554C14.2061 1.45572 12.6499 1.45572 11.6901 2.41554Z"
																						stroke="#1C274C" stroke-width="1.5" />
																					<path opacity="0.5"
																						d="M11.1108 2.995C11.1108 2.995 11.1832 4.22601 12.2694 5.31219C13.3556 6.39838 14.5866 6.47079 14.5866 6.47079M4.75948 13.9947L3.58691 12.8221"
																						stroke="#1C274C" stroke-width="1.5" />
																				</g>
																				<defs>
																					<clipPath id="clip0_3082_4336">
																						<rect width="18.75" height="18.75"
																							fill="white"
																							transform="translate(0.260742 0.133179)" />
																					</clipPath>
																				</defs>
																			</svg></a>
																		<a href="#" class="btn-sqaure waves-effect waves-light ms-30 me-10">
																			<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.5" d="M9.26074 17.1332C4.84238 17.1332 1.26059 13.5515 1.26059 9.13321C1.26059 4.71491 4.84238 1.13318 9.26074 1.13318" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																				<path d="M7.26055 9.13319H17.2607M17.2607 9.13319L14.2607 6.13318M17.2607 9.13319L14.2607 12.1332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																				</svg>
																		</a>
																	</div>
																</div>
																<div class="des-tagline ms-15 me-5">
																	<div class="bg-primary d-flex ps-2 pe-2 rounded ">
																		<p>Ticket ID: <span>Prefix</span></p>
																	<p>Start Date: <span>12.10.2012</span></p>
																	<p>Dead Line: <span>12.10.2012</span></p>
																	<p><img class="tag-img" src="../images/Rectangle.png" alt=""> <span>Developer name</span></p>
																	</div>
																	<div class="process-scene">
																		<div class="update-box">
																			<div class="box-left">
																				<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M20.7259 16.1673V12.9772C20.7259 10.712 18.8896 8.87567 16.6243 8.87567H10.2441C7.97891 8.87567 6.14258 10.712 6.14258 12.9772V16.1673C6.14258 20.1944 9.40717 23.459 13.4342 23.459C17.4613 23.459 20.7259 20.1944 20.7259 16.1673Z" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M18.1216 9.39652V8.35486C18.1216 5.76602 16.0229 3.66736 13.4341 3.66736C10.8452 3.66736 8.74658 5.76602 8.74658 8.35486V9.39652" stroke="#1C274C" stroke-width="1.5"/>
																					<path opacity="0.5" d="M20.7256 15.1257H23.8506" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M6.14258 15.1257H3.01758" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M16.0381 4.18817L18.6423 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M10.8301 4.18817L8.22591 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M22.2884 21.3759L20.2051 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M22.2884 8.87547L20.2051 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M4.57975 21.3759L6.66309 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M4.57975 8.87547L6.66309 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M13.4341 22.9382V16.1674" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					</svg>

																			</div>
																			<div class="box-right p-Yello">
																				<p><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle cx="1" cy="1" r="1" fill="white"/>
																					</svg>
																					</span> In Hold <span><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<circle cx="1" cy="1" r="1" fill="white"/>
																						</svg>
																						</span></p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-12">
															<div class="Heading">
																<h3>New Tickets</h3>
															</div>
															<div class="bg-lightest">
																<div class=" bg-flex">
																	<div class=" ticket-dex-main ps-0 py-0 pt-0">
																		<div class="d-flex align-items-center">
																			<div class="uM flex-shrink-0 ml-2 me-10">
																				<div class="bg-img h-50 w-50"
																					style="background-image: url(../images/profile.png)">
																				</div>
																			</div>

																			<div class="ticket-des">
																				<a href="#"
																					class="text-dark fw-300 hover-primary mb-1 fs-16">Ticket
																					Title</a>
																				<span class=" d-block">Desribtion</span>
																			</div>
																		</div>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Date & Time
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			21.10.2022 - 19:00
																		</span>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Created by
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			Admin Name
																		</span>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Total Taks
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			Tasks: 1
																		</span>
																	</div>
																	<div class="ticket-icon-box">
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M9.89209 19.5146C14.8627 19.5146 18.8921 15.4852 18.8921 10.5146C18.8921 5.54409 14.8627 1.51465 9.89209 1.51465C4.92153 1.51465 0.89209 5.54409 0.89209 10.5146C0.89209 11.9544 1.23014 13.3151 1.83121 14.5219C1.99093 14.8426 2.0441 15.2091 1.9515 15.5552L1.41545 17.5586C1.18275 18.4283 1.9784 19.224 2.8481 18.9913L4.85154 18.4552C5.19763 18.3626 5.56418 18.4158 5.88487 18.5755C7.09162 19.1766 8.45238 19.5146 9.89209 19.5146Z" stroke="#1C274C" stroke-width="1.5"/>
																					<path opacity="0.5" d="M6.29199 10.5146H6.30009M9.88389 10.5146H9.89199M13.4839 10.5146H13.492" stroke="#1C274C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M8.51465 7.849C8.51465 6.91702 9.27017 6.1615 10.2021 6.1615C11.1341 6.1615 11.8896 6.91702 11.8896 7.849C11.8896 8.4677 11.5567 9.00863 11.0602 9.30239C10.6324 9.55549 10.2021 9.93944 10.2021 10.4365V11.5615" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<circle cx="10.2022" cy="14.2613" r="0.9" fill="#1C274C"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M10.2021 6.1615V11.5615" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<circle cx="10.2022" cy="14.2614" r="0.9" fill="#1C274C"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M12.4521 8.41152L7.95215 12.9115M7.95213 8.4115L12.4521 12.9115" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					</svg>
																			</a>
																		</span>
																	</div>
																	<div class="text-end">
																		<a href="#"
																			class="btn-sqaure waves-effect waves-light "><svg
																				width="20" height="19" viewBox="0 0 20 19"
																				fill="none" xmlns="http://www.w3.org/2000/svg">
																				<g clip-path="url(#clip0_3082_4336)">
																					<path opacity="0.5" d="M3.38574 17.3207H15.8857"
																						stroke="#1C274C" stroke-width="1.5"
																						stroke-linecap="round" />
																					<path
																						d="M11.6901 2.41554L11.1108 2.99484L5.78501 8.32061C5.42428 8.68134 5.24392 8.86171 5.0888 9.06058C4.90583 9.29517 4.74895 9.549 4.62096 9.81757C4.51245 10.0452 4.43179 10.2872 4.27047 10.7712L3.58687 12.822L3.41977 13.3233C3.34038 13.5614 3.40237 13.824 3.57989 14.0015C3.7574 14.1791 4.01998 14.241 4.25814 14.1616L4.75944 13.9945L6.81023 13.311C7.29419 13.1496 7.53618 13.069 7.76385 12.9605C8.03242 12.8325 8.28625 12.6756 8.52085 12.4926C8.71972 12.3375 8.90008 12.1571 9.26081 11.7964L14.5866 6.47064L15.1659 5.89134C16.1257 4.93152 16.1257 3.37536 15.1659 2.41554C14.2061 1.45572 12.6499 1.45572 11.6901 2.41554Z"
																						stroke="#1C274C" stroke-width="1.5" />
																					<path opacity="0.5"
																						d="M11.1108 2.995C11.1108 2.995 11.1832 4.22601 12.2694 5.31219C13.3556 6.39838 14.5866 6.47079 14.5866 6.47079M4.75948 13.9947L3.58691 12.8221"
																						stroke="#1C274C" stroke-width="1.5" />
																				</g>
																				<defs>
																					<clipPath id="clip0_3082_4336">
																						<rect width="18.75" height="18.75"
																							fill="white"
																							transform="translate(0.260742 0.133179)" />
																					</clipPath>
																				</defs>
																			</svg></a>
																		<a href="#" class="btn-sqaure waves-effect waves-light ms-30 me-10">
																			<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.5" d="M9.26074 17.1332C4.84238 17.1332 1.26059 13.5515 1.26059 9.13321C1.26059 4.71491 4.84238 1.13318 9.26074 1.13318" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																				<path d="M7.26055 9.13319H17.2607M17.2607 9.13319L14.2607 6.13318M17.2607 9.13319L14.2607 12.1332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																				</svg>
																		</a>
																	</div>
																</div>
																<div class="des-tagline ms-15 me-5">
																	<div class="bg-primary d-flex ps-2 pe-2 rounded ">
																		<p>Ticket ID: <span>Prefix</span></p>
																	<p>Start Date: <span>12.10.2012</span></p>
																	<p>Dead Line: <span>12.10.2012</span></p>
																	<p><img class="tag-img" src="../images/Rectangle.png" alt=""> <span>Developer name</span></p>
																	</div>
																	<div class="process-scene">
																		<div class="update-box">
																			<div class="box-left">
																				<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M20.7259 16.1673V12.9772C20.7259 10.712 18.8896 8.87567 16.6243 8.87567H10.2441C7.97891 8.87567 6.14258 10.712 6.14258 12.9772V16.1673C6.14258 20.1944 9.40717 23.459 13.4342 23.459C17.4613 23.459 20.7259 20.1944 20.7259 16.1673Z" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M18.1216 9.39652V8.35486C18.1216 5.76602 16.0229 3.66736 13.4341 3.66736C10.8452 3.66736 8.74658 5.76602 8.74658 8.35486V9.39652" stroke="#1C274C" stroke-width="1.5"/>
																					<path opacity="0.5" d="M20.7256 15.1257H23.8506" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M6.14258 15.1257H3.01758" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M16.0381 4.18817L18.6423 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M10.8301 4.18817L8.22591 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M22.2884 21.3759L20.2051 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M22.2884 8.87547L20.2051 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M4.57975 21.3759L6.66309 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M4.57975 8.87547L6.66309 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M13.4341 22.9382V16.1674" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					</svg>

																			</div>
																			<div class="box-right p-red	">
																				<p><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle cx="1" cy="1" r="1" fill="white"/>
																					</svg>
																					</span> In Delayed <span><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<circle cx="1" cy="1" r="1" fill="white"/>
																						</svg>
																						</span></p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div>
																<div class="box-proces-out bg-low">
																	<div class=" bg-flex">
																		<div class=" ticket-dex-main ps-0 py-0 pt-0">
																			<div class="d-flex align-items-center">
																				<div class="uM flex-shrink-0 ml-2 me-10">
																					<div class="bg-img h-50 w-50" style="background-image: url(../images/profile.png)">
																					</div>
																				</div>

																				<div class="ticket-des">
																					<a href="#" class="text-dark fw-300 hover-primary mb-1 fs-16">Ticket
																						Title</a>
																					<span class=" d-block">Desribtion</span>
																				</div>
																			</div>
																		</div>
																		<div class="ticket-des">
																			<span class="text-dark fw-600 d-block fs-16">
																				Date &amp; Time
																			</span>
																			<span class=" fw-300 d-block fs-16">
																				21.10.2022 - 19:00
																			</span>
																		</div>
																		<div class="ticket-des">
																			<span class="text-dark fw-600 d-block fs-16">
																				Created by
																			</span>
																			<span class=" fw-300 d-block fs-16">
																				Admin Name
																			</span>
																		</div>
																		<div class="inner-end text-end">
																			<a href="#" class="btn-sqaure waves-effect waves-light "><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<g clip-path="url(#clip0_3082_4336)">
																						<path opacity="0.5" d="M3.38574 17.3207H15.8857" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path d="M11.6901 2.41554L11.1108 2.99484L5.78501 8.32061C5.42428 8.68134 5.24392 8.86171 5.0888 9.06058C4.90583 9.29517 4.74895 9.549 4.62096 9.81757C4.51245 10.0452 4.43179 10.2872 4.27047 10.7712L3.58687 12.822L3.41977 13.3233C3.34038 13.5614 3.40237 13.824 3.57989 14.0015C3.7574 14.1791 4.01998 14.241 4.25814 14.1616L4.75944 13.9945L6.81023 13.311C7.29419 13.1496 7.53618 13.069 7.76385 12.9605C8.03242 12.8325 8.28625 12.6756 8.52085 12.4926C8.71972 12.3375 8.90008 12.1571 9.26081 11.7964L14.5866 6.47064L15.1659 5.89134C16.1257 4.93152 16.1257 3.37536 15.1659 2.41554C14.2061 1.45572 12.6499 1.45572 11.6901 2.41554Z" stroke="#1C274C" stroke-width="1.5"></path>
																						<path opacity="0.5" d="M11.1108 2.995C11.1108 2.995 11.1832 4.22601 12.2694 5.31219C13.3556 6.39838 14.5866 6.47079 14.5866 6.47079M4.75948 13.9947L3.58691 12.8221" stroke="#1C274C" stroke-width="1.5"></path>
																					</g>
																					<defs>
																						<clipPath id="clip0_3082_4336">
																							<rect width="18.75" height="18.75" fill="white" transform="translate(0.260742 0.133179)"></rect>
																						</clipPath>
																					</defs>
																				</svg></a>
																		</div>
																	</div>
																	<div class="des-tagline ms-15 me-5">
																		<div class="bg-primary d-flex ps-2 pe-2 rounded ">
																			<p>Ticket ID: <span>Prefix</span></p>
																		<p>Start Date: <span>12.10.2012</span></p>
																		<p>Dead Line: <span>12.10.2012</span></p>
																		<p><img class="tag-img" src="../images/Rectangle.png" alt=""> <span>Developer name</span></p>
																		</div>
																		<div class="process-scene">
																			<div class="update-box">
																				<div class="box-left">
																					<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<path d="M20.7259 16.1673V12.9772C20.7259 10.712 18.8896 8.87567 16.6243 8.87567H10.2441C7.97891 8.87567 6.14258 10.712 6.14258 12.9772V16.1673C6.14258 20.1944 9.40717 23.459 13.4342 23.459C17.4613 23.459 20.7259 20.1944 20.7259 16.1673Z" stroke="#1C274C" stroke-width="1.5"></path>
																						<path d="M18.1216 9.39652V8.35486C18.1216 5.76602 16.0229 3.66736 13.4341 3.66736C10.8452 3.66736 8.74658 5.76602 8.74658 8.35486V9.39652" stroke="#1C274C" stroke-width="1.5"></path>
																						<path opacity="0.5" d="M20.7256 15.1257H23.8506" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M6.14258 15.1257H3.01758" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M16.0381 4.18817L18.6423 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M10.8301 4.18817L8.22591 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M22.2884 21.3759L20.2051 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M22.2884 8.87547L20.2051 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M4.57975 21.3759L6.66309 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M4.57975 8.87547L6.66309 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						<path opacity="0.5" d="M13.4341 22.9382V16.1674" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
																						</svg>

																				</div>
																				<div class="box-right p-red">
																					<p><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<circle cx="1" cy="1" r="1" fill="white"></circle>
																						</svg>
																						 In Delayed <span><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<circle cx="1" cy="1" r="1" fill="white"></circle>
																							</svg>
																							</span></p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-12">
															<div class="Heading">
																<h3>Tickets In Check</h3>
															</div>
															<div class="bg-lightest">
																<div class=" bg-flex">
																	<div class=" ticket-dex-main ps-0 py-0 pt-0">
																		<div class="d-flex align-items-center">
																			<div class="uM flex-shrink-0 ml-2 me-10">
																				<div class="bg-img h-50 w-50"
																					style="background-image: url(../images/profile.png)">
																				</div>
																			</div>

																			<div class="ticket-des">
																				<a href="#"
																					class="text-dark fw-300 hover-primary mb-1 fs-16">Ticket
																					Title</a>
																				<span class=" d-block">Desribtion</span>
																			</div>
																		</div>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Date & Time
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			21.10.2022 - 19:00
																		</span>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Created by
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			Admin Name
																		</span>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Total Taks
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			Tasks: 1
																		</span>
																	</div>
																	<div class="ticket-icon-box">
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M9.89209 19.5146C14.8627 19.5146 18.8921 15.4852 18.8921 10.5146C18.8921 5.54409 14.8627 1.51465 9.89209 1.51465C4.92153 1.51465 0.89209 5.54409 0.89209 10.5146C0.89209 11.9544 1.23014 13.3151 1.83121 14.5219C1.99093 14.8426 2.0441 15.2091 1.9515 15.5552L1.41545 17.5586C1.18275 18.4283 1.9784 19.224 2.8481 18.9913L4.85154 18.4552C5.19763 18.3626 5.56418 18.4158 5.88487 18.5755C7.09162 19.1766 8.45238 19.5146 9.89209 19.5146Z" stroke="#1C274C" stroke-width="1.5"/>
																					<path opacity="0.5" d="M6.29199 10.5146H6.30009M9.88389 10.5146H9.89199M13.4839 10.5146H13.492" stroke="#1C274C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M8.51465 7.849C8.51465 6.91702 9.27017 6.1615 10.2021 6.1615C11.1341 6.1615 11.8896 6.91702 11.8896 7.849C11.8896 8.4677 11.5567 9.00863 11.0602 9.30239C10.6324 9.55549 10.2021 9.93944 10.2021 10.4365V11.5615" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<circle cx="10.2022" cy="14.2613" r="0.9" fill="#1C274C"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M10.2021 6.1615V11.5615" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<circle cx="10.2022" cy="14.2614" r="0.9" fill="#1C274C"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M12.4521 8.41152L7.95215 12.9115M7.95213 8.4115L12.4521 12.9115" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					</svg>
																			</a>
																		</span>
																	</div>
																	<div class="text-end">
																		<a href="#"
																			class="btn-sqaure waves-effect waves-light "><svg
																				width="20" height="19" viewBox="0 0 20 19"
																				fill="none" xmlns="http://www.w3.org/2000/svg">
																				<g clip-path="url(#clip0_3082_4336)">
																					<path opacity="0.5" d="M3.38574 17.3207H15.8857"
																						stroke="#1C274C" stroke-width="1.5"
																						stroke-linecap="round" />
																					<path
																						d="M11.6901 2.41554L11.1108 2.99484L5.78501 8.32061C5.42428 8.68134 5.24392 8.86171 5.0888 9.06058C4.90583 9.29517 4.74895 9.549 4.62096 9.81757C4.51245 10.0452 4.43179 10.2872 4.27047 10.7712L3.58687 12.822L3.41977 13.3233C3.34038 13.5614 3.40237 13.824 3.57989 14.0015C3.7574 14.1791 4.01998 14.241 4.25814 14.1616L4.75944 13.9945L6.81023 13.311C7.29419 13.1496 7.53618 13.069 7.76385 12.9605C8.03242 12.8325 8.28625 12.6756 8.52085 12.4926C8.71972 12.3375 8.90008 12.1571 9.26081 11.7964L14.5866 6.47064L15.1659 5.89134C16.1257 4.93152 16.1257 3.37536 15.1659 2.41554C14.2061 1.45572 12.6499 1.45572 11.6901 2.41554Z"
																						stroke="#1C274C" stroke-width="1.5" />
																					<path opacity="0.5"
																						d="M11.1108 2.995C11.1108 2.995 11.1832 4.22601 12.2694 5.31219C13.3556 6.39838 14.5866 6.47079 14.5866 6.47079M4.75948 13.9947L3.58691 12.8221"
																						stroke="#1C274C" stroke-width="1.5" />
																				</g>
																				<defs>
																					<clipPath id="clip0_3082_4336">
																						<rect width="18.75" height="18.75"
																							fill="white"
																							transform="translate(0.260742 0.133179)" />
																					</clipPath>
																				</defs>
																			</svg></a>
																		<a href="#" class="btn-sqaure waves-effect waves-light ms-30 me-10">
																			<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.5" d="M9.26074 17.1332C4.84238 17.1332 1.26059 13.5515 1.26059 9.13321C1.26059 4.71491 4.84238 1.13318 9.26074 1.13318" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																				<path d="M7.26055 9.13319H17.2607M17.2607 9.13319L14.2607 6.13318M17.2607 9.13319L14.2607 12.1332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																				</svg>
																		</a>
																	</div>
																</div>
																<div class="des-tagline ms-15 me-5">
																	<div class="bg-primary d-flex ps-2 pe-2 rounded ">
																		<p>Ticket ID: <span>Prefix</span></p>
																	<p>Start Date: <span>12.10.2012</span></p>
																	<p>Dead Line: <span>12.10.2012</span></p>
																	<p><img class="tag-img" src="../images/Rectangle.png" alt=""> <span>Developer name</span></p>
																	</div>
																	<div class="process-scene">
																		<div class="update-box">
																			<div class="box-left">
																				<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M20.7259 16.1673V12.9772C20.7259 10.712 18.8896 8.87567 16.6243 8.87567H10.2441C7.97891 8.87567 6.14258 10.712 6.14258 12.9772V16.1673C6.14258 20.1944 9.40717 23.459 13.4342 23.459C17.4613 23.459 20.7259 20.1944 20.7259 16.1673Z" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M18.1216 9.39652V8.35486C18.1216 5.76602 16.0229 3.66736 13.4341 3.66736C10.8452 3.66736 8.74658 5.76602 8.74658 8.35486V9.39652" stroke="#1C274C" stroke-width="1.5"/>
																					<path opacity="0.5" d="M20.7256 15.1257H23.8506" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M6.14258 15.1257H3.01758" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M16.0381 4.18817L18.6423 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M10.8301 4.18817L8.22591 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M22.2884 21.3759L20.2051 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M22.2884 8.87547L20.2051 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M4.57975 21.3759L6.66309 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M4.57975 8.87547L6.66309 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M13.4341 22.9382V16.1674" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					</svg>

																			</div>
																			<div class="box-right p-grey">
																				<p><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle cx="1" cy="1" r="1" fill="white"/>
																					</svg>
																					</span> In Checking <span><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<circle cx="1" cy="1" r="1" fill="white"/>
																						</svg>
																						</span></p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-12">
															<div class="Heading">
																<h3>Tickets In Check</h3>
															</div>
															<div class="bg-lightest">
																<div class=" bg-flex">
																	<div class=" ticket-dex-main ps-0 py-0 pt-0">
																		<div class="d-flex align-items-center">
																			<div class="uM flex-shrink-0 ml-2 me-10">
																				<div class="bg-img h-50 w-50"
																					style="background-image: url(../images/profile.png)">
																				</div>
																			</div>

																			<div class="ticket-des">
																				<a href="#"
																					class="text-dark fw-300 hover-primary mb-1 fs-16">Ticket
																					Title</a>
																				<span class=" d-block">Desribtion</span>
																			</div>
																		</div>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Date & Time
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			21.10.2022 - 19:00
																		</span>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Created by
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			Admin Name
																		</span>
																	</div>
																	<div class="ticket-des">
																		<span class="text-dark fw-600 d-block fs-16">
																			Total Taks
																		</span>
																		<span class=" fw-300 d-block fs-16">
																			Tasks: 1
																		</span>
																	</div>
																	<div class="ticket-icon-box">
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M9.89209 19.5146C14.8627 19.5146 18.8921 15.4852 18.8921 10.5146C18.8921 5.54409 14.8627 1.51465 9.89209 1.51465C4.92153 1.51465 0.89209 5.54409 0.89209 10.5146C0.89209 11.9544 1.23014 13.3151 1.83121 14.5219C1.99093 14.8426 2.0441 15.2091 1.9515 15.5552L1.41545 17.5586C1.18275 18.4283 1.9784 19.224 2.8481 18.9913L4.85154 18.4552C5.19763 18.3626 5.56418 18.4158 5.88487 18.5755C7.09162 19.1766 8.45238 19.5146 9.89209 19.5146Z" stroke="#1C274C" stroke-width="1.5"/>
																					<path opacity="0.5" d="M6.29199 10.5146H6.30009M9.88389 10.5146H9.89199M13.4839 10.5146H13.492" stroke="#1C274C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M8.51465 7.849C8.51465 6.91702 9.27017 6.1615 10.2021 6.1615C11.1341 6.1615 11.8896 6.91702 11.8896 7.849C11.8896 8.4677 11.5567 9.00863 11.0602 9.30239C10.6324 9.55549 10.2021 9.93944 10.2021 10.4365V11.5615" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<circle cx="10.2022" cy="14.2613" r="0.9" fill="#1C274C"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M10.2021 6.1615V11.5615" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<circle cx="10.2022" cy="14.2614" r="0.9" fill="#1C274C"/>
																					</svg>
																			</a>
																		</span>
																		<span class="bg-circle-icon">
																			<a href="">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle opacity="0.5" cx="10.2021" cy="10.6615" r="9" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M12.4521 8.41152L7.95215 12.9115M7.95213 8.4115L12.4521 12.9115" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					</svg>
																			</a>
																		</span>
																	</div>
																	<div class="text-end">
																		<a href="#"
																			class="btn-sqaure waves-effect waves-light "><svg
																				width="20" height="19" viewBox="0 0 20 19"
																				fill="none" xmlns="http://www.w3.org/2000/svg">
																				<g clip-path="url(#clip0_3082_4336)">
																					<path opacity="0.5" d="M3.38574 17.3207H15.8857"
																						stroke="#1C274C" stroke-width="1.5"
																						stroke-linecap="round" />
																					<path
																						d="M11.6901 2.41554L11.1108 2.99484L5.78501 8.32061C5.42428 8.68134 5.24392 8.86171 5.0888 9.06058C4.90583 9.29517 4.74895 9.549 4.62096 9.81757C4.51245 10.0452 4.43179 10.2872 4.27047 10.7712L3.58687 12.822L3.41977 13.3233C3.34038 13.5614 3.40237 13.824 3.57989 14.0015C3.7574 14.1791 4.01998 14.241 4.25814 14.1616L4.75944 13.9945L6.81023 13.311C7.29419 13.1496 7.53618 13.069 7.76385 12.9605C8.03242 12.8325 8.28625 12.6756 8.52085 12.4926C8.71972 12.3375 8.90008 12.1571 9.26081 11.7964L14.5866 6.47064L15.1659 5.89134C16.1257 4.93152 16.1257 3.37536 15.1659 2.41554C14.2061 1.45572 12.6499 1.45572 11.6901 2.41554Z"
																						stroke="#1C274C" stroke-width="1.5" />
																					<path opacity="0.5"
																						d="M11.1108 2.995C11.1108 2.995 11.1832 4.22601 12.2694 5.31219C13.3556 6.39838 14.5866 6.47079 14.5866 6.47079M4.75948 13.9947L3.58691 12.8221"
																						stroke="#1C274C" stroke-width="1.5" />
																				</g>
																				<defs>
																					<clipPath id="clip0_3082_4336">
																						<rect width="18.75" height="18.75"
																							fill="white"
																							transform="translate(0.260742 0.133179)" />
																					</clipPath>
																				</defs>
																			</svg></a>
																		<a href="#" class="btn-sqaure waves-effect waves-light ms-30 me-10">
																			<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.5" d="M9.26074 17.1332C4.84238 17.1332 1.26059 13.5515 1.26059 9.13321C1.26059 4.71491 4.84238 1.13318 9.26074 1.13318" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																				<path d="M7.26055 9.13319H17.2607M17.2607 9.13319L14.2607 6.13318M17.2607 9.13319L14.2607 12.1332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																				</svg>
																		</a>
																	</div>
																</div>
																<div class="des-tagline ms-15 me-5">
																	<div class="bg-primary d-flex ps-2 pe-2 rounded ">
																		<p>Ticket ID: <span>Prefix</span></p>
																	<p>Start Date: <span>12.10.2012</span></p>
																	<p>Dead Line: <span>12.10.2012</span></p>
																	<p><img class="tag-img" src="../images/Rectangle.png" alt=""> <span>Developer name</span></p>
																	</div>
																	<div class="process-scene">
																		<div class="update-box">
																			<div class="box-left">
																				<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M20.7259 16.1673V12.9772C20.7259 10.712 18.8896 8.87567 16.6243 8.87567H10.2441C7.97891 8.87567 6.14258 10.712 6.14258 12.9772V16.1673C6.14258 20.1944 9.40717 23.459 13.4342 23.459C17.4613 23.459 20.7259 20.1944 20.7259 16.1673Z" stroke="#1C274C" stroke-width="1.5"/>
																					<path d="M18.1216 9.39652V8.35486C18.1216 5.76602 16.0229 3.66736 13.4341 3.66736C10.8452 3.66736 8.74658 5.76602 8.74658 8.35486V9.39652" stroke="#1C274C" stroke-width="1.5"/>
																					<path opacity="0.5" d="M20.7256 15.1257H23.8506" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M6.14258 15.1257H3.01758" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M16.0381 4.18817L18.6423 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M10.8301 4.18817L8.22591 2.62567" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M22.2884 21.3759L20.2051 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M22.2884 8.87547L20.2051 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M4.57975 21.3759L6.66309 20.5425" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M4.57975 8.87547L6.66309 9.7088" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					<path opacity="0.5" d="M13.4341 22.9382V16.1674" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
																					</svg>

																			</div>
																			<div class="box-right p-green">
																				<p><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<circle cx="1" cy="1" r="1" fill="white"/>
																					</svg>
																					</span> In Compelet <span><svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<circle cx="1" cy="1" r="1" fill="white"/>
																						</svg>
																						</span></p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- /.content -->
			</div>
		</div>
		<!-- /.content-wrapper -->

        @extends('layouts.footer')

		<!-- Control Sidebar -->
		<aside class="control-sidebar">

			<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i
						class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>
			<!-- Create the tabs -->
			<ul class="nav nav-tabs control-sidebar-tabs">
				<li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i
							class="mdi mdi-message-text"></i></a></li>
				<li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i
							class="mdi mdi-playlist-check"></i></a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Home tab content -->
				<div class="tab-pane active" id="control-sidebar-home-tab">
					<div class="flexbox">
						<a href="javascript:void(0)" class="text-grey">
							<i class="ti-more"></i>
						</a>
						<p>Users</p>
						<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
					</div>
					<div class="lookup lookup-sm lookup-right d-none d-lg-block">
						<input type="text" name="s" placeholder="Search" class="w-p100">
					</div>
					<div class="media-list media-list-hover mt-20">
						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-success" href="#">
								<img src="../images/avatar/1.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="fs-16">
									<a class="hover-primary" href="#"><strong>Tyler</strong></a>
								</p>
								<p>Praesent tristique diam...</p>
								<span>Just now</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-danger" href="#">
								<img src="../images/avatar/2.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="fs-16">
									<a class="hover-primary" href="#"><strong>Luke</strong></a>
								</p>
								<p>Cras tempor diam ...</p>
								<span>33 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-warning" href="#">
								<img src="../images/avatar/3.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="fs-16">
									<a class="hover-primary" href="#"><strong>Evan</strong></a>
								</p>
								<p>In posuere tortor vel...</p>
								<span>42 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-primary" href="#">
								<img src="../images/avatar/4.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="fs-16">
									<a class="hover-primary" href="#"><strong>Evan</strong></a>
								</p>
								<p>In posuere tortor vel...</p>
								<span>42 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-success" href="#">
								<img src="../images/avatar/1.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="fs-16">
									<a class="hover-primary" href="#"><strong>Tyler</strong></a>
								</p>
								<p>Praesent tristique diam...</p>
								<span>Just now</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-danger" href="#">
								<img src="../images/avatar/2.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="fs-16">
									<a class="hover-primary" href="#"><strong>Luke</strong></a>
								</p>
								<p>Cras tempor diam ...</p>
								<span>33 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-warning" href="#">
								<img src="../images/avatar/3.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="fs-16">
									<a class="hover-primary" href="#"><strong>Evan</strong></a>
								</p>
								<p>In posuere tortor vel...</p>
								<span>42 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-primary" href="#">
								<img src="../images/avatar/4.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="fs-16">
									<a class="hover-primary" href="#"><strong>Evan</strong></a>
								</p>
								<p>In posuere tortor vel...</p>
								<span>42 min ago</span>
							</div>
						</div>

					</div>

				</div>
				<!-- /.tab-pane -->
				<!-- Settings tab content -->
				<div class="tab-pane" id="control-sidebar-settings-tab">
					<div class="flexbox">
						<a href="javascript:void(0)" class="text-grey">
							<i class="ti-more"></i>
						</a>
						<p>Todo List</p>
						<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
					</div>
					<ul class="todo-list mt-20">
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_1" class="filled-in">
							<label for="basic_checkbox_1" class="mb-0 h-15"></label>
							<!-- todo text -->
							<span class="text-line">Nulla vitae purus</span>
							<!-- Emphasis label -->
							<small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
							<!-- General tools such as edit or delete-->
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_2" class="filled-in">
							<label for="basic_checkbox_2" class="mb-0 h-15"></label>
							<span class="text-line">Phasellus interdum</span>
							<small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_3" class="filled-in">
							<label for="basic_checkbox_3" class="mb-0 h-15"></label>
							<span class="text-line">Quisque sodales</span>
							<small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_4" class="filled-in">
							<label for="basic_checkbox_4" class="mb-0 h-15"></label>
							<span class="text-line">Proin nec mi porta</span>
							<small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_5" class="filled-in">
							<label for="basic_checkbox_5" class="mb-0 h-15"></label>
							<span class="text-line">Maecenas scelerisque</span>
							<small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_6" class="filled-in">
							<label for="basic_checkbox_6" class="mb-0 h-15"></label>
							<span class="text-line">Vivamus nec orci</span>
							<small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_7" class="filled-in">
							<label for="basic_checkbox_7" class="mb-0 h-15"></label>
							<!-- todo text -->
							<span class="text-line">Nulla vitae purus</span>
							<!-- Emphasis label -->
							<small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
							<!-- General tools such as edit or delete-->
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_8" class="filled-in">
							<label for="basic_checkbox_8" class="mb-0 h-15"></label>
							<span class="text-line">Phasellus interdum</span>
							<small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_9" class="filled-in">
							<label for="basic_checkbox_9" class="mb-0 h-15"></label>
							<span class="text-line">Quisque sodales</span>
							<small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_10" class="filled-in">
							<label for="basic_checkbox_10" class="mb-0 h-15"></label>
							<span class="text-line">Proin nec mi porta</span>
							<small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
					</ul>
				</div>
				<!-- /.tab-pane -->
			</div>
		</aside>
		<!-- /.control-sidebar -->

		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>

	</div>
	<!-- ./wrapper -->

	<!-- ./side demo panel -->
	<!-- <div class="sticky-toolbar">
	    <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Buy Now" class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
		</a>
	    <a href="https://themeforest.net/user/multipurposethemes/portfolio" data-bs-toggle="tooltip" data-bs-placement="left" title="Portfolio" class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Image"></span>
		</a>
	    <a id="chat-popup" href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Live Chat" class="waves-effect waves-light btn btn-warning btn-flat btn-sm">
			<span class="icon-Group-chat"><span class="path1"></span><span class="path2"></span></span>
		</a>
	</div> -->
	<!-- Sidebar -->

	<div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-lg btn-warning l-h-70">
			<div id="chat-overlay"></div>
			<span class="icon-Group-chat fs-30"><span class="path1"></span><span class="path2"></span></span>
		</div>

		<div class="chat-box">
			<div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
				<div class="btn-group">
					<button
						class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45"
						type="button" data-bs-toggle="dropdown">
						<span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
					</button>
					<div class="dropdown-menu min-w-200">
						<a class="dropdown-item fs-16" href="#">
							<span class="icon-Color me-15"></span>
							New Group</a>
						<a class="dropdown-item fs-16" href="#">
							<span class="icon-Clipboard me-15"><span class="path1"></span><span
									class="path2"></span><span class="path3"></span><span class="path4"></span></span>
							Contacts</a>
						<a class="dropdown-item fs-16" href="#">
							<span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
							Groups</a>
						<a class="dropdown-item fs-16" href="#">
							<span class="icon-Active-call me-15"><span class="path1"></span><span
									class="path2"></span></span>
							Calls</a>
						<a class="dropdown-item fs-16" href="#">
							<span class="icon-Settings1 me-15"><span class="path1"></span><span
									class="path2"></span></span>
							Settings</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item fs-16" href="#">
							<span class="icon-Question-circle me-15"><span class="path1"></span><span
									class="path2"></span></span>
							Help</a>
						<a class="dropdown-item fs-16" href="#">
							<span class="icon-Notifications me-15"><span class="path1"></span><span
									class="path2"></span></span>
							Privacy</a>
					</div>
				</div>
				<div class="text-center flex-grow-1">
					<div class="text-dark fs-18">Mayra Sibley</div>
					<div>
						<span class="badge badge-sm badge-dot badge-primary"></span>
						<span class="text-muted fs-12">Active</span>
					</div>
				</div>
				<div class="chat-box-toggle">
					<a id="chat-box-toggle"
						class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45"
						href="#">
						<span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
					</a>
				</div>
			</div>
			<div class="chat-box-body">
				<div class="chat-box-overlay">
				</div>
				<div class="chat-logs">
					<div class="chat-msg user">
						<div class="d-flex align-items-center">
							<span class="msg-avatar">
								<img src="../images/avatar/2.jpg" class="avatar avatar-lg">
							</span>
							<div class="mx-10">
								<a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
								<p class="text-muted fs-12 mb-0">2 Hours</p>
							</div>
						</div>
						<div class="cm-msg-text">
							Hi there, I'm Jesse and you?
						</div>
					</div>
					<div class="chat-msg self">
						<div class="d-flex align-items-center justify-content-end">
							<div class="mx-10">
								<a href="#" class="text-dark hover-primary fw-bold">You</a>
								<p class="text-muted fs-12 mb-0">3 minutes</p>
							</div>
							<span class="msg-avatar">
								<img src="../images/avatar/3.jpg" class="avatar avatar-lg">
							</span>
						</div>
						<div class="cm-msg-text">
							My name is Anne Clarc.
						</div>
					</div>
					<div class="chat-msg user">
						<div class="d-flex align-items-center">
							<span class="msg-avatar">
								<img src="../images/avatar/2.jpg" class="avatar avatar-lg">
							</span>
							<div class="mx-10">
								<a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
								<p class="text-muted fs-12 mb-0">40 seconds</p>
							</div>
						</div>
						<div class="cm-msg-text">
							Nice to meet you Anne.<br>How can i help you?
						</div>
					</div>
				</div><!--chat-log -->
			</div>
			<div class="chat-input">
				<form>
					<input type="text" id="chat-input" placeholder="Send a message..." />
					<button type="submit" class="chat-submit" id="chat-submit">
						<span class="icon-Send fs-22"></span>
					</button>
				</form>
			</div>
		</div>
	</div>

	<!-- Page Content overlay -->


	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
	<script src="../assets/icons/feather-icons/feather.min.js"></script>
	<script src="../assets/vendor_components/jquery-knob/js/jquery.knob.js"></script>

	<script src="../assets/vendor_components/raphael/raphael.min.js"></script>
	<script src="../assets/vendor_components/morris.js/morris.min.js"></script>
	<script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>

	<!-- Novo Admin App -->
	<script src="js/template.js"></script>
	<script src="js/pages/dashboard3.js"></script>
	<script src="js/pages/calendar.js"></script>

</body>

</html>
