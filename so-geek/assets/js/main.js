jQuery( document ).ready( function( $ ) {

	$( 'a' ).click( function() { return false; } );

	$( ".sg_menu_link" ).each( function( e ) {
		var datakey = $( this ).find( ".hl" ).data( "key" );
		var link = $( this ).attr( "href" );

		$( document ).on('keydown', {keys: 'alt-' + datakey}, event => {
			console.log( link );
			$( this ).addClass( "key-active" );
			return false;
		})
		.on('keyup', function (e) {
			$( ".sg_menu_link" ).removeClass( "key-active" );
		});
	  
	});

});