
var options = {
  chart: {
    type: 'bar',
    height: 300,
    toolbar: {
      show: false
    }
  },
  plotOptions: {
    bar: {
      horizontal: true,
      borderRadius: 2,
      barHeight: '40%',
      dataLabels: {
        position: 'right'
      }
    }
  },
  dataLabels: {
    enabled: true,
    style: {
      fontSize: '11px',
      colors: ['#000000'],
    },
    background: {
      enabled: true,
      borderRadius: 2,
      dropShadow: {
        enabled: true
      }
    }
  },
  fill: {
    colors: ["#5c73d0", "#3cb9e0", "#3ee58f", "#d4ed4d", "#ffa841"],
  },
  series: [{
    name: 'Candidates',
    data: [120, 80, 45, 25]
  }],
  xaxis: {
    categories: ['Applied', 'Interview', 'Offer', 'Joined'],
  },
  tooltip: {
    theme: 'dark',
    y: {
      formatter: function (val) {
        return val + " candidates";
      }
    }
  },
};

var chart = new ApexCharts(document.querySelector("#hiringPipeline"), options);
chart.render();