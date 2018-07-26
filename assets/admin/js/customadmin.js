$('#add_another_price_en').on('click',function(){

	$('#price_div_en').append('<div class="row"><div class="form-group col-md-2"><label for="weeks_en">Weeks</label><input type="text" class="form-control" name="weeks_en[]" placeholder="Weeks"></div><div class="form-group col-md-2"><label for="hours_en">Hours</label><input type="text" class="form-control" name="hours_en[]" placeholder="Hours"></div><div class="form-group col-md-2"><label for="">Price(G)</label><input type="text" class="form-control" name="price_en[]" placeholder="Price"></div><div class="form-group col-md-2"><label for="">Price(LA)</label><input type="text" class="form-control" name="price_en_la[]" placeholder="Price"></div><div class="form-group col-md-2"><label for="">Price(TR)</label><input type="text" class="form-control" name="price_en_tr[]" placeholder="Price"></div></div>');
});

$('#add_another_price_sp').on('click',function(){

	$('#price_div_sp').append('<div class="row"><div class="form-group col-md-2"><label for="weeks_sp">Weeks</label><input type="text" class="form-control" name="weeks_sp[]" placeholder="Weeks"></div><div class="form-group col-md-2"><label for="hours_en">Hours</label><input type="text" class="form-control" name="hours_en[]" placeholder="Hours"></div><div class="form-group col-md-2"><label for="">Price(G)</label><input type="text" class="form-control" name="price_sp[]" placeholder="Price"></div><div class="form-group col-md-2"><label for="">Price(LA)</label><input type="text" class="form-control" name="price_sp_la[]" placeholder="Price"></div><div class="form-group col-md-2"><label for="">Price(TR)</label><input type="text" class="form-control" name="price_sp_tr[]" placeholder="Price"></div></div>');
});

$('#add_another_price_tk').on('click',function(){

	$('#price_div_tk').append('<div class="row"><div class="form-group col-md-2"><label for="weeks_tk">Weeks</label><input type="text" class="form-control" name="weeks_tk[]" placeholder="Weeks"></div><div class="form-group col-md-2"><label for="hours_tk">Hours</label><input type="text" class="form-control" name="hours_tk[]" placeholder="Hours"></div><div class="form-group col-md-2"><label for="">Price(G)</label><input type="text" class="form-control" name="price_tk[]" placeholder="Price"></div><div class="form-group col-md-2"><label for="">Price(LA)</label><input type="text" class="form-control" name="price_tk_la[]" placeholder="Price"></div><div class="form-group col-md-2"><label for="">Price(TR)</label><input type="text" class="form-control" name="price_tk_tr[]" placeholder="Price"></div></div>');
});

$('#add_another_price_pr').on('click',function(){

	$('#price_div_pr').append('<div class="row"><div class="form-group col-md-2"><label for="weeks_pr">Weeks</label><input type="text" class="form-control" name="weeks_pr[]" placeholder="Weeks"></div><div class="form-group col-md-2"><label for="hours_pr">Hours</label><input type="text" class="form-control" name="hours_pr[]" placeholder="Hours"></div><div class="form-group col-md-2"><label for="">Price(G)</label><input type="text" class="form-control" name="price_pr[]" placeholder="Price"></div><div class="form-group col-md-2"><label for="">Price(LA)</label><input type="text" class="form-control" name="price_pr_la[]" placeholder="Price"></div><div class="form-group col-md-2"><label for="">Price(TR)</label><input type="text" class="form-control" name="price_pr_tr[]" placeholder="Price"></div></div>');
});

$('#country_en').on('change',function(){

	var country_id = $(this).val();

	$.ajax({

		url: base_url+'/admin/course/getLocation/'+country_id,
		type: 'post',
		dataType: 'json',

		success: function(data)
		{
			if(data)
			{
				$('#location_en').html(data);
			}
		}
	});
});

$('#country_sp').on('change',function(){

	var country_id = $(this).val();

	$.ajax({

		url: base_url+'/admin/course/getLocation/'+country_id,
		type: 'post',
		dataType: 'json',

		success: function(data)
		{
			if(data)
			{
				$('#location_sp').html(data);
			}
		}
	});
});

$('#country_tk').on('change',function(){

	var country_id = $(this).val();

	$.ajax({

		url: base_url+'/admin/course/getLocation/'+country_id,
		type: 'post',
		dataType: 'json',

		success: function(data)
		{
			if(data)
			{
				$('#location_tk').html(data);
			}
		}
	});
});

$('#country_pr').on('change',function(){

	var country_id = $(this).val();

	$.ajax({

		url: base_url+'/admin/course/getLocation/'+country_id,
		type: 'post',
		dataType: 'json',

		success: function(data)
		{
			if(data)
			{
				$('#location_pr').html(data);
			}
		}
	});
});

$('#fee_add_more_en').on('click',function(){


	$('#fee_div_en').append('<div class="row"><div class="col-md-6"><div class="form-group col-md-12"><label for="">Fee Name</label><input type="text" class="form-control" name="fee_name_en[]" placeholder="Fee Name"></div></div><div class="col-md-6"><div class="form-group col-md-12"><label for="">Price</label><textarea name="price_en[]" cols="1" rows="1" class="form-control"></textarea><a href="javascript:void(0)" class="remove_fee pull-right">Remove</a></div></div></div>');
});

