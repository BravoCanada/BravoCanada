$(document).on('change','#location_en',function(){

	var location_id 	=	$(this).val();

	if(location_id)
	{
		$.ajax({

			url: base_url+'price/getCourseById/'+location_id,
			dataType : 'json',

			success: function(data)
			{
				if(data)
				{
					$('#div_course_en').removeClass('d-none');					
					$('#course_en').html(data);
				}
			}
		});
	}
});

$(document).on('change','#course_en',function(){

	var course_id 	=	$(this).val();

	if(course_id)
	{
		$.ajax({

			url: base_url+'price/getCourseDetail/'+course_id,
			dataType: 'json',

			success : function(data)
			{
				if(data)
				{
					$('#div_date_en').removeClass('d-none');
					$('#start_date').html(data.starting_date);
					$('#duration').html(data.weeks);
					$('#course_id').val(data.course_id);
					$('#location_id').val(data.location_id);
				}
			}
		});
	}
});

$(document).on('change','#start_date',function(){

	var start_date = $(this).val();

	if(start_date)
	{
		$('#div_duration_en').removeClass('d-none');
		$('.current_date').text(start_date);
	}
});

$(document).on('change','#duration',function(){

	//var course_week = $(this).text();

	var course_id 	= 	$('#course_id').val();
	var location_en	=	$('#location_en').val();
	var course_en 	=	$('#course_en').val();
	var duration 	=	$('#duration').val();

	if((course_id != '') && (location_en != '') && (course_en != '') && (duration != ''))
	{
		$.ajax({

			url: base_url+'price/getPrice/'+course_id+'/'+duration,
			dataType: 'json',

			success: function(data)
			{
				if(data)
				{
					
					$('#summary_div_en').removeClass('d-none');
					$('.location_name').html(data.location_name);
					$('.course_name').html(data.course_name);
					$('.current_date').html(data.current_date);
					$('.course_price').html(parseFloat(data.course_price).toFixed(2));
					
					$('#hidden_course_price').val(data.course_price);

					var course_price =	parseFloat($('#hidden_course_price').val());
					var reg_fee 	 =  parseFloat($('.reg_fee').text());

					calculation(course_price,reg_fee);

					//var total_price = parseFloat(parseFloat($('.course_price').text())+parseFloat($('.reg_fee').text())).toFixed(2);
					//$('#total_price').text(total_price);
				}
			}
		});
	}
});

$(document).on('click','#btn_course_page',function(){

	var location_en 	=	$('#location_en').val();
	var course_en 		=	$('#course_en').val();

	if(location_en)
	{
		if(course_en)
		{			
			$('#select_location_div').addClass('d-none');
			$('#select_accommodation_div').removeClass('d-none');

			$('#btn_acc_page').removeClass('d-none');
			$('#btn_course_page').addClass('d-none');

			$('#course_en').css('border','1px solid green');
		}

		else
		{
			$('#course_en').css('border','1px solid red');
		}

		$('#location_en').css('border','1px solid green');
		
	}

	else
	{
		$('#location_en').css('border','1px solid red');
	} 

	
});

$(document).on('click','#find_accommodation',function(){

	var location_id 		= 	$('#location_id').val();
	var age 				=	$('#age').val();
	var acc_start_date		=	$('#acc_start_date').val();

	if(age)
	{
		$('#age').css('border','');
		if(acc_start_date)
		{
			$('#acc_start_date').css('border','');
			if(location_id)
			{				
				$.ajax({


					url: base_url+'price/getAccommodation/'+location_id,

					dataType: 'json',

					success: function(data)
					{
						if(data)
						{
							$('#accommodation_body').html(data);
						}
					}
				});
			}

		}

		else
		{
			$('#acc_start_date').css('border','1px solid red');
		}	

	}

	else
	{		
		$('#age').css('border','1px solid red');
	}
	

});

