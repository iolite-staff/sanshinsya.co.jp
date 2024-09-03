<?php
	error_reporting(0);
	foreach($_POST as $key=>$value) {
		if(is_array($_POST[$key])){
			foreach ($_POST[$key] as $value_key => $value_text) {
				$_POST[$key][$value_key] = htmlspecialchars($value_text,ENT_QUOTES);
			}
		}else{
			$_POST[$key] = htmlspecialchars($value,ENT_QUOTES);
		}
	}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<meta name="format-detection" content="telephone=no, email=no, address=no">
<title>学生専用申し込みフォーム｜株式会社三進社</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/screen.css">
<link rel="stylesheet" type="text/css" media="screen and (max-width:767px)" href="../css/screen_sp.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:768px)" href="../css/screen_pc.css">
<link rel="stylesheet" type="text/css" media="print" href="../css/print.css">
<link rel="apple-touch-icon" href="../apple-touch-icon.png">
<link rel="icon" type="image/png" href="../favicon-.png" sizes="16x16">
<link rel="icon" type="image/png" href="../favicon.png" sizes="32x32">
<script type="text/javascript" src="../lib/jquery/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.js"></script>
<script type="text/javascript" src="../js/validate_config.js"></script>
</head>
<body>
<header>
	<h1>
		<a href="../index.html">
			<img src="../img/interface/logo.png" alt="SANSHINSYA">
		</a>
	</h1>
	<nav>
        <ul>
			<li>
				<a href="../company/">企業情報</a>
				<ul class="menu_inner menu_inner_1">
					<li><a href="../company/policy/">こだわり</a></li>
					<li><a href="../company/csr/" class="small">CSR活動及び<br>コンプライアンス</a></li>
					<li><a href="../company/facility/">事業所一覧</a></li>
				</ul>
			</li>
			<li>
				<a href="../print_service/">印刷サービス</a>
				<ul class="menu_inner menu_inner_2">
					
					<li><a href="../print_service/prepress/">製版</a></li>
					<li><a href="../print_service/print/">印刷</a></li>
					<li><a href="../print_service/bookbinding/">製本</a></li>
				</ul>
			</li>
			<li>
				<a href="../sp_service/">セールスプロモーション</a>
				<ul class="menu_inner menu_inner_3">
					<li><a href="../sp_service/tools/" class="small">各種プロモーションツール</a></li>
					<li><a href="../sp_service/management/">品質管理</a></li>
				</ul>
			</li>
			<li><a href="../contact/">お問い合わせ</a></li>
		</ul>
	</nav>

	<span id="nav_sp"><span></span><span></span><span></span></span>

</header>

