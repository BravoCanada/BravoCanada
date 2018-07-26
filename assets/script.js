(function ($) {

    "use strict";

    function showItems(items){
         $('.sites-item').hide();
    
    $('[data-stat="'+items+'"]').show();
}

function toggleWebsites(){
   var $toggle=$('#websites-switch input');
     showItems('active');
 var isChecked = true;
    if($toggle.length){
        $toggle.on('change',function(){
      
       if(isChecked === false) {
        $toggle.attr('checked', true);
      
        isChecked = true;
        showItems('active');
    }
    else
    {
       $toggle.attr('checked', false);
     
        isChecked = false;
        showItems('not-active');
    }
  
        });
    
    }
}
//toggleWebsites()
    $(document).on('ready', function () {
      
  
    });

 
})(jQuery);