$(document).on('click','.acc_select',function(){

	var acc_type 			=	$(this).data('roomtype');	
	var acc_price 			=	parseFloat($(this).data('accprice'));
	var duration_of_stay	=	parseFloat($('#duration_of_stay').val());

	$('.div_acc_price').removeClass('d-none');
	$('.acc_price').text(parseFloat(acc_price*duration_of_stay).toFixed(2));
	$('.acc_reg_fee').text(parseFloat(100).toFixed(2));
	$('.div_acc_reg_fee').removeClass('d-none');
	$('#hidden_acc_price').val($(this).data('accprice'));
	$('#hidden_acc_type').val(acc_type);	

	var course_price 		=	parseFloat($('#hidden_course_price').val());
	var reg_fee 			=	parseFloat($('.reg_fee').text());
	var accommodation_price	=	parseFloat(acc_price*duration_of_stay);
	var acc_reg_fee 		=	parseFloat($('.acc_reg_fee').text());

	$('#hidden_acc_placement_fee').val(acc_reg_fee);

	calculation(course_price,reg_fee,accommodation_price,acc_reg_fee);

	//var total_price = parseFloat(parseFloat($('.course_price').text())+parseFloat($('.reg_fee').text()) + parseFloat(acc_price*duration_of_stay) + parseFloat($('.acc_reg_fee').text())).toFixed(2);
	//$('#total_price').text(total_price);


});

$(document).on('click','#btn_acc_page',function(){

	$('#select_airport_section').removeClass('d-none');
	$('#select_accommodation_div').addClass('d-none');
	$('#btn_acc_page').addClass('d-none');
	$('#btn_airport_page').removeClass('d-none');	

});

$(document).on('change','#airport',function(){

	var airport 	=	$(this).val();

	if(airport)
	{
		//$('#transfer').html('<option>Select Option</option><option value="Arrival">Arrival</option><option value="Departure">Departure</option>');
		$('#transfer_div').removeClass('d-none');		
	}

	else
	{
		//$('#transfer').html('<option>Select Option</option><option value="Arrival">Arrival</option><option value="Departure">Departure</option>');
		$('#transfer_div').addClass('d-none');
		$('.div_airport_charges').addClass('d-none');
		$('#hidden_airport_price').val('');
		$('#flight_no').val('');
		$('#arrival_date').val('');

		var course_price 		 =	parseFloat($('#hidden_course_price').val());
		var reg_fee 			 = 	parseFloat($('.reg_fee').text());
		var acc_reg_fee 		 =  parseFloat($('.acc_reg_fee').text());
		var accommodation_price  =	(parseFloat($('.acc_price').text())) ? parseFloat($('.acc_price').text()) : 0.00;

		calculation(course_price,reg_fee,accommodation_price,acc_reg_fee,airport_chages=0);
	}
	
});

$(document).on('change','#arrival_date',function(){

	var arrival_date 			 = 	$(this).val();	
	var flight_no 				 =	$('#flight_no').val();

	if(arrival_date)
	{

		if(flight_no)
		{
			var airport 		     =  $('#airport').val();
			//var airport_chages       =  (parseFloat($('.airport_chages').text())) ? parseFloat($('.airport_chages').text()) : 0.00;
			var airport_chages       =  50.00;
			var accommodation_price  =	(parseFloat($('.acc_price').text())) ? parseFloat($('.acc_price').text()) : 0.00;
			

			var airport_name 	 	 = 	airport+'-'+arrival_date;			

			$('.div_airport_charges').removeClass('d-none');
			$('.airport_chages').text(parseFloat(airport_chages).toFixed(2));
			$('.airport_name').text(airport_name);
			$('#hidden_airport_price').val(airport_chages);

			var course_price 		 =	parseFloat($('#hidden_course_price').val());
			var reg_fee 			 = 	parseFloat($('.reg_fee').text());
			var acc_reg_fee 		 =  parseFloat($('.acc_reg_fee').text());		
			
			calculation(course_price,reg_fee,accommodation_price,acc_reg_fee,airport_chages);

			$('#flight_no').css('border','');

			//var total_price 		 = 	parseFloat(parseFloat($('.course_price').text())+parseFloat($('.reg_fee').text()) + acc_price + parseFloat($('.acc_reg_fee').text()) + airport_chages).toFixed(2);
			//$('#total_price').text(total_price);
		}

		else
		{
			$('#flight_no').css('border','1px solid red');
			$(this).val('');
			$('.airport_chages').text('');
			//calculation(course_price,reg_fee,accommodation_price,acc_reg_fee,airport_chages=0);
		}	

	}
	
});

