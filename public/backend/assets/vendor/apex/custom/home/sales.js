// Improved Sales and Revenue Chart with ApexCharts

document.addEventListener("DOMContentLoaded", function () {
  // More realistic, varied data
  const salesData = [110, 160, 145, 180, 210, 195, 250, 230, 220, 275, 260, 310];
  const revenueData = [3200, 4100, 3900, 4500, 5000, 4800, 5400, 5300, 5200, 6000, 5900, 6700];
  const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

  let chartDiv = document.getElementById("sales");
  if (!chartDiv) {
    chartDiv = document.createElement("div");
    chartDiv.id = "sales";
    chartDiv.style.maxWidth = "880px";
    chartDiv.style.margin = "40px auto";
    document.body.appendChild(chartDiv);
  }

  const options = {
    chart: {
      height: 400,
      type: "line",
      toolbar: { show: false },
      fontFamily: "Inter, sans-serif",
      foreColor: "#374151",
      dropShadow: {
        enabled: true,
        top: 2,
        left: 2,
        blur: 6,
        opacity: 0.08
      }
    },
    colors: ["#5c73d0", "#2fc174"],
    stroke: {
      width: [0, 3],
      curve: "smooth"
    },
    series: [
      {
        name: "Sales",
        type: "bar",
        data: salesData
      },
      {
        name: "Revenue",
        type: "area",
        data: revenueData
      }
    ],
    plotOptions: {
      bar: {
        borderRadius: 8,
        columnWidth: "38%"
      }
    },
    xaxis: {
      categories: months,
      labels: {
        style: {
          fontSize: "13px"
        }
      },
      axisBorder: { show: false },
      axisTicks: { show: false }
    },
    yaxis: [
      {
        title: {
          text: "Sales",
          style: { color: "#5c73d0", fontWeight: 600 }
        },
        labels: {
          style: {
            fontWeight: 600
          }
        }
      },
      {
        opposite: true,
        title: {
          text: "Revenue ($)",
          style: { color: "#2fc174", fontWeight: 600 }
        },
        labels: {
          style: {
            fontWeight: 600
          }
        }
      }
    ],
    fill: {
      type: ["solid", "gradient"],
      gradient: {
        type: "vertical",
        shadeIntensity: 1,
        gradientToColors: ["#6EE7B7"],
        opacityFrom: 0.6,
        opacityTo: 0.15,
        stops: [0, 100]
      }
    },
    dataLabels: {
      enabled: false
    },
    grid: {
      borderColor: "#E5E7EB",
      strokeDashArray: 4
    },
    tooltip: {
      theme: "dark",
      shared: true,
      intersect: false,
      style: {
        fontSize: "14px"
      },
      y: [
        {
          formatter: val => `${val} Sales`
        },
        {
          formatter: val => `$${val.toLocaleString()}`
        }
      ]
    },
    legend: {
      position: "top",
      horizontalAlign: "right",
      fontSize: "13px",
      markers: {
        radius: 4
      }
    }
  };

  const chart = new ApexCharts(chartDiv, options);
  chart.render();
});
