<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>bravocanada</title>
   
   <!--CSS STARTS HERE-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/style.css">
   
  <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"> -->
   <link href="<?php echo base_url();?>assets/user/css/screen.css" rel="stylesheet" type="text/css">
   <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> 

   <script>
     
     var base_url = '<?php echo base_url();?>';
   </script>

   <style type="text/css">
            .valid {
                border: 1px solid green;
            }

            .error {
                color: red;
            }
        </style>
   
</head>

<body>

<!--HEADER AREA STARTS HERE-->
	<header role="header-area">
		<section role="top-head">
			<div class="container-fluid">
				<div class="row">
					<?php $this->load->view('menu'); ?>
				</div>
			</div>
		</section>
</header>
	
<!--HEADER AREA ENDS HERE // -->