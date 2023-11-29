<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <title>グラフ</title> 
 <script type="module" src="{{ asset('js/sample.js') }}"></script>
</head>
 <body>
		<h1>グラフ</h1>
   	<canvas id="myChart"></canvas>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<!-- グラフを描画 -->
	
   <script>
	//ラベル
	//ラベル
var labels = @json($label);

//平均体重ログ
var average_weight_log = @json($avg_weight_log);

//最大体重ログ
var max_weight_log = @json($max_weight_log);

//最小体重ログ
var min_weight_log = @json($min_weight_log);

   </script>
   <!-- グラフを描画ここまで -->

 </body>
</html>