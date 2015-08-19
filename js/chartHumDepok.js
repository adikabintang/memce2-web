var $jq = jQuery.noConflict();
var chartHum;
function requestDataHum() {
    $jq.ajax({
        url: '/memce2-web/web/index.php/location/livedepokkelembaban',
        success: function(point) {
            var series = chartHum.series[0],
                shift = series.data.length > 20; // shift if the series is 
                                                 // longer than 20

            // add the point
            var x = (new Date()).getTime() + (3600000*7), // current time
                                y = parseInt(point);
                                
            chartHum.series[0].addPoint([x,y], true, shift);
            
            // call it again after one second
            setTimeout(requestDataHum, 1000);
         	
        },
        cache: false
    });
}

$jq(document).ready(function() {
    chartHum = new Highcharts.Chart({
        chart: {
            renderTo: 'humidityChart',
            defaultSeriesType: 'spline',
            events: {
                load: requestDataHum
            }
        },
        title: {
            text: 'Kelembaban'
        },
        xAxis: {
            type: 'datetime',
            tickPixelInterval: 150,
            maxZoom: 20 * 1000
        },
        yAxis: {
            minPadding: 0.2,
            maxPadding: 0.2,
            title: {
                text: 'Kelembaban',
                margin: 80
            }
        },
        series: [{
            name: 'Kelembaban',
            data: []
        }]
    });        
});