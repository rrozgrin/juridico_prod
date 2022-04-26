google.charts.load('current', {
    'packages': ['line']
});
google.charts.setOnLoadCallback(drawChart);



function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['data', 'Protocolo', 'Env. Correção'],
        ['01/02/2022', 1000, 400],
        ['02/02/2022', 1170, 460],
        ['03/02/2022', 660, 1120],
        ['04/02/2022', 1030, 540],
        ['05/02/2022', 1000, 400],
        ['06/02/2022', 1170, 460],
        ['07/02/2022', 66, 1120],
        ['08/02/2022', 100, 540],
        ['09/02/2022', 1000, 400],
        ['10/02/2022', 1170, 460],
        ['11/02/2022', 60, 1120],
        ['12/02/2022', 1030, 540],
        ['13/02/2022', 1003, 400],
        ['14/02/2022', 110, 460],
        ['15/02/2022', 66, 1120],
        ['16/02/2022', 130, 540]

    ]);

   

    var options = {
        curveType: 'function',
        legend: {
            position: 'top'
        },
        
    };

    var chart = new google.charts.Line(document.getElementById('curve_chart'));


    chart.draw(data, options);
}
