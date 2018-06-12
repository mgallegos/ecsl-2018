<script>
	@if(isset($cmsLoggedUser))
		var loggedUser = {!! json_encode($cmsLoggedUser) !!};
	@else
		var loggedUser = {};
	@endif

	@if(isset($payment))
		var payment = {!! json_encode($payment) !!};
	@else
		var payment = {};
	@endif

	@if(isset($arrivingTransportationRequest))
		var arrivingTransportationRequest = {!! json_encode($arrivingTransportationRequest) !!};
	@else
		var arrivingTransportationRequest = {};
	@endif

	@if(isset($leavingTransportationRequest))
		var leavingTransportationRequest = {!! json_encode($leavingTransportationRequest) !!};
	@else
		var leavingTransportationRequest = {};
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

	function changeIdLabel(country)
	{
		if(country.toLowerCase() == 'EL Salvador'.toLowerCase())
		{
			$('#reg-passport-number-label').html('DUI');
		}
		else
		{
			$('#reg-passport-number-label').html('Pasaporte');
		}
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

	function updateTransportationRequest(prefix)
	{
		$.ajax(
		{
			type: 'POST',
			data: JSON.stringify($('#' + prefix + 'form').formToObject(prefix)),
			dataType : 'json',
			url: $('#reg-form').attr('action') + '/update-transportation-request',
			error: function (jqXHR, textStatus, errorThrown)
			{
				handleServerExceptions(jqXHR, prefix + 'form');
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
					$('#' + prefix + 'form').showAlertAsFirstChild('alert-success', 'Su solicitud se envió exitosamente, se le notificará vía correo electrónica cuando se le asigne un transporte y persona responsable.', 10000);
					$('#' + prefix + 'enviar').html('Actualizar solicitud');
					$('#' + prefix + 'form').jqMgVal('clearContextualClasses');
				}
				else if(json.info)
				{
					$('#' + prefix + 'form').showAlertAsFirstChild('alert-info', json.info, 12000);
				}
				else if(json.validationFailed)
				{
					$('#' + prefix + 'form').showServerErrorsByField(json.fieldValidationMessages, prefix);
				}

				$('#app-loader').addClass('hidden-xs-up');
				enableAll();
			}
		});
	}

	function ponOnSelectRowEvent()
	{
		var rowData = $('#pon-grid').getRowData($('#pon-grid').jqGrid('getGridParam', 'selrow'));

		$('#back-to-top').click();

		populateFormFields(rowData);

		$('#pon-btn-save').html('Guardar');

		if(empty(rowData.pon_is_approved))
		{
			$('#pon-is-approved').val('En revisión');
		}
		else
		{
			$('#pon-is-approved').val('Aprobada');
		}

		$('#pon-btn-group-2').enableButtonGroup();
	}

	$(document).ready(function()
	{
		$('#ob-fa-form, #login-form, #pass-form, #reg-form, #pay-form, #pon-form, #trans-from-form, #trans-to-form').jqMgVal('addFormFieldsValidations');

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

		@if (!Agent::isMobile())

		$('#reg-country').on('autocompleteselect', function( event, ui )
		{
			changeIdLabel(ui.item.label);
		});

		@else

		$('#reg-country').change(function()
		{
			changeIdLabel($(this).val());
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

		$('#dash-pass').click(function()
		{
			if($(this).hasClass('active') || $(this).hasAttr('disabled'))
			{
				return;
			}

			hideDashboard();

			$(this).addClass('active');

			$('#dash-pass-container').show('fade');
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

			if($('#reg-country').val().toLowerCase() == 'Costa Rica'.toLowerCase())
			{
				$('#pay-bank-transfer-cr-payment-form-row').show();
				$('#pay-bank-transfer-slsv-payment-form-row').hide();
			}
			else
			{
				$('#pay-bank-transfer-slsv-payment-form-row').show();
				$('#pay-bank-transfer-cr-payment-form-row').hide();
			}

			$('#dash-pago-container').show('fade');
		});

		$('#dash-carta').click(function()
		{
			if($(this).hasClass('active') || $(this).hasAttr('disabled'))
			{
				return;
			}

			$('#dash-form').submit();
		});

		$('.card-payment-deck').find('.card').each(function()
		{
			if(!$(this).hasClass('card-files'))
			{
				$(this).click(function()
				{
					var commissionAmount = '', type = $(this).attr('data-type'), remark = $(this).attr('data-description');

					console.log(type);

					@if(isset($payment['status']) && $payment['status'] == 'X')
            return;
        	@endif

					$('.card-payment-deck').find('.card').each(function()
					{
						$(this).removeClass('bg-success');
					});

					$(this).addClass('bg-success');

					if($('#pay-online-payment-form').is(":checked"))
					{
						commissionAmount = parseFloat($(this).attr('data-payment-commission-amount'));
					}
					else
					{
						commissionAmount = 0;
					}

					$('#pay-op-payment-type-id').val($(this).attr('data-payment-type-id'));
					$('#pay-op-type').val(type);
					$('#pay-op-description').val(remark);

					$('#pay-op-payment-type-amount').val($(this).attr('data-amount'));
					$('#pay-type-amount-label').val($.fmatter.NumberFormat($(this).attr('data-amount'), $.fn.jqMgVal.defaults.validators.money.formatter));

					$('#pay-op-payment-commission-amount').val($(this).attr('data-payment-commission-amount'));
					$('#pay-commission-amount-label').val($.fmatter.NumberFormat(commissionAmount, $.fn.jqMgVal.defaults.validators.money.formatter));

					$('#pay-op-amount').val(parseFloat($(this).attr('data-amount')) + commissionAmount);
					$('#pay-amount-label').val($.fmatter.NumberFormat(parseFloat($(this).attr('data-amount')) + commissionAmount, $.fn.jqMgVal.defaults.validators.money.formatter));
					$('#pay-amount-cr-label').val($.fmatter.NumberFormat(parseFloat($(this).attr('data-amount-cr')), $.fn.jqMgVal.defaults.validators.money.formatter));

					$.ajax(
					{
						type: 'POST',
						data: JSON.stringify({'_token':$('#app-token').val(), 'type':type, 'remark':remark, 'amount': $('#pay-op-amount').val()}),
						dataType : 'json',
						url: $('#reg-form').attr('action') + '/payment-type',
						error: function (jqXHR, textStatus, errorThrown)
						{
							handleServerExceptions(jqXHR, prefix + 'form');
						},
						beforeSend:function()
						{
							// $('#app-loader').removeClass('hidden-xs-up');
							// disabledAll();
						},
						success:function(json)
						{
							console.log(json);
							// $('#app-loader').addClass('hidden-xs-up');
							// enableAll();
						}
					});
				});
			}
		});

		$('#pay-online-payment-form').click(function()
		{
			if($(this).hasAttr('disabled'))
			{
				return;
			}

			$('.card-payment-deck').find('.card').each(function()
			{
				if($(this).hasClass('bg-success'))
				{
					$(this).click();
				}
			});

			$('#pay-op-payment-form-type').val($(this).attr('data-type'));

			$('#pay-btn-pay').show();
			// $('#pay-payment-amount-row, #pay-payment-commission-row').show();
			$('#pay-bank-sv-information, #pay-amount-cr-label-row, #pay-bank-cr-information, #pay-bank-files').hide();
		});

		$('#pay-bank-transfer-slsv-payment-form').click(function()
		{
			if($(this).hasAttr('disabled'))
			{
				return;
			}

			getElementFiles('pay-', {{ isset($cmsLoggedUser['payment_id'])?$cmsLoggedUser['payment_id']:'0'}}, [], '/cms/dashboard');

			$('.card-payment-deck').find('.card').each(function()
			{
				if($(this).hasClass('bg-success'))
				{
					$(this).click();
				}
			});

			$('#pay-op-payment-form-type').val($(this).attr('data-type'));

			$('#pay-bank-sv-information, #pay-bank-files').show();
			// $('#pay-payment-amount-row, #pay-payment-commission-row, #pay-bank-cr-information').hide();
			$('#pay-bank-cr-information, #pay-amount-cr-label-row').hide();
			$('#pay-btn-pay').hide();
		});

		$('#pay-bank-transfer-cr-payment-form').click(function()
		{
			if($(this).hasAttr('disabled'))
			{
				return;
			}

			getElementFiles('pay-', {{ isset($cmsLoggedUser['payment_id'])?$cmsLoggedUser['payment_id']:'0'}}, [], '/cms/dashboard');

			$('.card-payment-deck').find('.card').each(function()
			{
				if($(this).hasClass('bg-success'))
				{
					$(this).click();
				}
			});

			$('#pay-op-payment-form-type').val($(this).attr('data-type'));

			$('#pay-bank-cr-information, #pay-amount-cr-label-row, #pay-bank-files').show();
			// $('#pay-payment-amount-row, #pay-payment-commission-row, #pay-bank-sv-information').hide();
			$('#pay-bank-sv-information').hide();
			$('#pay-btn-pay').hide();
		});

		$('#pay-btn-pay').click(function()
		{
			if(!$('#pay-form').jqMgVal('isFormValid'))
			{
				return;
			}

			if(parseFloat($('#pay-amount-label').val()) == 0)
			{
				$('#pay-form').showAlertAsFirstChild('alert-info', 'Seleccione una opción de pago.', 7000);

				return;
			}

			$('#pay-op-form').submit();
		});

		$('#pay-generate-invoice').click(function()
		{
			$('#pay-inv-form').submit();
		});

		$('#pay-btn-file-upload').click(function()
		{
			openUploader('pay-', {{ isset($cmsLoggedUser['payment_id'])?$cmsLoggedUser['payment_id']:'0'}}, 'Comprobantes de pago/{{ !empty($cmsLoggedUserName)?$cmsLoggedUserName:'0'}}', [], '', '', [], 1, 1);
		});

		$('#pay-file-uploader-modal').on('hidden.bs.modal', function (e)
		{
		  dataFiles = $.parseJSON($("#pay-file-uploader-modal").attr('data-files'));

			if(dataFiles.length > 0)
			{
				getElementFiles('pay-', {{ isset($cmsLoggedUser['payment_id'])?$cmsLoggedUser['payment_id']:'0'}}, [], '/cms/dashboard');
			}
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

		$('#login-password').onEnter( function()
		{
			$('#login-btn').click();
	  });

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
					handleServerExceptions(jqXHR, 'login-form');
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

		$('#pass-btn').click(function()
		{
			$('#pass-form-alert').remove();

			if(!$('#pass-form').jqMgVal('isFormValid'))
			{
				return;
			}

			$.ajax(
			{
				type: 'POST',
				data: JSON.stringify($('#pass-form').formToObject('pass-')),
				dataType : 'json',
				url: $('#pass-form').attr('action'),
				error: function (jqXHR, textStatus, errorThrown)
				{
					handleServerExceptions(jqXHR, 'pass-form');
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
						if(json.emailSent)
						{
							$('#pass-form').showAlertAsFirstChild('alert-success', json.message);
						}
						else
						{
							$('#pass-form').showAlertAsFirstChild('alert-success', 'El cambio se contraseña se realizó exitosamente. <a href="#" class="alert-link" onclick="$(\'#dash-login\').click();">Haga clic aquí para iniciar sesión</a>', 40000);
						}
					}
					else if(json.info)
					{
						$('#pass-form').showAlertAsFirstChild('alert-info', json.info, 12000);
					}
					else if(json.validationFailed)
	        {
	          $('#pass-form').showServerErrorsByField(json.fieldValidationMessages, 'pass-');
	        }

					$('#app-loader').addClass('hidden-xs-up');
					enableAll();
				}
			});
		});

		$('#reg-btn-register').click(function()
		{
			var url = $('#reg-form').attr('action'), action = 'new';

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
							$('#reg-form').showAlertAsFirstChild('alert-success alert-custom', 'Sus datos se actualizaron exitosamente', 6000);
							$('#reg-form').jqMgVal('clearContextualClasses');
						}
						else
						{
							$('#reg-form').showAlertAsFirstChild('alert-success', 'El registro se realizó exitosamente, en breve recibirá un correo de confirmación (revise la bandeja de correo no deseado en caso no le aparezca en su bandeja de entrada). Una vez haya iniciado sesión podrá realizar el pago para confirmar su participación. <br> <center><a href="#" class="alert-link" onclick="$(\'#dash-login\').click();">Haga clic aquí para iniciar sesión</a></center>', 40000);
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

		$('#trans-from-enviar').click(function()
		{
			if($(this).hasAttr('disabled'))
			{
				return;
			}

			if(!$('#trans-from-form').jqMgVal('isFormValid'))
			{
				return;
			}

			$('.decima-erp-tooltip').tooltip('hide');

			updateTransportationRequest('trans-from-');
		});

		$('#trans-to-enviar').click(function()
		{
			if($(this).hasAttr('disabled'))
			{
				return;
			}

			if(!$('#trans-to-form').jqMgVal('isFormValid'))
			{
				return;
			}

			$('.decima-erp-tooltip').tooltip('hide');

			updateTransportationRequest('trans-to-');
		});

		$('#pon-btn-save').click(function()
		{
			var url = $('#pon-form').attr('action'), action = 'new';

			if(!$('#pon-form').jqMgVal('isFormValid'))
			{
				return;
			}

			$('.decima-erp-tooltip').tooltip('hide');

			if($('#pon-id').isEmpty())
			{
				url = url + '/create-presentation';
			}
			else
			{
				url = url + '/update-presentation';
				action = 'edit';
			}

			$('#pon-eje').val($('#pon-subtopic-id').find('option:selected')[0].label);

			$.ajax(
			{
				type: 'POST',
				data: JSON.stringify($('#pon-form').formToObject('pon-')),
				dataType : 'json',
				url: url,
				error: function (jqXHR, textStatus, errorThrown)
				{
					handleServerExceptions(jqXHR, 'pon-form');
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
						$('#pon-btn-refresh').click();

						if(action == 'edit')
						{
							$('#pon-form').showAlertAsFirstChild('alert-success', 'Los datos de su presentación se actualizaron exitosamente', 6000);
						}
						else
						{
							$('#pon-form').showAlertAsFirstChild('alert-success', 'Su solicitud se envió exitosamente, se le notificará vía correo electrónica cuando se le asigne un horario y una aula.', 10000);

						}

						$('#pon-form').jqMgVal('clearForm');
						$('#pon-btn-save').html('Enviar');
					}
					else if(json.info)
					{
						$('#pon-form').showAlertAsFirstChild('alert-info', json.info, 12000);
					}
					else if(json.validationFailed)
	        {
	          $('#pon-form').showServerErrorsByField(json.fieldValidationMessages, 'pon-');
	        }

					$('#app-loader').addClass('hidden-xs-up');
					enableAll();
				}
			});
		});

		$('#pon-btn-delete').click(function()
		{
			var rowData;

			if($(this).hasAttr('disabled'))
			{
				return;
			}

			if(!$('#pon-grid').isRowSelected())
			{
				return;
			}

			$('.decima-erp-tooltip').tooltip('hide');
			$('#pon-modal-delete').modal('show');
		});

		$('#pon-btn-modal-delete').click(function()
		{
			$.ajax(
			{
				type: 'POST',
				data: JSON.stringify($('#pon-form').formToObject('pon-')),
				dataType : 'json',
				url: $('#reg-form').attr('action') + '/delete-presentation',
				error: function (jqXHR, textStatus, errorThrown)
				{
					handleServerExceptions(jqXHR, 'pon-btn-toolbar', false);
					$('#pon-modal-delete').modal('hide');
				},
				beforeSend:function()
				{
					$('#app-loader').removeClass('hidden');
					disabledAll();
				},
				success:function(json)
				{
					if(json.success)
					{
						$('#pon-btn-refresh').click();
						$('#pon-btn-group-2').disabledButtonGroup();
						$('#pon-form').jqMgVal('clearForm');
						$('#pon-btn-save').html('Enviar');
						$('#pon-form').showAlertAsFirstChild('alert-success', 'La presentación se eliminó exitosamente', 6000);
					}
					else if(json.info)
					{
						$('#pon-form').showAlertAsFirstChild('alert-info',json.info, 12000);
					}

					$('#pon-modal-delete').modal('hide');
					$('#app-loader').addClass('hidden');
					enableAll();
					$('.decima-erp-tooltip').tooltip('hide');
				}
			});
		});

		$('#pon-btn-refresh').click(function()
		{
			$('.decima-erp-tooltip').tooltip('hide');

			$('#pon-btn-toolbar').disabledButtonGroup();

			$('#pon-btn-group-1').enableButtonGroup();

			$('#pon-grid').trigger('reloadGrid');
		});

		setTimeout(function ()
		{
			// $('#reg-previous-ecsl').tokenfield({beautify:false});

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

				$('#trans-from-id').val(loggedUser.arriving_transportation_request_id);
				$('#trans-to-id').val(loggedUser.leaving_transportation_request_id);
				$('#reg-password, #reg-confirm-password').removeAttr('data-mg-required');
				$('#reg-password-col, #reg-confirm-password-col').find('p').remove();
				customGender(loggedUser.gender);
				changeIdLabel(loggedUser.country);
			}

			if(!empty(payment))
			{
				$('#pay-id').val(payment.id);

				if(payment.status == 'X')
				{
					// Deshabilitar radio y el boton de pago
					$('.card-payment-deck').find('.card').each(function()
					{
						if($(this).attr('data-type') != undefined && $(this).attr('data-type') == payment.type)
						{
							$(this).addClass('bg-success');

							if(payment.payment_form_type == 'G')
							{
								$('#pay-type-amount-label').val($.fmatter.NumberFormat($(this).attr('data-amount'), $.fn.jqMgVal.defaults.validators.money.formatter));
								$('#pay-commission-amount-label').val($.fmatter.NumberFormat($(this).attr('data-payment-commission-amount'), $.fn.jqMgVal.defaults.validators.money.formatter));
								$('#pay-amount-label').val($.fmatter.NumberFormat(parseFloat($(this).attr('data-amount')) + parseFloat($(this).attr('data-payment-commission-amount')), $.fn.jqMgVal.defaults.validators.money.formatter));
								$('#pay-amount-label-cr').val($.fmatter.NumberFormat(parseFloat($(this).attr('data-amount-cr')), $.fn.jqMgVal.defaults.validators.money.formatter));
							}
							else if(payment.payment_form_type == 'H')
							{
								$('#pay-bank-transfer-slsv-payment-form').click();
								$('#pay-bank-transfer-slsv-payment-form').prop('checked', true);
								$('#pay-amount-label').val($.fmatter.NumberFormat($(this).attr('data-amount'), $.fn.jqMgVal.defaults.validators.money.formatter));
								$('#pay-amount-label-cr').val($.fmatter.NumberFormat(parseFloat($(this).attr('data-amount-cr')), $.fn.jqMgVal.defaults.validators.money.formatter));
							}
							else if(payment.payment_form_type == 'I')
							{
								$('#pay-bank-transfer-cr-payment-form').click();
								$('#pay-bank-transfer-cr-payment-form').prop('checked', true);
								$('#pay-amount-label').val($.fmatter.NumberFormat($(this).attr('data-amount'), $.fn.jqMgVal.defaults.validators.money.formatter));
								$('#pay-amount-label-cr').val($.fmatter.NumberFormat(parseFloat($(this).attr('data-amount-cr')), $.fn.jqMgVal.defaults.validators.money.formatter));
							}
						}
					});

					$('#pay-btn-pay, #pay-online-payment-form, #pay-bank-transfer-slsv-payment-form, #pay-bank-transfer-cr-payment-form').attr('disabled', 'disabled');
				}
			}

			if(!empty(arrivingTransportationRequest))
			{
				if(!empty(arrivingTransportationRequest.pickup_datetime))
				{
					populateFormFields(arrivingTransportationRequest, 'trans-from-');

					$('#trans-from-enviar').html('Actualizar solicitud');

					if(arrivingTransportationRequest.is_approved == 1)
					{
						$('#trans-from-enviar').attr('disabled', 'disabled');
						$('#trans-from-status').val('Aprobada');
						$('#trans-from-assigned-transport').val('');
						$('#trans-from-responsable-user-name').val('');
						$('#trans-from-contact-phone').val('');
					}
				}
			}

			if(!empty(leavingTransportationRequest))
			{
				if(!empty(leavingTransportationRequest.pickup_datetime))
				{
					populateFormFields(leavingTransportationRequest, 'trans-to-');

					$('#trans-to-enviar').html('Actualizar solicitud');

					if(leavingTransportationRequest.is_approved == 1)
					{
						$('#trans-to-enviar').attr('disabled', 'disabled');
						$('#trans-to-status').val('Aprobada');
						$('#trans-to-assigned-transport').val('');
						$('#trans-to-responsable-user-name').val('');
						$('#trans-to-contact-phone').val('');
					}
				}
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
