// Dashboard 1 Morris-chart
$( function () {
	"use strict";


	// Extra chart
	Morris.Area( {
		element: 'extra-area-chart',
		data: [ {
				period: '2012-02-20',
				iphone: 0,
				imac: 0,
				ibook: 90,
				samsung: 0,
				android: 0,
				redmi: 10
        }, {
				period: '2012-02-21',
				iphone: 10,
				imac: 60,
				ibook: 40,
				samsung: 80,
				android: 120,
				redmi: 50
        }, {
				period: '2012-02-22',
				iphone: 120,
				imac: 10,
				ibook: 90,
				samsung: 30,
				android: 50,
				redmi: 30
        }, {
				period: '2012-02-23',
				iphone: 0,
				imac: 0,
				ibook: 120,
				samsung: 0,
				android: 0,
				redmi: 10
        }, {
				period: '2012-02-24',
				iphone: 0,
				imac: 0,
				ibook: 0,
				samsung: 150,
				android: 0,
				redmi: 80
        }, {
				period: '2012-02-25',
				iphone: 160,
				imac: 75,
				ibook: 30,
				samsung: 60,
				android: 90,
				redmi: 90
        }, {
				period: '2012-02-26',
				iphone: 10,
				imac: 120,
				ibook: 40,
				samsung: 60,
				android: 30,
				redmi: 100
        }


        ],
		lineColors: [ '#26DAD2', '#fc6180', '#62d1f3', '#ffb64d', '#4680ff', '#ff0000'],
		xkey: 'period',
		ykeys: [ 'iphone', 'imac', 'ibook', 'samsung', 'android', 'redmi' ],
		labels: [ 'iphone', 'imac', 'ibook', 'samsung', 'android', 'redmi' ],
		pointSize: 0,
		lineWidth: 0,
		resize: true,
		fillOpacity: 0.8,
		behaveLikeLine: true,
		gridLineColor: '#e0e0e0',
		hideHover: 'auto'

	} );



} );
