<script>
	function decSendRequest(formId, data)
	{

	}

	function hideDashboard()
	{
		$('.dashboard-element').each(function( index )
		{
		  $(this).hide();
		});
	}

	$(document).ready(function()
	{
		$('#ob-fa-form, #login-form, #reg-form').jqMgVal('addFormFieldsValidations');

		$('[data-toggle="lightbox"]').click(function()
		{
			event.preventDefault();
 			$(this).ekkoLightbox();
		});

		$('#dash-login').click(function()
		{
			hideDashboard();

			$('#dash-login-container').show('fade');
		});

		$('#dash-registro').click(function()
		{
			hideDashboard();

			$('#dash-registro-container').show('fade');
		});

		// $('#ob-fa-btn').click(function()
		// {
		// 	var data = $('#ob-fa-form').formToObject('ob-fa-');
		//
		// 	if(!$('#ob-fa-form').jqMgVal('isFormValid'))
		// 	{
		// 		return;
		// 	}
		//
		// 	$.ajax(
		// 	{
		// 		type: 'POST',
		// 		data: JSON.stringify(data),
		// 		dataType : 'json',
		// 		url: $('#ob-fa-form').attr('action'),
		// 		error: function (jqXHR, textStatus, errorThrown)
		// 		{
		// 			handleServerExceptions(jqXHR, 'ob-fa-form');
		// 		},
		// 		beforeSend:function()
		// 		{
		// 			$('#app-loader').removeClass('hidden-xs-up');
		// 			disabledAll();
		// 		},
		// 		success:function(json)
		// 		{
		// 			$('#ob-fa-form').showAlertAsFirstChild('alert-success', 'Ha sido suscrito, gracias por su interés.', 10000);
		// 			$('#ob-fa-form').jqMgVal('clearForm');
		// 			$('#app-loader').addClass('hidden-xs-up');
		// 			enableAll();
		// 		}
		// 	});
		// });

		$('#login-btn').click(function()
		{
			var data = $('#login-form').formToObject('ob-fa-');

			if(!$('#login-form').jqMgVal('isFormValid'))
			{
				return;
			}

			return;

			$.ajax(
			{
				type: 'POST',
				data: JSON.stringify(data),
				dataType : 'json',
				url: $('#ob-fa-form').attr('action'),
				error: function (jqXHR, textStatus, errorThrown)
				{
					handleServerExceptions(jqXHR, 'ob-fa-form');
				},
				beforeSend:function()
				{
					$('#app-loader').removeClass('hidden-xs-up');
					disabledAll();
				},
				success:function(json)
				{
					$('#ob-fa-form').showAlertAsFirstChild('alert-success', 'Ha sido suscrito, gracias por su interés.', 10000);
					$('#ob-fa-form').jqMgVal('clearForm');
					$('#app-loader').addClass('hidden-xs-up');
					enableAll();
				}
			});
		});

		$('#reg-btn-register').click(function()
		{
			if(!$('#reg-form').jqMgVal('isFormValid'))
			{
				return;
			}

			return;

			if(!$('#is-attending').is(":checked") && !$('#is-speaker').is(":checked") && !$('#is-volunteer').is(":checked") && !$('#is-organizer').is(":checked"))
			{
				$('#registration-form').showAlertAsFirstChild('alert-info', 'Debes seleccionar al menos una de las opciones de participación disponible', 10000);
				$('#participation-row').removeClass('alert-primary');
				$('#participation-row').addClass('alert-danger');
				return;
			}

			$('#participation-row').removeClass('alert-danger');
			$('#participation-row').addClass('alert-primary');
			$('#registration-form').jqMgVal('clearContextualClasses');

			return;

			$.ajax(
			{
				type: 'POST',
				data: JSON.stringify($('#registration-form').formToObject()),
				dataType : 'json',
				url: $('#registration-form').attr('action'),
				error: function (jqXHR, textStatus, errorThrown)
				{
					handleServerExceptions(jqXHR, 'ob-fa-form');
				},
				beforeSend:function()
				{
					$('#app-loader').removeClass('hidden-xs-up');
					disabledAll();
				},
				success:function(json)
				{
					if(json.success)
					{
						$('#registration-form').showAlertAsFirstChild('alert-success', 'Tu registro se completó exitosamente, te esperamos en el evento!', 10000);
						$('#registration-form').jqMgVal('clearContextualClasses');
					}

					if(json.validationFailed)
	        {
	          $('#up-user-form').showServerErrorsByField(json.fieldValidationMessages, 'up-');
	        }

					$('#app-loader').addClass('hidden-xs-up');
					enableAll();
				}
			});
		});


		// if ((window.location.href).split("action=")[1] == "DecimaERP-Cloud")
		// {
		// 		$('#dec-intro-op-modal').modal();
		// }
		// else if ((window.location.href).split("action=")[1] == "DecimaERP-WebSite")
		// {
		// 		$('#dec-intro-ws-modal').modal();
		// }
		// else if ((window.location.href).split("action=")[1] == "DecimaERP-Academic")
		// {
		// 		$('#dec-intro-ac-modal').modal();
		// }
		// else if ((window.location.href).split("action=")[1] == "DecimaERP-Customized")
		// {
		// 		$('#dec-intro-pd-modal').modal();
		// }
		// else if ((window.location.href).split("action=")[1] == "DecimaERP-Support")
		// {
		// 		$('#dec-intro-ps-modal').modal();
		// }
		// else
		// {
		// 	 // do nothing ...
		// }

	});
</script>
