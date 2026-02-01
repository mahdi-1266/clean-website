var options = {
  series: [75],
  chart: {
    height: 240,
    type: 'radialBar',
    toolbar: {
      show: false
    }
  },
  plotOptions: {
    radialBar: {
      startAngle: -135,
      endAngle: 225,
      hollow: {
        margin: 0,
        size: '60%',
        background: '#e0e5ec',
        image: undefined,
        imageOffsetX: 0,
        imageOffsetY: 0,
        position: 'front',
        dropShadow: {
          enabled: true,
          top: 3,
          left: 0,
          blur: 4,
          opacity: 0.3
        }
      },
      track: {
        background: '#e0e5ec',
        strokeWidth: '60%',
        margin: 0, // margin is in pixels
        dropShadow: {
          enabled: true,
          top: -3,
          left: 0,
          blur: 14,
          opacity: 0.2,
        }
      },

      dataLabels: {
        show: true,
        name: {
          offsetY: -5,
          show: true,
          color: '#000000',
          fontSize: '16px'
        },
        value: {
          formatter: function (val) {
            return parseInt(val) + '%';
          },
          color: '#2666be',
          fontSize: '30px',
          fontWeight: 'bold',
          show: true,
        }
      }
    }
  },
  fill: {
    type: 'gradient',
    gradient: {
      shade: 'light',
      type: 'horizontal',
      shadeIntensity: 0.5,
      gradientToColors: [],
      inverseColors: true,
      opacityFrom: 1,
      opacityTo: 1,
      stops: [0, 100],
      colorStops: [
        {
          offset: 0,
          color: "#f66f9c",
          opacity: 1
        },
        {
          offset: 20,
          color: "#5abaef",
          opacity: 1
        },
        {
          offset: 60,
          color: "#76c78d",
          opacity: 1
        },
        {
          offset: 100,
          color: "#f2bc64",
          opacity: 1
        }
      ],
    }
  },
  stroke: {
    lineCap: 'round'
  },
  labels: ['Uploads'],
};

var chart = new ApexCharts(document.querySelector("#uploads"), options);
chart.render();