<article id="sub_contents_area">

	<div id="title_area">
		<h1>
			学生専用申し込みフォーム
		</h1>
	</div>

	<div id="bread">
		<div class="inner">
			<ul>
				<li><a href="../">HOME</a></li>
				<li><span>学生専用申し込みフォーム</span></li>
			</ul>
		</div>
	</div>

	<section id="student_form" class="student_confirm">
		<div>
			<form method="POST" action="./complete.php" name="contact_form" id="contact_form" autocomplete="off">
			<h2 class="confirm">確認画面</h2>
				<div class="form_area">
					<table class="form_table">
						<tbody>
							<tr>
								<th><span>お名前</span></th>
								<td class="input_list">
								<?=$_POST['family-name']?><input type="hidden" value="<?=$_POST['family-name']?>" name="family-name" id="family-name" class="input_middle" data-error_place="#error_name">
								　<?=$_POST['given-name']?><input type="hidden" value="<?=$_POST['given-name']?>" name="given-name" id="given-name" class="input_middle" data-error_place="#error_name">
									<span class="error" id="error_name"></span>
								</td>
							</tr>
							<tr>
								<th><span>フリガナ</span></th>
								<td class="input_list">
								<?=$_POST['family-name-furi']?><input type="hidden" value="<?=$_POST['family-name-furi']?>" name="family-name-furi" id="family-name-furi" class="input_middle" data-error_place="#error_name_furi">
								　<?=$_POST['given-name-furi']?><input type="hidden" value="<?=$_POST['given-name-furi']?>" name="given-name-furi" id="given-name-furi" class="input_middle" data-error_place="#error_name_furi">
									<span class="error" id="error_name_furi"></span>
								</td>
							</tr>
							<tr>
								<th><span>学年</span></th>
								<td class="input_list">
								<?=$_POST['age']?><input type="hidden" value="<?=$_POST['age']?>" name="age" id="age" class="input_xsmall" data-error_place="#error_age">年
									<span class="error" id="error_age"></span>
								</td>
							</tr>
							<tr>
								<th><span>電話番号</span></th>
								<td class="input_list">
								<?=$_POST['tel1']?><input type="hidden" value="<?=$_POST['tel1']?>" name="tel1" id="tel1" class="input_small" data-error_place="#error_tel">‐
								<?=$_POST['tel2']?><input type="hidden" value="<?=$_POST['tel2']?>" name="tel2" id="tel2" class="input_small" data-error_place="#error_tel">‐
								<?=$_POST['tel3']?><input type="hidden" value="<?=$_POST['tel3']?>" name="tel3" id="tel3" class="input_small" data-error_place="#error_tel">
									<span class="error" id="error_tel"></span>
								</td>
							</tr>
							<tr>
								<th><span>メールアドレス</span></th>
								<td class="input_list">
								<?=$_POST['email']?><input type="hidden" value="<?=$_POST['email']?>" name="email" id="email" class="input_xlarge" data-error_place="#error_email">
									<span class="error" id="error_email"></span>
								</td>
							</tr>
							<tr>
								<th><span>品名</span></th>
								<td class="input_list">
								<?=$_POST['product']?><input type="hidden" value="<?=$_POST['product']?>" name="product" id="product" class="input_xlarge" data-error_place="#error_product">
									<span class="error" id="error_product"></span>
								</td>
							</tr>
							<tr>
								<th><span>ページ数</span></th>
								<td class="input_list">
								<?=$_POST['page']?><input type="hidden" value="<?=$_POST['page']?>" name="page" id="page" class="input_small" data-error_place="#error_page">ページ
									<span class="error" id="error_page"></span>
								</td>
							</tr>
							<tr>
								<th><span>部数</span></th>
								<td class="input_list">
								<?=$_POST['busuu']?><input type="hidden" value="<?=$_POST['busuu']?>" name="busuu" id="busuu" class="input_small" data-error_place="#error_busuu">部
									<span class="error" id="error_busuu"></span>
								</td>
							</tr>
							<tr>
								<th><span>納品日</span></th>
								<td class="input_list">
								<?=$_POST['delivery']?><input type="hidden" value="<?=$_POST['delivery']?>" name="delivery" id="delivery" class="input_middle"><br class="smartphone_br"><br class="smartphone_br">
									（時間帯：<?=$_POST['deliverytime']?>）着希望<br />
									<input type="hidden" name="deliverytime" id="deliverytime1" value="<?=$_POST['deliverytime']?>">
									※弊社に原稿が届いてから納品まで５日前後かかります、詳しくはお問い合わせください。
								</td>
							</tr>
							<tr>
								<th><span>表紙の色</span></th>
								<td class="input_list">
								<?=$_POST['cover']?><input type="hidden" value="<?=$_POST['cover']?>" name="cover" id="cover" class="input_middle" data-error_place="#error_cover">
									<span class="error" id="error_cover"></span>
								</td>
							</tr>
							<tr>
								<th><span>色扉の有無</span></th>
								<td class="input_list">
								<?php
								if($_POST['door-need'] == "有"){
									$door_num = $_POST['door-num'];
									//色扉の有だった場合の表示
									echo <<< EOD
									有（{$door_num}）枚
									<input type="hidden" name="door-need" id="door-need1" value="有">
									<input type="hidden" value="$door_num" name="door-num" id="door-need" class="input_small">
									EOD;
									}else{//それ以外だった場合の表示
									echo <<< EOD
									無
									<input type="hidden" name="door-need" id="door-need2" value="無">
									<input type="hidden" value="$door_num" name="door-num" id="door-need" class="input_small">
									EOD;
									}
								?>
									<span class="error" id="error_"></span>
								</td>
							</tr>
							<tr>
								<th><span>色扉の色</span></th>
								<td class="input_list">
								<?=$_POST['door-color']?><input type="hidden" value="<?=$_POST['door-color']?>" name="door-color" id="door-color" class="input_middle" data-error_place="#error_door-color">
									<span class="error" id="error_door-color"></span>
								</td>
							</tr>
						</tbody>
					</table>
					<h2>商品発送先</h2>
					<table class="form_table">
						<tbody>
							<tr>
								<th><span>郵便番号</span></th>
								<td class="input_list">
								<?=$_POST['postal-code']?><input type="hidden" value="<?=$_POST['postal-code']?>" name="postal-code" id="postal-code" class="input_middle" data-error_place="#error_postal-code">
									<span class="error" id="error_postal-code"></span>
								</td>
							</tr>
							<tr>
								<th><span>住所</span></th>
								<td class="input_list">
								<?=$_POST['address']?><input type="hidden" value="<?=$_POST['address']?>" name="address" id="address" class="input_xlarge" data-error_place="#error_address">
									<span class="error" id="error_address"></span>
								</td>
							</tr>
							<tr>
								<th><span>宛名</span></th>
								<td class="input_list">
								<?=$_POST['recipient']?><input type="hidden" value="<?=$_POST['recipient']?>" name="recipient" id="recipient" class="input_middle" data-error_place="#error_recipient">
									<span class="error" id="error_recipient"></span>
								</td>
							</tr>
						</tbody>
					</table>
					<h2>請求書送付先</h2>
					<table class="form_table">
						<tbody>
							<tr>
								<th><span>郵便番号</span></th>
								<td class="input_list">
								<?=$_POST['bill-postal-code']?><input type="hidden" value="<?=$_POST['bill-postal-code']?>" name="bill-postal-code" id="bill-postal-code" class="input_middle" data-error_place="#error_bill-postal-code">
									<span class="error" id="error_bill-postal-code"></span>
								</td>
							</tr>
							<tr>
								<th><span>住所</span></th>
								<td class="input_list">
								<?=$_POST['bill-address']?><input type="hidden" value="<?=$_POST['bill-address']?>" name="bill-address" id="bill-address" class="input_xlarge" data-error_place="#error_bill-address">
									<span class="error" id="error_bill-address"></span>
								</td>
							</tr>
							<tr>
								<th><span>宛名</span></th>
								<td class="input_list">
								<?=$_POST['bill-recipient']?><input type="hidden" value="<?=$_POST['bill-recipient']?>" name="bill-recipient" id="bill-recipient" class="input_middle" data-error_place="#error_bill-recipient">
									<span class="error" id="error_bill-recipient"></span>
								</td>
							</tr>
							<tr>
								<th><span>電話番号</span></th>
								<td class="input_list">
								<?=$_POST['bill-tel1']?><input type="hidden" value="<?=$_POST['bill-tel1']?>" name="bill-tel1" id="bill-tel1" class="input_small" data-error_place="#error_bill-tel">‐
								<?=$_POST['bill-tel2']?><input type="hidden" value="<?=$_POST['bill-tel2']?>" name="bill-tel2" id="bill-tel2" class="input_small" data-error_place="#error_bill-tel">‐
								<?=$_POST['bill-tel3']?><input type="hidden" value="<?=$_POST['bill-tel3']?>" name="bill-tel3" id="bill-tel3" class="input_small" data-error_place="#error_bill-tel">
									<span class="error" id="error_bill-tel"></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="enquete_area">
					<p>
						送信する前に、この画面を保存または印刷してください。<br />
						送信後、その内容を三進社へFAXまたはメールを送信してくださいますようお願い申し上げます。<br />
						送信先：xxxxxxxxxxx@sanshinsya.co.jp
					</p>
				</div>
				<div class="privacy_area">
					<input type="hidden" name="privacy_consent" value="1" id="privacy_consent" data-error_place="#error_privacy_consent">
					<label for="privacy_consent">個人情報の取扱い及び利用目的に同意する</label>
					<p><span class="error" id="error_privacy_consent"></span></p>
				</div>
				<div class="button_area">
					<input onclick="javascript:history.back();" value="戻る" type="button" id="back" class="btn">
					<input type="submit" value="送信" class="btn">
				</div>
			</form>
		</div>
    </section>

