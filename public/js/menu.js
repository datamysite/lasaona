jQuery(function($){
	var topMenuHeight = $("#desktop-nav").outerHeight();
	$("#desktop-nav").menuScroll(topMenuHeight);
});

jQuery.fn.extend({
    menuScroll: function(offset) {
		// Declare all global variables
        var topMenu = this;
		var topOffset = offset ? offset : 0;
        var menuItems = $(topMenu).find("a");
        var lastId;
	
		// Save all menu items into scrollItems array
        var scrollItems = $(menuItems).map(function() {
            var item = $(this).attr("href");
            if (item.length) {
                return item;
            }
        });

		// When the menu item is clicked, get the #id from the href value, then scroll to the #id element
        $(topMenu).on("click", ".nav-link", function(e){
            var href = $(this).attr("href");
            
            var offsetTop = href === "#" ? 0 : $(href).offset().top-topOffset;

            $('html, body').stop().animate({ 
                scrollTop: offsetTop+120
            }, 300);
            e.preventDefault();

        });
		
    }
});