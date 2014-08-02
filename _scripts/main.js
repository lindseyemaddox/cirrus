// JavaScript Document

// codekit pre-prends

// set initial variables
var $showMenu,
	$header,
	$content;

$(function() {
	firstLoad();
});

function firstLoad() {
	initVars();
	showMenu();
	initPlaceholders();
}

// function to set dom vars, etc that will not change
function initVars() {
	$header 	= $('header');
	$showMenu 	= $('a#showMenu');
}

// show hide left menu
function showMenu(){
	$showMenu.click(function(){
		if ($header.hasClass('expand')) {
			menuOut();
		} else {
			menuIn();
		}
		return false;
	});	
}
function menuOut() {
	$header.removeClass('expand');
	//$content.unbind('click',menuOut);
}
function menuIn() {
	$header.addClass('expand');
	//$content.bind('click',menuOut);
}

// this function fixes placeholders in browsers that don't support it
function initPlaceholders() {
	if ($('input[placeholder]').length > 0) {
		if (!placeholderSupported()) {
			$('input[placeholder]').focus(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
					input.val('');
					input.removeClass('placeholder');
				}
			}).blur(function() {
				var input = $(this);
				if (input.val() == '' || input.val() == input.attr('placeholder')) {
					input.addClass('placeholder');
					input.val(input.attr('placeholder'));
				}
			}).blur();
			$('input[placeholder]').parents('form').submit(function() {
				$(this).find('[placeholder]').each(function() {
					var input = $(this);
					if (input.val() == input.attr('placeholder')) {
						input.val('');
					}
				})
			});
		}
	}
}
function placeholderSupported() {
    test = document.createElement('input');
    return ('placeholder' in test);
}
