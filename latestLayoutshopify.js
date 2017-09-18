<div class="container custom-container page-area">
  {{'jquery.form.js'| asset_url | script_tag }}
	<script>
		$(function() {
			$(".image-preview-input input:file").change(function (){     
				var img = $('<img/>', {
					id: 'dynamic',
					width:250,
					height:200
				});      
				var file = this.files[0];
            //  console.log(file.name);
              localStorage.setItem('File',file.name);
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
       //getting the choose effect text and its title
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'title_choose_effect':'title_choose_effect'},
        dataType: 'json',
        success:function(resp){
          var choose_text_html = '<h1>'+resp[0].title+'</h1>';
          if(resp[0].description !=''){
            choose_text_html += '<div class="content"><p>'+resp[0].description+'</p></div>';
          }
          $('.title_choose').html(choose_text_html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
       //getting the picker color text and its title
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'title_picker_color':'title_picker_color'},
        dataType: 'json',
        success:function(resp){
          var pickerColor_text_html = '<h1>'+resp[0].title+'</h1>';
          if(resp[0].description !=''){
            pickerColor_text_html += '<div class="content"><p>'+resp[0].description+'</p></div>';
          }
          $('.title_picker').html(pickerColor_text_html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
        //getting the picker color comment section
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'picker_color_cmt_title':'picker_color_cmt_title'},
        dataType: 'json',
        success:function(resp){
          var pickerColor_cmt = resp[0].title;
          $('.pickr_clr_cmt_section').html(pickerColor_cmt);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
       //getting the knobs text and its title
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'title_knobs':'title_knobs'},
        dataType: 'json',
        success:function(resp){
          var knob_text_html = '<h1>'+resp[0].title+'</h1>';
          if(resp[0].description !=''){
            knob_text_html += '<div class="content"><p>'+resp[0].description+'</p></div>';
          }
          $('.title_knobs').html(knob_text_html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
        //getting the footswitch color text and its title
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'title_footswitch_color':'title_footswitch_color'},
        dataType: 'json',
        success:function(resp){
          var footswitch_color_text_html = '<h1>'+resp[0].title+'</h1>';
          if(resp[0].description !=''){
            footswitch_color_text_html += '<div class="content"><p>'+resp[0].description+'</p></div>';
          }
          $('.title_footswitch_color').html(footswitch_color_text_html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
       //getting the footswitch hardware text and its title
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'title_footswitch_hardware':'title_footswitch_hardware'},
        dataType: 'json',
        success:function(resp){
          var footswitch_hardware_text_html = '<h1>'+resp[0].title+'</h1>';
          if(resp[0].description !=''){
            footswitch_hardware_text_html += '<div class="content"><p>'+resp[0].description+'</p></div>';
          }
          $('.title_footswitch_hardware').html(footswitch_hardware_text_html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
      //getting the toggle hardware text and its title
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'title_toggle_hardware':'title_toggle_hardware'},
        dataType: 'json',
        success:function(resp){
          var toggle_hardware_text_html = '<h1>'+resp[0].title+'</h1>';
          if(resp[0].description !=''){
            toggle_hardware_text_html += '<div class="content"><p>'+resp[0].description+'</p></div>';
          }
          $('.title_toggle_hardware').html(toggle_hardware_text_html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
       //getting the toggle switch tip text and its title
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'title_toggle_switch_tip':'title_toggle_switch_tip'},
        dataType: 'json',
        success:function(resp){
          var toggle_switch_tip_text_html = '<h1>'+resp[0].title+'</h1>';
          if(resp[0].description !=''){
            toggle_switch_tip_text_html += '<div class="content"><p>'+resp[0].description+'</p></div>';
          }
          $('.title_toggle_switch_tip').html(toggle_switch_tip_text_html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
      //getting the jewel lens tip text and its title
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'title_jewel_lens':'title_jewel_lens'},
        dataType: 'json',
        success:function(resp){
          var jewel_lens_text_html = '<h1>'+resp[0].title+'</h1>';
          if(resp[0].description !=''){
            jewel_lens_text_html += '<div class="content"><p>'+resp[0].description+'</p></div>';
          }
          $('.title_jewel_lens').html(jewel_lens_text_html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
      //getting the dc jewel lens tip text and its title
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'title_dc_jewel_lens':'title_dc_jewel_lens'},
        dataType: 'json',
        success:function(resp){
          var dc_jewel_lens_text_html = '<h1>'+resp[0].title+'</h1>';
          if(resp[0].description !=''){
            dc_jewel_lens_text_html += '<div class="content"><p>'+resp[0].description+'</p></div>';
          }
          $('.title_dc_jewel_lens').html(dc_jewel_lens_text_html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
       //getting the logo badge text and its title
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'title_logo_badge':'title_logo_badge'},
        dataType: 'json',
        success:function(resp){
          var logo_badge_text_html = '<h1>'+resp[0].title+'</h1>';
          if(resp[0].description !=''){
           logo_badge_text_html += '<div class="content"><p>'+resp[0].description+'</p></div>';
          }
          $('.title_logo_badge_div').html(logo_badge_text_html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
       //getting the thankyou text and its title
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'title_thankyou':'title_thankyou'},
        dataType: 'json',
        success:function(resp){
          var title_thankyou_text_html = '<h1>'+resp[0].title+'</h1>';
          if(resp[0].description !=''){
           title_thankyou_text_html += '<div class="content"><p>'+resp[0].description+'</p></div>';
          }
          $('.title_thankyou_div').html(title_thankyou_text_html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
      //getting the personal info text and its title
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'title_personal':'title_personal'},
        dataType: 'json',
        success:function(resp){
          var title_personal_text_html = '<h1>'+resp[0].title+'</h1>';
          if(resp[0].description !=''){
           title_personal_text_html += '<div class="content"><p>'+resp[0].description+'</p></div>';
          }
          $('.title_personalinfo_div').html(title_personal_text_html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
      //getting the comments_suggestions text and its title
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'title_comments_suggestion':'title_comments_suggestion'},
        dataType: 'json',
        success:function(resp){
          var title_comments_suggestion_text_html = '<h1>'+resp[0].title+'</h1>';
          if(resp[0].description !=''){
           title_comments_suggestion_text_html += '<div class="content"><p>'+resp[0].description+'</p></div>';
          }
          $('.title_comments_suggestion_div').html(title_comments_suggestion_text_html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
      });
      //getting the custom design text and its title
       $.ajax({
        type:'GET',
        url:'https://shopify.beetronicsfx.com/app/ajaxJson.php',
        data:{'title_custom_design':'title_custom_design'},
        dataType: 'json',
        success:function(resp){
          var title_custom_design_html = '<h1>'+resp[0].title+'</h1>';
          if(resp[0].description !=''){
           title_custom_design_html += '<div class="content"><p>'+resp[0].description+'</p></div>';
          }
          $('.title_custom_design_div').html(title_custom_design_html);
        },error:function(err,xhr){
        	console.log(xhr);
        }
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
         html +='<li onClick="addImages(this);"><a><img src="https://shopify.beetronicsfx.com/app/images/choose_effect/'+value.image+'" class="center-block"></a><p>'+value.effect_name+'</p></li>';
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
         pick_html +='<div class="item" onClick="pickColor(this);"><a><img src="https://shopify.beetronicsfx.com/app/images/picker_image/'+value.image+'" class="center-block"><p>'+value.color_name+'</p></a></div>';
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
        footswitch_color_html +='<div class="item" onclick="footswitchColorStorage(this);"><a><img src="https://shopify.beetronicsfx.com/app/images/footswitch_color/'+value.image+'" class="center-block"><p>'+value.footswitch_name+'</p></a></div>';
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
         knob_html +='<div class="item" onclick="knobStorage(this);"><a><img src="https://shopify.beetronicsfx.com/app/images/knobs/'+value.image+'" class="center-block"><p>'+value.knob_name+'</p></a></div>';
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
         footswitch_hardware_html +='<div class="item" onclick="footHardwareStoarge(this);"><a><img src="https://shopify.beetronicsfx.com/app/images/footswitch_hardware/'+value.image+'" class="center-block"><p>'+value.hardware_name+'</p></a></div>';
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
         toggle_switch_html +='<div class="item" onclick="toggleHardware(this);"><a><img src="https://shopify.beetronicsfx.com/app/images/toggle_switch_hardware/'+value.image+'" class="center-block"><p>'+value.toggle_switch_name+'</p></a></div>';
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
         toggle_switch_tip_html +='<div class="item" onclick="toggleTip(this);"><a><img src="https://shopify.beetronicsfx.com/app/images/toggle_switch_tip/'+value.image+'" class="center-block"><p>'+value.toggle_switch_tip+'</p></a></div>';
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
         jewel_lens_html +='<div class="item" onclick="jewelStorage(this);"><a><img src="https://shopify.beetronicsfx.com/app/images/jewel_lens/'+value.image+'" class="center-block"><p>'+value.jewel_lens+'</p></a></div>';
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
         dc_jewel_html +='<div class="item" onclick="dcJack(this);"><a><img src="https://shopify.beetronicsfx.com/app/images/dc_jack_color/'+value.image+'" class="center-block"><p>'+value.dc_jewel_lens+'</p></a></div>';
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
         logo_badge_html +='<div class="item" onclick="logoStorage(this);"><a><img src="https://shopify.beetronicsfx.com/app/images/logo_badge/'+value.image+'" class="center-block"><p>'+value.logo_badge+'</p></a></div>';
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
					<a class="active prviousTAb" href="#Step1" data-toggle="tab" title="Choose an Effect">
						<span>1</span>
                      	<p>Choose a Circuit</p>
					</a>
				</div>

				<div class="item"> 
					<a href="#Step2" data-toggle="tab" title="Pick a Color" class="prviousTAb">
						<span>2</span>
                      	<p>Pick a Color</p>
					</a>
				</div>

				<div class="item">
					<a href="#Step3" data-toggle="tab" title="Custom Design, Symbol, Logo or Pattern" class="prviousTAb">
						<span>3</span>
                      	<p>Custom design, symbol, logo or pattern</p>
					</a>
				</div>

				<div class="item">
					<a href="#Step4" data-toggle="tab" title="Knobs" class="prviousTAb">
						<span>4</span>
                      	<p>Knobs</p>
					</a>
				</div>

				<div class="item">
					<a href="#Step5" data-toggle="tab" title="Footswitch Color" class="prviousTAb">
						<span>5</span>
                      	<p>Footswitch Color</p>
					</a>
				</div>

				<div class="item">
					<a href="#Step6" data-toggle="tab" title="Footswitch Hardware" class="prviousTAb">
						<span>6</span>
                      	<p>Footswitch Hardware</p>
					</a>
				</div>

				<div class="item">
					<a href="#Step7" data-toggle="tab" title="Toggle switch Hardware" class="prviousTAb">
						<span>7</span>
                      	<p>Toggle switch Hardware</p>
					</a>
				</div>

				<div class="item">
					<a href="#Step8" data-toggle="tab" title="Toggle switch Tip" class="prviousTAb">
						<span>8</span>
                      	<p>Toggle switch Tip</p>
					</a>
				</div>

				<div class="item">
					<a href="#Step9" data-toggle="tab" title="Jewel Lens" class="prviousTAb">
						<span>9</span>
                      	<p>Jewel Lens</p>
					</a>
				</div>

				<div class="item">
					<a href="#Step10" data-toggle="tab" title="Dc power jack color" class="prviousTAb">
						<span>10</span>
                      	<p>DC power jack color</p>
					</a>
				</div>

				<div class="item">
					<a href="#Step11" data-toggle="tab" title="Logo Badge" class="prviousTAb">
						<span>11</span>
                      	<p>Logo Badge</p>
					</a>
				</div>

				<div class="item">
					<a href="#Step12" data-toggle="tab" title="Comments, Ideas or Suggestions" class="prviousTAb">
						<span>12</span>
                      	<p>Comments, ideas or suggestions</p>
					</a>
				</div>

				<div class="item">
					<a href="#Step13" data-toggle="tab" title="Personal Info" class="prviousTAb enquiryTAb">
						<span>13</span>
                      	<p>Personal Info</p>
					</a>
				</div>

				<div class="item">
					<a href="#Step14" data-toggle="tab" title="Thank You" class="prviousTAb thankyouTab">
						<span>14</span>
                      	<p>Thank You</p>
					</a>
				</div>
			</div>
		</div>
		<div class="tab-content">
			<div id="Step1" class=" tab-pane active in">
				<div class="container effect_div">
					<div class="row">
                      <div class="title_choose">
                      </div>
						<ul id="ulROW">
						</ul>
					</div>
				</div>
			</div>

			<div id="Step2" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
                      <div class="title_picker">
                      </div>
<!-- 						<h1>Pick a color</h1>
						<div class="content">
							<p>HERE YOU CAN HAVE AN IDEA OF THE COLOR POSSIBILITIES.</p>
							<p>we can do gradients, color over color, rustic finishes and many different combinations.</p>
							<p>If you have a design that require  multiple colors, or a  color thats not listed here, just let us know and we can make it happen.</p>
						</div> -->
						
						<div class="loop_slider owl-carousel owl-theme ROW_pick">
						</div>

						<div class="form-group col-md-12 col-sm-12 col-xs-12">
							<label class="col-md-8 col-sm-9 col-xs-12 pickr_clr_cmt_section"></label>
							<div class="col-md-4 col-sm-3 col-xs-12 color_picker">
								<input type="text" name="issue_name" id="issue_Id" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="Step3" class="tab-pane fade">
				<div class="container textarea">
					<div class="row">
                      <div class="title_custom_design_div">
                      </div>

						<div class="browse col-md-12 col-sm-12 col-xs-12">
							<div class="input-group">
								<input type="text" class="form-control image-preview-filename" disabled="disabled">
								<span class="input-group-btn">
									<div class="btn btn-default image-preview-input">
                                      <form enctype="multipart/form-data" method="post" id="customUploadFormId">
										<span class="image-preview-input-title">Upload</span>
										<input type="file" accept="image/png, image/jpeg, image/gif" id="customLogoId" name="input-file-preview"/>
                                      </form>
									</div>
								</span>
							</div>
							<div class="form-group">
								<textarea class="form-control" id="ideaComment"  placeholder="Describe your idea for the design, colors, placement and etc..."></textarea>
							</div>
						</div>
						
					</div>
				</div>
			</div>
          <script>
              $(document).ready(function(){
                /*$('#customLogoId').change(function(){
                  var file = this.files[0];
					var imagefile = file.type;
                  alert('asds',file);
                  console.log($('#customUploadFormId').serialize());
                  $.ajax({
                  type:'POST',
                  url:"https://shopify.beetronicsfx.com/app/image_section_insert.php",
                  data:$('#customUploadFormId').serialize(),
                    success:function(resp){
                    	console.log(resp);  
                    },error(xhr,err){
                    	console.log(err);
                    }
                  });
                });*/
                $('#customLogoId').change(function(){
                	$("#customUploadFormId").ajaxSubmit({
                      
                      url:"https://shopify.beetronicsfx.com/app/image_section_insert.php",
                      success:function(resp){
                    	//console.log(resp);  
                    },error(xhr,err){
                    	console.log(err);
                    }
                    });
                });
                
              });

          </script>
         

			<div id="Step4" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
                       <div class="title_knobs">
                      </div>
                      
<!-- 						<h1>Knobs</h1>
						<div class="content">
							<p>TWE ARE KNOB HOARDERS! SO WE TRY TO STOCK UP ON THE COOLEST AND RAREST KNOBS WE CAN.</p>
							<p>NOTE HOW MANY KNOBS YOUR DESIRED MODEL USES WHEN PICKING. WE’LL ALSO ADVISE YOU ON COOL COMBINATIONS. </p>
							<p>*KNOBS OPTIONS ARE FOR REFERENCE ONLY. KNOBS MAY BE SUBJECT TO AVAILABILITY. </p>
						</div> -->

						<div class="loop_slider owl-carousel owl-theme ROW_knob">
						</div>
					</div>
				</div>
			</div>

			<div id="Step5" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
                      <div class="title_footswitch_color">
                      </div>
<!-- 						<h1>Footswitch Color</h1>
						<div class="content">
							<p>*NOTE THAT GOLD SWITCH MAY HAVE NOT BE COMBINED WITH SOME OF THE FOOTSWITCH HARDWARE OPTIONS.</p>
						</div> -->

						<div class="loop_slider owl-carousel owl-theme ROW_footswitch_color">
						</div>
					</div>
				</div>
			</div>

			<div id="Step6" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
                    <div class="title_footswitch_hardware">
                      </div>
<!-- 						<h1>Footswitch Hardware</h1> -->

						<div class="loop_slider owl-carousel owl-theme ROW_footswitch_hardware">
						</div>
					</div>
				</div>
			</div>

			<div id="Step7" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
                      <div class="title_toggle_hardware">
                      </div>
<!-- 						<h1>Toggle switch Hardware</h1> -->

						<div class="loop_slider owl-carousel owl-theme ROW_toggle_switch">
						</div>
					</div>
				</div>
			</div>

			<div id="Step8" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
                      <div class="title_toggle_switch_tip">
                      </div>
						<!-- <h1>Toggle switch Tip</h1> -->

						<div class="loop_slider owl-carousel owl-theme ROW_toggle_switch_tip">
						</div>
					</div>
				</div>
			</div>

			<div id="Step9" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
                     <div class="title_jewel_lens">
                      </div>
<!-- 						<h1>Jewel Lens</h1> 

						<div class="content">
							<p>NOTE THAT CERTAIN LENSES COLORS WON’T WORK WELL WITH THE WHOCTAHELL AND OCTAHIVE SINCE THE LED COLOR CHANGE MIGHT NOT BE SO NOTICEABLE. WE’LL ALWAYS ADVISE YOU ON WHAT WE THINK MAY WORK BETTER.</p>
						</div> -->

						<div class="loop_slider owl-carousel owl-theme ROW_jewel_lens">
						</div>
					</div>
				</div>
			</div>

			<div id="Step10" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
                      <div class="title_dc_jewel_lens">
                      </div>
						<!--<h1>Dc power jack color</h1>-->

						<div class="loop_slider owl-carousel owl-theme ROW_dc_jewel">
						</div>
					</div>
				</div>
			</div>

			<div id="Step11" class="tab-pane fade">
				<div class="container slider">
					<div class="row">
                      <div class="title_logo_badge_div">
                      </div>
					<!-- 	<h1>Logo Badge</h1> -->

						<div class="loop_slider owl-carousel owl-theme ROW_logo_badge">
						</div>
					</div>
				</div>
			</div>

			<div id="Step12" class="tab-pane fade">
				<div class="container textarea">
					<div class="row">
                      <div class="title_comments_suggestion_div">
                      </div>
						<!--<h1>Comments, ideas or suggestions</h1> -->
						<div class="form-group">
							<textarea class="form-control" id="suggestId" placeholder="Let us know if you have any other ideas or suggestions..."></textarea>
						</div>
					</div>
				</div>
			</div>

			<div id="Step13" class="tab-pane fade">
				<div class="container custom_form">
          
					<div class="row">
                      <div class="title_personalinfo_div">
                      </div>
                     <div class="loader" style="display: none;"></div>
						<!--<h1>Personal Info</h1>-->
						<form id="inquiryFormId" method="POST">
							<div class="form-group">
								<input type="text" placeholder="Name" name="name" id="nameId" value='' class="form-control">
                              
                      			<span class="error_msg nameErr"></span> 
							</div>
							<div class="form-group">
								<input type="email" placeholder="Email address"  name="email" id="emailId" value='' class="form-control">
                              	
                              <span class="error_msg emailErr"></span>
                          </div>
							<div class="form-group">
								<input type="text" placeholder="Phone Number" name="mobile_number" value='' maxlength="12" id="mobile_numberId" class="form-control" onkeypress="return isNumber(event)">
                                <span class="error_msg mobileErr"></span>
                          </div>
							<div class="form-group">
								<input type="text" placeholder="Street Address" name="strAddress" id="strAddressId" value='' class="form-control">
 								<span class="error_msg strAddressErr"></span>
                          </div>
							<div class="form-group">
								<input type="text" placeholder="City" name="city" id="cityId" value='' class="form-control">
                         		<span class="error_msg cityErr"></span>
                          </div>
                          <!-- remove to remove start add class remove in form group -->
							<div class="form-group">
								<input type="text" placeholder="Zip Code" name="zipCode" id="zipCodeId" value='' class="form-control">
                                 
							<span class="error_msg ZipErr"></span>
                          </div>
							<div class="form-group">
								<input type="text" placeholder="Country" name="cntry" id="cntryId" value='' class="form-control">
                              	
   								<span class="error_msg countryErr"></span>
                          </div>
							<div class="form-group">
								<button type="button" class="btn yellow_btn" onclick="formSubmit();">Send Inquire!</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div id="Step14" class="tab-pane fade">
				<div class="container text_botm">
					<div class="row">
                      <div class="title_thankyou_div">
                      </div>
					<!--	<h1>Thank you for your inquire!</h1>
						<div class="content">
							<p>WE LOOK FORWARD TO MAKING YOU THE COOLEST CUSTOM PEDAL EVER!</p>
							<p>WE’LL SEND YOU A QUOTE IN 24 HOURS OR LESS. </p>
						</div> -->
						<h1>Bee Yourself!</h1>
					</div>
				</div>
			</div>
          
          	<div class="col-md-6 col-sm-6 col-xs-12 botm_btn">
				<a class="btn prev_tab">Previous</a>
				<a class="btn next_tab">Next</a>
			</div>
		</div>

	</div>  
</div>
<script>
  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
		$(document).ready(function() {
			$('#tab_slider').owlCarousel({
				items: 4,
				loop: false,
				autoplay:false,
				nav: true,
				dots: false,
               touchDrag  : false,
               mouseDrag      : false,
				responsive: {
					0: {
						items: 2
					},
					480: {
						items: 4
					},
					992: {
						items: 7
					},
					1200: {
						items: 14,
					}
				}
			});

		});
//   function validateEmail(sEmail) {
//   var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

//   if(!sEmail.match(reEmail)) {
//     console.log("Invalid email address");
// 	$('#emailId').addClass('error_err');
//     return false;
//   }
// 	$('#emailId').removeClass('error_err');
//   return true;

// }

  $(document).ready(function(){
     localStorage.removeItem('savedData');
     localStorage.removeItem('data_image');
     localStorage.removeItem('pick_text');
     localStorage.removeItem('pick_image');
     localStorage.removeItem('knob_text');
     localStorage.removeItem('knob_image');
     localStorage.removeItem('foothardware_text');
     localStorage.removeItem('foothardware_image');
     localStorage.removeItem('footswtichColor_text');
     localStorage.removeItem('footswtichColor_image');
     localStorage.removeItem('togglehardware_text');
     localStorage.removeItem('togglehardware_image');
     localStorage.removeItem('toggleTip_text');
     localStorage.removeItem('toggleTip_image');
     localStorage.removeItem('jewel_text');
     localStorage.removeItem('jewel_image');
     localStorage.removeItem('dc_text');
     localStorage.removeItem('dc_image');
     localStorage.removeItem('logo_text');
     localStorage.removeItem('logo_image');
     localStorage.removeItem('suggestion');
     localStorage.removeItem('IdeaCommentText');
     localStorage.removeItem('IssueComment');
     localStorage.removeItem('File');
//     $('.owl-item.active .item .prviousTAb').click(function(){
    	
//     });
    $('.owl-item.active .item .thankyouTab').click(function(){
      $('.owl-item.active .item .enquiryTAb').trigger('click');
    	return false;
    });
  //  $('.tab-pane.fade.active.in .text_botm .title_thankyou_div').hide();
    
    $('.owl-item.active .item .prviousTAb').click(function(){
      var checkTab = $(this).text().trim();
      checkTab = checkTab.replace(/[^0-9]/g,'');
    // console.log(checkTab+"active");
      if(checkTab == 14){
      	 $('.botm_btn').hide();
       // console.log("14");
      }
        
      if(checkTab != 1 && checkTab != 14)
      {
        $('.prev_tab').show();
        
      } 
      if(checkTab == 1){
         $('.botm_btn').show();
        $('.next_tab').show();
        $('.prev_tab').hide();
      }
       
      
    });
      $('.owl-item .item .prviousTAb').click(function(){
      var checkTab = $(this).text().trim();
        checkTab = checkTab.replace(/[^0-9]/g,'');
     //    console.log(checkTab+"inactive");
        
      if(checkTab == 13)
      {
        
        $('.prev_tab').show();
        $('.botm_btn').hide();
        var fileUploadVAlue = document.getElementById("customLogoId").value;
      if(fileUploadVAlue != ''&& fileUploadVAlue !='undefined'){
      	// localStorage.setItem('File',fileUploadVAlue);
      }
       
        localStorage.setItem('suggestion',document.getElementById("suggestId").value);
      } else if(checkTab != 1 && checkTab != 13 && checkTab != 14)
      {
        localStorage.setItem('IdeaCommentText',document.getElementById("ideaComment").value);
        localStorage.setItem('IssueComment',document.getElementById("issue_Id").value);
      	$('.prev_tab').show();
        $('.botm_btn').show();
      }else if(checkTab == 1){
      	$('.prev_tab').hide();
       
      }
    });
    
	$('.prev_tab').hide();
    $('.next_tab').click(function(){
      //getting tab12 textarea data here on click of next button.
      localStorage.setItem('suggestion',document.getElementById("suggestId").value);
      localStorage.setItem('IdeaCommentText',document.getElementById("ideaComment").value);
      localStorage.setItem('IssueComment',document.getElementById("issue_Id").value);
      var fileUploadVAlue = document.getElementById("customLogoId").value;
      if(fileUploadVAlue != ''&& fileUploadVAlue !='undefined'){
      	// localStorage.setItem('File',fileUploadVAlue);
      }
    
      $('.owl-item .prviousTAb').each(function(){
        if($(this).hasClass('active') == true) {
          	var curr_num = $(this).text().trim();
          curr_num = curr_num.replace(/[^0-9]/g,'');
         // console.log(curr_num+"next");
      
          if(curr_num == 12 ){
            $('.botm_btn').hide();
          }
          if(curr_num == 13){
          	$('.next_tab').hide();
          } if(curr_num == 1){
            $('.prev_tab').show();
          
          }
          
          $('.prev_tab').show();
          	if(curr_num >= 4) {
          		$('.owl-next').click(); 
            }
            if(curr_num != 14) {
        	$(this).removeClass('active');
          	$(this).parent().parent().next().find('.prviousTAb').addClass('active');
          	var content_id = $(this).parent().parent().next().find('.prviousTAb').attr('href');
          	$('.tab-content .tab-pane').removeClass('active in');
          $(content_id).addClass('active in');
            }
          return false;
        }
      });
    });
    
    $('.prev_tab').click(function(){
      $('.owl-item .prviousTAb').each(function(){
        if($(this).hasClass('active') == true) {
          	var curr_num = $(this).text().trim();
          curr_num = curr_num.replace(/[^0-9]/g,'');
          // console.log(curr_num+"prev");
          if(curr_num == 14){
            $('.next_tab').show();
          }
          if(curr_num == 2){
            $('.prev_tab').hide();
          }
          	if(curr_num >= 4) {
          		$('.owl-prev').click();
            }
          if(curr_num != 1) {
        	$(this).removeClass('active');
          	$(this).parent().parent().prev().find('.prviousTAb').addClass('active');
          	var content_id = $(this).parent().parent().prev().find('.prviousTAb').attr('href');
          	$('.tab-content .tab-pane').removeClass('active in');
          $(content_id).addClass('active in');
          }
          return false;
        }
      });
    });
  });
   function removeA(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax= arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}
  //choose a circuit add localstorage code
  function addImages_1(thisob)
{
	var imageSrc = '';
	var text_effect = '';
  	var saved_items = [];
  	var saved_images = [];
	if($(thisob).children('a').hasClass("border-yellow")){
		$(thisob).children('a').removeClass("border-yellow");
		imageSrc = $(thisob).children('a').children('img').attr('src');
		text_effect = $(thisob).children('p').text();
        saved_items = localStorage.getItem('savedData');
        saved_items = JSON.parse(saved_items);	
       // saved_items.pop($(thisob).children('p').text());
      	saved_items = removeA(saved_items, $(thisob).children('p').text());
     	saved_images = localStorage.getItem('data_image');
        saved_images = JSON.parse(saved_images);	
      	saved_images = removeA(saved_images,$(thisob).children('a').children('img').attr('src'));
       // saved_images.pop($(thisob).children('a').children('img').attr('src'));
      localStorage.setItem('savedData', JSON.stringify(saved_items));
      localStorage.setItem('data_image', JSON.stringify(saved_images));
  } else{
  	$(thisob).children('a').addClass("border-yellow");
    //for localStorage text 
    if(localStorage.getItem('savedData') == null) {
      saved_items.push($(thisob).children('p').text());
    } else {
    	saved_items = localStorage.getItem('savedData');
      	saved_items = JSON.parse(saved_items);	
        saved_items.push($(thisob).children('p').text());
    }
    //for image store in localstorage
    if(localStorage.getItem('data_image') == null) {
      saved_images.push($(thisob).children('a').children('img').attr('src'));
    } else {
    	saved_images = localStorage.getItem('data_image');
      	saved_images = JSON.parse(saved_images);	
        saved_images.push($(thisob).children('a').children('img').attr('src'));
    }
    localStorage.setItem('savedData', JSON.stringify(saved_items));
    localStorage.setItem('data_image', JSON.stringify(saved_images));
  }
}
  function addImages(thisob)
  {
    var imageSrc = [];
	var text_effect = [];
    if($(thisob).children('a').hasClass('border-yellow')){
    	console.log("hasclass");
      $("#ulROW a").removeClass('border-yellow');
      localStorage.removeItem('savedData');
      localStorage.removeItem('data_image');
    }else{
      	$("#ulROW a").removeClass('border-yellow');
    	$(thisob).children('a').addClass('border-yellow');
      	imageSrc = $(thisob).children('a').children('img').attr('src');
      	text_effect = $(thisob).children('p').text();
      localStorage.setItem('savedData',text_effect);
      localStorage.setItem('data_image',imageSrc);
    } 
  }
  //pick a color add localstorage code
  function pickColor(thisob)
  {
  	var imageSrc = '';
	var text_effect = '';
  	var saved_items = [];
  	var saved_images = [];
	if($(thisob).children('a').hasClass("border-yellow")){
		$(thisob).children('a').removeClass("border-yellow");
		imageSrc = $(thisob).children('a').children('img').attr('src');
		text_effect = $(thisob).children('a').children('p').text();
        saved_items = localStorage.getItem('pick_text');
        saved_items = JSON.parse(saved_items);	
        //saved_items.remove($(thisob).children('a').children('p').text());
      	saved_items = removeA(saved_items, $(thisob).children('a').children('p').text());
     	saved_images = localStorage.getItem('pick_image');
        saved_images = JSON.parse(saved_images);	
      	saved_images = removeA(saved_images,$(thisob).children('a').children('img').attr('src'));
       // saved_images.pop($(thisob).children('a').children('img').attr('src'));
      localStorage.setItem('pick_text', JSON.stringify(saved_items));
      localStorage.setItem('pick_image', JSON.stringify(saved_images));
  } else{
  	$(thisob).children('a').addClass("border-yellow");
    //for localStorage text 
    if(localStorage.getItem('pick_text') == null) {
      saved_items.push($(thisob).children('a').children('p').text());
    } else {
    	saved_items = localStorage.getItem('pick_text');
      	saved_items = JSON.parse(saved_items);	
        saved_items.push($(thisob).children('a').children('p').text());
    }
    //for image store in localstorage
    if(localStorage.getItem('pick_image') == null) {
      saved_images.push($(thisob).children('a').children('img').attr('src'));
    } else {
    	saved_images = localStorage.getItem('pick_image');
      	saved_images = JSON.parse(saved_images);	
        saved_images.push($(thisob).children('a').children('img').attr('src'));
    }
    localStorage.setItem('pick_text', JSON.stringify(saved_items));
    localStorage.setItem('pick_image', JSON.stringify(saved_images));
  }
  }
  
 
  //knob add storage code
  function knobStorage(thisob)
  {
   	 var imageSrc = '';
	var text_effect = '';
  	var saved_items = [];
  	var saved_images = [];
	if($(thisob).children('a').hasClass("border-yellow")){
		$(thisob).children('a').removeClass("border-yellow");
		imageSrc = $(thisob).children('a').children('img').attr('src');
		text_effect = $(thisob).children('a').children('p').text();
        saved_items = localStorage.getItem('knob_text');
        saved_items = JSON.parse(saved_items);	
        saved_items = removeA(saved_items, $(thisob).children('a').children('p').text());
     	saved_images = localStorage.getItem('knob_image');
        saved_images = JSON.parse(saved_images);	
        saved_images = removeA(saved_images,$(thisob).children('a').children('img').attr('src'));
      localStorage.setItem('knob_text', JSON.stringify(saved_items));
      localStorage.setItem('knob_image', JSON.stringify(saved_images));
  } else{
  	$(thisob).children('a').addClass("border-yellow");
    //for localStorage text 
    if(localStorage.getItem('knob_text') == null) {
      saved_items.push($(thisob).children('a').children('p').text());
    } else {
    	saved_items = localStorage.getItem('knob_text');
      	saved_items = JSON.parse(saved_items);	
        saved_items.push($(thisob).children('a').children('p').text());
    }
    //for image store in localstorage
    if(localStorage.getItem('knob_image') == null) {
      saved_images.push($(thisob).children('a').children('img').attr('src'));
    } else {
    	saved_images = localStorage.getItem('knob_image');
      	saved_images = JSON.parse(saved_images);	
        saved_images.push($(thisob).children('a').children('img').attr('src'));
    }
    localStorage.setItem('knob_text', JSON.stringify(saved_items));
    localStorage.setItem('knob_image', JSON.stringify(saved_images));
  }
  }
  //footswitch color storage code
  function footswitchColorStorage_old(thisob)
  { 
  	var saved_items = [];
  	var saved_images = [];
	if($(thisob).children('a').hasClass("border-yellow")){
		$(thisob).children('a').removeClass("border-yellow");
        saved_items = localStorage.getItem('footswtichColor_text');
        saved_items = JSON.parse(saved_items);	
        //saved_items.remove($(thisob).children('a').children('p').text());
      	saved_items = removeA(saved_items, $(thisob).children('a').children('p').text());
     	saved_images = localStorage.getItem('footswtichColor_image');
        saved_images = JSON.parse(saved_images);	
      	saved_images = removeA(saved_images,$(thisob).children('a').children('img').attr('src'));
       // saved_images.pop($(thisob).children('a').children('img').attr('src'));
      localStorage.setItem('footswtichColor_text', JSON.stringify(saved_items));
      localStorage.setItem('footswtichColor_image', JSON.stringify(saved_images));
  } else{
  	$(thisob).children('a').addClass("border-yellow");
    //for localStorage text 
    if(localStorage.getItem('footswtichColor_text') == null) {
      saved_items.push($(thisob).children('a').children('p').text());
    } else {
    	saved_items = localStorage.getItem('footswtichColor_text');
      	saved_items = JSON.parse(saved_items);	
        saved_items.push($(thisob).children('a').children('p').text());
    }
    //for image store in localstorage
    if(localStorage.getItem('footswtichColor_image') == null) {
      saved_images.push($(thisob).children('a').children('img').attr('src'));
    } else {
    	saved_images = localStorage.getItem('footswtichColor_image');
      	saved_images = JSON.parse(saved_images);	
        saved_images.push($(thisob).children('a').children('img').attr('src'));
    }
    localStorage.setItem('footswtichColor_text', JSON.stringify(saved_items));
    localStorage.setItem('footswtichColor_image', JSON.stringify(saved_images));
  }
  }
  function footswitchColorStorage(thisob)
  {
    var saved_items = [];
  	var saved_images = [];
    if($(thisob).children('a').hasClass('border-yellow')){
    	console.log("hasclass");
     $('.loop_slider.ROW_footswitch_color .item a').removeClass('border-yellow');
      localStorage.removeItem('footswtichColor_text');
      localStorage.removeItem('footswtichColor_image');
    }else{
      	$('.loop_slider.ROW_footswitch_color .item a').removeClass('border-yellow');
    	$(thisob).children('a').addClass('border-yellow');
      	saved_images = $(thisob).children('a').children('img').attr('src');
      	saved_items = $(thisob).children('a').children('p').text();
      localStorage.setItem('footswtichColor_text',saved_items);
      localStorage.setItem('footswtichColor_image',saved_images);
    } 
  }
  //footHardwareStoarge code 
  function footHardwareStoarge_old(thisob)
  {
    var saved_items = [];
  	var saved_images = [];
	if($(thisob).children('a').hasClass("border-yellow")){
		$(thisob).children('a').removeClass("border-yellow");
        saved_items = localStorage.getItem('foothardware_text');
        saved_items = JSON.parse(saved_items);	
        //saved_items.remove($(thisob).children('a').children('p').text());
      	saved_items = removeA(saved_items, $(thisob).children('a').children('p').text());
     	saved_images = localStorage.getItem('foothardware_image');
        saved_images = JSON.parse(saved_images);	
      	saved_images = removeA(saved_images,$(thisob).children('a').children('img').attr('src'));
       // saved_images.pop($(thisob).children('a').children('img').attr('src'));
      localStorage.setItem('foothardware_text', JSON.stringify(saved_items));
      localStorage.setItem('foothardware_image', JSON.stringify(saved_images));
  } else{
  	$(thisob).children('a').addClass("border-yellow");
    //for localStorage text 
    if(localStorage.getItem('foothardware_text') == null) {
      saved_items.push($(thisob).children('a').children('p').text());
    } else {
    	saved_items = localStorage.getItem('foothardware_text');
      	saved_items = JSON.parse(saved_items);	
        saved_items.push($(thisob).children('a').children('p').text());
    }
    //for image store in localstorage
    if(localStorage.getItem('foothardware_image') == null) {
      saved_images.push($(thisob).children('a').children('img').attr('src'));
    } else {
    	saved_images = localStorage.getItem('foothardware_image');
      	saved_images = JSON.parse(saved_images);	
        saved_images.push($(thisob).children('a').children('img').attr('src'));
    }
    localStorage.setItem('foothardware_text', JSON.stringify(saved_items));
    localStorage.setItem('foothardware_image', JSON.stringify(saved_images));
  }
  }
  
    function footHardwareStoarge(thisob)
  {
    var saved_items = [];
  	var saved_images = [];
    if($(thisob).children('a').hasClass('border-yellow')){
    	console.log("hasclass");
     $('.loop_slider.ROW_footswitch_hardware .item a').removeClass('border-yellow');
      localStorage.removeItem('foothardware_text');
      localStorage.removeItem('foothardware_image');
    }else{
      	$('.loop_slider.ROW_footswitch_hardware .item a').removeClass('border-yellow');
    	$(thisob).children('a').addClass('border-yellow');
      	saved_images = $(thisob).children('a').children('img').attr('src');
      	saved_items = $(thisob).children('a').children('p').text();
      localStorage.setItem('foothardware_text',saved_items);
      localStorage.setItem('foothardware_image',saved_images);
    } 
  }
  
  //toggleHardware storage code
  function toggleHardware_old(thisob)
  {
  	var saved_items = [];
  	var saved_images = [];
	if($(thisob).children('a').hasClass("border-yellow")){
		$(thisob).children('a').removeClass("border-yellow");
        saved_items = localStorage.getItem('togglehardware_text');
        saved_items = JSON.parse(saved_items);	
        //saved_items.remove($(thisob).children('a').children('p').text());
      	saved_items = removeA(saved_items, $(thisob).children('a').children('p').text());
     	saved_images = localStorage.getItem('togglehardware_image');
        saved_images = JSON.parse(saved_images);	
      	saved_images = removeA(saved_images,$(thisob).children('a').children('img').attr('src'));
       // saved_images.pop($(thisob).children('a').children('img').attr('src'));
      localStorage.setItem('togglehardware_text', JSON.stringify(saved_items));
      localStorage.setItem('togglehardware_image', JSON.stringify(saved_images));
  } else{
  	$(thisob).children('a').addClass("border-yellow");
    //for localStorage text 
    if(localStorage.getItem('togglehardware_text') == null) {
      saved_items.push($(thisob).children('a').children('p').text());
    } else {
    	saved_items = localStorage.getItem('togglehardware_text');
      	saved_items = JSON.parse(saved_items);	
        saved_items.push($(thisob).children('a').children('p').text());
    }
    //for image store in localstorage
    if(localStorage.getItem('togglehardware_image') == null) {
      saved_images.push($(thisob).children('a').children('img').attr('src'));
    } else {
    	saved_images = localStorage.getItem('togglehardware_image');
      	saved_images = JSON.parse(saved_images);	
        saved_images.push($(thisob).children('a').children('img').attr('src'));
    }
    localStorage.setItem('togglehardware_text', JSON.stringify(saved_items));
    localStorage.setItem('togglehardware_image', JSON.stringify(saved_images));
  }
  }
  
    function toggleHardware(thisob)
  {
    var saved_items = [];
  	var saved_images = [];
    if($(thisob).children('a').hasClass('border-yellow')){
    	console.log("hasclass");
     $('.loop_slider.ROW_toggle_switch .item a').removeClass('border-yellow');
      localStorage.removeItem('togglehardware_text');
      localStorage.removeItem('togglehardware_image');
    }else{
      	$('.loop_slider.ROW_toggle_switch .item a').removeClass('border-yellow');
    	$(thisob).children('a').addClass('border-yellow');
      	saved_images = $(thisob).children('a').children('img').attr('src');
      	saved_items = $(thisob).children('a').children('p').text();
      localStorage.setItem('togglehardware_text',saved_items);
      localStorage.setItem('togglehardware_image',saved_images);
    } 
  }
  
  //toggleTip storage code 
  function toggleTip_old(thisob)
  {
  	var saved_items = [];
  	var saved_images = [];
	if($(thisob).children('a').hasClass("border-yellow")){
		$(thisob).children('a').removeClass("border-yellow");
        saved_items = localStorage.getItem('toggleTip_text');
        saved_items = JSON.parse(saved_items);	
        //saved_items.remove($(thisob).children('a').children('p').text());
      	saved_items = removeA(saved_items, $(thisob).children('a').children('p').text());
     	saved_images = localStorage.getItem('toggleTip_image');
        saved_images = JSON.parse(saved_images);	
      	saved_images = removeA(saved_images,$(thisob).children('a').children('img').attr('src'));
       // saved_images.pop($(thisob).children('a').children('img').attr('src'));
      localStorage.setItem('toggleTip_text', JSON.stringify(saved_items));
      localStorage.setItem('toggleTip_image', JSON.stringify(saved_images));
  } else{
  	$(thisob).children('a').addClass("border-yellow");
    //for localStorage text 
    if(localStorage.getItem('toggleTip_text') == null) {
      saved_items.push($(thisob).children('a').children('p').text());
    } else {
    	saved_items = localStorage.getItem('toggleTip_text');
      	saved_items = JSON.parse(saved_items);	
        saved_items.push($(thisob).children('a').children('p').text());
    }
    //for image store in localstorage
    if(localStorage.getItem('toggleTip_image') == null) {
      saved_images.push($(thisob).children('a').children('img').attr('src'));
    } else {
    	saved_images = localStorage.getItem('toggleTip_image');
      	saved_images = JSON.parse(saved_images);	
        saved_images.push($(thisob).children('a').children('img').attr('src'));
    }
    localStorage.setItem('toggleTip_text', JSON.stringify(saved_items));
    localStorage.setItem('toggleTip_image', JSON.stringify(saved_images));
  }
  }
  
  function toggleTip(thisob)
  {
    var saved_items = [];
  	var saved_images = [];
    if($(thisob).children('a').hasClass('border-yellow')){
    	console.log("hasclass");
     $('.loop_slider.ROW_toggle_switch_tip .item a').removeClass('border-yellow');
      localStorage.removeItem('toggleTip_text');
      localStorage.removeItem('toggleTip_image');
    }else{
      	$('.loop_slider.ROW_toggle_switch_tip .item a').removeClass('border-yellow');
    	$(thisob).children('a').addClass('border-yellow');
      	saved_images = $(thisob).children('a').children('img').attr('src');
      	saved_items = $(thisob).children('a').children('p').text();
      localStorage.setItem('toggleTip_text',saved_items);
      localStorage.setItem('toggleTip_image',saved_images);
    } 
  }
  
  //jewelStorage code 
  function jewelStorage_old(thisob)
  {
	var saved_items = [];
  	var saved_images = [];
	if($(thisob).children('a').hasClass("border-yellow")){
		$(thisob).children('a').removeClass("border-yellow");
        saved_items = localStorage.getItem('jewel_text');
        saved_items = JSON.parse(saved_items);	
        //saved_items.remove($(thisob).children('a').children('p').text());
      	saved_items = removeA(saved_items, $(thisob).children('a').children('p').text());
     	saved_images = localStorage.getItem('jewel_image');
        saved_images = JSON.parse(saved_images);	
      	saved_images = removeA(saved_images,$(thisob).children('a').children('img').attr('src'));
       // saved_images.pop($(thisob).children('a').children('img').attr('src'));
      localStorage.setItem('jewel_text', JSON.stringify(saved_items));
      localStorage.setItem('jewel_image', JSON.stringify(saved_images));
  } else{
  	$(thisob).children('a').addClass("border-yellow");
    //for localStorage text 
    if(localStorage.getItem('jewel_text') == null) {
      saved_items.push($(thisob).children('a').children('p').text());
    } else {
    	saved_items = localStorage.getItem('jewel_text');
      	saved_items = JSON.parse(saved_items);	
        saved_items.push($(thisob).children('a').children('p').text());
    }
    //for image store in localstorage
    if(localStorage.getItem('jewel_image') == null) {
      saved_images.push($(thisob).children('a').children('img').attr('src'));
    } else {
    	saved_images = localStorage.getItem('jewel_image');
      	saved_images = JSON.parse(saved_images);	
        saved_images.push($(thisob).children('a').children('img').attr('src'));
    }
    localStorage.setItem('jewel_text', JSON.stringify(saved_items));
    localStorage.setItem('jewel_image', JSON.stringify(saved_images));
  }
  }
  function jewelStorage(thisob)
  {
    var saved_items = [];
  	var saved_images = [];
    if($(thisob).children('a').hasClass('border-yellow')){
    	console.log("hasclass");
     $('.loop_slider.ROW_jewel_lens .item a').removeClass('border-yellow');
      localStorage.removeItem('jewel_text');
      localStorage.removeItem('jewel_image');
    }else{
      	$('.loop_slider.ROW_jewel_lens .item a').removeClass('border-yellow');
    	$(thisob).children('a').addClass('border-yellow');
      	saved_images = $(thisob).children('a').children('img').attr('src');
      	saved_items = $(thisob).children('a').children('p').text();
      localStorage.setItem('jewel_text',saved_items);
      localStorage.setItem('jewel_image',saved_images);
    } 
  }
  //dcJack storage code
  function dcJack_old(thisob)
  {
  	var saved_items = [];
  	var saved_images = [];
	if($(thisob).children('a').hasClass("border-yellow")){
		$(thisob).children('a').removeClass("border-yellow");
        saved_items = localStorage.getItem('dc_text');
        saved_items = JSON.parse(saved_items);	
        //saved_items.remove($(thisob).children('a').children('p').text());
      	saved_items = removeA(saved_items, $(thisob).children('a').children('p').text());
     	saved_images = localStorage.getItem('dc_image');
        saved_images = JSON.parse(saved_images);	
      	saved_images = removeA(saved_images,$(thisob).children('a').children('img').attr('src'));
       // saved_images.pop($(thisob).children('a').children('img').attr('src'));
      localStorage.setItem('dc_text', JSON.stringify(saved_items));
      localStorage.setItem('dc_image', JSON.stringify(saved_images));
  } else{
  	$(thisob).children('a').addClass("border-yellow");
    //for localStorage text 
    if(localStorage.getItem('dc_text') == null) {
      saved_items.push($(thisob).children('a').children('p').text());
    } else {
    	saved_items = localStorage.getItem('dc_text');
      	saved_items = JSON.parse(saved_items);	
        saved_items.push($(thisob).children('a').children('p').text());
    }
    //for image store in localstorage
    if(localStorage.getItem('dc_image') == null) {
      saved_images.push($(thisob).children('a').children('img').attr('src'));
    } else {
    	saved_images = localStorage.getItem('dc_image');
      	saved_images = JSON.parse(saved_images);	
        saved_images.push($(thisob).children('a').children('img').attr('src'));
    }
    localStorage.setItem('dc_text', JSON.stringify(saved_items));
    localStorage.setItem('dc_image', JSON.stringify(saved_images));
  }
  }
  function dcJack(thisob)
  {
    var saved_items = [];
  	var saved_images = [];
    if($(thisob).children('a').hasClass('border-yellow')){
    	console.log("hasclass");
     $('.loop_slider.ROW_dc_jewel .item a').removeClass('border-yellow');
      localStorage.removeItem('dc_text');
      localStorage.removeItem('dc_image');
    }else{
      	$('.loop_slider.ROW_dc_jewel .item a').removeClass('border-yellow');
    	$(thisob).children('a').addClass('border-yellow');
      	saved_images = $(thisob).children('a').children('img').attr('src');
      	saved_items = $(thisob).children('a').children('p').text();
      localStorage.setItem('dc_text',saved_items);
      localStorage.setItem('dc_image',saved_images);
    } 
  }
  //logoStorage code
  function logoStorage_old(thisob)
  {
    var saved_items = [];
  	var saved_images = [];
	if($(thisob).children('a').hasClass("border-yellow")){
		$(thisob).children('a').removeClass("border-yellow");
        saved_items = localStorage.getItem('logo_text');
        saved_items = JSON.parse(saved_items);	
        //saved_items.remove($(thisob).children('a').children('p').text());
      	saved_items = removeA(saved_items, $(thisob).children('a').children('p').text());
     	saved_images = localStorage.getItem('logo_image');
        saved_images = JSON.parse(saved_images);	
      	saved_images = removeA(saved_images,$(thisob).children('a').children('img').attr('src'));
       // saved_images.pop($(thisob).children('a').children('img').attr('src'));
      localStorage.setItem('logo_text', JSON.stringify(saved_items));
      localStorage.setItem('logo_image', JSON.stringify(saved_images));
  } else{
  	$(thisob).children('a').addClass("border-yellow");
    //for localStorage text 
    if(localStorage.getItem('logo_text') == null) {
      saved_items.push($(thisob).children('a').children('p').text());
    } else {
    	saved_items = localStorage.getItem('logo_text');
      	saved_items = JSON.parse(saved_items);	
        saved_items.push($(thisob).children('a').children('p').text());
    }
    //for image store in localstorage
    if(localStorage.getItem('logo_image') == null) {
      saved_images.push($(thisob).children('a').children('img').attr('src'));
    } else {
    	saved_images = localStorage.getItem('logo_image');
      	saved_images = JSON.parse(saved_images);	
        saved_images.push($(thisob).children('a').children('img').attr('src'));
    }
    localStorage.setItem('logo_text', JSON.stringify(saved_items));
    localStorage.setItem('logo_image', JSON.stringify(saved_images));
  }
  }

function logoStorage(thisob)
  {
    var saved_items = [];
  	var saved_images = [];
    if($(thisob).children('a').hasClass('border-yellow')){
    	console.log("hasclass");
     $('.loop_slider.ROW_logo_badge .item a').removeClass('border-yellow');
      localStorage.removeItem('logo_text');
      localStorage.removeItem('logo_image');
    }else{
      	$('.loop_slider.ROW_logo_badge .item a').removeClass('border-yellow');
    	$(thisob).children('a').addClass('border-yellow');
      	saved_images = $(thisob).children('a').children('img').attr('src');
      	saved_items = $(thisob).children('a').children('p').text();
      localStorage.setItem('logo_text',saved_items);
      localStorage.setItem('logo_image',saved_images);
    } 
  }
  
  function formSubmit()
  {
     var erno = 0;
    if($.trim( $('#nameId').val()) == "") {
      	$('.nameErr').html('Name cannot be empty');
      	erno = erno+1;
      } else {
      	$('.nameErr').html('');
      }
      if($.trim($('#mobile_numberId').val()) == "") {
      	$('.mobileErr').html('Mobile cannot be empty');
      	erno = erno+1;
      } else {
      	$('.mobileErr').html('');
      }
      if($.trim($('#emailId').val()) == "") {
      	$('.emailErr').html('Email cannot be empty');
      	erno = erno+1;
      } else if($.trim($('#emailId').val()) != ""){
         var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
     	if (reg.test($.trim($('#emailId').val()))){  
         }
         else{
            $('.emailErr').html('Please enter the valid email');
         erno = erno+1;
         }
      }
    else {
      	$('.emailErr').html('');
      }
 
      if($.trim($('#strAddressId').val()) == "") {
      	$('.strAddressErr').html('Street address cannot be empty');
      	erno = erno+1;
      } else {
      	$('.strAddressErr').html('');
      }
      if($.trim($('#cityId').val()) == "") {
      	$('.cityErr').html('City canot be empty');
      	erno = erno+1;
      } else {
      	$('.cityErr').html('');
      }
      if($.trim($('#zipCodeId').val()) == "") {
      	$('.ZipErr').html('Zip code conot be empty');
      	erno = erno+1;
      } else {
      	$('.ZipErr').html('');
      }
      if($.trim($('#cntryId').val()) == "") {
      	$('.countryErr').html('Country canot be empty');
      	erno = erno+1;
      } else {
      	$('.countryErr').html('');
      }
     console.log(erno);
   if(parseInt(erno)>0) {
   	return false;
   } else {
     
     chooseTxt =localStorage.getItem("savedData");
     chooseImage = localStorage.getItem("data_image");
     pickTxt = JSON.parse(localStorage.getItem("pick_text"));
     pickImage= JSON.parse(localStorage.getItem("pick_image"));
     ideaTxt = localStorage.getItem("IssueComment");
     knobTxt = JSON.parse(localStorage.getItem("knob_text"));
     knobImage = JSON.parse(localStorage.getItem("knob_image"));
     footcolorTxt = localStorage.getItem("footswtichColor_text");
     footcolorImage = localStorage.getItem("footswtichColor_image");
     hardwareTxt = localStorage.getItem("foothardware_text");
     hardwareImage = localStorage.getItem("foothardware_image");
     TogglehardwareTxt = localStorage.getItem("togglehardware_text");
     TogglehardwareImage = localStorage.getItem("togglehardware_image");
     ToggleTxt = localStorage.getItem("toggleTip_text");
     ToggleImage = localStorage.getItem("toggleTip_image");
     jewlTxt = localStorage.getItem("jewel_text");
     jewlImage =localStorage.getItem("jewel_image");
     dcTxt = localStorage.getItem("dc_text");
     dcImage = localStorage.getItem("dc_image");
     logoTxt = localStorage.getItem("logo_text");
     logoImage = localStorage.getItem("logo_image");
     suggestion = localStorage.getItem("suggestion");
     uploadFile = localStorage.getItem("File");
     issueCmt =  localStorage.getItem('IdeaCommentText');
      $.ajax({
      type:'POST',
      url:'https://shopify.beetronicsfx.com/app/InquiryForm.php',
        data:$('#inquiryFormId').serialize() +"&chooseTxt="+chooseTxt+"&chooseImage="+chooseImage+"&pickTxt="+pickTxt+"&pickImage="+pickImage+"&ideaTxt="+ideaTxt+"&knobTxt="+knobTxt+"&knobImage="+knobImage+"&footcolorTxt="+footcolorTxt+"&footcolorImage="+footcolorImage+"&hardwareTxt="+hardwareTxt+"&hardwareImage="+hardwareImage+"&TogglehardwareTxt="+TogglehardwareTxt+"&TogglehardwareImage="+TogglehardwareImage+"&ToggleTxt="+ToggleTxt+
        "&ToggleImage="+ToggleImage+"&jewlTxt="+jewlTxt+"&jewlImage="+jewlImage+"&dcImage="+dcImage+"&dcTxt="+dcTxt+"&logoTxt="+logoTxt+"&logoImage="+logoImage+"&suggestion="+suggestion+"&uploadFile="+uploadFile+"&issueCmt="+issueCmt,
       beforeSend: function() {
              $(".loader").show();
           },
        success:function(resp){      
           $(".loader").hide();
          var obj = resp.split('</style>');
          console.log($.trim(obj[1]));
          var data_result = $.trim(obj[1]);
        if(data_result == 'Success'){
         
        //  $('.owl-next').trigger('click');
          $('.owl-item.active .item .prviousTAb.thankyouTab').trigger('click');
          console.log($('.owl-item.active .item .prviousTAb.thankyouTab').trigger('click'),'yes');
          $('.tab-pane .fade .container.text_botm .row .title_thankyou_div').show();
          console.log( $('.tab-pane .fade .container.text_botm .row .title_thankyou_div').show());
          $('.custom_form').hide();
          $('.next_tab').trigger('click');
          
           setInterval(function() {
            window.location.reload();	
          }, 6000);
        }
      },error:function(xhr,err){
        console.log(xhr);
      }
    });
   	return true;
   }
  }
  $('.form-control').keyup(function() {
     			var htnl = $(this).siblings('.error_msg').html();
     			if($(this).siblings('.error_msg').html() != ''){
     				$(this).siblings('.error_msg').html('');
     			}
    });
   
  
</script>

