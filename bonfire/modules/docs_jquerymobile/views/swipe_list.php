	<script>
		$( document ).on( "pagecreate", "#demo-page", function() {

			// Swipe to remove list item
			$( document ).on( "swipeleft swiperight", "#list li", function( event ) {
				var listitem = $( this ),
					// These are the classnames used for the CSS transition
					dir = event.type === "swipeleft" ? "left" : "right",
					// Check if the browser supports the transform (3D) CSS transition
					transition = $.support.cssTransform3d ? dir : false;

					confirmAndDelete( listitem, transition );
			});

			// If it's not a touch device...
			if ( ! $.mobile.support.touch ) {

				// Remove the class that is used to hide the delete button on touch devices
				$( "#list" ).removeClass( "touch" );

				// Click delete split-button to remove list item
				$( ".delete" ).on( "click", function() {
					var listitem = $( this ).parent( "li" );

					confirmAndDelete( listitem );
				});
			}

			function confirmAndDelete( listitem, transition ) {
				// Highlight the list item that will be removed
				listitem.children( ".ui-btn" ).addClass( "ui-btn-active" );
				// Inject topic in confirmation popup after removing any previous injected topics
				$( "#confirm .topic" ).remove();
				listitem.find( ".topic" ).clone().insertAfter( "#question" );
				// Show the confirmation popup
				$( "#confirm" ).popup( "open" );
				// Proceed when the user confirms
				$( "#confirm #yes" ).on( "click", function() {
					// Remove with a transition
					if ( transition ) {

						listitem
							// Add the class for the transition direction
							.addClass( transition )
							// When the transition is done...
							.on( "webkitTransitionEnd transitionend otransitionend", function() {
								// ...the list item will be removed
								listitem.remove();
								// ...the list will be refreshed and the temporary class for border styling removed
								$( "#list" ).listview( "refresh" ).find( ".border-bottom" ).removeClass( "border-bottom" );
							})
							// During the transition the previous button gets bottom border
							.prev( "li" ).children( "a" ).addClass( "border-bottom" )
							// Remove the highlight
							.end().end().children( ".ui-btn" ).removeClass( "ui-btn-active" );
					}
					// If it's not a touch device or the CSS transition isn't supported just remove the list item and refresh the list
					else {
						listitem.remove();
						$( "#list" ).listview( "refresh" );
					}
				});
				// Remove active state and unbind when the cancel button is clicked
				$( "#confirm #cancel" ).on( "click", function() {
					listitem.removeClass( "ui-btn-active" );
					$( "#confirm #yes" ).off();
				});
			}
		});
    </script>
	<style>
		/* Left transition */
		li.left {
			-webkit-transition: -webkit-transform 250ms ease;
			-webkit-transform: translateX(-100%);
			-moz-transition: -moz-transform 250ms ease;
			-moz-transform: translateX(-100%);
			-o-transition: -o-transform 250ms ease;
			-o-transform: translateX(-100%);
			transition: transform 250ms ease;
			transform: translateX(-100%);
		}
		/* Right transition */
		li.right {
			-webkit-transition: -webkit-transform 250ms ease;
			-webkit-transform: translateX(100%);
			-moz-transition: -moz-transform 250ms ease;
			-moz-transform: translateX(100%);
			-o-transition: -o-transform 250ms ease;
			-o-transform: translateX(100%);
			transition: transform 250ms ease;
			transform: translateX(100%);
		}
		/* Border bottom for the previous button during the transition*/
		li.left a.ui-btn,
		li.right a.ui-btn {
			border-top-width: 0;
			border-left-width: 1px;
			border-right-width: 1px;
		}
		li a.ui-btn.border-bottom {
			border-bottom-width: 1px;
		}
		/* Hide the delete button on touch devices */
		ul.touch li.ui-li-has-alt a.delete {
			display: none;
		}
		ul.touch li.ui-li-has-alt a.ui-btn {
			margin-right:0;
		}
		/* Styling for the popup */
		#confirm p {
			text-align: center;
			font-size: inherit;
			margin-bottom: .75em;
		}
    </style>
	
	
	  <h1>Swipe to delete list item</h1>

		<p>This demo shows how you can remove list items by swiping left or right. For devices without touchscreen there is a delete button. This demo also contains a custom styled confirmation popup.</p>

		<p><a href="<?php echo site_url("/docs_jquerymobile/swipe_list");?>#demo-page" data-transition="fade" class="ui-btn ui-corner-all ui-shadow ui-btn-inline">Open swipe list demo</a></p>

        <div data-demo-html="#demo-page" data-demo-js="true" data-demo-css="true"></div>
		
		
		
		