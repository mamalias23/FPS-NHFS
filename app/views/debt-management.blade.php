@extends('layouts.default')

@section('on-page-style')
@parent
	<style type="text/css">
		ul.custom li:before {
		  content: "\f046";
		  display: inline-block;
		  font:normal normal normal 14px/1 FontAwesome;
		  margin-left: -1.3em;
		  width: 1.3em;
		  color:green;
		}
		ul.custom li {
			font-size: 15px;
		}
		.fa-check-square-o {
			color:green;
		}

		p {
			text-align: justify;
		}
	</style>
@stop

@section('on-page-script')
@parent
	<script type="text/javascript">
	</script>
@stop

@section('banner')
@stop

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">What is Debt Management</h1>

			<p>
				A debt management plan is a formal agreement between yourself and your creditors you 
				owe money too. Debt Management Plans help reduce outstanding, unsecured debts 
				at a reduced level over a fixed period of time to help you regain control of your finances.
			</p>
			<p>
				Debt Management Plans are tailored depending on what you can be realistically afforded on a monthly basis. 
				To able us to get an accurate figure, we will go through an income & 
				expenditure that will establish what your incomings & outgoings are An Income and 
				expenditure includes everything, such as rent/mortgage, secured loans, utility bills, 
				and essential living expenses (food & car tax etc.). Once the income and expenditure 
				is complete, the remaining amount is your disposable income which is then divided 
				amongst creditors through a Debt Management plan. This is done on a pro rata basis between 
				creditors making payment equal based on the level of debt outstanding.
			</p>
			<p>Debt Management Plans are run via FCA (Financial Conduct Authority) regulated control.</p>

			<h3>Benefits to you as the Client:</h3>
			<ul class="custom">
				<li>One affordable monthly payment</li>
				<li>We deal with your creditors directly </li>
				<li>There is flexibility within the plan so that is your circumstances change we can re-adapt the plan to suit your needs </li>
				<li>We will try and freeze your interest with all of your creditors</li>
				<li>6 monthly reviews of your circumstances to ensure the plan is working for you. </li>
			</ul>
			<h3>Important things to remember:</h3>
			<ul class="custom">
				<li>We cannot included secured debts, mortgage arrears etc – please refer to Debt Help for the full breakdown of what 
cannot be included </li>
				<li>You must make sure that you sort payment plans outside of the plan for any creditors that we cannot deal with. </li>
				<li>It is never guaranteed that we can freeze any interest being charged on your debt but we will always try </li>
				<li>Your credit rating will be affected & that may mean it is harder for you to obtain further credit but making payments 
through a debt management plan is more supportive to your credit rating rather than you persisting to miss 
payments. </li>
				<li>Our advice is completely free until we have agreed on the best solution with you, for more information on how our fee 