</article>
<footer>
	<ul class="bnr">
		<li class="bg01">
			<a href="#">
				<p>お問い合わせ・お見積り</p>
			</a>
		</li>
		<li class="bg02">
			<a href="./#">
				<p>学生専用申込みフォーム</p>
			</a>
		</li>
<!--
		<li class="bg02">
			<a href="../student_form/">
				<p>学生専用申込みフォーム</p>
			</a>
		</li>
-->
	</ul>
	<div id="footer_nav_area">
		<div class="upload">
			<a href="https://www.sanshin-sya.co.jp/uploader/howto/index.html" class="btn_b"><span>オンライン簡単スピード入稿</span></a>
			<div>
				<p>
					オンライン入稿はこちらから
				</p>
				<a href="https://www.sanshin-sya.co.jp/uploader/login.php?to=/uploader" class="btn_c">データアップサーバ</a>
			</div>
		</div>
		<div class="nav">
			<ul>
				<li><a href="../index.html">HOME</a></li>
				<li><a href="../company/">企業情報</a>
					<ul>
						<li><a href="../company/policy/">こだわり</a></li>
						<li><a href="../company/csr/" class="small">CSR活動及びコンプライアンス</a></li>
						<li><a href="../company/facility/">事業所一覧</a></li>
					</ul>
				</li>
				<li><a href="../print_service/">印刷サービス</a>
					<ul>
						
						<li><a href="../print_service/prepress/">製版</a></li>
						<li><a href="../print_service/print/">印刷</a></li>
						<li><a href="../print_service/bookbinding/">製本</a></li>
					</ul>
				</li>
				<li><a href="../sp_service/">セールスプロモーション</a>
					<ul>
						<li><a href="../sp_service/tools/">各種プロモーションツール</a></li>
						<li><a href="../sp_service/management/">品質管理</a></li>
					</ul>
				</li>

				<li><a href="#">お問い合わせ</a></li>
				<li><a href="../pdf/application_form.pdf" target="_blank">学生専用申込みフォーム</a></li>
