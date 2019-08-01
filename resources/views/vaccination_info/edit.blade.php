@extends('layouts.masters')

@section('content')

<div class="x_panel">
	<div class="x_title">
		<h2>Vaccination Form</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<form class="form-horizontal form-label-left" method="POST" action="{{route('vaccination.update',$vaccination->id)}}">
			{{csrf_field()}}
			<div class="form-group @if ($errors->has('vaccination_name')) has-error @endif">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Vaccination Name<span class="required"> *</span></label>
				<div class="col-md-6 col-sm-7 col-xs-12">
					<div class="control-group">
						<div class="controls">
							<input type="text" class="form-control" id="vacc_name" placeholder="Vaccination Name" name="vaccination_name" value="{{$vaccination->vaccination_name}}" >
							@if ($errors->has('vaccination_name')) <p class="help-block">{{ $errors->first('vaccination_name') }}</p> @endif
						</div>
					</div>
				</div>
			</div>

			<div class="form-group @if ($errors->has('purpose')) has-error @endif">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Purpose<span class="required"> *</span></label>
				<div class="col-md-6 col-sm-7 col-xs-12">
					<div class="control-group">
						<div class="controls">
							<input type="text" class="form-control" placeholder="Purpose" name="purpose" value="{{$vaccination->purpose}}" autocomplete="false">
							@if ($errors->has('purpose')) <p class="help-block">{{ $errors->first('purpose') }}</p> @endif
						</div>
					</div>
				</div>
			</div>

			<div class="form-group @if ($errors->has('actual_date')) has-error @endif">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Actual Date<span class="required"> *</span></label>
				<div class="col-md-6 col-sm-7 col-xs-12">
					<div class="control-group">
						<div class="controls">
							<input class="form-control has-feedback-left datepicker" name="actual_date" type="text" value="{{$vaccination->actual_date}}">
							@if ($errors->has('actual_date')) <p class="help-block">{{ $errors->first('actual_date') }}</p> @endif
							<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
							<span id="inputSuccess2Status4" class="sr-only">(success)</span>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group @if ($errors->has('vaccination_date')) has-error @endif">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Vaccination  Date<span class="required"> *</span></label>
				<div class="col-md-6 col-sm-7 col-xs-12">
					<div class="control-group">
						<div class="controls">
							<input class="form-control has-feedback-left datepicker" name="vaccination_date" type="text" value="{{$vaccination->vaccination_date}}">
							@if ($errors->has('vaccination_date')) <p class="help-block">{{ $errors->first('vaccination_date') }}</p> @endif
							<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
							<span id="inputSuccess2Status4" class="sr-only">(success)</span>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group @if ($errors->has('remark')) has-error @endif">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Remark<span class="required"> *</span></label>
				<div class="col-md-6 col-sm-7 col-xs-12">
					<div class="form-group">
						<textarea class="form-control" name="remark" cols="50" rows="10" >{{$vaccination->remark}}</textarea>
						@if ($errors->has('remark')) <p class="help-block">{{ $errors->first('remark') }}</p> @endif
					</div>
				</div>
			</div>
			<div class="form-group @if ($errors->has('status')) has-error @endif">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span class="required"> *</span></label>
				<div class="col-md-6 col-sm-7 col-xs-12">
					<div class="radio-wrap">
						<ul>
							<li>
								<div class="radio-group">
									<input class="radio" id="radio-1" name="status" type="radio" value="Taken" {{$vaccination->status == 'Taken'?'checked':""}}>
									<label for="radio-1" class="gender">Taken</label>  
								</div>
							</li>
							<li>
								<div class="radio-group">
									<input class="radio" id="radio-2" name="status" type="radio" value="Not Taken" {{$vaccination->status == 'Not Taken'?'checked':""}}>
									<label for="radio-2" class="gender">Not Taken</label>
								</div>
							</li>
						</ul>
					</div>
					@if ($errors->has('status')) <p class="help-block">{{ $errors->first('status') }}</p> @endif
				</div>
			</div>
			<div class="form-footer">
				<div class="form-group">
					<div class="submit-btn col-md-6 col-md-offset-3 col-sm-offset-3">
						<button type="submit" class="btn btn-success">Submit</button>
						<a href="#" class="btn btn-danger" id="btn-cancel">Cancel</a>
					</div>
				</div>
			</div>
		</form>
	</div><!-- End x_content -->
</div><!-- End x_panel -->


@endsection