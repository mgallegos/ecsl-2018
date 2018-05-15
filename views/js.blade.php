<script>
	@if(isset($cmsLoggedUser))
		var loggedUser = {!! json_encode($cmsLoggedUser) !!};
	@else
		var loggedUser = {};
	@endif

	var dashPreviousEcsl = [
		{'label':'Nicaragua 2009', 'value':'ECSL2009'},
		{'label':'Costa Rica 2010', 'value':'ECSL2010'},
		{'label':'El Salvador 2011', 'value':'ECSL2011'},
		{'label':'Guatemala 2012', 'value':'ECSL2012'},
		{'label':'Belize 2013', 'value':'ECSL2013'},
		{'label':'Panamá 2014', 'value':'ECSL2014'},
		{'label':'Honduras 2015', 'value':'ECSL2015'},
		{'label':'Nicaragua 2016', 'value':'ECSL2016'},
		{'label':'Costa Rica 2017', 'value':'ECSL2017'}
	];

	function customGender(gender)
	{
		if(gender == 'Deseo especificarlo')
		{
			$('#reg-custom-gender').val('');
			$('#reg-custom-gender').attr('data-mg-required', '');
			$('#reg-custom-gender').removeAttr('disabled');
		}
		else
		{
			$('#reg-custom-gender').val('');
			$('#reg-custom-gender').attr('disabled', 'disabled');
			$('#reg-custom-gender').removeAttr('data-mg-required');
		}
		if(gender == 'Prefiero no decirlo')
		{
			if($('#is-gender-visible').is(":checked"))
			{
				$('#is-gender-visible').click();
			}
		}
		else
		{
			if(!$('#is-gender-visible').is(":checked"))
			{
				$('#is-gender-visible').click();
			}
		}

	}

	function decSendRequest(formId, data)
	{

	}

	function hideDashboard()
	{
		disabledAll();

		$('.dashboard-elements').children().each(function( index )
		{
		  $(this).hide();
		});

		$('.dashboard-list-group').children().each(function( index )
		{
		  $(this).attr('disabled', 'disabled');
		  $(this).removeClass('active');
		});

		setTimeout(function()
		{
			enableAll();

			$('.dashboard-list-group').children().each(function( index )
			{
			  if(empty($(this).attr('data-guest-user')))
				{
					$(this).removeAttr('disabled');
				}
			});
		}, 500);
	}

	$(document).ready(function()
	{
		$('#ob-fa-form, #login-form, #reg-form, #pay-form, #pon-form, #trans-from-form, #trans-to-form').jqMgVal('addFormFieldsValidations');

		$(window).bind('resize', function()
		{
			$('#BookGrid0').setGridWidth($('.dashboard-elements').width());
			$('#BookGrid1').setGridWidth($('.dashboard-elements').width());
			//$('#lgp-community-support-group').attr('width', $('.tab-content').width());
		});

		@if (!Agent::isMobile())

		$('#reg-gender').on('autocompleteselect', function( event, ui )
		{
			customGender(ui.item.label);
		});

		@else

		$('#reg-gender').change(function()
		{
			customGender($(this).val());
		});

		@endif

		$('[data-toggle="lightbox"]').click(function()
		{
			event.preventDefault();
 			$(this).ekkoLightbox();
		});

		$('#cms-logout').click(function()
		{
			$.ajax(
			{
				type: 'POST',
				url: $('#app-url').val() + '/cms/dashboard/logout',
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
					window.location.replace($('#app-url').val() + '/cms/inicio');
				}
			});
		});

		$('#dash-login').click(function()
		{
			if($(this).hasClass('active') || $(this).hasAttr('disabled'))
			{
				return;
			}

			hideDashboard();

			$(this).addClass('active');

			$('#dash-login-container').show('fade');
		});

		$('#dash-registro').click(function()
		{
			if($(this).hasClass('active') || $(this).hasAttr('disabled'))
			{
				return;
			}

			hideDashboard();

			$(this).addClass('active');

			$('#dash-registro-container').show('fade');
		});

		$('#dash-pago').click(function()
		{
			if($(this).hasClass('active') || $(this).hasAttr('disabled'))
			{
				return;
			}

			hideDashboard();

			$(this).addClass('active');

			$('#dash-pago-container').show('fade');
		});

		$('.card-payment-deck').find('.card').each(function()
		{
			if(!$(this).hasClass('card-files'))
			{
				$(this).click(function()
				{
					$('.card-payment-deck').find('.card').each(function()
					{
						$(this).removeClass('bg-success');
					});

					$(this).addClass('bg-success');
					$('#pay-participation-type').val($(this).attr('data-type'));
					$('#pay-op-amount').val($(this).attr('data-amount'));
					$('#pay-op-description').val($(this).attr('data-description'));
					$('#pay-amount-label').val($.fmatter.NumberFormat($(this).attr('data-amount'), $.fn.jqMgVal.defaults.validators.money.formatter));
				});
			}
		});

		$('#online-payment-form').click(function()
		{
			$('#pay-btn-pay').show();
			$('#pay-btn-send, #pay-bank-transfer').hide();
		});

		$('#transfer-payment-form').click(function()
		{
			if($(this).hasClass('active') || $(this).hasAttr('disabled'))
			{
				return;
			}

			$('#pay-btn-send, #pay-bank-transfer').show();
			$('#pay-btn-pay').hide();
		});

		$('#pay-btn-pay').click(function()
		{
			if(!$('#pay-form').jqMgVal('isFormValid'))
			{
				return;
			}

			$('#pay-op-form').submit();
		});

		$('#dash-transporte-from').click(function()
		{
			if($(this).hasClass('active') || $(this).hasAttr('disabled'))
			{
				return;
			}

			hideDashboard();

			$(this).addClass('active');

			$('#dash-transporte-from-container').show('fade');
		});

		$('#dash-transporte-to').click(function()
		{
			if($(this).hasClass('active') || $(this).hasAttr('disabled'))
			{
				return;
			}

			hideDashboard();

			$(this).addClass('active');

			$('#dash-transporte-to-container').show('fade');
		});

		$('#dash-ponencias').click(function()
		{
			if($(this).hasClass('active') || $(this).hasAttr('disabled'))
			{
				return;
			}

			hideDashboard();

			$(this).addClass('active');

			$('#dash-ponencias-container').show('fade');

			setTimeout(function()
			{
				$('#pon-grid').setGridWidth($('.dashboard-elements').width());
			}, 100);
		});


		$('#trans-to-date').change(function()
		{
			if($(this).val() == '2018-07-14')
			{
				$('#trans-to-origin').val('Centro Loyola');
			}
			else if($(this).val() == '2018-07-15')
			{
				$('#trans-to-origin').val('Playa El Amatal');
			}

			$('#trans-to-origin').effect('highlight', 2000);
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
			$('#login-form-alert').remove();

			if(!$('#login-form').jqMgVal('isFormValid'))
			{
				return;
			}

			$.ajax(
			{
				type: 'POST',
				data: JSON.stringify($('#login-form').formToObject('login-')),
				dataType : 'json',
				url: $('#login-form').attr('action'),
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
					if(json.message != 'success')
					{
						$('#login-form').showAlertAsFirstChild('alert-info',json.message, 7000);
						$('#app-loader').addClass('hidden-xs-up');
						enableAll();
					}
					else
					{
						window.location.replace($('#app-url').val() + '/cms/dashboard');
					}
				}
			});
		});

		$('#reg-btn-register').click(function()
		{
			var url = $('#reg-form').attr('action'), action = 'new'

			if(!$('#reg-form').jqMgVal('isFormValid'))
			{
				return;
			}

			$('.decima-erp-tooltip').tooltip('hide');

			if($('#reg-user-id').isEmpty())
			{
				url = url + '/create';
			}
			else
			{
				url = url + '/update';
				action = 'edit';
			}

			$.ajax(
			{
				type: 'POST',
				data: JSON.stringify($('#reg-form').formToObject('reg-')),
				dataType : 'json',
				url: url,
				error: function (jqXHR, textStatus, errorThrown)
				{
					handleServerExceptions(jqXHR, 'reg-form');
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
						if(action == 'edit')
						{
							$('#reg-form').showAlertAfterElement('alert-success alert-custom', json.success, 6000);
							$('#reg-form').jqMgVal('clearContextualClasses');
						}
						else
						{
							$('#reg-form').showAlertAsFirstChild('alert-success', 'El registro se realizó exitosamente, no olvide que debe realizar el pago para confirmar su participación. <br> <center><a href="#" class="alert-link" onclick="$(\'#dash-login\').click();">Haga clic aquí para iniciar sesión</a></center>', 40000);
							$('#reg-form').jqMgVal('clearForm');
						}
					}
					else if(json.info)
					{
						$('#reg-form').showAlertAsFirstChild('alert-info', json.info, 12000);
					}
					else if(json.validationFailed)
	        {
	          $('#reg-form').showServerErrorsByField(json.fieldValidationMessages, 'reg-');
	        }

					$('#app-loader').addClass('hidden-xs-up');
					enableAll();
				}
			});
		});

		setTimeout(function ()
		{
			// $('#reg-previous-ecsl').tokenfield({beautify:false}); // Permite ingresar cualquier cosa

			$('#reg-previous-ecsl').tokenfield(
			{
				autocomplete:
				{
					source: dashPreviousEcsl,
					delay: 100,
					focus: function( event, ui ) {return false;}
				},
				showAutocompleteOnFocus: true,
				beautify:false
			});

			$('#reg-previous-ecsl').on('tokenfield:createtoken', function (event)
			{
				return validateToken(event, dashPreviousEcsl);
			});

			if(!empty(loggedUser))
			{
				populateFormFields(loggedUser, 'reg-');
			}
		}, 500);


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
