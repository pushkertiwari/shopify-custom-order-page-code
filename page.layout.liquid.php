<div class="container custom-container page-area">
	<script>
		$(function() {
			$(".image-preview-input input:file").change(function (){     
				var img = $('<img/>', {
					id: 'dynamic',
					width:250,
					height:200
				});      
				var file = this.files[0];
				var reader = new FileReader();
				reader.onload = function (e) {
					$(".image-preview-input-title").text("Change");
					$(".image-preview-filename").val(file.name);            
					img.attr('src', e.target.result);
				}        
				reader.readAsDataURL(file);
			});  
		});
  </script>

	<script>
		$(document).ready(function(){
			$('.tab_slider .item a').on('click', function(){
				$('.tab_slider .item a.active').removeClass('active');
				$(this).addClass('active');
			});
		});
	</script> 
  <script>
    $(document).ready(function(){
      $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'choose_effect':'choose_effect'},
        dataType: 'json',
        success:function(resp){
          var html ='';
          $.each(resp,function(key,value){
         html +='<li><a href="#"><img src="https://shopify.beetronicsfx.com/app/images/choose_effect/'+value.image+'" class="center-block"></a><p>'+value.effect_name+'</p></li>';
          });
          $('#ulROW').html(html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
    });
     $(document).ready(function(){
      $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'pick_color':'pick_color'},
        dataType: 'json',
        success:function(resp){
          var pick_html ='';
          $.each(resp,function(key,value){
         pick_html +='<div class="item"><a href="#"><img src="https://shopify.beetronicsfx.com/app/images/picker_image/'+value.image+'" class="center-block"><p>'+value.color_name+'</p></a></div>';
          });
         // console.log(pick_html);	
          $('.loop_slider.ROW_pick').html(pick_html);
 		   $('.loop_slider.ROW_pick').owlCarousel({
				items: 5,
				loop: false,
				autoplay:false,
				nav: true,
				slideSpeed: 500,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 2
					},
					992: {
						items: 3
					},
					1200: {
						items: 4
					},
					1280: {
						items: 5,
					}
				}
			});
        },error:function(err,xhr){
        	console.log('err ',xhr);
        }
      }); 
       //footswitch color ajax response 
        $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'footswitch_color':'footswitch_color'},
        dataType: 'json',
        success:function(resp){
          var footswitch_color_html ='';
          $.each(resp,function(key,value){
        footswitch_color_html +='<div class="item"><a href="#"><img src="https://shopify.beetronicsfx.com/app/images/footswitch_color/'+value.image+'" class="center-block"><p>'+value.footswitch_name+'</p></a></div>';
          });
         // console.log(footswitch_color_html);	
          $('.loop_slider.ROW_footswitch_color').html(footswitch_color_html);
 		   $('.loop_slider.ROW_footswitch_color').owlCarousel({
				items: 5,
				loop: false,
				autoplay:false,
				nav: true,
				slideSpeed: 500,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 2
					},
					992: {
						items: 3
					},
					1200: {
						items: 4
					},
					1280: {
						items: 5,
					}
				}
			});
        },error:function(err,xhr){
        	console.log('err ',xhr);
        }
      });   
    });
  </script>
  <script>
  $(document).ready(function(){
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'knobs':'knobs'},
        dataType: 'json',
        success:function(resp){
          var knob_html ='';
          $.each(resp,function(key,value){
         knob_html +='<div class="item"><a href="#"><img src="https://shopify.beetronicsfx.com/app/images/knobs/'+value.image+'" class="center-block"><p>'+value.knob_name+'</p></a></div>';
          });
          //console.log(knob_html);	
          $('.loop_slider.ROW_knob').html(knob_html);
           $('.loop_slider.ROW_knob').owlCarousel({
				items: 5,
				loop: false,
				autoplay:false,
				nav: true,
				slideSpeed: 500,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 2
					},
					992: {
						items: 3
					},
					1200: {
						items: 4
					},
					1280: {
						items: 5,
					}
				}
			});
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
    // footswitch hardware json
      $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'footswitch_hardware':'footswitch_hardware'},
        dataType: 'json',
        success:function(resp){
          var footswitch_hardware_html ='';
          $.each(resp,function(key,value){
         footswitch_hardware_html +='<div class="item"><a href="#"><img src="https://shopify.beetronicsfx.com/app/images/footswitch_hardware/'+value.image+'" class="center-block"><p>'+value.hardware_name+'</p></a></div>';
          });	
          $('.loop_slider.ROW_footswitch_hardware').html(footswitch_hardware_html);
           $('.loop_slider.ROW_footswitch_hardware').owlCarousel({
				items: 5,
				loop: false,
				autoplay:false,
				nav: true,
				slideSpeed: 500,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 2
					},
					992: {
						items: 3
					},
					1200: {
						items: 4
					},
					1280: {
						items: 5,
					}
				}
			});
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
    
    //toggle footswitch hardware json
     $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'toggle_switch':'toggle_switch'},
        dataType: 'json',
        success:function(resp){
          var toggle_switch_html ='';
          $.each(resp,function(key,value){
         toggle_switch_html +='<div class="item"><a href="#"><img src="https://shopify.beetronicsfx.com/app/images/toggle_switch_hardware/'+value.image+'" class="center-block"><p>'+value.toggle_switch_name+'</p></a></div>';
          });	
          $('.loop_slider.ROW_toggle_switch').html(toggle_switch_html);
           $('.loop_slider.ROW_toggle_switch').owlCarousel({
				items: 5,
				loop: false,
				autoplay:false,
				nav: true,
				slideSpeed: 500,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 2
					},
					992: {
						items: 3
					},
					1200: {
						items: 4
					},
					1280: {
						items: 5,
					}
				}
			});
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
    
    //toggle switch tip
      $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'toggle_switch_tip':'toggle_switch_tip'},
        dataType: 'json',
        success:function(resp){
          var toggle_switch_tip_html ='';
          $.each(resp,function(key,value){
         toggle_switch_tip_html +='<div class="item"><a href="#"><img src="https://shopify.beetronicsfx.com/app/images/toggle_switch_tip/'+value.image+'" class="center-block"><p>'+value.toggle_switch_tip+'</p></a></div>';
          });	
          $('.loop_slider.ROW_toggle_switch_tip').html(toggle_switch_tip_html);
           $('.loop_slider.ROW_toggle_switch_tip').owlCarousel({
				items: 5,
				loop: false,
				autoplay:false,
				nav: true,
				slideSpeed: 500,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 2
					},
					992: {
						items: 3
					},
					1200: {
						items: 4
					},
					1280: {
						items: 5,
					}
				}
			});
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
    // jewel lens json
     $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'jewel_lens_json':'jewel_lens_json'},
        dataType: 'json',
        success:function(resp){
          var jewel_lens_html ='';
          $.each(resp,function(key,value){
         jewel_lens_html +='<div class="item"><a href="#"><img src="https://shopify.beetronicsfx.com/app/images/jewel_lens/'+value.image+'" class="center-block"><p>'+value.jewel_lens+'</p></a></div>';
          });	
          $('.loop_slider.ROW_jewel_lens').html(jewel_lens_html);
           $('.loop_slider.ROW_jewel_lens').owlCarousel({
				items: 5,
				loop: false,
				autoplay:false,
				nav: true,
				slideSpeed: 500,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 2
					},
					992: {
						items: 3
					},
					1200: {
						items: 4
					},
					1280: {
						items: 5,
					}
				}
			});
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
    //DC jewel lens json
     $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'dc_jewel_lens':'dc_jewel_lens'},
        dataType: 'json',
        success:function(resp){
          var dc_jewel_html ='';
          $.each(resp,function(key,value){
         dc_jewel_html +='<div class="item"><a href="#"><img src="https://shopify.beetronicsfx.com/app/images/dc_jack_color/'+value.image+'" class="center-block"><p>'+value.dc_jewel_lens+'</p></a></div>';
          });	
          $('.loop_slider.ROW_dc_jewel').html(dc_jewel_html);
           $('.loop_slider.ROW_dc_jewel').owlCarousel({
				items: 5,
				loop: false,
				autoplay:false,
				nav: true,
				slideSpeed: 500,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 2
					},
					992: {
						items: 3
					},
					1200: {
						items: 4
					},
					1280: {
						items: 5,
					}
				}
			});
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
    // logo badge ajax json
     $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'logo_badge':'logo_badge'},
        dataType: 'json',
        success:function(resp){
          var logo_badge_html ='';
          $.each(resp,function(key,value){
         logo_badge_html +='<div class="item"><a href="#"><img src="https://shopify.beetronicsfx.com/app/images/logo_badge/'+value.image+'" class="center-block"><p>'+value.logo_badge+'</p></a></div>';
          });	
          $('.loop_slider.ROW_logo_badge').html(logo_badge_html);
           $('.loop_slider.ROW_logo_badge').owlCarousel({
				items: 5,
				loop: false,
				autoplay:false,
				nav: true,
				slideSpeed: 500,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 2
					},
					992: {
						items: 3
					},
					1200: {
						items: 4
					},
					1280: {
						items: 5,
					}
				}
			});
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
     });
  </script>
