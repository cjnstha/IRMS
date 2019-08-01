@extends('layouts.masters')
@section('content')

<!-- page content -->                  
<div class="x_panel">
  <div class="x_title">
    <h2>Form Registration</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    
  <form class="form-horizontal form-label-left" method="POST" action="{{url('children-info/preview/'.$child->id)}}">
    {{csrf_field()}}
      {{-- <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Upload Photo</label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <div class="preview-logo-wrap">
            <div class="preview-logo">
              <img class="hide" id="preview" src="#" alt="">
            </div>
          </div>

          <div class="browse input-group image-browse-btn">
            <label class="input-group-btn">
              <span class="btn btn-primary">
                <i class="fa fa-folder-open"></i>Browse
                <input type="file" name="" id="imgLogo" accept="image/*" class="image-upload" onchange="readLogoURL(this);">
              </span>
            </label>   
          </div>
        </div>
      </div> --}}
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name of Parent<span class="required"> *</span></label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <input class="form-control" type="text" name="parent_name" placeholder="Name of Parent" value="{{$child->parent_name}}" readonly="">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name of children</label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <input class="form-control" type="text" name="child_name" placeholder="Name of Child" value="{{$child->child_name}}" readonly="">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Children ID<span class="required"> *</span></label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <input class="form-control" type="text" name="child_id" placeholder="Name of Child" value="{{$child->child_id}}" readonly="">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required"> *</span></label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <input class="form-control" type="email" name="email" placeholder="example@example.com" value="{{$child->email}}" readonly="">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Address<span class="required"> *</span></label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">Ward No.<span class="required"> *</span></label>
                <input class="form-control" type="number" name="ward_no" placeholder="Ward No." value="{{$child->ward_no}}" readonly="">
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">Municipality<span class="required"> *</span></label>
                <select class="form-control SlectBox-grp-src" multiple="" name="municipality" tabindex="-1" autocomplete="off" disabled="true">
                  <option value="Hospital">Hospital</option>
                  <option value="Home">Home</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">Province<span class="required"> *</span></label>
                <select class="form-control SlectBox-grp-src" multiple="" name="province" tabindex="-1" autocomplete="off" disabled="true">
                  <option value="Hospital">Hospital</option>
                  <option value="Home">Home</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">District<span class="required"> *</span></label>
                <select class="form-control SlectBox-grp-src" multiple="" name="district" tabindex="-1" autocomplete="off"disabled="true">
                  <option value="Hospital">Hospital</option>
                  <option value="Home">Home</option>
                </select>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact No.<span class="required"> *</span></label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <input class="form-control" type="number" name="child-name" placeholder="Contact Number" value="{{$child->number}}" readonly="">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required"> *</span></label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <div class="radio-wrap">
            <ul>
              <li>
                <div class="radio-group">
                  <input class="radio" id="radio-1" name="gender" type="radio" value="Male" {{$child->gender == 'Male'?'checked':""}} autocomplete="off" disabled="true">
                  <label for="radio-1">Male</label>  
                </div>
              </li>
              <li>
                <div class="radio-group">
                  <input class="radio" id="radio-2" name="gender" type="radio" value="Female" {{$child->gender == 'Female'?'checked':""}} autocomplete="off" disabled="true">
                  <label for="radio-2">Female</label>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Birth<span class="required" readonly=""> *</span></label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <div class="control-group">
            <div class="controls">
              <input class="form-control has-feedback-left" id="datepicker" name="dob" type="text" value="{{$child->dob}}" autocomplete="off" disabled="true">
              <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
              <span id="" class="sr-only">(success)</span>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Birth Time<span class="required"> *</span></label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <div class="control-group">
            <div class="controls">
              <input class="form-control has-feedback-left" id="timepicker" name="birth_time" type="text" value="{{$child->birth_time}}" autocomplete="off" disabled="true">
              <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>
              <span id="" class="sr-only">(success)</span>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Place of Birth</label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <select class="form-control SlectBox-grp-src" multiple="" name="birth_at" tabindex="-1">
            <option disabled="disabled" {{$child->birth_at == 'Hospital'?'selected':""}}>Hospital</option>
            <option disabled="disabled" {{$child->birth_at == 'Home'?'selected':""}}>Home</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Delivery Type</label>
        <div class="col-md-6 col-sm-7 col-xs-12">
          <select class="form-control  SlectBox-grp-src" multiple="multiple" name="delivery_type" tabindex="-1">
            <option {{$child->delivery_type == 'Surgical'?'selected':""}}>Surgical</option>
            <option {{$child->delivery_type == 'Natural'?'selected':""}}>Natural</option>
          </select>
        </div>
      </div>
    </form>
    
  </div>
</div>

<!-- /page content -->

@endsection