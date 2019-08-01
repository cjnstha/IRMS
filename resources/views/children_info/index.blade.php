@extends('layouts.masters')
@section('content')

<div class="x_panel filter">
                <div class="x_title">
                  <h2>Filter</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content bg-gray no-search">
                  <form class="form-grid-v2 FilterForm">
                    <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="control-label">From</label>
                            <fieldset>
                              <div class="control-group dateTime">
                                <div class="controls">
                                                  
                                  <input type="text" name="" placeholder="Enter Date" class="form-control has-feedback-left datepicker" data-date-format="mm/dd/yy" aria-describedby="">
                                  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                   
                                  </div>
                                </div>
                              </fieldset>
                        </div>
                      </div>
                      <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="control-label">To</label>
                            <fieldset>
                              <div class="control-group dateTime">
                                <div class="controls">
                                                  
                                  <input type="text" name="" class="form-control has-feedback-left timepicker" placeholder="Enter Time" aria-describedby="">
                                  <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>
                                                   
                                  </div>
                                </div>
                              </fieldset>
                        </div>
                      </div>
                      <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="control-label">Particular</label>
                            <input class="form-control" placeholder="Particular" name="name" type="text">
                        </div>
                      </div>
                      <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="control-label">Amount</label>
                            <input class="form-control" placeholder="Amount" name="name" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="form-footer text-right">
                      <button type="submit" class="btn btn-success btn-sm">Get</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="x_panel patient-list">
                <div class="x_title">
                  <h2></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li>
                      <span>
                      <a href="{{route('children.create')}}" class="btn btn-primary">Add New</a>
                      </span>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                @include('layouts.session')
                <div class="x_content">
                  <div class="table_in_div">
                    <div class="table-responsive custom-table">
                      <table id="myTable" class="dataTableClass table table-striped table-bordered c-blue table-picker dataTable no-footer">
                        <thead>
                          <tr>
                            <th>SNo.</th>
                            <th>Parent Name</th>
                            <th>Child Name</th>
                            <th>Child ID</th>
                            <th>Gender</th>
                            <th>Birth Time</th>
                            <th>Date of Birth</th>
                            <th>Place of Birth</th>
                            <th>Delivery Type</th>
                            <th>Ward No.</th>
                            <th>Municipality</th>
                            <th>District</th>
                            <th>Province</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php 
                            $i =1
                            @endphp
                          @foreach($childs as $child)
                          <tr>
                          <td>{{$i++}}</td>
                          <td>{{$child->parent_name}}</td>
                          <td>{{$child->child_name}}</td>
                          <td>{{$child->child_id}}</td>
                          <td>{{$child->gender}}</td>
                          <td>{{$child->birth_time}}</td>
                          <td>{{$child->dob}}</td>
                          <td>{{$child->birth_at}}</td>
                          <td>{{$child->delivery_type}}</td>
                          <td>{{$child->ward_no}}</td>
                          <td>{{$child->municipality}}</td>
                          <td>{{$child->district}}</td>
                          <td>{{$child->province}}</td>
                          <td>
                              <a href="{{route('children.edit',$child->id)}}" class="action-btns">
                                <span class="glyphicon glyphicon-pencil"></span>
                              </a>
                                <a href="{{url('children-info/delete/'.$child->id)}}" class="submit action-btns">
                                  <span class="glyphicon glyphicon-trash"></span>
                                </a>
                              <a href="" target="_blank" class="action-btns" target="_blank"> <span class="glyphicon glyphicon-eye-open"></span></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>




@endsection