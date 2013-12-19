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

		// init ui
		this.initDonate();

	} // init()

, initDonate: function() {
		
		$('body').on('submit', '#donate-form', function() {

			//$('input', this).prop('disabled', true);
			//$('button', this).prop('disabled', true);

			var $specify = $('#donate-specify');
			var specify = parseInt($specify.val());
			if ( typeOf(specify) != 'NaN' && specify > 0 ) {
				$('#donate-amount').val(specify).prop('checked',true);
			}

			console.log(specify);

			return false;

		});
		
  } // initDonate()

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
