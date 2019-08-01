var root_url = base_url;

$(document).ready(function(){
	$('#filter-search-vaccin-info').on('submit',function(event){
		

		var formData = $("#filter-search-vaccin-info").serialize();

		var url = "/vaccn-info/";
		var baseurl = root_url + url;
		var filterajax = baseurl + "filter";
		// alert(filterajax);

		$.ajax ({
			type: "POST",
			url: filterajax,
			data: formData,
			dataType    : 'json',

			headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            
			success:function(data){

				table = $('#myTable').DataTable();
				table.destroy();

				table = $('.tbl_vaccine').DataTable();
				table.destroy();

				$('#myTable').hide();
				$('.table_in_div').html('');
				$('.table_in_div').html(data.html);
				$('.tbl_vaccine').DataTable();
			},
			error: function (data) {
                    
                }
       })
        event.preventDefault();
    });

});

$(document).ready(function(){
	$('#filter-search-complain').on('submit',function(event){

		new PNotify({
              title: 'Processing...',
              type: 'info',
              styling: 'bootstrap3'
          });
		
		var formData = $("#filter-search-complain").serialize();
		var url = "/complain/";
		var baseurl = root_url + url;
		var filterajax = baseurl + "filter";

		$.ajax({
			type: "POST",
			url: filterajax,
			data: formData,

			headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

			success:function(data){
				table = $('#myTable').DataTable();
				table.destroy();

				table = $('.tbl_complain').DataTable();
				table.destroy();

				$('#myTable').hide();
				$('.table_in_div').html('');
				$('.table_in_div').html(data.html);
				  $('.tbl_complain').DataTable();
				new PNotify({
                                  title: 'Request Submit',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });

			},
			error:function(data){
           new PNotify({
                                  title: 'Request Failed',
                                  type: 'error',
                                  styling: 'bootstrap3'
                              });

         }
		});
		event.preventDefault();
	});

});
		