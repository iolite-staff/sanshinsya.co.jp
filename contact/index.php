<?php
	// セッションの書き込み
	session_start();
	$_SESSION['input']= TRUE;
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
					<li><a href="../company/facility/">工場・設備一覧</a></li>
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
								<td>
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
								<td>
									<input type="radio" name="contact_category" id="contact_category1" value="法人のお客様">
									<label for="contact_category1">法人のお客様</label>
									<input type="radio" name="contact_category" id="contact_category2" value="個人のお客様">
									<label for="contact_category2">個人のお客様</label>
								</td>
							</tr>
							<tr class="inquiry">
								<th>
									<span>お問い合わせ内容</span>
									<span class="mast">必須</span>
								</th>
								<td>
									<select name="contact_details" id="contact_details" class="w_sm">
										<option value="">ご希望の内容をご選択ください。</option>
										<option value="お問い合わせ">お問い合わせ</option>
										<option value="資料請求">資料請求</option>
									</select>
									<span class="error" id="contact_details_error"></span>
								</td>
							</tr>
							<tr class="inquiry">
								<th class="white_normal">
									<span>相談したい項目を選択（複数可）</span>
									<span class="mast">必須</span>
								</th>
								<td class="input_list">
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
										<input type="checkbox" name="consultation_item[]" id="consultation_item6" value="その他">
										<label for="consultation_item6">その他</label>
									</span>
									<span>
									<span class="error" id="consultation_item_error"></span>
								</td>
							</tr>
							<tr class="inquiry">
								<th>
									<span>ご予算</span>
								</th>
								<td>
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
								<td colspan="2">
									<p>
										その他：ご希望の納期、仕様などご自由にお書きください。<br />
										※お手持ちのデータについてのご質問は、できるだけ詳しくご記入下さい。
									</p>
								</td>
							</tr>
							<tr>
								<th></th>
								<td>
									<textarea name="message" class="w_lg"></textarea>
								</td>
							</tr>

							<tr class="inquiry">
								<th>
									<span>会社名（氏名）</span>
									<span class="mast">必須</span>
								</th>
								<td>
									<input type="text" name="company_name" class="w_lg">
									<span class="error" id="company_name_error"></span>
								</td>
							</tr>

							<tr class="quotation hidden">
								<th>
									<span>氏名</span>
									<span class="mast">必須</span>
								</th>
								<td>
									<input type="text" name="name" class="w_lg" disabled>
									<span class="error" id="name_error"></span>
								</td>
							</tr>

							<tr>
								<th>
									<span>住所</span>
								</th>
								<td>
									<input type="text" name="address" class="w_lg">
								</td>
							</tr>
							<tr>
								<th>
									<span>メールアドレス</span>
									<span class="mast">必須</span>
								</th>
								<td class="input_list">
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
								<td>
									<input type="text" name="telephone_number" class="w_sm">
									<span class="error" id="telephone_number_error"></span>
								</td>
							</tr>
							<tr>
								<th>
									<span>FAX番号</span>
								</th>
								<td>
									<input type="text" name="fax_number" class="w_sm">
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
						当社はお客様の個人情報を取得するにあたり、以下のとおりa)～g)の事項を遵守し適正管理に努めます。<br>
						<br>
						a)　株式会社　三進社　PMS管理室<br>
						連絡先：sss_pv@sanshinsya.co.jp<br>
						b)　利用目的について。<br />
						1.	お客様が当社の会員としてサービスを利用する場合。<br />
						2.	製品を提供する為の取引遂行にあたり、製品の発送、お問い合わせへの対応、当社からお客様へのお問い合わせ、また、その他取引業務にあたって必要な業務。<br />
						c)　お客様から取得した個人情報は、第三者に提供及び取扱いの委託は行いません。<br />
						d)　当社の保有個人情報に関しては、「個人情報保護に関する法律」に基づき、ご本人からご自身の個人情報に関する利用目的の通知、 開示、内容の訂正、追加又は削除、利用の停止、消去（以下、「開示等」といいます。）を求められた場合は、ご本人もしくは正当な代理人からの請求であるこ とを確認（運転免許証、パスポートなどの公的書類のコピーもしくは委任状およびご本人の印鑑証明書、代理人を確認できる公的書類のコピーの提出）をさせて いただいた上で、遅滞なくこれに応じます。ただし、次の場合には、保有個人データの全部または一部を開示できないことがあります。<br />　①ご本人又は第三者の生 命、身体、財産その他の権利利益を害する畏れがある場合<br />　②当社の業務の適正な実施に著しい支障を及ぼすおそれがある場合<br />　③法令に違反することとなる場合。<br>
						開示等のご請求にあたりましては、当社所定の「個人情報開示請求書」にご記入いただくことになります、この様式の送付に関して下記お客様窓口にお問い合わせください。<br />
						e)　お客様より削除、利用停止のご請求を受け対応した時、当社サービスの全部または一部の利用が出来なくなる場合があります。<br />
						f)　当社は、お客様が容易に認識できない方法によってお客様の個人情報を取得することはありません。<br />
						g)　個人情報の取扱いに関してのお問い合わせやご要望につきましては、次の「お客様窓口」担当者までご連絡ください。<br />
						連絡先：TEL:03(5621)3848 FAX:03(5621)3849 E-mail <a href="mailto:sss_pv@sanshinsya.co.jp">sss_pv@sanshinsya.co.jp</a><br />
						窓口担当：PMS管理室<br />
						受付時間：月曜日～金曜日（祝祭日、年末年始を除く）午前９：００～午後４：００<br />
						個人情報の取扱いはあくまで上記b)の目的のためであり、この目的の範囲外では利用しないことをお約束いたします。また、利用目的を変 更する場合は変更された利用目的をご本人に通知し、ご本人の同意をいただきます。取扱いについては当社個人情報保護マネジメントシステムにより万全を期し ておりますが、もし不明点などございましたらお客様窓口までお問い合わせください。<br />
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

			$("#contact_form").validate({
				rules: rule1,
				messages: {
					contact_type: {
						range: "お問い合わせ種類に不正な値が入力されています。"
					},
					mail_address: {
						email: "入力されたメールアドレスに間違いがあります。"
					},
					telephone_number: {
						tel: "電話番号に間違いがあります。"
					},
				},
				errorPlacement: function(error, element) {
					$('.response-output').addClass('text_visible');
					$('.response-output').removeClass('response-output');
					switch(element.attr('name')){
						case "contact_type":
							error.insertAfter($('#contact_type_error'));
							break;
						case "contact_details":
							error.insertAfter($('#contact_details_error'));
							break;
						case "consultation_item":
							error.insertAfter($('#consultation_item_error'));
							break;
						case "contact_details":
							error.insertAfter($('#contact_details_error'));
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
