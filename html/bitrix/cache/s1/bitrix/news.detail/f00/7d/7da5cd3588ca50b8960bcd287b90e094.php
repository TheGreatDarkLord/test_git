<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001475067369';
$dateexpire = '001475070969';
$ser_content = 'a:2:{s:7:"CONTENT";s:5184:"<div class="news-detail">
				<span class="news-date-time">04.10.2009</span>
								
<p>Настройка поддержки ЧПУ производится для работающих проектов (вы должны установить обновление главного модуля до версии 5.1.8 и выше, поскольку в обновление ядра 5.1.8 включен механизм переопределения адресов для поддержки ЧПУ). Все, кто будет ставить новый дистрибутив, получат уже настроенную поддержку.
  <br />
</p>

<p><b>Понятие обработки адресов </b></p>

<p>Обработка адресов (UrlRewrite) применяется для того, чтобы скрипт мог отвечать не только по своему физическому, но и по любому другому указанному адресу. Например, можно задать такие настройки обработки адресов, что скрипт, лежащий в файле <i>/fld/c.php</i> и отвечающий по адресу:
  <br />
&nbsp;&nbsp;&nbsp;&nbsp; /fld/c.php?id=15
  <br />
будет отвечать также по адресу:
  <br />
&nbsp;&nbsp;&nbsp;&nbsp; /catalog/15.php
  <br />
</p>

<p>Адрес, по которому будет отвечать скрипт, не должен физически существовать на сервере. Если такой адрес физически существует, то будет вызван скрипт по этому адресу. Система обработки адресов запущена в этом случае не будет. </p>

<p>Управление правилами преобразования адресов производится на странице: <em>/bitrix/admin/urlrewrite_list.php.
    <br />
  </em>Механизм переопределения адресов создан в основном для компонентов 2.0, поддерживающих режим ЧПУ. В то же время, данный обработчик можно использовать для переопределения любых URL, а не только связанных с компонентами. </p>

<p>При добавлении на страницу компонента с поддержкой ЧПУ (если файл сохраняется с помощью API), автоматически создается правило переопределения адреса. Если страница создается не с помощью API, а, например, записывается через FTP, то необходимо выполнить пересоздание правил (кнопка на панели инструментов на странице управления правилами).
  <br />
</p>

<p><b>Подключение механизма обработки адресов:</b> </p>

<p><b>1</b>. Если у вас на веб-сервере настроена обработка ошибки 404, например, для Apache установлена опция ErrorDocument или аналогичная инструкция прописана в файле .htaccess:
  <br />
