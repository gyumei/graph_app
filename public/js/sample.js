//グラフを描画
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
		type: 'line',
		data : {
			labels: labels,
			datasets: [
				{
					label: '平均体重',
					data: average_weight_log,
					borderColor: "rgba(0,0,255,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				},
				{
					label: '最大',
					data: max_weight_log,
					borderColor: "rgba(0,255,0,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				},
				{
					label: '最小',
					data: min_weight_log,
					borderColor: "rgba(255,0,0,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				}
			]
		},
		options: {
			title: {
				display: true,
				text: '体重ログ（６ヶ月平均）'
			}
		}
   });
  