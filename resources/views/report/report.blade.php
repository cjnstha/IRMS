@extends('layouts.masters')
@section('content')


<div class="x_panel patient-list">
	<div class="x_title">
		<h2>Report</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<div class="table_in_div">
			<div class="table-responsive custom-table">
				<table id="myTable" class="dataTableClass table table-striped table-bordered c-blue table-picker dataTable no-footer">
					<thead>
						<tr>
							<th>SNo.</th>
							<th>Number of Children</th>
							<th>Number of Vaccination Taken</th>
							<th>Number of Complain Registered</th>
						</tr>
					</thead>
					<tbody>
						@php 
						$i =1
						@endphp
						<tr>
							<td>{{$i++}}</td>
							<td>{{$children_count}}</td>
							<td>{{$vaccination_count}}</td>
							<td>{{$complain_count}}</td>
							
							
							{{-- <td>
								<a href="{{route('children.edit',$child->id)}}" class="action-btns">
									<span class="glyphicon glyphicon-pencil"></span>
								</a>
								<a href="{{url('children-info/delete/'.$child->id)}}" class="submit action-btns">
									<span class="glyphicon glyphicon-trash"></span>
								</a>
								<a href="" target="_blank" class="action-btns" target="_blank"> <span class="glyphicon glyphicon-eye-open"></span></a>
							</td> --}}
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>




@endsection