$(document).on('change','#private_lessons',function(){

	var private_value 		 =	$(this).val();

	var private_lessons  	 =  (parseFloat($('.private_lessons_chages').text())) ? parseFloat($('.private_lessons_chages').text()) : 0.00;
	var airport_chages       =  (parseFloat($('.airport_chages').text())) ? parseFloat($('.airport_chages').text()) : 0.00;
	var acc_price 			 =	(parseFloat($('.acc_price').text())) ? parseFloat($('.acc_price').text()) : 0.00;

	var course_price 		 =	parseFloat($('#course_price').text());
	var reg_fee 			 = 	parseFloat($('.reg_fee').text());
	var acc_reg_fee 		 =  parseFloat($('.acc_reg_fee').text());

	if(private_value)
	{		
		
		$('.div_private_lessons').removeClass('d-none');	

		calculation(course_price,reg_fee,acc_price,acc_reg_fee,airport_chages,private_lessons);
		$('#hidden_private_lessons_price').val(private_lessons);

		//var total_price = parseFloat(parseFloat($('.course_price').text())+parseFloat($('.reg_fee').text()) + acc_price + parseFloat($('.acc_reg_fee').text()) + airport_chages + private_lessons).toFixed(2);
		//$('#total_price').text(total_price);
	}

	else
	{		
		$('.div_private_lessons').addClass('d-none');
		$('#hidden_private_lessons_price').val('');
		calculation(course_price,reg_fee,acc_price,acc_reg_fee,airport_chages,private_lessons=0);
	}
});

$(document).on('change','#insurance',function(){

	var insurance_value 	 = $(this).val();

	var course_price 		 =	parseFloat($('#hidden_course_price').val());
	var reg_fee 			 = 	parseFloat($('.reg_fee').text());
	var acc_reg_fee 		 =  parseFloat($('.acc_reg_fee').text());
	var insurance_chages 	 =  100.00;

	//var insurance_chages  	 =  (parseFloat($('.insurance_chages').text())) ? parseFloat($('.insurance_chages').text()) : 0.00;
	//var private_lessons  	 =  (parseFloat($('.private_lessons_chages').text())) ? parseFloat($('.private_lessons_chages').text()) : 0.00;
	var private_lessons 	 =	0.00;
	var airport_chages       =  (parseFloat($('.airport_chages').text())) ? parseFloat($('.airport_chages').text()) : 0.00;
	var acc_price 			 =	(parseFloat($('.acc_price').text())) ? parseFloat($('.acc_price').text()) : 0.00;

	if(insurance_value)
	{
		calculation(course_price,reg_fee,acc_price,acc_reg_fee,airport_chages,private_lessons,insurance_chages);
		//var total_price = parseFloat(parseFloat($('.course_price').text())+parseFloat($('.reg_fee').text()) + acc_price + parseFloat($('.acc_reg_fee').text()) + airport_chages + private_lessons + insurance_chages).toFixed(2);
		//$('#total_price').text(total_price);
		$('.div_insurance').removeClass('d-none');
		$('.insurance_chages').text(parseFloat(insurance_chages).toFixed(2));
		$('#hidden_student_insurance').val(insurance_chages);
	}

	else
	{
		calculation(course_price,reg_fee,acc_price,acc_reg_fee,airport_chages,private_lessons,insurance_chages=0);
		$('.div_insurance').addClass('d-none');
		$('#hidden_student_insurance').val('');
		$('.insurance_chages').text('');
	}
});

$(document).on('click','#btn_airport_page',function(){


	$('#btn_airport_page').addClass('d-none');
	$('#btn_book_now').removeClass('d-none');
	$('#personal_info_section').removeClass('d-none');
	$('#select_airport_section').addClass('d-none');
	$('#hidden_total_price').val($('#total_price').text());
	$('#btn_submit').removeClass('d-none');

	/*$.ajax({

		url: base_url+'price/getAllCountries',
		dataType: 'json',

		success: function(data)
		{
			if(data)
			{
				$('#nationality').html(data);
				$('#country_of_birth').html(data);
				$('#country_citizenship').html(data);
				$('#country').html(data);
			}
		}
	});*/
});

