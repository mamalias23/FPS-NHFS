@extends('layouts.default')

@section('title')
Home | New Horizon Financial Solutions
@stop

@section('on-page-style')
@parent
	<style type="text/css">
	.item{
	    background: #EA5B2E;
	    height: 430px !important;
	    padding-left:15px;
	}
	.carousel{
	    margin-left: -15px;
	    margin-right: -15px;
	}
	.carousel p {
		text-align: center;
	}
	</style>
@stop

@section('on-page-script')
@parent
	<script type="text/javascript">
	</script>
@stop

@section('banner')
<!-- <section id="banner">
	<div class="row">
		<div class="col-md-6 texts">
			<h2>Here at NHFS finding the right</h2>
			<h3 style="margin-top:0px;margin-bottom:30px">solution is our specialty.</h3>
			<h3 style="margin-bottom:30px">We have a range of solutions <br />to offer to help change your<br /> situation for the better.</h3>
			<h3 style="margin-bottom:30px">Call us on 01872 263 660<br /> or request a call back.</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4" style="text-align:center">
			<a class="btn btn-lg btn-orange has-radius" href="#" style="width:75%">Request a callback</a>
		</div>
	</div>
</section> -->

<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-interval="7000" data-ride="carousel">
    	<!-- Carousel indicators -->
        <!-- <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>  -->  
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                <section id="banner">
					<div class="row">
						<div class="col-md-6 texts" style="margin-left:25px">
							<h2>Here at NHFS finding the right</h2>
							<h3 style="margin-top:0px;margin-bottom:30px">solution is our specialty.</h3>
							<h3 style="margin-bottom:30px">We have a range of solutions <br />to offer to help change your<br /> situation for the better.</h3>
							<h3 style="margin-bottom:30px">Call us on 01872 263 660<br /> or request a call back.</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4" style="text-align:center">
							<a class="btn btn-lg btn-orange has-radius" href="#" style="width:75%">Request a callback</a>
						</div>
					</div>
				</section>
         		<div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <section id="banner2">
					<div class="row">
						<div class="col-md-6 texts" style="margin-left:25px">
							<h2>New Horizon Financial Solutions Budgeting Tool</h2>
							<h3 style="margin-top:0px;margin-bottom:30px">Our Budgeting Tool has been<br>designed to help you create an <br>accurate budget and plan, which <br>we believe is the first and most <br>important step to regaining <br>control of your finances.</h3>
			
						</div>
					</div>
					<div class="row">
						<div class="col-md-4" style="text-align:center">
							<a class="btn btn-lg btn-orange has-radius" href="{{ url('budgeting-tool') }}" style="width:75%">Try our budgeting tool</a>
						</div>
					</div>
				</section>
         		<div class="carousel-caption">
                </div>
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev" style="width:40px;background:none">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next" style="width:40px;background:none">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>

@stop

@section('content')

	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default panel-main">
				<div class="panel-heading">
					<span class="large">Enquiry Form.</span> 
					<span class="medium">Got a question?</span><br />
					<span class="small">Fill out the form below with your enquiry and we'll get back to you.</span>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-offset-1 col-md-10">
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="firstname" class="col-sm-3 control-label">First name*</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="firstname" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="lastname" class="col-sm-3 control-label">Last name*</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="lastname" placeholder="">
									</div>
								</div>
								
								<div class="form-group">
									<label for="email" class="col-sm-3 control-label">Email*</label>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="email" placeholder="">
									</div>
								</div>

								<div class="form-group">
									<label for="phone" class="col-sm-3 control-label">Phone</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="phone" placeholder="">
									</div>
								</div>

								<div class="form-group">
									<label for="type" class="col-sm-3 control-label">Enquiry type</label>
									<div class="col-sm-9">
										<select id="type" class="form-control">
											<option></option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="enquiry" class="col-sm-3 control-label">Enquiry*</label>
									<div class="col-sm-9">
										<textarea id="enquiry" class="form-control" rows="5"></textarea>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10" style="text-align:right;">
										<button type="submit" class="btn btn-md btn-orange">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default panel-custom">
						<div class="panel-heading">Financial news</div>
						<div class="panel-body" style="padding:0px;">
							<div class="list-group">
								<a href="#" class="list-group-item">
									<h4 class="list-group-item-heading">Wonga to write off £220m of customer debts</h4>
									<p class="list-group-item-text">
										Wonga has been speaking to the Financial Conduct Authority (FCA) about its lending practices<br><br>

Payday lender Wonga says it is writing off £220m of debts for 330,000 customers after putting in place new affordability checks.<br><br>

The company, which has faced criticism for its high interest rates and debt collection tactics, made the changes after discussions with regulators.<br><br>

Customers in arrears whose loans would not have been made under the new checks will have their debts written off.<br><br>

A further 45,000 customers in arrears will not have to pay interest on loans.

Affected Wonga customers will be notified by 10 October<br />
										<span class="readmore">Read more >>></span>
									</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-12">
					<div class="panel panel-default panel-custom">
						<div class="panel-heading">Sign up for our newsletter</div>
						<div class="panel-body">
							<a href="#">Sign up</a> to our monthly email for the best budgeting advice and money-saving tips.<br /><a href="#">Read more >></a>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default panel-red">
				<div><img src="{{ asset('assets/img/banner1.jpg') }}" height="220px" width="100%" /></div>
				<div class="panel-heading">Debt Management (DMP)</div>
				<div class="panel-body">
					A debt management plan is a solution for people struggling to repay their creditors by enabling them to pay one affordable monthly payment for all their creditors.<br /><a href="#">Read more >></a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default panel-red">
				<div><img src="{{ asset('assets/img/banner1.jpg') }}" height="220px" width="100%" /></div>
				<div class="panel-heading">IVA's</div>
				<div class="panel-body">
					An individual voluntary arrangement is a contract negotiated with your creditors on your behalf for people that live in England and Wales. It is an alternative to bankrupcy where you payback what you can afford in settlement of the debt.<br /><a href="#">Read more >></a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default panel-red">
				<div><img src="{{ asset('assets/img/banner1.jpg') }}" height="220px" width="100%" /></div>
				<div class="panel-heading">Trust Deeds</div>
				<div class="panel-body">
					A Trust Deed is for the resident of Scotland similar to an IVA & is a formally legal binding contract between the client and the creditors. <br /><a href="#">Read more >></a>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default panel-red">
				<div><img src="{{ asset('assets/img/banner1.jpg') }}" height="220px" width="100%" /></div>
				<div class="panel-heading">Debt Arrangement Scheme (DAS)</div>
				<div class="panel-body">
					A debt arrangement scheme is a Scottish government run tool that allows clients to repay their debts through a repayment programme. <br /><a href="#">Read more >></a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default panel-red">
				<div><img src="{{ asset('assets/img/banner1.jpg') }}" height="220px" width="100%" /></div>
				<div class="panel-heading">Full & Finals</div>
				<div class="panel-body">
					A full & finals solutions is a negotiation of a lump sum available to clear outstanding debts at a reduced amount. <br /><a href="#">Read more >></a>
				</div>
			</div>
		</div>
	</div>
@stop
