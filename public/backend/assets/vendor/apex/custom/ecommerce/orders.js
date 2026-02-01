var options = {
  series: [
    {
      name: 'Visitors',
      data: [110, 140, 180, 160, 220, 260, 300, 290, 280, 240, 200, 170]
    },
    {
      name: 'Orders',
      data: [60, 90, 120, 100, 150, 190, 210, 205, 198, 170, 140, 110]
    }
  ],
  chart: {
    height: 400,
    type: 'area',
    toolbar: { show: false }
  },
  colors: ['#5c73d0', '#2fc174'],
  dataLabels: { enabled: false },
  stroke: {
    curve: 'smooth',
    width: 3
  },
  markers: {
    size: 5,
    strokeWidth: 2,
    colors: ['#fff'],
    strokeColors: ['#5c73d0', '#2fc174'],
    hover: { size: 7 }
  },
  fill: {
    type: 'gradient',
    gradient: {
      shade: 'light',
      type: 'vertical',
      opacityFrom: 0.4,
      opacityTo: 0.05,
      stops: [0, 100]
    }
  },
  grid: {
    borderColor: '#cddceb',
    strokeDashArray: 4,
    padding: { left: 15, right: 15 }
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    title: {
      text: 'Month',
      style: { fontWeight: 600 }
    },
    labels: {
      style: {
        fontSize: '13px'
      }
    }
  },
  yaxis: {
    title: {
      text: 'Volume',
      style: { fontWeight: 600 }
    },
    labels: {
      style: {
        fontSize: '13px'
      }
    }
  },
  legend: {
    show: true,
    fontWeight: 600,
    offsetY: 10,
    itemMargin: { horizontal: 12 }
  },
  tooltip: {
    theme: 'dark',
    y: {
      formatter: function (val) {
        return val.toLocaleString();
      }
    }
  }
};

var chart = new ApexCharts(document.querySelector("#orders"), options);
chart.render();
