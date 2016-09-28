<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001475067338';
$dateexpire = '001475070938';
$ser_content = 'a:2:{s:7:"CONTENT";s:3985:"<div class="news-detail">
				<span class="news-date-time">02.10.2009</span>
								<p>Для добавления нового движка шаблонизации на сайт в файл <i>/bitrix/php_interface/init.php</i> необходимо добавить следующее:</p>

<p>1. Глобальную переменную<i> $arCustomTemplateEngines</i>, которая содержит ассоциативный массив, каждый элемент которого имеет вид:
  <br />
 <i>&nbsp;&nbsp;&nbsp;&quot;код_шаблонизатора&quot; =&gt; array(
    <br />
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;templateExt&quot; =&gt; array(&quot;расширение1&quot;[, &quot;расширение2&quot;...]),
    <br />
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;function&quot; =&gt; &quot;имя_функции_подключения_движка&quot;
    <br />
   &nbsp;&nbsp;&nbsp;)</i>
  <br />
 где:
  <br />
 <i>&quot;код_шаблонизатора&quot;</i> - произвольное уникальное в рамках сайта слово;
  <br />
 <i>&quot;расширениеN&quot;</i> - расширение файла, который должен обрабатываться этим движком шаблонизации;
  <br />
 <i>&quot;имя_функции_подключения_движка&quot;</i> - имя функции, которая будет вызываться, если шаблон компонента имеет указанное расширение.
  <br />
 </p>

<p>2. Функцию подключения движков:
  <br />
 <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function имя_функции_подключения_движка($templateFile, $arResult, $arParams, $arLangMessages, $templateFolder, $parentTemplateFolder, $template)</i><i>,</i>
  <br />
 где:
  <br />
 <span><em>&nbsp;&nbsp;&nbsp;&nbsp; $templateFile &ndash; </em>путь к файлу шаблона относительно корня сайта<em>,
      <br />
     &nbsp;&nbsp;&nbsp;&nbsp; $arResult &ndash;</em> массив результатов работы компонента,
    <br />
   <em>&nbsp;&nbsp;&nbsp;&nbsp; $arParams &ndash;</em> массив входных параметров компонента,
    <br />
   <em>&nbsp;&nbsp;&nbsp;&nbsp; $arLangMessages &ndash;</em> массив языковых сообщений (переводов) шаблона,
    <br />
   <em>&nbsp;&nbsp;&nbsp;&nbsp; $templateFolder &ndash;</em> путь к папке шаблона относительно корня сайта (если шаблон лежит не в
    <br />
   папке, то эта переменная пуста),
    <br />
   <em>&nbsp;&nbsp;&nbsp;&nbsp; $parentTemplateFolder -</em> путь относительно корня сайта к папке шаблона комплексного
    <br />
   компонента, в составе которого подключается данный компонент (если компонент
    <br />
   подключается самостоятельно, то эта переменная пуста),
    <br />
   <em>&nbsp;&nbsp;&nbsp;&nbsp; $template &ndash;</em> объект шаблона.
    <br />

    <br />
   Рассмотрим подключение движков на конкретных примерах.</span></p>

<p></p>

<p align="left">		<br />
<font class="text">Страница 


	1 - 1 из 3<br /></font>

	<font class="text">

			Начало&nbsp;|&nbsp;Пред.&nbsp;|
	
	
					<b>1</b>
					
					<a href="/content/articles/2/?PAGEN_1=2">2</a>
					
					<a href="/content/articles/2/?PAGEN_1=3">3</a>
						|

			<a href="/content/articles/2/?PAGEN_1=2">След.</a>&nbsp;|
		<a href="/content/articles/2/?PAGEN_1=3">Конец</a>
	