<span><em>&nbsp;&nbsp;&nbsp;&nbsp; ErrorDocument 404 /404.php,
      <br />
    </em>то вы должны изменить файл <em>/404.php,</em> вставив в самое начало файла команду:
    <br />
  <em>&nbsp;&nbsp;&nbsp; include_once( $_SERVER[\'DOCUMENT_ROOT\']. \'/bitrix/modules/main/include/urlrewrite.php\' );
      <br />
    </em>
    <p><em><b>2</b>.</em> Если вы для Apache используете модуль mod_rewrite, то в его настройках вы можете указать (например, в файле .htaccess):
      <br />
    <em>&lt;IfModule mod_rewrite.c&gt;
        <br />
      RewriteEngine On
        <br />
      RewriteCond %{REQUEST_FILENAME} !-f
        <br />
      RewriteCond %{REQUEST_FILENAME} !-l
        <br />
      RewriteCond %{REQUEST_FILENAME} !-d
        <br />
      RewriteCond %{REQUEST_FILENAME} !/bitrix/urlrewrite.php$
        <br />
      RewriteRule ^(.*)$ /bitrix/urlrewrite.php [L]
        <br />
      &lt;/IfModule&gt;
        <br />
      </em></p>

    <p>После этих настроек будет работать штатный механизм поддержки ЧПУ для новых компонент.</p>
  		<br />
<font class="text">Страница 


	1 - 1 из 2<br /></font>

	<font class="text">

			Начало&nbsp;|&nbsp;Пред.&nbsp;|
	
	
					<b>1</b>
					
					<a href="/content/articles/4/?PAGEN_1=2">2</a>
						|

			<a href="/content/articles/4/?PAGEN_1=2">След.</a>&nbsp;|
		<a href="/content/articles/4/?PAGEN_1=2">Конец</a>
	



</font>		<div style="clear:both"></div>
	<br />
	Количество показов:&nbsp;<br />
	
		Рейтинг:&nbsp;
					3.44				<br />
	</div>";s:4:"VARS";a:2:{s:8:"arResult";a:13:{s:2:"ID";s:1:"4";s:9:"IBLOCK_ID";s:1:"2";s:15:"NAV_CACHED_DATA";a:1:{s:9:"frameMode";b:1;}s:4:"NAME";s:70:"Компоненты 2.0: настройка поддержки ЧПУ";s:17:"IBLOCK_SECTION_ID";N;s:6:"IBLOCK";a:88:{s:2:"ID";s:1:"2";s:3:"~ID";s:1:"2";s:11:"TIMESTAMP_X";s:19:"28.09.2016 12:27:46";s:12:"~TIMESTAMP_X";s:19:"28.09.2016 12:27:46";s:14:"IBLOCK_TYPE_ID";s:8:"articles";s:15:"~IBLOCK_TYPE_ID";s:8:"articles";s:3:"LID";s:2:"s1";s:4:"~LID";s:2:"s1";s:4:"CODE";s:8:"articles";s:5:"~CODE";s:8:"articles";s:4:"NAME";s:12:"Статьи";s:5:"~NAME";s:12:"Статьи";s:6:"ACTIVE";s:1:"Y";s:7:"~ACTIVE";s:1:"Y";s:4:"SORT";s:3:"200";s:5:"~SORT";s:3:"200";s:13:"LIST_PAGE_URL";s:18:"/content/articles/";s:14:"~LIST_PAGE_URL";s:18:"/content/articles/";s:15:"DETAIL_PAGE_URL";s:31:"/content/articles/#ELEMENT_ID#/";s:16:"~DETAIL_PAGE_URL";s:31:"/content/articles/#ELEMENT_ID#/";s:16:"SECTION_PAGE_URL";N;s:17:"~SECTION_PAGE_URL";N;s:18:"CANONICAL_PAGE_URL";N;s:19:"~CANONICAL_PAGE_URL";N;s:7:"PICTURE";N;s:8:"~PICTURE";N;s:11:"DESCRIPTION";s:12:"Статьи";s:12:"~DESCRIPTION";s:12:"Статьи";s:16:"DESCRIPTION_TYPE";s:4:"html";s:17:"~DESCRIPTION_TYPE";s:4:"html";s:7:"RSS_TTL";s:2:"24";s:8:"~RSS_TTL";s:2:"24";s:10:"RSS_ACTIVE";s:1:"Y";s:11:"~RSS_ACTIVE";s:1:"Y";s:15:"RSS_FILE_ACTIVE";s:1:"N";s:16:"~RSS_FILE_ACTIVE";s:1:"N";s:14:"RSS_FILE_LIMIT";N;s:15:"~RSS_FILE_LIMIT";N;s:13:"RSS_FILE_DAYS";N;s:14:"~RSS_FILE_DAYS";N;s:17:"RSS_YANDEX_ACTIVE";s:1:"N";s:18:"~RSS_YANDEX_ACTIVE";s:1:"N";s:6:"XML_ID";s:16:"content-articles";s:7:"~XML_ID";s:16:"content-articles";s:6:"TMP_ID";s:32:"2423a9143859451199a823c998972f13";s:7:"~TMP_ID";s:32:"2423a9143859451199a823c998972f13";s:13:"INDEX_ELEMENT";s:1:"Y";s:14:"~INDEX_ELEMENT";s:1:"Y";s:13:"INDEX_SECTION";s:1:"Y";s:14:"~INDEX_SECTION";s:1:"Y";s:8:"WORKFLOW";s:1:"Y";s:9:"~WORKFLOW";s:1:"Y";s:7:"BIZPROC";s:1:"N";s:8:"~BIZPROC";s:1:"N";s:15:"SECTION_CHOOSER";s:1:"L";s:16:"~SECTION_CHOOSER";s:1:"L";s:9:"LIST_MODE";N;s:10:"~LIST_MODE";N;s:11:"RIGHTS_MODE";s:1:"S";s:12:"~RIGHTS_MODE";s:1:"S";s:16:"SECTION_PROPERTY";N;s:17:"~SECTION_PROPERTY";N;s:14:"PROPERTY_INDEX";N;s:15:"~PROPERTY_INDEX";N;s:7:"VERSION";s:1:"1";s:8:"~VERSION";s:1:"1";s:17:"LAST_CONV_ELEMENT";s:1:"0";s:18:"~LAST_CONV_ELEMENT";s:1:"0";s:15:"SOCNET_GROUP_ID";N;s:16:"~SOCNET_GROUP_ID";N;s:16:"EDIT_FILE_BEFORE";N;s:17:"~EDIT_FILE_BEFORE";N;s:15:"EDIT_FILE_AFTER";N;s:16:"~EDIT_FILE_AFTER";N;s:13:"SECTIONS_NAME";s:27:"Разделы статей";s:14:"~SECTIONS_NAME";s:27:"Разделы статей";s:12:"SECTION_NAME";s:25:"Раздел статей";s:13:"~SECTION_NAME";s:25:"Раздел статей";s:13:"ELEMENTS_NAME";s:12:"Статьи";s:14:"~ELEMENTS_NAME";s:12:"Статьи";s:12:"ELEMENT_NAME";s:12:"Статья";s:13:"~ELEMENT_NAME";s:12:"Статья";s:11:"EXTERNAL_ID";s:16:"content-articles";s:12:"~EXTERNAL_ID";s:16:"content-articles";s:8:"LANG_DIR";s:1:"/";s:9:"~LANG_DIR";s:1:"/";s:11:"SERVER_NAME";N;s:12:"~SERVER_NAME";N;}s:13:"LIST_PAGE_URL";s:18:"/content/articles/";s:14:"~LIST_PAGE_URL";s:18:"/content/articles/";s:11:"SECTION_URL";s:0:"";s:7:"SECTION";a:1:{s:4:"PATH";a:0:{}}s:10:"PROPERTIES";a:9:{s:8:"KEYWORDS";a:36:{s:2:"ID";s:1:"1";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:27:"Ключевые слова";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"100";s:4:"CODE";s:8:"KEYWORDS";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"S";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:3:"102";s:9:"FILE_TYPE";s:24:"jpg, gif, bmp, png, jpeg";s:12:"MULTIPLE_CNT";s:1:"5";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"N";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";s:2:"17";s:5:"VALUE";s:6:"ЧПУ";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:6:"ЧПУ";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:27:"Ключевые слова";s:14:"~DEFAULT_VALUE";N;}s:6:"AUTHOR";a:36:{s:2:"ID";s:1:"2";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:10:"Автор";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"200";s:4:"CODE";s:6:"AUTHOR";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"S";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:3:"101";s:9:"FILE_TYPE";s:24:"jpg, gif, bmp, png, jpeg";s:12:"MULTIPLE_CNT";s:1:"5";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"N";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";N;s:5:"VALUE";s:0:"";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:0:"";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:10:"Автор";s:14:"~DEFAULT_VALUE";N;}s:14:"FORUM_TOPIC_ID";a:36:{s:2:"ID";s:1:"3";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:48:"Идентификатор темы форума";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"300";s:4:"CODE";s:14:"FORUM_TOPIC_ID";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"N";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:3:"127";s:9:"FILE_TYPE";N;s:12:"MULTIPLE_CNT";s:1:"0";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"N";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";s:2:"18";s:5:"VALUE";s:2:"74";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:2:"74";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:48:"Идентификатор темы форума";s:14:"~DEFAULT_VALUE";N;}s:17:"FORUM_MESSAGE_CNT";a:36:{s:2:"ID";s:1:"4";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:45:"Количество комментариев";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"400";s:4:"CODE";s:17:"FORUM_MESSAGE_CNT";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"N";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:3:"128";s:9:"FILE_TYPE";N;s:12:"MULTIPLE_CNT";s:1:"0";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"N";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";s:2:"19";s:5:"VALUE";s:1:"1";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:1:"1";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:45:"Количество комментариев";s:14:"~DEFAULT_VALUE";N;}s:10:"vote_count";a:36:{s:2:"ID";s:1:"5";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:35:"Количество голосов";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"500";s:4:"CODE";s:10:"vote_count";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"N";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:3:"129";s:9:"FILE_TYPE";N;s:12:"MULTIPLE_CNT";s:1:"0";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"N";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";s:2:"20";s:5:"VALUE";s:1:"2";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:1:"2";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:35:"Количество голосов";s:14:"~DEFAULT_VALUE";N;}s:8:"vote_sum";a:36:{s:2:"ID";s:1:"6";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:25:"Сумма голосов";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"600";s:4:"CODE";s:8:"vote_sum";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"N";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:3:"130";s:9:"FILE_TYPE";N;s:12:"MULTIPLE_CNT";s:1:"0";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"N";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";s:2:"21";s:5:"VALUE";s:2:"10";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:2:"10";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:25:"Сумма голосов";s:14:"~DEFAULT_VALUE";N;}s:6:"rating";a:36:{s:2:"ID";s:1:"7";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:14:"Рейтинг";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"700";s:4:"CODE";s:6:"rating";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"N";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:3:"131";s:9:"FILE_TYPE";N;s:12:"MULTIPLE_CNT";s:1:"0";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"N";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";s:2:"22";s:5:"VALUE";s:4:"3.44";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:4:"3.44";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:14:"Рейтинг";s:14:"~DEFAULT_VALUE";N;}s:6:"THEMES";a:36:{s:2:"ID";s:1:"8";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:8:"Темы";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"800";s:4:"CODE";s:6:"THEMES";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"G";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"Y";s:6:"XML_ID";s:3:"138";s:9:"FILE_TYPE";N;s:12:"MULTIPLE_CNT";s:1:"5";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";s:1:"1";s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"Y";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";a:1:{i:0;s:2:"23";}s:5:"VALUE";a:1:{i:0;s:1:"4";}s:11:"DESCRIPTION";a:1:{i:0;N;}s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";a:1:{i:0;s:1:"4";}s:12:"~DESCRIPTION";a:1:{i:0;N;}s:5:"~NAME";s:8:"Темы";s:14:"~DEFAULT_VALUE";N;}s:13:"BROWSER_TITLE";a:36:{s:2:"ID";s:1:"9";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:44:"Заголовок окна браузера";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:4:"1000";s:4:"CODE";s:13:"BROWSER_TITLE";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"S";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:39:"content-articles-property-browser_title";s:9:"FILE_TYPE";N;s:12:"MULTIPLE_CNT";s:1:"1";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"Y";s:9:"FILTRABLE";s:1:"Y";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";N;s:5:"VALUE";s:0:"";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:0:"";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:44:"Заголовок окна браузера";s:14:"~DEFAULT_VALUE";N;}}s:16:"IPROPERTY_VALUES";a:0:{}s:11:"TIMESTAMP_X";s:19:"28.09.2016 12:27:46";}s:18:"templateCachedData";a:3:{s:13:"additionalCSS";s:87:"/bitrix/components/bitrix/news/templates/.default/bitrix/news.detail/.default/style.css";s:9:"frameMode";b:1;s:8:"__NavNum";i:1;}}}';
return true;
?>