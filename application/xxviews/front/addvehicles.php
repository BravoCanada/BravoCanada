<?php $this->load->view('front/common/dashboard/header'); ?>
<!-- BEGIN: Left Aside -->
<?php $this->load->view('front/common/dashboard/sidebar'); ?>
<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
   <!-- BEGIN: Subheader -->
   <div class="m-subheader ">
      <?php 
         if($this->session->flashdata("error_message") != ""){	
         	echo $this->session->flashdata("error_message");
         	$this->session->set_flashdata("error_message","");
         } 
         ?>	
      <div class="d-flex align-items-center">
         <div class="mr-auto">
            <h3 class="m-subheader__title ">
               Add Vehicles
            </h3>
         </div>
         <!-- <div>
            <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
            	<span class="m-subheader__daterange-label">
            		<span class="m-subheader__daterange-title"></span>
            		<span class="m-subheader__daterange-date m--font-brand"></span>
            	</span>
            	<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
            		<i class="la la-angle-down"></i>
            	</a>
            </span>
            </div> -->
      </div>
   </div>
   <div class="m-subheader ">
      <form id="listing_wizard_vehicle_information_form" action="/listing_wizard/vehicle_information" accept-charset="UTF-8" method="post">
         <input name="utf8" value="✓" type="hidden"><input name="authenticity_token" value="VXuAN0gZGUrXQ9OdJC1vobE3V2yqW7EC8qEnPTIsyA77Uy7bb/vLhRHL6MJnx8P01MePFJCu2nBNge+60QeX3w==" type="hidden">
         <div id="wizard_vehicle_information">
            <div class="wizard_panel clearfix">
               <div id="basic_vehicle_information_form">
                  <h3 class="subheadFull stickyNavTarget" id="basic_vehicle_information_header">
                     <span>Basic Vehicle Information</span>
                  </h3>
                  <div class="mui-row">
                     <div class="span2-5">
                        <div class="form_box" id="basic_vehicle_information_left">
                           <table class="form_group" cellspacing="0">
                              <tbody>
                                 <tr>
                                    <th>
                                       <span>VIN:</span>
                                    </th>
                                    <td>
                                       <input name="vin" id="vin" type="text">
                                    </td>
                                 </tr>
                                 <tr>
                                    <th><span>Vehicle Type:</span></th>
                                    <td>
                                       Car
                                    </td>
                                 </tr>
                                 <tr>
                                    <th><span class="required_label">Make:</span></th>
                                     <td>
                                       <select class="searchDropDown xlWidth" data-url="/listing_wizard/trim_changed" name="listing[trim_id]" id="listing_trim_id">
                                          <option value="">Not Specified</option>
                                          <option value="21235">Bmw</option>
                                          <option value="21236">Volvo</option>
                                          <option value="21237">Volkswagen</option>
                                          <option value="21238">Chevrolet</option>
                                          <option value="21239">Nissan</option>
                                          <option value="27242">Skoda</option>
                                          <option value="27243">mercedes</option>
                                          <option value="27545">Audi</option>                                         
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <th><span class="required_label">Model:</span></th>
                                     <td>
                                       <select class="searchDropDown xlWidth" data-url="/listing_wizard/trim_changed" name="listing[trim_id]" id="listing_trim_id">
                                          <option value="">Not Specified</option>
                                          <option value="21235">4 series</option>
                                          <option value="21236">6 series</option>
                                          <option value="21237">7 series</option>
                                          <option value="21238">8 series</option>
                                          <option value="21239">9 series</option>
                                          <option value="27242">10 series</option>                                                                              
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <th id="trim_label_tablerow"><span>Trim:</span></th>
                                    <td>
                                       <select class="searchDropDown xlWidth" data-url="/listing_wizard/trim_changed" name="listing[trim_id]" id="listing_trim_id">
                                          <option value="">Not Specified</option>
                                          <option value="21235">635CSi</option>
                                          <option value="21236">645Ci</option>
                                          <option value="21237">650Ci</option>
                                          <option value="21238">650i</option>
                                          <option value="21239">M6</option>
                                          <option value="27242">640i</option>
                                          <option value="27243">650i xDrive</option>
                                          <option value="27545">640i Gran Coupe</option>
                                          <option value="28085">640i xDrive</option>
                                          <option value="28777">ALPINA B6 xDrive</option>
                                          <option value="29137">650i Grand Coupe</option>
                                          <option value="29538">650XI GC</option>
                                          <option value="29539">650XI</option>
                                          <option value="29540">640XI</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <th><span class="required_label">Year:</span></th>
                                    <td>
                                       <select class="searchDropDown xlWidth" data-url="/listing_wizard/trim_changed" name="listing[trim_id]" id="listing_trim_id">
                                          <option value="">Not Specified</option>
                                          <option value="21235">2000</option>
                                          <option value="21236">2001</option>
                                          <option value="21237">2002</option>
                                          <option value="21238">2003</option>
                                          <option value="21239">2004</option>
                                          <option value="27242">2005</option>
                                          <option value="27243">2006</option>
                                          <option value="27545">2007</option>
                                          <option value="28085">2008</option>
                                          <option value="28777">2009</option>
                                          <option value="29137">2010</option>
                                          <option value="29538">2011</option>
                                          <option value="29539">2012</option>
                                          <option value="29540">2013</option>
                                          <option value="29137">2014</option>
                                          <option value="29538">2015</option>
                                          <option value="29539">2016</option>
                                          <option value="29540">2017</option>
                                          <option value="29540">2018</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td colspan="2" id="odometer_accuracy_message">Please ensure mileage and units are accurately represented. For example, 95,000 should not be represented as 95.</td>
                                 </tr>
                                 <tr>
                                    <th><span class="required_label">Odometer:</span></th>
                                    <td>
                                       <input size="12" name="listing[odometer_reading]" id="listing_odometer_reading" type="text">
                                       <select name="listing[odometer_unit_of_measure_id]" id="listing_odometer_unit_of_measure_id">
                                          <option value="" selected="selected">Not Specified</option>
                                          <option value="1">miles</option>
                                          <option value="2">kilometers</option>
                                          <option value="3">hours</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <th><span>Ext Color:</span></th>
                                    <td>
                                       <select name="listing[exterior_color_id]" id="listing_exterior_color_id">
                                          <option value="" selected="selected">Not Specified</option>
                                          <option value="1">Beige</option>
                                          <option value="2">Black</option>
                                          <option value="3">Blue</option>
                                          <option value="4">Brown</option>
                                          <option value="20">Camouflage</option>
                                          <option value="6">Charcoal</option>
                                          <option value="7">Gold</option>
                                          <option value="8">Gray</option>
                                          <option value="9">Green</option>
                                          <option value="21">Lime</option>
                                          <option value="5">Maroon</option>
                                          <option value="10">Off-white</option>
                                          <option value="11">Orange</option>
                                          <option value="12">Pink</option>
                                          <option value="13">Purple</option>
                                          <option value="14">Red</option>
                                          <option value="15">Silver</option>
                                          <option value="16">Turquoise</option>
                                          <option value="17">White</option>
                                          <option value="18">Yellow</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <th><span>Int Color:</span></th>
                                    <td>
                                       <select name="listing[interior_color_id]" id="listing_interior_color_id">
                                          <option value="" selected="selected">Not Specified</option>
                                          <option value="1">Beige</option>
                                          <option value="2">Black</option>
                                          <option value="3">Blue</option>
                                          <option value="4">Brown</option>
                                          <option value="6">Charcoal</option>
                                          <option value="7">Gold</option>
                                          <option value="8">Gray</option>
                                          <option value="9">Green</option>
                                          <option value="5">Maroon</option>
                                          <option value="10">Off-white</option>
                                          <option value="11">Orange</option>
                                          <option value="12">Pink</option>
                                          <option value="13">Purple</option>
                                          <option value="14">Red</option>
                                          <option value="15">Silver</option>
                                          <option value="16">Tan</option>
                                          <option value="17">Turquoise</option>
                                          <option value="18">White</option>
                                          <option value="19">Yellow</option>
                                       </select>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="span3-5">
                        <div class="form_box" id="basic_vehicle_information_right">
                           <table class="form_group" cellspacing="0">
                              <tbody>
                                 <tr>
                                    <th><span>Selling On Behalf Of:</span></th>
                                    <td>
                                       
                                       <input value="444391" name="listing[account_id]" id="listing_account_id" type="hidden">
                                    </td>
                                 </tr>
                                 <tr>
                                    <th><span class="required_label">Assign Vehicle To:</span></th>
                                    <td>
                                       
                                       <input value="0" data-event-sale-id-from-event-code="null" name="listing[buyer_group_id]" id="listing_buyer_group_id" type="hidden">
                                       <div class="mui-m-t info_box" id="buyer_group_cr_required" style="display:none">This buyer group requires a condition report before activation</div>
                                       <div class="mui-m-t info_box" id="buyer_group_cr_or_sd_required" style="display:none">This buyer group requires a condition report or a seller disclosure before activation</div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <th><span>Add to Event Sale:</span></th>
                                    <td>
                                       <select name="listing[event_sale_id]" id="listing_event_sale_id">
                                          <option value="" selected="selected">Select Event</option>
                                          <option value="25941">6/21 Thursday Thunder Specialty Event Sale 06/21/2018 - 06/21/2018</option>
                                          <option value="25724">6/18 Manheim Canada Monday Madness 06/18/2018 - 06/18/2018</option>
                                          <option value="25736">6/15 - 6/18 Manheim San Francisco Weekend Sale 06/15/2018 - 06/18/2018</option>
                                          <option value="25549">6/15 - 6/18 Central Florida Weekend Event Sale 06/15/2018 - 06/18/2018</option>
                                          <option value="25742">6/11 - 6/13 Manheim Tulsa Dealer Direct Event Sale 06/11/2018 - 06/13/2018</option>
                                          <option value="25723">6/11 Manheim Canada Monday Madness 06/11/2018 - 06/11/2018</option>
                                          <option value="25735">6/8 - 6/11 Manheim San Francisco Weekend Sale 06/08/2018 - 06/11/2018</option>
                                          <option value="25497">6/8 - 6/11 Arizona Digital Avenue Sale 06/08/2018 - 06/11/2018</option>
                                          <option value="25548">6/8 - 6/11 Central Florida Weekend Event Sale 06/08/2018 - 06/11/2018</option>
                                          <option value="25741">6/4 - 6/6 Manheim Tulsa Dealer Direct Event Sale 06/04/2018 - 06/06/2018</option>
                                          <option value="25722">6/4 Manheim Canada Monday Madness 06/04/2018 - 06/04/2018</option>
                                          <option value="25734">6/1 - 6/4 Manheim San Francisco Weekend Sale 06/01/2018 - 06/04/2018</option>
                                          <option value="25867">6/1 - 6/4 McConkey Auction Group Weekend Event Sale 06/01/2018 - 06/04/2018</option>
                                          <option value="25496">6/1 - 6/4 Arizona Digital Avenue Sale 06/01/2018 - 06/04/2018</option>
                                          <option value="25547">6/1 - 6/4 Central Florida Weekend Event Sale 06/01/2018 - 06/04/2018</option>
                                          <option value="25740">5/28 - 5/30 Manheim Tulsa Dealer Direct Event Sale 05/28/2018 - 05/30/2018</option>
                                          <option value="25721">5/28 Manheim Canada Monday Madness 05/28/2018 - 05/28/2018</option>
                                          <option value="25733">5/25 - 5/28 Manheim San Francisco Weekend Sale 05/25/2018 - 05/28/2018</option>
                                          <option value="25495">5/25 - 5/28 Arizona Digital Avenue Sale 05/25/2018 - 05/28/2018</option>
                                          <option value="25546">5/25 - 5/28 Central Florida Weekend Event Sale 05/25/2018 - 05/28/2018</option>
                                          <option value="25739">5/21 - 5/23 Manheim Tulsa Dealer Direct Event Sale 05/21/2018 - 05/23/2018</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <th><span>Work Order:</span></th>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <th><span>Stock Number: </span></th>
                                    <td><input name="listing[manheim_stock_number]" id="listing_manheim_stock_number" type="text"></td>
                                 </tr>
                                 <tr>
                                    <th><span class="required_label">Vehicle Location:</span></th>
                                    <td>
                                       <select data-distribution-center-id="4" data-at-sellers-lot-id="6" name="listing[vehicle_location_id]" id="listing_vehicle_location_id">
                                          <option value="5" selected="selected">Not Specified</option>
                                          <option value="1">At Auction</option>
                                          <option value="2">At Dealership</option>
                                          <option value="3">In Transit</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr id="distribution_centers_row">
                                    <th>
                                       <div id="distribution_centers_div" style="display: none">
                                          <span class="required_label">Distribution Center:</span>
                                       </div>
                                    </th>
                                    <td>
                                       <div id="distribution_centers_dropdown" style="display: none">
                                          <select disabled="disabled" name="listing[distribution_center_id]" id="listing_distribution_center_id"></select>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <th><span class="required_label">Facilitation Location:</span></th>
                                    <td>
                                       <select name="listing[facilitation_service_provider_id]" id="listing_facilitation_service_provider_id" data-url="/listing_wizard/update_contact_info" data-fsp-currencies-url="/edit/update_currencies">
                                          <option value="" selected="selected">Please select Facilitation Location</option>
                                          <optgroup label="———  United States  ———">
                                             <option data-centrally-facilitated="true" value="92">myCentralAuction</option>
                                             <option data-centrally-facilitated="false" value="281">AL - America's Auto Auction Birmingham</option>
                                             <option data-centrally-facilitated="false" value="519">AL - Auto Auction of Montgomery</option>
                                             <option data-centrally-facilitated="false" value="468">AL - Dealers Auto Auction - Huntsville</option>
                                             <option data-centrally-facilitated="false" value="469">AL - Dealers Auto Auction - Mobile</option>
                                             <option data-centrally-facilitated="false" value="332">AL - Deanco Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="582">AL - Manheim Birmingham</option>
                                             <option data-centrally-facilitated="false" value="661">AL - Manheim Montgomery</option>
                                             <option data-centrally-facilitated="false" value="336">AL - Shoals North Alabama Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="651">AR - Manheim Little Rock</option>
                                             <option data-centrally-facilitated="false" value="208">AZ - DAA Of The Southwest</option>
                                             <option data-centrally-facilitated="false" value="635">AZ - Manheim Arizona</option>
                                             <option data-centrally-facilitated="false" value="103">AZ - Manheim Phoenix</option>
                                             <option data-centrally-facilitated="false" value="112">AZ - Manheim Tucson</option>
                                             <option data-centrally-facilitated="false" value="630">AZ - Metro Auto Auction Phoenix</option>
                                             <option data-centrally-facilitated="false" value="69">CA - ADESA Brashers</option>
                                             <option data-centrally-facilitated="false" value="340">CA - ADESA San Jose</option>
                                             <option data-centrally-facilitated="false" value="298">CA - All Valley Dealer Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="591">CA - Auctions In Motion - Thousand Oaks</option>
                                             <option data-centrally-facilitated="false" value="327">CA - AutoNation Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="82">CA - Manheim California</option>
                                             <option data-centrally-facilitated="false" value="78">CA - Manheim Central California</option>
                                             <option data-centrally-facilitated="false" value="95">CA - Manheim Riverside</option>
                                             <option data-centrally-facilitated="false" value="17">CA - Manheim San Diego</option>
                                             <option data-centrally-facilitated="false" value="133">CA - Manheim San Francisco Bay</option>
                                             <option data-centrally-facilitated="false" value="124">CA - Manheim Southern California</option>
                                             <option data-centrally-facilitated="false" value="256">CA - North Bay Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="216">CA - Norwalk Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="498">CA - South Bay Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="565">CA - South Bay Auto Auction of Stockton</option>
                                             <option data-centrally-facilitated="false" value="518">CA - WSM Auctions</option>
                                             <option data-centrally-facilitated="false" value="209">CO - DAA of the Rockies</option>
                                             <option data-centrally-facilitated="false" value="121">CO - Manheim Denver</option>
                                             <option data-centrally-facilitated="false" value="202">CT - Central Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="252">CT - Hartford-Springfield Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="223">CT - Southern Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="673">DE - Delaware Auto Exchange</option>
                                             <option data-centrally-facilitated="false" value="290">FL - America's Auto Auction - Jacksonville</option>
                                             <option data-centrally-facilitated="false" value="199">FL - America's Auto Auction - Pensacola</option>
                                             <option data-centrally-facilitated="false" value="116">FL - Manheim Central Florida</option>
                                             <option data-centrally-facilitated="false" value="94">FL - Manheim Daytona Beach</option>
                                             <option data-centrally-facilitated="false" value="100">FL - Manheim Fort Lauderdale</option>
                                             <option data-centrally-facilitated="false" value="3">FL - Manheim Fort Myers</option>
                                             <option data-centrally-facilitated="false" value="228">FL - Manheim Jacksonville</option>
                                             <option data-centrally-facilitated="false" value="76">FL - Manheim Lakeland</option>
                                             <option data-centrally-facilitated="false" value="142">FL - Manheim Orlando</option>
                                             <option data-centrally-facilitated="false" value="119">FL - Manheim Palm Beach</option>
                                             <option data-centrally-facilitated="false" value="126">FL - Manheim Pensacola</option>
                                             <option data-centrally-facilitated="false" value="141">FL - Manheim St Pete</option>
                                             <option data-centrally-facilitated="false" value="130">FL - Manheim Tampa</option>
                                             <option data-centrally-facilitated="false" value="263">FL - Orlando Longwood Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="267">FL - South Florida Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="611">FL - Space Coast Auto Auction of Melbourne</option>
                                             <option data-centrally-facilitated="false" value="156">FL - Tallahassee Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="586">FL - Your Auction of Tampa Bay</option>
                                             <option data-centrally-facilitated="false" value="272">GA - Albany Auto Auction Inc</option>
                                             <option data-centrally-facilitated="false" value="462">GA - America's Auto Auction - Atlanta</option>
                                             <option data-centrally-facilitated="false" value="85">GA - Manheim Atlanta</option>
                                             <option data-centrally-facilitated="false" value="7">GA - Manheim Georgia</option>
                                             <option data-centrally-facilitated="false" value="217">GA - South Georgia Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="314">GA - Southeastern Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="77">HI - Manheim Hawaii</option>
                                             <option data-centrally-facilitated="false" value="506">IA - Dealers Choice Auto Auction - Mediapolis</option>
                                             <option data-centrally-facilitated="false" value="322">IA - Des Moines Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="244">IA - Plaza Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="59">ID - ADESA Boise</option>
                                             <option data-centrally-facilitated="false" value="259">ID - Dealers Auto Auction Of Idaho</option>
                                             <option data-centrally-facilitated="false" value="245">IL - America's Auto Auction - Chicago</option>
                                             <option data-centrally-facilitated="false" value="321">IL - America's Auto Auction Saint Louis</option>
                                             <option data-centrally-facilitated="false" value="255">IL - Greater Rockford Auto Auction Inc</option>
                                             <option data-centrally-facilitated="false" value="136">IL - Manheim Arena Illinois</option>
                                             <option data-centrally-facilitated="false" value="2">IL - Manheim Chicago</option>
                                             <option data-centrally-facilitated="false" value="268">IL - Morton Auto Auction Inc</option>
                                             <option data-centrally-facilitated="false" value="497">IN - Auto Dealers Exchange</option>
                                             <option data-centrally-facilitated="false" value="598">IN - Clark County Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="222">IN - Dyer Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="516">IN - Ft. Wayne Auto and Truck Auction</option>
                                             <option data-centrally-facilitated="false" value="306">IN - Greater Mishawaka Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="243">IN - Indiana Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="211">IN - Indianapolis Car Exchange</option>
                                             <option data-centrally-facilitated="false" value="138">IN - Manheim Indianapolis</option>
                                             <option data-centrally-facilitated="false" value="87">IN - Manheim Louisville</option>
                                             <option data-centrally-facilitated="false" value="647">KS - Manheim Wichita</option>
                                             <option data-centrally-facilitated="false" value="510">KS - Sunflower Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="265">KY - America's Auto Auction Bowling Green</option>
                                             <option data-centrally-facilitated="false" value="575">LA - America's Auto Auction Baton Rouge</option>
                                             <option data-centrally-facilitated="false" value="674">LA - Greater Shreveport Bossier Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="646">LA - Lake Charles Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="65">LA - Louisiana's 1st Choice Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="576">LA - Manheim Lafayette</option>
                                             <option data-centrally-facilitated="false" value="83">LA - Manheim New Orleans</option>
                                             <option data-centrally-facilitated="false" value="508">LA - Oak View Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="282">MA - Central Mass. Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="247">MA - Lynnway Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="109">MA - Manheim New England</option>
                                             <option data-centrally-facilitated="false" value="676">MD - Bel Air Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="81">MD - Manheim Baltimore-Washington</option>
                                             <option data-centrally-facilitated="false" value="307">ME - Port City Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="671">MI - America's Auto Auction West Michigan</option>
                                             <option data-centrally-facilitated="false" value="664">MI - Fastlane Auto Exchange</option>
                                             <option data-centrally-facilitated="false" value="204">MI - Grand Rapids Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="605">MI - Greater Detroit Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="264">MI - Greater Kalamazoo Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="134">MI - Manheim Detroit</option>
                                             <option data-centrally-facilitated="false" value="577">MI - Manheim Flint</option>
                                             <option data-centrally-facilitated="false" value="253">MN - Arctic Cat Thief River Falls</option>
                                             <option data-centrally-facilitated="false" value="84">MN - Manheim Minneapolis</option>
                                             <option data-centrally-facilitated="false" value="79">MN - Manheim Northstar Minnesota</option>
                                             <option data-centrally-facilitated="false" value="301">MN - Mid-State Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="502">MO - 166 Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="305">MO - Kansas City Independent Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="8">MO - Manheim Kansas City</option>
                                             <option data-centrally-facilitated="false" value="143">MO - Manheim St Louis</option>
                                             <option data-centrally-facilitated="false" value="303">MO - Missouri Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="684">MS - Long Beach Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="99">MS - Manheim Mississippi</option>
                                             <option data-centrally-facilitated="false" value="61">MT - Auto Auction of Montana</option>
                                             <option data-centrally-facilitated="false" value="67">NC - Greensboro Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="465">NC - Greenville Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="663">NC - Manheim Charlotte</option>
                                             <option data-centrally-facilitated="false" value="13">NC - Manheim North Carolina</option>
                                             <option data-centrally-facilitated="false" value="122">NC - Manheim Statesville</option>
                                             <option data-centrally-facilitated="false" value="668">NC - Manheim Wilmington</option>
                                             <option data-centrally-facilitated="false" value="595">NC - Speedway Auto Auction of Charlotte</option>
                                             <option data-centrally-facilitated="false" value="622">ND - Central City Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="131">NE - Manheim Omaha</option>
                                             <option data-centrally-facilitated="false" value="261">NH - Auto Auction of New England</option>
                                             <option data-centrally-facilitated="false" value="123">NJ - Manheim New Jersey</option>
                                             <option data-centrally-facilitated="false" value="106">NJ - Manheim NY Metro Skyline</option>
                                             <option data-centrally-facilitated="false" value="120">NM - Manheim New Mexico</option>
                                             <option data-centrally-facilitated="false" value="634">NV - Dealers Auto Auction of Las Vegas</option>
                                             <option data-centrally-facilitated="false" value="15">NV - Manheim Nevada</option>
                                             <option data-centrally-facilitated="false" value="601">NY - Buffalo Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="526">NY - CNY Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="74">NY - Manheim Albany</option>
                                             <option data-centrally-facilitated="false" value="14">NY - Manheim New York</option>
                                             <option data-centrally-facilitated="false" value="310">NY - Rochester Syracuse Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="330">NY - State Line Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="210">OH - Akron Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="311">OH - America's Auto Auction Toledo</option>
                                             <option data-centrally-facilitated="false" value="154">OH - Columbus Fair Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="137">OH - Manheim Cincinnati</option>
                                             <option data-centrally-facilitated="false" value="638">OH - Manheim Cleveland</option>
                                             <option data-centrally-facilitated="false" value="102">OH - Manheim Ohio</option>
                                             <option data-centrally-facilitated="false" value="594">OH - Skipco Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="461">OH - Value Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="293">OK - America's Auto Auction - Tulsa</option>
                                             <option data-centrally-facilitated="false" value="66">OK - DAA Oklahoma City</option>
                                             <option data-centrally-facilitated="false" value="670">OK - I-44 AUTO AUCTION LLC</option>
                                             <option data-centrally-facilitated="false" value="579">OK - Manheim Tulsa</option>
                                             <option data-centrally-facilitated="false" value="505">OK - Mid-Town Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="574">OK - Z66 Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="269">OR - ADESA Northwest</option>
                                             <option data-centrally-facilitated="false" value="57">OR - ADESA Portland</option>
                                             <option data-centrally-facilitated="false" value="125">OR - Manheim Portland</option>
                                             <option data-centrally-facilitated="false" value="313">PA - America's Auto Auction - Harrisburg</option>
                                             <option data-centrally-facilitated="false" value="292">PA - America's Auto Auction - Pittsburgh</option>
                                             <option data-centrally-facilitated="false" value="523">PA - America's Auto Auction Lancaster</option>
                                             <option data-centrally-facilitated="false" value="500">PA - Central Pennsylvania Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="150">PA - Corry Auto Dealers Exchange</option>
                                             <option data-centrally-facilitated="false" value="271">PA - Greater Erie Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="113">PA - Manheim Keystone Pennsylvania</option>
                                             <option data-centrally-facilitated="false" value="135">PA - Manheim Pennsylvania</option>
                                             <option data-centrally-facilitated="false" value="111">PA - Manheim Philadelphia</option>
                                             <option data-centrally-facilitated="false" value="91">PA - Manheim Pittsburgh</option>
                                             <option data-centrally-facilitated="false" value="248">PA - North East Pennsylvania Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="224">PR - Manheim Caribbean Subasta De Autos</option>
                                             <option data-centrally-facilitated="false" value="275">RI - Ocean State Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="286">SC - America's Auto Auction - Greenville</option>
                                             <option data-centrally-facilitated="false" value="297">SC - Augusta Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="207">SC - Carolina Auto Auction Inc</option>
                                             <option data-centrally-facilitated="false" value="583">SC - Charleston Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="127">SC - Manheim Darlington</option>
                                             <option data-centrally-facilitated="false" value="198">SC - Rawls Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="294">TN - Airport Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="467">TN - Dealers Auto Auction - Memphis</option>
                                             <option data-centrally-facilitated="false" value="460">TN - Dealers Auto Auction - Murfreesboro</option>
                                             <option data-centrally-facilitated="false" value="157">TN - Dealers Auto Auction Chattanooga</option>
                                             <option data-centrally-facilitated="false" value="110">TN - Manheim Nashville</option>
                                             <option data-centrally-facilitated="false" value="63">TN - Memphis Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="610">TN - Music City Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="596">TX - Alliance Auto Auction Dallas</option>
                                             <option data-centrally-facilitated="false" value="536">TX - Alliance Auto Auction of Abilene</option>
                                             <option data-centrally-facilitated="false" value="537">TX - Alliance Auto Auction of Longview</option>
                                             <option data-centrally-facilitated="false" value="538">TX - Alliance Auto Auction of Waco</option>
                                             <option data-centrally-facilitated="false" value="280">TX - America's Auto Auction - Austin/San Antonio</option>
                                             <option data-centrally-facilitated="false" value="289">TX - America's Auto Auction - Dallas</option>
                                             <option data-centrally-facilitated="false" value="291">TX - America's Auto Auction - North Houston</option>
                                             <option data-centrally-facilitated="false" value="626">TX - America's Auto Auction Houston</option>
                                             <option data-centrally-facilitated="false" value="341">TX - Big Valley Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="669">TX - CM COMPANY AUCTIONS</option>
                                             <option data-centrally-facilitated="false" value="641">TX - Corpus Christi Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="337">TX - El Paso Independent Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="520">TX - Greater Tyler Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="334">TX - Houston Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="249">TX - Houstons 1st Choice Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="251">TX - Lone Star Auto Auction Inc</option>
                                             <option data-centrally-facilitated="false" value="325">TX - Lubbock Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="80">TX - Manheim Dallas</option>
                                             <option data-centrally-facilitated="false" value="128">TX - Manheim Dallas-Fort Worth</option>
                                             <option data-centrally-facilitated="false" value="90">TX - Manheim El Paso</option>
                                             <option data-centrally-facilitated="false" value="115">TX - Manheim Houston</option>
                                             <option data-centrally-facilitated="false" value="132">TX - Manheim San Antonio</option>
                                             <option data-centrally-facilitated="false" value="637">TX - Manheim South Houston</option>
                                             <option data-centrally-facilitated="false" value="98">TX - Manheim Texas Hobby</option>
                                             <option data-centrally-facilitated="false" value="666">TX - Manheim West Texas</option>
                                             <option data-centrally-facilitated="false" value="629">TX - Metro Auto Auction Dallas</option>
                                             <option data-centrally-facilitated="false" value="642">TX - San Antonio Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="584">TX - Texas Lone Star Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="96">UT - Manheim Utah</option>
                                             <option data-centrally-facilitated="false" value="302">VA - Abingdon Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="331">VA - America's Auto Auction Virginia</option>
                                             <option data-centrally-facilitated="false" value="86">VA - Manheim Fredericksburg</option>
                                             <option data-centrally-facilitated="false" value="129">VA - Manheim Harrisonburg</option>
                                             <option data-centrally-facilitated="false" value="567">VA - Richmond Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="665">VT - Yorkmont Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="203">WA - DAA Northwest</option>
                                             <option data-centrally-facilitated="false" value="570">WA - DAA Seattle</option>
                                             <option data-centrally-facilitated="false" value="19">WA - Manheim Seattle</option>
                                             <option data-centrally-facilitated="false" value="589">WI - Badger State Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="240">WI - Greater Milwaukee Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="97">WI - Manheim Milwaukee</option>
                                             <option data-centrally-facilitated="false" value="672">WI - Midstate Jefferson Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="151">WI - Wisconsin State Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="213">WV - Capital City Auto Auction Inc</option>
                                             <option data-centrally-facilitated="false" value="212">WV - Mountain State Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="581">WY - Manheim Casper (TRA)</option>
                                          </optgroup>
                                          <optgroup label="———  Canada  ———">
                                             <option data-centrally-facilitated="false" value="644">AB - Canadian Remarketing Group Inc.</option>
                                             <option data-centrally-facilitated="false" value="571">AB - Manheim Edmonton</option>
                                             <option data-centrally-facilitated="false" value="625">BC - Manheim Vancouver</option>
                                             <option data-centrally-facilitated="false" value="535">BC - Western Canada Remarketing</option>
                                             <option data-centrally-facilitated="false" value="513">MB - Michener Allen Auctioneering - Winnipeg</option>
                                             <option data-centrally-facilitated="false" value="9">NS - Manheim Halifax</option>
                                             <option data-centrally-facilitated="false" value="93">ON - Manheim Toronto</option>
                                             <option data-centrally-facilitated="false" value="299">ON - Rideau Auctions</option>
                                             <option data-centrally-facilitated="false" value="11">QC - Manheim Montreal</option>
                                             <option data-centrally-facilitated="false" value="509">SK - PBR Auctions</option>
                                          </optgroup>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <th><span class="required_label">Title Status:</span></th>
                                    <td>
                                       <select name="listing[title_status_id]" id="listing_title_status_id">
                                          <option value="5">Title Present</option>
                                          <option value="6">Title Absent</option>
                                          <option selected="selected" value="7">Not Specified</option>
                                          <option value="2">Branded</option>
                                          <option value="4">MSO</option>
                                          <option value="3">No Title</option>
                                          <option value="8">Repo Affidavit</option>
                                          <option value="9">Salvage</option>
                                       </select>
                                       <div class="helper_box_container title_def_outer" id="title_def_outer">
                                          
                                          <div class="helper_box_container helper_box title_def_inner" id="title_def_inner" style="display: none;">
                                             <table>
                                                <tbody>
                                                   <tr>
                                                      <th>Present</th>
                                                      <td>Currently at facilitating location or available within 3 business days.</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Absent</th>
                                                      <td>Contact facilitating location for timeframe of title availability.</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Not Specified</th>
                                                      <td>Contact facilitating location for Present/Absent status.</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Branded</th>
                                                      <td>
                                                         Negative title announcement (Flood, Theft Recovery, Salvage, etc).
                                                         Contact facilitating location for Present/Absent status.
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <th>MSO</th>
                                                      <td>Manufacturer’s Statement of Origin.</td>
                                                   </tr>
                                                   <tr>
                                                      <th>No Title</th>
                                                      <td>Item offered for sale does not have a current title.</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Repo Affidavit</th>
                                                      <td>Repossessed vehicle with appropriate affidavit attached.</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Salvage</th>
                                                      <td>Contact facilitating location for Present/Absent status.</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <th><span class="required_label">Titled In:</span></th>
                                    <td>
                                       <select name="listing[state_id]" id="listing_state_id">
                                          <option value="" selected="selected">Not Specified</option>
                                          <option value="1">AL</option>
                                          <option value="2">AK</option>
                                          <option value="3">AZ</option>
                                          <option value="4">AR</option>
                                          <option value="5">CA</option>
                                          <option value="6">CO</option>
                                          <option value="7">CT</option>
                                          <option value="8">DE</option>
                                          <option value="9">FL</option>
                                          <option value="10">GA</option>
                                          <option value="11">HI</option>
                                          <option value="12">ID</option>
                                          <option value="13">IL</option>
                                          <option value="14">IN</option>
                                          <option value="15">IA</option>
                                          <option value="16">KS</option>
                                          <option value="17">KY</option>
                                          <option value="18">LA</option>
                                          <option value="19">ME</option>
                                          <option value="20">MD</option>
                                          <option value="21">MA</option>
                                          <option value="22">MI</option>
                                          <option value="23">MN</option>
                                          <option value="24">MS</option>
                                          <option value="25">MO</option>
                                          <option value="26">MT</option>
                                          <option value="27">NE</option>
                                          <option value="28">NV</option>
                                          <option value="29">NH</option>
                                          <option value="30">NJ</option>
                                          <option value="31">NM</option>
                                          <option value="32">NY</option>
                                          <option value="33">NC</option>
                                          <option value="34">ND</option>
                                          <option value="35">OH</option>
                                          <option value="36">OK</option>
                                          <option value="37">OR</option>
                                          <option value="38">PA</option>
                                          <option value="39">RI</option>
                                          <option value="40">SC</option>
                                          <option value="41">SD</option>
                                          <option value="42">TN</option>
                                          <option value="43">TX</option>
                                          <option value="44">UT</option>
                                          <option value="45">VT</option>
                                          <option value="46">VA</option>
                                          <option value="47">WA</option>
                                          <option value="48">WV</option>
                                          <option value="49">WI</option>
                                          <option value="50">WY</option>
                                          <option value="53">DC</option>
                                          <option value="54">PR</option>
                                          <option value="65">AB</option>
                                          <option value="66">BC</option>
                                          <option value="67">MB</option>
                                          <option value="68">NB</option>
                                          <option value="69">NL</option>
                                          <option value="70">NS</option>
                                          <option value="71">NT</option>
                                          <option value="72">NU</option>
                                          <option value="73">ON</option>
                                          <option value="74">PE</option>
                                          <option value="75">QC</option>
                                          <option value="76">SK</option>
                                          <option value="77">YT</option>
                                       </select>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody data-buyer-groups-allowing-specified-pickup-location-json="[&quot;0&quot;]" data-buyer-groups-requiring-cr-for-specified-pickup-location-json="[&quot;0&quot;]" data-editable-by-role="false" data-has-custom-pickup-location="false" data-listing-edit-active="false" id="pickup_contact_info_address_header" style="">
                                 <tr>
                                    <th>Pickup Location:</th>
                                    <td>
                                       <select name="pickup_contact_info[pickup_location_type]" id="pickup_contact_info_pickup_location_type">
                                          <option value="not_specified" selected="selected">Not Specified</option>
                                          <option value="at_auction">At Auction</option>
                                          <option value="at_dealership">At Dealership</option>
                                          <option value="alternate">Alternate</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr id="pickup_contact_info_fsp_inputs" style="display :none">
                                    <th><span>Auction Pickup Location:</span></th>
                                    <td>
                                       <select name="pickup_contact_info[pickup_location_fsp_select]" id="pickup_location_fsp_select" data-url="/listing_wizard/update_contact_info" disabled="">
                                          <option value="" selected="selected">Please select auction pickup location</option>
                                          <optgroup label="———  United States  ———">
                                             <option data-centrally-facilitated="false" value="281">AL - America's Auto Auction Birmingham</option>
                                             <option data-centrally-facilitated="false" value="519">AL - Auto Auction of Montgomery</option>
                                             <option data-centrally-facilitated="false" value="468">AL - Dealers Auto Auction - Huntsville</option>
                                             <option data-centrally-facilitated="false" value="469">AL - Dealers Auto Auction - Mobile</option>
                                             <option data-centrally-facilitated="false" value="332">AL - Deanco Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="582">AL - Manheim Birmingham</option>
                                             <option data-centrally-facilitated="false" value="661">AL - Manheim Montgomery</option>
                                             <option data-centrally-facilitated="false" value="336">AL - Shoals North Alabama Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="651">AR - Manheim Little Rock</option>
                                             <option data-centrally-facilitated="false" value="208">AZ - DAA Of The Southwest</option>
                                             <option data-centrally-facilitated="false" value="635">AZ - Manheim Arizona</option>
                                             <option data-centrally-facilitated="false" value="103">AZ - Manheim Phoenix</option>
                                             <option data-centrally-facilitated="false" value="112">AZ - Manheim Tucson</option>
                                             <option data-centrally-facilitated="false" value="630">AZ - Metro Auto Auction Phoenix</option>
                                             <option data-centrally-facilitated="false" value="69">CA - ADESA Brashers</option>
                                             <option data-centrally-facilitated="false" value="340">CA - ADESA San Jose</option>
                                             <option data-centrally-facilitated="false" value="298">CA - All Valley Dealer Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="591">CA - Auctions In Motion - Thousand Oaks</option>
                                             <option data-centrally-facilitated="false" value="327">CA - AutoNation Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="82">CA - Manheim California</option>
                                             <option data-centrally-facilitated="false" value="78">CA - Manheim Central California</option>
                                             <option data-centrally-facilitated="false" value="95">CA - Manheim Riverside</option>
                                             <option data-centrally-facilitated="false" value="17">CA - Manheim San Diego</option>
                                             <option data-centrally-facilitated="false" value="133">CA - Manheim San Francisco Bay</option>
                                             <option data-centrally-facilitated="false" value="124">CA - Manheim Southern California</option>
                                             <option data-centrally-facilitated="false" value="256">CA - North Bay Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="216">CA - Norwalk Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="498">CA - South Bay Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="565">CA - South Bay Auto Auction of Stockton</option>
                                             <option data-centrally-facilitated="false" value="518">CA - WSM Auctions</option>
                                             <option data-centrally-facilitated="false" value="209">CO - DAA of the Rockies</option>
                                             <option data-centrally-facilitated="false" value="121">CO - Manheim Denver</option>
                                             <option data-centrally-facilitated="false" value="202">CT - Central Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="252">CT - Hartford-Springfield Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="223">CT - Southern Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="673">DE - Delaware Auto Exchange</option>
                                             <option data-centrally-facilitated="false" value="290">FL - America's Auto Auction - Jacksonville</option>
                                             <option data-centrally-facilitated="false" value="199">FL - America's Auto Auction - Pensacola</option>
                                             <option data-centrally-facilitated="false" value="116">FL - Manheim Central Florida</option>
                                             <option data-centrally-facilitated="false" value="94">FL - Manheim Daytona Beach</option>
                                             <option data-centrally-facilitated="false" value="100">FL - Manheim Fort Lauderdale</option>
                                             <option data-centrally-facilitated="false" value="3">FL - Manheim Fort Myers</option>
                                             <option data-centrally-facilitated="false" value="228">FL - Manheim Jacksonville</option>
                                             <option data-centrally-facilitated="false" value="76">FL - Manheim Lakeland</option>
                                             <option data-centrally-facilitated="false" value="142">FL - Manheim Orlando</option>
                                             <option data-centrally-facilitated="false" value="119">FL - Manheim Palm Beach</option>
                                             <option data-centrally-facilitated="false" value="126">FL - Manheim Pensacola</option>
                                             <option data-centrally-facilitated="false" value="141">FL - Manheim St Pete</option>
                                             <option data-centrally-facilitated="false" value="130">FL - Manheim Tampa</option>
                                             <option data-centrally-facilitated="false" value="263">FL - Orlando Longwood Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="267">FL - South Florida Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="611">FL - Space Coast Auto Auction of Melbourne</option>
                                             <option data-centrally-facilitated="false" value="156">FL - Tallahassee Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="586">FL - Your Auction of Tampa Bay</option>
                                             <option data-centrally-facilitated="false" value="272">GA - Albany Auto Auction Inc</option>
                                             <option data-centrally-facilitated="false" value="462">GA - America's Auto Auction - Atlanta</option>
                                             <option data-centrally-facilitated="false" value="85">GA - Manheim Atlanta</option>
                                             <option data-centrally-facilitated="false" value="7">GA - Manheim Georgia</option>
                                             <option data-centrally-facilitated="false" value="217">GA - South Georgia Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="314">GA - Southeastern Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="77">HI - Manheim Hawaii</option>
                                             <option data-centrally-facilitated="false" value="506">IA - Dealers Choice Auto Auction - Mediapolis</option>
                                             <option data-centrally-facilitated="false" value="322">IA - Des Moines Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="244">IA - Plaza Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="59">ID - ADESA Boise</option>
                                             <option data-centrally-facilitated="false" value="259">ID - Dealers Auto Auction Of Idaho</option>
                                             <option data-centrally-facilitated="false" value="245">IL - America's Auto Auction - Chicago</option>
                                             <option data-centrally-facilitated="false" value="321">IL - America's Auto Auction Saint Louis</option>
                                             <option data-centrally-facilitated="false" value="255">IL - Greater Rockford Auto Auction Inc</option>
                                             <option data-centrally-facilitated="false" value="136">IL - Manheim Arena Illinois</option>
                                             <option data-centrally-facilitated="false" value="2">IL - Manheim Chicago</option>
                                             <option data-centrally-facilitated="false" value="268">IL - Morton Auto Auction Inc</option>
                                             <option data-centrally-facilitated="false" value="497">IN - Auto Dealers Exchange</option>
                                             <option data-centrally-facilitated="false" value="598">IN - Clark County Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="222">IN - Dyer Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="516">IN - Ft. Wayne Auto and Truck Auction</option>
                                             <option data-centrally-facilitated="false" value="306">IN - Greater Mishawaka Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="243">IN - Indiana Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="211">IN - Indianapolis Car Exchange</option>
                                             <option data-centrally-facilitated="false" value="138">IN - Manheim Indianapolis</option>
                                             <option data-centrally-facilitated="false" value="87">IN - Manheim Louisville</option>
                                             <option data-centrally-facilitated="false" value="647">KS - Manheim Wichita</option>
                                             <option data-centrally-facilitated="false" value="510">KS - Sunflower Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="265">KY - America's Auto Auction Bowling Green</option>
                                             <option data-centrally-facilitated="false" value="575">LA - America's Auto Auction Baton Rouge</option>
                                             <option data-centrally-facilitated="false" value="674">LA - Greater Shreveport Bossier Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="646">LA - Lake Charles Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="65">LA - Louisiana's 1st Choice Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="576">LA - Manheim Lafayette</option>
                                             <option data-centrally-facilitated="false" value="83">LA - Manheim New Orleans</option>
                                             <option data-centrally-facilitated="false" value="508">LA - Oak View Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="282">MA - Central Mass. Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="247">MA - Lynnway Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="109">MA - Manheim New England</option>
                                             <option data-centrally-facilitated="false" value="676">MD - Bel Air Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="81">MD - Manheim Baltimore-Washington</option>
                                             <option data-centrally-facilitated="false" value="307">ME - Port City Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="671">MI - America's Auto Auction West Michigan</option>
                                             <option data-centrally-facilitated="false" value="664">MI - Fastlane Auto Exchange</option>
                                             <option data-centrally-facilitated="false" value="204">MI - Grand Rapids Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="605">MI - Greater Detroit Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="264">MI - Greater Kalamazoo Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="134">MI - Manheim Detroit</option>
                                             <option data-centrally-facilitated="false" value="577">MI - Manheim Flint</option>
                                             <option data-centrally-facilitated="false" value="253">MN - Arctic Cat Thief River Falls</option>
                                             <option data-centrally-facilitated="false" value="84">MN - Manheim Minneapolis</option>
                                             <option data-centrally-facilitated="false" value="79">MN - Manheim Northstar Minnesota</option>
                                             <option data-centrally-facilitated="false" value="301">MN - Mid-State Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="502">MO - 166 Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="305">MO - Kansas City Independent Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="8">MO - Manheim Kansas City</option>
                                             <option data-centrally-facilitated="false" value="143">MO - Manheim St Louis</option>
                                             <option data-centrally-facilitated="false" value="303">MO - Missouri Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="684">MS - Long Beach Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="99">MS - Manheim Mississippi</option>
                                             <option data-centrally-facilitated="false" value="61">MT - Auto Auction of Montana</option>
                                             <option data-centrally-facilitated="false" value="67">NC - Greensboro Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="465">NC - Greenville Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="663">NC - Manheim Charlotte</option>
                                             <option data-centrally-facilitated="false" value="13">NC - Manheim North Carolina</option>
                                             <option data-centrally-facilitated="false" value="122">NC - Manheim Statesville</option>
                                             <option data-centrally-facilitated="false" value="668">NC - Manheim Wilmington</option>
                                             <option data-centrally-facilitated="false" value="595">NC - Speedway Auto Auction of Charlotte</option>
                                             <option data-centrally-facilitated="false" value="622">ND - Central City Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="131">NE - Manheim Omaha</option>
                                             <option data-centrally-facilitated="false" value="261">NH - Auto Auction of New England</option>
                                             <option data-centrally-facilitated="false" value="123">NJ - Manheim New Jersey</option>
                                             <option data-centrally-facilitated="false" value="106">NJ - Manheim NY Metro Skyline</option>
                                             <option data-centrally-facilitated="false" value="120">NM - Manheim New Mexico</option>
                                             <option data-centrally-facilitated="false" value="634">NV - Dealers Auto Auction of Las Vegas</option>
                                             <option data-centrally-facilitated="false" value="15">NV - Manheim Nevada</option>
                                             <option data-centrally-facilitated="false" value="601">NY - Buffalo Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="526">NY - CNY Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="74">NY - Manheim Albany</option>
                                             <option data-centrally-facilitated="false" value="14">NY - Manheim New York</option>
                                             <option data-centrally-facilitated="false" value="310">NY - Rochester Syracuse Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="330">NY - State Line Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="210">OH - Akron Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="311">OH - America's Auto Auction Toledo</option>
                                             <option data-centrally-facilitated="false" value="154">OH - Columbus Fair Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="137">OH - Manheim Cincinnati</option>
                                             <option data-centrally-facilitated="false" value="638">OH - Manheim Cleveland</option>
                                             <option data-centrally-facilitated="false" value="102">OH - Manheim Ohio</option>
                                             <option data-centrally-facilitated="false" value="594">OH - Skipco Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="461">OH - Value Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="293">OK - America's Auto Auction - Tulsa</option>
                                             <option data-centrally-facilitated="false" value="66">OK - DAA Oklahoma City</option>
                                             <option data-centrally-facilitated="false" value="670">OK - I-44 AUTO AUCTION LLC</option>
                                             <option data-centrally-facilitated="false" value="579">OK - Manheim Tulsa</option>
                                             <option data-centrally-facilitated="false" value="505">OK - Mid-Town Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="574">OK - Z66 Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="269">OR - ADESA Northwest</option>
                                             <option data-centrally-facilitated="false" value="57">OR - ADESA Portland</option>
                                             <option data-centrally-facilitated="false" value="125">OR - Manheim Portland</option>
                                             <option data-centrally-facilitated="false" value="313">PA - America's Auto Auction - Harrisburg</option>
                                             <option data-centrally-facilitated="false" value="292">PA - America's Auto Auction - Pittsburgh</option>
                                             <option data-centrally-facilitated="false" value="523">PA - America's Auto Auction Lancaster</option>
                                             <option data-centrally-facilitated="false" value="500">PA - Central Pennsylvania Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="150">PA - Corry Auto Dealers Exchange</option>
                                             <option data-centrally-facilitated="false" value="271">PA - Greater Erie Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="113">PA - Manheim Keystone Pennsylvania</option>
                                             <option data-centrally-facilitated="false" value="135">PA - Manheim Pennsylvania</option>
                                             <option data-centrally-facilitated="false" value="111">PA - Manheim Philadelphia</option>
                                             <option data-centrally-facilitated="false" value="91">PA - Manheim Pittsburgh</option>
                                             <option data-centrally-facilitated="false" value="248">PA - North East Pennsylvania Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="224">PR - Manheim Caribbean Subasta De Autos</option>
                                             <option data-centrally-facilitated="false" value="275">RI - Ocean State Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="286">SC - America's Auto Auction - Greenville</option>
                                             <option data-centrally-facilitated="false" value="297">SC - Augusta Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="207">SC - Carolina Auto Auction Inc</option>
                                             <option data-centrally-facilitated="false" value="583">SC - Charleston Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="127">SC - Manheim Darlington</option>
                                             <option data-centrally-facilitated="false" value="198">SC - Rawls Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="294">TN - Airport Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="467">TN - Dealers Auto Auction - Memphis</option>
                                             <option data-centrally-facilitated="false" value="460">TN - Dealers Auto Auction - Murfreesboro</option>
                                             <option data-centrally-facilitated="false" value="157">TN - Dealers Auto Auction Chattanooga</option>
                                             <option data-centrally-facilitated="false" value="110">TN - Manheim Nashville</option>
                                             <option data-centrally-facilitated="false" value="63">TN - Memphis Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="610">TN - Music City Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="596">TX - Alliance Auto Auction Dallas</option>
                                             <option data-centrally-facilitated="false" value="536">TX - Alliance Auto Auction of Abilene</option>
                                             <option data-centrally-facilitated="false" value="537">TX - Alliance Auto Auction of Longview</option>
                                             <option data-centrally-facilitated="false" value="538">TX - Alliance Auto Auction of Waco</option>
                                             <option data-centrally-facilitated="false" value="280">TX - America's Auto Auction - Austin/San Antonio</option>
                                             <option data-centrally-facilitated="false" value="289">TX - America's Auto Auction - Dallas</option>
                                             <option data-centrally-facilitated="false" value="291">TX - America's Auto Auction - North Houston</option>
                                             <option data-centrally-facilitated="false" value="626">TX - America's Auto Auction Houston</option>
                                             <option data-centrally-facilitated="false" value="341">TX - Big Valley Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="669">TX - CM COMPANY AUCTIONS</option>
                                             <option data-centrally-facilitated="false" value="641">TX - Corpus Christi Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="337">TX - El Paso Independent Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="520">TX - Greater Tyler Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="334">TX - Houston Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="249">TX - Houstons 1st Choice Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="251">TX - Lone Star Auto Auction Inc</option>
                                             <option data-centrally-facilitated="false" value="325">TX - Lubbock Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="80">TX - Manheim Dallas</option>
                                             <option data-centrally-facilitated="false" value="128">TX - Manheim Dallas-Fort Worth</option>
                                             <option data-centrally-facilitated="false" value="90">TX - Manheim El Paso</option>
                                             <option data-centrally-facilitated="false" value="115">TX - Manheim Houston</option>
                                             <option data-centrally-facilitated="false" value="132">TX - Manheim San Antonio</option>
                                             <option data-centrally-facilitated="false" value="637">TX - Manheim South Houston</option>
                                             <option data-centrally-facilitated="false" value="98">TX - Manheim Texas Hobby</option>
                                             <option data-centrally-facilitated="false" value="666">TX - Manheim West Texas</option>
                                             <option data-centrally-facilitated="false" value="629">TX - Metro Auto Auction Dallas</option>
                                             <option data-centrally-facilitated="false" value="642">TX - San Antonio Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="584">TX - Texas Lone Star Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="96">UT - Manheim Utah</option>
                                             <option data-centrally-facilitated="false" value="302">VA - Abingdon Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="331">VA - America's Auto Auction Virginia</option>
                                             <option data-centrally-facilitated="false" value="86">VA - Manheim Fredericksburg</option>
                                             <option data-centrally-facilitated="false" value="129">VA - Manheim Harrisonburg</option>
                                             <option data-centrally-facilitated="false" value="567">VA - Richmond Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="665">VT - Yorkmont Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="203">WA - DAA Northwest</option>
                                             <option data-centrally-facilitated="false" value="570">WA - DAA Seattle</option>
                                             <option data-centrally-facilitated="false" value="19">WA - Manheim Seattle</option>
                                             <option data-centrally-facilitated="false" value="589">WI - Badger State Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="240">WI - Greater Milwaukee Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="97">WI - Manheim Milwaukee</option>
                                             <option data-centrally-facilitated="false" value="672">WI - Midstate Jefferson Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="151">WI - Wisconsin State Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="213">WV - Capital City Auto Auction Inc</option>
                                             <option data-centrally-facilitated="false" value="212">WV - Mountain State Auto Auction</option>
                                             <option data-centrally-facilitated="false" value="581">WY - Manheim Casper (TRA)</option>
                                          </optgroup>
                                          <optgroup label="———  Canada  ———">
                                             <option data-centrally-facilitated="false" value="644">AB - Canadian Remarketing Group Inc.</option>
                                             <option data-centrally-facilitated="false" value="571">AB - Manheim Edmonton</option>
                                             <option data-centrally-facilitated="false" value="625">BC - Manheim Vancouver</option>
                                             <option data-centrally-facilitated="false" value="535">BC - Western Canada Remarketing</option>
                                             <option data-centrally-facilitated="false" value="513">MB - Michener Allen Auctioneering - Winnipeg</option>
                                             <option data-centrally-facilitated="false" value="9">NS - Manheim Halifax</option>
                                             <option data-centrally-facilitated="false" value="93">ON - Manheim Toronto</option>
                                             <option data-centrally-facilitated="false" value="299">ON - Rideau Auctions</option>
                                             <option data-centrally-facilitated="false" value="11">QC - Manheim Montreal</option>
                                             <option data-centrally-facilitated="false" value="509">SK - PBR Auctions</option>
                                          </optgroup>
                                       </select>
                                    </td>
                                 </tr>
                              </tbody>
                              <tbody id="pickup_contact_info_address_inputs" style="display:none">
                                 <tr id="use_last_alternate_address_tr" style="display: none;">
                                    <th>Use Last Alternate Address:</th>
                                    <td><input name="use_last_alternate_address" id="use_last_alternate_address" value="1" disabled="" type="checkbox"></td>
                                 </tr>
                                 <tr style="display: none;">
                                    <th>
                                       <span>Location Name:</span>
                                    </th>
                                    <td><input name="pickup_contact_info[name]" id="pickup_contact_info_name" disabled="" type="text"></td>
                                 </tr>
                                 <tr>
                                    <th>
                                       <span class="seller_lot_required_label">Address 1:</span>
                                    </th>
                                    <td><input name="pickup_contact_info[address][line1]" id="pickup_contact_info_address_line1" disabled="" type="text"></td>
                                 </tr>
                                 <tr>
                                    <th>
                                       <span>Address 2:</span>
                                    </th>
                                    <td><input name="pickup_contact_info[address][line2]" id="pickup_contact_info_address_line2" disabled="" type="text"></td>
                                 </tr>
                                 <tr>
                                    <th>
                                       <span class="seller_lot_required_label">City:</span>
                                    </th>
                                    <td><input name="pickup_contact_info[address][city]" id="pickup_contact_info_address_city" disabled="" type="text"></td>
                                 </tr>
                                 <tr>
                                    <th>
                                       <span class="seller_lot_required_label">State:</span>
                                    </th>
                                    <td>
                                       <select name="pickup_contact_info[address][state_id]" id="pickup_contact_info_address_state_id" disabled="">
                                          <option value="" selected="selected"></option>
                                          <option value="1">AL</option>
                                          <option value="2">AK</option>
                                          <option value="3">AZ</option>
                                          <option value="4">AR</option>
                                          <option value="5">CA</option>
                                          <option value="6">CO</option>
                                          <option value="7">CT</option>
                                          <option value="8">DE</option>
                                          <option value="9">FL</option>
                                          <option value="10">GA</option>
                                          <option value="11">HI</option>
                                          <option value="12">ID</option>
                                          <option value="13">IL</option>
                                          <option value="14">IN</option>
                                          <option value="15">IA</option>
                                          <option value="16">KS</option>
                                          <option value="17">KY</option>
                                          <option value="18">LA</option>
                                          <option value="19">ME</option>
                                          <option value="20">MD</option>
                                          <option value="21">MA</option>
                                          <option value="22">MI</option>
                                          <option value="23">MN</option>
                                          <option value="24">MS</option>
                                          <option value="25">MO</option>
                                          <option value="26">MT</option>
                                          <option value="27">NE</option>
                                          <option value="28">NV</option>
                                          <option value="29">NH</option>
                                          <option value="30">NJ</option>
                                          <option value="31">NM</option>
                                          <option value="32">NY</option>
                                          <option value="33">NC</option>
                                          <option value="34">ND</option>
                                          <option value="35">OH</option>
                                          <option value="36">OK</option>
                                          <option value="37">OR</option>
                                          <option value="38">PA</option>
                                          <option value="39">RI</option>
                                          <option value="40">SC</option>
                                          <option value="41">SD</option>
                                          <option value="42">TN</option>
                                          <option value="43">TX</option>
                                          <option value="44">UT</option>
                                          <option value="45">VT</option>
                                          <option value="46">VA</option>
                                          <option value="47">WA</option>
                                          <option value="48">WV</option>
                                          <option value="49">WI</option>
                                          <option value="50">WY</option>
                                          <option value="53">DC</option>
                                          <option value="54">PR</option>
                                          <option value="65">AB</option>
                                          <option value="66">BC</option>
                                          <option value="67">MB</option>
                                          <option value="68">NB</option>
                                          <option value="69">NL</option>
                                          <option value="70">NS</option>
                                          <option value="71">NT</option>
                                          <option value="72">NU</option>
                                          <option value="73">ON</option>
                                          <option value="74">PE</option>
                                          <option value="75">QC</option>
                                          <option value="76">SK</option>
                                          <option value="77">YT</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <th>
                                       <span class="seller_lot_required_label">Zipcode:</span>
                                    </th>
                                    <td><input name="pickup_contact_info[address][zip_code]" id="pickup_contact_info_address_zip_code" disabled="" type="text"></td>
                                 </tr>
                                 <tr style="display: none;">
                                    <th>
                                       <span>Pickup Contact Name:</span>
                                    </th>
                                    <td><input name="pickup_contact_info[contact_name]" id="pickup_contact_info_contact_name" disabled="" type="text"></td>
                                 </tr>
                                 <tr style="display: none;">
                                    <th>
                                       <span>Phone:</span>
                                    </th>
                                    <td><input name="pickup_contact_info[phone]" id="pickup_contact_info_phone" disabled="" type="text"></td>
                                 </tr>
                                 <tr style="display: none;">
                                    <th>
                                       <span>Fax:</span>
                                    </th>
                                    <td><input name="pickup_contact_info[fax]" id="pickup_contact_info_fax" disabled="" type="text"></td>
                                 </tr>
                                 <tr style="display: none;">
                                    <th>
                                       <span>Email:</span>
                                    </th>
                                    <td><input name="pickup_contact_info[email]" id="pickup_contact_info_email" disabled="" type="text"></td>
                                 </tr>
                              </tbody>
                           </table>
                           <p class="no_disclaimer info_box" id="buyer_group_requires_cr_for_alternate_pickup_location_message" style="display: none">
                              NOTE: The specified buyer group requires a CR in order to specify pickup location
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="vehicle_type_confirmation_popup_id" style="display:none">
                  <span>Are you sure you want to change the vehicle type?</span>
               </div>
               <script>
                  (function($){
                    $(document).ready(function() {
                      $.ove.makeModelSelection().forListingWizard();
                  
                      var pickupLocationValues = {
                        notSpecified: "not_specified",
                        atAuction: "at_auction",
                        atDealership: "at_dealership",
                        alternate: "alternate"
                      }
                  
                      var vehicleLocationValues = {
                        atAuction: '1',
                        notSpecified: '5',
                        sellersLot: '6'
                      }
                  
                      $.ove.pickupLocationDisplay().loaded({
                        vehicleLocationValues: vehicleLocationValues,
                        pickupLocationValues: pickupLocationValues,
                        fspAddressUrl: "/administration/fsp/address",
                        dealershipAddress: {"id":1800880,"line1":"104 NANCE COURT","line2":null,"created_on":"2016/12/10 22:45:46 +0000","updated_on":"2016/12/10 22:45:46 +0000","city":"ELIZABETH CITY","state_id":33,"zip_code":"27909","country_id":1,"md5_hash":"50f496b8a09e79c8b4da1c3f486dbcf1"},
                        mostRecentAlternateAddress: null
                      });
                  
                      $.ove.eventSaleAndBuyerGroupDisplay().loaded();
                  
                      $.ove.updateFSPCurrenciesList().bindEvents();
                      $.ove.listingVehicleLocationSelect().bindEvents();
                      $('#listing_vehicle_type_id').change($.ove.confirmVehicleTypeChange);
                      $.ove.updateFSPCurrenciesList().bindEvents();
                    });
                  })(jQuery);
               </script>
            </div>
            <div class="wizard_panel clearfix">
               <div id="vehicle_specs_form">
                  <h3 class="subheadFull stickyNavTarget" id="vehicle_specs_header">
                     <span>Vehicle Specs</span>
                  </h3>
                  <div class="form_box" id="vehicle_specs_car_style">
                     <table class="form_group" cellspacing="0">
                        <tbody>
                           <tr>
                              <th><span>Engine Cylinders:</span></th>
                              <td id="engine_selection">
                                 <select class="xlWidth" name="listing[engine_option]" id="listing_engine_option">
                                    <option selected="selected" value="">Not Specified</option>
                                    <option value="6|10 Cylinder Engine">... 10 Cylinder Engine</option>
                                    <option value="10">1 Cylinder</option>
                                    <option value="6">10 Cylinder</option>
                                    <option value="7">12 Cylinder</option>
                                    <option value="11">2 Cylinder</option>
                                    <option value="1">3 Cylinder</option>
                                    <option value="2">4 Cylinder</option>
                                    <option value="3">5 Cylinder</option>
                                    <option value="4">6 Cylinder</option>
                                    <option value="12">7 Cylinder</option>
                                    <option value="5">8 Cylinder</option>
                                    <option value="8">Rotary</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <th><span>Transmission:</span></th>
                              <td id="transmission_selection">
                                 <select class="xlWidth" name="listing[transmission_option]" id="listing_transmission_option">
                                    <option selected="selected" value="">Not Specified</option>
                                    <option value="2|6-Speed M/T">... 6-Speed M/T</option>
                                    <option value="1|7-Speed A/T">... 7-Speed A/T</option>
                                    <option value="1|A/T">... A/T</option>
                                    <option value="2|M/T">... M/T</option>
                                    <option value="1">Automatic</option>
                                    <option value="2">Manual</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <th><span>Drive Train:</span></th>
                              <td id="drive_train_selection">
                                 <select class="xlWidth" name="listing[drive_train_option]" id="listing_drive_train_option">
                                    <option selected="selected" value="">Not Specified</option>
                                    <option value="2">2 Wheel Drive</option>
                                    <option value="1">4 Wheel Drive</option>
                                    <option value="3">All Wheel Drive</option>
                                    <option value="5">Front Wheel Drive</option>
                                    <option value="6">Rear Wheel Drive</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <th><span>Fuel Type:</span></th>
                              <td id="fuel_selection">
                                 <select class="xlWidth" name="listing[fuel_option]" id="listing_fuel_option">
                                    <option selected="selected" value="">Not Specified</option>
                                    <option value="1|Gasoline Fuel">... Gasoline Fuel</option>
                                    <option value="2">Alternative/Hybrid</option>
                                    <option value="3">Diesel</option>
                                    <option value="1">Gasoline</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <th><span>Audio:</span></th>
                              <td id="audio_type_selection">
                                 <select class="xlWidth" name="listing[audio_type_option]" id="listing_audio_type_option">
                                    <option selected="selected" value="">Not Specified</option>
                                    <option value="2|AM/FM Stereo">... AM/FM Stereo</option>
                                    <option value="12|CD Changer">... CD Changer</option>
                                    <option value="3|CD Player">... CD Player</option>
                                    <option value="1|Premium Sound System">... Premium Sound System</option>
                                    <option value="6|Satellite Radio">... Satellite Radio</option>
                                    <option value="8">AM</option>
                                    <option value="2">AM/FM</option>
                                    <option value="3">AM/FM/CD</option>
                                    <option value="4">AM/FM/Cassette</option>
                                    <option value="5">AM/FM/Cassette/CD</option>
                                    <option value="7">AM/FM/Satelite/CD</option>
                                    <option value="6">AM/FM/Satellite</option>
                                    <option value="1">Premium</option>
                                 </select>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="form_box" id="vehicle_specs_engine" style="display: none;">
                     <table class="form_group" cellspacing="0">
                     </table>
                  </div>
                  <div class="form_box" id="vehicle_specs_options">
                     <table class="form_group" cellspacing="0">
                        <tbody>
                           <tr>
                              <th><span>Body Style:</span></th>
                              <td id="body_type_selection">
                                 <select class="xlWidth" name="listing[body_type_option]" id="listing_body_type_option">
                                    <option value="" selected="selected">Not Specified</option>
                                    <option value="1">Convertible</option>
                                    <option value="2">Coupe</option>
                                    <option value="3">Hatchback</option>
                                    <option value="5">SUV</option>
                                    <option value="4">Sedan</option>
                                    <option value="6">Truck</option>
                                    <option value="7">Van</option>
                                    <option value="8">Wagon</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <th><span>Top Style:</span></th>
                              <td id="top_type_selection">
                                 <select class="xlWidth" name="listing[top_type_option]" id="listing_top_type_option">
                                    <option selected="selected" value="">Not Specified</option>
                                    <option value="2|Convertible Soft Top">... Convertible Soft Top</option>
                                    <option value="2">Convertible</option>
                                    <option value="11">Convertible Hardtop</option>
                                    <option value="1">Hard Top</option>
                                    <option value="4">Moon Roof</option>
                                    <option value="3">Sun Roof</option>
                                    <option value="5">T-Top</option>
                                    <option value="6">Vinyl Roof</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <th><span>Interior Type:</span></th>
                              <td id="interior_type_selection">
                                 <select class="xlWidth" name="listing[interior_type_option]" id="listing_interior_type_option">
                                    <option value="" selected="selected">Not Specified</option>
                                    <option value="2">Cloth</option>
                                    <option value="1">Leather</option>
                                    <option value="3">Vinyl</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <th><span>Doors:</span></th>
                              <td id="door_selection">
                                 <select class="xlWidth" name="listing[door_option]" id="listing_door_option">
                                    <option selected="selected" value="">Not Specified</option>
                                    <option value="6">1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                    <option value="4">5</option>
                                    <option value="7">Yes</option>
                                 </select>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="wizard_panel clearfix">
               <div id="optional_vehicle_equipment_form">
                  <h3 class="subheadFull stickyNavTarget" id="optional_vehicle_equipment_header">
                     <span>Optional Vehicle Equipment</span>
                  </h3>
                  <p id="check_uncheck_options">
                     <input id="all_optional_equipment" type="checkbox">
                     <label for="all_optional_equipment">Check All</label>
                  </p>
                  <ul class="optional_equipment">
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_1" value="1" type="checkbox">
                        <label for="listing_equipment_ids_1">Air Conditioning</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_2" value="2" type="checkbox">
                        <label for="listing_equipment_ids_2">Cruise Control</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_3" value="3" type="checkbox">
                        <label for="listing_equipment_ids_3">Child Seat</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_4" value="4" type="checkbox">
                        <label for="listing_equipment_ids_4">Child Seat Anchors</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_5" value="5" type="checkbox">
                        <label for="listing_equipment_ids_5">Power Door Locks</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_6" value="6" type="checkbox">
                        <label for="listing_equipment_ids_6">Power Mirrors</label>
                     </li>
                  </ul>
                  <ul class="optional_equipment">
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_7" value="7" type="checkbox">
                        <label for="listing_equipment_ids_7">Power Windows</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_8" value="8" type="checkbox">
                        <label for="listing_equipment_ids_8">Rear Window Defroster</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_9" value="9" type="checkbox">
                        <label for="listing_equipment_ids_9">Air Bag - Side Curtain</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_10" value="10" type="checkbox">
                        <label for="listing_equipment_ids_10">Airbags</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_11" value="11" type="checkbox">
                        <label for="listing_equipment_ids_11">Tilt/Telescope Wheel</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_12" value="12" type="checkbox">
                        <label for="listing_equipment_ids_12">Tinted Glass</label>
                     </li>
                  </ul>
                  <ul class="optional_equipment">
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_13" value="13" type="checkbox">
                        <label for="listing_equipment_ids_13">Alloy Wheels</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_14" value="14" type="checkbox">
                        <label for="listing_equipment_ids_14">Power Brakes</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_15" value="15" type="checkbox">
                        <label for="listing_equipment_ids_15">Antilock Brakes</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_16" value="16" type="checkbox">
                        <label for="listing_equipment_ids_16">Power Seats</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_17" value="17" type="checkbox">
                        <label for="listing_equipment_ids_17">Power Steering</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_18" value="18" type="checkbox">
                        <label for="listing_equipment_ids_18">DVD</label>
                     </li>
                  </ul>
                  <ul class="optional_equipment">
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_19" value="19" type="checkbox">
                        <label for="listing_equipment_ids_19">GPS</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_20" value="20" type="checkbox">
                        <label for="listing_equipment_ids_20">Dual Climate Control</label>
                     </li>
                     <li>
                        <input name="listing[equipment_ids][]" id="listing_equipment_ids_21" value="21" type="checkbox">
                        <label for="listing_equipment_ids_21">Heated Seats</label>
                     </li>
                  </ul>
                  <br class="clear">
               </div>
               <script>
                  (function($) {
                    $('#all_optional_equipment').allCheckbox({
                      childSelector: '.optional_equipment input'
                    });
                  })(jQuery);
               </script>
            </div>
            <div class="wizard_panel">
               <div id="vehicle_condition_form">
                  <input name="listing[prior_paint]" value="[1]" type="hidden">
                  <input name="listing[prior_paint_details]" value="" type="hidden">
                  <h3 class="subheadFull stickyNavTarget" id="vehicle_condition_header">
                     <span>Vehicle Condition</span>
                  </h3>
                  <div class="form_box" id="vehicle_condition_style">
                     <table class="form_group" id="vehicle_seller_disclosures" style="width: 100%;">
                        <colgroup>
                           <col style="width: 16%">
                           <col style="width: 32%">
                           <col style="width: 52%">
                        </colgroup>
                        <tbody>
                           <tr>
                              <th id="frame_damage_label_cell"><span class="required_label_right">Frame/Structural Damage:</span></th>
                              <td id="frame_damage_cell">
                                 <input name="listing[frame_damage]" id="frame_damage_yes" value="1" type="checkbox">
                                 Yes
                                 <input name="listing[frame_damage]" id="frame_damage_no" value="0" checked="checked" type="checkbox">
                                 No
                              </td>                             
                           </tr>
                           <tr>
                              <th id="sold_as_is_label_cell"><span>Sold As Is:</span></th>
                              <td id="sold_as_is_cell">
                                 <input name="listing[sold_as_is]" id="sold_as_is_yes" value="1" type="checkbox">
                                 Yes
                                 <input name="listing[sold_as_is]" id="sold_as_is_no" value="0" type="checkbox">
                                 No
                              </td>                             
                           </tr>
                           <tr>
                              <th id="salvage_vehicle_label_cell"><span>Salvage:</span></th>
                              <td id="salvage_vehicle_cell">
                                 <input name="listing[salvage_vehicle]" id="salvage_vehicle_yes" value="1" type="checkbox">
                                 Yes
                                 <input name="listing[salvage_vehicle]" id="salvage_vehicle_no" value="0" checked="checked" type="checkbox">
                                 No
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <script>
                  (function($) {
                    $.ove.listingWizard.initAsIsSalvageText();
                    $(document).ready(function() {
                      $.ove.vehicleCondition().init(true);
                    });
                  })(jQuery);
               </script>
            </div>
            <div class="wizard_panel seller_disclosure_wizard_panel">
               <div id="seller_disclosure_form">              
                
                  <div class="form_box" id="seller_disclosure_style">                 
                    
                     <div id="prior_paint_div">
                        <h3>Vehicle Condition</h3>
                        <div class="checkbox_inside_h3">
                           <span id="prior_paint_label_cell"><span class="required_label">Prior Paint:</span></span>
                           <span id="prior_paint_cell">
                           <input name="listing[prior_paint_checked]" id="prior_paint_yes" value="1" type="checkbox">
                           Yes
                           <input name="listing[prior_paint_checked]" id="prior_paint_no" value="0" type="checkbox">
                           No
                           </span>
                        </div>
                        <div class="prior_paint_details" id="prior_paint_details">
                           <table id="prior_paint_container">
                              <thead>
                                 <tr>
                                    <th>Description</th>
                                    <th>Condition</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr class="prior_paint" id="listing_prior_paint_70050124055900">
                                    <td>
                                       <select name="listing[disclosed_prior_paints][][prior_paint_description_id]" class="prior_paint_description" disabled="disabled">
                                          <option value="" selected="selected">Not Specified</option>
                                          <option value="1">Overall Vehicle</option>
                                          <option value="2">Both Bumpers</option>
                                          <option value="3">Front Bumper</option>
                                          <option value="4">Rear Bumper</option>
                                          <option value="22">Inside Bed</option>
                                          <option value="5">Left Bed Side</option>
                                          <option value="23">Left Cab Corner Panel</option>
                                          <option value="6">Left Fender</option>
                                          <option value="7">Left Front Door</option>
                                          <option value="24">Left Front Mirror</option>
                                          <option value="8">Left Quarter Panel</option>
                                          <option value="9">Left Rear Door</option>
                                          <option value="10">Left Rocker Panel</option>
                                          <option value="25">Left Side Panel</option>
                                          <option value="26">Left Sliding Door</option>
                                          <option value="11">Right Bed Side</option>
                                          <option value="27">Right Cab Corner Panel</option>
                                          <option value="12">Right Fender</option>
                                          <option value="13">Right Front Door</option>
                                          <option value="28">Right Front Mirror</option>
                                          <option value="14">Right Quarter Panel</option>
                                          <option value="15">Right Rear Door</option>
                                          <option value="16">Right Rocker Panel</option>
                                          <option value="29">Right Side Panel</option>
                                          <option value="30">Right Sliding Door</option>
                                          <option value="17">Deck Lid</option>
                                          <option value="18">Hood</option>
                                          <option value="19">Roof</option>
                                          <option value="20">Liftgate</option>
                                          <option value="21">Tailgate</option>
                                       </select>
                                    </td>
                                    <td>
                                       <select name="listing[disclosed_prior_paints][][prior_paint_condition_id]" class="prior_paint_condition" disabled="disabled">
                                          <option value="" selected="selected">Not Specified</option>
                                          <option value="1">Acceptable</option>
                                          <option value="2">Substandard</option>
                                          <option value="3">See comments or photos</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr class="prior_paint" id="listing_prior_paint_70050124106240">
                                    <td>
                                       <select name="listing[disclosed_prior_paints][][prior_paint_description_id]" class="prior_paint_description" disabled="disabled">
                                          <option value="" selected="selected">Not Specified</option>
                                          <option value="1">Overall Vehicle</option>
                                          <option value="2">Both Bumpers</option>
                                          <option value="3">Front Bumper</option>
                                          <option value="4">Rear Bumper</option>
                                          <option value="22">Inside Bed</option>
                                          <option value="5">Left Bed Side</option>
                                          <option value="23">Left Cab Corner Panel</option>
                                          <option value="6">Left Fender</option>
                                          <option value="7">Left Front Door</option>
                                          <option value="24">Left Front Mirror</option>
                                          <option value="8">Left Quarter Panel</option>
                                          <option value="9">Left Rear Door</option>
                                          <option value="10">Left Rocker Panel</option>
                                          <option value="25">Left Side Panel</option>
                                          <option value="26">Left Sliding Door</option>
                                          <option value="11">Right Bed Side</option>
                                          <option value="27">Right Cab Corner Panel</option>
                                          <option value="12">Right Fender</option>
                                          <option value="13">Right Front Door</option>
                                          <option value="28">Right Front Mirror</option>
                                          <option value="14">Right Quarter Panel</option>
                                          <option value="15">Right Rear Door</option>
                                          <option value="16">Right Rocker Panel</option>
                                          <option value="29">Right Side Panel</option>
                                          <option value="30">Right Sliding Door</option>
                                          <option value="17">Deck Lid</option>
                                          <option value="18">Hood</option>
                                          <option value="19">Roof</option>
                                          <option value="20">Liftgate</option>
                                          <option value="21">Tailgate</option>
                                       </select>
                                    </td>
                                    <td>
                                       <select name="listing[disclosed_prior_paints][][prior_paint_condition_id]" class="prior_paint_condition" disabled="disabled">
                                          <option value="" selected="selected">Not Specified</option>
                                          <option value="1">Acceptable</option>
                                          <option value="2">Substandard</option>
                                          <option value="3">See comments or photos</option>
                                       </select>
                                    </td>
                                 </tr>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <td colspan="3">
                                       <a id="add_prior_paint_link" style="display: 'block'};" href="#">Add Another Row</a>
                                    </td>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                     </div>
                     <h3>Interior Condition</h3>
                     <div class="checkbox_inside_h3">
                        <input name="listing[no_interior_damage]" value="0" type="hidden"><input value="1" name="listing[no_interior_damage]" id="listing_no_interior_damage" type="checkbox">
                        No Damage
                     </div>
                     <div class="int_ext_condition">
                        <table id="interior_damages">
                           <thead>
                              <tr>
                                 <th>Description</th>
                                 <th>Condition</th>
                                 <th>Severity</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr id="listing_disclosed_damages_70050124472080" class="disclosed_damage">
                                 <td>
                                    <select name="listing[interior_disclosed_damages][][damage_description_id]" class="damage_description fullWidth">
                                       <option value="" selected="selected">Not Specified</option>
                                       <option value="51">Overall Vehicle</option>
                                       <option value="29">Steering Wheel</option>
                                       <option value="30">Air Bag</option>
                                       <option value="31">Dash</option>
                                       <option value="32">Radio</option>
                                       <option value="33">Console</option>
                                       <option value="34">Shift Knob</option>
                                       <option value="35">Glove Box Door</option>
                                       <option value="36">Left Front Carpet</option>
                                       <option value="37">Left Front Door Panel</option>
                                       <option value="38">Left Front Seat</option>
                                       <option value="39">Left Rear Carpet</option>
                                       <option value="40">Left Rear Door Panel</option>
                                       <option value="41">Left Rear Seat</option>
                                       <option value="42">Right Front Carpet</option>
                                       <option value="43">Right Front Door Panel</option>
                                       <option value="44">Right Front Seat</option>
                                       <option value="45">Right Rear Carpet</option>
                                       <option value="46">Right Rear Door Panel</option>
                                       <option value="47">Right Rear Seat</option>
                                       <option value="48">3rd Row Seat</option>
                                       <option value="49">Headliner</option>
                                       <option value="50">Sunroof</option>
                                    </select>
                                 </td>
                                 <td>
                                    <select name="listing[interior_disclosed_damages][][damage_condition_id]" class="damage_condition fullWidth">
                                       <option value="" selected="selected">Not Specified</option>
                                       <option value="48">Collision Damage</option>
                                       <option value="27">Bent</option>
                                       <option value="28">Broken</option>
                                       <option value="29">Burn</option>
                                       <option value="30">Cracked</option>
                                       <option value="31">Cut</option>
                                       <option value="32">Faded</option>
                                       <option value="33">Gouged</option>
                                       <option value="34">Hole</option>
                                       <option value="35">Missing</option>
                                       <option value="36">Scratch Heavy</option>
                                       <option value="37">Scratch Light</option>
                                       <option value="38">Scuffed</option>
                                       <option value="39">Singed</option>
                                       <option value="40">Soiled</option>
                                       <option value="41">Stained</option>
                                       <option value="42">Water Damage</option>
                                       <option value="43">Worn</option>
                                       <option value="44">Inoperable</option>
                                       <option value="45">Non-Factory</option>
                                       <option value="46">Ripped</option>
                                       <option value="49">See comments or photos</option>
                                    </select>
                                 </td>
                                 <td>
                                    <select name="listing[interior_disclosed_damages][][damage_severity_id]" class="damage_severity fullWidth">
                                       <option value="" selected="selected">Not Specified</option>
                                       <option value="23">Less than 1/4"</option>
                                       <option value="24">1/4" to 1/2"</option>
                                       <option value="25">1/2" to 1"</option>
                                       <option value="26">1" to 2"</option>
                                       <option value="27">2" to 3"</option>
                                       <option value="28">3" to 4"</option>
                                       <option value="29">4" to 5"</option>
                                       <option value="30">5" to 6"</option>
                                       <option value="31">6" to 7"</option>
                                       <option value="32">7" to 8"</option>
                                       <option value="33">8" to 9"</option>
                                       <option value="34">9" to 10"</option>
                                       <option value="35">10" or More</option>
                                       <option value="36">Multiple</option>
                                       <option value="37">Needs Cleaning</option>
                                       <option value="38">Permanent</option>
                                       <option value="39">Repair Required</option>
                                       <option value="40">Replacement Required</option>
                                    </select>
                                 </td>
                              </tr>
                              <tr id="listing_disclosed_damages_70050124471820" class="disclosed_damage">
                                 <td>
                                    <select name="listing[interior_disclosed_damages][][damage_description_id]" class="damage_description fullWidth">
                                       <option value="" selected="selected">Not Specified</option>
                                       <option value="51">Overall Vehicle</option>
                                       <option value="29">Steering Wheel</option>
                                       <option value="30">Air Bag</option>
                                       <option value="31">Dash</option>
                                       <option value="32">Radio</option>
                                       <option value="33">Console</option>
                                       <option value="34">Shift Knob</option>
                                       <option value="35">Glove Box Door</option>
                                       <option value="36">Left Front Carpet</option>
                                       <option value="37">Left Front Door Panel</option>
                                       <option value="38">Left Front Seat</option>
                                       <option value="39">Left Rear Carpet</option>
                                       <option value="40">Left Rear Door Panel</option>
                                       <option value="41">Left Rear Seat</option>
                                       <option value="42">Right Front Carpet</option>
                                       <option value="43">Right Front Door Panel</option>
                                       <option value="44">Right Front Seat</option>
                                       <option value="45">Right Rear Carpet</option>
                                       <option value="46">Right Rear Door Panel</option>
                                       <option value="47">Right Rear Seat</option>
                                       <option value="48">3rd Row Seat</option>
                                       <option value="49">Headliner</option>
                                       <option value="50">Sunroof</option>
                                    </select>
                                 </td>
                                 <td>
                                    <select name="listing[interior_disclosed_damages][][damage_condition_id]" class="damage_condition fullWidth">
                                       <option value="" selected="selected">Not Specified</option>
                                       <option value="48">Collision Damage</option>
                                       <option value="27">Bent</option>
                                       <option value="28">Broken</option>
                                       <option value="29">Burn</option>
                                       <option value="30">Cracked</option>
                                       <option value="31">Cut</option>
                                       <option value="32">Faded</option>
                                       <option value="33">Gouged</option>
                                       <option value="34">Hole</option>
                                       <option value="35">Missing</option>
                                       <option value="36">Scratch Heavy</option>
                                       <option value="37">Scratch Light</option>
                                       <option value="38">Scuffed</option>
                                       <option value="39">Singed</option>
                                       <option value="40">Soiled</option>
                                       <option value="41">Stained</option>
                                       <option value="42">Water Damage</option>
                                       <option value="43">Worn</option>
                                       <option value="44">Inoperable</option>
                                       <option value="45">Non-Factory</option>
                                       <option value="46">Ripped</option>
                                       <option value="49">See comments or photos</option>
                                    </select>
                                 </td>
                                 <td>
                                    <select name="listing[interior_disclosed_damages][][damage_severity_id]" class="damage_severity fullWidth">
                                       <option value="" selected="selected">Not Specified</option>
                                       <option value="23">Less than 1/4"</option>
                                       <option value="24">1/4" to 1/2"</option>
                                       <option value="25">1/2" to 1"</option>
                                       <option value="26">1" to 2"</option>
                                       <option value="27">2" to 3"</option>
                                       <option value="28">3" to 4"</option>
                                       <option value="29">4" to 5"</option>
                                       <option value="30">5" to 6"</option>
                                       <option value="31">6" to 7"</option>
                                       <option value="32">7" to 8"</option>
                                       <option value="33">8" to 9"</option>
                                       <option value="34">9" to 10"</option>
                                       <option value="35">10" or More</option>
                                       <option value="36">Multiple</option>
                                       <option value="37">Needs Cleaning</option>
                                       <option value="38">Permanent</option>
                                       <option value="39">Repair Required</option>
                                       <option value="40">Replacement Required</option>
                                    </select>
                                 </td>
                              </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <td colspan="3">
                                    <a id="add_interior_damage_link" href="#">Add Another Row</a>
                                 </td>
                              </tr>
                           </tfoot>
                        </table>
                     </div>
                     <br>
                     <h3>Exterior Condition</h3>
                     <div class="checkbox_inside_h3">
                        <input name="listing[no_exterior_damage]" value="0" type="hidden"><input value="1" name="listing[no_exterior_damage]" id="listing_no_exterior_damage" type="checkbox">
                        No Damage
                     </div>
                     <div class="int_ext_condition">
                        <table id="exterior_damages">
                           <thead>
                              <tr>
                                 <th>Description</th>
                                 <th>Condition</th>
                                 <th>Severity</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr id="listing_disclosed_damages_70050125043040" class="disclosed_damage">
                                 <td>
                                    <select name="listing[exterior_disclosed_damages][][damage_description_id]" class="damage_description fullWidth">
                                       <option value="" selected="selected">Not Specified</option>
                                       <option value="52">Overall Vehicle</option>
                                       <option value="1">Grill</option>
                                       <option value="2">Front Bumper</option>
                                       <option value="3">Headlight</option>
                                       <option value="4">Hood</option>
                                       <option value="5">Windshield</option>
                                       <option value="6">Left Fender</option>
                                       <option value="7">Left Front Wheel</option>
                                       <option value="8">Left Front Door</option>
                                       <option value="9">Left Rear Door</option>
                                       <option value="10">Left Rocker Panel</option>
                                       <option value="11">Left Quarter Panel</option>
                                       <option value="12">Left Rear Wheel</option>
                                       <option value="13">Left Bed Side</option>
                                       <option value="14">Deck Lid</option>
                                       <option value="15">Tailgate</option>
                                       <option value="16">Lift Gate</option>
                                       <option value="17">Taillamp</option>
                                       <option value="18">Rear Bumper</option>
                                       <option value="19">Right Quarter Panel</option>
                                       <option value="20">Right Rear Wheel</option>
                                       <option value="21">Right Bed Side</option>
                                       <option value="22">Right Rear Door</option>
                                       <option value="23">Right Front Door</option>
                                       <option value="24">Right Rocker Panel</option>
                                       <option value="25">Right Fender</option>
                                       <option value="26">Right Front Wheel</option>
                                       <option value="27">Roof</option>
                                       <option value="28">Convertible Top</option>
                                    </select>
                                 </td>
                                 <td>
                                    <select name="listing[exterior_disclosed_damages][][damage_condition_id]" class="damage_condition fullWidth">
                                       <option value="" selected="selected">Not Specified</option>
                                       <option value="47">Collision Damage</option>
                                       <option value="1">Bent</option>
                                       <option value="2">Broken</option>
                                       <option value="3">Burn</option>
                                       <option value="4">Chipped</option>
                                       <option value="5">Cracked</option>
                                       <option value="6">Curbed</option>
                                       <option value="7">Cut</option>
                                       <option value="8">Dent/No Paint Dmg</option>
                                       <option value="9">Dent/Paint Dmg</option>
                                       <option value="10">Ding</option>
                                       <option value="11">Faded</option>
                                       <option value="12">Gouged</option>
                                       <option value="13">Hail Damage</option>
                                       <option value="14">Hole</option>
                                       <option value="15">Missing</option>
                                       <option value="16">Oxidized</option>
                                       <option value="17">Peeling</option>
                                       <option value="18">Pitted</option>
                                       <option value="19">Poor Repair</option>
                                       <option value="20">Prev Repair</option>
                                       <option value="21">Primer</option>
                                       <option value="22">Scratch Heavy</option>
                                       <option value="23">Scratch Light</option>
                                       <option value="24">Scuffed</option>
                                       <option value="25">Water Damage</option>
                                       <option value="26">Worn</option>
                                       <option value="50">See comments or photos</option>
                                    </select>
                                 </td>
                                 <td>
                                    <select name="listing[exterior_disclosed_damages][][damage_severity_id]" class="damage_severity fullWidth">
                                       <option value="" selected="selected">Not Specified</option>
                                       <option value="1">Less than 1"</option>
                                       <option value="2">1" to 2"</option>
                                       <option value="3">2" to 3"</option>
                                       <option value="4">3" to 4"</option>
                                       <option value="5">4" to 5"</option>
                                       <option value="6">5" to 6"</option>
                                       <option value="7">6" to 7"</option>
                                       <option value="8">7" to 8"</option>
                                       <option value="9">8" to 9"</option>
                                       <option value="10">9" to 10"</option>
                                       <option value="11">10" or More</option>
                                       <option value="12">PDR/1</option>
                                       <option value="13">PDR/2-3</option>
                                       <option value="14">PDR/4-5</option>
                                       <option value="15">PDR/6-7</option>
                                       <option value="16">PDR/8-9</option>
                                       <option value="17">PDR/10 or more</option>
                                       <option value="18">Multiple</option>
                                       <option value="19">Substandard Repair</option>
                                       <option value="20">Acceptable Repair</option>
                                       <option value="21">Excellent Repair</option>
                                       <option value="22">Replacement Required</option>
                                    </select>
                                 </td>
                              </tr>
                              <tr id="listing_disclosed_damages_70050125042700" class="disclosed_damage">
                                 <td>
                                    <select name="listing[exterior_disclosed_damages][][damage_description_id]" class="damage_description fullWidth">
                                       <option value="" selected="selected">Not Specified</option>
                                       <option value="52">Overall Vehicle</option>
                                       <option value="1">Grill</option>
                                       <option value="2">Front Bumper</option>
                                       <option value="3">Headlight</option>
                                       <option value="4">Hood</option>
                                       <option value="5">Windshield</option>
                                       <option value="6">Left Fender</option>
                                       <option value="7">Left Front Wheel</option>
                                       <option value="8">Left Front Door</option>
                                       <option value="9">Left Rear Door</option>
                                       <option value="10">Left Rocker Panel</option>
                                       <option value="11">Left Quarter Panel</option>
                                       <option value="12">Left Rear Wheel</option>
                                       <option value="13">Left Bed Side</option>
                                       <option value="14">Deck Lid</option>
                                       <option value="15">Tailgate</option>
                                       <option value="16">Lift Gate</option>
                                       <option value="17">Taillamp</option>
                                       <option value="18">Rear Bumper</option>
                                       <option value="19">Right Quarter Panel</option>
                                       <option value="20">Right Rear Wheel</option>
                                       <option value="21">Right Bed Side</option>
                                       <option value="22">Right Rear Door</option>
                                       <option value="23">Right Front Door</option>
                                       <option value="24">Right Rocker Panel</option>
                                       <option value="25">Right Fender</option>
                                       <option value="26">Right Front Wheel</option>
                                       <option value="27">Roof</option>
                                       <option value="28">Convertible Top</option>
                                    </select>
                                 </td>
                                 <td>
                                    <select name="listing[exterior_disclosed_damages][][damage_condition_id]" class="damage_condition fullWidth">
                                       <option value="" selected="selected">Not Specified</option>
                                       <option value="47">Collision Damage</option>
                                       <option value="1">Bent</option>
                                       <option value="2">Broken</option>
                                       <option value="3">Burn</option>
                                       <option value="4">Chipped</option>
                                       <option value="5">Cracked</option>
                                       <option value="6">Curbed</option>
                                       <option value="7">Cut</option>
                                       <option value="8">Dent/No Paint Dmg</option>
                                       <option value="9">Dent/Paint Dmg</option>
                                       <option value="10">Ding</option>
                                       <option value="11">Faded</option>
                                       <option value="12">Gouged</option>
                                       <option value="13">Hail Damage</option>
                                       <option value="14">Hole</option>
                                       <option value="15">Missing</option>
                                       <option value="16">Oxidized</option>
                                       <option value="17">Peeling</option>
                                       <option value="18">Pitted</option>
                                       <option value="19">Poor Repair</option>
                                       <option value="20">Prev Repair</option>
                                       <option value="21">Primer</option>
                                       <option value="22">Scratch Heavy</option>
                                       <option value="23">Scratch Light</option>
                                       <option value="24">Scuffed</option>
                                       <option value="25">Water Damage</option>
                                       <option value="26">Worn</option>
                                       <option value="50">See comments or photos</option>
                                    </select>
                                 </td>
                                 <td>
                                    <select name="listing[exterior_disclosed_damages][][damage_severity_id]" class="damage_severity fullWidth">
                                       <option value="" selected="selected">Not Specified</option>
                                       <option value="1">Less than 1"</option>
                                       <option value="2">1" to 2"</option>
                                       <option value="3">2" to 3"</option>
                                       <option value="4">3" to 4"</option>
                                       <option value="5">4" to 5"</option>
                                       <option value="6">5" to 6"</option>
                                       <option value="7">6" to 7"</option>
                                       <option value="8">7" to 8"</option>
                                       <option value="9">8" to 9"</option>
                                       <option value="10">9" to 10"</option>
                                       <option value="11">10" or More</option>
                                       <option value="12">PDR/1</option>
                                       <option value="13">PDR/2-3</option>
                                       <option value="14">PDR/4-5</option>
                                       <option value="15">PDR/6-7</option>
                                       <option value="16">PDR/8-9</option>
                                       <option value="17">PDR/10 or more</option>
                                       <option value="18">Multiple</option>
                                       <option value="19">Substandard Repair</option>
                                       <option value="20">Acceptable Repair</option>
                                       <option value="21">Excellent Repair</option>
                                       <option value="22">Replacement Required</option>
                                    </select>
                                 </td>
                              </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <td colspan="3">
                                    <a id="add_exterior_damage_link" href="#">Add Another Row</a>
                                 </td>
                              </tr>
                           </tfoot>
                        </table>
                     </div>
                     <br>
                     <table class="form_group" id="odor_option_container">
                        <tbody>
                           <tr>
                              <th>Odor:</th>
                              <td>
                                 <select id="odor_option" name="listing[odor_id]">
                                    <option value="" selected="selected">Not Specified</option>
                                    <option value="1">None</option>
                                    <option value="2">Foul</option>
                                    <option value="3">Smoke</option>
                                    <option value="4">See comments or photos</option>
                                 </select>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <h3>Tire Condition</h3>
                     <table class="form_group">
                        <tbody>
                           <tr>
                              <th>Left Front:</th>
                              <td>
                                 <select id="left_front_tire_condition" name="listing[left_front_tire_condition_id]">
                                    <option value="" selected="selected">Not Specified</option>
                                    <option value="1">New</option>
                                    <option value="2">Less than 4/32"</option>
                                    <option value="9">At least 4/32"</option>
                                    <option value="3">4/32" to 7/32"</option>
                                    <option value="4">More than 7/32"</option>
                                    <option value="5">Bald</option>
                                    <option value="6">Flat</option>
                                    <option value="7">Missing</option>
                                    <option value="8">See comments or photos</option>
                                 </select>
                              </td>
                              <th>Right Front:</th>
                              <td>
                                 <select id="right_front_tire_condition" name="listing[right_front_tire_condition_id]">
                                    <option value="" selected="selected">Not Specified</option>
                                    <option value="1">New</option>
                                    <option value="2">Less than 4/32"</option>
                                    <option value="9">At least 4/32"</option>
                                    <option value="3">4/32" to 7/32"</option>
                                    <option value="4">More than 7/32"</option>
                                    <option value="5">Bald</option>
                                    <option value="6">Flat</option>
                                    <option value="7">Missing</option>
                                    <option value="8">See comments or photos</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <th>Left Rear:</th>
                              <td>
                                 <select id="left_rear_tire_condition" name="listing[left_rear_tire_condition_id]">
                                    <option value="" selected="selected">Not Specified</option>
                                    <option value="1">New</option>
                                    <option value="2">Less than 4/32"</option>
                                    <option value="9">At least 4/32"</option>
                                    <option value="3">4/32" to 7/32"</option>
                                    <option value="4">More than 7/32"</option>
                                    <option value="5">Bald</option>
                                    <option value="6">Flat</option>
                                    <option value="7">Missing</option>
                                    <option value="8">See comments or photos</option>
                                 </select>
                              </td>
                              <th>Right Rear:</th>
                              <td>
                                 <select id="right_rear_tire_condition" name="listing[right_rear_tire_condition_id]">
                                    <option value="" selected="selected">Not Specified</option>
                                    <option value="1">New</option>
                                    <option value="2">Less than 4/32"</option>
                                    <option value="9">At least 4/32"</option>
                                    <option value="3">4/32" to 7/32"</option>
                                    <option value="4">More than 7/32"</option>
                                    <option value="5">Bald</option>
                                    <option value="6">Flat</option>
                                    <option value="7">Missing</option>
                                    <option value="8">See comments or photos</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <th>Spare:</th>
                              <td>
                                 <select id="spare_tire_condition" name="listing[spare_tire_condition_id]">
                                    <option value="" selected="selected">Not Specified</option>
                                    <option value="1">New</option>
                                    <option value="2">Less than 4/32"</option>
                                    <option value="9">At least 4/32"</option>
                                    <option value="3">4/32" to 7/32"</option>
                                    <option value="4">More than 7/32"</option>
                                    <option value="5">Bald</option>
                                    <option value="6">Flat</option>
                                    <option value="7">Missing</option>
                                    <option value="8">See comments or photos</option>
                                 </select>
                              </td>
                              <td></td>
                              <td></td>
                           </tr>
                           <tr>
                              <th>All Tires Match (Brand/Size):</th>
                              <td colspan="4">
                                 <input name="listing[all_tires_match]" id="all_tires_match_yes" value="1" type="checkbox">
                                 Yes
                                 <input name="listing[all_tires_match]" id="all_tires_match_no" value="0" type="checkbox">
                                 No
                              </td>
                              <td></td>
                              <td></td>
                           </tr>
                        </tbody>
                     </table>
                     <h3 id="vehicle_keys_header">Keys</h3>
                     <table class="form_group" id="vehicle_keys">
                        <thead>
                           <tr>
                              <td>Type</td>
                              <td>Quantity</td>
                           </tr>
                        </thead>
                        <tbody id="vehicle_keys_tbody">
                           <tr class="vehicle_key">
                              <td class="mui-ph-r">
                                 <select name="listing[vehicle_keys][][vehicle_key_description_id]" class="key_description">
                                    <option selected="selected" value="">Not Specified</option>
                                    <option value="1">Master</option>
                                    <option value="2">Remote</option>
                                    <option value="3">Valet</option>
                                    <option value="4">Combo</option>
                                    <option value="5">Keyless</option>
                                    <option value="6">Smart</option>
                                 </select>
                              </td>
                              <td class="mui-ph-l">
                                 <select name="listing[vehicle_keys][][quantity]" class="key_quantity">
                                    <option selected="selected" value="">Not Specified</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                 </select>
                              </td>
                           </tr>
                        </tbody>
                        <tfoot>
                           <tr>
                              <td colspan="2">
                                 <a id="add_key_link" href="#">Add Another Row</a>
                              </td>
                           </tr>
                        </tfoot>
                     </table>
                     <h3 id="other_header">Other</h3>
                     <table class="form_group" id="other_disclosures">
                        <tbody>
                           <tr>
                              <th>Manuals:</th>
                              <td>
                                 <select id="owners_manual" name="listing[owners_manual_id]">
                                    <option value="" selected="selected">Not Specified</option>
                                    <option value="1">Present</option>
                                    <option value="2">Not Present</option>
                                    <option value="3">See comments or photos</option>
                                 </select>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="wizard_panel">
               <div class="mui-collapse-expand" id="seller_comments_heading_id">
                  <h3 class="subheadFull stickyNavTarget" id="seller_comments_header">
                     <span>Seller Comments</span>
                  </h3>
                  <div class="content mui-collapse-content">
                     <div class="row row-multi">
                        <div class="span16-16">
                           <p class="seller_comments_guide">(Additional condition details, optional equipment, etc.)</p>
                           <div class="form_box" id="seller_comments_form">
                              <textarea name="listing[seller_comments]" id="listing_seller_comments"></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <script>
                  (function($) {
                    $(document).ready(function() {
                      $('#listing_seller_comments').limit(2000);
                    });
                  })(jQuery);
               </script>
            </div>
            <div class="wizard_panel">
               <h3 class="subheadFull stickyNavTarget" id="seller_information_header">
                  <span>Seller Information</span>
               </h3>
               <div class="form_box" id="seller_information_form">
                  <div id="contact_info">
                     <table class="form_group" cellspacing="0">
                        <tbody>
                           <tr>
                              <th><span>Contact Name:</span></th>
                              <td><input name="listing[contact_name]" id="listing_contact_name" type="text"></td>
                           </tr>
                           <tr>
                              <th><span>Company Name:</span></th>
                              <td><input value="" name="listing[contact_company_name]" id="listing_contact_company_name" type="text"></td>
                           </tr>
                           <tr>
                              <th><span>Phone:</span></th>
                              <td><input name="listing[contact_phone]" id="listing_contact_phone" type="text"></td>
                           </tr>
                           <tr>
                              <th><span>Fax:</span></th>
                              <td><input name="listing[contact_fax]" id="listing_contact_fax" type="text"></td>
                           </tr>
                           <tr>
                              <th><span class="required_label">Contact Email:</span></th>
                              <td><input name="listing[contact_email]" id="listing_contact_email" type="text"></td>
                           </tr>
                           <tr>
                              <th><span>CC Email:</span></th>
                              <td><input name="listing[contact_cc_email]" id="listing_contact_cc_email" type="text"></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>                
               </div>
               <script>
                  jQuery(document).ready(function() {
                    jQuery('#listing_buyer_group_id')
                      .conditionalDisplay({
                        possibleValues: [],
                        targetSelector: '#buyer_group_cr_required'})
                  
                    jQuery('#listing_buyer_group_id')
                      .conditionalDisplay({
                        possibleValues: [],
                        targetSelector: '#buyer_group_cr_or_sd_required'})
                  });
               </script>
            </div>
            <br class="clear">
         </div>
         <div class="button_group wizard_btns">
            <input name="jump_to" id="jump_to" value="" type="hidden">
            <div class="center">
               <input name="save" value="Save as Draft" id="wizard_save_button" class="button" type="submit">
            </div>
            <div class="right">
               <input name="next" value="Continue" id="wizard_next_button" class="sec_button" type="submit">
            </div>
         </div>
         <script>
            (function($){
              $(document).ready(function() {
                $("#listing_wizard_vehicle_information_form").preventDoubleSubmission();
              });
            })(jQuery);
         </script>
      </form>
   </div>
</div>
<?php $this->load->view('front/common/dashboard/footer'); ?>




