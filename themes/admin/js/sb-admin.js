


$(function() {

    $('.side-menu').metisMenu();

});

//Loads the correct sidebar on window load
$(function() {

    $(window).bind("load", function() {
        console.log($(this).width())
        if ($(this).width() < 768) {
            $('div.sidebar-collapse').addClass('collapse')
        } else {
            $('div.sidebar-collapse').removeClass('collapse')
        }
    })
})

//Collapses the sidebar on window resize
$(function() {

    $(window).bind("resize", function() {
        console.log($(this).width())
        if ($(this).width() < 768) {
            $('div.sidebar-collapse').addClass('collapse')
        } else {
            $('div.sidebar-collapse').removeClass('collapse')
        }
    })
})

$(document).ready(function(){

	  $('#tSortablex').dataTable({
	  "iDisplayLength": 15,
		  "sPaginationType": "full_numbers",
		  "bInfo": false,
		  "bPaginate": true,
		  "bProcessing": true,
		  "bServerSide": false,
		  "bLengthChange": false,
		 
	  });

  });
	   
	   