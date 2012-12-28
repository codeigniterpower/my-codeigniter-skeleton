$(function(){

	var save_and_close = false;

	//	Salva as informações e retorna a listagem inicial
	$('#save-and-go-back-button').click(function(){
		save_and_close = true;

		$('#crudForm').trigger('submit');
	});

	//	Submete o formulário para inserir os dados no BD
	$('#crudForm').submit(function(){
		$(this).ajaxSubmit({
			url: validation_url,
			dataType: 'json',
			cache: 'false',
			beforeSend: function(){
				$("#FormLoading").show();
			},
			success: function(data){
				$("#FormLoading").hide();
				if(data.success)
				{
					$('#crudForm').ajaxSubmit({
						dataType: 'text',
						cache: 'false',
						beforeSend: function(){
							$("#FormLoading").show();
						},
						success: function(result){

							$("#FormLoading").fadeOut("slow");
							data = $.parseJSON( result );
							if(data.success)
							{
								if(save_and_close)
								{
									window.location = data.success_list_url;
									return true;
								}

								success_message(data.success_message);
							}
							else
							{
								error_message(message_update_error);
							}
						},
						error: function(){
							error_message( message_update_error );
						}
					});
				}
				else
				{
					$('.field_error').each(function(){
						$(this).removeClass('field_error');
					});
					$('#report-error').slideUp('fast');
					$('#report-error').html(data.error_message);
					$.each(data.error_fields, function(index,value){
						$('input[name='+index+']').addClass('field_error');
					});

					$('#report-error').slideDown('normal');
					$('#report-success').slideUp('fast').html('');

				}
			},
			error: function(){
				alert( message_update_error );
				$("#FormLoading").hide();

			}
		});
		return false;
	});
});

//	Retornar para a tabela de listagem de dados inicial
function goToList()
{
	if( confirm( message_alert_edit_form ) )
	{
		window.location = list_url;
	}

	return false;
}