<!--
				<li><a href="../student_form/">学生専用申込みフォーム</a></li>
-->
			</ul>
		</div>
		<div class="address">
			<h2><img src="../img/interface/logo_white.png" alt="三進社">株式会社三進社</h2>
			<table>
				<tr><th>本社</th><td>〒141-0031 東京都品川区西五反田4-28-13</td></tr>
				
				<tr><th>木場営業所</th><td>〒135-0042 東京都江東区木場6-6-3</td></tr>
				<tr><th>尾久工場</th><td>〒116-0011 東京都荒川区西尾久8-32-4</td></tr>
				<tr><th>業平工場</th><td>〒130-0002 東京都墨田区業平1-1-9</td></tr>
			</table>
		</div>
	</div>
	<a href="../privacy/" class="privacy" class="privacy">個人情報保護方針</a>
	<small>&copy; 2024 株式会社三進社  All Right Reserved.</small>
</footer>

<script type="text/javascript">
$(document).ready(function(){
	var windowsize = window.matchMedia('screen and (max-width:910px)');
	function checkBreakPoint(windowsize) {
		if (windowsize.matches) {
			$('body>header>nav').css({'display':'none'});
		} else {
			$('body>header>nav').css({'display':'block'});
		}
	}
	windowsize.addListener(checkBreakPoint);
	checkBreakPoint(windowsize);
	$("#nav_sp").click(function () {
		$("body>header>nav").slideToggle(300);
		$(this).toggleClass('open');
		$(this).addClass('close');
	});

//* start バリデート ********************************************
	$("#contact_form").validate({
		rules: {
			'family-name': { required: true },
			'given-name': { required: true },
			'family-name-furi': { required: true },
			'given-name-furi': { required: true },
			'age': { required: true, number : true },
			'tel1': { required: true, number : true },
			'tel2': { required: true, number : true },
			'tel3': { required: true, number : true },
			'email': { required: true, email : true },
			'product': { required: true },
			'page': { required: true, number : true },
			'busuu': { required: true, number : true },
			'cover': { required: true },
			'postal-code': { required: true, number : true },
			'address': { required: true },
			'recipient': { required: true },
			'bill-postal-code': { required: true, number : true },
			'bill-address': { required: true },
			'bill-recipient': { required: true },
			'bill-tel1': { required: true, number : true },
			'bill-tel2': { required: true, number : true },
			'bill-tel3': { required: true, number : true },
			'privacy_consent': { required: true },
		},
		messages: {
			'family-name': { required: "性を入力してください。" },
			'given-name': { required: "名を入力してください。" },
			'family-name-furi': { required: "セイを入力してください。" },
			'given-name-furi': { required: "メイを入力してください。" },
			'age': { required: "学年を入力してください。", number : "半角数字で入力してください。", },
			'tel1': { required: "電話番号を入力してください。", number : "半角数字で入力してください。", },
			'tel2': { required: "電話番号を入力してください。", number : "半角数字で入力してください。", },
			'tel3': { required: "電話番号を入力してください。", number : "半角数字で入力してください。", },
			'email': { required: "メールアドレスを入力してください。", email : "メールアドレスを確認してください。", },
			'product': { required: "品名を入力してください。" },
			'page': { required: "ページ数を入力してください。", number : "半角数字で入力してください。", },
			'busuu': { required: "部数を入力してください。", number : "半角数字で入力してください。", },
			'cover': { required: "表紙の色を入力してください。" },
			'door-need': { required: "色扉の有無を入力してください。"　},
			'door-color': { required: "色扉の色を入力してください。" },
			'postal-code': { required: "郵便番号を入力してください。", number : "半角数字で入力してください。", },
			'address': { required: "住所を入力してください。" },
			'recipient': { required: "宛名を入力してください。" },
			'bill-postal-code': { required: "郵便番号を入力してください。", number : "半角数字で入力してください。", },
			'bill-address': { required: "住所番号を入力してください。" },
			'bill-recipient': { required: "宛名番号を入力してください。" },
			'bill-tel1': { required: "電話番号を入力してください。", number : "半角数字で入力してください。", },
			'bill-tel2': { required: "電話番号を入力してください。", number : "半角数字で入力してください。", },
			'bill-tel3': { required: "電話番号を入力してください。", number : "半角数字で入力してください。", },
			'privacy_consent': { required: "同意が必要です。" },
		},
		//spanでエラー文を出力
		errorElement: "span",
		errorClass: "validation_error",
		errorPlacement: function(error, element){
			//すでに内容があるときはエラーを消してから入れる(同じ場所にエラー文を入れる場合の処理)
			var place = element.data('error_place');
			if($(place).text()){$(place).empty();}
			// data-error_place="# xxxx"で指定された要素のxxxxにエラーを表示させる
			error.appendTo(element.data('error_place'));
		}
	})
//* end バリデート ********************************************

});//end ready

		$(document).on('change', '[name=contact_type]', function(){
			$('.quotation').toggleClass('hidden');
			$('.inquiry').toggleClass('hidden');
			$('label.error').remove();

			if ($('input[name=contact_type]:eq(0)').prop('checked')) {
				$('.enquete_area').removeClass('hidden');
				$('.quotation').find('input, select').prop('disabled', true);
				$('.inquiry').find('input, select').prop('disabled', false);
			}else{
				$('.enquete_area').addClass('hidden');
				$('.quotation').find('input, select').prop('disabled', false);
				$('.inquiry').find('input, select').prop('disabled', true);
			}
		});

	</script>
</body>
</html>