</font>		<div style="clear:both"></div>
	<br />
	Количество показов:&nbsp;<br />
	</div>";s:4:"VARS";a:2:{s:8:"arResult";a:13:{s:2:"ID";s:1:"2";s:9:"IBLOCK_ID";s:1:"2";s:15:"NAV_CACHED_DATA";a:1:{s:9:"frameMode";b:1;}s:4:"NAME";s:70:"Пользовательские движки шаблонизации";s:17:"IBLOCK_SECTION_ID";N;s:6:"IBLOCK";a:88:{s:2:"ID";s:1:"2";s:3:"~ID";s:1:"2";s:11:"TIMESTAMP_X";s:19:"28.09.2016 12:27:46";s:12:"~TIMESTAMP_X";s:19:"28.09.2016 12:27:46";s:14:"IBLOCK_TYPE_ID";s:8:"articles";s:15:"~IBLOCK_TYPE_ID";s:8:"articles";s:3:"LID";s:2:"s1";s:4:"~LID";s:2:"s1";s:4:"CODE";s:8:"articles";s:5:"~CODE";s:8:"articles";s:4:"NAME";s:12:"Статьи";s:5:"~NAME";s:12:"Статьи";s:6:"ACTIVE";s:1:"Y";s:7:"~ACTIVE";s:1:"Y";s:4:"SORT";s:3:"200";s:5:"~SORT";s:3:"200";s:13:"LIST_PAGE_URL";s:18:"/content/articles/";s:14:"~LIST_PAGE_URL";s:18:"/content/articles/";s:15:"DETAIL_PAGE_URL";s:31:"/content/articles/#ELEMENT_ID#/";s:16:"~DETAIL_PAGE_URL";s:31:"/content/articles/#ELEMENT_ID#/";s:16:"SECTION_PAGE_URL";N;s:17:"~SECTION_PAGE_URL";N;s:18:"CANONICAL_PAGE_URL";N;s:19:"~CANONICAL_PAGE_URL";N;s:7:"PICTURE";N;s:8:"~PICTURE";N;s:11:"DESCRIPTION";s:12:"Статьи";s:12:"~DESCRIPTION";s:12:"Статьи";s:16:"DESCRIPTION_TYPE";s:4:"html";s:17:"~DESCRIPTION_TYPE";s:4:"html";s:7:"RSS_TTL";s:2:"24";s:8:"~RSS_TTL";s:2:"24";s:10:"RSS_ACTIVE";s:1:"Y";s:11:"~RSS_ACTIVE";s:1:"Y";s:15:"RSS_FILE_ACTIVE";s:1:"N";s:16:"~RSS_FILE_ACTIVE";s:1:"N";s:14:"RSS_FILE_LIMIT";N;s:15:"~RSS_FILE_LIMIT";N;s:13:"RSS_FILE_DAYS";N;s:14:"~RSS_FILE_DAYS";N;s:17:"RSS_YANDEX_ACTIVE";s:1:"N";s:18:"~RSS_YANDEX_ACTIVE";s:1:"N";s:6:"XML_ID";s:16:"content-articles";s:7:"~XML_ID";s:16:"content-articles";s:6:"TMP_ID";s:32:"2423a9143859451199a823c998972f13";s:7:"~TMP_ID";s:32:"2423a9143859451199a823c998972f13";s:13:"INDEX_ELEMENT";s:1:"Y";s:14:"~INDEX_ELEMENT";s:1:"Y";s:13:"INDEX_SECTION";s:1:"Y";s:14:"~INDEX_SECTION";s:1:"Y";s:8:"WORKFLOW";s:1:"Y";s:9:"~WORKFLOW";s:1:"Y";s:7:"BIZPROC";s:1:"N";s:8:"~BIZPROC";s:1:"N";s:15:"SECTION_CHOOSER";s:1:"L";s:16:"~SECTION_CHOOSER";s:1:"L";s:9:"LIST_MODE";N;s:10:"~LIST_MODE";N;s:11:"RIGHTS_MODE";s:1:"S";s:12:"~RIGHTS_MODE";s:1:"S";s:16:"SECTION_PROPERTY";N;s:17:"~SECTION_PROPERTY";N;s:14:"PROPERTY_INDEX";N;s:15:"~PROPERTY_INDEX";N;s:7:"VERSION";s:1:"1";s:8:"~VERSION";s:1:"1";s:17:"LAST_CONV_ELEMENT";s:1:"0";s:18:"~LAST_CONV_ELEMENT";s:1:"0";s:15:"SOCNET_GROUP_ID";N;s:16:"~SOCNET_GROUP_ID";N;s:16:"EDIT_FILE_BEFORE";N;s:17:"~EDIT_FILE_BEFORE";N;s:15:"EDIT_FILE_AFTER";N;s:16:"~EDIT_FILE_AFTER";N;s:13:"SECTIONS_NAME";s:27:"Разделы статей";s:14:"~SECTIONS_NAME";s:27:"Разделы статей";s:12:"SECTION_NAME";s:25:"Раздел статей";s:13:"~SECTION_NAME";s:25:"Раздел статей";s:13:"ELEMENTS_NAME";s:12:"Статьи";s:14:"~ELEMENTS_NAME";s:12:"Статьи";s:12:"ELEMENT_NAME";s:12:"Статья";s:13:"~ELEMENT_NAME";s:12:"Статья";s:11:"EXTERNAL_ID";s:16:"content-articles";s:12:"~EXTERNAL_ID";s:16:"content-articles";s:8:"LANG_DIR";s:1:"/";s:9:"~LANG_DIR";s:1:"/";s:11:"SERVER_NAME";N;s:12:"~SERVER_NAME";N;}s:13:"LIST_PAGE_URL";s:18:"/content/articles/";s:14:"~LIST_PAGE_URL";s:18:"/content/articles/";s:11:"SECTION_URL";s:0:"";s:7:"SECTION";a:1:{s:4:"PATH";a:0:{}}s:10:"PROPERTIES";a:9:{s:8:"KEYWORDS";a:36:{s:2:"ID";s:1:"1";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:27:"Ключевые слова";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"100";s:4:"CODE";s:8:"KEYWORDS";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"S";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:3:"102";s:9:"FILE_TYPE";s:24:"jpg, gif, bmp, png, jpeg";s:12:"MULTIPLE_CNT";s:1:"5";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"N";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";s:1:"9";s:5:"VALUE";s:12:"движки";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:12:"движки";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:27:"Ключевые слова";s:14:"~DEFAULT_VALUE";N;}s:6:"AUTHOR";a:36:{s:2:"ID";s:1:"2";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:10:"Автор";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"200";s:4:"CODE";s:6:"AUTHOR";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"S";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:3:"101";s:9:"FILE_TYPE";s:24:"jpg, gif, bmp, png, jpeg";s:12:"MULTIPLE_CNT";s:1:"5";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"N";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";N;s:5:"VALUE";s:0:"";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:0:"";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:10:"Автор";s:14:"~DEFAULT_VALUE";N;}s:14:"FORUM_TOPIC_ID";a:36:{s:2:"ID";s:1:"3";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:48:"Идентификатор темы форума";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"300";s:4:"CODE";s:14:"FORUM_TOPIC_ID";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"N";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:3:"127";s:9:"FILE_TYPE";N;s:12:"MULTIPLE_CNT";s:1:"0";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"N";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";s:2:"10";s:5:"VALUE";s:2:"59";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:2:"59";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:48:"Идентификатор темы форума";s:14:"~DEFAULT_VALUE";N;}s:17:"FORUM_MESSAGE_CNT";a:36:{s:2:"ID";s:1:"4";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:45:"Количество комментариев";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"400";s:4:"CODE";s:17:"FORUM_MESSAGE_CNT";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"N";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:3:"128";s:9:"FILE_TYPE";N;s:12:"MULTIPLE_CNT";s:1:"0";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"N";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";s:2:"11";s:5:"VALUE";s:1:"0";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:1:"0";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:45:"Количество комментариев";s:14:"~DEFAULT_VALUE";N;}s:10:"vote_count";a:36:{s:2:"ID";s:1:"5";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:35:"Количество голосов";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"500";s:4:"CODE";s:10:"vote_count";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"N";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:3:"129";s:9:"FILE_TYPE";N;s:12:"MULTIPLE_CNT";s:1:"0";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"N";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";N;s:5:"VALUE";s:0:"";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:0:"";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:35:"Количество голосов";s:14:"~DEFAULT_VALUE";N;}s:8:"vote_sum";a:36:{s:2:"ID";s:1:"6";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:25:"Сумма голосов";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"600";s:4:"CODE";s:8:"vote_sum";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"N";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:3:"130";s:9:"FILE_TYPE";N;s:12:"MULTIPLE_CNT";s:1:"0";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"N";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";N;s:5:"VALUE";s:0:"";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:0:"";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:25:"Сумма голосов";s:14:"~DEFAULT_VALUE";N;}s:6:"rating";a:36:{s:2:"ID";s:1:"7";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:14:"Рейтинг";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"700";s:4:"CODE";s:6:"rating";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"N";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:3:"131";s:9:"FILE_TYPE";N;s:12:"MULTIPLE_CNT";s:1:"0";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"N";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";N;s:5:"VALUE";s:0:"";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:0:"";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:14:"Рейтинг";s:14:"~DEFAULT_VALUE";N;}s:6:"THEMES";a:36:{s:2:"ID";s:1:"8";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:8:"Темы";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:3:"800";s:4:"CODE";s:6:"THEMES";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"G";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"Y";s:6:"XML_ID";s:3:"138";s:9:"FILE_TYPE";N;s:12:"MULTIPLE_CNT";s:1:"5";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";s:1:"1";s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"N";s:9:"FILTRABLE";s:1:"Y";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";a:1:{i:0;s:2:"12";}s:5:"VALUE";a:1:{i:0;s:1:"3";}s:11:"DESCRIPTION";a:1:{i:0;N;}s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";a:1:{i:0;s:1:"3";}s:12:"~DESCRIPTION";a:1:{i:0;N;}s:5:"~NAME";s:8:"Темы";s:14:"~DEFAULT_VALUE";N;}s:13:"BROWSER_TITLE";a:36:{s:2:"ID";s:1:"9";s:11:"TIMESTAMP_X";s:19:"2016-09-28 12:27:46";s:9:"IBLOCK_ID";s:1:"2";s:4:"NAME";s:44:"Заголовок окна браузера";s:6:"ACTIVE";s:1:"Y";s:4:"SORT";s:4:"1000";s:4:"CODE";s:13:"BROWSER_TITLE";s:13:"DEFAULT_VALUE";N;s:13:"PROPERTY_TYPE";s:1:"S";s:9:"ROW_COUNT";s:1:"1";s:9:"COL_COUNT";s:2:"30";s:9:"LIST_TYPE";s:1:"L";s:8:"MULTIPLE";s:1:"N";s:6:"XML_ID";s:39:"content-articles-property-browser_title";s:9:"FILE_TYPE";N;s:12:"MULTIPLE_CNT";s:1:"1";s:6:"TMP_ID";N;s:14:"LINK_IBLOCK_ID";N;s:16:"WITH_DESCRIPTION";s:1:"N";s:10:"SEARCHABLE";s:1:"Y";s:9:"FILTRABLE";s:1:"Y";s:11:"IS_REQUIRED";N;s:7:"VERSION";s:1:"1";s:9:"USER_TYPE";N;s:18:"USER_TYPE_SETTINGS";N;s:4:"HINT";N;s:17:"PROPERTY_VALUE_ID";N;s:5:"VALUE";s:0:"";s:11:"DESCRIPTION";s:0:"";s:10:"VALUE_ENUM";N;s:12:"VALUE_XML_ID";N;s:10:"VALUE_SORT";N;s:6:"~VALUE";s:0:"";s:12:"~DESCRIPTION";s:0:"";s:5:"~NAME";s:44:"Заголовок окна браузера";s:14:"~DEFAULT_VALUE";N;}}s:16:"IPROPERTY_VALUES";a:0:{}s:11:"TIMESTAMP_X";s:19:"28.09.2016 12:27:46";}s:18:"templateCachedData";a:3:{s:13:"additionalCSS";s:87:"/bitrix/components/bitrix/news/templates/.default/bitrix/news.detail/.default/style.css";s:9:"frameMode";b:1;s:8:"__NavNum";i:1;}}}';
return true;
?>