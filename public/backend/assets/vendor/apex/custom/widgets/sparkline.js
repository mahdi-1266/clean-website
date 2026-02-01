// Sparkline 1
var options1 = {
  series: [
    {
      name: "Sales",
      data: [1, 2, 1, 2, 1, 2, 3],
    },
  ],
  chart: {
    type: "line",
    height: 30,
    width: 90,
    sparkline: {
      enabled: true,
    },
  },
  colors: ["#2666be"],
  stroke: {
    width: 5,
  },
  xaxis: {
    type: "day",
    categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
  },
  tooltip: {
    theme: 'dark',
    y: {
      formatter: function (val) {
        return val + "K";
      },
    },
  },
};
var chart1 = new ApexCharts(document.querySelector("#option1"), options1);
chart1.render();


// Sparkline 2
var options2 = {
  series: [
    {
      name: "Sales",
      data: [1, 2, 1, 2, 1, 2, 3],
    },
  ],
  chart: {
    type: "line",
    height: 30,
    width: 90,
    sparkline: {
      enabled: true,
    },
  },
  colors: ["#ff595e"],
  stroke: {
    width: 5,
  },
  xaxis: {
    type: "day",
    categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
  },
  tooltip: {
    theme: 'dark',
    y: {
      formatter: function (val) {
        return val + "K";
      },
    },
  },
};
var chart2 = new ApexCharts(document.querySelector("#option2"), options2);
chart2.render();


// Sparkline 3
var options3 = {
  series: [
    {
      name: "Sales",
      data: [1, 2, 1, 2, 1, 2, 3],
    },
  ],
  chart: {
    type: "line",
    height: 30,
    width: 90,
    sparkline: {
      enabled: true,
    },
  },
  colors: ["#1993e0"],
  stroke: {
    width: 5,
  },
  xaxis: {
    type: "day",
    categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
  },
  tooltip: {
    theme: 'dark',
    y: {
      formatter: function (val) {
        return val + "K";
      },
    },
  },
};
var chart3 = new ApexCharts(document.querySelector("#option3"), options3);
chart3.render();


// Sparkline 4
var options4 = {
  series: [
    {
      name: "Sales",
      data: [1, 2, 1, 2, 1, 2, 3],
    },
  ],
  chart: {
    type: "line",
    height: 30,
    width: 90,
    sparkline: {
      enabled: true,
    },
  },
  colors: ["#2db57c"],
  stroke: {
    width: 5,
  },
  xaxis: {
    type: "day",
    categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
  },
  tooltip: {
    theme: 'dark',
    y: {
      formatter: function (val) {
        return val + "K";
      },
    },
  },
};
var chart4 = new ApexCharts(document.querySelector("#option4"), options4);
chart4.render();
