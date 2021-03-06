<!doctype html>
<!--[if lt IE 7]><html lang="ja" prefix="og: http://ogp.me/ns#" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html lang="ja" prefix="og: http://ogp.me/ns#" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html lang="ja" prefix="og: http://ogp.me/ns#" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ja" prefix="og: http://ogp.me/ns#" class="no-js">
  <!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Market GIGS</title>

    <!-- mobile meta -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" href="lib/img/apple-touch-icon.png">
    <link rel="icon" href="lib/img/favicon.png">
    <!--[if IE]>
    <link rel="shortcut icon" href="/lib/img/favicon.ico">
    <![endif]-->
    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage" content="lib/img/win8-tile-icon.png">

    <!-- favicon -->
    <link rel="icon" type="image/vnd.microsoft.icon" href="lib/img/favicon.ico" />

    <!-- css -->
    <link rel="stylesheet" href="lib/css/style.css">
    <link rel="stylesheet" href="lib/css/memo.css">
    <link rel="stylesheet" href="lib/css/rate.css">
    
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- accordion CSS -->
    <noscript>
      <style>
        .st-accordion ul li{
          height:auto;
        }
        .st-accordion ul li > a span{
          visibility:hidden;
        }
      </style>
    </noscript>

    <!-- modal CSS -->
    <link type="text/css" rel="stylesheet" href="lib/css/remodal.css">
    <link type="text/css" rel="stylesheet" href="lib/css/remodal-default-theme.css">
    <style>
      .remodal-bg.with-red-theme.remodal-is-opening,
      .remodal-bg.with-red-theme.remodal-is-opened {
        filter: none;
      }

      .remodal-overlay.with-red-theme {
        background-color: #f44336;
      }

      .remodal.with-red-theme {
        background: #fff;
      }
    </style>

    <!-- Google CDN jQuery with fallback to local -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="lib/js/minified/jquery-1.11.0.min.js"><\/script>')
    </script>

    <!-- ColumnScroller -->
    <script src="lib/js/jquery-smartColumnScroller.js"></script>
    <script>
      $(window).load(function() {
        $('#header').smartColumnScroller();
      });
    </script>

    <!-- modal JS -->
    <script src="lib/js/remodal.js"></script>
    <script>
      $(document).on('opening', '.remodal', function () {
        console.log('opening');
      });
      $(document).on('opened', '.remodal', function () {
        console.log('opened');
      });
      $(document).on('closing', '.remodal', function (e) {
        console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
      });
      $(document).on('closed', '.remodal', function (e) {
        console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
      });
      $(document).on('confirmation', '.remodal', function () {
        console.log('confirmation');
      });
      $(document).on('cancellation', '.remodal', function () {
        console.log('cancellation');
      });
      //  Usage:
      //  $(function() {
      //
      //    // In this case the initialization function returns the already created instance
      //    var inst = $('[data-remodal-id=modal]').remodal();
      //
      //    inst.open();
      //    inst.close();
      //    inst.getState();
      //    inst.destroy();
      //  });
      //  The second way to initialize:
      $('[data-remodal-id=modal2]').remodal({
        modifier: 'with-red-theme'
      });
    </script>

		<!-- 日付時刻ライブラリ -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
		<!-- チャートライブラリ -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
		<!-- Chart.js のストリーミング拡張プラグイン -->
		<script type="text/javascript" src="https://github.com/nagix/chartjs-plugin-streaming/releases/download/v1.2.0/chartjs-plugin-streaming.js"></script>
		<!-- Pub/Sub メッセージングライブラリ -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pusher/4.1.0/pusher.js"></script>

  </head>

  <body itemscope itemtype="http://schema.org/WebPage" onLoad="tm()">
    <div id="container" class="remodal-bg p-relative">

      <!-- header -->
      <header id="header" class="bs-bbox w200 h100 bg-3 p-fixed top0 left0 o-scroll">
        <div id="header-inner"  class="">
          <h1 class="ta-center">
            <button class="all-btn color-f ff-roboto fs-caps fs-20 lh-03 c-pointer op-05 " value="all">
              &lt;&nbsp;Market GIGS&nbsp;&gt;
            </button>
          </h1>
					<!--
          <a href="#modal" class="new-btn color-f fs-14 d-block ta-center w90 m-auto b-all-f pr20 pl20 pt10 pb10 br-4 bg-3 op-05 c-pointer">
            <i class="fa fa-plus color-f"></i>&emsp;新規作成
          </a>
					-->
					<!--
          <div class="ta-center mt20 mb20">
            <input name="" value="" placeholder="My Memo 内を検索" class="search w64 m-auto pt10 pb10 pr10 pl40 color-22 fs-14 b-all-bf br-4" type="text">
          </div>
					-->
          <div class="list-box">
            <ul class="list-box-inner ta-center">
							<!--
              <li class="list h60p btn btn1" value="HTML"><a href="javascript:void(0);" class="ff-robotoCds color-f fs-20 fw-bold lh-03 d-block">HTML</a></li>
              <li class="list h60p btn btn2" value="CSS"><a href="javascript:void(0);" class="ff-robotoCds color-f fs-20 fw-bold lh-03 d-block">CSS</a></li>
              <li class="list h60p btn btn3" value="JavaScript"><a href="javascript:void(0);" class="ff-robotoCds color-f fs-20 fw-bold lh-03 d-block">JavaScript</a></li>
              <li class="list h60p btn btn4" value="jQuery"><a href="javascript:void(0);" class="ff-robotoCds color-f fs-20 fw-bold lh-03 d-block">jQuery</a></li>
              <li class="list h60p btn btn5" value="React"><a href="javascript:void(0);" class="ff-robotoCds color-f fs-20 fw-bold lh-03 d-block">React</a></li>
              <li class="list h60p btn btn6" value="Node.js"><a href="javascript:void(0);" class="ff-robotoCds color-f fs-20 fw-bold lh-03 d-block">Node.js</a></li>
              <li class="list h60p btn btn7" value="PHP"><a href="javascript:void(0);" class="ff-robotoCds color-f fs-20 fw-bold lh-03 d-block">PHP</a></li>
              <li class="list h60p btn btn8" value="Laravel"><a href="javascript:void(0);" class="ff-robotoCds color-f fs-20 fw-bold lh-03 d-block">Laravel</a></li>
              <li class="list h60p btn btn9" value="MySQL"><a href="javascript:void(0);" class="ff-robotoCds color-f fs-20 fw-bold lh-03 d-block">My SQL</a></li>
              <li class="list h60p btn btn10" value="Ruby"><a href="javascript:void(0);" class="ff-robotoCds color-f fs-20 fw-bold lh-03 d-block">Ruby</a></li>
              <li class="list h60p btn btn11" value="RubyOnRails"><a href="javascript:void(0);" class="ff-robotoCds color-f fs-20 fw-bold lh-03 d-block">Ruby on Rails</a></li>
              <li class="list h60p btn btn12" value="Other"><a href="javascript:void(0);" class="ff-robotoCds color-f fs-20 fw-bold lh-03 d-block">Other</a></li>
							-->
            </ul>
          </div>
        </div>
      </header>

      <!-- contents -->
      <main id="main" class="w100 h100 bg-e3 p-fixed top0 left200 o-scroll">
        <section id="main-inner" class="mr200 pt30 pb10">
          <div class="container">
            <div class="wrapper">
              <div id="st-accordion" class="st-accordion">
               
                <table style="width:100%;">
                  <tbody>
                    <tr>
                      <th style="width:20%; background-color:#378aa3; color:#fff;"><center>取引所</center></th>
                      <th style="width:40%; background-color:#378aa3; color:#fff;"><center>売値</center></th>
                      <th style="width:40%; background-color:#378aa3; color:#fff;"><center>買値</center></th>
                    </tr>
                    <tr>
                      <td style="background-color:#e6f1f4;"><center>bitFlyer</center></td>
                      <td style="background-color:#e6f1f4;"><center id="ask_bf"></center></td>
                      <td style="background-color:#e6f1f4;"><center id="bid_bf"></center></td>
                    </tr>
                    <tr>
                      <td style="background-color:#f8f8fc;"><center>zaif</center></td>
                      <td style="background-color:#f8f8fc;"><center id="ask_zf"></center></td>
                      <td style="background-color:#f8f8fc;"><center id="bid_zf"></center></td>
                    </tr>
                    <tr>
                      <td style="background-color:#e6f1f4;"><center>coincheck</center></td>
                      <td style="background-color:#e6f1f4;"><center id="ask_cc"></center></td>
                      <td style="background-color:#e6f1f4;"><center id="bid_cc"></center></td>
                    </tr>
                    <tr>
                      <td style="background-color:#f8f8fc;"><center>Quoinex</center></td>
                      <td style="background-color:#f8f8fc;"><center id="ask_qx"></center></td>
                      <td style="background-color:#f8f8fc;"><center id="bid_qx"></center></td>
                    </tr>
                    <tr>
                      <td style="background-color:#e6f1f4;"><center>bitbank</center></td>
                      <td style="background-color:#e6f1f4;"><center id="ask_bb"></center></td>
                      <td style="background-color:#e6f1f4;"><center id="bid_bb"></center></td>
                    </tr>
                  </tbody>
                </table>
                
								<canvas id="CoinCheck" style="display: block; width: 820px; height: 410px;">CoinCheck</canvas>
                
              </div>
            </div>
          </div>
        </section>
      </main>
      
		</div>
   
    <!-- rate JS -->
    <script src="lib/js/rate.js"></script>
		<!-- chart JS -->
		<script src="lib/js/chart.js"></script>
    
    <!-- memo JS -->
    <script src="lib/js/memo.js"></script>

    <!-- Accordion JS -->
    <script src="lib/js/jquery.accordion.js"></script>
    <script src="lib/js/jquery.easing.1.3.js"></script>
    <script>
      $(function() {　
        $('#st-accordion').accordion();
        $('#st-accordion').$items.find('div.st-content').hide();
      });
    </script>

  </body>
</html>