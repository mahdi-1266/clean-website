$(function () {
  $("#world-map-markers2").vectorMap({
    map: "continents_mill",
    hoverColor: false,
    zoomOnScroll: false,
    series: {
      regions: [
        {
          values: gdpData,
          scale: ["#5c73d0", "#798ee3", "#8fa2ee", "#a8b8f9", "#cad5fe"],
        },
      ],
    },
    markerStyle: {
      initial: {
        fill: "#ffffff",
        stroke: "#edae49",
        "fill-opacity": 1,
        "stroke-width": 12,
        "stroke-opacity": 0.4,
        r: 15,
      },
      hover: {
        fill: "#ffffff",
        stroke: "#edae49",
        "fill-opacity": 0.8,
        "stroke-width": 10,
        "stroke-opacity": 0.4,
        r: 12,
        cursor: "pointer",
      },
    },
    regionStyle: {
      initial: {
        fill: "#8eb4e4",
      },
      hover: {
        "fill-opacity": 0.8,
      },
      selected: {
        fill: "#546171",
      },
    },
    backgroundColor: "transparent",
    markers: [
      { latLng: [12, 23], name: "Africa" },
      { latLng: [65, 100], name: "Europe" },
      { latLng: [37, 85], name: "Asia" },
      { latLng: [49, -105], name: "North America" },
      { latLng: [-15, -60], name: "South America" },
      { latLng: [-25, 140], name: "Australia" },
    ],
  });
});
