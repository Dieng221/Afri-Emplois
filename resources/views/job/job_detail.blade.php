@extends('layout/body')

@section('post_job')


<div class="page-wraper">
<div id="loading-area"></div>
	<!-- header -->
        @include('layout/header')
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Détail de l'emploi</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Accueil</a></li>
							<li>Détail de l'emploi</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Job Detail -->
			<div class="section-full content-inner-1">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="sticky-top">
								<div class="row">
									<div class="col-lg-12 col-md-6">
										<div class="m-b30">
											<img src="images/blog/grid/pic1.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-12 col-md-6">
										<div class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
											<h4 class="text-black font-weight-700 p-t10 m-b15">Détail de l'emploi</h4>
											<ul>
												<li><i class="ti-location-pin"></i><strong class="font-weight-700 text-black">Adresse</strong><span class="text-black-light"> Demo Address #8901 Marmora Road Chi Minh City, Vietnam </span></li>
												<li><i class="ti-money"></i><strong class="font-weight-700 text-black">Salaire</strong> $800 Monthy</li>
												<li><i class="ti-shield"></i><strong class="font-weight-700 text-black">Experience</strong>6 ans d'experience</li>
											</ul>
										</div>
									</div>
								</div>
                            </div>
						</div>
						<div class="col-lg-8">
							<div class="job-info-box">
								<h3 class="m-t0 m-b10 font-weight-700 title-head">
									<a href="#" class="text-secondry m-r30">Digital Marketing Executive</a>
								</h3>
								<ul class="job-info">
									<li><strong>Education</strong> Web Designer</li>
									<li><strong>Deadline:</strong> 25th January 2018</li>
									<li><i class="ti-location-pin text-black m-r5"></i> NewYark </li>
								</ul>
								<p class="p-t20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<h5 class="font-weight-600">Job Description</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<h5 class="font-weight-600">How to Apply</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
								<h5 class="font-weight-600">Job Requirements</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<ul class="list-num-count no-round">
									<li>The DexignLab Privacy Policy was updated on 25 June 2018.</li>
									<li>Who We Are and What This Policy Covers</li>
									<li>Remaining essentially unchanged It was popularised in the 1960s </li>
									<li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</li>
									<li>DexignLab standard dummy text ever since</li>
								</ul>
								<a href="#" class="site-button">Apply This Job</a>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Job Detail -->
			<!-- Our Jobs -->
			<div class="section-full content-inner">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-md-6">
							<div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="#"><img src="images/blog/grid/pic1.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="#">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                         <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                   <div class="dez-post-readmore">
										<a href="#" class="site-button outline">Apply Now <i class="ti-arrow-right"></i></a>
									</div>
                                </div>
                            </div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6">
							<div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="#"><img src="images/blog/grid/pic2.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="#">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                         <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                   <div class="dez-post-readmore">
										<a href="#" class="site-button outline">Apply Now <i class="ti-arrow-right"></i></a>
									</div>
                                </div>
                            </div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6">
							<div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="#"><img src="images/blog/grid/pic3.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="#">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
											<li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                         <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                   <div class="dez-post-readmore">
										<a href="#" class="site-button outline">Apply Now <i class="ti-arrow-right"></i></a>
									</div>
                                </div>
                            </div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6">
							<div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="#"><img src="images/blog/grid/pic4.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="#">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
											<li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                         <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                   <div class="dez-post-readmore">
										<a href="#" class="site-button outline">Apply Now <i class="ti-arrow-right"></i></a>
									</div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<!-- Our Jobs END -->
		</div>
    </div>
    <!-- Content END-->
	<!-- Footer -->
        @include('layout/footer')
    <!-- Footer END -->
    <button class="scroltop fa fa-chevron-up"></button>
</div>

@endsection
