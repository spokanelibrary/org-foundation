// account.js

var org = {

	// added on script load
	config: {
						amount: 20
					, endpoint: { hzws: 'http://api.spokanelibrary.org/v2/hzws/' }
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
		
		this.normalizeValues();
		
  } // initValues()

, normalizeValues: function() {

		$('body').on('submit', '#donate-form', function() {

			// amount
			var $specify = $('#donate-specify');
			var $amount = $('#donate-amount');
			$amount.val('');

			var specify = parseInt($specify.val());
			if ( typeof(specify) != 'NaN' && specify > 0 ) {
				$amount.val(specify).prop('checked',true);
			} else {
				$amount.val('');
			}

			var amount = parseInt($('input[name="amount"]:checked').val());
			if ( (typeof(specify) == 'NaN') || !(amount > 0) ) {
				$amount.val(_self.config.amount).prop('checked',true);
				$specify.val(_self.config.amount);
			}
			console.log( parseInt($('input[name="amount"]:checked').val()) );

			// name
			var $name = $('#donate-number'); // we're hijacking the item_number field
			var $behalf = $('#donate-behalf');
			var $memory = $('#donate-memory');

			if ( $behalf.val().length > 0 ) {
				$name.val($behalf.val());
			}

			if ( $memory.val().length > 0 ) {
				$name.val($memory.val());
			}

			// anon
			var $anon = $('#donate-anon');
			if ( $anon.prop('checked') ) {
				console.log( 'anon' );
			} 

			// sustain

			//$('input', this).prop('disabled', true);
			//$('button', this).prop('disabled', true);

			return false;

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
