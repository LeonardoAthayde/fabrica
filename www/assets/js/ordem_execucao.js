$(document).ready(function(){
	
});
function SelectedListGroup(){
	$('.pnlNewGrade .list-group-item').click(function(){
		var chkNode = $(this).find('input:checkbox');
		if($(chkNode).is(':checked')){
			$(chkNode).parents('.list-group-item').removeClass('active');
			$(chkNode).prop('checked', false).uniform(); 
		} else {
			$(chkNode).parents('.list-group-item').addClass('active');
			$(chkNode).prop('checked', true).uniform(); 
		}
	});	
}