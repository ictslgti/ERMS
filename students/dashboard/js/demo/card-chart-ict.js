$(document).ready(function () {
  $.ajax({
    url: "http://localhost/erms/databases/chart.php",
    type: "GET",
    success: function (data) {
      console.log(data);

      var score = {
        TeamA: [],
        TeamB: []
      };

      var len = data.length;

      for (var i = 0; i < len; i++) {
        if (data[i].team == "TeamA") {
          score.TeamA.push(data[i].score);
        }
        else if (data[i].team == "TeamB") {
          score.TeamB.push(data[i].score);
        }
      }

      //get canvas
      var ctx = $("#lineChart-ict");

      var data = {
        labels: ["match1", "match2", "match3", "match4", "match5"],
        datasets: [
          {
            label: "TeamA score",
            data: score.TeamB,
            backgroundColor: "rgba(255, 191, 0)",
            borderColor: "orange",
            fill: true,
            lineTension: 0,
            pointRadius: 5,
            backgroundColor: "rgba(224, 224, 224)",
            borderColor: "rgba(255, 191, 0)",
            pointRadius: 3,
            pointBackgroundColor: "rgba(255, 191, 0)",
            pointBorderColor: "rgba(255, 191, 0)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 2,

          },
          {
            label: "TeamB score",
            data: score.TeamA,
            backgroundColor: "rgba(224, 224, 224)",
            borderColor: "rgba(63, 0, 255)",
            fill: false,
            lineTension: 0,
            pointRadius: 5,
            pointRadius: 3,
            pointBackgroundColor: "rgba(63, 0, 255)",
            pointBorderColor: "rgba(63, 0, 255)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 2,
          }
        ]
      };

      var options = {
        maintainAspectRatio: false,
        layout: {
          padding: {
            left: 10,
            right: 25,
            top: 25,
            bottom: 0
          }
        },
        legend: {
          display: true,
          position: "bottom"
        },
        yAxes: [{
          ticks: {
            maxTicksLimit: 5,
            padding: 10,
          },
          gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
          },
          scales: {
            xAxes: [{
              time: {
                unit: 'date'
              },
              gridLines: {
                display: false,
                drawBorder: false
              },
              ticks: {
                maxTicksLimit: 7
              }
            }],
          },
          tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            titleMarginBottom: 10,
            titleFontColor: '#6e707e',
            titleFontSize: 14,
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            intersect: false,
            mode: 'index',
            caretPadding: 10,
            callbacks: {
              label: function (tooltipItem, chart) {
                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
              }
            }
          },
          legend: {
            display: false
          },
          yAxes: [{
            ticks: {
              maxTicksLimit: 5,
              padding: 10,
              // Include a dollar sign in the ticks
              callback: function (value, index, values) {
                return '$' + number_format(value);
              }
            },
            gridLines: {
              color: "rgb(234, 236, 244)",
              zeroLineColor: "rgb(234, 236, 244)",
              drawBorder: false,
              borderDash: [2],
              zeroLineBorderDash: [2]
            }
          }],
        }],

      };


      var chart = new Chart(ctx, {
        type: "line",
        data: data,
        options: options
      });

    },
    error: function (data) {
      console.log(data);
    }
  });

});