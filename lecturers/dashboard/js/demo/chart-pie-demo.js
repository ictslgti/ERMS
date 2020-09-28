// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Direct", "Referral", "Social"],
    datasets: [{
      data: [55, 30, 15],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

// $(document).ready(function () {
//   $.ajax({
//     url: "http://localhost/erms/databases/pie.php",
//     type: "GET",
//     success: function (data) {
//       console.log(data);

//       var dep_id = {
//         ict: [],
//         construction: [],
//         foot: [],
//         automobile: [],
//         mechanical: [],
//         electrical:[]

//       };

//       var len = data.length;

//       for (var i = 0; i < len; i++) {
//         if (data[i].ict == "ict") {
//           dep_id.ict.push(data[i].dep_id);
//         }
//         else if (data[i].construction == "construction") {
//           dep_id.construction.push(data[i].dep_id);
//         }
//         else if (data[i].foot == "foot") {
//           dep_id.foot.push(data[i].dep_id);
//         }
//         else if (data[i].automobile == "automobile") {
//           dep_id.automobile.push(data[i].dep_id);
//         }
//         else if (data[i].mechanical == "mechanical") {
//           dep_id.mechanical.push(data[i].dep_id);
//         }
//         else if (data[i].electrical == "electrical") {
//           dep_id.electrical.push(data[i].dep_id);
//         }

//       }
//       var ctx = $("#myPieChart");

//       var data = {
//         // labels: ["Ict", "construction", "automobile", "foot", "mechanical", "electrical"],
//         datasets : [
//           {
//             label : "ICT",
//             data: dep_id.ict,
//             backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
//             hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
//             hoverBorderColor: "rgba(234, 236, 244, 1)",
//           }, 
//           {
//             label : "construction",
//             data: dep_id.construction,
//             backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
//             hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
//             hoverBorderColor: "rgba(234, 236, 244, 1)",
//           }, 
//           {
//             label : "foot",
//             data: dep_id.foot,
//             backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
//             hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
//             hoverBorderColor: "rgba(234, 236, 244, 1)",
//           },          
//         ]
//       };

//       var options = {
//         maintainAspectRatio: false,
//         tooltips: {
//                 backgroundColor: "rgb(255,255,255)",
//                 bodyFontColor: "#858796",
//                 borderColor: '#dddfeb',
//                 borderWidth: 1,
//                 xPadding: 15,
//                 yPadding: 15,
//                 displayColors: false,
//                 caretPadding: 10,
//               },
//               egend: {
//                       display: false
//                      },
//                     cutoutPercentage: 80,
//       };

//       var chart = new Chart( ctx, {
//         type : "doughnut",
//         data : data,
//         options : options
//       } );

//     },
//     error : function(data) {
//       console.log(data);
//     }
//   });

// });
