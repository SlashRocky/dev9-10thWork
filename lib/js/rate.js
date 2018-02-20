/* ----------------------------------------
関数定義
---------------------------------------- */
  
$(function(){
  
  $.ajax({
    url:'/dev9-10thWork/getRate.php',
    type:'GET',
    dataType:'json'
  })
  
  //成功した場合
  .done(function(data){
    
    console.log('success');
    //data確認
    console.log(data);
    
    $("#ask_bf").text(data.ask_bf);
    $("#ask_zf").text(ask_zf);
    $("#ask_cc").text(ask_cc);
    $("#ask_qx").text(ask_qx);
    $("#ask_bb").text(ask_bb);
    $("#bid_bf").text(bid_bf);
    $("#bid_zf").text(bid_zf);
    $("#bid_cc").text(bid_cc);
    $("#bid_qx").text(bid_qx);
    $("#bid_bb").text(bid_bb);
  })
  
  
  
  //失敗した場合
  .fail(function(data){
    
    console.log('fail');
    //data確認
    console.log(data);
    
  })
  
});