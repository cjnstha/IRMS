@extends('layouts.masters')
@section('content')


<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 main-title">
                                                
	    <div class="page-title x_title">
	        <div class="title_left">
	            <h3>Dashboard</h3>
	        </div>
	        <div class="clearflix"></div>
	    </div>

		<!-- <div class="x_panel"> -->
	    
	    <div class="row tile_count">
	        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
	            <span class="count_top"><i class="fa fa-question-circle"></i> Unresolved</span>
	            <div class="count">2</div>
	            <span class="count_bottom"><i class="green">4% </i> From last Week</span>
	        </div>
	        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
	            <span class="count_top"><i class="fa fa-clock-o"></i> Open</span>
	            <div class="count">1</div>
	            <span class="count_bottom"><i class="green">
	                    3% </i> From last Week</span>
	        </div>
	        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
	            <span class="count_top"><i class=" fa fa-check-circle"></i> Completed</span>
	            <div class="count green">5</div>
	            <span class="count_bottom"><i class="green">
	                    34% </i> From last Week</span>
	        </div>
	        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
	            <span class="count_top"><i class="fa fa-pause-circle"></i> On hold</span>
	            <div class="count">5</div>
	            <span class="count_bottom"><i class="green">
	                    34% </i> From last Week</span>
	        </div>
	        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
	            <span class="count_top"><i class="fa fa-exclamation-circle"></i> Overdue</span>
	            <div class="count">3</div>
	            <span class="count_bottom"><i class="green">
	                    34% </i> From last Week</span>
	        </div>
	    </div>
    
    
    
    </div>
</div>


@endsection