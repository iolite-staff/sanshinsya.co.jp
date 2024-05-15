<?php
	$contact_category = '';
	$contact_details = '';
	$consultation_item = '';

	$cover_color_num = '';
	$color_num = '';
	$binding_style = '';
	$cover_paper = '';
	$cover_color = '';
	$book_paperv = '';
	$frontispiece = '';
	$frontispiece_color = '';
	$endpaper = '';
	$varnish = '';
	$processing = '';
	$manuscript_type = '';
	$os_type = '';
	$application = '';

	if($_POST['contact_type'] == '1'){
		$contact_type = "お問い合わせ";

		if(!empty($_POST['contact_category'])){
			if($_POST['contact_category'] == 1){
				$contact_category = "法人のお客様";
			}elseif($_POST['contact_category'] == 2){
				$contact_category = "個人のお客様";
			}
		}

		switch ($_POST['contact_details']) {
			case 1:
				$contact_details = "";
				break;
			default:
				break;
		}

		if(!empty($_POST['consultation_item'])){
			switch ($_POST['consultation_item']) {
				case 1:
					$consultation_item = "印刷について";
					break;
				case 2:
					$consultation_item = "製本について";
					break;
				case 3:
					$consultation_item = "オンデマンド印刷について";
					break;
				case 4:
					$consultation_item = "プリント相談について";
					break;
				case 5:
					$consultation_item = "データ入稿について";
					break;
				case 6:
					$consultation_item = "その他";
					break;
				default:
					break;
			}
		}
	}else{
		$contact_type = "お見積り";

		if(!empty($_POST['consultation_item'])){
			switch ($_POST['consultation_item']) {
				case 1:
					$consultation_item = "";
					break;
				default:
					break;
			}
		}

		if(!empty($_POST['color_num'])){
			switch ($_POST['color_num']) {
				case 1:
					$color_num = "";
					break;
				default:
					break;
			}
		}

		if(!empty($_POST['binding_style'])){
			switch ($_POST['binding_style']) {
				case 1:
					$binding_style = "";
					break;
				default:
					break;
			}
		}

		if(!empty($_POST['cover_paper'])){
			switch ($_POST['cover_paper']) {
				case 1:
					$cover_paper = "";
					break;
				default:
					break;
			}
		}

		if(!empty($_POST['book_paper'])){
			switch ($_POST['book_paper']) {
				case 1:
					$book_paper = "";
					break;
				default:
					break;
			}
		}

		if(!empty($_POST['frontispiece'])){
			switch ($_POST['frontispiece']) {
				case 1:
					$frontispiece = "";
					break;
				default:
					break;
			}
		}
		if(!empty($_POST['frontispiece_color'])){
			switch ($_POST['frontispiece_color']) {
				case 1:
					$frontispiece_color = "";
					break;
				default:
					break;
			}
		}
		if(!empty($_POST['endpaper'])){
			switch ($_POST['endpaper']) {
				case 1:
					$endpaper = "";
					break;
				default:
					break;
			}
		}
		if(!empty($_POST['varnish'])){
			switch ($_POST['varnish']) {
				case 1:
					$varnish = "";
					break;
				default:
					break;
			}
		}
		if(!empty($_POST['processing'])){
			switch ($_POST['processing']) {
				case 1:
					$processing = "";
					break;
				default:
					break;
			}
		}
		if(!empty($_POST['manuscript_type'])){
			switch ($_POST['manuscript_type']) {
				case 1:
					$manuscript_type = "";
					break;
				default:
					break;
			}
		}
		if(!empty($_POST['os_type'])){
			switch ($_POST['os_type']) {
				case 1:
					$os_type = "";
					break;
				default:
					break;
			}
		}
		if(!empty($_POST['application'])){
			switch ($_POST['application']) {
				case 1:
					$application = "";
					break;
				default:
					break;
			}
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
<title>お問い合わせ・お見積り｜株式会社三進社</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/screen.css">
<link rel="stylesheet" type="text/css" media="screen and (max-width:767px)" href="../css/screen_sp.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:768px)" href="../css/screen_pc.css">
<link rel="stylesheet" type="text/css" media="print" href="../css/print.css">
<link rel="apple-touch-icon" href="../apple-touch-icon.png">
<link rel="icon" type="image/png" href="../favicon-.png" sizes="16x16">
<link rel="icon" type="image/png" href="../favicon.png" sizes="32x32">
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
					<li><a href="../company/csr/">CSR活動及び<br>コンプライアンス</a></li>
					<li><a href="../company/facility/">工場・設備一覧</a></li>
				</ul>
			</li>
			<li>
				<a href="../print_service/">印刷サービス</a>
				<ul class="menu_inner">
					<li><a href="../print_service/production/">制作</a></li>
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
			お問い合わせ・お見積り
		</h1>
	</div>

	<div id="bread">
		<div class="inner">
			<ul>
				<li><a href="../index.html">HOME</a></li>
				<li><a href="./index.html">お問い合わせ・お見積り</a></li>
				<li><span>確認画面</span></li>
			</ul>
		</div>
	</div>

	<section>
		<div>
			<h2>確認画面</h2>
			<form method="POST" action="./complete.php" >
				<div class="confirm_area">
					<table class="confirm_inquiry no_border">
						<tr>
							<th>お問い合わせ種類：</th>
							<td>
								<?php echo $contact_type ?>
								<input type="hidden" name="contact_type" value="">
							</td>
						</tr>
						<tr>
							<th>お問い合わせ区分：</th>
							<td>
								<?php echo $contact_category ?>
								<input type="hidden" name="contact_category" value="<?php echo $contact_category ?>">
							</td>
						</tr>
						<tr>
							<th>お問い合わせ内容：</th>
							<td>
								<?php echo $contact_details ?>
								<input type="hidden" name="contact_details" value="<?php echo $contact_details ?>">
							</td>
						</tr>
						<tr>
							<th>相談したい項目：</th>
							<td>
								<?php echo $consultation_item ?>
								<input type="hidden" name="consultation_item" value="<?php echo $consultation_item ?>">
							</td>
						</tr>
						<tr>
							<th>ご予算：</th>
							<td>
								<?php echo htmlspecialchars($_POST['budget']) ?>
								<input type="hidden" name="budget" value="<?php echo htmlspecialchars($_POST['budget']) ?>">
							</td>
						</tr>
						<tr>
							<th>その他：</th>
							<td>
								<?php echo htmlspecialchars($_POST['message']) ?>
								<input type="hidden" name="message" value="<?php echo htmlspecialchars($_POST['message']) ?>">
							</td>
						</tr>
						<tr>
							<th>会社名（氏名）：</th>
							<td>
								<?php echo htmlspecialchars($_POST['company_name']) ?>
								<input type="hidden" name="company_name" value="<?php echo htmlspecialchars($_POST['company_name']) ?>">
							</td>
						</tr>
					</table>

					<table class="confirm_quotation no_border">
						<tr>
							<th>お問い合わせ種類：</th>
							<td>
								<?php echo $contact_type ?>
								<input type="hidden" name="contact_type" value="<?php echo $contact_type ?>">
							</td>
						</tr>
						<tr>
							<th>部数：</th>
							<td>
								<?php echo htmlspecialchars($_POST['num']) ?>
								<input type="hidden" name="num" value="<?php echo htmlspecialchars($_POST['num']) ?>">
							</td>
						</tr>
						<tr>
							<th>サイズ：</th>
							<td>
								<?php echo htmlspecialchars($_POST['size']) ?>
								<input type="hidden" name="size" value="<?php echo htmlspecialchars($_POST['size']) ?>">
							</td>
						</tr>
						<tr>
							<th>大判及び変形サイズ：</th>
							<td>
								<?php echo htmlspecialchars($_POST['deformed_size']) ?>
								<input type="hidden" name="deformed_size" value="<?php echo htmlspecialchars($_POST['deformed_size']) ?>">
							</td>
						</tr>
						<tr>
							<th>ページ数：</th>
							<td>
								<?php echo htmlspecialchars($_POST['page_count']) ?>
								<input type="hidden" name="page_count" value="<?php echo htmlspecialchars($_POST['page_count']) ?>">
							</td>
						</tr>
						<tr>
							<th>表紙色数：</th>
							<td>
								<?php echo $cover_color_num ?>
								<input type="hidden" name="cover_color_num" value="<?php echo $cover_color_num ?>">
							</td>
						</tr>
						<tr>
							<th>本文色数：</th>
							<td>
								<?php echo $color_num ?>
								<input type="hidden" name="color_num" value="<?php echo $color_num ?>">
							</td>
						</tr>
						<tr>
							<th>製本体裁：</th>
							<td>
								<?php echo $binding_style ?>
								<input type="hidden" name="binding_style" value="<?php echo $binding_style ?>">
							</td>
						</tr>
						<tr>
							<th>表紙用紙：</th>
							<td>
								<?php echo $cover_paper ?>
								<input type="hidden" name="cover_paper" value="<?php echo $cover_paper ?>">
							</td>
						</tr>
						<tr>
							<th>表紙紙色：</th>
							<td>
								<?php echo $cover_color ?>
								<input type="hidden" name="cover_color" value="<?php echo $cover_color ?>">
							</td>
						</tr>
						<tr>
							<th>本文用紙：</th>
							<td>
								<?php echo $book_paper ?>
								<input type="hidden" name="book_paper" value="<?php echo $book_paper ?>">
							</td>
						</tr>
						<tr>
							<th>中扉：</th>
							<td>
								<?php echo $frontispiece ?>
								<input type="hidden" name="frontispiece" value="<?php echo $frontispiece ?>">
							</td>
						</tr>
						<tr>
							<th>中扉紙色：</th>
							<td>
								<?php echo $frontispiece_color ?>
								<input type="hidden" name="frontispiece_color" value="<?php echo $frontispiece_color ?>">
							</td>
						</tr>
						<tr>
							<th>見返し：</th>
							<td>
								<?php echo $endpaper ?>
								<input type="hidden" name="endpaper" value="<?php echo $endpaper ?>">
							</td>
						</tr>
						<tr>
							<th>ニス：</th>
							<td>
								<?php echo $varnish ?>
								<input type="hidden" name="varnish" value="<?php echo $varnish ?>">
							</td>
						</tr>
						<tr>
							<th>PP貼加工：</th>
							<td>
								<?php echo $processing ?>
								<input type="hidden" name="processing" value="<?php echo $processing ?>">
							</td>
						</tr>
						<tr>
							<th>原稿種別：</th>
							<td>
								<?php echo $manuscript_type ?>
								<input type="hidden" name="manuscript_type" value="<?php echo $manuscript_type ?>">
							</td>
						</tr>
						<tr>
							<th>OS：</th>
							<td>
								<?php echo $os_type ?>
								<input type="hidden" name="os_type" value="<?php echo $os_type ?>">
							</td>
						</tr>
						<tr>
							<th>使用アプリケーション：</th>
							<td>
								<?php echo $application ?>
								<input type="hidden" name="application" value="<?php echo $application ?>">
							</td>
						</tr>
						<tr>
							<th>その他：</th>
							<td>
								<?php echo htmlspecialchars($_POST['message']) ?>
								<input type="hidden" name="message" value="<?php echo htmlspecialchars($_POST['message']) ?>">
							</td>
						</tr>
						<tr>
							<th>氏名：</th>
							<td>
								<?php echo htmlspecialchars($_POST['name']) ?>
								<input type="hidden" name="name" value="<?php echo htmlspecialchars($_POST['name']) ?>">
							</td>
						</tr>
					</table>
					<table class="no_border">
						<tr>
							<th>住所：</th>
							<td>
								<?php echo htmlspecialchars($_POST['address']) ?>
								<input type="hidden" name="address" value="<?php echo htmlspecialchars($_POST['address']) ?>">
							</td>
						</tr>
						<tr>
							<th>メールアドレス：</th>
							<td>
								<?php echo htmlspecialchars($_POST['mail_address']) ?>
								<input type="hidden" name="mail_address" value="<?php echo htmlspecialchars($_POST['mail_address']) ?>">
							</td>
						</tr>
						<tr>
							<th>お電話番号：</th>
							<td>
								<?php echo htmlspecialchars($_POST['telephone_number']) ?>
								<input type="hidden" name="telephone_number" value="<?php echo htmlspecialchars($_POST['telephone_number']) ?>">
							</td>
						</tr>
						<tr>
							<th>FAX番号：</th>
							<td>
								<?php echo htmlspecialchars($_POST['fax_number']) ?>
								<input type="hidden" name="fax_number" value="<?php echo htmlspecialchars($_POST['fax_number']) ?>">
							</td>
						</tr>
					</table>
				</div>
				<div class="button_area">
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
						<li><a href="../company/csr/">CSR活動及びコンプライアンス</a></li>
						<li><a href="../company/facility/">工場・設備一覧</a></li>
					</ul>
				</li>
				<li><a href="../print_service/">印刷サービス</a>
					<ul>
						<li><a href="../print_service/production/">制作</a></li>
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
	<a href="../privacy/">プライバシーポリシー</a>
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
			if(type == '1'){
				$('.confirm_quotation').addClass('hidden');
			}else{
				$('.confirm_inquiry').addClass('hidden');
			}
		});

	</script>
</body>
</html>