<div class="container-fluid custum_overlay">
		<div class="container slider">

			<div id="tab_slider" class="tab_slider owl-carousel owl-theme">

				<div class="item active">
					<a class="active" href="#Step1" data-toggle="tab" title="Choose an Effect">
						<span>1</span>
					</a>
				</div>

				<div class="item">
					<a href="#Step2" data-toggle="tab" title="Pick a Color">
						<span>2</span>
					</a>
				</div>

				<div class="item">
					<a href="#Step3" data-toggle="tab" title="Custom Design, Symbol, Logo or Pattern">
						<span>3</span>
					</a>
				</div>

				<div class="item">
					<a href="#Step4" data-toggle="tab" title="Knobs">
						<span>4</span>
					</a>
				</div>

				<div class="item">
					<a href="#Step5" data-toggle="tab" title="Footswitch Color">
						<span>5</span>
					</a>
				</div>

				<div class="item">
					<a href="#Step6" data-toggle="tab" title="Footswitch Hardware">
						<span>6</span>
					</a>
				</div>

				<div class="item">
					<a href="#Step7" data-toggle="tab" title="Toggle switch Hardware">
						<span>7</span>
					</a>
				</div>

				<div class="item">
					<a href="#Step8" data-toggle="tab" title="Toggle switch Tip">
						<span>8</span>
					</a>
				</div>

				<div class="item">
					<a href="#Step9" data-toggle="tab" title="Jewel Lens">
						<span>9</span>
					</a>
				</div>

				<div class="item">
					<a href="#Step10" data-toggle="tab" title="Dc power jack color">
						<span>10</span>
					</a>
				</div>

				<div class="item">
					<a href="#Step11" data-toggle="tab" title="Logo Badge">
						<span>11</span>
					</a>
				</div>

				<div class="item">
					<a href="#Step12" data-toggle="tab" title="Comments, Ideas or Suggestions">
						<span>12</span>
					</a>
				</div>

				<div class="item">
					<a href="#Step13" data-toggle="tab" title="Personal Info">
						<span>13</span>
					</a>
				</div>

				<div class="item">
					<a href="#Step14" data-toggle="tab" title="Thank You">
						<span>14</span>
					</a>
				</div>
			</div>
		</div>
		<div class="tab-content">
			<div id="Step1" class=" tab-pane active in">
				<div class="container effect_div">
					<div class="row">
						<h1>Choose an effect</h1>
						<ul id="ulROW">
