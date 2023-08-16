window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
            text: "Desktop Search Engine Market Share - 2016"
        },
        data: [{
            type: "pie",
            startAngle: 240,
            yValueFormatString: "##0.00\"%\"",
            indexLabel: "{label} {y}",
            dataPoints: [
                {y: 25, label: "Analysis"},
                {y: 20, label: "Design"},
                {y: 25, label: "Construction"},
                {y: 20, label: "Testing"},
                {y: 10, label: "Promotion"}
            ]
        }]
    });
    chart.render();
    
    }