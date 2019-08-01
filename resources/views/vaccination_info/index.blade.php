@extends('layouts.masters')
@section('content')

<!-- page content -->

<div class="x_panel filter">
  <div class="x_title">
    <h2>Filter</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content bg-gray no-search">
    <form class="form-grid-v2 FilterForm" method="POST" id="filter-search-vaccin-info" action="javascript:;">
      {{csrf_field()}}
      <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-4">
          <div class="form-group">
            <label for="" class="control-label">Actual Date</label>
            <fieldset>
              <div class="control-group dateTime">
                <div class="controls">
                  <input type="text" name="duration_from" placeholder="Enter Date" class="form-control has-feedback-left datepicker" data-date-format="mm/dd/yy" aria-describedby="" autocomplete="off">
                  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>

                </div>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-4">
          <div class="form-group">
            <label for="" class="control-label">Vaccination Date</label>
            <fieldset>
              <div class="control-group dateTime">
                <div class="controls">
                  <input type="text" name="duration_to" class="form-control has-feedback-left datepicker" placeholder="Enter Date" aria-describedby="" autocomplete="off">
                  <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>

                </div>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-4">
          <div class="form-group">
            <label for="" class="control-label">Vaccination Name</label>
           <select class="form-control sumoselect" name="vacci_name">
             <option selected="" disabled="">--Select Here--</option>
             @foreach($vaccines as $filter)
             <option>{{$filter->vaccination_name}}</option>
             @endforeach
           </select>
          </div>
        </div>
      </div>
      <div class="form-footer text-right">
        <button type="submit" class="btn btn-success btn-sm">Get</button>
      </div>
    </form>
  </div>
</div>
@include('layouts.session')
<div class="vacci_table">
  <div class="x_panel">
    <div class="x_title">
      <h2>Vaccination Information</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <span>
            <a href="{{route('vaccination.create')}}" class="btn btn-primary">Add New</a>
            {{-- <button class="btn btn-primary" id="add-new" onclick="toggle_visibility()">Add New</button> --}}
          </span>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="table_in_div">
        <div class="table-responsive custom-table">
          <table id="myTable" class="dataTableClass table table-striped table-bordered c-blue table-picker dataTable no-footer tbl_vaccine">
            <thead>
              <tr>
                <th>SNo.</th>
                <th>Vaccination Name</th>
                <th>Purpose</th>
                <th>Actual Date</th>
                <th>Vaccination Date</th>
                <th>Remark</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php 
              $i =1
              @endphp
              @foreach($vaccines as $vaccine)
              <tr>
                <td>{{$i++}}</td>
                <td>
                  <select class="form-control sumoselect" name="vaccination_name" tabindex="-1">
                    @if($vaccine->vaccination_name)
                    <option >{{$vaccine->vaccination_name}}</option>
                    @endif
                    @foreach($vaccine_name as $vaccination_name)
                    <option>{{$vaccination_name}}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('vaccination_name')) <p class="help-block">{{ $errors->first('vaccination_name') }}</p> @endif
                </td>
                <td>
                 {{$vaccine->purpose}}
               </td>
               <td>
                {{$vaccine->actual_date}}
              </td>
              <td>
                {{$vaccine->vaccination_date}}
              </td>
              <td>
               {{$vaccine->remark}}
             </td>
             <td>
              @if($vaccine->status =='Taken')
              <span style="color: green;">Taken</span>
              @else
              <span style="color: red;">Not Taken</span>
              @endif
            </td>
            <td>
              <a href="{{route('vaccination.edit',$vaccine->id)}}"class="action-btns" >
                <span class="glyphicon glyphicon-pencil"></span>
              </a>
              <a href="{{route('vaccination.delete',$vaccine->id)}}" class="submit action-btns">
                <span class="glyphicon glyphicon-trash"></span>
              </a>
              <a href="#" target="_blank" class="action-btns" target="_blank"> <span class="glyphicon glyphicon-eye-open"></span></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div><!-- End x_content -->
</div><!-- End x_panel -->

</div><!-- End vacci_table -->

@endsection