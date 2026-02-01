var options = {
  series: [40, 50, 60, 70, 80],
  chart: {
    height: 240,
    type: "radialBar",
  },
  plotOptions: {
    radialBar: {
      dataLabels: {
        name: {
          fontSize: "18px",
        },
        value: {
          fontSize: "24px",
          fontWeight: "bold"
        },
        total: {
          show: true,
          label: "GB",
          formatter: function (w) {
            // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
            return 190;
          },
        },
      },
    },
  },
  labels: ["Doc", "Files", "PDF", "Images", "Videos"],
  colors: [
    "#20a4e4",
    "#f66f9c",
    "#60cc7e",
    "#5abaef",
    "#f2bc64",
    "#ada6d2",
    "#bdb8db",
    "#d2cee7",
    "#eceaf5",
    "#d5d5de",
  ],
};

var chart = new ApexCharts(document.querySelector("#storage"), options);
chart.render();