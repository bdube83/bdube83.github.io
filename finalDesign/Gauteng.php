<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Area', 'Population'],
            ['Gauteng', 12272263],
            ['Rest of SA', 39498297]
        ]);
        var options = {
            title: 'Population of Gauteng VS the rest of SA',
            legend: 'bottom',
            backgroundColor: 'gray',
            width: 450,
            height: 225
        };
        var chart = new google.visualization.PieChart(document.getElementById('population'));
        chart.draw(data, options);
    }
</script>
<script type="text/javascript">
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Area', 'Size'],
            ['Gauteng', 18178],
            ['Rest of SA', 1202635]
        ]);
        var options = {
            title: 'Size (km) of Gauteng VS the rest of SA',
            legend: 'bottom',
            backgroundColor: 'gray',
            width: 450,
            height: 225
        };
        var chart = new google.visualization.PieChart(document.getElementById('size'));
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
            ['Area', 'Density', {role: 'annotation'}],
            ['Gauteng', 675.1, 675.1],
            ['South Africa', 42.4, 42.4]
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('density'));
        var options = {
            title: "Population Density of Gauteng VS South Africa",
            legend: 'bottom',
            //colors: ['black', 'white', 'brown', 'yellow', '#eee', '#ffffff'],
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
            ['Area', 'Male', {role: 'annotation'}, 'Female', {role: 'annotation'}],
            ['Gauteng', 50.5, '50.5%', 49.5, '49.5%'],
            ['South Africa', 48.7, '48.7%', 51.3, '51.3%']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('gender'));
        var options = {
            title: "Gender of Gauteng VS South Africa",
            legend: 'bottom',
            //colors: ['black', 'white', 'brown', 'yellow', '#eee', '#ffffff'],
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
            ['Area', 'Age', {role: 'annotation'}],
            ['Gauteng', 28, '28'],
            ['South Africa', 25, '25']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('age'));
        var options = {
            title: "Median Age of Gauteng VS South Africa",
            legend: 'bottom',
            //colors: ['black', 'white', 'brown', 'yellow', '#eee', '#ffffff'],
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
            ['Area', 'Matric Pass Rate', {role: 'annotation'}],
            ['Gauteng', 81.1, '81.1%'],
            ['South Africa', 70.2, '70.2%']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('matric'));
        var options = {
            title: "Matric Pass Rate of Gauteng VS South Africa",
            legend: 'bottom',
            //colors: ['black', 'white', 'brown', 'yellow', '#eee', '#ffffff'],
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
            ['Area', 'Annual Income', {role: 'annotation'}, {role: 'style'}],
            ['Gauteng', 156243, 'R156 243', '#4EBC03'],
            ['South Africa', 103204, 'R103 204', '#90BC04']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('income'));
        var options = {
            title: "Annual Income of Gauteng VS South Africa",
            legend: 'bottom',
            //colors: ['black', 'white', 'brown', 'yellow', '#eee', '#ffffff'],
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
            ['Race', 'Black', {role: 'annotation'}, 'White', {role: 'annotation'}, 'Indian/Asian', {role: 'annotation'}, 'Coloured', {role: 'annotation'}, 'Other', {role: 'annotation'}],
            ['', 9498732, '9 498 732', 1914473, '1 914 473', 355896, '355 896', 429529, '429 529', 85906, '85 906']
        ]);
        var chart = new google.visualization.BarChart(document.getElementById('race'));
        var options = {
            title: "Race breakdown of Gauteng",
            legend: 'bottom',
            colors: ['black', 'white', 'yellow', 'brown', 'purple', '#ffffff'],
            backgroundColor: 'gray',
            bar: {
                groupWidth: "100%"
            },
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
        height: 70%;
        vertical-align: middle;
    }
    .infoBox{
        background-color: red;
        opacity: 0.5;
        text-align: center;
        height: 400px;
    }
    body{
        background-color: gray;
    }
</style>

<div style="position: absolute; top: 20px; left: 300px; z-index: 1;">
    <a href="index.php"><img src="SA map2.png" class="compareBox"/></a>
</div>

<div style='float: left; width: 450px; height: 97%; overflow: scroll; direction: rtl;'>
    <div style="direction: ltr;">
        <div id="population" style="height: 210px"></div>
        <!--<span style="font-size: 11px; font-weight: bold; font-family: arial; position: absolute; left: 88px; top: 235px; z-index: 1;">Size (km<sup>2</sup>) of Eastern Cape VS the rest of SA</span>-->
        <div id="size" style="height: 210px"></div>
        <div id="density"></div>
        <div id="gender"></div>
        <div id="age"></div>
        <div id="matric"></div>
        <div id="income"></div>
    </div>
</div>
<!--
<img src='gendermix.png' style="position: absolute; top: 125px; left: 260px; width: 30px; height: 45px; transition: all .2s ease-in-out;"/>
<img src='couple.png' style="position: absolute; top: 97px; left: 120px; width: 40px; height: 72px;"/>
-->
<div style = "float: left;">
    <span class="verticalAlign"></span>
    <img src="Gauteng.png" style="vertical-align: middle; width: 516px; height: 341px;"/>
    <div style='margin-top: -20px;'>
        <div id="race"></div>
    </div>
</div>

<div>
    <h3 style="margin-left: 50px;">Compare With:</h3>
    <div style="height: 90%; overflow: scroll">
        <a href="ecVSg.php"><img src="Eastern Cape.png" class="compareBox"/></a>
        <h4 style="margin-left:50px;">Eastern Cape</h4>
        <a href="fsVSg.php"><img src="Free State.png" class="compareBox"/></a>
        <h4 style="margin-left:50px;">Free State</h4>
        <a href="gVSkzn.php"><img src="KwaZulu-Natal.png" class="compareBox"/></a>
        <h4 style="margin-left:50px;">KwaZulu-Natal</h4>
        <a href="gVSl.php"><img src="Limpopo.png" class="compareBox"/></a>
        <h4 style="margin-left:50px;">Limpopo</h4>
        <a href="gVSm.php"><img src="Mpumalanga.png" class="compareBox"/></a>
        <h4 style="margin-left:50px;">Mpumalanga</h4>
        <a href="gVSnw.php"><img src="North West.png" class="compareBox"/></a>
        <h4 style="margin-left:50px;">North West</h4>
        <a href="gVSnc.php"><img src="Northern Cape.png" class="compareBox"/></a>
        <h4 style="margin-left:50px;">Northern Cape</h4>
        <a href="gVSwc.php"><img src="Western Cape.png" class="compareBox"/></a>
        <h4 style="margin-left:50px;">Western Cape</h4>
    </div>
</div>