
(function () {
    "use strict";
    d3.selection.prototype.moveToFront = function () {
        return this.each(function () {
            this.parentNode.appendChild(this);
        });
    };
    
 d3.selection.prototype.moveToBack = function() { 
    return this.each(function() { 
        var firstChild = this.parentNode.firstChild; 
        if (firstChild) { 
            this.parentNode.insertBefore(this, firstChild); 
        } 
    }); 
};

  d3.selection.prototype.size = function() {
    var n = 0;
    this.each(function() { ++n; });
    return n;
  };

    
   
	var width = 1200,
        height = 700,
        centered,
        // 
        popDen = [["Gauteng", 554.68, 12272263], ["KwaZulu-Natal", 101.57, 10267300], ["Mpumalanga", 44, 4039939], ["Limpopo", 39.72, 5404868], ["Eastern Cape", 37.16, 6562053], ["Western Cape", 34.95, 5822734], ["North West", 29.98, 3509953], ["Free State", 20.85, 2745590], ["Northern Cape", 2.66, 1145861]],
        
        

        svg = d3.select("#graph")
		      .append("svg")
		      .attr("width", width)
		      .attr("height", height),

        projection = d3.geo.mercator()
		      .scale(2000)
		      .translate([-540, -630]),
	
	    path = d3.geo.path()
		      .projection(projection),

	    stateIdMap = d3.map({}),
        
           
        rect = svg.append("rect")
              .attr("class", "rect2")
              .attr("width", 250)
              .attr("height", 225)
              .attr("x", width-250)
              .attr("rx", 10)
              .attr("ry", 10)
              .style("visibility", "hidden"),
        
        barGrapghy = svg.append("svg")
                .attr("class", "graphSpce")
                .attr("width", 570)
                .attr("height", 470)
                .attr("x", width-570)
                .attr("y", height-470)
                .style("fill", "white"),
            
              
       info = svg.append("text")
              //.text("hell!")
              .attr("class", "text2")
              .attr("x", width/2-50)
              .attr("y", 20),
              //.on("click", clicked);
        
       color = d3.scale.linear().domain([10000,150000])
                  .interpolate(d3.interpolateHcl)
                 .range([d3.rgb("#BC0A05"), d3.rgb('#32BD0A')]),
        
        colorPop = d3.scale.linear().domain([2,560])
                  .interpolate(d3.interpolateHcl)
                 .range([d3.rgb("#0080FF"), d3.rgb('#ffffff')]),
        
        population = d3.scale.linear().domain([2,560])
                    .range([20,350]),
        
        pop2 = d3.scale.linear().domain([1000000, 13000000])
                    .range([150, 450]),
    
       popViz =  svg.selectAll("g")
                .data(popDen)
                .enter()
               .append("g");
    
    
        popViz.append("line")
            .attr("stroke", "blue")
            .attr("stroke-width", 3)
            .attr("x1", 15)
            .attr("y1", function(d,i){
                return 60+10*i;
            })

            .attr("x2", 15)
            .attr("y2",20)
            .transition()
            .duration(1000)
            .attr("x2", function(d){
                var len = population(d[1]);
                return 15 + len;
            })
            .attr("y2", function(d,i){
                return 60+10*i;
            });
        
    var popRect =  popViz.append("rect")
                .attr("id", function(d, i){
                    return "rect"+i;
                })
                .attr("class", function(d, i){
                    return "rect r"+i;
                })
                .attr("x", 15)
                .attr("y", 5)
                .attr("width", 0)
                .attr("height", 40)
                .style("fill",function(d){
                    var col = colorPop(d[1]);
                        return col;
                })
                .style("opacity", 0.7);
    
            var lines =  popViz.append("line")
                            .style("opacity", 0.5)
                            //.attr("class", "line2")
                            .attr("class", function(d,i){
                                return "line l"+i;
                            })
                            .attr("id", function(d,i){
                                return "line"+i;
                            })
                            .attr("stroke", "lightblue")
                            .attr("stroke-width", 1)
                           .attr("x1", function(d){
                            var len = population(d[1]);
                            return 15 + len;
                        })
                        .attr("y1", function(d,i){
                            return 60+10*i;
                        })

                        .attr("x2", function(d){
                            var len = population(d[1]);
                            return 15 + len;
                        })
                        .attr("y2", function(d,i){
                            return 60+10*i;
                        })
                        .transition()
                        .duration(1000)
                        .attr("x2", function(d){
                            var len = population(d[1]);
                            return 15 + len;
                        })
                          .attr("y2", function(d,i){
                            return 60+10*i;
                        })
                        //.attr("y2", 5)
                        .style("visibility", "visible");
    
        var graphShiz = barGrapghy.append("g");
    
    var margin = {top: 20, right: 20, bottom: 30, left: 50},
    width2 = 570 - margin.left - margin.right,
    height2 = 470 - margin.top - margin.bottom;

var x = d3.scale.ordinal()
    .rangeRoundBands([15, width2], .1);

var y = d3.scale.linear()
    .rangeRound([height2, 0]);

var color2 = d3.scale.ordinal()
    .range(["#6b486b", "#7b6888", "#a05d56", "#d0743c", "#ff8c00"]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left")
    .tickFormat(d3.format(".2s"));
    
//
//var svg = d3.select("body").append("svg")
//    .attr("width", width + margin.left + margin.right)
//    .attr("height", height + margin.top + margin.bottom)
//  .append("g")
   graphShiz.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

d3.csv("races.csv", function(error, data) {
  if (error) throw error;

  color2.domain(d3.keys(data[0]).filter(function(key) { return key !== "Province"; }));

  data.forEach(function(d) {
    var y0 = 0;
    d.ages = color2.domain().map(function(name) { return {name: name, y0: y0, y1: y0 += +d[name]}; });
    d.total = d.ages[d.ages.length - 1].y1;
  });

  data.sort(function(a, b) { return b.total - a.total; });

  x.domain(data.map(function(d) { return d.Province; }));
  y.domain([0, d3.max(data, function(d) { return d.total; })]);

  graphShiz.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height2 + ")")
      .call(xAxis);

  graphShiz.append("g")
      .attr("class", "y axis")
      .call(yAxis)
    .append("text")
      .attr("transform", "rotate(-90)")
      .attr("y", 6)
      .attr("dy", ".71em")
      .style("text-anchor", "end")
      .text("Population");

  var province = graphShiz.selectAll(".province")
      .data(data)
    .enter().append("g")
      .attr("class", "g")
      .attr("transform", function(d) { return "translate(" + x(d.Province) + ",0)"; });

  province.selectAll("rect")
      .data(function(d) { return d.ages; })
    .enter().append("rect")
        .attr("class","hellos")
      .attr("width", x.rangeBand())
      .attr("y", function(d) { return y(d.y1); })
      .attr("height", function(d) { return y(d.y0) - y(d.y1); })
      .style("fill", function(d) { return color2(d.name); });
     //   .style("stroke","white");

  var legend = graphShiz.selectAll(".legend")
      .data(color2.domain().slice().reverse())
    .enter().append("g")
      .attr("class", "legend")
      .attr("transform", function(d, i) { return "translate(0," + i * 20 + ")"; });

  legend.append("rect")
      .attr("x", width2 - 18)
      .attr("width", 18)
      .attr("height", 18)
      .style("fill", color2);

  legend.append("text")
      .attr("x", width2 - 24)
      .attr("y", 9)
      .attr("dy", ".35em")
      .style("text-anchor", "end")
      .text(function(d) { return d; });

});

         
//                .
//    




	queue()
		.defer(d3.json, "provinces.json")
		.await(function (err, Prov) {
			var provinces = svg.append("g")
				.attr("class", "provincesNorm")
				.selectAll("g")
				.data(topojson.feature(Prov, Prov.objects.layer1).features)
				.enter()
				.append("g")
				
            
				.on("mouseover", function (d) {
                    
                    //.style("opacity",0.5);
                    info.text(d.properties.PROVINCE);
                    
                    d3.select(this)
                        .moveToFront()
                        .style("stroke-width",1)
                        .style("stroke", "white")
                        .style("opacity", 1);
                    d3.selectAll(".hellos")
                        .style("stroke", "white");
                    
                   
              })
				.on("mouseout", function (d) {
                   if(d3.select(this).attr("class")==="provinceSel"){
                    d3.select(this)
                        .style("opacity", 1);
                   } else{
                      d3.select(this)
                        .style("opacity", 0.7); 
                   }
                    d3.select(this)
                        .style("stroke-width",1)
                        .style("stroke", "black");
                     d3.selectAll(".hellos")
                        .style("stroke", "null");
                    
				})
                .on("click", function (d) {
                    
                    var lineId = "#line"+d.id;
                    var rectId = "#rect"+d.id;
                if(d3.select(this).attr("class")==="provinceSel") {
                    d3.select(this)
                        .moveToBack()
                        .attr("class", "provincesSmal")
                        .transition()
                        .duration(1000)
                        .attr("transform", "scale(" + 1 + ")translate(" + 0 + "," + 0 + ")");
                        //.classed("provinceSel", false)
                        //.attr("class", "provincesNorm");
               
                     d3.select(lineId)
                        .transition()
                        .duration(1000)
                        .attr("y2",60+10*d.id);
                    d3.select(rectId)
                        .transition()
                        .duration(1000)
                        .attr("width", 0);
                
                } else {
                    
                         d3.select(lineId)
                        .transition()
                        .duration(1000)
                        .attr("y2",5);
                        
                        d3.select(rectId)
                            .transition()
                            .duration(1000)
                            .attr("width", function(d){
                            return population(d[1]);
                        });
                    
                           d3.selectAll(".provincesNorm")
                        .each(function (d) {
                            d3.select(this)
                                .attr("class","provincesSmal");
                        })
                       .transition()
                       .duration(1000)
                        .attr("transform", "scale(" + 0.4 + ")translate(" + 2365 + "," + -130 + ")");
                       //.attr("class", "provincesSmal") 
                       //.classed("provincesNorm", false)
                       // .classed("provincesSmal",true);
                      d3.selectAll(".provincesNorm2")
                        .each(function (d) {
                            d3.select(this)
                                .attr("class","provincesSmal");
                        })
                       .transition()
                       .duration(1000)
                        .attr("transform", "scale(" + 1 + ")translate(" + 0 + "," + 0 + ")");
                       
                    d3.select(this)
                        .moveToFront()
                        .classed("provincesNorm",false)
                        .attr("class", "provinceSel")
                        .transition()
                        .duration(1350)
                        .attr("transform", "scale(" + 2.5 + ")translate(" + -947 + "," + 50 + ")");
                    
                  
                        //.classed("provincesNorm", false)
                        
                    
                    
            
                }
                     var check = d3.selectAll(".provinceSel").size();
                   
                    
                    if(check === 0){
                        provinces.transition()
                            .duration(1500)
                            .attr("transform", "scale(" + 2.5 + ")translate(" + -947 + "," + 50 + ")")
                            .attr("class","provincesNorm2");
                        
                        rect.transition()
                            .duration(1000)
                            .style("visibility","hidden");
                         info.transition()
                        .duration(1000)
                        .attr("transform", "translate(" + 0 + ")");
                    }else{
                        rect.transition()
                            .duration(1000)
                            .style("visibility", "visible");
                    }
                //lines.style("visibility", "visible");
                    
                   
                        
                });
            
            
            
//              var body = d3.select("body"),
//                
//                color = d3.scale.linear().domain([])
//                  .interpolate(d3.interpolateHcl)
//                  .range([d3.rgb("#007AFF"), d3.rgb('#FFF500')]);
//
//
//              for (var i = 0; i < length; i++) {
//                body.append('div').attr('style', function (d) {
//                  return 'background-color: ' + color(i);
//                });
//              
//                }
            
            provinces.attr("fill",function (d){
                return color(d.properties.AAHI2011);
            });
           
//            provinces.style("opacity", function(d){
//                return population(d.properties.POPDEN);
//            });
			provinces.style("opacity", 0.7);
           // info.text("yey!");
            provinces.append("path")
				.attr("d", path);

			provinces.append("text")
				.text(function (d) {
                    return stateIdMap.get(d.id) || d.properties.CODE;
                })
				.attr("x", function (d) {
                    var horz;
					if (d.properties.CODE === "GT") {
                        horz = path.centroid(d)[0] - ((d.properties.CODE).length) * 3 - 8 || 0;
                    } else {
                        horz = path.centroid(d)[0] - ((d.properties.CODE).length) * 3 || 0;
                    }
					return horz;
                })
					
				.attr("y", function (d) {
                    var vert;
					if (d.properties.CODE === "WC") {
						vert = path.centroid(d)[1] + 19 || 0;
                    } else {
                        vert = path.centroid(d)[1] + 5 || 0;
                    }
					return vert;
                })
				.attr("class", "text");
        
        rect.on("click", function (d){
            
           
                    
                provinces.transition()
                            .duration(1500)
                            .attr("transform", "scale(" + 2.5 + ")translate(" + -947 + "," + 50 + ")")
                            .attr("class","provincesNorm2")
                            .style("opacity", 0.7);
             info.transition()
                        .duration(1000)
                        .attr("transform", "translate(" + 0 + ")");
                            
                    rect.style("visibility","hidden");
            
              d3.selectAll(".line")
              .each(function (d,i){
                    d3.select(this)
                        .transition()
                    .duration(1000)
                    .attr("y2", 60+10*i);
                    });
            
                    
            d3.selectAll(".rect")
            .each(function (d){
                d3.select(this)
                .transition()
                .duration(1000)
                .attr("width", 0);
            })
        });
                
  
   
            
				//.text("hi")
				//.attr({
				//	x: function(d) {return path.centroid(d)[0]||0;},
				//	y: function(d) {return path.centroid(d)[1]||0;}
				//});
				
		});


}());


