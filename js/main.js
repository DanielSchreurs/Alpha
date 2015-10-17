(function () {

		jQuery( function () {
			jQuery( ".show-search" ).click( function () {
				jQuery( '.search-form' ).toggleClass( "search-form--open" );
			} );
			jQuery( '.open_nav' ).on( "click", function () {
				event.preventDefault();
				jQuery( this ).toggleClass( "active" );
				jQuery( '.menu-container' ).toggleClass( "menu-container--open" );
			} );
			jQuery( '.sub-menu a' ).on('focus',function(){
				jQuery('.sub-menu').addClass('sub-menu--active');
			});
			jQuery( '.menu-item-has-children+li a' ).on('focus',function(){
				jQuery('.sub-menu').removeClass('sub-menu--active');
			});
		} );
	})();
