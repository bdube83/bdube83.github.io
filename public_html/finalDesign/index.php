<head>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style4.css" />
    <script src="js/modernizr-custom.js"></script>
    <script src="bootstrap-4.0.0-alpha.2\js\tests\vendor\jquery.min.js"></script>
    <script src="bootstrap-4.0.0-alpha.2\js\tests\vendor\tether.min.js"></script>
    <script src="bootstrap-4.0.0-alpha.2\dist\js\bootstrap.min.js"></script>

    <script>
        // stores the device context of the canvas we use to draw the outlines
        // initialized in myInit, used in myHover and myLeave
        var hdc;

        // shorthand func
        function byId(e) {
            return document.getElementById(e);
        }

        // takes a string that contains coords eg - "227,307,261,309, 339,354, 328,371, 240,331"
        // draws a line from each co-ord pair to the next - assumes starting point needs to be repeated as ending point.
        function drawPoly(coOrdStr)
        {
            var mCoords = coOrdStr.split(',');
            var i, n;
            n = mCoords.length;

            hdc.beginPath();
            hdc.moveTo(mCoords[0], mCoords[1]);
            for (i = 2; i < n; i += 2)
            {
                hdc.lineTo(mCoords[i], mCoords[i + 1]);
            }
            hdc.lineTo(mCoords[0], mCoords[1]);
            hdc.stroke();
        }

        function myHover(element)
        {
            var hoveredElement = element;
            var coordStr = element.getAttribute('coords');

            drawPoly(coordStr);

            var start = coordStr.substr(0, 3);

            switch (start) {
                case "260":
                    document.getElementById("northernCape").style.display = "block";
                    document.getElementById("SA").style.display = "none";
                    break;
                case "427":
                    document.getElementById("northWest").style.display = "block";
                    document.getElementById("SA").style.display = "none";
                    break;
                case "662":
                    document.getElementById("limpopo").style.display = "block";
                    document.getElementById("SA").style.display = "none";
                    break;
                case "100":
                    document.getElementById("mpumalanga").style.display = "block";
                    document.getElementById("SA").style.display = "none";
                    break;
                case "799":
                    document.getElementById("gauteng").style.display = "block";
                    document.getElementById("SA").style.display = "none";
                    break;
                case "101":
                    document.getElementById("kwaZulu-Natal").style.display = "block";
                    document.getElementById("SA").style.display = "none";
                    break;
                case "898":
                    document.getElementById("easternCape").style.display = "block";
                    document.getElementById("SA").style.display = "none";
                    break;
                case "530":
                    document.getElementById("freeState").style.display = "block";
                    document.getElementById("SA").style.display = "none";
                    break;
                case "158":
                    document.getElementById("westernCape").style.display = "block";
                    document.getElementById("SA").style.display = "none";
                    break;
            }
        }

        function myLeave()
        {
            var canvas = byId('myCanvas');
            hdc.clearRect(0, 0, canvas.width, canvas.height);
            document.getElementById("northernCape").style.display = "none";
            document.getElementById("northWest").style.display = "none";
            document.getElementById("limpopo").style.display = "none";
            document.getElementById("mpumalanga").style.display = "none";
            document.getElementById("gauteng").style.display = "none";
            document.getElementById("kwaZulu-Natal").style.display = "none";
            document.getElementById("easternCape").style.display = "none";
            document.getElementById("westernCape").style.display = "none";
            document.getElementById("freeState").style.display = "none";
            document.getElementById("SA").style.display = "block"
        }

        function myInit()
        {
            // get the target image
            var img = byId('imgmap');

            var x, y, w, h;

            // get it's position and width+height
            x = img.offsetLeft;
            y = img.offsetTop;
            w = img.clientWidth;
            h = img.clientHeight;

            // move the canvas, so it's contained by the same parent as the image
            var imgParent = img.parentNode;
            var can = byId('myCanvas');
            imgParent.appendChild(can);

            // place the canvas in front of the image
            can.style.zIndex = 1;

            // position it over the image
            can.style.left = x + 'px';
            can.style.top = y + 'px';

            // make same size as the image
            can.setAttribute('width', w + 'px');
            can.setAttribute('height', h + 'px');

            // get it's context
            hdc = can.getContext('2d');

            // set the 'default' values for the colour/width of fill/stroke operations
            hdc.fillStyle = 'red';
            hdc.strokeStyle = 'red';
            hdc.lineWidth = 2;
        }
    </script>

    <style>
        body
        {
            background-color: gray;
        }
        canvas
        {
            pointer-events: none;       /* make the canvas transparent to the mouse - needed since canvas is position infront of image */
            position: absolute;
        }
        .infoBox{
            display: none;
            position: fixed;
            top: 7px;
            right: 0;
            width: 230px;
            height: 98%;
            margin-right: 7px;
            //background-color: red;
            opacity: 0.9;
            background-color: #333;
            color: white;
        }
        .key{
            position: fixed;
            top: 10px;
            left: 0;
            //width: 535px;
            //height: 371px;
            margin-left: 10px;
            //background-color: white;
            //background-image: url("KEY.png");
            opacity: 0.9;
        }
        h4{
            text-align: center;
        }
        .tdName{
            width: 52%;
        }
    </style>
</head>


