<?php $__env->startSection('content'); ?>
<div>

<section class="search_main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="search_pack">
						<form method="get" action="<?php echo e(route('site.home')); ?>">
						<?php echo e(csrf_field()); ?>

							<input type="hidden" name="hidden_key" value="<?php echo e(request()->query('hidden_key')); ?>">
							<input type="hidden" name="hidden_value" value="<?php echo e(request()->query('hidden_value')); ?>">
							
							<div class="col-md-8 col-lg-6">
							<div class="input-group">
							<input name="search" type="text" class="form-control" value="<?php echo e(request()->query('search')); ?>" placeholder="Enter your search option" aria-describedby="inputGroupPrepend2" required>
							<div class="input-group-prepend">
								<button type="submit" class="btn searchbtn">Search</button>
							</div>
							</div>
								
								<div class="row">									
									<div class="col">
										<a class="basicbtn" id="serchformchlu" href="#">Advanced Search</a>
									</div>
									
									<div class="col">
										<a class="basicbtn" id="clearSearch" href="#">Clear Search</a>
									</div>
									
								</div>
								
							</div>
						</form>
						
						<div class="row" id="serchformktm">
							<div class="col-md-4 col-lg-3">
								<div class="select_box">
									<select name="sources" id="sources1" class="custom-select sources" placeholder="Curriculum Level">
										
										<option value="1">CL 1</option>
										<option value="2">CL 2</option>
										<option value="3">CL 3</option>
										<option value="4">CL 4</option>
										<option value="5">CL 5</option>
										<option value="6">CL 6</option>
										<option value="7">CL 7</option>
										<option value="8">CL 8</option>
										
								  </select>
								</div>
							</div>
							
							
							
							<div class="col-md-4 col-lg-3">
								<div class="select_box">
									<select name="sources" id="sources4" class="custom-select sources" placeholder="Resource type">
										<option value="1">All</option>
										<option value="2">Text</option>
										<option value="3">Unit</option>
										<option value="4">Lesson</option>
										<option value="5">Activity</option>
										<option value="6">Assessment</option>
										<option value="7">Audio File</option>
								  </select>
								</div>
							</div>
							
							
							<div class="col-md-4 col-lg-3">
								<div class="select_box">
									<select name="sources" id="sources3" class="custom-select sources" placeholder="Text Type">
										<option value="1">Description</option>
										<option value="2">Dialogue</option>
										<option value="3">Discussion</option>
										<option value="4">Explanation</option>
										<option value="5">Expository</option>
										<option value="6">Information Report</option>
										<option value="7">Narrative</option>
										<option value="8">Persuasive</option>
										<option value="9">Procedure</option>
										<option value="10">Recount</option>
										<option value="11">Response</option>
										<option value="12">Review</option>
								  </select>
								</div>
							</div>
							
							<div class="col-md-4 col-lg-3">
								<div class="select_box">
									<select name="sources" id="sources5" class="custom-select sources" placeholder="Reading Level">
										<option value="1">RL 1</option>
										<option value="2">RL 2</option>
										<option value="3">RL 3</option>
										<option value="4">RL 4</option>
										<option value="5">RL 5</option>
										<option value="6">RL 6</option>
										<option value="7">RL 7</option>
										<option value="8">RL 8</option>
										<option value="9">RL 9</option>
										<option value="10">RL 10</option>
										<option value="11">RL 11</option>
										<option value="12">RL 12</option>
										<option value="13">RL 13</option>
										<option value="14">RL 14</option>
										<option value="15">RL 15</option>
										<option value="16">RL 16</option>
										<option value="17">RL 17</option>
										<option value="18">RL 18</option>
										<option value="19">RL 19</option>
										<option value="20">RL 20</option>
								  </select>
								</div>
							</div>
							
							
							
							<div class="col-md-4 col-lg-3">
								<div class="select_box">
									<select name="sources" id="sources6" class="custom-select sources" placeholder="Learning Area">
										<option value="1">Arts</option>
										<option value="2">Health and Physical Education</option>
										<option value="3">Mathematics</option>
										<option value="4">Social Studies</option>
										<option value="5">Science</option>
										<option value="6">Technology</option>
								  </select>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
	</section>

<?php if(count($displayBooks) > 0): ?>
<p style="text-align: center;font-size: 16px;font-weight: bold;margin-top: 15px;">Showing <span id="recordNumber"><?php echo e(count($displayBooks)); ?></span> Records

