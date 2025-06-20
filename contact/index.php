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
				<a href="../print_service/">事業案内</a>
				<ul class="menu_inner menu_inner_2">
					
					<li><a href="../print_service/prepress/">製版</a></li>
					<li><a href="../print_service/print/">印刷</a></li>
					<li><a href="../print_service/bookbinding/">製本</a></li>
				</ul>
			</li>
			<li><a href="../management/">品質管理</a></li>
			<li><a href="../recruit/">採用情報</a></li>
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
				<li><span>お問い合わせ・お見積り</span></li>
			</ul>
		</div>
	</div>

	<section>
		<div>
			<form method="POST" action="./confirm.php" name="contact_form" id="contact_form" autocomplete="off">
				<div class="form_area">
					<table class="form_table">
						<tbody>
							<tr>
								<th>
									<span>お問い合わせ種類</span>
									<span class="mast">必須</span>
								</th>
								<td colspan="2">
									<input type="radio" name="contact_type" id="contact_type1" value="お問い合わせ" checked>
									<label for="contact_type1">お問い合わせ</label>
									<input type="radio" name="contact_type" id="contact_type2" value="お見積り">
									<label for="contact_type2">お見積り</label>
									<span class="error" id="contact_type_error"></span>
								</td>
							</tr>
							<tr class="inquiry">
								<th>
									<span>お問い合わせ区分</span>
								</th>
								<td colspan="2">
									<input type="radio" name="contact_category" id="contact_category1" value="法人のお客様">
									<label for="contact_category1">法人のお客様</label>
									<input type="radio" name="contact_category" id="contact_category2" value="個人のお客様">
									<label for="contact_category2">個人のお客様</label>
								</td>
							</tr>
							<tr class="inquiry">
								<th class="white_normal">
									<span>相談したい項目を選択（複数可）</span>
									<span class="mast">必須</span>
								</th>
								<td class="input_list input_list_left">
									<span>
										<input type="checkbox" name="consultation_item[]" id="consultation_item1" value="印刷について">
										<label for="consultation_item1">印刷について</label>
									</span>
									<span>
										<input type="checkbox" name="consultation_item[]" id="consultation_item2" value="製本について">
										<label for="consultation_item2">製本について</label>
									</span>
									<span>
										<input type="checkbox" name="consultation_item[]" id="consultation_item3" value="オンデマンド印刷について">
										<label for="consultation_item3">オンデマンド印刷について</label>
									</span>
									<span>
										<input type="checkbox" name="consultation_item[]" id="consultation_item4" value="プリント相談について">
										<label for="consultation_item4">プリント相談について</label>
									</span>
									<span>
										<input type="checkbox" name="consultation_item[]" id="consultation_item5" value="データ入稿について">
										<label for="consultation_item5">データ入稿について</label>
									</span>
									<span>
										<input type="checkbox" name="consultation_item[]" id="consultation_item7" value="採用">
										<label for="consultation_item7">採用</label>
									</span>
									<span>
										<input type="checkbox" name="consultation_item[]" id="consultation_item6" value="その他">
										<label for="consultation_item6">その他</label>
									</span>
									<span>
									<span class="error" id="consultation_item_error"></span>
								</td>
<!--
								<td class="input_list input_list_right">
									<span>
										<input type="checkbox" name="consultation_item[]" id="consultation_item7" value="SPツールについて">
										<label for="consultation_item7">SPツールについて</label>
									</span>
									<span>
										<input type="checkbox" name="consultation_item[]" id="consultation_item8" value="合紙・抜きについて">
										<label for="consultation_item8">合紙・抜きについて</label>
									</span>
									<span>
										<input type="checkbox" name="consultation_item[]" id="consultation_item9" value="組立加工・セット梱包・アッセンブリについて">
										<label for="consultation_item9">組立加工・セット梱包・アッセンブリについて</label>
									</span>
									<span>
										<input type="checkbox" name="consultation_item[]" id="consultation_item10" value="物流・保管について">
										<label for="consultation_item10">物流・保管について</label>
									</span>
									<span>
										<input type="checkbox" name="consultation_item[]" id="consultation_item11" value="大判シート出力・加工について">
										<label for="consultation_item11">大判シート出力・加工について</label>
									</span>
									<span>
									<span class="error" id="consultation_item_error"></span>
								</td>