<!-- 							<li>
								<a href="">
									<img src="{{ "octachive.png" | asset_url }}" class="center-block">
								</a>
								<p>High octave fuzz</p>
							</li>
							<li>
								<a href="">
									<img src="" class="center-block">
								</a>
								<p>Low octave fuzz</p>
							</li>
							<li>
								<a href="">
									<img src="" class="center-block">
								</a>
								<p>Overdrive</p>
							</li> -->
						</ul>
					</div>
				</div>
			</div>

			<div id="Step2" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
						<h1>Pick a color</h1>
						<div class="content">
							<p>HERE YOU CAN HAVE AN IDEA OF THE COLOR POSSIBILITIES.</p>
							<p>we can do gradients, color over color, rustic finishes and many different combinations.</p>
							<p>If you have a design that require  multiple colors, or a  color thats not listed here, just let us know and we can make it happen.</p>
						</div>
						
						<div class="loop_slider owl-carousel owl-theme ROW_pick">
<!--        					 	<div class="item" >
								<a href="">
									<img src="" class="center-block">
									<p>Pink over malachite</p>
								</a>
							</div>
						<div class="item">
								<a href="#">
									<img src="" class="center-block">
									<p>Yellow over purple</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="" class="center-block">
									<p>purple and pink gradient</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="" class="center-block">
									<p>Lime green gradient</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="" class="center-block">
									<p>malachite dark blue</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="" class="center-block">
									<p>Lime green gradient</p>
								</a>
							</div>   -->
						</div>

						<div class="form-group col-md-12 col-sm-12 col-xs-12">
							<label class="col-md-8 col-sm-9 col-xs-12">Looking for something else? No problem. Please describe the color you are looking for : </label>
							<div class="col-md-4 col-sm-3 col-xs-12 color_picker">
								<input type="text" name="" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="Step3" class="tab-pane fade">
				<div class="container textarea">
					<div class="row">
						<h1>Custom design, symbol, logo or pattern</h1>

						<div class="content">
							<p>THE CUSTOM DESIGNS, SYMBOLS, LOGOS OR PATTERNS CAN BE DONE IN MANY DIFFERENT WAYS.</p>
							<p>RUSTIC, SHINY, COLORFUL OR BLENDING MULTIPLE PAINTING TECHINIQUES. </p>
							<p>WE ARE EXPERTS WHEN IT COMES DOWN TO FINISHING. OUR FINISHES HAVE DEPHT AND ARE EXTREMELY UNIQUE. </p>
							<p>EVERYTHING IS HAND MADE, NO PRINTING INVOLVED. </p>
							<p>SEND US YOUR IDEA AND WE’LL BE ABLE TO ASSIST AND GUIDE YOU ON WHAT IS THE BEST WAY TO GET IT DONE. </p>
						</div>

						<div class="browse col-md-12 col-sm-12 col-xs-12">
							<div class="input-group">
								<input type="text" class="form-control image-preview-filename" disabled="disabled">
								<span class="input-group-btn">
									<div class="btn btn-default image-preview-input">
										<span class="image-preview-input-title">Upload</span>
										<input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/>
									</div>
								</span>
							</div>
							<div class="form-group">
								<textarea class="form-control" placeholder="Describe your idea for the design, colors, placement and etc..."></textarea>
							</div>
						</div>
						
					</div>
				</div>
			</div>

			<div id="Step4" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
						<h1>Knobs</h1>
						<div class="content">
							<p>TWE ARE KNOB HOARDERS! SO WE TRY TO STOCK UP ON THE COOLEST AND RAREST KNOBS WE CAN.</p>
							<p>NOTE HOW MANY KNOBS YOUR DESIRED MODEL USES WHEN PICKING. WE’LL ALSO ADVISE YOU ON COOL COMBINATIONS. </p>
							<p>*KNOBS OPTIONS ARE FOR REFERENCE ONLY. KNOBS MAY BE SUBJECT TO AVAILABILITY. </p>
						</div>

						<div class="loop_slider owl-carousel owl-theme ROW_knob">
