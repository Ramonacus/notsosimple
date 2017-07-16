(function ($, doc, body) {

	// Panel functionality.
	// ====================
	function toggle_panel(event) {
		var $trigger = $(this),
			$panel = $(doc.getElementById($trigger.attr('data-toggle'))),
			shown_class = 'shown',
			up_speed = $trigger.attr('data-up-speed') || 400,
			down_speed = $trigger.attr('data-down-speed') || 200;

		if ($trigger.hasClass(shown_class)) {
			$panel.slideUp(parseInt(up_speed, 10));
		}
		else {
			$panel.slideDown(parseInt(down_speed, 10));
		}

		$trigger.toggleClass(shown_class);
		event.stopPropagation();
	}

	function autoclose_panel(event) {
		var $target = $(event.target),
			$autoclose,
			dont_autoclose,
			i, l;

		$autoclose = $('.autoclose:visible');
		dont_autoclose = $target.closest('.autoclose').get(0);

		for (i = 0, l = $autoclose.length; i < l; ++i) {
			if ($autoclose.get(i) !== dont_autoclose) {
				$('[data-toggle=' + $autoclose.attr('id') + ']').filter('.shown').click();
			}
		}
	}

	$(body).on('click', '[data-toggle]', toggle_panel);
	$(body).on('click', autoclose_panel);


	// Sandwich menu button functionality.
	// ===================================
	function toggle_active_class() {
		$(this).toggleClass('active');
	}
	function toggle_sibling_menus() {
		$(this).siblings('.menu').toggleClass('active');
	}
	$(function () {
		$(body)
			.on('click', '.sandwich-trigger', toggle_active_class)
			.on('click', '.menu-trigger', toggle_sibling_menus);
	});
})(window.jQuery, window.document, window.document.body);
