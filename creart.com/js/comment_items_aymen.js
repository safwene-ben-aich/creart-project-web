// JavaScript Document

  $(document).ready(function(){
$('#hide_comment_zone').click(function() 
{  
	$('#comment_zone').hide('blind');	
  	$('#hide_comment_zone').hide();
 	$('#show_comment_zone').show();
 
	
	} );
 
$('#show_comment_zone').click(function()
{
		$('#comment_zone').show('blind');	
	$('#show_comment_zone').hide();
	$('#hide_comment_zone').show();
	
	});
	
	

		
	
	
	
	 
	  
	  $('#hide_related_item').click(function()
{
		$('#related_work').hide('clip');	
	    $('#hide_related_item').hide();
	    $('#show_related_item').show();
	
	});
	
	$('#show_related_item').click(function()
{
		$('#related_work').show('clip');	
		$('#show_related_item').hide();
	    $('#hide_related_item').show();
	});
	
		  });