<!--   							<div class="item">
								<a href="#">
									<img src="" class="center-block">
									<p>Chickenhead1</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="" class="center-block">
									<p>VINTAGE NOS POINTER 1</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="" class="center-block">
									<p>SMALL MILITARY ROUND</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="" class="center-block">
									<p>BIG WH ROUND</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="" class="center-block">
									<p>LARGE ROUND 1</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="" class="center-block">
									<p>VINTAGE NOS POINTER 1</p>
								</a>
							</div>   -->
						</div>
					</div>
				</div>
			</div>

			<div id="Step5" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
						<h1>Footswitch Color</h1>
						<div class="content">
							<p>*NOTE THAT GOLD SWITCH MAY HAVE NOT BE COMBINED WITH SOME OF THE FOOTSWITCH HARDWARE OPTIONS.</p>
						</div>

						<div class="loop_slider owl-carousel owl-theme ROW_footswitch_color">
<!-- 							<div class="item">
								<a href="#">
									<img src="{{ "image11.png" | asset_url }}" class="center-block">
									<p>SILVER</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="{{ "image11.png" | asset_url }}" class="center-block">
									<p>Gold</p>
								</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>

			<div id="Step6" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
						<h1>Footswitch Hardware</h1>

						<div class="loop_slider owl-carousel owl-theme ROW_footswitch_hardware">
<!-- 							<div class="item">
								<a href="#">
									<img src="images/image13.png" class="center-block">
									<p>AVIATION ROUND GOLD</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image14.png" class="center-block">
									<p>MOUNTAIN TOP SILVER</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image15.png" class="center-block">
									<p>SMALL ROUND GOLD 1</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image16.png" class="center-block">
									<p>LARGE ROUND SILVER 1</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image17.png" class="center-block">
									<p>SMALL ROUND GOLD 2</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image15.png" class="center-block">
									<p>SMALL ROUND GOLD 1</p>
								</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>

			<div id="Step7" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
						<h1>Toggle switch Hardware</h1>

						<div class="loop_slider owl-carousel owl-theme ROW_toggle_switch">
