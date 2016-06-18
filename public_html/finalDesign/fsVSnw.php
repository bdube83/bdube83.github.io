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
            ['Population', 'Free State', {role: 'annotation'}, 'North West', {role: 'annotation'}],
            ['', 2745590, '2 745 590', 3509953, '3 509 953']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('population'));
        var options = {
            title: "Population comparison: Free State VS North West",
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
            ['Population', 'Free State', {role: 'annotation'}, 'North West', {role: 'annotation'}],
            ['', 129825, '129 825', 104882, '104 882']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('size'));
        var options = {
            title: "Size comparison: Free State VS North West",
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
            ['Gender', 'Free State', {role: 'annotation'}, 'North West', {role: 'annotation'}],
            ['Male', 48.5, '48.5%', 50.7, '50.7%'],
            ['Female', 51.5, '51.5%', 49.3, '49.3%']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('gender'));
        var options = {
            title: "Gender comparison: Free State VS North West",
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
            ['Population', 'Free State', {role: 'annotation'}, 'North West', {role: 'annotation'}],
            ['', 21.1, 21.1, 33.5, 33.5]
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('density'));
        var options = {
            title: "Population Density comparison: Free State VS North West",
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
            ['Race', 'Free State', {role: 'annotation'}, 'North West', {role: 'annotation'}],
            ['Black', 2405137, '2 405 137', 3151938, '3 151 938'],
            ['White', 238866, '238 866', 256227, '256 227'],
            ['Indian/Asian', 10982, '10 982', 21060, '21 060'],
            ['Coloured', 85113, '85 113', 70199, '70 199'],
            ['Other', 8237, '8 237', 10530, '10 530']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('race'));
        var options = {
            title: "Race comparison: Free State VS North West",
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
            ['Population', 'Free State', {role: 'annotation'}, 'North West', {role: 'annotation'}],
            ['', 75312, 'R75 312', 69955, 'R69 955']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('income'));
        var options = {
            title: "Income comparison: Free State VS North West",
            legend: 'bottom',
            colors: ['#BC6C04', '#BC4B07', 'yellow', 'brown', 'blue', '#ffffff'],
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
            ['Population', 'Free State', {role: 'annotation'}, 'North West', {role: 'annotation'}],
            ['', 75.7, '75.7%', 77.8, '77.8%']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('matric'));
        var options = {
            title: "Matric Pass Rate comparison: Free State VS North West",
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
    <a href='Free_State.php'><img src="Free State.png" style="width: 400px; height: 400px;"/></a>
</div>
<div style="overflow:scroll; height: 400px; width: 441px; float: left;">
    <div id="population" style='float: left; margin-left: 30px;'></div>
    <div id="size" style='float: left; margin-left: 30px;'></div>
    <div id="gender" style='float: left; margin-left: 30px;'></div>
    <div id="race" style='float: left; margin-left: 30px; height:800px;'></div>
</div>
<div class="col-md-4" style='float: right;'>
    <a href="North_West.php"><img src="North West.png" style="width: 400px; height: 400px;"/></a>
</div>

<div class='infoBox' style='float: left; margin-top: 20px;'>
    <div id="density" style='float: left; margin-left: 45px;'></div>
    <!--<div id="race" style='float: left; margin-left: 45px;'></div>-->
    <div id="income" style='float: left; margin-left: 45px;'></div>
    <div id="matric" style='float: left; margin-left: 45px;'></div>
</div>