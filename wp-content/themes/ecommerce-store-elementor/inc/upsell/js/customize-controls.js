( function( api ) {

	// Extends our custom "ecommerce-store-elementor" section.
	api.sectionConstructor['ecommerce-store-elementor'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );