var options = {
  chart: {
    width: 360,
    type: "pie",
  },
  labels: ["Engineering", "Sales", "HR", "Marketing", "Finance", "Support"],
  series: [45, 25, 15, 10, 5, 5],
  legend: {
    position: "bottom",
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    width: 0,
  },
  colors: ["#5c73d0", "#3cb9e0", "#3ee58f", "#d4ed4d", "#ffa841"],
};
var chart = new ApexCharts(document.querySelector("#departmentEmployees"), options);
chart.render();