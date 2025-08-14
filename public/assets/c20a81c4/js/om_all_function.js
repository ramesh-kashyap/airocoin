// JavaScript Document
jQuery(document).ready(function(e) {
	var base_url = $('#base_url').val();
	jQuery( ".data-table td span:nth-child(3n - 1)" ).click(function(e) {	
		$('.popup').addClass('code');
		$('.popup').css('display','flex').css('align-items','flex-start').css('overflow','hidden auto').css('height','auto');
	var userNameReal = jQuery(this).parent().text().trim();
	var userNameFinal = userNameReal.split(/[  ]+/);
	// jQuery("#userDataModal").modal('show');
	// $('#userDataModal').modal('show');
	jQuery("#userDataModal").addClass("show");
	jQuery("#userDataModal").removeAttr("aria-hidden");
	jQuery('#userData').html('<span class="load-gif"><img style="width: 100%;" src="../assets/c20a81c4/img/load.gif">&nbsp;System calculating reports</span>');
    var username = jQuery(this).text();
    console.log(username);
    $.ajax({
     url: "UsrBinaryReport",
     method: 'POST',
     data: {username: username.trim(), "_token": $('#csrf-token')[0].content,},
     dataType: 'json',
     success: function(response){ 
//   console.log(response);
	 var leftDetail = response.left;
	 var rightDetail = response.right; 
	 var leftUser = (leftDetail.left_total_user === null) ? 0 : leftDetail.left_total_user;
	 var leftBusiness = (leftDetail.left_total_business === null) ? 0 : leftDetail.left_total_business;
	 var todayLeftBusiness = (leftDetail.left_todays_business === null) ? 0 : leftDetail.left_todays_business;
	 var RightUser = (rightDetail.right_total_user === null) ? 0 : rightDetail.right_total_user;
	 var RightBusiness = (rightDetail.right_total_business === null) ? 0 : rightDetail.right_total_business;
	 var todayRightBusiness = (rightDetail.right_todays_business === null) ? 0 : rightDetail.right_todays_business;
	 
	 console.log(response.left);
	 console.log(response.right);	 
    //  jQuery("#userDataModal").modal('show');
	 jQuery('#userDataModal #userName').text(userNameFinal[0]);
     jQuery('#userData').html('<table><tr><td><span>Right Team :</span> <br/> <i class="fa fa-user-secret" aria-hidden="true"></i>'+  RightUser +'</td><td><span>Right Business :</span> <br/> &#36; '+RightBusiness+'</td><td><span>My Package :</span> <br/> &#36; '+todayRightBusiness+'</td></tr><tr><td><span>Left Team :</span> <br/> <i class="fa fa-user-secret" aria-hidden="true"></i>'+leftUser +'</td><td><span>Left Business :</span> <br/> &#36; </i>'+leftBusiness+'</td><td><span>Join Date :</span> <br/> '+todayLeftBusiness+'</td></tr></table>');
     
	 //userName
	 //userData
     }});

});

jQuery( ".popup__close" ).click(function(e) {	
	$('.popup').removeClass('code');
	$('.popup').css('display','none').css('align-items','center').css('overflow','hidden');

});

    console.log('WELCOME');
});