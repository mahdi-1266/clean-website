var options = {
  chart: {
    height: 280,
    type: "line",
    zoom: {
      enabled: false
    },
    toolbar: {
      show: false
    }
  },
  colors: ["#2db57c", "#4b84d2", "#6d9cdb", "#8eb4e4", "#b0cdee"],
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: "smooth",
    width: 2
  },
  series: [{
    name: "CTR",
    data: [5, 10, 15, 20, 25]
  }],
  xaxis: {
    categories: ["Jan", "Feb", "Mar", "Apr", "May"],
    title: {
      text: "Months",
      style: { fontWeight: 500, color: "#2666be" }
    },
  },
  yaxis: {
    title: {
      text: "CTR (%)",
      style: { fontWeight: 500, color: "#2db57c" }
    }
  },
  tooltip: {
    theme: "dark",
    shared: true,
    intersect: false
  }
};

var emailCampaignChart = new ApexCharts(document.querySelector("#emailCampaign"), options);
emailCampaignChart.render();