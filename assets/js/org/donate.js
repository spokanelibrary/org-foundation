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

			$('input', this).attr('disabled', true);
			$('button', this).attr('disabled', true);

			var $specify = $('#specify');
			var specify = parseInt($specify.val());
			if ( specify > 0 ) {
				$('#amount').val(specify);
			}

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