structure works please refer to Information & Fee’s. </li>
			</ul>

		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="row">
				<div class="col-md-12">How a debt management plan could help you:</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped" style="border:2px solid">
						<tbody>
							<tr>
								<td>Loans</td>
								<td align="right">£2,500</td>
							</tr>
							<tr>
								<td>Catalogues</td>
								<td align="right">£870</td>
							</tr>
							<tr>
								<td>Overdraft</td>
								<td align="right">£1,000</td>
							</tr>
							<tr>
								<td>Credit Card </td>
								<td align="right">£4,500</td>
							</tr>
						</tbody>
						<tfoot style="font-weight:bold">
							<tr>
								<td>Total</td>
								<td align="right">£6,870</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="text-align:center;font-size:40px;color:#8C8C8C"><i class="fa fa-arrow-down"></i></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped" style="border:2px solid;">
						<tbody>
							<tr>
								<td align="center" style="background:#8C8C8C;color:#fff">Repayments before Debt Management<br><u>£350</u></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="text-align:center;font-size:40px;color:#F39400"><i class="fa fa-arrow-down"></i></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped" style="border:2px solid;">
						<tbody>
							<tr>
								<td align="center" style="background:#F39400;color:#fff">Repayments after Debt Management<br><u>£150</u></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>	

	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Information & Fee’s </h1>
			<p>
				Here at NHFS we pride ourselves in doing the right thing for all our clients, 
				we will always try to ensure we find the best product 
				for your situation & effectively get you debt free without having to take further credit out. 
			</p>
			<p>
				Whilst we are here to find you the best solution to help you solve your debt worries there are fee’s if you proceed with the 
				product we recommend, however our advice is free. 
			</p>
			<p>
				The main thing to remember with a debt management plan is that it is a flexible plan that is based around what you can afford 
				to repay each month. By doing this it will extend the term of repayment to your debts but ultimately will take the pressure off of you. 
			</p>

			<p>
				When entering into a debt management plan it will be assessed what debts you have that are unsecured and exactly what we 
				can deal with so you know from day 1 what debts will be in your plan.
			</p>

			<h3>Cooling off period</h3>
			<p>
				When your letter of authority has been signed and sent back if you decide that you no longer want to go ahead with the plan 
				there will be a fourteen day cooling off period from the date we receive your letter of authority. If within the fourteen day we will 
				offer a full refund of any fee’s that have been charged but any money that has been sent to your creditors will not be refunded 
				due to already being paid out. If you wish to cancel please do one of the following:
			</p>
			<p>
				<i class="fa fa-phone"></i> Call – <strong>01872263660</strong> <br>
				<i class="fa fa-envelope-o"></i> Email – <a href="mailto:support@NHFS.co.uk?subject=Write – NHFS, First floor, Building a, Green court, Truro Business Park, TR49LF">support@NHFS.co.uk</a><br>
				<i class="fa fa-edit"></i> Write – NHFS, First floor, Building a, Green court, Truro Business Park, TR49LF
			</p>

			<h3>Payments to your creditors</h3>
			<p>
				Payments will be made to your creditors within 5 working days of the funds clearing in our account on the basis that we have all 
				the necessary information on who you owe money to such as account reference etc. 
			</p>

			<h2 class="page-header">Fee’s </h2>
			<h3>Setup Fee’s –</h3>
			<p>
				Your setup fee’s are calculated based of your disposable income which is 50% of the first 4 monthly payments. The other 50% 
				of your payments will be divided up between them on a pro-rata basis. So if your disposable income is £120 your inital setup 
				fee will be £240 split over 4 months to ensure that your creditors get a payment from month 1. 
			</p>
			<p>The reason for this charged is to cover the work involved: </p>
			<ul class="custom">
				<li>Drafting the repayment plan </li>
				<li>Format your financial statement </li>
				<li>Calculate your pro rate reduced payments to the creditors </li>
				<li>Contacting your creditors to get the correct information, getting the account put on hold if possible & negotiating the 
payments based of what you can afford rather than what they want you to afford. </li>
				<li>Copies of any creditor response will be sent you. </li>
			</ul>

			<h3>Admin Fee –</h3>
			<p>
				From month 5 you fee will be based on how many creditors you are in debt with due to the work that needs to be maintained for example:
			</p>
			<p>
				Up to 3 creditors = £25 <br>
				4-6 = £30 <br>
				7-9 = £35 <br>
				10+ = £40 
			</p>
			<p>
				This charge covers the following: 
			</p>
			<ul class="custom">
				<li>Distributions to your creditors</li>
				<li>Dealing with any correspondence from your creditors so that you don’t have to have contact with them </li>
				<li>For help and advice you will be assigned a customer account manager to deal with your plan 
</li>
				<li>Regular statement sent to your via your choice i.e. post, email, customer portal </li>
				<li>6 monthly reviews of your circumstances to ensure it is still the correct product for you. </li>
			</ul>

			<div class="bs-callout bs-callout-danger">
				Please remember these fees are included within your monthly amount and you do not have to pay anymore in addition. 
			</div>
		</div>
	</div>

@stop