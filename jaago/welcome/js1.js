var sponsors_limit=3;
var curr_sponsor=1;
var flash_limit=5;
var curr_flash=1;
function init() {
	temp=0;
	while (document.getElementById('main_menu').getElementsByTagName('a')[temp]) {
		document.getElementById('main_menu').getElementsByTagName('a')[temp].setAttribute('onmouseover','menu_hover(this.id,'+temp+')');
		document.getElementById('main_menu').getElementsByTagName('a')[temp].setAttribute('onmouseout','menu_out(this.id)');
		document.getElementById('main_menu').getElementsByTagName('a')[temp].setAttribute('onclick','menu_clicked(this.id)');
		temp++;
	}
	window.setTimeout("init_sponsors()",2000);	
	window.setTimeout("init_flash()",5000);	
}
function menu_hover(m,x) {
	$('#'+m).animate({
		left:'20px'
	},500 );
}
function menu_out(m) {
	$('#'+m).animate({
		left:'0px'
	},300 );
}
function restore_homwpage() {
	$('#arrow').fadeOut('fast');
	$('#content_frame').fadeOut('fast');
	$('#main').animate ({ left:'0px' }, 
						500, function () {
						  	$('#left_frame').fadeIn(5000);
							$('#right_frame').fadeIn(5000);
						});
	
}
function menu_clicked(id) {
	if (id=="") {
		restore_homwpage();
		return;
	}
	$('#left_frame').fadeOut('fast');
	$('#right_frame').fadeOut('fast',
							  function() {
								y=$('#'+id).offset().top;
								y=y-25;
								$('#arrow').animate ({
									 top: y+'px'
								}, 1000);
								$('#main').animate ({ left:'-385px' }, 
													500, function () {
														$('#content_frame').fadeIn('slow');
														$('#arrow').fadeIn('slow');
													});
							  });
}

function init_tabs()
{
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});
}
function new_space()
{
	var div = document.getElementById('college_1');
	div.innerHTML='';
	var field = document.createElement('input');
	field.setAttribute('type','text');
	field.setAttribute('name','college');
	field.setAttribute('id','college');
	field.setAttribute('size',29);
	div.appendChild(field);
}
function init_sponsors() {
	curr_sponsor=curr_sponsor+1;
	if (curr_sponsor==10)
		curr_sponsor=1;
	left_pos=-200*(curr_sponsor-1);
	$('#sponsors').animate({
		left:left_pos+'px'
	},700 );
	window.setTimeout("init_sponsors()",3000);
}
function init_flash() {
	curr_flash=curr_flash+1;
	if (curr_flash==6)
		curr_flash=1;
	$('#current_flash').fadeOut('slow',
								function() {
									document.getElementById('current_flash').src="images/flash/fla"+curr_flash+".jpg";
									$('#current_flash').fadeIn('slow');
								});
	window.setTimeout("init_flash()",5000);
}