<?php
header("Access-Control-Allow-Origin: *"); 
include 'include/header.php'; ?>

<div class="">
  
  <ul class="nav nav-pills nav-stacked col-md-2 left_sidebar" id="pushkar_menu">
    <li class="active"><a data-toggle="pill" href="#home">Choose Effect</a></li>
    <li><a data-toggle="pill" href="#menu1">Pick Color</a></li>
    <li><a data-toggle="pill" href="#menu2">Knobs</a></li>
    <li><a data-toggle="pill" href="#menu3">Footswitch Color</a></li>
    <li><a data-toggle="pill" href="#menu4">Footswitch Hardware</a></li>
    <li><a data-toggle="pill" href="#menu5">Toggle Switch Hardware</a></li>
    <li><a data-toggle="pill" href="#menu6">Toggle Switch Tip</a></li>
    <li><a data-toggle="pill" href="#menu7">Jewel Lens</a></li>
    <li><a data-toggle="pill" href="#menu8">DC Power Jack Color</a></li>
    <li><a data-toggle="pill" href="#menu9">Logo Badge</a></li>
    <li><a data-toggle="pill" href="#menu10">Other Sections</a></li>
    <li><a data-toggle="pill" href="#menu11">Email Setting</a></li>
  </ul>

	<div class="ajaxloader" style="display: none;"></div>

  <div class="tab-content col-md-10">
    <div id="home" class="tab-pane fade in active">
      <?php include_once 'tab1.php'; ?>
    </div>

    <div id="menu1" class="tab-pane fade">
      <?php include_once 'tab2.php'; ?>
    </div>

    <div id="menu2" class="tab-pane fade">
      <?php include_once 'tab3.php'; ?>
    </div>

    <div id="menu3" class="tab-pane fade">
      <?php include_once 'tab4.php'; ?>
    </div>

    <div id="menu4" class="tab-pane fade">
      <?php include_once 'tab5.php'; ?>
    </div>

    <div id="menu5" class="tab-pane fade">
      <?php include_once 'tab6.php'; ?>
    </div>

    <div id="menu6" class="tab-pane fade">
      <?php include_once 'tab7.php'; ?>
    </div>

    <div id="menu7" class="tab-pane fade">
      <?php include_once 'tab8.php'; ?>
    </div>

    <div id="menu8" class="tab-pane fade">
      <?php include_once 'tab9.php'; ?>
    </div>

    <div id="menu9" class="tab-pane fade">
      <?php include_once 'tab10.php'; ?>
    </div>

    <div id="menu10" class="tab-pane fade">
      <?php include_once 'tab11.php'; ?>
    </div>

    <div id="menu11" class="tab-pane fade">
      <?php include_once 'tab12.php'; ?>
    </div>

  </div>

</div>
<script type="text/javascript">
  $(document).ready(function(){
    var selectedTab = localStorage.getItem('selectTab');
    if(selectedTab){
      var items = $('ul li a');
      $.each(items,function(index){
      $('ul li a').parent().removeClass('active');
       $(this).parent().addClass('active');
       $('ul li a[data-toggle="pill"][href="'+selectedTab+'"]').click();     
      });
     localStorage.removeItem('selectTab');
    }else{
    }
   
  });
</script>

<?php include 'include/footer.php' ?>