<?php echo $__env->make('frontend.page.result', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
<?php endif; ?>


</div>

<?php if(count($displayBooks) >= 2): ?>

<?php endif; ?>

<style>

.btn-selected {
    background-color: #397e01 !important;
    color : #fff !important;
}

.goog-logo-link{ display:none; }
.goog-te-combo, #google_translate_element {
    background-color: #397e01;
    border: #8dda92 solid 1px;
    padding: 10px 35px 10px 15px;
    border-radius: 50px;
    color: #ffffff;
    font-size: 18px;
    width: 100%;
}
.goog-te-banner { display : none; }
.goog-te-gadget-simple{
    background-color: transparent !important;
    border-left: none !important;
    border-top: none !important;
    border-bottom: none !important;
    border-right: none !important;
    color:#fff !important;
}
.goog-te-gadget-simple .goog-te-menu-value {
color: #ffffff;
    font-size: 18px;
}
</style>


<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>

<script>

$('.readbtn').on('click', function(){
console.log("Test");
$(this).siblings('.divReadmore').show();
	
});

$("#serchformktm").hide();


$("#serchformchlu").on('click', function(){
	if($('#serchformktm').is(":visible")){
		$('#serchformktm').hide();
	}
	else{
		$('#serchformktm').show();
	}
});


$(".custom-select").each(function() {

    console.log("Test");
    var classes = $(this).attr("class"),
    id      = $(this).attr("id"),
    name    = $(this).attr("name");
    var template =  '<div class="' + classes + '">';
    template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
    template += '<div class="custom-options">';
    $(this).find("option").each(function() {
    	template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
  	});
    template += '</div></div>';
    
    $(this).wrap('<div class="custom-select-wrapper"></div>');
    $(this).hide();
    $(this).after(template);
});

$(".custom-option:first-of-type").hover(function() {
	$(this).parents(".custom-options").addClass("option-hover");
	}, function() {
	$(this).parents(".custom-options").removeClass("option-hover");
});

$(".custom-select-trigger").on("click", function() {
	$('html').one('click',function() {
	$(".custom-select").removeClass("opened");
});

$(this).parents(".custom-select").toggleClass("opened");
	event.stopPropagation();
});

$(".custom-option").on("click", function() {
	$(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
	$(this).parents(".custom-options").find(".custom-option").removeClass("selection");
	$(this).addClass("selection");
	$(this).parents(".custom-select").removeClass("opened");
	$(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());

	var placeholder = $(this).parents(".custom-select-wrapper").find("select").attr('placeholder');
	var value = $(this).text();

	$('input[type="hidden"][name="hidden_key"]').val(placeholder);
	$('input[type="hidden"][name="hidden_value"]').val(value);
	
	console.log(placeholder);
	console.log(value);
});


$('#serchformktm').find('button').on('click', function(){

	$('#serchformktm').find('button').removeClass('btn-selected');
	
	var buttonText = $(this).html(); 
	var input = '';
	if(buttonText == "Topic") input = 'topic';
	if(buttonText == "Author") input = 'author';
	if(buttonText == "Hapū / Village") input = 'hap_village';
	if(buttonText == "Iwi / Tribe") input = 'iwi_tribe';
	if(buttonText == "Title") input = 'title';
	if(buttonText == "Motu / Island") input = 'waka_canoe';
	if(buttonText == "Person") input = 'author';
	
	$('input[type="hidden"][name="hidden_key"]').val(input);

	$(this).addClass('btn-selected');
});

$("#sources6").on("change", function(){
	console.log("afasdfdsf");
});	


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
    }
});


$('.more_view').on('click', function(e){
	e.preventDefault();
	var href = $(this).attr('href');

	var params = parseInt(getUrlParameter('page', href));
	
	var pageNumber = (params+1);
	var showing = (parseInt($('#recordNumber').html())+2);

	newHref = '<?php echo e(route('site.home')); ?>?page='+pageNumber;
		
	$.ajax({
        type : 'get',
        url: href,
        success : function(data)
        {
        	 $('#grid').append(data.html);
            console.log(data);

			$('#recordNumber').html(showing);
			$('.more_view').attr('href', newHref);

			$('html, body').animate({
		        scrollTop: $(".more_view").offset().top
		    }, 2000);
        },
        error: function(data){

        },
    })  
	
	console.log("Test");
});


function getUrlParameter(name, href) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(href);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};


$('#clearSearch').on('click', function(){
		
	$('input[type="hidden"][name="hidden_key"]').val('');
	$('input[type="hidden"][name="hidden_value"]').val('');
	$('input[type="text"][name="search"]').val('');
	
	if (typeof (history.pushState) != "undefined") {
        var obj = { Page: 'Search', Url: '<?php echo e(route('site.home')); ?>' };
        history.pushState(obj, obj.Page, obj.Url);
    }
	location.reload();
    /*
	$('#sources1').val('Curriculum Level');
    $('.book_one').remove();
    $('#recordNumber').parent('p').remove();
    */
});

</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('frontend.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>