function calculation(course_price=0,reg_fee=0,accommodation_price=0,acc_reg_fee=0,airport_chages=0,private_lessons=0,insurance_chages=0)
{	
	var total_price = parseFloat(course_price+reg_fee+accommodation_price+acc_reg_fee+airport_chages+private_lessons+insurance_chages).toFixed(2);
	$('#total_price').text(total_price);
}

$(document).on('change','#course_week',function(){

	var course_id 		=	$('#select_course_name').val();
	var course_week 	=   $(this).val();
	var country_code 	=	$('#select_other_country').val();
	var inst_id 		=	$('#hidden_inst_id').val();	
	var hour_key 		=	$('#hours_en').val();
	//$('#select_other_country').val('');
	
	$.ajax({

		url: base_url+'course/getDurationHrs/'+course_id+'/'+course_week+'/'+hour_key+'/'+country_code,
		dataType: 'json',			
		success: function(data)
		{
			if(data)
			{
				$('#hours_en').html(data.duration);
				$('#course_price').text(parseFloat(data.price).toFixed(2));
				$('#hidden_course_price').val(data.price);
			}
		}
	});
	
	
});

$(document).on('change','#hours_en',function(){

	var course_id 			 =	$('#select_course_name').val();
	var hour_key 			 = 	$(this).val();
	var week 				 =  $('#course_week').val();
	var country_code 		 =  $('#select_other_country').val();

	$.ajax({

		url: base_url+'course/getPriceByHours/'+course_id+'/'+hour_key+'/'+week+'/'+country_code,
		dataType: 'json',

		success: function(data)
		{
			if(data)
			{
				$('#course_price').text(parseFloat(data).toFixed(2));
				$('#hidden_course_price').val(data);
			}
		}
	});


});

$(document).on('change','#select_course_name',function(){

	$('#select_other_country').val('');
	 var course_id 	=	$(this).val();
	// var course_week =   $('#course_week').val();
	$.ajax({

		url: base_url+'course/getDuration/'+course_id,
		dataType : 'json',
		success: function(data)
		{
			if(data)
			{
				$('#course_price').text(parseFloat(data.price).toFixed(2));
				$('#hidden_course_price').val(data.price);
				$('#course_week').html(data.duration);
				
			}
		}
	});
});

$(document).on('click','#btn_bookNow',function(){

	var course_id 			 =	$('#select_course_name').val();
	var course_week 		 = 	$('#course_week').val();
	var starting_date 	 	 =	$('#starting_date').val();
	var select_other_country =	$('#select_other_country').val();
	var course_code			 =	$('#select_other_country').val();
			

	if(select_other_country)
	{
		$('#select_other_country').css('border','');
		window.location.href = 	base_url+'course/bookCourse/'+course_id+'/'+course_week+'/'+starting_date+'/'+course_code;
	}

	else
	{
		$('#select_other_country').css('border','1px solid red');
	}

	
});


$(document).on('click','#btn_bookNow1',function(){

	var course_id 			 =	$('#select_course_name').val();
	var course_week 		 = 	$('#course_week').val();
	var starting_date 	 	 =	$('#starting_date').val();
				

	if(select_other_country)
	{
		$('#select_other_country').css('border','');
		window.location.href = 	base_url+'course/bookCourse/'+course_id+'/'+course_week+'/'+starting_date+'/'+course_code;
	}

	else
	{
		$('#select_other_country').css('border','1px solid red');
	}

	
});




$(document).on('click','#homestay_check',function(){

	if($("#homestay_check").prop('checked') == true)
	{
    	$('#homestay_div').removeClass('d-none');
	}

	else
	{
		$('#homestay_div').addClass('d-none');
	}

});

$(document).on('click','#airport_transfer_check',function(){

	if($('#airport_transfer_check').prop('checked') == true)
	{
		$('#airport_div').removeClass('d-none');
	}

	else
	{
		$('#airport_div').addClass('d-none');
	}
});

