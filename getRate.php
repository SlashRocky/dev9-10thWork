<?php
  /* ----------------------------------------
  bitFlyerのAPIに接続 -> 値を取得
  ---------------------------------------- */
  $base_url_bf = "https://bitflyer.jp/api/echo/price";
  $access_url_bf = $base_url_bf;
  $file_get_bf = file_get_contents($access_url_bf);
  $json_decode_bf = json_decode($file_get_bf,true);

  //売値
  $ask_bf = number_format($json_decode_bf["ask"]);
  //買値
  $bid_bf = number_format($json_decode_bf["bid"]);

  /* ----------------------------------------
  ZaifのAPIに接続 -> 値を取得
  ---------------------------------------- */
  $base_url_zf = "https://api.zaif.jp/api/1/ticker/btc_jpy";
  $access_url_zf = $base_url_zf;
  $file_get_zf = file_get_contents($access_url_zf);
  $json_decode_zf = json_decode($file_get_zf,true);

  //売値
  $ask_zf = number_format($json_decode_zf["ask"]);
  //買値
  $bid_zf = number_format($json_decode_zf["bid"]);

  /* ----------------------------------------
  coincheckのAPIに接続 -> 値を取得
  ---------------------------------------- */
  $base_url_cc = "https://coincheck.com/api/ticker/";
  $access_url_cc = $base_url_cc;
  $file_get_cc = file_get_contents($access_url_cc);
  $json_decode_cc = json_decode($file_get_cc,true);

  //売値
  $ask_cc = number_format($json_decode_cc["ask"]);
  //買値
  $bid_cc = number_format($json_decode_cc["bid"]);

  /* ----------------------------------------
  QuoinexのAPIに接続 -> 値を取得
  ---------------------------------------- */
  $base_url_qx = "https://api.quoine.com/products/code/CASH/BTCJPY";
  $access_url_qx = $base_url_qx;
  $file_get_qx = file_get_contents($access_url_qx);
  $json_decode_qx = json_decode($file_get_qx,true);

  //売値
  $ask_qx = number_format($json_decode_qx["high_market_ask"]);
  //買値
  $bid_qx = number_format($json_decode_qx["low_market_bid"]);

  /* ----------------------------------------
  bitbankのAPIに接続 -> 値を取得
  ---------------------------------------- */
  $base_url_bb = "https://public.bitbank.cc/btc_jpy/depth";
  $access_url_bb = $base_url_bb;
  $file_get_bb = file_get_contents($access_url_bb);
  $json_decode_bb = json_decode($file_get_bb,true);

  //売値
  $ask_bb = number_format( ceil($json_decode_bb["data"]["asks"]["0"]["0"]) );
  //買値
  $bid_bb = number_format( ceil($json_decode_bb["data"]["bids"]["0"]["0"]) );

	/* ----------------------------------------
	売値の最高値
	---------------------------------------- */
	$max_ask = max($ask_bf, $ask_zf, $ask_cc, $ask_qx, $ask_bb);

	/* ----------------------------------------
  買値の最安値
  ---------------------------------------- */
	$min_bid = min($bid_bf, $bid_zf, $bid_cc, $bid_qx, $bid_bb);

  /* ----------------------------------------
  取得した値を配列にして変数$priceに格納
  ---------------------------------------- */
  $price = array(
    'ask_bf' => $ask_bf,
    'ask_zf' => $ask_zf,
    'ask_cc' => $ask_cc,
    'ask_qx' => $ask_qx,
    'ask_bb' => $ask_bb,
    'bid_bf' => $bid_bf,
    'bid_zf' => $bid_zf,
    'bid_cc' => $bid_cc,
    'bid_qx' => $bid_qx,
    'bid_bb' => $bid_bb,
    'max_ask' => $max_ask,
    'min_bid' => $min_bid
  );

  /* ----------------------------------------
  $priceをJSON形式で出力する
  ---------------------------------------- */
  header('Content-Type: application/json');
  echo json_encode( $price );

?>