-->
							</tr>
							<tr class="inquiry">
								<th>
									<span>ご予算</span>
								</th>
								<td colspan="2">
									<input type="text" name="budget" id="budget" class="w_sm"><label for="budget">円</label>
									<span class="error" id="budget_error"></span>
								</td>
							</tr>

							<tr class="quotation hidden">
								<th>
									<span>部数</span>
								</th>
								<td>
									<input type="text" name="num" class="w_md" disabled>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>サイズ</span>
								</th>
								<td>
									<select name="size" class="w_tn" disabled>
										<option value="A6">A6</option>
										<option value="A5">A5</option>
										<option value="A4">A4</option>
										<option value="A3">A3</option>
										<option value="B6">B6</option>
										<option value="B5">B5</option>
										<option value="B4">B4</option>
										<option value="その他">その他</option>
									</select>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>大判及び変形サイズ</span>
								</th>
								<td>
									<input type="text" name="deformed_size" class="w_md" disabled>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>ページ数</span>
								</th>
								<td>
									<input type="text" name="page_count" class="w_md" disabled>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>表紙色数</span>
								</th>
								<td>
									<select name="cover_color_num" class="w_tn" disabled>
										<option value="1C / 0C">1C / 0C</option>
										<option value="1C / 1C">1C / 1C</option>
										<option value="4C / 0C">4C / 0C</option>
										<option value="4C / 1C">4C / 1C</option>
										<option value="4C / 4C">4C / 4C</option>
									</select>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>本文色数</span>
								</th>
								<td>
									<select name="color_num" class="w_md" disabled>
										<option value="1C 片面">1C 片面</option>
										<option value="1C 両面">1C 両面</option>
										<option value="2C 片面">2C 片面</option>
										<option value="2C 両面">2C 両面</option>
										<option value="3C 片面">3C 片面</option>
										<option value="3C 両面">3C 両面</option>
										<option value="プロセス 4C 片面">プロセス 4C 片面</option>
										<option value="プロセス 4C 両面">プロセス 4C 両面</option>
									</select>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>製本体裁</span>
								</th>
								<td>
									<select name="binding_style" class="w_md" disabled>
										<option value="ペラ（チラシ、ポスター）">ペラ（チラシ、ポスター）</option>
										<option value="二つ折">二つ折</option>
										<option value="三つ折">三つ折</option>
										<option value="中綴じ">中綴じ</option>
										<option value="無線クルミ">無線クルミ</option>
									</select>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>表紙用紙</span>
								</th>
								<td>
									<select name="cover_paper" class="w_md" disabled>
										<option value="レザック　175kg">レザック　175kg</option>
										<option value="色上質　特厚">色上質　特厚</option>
										<option value="色上質　最厚">色上質　最厚</option>
										<option value="上質紙　110kg">上質紙　110kg</option>
										<option value="上質紙　135kg">上質紙　135kg</option>
										<option value="コート紙　90kg">コート紙　90kg</option>
										<option value="コート紙　110kg">コート紙　110kg</option>
										<option value="マットコート紙　110kg">マットコート紙　110kg</option>
										<option value="マットコート紙　135kg">マットコート紙　135kg</option>
										<option value="アートポスト　180kg">アートポスト　180kg</option>
										<option value="アートポスト　200kg">アートポスト　200kg</option>
										<option value="その他">その他</option>
									</select>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>表紙紙色</span>
								</th>
								<td>
									<input type="text" name="cover_color" class="w_md" disabled>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>本文用紙</span>
								</th>
								<td>
									<select name="book_paper" class="w_md" disabled>
										<option value="上質紙　55kg">上質紙　55kg</option>
										<option value="上質紙　70kg">上質紙　70kg</option>
										<option value="上質紙　90kg">上質紙　90kg</option>
										<option value="コート紙　90kg">コート紙　90kg</option>
										<option value="コート紙　110kg">コート紙　110kg</option>
										<option value="マットコート紙　73kg">マットコート紙　73kg</option>
										<option value="マットコート紙　90kg">マットコート紙　90kg</option>
										<option value="マットコート紙　110kg">マットコート紙　110kg</option>
										<option value="マットコート紙　135kg">マットコート紙　135kg</option>
										<option value="その他">その他</option>
									</select>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>中扉</span>
								</th>
								<td>
									<select name="frontispiece" class="w_md" disabled>
										<option value="色上質　中厚 印刷有">色上質　中厚 印刷有</option>
										<option value="色上質　中厚 印刷無">色上質　中厚 印刷無</option>
										<option value="色上質　厚口 印刷有">色上質　厚口 印刷有</option>
										<option value="色上質　厚口 印刷無">色上質　厚口 印刷無</option>
										<option value="その他の紙 印刷有">その他の紙 印刷有</option>
										<option value="その他の紙 印刷無">その他の紙 印刷無</option>
									</select>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>中扉紙色</span>
								</th>
								<td>
									<input type="text" name="frontispiece_color" class="w_md" disabled>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>見返し</span>
								</th>
								<td>
									<input type="radio" name="endpaper" id="endpaper1" value="あり" checked disabled>
									<label for="endpaper1">あり</label>
									<input type="radio" name="endpaper" id="endpaper2" value="なし" disabled>
									<label for="endpaper2">なし</label>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>ニス</span>
								</th>
								<td>
									<input type="radio" name="varnish" id="varnish1" value="光沢あり" checked disabled>
									<label for="varnish1">光沢あり</label>
									<input type="radio" name="varnish" id="varnish2" value="マット（光沢なし）" disabled>
									<label for="varnish2">マット（光沢なし）</label>
									<input type="radio" name="varnish" id="varnish3" value="なし" disabled>
									<label for="varnish3">なし</label>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>PP貼加工</span>
								</th>
								<td>
									<input type="radio" name="processing" id="processing1" value="光沢あり" checked disabled>
									<label for="processing1">光沢あり</label>
									<input type="radio" name="processing" id="processing2" value="マット（光沢なし）" disabled>
									<label for="processing2">マット（光沢なし）</label>
									<input type="radio" name="processing" id="processing3" value="なし" disabled>
									<label for="processing3">なし</label>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>原稿種別</span>
								</th>
								<td>
									<select name="manuscript_type" class="w_tn" disabled>
										<option value="紙原稿">紙原稿</option>
										<option value="データ">データ</option>
										<option value="その他">その他</option>
									</select>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>OS</span>
								</th>
								<td>
									<select name="os_type" class="w_tn" disabled>
										<option value="Windows 2000">Windows 2000</option>
										<option value="Windows XP">Windows XP</option>
										<option value="MacOS 9以前">MacOS 9以前</option>
										<option value="MacOS X">MacOS X</option>
										<option value="その他">その他</option>
									</select>
								</td>
							</tr>
							<tr class="quotation hidden">
								<th>
									<span>使用アプリケーション</span>
								</th>
								<td>
									<select name="application" class="w_tn" disabled>
										<option value="Word">Word</option>
										<option value="Excel">Excel</option>
										<option value="PowerPoint">PowerPoint</option>
										<option value="Photoshop">Photoshop</option>
										<option value="Illustrator">Illustrator</option>
										<option value="InDesign">InDesign</option>
										<option value="QuarkXPress">QuarkXPress</option>
										<option value="その他">その他</option>
									</select>
								</td>
							</tr>

							<tr class="no_border">
								<td colspan="3">
									<p>
										採用：採用に関するお問い合わせ内容をご自由にお書きください。<br />
										その他：ご希望の納期、仕様などご自由にお書きください。<br />
										※お手持ちのデータについてのご質問は、できるだけ詳しくご記入下さい。
									</p>
								</td>
							</tr>
							<tr>
								<th></th>
								<td colspan="2">
									<textarea name="message" class="w_lg"></textarea>
								</td>
							</tr>

							<tr class="inquiry">
								<th>
									<span>会社名（氏名）</span>
									<span class="mast">必須</span>
								</th>
								<td colspan="2">
									<input type="text" name="company_name" class="w_lg">
									<span class="error" id="company_name_error"></span>
								</td>
							</tr>

							<tr class="quotation hidden">
								<th>
									<span>氏名</span>
									<span class="mast">必須</span>
								</th>
								<td colspan="2">
									<input type="text" name="name" class="w_lg" disabled>
									<span class="error" id="name_error"></span>
								</td>
							</tr>

							<tr>
								<th>
									<span>住所</span>
								</th>
								<td colspan="2">
									<input type="text" name="address" class="w_lg">
								</td>
							</tr>
							<tr>
								<th>
									<span>メールアドレス</span>
									<span class="mast">必須</span>
								</th>
								<td colspan="2" class="input_list">
									<input type="text" name="mail_address" class="w_md" id="mail_address">
									<input type="text" name="mail_address_confirm" class="w_md">
									<span class="error" id="mail_address_error"></span>
									<span class="error" id="mail_address_confirm_error"></span>
								</td>
							</tr>
							<tr>
								<th>
									<span>お電話番号</span>
									<span class="mast">必須</span>
								</th>
								<td colspan="2">
									<input type="text" name="telephone_number" class="w_sm" maxlength="11" minlength="10">
									<span class="error" id="telephone_number_error"></span>
								</td>
							</tr>
							<tr>
								<th>
									<span>FAX番号</span>
								</th>
								<td colspan="2">
									<input type="text" name="fax_number" class="w_sm" maxlength="10">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="enquete_area">
					<p>
						アンケートにご協力ください<br />
						弊社をお知りになったきっかけは・・
					</p>
					<input type="radio" name="enquete" value="Web" id="enquete1">
					<label for="enquete1">Web</label>
					<input type="radio" name="enquete" value="チラシ" id="enquete2">
					<label for="enquete2">チラシ</label>
					<input type="radio" name="enquete" value="ご紹介" id="enquete3">
					<label for="enquete3">ご紹介</label>
					<input type="radio" name="enquete" value="その他" id="enquete4">
					<label for="enquete4">その他</label>
					<p><span class="error" id="enquete_error"></span></p>
				</div>
				<div class="privacy_area">
					<p>当社の<a href="../privacy/index.html">個人情報の取扱い及び利用目的</a>に同意の上、内容を送信してください。</p>
					<div class="scroll_message">
						《当社の個人情報の取扱い》<br />
						1.当社は、お客様から個人情報を委託された場合や本人から取得する場合について、個人情報の取扱いに関する法令、 国が定める指針その他の規範を遵守いたします。<br />
						<br />
						2. 個人情報の利用目的について<br />
						　&#9312; お客様から受託する印刷製本業務<br />
						　&bull;　各種名簿、 会報誌の印刷、 製本、 発送<br />
						　&bull;　名刺、 はがきの印刷業務<br />
						　&bull;　その他印刷製本に関わる業務<br />
						　&#9313; 当社が本人から取得する場合<br />
						　&bull;　当社事業に関してのお問い合わせ、 苦情、 相談の内容に回答するため<br />
						　&bull;　当社の採用選考のため<br />
						　&bull;　当社従業者の雇用管理のため<br />
						<br />
						　利用目的の範囲内で業務委託契約を締結している協力会社へ個人情報の取扱いを委託することがあります。 また、皆様から取得した個人情報の利用目的を変更する場合、利用目的の達成に必要な範囲を超えて個人情報を利用する場合は、 変更された利用目的をご本人に通知し、 本人の同意をいただきます。<br />
						<br />
						3. 個人情報の開示等について<br />
						　当社は、 本人から保有個人データについて利用目的の通知、 開示、 内容の訂正・追加・削除、 利用の停止、 消去及び第三者への提供の停止、 第三者提供記録の開示(以下、 「開示等」という。)の求めがあった場合には、 本人または代理人であることを確認の上、 遅滞なく対応しますとともに、 次のとおりその手続きを定めます。<br />
						　&#9312; 申し出先開示等の求めは、 下記を窓口とし、 メ ールにて請求していただきます。<br />
						個人情報に関するお問い合わせ先:PMS管理室 sss_pv@8an8hin8ya.co.jp<br />
						　　&#9313; 開示等の求めに際して提出していただく書類等所定の「保有個人データ開示等請求害」に必要事項を記入の上、 提出していただきます。<br />
						　　&#9314; 本人または代理人の確認方法<br />
						　　&bull;　当社が保有するご本人の個人情報をもって、 総合的に判断させていただきます。<br />
						　　&bull;　法定代理人の場合は、 戸籍謄本等を提出していただきます。<br />
						　　&bull;　委任代理人の場合は、 委任状を提出していただきます。<br />
						　&#9315; 回答方法には以下の方法がありますので選択していただきます。<br />
						　　　1. 本人(又は代理人)の住所宛に、追跡できる郵送方法にて回答。<br />
						　　　2.電子メールでの回答。<br />
						　&#9316; 利用目的の通知及び開示に関する手数料とお支払方法<br />
						　　　1回の請求ごとに1200円の(税込)の手数料をお振り込みいただきます。<br />
						<br />
						4. 保有個人データの安全管理のために講じている措置<br />
						　【組織的安全管理措置】<br />
						　　&bull;　個人情報保護管理者を設置し、 個人情報保護の安全管理に関する従業者の責任と権限を明確に規定します。<br />
						　　&bull;　個人情報の取り扱い状況の運用点検や監査などを定期的に実施します。<br />
						　　&bull;　個人情報の取り扱いを委託する場合は個人情報保護の基準を満たす事業者を選定して、 契約書の締結などによって個人情報保護を担保します。<br />
						　【人的安全管理措置】<br />
						　　&bull;　個人情報保護の安全管理に関する必要な教育研修を従業者に定期的に実施します。<br />
						　　&bull;　就業規則や誓約書にて秘密保持義務の履行を担保します。<br />
						　【物理的安全管理措置】<br />
						　　&bull;　従業者の入退室管理及び電子機器の持ち込みや制限など権限を有しない従業者などによる個人情報への不正アクセスを防止するための措置を講じます。<br />
						　　&bull;　電子媒体や書類などの盗難・紛失などを防止するための措置を講じます。<br />
						　【技術的安全管理措置`】<br />
						　　&bull;　個人情報を取り扱う情報システムヘの不正アクセス又は不正ソフトウェアから保護する仕組みを導入します。<br />
						　　&bull;　情報システムヘのアクセス制御を実施し、 担当者及び取り扱う個人情報データベース等の範囲を限定します。<br />
						　　&bull;　情報システムのアクセスログを取得して定期的な確認を実施します。<br />
						<br />
						5. 個人情報の取扱い及び個人情報保護に関するに苦情及び相談窓口について<br />
						　個人情報に関する取扱い、苦情及び相談につきましては、下記にご連絡をお願い致します。<br />
						<br />
						株式会社三進社<br />
						PMS管理室<br />
						<a href="mailto:sss_pv@sanshinsya.co.jp">sss_pv@sanshinsya.co.jp</a><br />
						〒141-0031 東京都品川区西五反田4-28-13<br />
					</div>
					<input type="checkbox" name="privacy_consent" value="1" id="privacy_consent">
					<label for="privacy_consent">同意する</label>
					<p><span class="error" id="privacy_consent_error"></span></p>
				</div>
				<div class="button_area">
					<input type="submit" class="btn" value="確認">
				</div>
			</form>
		</div>
    </section>

</article>
<footer>
	<div class="bg03">
		<a href="../recruit">
			<div>
				<p>採用情報</p>
				<span>ただいま、新しい仲間を募集しています。<br>ご興味のある方は、こちらから詳細をご確認ください。</span>
			</div>
		</a>
	</div>
	<ul class="bnr">
		<li class="bg01">
			<a href="#">
				<p>お問い合わせ・お見積り</p>
			</a>
		</li>
		<li class="bg02">
			<a href="../student_form/">
				<p>学生専用申込みフォーム</p>
			</a>
		</li>
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
				<li><a href="../print_service/">事業案内</a>
					<ul>
						
						<li><a href="../print_service/prepress/">製版</a></li>
						<li><a href="../print_service/print/">印刷</a></li>
						<li><a href="../print_service/bookbinding/">製本</a></li>
					</ul>
				</li>
				<li><a href="../management/">品質管理</a></li>
				<li><a href="../recruit/">採用情報</a></li>
				<li><a href="#">お問い合わせ</a></li>
				<li><a href="../student_form/">学生専用申込みフォーム</a></li>
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

			$("#contact_form").validate({
				messages: {
					'consultation_item[]': {
						required: "選択してください。"
					},
					company_name: {
						required: "入力してください。"
					},
					name: {
						required: "入力してください。"
					},
					mail_address: {
						required: "入力してください。",
						email: "入力されたメールアドレスに間違いがあります。"
					},
					mail_address_confirm: {
						required: "入力してください。",
						email: "入力されたメールアドレスに間違いがあります。",
						equalTo: "入力した値が一致しません。"
					},
					telephone_number: {
						required: "入力してください。",
						number : "電話番号に間違いがあります。",
						minlength: "電話番号に間違いがあります。"
					},
					privacy_consent: {
						required: "同意が必要です。"
					}
				},
				rules: {
					'consultation_item[]': {
						required: { depends: function(){ if ($('input[name="contact_type"]:checked').val() == "お問い合わせ") { return true;} else {return false;}}}
					},
					company_name: {
						required: { depends: function(){ if ($('input[name="contact_type"]:checked').val() == "お問い合わせ") { return true;} else {return false;}}}
					},
					name: {
						required: { depends: function(){ if ($('input[name="contact_type"]:checked').val() == "お見積り") { return true;} else {return false;}}}
					},
					
					telephone_number: {
						required: true,
						number : true
						 },
  					mail_address: {
						required: true,
						email: true
					  },
  					mail_address_confirm: {
						required: true,
						email: true,
						equalTo: "#mail_address"
					  },
					privacy_consent: {
						required: true
					}

},


				errorPlacement: function(error, element) {
					$('.response-output').addClass('text_visible');
					$('.response-output').removeClass('response-output');
					switch(element.attr('name')){
						case "contact_type":
							error.insertAfter($('#contact_type_error'));
							break;
						case "consultation_item[]":
							error.insertAfter($('#consultation_item_error'));
							break;
						case "budget":
							error.insertAfter($('#budget_error'));
							break;
						case "num":
							error.insertAfter($('#num_error'));
							break;
						case "size":
							error.insertAfter($('#size_error'));
							break;
						case "deformed_size":
							error.insertAfter($('#deformed_size_error'));
							break;
						case "page_count":
							error.insertAfter($('#page_count_error'));
							break;
						case "cover_color_num":
							error.insertAfter($('#cover_color_num_error'));
							break;
						case "color_num":
							error.insertAfter($('#color_num_error'));
							break;
						case "binding_style":
							error.insertAfter($('#binding_style_error'));
							break;
						case "cover_paper":
							error.insertAfter($('#cover_paper_error'));
							break;
						case "cover_color":
							error.insertAfter($('#cover_color_error'));
							break;
						case "book_paper":
							error.insertAfter($('#book_paper_error'));
							break;
						case "frontispiece":
							error.insertAfter($('#frontispiece_error'));
							break;
						case "frontispiece_color":
							error.insertAfter($('#frontispiece_color_error'));
							break;
						case "endpaper":
							error.insertAfter($('#endpaper_error'));
							break;
						case "varnish":
							error.insertAfter($('#varnish_error'));
							break;
						case "processing":
							error.insertAfter($('#processing_error'));
							break;
						case "manuscript_type":
							error.insertAfter($('#manuscript_type_error'));
							break;
						case "os_type":
							error.insertAfter($('#os_type_error'));
							break;
						case "application":
							error.insertAfter($('#application_error'));
							break;
						case "message":
							error.insertAfter($('#message_error'));
							break;
						case "company_name":
							error.insertAfter($('#company_name_error'));
							break;
						case "name":
							error.insertAfter($('#name_error'));
							break;
						case "mail_address":
							error.insertAfter($('#mail_address_error'));
							break;
						case "mail_address_confirm":
							error.insertAfter($('#mail_address_confirm_error'));
							break;
						case "telephone_number":
							error.insertAfter($('#telephone_number_error'));
							break;
						case "fax_number":
							error.insertAfter($('#fax_number_error'));
							break;
						case "privacy_consent":
							error.insertAfter($('#privacy_consent_error'));
							break;
					}
				}
			});
});

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
