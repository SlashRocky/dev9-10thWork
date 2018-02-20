/* ----------------------------------------
5秒ごとに価格を取得
---------------------------------------- */
function getRate() {
	
	/*実行したい処理
	---------------------------------------- */
	//ajaxで価格を取得してきているgetRate.phpのファイルにアクセス
	$.ajax({
		url:'/dev9-10thWork/getRate.php',
		type:'GET',
		dataType:'json'
	})
	//成功した場合 変数dataで$priceを受け取る
	.done(function(data){
		console.log('success');
		//data確認
		console.log(data);

		//index.phpに各取引所の売値と買値を出力する
		$("#ask_bf").text(data.ask_bf);
		$("#ask_zf").text(data.ask_zf);
		$("#ask_cc").text(data.ask_cc);
		$("#ask_qx").text(data.ask_qx);
		$("#ask_bb").text(data.ask_bb);
		$("#bid_bf").text(data.bid_bf);
		$("#bid_zf").text(data.bid_zf);
		$("#bid_cc").text(data.bid_cc);
		$("#bid_qx").text(data.bid_qx);
		$("#bid_bb").text(data.bid_bb);
			
		//最大値のテキストの色を赤にする
		if(data.max_ask == data.ask_bf){
			$("#ask_bf").css({"color":"#FF0000","font-weight":"bold"});
		}
		else if(data.max_ask == data.ask_zf){
			$("#ask_zf").css({"color":"#FF0000","font-weight":"bold"});
		}
		else if(data.max_ask == data.ask_cc){
			$("#ask_cc").css({"color":"#FF0000","font-weight":"bold"});
		}
		else if(data.max_ask == data.ask_qx){
			$("#ask_qx").css({"color":"#FF0000","font-weight":"bold"});
		}
		else if(data.max_ask == data.ask_bb){
			$("#ask_bb").css({"color":"#FF0000","font-weight":"bold"});
		}
		console.log(data.max_ask);
		
		//最小値のテキストの色を青にする
		if(data.min_bid == data.bid_bf){
			$("#bid_bf").css({"color":"#0000FF","font-weight":"bold"});
		}
		else if(data.min_bid == data.bid_zf){
			$("#bid_zf").css({"color":"#0000FF","font-weight":"bold"});
		}
		else if(data.min_bid == data.bid_cc){
			$("#bid_cc").css({"color":"#0000FF","font-weight":"bold"});
		}
		else if(data.min_bid == data.bid_qx){
			$("#bid_qx").css({"color":"#0000FF","font-weight":"bold"});
		}
		else if(data.min_bid == data.bid_bb){
			$("#bid_bb").css({"color":"#0000FF","font-weight":"bold"});
		}
		console.log(data.min_bid);
		
		//データベースに値を格納する処理 →　送信するデータを、変数postDataに{名前：値}のセットで記述
		var postData = {'ask_bf':data.ask_bf, 'ask_zf':data.ask_zf, 'ask_cc':data.ask_cc, 'ask_qx':data.ask_qx, 'ask_bb':data.ask_bb, 
										'bid_bf':data.bid_bf, 'bid_zf':data.bid_zf, 'bid_cc':data.bid_cc, 'bid_qx':data.bid_qx, 'bid_bb':data.bid_bb};
		console.log(postData);
		
		//AjaxでpostDataをinsert.phpにPOST送信
		$.ajax({
			type: "POST",
			url: "/dev9-10thWork/insert.php",
			data: postData
		})
		//成功した場合
		.done(function(data){
			
			console.log('success_insert');
			console.log(data);
			//postData確認
			console.log(postData);
			
		})
		//失敗した場合
		.fail(function(XMLHttpRequest, textStatus, errorThrown){
			
			console.log('fail_insert');
			//postData確認
			console.log(postData);
			
		});
		
	})
	//失敗した場合
	.fail(function(data){
		console.log('fail');
		//data確認
		console.log(data);
	});
	
	setTimeout(getRate, 5000);
}

getRate();
  
	
	
	
  
  
