var options = {
  chart: {
    height: 350,
    type: "area",
    toolbar: { show: false },
  },
  colors: ["#5c73d0"],
  dataLabels: { enabled: false },
  stroke: { curve: "smooth", width: 4 },
  markers: {
    size: 5,
    colors: ["#fff"],
    strokeColors: "#5c73d0",
    strokeWidth: 2,
    hover: { size: 7 }
  },
  series: [
    {
      name: "Trips",
      data: [
        120, 180, 260, 400, 520, 700, 850, 900, 870, 800, 650, 500
      ],
    },

  ],
  grid: {
    borderColor: "#c8d5e4",
    strokeDashArray: 5,
    xaxis: { lines: { show: true } },
    yaxis: { lines: { show: true } },
  },
  xaxis: {
    categories: [
      "Jan", "Feb", "Mar", "Apr", "May", "Jun",
      "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ],
  },
  yaxis: {
    labels: {
      show: true,
      formatter: function (val) {
        return val.toLocaleString();
      }
    },
  },
  fill: {
    type: "gradient",
    gradient: {
      shade: "light",
      gradientToColors: ["#5c73d0"],
      shadeIntensity: 1,
      type: "vertical",
      opacityFrom: 0.4,
      opacityTo: 0,
      stops: [0, 100],
    },
  },
  tooltip: {
    theme: "dark",
    y: {
      formatter: function (val) {
        return val.toLocaleString();
      }
    }
  },
  legend: {
    show: true,
    position: "top",
    horizontalAlign: "right"
  }
};

var chart = new ApexCharts(document.querySelector("#tripStats"), options);
chart.render();
