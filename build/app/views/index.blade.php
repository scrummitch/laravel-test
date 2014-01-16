@extends('layouts.common')

@section('title')
	Add your page title here
@stop

@section('body-class')
    hello
@stop

@section('body')
	<div class="container">
		@if($errors->has())
		<ul>
			@foreach($errors->all() as $message)
			<li>{{ $message }}</li>
			@endforeach
		</ul>
	@endif

		{{ Form::open(array('url' => '/enquire', 'method' => '/', 'class' => 'form-horizontal')) }}
			<div class="row">
				<div class="col-md-6">
					<h2>Product Enquiry</h2>
					<div class="form-group">
						{{ Form::label('first_name', 'First Name', array('class' => 'control-label col-sm-4')) }}
						<div class="col-sm-8">
							{{ Form::text('first_name', NULL, array('class' => 'form-control')) }}
						</div>
					</div><!-- End First Name -->
					<div class="form-group">
						{{ Form::label('last_name', 'Last Name', array('class' => 'control-label col-sm-4')) }}
						<div class="col-sm-8">
							{{ Form::text('last_name', NULL, array('class' => 'form-control')) }}
						</div>
					</div><!-- End Last Name -->
					<div class="form-group">
						{{ Form::label('email', 'Email Address', array('class' => 'control-label col-sm-4')) }}
						<div class="col-sm-8">
							{{ Form::text('email', NULL, array('class' => 'form-control')) }}
						</div>
					</div><!-- End Email -->
					<div class="form-group">
						{{ Form::label('contact_number', 'Daytime Contact Number', array('class' => 'control-label col-sm-4')) }}
						<div class="col-sm-8">
							{{ Form::text('contact_number', NULL, array('class' => 'form-control')) }}
						</div>
					</div><!-- Contact Number -->
					<div class="form-group">
						{{ Form::label('address', 'Address', array('class' => 'control-label col-sm-4')) }}
						<div class="col-sm-8">
							{{ Form::text('address', NULL, array('class' => 'form-control')) }}
						</div>
					</div><!-- End Address -->
					<div class="form-group">
						{{ Form::label('suburb', 'Suburb', array('class' => 'control-label col-sm-4')) }}
						<div class="col-sm-8">
							{{ Form::text('suburb', NULL, array('class' => 'form-control')) }}
						</div>
					</div><!-- End Suburb -->
					<div class="form-group">
						{{ Form::label('state', 'State', array('class' => 'control-label col-sm-4')) }}
						<div class="col-sm-8">
							{{ Form::select('state', array("ACT","NSW","NT","QLD","SA","TAS","VIC","WA"), NULL, array('class' => 'form-control')) }}
						</div>
					</div><!-- End State -->
					<div class="form-group">
						{{ Form::label('post_code', 'Postcode', array('class' => 'control-label col-sm-4')) }}
						<div class="col-sm-8">
							{{ Form::text('post_code', NULL, array('class' => 'form-control')) }}
						</div>
					</div><!-- End Post Code -->
					<div class="form-group">
						{{ Form::label('enquiry_type', 'Enquiry type', array('class' => 'control-label col-sm-4')) }}
						<div class="col-sm-8">
							{{ Form::select('enquiry_type', array("General enquiry","Product feedback or enquiry","Product complaint"), NULL, array('class' => 'form-control')) }}
						</div>
					</div><!-- End Enquiry Type -->
					<div class="form-group">
						{{ Form::label('product_name', 'Product name', array('class' => 'control-label col-sm-4')) }}
						<div class="col-sm-8">
							{{ Form::text('product_name', NULL, array('class' => 'form-control')) }}
						</div>
					</div><!-- End Product Name -->
					<div class="form-group">
						{{ Form::label('product_size', 'Product size', array('class' => 'control-label col-sm-4')) }}
						<div class="col-sm-8">
							{{ Form::text('product_size', NULL, array('class' => 'form-control')) }}
						</div>
					</div><!-- End Product Size -->
					<div class="form-group">
						{{ Form::label('useby_date', 'Use-by date', array('class' => 'control-label col-sm-4')) }}
						<div class="col-sm-8">
							{{ Form::text('useby_date', NULL, array('class' => 'form-control')) }}
						</div>
					</div><!-- End Useby Date -->
					<div class="form-group">
						{{ Form::label('batch_code', 'Batch code', array('class' => 'control-label col-sm-4')) }}
						<div class="col-sm-8">
							{{ Form::text('batch_code', NULL, array('class' => 'form-control')) }}
						</div>
					</div><!-- End Batch Code -->
					<div class="form-group">
						{{ Form::label('enquiry', 'Enquiry', array('class' => 'control-label col-sm-4')) }}
						<div class="col-sm-8">
							{{ Form::textarea('enquiry', NULL, array('class' => 'form-control', 'rows' => 4)) }}
						</div>
					</div><!-- End Enquiry -->
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-8">
							{{ Form::submit('Submit Enquiry', array('class' => 'btn btn-lg btn-primary')) }}
						</div>
					</div>
				</div>
			</div>

		{{ Form::close() }}
	</div>

@stop

