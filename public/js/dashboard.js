

$(document).ready(function () {    
    Chart.defaults.plugins.legend.display = true;
    Chart.defaults.plugins.legend.position = 'bottom';

    $('#total_pt').text(new Intl.NumberFormat().format($('#total_pt').text()));
    $('#total_inpt').text(new Intl.NumberFormat().format($('#total_inpt').text()));
    $('#total_outpt').text(new Intl.NumberFormat().format($('#total_outpt').text()));
    $('#total_rev').text(new Intl.NumberFormat().format($('#total_rev').text()));


    var ctx = document.getElementById("myChart2").getContext('2d');
    var myChart = new Chart(ctx, {
      plugins: [ChartDataLabels],
      type: 'bar',
      data: {
        labels: ["First Week", "Second Week", "Third Week", "Fourth Week"],
        datasets: [{
          label: 'In Patients',
          data: ip_month,
          backgroundColor: '#47aeff',
          borderColor: '#47aeff',
          borderWidth: 1.5,
          pointBackgroundColor: '#ffffff',
          pointRadius: 2
        },{
          label: 'Out Patients',
          data: op_month,
          backgroundColor: '#f44336',
          borderColor: '#f44336',
          borderWidth: 1.5,
          pointBackgroundColor: '#ffffff',
          pointRadius: 2
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          yAxes: [{
            gridLines: {
              drawBorder: false,
              color: '#f2f2f2',
            },
            ticks: {
              beginAtZero: false,
              stepSize: 20
            }
          }],
          xAxes: [{
            ticks: {
              display: false
            },
            gridLines: {
              display: false
            }
          }]
        },
        plugins: {
          // Change options for ALL labels of THIS CHART
          datalabels: {
            rotation: 0,
            display: true ,
            align :'top',
            clip:false,
            anchor:'end',
            formatter: function(value, context) {
              return new Intl.NumberFormat().format(value);
            }

          }
        }
      }
    });

    var ctx = document.getElementById("myChart3").getContext('2d');
    var myChart = new Chart(ctx, {
      plugins: [ChartDataLabels],
      type: 'bar',
      data: {
        labels: ["First Week", "Second Week", "Third Week", "Fourth Week"],
        datasets: [{
          label: 'In Patients',
          data: ip_month_epis,
          borderWidth: 1,
          backgroundColor: '#47aeff',
          borderColor: '#47aeff',
          borderWidth: 1.5,
          pointBackgroundColor: '#ffffff',
          pointRadius: 2
        },{
          label: 'Out Patients',
          data: op_month_epis,
          borderWidth: 1,
          backgroundColor: '#f44336',
          borderColor: '#f44336',
          borderWidth: 1.5,
          pointBackgroundColor: '#ffffff',
          pointRadius: 2
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          yAxes: [{
            gridLines: {
              drawBorder: false,
              color: '#f2f2f2',
            },
            ticks: {
              beginAtZero: true,
              stepSize: 20
            }
          }],
          xAxes: [{
            ticks: {
              display: false
            },
            gridLines: {
              display: false
            }
          }]
        },
        plugins: {
          // Change options for ALL labels of THIS CHART
          datalabels: {
            rotation: 0,
            display: 'auto',
            align :'top',
            clip:false,
            anchor:'end',
            formatter: function(value, context) {
              return new Intl.NumberFormat().format(value);
            }

          }
        }
      }
    });


    var datapie1 = {
      labels: ['In-Patient', 'Out-Patient'],
      datasets: [
        {
          label: 'Dataset 1',
          backgroundColor: ["#47aeff", "#f44336"],
          data: pt_cnt
        }
      ]
    };


    var ctx = document.getElementById("myChart4").getContext('2d');

    var myChart = new Chart(ctx, {
        plugins: [ChartDataLabels],
        type: 'pie',
        data: datapie1,
        options: {
          responsive: true,
          aspectRatio: 1,
          plugins: {
            legend: false,
            title: false,
            datalabels: {
              color:'white',
              anchor:'center',
              formatter: function(value, context) {
                return new Intl.NumberFormat().format(value);
              }
            }
          }
        },
      }
    );

    var datapie2 = {
      labels: ['In-Patient', 'Out-Patient'],
      datasets: [
        {
          label: 'Dataset 1',
          backgroundColor: ["#47aeff", "#f44336"],
          data: pt_rev
        }
      ]
    };


    var ctx = document.getElementById("myChart5").getContext('2d');

    var myChart = new Chart(ctx, {
        plugins: [ChartDataLabels],
        type: 'pie',
        data: datapie2,
        options: {
          responsive: true,
          aspectRatio: 1,
          plugins: {
            legend: false,
            title: false,
            datalabels: {
              color:'white',
              anchor:'center',
              formatter: function(value, context) {
                return new Intl.NumberFormat().format(value);
              }
            }
          }
        },
      }
    );


  var delay = (function(){
    var timer = 0;
    return function(callback, ms){
      clearTimeout (timer);
      timer = setTimeout(callback, ms);
    };
  })();

  var height = $('div.col5').height();
  console.log(height);


  $("div.tp").css( "height", height+'px');
  $("div.btm").css( "height", "215px" );

  delay(function(){
    $("div.tp").css( "height", height+'px');
    $("div.btm").css( "height", "215px" );
  }, 500 );

});