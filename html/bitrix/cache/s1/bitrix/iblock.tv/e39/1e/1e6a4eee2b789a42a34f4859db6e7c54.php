<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001475067089';
$dateexpire = '001475070689';
$ser_content = 'a:2:{s:7:"CONTENT";s:9841:"	<div id="bx_tv_block_0" style="width: 400px;">
		<div id="tv_playerjsPublicTVCollector.tv[0]" class="player_player" style="width: 400px; height: 324px;">
				<div id="bitrix_tv_flv_cont_0" style="display: none;">
		

<div id="bitrix_tv_flv_0_div" style="width: 400px; height: 324px;">Загрузка плеера</div>
<script>
window.bxPlayerOnloadbitrix_tv_flv_0 = function(config)
{
	if (typeof config != \'object\')
		config = {\'file\':\'/upload/intro.flv\',\'height\':\'324\',\'width\':\'400\',\'dock\':true,\'id\':\'bitrix_tv_flv_0\',\'controlbar\':\'bottom\',\'players\':[{\'type\':\'html5\'},{\'type\':\'flash\',\'src\':\'/bitrix/components/bitrix/player/mediaplayer/player\'}],\'image\':\'/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_big.png\',\'logo.file\':\'/bitrix/components/bitrix/iblock.tv/templates/.default/images/logo.png\',\'logo.link\':\'http://www.1c-bitrix.ru/products/cms/features/mediaplayer.php\',\'logo.hide\':\'false\',\'repeat\':\'N\',\'bufferlength\':\'10\',\'abouttext\':\'1С-Битрикс: Медиа-плеер\',\'aboutlink\':\'http://www.1c-bitrix.ru/products/cms/features/mediaplayer.php\'};

	jwplayer("bitrix_tv_flv_0_div").setup(config);

		jwplayer("bitrix_tv_flv_0_div").onReady(function()
	{
		try{
			var pWmode = BX.findChild(BX("bitrix_tv_flv_0_div"), {tagName: "PARAM", attribute: {name: "wmode"}});
			if (pWmode)
				pWmode.value = "transparent";

			var pEmbed = BX.findChild(BX("bitrix_tv_flv_0_div"), {tagName: "EMBED"});
			if (pEmbed && pEmbed.setAttribute)
				pEmbed.setAttribute("wmode", "transparent");
		}catch(e){}
	});
	};

if (window.jwplayer) // jw script already loaded
{
	setTimeout(bxPlayerOnloadbitrix_tv_flv_0, 100);
}
else
{
	BX.addCustomEvent(window, "onPlayerJWScriptLoad", function(){setTimeout(bxPlayerOnloadbitrix_tv_flv_0, 100);});
	if (!window.bPlayerJWScriptLoaded)
	{
		window.bPlayerJWScriptLoaded = true;
		// load jw scripts once
		BX.loadScript(\'/bitrix/components/bitrix/player/mediaplayer/jwplayer.js\', function(){setTimeout(function()
		{
			BX.onCustomEvent(window, "onPlayerJWScriptLoad");
		}, 100);});
	}
}
</script><noscript>В вашем браузере отключен JavaScript</noscript>

		</div>
		
				</div>
			<div id="tv_list_0" class="player_tree_list" style="width: 398px;"></div>
		</div>
	<script>
	
		jsPublicTVCollector.list[0] =
		[
			{
				Id: \'9\',
				Name: \'\',
				Depth: \'0\',
				Items:
				[
					{
						Id: 17,
						Name: \'Адаптивный интерфейс\',
						Description: \'\',
						SmallImage: \'/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_small.png\',
						BigImage: \'/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_big.png\',
						Duration: \'20:30\',
						File: \'http://www.1c-bitrix.ru/video/03_interface.flv\',
						Size: \'\',
						Type: \'flv\',
						Action: \'\'
					},
					{
						Id: 16,
						Name: \'Типовые операции\',
						Description: \'\',
						SmallImage: \'/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_small.png\',
						BigImage: \'/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_big.png\',
						Duration: \'11:37\',
						File: \'http://www.1c-bitrix.ru/video/02_typ.flv\',
						Size: \'\',
						Type: \'flv\',
						Action: \'\'
					},
					{
						Id: 15,
						Name: \'Вступление\',
						Description: \'\',
						SmallImage: \'/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_small.png\',
						BigImage: \'/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_big.png\',
						Duration: \'0:47\',
						File: \'/upload/intro.flv\',
						Size: \'2.97\',
						Type: \'flv\',
						Action: \'\'
					}
				]
			}
		];
	jsPublicTVCollector.tv[0] = new jsPublicTV();
	jsPublicTVCollector.tv[0].LanguagePhrases = {
		\'duration\':\'Длительность: \',
		\'title\':\'Название: \',
		\'description\':\'Описание: \',
		\'file\':\'Файл: \',
		\'download\':\'Скачать\',
		\'size_mb\':\' Мб\',
		\'play\':\'Посмотреть\',
		\'edit\':\'Изменить\'
	};

	//set uniq prefix
	jsPublicTVCollector.tv[0].Prefix = \'p0\';

	//Init additonal TV properties
	jsPublicTVCollector.add[0] = {};

	//set orderplay \\section\\
	jsPublicTVCollector.add[0].PlayOrder = function(type)
	{
		jsPublicTVCollector.tv[0].PlayOrder = type;
	}

	/*select*/
	//set selected item
	jsPublicTVCollector.add[0].SelectListItem = function(old_i, old_j)
	{
		if(jsPublicTVCollector.tv[0].CurrentItem)
		{
			var i = jsPublicTVCollector.tv[0].CurrentItem.Section;
			var j = jsPublicTVCollector.tv[0].CurrentItem.Item;
			var prefix = jsPublicTVCollector.tv[0].Prefix ;
			var item = document.getElementById(prefix + \'bx-tv-s\' + i + \'i\' + j);
			if(item)
			{
				item = item.getElementsByTagName(\'DIV\');
				if(item.length>0)
					item[0].className = jsPublicTVCollector.add[0].ListItemColors.select;

				//scroll to selected
				TreeBlockID = document.getElementById(jsPublicTVCollector.tv[0].TreeBlockID.id);
				TreeBlockID.scrollTop = BX.browser.IsIE()
					?item[0].offsetTop-13
					:item[0].offsetTop - TreeBlockID.offsetTop - 4;

				//unselect
				if(typeof(old_i) != "undefined" && typeof(old_j) != "undefined" && old_j!==\'\' && old_i!==\'\')
				{
					var item = document.getElementById(prefix + \'bx-tv-s\' + old_i + \'i\' + old_j);
					if(item)
					{
						item = item.getElementsByTagName(\'DIV\');
						if(item.length>0)
							item[0].className = jsPublicTVCollector.add[0].ListItemColors.normal;
					}
				}
			}
		}
	}

	//set hover item
	jsPublicTVCollector.add[0].HoverListItem = function(ob)
	{
		if(ob.className != jsPublicTVCollector.add[0].ListItemColors.select)
		{
			if(ob.className != jsPublicTVCollector.add[0].ListItemColors.hover)
				ob.className = jsPublicTVCollector.add[0].ListItemColors.hover;
			else
				ob.className = jsPublicTVCollector.add[0].ListItemColors.normal;
		}
	}

	//set default hover\\select colors
	jsPublicTVCollector.add[0].ListItemColors = {select: \'selected-tv-item\', hover:\'hover-tv-item\', normal:\'normal-tv-item\'}
	/*end-select*/

	//Template of the item block
	jsPublicTVCollector.tv[0].AddPlayerListener(
		\'BUILD_ITEM\',
		function(txt, i, j)
		{
			txt =
			\'<div onmouseover="jsPublicTVCollector.add[0].HoverListItem(this)" onmouseout="jsPublicTVCollector.add[0].HoverListItem(this)" style="padding:10px 0px">\'
				+\'<div class="bitrix-tv-small-image" onclick="jsPublicTVCollector.tv[0].PlayFile(\'+i+\',\'+j+\',true,true)">\'
					+\'<img width="\' + jsPublicTVCollector.tv[0].ShowPreviewImageSize[0] + \'px" height="\' + jsPublicTVCollector.tv[0].ShowPreviewImageSize[1] + \'px" src="\' + jsPublicTVCollector.tv[0][\'Sections\'][i][\'Items\'][j][\'SmallImage\'] + \'">\' //image
				+\'</div>\'
				+\'<div class="bitrix-tv-tree-item-description">\'
					+\'<a onclick="jsPublicTVCollector.tv[0].PlayFile(\'+i+\',\'+j+\',true,true)" class="tv-desc-name">\' + jsPublicTVCollector.tv[0][\'Sections\'][i][\'Items\'][j][\'Name\'] + \'</a>\' //name
					+jsPublicTVCollector.tv[0][\'Sections\'][i][\'Items\'][j][\'Description\'] //description
					+\'<div class="delimiter-tv-param-line-bottom">\'
						+\'<div class="delimiter-tv-param-line">\'
							+\'<a href="\' + jsPublicTVCollector.tv[0][\'Sections\'][i][\'Items\'][j][\'File\'] + \'">\'
								+ jsPublicTVCollector.tv[0].LanguagePhrases.download + \'</a>\'
									+ (jsPublicTVCollector.tv[0][\'Sections\'][i][\'Items\'][j][\'Size\'].length >0
										?\' <span class="tv-gray">(\'+jsPublicTVCollector.tv[0][\'Sections\'][i][\'Items\'][j][\'Size\']+jsPublicTVCollector.tv[0].LanguagePhrases.size_mb+\')</span>\'
										:\'\')
						+\'</div>\'
						+(jsPublicTVCollector.tv[0][\'Sections\'][i][\'Items\'][j][\'Duration\'].length >0
							?\'<div class="delimiter-tv-param"></div>\'
								+\'<div class="delimiter-tv-param-line">\'
									+\'<span class="tv-gray">\'+jsPublicTVCollector.tv[0][\'Sections\'][i][\'Items\'][j][\'Duration\']
									+\'</span>\'
								+\'</div>\'
							:\'\') //duration
						+ \'<div class="delimiter-tv-param"></div>\'
						+\'<div class="delimiter-tv-param-line">\'
							+ \'<a href="javascript:void(0)" onclick="jsPublicTVCollector.tv[0].PlayFile(\'+i+\',\'+j+\',true,true)">\' + jsPublicTVCollector.tv[0].LanguagePhrases.play + \'</span>\'
						+\'</div>\'
						+(jsPublicTVCollector.tv[0][\'Sections\'][i][\'Items\'][j][\'Action\'].length >0
							? \'<div class="delimiter-tv-param"></div>\'
							+ \'<div class="delimiter-tv-param-line">\'
								+ \'<a href="javascript:void(0)" onclick="\' + jsPublicTVCollector.tv[0][\'Sections\'][i][\'Items\'][j][\'Action\'] + \'">\' + jsPublicTVCollector.tv[0].LanguagePhrases.edit + \'</span>\'
							+\'</div>\'
							:\'\') //edit action
						+\'<div style="clear:both;"></div>\'
					+\'</div>\'
				+\'</div>\'
				+\'<div style="clear:both;"></div>\'
			+\'</div>\'
			+\'<div class="delimiter-gray-mono-grad2-item">\';

			return txt;
		}
	);

	jsPublicTVCollector.tv[0].AddPlayerListener(
		\'BEFORE_PLAY_FILE\',
		function(i, j, old_i, old_j)
		{
			jsPublicTVCollector.add[0].SelectListItem(old_i, old_j);
		}
	);

	//init&run
	if(jsPublicTVCollector.tv[0])
	{
		jsPublicTVCollector.tv[0].Init(
			jsPublicTVCollector.list[0],
			\'tv_list_0\',
			\'tv_description_0\',
			{
				block_id:
				{
					wmv: \'bitrix_tv_wmv_cont_0\',
					flv: \'bitrix_tv_flv_cont_0\'
				},
				obj_id:
				{
					wmv: \'bitrix_tv_wmv_0\',
					flv: \'bitrix_tv_flv_0_div\'
				},
				logo: \'/bitrix/components/bitrix/iblock.tv/templates/.default/images/logo.png\',
				height: \'324\',
				width: \'400\'
			}
		);
		jsPublicTVCollector.tv[0].BuildTree(false, 0);

		SetItem = jsPublicTVCollector.tv[0].SeekByRealParams(false, 15);
		if(false!==SetItem.section && false!==SetItem.element)
			jsPublicTVCollector.tv[0].PlayFile(SetItem.section, SetItem.element, false, true);

		if(jsPublicTVCollector.tv[0].PlayOrder != \'section\')
			jsPublicTVCollector.add[0].PlayOrder(\'section\');

		//set selected item
		jsPublicTVCollector.add[0].SelectListItem();
	}

	</script>
<br clear="all"/>";s:4:"VARS";a:2:{s:8:"arResult";a:4:{s:8:"CAN_EDIT";s:1:"N";s:14:"IBLOCK_TYPE_ID";s:8:"services";s:9:"RAW_FILES";a:3:{s:46:"http://www.1c-bitrix.ru/video/03_interface.flv";a:2:{s:2:"ID";s:2:"17";s:4:"NAME";s:39:"Адаптивный интерфейс";}s:40:"http://www.1c-bitrix.ru/video/02_typ.flv";a:2:{s:2:"ID";s:2:"16";s:4:"NAME";s:31:"Типовые операции";}s:17:"/upload/intro.flv";a:2:{s:2:"ID";s:2:"15";s:4:"NAME";s:20:"Вступление";}}s:9:"IBLOCK_ID";s:1:"4";}s:18:"templateCachedData";a:5:{s:13:"additionalCSS";s:64:"/bitrix/components/bitrix/iblock.tv/templates/.default/style.css";s:12:"additionalJS";s:64:"/bitrix/components/bitrix/iblock.tv/templates/.default/script.js";s:9:"frameMode";b:1;s:14:"__children_css";a:1:{i:0;s:61:"/bitrix/components/bitrix/player/templates/.default/style.css";}s:18:"__children_epilogs";a:1:{i:0;a:5:{s:10:"epilogFile";s:72:"/bitrix/components/bitrix/player/templates/.default/component_epilog.php";s:12:"templateName";s:8:".default";s:12:"templateFile";s:64:"/bitrix/components/bitrix/player/templates/.default/template.php";s:14:"templateFolder";s:51:"/bitrix/components/bitrix/player/templates/.default";s:12:"templateData";b:0;}}}}}';
return true;
?>