@extends('layouts.masters')
@section('content')

<!-- page content -->

<div class="x_panel filter">
  <div class="x_title">
    <h2>Filter</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content bg-gray no-search">
    <form class="form-grid-v2 FilterForm" method="POST" id="filter-search-complain" action="javascript:;">
      {{csrf_field()}}
      <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-4">
          <div class="form-group">
            <label for="" class="control-label">Vaccination Date</label>
            <fieldset>
              <div class="control-group dateTime">
                <div class="controls">
                  <input type="text" name="vacci_date" placeholder="Enter Date" class="form-control has-feedback-left datepicker" data-date-format="mm/dd/yy" aria-describedby="">
                  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>

                </div>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-4">
          <div class="form-group">
            <label for="" class="control-label">Childrem ID</label>
            <select class="form-control sumoselect" name="child_id">
              <option selected="" disabled="">--Select Here--</option>
              @foreach($complain as $children)
              <option value="{{$children->children_id}}">{{$children->children_id}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-4">
          <div class="form-group">
            <label for="" class="control-label">Vaccination Name</label>
            <select class="form-control sumoselect" name="vacci_name">
             <option selected="" disabled="">--Select Here--</option>
             @foreach($complain as $filter)
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
      <h2>Complain Information</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <span>
            <a href="{{route('complain.create')}}" class="btn btn-primary">Add New</a>
            {{-- <button class="btn btn-primary" id="add-new" onclick="toggle_visibility()">Add New</button> --}}
          </span>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="table_in_div">
        <div class="table-responsive custom-table">
            <table id="myTable" class="dataTableClass table table-striped table-bordered c-blue table-picker dataTable no-footer">
              <thead>
                <tr>
                  <th>SNo.</th>
                  <th>Children ID</th>
                  <th>Vaccination Date</th>
                  <th>Vaccination Name</th>
                  <th>Vaccination Gap</th>
                  <th>Issues</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php 
                $i =1
                @endphp
                @foreach($complain as $complains)
                <tr>
                  <td>{{$i++}}</td>
                  <td>
                    {{$complains->children_id}}
                  </td>
                  <td>
                   {{$complains->vaccination_date}}
                  </td>
                  <td>
                    {{$complains->vaccination_name}}
                  </td>
                  <td>
                    {{$complains->vaccination_gap}}
                  </td>
                  <td>
                   {{$complains->issues}}
                  </td>
                  <td>
                                <a href="{{route('complain.edit',$complains->id)}}"class="action-btns" >
                                  <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                <a href="{{route('complain.delete',$complains->id)}}" class="submit action-btns">
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