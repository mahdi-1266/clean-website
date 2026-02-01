var options = {
  series: [
    {
      name: "2024",
      data: [1000, 2000, 1000, 3000, 2000, 5000, 3000],
    },
    {
      name: "2023",
      data: [-2000, -1000, -2000, -1000, -4000, -2000, -1000],
    },
  ],
  chart: {
    toolbar: {
      show: !1,
    },
    type: "bar",
    height: 407,
    stacked: true,
  },
  colors: [
    "#5c73d0",
    "#2fc174",
    "#8FE6E4"],
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "40%",
      borderRadius: [8],
      borderRadiusApplication: "end",
      borderRadiusWhenStacked: "all",
    },
  },
  stroke: {
    show: true,
    width: 5,
    colors: ['#e0e5ec']
  },


  dataLabels: {
    enabled: false,
  },
  legend: {
    show: false,
  },
  grid: {
    show: true,
    padding: {
      top: 0,
      bottom: 0,
      right: 10,
    },
    borderColor: "#c8d5e4",
    xaxis: {
      lines: {
        show: false,
      },
    },
    yaxis: {
      lines: {
        show: true,
      },
    },
  },
  xaxis: {
    axisBorder: {
      show: false,
    },
    axisTicks: {
      show: false,
    },
    categories: [
      "Sun",
      "Mon",
      "Tue",
      "Wed",
      "Thu",
      "Fri",
      "Sat",
    ],
  },
  yaxis: {
    tickAmount: 4,
    min: -5000,
    max: 5000,
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return '$' + val + '' + 'k';
      },
    },
    theme: 'dark',
  },
};

var chart = new ApexCharts(document.querySelector("#income"), options);

chart.render();