<header>
	<section id="main">
		<div class="row">
			<div class="col-md-9">
				<img src="{{ asset('assets/img/logo_small.jpg') }}" height="170px">
			</div>
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<div class="input-group">
					    	<input type="text" placeholder="Search" class="form-control has-radius-left">
					    	<span class="input-group-btn">
					    		<a class="btn btn-light-orange" href="#">
								  <i class="fa fa-search"></i>
								</a>
					    	</span>
					    </div>
					</div>
				</div>
				<div class="row" style="margin-top:35px">
					<div class="col-md-12">
						<a class="btn btn-lg btn-orange has-radius" href="#" style="width:100%">Request a callback</a><br />
						<span id="call">or call FREE on <span class="orange"><strong>01872 263 660</strong></span></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="navigation">
		<nav class="navbar navbar-inverse" role="navigation" style="margin-bottom:0px">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9" style="padding-left:0px">
					<ul class="nav navbar-nav">
						<li class="{{\Request::is('/') ? 'active':''}}"><a href="{{ url('/') }}">Home</a></li>
						<li class="{{\Request::is('debt-management*') ? 'active':''}}"><a href="{{ url('debt-management') }}">Debt Management</a></li>
						<li class="{{\Request::is('trust-deeds*') ? 'active':''}}"><a href="{{ url('trust-deeds') }}">Trust Deeds</a></li>
						<li class="{{\Request::is('individual-voluntary-arrangements*') ? 'active':''}}"><a href="href="{{ url('individual-voluntary-arrangements') }}"">Individual Voluntary Arrangements</a></li>
						<li class="{{\Request::is('debt-arrangement-schemes*') ? 'active':''}}"><a href="href="{{ url('debt-arrangement-schemes') }}"">Debt Arrangement Schemes</a></li>
						<li class="{{\Request::is('full-finals*') ? 'active':''}}"><a href="href="{{ url('full-finals') }}"">Full & Finals</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</section>
	@section('banner')
	@show
</header>