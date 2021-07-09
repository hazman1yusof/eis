"use strict";


var ctx = document.getElementById("myChart2").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    datasets: [{
      label: 'out patients',
      data: [46, 45, 33, 50, 43, 30, 48],
      borderWidth: 1,
      backgroundColor: '#6777ef',
      borderColor: '#6777ef',
      borderWidth: 1.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 2
    },{
      label: 'in patients',
      data: [23, 12, 54, 23, 45, 12, 20],
      borderWidth: 1,
      backgroundColor: 'red',
      borderColor: 'red',
      borderWidth: 1.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 2
    }]
  },
  options: {
    legend: {
      display: false
    },
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
  }
});
