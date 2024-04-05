


$(function () {
  'use strict';
  
  
  
  
  
 var options = {
          series: [{
          data: [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 60, 53, 61, 27, 54, 43, 19, 46]
        }],
          chart: {
          type: 'area',
          height: 145,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'smooth',
      width: 3,
        },
        fill: {
          opacity: 1,
        },
        yaxis: {
          min: 0
        },
        colors: ['#fb3d4e'],
        
        
        };

        var chart = new ApexCharts(document.querySelector("#spark3"), options);
        chart.render();





        var options = {
          series: [44, 55, 67],
          chart: {
      foreColor: '#898989',
          height: 185 ,
          type: 'radialBar',
        },
    colors:['#007eff','#ea9715','#fb3d4e'],
        plotOptions: {
          radialBar: {
      track: {
      show: false,
      },
            dataLabels: {
              name: {
                fontSize: '22px',
              },
              value: {
                fontSize: '16px',
              },
              total: {
                show: true,
                label: 'Total',
                formatter: function (w) {
                  // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                  return 249
                }
              }
            }
          }
        },
        labels: ['Revenue', 'Income', 'Profit'],
        };

        var chart = new ApexCharts(document.querySelector("#revenue_history"), options);
        chart.render();


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
    colors: ['#4d7cff', '#FF6C6C'],
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
          height: 255,
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
    colors:['#FF6C6C'],
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
      colors: '#FF6C6C',
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

}); // End of use strict