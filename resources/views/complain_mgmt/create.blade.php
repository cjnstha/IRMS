@extends('layouts.masters')

@section('content')

<div class="x_panel">
  <div class="x_title">
    <h2>Complain</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">

    <form class="form-horizontal form-label-left" method="POST" action="{{route('complain.store')}}">
      {{csrf_field()}}
      <div class="form-group @if ($errors->has('children_id')) has-error @endif">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Children ID<span class="required"> *</span></label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <div class="control-group">
            <div class="controls">
              <input type="text" class="form-control" placeholder="Enter Children ID" name="children_id" autocomplete="false">
               @if ($errors->has('children_id')) <p class="help-block">{{ $errors->first('children_id') }}</p> @endif
            </div>
          </div>
        </div>
      </div>

      <div class="form-group @if ($errors->has('vaccination_name')) has-error @endif">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Vaccination Name<span class="required"> *</span></label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <div class="control-group">
            <div class="controls">
              <input type="text" class="form-control" placeholder="Enter Vaccination Name" name="vaccination_name" autocomplete="false">
               @if ($errors->has('vaccination_name')) <p class="help-block">{{ $errors->first('vaccination_name') }}</p> @endif
            </div>
          </div>
        </div>
      </div>

      <div class="form-group @if ($errors->has('vaccination_date')) has-error @endif">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Vaccination Date<span class="required"> *</span></label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <div class="control-group dateTime">
            <div class="controls">
              <input type="text" name="vaccination_date" placeholder="Enter Vaccination Date" class="form-control has-feedback-left datepicker" data-date-format="mm/dd/yy" aria-describedby="">
               @if ($errors->has('vaccination_date')) <p class="help-block">{{ $errors->first('vaccination_date') }}</p> @endif
              <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group @if ($errors->has('vaccination_gap')) has-error @endif">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Vaccination Gap<span class="required"> *</span></label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <select class="form-control sumoselect" name="vaccination_gap" tabindex="-1">
            <option selected="" disabled="">--Select Here--</option>
            @foreach($vaccination_gaps as $vaccination_gap)
            <option value="{{$vaccination_gap}}">{{$vaccination_gap}}</option>
            @endforeach
          </select>
           @if ($errors->has('vaccination_gap')) <p class="help-block">{{ $errors->first('vaccination_gap') }}</p> @endif
        </div>
      </div>
      <div class="form-group @if ($errors->has('issues')) has-error @endif">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Issue<span class="required"> *</span></label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <div class="form-group">
            <textarea class="form-control" name="issues" cols="50" rows="10"></textarea>
            @if ($errors->has('issues')) <p class="help-block">{{ $errors->first('issues') }}</p> @endif
          </div>
        </div>
      </div>
      <div class="form-footer">
        <div class="form-group">
          <div class="submit-btn col-md-6 col-md-offset-3 col-sm-offset-3">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="#" class="btn btn-danger">Cancel</a>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection