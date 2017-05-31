$(document).ready(function() {

	/**
	 * Custom Nav for desktop
	 *
	 * The Waypoints functionality has been limited to screen widths
	 * of > 700px (md breakpoint) for better UX on mobile.
	 *
	 * Each section has it's own function, so it can be customized.
	 * See offset and addClass.
	 *
	 * Animate.css classes have been added in the addClass function.
	 *
	 * Offsets are added relative to the top of the screen. This is where
	 * the section will scroll into view.
	 *
	 **/
	if($(window).width() > 700){

		// section 1
		$("#waypoint-1").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("#custom-nav").removeClass("navbar-fixed-bottom").addClass("navbar-static-top");
		}, {offset: "50%"});


	}// end if condition
});// end document.ready()