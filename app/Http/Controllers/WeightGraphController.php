<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\WeightLog;
use Illuminate\Pagination\Paginator;

class WeightGraphController extends Controller
{
	
	function paginate(){
		 $inquiries=WeightLog::paginate(1);
		 return view('create')->with(['inquiries' => $inquiries]);
	}
	
	
   function show(Request $request){
	$avg_weihgt_log = [];
	$max_weihgt_log = [];
	$min_weihgt_log = [];

	//取り出す対象
	$target_days = [
		"202306",
		"202307",
		"202308",
		"202309",
		"202310",
		"202311",
	];

	foreach($target_days as $date_key){
		list($avg, $max, $min) = $this->getWeightLogData($date_key);
		$avg_weihgt_log[] = $avg;
		$max_weihgt_log[] = $max;
		$min_weihgt_log[] = $min;
	}

	return view("weight_graph",[
		"label" => [
			"2023年6月",
			"2023年7月",
			"2023年8月",
			"2023年9月",
			"2023年10月",
			"2023年11月",
		],
		"avg_weight_log" => $avg_weihgt_log,
		"max_weight_log" => $max_weihgt_log,
		"min_weight_log" => $min_weihgt_log,
	]);
}

	function getWeightLogData($date_key){
	$sum = 0;
	$max = 0;
	$min = 500;
	$logs = WeightLog::where("date_key","like",$date_key . "%")->get();

	foreach($logs as $log){
		$weight = $log->weight;
		$sum += $weight;
		$max = max($max, $weight);
		$min = min($min, $weight);
	}

	$avg = ($logs->count() > 0) ? $sum / $logs->count() : 0;

	return [
		$avg,
		$max,
		$min
	];
}
}