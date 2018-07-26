      $('#all_optional_equipment').on('click',function(){

         if($("#all_optional_equipment").prop('checked') == true)
         {
             $('.veh_eqpt').prop('checked', true);
         }

         else
         {
            $('.veh_eqpt').prop('checked', false);
         }
      });

      $('#prior_paint_yes').on('click',function(){

         if($('#prior_paint_yes').prop('checked') == true)
         {
            $('.prior_paint_description').prop('disabled',false);
            $('.prior_paint_condition').prop('disabled',false);
         }

         else
         {
            $('.prior_paint_description').prop('disabled',true);
            $('.prior_paint_condition').prop('disabled',true);
         }
      });

       $('#interior_condition_checkbox').on('click',function(){

         if($('#interior_condition_checkbox').prop('checked') == true)
         {
            $('.interior_damage_description').prop('disabled',true);
            $('.interior_damage_condition').prop('disabled',true);
            $('.interior_damage_severity').prop('disabled',true);
         }

         else
         {
            $('.interior_damage_description').prop('disabled',false);
            $('.interior_damage_condition').prop('disabled',false);
            $('.interior_damage_severity').prop('disabled',false);
         }
      });

        $('#exterior_condition_checkbox').on('click',function(){

         if($('#exterior_condition_checkbox').prop('checked') == true)
         {
            $('.exterior_damage_description').prop('disabled',true);
            $('.exterior_damage_condition').prop('disabled',true);
            $('.exterior_damage_severity').prop('disabled',true);
         }

         else
         {
            $('.exterior_damage_description').prop('disabled',false);
            $('.exterior_damage_condition').prop('disabled',false);
            $('.exterior_damage_severity').prop('disabled',false);
         }
      });

      $('#veh_condition_add_tr').on('click',function(){

         $.ajax({

            url: base_url+'sell/getVehCondition',
            type: 'post',
            dataType: 'json',

            success : function(data)
            {
               if(data)
               {
                  $('#veh_condition_body').append(data);
               }
            }

         });

      });

      $('#interior_condition_add_tr').on('click',function(){

         $.ajax({

            url: base_url+'sell/getInteriorCondition',
            type: 'post',
            dataType: 'json',

            success: function(data)
            {
               if(data)
               {
                  $('#interior_condition_body').append(data);
               }
            }
         });


      });

      $('#exterior_condition_add_tr').on('click',function(){

         $.ajax({

            url: base_url+'sell/getExteriorCondition',
            type: 'post',
            dataType: 'json',

            success : function(data)
            {
               if(data)
               {
                  $('#exterior_condition_body').append(data);
               }
            }
         });

      });

      $('#add_key_link').on('click',function(){        

         var html    =  '<tr class="vehicle_key"><td class="mui-ph-r"><select name="key_description_select[]" class="key_description">';
             html   +=  '<option selected="selected" value="">Not Specified</option> <option value="1">Master</option> <option value="2">Remote</option><option value="3">Valet</option><option value="4">Combo</option><option value="5">Keyless</option><option value="6">Smart</option></select></td>';
             html   +=  '<td class="mui-ph-l"><select name="key_quantity_select[]" class="key_quantity">';
             html   +=  '<option selected="selected" value="">Not Specified</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td></tr>';

             $('#vehicle_keys_tbody').append(html);

      });

      $('#veh_images_id').on('change',function(){

         if(this.files && this.files[0])
         {
            $('.divImage').empty();
            var totalImages = this.files.length;

             for (i = 0; i < totalImages; i++) 
             {

                var reader = new FileReader();

                reader.onload = function(event) {
                   // $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                   $('.divImage').append('<div class="col-sm-4"><div class="thumbnail"><img src="'+event.target.result+'" alt="" style="width:100%"></div></div>');
                 
                }                
               reader.readAsDataURL(this.files[i]);

            }

         }
         
      });