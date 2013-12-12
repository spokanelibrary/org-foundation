// account.js

var org = {

	// added on script load
	config: {
						endpoint: { hzws: 'http://api.spokanelibrary.org/v2/hzws/' }
					 }

	// added on authentication
	,user: {}

	// called on script load
	,init: function() {
		_self = this;

		this.setUser();

		// init ui
		this.initMyAccount();

	} // init()

, setUser: function(user) {
		if ( !ORG.user ) {
			ORG.setUser(user);
		}
		this.user = ORG.user;
}

, initMyAccount: function() {
		
		this.initTabs();

		this.initCko();

		this.initHolds();

		this.initLists();

		this.initProfile();
		
  } // initMyAccount()

, initTabs: function() {
		// apply hash onload
		if ( window.location.hash ) {
			$('a[href="'+window.location.hash+'"]').tab('show')
		}

		// apply hashchange on tab event
		//$('body').on('click', '[data-toggle="tab"]', function(e) {
		$('[data-toggle="tab"]').click(function(e) {
			//$('a', '.spl-select-tab').removeClass('active');
			window.location.hash = $(this).attr('href');
		});

	} // initTabs() 

, initCko: function() {
		var $form = $('#spl-form-cko');

		this.toggleCheckboxGroup('.spl-field-cko-select-all'
														,'.spl-field-cko-select-item');

		
		$form.on('submit', function(e) {
			if ( 'ajax' == $(this).data('process') ) {
				e.preventDefault();

				var barcodes = new Array;
				$('.spl-field-cko-select-item:checked').each(function() {
					barcodes.push( $(this).data('barcode') );
				});

				if ( barcodes.length > 0 ) {
					_self.ckoRenew(barcodes);
				} else {
					alert('Please select item(s) to renew.');
				}
			}
			
		});

	} // initCko()

, ckoRenew: function(barcodes) {
		var $form = $('#spl-form-cko');
		var $submit = $('.spl-submit-cko');
		var $hidden = $('#spl-field-cko-renewal');

		$submit.button('loading'); //$submit.button('reset');
		$.ajax({ 
	    url: this.config.endpoint.hzws+'renew' //'renew' //'trace'
    , data: { params: { sessionToken: this.user.sessionToken
    									,	barcodes: barcodes
    									}
    				}
	  })
	  .done(function(obj) {  
	  	// pass results through
			$hidden.val(JSON.stringify(obj));
			$form.data('process', 'http').submit();
	  })
	  .fail(function() {
	  })
	  .always(function() {
	  });

	} // ckoRenew()

, initHolds: function() {
		this.initHoldsReady();
		this.initHoldsPending();

	} // initHolds()

, initHoldsReady: function() {

		var $cancel = $('.spl-field-cancel-hold-ready');
		
		$cancel.on('click', function(e) {
			var holdkey = $(this).data('holdkey');
			if ( holdkey ) {
				$cancel.button('loading');
				_self.cancelHold(holdkey);
			}
		});
}

, cancelHold: function(holdKey) {
		//console.log( holdKey );
		var $form = $('#spl-form-holds-ready');

		$.ajax({ 
	    url: this.config.endpoint.hzws+'cancel'
    , data: { params: { sessionToken: this.user.sessionToken
    									,	holdKey: holdKey
    									}
    				}
	  })
	  .done(function(obj) {  
	  	// pass results through
			//$hidden.val(JSON.stringify(obj));
			//console.log(obj);
			//$submit.button('reset');
			//$form.data('process', 'http').submit();
			$form.submit();
	  })
	  .fail(function() {
	  })
	  .always(function() {
	  });

}

, initHoldsPending: function() {
		
		this.initHoldsPendingSuspend();
		
		var $form = $('#spl-form-holds-pending');

		this.toggleCheckboxGroup('.spl-field-holds-pending-select-all'
														,'.spl-field-holds-pending-select-item');


		$('.spl-field-holds-pending-control').click(function(e) {
			$form.data('action', $(this).data('action')).submit();
		});

		$form.on('submit', function(e) {
			if ( 'ajax' == $(this).data('process') ) {
				e.preventDefault();

				var holdkeys = new Array;
				$('.spl-field-holds-pending-select-item:checked').each(function() {
					holdkeys.push( $(this).data('holdkey') );
				});
				
				if ( holdkeys.length > 0 ) {
					_self.holdsPendingUpdate($(this).data('action'), holdkeys);
					$(this).data('action', '');
				} else {
					alert('Please select hold requests(s).');
				}
				
			}
			
		});
		
	} // initHoldsPending()

, initHoldsPendingSuspend: function() {
		var $suspend = $('.spl-field-holds-pending-suspend');
		var $date = $('.spl-field-holds-pending-date');
		$date.on('change', function(e) {
			if ( $(this).val().length > 0 ) {
				$suspend.attr('disabled', false);
			} else {
				$suspend.attr('disabled', true);
			}
		});
		// disallow dates in the past
		$date.datepicker({startDate: new Date() });

} // initHoldsPendingSuspend()

, holdsPendingUpdate: function(action, holdkeys) {
		var $form = $('#spl-form-holds-pending');
		var $submit = $('.spl-field-holds-pending-control');
		var $hidden = $('#spl-field-holds-pending-update');

		var $location = $('.spl-field-holds-pending-location');
		var $date = $('.spl-field-holds-pending-date');
		
		$submit.button('loading'); //$submit.button('reset');

		var data = { params: {sessionToken: this.user.sessionToken
	    									,	holdKeys: holdkeys
	    									}
	    					}

		var endpoint;

		switch ( action ) {
			case 'cancel':
				endpoint = 'cancel';
				break;
			case 'pickup':
				endpoint = 'pickup';
				data.params.newLocation = $location.val();
				break;
			case 'suspend':
				endpoint = 'suspend';
				data.params.suspendEndDate = $date.val();
				break;
			case 'resume':
				endpoint = 'resume';
				break;
			default:
				endpoint = null;
				break;
		}
		
		if ( null != typeof(endpoint) ) {
			$.ajax({ 
		    url: this.config.endpoint.hzws+endpoint
	    , data: data
		  })
		  .done(function(obj) {  
		  	// pass results through
				$hidden.val(JSON.stringify(obj));
				//console.log(obj);
				//$submit.button('reset');
				$form.data('process', 'http').submit();
		  })
		  .fail(function() {
		  })
		  .always(function() {
		  });
		}

	} // holdsPendingUpdate()

, initLists: function() {
		
		this.initListControl();
		this.initListCreate();

	} // initLists()

, initListControl: function() {

		this.initListToggle();

		$('.spl-field-list-control').click(function(e) {
			var list = $(this).data('list');
			$('#spl-form-list-control-'+list).data('action', $(this).data('action')).submit();
		});

		$('.spl-form-list-control').on('submit', function(e) {
			if ( 'ajax' == $(this).data('process') ) {
				e.preventDefault();

				var list = $(this).data('list');
				var action = $(this).data('action');
				var titlekeys = new Array;
				$('.spl-field-list-select-item:checked', $(this)).each(function() {
					titlekeys.push( $(this).data('titlekey') );
				});
				
				_self.updateList(list, action, titlekeys);
				$(this).data('action', '');					
			}
		});
		
	} // initListControl

, initListToggle: function() {
		$('.spl-list-panel').on('show.bs.collapse', function() {
			_self.toggleCheckboxGroup('.spl-field-list-select-all'
															,'.spl-field-list-select-item'
															,'#'+$(this).attr('id')
															);			
		});

	} // initListToggle

, updateList: function(list, action, titlekeys) {
		/*
		console.log( list );
		console.log( action );
		console.log( titlekeys );
		return;
		*/

		var form = '#spl-form-list-control-'+list;
		var $form = $(form);
		var $submit = $('.spl-field-list-control');
		//var $hidden = $('#spl-field-list-control-update');

		var $move = $('.spl-field-list-move', $form);
		//var $rename = $('.spl-field-list-rename', $form);
		var $rename = $('#spl-field-list-rename-'+list);
		
		var data = { params: {sessionToken: this.user.sessionToken
	    									,	titleKeys: titlekeys
	    									, listKey: list
	    									}
	    					}

		switch ( action ) {
			case 'request':
			case 'delete':
			case 'move': 
				if ( !titlekeys.length > 0 ) {
					alert('Please select title(s).');
					return;
				}
				break;
			case 'rename':
				if ( !$rename.val().length > 0 ) {
					return;
				}
				break;
			case 'remove':
				break;
			default:
				break;
		}

		$submit.button('loading');

		var endpoint;
		switch ( action ) {
			case 'request':
				endpoint = 'request';
				data.params.pickupLocation = this.user.locationID;
				break;
			case 'delete':
				endpoint = 'delete';
				break;
			case 'move':
				endpoint = 'move';
				data.params.listKeyFrom = list;
				data.params.listKeyTo = $move.val();
				break;
			case 'rename':
					endpoint = 'rename';
					data.params.listDescription = $rename.val();
				break;
			case 'remove':
				endpoint = 'remove';
				break;
			default:
				endpoint = null;
				break;
		}
		
		if ( null != typeof(endpoint) ) {
			$.ajax({ 
		    url: this.config.endpoint.hzws+endpoint
	    , data: data
		  })
		  .done(function(obj) {  
		  	// pass results through
				//$hidden.val(JSON.stringify(obj));
				//console.log(obj);
				//$submit.button('reset');
				$form.data('process', 'http').submit();
		  })
		  .fail(function() {
		  })
		  .always(function() {
		  });
		}
		

	} // updateList


, initListCreate: function() {
		var $form = $('#spl-form-list-create');

		var $label = $('#spl-field-list-create-label');

		$form.on('submit', function(e) {
			
			if ( 'ajax' == $(this).data('process') ) {
				e.preventDefault();
				var label = $label.val();
				if ( label.length > 0 ) {
					_self.createList(label);
				} else {
					alert('Please add a List Name');
				}
			}
			
		});

	} //initListCreate

, createList: function(label) {
		var $form = $('#spl-form-list-create');
		var $submit = $('.spl-submit-list-create');
		var $hidden = $('#spl-field-list-create');

		$submit.button('loading'); //$submit.button('reset');
		$.ajax({ 
	    url: this.config.endpoint.hzws+'list'
    , data: { params: { sessionToken: this.user.sessionToken
    									,	description: label
    									}
    				}
	  })
	  .done(function(obj) {  
	  	// pass results through
			//$hidden.val(JSON.stringify(obj));
			//console.log(obj);
			//$submit.button('reset');
			$form.data('process', 'http').submit();
	  })
	  .fail(function() {
	  })
	  .always(function() {
	  });


} //createList()

, initProfile: function() {
		this.initProfileEmail();
		this.initProfilePin();

	} // initProfile()

, initProfileEmail: function() {
		// it turns out hzws has no methods for updating email 
		// will need addres ord? or maybe just select on old address?
		var $form = $('#spl-form-profile-email');
		var $email = $('#spl-field-profile-email');
		var $submit = $('#spl-submit-profile-email');

		$form.validate();
		
		$form.on('submit', function(e) {
			if ( $form.valid() ) {
				if ( 'ajax' == $(this).data('process') ) {
					e.preventDefault();			
					
					/*
					console.log( _self.user.borrower );
					console.log( _self.user.sessionToken );
					console.log( $email.val() );
					*/
					//$submit.button('loading');
					
					//_self.changePIN( $pin.val(), $old.val() );
				}
			}
		});

	} // initProfileEmail()

, initProfilePin: function() {
		// note: we will need a new session token here? (loginUserResetMyPin)
		var $form = $('#spl-form-profile-pin');
		var $old = $('#spl-field-profile-pin-old');
		var $pin = $('#spl-field-profile-pin-new');
		var $submit = $('#spl-submit-profile-pin');

		$form.validate({
			rules: {
				pinConfirm: {
		      equalTo: "#spl-field-profile-pin-new"
		    }
	  	}
		});
		
		$form.on('submit', function(e) {
			if ( $form.valid() ) {
				if ( 'ajax' == $(this).data('process') ) {
				e.preventDefault();			
					_self.changePIN( $pin.val(), $old.val() );
				}
			}
			
		});

	} // initProfilePin()

, changePIN: function(pin, current) {

		var $form = $('#spl-form-profile-pin');
		var $submit = $('#spl-submit-profile-pin');

		$submit.button('loading'); 
		$.ajax({ 
	    url: this.config.endpoint.hzws+'change'
    , data: { params: { sessionToken: this.user.sessionToken
    									,	currentPin: current
    									, newPin: pin
    									}
    				}
	  })
	  .done(function(obj) {  
	  	// pass results through
			//$hidden.val(JSON.stringify(obj));
			console.log(obj);
			
			if ( true == obj ) {
				$form.data('process', 'http').submit();
	  	} else {
	  		$submit.button('reset');
				//console.log(obj);
			}
			
	  })
	  .fail(function() {
	  })
	  .always(function() {
	  });
		

	}

, toggleCheckboxGroup: function(all, item, scope) {
		var $selectAll;
		var $selectItem;
		if ( scope ) {
			$selectAll = $(all, scope);
			$selectItem = $(item, scope);
		} else {
			$selectAll = $(all);
			$selectItem = $(item);
		}

		$selectAll.on('change', function(e) {
			if ( $(this).is(':checked') ) {
				$selectAll.prop('checked', true);
				$selectItem.prop('checked', true);
			} else {
				$selectAll.prop('checked', false);
				$selectItem.prop('checked', false);
			}
		});
	}

};
