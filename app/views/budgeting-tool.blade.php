@extends('layouts.default')

@section('on-page-style')
@parent
	<style type="text/css">
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
			<h1 class="page-header">Try our budgeting tool</h1>

			<p>
				<a href="https://docs.google.com/spreadsheets/d/1ZyVal59aEnx1ys67J4L7HjcIPgDY5JGzA1FEO53I-Rk/edit#gid=1334419547" target="_blank"><i class="fa fa-file-excel-o"></i> View on Google Docs</a><br />
				<a href="{{ asset('assets/NHFS_Budgeting_ToolV1.0.xls') }}" target="_blank"><i class="fa fa-file-excel-o"></i> Download MS Excel File</a>
			</p>
		</div>
	</div>

@stop