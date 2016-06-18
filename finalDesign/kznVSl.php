<script src="bootstrap-4.0.0-alpha.2\js\tests\vendor\jquery.min.js"></script>
<script src="bootstrap-4.0.0-alpha.2\js\tests\vendor\tether.min.js"></script>
<script src="bootstrap-4.0.0-alpha.2\dist\js\bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-alpha.2\dist\css\bootstrap.min.css">
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Population', 'KwaZulu-Natal', {role: 'annotation'}, 'Limpopo', {role: 'annotation'}],
            ['', 10267300, '10 267 300', 5404868, '5 404 868']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('population'));
        var options = {
            title: "Population comparison: KwaZulu-Natal VS Limpopo",
            legend: 'bottom',
            colors: ['black', 'white', 'yellow', 'brown', 'blue', '#ffffff'],
            backgroundColor: 'gray',
            hAxis: {
                title: ""
            },
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            vAxis: {
                // set these values to make the initial animation smoother
                minValue: 0,
                maxValue: 5000
            }
        };
        chart.draw(data, options);
    }
</script>
<script>
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Population', 'KwaZulu-Natal', {role: 'annotation'}, 'Limpopo', {role: 'annotation'}],
            ['', 94361, '94 361', 125754, '125 754']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('size'));
        var options = {
            title: "Size comparison: KwaZulu-Natal VS Limpopo",
            legend: 'bottom',
            colors: ['black', 'white', 'yellow', 'brown', 'blue', '#ffffff'],
            backgroundColor: 'gray',
            hAxis: {
                title: ""
            },
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            vAxis: {
                // set these values to make the initial animation smoother
                minValue: 0,
                maxValue: 50
            }
        };
        chart.draw(data, options);
    }
</script>
<script>
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Gender', 'KwaZulu-Natal', {role: 'annotation'}, 'Limpopo', {role: 'annotation'}],
            ['Male', 47.6, '47.6%', 46.8, '46.8%'],
            ['Female', 52.4, '52.4%', 53.2, '53.2%']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('gender'));
        var options = {
            title: "Gender comparison: KwaZulu-Natal VS Limpopo",
            legend: 'bottom',
            colors: ['black', 'white', 'yellow', 'brown', 'blue', '#ffffff'],
            backgroundColor: 'gray',
            hAxis: {
                title: ""
            },
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            vAxis: {
                // set these values to make the initial animation smoother
                minValue: 0,
                maxValue: 50
            }
        };
        chart.draw(data, options);
    }
</script>
<script>
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Population', 'KwaZulu-Natal', {role: 'annotation'}, 'Limpopo', {role: 'annotation'}],
            ['', 108.8, 108.8, 43.0, 43.0]
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('density'));
        var options = {
            title: "Population Density comparison: KwaZulu-Natal VS Limpopo",
            legend: 'bottom',
            colors: ['black', 'white', 'yellow', 'brown', 'blue', '#ffffff'],
            backgroundColor: 'gray',
            hAxis: {
                title: ""
            },
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            vAxis: {
                // set these values to make the initial animation smoother
                minValue: 0,
                maxValue: 50
            }
        };
        chart.draw(data, options);
    }
</script>
<script>
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Race', 'KwaZulu-Natal', {role: 'annotation'}, 'Limpopo', {role: 'annotation'}],
            ['Black', 8912016, '8 912 016', 5226507, '5 226 507'],
            ['White', 431227, '431 227', 140527, '140 527'],
            ['Indian/Asian', 759780, '759 780', 16215, '16 215'],
            ['Coloured', 143742, '143 742', 16215, '16 215'],
            ['Other', 30802, '30 802', 10810, '10 810']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('race'));
        var options = {
            title: "Race comparison: KwaZulu-Natal VS Limpopo",
            legend: 'bottom',
            colors: ['black', 'white', 'yellow', 'brown', 'blue', '#ffffff'],
            backgroundColor: 'gray',
            hAxis: {
                title: ""
            },
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            vAxis: {
                // set these values to make the initial animation smoother
                minValue: 0,
                maxValue: 50
            }
        };
        chart.draw(data, options);
    }
</script>
<script>
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Population', 'KwaZulu-Natal', {role: 'annotation'}, 'Limpopo', {role: 'annotation'}],
            ['', 83053, 'R83 053', 56844, 'R56 844']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('income'));
        var options = {
            title: "Income comparison: KwaZulu-Natal VS Limpopo",
            legend: 'bottom',
            colors: ['#B8BC06', '#B30A05', 'yellow', 'brown', 'blue', '#ffffff'],
            backgroundColor: 'gray',
            hAxis: {
                title: ""
            },
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            vAxis: {
                // set these values to make the initial animation smoother
                minValue: 0,
                maxValue: 50
            }
        };
        chart.draw(data, options);
    }
</script>
<script>
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Population', 'KwaZulu-Natal', {role: 'annotation'}, 'Limpopo', {role: 'annotation'}],
            ['', 68.1, '68.1%', 63.9, '63.9%']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('matric'));
        var options = {
            title: "Matric Pass Rate comparison: KwaZulu-Natal VS Limpopo",
            legend: 'bottom',
            colors: ['black', 'white', 'yellow', 'brown', 'blue', '#ffffff'],
            backgroundColor: 'gray',
            hAxis: {
                title: ""
            },
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            vAxis: {
                // set these values to make the initial animation smoother
                minValue: 0,
                maxValue: 50
            }
        };
        chart.draw(data, options);
    }
</script>

<style>
    .compareBox{
        width: 200px;
        height: 150px;
        text-align: center;
        margin-left: 50px;
        transition: border 0.5s ease;
        border: 5px solid white;
        border-radius: 10px;
    }
    .compareBox:hover{
        border: 5px groove red;
        border-radius: 10px;
    }

    .verticalAlign{
        display: inline-block;
        height: 100%;
        vertical-align: middle;
    }
    .infoBox{
        width: 100%;
    }
    body{
        background-color: gray;
    }
</style>
<!--
<img src='gendermix.png' style="position: absolute; top: 125px; left: 260px; width: 30px; height: 45px;"/>
<img src='couple.png' style="position: absolute; top: 97px; left: 120px; width: 40px; height: 72px;"/>
-->
<div class="col-md-4">
    <a href='KwaZulu-Natal.php'><img src="KwaZulu-Natal.png" style="width: 400px; height: 400px;"/></a>
</div>
<div style="overflow:scroll; height: 400px; width: 441px; float: left;">
    <div id="population" style='float: left; margin-left: 30px;'></div>
    <div id="size" style='float: left; margin-left: 30px;'></div>
    <div id="gender" style='float: left; margin-left: 30px;'></div>
    <div id="race" style='float: left; margin-left: 30px; height:800px;'></div>
</div>
<div class="col-md-4" style='float: right;'>
    <a href="Limpopo.php"><img src="Limpopo.png" style="width: 400px; height: 400px;"/></a>
</div>

<div class='infoBox' style='float: left; margin-top: 20px;'>
    <div id="density" style='float: left; margin-left: 45px;'></div>
    <!--<div id="race" style='float: left; margin-left: 45px;'></div>-->
    <div id="income" style='float: left; margin-left: 45px;'></div>
    <div id="matric" style='float: left; margin-left: 45px;'></div>
</div>