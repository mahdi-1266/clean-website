document.addEventListener("DOMContentLoaded", function () {
  var options = {
    chart: {
      type: "bar",
      height: 300,
      toolbar: {
        show: false
      }
    },
    plotOptions: {
      bar: {
        endingShape: "rounded",
        startingShape: "rounded",
        distributed: true,
        columnWidth: "50%"
      }
    },
    dataLabels: {
      enabled: false
    },
    series: [
      {
        name: "Open Positions",
        data: [10, 15, 20, 25, 30],
      },
    ],
    xaxis: {
      categories: [
        "Designer",
        "Frontend",
        "Backend",
        "Full Stack",
        "DevOps",
      ],
    },
    colors: ["#5c73d0", "#3cb9e0", "#3ee58f", "#d4ed4d", "#ffa841"],
    tooltip: {
      theme: "dark",
    },
  };

  var chart = new ApexCharts(
    document.querySelector("#topOpenPositions"),
    options
  );

  chart.render();
});