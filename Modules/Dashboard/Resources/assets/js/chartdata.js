// JavaScript Document
$(document).ready(function(){
    //bar chart
	"use strict";
	$('.daterange').daterangepicker({
      "showDropdowns": true,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      "alwaysShowCalendars": true,
      "startDate": "08/31/2022",
      "endDate": "09/06/2022"
    }, function (start, end, label) {
		var graphtype=this.element.attr('title');
		var fromdate=start.format('YYYY-MM-DD');
		var todate=end.format('YYYY-MM-DD');
		var csrf = $('#csrfhashresarvation').val();
	 	var myurl =basicinfo.baseurl+'dashboard/home/checkrange';
	    var dataString = "fromdate="+fromdate+'&todate='+todate+'&graphtype='+graphtype+'&csrf_test_name='+csrf;
		$.ajax({
		 type: "POST",
		 url: myurl,
		 data: dataString,
		 success: function(data) {
			 //alert(graphtype);
			 $('#'+graphtype).html(data);
		 } 
	});
      /*console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');*/
    });
	$('body').on('click', '#hourlyflow', function() {
	 	
 }); 
	
	var monthname=$("#monthname").val();
	var onlinesaleamount=$("#onlinesaleamount").val();
	var alldays=$("#alldays").val();
	var dailylysaleamount=$("#dailylysaleamount").val();
	var dailypurchase=$("#dailypurchase").val();
	var weeksname=$("#weekname").val();
	var weeklysaleamount=$("#weekylysaleamount").val();
	var hourlyordernum=$("#hourlyordernum").val();
	var hourlyorderval=$("#hourlyorderval").val();
	var hourltimeslot=$("#hourltimeslot").val();
	var waitername=$("#waiter").val();
	var waiterordervalue=$("#waiterordervalue").val();
	var monthlysaleamount=$("#monthlysaleamount").val();
	var monthlysaleorder=$("#monthlysaleorder").val();
	
	var customertypesale=$("#customertypesale").val();
	var piesaledata=$("#piesaledata").val();
	
	var incomes=$("#incomes").val();
	var expenses=$("#expenses").val();
	
	var str2 = hourlyorderval.substring(0, hourlyorderval.length - 2);
    var onlinesaleamount2 = str2.split(',');
	var hourlyorderamount = str2.split(',').map(element => { return Number(element);});
	//console.log(hourlyorderamount);
	
	var str3 = hourlyordernum.substring(0, hourlyordernum.length - 0);
    //var onlinesaleorder2 = str3.split(',');
	var hourlyordernumber = str3.split(',').map(element => { return Number(element);});
	console.log(hourlyordernumber);
	
	var str4 = hourltimeslot.substring(0, hourltimeslot.length - 0);
    var timeslot = str4.split(',');
	
	/*var str5 = offlinesaleorder.substring(0, offlinesaleorder.length - 1);
    var offlinesaleorder2 = str5.split(',');*/
	
	var str6 = monthlysaleamount.substring(0, monthlysaleamount.length - 1);
    var monthlysaleamount2 = str6.split(',');
	
	var str7 = monthlysaleorder.substring(0, monthlysaleorder.length - 1);
    var monthlysaleorder2 = str7.split(',');
	
	var str8 = monthname.substring(0, monthname.length - 0);
    var monthnamelist = str8.split(',');
	
	var str9 = alldays.substring(0, alldays.length - 0);
    var daylist = str9.split(',');
	
	//console.log(daylist);
	
	var str10 = dailylysaleamount.substring(0, dailylysaleamount.length - 2);
    var daylysales = str10.split(',');
	
	var strpur = dailypurchase.substring(0, dailypurchase.length - 2);
    var purchasedata = strpur.split(',');
	//console.log(daylysales);
	
	//imcome &expense
	var strinm = incomes.substring(0, incomes.length - 2);
    var allincome = strinm.split(',');
	
	var strexp = expenses.substring(0, expenses.length - 2);
    var allexpen = strexp.split(',');
	
	var str11 = weeksname.substring(0, weeksname.length - 0);
    var daynames = str11.split(',');
	
	var str12 = weeklysaleamount.substring(0, weeklysaleamount.length - 0);
    var weeklysales = str12.split(',');
	
	var str13 = customertypesale.substring(0, customertypesale.length - 0);
    var totaltypewisesales = str13.split(',');
	
	
	var str14 = piesaledata.substring(0, piesaledata.length - 0);
    //var totaltpiesaledata = str14.split(',');
	var totaltpiesaledata = str14.split(',').map(element => { return Number(element);});
	//console.log(arrpie);
	
	var str15 = waitername.substring(0, waitername.length - 0);
	var allwaiter = str15.split(',');
	
	var str16 = waiterordervalue.substring(0, waiterordervalue.length - 0);
	var waiterordertotal = str16.split(',');
				
//chart implementation
var options = {
      series: [{
        name: lang.saleamnt,
        data: daylysales
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

    
      labels: daylist,
      xaxis: {
        type: 'category',
		categories: []
      },
      yaxis: {
        opposite: true
      },
      legend: {
        horizontalAlign: 'left'
      }
    };
    var chart = new ApexCharts(document.querySelector("#gradientLineArea"), options);
    chart.render();
	
	/*chart.updateOptions({
	 series: [{
        name: lang.saleamnt,
        data: daylysales
      }],
	  labels: daylist
	});*/
	
	var options = {
      series: totaltpiesaledata,
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

    var piechart = new ApexCharts(document.querySelector("#monochromeChart"), options);
    piechart.render();

	
	//console.log(purchasedata);
var options = {
      series: [{
        name: lang.PurchaseAmount,
        data: purchasedata
      }],
      labels: daylist,
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

    var chart = new ApexCharts(document.querySelector("#barChart"), options);
    chart.render();	
	
	var options = {
      series: [{
        name: lang.TotalIncome,
        data: allincome
      }, {
        name: lang.TotalExpense,
        data: allexpen
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
      labels: daylist,
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
    var chart = new ApexCharts(document.querySelector("#chartSpline"), options);
    chart.render();
	
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
          data: hourlyorderamount
        },
        {
          name: lang.ordnumb,
          type: "column",
          data: hourlyordernumber
        },
        {
          name: lang.OrderValueLine,
          type: "line",
          data: hourlyorderamount
        },
        {
          name: lang.OrderNumberLine,
          type: "line",
          data: hourlyordernumber
        }
      ],
	 // colors: ['#008ffb','##00e396','#008ffb','##00e396'],
      colors: ["#008ffb", "#00e396"],
      // colors: ["#480048", "#C04848"],
      // colors: ["#348AC7", "#7474BF"],
      // colors: ["#185a9d", "#43cea2"],

      xaxis: {
        categories: timeslot,
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
    var linechart = new ApexCharts(document.querySelector("#lineChart"), options);
	console.log(linechart);
    linechart.render();
	
	var options = {
      series: [{
		name: lang.TotalOrderValue,
        data: waiterordertotal
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
        categories: allwaiter,
      }
    };
    var chart = new ApexCharts(document.querySelector("#chartHorizontalBar"), options);
    chart.render();
	
	
});


	
function searchhourlyflow(){
	    var graphtype="hourlyflow";
		var fromdate=$("#hourlyflowdate").val();
		var todate=$("#hourlyflowdate").val();
		var csrf = $('#csrfhashresarvation').val();
	 	var myurl =basicinfo.baseurl+'dashboard/home/checkrange';
	    var dataString = "fromdate="+fromdate+'&todate='+todate+'&graphtype='+graphtype+'&csrf_test_name='+csrf;
		$.ajax({
		 type: "POST",
		 url: myurl,
		 data: dataString,
		 success: function(data) {
			 $('#hourlyflow').html(data);
		 } 
	});
	}
	$(document).ready(function(){
		var closecash=$("#registerclose").val();
		if(closecash=='done'){
			var csrf = $('#csrfhashresarvation').val();
  var dataString = "csrf_test_name=" + csrf;
  $.ajax({
	  type: "POST",
	  url:  basicinfo.baseurl + "ordermanage/order/closecashregisterprinttest",
	  data: dataString,
	  success: function(data) {
		  printregistersummery(data);
	  }
  });
			}
	});

function printregistersummery(view) {
  printJS({
	  printable: view,
	  type: 'raw-html'
  });
}