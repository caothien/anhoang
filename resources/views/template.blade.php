<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico')}}">
	<title>Thuê - Cho thuê</title>
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">LUU HOANG</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#">Trang chu</a></li>
						<li><a href="#">Gioi thieu</a></li>
						<li><a href="#">Dich vu</a></li>
						<li><a href="#">Ho tro</a></li>
						<li><a href="#">Lien he</a></li>
						<li><a href="#">Tin tuc</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Dang nhap</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dang ki</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Dang tin</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a class="list-group-item active">Dich vu cho thue</a>
					<a class="list-group-item" role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">Phuong tien di lai</a>
					<div class="collapse" id="collapseExample1">
						<div class="well">
							<div class="list-group">
								<button type="button" class="list-group-item">Oto tu lai</button>
								<button type="button" class="list-group-item">Xa may</button>
								<button type="button" class="list-group-item">Xe dap</button>
								<button type="button" class="list-group-item">Xe dam cuoi, dich vu</button>
							</div>
						</div>
					</div>
					<a class="list-group-item" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">Bat dong san</a>
					<div class="collapse" id="collapseExample2">
						<div class="well">
							<div class="list-group">
								<button type="button" class="list-group-item">Chung cu</button>
								<button type="button" class="list-group-item">Nha rieng</button>
								<button type="button" class="list-group-item">Nha tro</button>
								<button type="button" class="list-group-item">Nha nghi</button>
								<button type="button" class="list-group-item">Khach san</button>
							</div>
						</div>
					</div>
					<a class="list-group-item" role="button" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">Thoi trang</a>
					<div class="collapse" id="collapseExample4">
						<div class="well">
							<div class="list-group">
								<button type="button" class="list-group-item">Cras justo odio</button>
								<button type="button" class="list-group-item">Dapibus ac facilisis in</button>
								<button type="button" class="list-group-item">Morbi leo risus</button>
								<button type="button" class="list-group-item">Porta ac consectetur ac</button>
								<button type="button" class="list-group-item">Vestibulum at eros</button>
							</div>
						</div>
					</div>
					<a class="list-group-item" role="button" data-toggle="collapse" href="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">Dich vu, su kien</a>
					<div class="collapse" id="collapseExample5">
						<div class="well">
							<div class="list-group">
								<button type="button" class="list-group-item">Cras justo odio</button>
								<button type="button" class="list-group-item">Dapibus ac facilisis in</button>
								<button type="button" class="list-group-item">Morbi leo risus</button>
								<button type="button" class="list-group-item">Porta ac consectetur ac</button>
								<button type="button" class="list-group-item">Vestibulum at eros</button>
							</div>
						</div>
					</div>
					<a class="list-group-item" role="button" data-toggle="collapse" href="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">Noi that</a>
					<div class="collapse" id="collapseExample6">
						<div class="well">
							<div class="list-group">
								<button type="button" class="list-group-item">Cras justo odio</button>
								<button type="button" class="list-group-item">Dapibus ac facilisis in</button>
								<button type="button" class="list-group-item">Morbi leo risus</button>
								<button type="button" class="list-group-item">Porta ac consectetur ac</button>
								<button type="button" class="list-group-item">Vestibulum at eros</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="images/banner.jpg" alt="...">
						</div>
						<div class="item">
							<img src="images/banner.jpg" alt="...">
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

				<div class="panel panel-primary" style="margin-top: 20px;">
					<div class="panel-heading">
						<h3 class="panel-title"></h3>
					</div>
					<div class="panel-body">
						<div class="row" style="border: 1px solid black; margin: 5px; background-color: #e8e8e8">
							<div class="col-md-3">
								<img class="img-responsive img-thumbnail" src="images/oto2.jpg">
							</div>
							<div class="col-md-9">
								<p><strong>Cho thuê Xe tự lái tại DaNang</strong></p>
								<p>Quan: Lien Chieu</p>
								<p>Ngay dang: 1/1/2017</p>
								<p>Ngay het han</p>
								<p>Gia: 600.000/1Ngay</p>
							</div>
						</div>
						<div class="row" style="border: 1px solid black; margin: 5px; background-color: #e8e8e8">
							<div class="col-md-3">
								<img class="img-responsive img-thumbnail" src="images/oto2.jpg">
							</div>
							<div class="col-md-9">
								<p><strong>Cho thuê Xe tự lái tại DaNang</strong></p>
								<p>Quan: Lien Chieu</p>
								<p>Ngay dang: 1/1/2017</p>
								<p>Ngay het han</p>
								<p>Gia: 600.000/1Ngay</p>
							</div>
						</div>
						<div class="row" style="border: 1px solid black; margin: 5px; background-color: #e8e8e8">
							<div class="col-md-3">
								<img class="img-responsive img-thumbnail" src="images/oto2.jpg">
							</div>
							<div class="col-md-9">
								<p><strong>Cho thuê Xe tự lái tại DaNang</strong></p>
								<p>Quan: Lien Chieu</p>
								<p>Ngay dang: 1/1/2017</p>
								<p>Ngay het han</p>
								<p>Gia: 600.000/1Ngay</p>
							</div>
						</div>
						<div class="row" style="border: 1px solid black; margin: 5px; background-color: #e8e8e8">
							<div class="col-md-3">
								<img class="img-responsive img-thumbnail" src="images/oto2.jpg">
							</div>
							<div class="col-md-9">
								<p><strong>Cho thuê Xe tự lái tại DaNang</strong></p>
								<p>Quan: Lien Chieu</p>
								<p>Ngay dang: 1/1/2017</p>
								<p>Ngay het han</p>
								<p>Gia: 600.000/1Ngay</p>
							</div>
						</div>
						<div class="row" style="border: 1px solid black; margin: 5px; background-color: #e8e8e8">
							<div class="col-md-3">
								<img class="img-responsive img-thumbnail" src="images/oto2.jpg">
							</div>
							<div class="col-md-9">
								<p><strong>Cho thuê Xe tự lái tại DaNang</strong></p>
								<p>Quan: Lien Chieu</p>
								<p>Ngay dang: 1/1/2017</p>
								<p>Ngay het han</p>
								<p>Gia: 600.000/1Ngay</p>
							</div>
						</div>
						<div class="row" style="border: 1px solid black; margin: 5px; background-color: #e8e8e8">
							<div class="col-md-3">
								<img class="img-responsive img-thumbnail" src="images/oto2.jpg">
							</div>
							<div class="col-md-9">
								<p><strong>Cho thuê Xe tự lái tại DaNang</strong></p>
								<p>Quan: Lien Chieu</p>
								<p>Ngay dang: 1/1/2017</p>
								<p>Ngay het han</p>
								<p>Gia: 600.000/1Ngay</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Scripts -->
	<script type="text/javascript" src="{{URL::asset('js/jquery-3.1.0.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>