@extends('home/header')
@section('content')

<section class="body_container">
			<section class="listing_pg">
				<section class="breadcrum">
					<div class="col-xs-12">
						<div class="breadcrumInnr">
							<ul>
								<li class="wow zoomIn" data-wow-delay=".5s">
									<a href="#">Home</a>
								</li>
								<li class="wow zoomIn" data-wow-delay=".5s">
									Family photo albums
								</li>
							</ul>
						</div>
					</div>
				</section>
				<section class="photo_albumbs">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 text-center">
								<div class="photo_albumbsTop">
									<h1 class="wow fadeInUp" data-wow-delay=".5s">Family Photo Albums</h1>
									<span class="photoStyles wow zoomIn" data-wow-delay=".6s">61 of 246 styles</span>
								</div>
								<div class="photo_albumbsMiddle">
									<div class="photolist_tab">
										<span class="see_list wow fadeInUp" data-wow-delay=".5s">See :</span>
										<ul class="see_listContnt">
											<li class="wow fadeInUp" data-wow-delay=".5s">
												<a href="javascript:void(0)" data-id="all">All</a>
											</li>
											<li class="wow fadeInUp" data-wow-delay=".5s">
												<a href="javascript:void(0)" data-id="standard">Standard</a>
											</li>
											<li class="wow fadeInUp" data-wow-delay=".5s">
												<a href="javascript:void(0)" data-id="storytelling">Storytelling</a>
											</li>
										</ul>
									</div>
									<span class="choose_style wow zoomIn" data-wow-delay=".5s">Choose a Style</span>
								</div>
								<div class="photoBook_list">
									<ul>
										<li>
											<a href="#" class="wow flipInX" data-wow-delay=".5s">
												<small></small>
												<span>Family</span>
											</a>
										</li>
										<li>
											<a href="#" class="wow flipInX" data-wow-delay=".5s">
												<small></small>
												<span>baby</span>
											</a>
										</li>
										<li>
											<a href="#" class="wow flipInX" data-wow-delay=".5s">
												<small></small>
												<span>wedding</span>
											</a>
										</li>
										<li>
											<a href="#" class="wow flipInX" data-wow-delay=".5s">
												<small></small>
												<span>travel</span>
											</a>
										</li>
										<li>
											<a href="#" class="wow flipInX" data-wow-delay=".5s">
												<small></small>
												<span>birthday</span>
											</a>
										</li>
										<li>
											<a href="#" class="wow flipInX" data-wow-delay=".5s">
												<small></small>
												<span>year book</span>
											</a>
										</li>
										<li>
											<a href="#" class="wow flipInX" data-wow-delay=".5s">
												<small></small>
												<span>more</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="photo_framsList" id="all">
									<ul>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img1.jpg')}}" alt="" />
												</small>
												<span>
													Everyday Happiness
												</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img2.jpg')}}" alt="" />
												</small>
												<span>
													Familygram
												</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img3.jpg')}}" alt="" />
												</small>
												<span>
													Vintge Disney
												</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img1.jpg')}}" alt="" />
												</small>
												<span>
													Everyday Happiness
												</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img2.jpg')}}" alt="" />
												</small>
												<span>
													Familygram
												</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img3.jpg')}}" alt="" />
												</small>
												<span>
													Vintge Disney
												</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img1.jpg')}}" alt="" />
												</small>
												<span>
													Everyday Happiness
												</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img2.jpg')}}" alt="" />
												</small>
												<span>
													Familygram
												</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img3.jpg')}}" alt="" />
												</small>
												<span>
													Vintge Disney
												</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img1.jpg')}}" alt="" />
												</small>
												<span>
													Everyday Happiness
												</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img2.jpg')}}" alt="" />
												</small>
												<span>
													Familygram
												</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img3.jpg')}}" alt="" />
												</small>
												<span>
													Vintge Disney
												</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="photo_framsList" id="standard">
									<ul>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img1.jpg')}}" alt="" />
												</small>
												<span>
													Everyday Happiness
												</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="photo_framsList" id="storytelling">
									<ul>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img1.jpg')}}" alt="" />
												</small>
												<span>
													Everyday Happiness
												</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="list_POPUPLink wow fadeInUp" data-wow-delay=".5s">
												<small>
													<img src="{{asset('common/images/frame_img2.jpg')}}" alt="" />
												</small>
												<span>
													Familygram
												</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="loader_frame wow zoomIn" data-wow-delay=".5s">
									<span></span>
								</div>
							</div>
						</div>
					</div>
				</section>
@endsection

