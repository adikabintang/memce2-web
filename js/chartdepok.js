var $jq = jQuery.noConflict();
var chart;
var chartHum;
var chartSpeed;
var chartHujan;
var chartCahaya;
var chartTekanan;
/**
 * Request data from the server, add it to the graph and set a timeout 
 * to request again
 */
function requestData() {
    $jq.ajax({
        url: '/memce2/web/index.php/location/livedepoksuhu',
        success: function(point) {
            var series = chart.series[0],
                shift = series.data.length > 20; // shift if the series is 
                                                 // longer than 20

            // add the point
            var x = (new Date()).getTime() + (3600000*7), // current time
                                y = parseInt(point);
                                
            chart.series[0].addPoint([x,y], true, shift);
            
            // call it again after one second
            setTimeout(requestData, 1000);
         
        },
        cache: false
    });
}

$jq(document).ready(function() {
    chart = new Highcharts.Chart({
        chart: {
            renderTo: 'suhuChart',
            defaultSeriesType: 'spline',
            events: {
                load: requestData
            }
        },
        title: {
            text: 'Suhu'
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
                text: 'Suhu',
                margin: 80
            }
        },
        series: [{
            name: 'Suhu',
            data: []
        }]
    });        
});

function requestKelembaban() {
    $jq.ajax({
        url: '/memce2/web/index.php/location/livedepokkelembaban',
        success: function(point) {
            var series = chartHum.series[0],
                shift = series.data.length > 20; // shift if the series is 
                                                 // longer than 20

            // add the point
            var x = (new Date()).getTime() + (3600000*7), // current time
                                y = parseInt(point);
                                
            chartHum.series[0].addPoint([x,y], true, shift);
            
            // call it again after one second
            setTimeout(requestKelembaban, 1000);
         
        },
        cache: false
    });
}

$jq(document).ready(function() {
    chartHum = new Highcharts.Chart({
        chartHum: {
            renderTo: 'humidityChart',
            defaultSeriesType: 'spline',
            events: {
                load: requestKelembaban
            }
        },
        title: {
            text: 'Kelembaban Udara'
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
                text: 'Kelembaban Udara',
                margin: 80
            }
        },
        series: [{
            name: 'Kelembaban Udara',
            data: []
        }]
    });        
});