var options = {
  chart: {
    type: "bar",
    height: 256,
    toolbar: {
      show: false
    }
  },
  plotOptions: {
    bar: {
      horizontal: true,
      endingShape: "rounded",
      startingShape: "rounded",
      barHeight: "50%",
      distributed: true,
      columnWidth: "50%"
    }
  },
  dataLabels: {
    enabled: false
  },
  series: [{
    name: "Employee Experience",
    data: [4, 3, 5, 2, 4]
  }],
  xaxis: {
    categories: ["Engineering", "Sales", "HR", "Marketing", "Finance"]
  },
  colors: ["#5c73d0", "#3cb9e0", "#3ee58f", "#d4ed4d", "#ffa841"],
  tooltip: {
    theme: "dark",
    y: {
      formatter: function (val) {
        return val + " years";
      }
    }
  },
};

var chart = new ApexCharts(document.querySelector("#employeeExperience"), options);
chart.render();
