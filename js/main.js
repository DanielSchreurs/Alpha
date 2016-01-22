(function () {

	jQuery( function () {
		jQuery( ".show-search" ).click( function () {
			jQuery( '.search-form' ).toggleClass( "search-form--open" );
		} );
		jQuery( '.open_nav' ).on( "click", function (event) {
			event.preventDefault();
			jQuery( this ).toggleClass( "active" );
			jQuery( '.menu-container' ).toggleClass( "menu-container--open" );
		} );
		jQuery( '.sub-menu a' ).on( 'focus', function () {
			jQuery( '.sub-menu' ).addClass( 'sub-menu--active' );
		} );
		jQuery( '.menu-item-has-children+li a' ).on( 'focus', function () {
			jQuery( '.sub-menu' ).removeClass( 'sub-menu--active' );
		} );
		jQuery( '.morphsearch__btn' ).on( "click", function (event) {
			event.preventDefault();
			jQuery( '.morphsearch' ).addClass( 'morphsearch--active' );
			jQuery( '.close-form-btn' ).addClass( 'close-form-btn--active' );
			jQuery('.header #s' ).focus();
		} );
		jQuery( '.close-form-btn' ).on( "click", function (event) {
			event.preventDefault();
			jQuery( '.morphsearch' ).removeClass( 'morphsearch--active' );
			jQuery( '.close-form-btn' ).removeClass( 'close-form-btn--active' );
		} );
		jQuery(document).keyup(function(e) {
			if (e.keyCode == 27) jQuery('.close-form-btn').click();   // esc
		});
	} );
})();