<!-- 							<div class="item">
								<a href="#">
									<img src="images/image18.png" class="center-block">
									<p>MODERN BLUE</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image19.png" class="center-block">
									<p>RUSTY PLUMBER</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image20.png" class="center-block">
									<p>MODERN ROUND SILVER</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image21.png" class="center-block">
									<p>SUNSHINE SILVER</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image22.png" class="center-block">
									<p>ORANGE PLUMBER</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image20.png" class="center-block">
									<p>MODERN ROUND SILVER</p>
								</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>

			<div id="Step8" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
						<h1>Toggle switch Tip</h1>

						<div class="loop_slider owl-carousel owl-theme ROW_toggle_switch_tip">
<!-- 							<div class="item">
								<a href="#">
									<img src="images/image23.png" class="center-block">
									<p>White</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image24.png" class="center-block">
									<p>red</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image25.png" class="center-block">
									<p>black</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image26.png" class="center-block">
									<p>silver</p>
								</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>

			<div id="Step9" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
						<h1>Jewel Lens</h1>

						<div class="content">
							<p>NOTE THAT CERTAIN LENSES COLORS WON’T WORK WELL WITH THE WHOCTAHELL AND OCTAHIVE SINCE THE LED COLOR CHANGE MIGHT NOT BE SO NOTICEABLE. WE’LL ALWAYS ADVISE YOU ON WHAT WE THINK MAY WORK BETTER.</p>
						</div>

						<div class="loop_slider owl-carousel owl-theme ROW_jewel_lens">
<!-- 							<div class="item">
								<a href="#">
									<img src="images/image27.png" class="center-block">
									<p>red</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image28.png" class="center-block">
									<p>blue</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image29.png" class="center-block">
									<p>NOS VINTAGE ORANGE</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image30.png" class="center-block">
									<p>NOS PRESS TO TEST YELLOW</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image31.png" class="center-block">
									<p>white</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image28.png" class="center-block">
									<p>blue</p>
								</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>

			<div id="Step10" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
						<h1>Dc power jack color</h1>

						<div class="loop_slider owl-carousel owl-theme ROW_dc_jewel">
<!-- 							<div class="item">
								<a href="#">
									<img src="images/image32.png" class="center-block">
									<p>red</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image33.png" class="center-block">
									<p>white</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image34.png" class="center-block">
									<p>black</p>
								</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>

			<div id="Step11" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
						<h1>Logo Badge</h1>

						<div class="loop_slider owl-carousel owl-theme ROW_logo_badge">
<!-- 							<div class="item">
								<a href="#">
									<img src="images/image35.png" class="center-block">
									<p>BLACK / ANTIQUE NICKEL</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image36.png" class="center-block">
									<p>ANTIQUE COPPER</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image37.png" class="center-block">
									<p>RED / ANTIQUE NICKEL</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image38.png" class="center-block">
									<p>PURPLE / ANTIQUE NICKEL</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image39.png" class="center-block">
									<p>SEAFOAM GREEN / ANTIQUE GOLD</p>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="images/image36.png" class="center-block">
									<p>ANTIQUE COPPER</p>
								</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>

			<div id="Step12" class="tab-pane fade">
				<div class="container textarea">
					<div class="row">
						<h1>Comments, ideas or suggestions</h1>
						<div class="form-group">
							<textarea class="form-control" placeholder="Let us know if you have any other ideas or suggestions..."></textarea>
						</div>
					</div>
				</div>
			</div>

			<div id="Step13" class="tab-pane fade">
				<div class="container custom_form">
					<div class="row">
						<h1>Personal Info</h1>
						<form>
							<div class="form-group">
								<input type="text" placeholder="Name" name="" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Email address" name="" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Phone Number" name="" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Street Address" name="" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" placeholder="City" name="" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Zip Code" name="" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Country" name="" class="form-control">
							</div>
							<div class="form-group">
								<button type="submit" class="btn yellow_btn">Send Inquire!</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div id="Step14" class="tab-pane fade">
				<div class="container text_botm">
					<div class="row">
						<h1>Thank you for your inquire!</h1>
						<div class="content">
							<p>WE LOOK FORWARD TO MAKING YOU THE COOLEST CUSTOM PEDAL EVER!</p>
							<p>WE’LL SEND YOU A QUOTE IN 24 HOURS OR LESS. </p>
						</div>
						<h1>Bee Yourself!</h1>
					</div>
				</div>
			</div>
		</div>

	</div>  
</div>
<script>
		$(document).ready(function() {
			$('#tab_slider').owlCarousel({
				items: 4,
				loop: false,
				autoplay:false,
				nav: true,
				dots: false,
				responsive: {
					0: {
						items: 1
					},
					480: {
						items: 2
					},
					768: {
						items: 2
					},
					1200: {
						items: 4,
					}
				}
			});

		});
	</script>
	
