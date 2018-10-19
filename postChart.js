
var ctx = document.getElementById("barChart");
Chart.defaults.global.defaultFontColor = "#18191A";

var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Social', 'Vocational', 'Emotional', 'Physical', 'Intellectual',  'Spiritual','Environmental'],
    datasets: [{
      label: 'Postassessment Results',
      color: "#fff",
      data: obj,
      backgroundColor: [
        'rgba(255, 97, 131, 0.74)',
        'rgba(54, 162, 235, 0.74)',
        'rgba(255, 206, 86, 0.74)',
        'rgba(75, 192, 192, 0.74)',
        'rgba(153, 102, 255, 0.74)',
        'rgba(255, 159, 64, 0.74)',
				'rgba(121, 255, 97, 0.74)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
    },
		{
      label: 'Preassessment Results',
      color: "#fff",
      data: obj1,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
				'rgba(121, 255, 97, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero:true
        }
      }]
    }
  }
});
