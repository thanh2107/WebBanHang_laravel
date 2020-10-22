

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="index" class="site-logo">
							<img src="resources/img/logo12.png" alt="">
							
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Tìm kiếm trong loriem ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								
								@if(Auth::check())
								<ul style="" class="main-menu">
									<li><i class="flaticon-profile"></i></li>
									<li><a href="">Chào bạn {{Auth::user()->name}}</a> 
										<ul class="sub-menu">
											<li><a href="{{route('logout')}}"><i class="fa fa-key"></i>Đăng xuất</a></li>
										</ul>	
									</li>
								</ul>	
								@else
								<i class="flaticon-profile"></i>
								<a href="{{route('login')}}">Đăng nhập/Tạo tài khoản</a> 
								@endif

							
								
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a  style="display: contents;" href="{{route('gio-hang')}}">Giỏ hàng</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href= "{{route('trang-chu')}}">Trang chủ</a></li>
					<li><a href="#">Đồng giá</a>
						<ul class="sub-menu">
							@foreach($dong_gia as $dg)
							<li><a href="product.html">{{$dg->ten_donggia}}</a></li>
							@endforeach
						</ul>	
					</li>

					<li><a href="{{route('danh_muc')}}">Sản phẩm</a>
						<ul class="sub-menu">
							@foreach($loai_sp as $loai)
							@if($loai->trang_thai==1)
							<li><a href="{{route('loai-san-pham',$loai->id_loai_san_pham)}}">{{$loai->ten_LSP}}</a></li>
							@endif
							@endforeach
							
						</ul>
					</li>
					<li><a href="#">Phụ kiện
						<span class="new">Mới</span>
					</a></li>
					<li><a href="#">Cửa hàng</a>
						<ul class="sub-menu">
							<li><a href="#">CN1: 1 CMT8 </a></li>
							<li><a href="#">CN2: 1 Lý Thường Kiệt</a></li>
							<li><a href="#">CN3: 1 Nguyễn Thị Minh Khai</a></li>
	
						</ul>
					</li>
					<li><a href="#">Sự kiện</a></li>
					<li><a href="#">Reviews</a></li>
					<li><a href="{{route('lien-he')}}">Liên hệ</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->