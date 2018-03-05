$(function(){

	var fx = {
		'initModal':function(){
			if($('.modal-window').length==0){
				$('<div>').attr('id', 'overlay').fadeIn(2000).appendTo('body');
				return $('<div>').addClass('modal-window').appendTo('body');
			}else{
				return $('.modal-window');
			}
		}	
	}

	$('.menutop a').mouseover(function(){		
		var title = $(this).attr('data-title');
		var url = $(this).attr('dta-url');
		$('.header h1').text(title);
		$('div .header').css('background-image',url);
	});
	
	$('.link').bind('click', function(){
		id=$(this).attr('data_id');
		modal = fx.initModal();
		$('<a>').attr('href','#').addClass('modal-close-btn').html('Close &times;').click(function(e){
			e.preventDefault();
			modal.remove();
			$('#overlay').fadeOut(200,function(){
				$(this).remove();
			});
		}).appendTo(modal);
		$.ajax ({
			url:'ajax.php',
			type:'post',
			data:'id='+id,
			success:function(data){
				modal.append(data);
			},
			error:function(msg){
				modal.append(msg);
			}
		});
	});
});