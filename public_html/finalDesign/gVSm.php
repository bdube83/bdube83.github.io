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
            ['Population', 'Gauteng', {role: 'annotation'}, 'Mpumalanga', {role: 'annotation'}],
            ['', 12272263, '12 272 263', 4039939, '4 039 939']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('population'));
        var options = {
            title: "Population comparison: Gauteng VS Mpumalanga",
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
            ['Population', 'Gauteng', {role: 'annotation'}, 'Mpumalanga', {role: 'annotation'}],
            ['', 18178, '18 178', 76495, '76 495']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('size'));
        var options = {
            title: "Size comparison: Gauteng VS Mpumalanga",
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
            ['Gender', 'Gauteng', {role: 'annotation'}, 'Mpumalanga', {role: 'annotation'}],
            ['Male', 50.5, '50.5%', 49.0, '49.0%'],
            ['Female', 49.5, '49.5%', 51.0, '51.0%']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('gender'));
        var options = {
            title: "Gender comparison: Gauteng VS Mpumalanga",
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
            ['Population', 'Gauteng', {role: 'annotation'}, 'Mpumalanga', {role: 'annotation'}],
            ['', 675.1, 675.1, 52.8, 52.8]
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('density'));
        var options = {
            title: "Population Density comparison: Gauteng VS Mpumalanga",
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
            ['Race', 'Gauteng', {role: 'annotation'}, 'Mpumalanga', {role: 'annotation'}],
            ['Black', 9498732, '9 498 732', 3664225, '3 664 224'],
            ['White', 1914473, '1 914 473', 302995, '302 995'],
            ['Indian/Asian', 355896, '355 896', 28280, '28 280'],
            ['Coloured', 429529, '429 529', 36359, '36 359'],
            ['Other', 85906, '85 906', 8080, '8 080']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('race'));
        var options = {
            title: "Race comparison: Gauteng VS Mpumalanga",
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
            ['Population', 'Gauteng', {role: 'annotation'}, 'Mpumalanga', {role: 'annotation'}],
            ['', 156243, 'R156 243', 77609, 'R77 609']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('income'));
        var options = {
            title: "Income comparison: Gauteng VS Mpumalanga",
            legend: 'bottom',
            colors: ['#4EBC03', '#BB8B07', 'yellow', 'brown', 'blue', '#ffffff'],
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
            ['Population', 'Gauteng', {role: 'annotation'}, 'Mpumalanga', {role: 'annotation'}],
            ['', 81.1, '81.1%', 64.8, '64.8%']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('matric'));
        var options = {
            title: "Matric Pass Rate comparison: Gauteng VS Mpumalanga",
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
    <a href='Gauteng.php'><img src="Gauteng.png" style="width: 400px; height: 400px;"/></a>
</div>
<div style="overflow:scroll; height: 400px; width: 441px; float: left;">
    <div id="population" style='float: left; margin-left: 30px;'></div>
    <div id="size" style='float: left; margin-left: 30px;'></div>
    <div id="gender" style='float: left; margin-left: 30px;'></div>
    <div id="race" style='float: left; margin-left: 30px; height:800px;'></div>
</div>
<div class="col-md-4" style='float: right;'>
    <a href="Mpumalanga.php"><img src="Mpumalanga.png" style="width: 400px; height: 400px;"/></a>
</div>

<div class='infoBox' style='float: left; margin-top: 20px;'>
    <div id="density" style='float: left; margin-left: 45px;'></div>
    <!--<div id="race" style='float: left; margin-left: 45px;'></div>-->
    <div id="income" style='float: left; margin-left: 45px;'></div>
    <div id="matric" style='float: left; margin-left: 45px;'></div>
</div>