$('#fee_add_more_sp').on('click',function(){


	$('#fee_div_sp').append('<div class="row"><div class="col-md-6"><div class="form-group col-md-12"><label for="">Fee Name</label><input type="text" class="form-control" name="fee_name_sp[]" placeholder="Fee Name"></div></div><div class="col-md-6"><div class="form-group col-md-12"><label for="">Price</label><textarea name="price_sp[]" cols="1" rows="1" class="form-control"></textarea><a href="javascript:void(0)" class="remove_fee pull-right">Remove</a></div></div></div>');
});

$('#fee_add_more_tk').on('click',function(){


	$('#fee_div_tk').append('<div class="row"><div class="col-md-6"><div class="form-group col-md-12"><label for="">Fee Name</label><input type="text" class="form-control" name="fee_name_tk[]" placeholder="Fee Name"></div></div><div class="col-md-6"><div class="form-group col-md-12"><label for="">Price</label><textarea name="price_tk[]" cols="1" rows="1" class="form-control"></textarea><a href="javascript:void(0)" class="remove_fee pull-right">Remove</a></div></div></div>');
});

$('#fee_add_more_pr').on('click',function(){

	$('#fee_div_pr').append('<div class="row"><div class="col-md-6"><div class="form-group col-md-12"><label for="">Fee Name</label><input type="text" class="form-control" name="fee_name_pr[]" placeholder="Fee Name"></div></div><div class="col-md-6"><div class="form-group col-md-12"><label for="">Price</label><textarea name="price_pr[]" cols="1" rows="1" class="form-control"></textarea><a href="javascript:void(0)" class="remove_fee pull-right">Remove</a></div></div></div>');
});

$('#acc_add_more_en').on('click',function(){

	$('#acc_div_en').append('<div class="row"><div class="col-md-4"><div class="form-group col-md-12"><label for="">Accommodation Title</label><input type="text" class="form-control" name="acc_title_en[]" placeholder="Accommodation Title"></div></div><div class="col-md-4"><div class="form-group col-md-6"><label for="">Single</label><input type="text" name="single_en[]" class="form-control"></div><div class="form-group col-md-6"><label for="">Status</label><input type="text" name="single_status_en[]" class="form-control" placeholder="e.g p/Week"></div></div><div class="col-md-4"><div class="form-group col-md-6"><label for="">Double</label><input type="text" name="double_en[]" class="form-control"></div><div class="form-group col-md-6"><label for="">Status</label><input type="text" name="double_status_en[]" class="form-control" placeholder="e.g p/week"><a href="javascript:void(0)" class="remove_acc pull-right">Remove</a></div></div></div>');
});

$('#acc_add_more_sp').on('click',function(){

	$('#acc_div_sp').append('<div class="row"><div class="col-md-4"><div class="form-group col-md-12"><label for="">Accommodation Title</label><input type="text" class="form-control" name="acc_title_sp[]" placeholder="Accommodation Title"></div></div><div class="col-md-4"><div class="form-group col-md-6"><label for="">Single</label><input type="text" name="single_sp[]" class="form-control"></div><div class="form-group col-md-6"><label for="">Status</label><input type="text" name="single_status_sp[]" class="form-control" placeholder="e.g p/Week"></div></div><div class="col-md-4"><div class="form-group col-md-6"><label for="">Double</label><input type="text" name="double_sp[]"class="form-control"></div><div class="form-group col-md-6"><label for="">Status</label><input type="text" name="double_status_sp[]" class="form-control" placeholder="e.g p/week"><a href="javascript:void(0)" class="remove_acc pull-right">Remove</a></div></div></div>');
});

$('#acc_add_more_tk').on('click',function(){

	$('#acc_div_tk').append('<div class="row"><div class="col-md-4"><div class="form-group col-md-12"><label for="">Accommodation Title</label><input type="text" class="form-control" name="acc_title_tk[]" placeholder="Accommodation Title"></div></div><div class="col-md-4"><div class="form-group col-md-6"><label for="">Single</label><input type="text" name="single_tk[]" class="form-control"></div><div class="form-group col-md-6"><label for="">Status</label><input type="text" name="single_status_tk[]" class="form-control" placeholder="e.g p/Week"></div></div><div class="col-md-4"><div class="form-group col-md-6"><label for="">Double</label><input type="text" name="double_tk[]" class="form-control"></div><div class="form-group col-md-6"><label for="">Status</label><input type="text" name="double_status_tk[]" class="form-control" placeholder="e.g p/week"><a href="javascript:void(0)" class="remove_acc pull-right">Remove</a></div></div></div>');
});

$('#acc_add_more_pr').on('click',function(){

	$('#acc_div_pr').append('<div class="row"><div class="col-md-4"><div class="form-group col-md-12"><label for="">Accommodation Title</label><input type="text" class="form-control" name="acc_title_pr[]" placeholder="Accommodation Title"></div></div><div class="col-md-4"><div class="form-group col-md-6"><label for="">Single</label><input type="text" name="single_pr[]" class="form-control"></div><div class="form-group col-md-6"><label for="">Status</label><input type="text" name="single_status_pr[]" class="form-control" placeholder="e.g p/Week"></div></div><div class="col-md-4"><div class="form-group col-md-6"><label for="">Double</label><input type="text" name="double_pr[]" class="form-control"></div><div class="form-group col-md-6"><label for="">Staus</label><input type="text" name="double_status_pr[]" class="form-control" placeholder="e.g p/week"><a href="javascript:void(0)" class="remove_acc pull-right">Remove</a></div></div></div>');
});

$(document).on('click','.remove_price',function(){	

	$(this).parent().parent().remove();	

});

$(document).on('click','.remove_fee',function(){	

	$(this).parent().parent().parent().remove();	

});

$(document).on('click','.remove_acc',function(){	

	$(this).parent().parent().parent().remove();	

});