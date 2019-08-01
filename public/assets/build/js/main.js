(function($) {

    // Sumo Select Box
    function sumoselect(){
        window.Search = $('select.sumoselect').SumoSelect({ csvDispCount: 3, search: true, searchText:'Enter here.' });
        
    }


    $(function(){
      $( ".datepicker" ).datepicker();
  }); 


    // Time Picker
    $(function(){
        $('.timepicker').mdtimepicker(); //Initializes the time picker
    });


    // Track Inventory Checkbox Hide And Show

    function Trackint(){
        $("#Trackcheckbox").click(function () {
            if ($(this).is(":checked")) {
                $(".trackinventory_wrapper").show();
            } else {
                $(".trackinventory_wrapper").hide();
            }
        });
    }

    function toggle_visibility() {

        $('#add-new').click(function () {
            $('#vacci_crud').slideDown('slow', function () {
                $('#vacc_name').focus();
            });
        });

    }

    function cancelbtn() {

        $('#btn-cancel').click(function () {
            $('#vacci_crud').slideUp('slow');
        });
    }



    // Input Text Field Enable And Disable Through Checkbox
        // function disableTextfield(){  
        //   if(document.getElementById("checkMe").checked == true){  
        //       document.getElementById("myText").disabled = true;  
        //   }else{
        //     document.getElementById("myText").disabled = false;
        //   }  
        // }  

        function disableTextfield(){ 
            $("#checkme").click(function () {
                if ($(this).is(":checked")) {
                    $(".disableTextfield").removeAttr("disabled");
                    $(".disableTextfield").focus();
                } else {
                    $(".disableTextfield").attr("disabled", "disabled");
                }
            });

            $("#checkme-2").click(function () {
                if ($(this).is(":checked")) {
                    $(".disabletextfield").removeAttr("disabled");
                    $(".disabletextfield").focus();
                } else {
                    $(".disabletextfield").attr("disabled", "disabled");
                }
            });
        }



        $(document).ready(function() {
         sumoselect();
         // datepick();
         // time();
       // show1();
       // show2();
       Trackint();
       disableTextfield();
       toggle_visibility();
       cancelbtn();

   });






        $(window).resize(function() {
        });
        $(window).scroll(function() {
        });
        $(window).load(function() {
        });
    })(window.jQuery);