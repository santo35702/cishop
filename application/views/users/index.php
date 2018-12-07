
	<div class="monthly-grid">
		<div class="panel panel-widget">
			<div class="panel-title">
				Monthly Status Report
			</div>
			<div class="panel-body">
				<!-- status -->
				<div class="contain">	
					<div class="gantt"></div>
				</div>
				<!-- status -->
			</div>
		</div>
	</div>
			
	<!--//area-->
	<div class="col-md-5 skil">
		<div class="content-top-1">
			<div class="col-md-6 top-content">
				<h5>Tasks</h5>
				<label>8761</label>
			</div>
			<div class="col-md-6 top-content1">	   
				<div id="demo-pie-1" class="pie-title-center" data-percent="25"> <span class="pie-value">25%</span> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="content-top-1">
			<div class="col-md-6 top-content">
				<h5>Points</h5>
				<label>6295</label>
			</div>
			<div class="col-md-6 top-content1">	   
				<div id="demo-pie-2" class="pie-title-center" data-percent="50"> <span class="pie-value">50%</span> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="content-top-1">
			<div class="col-md-6 top-content">
				<h5>Cards</h5>
				<label>3401</label>
			</div>
			<div class="col-md-6 top-content1">	   
				<div id="demo-pie-3" class="pie-title-center" data-percent="75"> <span class="pie-value">75%</span> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="col-md-7 mid-content-top">
		<div class="middle-content">
			<h3>Latest Products</h3>
			<!-- start content_slider -->
			<div id="owl-demo" class="owl-carousel text-center">
				<div class="item">
					<img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>images/na.jpg" alt="name">
				</div>
				<div class="item">
					<img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>images/na1.jpg" alt="name">
				</div>
				<div class="item">
					<img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>images/na2.jpg" alt="name">
				</div>
				<div class="item">
					<img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>images/na.jpg" alt="name">
				</div>
				<div class="item">
					<img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>images/na1.jpg" alt="name">
				</div>
				<div class="item">
					<img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>images/na2.jpg" alt="name">
				</div>
				<div class="item">
					<img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>images/na.jpg" alt="name">
				</div>
											
			</div>
		</div>
		<!--//sreen-gallery-cursual---->
		<!-- requried-jsfiles-for owl -->
		<link href="<?php echo base_url(); ?>css/owl.carousel.css" rel="stylesheet">
		<script src="<?php echo base_url(); ?>js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {
				$("#owl-demo").owlCarousel({
					items : 3,
					lazyLoad : true,
					autoPlay : true,
					pagination : true,
					nav:true,
				});
			});
		</script>
		<!-- //requried-jsfiles-for owl -->
	</div>
	<div class="clearfix"></div>
						
	<div class="content-top">
		<div class="col-md-6 content-top-lft">
			<div class="panel panel-widget">
				<div class="panel-title">
					Real Time Updates
				</div>
				<div class="panel-body">
					<div class="demo-container">
						<div id="placeholder" class="demo-placeholder"></div>
					</div>
					<p>Time between updates: <input id="updateInterval" type="text" value="" style="text-align: right; width:5em"> milliseconds</p>
				</div>
			</div>
		</div>
		
		<div class="col-md-6 content-top-2">
			<!---start-chart---->
			<!----->
			<div class="content-graph">
				<div class="content-color">
					<div class="content-ch"><p><i></i>Chrome </p><span>100%</span>
						<div class="clearfix"> </div>
					</div>
					<div class="content-ch1"><p><i></i>Safari</p><span> 50%</span>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!--graph-->
				<link rel="stylesheet" href="<?php echo base_url(); ?>css/graph.css">
				<!--//graph-->
				<script src="js/jquery.flot.js"></script>
				<script>
					$(document).ready(function () {
									
						// Graph Data ##############################################
						var graphData = [{
							// Visits
							data: [ [6, 1300], [7, 1600], [8, 1900], [9, 2100], [10, 2500], [11, 2200], [12, 2000], [13, 1950], [14, 1900], [15, 2000] ],
							color: '#999999'
						}, {
							// Returning Visits
							data: [ [6, 500], [7, 600], [8, 550], [9, 600], [10, 800], [11, 900], [12, 800], [13, 850], [14, 830], [15, 1000] ],
							color: '#999999',
							points: { radius: 4, fillColor: '#7f8c8d' }
						}
						];
									
						// Lines Graph #############################################
						$.plot($('#graph-lines'), graphData, {
							series: {
								points: {
									show: true,
									radius: 5
								},
								lines: {
									show: true
								},
								shadowSize: 0
							},
							grid: {
								color: '#7f8c8d',
								borderColor: 'transparent',
								borderWidth: 20,
								hoverable: true
							},
							xaxis: {
								tickColor: 'transparent',
								tickDecimals: 2
							},
							yaxis: {
								tickSize: 1000
							}
						});
									
										// Bars Graph ##############################################
										$.plot($('#graph-bars'), graphData, {
											series: {
												bars: {
													show: true,
													barWidth: .9,
													align: 'center'
												},
												shadowSize: 0
											},
											grid: {
												color: '#7f8c8d',
												borderColor: 'transparent',
												borderWidth: 20,
												hoverable: true
											},
											xaxis: {
												tickColor: 'transparent',
												tickDecimals: 2
											},
											yaxis: {
												tickSize: 1000
											}
										});
									
										// Graph Toggle ############################################
										$('#graph-bars').hide();
									
										$('#lines').on('click', function (e) {
											$('#bars').removeClass('active');
											$('#graph-bars').fadeOut();
											$(this).addClass('active');
											$('#graph-lines').fadeIn();
											e.preventDefault();
										});
									
										$('#bars').on('click', function (e) {
											$('#lines').removeClass('active');
											$('#graph-lines').fadeOut();
											$(this).addClass('active');
											$('#graph-bars').fadeIn().removeClass('hidden');
											e.preventDefault();
										});
									
										// Tooltip #################################################
										function showTooltip(x, y, contents) {
											$('<div id="tooltip">' + contents + '</div>').css({
												top: y - 16,
												left: x + 20
											}).appendTo('body').fadeIn();
										}
									
										var previousPoint = null;
									
										$('#graph-lines, #graph-bars').bind('plothover', function (event, pos, item) {
											if (item) {
												if (previousPoint != item.dataIndex) {
													previousPoint = item.dataIndex;
													$('#tooltip').remove();
													var x = item.datapoint[0],
														y = item.datapoint[1];
														showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');
												}
											} else {
												$('#tooltip').remove();
												previousPoint = null;
											}
										});
									
									});
									</script>
				<div class="graph-container">
									
									<div id="graph-lines" style="padding: 0px;"> <canvas class="flot-base" width="883" height="528" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 883px; height: 528px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 88px; top: 486px; left: 49px; text-align: center;">6.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 88px; top: 486px; left: 138px; text-align: center;">7.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 88px; top: 486px; left: 225px; text-align: center;">8.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 88px; top: 486px; left: 314px; text-align: center;">9.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 88px; top: 486px; left: 398px; text-align: center;">10.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 88px; top: 486px; left: 489px; text-align: center;">11.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 88px; top: 486px; left: 575px; text-align: center;">12.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 88px; top: 486px; left: 664px; text-align: center;">13.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 88px; top: 486px; left: 752px; text-align: center;">14.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 88px; top: 486px; left: 840px; text-align: center;">15.00</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 470px; left: 51px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 316px; left: 23px; text-align: right;">1000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 163px; left: 20px; text-align: right;">2000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 9px; left: 20px; text-align: right;">3000</div></div></div><canvas class="flot-overlay" width="883" height="528" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 883px; height: 528px;"></canvas></div>
									<div id="graph-bars" style="padding: 0px; display: none;"> <canvas class="flot-base" width="883" height="528" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 883px; height: 528px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 73px; top: 486px; left: 85px; text-align: center;">6.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 73px; top: 486px; left: 166px; text-align: center;">7.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 73px; top: 486px; left: 245px; text-align: center;">8.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 73px; top: 486px; left: 326px; text-align: center;">9.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 73px; top: 486px; left: 402px; text-align: center;">10.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 73px; top: 486px; left: 485px; text-align: center;">11.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 73px; top: 486px; left: 563px; text-align: center;">12.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 73px; top: 486px; left: 644px; text-align: center;">13.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 73px; top: 486px; left: 724px; text-align: center;">14.00</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 73px; top: 486px; left: 804px; text-align: center;">15.00</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 470px; left: 51px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 316px; left: 23px; text-align: right;">1000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 163px; left: 20px; text-align: right;">2000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 9px; left: 20px; text-align: right;">3000</div></div></div><canvas class="flot-overlay" width="883" height="528" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 883px; height: 528px;"></canvas></div>
								</div>
	
		</div>
		</div>
		<div class="clearfix"> </div>
		</div>
		<!--area-->					
				<div class="area">
					<div class="col-md-6 chrt-two area">
						<h3 class="sub-tittle">Line Multi Chart</h3>
							<div style="area">
								<canvas id="canvas" style="width:100%;height:100%"></canvas>
							</div>
								<button id="randomizeData">Randomize Data</button>
										<script>
												var randomScalingFactor = function() {
												return Math.round(Math.random() * 100 * (Math.random() > 0.5 ? -1 : 1));
													};
												var randomColor = function(opacity) {
												return 'rgba(' + Math.round(Math.random() * 255) + ',' + Math.round(Math.random() * 255) + ',' + Math.round(Math.random() * 255) + ',' + (opacity || '.3') + ')';
													};

												var lineChartData = {
													labels: ["January", "February", "March", "April", "May", "June", "July"],
													datasets: [{
														label: "My First dataset",
														data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
														yAxisID: "y-axis-1",
														}, {
																label: "My Second dataset",
																data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
																	yAxisID: "y-axis-2"
																	}]
																};

																$.each(lineChartData.datasets, function(i, dataset) {
																	dataset.borderColor = randomColor(0.4);
																	dataset.backgroundColor = randomColor(1);
																	dataset.pointBorderColor = randomColor(0.7);
																	dataset.pointBackgroundColor = randomColor(0.5);
																	dataset.pointBorderWidth = 1;
																});

																console.log(lineChartData);

																window.onload = function() {
																	var ctx = document.getElementById("canvas").getContext("2d");
																	window.myLine = Chart.Line(ctx, {
																		data: lineChartData,
																		options: {
																			
																			hoverMode: 'label',
																			stacked: false,
																			scales: {
																				xAxes: [{
																					display: true,
																					gridLines: {
																						offsetGridLines: false
																					}
																				}],
																				yAxes: [{
																					type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
																					display: true,
																					position: "left",
																					id: "y-axis-1",
																				}, {
																					type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
																					display: true,
																					position: "right",
																					id: "y-axis-2",

																					// grid line settings
																					gridLines: {
																						drawOnChartArea: false, // only want the grid lines for one axis to show up
																					},
																				}],
																			}
																		}
																	});
																};

																$('#randomizeData').click(function() {
																	lineChartData.datasets[0].data = [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()];

																	lineChartData.datasets[1].data = [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()];

																	window.myLine.update();
																});
						</script>
						<script src="<?php echo base_url(); ?>js/Chart.js"></script>
					</div>
					<div class="col-md-6 chrt-three">
						<h3 class="sub-tittle">Stacked bar chart</h3>
							<div id="chartdiv1"></div>	
									<script>
											var chart = AmCharts.makeChart("chartdiv1", {
																				  "type": "serial",
																				  "theme": "light",
																				  "rotate": true,
																				  "marginBottom": 50,
																				  "dataProvider": [{
																					"age": "85+",
																					"male": -0.1,
																					"female": 0.3
																				  }, {
																					"age": "80-54",
																					"male": -0.2,
																					"female": 0.3
																				  }, {
																					"age": "75-79",
																					"male": -0.3,
																					"female": 0.6
																				  }, {
																					"age": "70-74",
																					"male": -0.5,
																					"female": 0.8
																				  }, {
																					"age": "65-69",
																					"male": -0.8,
																					"female": 1.0
																				  }, {
																					"age": "60-64",
																					"male": -1.1,
																					"female": 1.3
																				  }, {
																					"age": "55-59",
																					"male": -1.7,
																					"female": 1.9
																				  }, {
																					"age": "50-54",
																					"male": -2.2,
																					"female": 2.5
																				  }, {
																					"age": "45-49",
																					"male": -2.8,
																					"female": 3.0
																				  }, {
																					"age": "40-44",
																					"male": -3.4,
																					"female": 3.6
																				  }, {
																					"age": "35-39",
																					"male": -4.2,
																					"female": 4.1
																				  }, {
																					"age": "30-34",
																					"male": -5.2,
																					"female": 4.8
																				  }, {
																					"age": "25-29",
																					"male": -5.6,
																					"female": 5.1
																				  }, {
																					"age": "20-24",
																					"male": -5.1,
																					"female": 5.1
																				  }, {
																					"age": "15-19",
																					"male": -3.8,
																					"female": 3.8
																				  }, {
																					"age": "10-14",
																					"male": -3.2,
																					"female": 3.4
																				  }, {
																					"age": "5-9",
																					"male": -4.4,
																					"female": 4.1
																				  }, {
																					"age": "0-4",
																					"male": -5.0,
																					"female": 4.8
																				  }],
																				  "startDuration": 1,
																				  "graphs": [{
																					"fillAlphas": 0.8,
																					"lineAlpha": 0.2,
																					"type": "column",
																					"valueField": "male",
																					"title": "Male",
																					"labelText": "[[value]]",
																					"clustered": false,
																					"labelFunction": function(item) {
																					  return Math.abs(item.values.value);
																					},
																					"balloonFunction": function(item) {
																					  return item.category + ": " + Math.abs(item.values.value) + "%";
																					}
																				  }, {
																					"fillAlphas": 0.8,
																					"lineAlpha": 0.2,
																					"type": "column",
																					"valueField": "female",
																					"title": "Female",
																					"labelText": "[[value]]",
																					"clustered": false,
																					"labelFunction": function(item) {
																					  return Math.abs(item.values.value);
																					},
																					"balloonFunction": function(item) {
																					  return item.category + ": " + Math.abs(item.values.value) + "%";
																					}
																				  }],
																				  "categoryField": "age",
																				  "categoryAxis": {
																					"gridPosition": "start",
																					"gridAlpha": 0.2,
																					"axisAlpha": 0
																				  },
																				  "valueAxes": [{
																					"gridAlpha": 0,
																					"ignoreAxisWidth": true,
																					"labelFunction": function(value) {
																					  return Math.abs(value) + '%';
																					},
																					"guides": [{
																					  "value": 0,
																					  "lineAlpha": 0.2
																					}]
																				  }],
																				  "balloon": {
																					"fixedPosition": true
																				  },
																				  "chartCursor": {
																					"valueBalloonsEnabled": false,
																					"cursorAlpha": 0.05,
																					"fullWidth": true
																				  },
																				  "allLabels": [{
																					"text": "Male",
																					"x": "28%",
																					"y": "97%",
																					"bold": true,
																					"align": "middle"
																				  }, {
																					"text": "Female",
																					"x": "75%",
																					"y": "97%",
																					"bold": true,
																					"align": "middle"
																				  }],
																				 "export": {
																					"enabled": true
																				  }   

																				});
									</script>
					</div>
					<div class="clearfix"></div>
				</div>
						<!--//area-->
		<div class="fo-top-di">
			<div class="foot-top">
				
					<div class="col-md-6 s-c">
						<li>
							<div class="fooll">
								<h1>follow us on</h1>
							</div>
						</li>
						<li>
							<div class="social-ic">
								<ul>
									<li><a href="#"><i class="facebok"> </i></a></li>
									<li><a href="#"><i class="twiter"> </i></a></li>
									<li><a href="#"><i class="goog"> </i></a></li>
									<li><a href="#"><i class="be"> </i></a></li>
										<div class="clearfix"></div>	
								</ul>
							</div>
						</li>
							<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 s-c">
						<div class="stay">
									<div class="stay-left">
										<form>
											<input type="text" placeholder="Enter your email" required="">
										</form>
									</div>
									<div class="btn-1">
										<form>
											<input type="submit" value="join">
										</form>
									</div>
										<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				
			</div>
			<div class="footer">
					<div class="col-md-3 cust">
						<h4>CUSTOMER CARE</h4>
							<li><a href="contact.html">Help Center</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="details.html">How To Buy</a></li>
							<li><a href="checkout.html">Delivery</a></li>
					</div>
					<div class="col-md-2 abt">
						<h4>ABOUT US</h4>
							<li><a href="products.html">Our Stories</a></li>
							<li><a href="products.html">Press</a></li>
							<li><a href="faq.html">Career</a></li>
							<li><a href="contact.html">Contact</a></li>
					</div>
					<div class="col-md-2 myac">
						<h4>MY ACCOUNT</h4>
							<li><a href="register.html">Register</a></li>
							<li><a href="checkout.html">My Cart</a></li>
							<li><a href="checkout.html">Order History</a></li>
							<li><a href="details.html">Payment</a></li>
					</div>
					<div class="col-md-5 our-st">
						<div class="our-left">
							<h4>OUR STORES</h4>
						</div>
						
							<li><i class="add"> </i>Mark peter</li>
							<li><i class="phone"> </i>012-586987</li>
							<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
					</div>
					<div class="clearfix"> </div>
						<p>© 2018 Gretong. All Rights Reserved | Design by <a href="mailto:santo35702@gmail.com">MD: Suvo</a></p>
			</div>
		</div>
			</div>
			<!--content-->
		</div>

				<!--//content-inner-->