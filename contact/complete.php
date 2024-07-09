<?php
	error_reporting(0); 

	foreach($_POST as $key=>$value) {
		if(is_array($_POST[$key])){
			foreach ($_POST[$key] as $value_key => $value_text) {
				$_POST[$key][$value_key] = htmlspecialchars($value_text,ENT_QUOTES);
			}
		}else{
			$_POST[$key] = htmlspecialchars(str_replace('<br />', '', $value),ENT_QUOTES);
		}
	}
	session_start();
	if(!empty($_SESSION['page']) && $_SESSION['page'] === TRUE){
		//セッションの削除
		unset($_SESSION['page']);
		require_once('./qdmail.php');
		// 問い合わせフォーム内容送信先メールアドレス
		$mailto = 'info@sanshinsya.co.jp';
		//$mailto =  'staff@iolite.co.jp';

		//メール問い合わせ者メールアドレス
		$mailfrom = $_POST['mail_address'];



		//メールタイトル（管理者用）
		if ($_POST['contact_type'] == "お問い合わせ") {
			$admin_subject = "WEBフォームよりお問い合わせ";
		} else {
			$admin_subject = "WEBフォーム見積依頼";
		}

		//メールタイトル（お問い合わせ送信者用）
		if ($_POST['contact_type'] == "お問い合わせ") {
			$sender_subject = "【株式会社三進社】 お問い合わせを承りました。（自動返信）";
		} else {
			$sender_subject = "【株式会社三進社】 お見積依頼を承りました。（自動返信）";
		}

		//問い合わせ内容生成
		if($_POST['contact_type'] == "お問い合わせ"){

			$consultation_items = implode('、',$_POST['consultation_item']);

			$content = <<< EOF
			お問い合わせ区分: {$_POST['contact_category']}
			お問い合わせ内容: {$_POST['contact_details']}
			相談したい項目: {$consultation_items}
			ご予算: {$_POST['budget']}
			その他:
			{$_POST['message']}

			会社名（氏名）: {$_POST['company_name']}
			住所: {$_POST['address']}
			メールアドレス: {$_POST['mail_address']}
			お電話番号: {$_POST['telephone_number']}
			FAX番号: {$_POST['fax_number']}

			アンケート：{$_POST['enquete']}

			EOF;
		}else{

			$content = <<< EOF
			部数: {$_POST['num']}
			サイズ: {$_POST['size']}
			大判及び変形サイズ: {$_POST['deformed_size']}
			ページ数: {$_POST['page_count']}
			表紙色数: {$_POST['cover_color_num']}
			本文色数: {$_POST['color_num']}
			製本体裁: {$_POST['binding_style']}
			表紙用紙: {$_POST['cover_paper']}
			表紙紙色: {$_POST['cover_color']}
			本文用紙: {$_POST['book_paper']}
			中扉: {$_POST['frontispiece']}
			中扉紙色: {$_POST['frontispiece_color']}
			見返し: {$_POST['endpaper']}
			ニス: {$_POST['varnish']}
			PP貼加工: {$_POST['processing']}
			原稿種別: {$_POST['manuscript_type']}
			OS: {$_POST['os_type']}
			使用アプリケーション: {$_POST['application']}
			その他:
			{$_POST['message']}

			氏名: {$_POST['name']}
			メールアドレス: {$_POST['mail_address']}
			ご住所: {$_POST['address']}
			お電話番号: {$_POST['telephone_number']}
			FAX番号: {$_POST['fax_number']}

			EOF;
		}

		//メール内容（管理者用）
		$admin_content = <<< EOF
		下記のお問い合わせが入っております。

		{$content}
		EOF;

		//メール内容（お問い合わせ送信者用）
		$sender_content = <<< EOF

		EOF;

		// Check if $_POST['name'] is empty
		if (!empty($_POST['name'])) {
			$sender_content .= <<< EOF
			{$_POST['name']}様

		EOF;
		} else {
			$sender_content .= <<< EOF
			{$_POST['company_name']} 様

		EOF;
		}

		$sender_content .= <<< EOF

		この度はお問い合わせありがとうございます。
		後ほど担当者からご回答を差し上げますので、今しばらくお待ちください。
		------------------------------------------------------------
		{$content}

		今後とも株式会社三進社をよろしくお願いいたします。

		────────────────────────────────────
		株式会社　三　進　社
		〒135-0042
		東京都江東区木場5-11-13
		TEL/03-5621-3439　FAX/03-5621-3849
		info@sanshinsya.co.jp
		https://www.sanshin-sya.co.jp/
		────────────────────────────────────
		EOF;

		//管理者にメール
		qd_send_mail( 'text' , $mailto , $admin_subject , $admin_content , $mailfrom );

		//お問い合わせ送信者にメール
		qd_send_mail( 'text' , $mailfrom , $sender_subject , $sender_content , $mailto );
	}else{
		$url = "./";
		header("Location: ".$url);
		exit;
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
<title>お問い合わせ・お見積り｜株式会社三進社</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/screen.css">
<link rel="stylesheet" type="text/css" media="screen and (max-width:767px)" href="../css/screen_sp.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:768px)" href="../css/screen_pc.css">
<link rel="stylesheet" type="text/css" media="print" href="../css/print.css">
<link rel="apple-touch-icon" href="../apple-touch-icon.png">
<link rel="icon" type="image/png" href="../favicon-.png" sizes="16x16">
<link rel="icon" type="image/png" href="../favicon.png" sizes="32x32">
<script type="text/javascript" src="../lib/jquery/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="../lib/jquery/jquery-3.7.1.min.js"></script>
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
				<ul class="menu_inner">
					<li><a href="../company/policy/">こだわり</a></li>
					<li><a href="../company/csr/" class="small">CSR活動及び<br>コンプライアンス</a></li>
					<li><a href="../company/facility/">工場・設備一覧</a></li>
				</ul>
			</li>
			<li>
				<a href="../print_service/">印刷サービス</a>
				<ul class="menu_inner">
					
					<li><a href="../print_service/prepress/">製版</a></li>
					<li><a href="../print_service/print/">印刷</a></li>
					<li><a href="../print_service/bookbinding/">製本</a></li>
				</ul>
			</li>
			<li>
				<a href="../sp_service/">セールスプロモーション</a>
				<ul class="menu_inner">
					<li><a href="../sp_service/tools/">各種プロモーションツール</a></li>
					<li><a href="../sp_service/management/">品質管理</a></li>
				</ul>
			</li>
			<li><a href="#">お問い合わせ</a></li>
		</ul>
	</nav>

	<span id="nav_sp"><span></span><span></span><span></span></span>

</header>

<article id="sub_contents_area">

	<div id="title_area">
		<h1>
			お問い合わせ<span class="sp_none">・</span>お見積り
		</h1>
	</div>

	<div id="bread">
		<div class="inner">
			<ul>
				<li><a href="../index.html">HOME</a></li>
				<li><a href="./">お問い合わせ・お見積り</a></li>
				<li><span>完了画面</span></li>
			</ul>
		</div>
	</div>

	<section>
		<div>
			<h2>完了画面</h2>
			<div class="thanks_area">
				この度は、お問い合わせ誠にありがとうございます。<br />
				<br />
				数日中に担当よりご連絡をさせていただきますので、今しばらくお待ちください。<br />
				<br />
				なお、お問い合わせ内容によっては、お時間をいただく場合や<br />
				お答えできない場合がございますので、あらかじめご了承ください。<br />
				<br />
				送信いただきました内容は以下の通りです。
			</div>
			<div class="confirm_area">
				<table class="confirm_table confirm_inquiry no_border">
					<tr>
						<th>お問い合わせ種類：</th>
						<td>
							<?php echo $_POST['contact_type'] ?>
						</td>
					</tr>
					<tr>
						<th>お問い合わせ区分：</th>
						<td>
							<?php echo $_POST['contact_category'] ?>
						</td>
					</tr>
					<tr style="display:none;">
						<th>お問い合わせ内容：</th>
						<td>
							<?php echo $_POST['contact_details'] ?>
						</td>
					</tr>
					<tr>
						<th>相談したい項目：</th>
						<td class="input_list">
							<?php foreach ($_POST['consultation_item'] as $key => $value) { ?>
								<span><?php echo $value ?></span>
							<?php } ?>
						</td>
					</tr>
					<tr>
						<th>ご予算：</th>
						<td>
							<?php echo $_POST['budget'] ?>
						</td>
					</tr>
					<tr>
						<th>その他：</th>
						<td style="word-break: break-all; padding-right: 5px;">
							<?php echo nl2br($_POST['message']); ?>
						</td>
					</tr>
					<tr>
						<th>会社名（氏名）：</th>
						<td>
							<?php echo $_POST['company_name'] ?>
						</td>
					</tr>
				</table>

				<table class="confirm_table confirm_quotation no_border">
					<tr>
						<th>お問い合わせ種類：</th>
						<td>
							<?php echo $_POST['contact_type'] ?>
						</td>
					</tr>
					<tr>
						<th>部数：</th>
						<td>
							<?php echo $_POST['num'] ?>
						</td>
					</tr>
					<tr>
						<th>サイズ：</th>
						<td>
							<?php echo $_POST['size'] ?>
						</td>
					</tr>
					<tr>
						<th>大判及び変形サイズ：</th>
						<td>
							<?php echo $_POST['deformed_size'] ?>
						</td>
					</tr>
					<tr>
						<th>ページ数：</th>
						<td>
							<?php echo $_POST['page_count'] ?>
						</td>
					</tr>
					<tr>
						<th>表紙色数：</th>
						<td>
							<?php echo $_POST['cover_color_num'] ?>
						</td>
					</tr>
					<tr>
						<th>本文色数：</th>
						<td>
							<?php echo $_POST['color_num'] ?>
						</td>
					</tr>
					<tr>
						<th>製本体裁：</th>
						<td>
							<?php echo $_POST['binding_style'] ?>
						</td>
					</tr>
					<tr>
						<th>表紙用紙：</th>
						<td>
							<?php echo $_POST['cover_paper'] ?>
						</td>
					</tr>
					<tr>
						<th>表紙紙色：</th>
						<td>
							<?php echo $_POST['cover_color'] ?>
						</td>
					</tr>
					<tr>
						<th>本文用紙：</th>
						<td>
							<?php echo $_POST['book_paper'] ?>
						</td>
					</tr>
					<tr>
						<th>中扉：</th>
						<td>
							<?php echo $_POST['frontispiece'] ?>
						</td>
					</tr>
					<tr>
						<th>中扉紙色：</th>
						<td>
							<?php echo $_POST['frontispiece_color'] ?>
						</td>
					</tr>
					<tr>
						<th>見返し：</th>
						<td>
							<?php echo $_POST['endpaper'] ?>
						</td>
					</tr>
					<tr>
						<th>ニス：</th>
						<td>
							<?php echo $_POST['varnish'] ?>
						</td>
					</tr>
					<tr>
						<th>PP貼加工：</th>
						<td>
							<?php echo $_POST['processing'] ?>
						</td>
					</tr>
					<tr>
						<th>原稿種別：</th>
						<td>
							<?php echo $_POST['manuscript_type'] ?>
						</td>
					</tr>
					<tr>
						<th>OS：</th>
						<td>
							<?php echo $_POST['os_type'] ?>
						</td>
					</tr>
					<tr>
						<th>使用アプリケーション：</th>
						<td>
							<?php echo $_POST['application'] ?>
						</td>
					</tr>
					<tr>
						<th>その他：</th>
						<td style="word-break: break-all; padding-right: 5px;">
							<?php echo nl2br($_POST['message']) ?>
						</td>
					</tr>
					<tr>
						<th>氏名：</th>
						<td>
							<?php echo $_POST['name'] ?>
						</td>
					</tr>
				</table>
				<table class="no_border">
					<tr>
						<th>住所：</th>
						<td>
							<?php echo $_POST['address'] ?>
						</td>
					</tr>
					<tr>
						<th>メールアドレス：</th>
						<td>
							<?php echo $_POST['mail_address'] ?>
						</td>
					</tr>
					<tr>
						<th>お電話番号：</th>
						<td>
							<?php echo $_POST['telephone_number'] ?>
						</td>
					</tr>
					<tr>
						<th>FAX番号：</th>
						<td>
							<?php echo $_POST['fax_number'] ?>
						</td>
					</tr>
				</table>
			</div>
			<div class="button_area">
				<a href="../index.html" class="btn">戻る</a>
			</div>
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
			<a href="../pdf/application_form.pdf" target="_blank">
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
						<li><a href="../company/facility/">工場・設備一覧</a></li>
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
				<tr><th>営業部</th><td>〒135-0042 東京都江東区木場5-11-13 ザイマックス木場公園ビル6F</td></tr>
				<tr><th>木場工場</th><td>〒135-0042 東京都江東区木場6-6-3</td></tr>
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
			var windowsize = window.matchMedia('screen and (max-width:767px)');
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

			var type = "<?php echo $_POST['contact_type'] ?>";
			if(type == 'お問い合わせ'){
				$('.confirm_quotation').addClass('hidden');
			}else{
				$('.confirm_inquiry').addClass('hidden');
			}
		});

	</script>
</body>
</html>
