<?php

	//関数定義ファイル読み込み
	include("include/functions.php");

	//rate.jsのファイルでPOST送信されたデータの受け取り
	$ask_bf = isset($_POST['ask_bf']) ? $_POST['ask_bf'] : '';
	$ask_zf = isset($_POST['ask_zf']) ? $_POST['ask_zf'] : '';
	$ask_cc = isset($_POST['ask_cc']) ? $_POST['ask_cc'] : '';
	$ask_qx = isset($_POST['ask_qx']) ? $_POST['ask_qx'] : '';
	$ask_bb = isset($_POST['ask_bb']) ? $_POST['ask_bb'] : '';
	$bid_bf = isset($_POST['bid_bf']) ? $_POST['bid_bf'] : '';
	$bid_zf = isset($_POST['bid_zf']) ? $_POST['bid_zf'] : '';
	$bid_cc = isset($_POST['bid_cc']) ? $_POST['bid_cc'] : '';
	$bid_qx = isset($_POST['bid_qx']) ? $_POST['bid_qx'] : '';
	$bid_bb = isset($_POST['bid_bb']) ? $_POST['bid_bb'] : '';

	//DB CONNECTION関数実行
	$pdo = dbConnection();

	//実行したいSQL文
	$sql = "INSERT INTO market_table (ask_bf, ask_zf, ask_cc, ask_qx, ask_bb, bid_bf, bid_zf, bid_cc, bid_qx, bid_bb) 
														VALUES (:ask_bf, :ask_zf, :ask_cc, :ask_qx, :ask_bb, :bid_bf, :bid_zf, :bid_cc, :bid_qx, :bid_bb)";

	//実行したいSQL文をセット
	$stmt = $pdo -> prepare($sql);

	//各パラメーターに保存したい値をセット
	$stmt -> bindValue(':ask_bf', $ask_bf, PDO::PARAM_INT);
	$stmt -> bindValue(':ask_zf', $ask_zf, PDO::PARAM_INT);
	$stmt -> bindValue(':ask_cc', $ask_cc, PDO::PARAM_INT);
	$stmt -> bindValue(':ask_qx', $ask_qx, PDO::PARAM_INT);
	$stmt -> bindValue(':ask_bb', $ask_bb, PDO::PARAM_INT);
	$stmt -> bindValue(':bid_bf', $bid_bf, PDO::PARAM_INT);
	$stmt -> bindValue(':bid_zf', $bid_zf, PDO::PARAM_INT);
	$stmt -> bindValue(':bid_cc', $bid_cc, PDO::PARAM_INT);
	$stmt -> bindValue(':bid_qx', $bid_qx, PDO::PARAM_INT);
	$stmt -> bindValue(':bid_bb', $bid_bb, PDO::PARAM_INT);

	//実際に実行　→　それを変数$flagに格納
	$flag = $stmt -> execute();

	//失敗　→　エラーメッセージ表示
	if($flag == false){

		//SQL ERROR関数実行
		queryError($stmt);

	}
	//成功
	else{
		
	}
?>