$(document).on('focusout','#fname',function(){

	var fname =	$(this).val();

	$('#student_name').text(fname);
});

$(document).on('click','#btn_tc',function(){

	$('#tcModal').modal('show');
});

$(document).on('change','#location_select',function(){
	var location_id =	$(this).val();
	if(location)
	{
		$.ajax({

			url: base_url+'course/getCourseTag/'+location_id,
			dataType: 'json',
			success: function(data)
			{
				if(data)
				{
					$('#course_select').html(data.course);
					//$('#course_duration').html(data.duration);
				}
			}
		});
	}
});

$(document).on('change','#select_course_location',function(){
	// var location_id =	$(this).val();
	// if(location)
	// {
	// 	$.ajax({
	// 		url: base_url+'course/getCourseByLocationId/'+location_id,
	// 		dataType: 'json',
	// 		success: function(data)
	// 		{
	// 			if(data)
	// 			{
	// 				$('.hiddy').show();
	// 				$('#select_course_name').html('<option value="">Select Course</option>');
	// 				$('#select_course_name').append(data.course);
	// 				$('#course_week').html(data.duration);
	// 			}
	// 		}
	// 	});
	// }
});

/*$(document).on('change','#course_select',function(){

	var course_id 	=	$(this).val();

	if(course_id)
	{

		$.ajax({

			url: base_url+'course/getCourseDuration/'+course_id,
			dataType: 'json',
			success: function(data)
			{
				if(data)
				{
					$('#course_duration').html(data);
				}
			}
		});

	}

});*/


 $(document).ready(function() {    
    
      $('#header_form').validate({
          rules: {
              location_select: {
                  required: true                          
              }, 

              course_select: {
                  required: true                          
              },

              course_duration: {
                  required: true                          
              } ,

               month_select: {
                  required: true                          
              }           
                            
          }
        
      });
   });

 $(document).on('click','#btn_filter',function(){

 	var location_id 	=	$('input[name=location_radio]:checked').val();
 	var tag_id 			=	$('#hidden_tag_id').val();

 	if(location_id)
 	{
 		$.ajax({

 			url: base_url+'course/getInstitute/'+location_id+'/'+tag_id,
 			dataType: 'json',
 			success: function(data)
 			{
 				if(data)
 				{
 					$('#bind_institute').html(data);
 				}

 				else
 				{
 					$('#bind_institute').html('');
 				}
 			}
 		});
 	}


 });

 $(document).on('click','.location_radio',function(){

 	var location_id 	=	$(this).val();
 	var tag_id 			=	$('#hidden_tag_id').val();

 	if(location_id)
 	{
 		$.ajax({

 			url: base_url+'course/getInstitute/'+location_id+'/'+tag_id,
 			dataType: 'json',
 			success: function(data)
 			{
 				if(data)
 				{
 					$('#bind_institute').html(data);
 				}

 				else
 				{
 					$('#bind_institute').html('');
 				}
 			}
 		});
 	}
 });

 $(document).on('change','#month_select',function(){ 	

 	var select_date 		=	$(this).val();
 	

	 $.ajax({
	  type: 'POST',
	  dataType: 'json',
	  url: base_url+'home/getMondays',
	  data: {select_date:select_date},
	  success: function(data) {

	  	if(data)
	  	{
	  		$('#day_select').html(data);
	  	}
	   
	  }
	 });


 });

 $(document).on('change','#select_other_country',function(){

 	var country_code 	=	$(this).val();
 	var course_id 		=	$('#select_course_name').val(); 	
 	var inst_id 		=	$('#hidden_inst_id').val();

 	$.ajax({

 		url: base_url+'course/getPriceByCountry/'+course_id+'/'+country_code+'/'+inst_id,
 		dataType: 'json',
 		success: function(data)
 		{
 			if(data)
 			{
 				$('#course_price').text(parseFloat(data.price).toFixed(2));
 				$('#hidden_course_price').val(data.price);
 				$('#course_week').html(data.weeks);
 				$('#hours_en').html(data.hours);
 				$('#div_course_price').removeClass('d-none');
 			}
 		}
 	});


 });