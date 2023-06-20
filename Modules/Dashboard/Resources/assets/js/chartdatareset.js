// JavaScript Document
$(document).ready(function(){
    //bar chart
	"use strict";
	var saleamount=$("#saleamount").val();
	var exppurchase=$("#purchaseamount").val();
	var alldays=$("#labelstring").val();
	var graphtype=$("#gtype").val();
	var str12 = exppurchase.substring(0, exppurchase.length - 0);
	var hourlyordernumber2 = str12.split(',').map(element => { return Number(element);});
	
	var str10 = saleamount.substring(0, saleamount.length - 2);
    var daylysales2 = str10.split(',');
	
	var str9 = alldays.substring(0, alldays.length - 0);
    var daylist2 = str9.split(',');
	
	
	
	var str13 = saleamount.substring(0, saleamount.length - 2);
	var hourlyorderamount2= str13.split(',').map(element => { return Number(element);});
	
	var str14 = alldays.substring(0, alldays.length - 0);
    var timeslot2 = str14.split(',');
	
	
	
	if(graphtype=='salesgph'){
	var options = {
      series: [{
        name: lang.saleamnt,
        data: daylysales2
      }],
      chart: {
        type: 'area',
        height: 370,
        zoom: {
          enabled: false
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'straight'
      },

    
      labels: daylist2,
      xaxis: {
        type: 'category',
      },
      yaxis: {
        opposite: true
      },
      legend: {
        horizontalAlign: 'left'
      }
    };
    var newchart = new ApexCharts(document.querySelector("#gradientLineArea2"), options);
/*	console.log(newchart.opts);
	newchart.opts.labels=daylist2;
	newchart.opts.series[0].data=daylysales2;*/
    newchart.render();
	}
	
	if(graphtype=='ordertype'){
		var totaltpiesaledata2 = str10.split(',').map(element => { return Number(element);});
		
	var options = {
      series: totaltpiesaledata2,
      chart: {
        width: 460,
        type: 'pie',
      },
      legend: {
        position: 'top',
        horizontalAlign: 'center'
      },
      labels: [lang.Dine_In,lang.online,lang.TakeWay,lang.ThirdParty,lang.qr],
      responsive: [{
        breakpoint: 768,
        options: {
          chart: {
            width: 350
          }
        }
      }]
    };

    var piechart2 = new ApexCharts(document.querySelector("#monochromeChart"), options);
    piechart2.render();
	}
	
	if(graphtype=='purchasegph'){
		var options = {
      series: [{
        name: lang.PurchaseAmount,
        data: daylysales2
      }],
      labels: daylist2,
      chart: {
        height: 350,
        type: "bar"
      },
      plotOptions: {
		bar: {
		  dataLabels: {
			orientation: 'vertical',
			position: 'center' // bottom/center/top
		  }
		}
      },
	  
      colors: ["#00E396"]
    };

    var chartbar = new ApexCharts(document.querySelector("#barChart2"), options);
    chartbar.render();	
	}
	
	if(graphtype=='waitersales'){
		
		var str11 = saleamount.substring(0, saleamount.length - 0);
        var daylysales3 = str11.split(',');
		
		var options = {
      series: [{
		name: lang.TotalOrderValue,
        data: daylysales3
      }],
      chart: {
        type: 'bar',
        height: 350
      },
      plotOptions: {
        bar: {
          borderRadius: 4,
          horizontal: true,
        }
      },
      dataLabels: {
        enabled: false
      },
      xaxis: {
        categories: daylist2,
      }
    };
		var waiterchart = new ApexCharts(document.querySelector("#chartHorizontalBar2"), options);
		waiterchart.render();
		}
		
	if(graphtype=='expincome'){
		
		var str11 = exppurchase.substring(0, exppurchase.length - 2);
        var daylysales4 = str11.split(',');
		
		var options = {
      series: [{
        name: lang.TotalIncome,
        data: daylysales2
      }, {
        name: lang.TotalExpense,
        data: daylysales4
      }],
      chart: {
        height: 350,
        type: 'area'
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth'
      },
      labels: daylist2,
      xaxis: {
        type: 'category',
		categories: []
      },
      tooltip: {
        x: {
          format: 'dd/MM/yy HH:mm'
        },
      },
    };
		var expincomechart = new ApexCharts(document.querySelector("#chartSpline2"), options);
		expincomechart.render();
		}
	
	if(graphtype=='hourlyflow'){
		console.log("Ok");
		console.log(hourlyorderamount2);
		console.log(hourlyordernumber2);
		var options = {
      chart: {
        height: 350,
        type: "line",
        stacked: false,
      },
      plotOptions: {
        line: {
          style: {
            fontSize: "12px",
            fontWeight: "bold",
          },
          background: {
            enabled: true,
            foreColor: "#fff"
          }
        },
        bar: {
          dataLabels: {
            position: "bottom",
            offset: -10,
            style: {
              colors: ["#FFF"]
            },
            background: {
              enabled: true,
              foreColor: "#fff"
            }
          }
        }
      },
      stroke: {
        width: [0, 0, 3, 3],
        curve: 'smooth'
      },
      series: [
        {
          name: lang.OrderValue,
          type: "column",
          data: hourlyorderamount2
        },
        {
          name: lang.ordnumb,
          type: "column",
          data: hourlyordernumber2
        },
        {
          name: lang.OrderValueLine,
          type: "line",
          data: hourlyorderamount2
        },
        {
          name: lang.OrderNumberLine,
          type: "line",
          data: hourlyordernumber2
        }
      ],
	 // colors: ['#008ffb','##00e396','#008ffb','##00e396'],
      colors: ["#008ffb", "#00e396"],
      // colors: ["#480048", "#C04848"],
      // colors: ["#348AC7", "#7474BF"],
      // colors: ["#185a9d", "#43cea2"],

      xaxis: {
        categories: timeslot2,
        axisBorder: {
          show: true,
          color: "#0ABFBC"
        },
        axisTicks: {
          show: true,
          color: "#bec7e0"
        },
        labels: {
          style: {
            fontWeight: 'bold',
          },
        },
      },
     
      tooltip: {
		enabled: true,
        shared: true
      },
      grid: {
        // borderColor: "#eff2f7",
        strokeDashArray: 4,
      },
      legend: {
        position: "top",
        // offsetY: 6,
      },
      responsive: [
        {
          breakpoint: 600,
          options: {
            yaxis: {
              show: false
            },
            legend: {
              show: true
            }
          }
        }
      ]
    };
		var linecharthr = new ApexCharts(document.querySelector("#lineChart2"), options);
		linecharthr.render();
	}
	
});


	
	
