var ContactUs = function () {

    return {
        //main function to initiate the module
        init: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat: 6.914746,
				lng: 79.973164
			  });
			   var marker = map.addMarker({
		            lat: 6.914746,
					lng: 79.973164,
		            title: 'SLIIT',
		            infoWindow: {
		                content: "<b>Sri Lanka Institute of Information Technology</b><br> New Kandy Rd, Malabe 10115<br> Sri Lanka"
		            }
		        });

			   marker.infoWindow.open(map, marker);
			});
        }
    };

}();