<body onload="myInit()">
    <div style="float: left;">
        <canvas id='myCanvas'></canvas>
        <img id = "imgmap" src="SA map2.png" alt="" usemap="#Map" style="width: 1096px; height: 972px"/>
        <map name="Map" id="Map">
            <area onmouseover="myHover(this);" onmouseout="myLeave();" alt="" title="" href="Northern_Cape.php" shape="poly" coords="260,208,260,466,254,467,249,471,245,474,243,469,242,475,237,474,232,475,231,479,228,486,225,488,219,489,214,492,215,497,217,501,210,504,208,508,200,504,196,501,187,498,179,497,170,497,167,497,162,500,154,501,146,502,141,502,137,497,132,493,130,492,125,492,118,491,113,492,111,493,111,489,108,486,106,486,104,487,98,487,98,481,96,478,95,475,95,472,99,465,100,463,97,460,97,451,92,455,92,452,86,451,86,446,82,442,80,441,78,441,74,441,69,444,66,444,63,447,60,453,57,454,56,458,61,463,61,466,56,470,51,470,45,473,42,477,39,481,49,491,47,498,47,502,55,504,57,513,61,521,65,533,69,539,76,556,79,568,87,586,93,609,96,614,103,629,108,643,117,657,123,664,125,656,129,648,132,643,136,643,139,646,144,643,149,639,155,632,158,625,162,626,161,621,164,617,170,624,178,626,179,632,185,636,190,637,191,640,191,644,187,647,184,648,186,650,189,653,185,656,185,666,187,669,187,675,194,681,194,687,194,694,199,702,196,708,193,713,201,720,197,727,206,727,210,727,212,731,217,732,220,737,225,738,222,748,220,752,226,757,225,765,225,770,231,778,233,774,231,769,231,764,235,763,239,760,244,759,248,756,255,755,259,749,262,747,266,747,272,743,271,746,270,750,267,754,267,758,262,760,259,764,262,768,265,773,265,777,270,780,274,785,277,787,278,793,283,794,288,796,291,796,295,796,298,796,302,796,309,792,309,788,309,784,310,777,319,777,325,776,330,771,332,763,342,752,353,752,356,745,363,745,366,744,377,749,385,741,384,737,388,736,391,736,391,731,387,730,389,727,389,725,389,721,392,717,395,714,399,706,400,704,400,702,420,709,418,716,426,715,432,718,437,719,446,721,449,725,463,716,463,709,478,707,491,704,498,708,502,716,507,709,514,716,519,713,527,713,529,711,541,711,542,696,544,689,558,686,573,677,578,680,587,673,594,673,595,670,602,663,600,661,603,658,603,654,605,650,601,647,604,645,601,641,599,627,592,627,586,619,575,618,578,614,574,606,570,605,565,601,559,588,550,582,550,578,546,577,538,574,531,568,564,490,562,481,565,470,568,462,573,450,567,448,561,435,574,422,559,420,558,414,550,418,552,422,551,427,552,431,545,441,548,442,548,445,542,446,541,449,537,444,536,439,533,436,536,427,537,424,537,419,518,424,518,415,511,415,511,398,504,390,510,374,501,361,477,352,484,343,475,338,465,334,462,321,459,317,464,310,461,309,462,303,468,304,470,299,451,301,450,304,448,306,444,306,444,310,441,309,437,319,433,331,427,327,427,306,422,304,422,306,417,305,411,306,412,311,408,315,403,316,400,317,398,322,397,326,391,330,386,337,382,339,376,338,374,338,374,342,373,347,370,349,365,350,360,350,354,353,350,347,349,349,346,349,342,350,339,350,333,353,325,349,323,349,319,348,313,347,303,354,300,344,300,338,300,334,297,327,302,320,308,311,312,305,312,301,312,297,312,289,312,286,309,279,304,271,301,269,307,263,300,257,302,254,299,251,296,246,290,238,290,232,282,221,282,224,275,216,269,214" />
            <area onmouseover="myHover(this);" onmouseout="myLeave();" alt="" title="" href="North_West.php" shape="poly" coords="427,307,422,306,429,298,428,293,431,292,432,288,432,286,432,284,434,280,434,277,436,274,436,272,438,269,436,266,440,265,440,263,440,261,440,256,442,256,453,244,460,243,465,241,471,242,475,244,478,241,485,247,492,252,509,265,512,265,522,265,535,275,542,274,548,276,550,277,554,279,560,279,564,279,570,277,578,273,597,275,616,263,620,245,623,236,633,214,631,204,661,199,662,212,674,216,683,221,684,218,687,216,701,209,701,221,705,222,709,227,712,225,713,231,719,231,720,234,727,233,730,232,735,235,738,228,746,228,749,226,754,228,757,228,761,226,769,226,777,232,774,235,770,234,767,236,772,243,776,243,780,249,777,254,772,252,771,255,768,254,767,256,761,253,760,257,763,261,763,267,761,267,759,268,760,273,760,285,756,289,752,288,746,292,745,288,740,288,737,284,732,289,729,292,726,307,719,313,719,316,719,322,711,328,714,335,709,339,713,343,713,345,723,343,726,347,736,347,738,352,731,357,732,363,723,367,717,361,711,368,698,369,695,364,692,370,687,367,683,367,680,371,680,375,676,374,673,377,673,379,672,381,669,381,667,384,664,385,666,389,666,397,668,400,655,401,650,401,649,407,639,420,637,422,633,419,632,416,628,416,617,417,614,421,608,418,599,422,594,427,589,426,589,432,585,435,580,436,578,442,573,447,568,450,562,437,574,422,561,422,557,419,556,416,551,420,551,424,552,427,552,430,549,436,546,440,547,443,543,449,534,443,538,440,533,438,537,431,534,424,537,420,531,420,523,423,517,424,517,417,513,414,513,403,511,401,513,397,502,389,509,378,505,362,499,363,477,353,483,347,475,336,466,336,461,322,463,312,463,310,460,308,459,306,462,304,466,304,469,304,469,300,451,299,450,306,446,313,441,313,439,313,435,327,432,332,427,328" />
            <area onmouseover="myHover(this);" onmouseout="myLeave();" alt="" title="" href="Limpopo.php" shape="poly" coords="662,198,671,193,670,186,685,175,693,172,694,164,694,159,695,154,697,147,699,139,701,134,701,127,708,130,709,125,709,121,714,118,721,116,724,112,730,112,732,109,736,112,738,109,737,105,739,101,744,99,747,99,750,99,751,97,755,92,762,90,761,86,768,77,769,74,776,69,776,65,780,60,791,55,795,56,800,54,806,54,812,51,815,49,820,48,825,45,825,36,830,32,836,31,842,27,849,29,856,26,864,27,868,26,872,24,890,29,900,36,905,36,911,38,919,38,923,38,925,38,928,38,931,37,936,37,939,36,947,35,954,35,958,39,966,39,976,43,991,100,987,119,992,131,998,133,998,145,1006,153,997,157,997,163,992,157,987,159,984,161,981,158,976,163,965,163,964,159,959,163,958,167,954,179,966,178,967,181,964,186,966,191,966,198,953,198,948,193,944,191,940,191,936,188,934,195,934,198,934,203,934,208,929,211,930,219,923,222,921,220,919,224,915,220,910,220,903,220,903,218,900,223,900,231,897,233,897,238,891,234,888,235,891,253,883,253,879,257,874,256,873,259,868,255,858,260,855,258,849,258,846,253,841,256,835,255,835,249,831,249,829,240,833,235,828,232,824,234,822,229,818,228,822,222,810,222,805,227,801,229,801,234,795,235,793,241,787,239,788,243,800,239,804,244,803,248,797,248,792,247,792,250,789,251,779,251,777,245,773,245,769,236,771,235,774,235,778,234,767,227,760,227,762,225,755,228,749,227,742,229,742,227,737,227,736,233,731,231,724,236,718,232,711,232,712,227,709,227,707,221,703,223,698,208,698,211,684,217,680,219,676,216,669,216,660,212" />
            <area onmouseover="myHover(this);" onmouseout="myLeave();" alt="" title="" href="Mpumalanga.php" shape="poly" coords="1007,154,997,158,998,162,993,160,989,160,987,159,984,162,983,160,974,164,965,164,965,160,961,165,960,167,955,176,958,181,967,179,969,181,966,185,964,185,967,188,966,191,967,196,965,197,949,200,949,194,943,194,938,191,937,200,933,203,935,204,929,211,930,217,929,220,921,220,921,224,915,220,912,221,904,221,902,217,901,230,895,232,897,235,895,237,892,233,889,234,889,240,890,253,884,252,879,256,877,256,874,258,872,257,866,256,861,259,856,259,853,259,850,259,846,257,842,258,839,257,835,257,836,255,837,251,834,250,829,250,829,240,833,237,830,232,826,234,819,227,822,224,812,221,805,226,802,232,796,233,794,237,790,237,788,242,796,242,798,237,805,236,811,236,812,243,808,248,804,251,804,259,803,267,807,272,807,278,816,280,817,275,816,269,810,266,815,264,820,269,823,270,826,264,831,264,830,270,828,275,819,277,824,281,823,288,819,292,819,296,818,300,809,300,805,298,800,302,795,303,793,308,798,313,801,319,806,323,811,323,814,325,814,329,813,334,810,340,802,339,796,337,797,343,787,349,791,354,786,356,783,357,779,363,784,368,789,368,790,371,795,369,797,375,805,372,817,377,823,373,830,377,833,380,842,383,845,384,850,386,856,392,860,403,862,406,871,407,878,402,880,400,888,399,894,399,900,399,907,395,911,392,923,397,936,395,941,393,947,394,950,394,955,394,961,392,967,392,971,382,962,379,952,372,949,366,947,359,946,352,942,355,939,326,959,296,977,274,1009,296,1013,291,1010,284,1014,275,1016,181,1009,169" />
            <area onmouseover="myHover(this);" onmouseout="myLeave();" alt="" title="" href="Gauteng.php" shape="poly" coords="799,239,801,236,807,238,809,235,812,240,812,245,806,246,805,253,800,263,800,267,803,271,804,277,809,276,814,276,815,272,814,268,811,268,813,265,818,265,825,268,826,266,830,266,830,272,826,273,823,276,823,279,823,283,823,290,821,291,819,296,818,298,815,302,810,303,803,299,797,302,795,303,793,308,795,313,799,317,802,319,806,321,809,324,814,325,816,328,808,333,804,336,799,338,792,338,794,342,794,346,791,348,789,349,788,356,782,358,778,361,776,363,772,363,768,362,765,362,761,357,760,354,759,350,753,350,751,352,747,353,743,355,741,355,739,355,737,355,735,350,733,344,727,345,724,346,722,340,720,346,717,346,711,346,714,345,711,343,709,341,715,337,715,335,713,333,712,328,718,326,721,323,717,309,723,309,726,300,729,293,741,287,747,293,750,293,753,293,753,290,757,289,758,283,761,281,761,275,762,271,762,265,762,260,761,258,760,254,765,254,772,258,775,254,780,251,786,251,789,251,792,251,795,251,795,248,799,248,802,247,803,244" />
            <area onmouseover="myHover(this);" onmouseout="myLeave();" alt="" title="" href="KwaZulu-Natal.php" shape="poly" coords="1014,387,1014,353,1020,352,1026,356,1027,353,1037,357,1071,358,1052,421,1049,450,1042,463,1042,476,1011,502,998,507,955,567,954,574,898,664,895,652,892,649,889,647,889,643,880,645,877,639,869,636,867,636,859,636,857,630,848,635,841,631,837,633,832,627,837,618,843,613,843,608,834,608,833,605,833,594,826,582,837,574,832,570,834,569,834,562,839,555,843,555,843,553,846,550,844,543,847,542,851,537,852,532,852,525,848,524,848,514,844,515,840,515,841,511,827,500,823,502,824,493,820,491,823,486,823,483,832,483,836,483,837,479,839,476,845,472,853,467,858,463,860,462,863,462,864,458,863,456,868,456,866,451,867,448,867,442,866,439,869,434,872,429,872,423,870,419,870,415,872,412,872,408,874,404,878,404,879,398,886,397,887,400,894,400,898,400,902,398,904,398,907,394,912,393,918,392,919,395,925,394,933,391,940,392,944,395,946,392,951,395,955,395,958,394,961,391,964,393,972,383,979,388" />
            <area onmouseover="myHover(this);" onmouseout="myLeave();" alt="" title="" href="Eastern_Cape.php" shape="poly" coords="898,663,879,686,875,687,850,706,850,713,838,725,835,725,830,735,781,782,778,784,772,790,770,794,701,845,697,844,687,850,666,860,654,860,644,856,636,855,624,855,613,869,619,877,613,881,607,878,594,877,584,874,580,874,571,877,570,884,568,885,567,893,541,888,540,885,532,886,522,883,501,880,487,876,492,870,486,864,484,864,481,859,470,861,472,857,473,853,479,851,488,849,484,845,484,843,483,837,478,835,478,832,468,834,464,831,454,828,443,829,428,830,431,823,443,805,441,802,444,798,446,793,450,793,451,788,454,789,464,788,474,788,466,785,467,782,463,779,466,773,461,766,460,763,466,756,471,755,478,755,487,754,487,749,491,745,497,744,501,747,508,745,516,741,516,737,515,733,522,728,517,724,514,724,519,715,520,710,522,710,526,710,533,709,540,709,541,701,541,695,544,692,549,689,558,686,564,686,570,679,578,676,584,673,591,673,596,673,596,670,602,664,603,656,606,655,604,649,601,647,605,646,604,642,601,635,606,630,615,638,630,631,630,626,637,626,643,626,645,624,651,624,652,630,659,630,662,626,667,629,670,633,676,634,681,636,686,636,690,635,694,633,704,630,704,627,709,625,713,622,719,619,723,616,724,609,725,603,727,603,730,606,731,609,735,609,739,614,742,616,742,620,748,623,754,624,768,629,770,623,775,617,770,610,777,612,780,612,779,608,779,602,776,602,785,599,785,594,792,591,799,592,811,590,820,587,823,586,825,583,830,588,830,596,833,604,842,606,844,609,844,614,839,616,836,621,832,627,840,633,848,632,854,632,858,631,861,631,866,634,871,636,876,637,881,639,880,644,886,641,888,649,891,650,895,650,896,656,896,658" />
            <area onmouseover="myHover(this);" onmouseout="myLeave();" alt="" title="" href="Free_State.php" shape="poly" coords="530,563,565,489,563,487,563,480,563,476,565,472,566,467,567,461,573,453,573,448,578,446,580,439,583,437,586,434,590,431,592,426,597,425,604,421,614,418,623,417,626,415,632,415,636,422,641,421,642,415,645,410,648,409,648,403,653,402,666,402,671,403,667,398,666,395,666,391,665,389,664,385,669,385,672,379,674,376,678,374,685,368,688,368,693,367,694,365,699,368,703,370,706,370,710,370,717,367,716,361,720,363,722,364,727,363,729,362,733,357,738,356,747,356,752,354,758,351,759,348,763,356,767,359,772,362,778,364,784,366,786,366,788,371,791,369,794,369,794,374,800,374,802,372,808,371,811,372,815,374,819,377,820,373,826,372,832,380,837,383,847,387,851,388,855,395,858,400,864,405,865,408,869,409,872,410,872,412,869,416,870,421,872,428,870,431,867,435,866,440,866,448,865,451,865,454,864,458,862,460,858,460,854,463,851,465,847,469,843,472,841,474,835,477,839,480,832,482,827,482,820,485,817,489,814,490,812,487,808,483,807,479,805,475,803,475,797,478,793,478,789,482,786,482,779,483,776,483,772,491,761,494,766,497,759,499,753,500,748,503,747,507,744,510,738,515,736,520,733,525,731,529,728,534,725,538,722,540,719,544,713,549,705,554,697,556,705,563,708,566,714,575,719,583,721,590,730,593,728,601,726,602,724,608,723,614,723,618,720,620,715,626,705,626,701,634,697,634,690,635,685,635,680,637,677,637,673,637,672,635,671,631,669,631,667,631,663,628,659,628,652,628,649,626,646,620,645,626,640,626,636,627,631,628,627,631,619,635,614,635,609,634,607,630,602,633,598,627,590,626,567,603,560,593,559,585,550,586,552,581,549,580,544,579,535,571" />
            <area onmouseover="myHover(this);" onmouseout="myLeave();" alt="" title="" href="Western_Cape.php" shape="poly" coords="158,747,155,744,155,741,154,737,154,732,154,728,152,722,151,719,151,716,147,709,145,706,141,698,136,691,135,685,128,679,126,672,121,670,120,666,126,662,124,659,124,657,129,654,133,643,143,646,154,625,156,622,162,626,161,618,165,618,168,621,173,627,176,627,180,634,180,636,187,637,188,643,188,648,187,650,182,659,185,663,186,666,190,668,190,671,190,680,192,681,193,685,191,686,196,694,196,697,196,703,196,708,194,714,193,721,203,724,210,724,216,731,220,733,223,736,224,747,222,753,217,753,221,759,222,765,228,773,229,778,229,770,233,768,233,765,237,762,243,759,253,754,254,751,260,750,264,747,267,744,270,744,270,747,265,756,262,758,260,760,264,770,264,776,268,781,271,788,275,788,284,794,287,796,289,796,295,796,299,796,304,793,310,788,310,786,310,780,313,777,320,777,327,777,330,772,331,769,333,765,336,764,337,761,340,758,344,756,349,756,353,755,355,752,355,750,358,747,363,747,366,747,371,750,377,748,379,746,386,744,382,741,385,736,390,736,388,733,388,728,389,725,386,724,390,721,394,718,395,716,395,712,399,709,399,707,399,705,399,703,403,701,401,701,408,701,410,703,420,710,419,717,424,717,429,717,429,720,446,720,450,720,451,724,454,726,460,725,460,719,461,717,466,711,471,710,477,708,486,705,492,705,496,708,496,714,505,715,507,712,511,710,515,714,517,717,513,720,518,720,520,728,517,730,516,736,510,740,506,743,500,745,496,745,495,743,489,745,485,752,470,755,468,756,460,756,460,758,460,761,460,766,462,772,468,775,468,782,470,783,470,787,461,787,459,787,452,787,449,784,450,790,449,792,446,792,444,794,441,800,440,804,442,811,441,816,437,819,432,825,430,828,440,829,446,830,455,830,461,830,466,830,472,830,480,837,486,841,486,847,483,850,479,851,470,855,470,859,473,860,478,860,480,862,485,863,488,868,489,873,483,877,479,877,475,879,473,883,470,886,465,886,458,885,456,884,447,884,441,882,438,882,428,877,423,877,419,877,414,880,398,885,393,886,393,888,397,891,390,892,383,894,379,896,380,901,376,905,373,905,367,905,363,905,358,905,352,904,347,906,340,907,337,909,334,909,332,909,327,905,324,905,319,905,313,906,317,913,305,911,293,911,289,911,286,923,284,924,280,925,278,925,275,930,273,929,270,931,267,932,266,939,261,942,256,942,255,940,253,938,250,937,244,935,241,934,238,934,232,930,229,927,227,926,227,924,222,924,220,924,217,924,218,920,220,917,211,912,218,912,215,909,210,908,204,908,207,904,200,904,190,906,184,900,188,898,188,893,187,891,186,888,181,884,173,883,168,886,163,889,162,896,166,899,166,905,163,906,159,898,158,893,154,884,157,882,155,881,155,877,159,875,159,873,159,871,162,867,166,865,166,862,163,860,161,856,159,853,159,848,154,839,152,836,151,834,146,832,144,830,144,824,140,817,134,816,133,814,131,811,130,809,128,805,128,803,127,800,126,797,126,793,126,790,125,788,125,785,125,782,131,784,129,784,131,781,136,783,139,785,143,785,144,783,150,781,153,777,153,770,156,767,155,752,156,750" />
        </map>
    </div>

    <img src="Northern Cape.png" style="position:absolute; top: 215px; left: 45px; display: none;">

    <div class="key">
        <img src="KEY.png" style="width: 400px; height: 200px;">
    </div>

    <div id="northernCape" class='infoBox'>
        <h4>Information on Northern Cape:</h4>
        <table style="color: white; width: 210px; margin: 10px;">
            <tbody>
                <tr>
                    <td class="tdName">Population:</td>
                    <td style="text-align:right;">1 145 861</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Size (km<sup>2</sup>):</td>
                    <td style="text-align:right;">372 889</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Population Density:</td>
                    <td style="text-align:right;">3.1 pop/km<sup>2</sup></td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Male:</td>
                    <td style="text-align:right;">49.2%</td>
                </tr>
                <tr>
                    <td class="tdName">Female:</td>
                    <td style="text-align:right;">50.8%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Median Age:</td>
                    <td style="text-align:right;">26</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:black">
                    <td class="tdName">Black African:</td>
                    <td style="text-align:right;">50.4%</td>
                </tr>
                <tr style="background-color:white; color: black;">
                    <td class="tdName">White:</td>
                    <td style="text-align:right;">7.1%</td>
                </tr>
                <tr style="background-color:yellow; color: black;">
                    <td class="tdName">Indian / Asian:</td>
                    <td style="text-align:right;">0.7%</td>
                </tr>
                <tr style="background-color:brown">
                    <td class="tdName">Coloured:</td>
                    <td style="text-align:right;">40.3%</td>
                </tr>
                <tr style="background-color:purple">
                    <td class="tdName">Other:</td>
                    <td style="text-align:right;">1.6%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Matric Pass Rate:</td>
                    <td style="text-align:right;">68.8%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:#9BBC05; color: black;">
                    <td class="tdName">Average Annual Income:</td>
                    <td style="text-align:right;">R86 175</td>
                </tr>
            </tbody></table>
    </div>
    <div id="northWest" class='infoBox'>
        <h4>Information on North West:</h4>
        <table style="color: white; width: 210px; margin: 10px;">
            <tbody>
                <tr>
                    <td class="tdName">Population:</td>
                    <td style="text-align:right;">3 509 953</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Size (km<sup>2</sup>):</td>
                    <td style="text-align:right;">104 882</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Population Density:</td>
                    <td style="text-align:right;">33.5 pop/km<sup>2</sup></td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Male:</td>
                    <td style="text-align:right;">50.7%</td>
                </tr>
                <tr>
                    <td class="tdName">Female:</td>
                    <td style="text-align:right;">49.3%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Median Age:</td>
                    <td style="text-align:right;">26</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:black">
                    <td class="tdName">Black African:</td>
                    <td style="text-align:right;">89.8%</td>
                </tr>
                <tr style="background-color:white; color: black;">
                    <td class="tdName">White:</td>
                    <td style="text-align:right;">7.3%</td>
                </tr>
                <tr style="background-color:yellow; color: black;">
                    <td class="tdName">Indian / Asian:</td>
                    <td style="text-align:right;">0.6%</td>
                </tr>
                <tr style="background-color:brown">
                    <td class="tdName">Coloured:</td>
                    <td style="text-align:right;">2.0%</td>
                </tr>
                <tr style="background-color:purple">
                    <td class="tdName">Other:</td>
                    <td style="text-align:right;">0.3%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Matric Pass Rate:</td>
                    <td style="text-align:right;">77.8%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:#BC4B07; color: black;">
                    <td class="tdName">Average Annual Income:</td>
                    <td style="text-align:right;">R69 955</td>
                </tr>
            </tbody></table>
    </div>
    <div id="limpopo" class='infoBox'>
        <h4>Information on Limpopo:</h4>
        <table style="color: white; width: 210px; margin: 10px;">
            <tbody>
                <tr>
                    <td class="tdName">Population:</td>
                    <td style="text-align:right;">5 404 868</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Size (km<sup>2</sup>):</td>
                    <td style="text-align:right;">125 754</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Population Density:</td>
                    <td style="text-align:right;">43.0 pop/km<sup>2</sup></td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Male:</td>
                    <td style="text-align:right;">46.8%</td>
                </tr>
                <tr>
                    <td class="tdName">Female:</td>
                    <td style="text-align:right;">53.2%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Median Age:</td>
                    <td style="text-align:right;">22</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:black">
                    <td class="tdName">Black African:</td>
                    <td style="text-align:right;">96.7%</td>
                </tr>
                <tr style="background-color:white; color: black;">
                    <td class="tdName">White:</td>
                    <td style="text-align:right;">2.6%</td>
                </tr>
                <tr style="background-color:yellow; color: black;">
                    <td class="tdName">Indian / Asian:</td>
                    <td style="text-align:right;">0.3%</td>
                </tr>
                <tr style="background-color:brown">
                    <td class="tdName">Coloured:</td>
                    <td style="text-align:right;">0.3%</td>
                </tr>
                <tr style="background-color:purple">
                    <td class="tdName">Other:</td>
                    <td style="text-align:right;">0.2%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Matric Pass Rate:</td>
                    <td style="text-align:right;">63.9%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:#B30A05; color: black;">
                    <td class="tdName">Average Annual Income:</td>
                    <td style="text-align:right;">R56 844</td>
                </tr>
            </tbody></table>
    </div>
    <div id="mpumalanga" class='infoBox'>
        <h4>Information on Mpumalanga:</h4>
        <table style="color: white; width: 210px; margin: 10px;">
            <tbody>
                <tr>
                    <td class="tdName">Population:</td>
                    <td style="text-align:right;">4 039 939</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Size (km<sup>2</sup>):</td>
                    <td style="text-align:right;">76 495</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Population Density:</td>
                    <td style="text-align:right;">52.8 pop/km<sup>2</sup></td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Male:</td>
                    <td style="text-align:right;">49.0%</td>
                </tr>
                <tr>
                    <td class="tdName">Female:</td>
                    <td style="text-align:right;">51.0%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Median Age:</td>
                    <td style="text-align:right;">24</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:black">
                    <td class="tdName">Black African:</td>
                    <td style="text-align:right;">90.7%</td>
                </tr>
                <tr style="background-color:white; color: black;">
                    <td class="tdName">White:</td>
                    <td style="text-align:right;">7.5%</td>
                </tr>
                <tr style="background-color:yellow; color: black;">
                    <td class="tdName">Indian / Asian:</td>
                    <td style="text-align:right;">0.7%</td>
                </tr>
                <tr style="background-color:brown">
                    <td class="tdName">Coloured:</td>
                    <td style="text-align:right;">0.9%</td>
                </tr>
                <tr style="background-color:purple">
                    <td class="tdName">Other:</td>
                    <td style="text-align:right;">0.2%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Matric Pass Rate:</td>
                    <td style="text-align:right;">64.8%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:#BB8B07; color: black;">
                    <td class="tdName">Average Annual Income:</td>
                    <td style="text-align:right;">R77 609</td>
                </tr>
            </tbody></table>
    </div>
    <div id="kwaZulu-Natal" class='infoBox'>
        <h4>Information on KwaZulu-Natal:</h4>
        <table style="color: white; width: 210px; margin: 10px;">
            <tbody>
                <tr>
                    <td class="tdName">Population:</td>
                    <td style="text-align:right;">10 267 300</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Size (km<sup>2</sup>):</td>
                    <td style="text-align:right;">94 361</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Population Density:</td>
                    <td style="text-align:right;">108.8 pop/km<sup>2</sup></td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Male:</td>
                    <td style="text-align:right;">47.6%</td>
                </tr>
                <tr>
                    <td class="tdName">Female:</td>
                    <td style="text-align:right;">52.4%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Median Age:</td>
                    <td style="text-align:right;">23</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:black">
                    <td class="tdName">Black African:</td>
                    <td style="text-align:right;">86.8%</td>
                </tr>
                <tr style="background-color:white; color: black;">
                    <td class="tdName">White:</td>
                    <td style="text-align:right;">4.2%</td>
                </tr>
                <tr style="background-color:yellow; color: black;">
                    <td class="tdName">Indian / Asian:</td>
                    <td style="text-align:right;">7.4%</td>
                </tr>
                <tr style="background-color:brown">
                    <td class="tdName">Coloured:</td>
                    <td style="text-align:right;">1.4%</td>
                </tr>
                <tr style="background-color:purple">
                    <td class="tdName">Other:</td>
                    <td style="text-align:right;">0.3%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Matric Pass Rate:</td>
                    <td style="text-align:right;">68.1%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:#B8BC06; color: black;">
                    <td class="tdName">Average Annual Income:</td>
                    <td style="text-align:right;">R83 053</td>
                </tr>
            </tbody></table>
    </div>
    <div id="gauteng" class='infoBox'>
        <h4>Information on Gauteng:</h4>
        <table style="color: white; width: 210px; margin: 10px;">
            <tbody>
                <tr>
                    <td class="tdName">Population:</td>
                    <td style="text-align:right;">12 272 263</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Size (km<sup>2</sup>):</td>
                    <td style="text-align:right;">18 178</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Population Density:</td>
                    <td style="text-align:right;">675.1 pop/km<sup>2</sup></td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Male:</td>
                    <td style="text-align:right;">50.5%</td>
                </tr>
                <tr>
                    <td class="tdName">Female:</td>
                    <td style="text-align:right;">49.5%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Median Age:</td>
                    <td style="text-align:right;">28</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:black">
                    <td class="tdName">Black African:</td>
                    <td style="text-align:right;">77.4%</td>
                </tr>
                <tr style="background-color:white; color: black;">
                    <td class="tdName">White:</td>
                    <td style="text-align:right;">15.6%</td>
                </tr>
                <tr style="background-color:yellow; color: black;">
                    <td class="tdName">Indian / Asian:</td>
                    <td style="text-align:right;">2.9%</td>
                </tr>
                <tr style="background-color:brown">
                    <td class="tdName">Coloured:</td>
                    <td style="text-align:right;">3.5%</td>
                </tr>
                <tr style="background-color:purple">
                    <td class="tdName">Other:</td>
                    <td style="text-align:right;">0.7%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Matric Pass Rate:</td>
                    <td style="text-align:right;">81.1%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:#4EBC03; color: black;">
                    <td class="tdName">Average Annual Income:</td>
                    <td style="text-align:right;">R156 243</td>
                </tr>
            </tbody></table>
    </div>
    <div id="easternCape" class='infoBox'>
        <h4>Information on Eastern Cape:</h4>
        <table style="color: white; width: 210px; margin: 10px;">
            <tbody>
                <tr>
                    <td class="tdName">Population:</td>
                    <td style="text-align:right;">6 562 053</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Size (km<sup>2</sup>):</td>
                    <td style="text-align:right;">168 966</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Population Density:</td>
                    <td style="text-align:right;">38.8 pop/km<sup>2</sup></td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Male:</td>
                    <td style="text-align:right;">47.1%</td>
                </tr>
                <tr>
                    <td class="tdName">Female:</td>
                    <td style="text-align:right;">52.9%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Median Age:</td>
                    <td style="text-align:right;">23</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:black">
                    <td class="tdName">Black African:</td>
                    <td style="text-align:right;">86.3%</td>
                </tr>
                <tr style="background-color:white; color: black;">
                    <td class="tdName">White:</td>
                    <td style="text-align:right;">4.7%</td>
                </tr>
                <tr style="background-color:yellow; color: black;">
                    <td class="tdName">Indian / Asian:</td>
                    <td style="text-align:right;">0.4%</td>
                </tr>
                <tr style="background-color:brown">
                    <td class="tdName">Coloured:</td>
                    <td style="text-align:right;">8.3%</td>
                </tr>
                <tr style="background-color:purple">
                    <td class="tdName">Other:</td>
                    <td style="text-align:right;">0.3%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Matric Pass Rate:</td>
                    <td style="text-align:right;">58.1%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:#BB3003; color: black;">
                    <td class="tdName">Average Annual Income:</td>
                    <td style="text-align:right;">R64 539</td>
                </tr>
            </tbody></table>
    </div>
    <div id="westernCape" class='infoBox'>
        <h4>Information on Western Cape:</h4>
        <table style="color: white; width: 210px; margin: 10px;">
            <tbody>
                <tr>
                    <td class="tdName">Population:</td>
                    <td style="text-align:right;">5 822 734</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Size (km<sup>2</sup>):</td>
                    <td style="text-align:right;">129 462</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Population Density:</td>
                    <td style="text-align:right;">45.0 pop/km<sup>2</sup></td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Male:</td>
                    <td style="text-align:right;">49.0%</td>
                </tr>
                <tr>
                    <td class="tdName">Female:</td>
                    <td style="text-align:right;">51.0%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Median Age:</td>
                    <td style="text-align:right;">28</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:black">
                    <td class="tdName">Black African:</td>
                    <td style="text-align:right;">32.9%</td>
                </tr>
                <tr style="background-color:white; color: black;">
                    <td class="tdName">White:</td>
                    <td style="text-align:right;">15.7%</td>
                </tr>
                <tr style="background-color:yellow; color: black;">
                    <td class="tdName">Indian / Asian:</td>
                    <td style="text-align:right;">1.0%</td>
                </tr>
                <tr style="background-color:brown">
                    <td class="tdName">Coloured:</td>
                    <td style="text-align:right;">48.8%</td>
                </tr>
                <tr style="background-color:purple">
                    <td class="tdName">Other:</td>
                    <td style="text-align:right;">1.6%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Matric Pass Rate:</td>
                    <td style="text-align:right;">82.9%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:#7ABD03; color: black;">
                    <td class="tdName">Average Annual Income:</td>
                    <td style="text-align:right;">R143 460</td>
                </tr>
            </tbody></table>
    </div>
    <div id="freeState" class='infoBox'>
        <h4>Information on Free State</h4>
        <table style="color: white; width: 210px; margin: 10px;">
            <tbody>
                <tr>
                    <td class="tdName">Population:</td>
                    <td style="text-align:right;">2 745 590</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Size (km<sup>2</sup>):</td>
                    <td style="text-align:right;">129 825</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Population Density:</td>
                    <td style="text-align:right;">21.1 pop/km<sup>2</sup></td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Male:</td>
                    <td style="text-align:right;">48.5%</td>
                </tr>
                <tr>
                    <td class="tdName">Female:</td>
                    <td style="text-align:right;">51.5%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Median Age:</td>
                    <td style="text-align:right;">26</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:black">
                    <td class="tdName">Black African:</td>
                    <td style="text-align:right;">87.6%</td>
                </tr>
                <tr style="background-color:white; color: black;">
                    <td class="tdName">White:</td>
                    <td style="text-align:right;">8.7%</td>
                </tr>
                <tr style="background-color:yellow; color: black;">
                    <td class="tdName">Indian / Asian:</td>
                    <td style="text-align:right;">0.4%</td>
                </tr>
                <tr style="background-color:brown">
                    <td class="tdName">Coloured:</td>
                    <td style="text-align:right;">3.1%</td>
                </tr>
                <tr style="background-color:purple">
                    <td class="tdName">Other:</td>
                    <td style="text-align:right;">0.3%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Matric Pass Rate:</td>
                    <td style="text-align:right;">75.7%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:#BC6C04; color: black;">
                    <td class="tdName">Average Annual Income:</td>
                    <td style="text-align:right;">R75 312</td>
                </tr>
            </tbody></table>
    </div>
    <div id="SA" class='infoBox'>
        <h4>Information on South Africa</h4>
        <table style="color: white; width: 210px; margin: 10px;">
            <tbody>
                <tr>
                    <td class="tdName">Population:</td>
                    <td style="text-align:right;">51 770 560</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Size (km<sup>2</sup>):</td>
                    <td style="text-align:right;">1 220 813</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Population Density:</td>
                    <td style="text-align:right;">42.4 pop/km<sup>2</sup></td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Male:</td>
                    <td style="text-align:right;">48.7%</td>
                </tr>
                <tr>
                    <td class="tdName">Female:</td>
                    <td style="text-align:right;">51.3%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Median Age:</td>
                    <td style="text-align:right;">25</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:black">
                    <td class="tdName">Black African:</td>
                    <td style="text-align:right;">79.2%</td>
                </tr>
                <tr style="background-color:white; color: black;">
                    <td class="tdName">White:</td>
                    <td style="text-align:right;">8.9%</td>
                </tr>
                <tr style="background-color:yellow; color: black;">
                    <td class="tdName">Indian / Asian:</td>
                    <td style="text-align:right;">2.5%</td>
                </tr>
                <tr style="background-color:brown">
                    <td class="tdName">Coloured:</td>
                    <td style="text-align:right;">8.9%</td>
                </tr>
                <tr style="background-color:purple">
                    <td class="tdName">Other:</td>
                    <td style="text-align:right;">0.5%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr>
                    <td class="tdName">Matric Pass Rate:</td>
                    <td style="text-align:right;">70.2%</td>
                </tr>
                <tr>
                    <td colspan="2" style="height:22px;"></td>
                </tr>
                <tr style="background-color:#90BC04; color: black;">
                    <td class="tdName">Average Annual Income:</td>
                    <td style="text-align:right;">R103 204</td>
                </tr>
            </tbody></table>
    </div>
</body>