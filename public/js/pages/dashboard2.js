//[Dashboard Javascript]

//Project:	EmployX - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


var options = {
          series: [{
          name: 'Upcoming client',
          data: [120, 150, 170, 100, 310, 200, 150, 240, 280, 300, 180, 102]
        }, {
          name: 'Revenue',
          data: [150, 250, 310, 300, 260, 200, 250, 200, 180, 260, 204, 200]
        }, 
        // {
        //   name: 'Complate',
        //   data: [13, 5, 8, 18, 8, 18, 33, 32, 34, 29, 48, 56]
        // }
        ],
          chart: {
          type: 'bar',
          height: 200,
          stacked: true,
          toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          }
        },
		colors: ['#4d7cff', '#51ce8a'],
        plotOptions: {
          bar: {
            horizontal: false,
			  columnWidth: '25%',
          },
        },
		dataLabels: {
  			enabled: false,
		},
		grid: {
			strokeDashArray: 7,
		},
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        legend: {
          show: false,
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#project-chart"), options);
        chart.render();




$(function () {

  'use strict';
	
	  Morris.Donut({
        element: 'donut-chart',
        height: 100,
        data: [{
            label: "Male",
            value: 45,

        }, {
            label: "Female",
            value: 55,
        }],
        resize: true,
        colors:['#4d7cff', '#51ce8a']
    });
	
	

	
		var options = {
		  chart: {
			height: 150,
			width: 150,
			type: "radialBar"
		  },

		  series: [60],
			colors: ['#4d7cff'],
		  plotOptions: {
			radialBar: {
			  hollow: {
				margin: 0,
				size: "60%"
			  },
			  track: {
				background: '#e6f0ff',
			  },

			  dataLabels: {
				showOn: "always",
				name: {
				  show: false,
				},
				 grid: {
			      show: true,
			      padding: {
			        top: 10,
			        bottom: 10,
			        right: 30,
			        left: 20
			      }
			    },
				value: {
				  offsetY: 0,
				  color: "#111",
				  fontSize: "20px",
				  show: true
				}
			  }
			}
		  },

		  stroke: {
			lineCap: "round",
		  },
		  labels: ["Progress"]
		};

		var chart = new ApexCharts(document.querySelector("#revenue1"), options);

		chart.render();

		var options = {
		  chart: {
			height: 150,
			width: 150,
			type: "radialBar"
		  },

		  series: [50],
			colors: ['#51ce8a'],
		  plotOptions: {
			radialBar: {
			  hollow: {
				margin: 0,
				size: "60%"
			  },
			  track: {
				background: '#defded',
			  },
			  grid: {
			      show: true,
			      padding: {
			        top: 30,
			        bottom: 10,
			        right: 30,
			        left: 20
			      }
			    },

			  dataLabels: {
				showOn: "always",
				name: {
				  show: false,
				},
				value: {
				  offsetY: 0,
				  color: "#111",
				  fontSize: "20px",
				  show: true
				}
			  }
			}
		  },

		  stroke: {
			lineCap: "round",
		  },
		  labels: ["Progress"]
		};

		var chart = new ApexCharts(document.querySelector("#revenue2"), options);

		chart.render();

		var options = {
		  chart: {
			height: 150,
			width: 150,
			type: "radialBar"
		  },

		  series: [34],
			colors: ['#733aeb'],
		  plotOptions: {
			radialBar: {
			  hollow: {
				margin: 0,
				size: "60%"
			  },
			  track: {
				background: '#f4efff',
			  },
			  grid: {
			      show: true,
			      padding: {
			        top: 10,
			        bottom: 10,
			        right: 30,
			        left: 20
			      }
			    },

			  dataLabels: {
				showOn: "always",
				name: {
				  show: false,
				},
				value: {
				  offsetY: 0,
				  color: "#111",
				  fontSize: "20px",
				  show: true
				}
			  }
			}
		  },

		  stroke: {
			lineCap: "round",
		  },
		  labels: ["Progress"]
		};

		var chart = new ApexCharts(document.querySelector("#revenue3"), options);

		chart.render();

		
	
		var options = {
          series: [{
          data: [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46]
        }],
          chart: {
          type: 'area',
          height: 100,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'smooth',
			width: 2,
        },
        fill: {
          opacity: 1,
        },
        yaxis: {
          min: 0
        },
        colors: ['#51ce8a'],
        };

        var chart = new ApexCharts(document.querySelector("#followers-spark"), options);
        chart.render();
	
	
		
	
		var options = {
          series: [{
          data: [51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62]
        }],
          chart: {
          type: 'area',
          height: 100,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'smooth',
			width: 2,
        },
        fill: {
          opacity: 1,
        },
        yaxis: {
          min: 0
        },
        colors: ['#4d7cff'],
        };

        var chart = new ApexCharts(document.querySelector("#growth-spark"), options);
        chart.render();
	
		
	
		var options = {
          series: [{
          data: [47, 45, 27, 93, 53, 61, 27, 54, 43, 19, 46, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35]
        }],
          chart: {
          type: 'area',
          height: 100,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'smooth',
			width: 2,
        },
        fill: {
          opacity: 1,
        },
        yaxis: {
          min: 0
        },
        colors: ['#733aeb'],
        };

        var chart = new ApexCharts(document.querySelector("#post-spark"), options);
        chart.render();
	
	
		
	
		var options = {
          series: [{
          data: [51, 35, 41, 35, 27, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 93, 53, 61, 27, 54, 43, 19, 46, 47]
        }],
          chart: {
          type: 'area',
          height: 100,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'smooth',
			width: 2,
        },
        fill: {
          opacity: 1,
        },
        yaxis: {
          min: 0
        },
        colors: ['#fec801'],
        };

        var chart = new ApexCharts(document.querySelector("#interactions-spark"), options);
        chart.render();
	
	
		var options = {
          series: [41, 17, 15],
          chart: {
			 width: 300,
          type: 'donut',
        },
		 legend: {
			show: false, 
		 },
		dataLabels: {
  			enabled: false,
		},
		colors: ['#4d7cff', '#51ce8a', '#733aeb'],
		responsive: [{
          breakpoint: 1500,
          options: {
            chart: {
              width: 250
            }
          }
        }]	
		
        };
		
        var chart = new ApexCharts(document.querySelector("#revenue7"), options);
        chart.render();
	
	
		 $('.application-bx').slimScroll({
			height: '382px'
		  });
	
	
}); // End of use strict


		var options = {
          series: [{
			name: "Applications",
			data: [15, 35, 50, 23, 30, 90]
		  },
		  {
			name: "Shortlisted",
			data: [0, 48, 75, 35, 36, 70]
		  }],
          chart: {
          height: 335,
          type: 'area',
          toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          }
        },
		colors: ['#51ce8a', '#733aeb'],
        dataLabels: {
          enabled: false
        },
		 legend: {
			show: false,
		 },
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
        },
        };

        var chart = new ApexCharts(document.querySelector("#active-jobs-chart"), options);
        chart.render();
	
		// check if the checkbox has any unchecked item
		checkLegends()

		function checkLegends() {
		  var allLegends = document.querySelectorAll(".legend input[type='checkbox']")

		  for(var i = 0; i < allLegends.length; i++) {
			if(!allLegends[i].checked) {
			  chart.toggleSeries(allLegends[i].value)
			}
		  }
		}

		// toggleSeries accepts a single argument which should match the series name you're trying to toggle
		function toggleSeries(checkbox) {
		  chart.toggleSeries(checkbox.value)
		}
	

	 $(function () {
    /* jQueryKnob */

    $(".knob").knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a = this.angle(this.cv)  // Angle
              , sa = this.startAngle   // Previous start angle
              , sat = this.startAngle  // Start angle
              , ea                     // Previous end angle
              , eat = sat + a          // End angle
              , r = true;

          this.g.lineWidth = this.lineWidth;

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3);

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value);
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3);
            this.g.beginPath();
            this.g.strokeStyle = this.previousColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });
  });
    /* END JQUERY KNOB */


      var options = {
        series: [{
          name: 'series1',
          data: [178, 223, 195, 201, 143, 189, 156, 155, 118, 167, 159]
        }],
        chart: {
		  foreColor: '#ffffff',
          height: 250,
          type: 'line',
			offsetY: -10,
			offsetX: -10,
        },
		colors:['#ffffff'],
        dataLabels: {
          enabled: false
        },
		tooltip: {
			theme: 'dark'
		  },
        stroke: {
          curve: 'smooth',
        },
			
		markers: {
			size: 0,
		},
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
          }
        
        },
        xaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: true,
            formatter: function (val) {
              return val ;
            }
          }
        
        },
		grid: {
			show: true,
			borderColor: '#5578ed',
			strokeDashArray: 0,
			position: 'back',
			xaxis: {
				lines: {
					show: false,
				}
			},   
			yaxis: {
				lines: {
					show: false
				}
			},  
			row: {
				colors: undefined,
				opacity: 0.5,
			},  
			column: {
				colors: undefined,
				opacity: 0.1
			},  
		}
      };

      var chart = new ApexCharts(document.querySelector("#statisticschart3"), options);
      chart.render();


      var options = {
        series: [{
            name: "Profit",
            data: [0, 31, 54, 38, 56, 24, 65, 45, 37, 39]
        }],
        chart: {
			foreColor:"#bac0c7",
          height: 224,
          type: 'area',
          zoom: {
            enabled: false
          }
        },
		colors:['#51ce8a'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          	show: true,
			curve: 'smooth',
			lineCap: 'butt',
			width: 3,
			dashArray: 0, 
        },		
		markers: {
			size: 5,
			colors: '#51ce8a',
			strokeColors: '#ffffff',
			strokeWidth: 3,
			strokeOpacity: 0.9,
			strokeDashArray: 0,
			fillOpacity: 1,
			discrete: [],
			shape: "circle",
			radius: 5,
			offsetX: 0,
			offsetY: 0,
			onClick: undefined,
			onDblClick: undefined,
			hover: {
			  size: undefined,
			  sizeOffset: 3
			}
		},	
        grid: {
			borderColor: '#f7f7f7', 
          row: {
            colors: ['transparent'], // takes an array which will be repeated on columns
            opacity: 0
          },			
		  yaxis: {
			lines: {
			  show: true,
			},
		  },
        },
		fill: {
			type: "gradient",
			gradient: {
			  shadeIntensity: 1,
			  opacityFrom: 0.01,
			  opacityTo: 1,
			  stops: [0, 90, 100]
			}
		  },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
		  labels: {
			show: true,        
          },
          axisBorder: {
            show: true
          },
          axisTicks: {
            show: true
          },
          tooltip: {
            enabled: true,        
          },
        },
        yaxis: {
          labels: {
            show: true,
            formatter: function (val) {
              return val + "K";
            }
          }
        
        },
      };
      var chart = new ApexCharts(document.querySelector("#charts_widget_2_chart"), options);
      chart.render();
	
	
