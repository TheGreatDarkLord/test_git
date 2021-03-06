
; /* Start:"a:4:{s:4:"full";s:114:"/bitrix/components/bitrix/catalog/templates/.default/bitrix/catalog.compare.list/.default/script.js?14750547573120";s:6:"source";s:99:"/bitrix/components/bitrix/catalog/templates/.default/bitrix/catalog.compare.list/.default/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
(function (window) {

if (!!window.JCCatalogCompareList)
{
	return;
}

window.JCCatalogCompareList = function (params)
{
	this.obCompare = null;
	this.obAdminPanel = null;
	this.visual = params.VISUAL;
	this.visual.LIST = this.visual.ID + '_tbl';
	this.visual.ROW = this.visual.ID + '_row_';
	this.visual.COUNT = this.visual.ID + '_count';
	this.ajax = params.AJAX;
	this.position = params.POSITION;

	BX.ready(BX.proxy(this.init, this));
};

window.JCCatalogCompareList.prototype.init = function()
{
	this.obCompare = BX(this.visual.ID);
	if (!!this.obCompare)
	{
		BX.addCustomEvent(window, "OnCompareChange", BX.proxy(this.reload, this));
		BX.bindDelegate(this.obCompare, 'click', {tagName : 'a'}, BX.proxy(this.deleteCompare, this));
		if (this.position.fixed && this.position.align.vertical === 'top')
		{
			this.obAdminPanel = BX('bx-panel');
			if (!!this.obAdminPanel)
			{
				this.setVerticalAlign();
				BX.addCustomEvent(window, 'onTopPanelCollapse', BX.proxy(this.setVerticalAlign, this));
			}
		}
	}
};

window.JCCatalogCompareList.prototype.reload = function()
{
	BX.showWait(this.obCompare);
	BX.ajax.post(
		this.ajax.url,
		this.ajax.params,
		BX.proxy(this.reloadResult, this)
	);
};

window.JCCatalogCompareList.prototype.reloadResult = function(result)
{
	BX.closeWait();
	this.obCompare.innerHTML = result;
	BX.style(this.obCompare, 'display', 'block');
};

window.JCCatalogCompareList.prototype.deleteCompare = function()
{
	var target = BX.proxy_context,
		itemID,
		url;

	if (!!target && target.hasAttribute('data-id'))
	{
		itemID = parseInt(target.getAttribute('data-id'), 10);
		if (!isNaN(itemID))
		{
			BX.showWait(this.obCompare);
			url = this.ajax.url + this.ajax.templates.delete + itemID.toString();
			BX.ajax.loadJSON(
				url,
				this.ajax.params,
				BX.proxy(this.deleteCompareResult, this)
			);
		}
	}
};

window.JCCatalogCompareList.prototype.deleteCompareResult = function(result)
{
	var tbl,
		i,
		deleteID,
		cnt,
		newCount;

	BX.closeWait();
	if (typeof result === 'object')
	{
		if (!!result.STATUS && result.STATUS === 'OK' && !!result.ID)
		{
			tbl = BX(this.visual.LIST);
			if (tbl)
			{
				if (tbl.rows.length > 1)
				{
					deleteID = this.visual.ROW + result.ID;
					for (i = 0; i < tbl.rows.length; i++)
					{
						if (tbl.rows[i].id === deleteID)
						{
							tbl.deleteRow(i);
						}
					}
					tbl = null;
					if (!!result.COUNT)
					{
						newCount = parseInt(result.COUNT, 10);
						if (!isNaN(newCount))
						{
							cnt = BX(this.visual.COUNT);
							if (!!cnt)
							{
								cnt.innerHTML = newCount.toString();
								cnt = null;
							}
							BX.style(this.obCompare, 'display', (newCount > 0 ? 'block' : 'none'));
						}
					}
				}
				else
				{
					this.reload();
				}
			}
		}
	}
};

window.JCCatalogCompareList.prototype.setVerticalAlign = function()
{
	var topSize;
	if (!!this.obCompare && !!this.obAdminPanel)
	{
		topSize = parseInt(this.obAdminPanel.offsetHeight, 10);
		if (isNaN(topSize))
		{
			topSize = 0;
		}
		topSize +=5;
		BX.style(this.obCompare, 'top', topSize.toString()+'px');
	}
};

})(window);
/* End */
;
; /* Start:"a:4:{s:4:"full";s:118:"/bitrix/components/bitrix/catalog/templates/.default/bitrix/catalog.top/.default/section/script.min.js?147505475726802";s:6:"source";s:98:"/bitrix/components/bitrix/catalog/templates/.default/bitrix/catalog.top/.default/section/script.js";s:3:"min";s:102:"/bitrix/components/bitrix/catalog/templates/.default/bitrix/catalog.top/.default/section/script.min.js";s:3:"map";s:102:"/bitrix/components/bitrix/catalog/templates/.default/bitrix/catalog.top/.default/section/script.map.js";}"*/
(function(t){if(!!t.JCCatalogTopSection){return}var e=function(t){e.superclass.constructor.apply(this,arguments);this.nameNode=BX.create("span",{props:{className:"bx_medium bx_bt_button",id:this.id},style:typeof t.style==="object"?t.style:{},text:t.text});this.buttonNode=BX.create("span",{attrs:{className:t.ownerClass},style:{marginBottom:"0",borderBottom:"0 none transparent"},children:[this.nameNode],events:this.contextEvents});if(BX.browser.IsIE()){this.buttonNode.setAttribute("hideFocus","hidefocus")}};BX.extend(e,BX.PopupWindowButton);t.JCCatalogTopSection=function(t){this.productType=0;this.showQuantity=true;this.showAbsent=true;this.secondPict=false;this.showOldPrice=false;this.showPercent=false;this.showSkuProps=false;this.basketAction="ADD";this.showClosePopup=false;this.useCompare=false;this.visual={ID:"",PICT_ID:"",SECOND_PICT_ID:"",QUANTITY_ID:"",QUANTITY_UP_ID:"",QUANTITY_DOWN_ID:"",PRICE_ID:"",DSC_PERC:"",SECOND_DSC_PERC:"",DISPLAY_PROP_DIV:""};this.product={checkQuantity:false,maxQuantity:0,stepQuantity:1,isDblQuantity:false,canBuy:true,canSubscription:true,name:"",pict:{},id:0,addUrl:"",buyUrl:""};this.basketMode="";this.basketData={useProps:false,emptyProps:false,quantity:"quantity",props:"prop",basketUrl:"",sku_props:"",sku_props_var:"basket_props",add_url:"",buy_url:""};this.compareData={compareUrl:"",comparePath:""};this.defaultPict={pict:null,secondPict:null};this.checkQuantity=false;this.maxQuantity=0;this.stepQuantity=1;this.isDblQuantity=false;this.canBuy=true;this.currentBasisPrice={};this.canSubscription=true;this.precision=6;this.precisionFactor=Math.pow(10,this.precision);this.offers=[];this.offerNum=0;this.treeProps=[];this.obTreeRows=[];this.showCount=[];this.showStart=[];this.selectedValues={};this.obProduct=null;this.obQuantity=null;this.obQuantityUp=null;this.obQuantityDown=null;this.obPict=null;this.obSecondPict=null;this.obPrice=null;this.obTree=null;this.obBuyBtn=null;this.obBasketActions=null;this.obNotAvail=null;this.obDscPerc=null;this.obSecondDscPerc=null;this.obSkuProps=null;this.obMeasure=null;this.obCompare=null;this.treeRowShowSize=5;this.treeEnableArrow={display:"",cursor:"pointer",opacity:1};this.treeDisableArrow={display:"",cursor:"default",opacity:.2};this.lastElement=false;this.containerHeight=0;this.errorCode=0;if("object"===typeof t){this.productType=parseInt(t.PRODUCT_TYPE,10);this.showQuantity=t.SHOW_QUANTITY;this.showAbsent=t.SHOW_ABSENT;this.secondPict=!!t.SECOND_PICT;this.showOldPrice=!!t.SHOW_OLD_PRICE;this.showPercent=!!t.SHOW_DISCOUNT_PERCENT;this.showSkuProps=!!t.SHOW_SKU_PROPS;if(!!t.ADD_TO_BASKET_ACTION){this.basketAction=t.ADD_TO_BASKET_ACTION}this.showClosePopup=!!t.SHOW_CLOSE_POPUP;this.useCompare=!!t.DISPLAY_COMPARE;this.visual=t.VISUAL;switch(this.productType){case 0:case 1:case 2:if(!!t.PRODUCT&&"object"===typeof t.PRODUCT){if(this.showQuantity){this.product.checkQuantity=t.PRODUCT.CHECK_QUANTITY;this.product.isDblQuantity=t.PRODUCT.QUANTITY_FLOAT;if(this.product.checkQuantity){this.product.maxQuantity=this.product.isDblQuantity?parseFloat(t.PRODUCT.MAX_QUANTITY):parseInt(t.PRODUCT.MAX_QUANTITY,10)}this.product.stepQuantity=this.product.isDblQuantity?parseFloat(t.PRODUCT.STEP_QUANTITY):parseInt(t.PRODUCT.STEP_QUANTITY,10);this.checkQuantity=this.product.checkQuantity;this.isDblQuantity=this.product.isDblQuantity;this.maxQuantity=this.product.maxQuantity;this.stepQuantity=this.product.stepQuantity;if(this.isDblQuantity){this.stepQuantity=Math.round(this.stepQuantity*this.precisionFactor)/this.precisionFactor}}this.product.canBuy=t.PRODUCT.CAN_BUY;this.product.canSubscription=t.PRODUCT.SUBSCRIPTION;if(!!t.PRODUCT.BASIS_PRICE){this.currentBasisPrice=t.PRODUCT.BASIS_PRICE}this.canBuy=this.product.canBuy;this.canSubscription=this.product.canSubscription;this.product.name=t.PRODUCT.NAME;this.product.pict=t.PRODUCT.PICT;this.product.id=t.PRODUCT.ID;if(!!t.PRODUCT.ADD_URL){this.product.addUrl=t.PRODUCT.ADD_URL}if(!!t.PRODUCT.BUY_URL){this.product.buyUrl=t.PRODUCT.BUY_URL}if(!!t.BASKET&&"object"===typeof t.BASKET){this.basketData.useProps=!!t.BASKET.ADD_PROPS;this.basketData.emptyProps=!!t.BASKET.EMPTY_PROPS}}else{this.errorCode=-1}break;case 3:if(!!t.OFFERS&&BX.type.isArray(t.OFFERS)){this.product.name=t.PRODUCT.NAME;this.product.id=t.PRODUCT.ID;this.offers=t.OFFERS;this.offerNum=0;if(!!t.OFFER_SELECTED){this.offerNum=parseInt(t.OFFER_SELECTED,10)}if(isNaN(this.offerNum)){this.offerNum=0}if(!!t.TREE_PROPS){this.treeProps=t.TREE_PROPS}if(!!t.DEFAULT_PICTURE){this.defaultPict.pict=t.DEFAULT_PICTURE.PICTURE;this.defaultPict.secondPict=t.DEFAULT_PICTURE.PICTURE_SECOND}}break;default:this.errorCode=-1}if(!!t.BASKET&&"object"===typeof t.BASKET){if(!!t.BASKET.QUANTITY){this.basketData.quantity=t.BASKET.QUANTITY}if(!!t.BASKET.PROPS){this.basketData.props=t.BASKET.PROPS}if(!!t.BASKET.BASKET_URL){this.basketData.basketUrl=t.BASKET.BASKET_URL}if(3===this.productType){if(!!t.BASKET.SKU_PROPS){this.basketData.sku_props=t.BASKET.SKU_PROPS}}if(!!t.BASKET.ADD_URL_TEMPLATE){this.basketData.add_url=t.BASKET.ADD_URL_TEMPLATE}if(!!t.BASKET.BUY_URL_TEMPLATE){this.basketData.buy_url=t.BASKET.BUY_URL_TEMPLATE}if(this.basketData.add_url===""&&this.basketData.buy_url===""){this.errorCode=-1024}}if(this.useCompare){if(!!t.COMPARE&&typeof t.COMPARE==="object"){if(!!t.COMPARE.COMPARE_PATH){this.compareData.comparePath=t.COMPARE.COMPARE_PATH}if(!!t.COMPARE.COMPARE_URL_TEMPLATE){this.compareData.compareUrl=t.COMPARE.COMPARE_URL_TEMPLATE}else{this.useCompare=false}}else{this.useCompare=false}}this.lastElement=!!t.LAST_ELEMENT&&"Y"===t.LAST_ELEMENT}if(0===this.errorCode){BX.ready(BX.delegate(this.Init,this))}};t.JCCatalogTopSection.prototype.Init=function(){var e=0,s="",i=null;this.obProduct=BX(this.visual.ID);if(!this.obProduct){this.errorCode=-1}this.obPict=BX(this.visual.PICT_ID);if(!this.obPict){this.errorCode=-2}if(this.secondPict&&!!this.visual.SECOND_PICT_ID){this.obSecondPict=BX(this.visual.SECOND_PICT_ID)}this.obPrice=BX(this.visual.PRICE_ID);if(!this.obPrice){this.errorCode=-16}if(this.showQuantity&&!!this.visual.QUANTITY_ID){this.obQuantity=BX(this.visual.QUANTITY_ID);if(!!this.visual.QUANTITY_UP_ID){this.obQuantityUp=BX(this.visual.QUANTITY_UP_ID)}if(!!this.visual.QUANTITY_DOWN_ID){this.obQuantityDown=BX(this.visual.QUANTITY_DOWN_ID)}}if(3===this.productType&&this.offers.length>0){if(!!this.visual.TREE_ID){this.obTree=BX(this.visual.TREE_ID);if(!this.obTree){this.errorCode=-256}s=this.visual.TREE_ITEM_ID;for(e=0;e<this.treeProps.length;e++){this.obTreeRows[e]={LEFT:BX(s+this.treeProps[e].ID+"_left"),RIGHT:BX(s+this.treeProps[e].ID+"_right"),LIST:BX(s+this.treeProps[e].ID+"_list"),CONT:BX(s+this.treeProps[e].ID+"_cont")};if(!this.obTreeRows[e].LEFT||!this.obTreeRows[e].RIGHT||!this.obTreeRows[e].LIST||!this.obTreeRows[e].CONT){this.errorCode=-512;break}}}if(!!this.visual.QUANTITY_MEASURE){this.obMeasure=BX(this.visual.QUANTITY_MEASURE)}}this.obBasketActions=BX(this.visual.BASKET_ACTIONS_ID);if(!!this.obBasketActions){if(!!this.visual.BUY_ID){this.obBuyBtn=BX(this.visual.BUY_ID)}}this.obNotAvail=BX(this.visual.NOT_AVAILABLE_MESS);if(this.showPercent){if(!!this.visual.DSC_PERC){this.obDscPerc=BX(this.visual.DSC_PERC)}if(this.secondPict&&!!this.visual.SECOND_DSC_PERC){this.obSecondDscPerc=BX(this.visual.SECOND_DSC_PERC)}}if(this.showSkuProps){if(!!this.visual.DISPLAY_PROP_DIV){this.obSkuProps=BX(this.visual.DISPLAY_PROP_DIV)}}if(0===this.errorCode){if(this.showQuantity){if(!!this.obQuantityUp){BX.bind(this.obQuantityUp,"click",BX.delegate(this.QuantityUp,this))}if(!!this.obQuantityDown){BX.bind(this.obQuantityDown,"click",BX.delegate(this.QuantityDown,this))}if(!!this.obQuantity){BX.bind(this.obQuantity,"change",BX.delegate(this.QuantityChange,this))}}switch(this.productType){case 1:break;case 3:if(this.offers.length>0){i=BX.findChildren(this.obTree,{tagName:"li"},true);if(!!i&&0<i.length){for(e=0;e<i.length;e++){BX.bind(i[e],"click",BX.delegate(this.SelectOfferProp,this))}}for(e=0;e<this.obTreeRows.length;e++){BX.bind(this.obTreeRows[e].LEFT,"click",BX.delegate(this.RowLeft,this));BX.bind(this.obTreeRows[e].RIGHT,"click",BX.delegate(this.RowRight,this))}this.SetCurrent()}break}if(!!this.obBuyBtn){if(this.basketAction==="ADD"){BX.bind(this.obBuyBtn,"click",BX.delegate(this.Add2Basket,this))}else{BX.bind(this.obBuyBtn,"click",BX.delegate(this.BuyBasket,this))}}if(this.lastElement){this.containerHeight=parseInt(this.obProduct.parentNode.offsetHeight,10);if(isNaN(this.containerHeight)){this.containerHeight=0}this.setHeight();BX.bind(t,"resize",BX.delegate(this.checkHeight,this));BX.bind(this.obProduct.parentNode,"mouseover",BX.delegate(this.setHeight,this));BX.bind(this.obProduct.parentNode,"mouseout",BX.delegate(this.clearHeight,this))}if(this.useCompare){this.obCompare=BX(this.visual.COMPARE_LINK_ID);if(!!this.obCompare){BX.bind(this.obCompare,"click",BX.proxy(this.Compare,this))}}}};t.JCCatalogTopSection.prototype.checkHeight=function(){this.containerHeight=parseInt(this.obProduct.parentNode.offsetHeight,10);if(isNaN(this.containerHeight)){this.containerHeight=0}};t.JCCatalogTopSection.prototype.setHeight=function(){if(0<this.containerHeight){BX.adjust(this.obProduct.parentNode,{style:{height:this.containerHeight+"px"}})}};t.JCCatalogTopSection.prototype.clearHeight=function(){BX.adjust(this.obProduct.parentNode,{style:{height:"auto"}})};t.JCCatalogTopSection.prototype.QuantityUp=function(){var t=0,e=true,s;if(0===this.errorCode&&this.showQuantity&&this.canBuy){t=this.isDblQuantity?parseFloat(this.obQuantity.value):parseInt(this.obQuantity.value,10);if(!isNaN(t)){t+=this.stepQuantity;if(this.checkQuantity){if(t>this.maxQuantity){e=false}}if(e){if(this.isDblQuantity){t=Math.round(t*this.precisionFactor)/this.precisionFactor}this.obQuantity.value=t;s={DISCOUNT_VALUE:this.currentBasisPrice.DISCOUNT_VALUE*t,VALUE:this.currentBasisPrice.VALUE*t,DISCOUNT_DIFF:this.currentBasisPrice.DISCOUNT_DIFF*t,DISCOUNT_DIFF_PERCENT:this.currentBasisPrice.DISCOUNT_DIFF_PERCENT,CURRENCY:this.currentBasisPrice.CURRENCY};this.setPrice(s)}}}};t.JCCatalogTopSection.prototype.QuantityDown=function(){var t=0,e=true,s;if(0===this.errorCode&&this.showQuantity&&this.canBuy){t=this.isDblQuantity?parseFloat(this.obQuantity.value):parseInt(this.obQuantity.value,10);if(!isNaN(t)){t-=this.stepQuantity;if(t<this.stepQuantity){e=false}if(e){if(this.isDblQuantity){t=Math.round(t*this.precisionFactor)/this.precisionFactor}this.obQuantity.value=t;s={DISCOUNT_VALUE:this.currentBasisPrice.DISCOUNT_VALUE*t,VALUE:this.currentBasisPrice.VALUE*t,DISCOUNT_DIFF:this.currentBasisPrice.DISCOUNT_DIFF*t,DISCOUNT_DIFF_PERCENT:this.currentBasisPrice.DISCOUNT_DIFF_PERCENT,CURRENCY:this.currentBasisPrice.CURRENCY};this.setPrice(s)}}}};t.JCCatalogTopSection.prototype.QuantityChange=function(){var t=0,e,s,i;if(0===this.errorCode&&this.showQuantity){if(this.canBuy){t=this.isDblQuantity?parseFloat(this.obQuantity.value):parseInt(this.obQuantity.value,10);if(!isNaN(t)){if(this.checkQuantity){if(t>this.maxQuantity){t=this.maxQuantity}}if(t<this.stepQuantity){t=this.stepQuantity}else{i=Math.round(t*this.precisionFactor/this.stepQuantity)/this.precisionFactor;s=parseInt(i,10);if(isNaN(s)){s=1;i=1.1}if(i>s){t=s<=1?this.stepQuantity:s*this.stepQuantity;t=Math.round(t*this.precisionFactor)/this.precisionFactor}}this.obQuantity.value=t}else{this.obQuantity.value=this.stepQuantity}}else{this.obQuantity.value=this.stepQuantity}e={DISCOUNT_VALUE:this.currentBasisPrice.DISCOUNT_VALUE*this.obQuantity.value,VALUE:this.currentBasisPrice.VALUE*this.obQuantity.value,DISCOUNT_DIFF:this.currentBasisPrice.DISCOUNT_DIFF*this.obQuantity.value,DISCOUNT_DIFF_PERCENT:this.currentBasisPrice.DISCOUNT_DIFF_PERCENT,CURRENCY:this.currentBasisPrice.CURRENCY};this.setPrice(e)}};t.JCCatalogTopSection.prototype.QuantitySet=function(t){if(0===this.errorCode){this.canBuy=this.offers[t].CAN_BUY;if(this.canBuy){if(!!this.obBasketActions){BX.style(this.obBasketActions,"display","")}if(!!this.obNotAvail){BX.style(this.obNotAvail,"display","none")}}else{if(!!this.obBasketActions){BX.style(this.obBasketActions,"display","none")}if(!!this.obNotAvail){BX.style(this.obNotAvail,"display","")}}if(this.showQuantity){this.isDblQuantity=this.offers[t].QUANTITY_FLOAT;this.checkQuantity=this.offers[t].CHECK_QUANTITY;if(this.isDblQuantity){this.maxQuantity=parseFloat(this.offers[t].MAX_QUANTITY);this.stepQuantity=Math.round(parseFloat(this.offers[t].STEP_QUANTITY)*this.precisionFactor)/this.precisionFactor}else{this.maxQuantity=parseInt(this.offers[t].MAX_QUANTITY,10);this.stepQuantity=parseInt(this.offers[t].STEP_QUANTITY,10)}this.obQuantity.value=this.stepQuantity;this.obQuantity.disabled=!this.canBuy;if(!!this.obMeasure){if(!!this.offers[t].MEASURE){BX.adjust(this.obMeasure,{html:this.offers[t].MEASURE})}else{BX.adjust(this.obMeasure,{html:""})}}}this.currentBasisPrice=this.offers[t].BASIS_PRICE}};t.JCCatalogTopSection.prototype.SelectOfferProp=function(){var t=0,e="",s="",i=[],o=null,a=BX.proxy_context;if(!!a&&a.hasAttribute("data-treevalue")){s=a.getAttribute("data-treevalue");i=s.split("_");if(this.SearchOfferPropIndex(i[0],i[1])){o=BX.findChildren(a.parentNode,{tagName:"li"},false);if(!!o&&0<o.length){for(t=0;t<o.length;t++){e=o[t].getAttribute("data-onevalue");if(e===i[1]){BX.addClass(o[t],"bx_active")}else{BX.removeClass(o[t],"bx_active")}}}}}};t.JCCatalogTopSection.prototype.SearchOfferPropIndex=function(t,e){var s="",i=false,o,a,r=[],h=[],n=-1,u={},l=[];for(o=0;o<this.treeProps.length;o++){if(this.treeProps[o].ID===t){n=o;break}}if(-1<n){for(o=0;o<n;o++){s="PROP_"+this.treeProps[o].ID;u[s]=this.selectedValues[s]}s="PROP_"+this.treeProps[n].ID;i=this.GetRowValues(u,s);if(!i){return false}if(!BX.util.in_array(e,i)){return false}u[s]=e;for(o=n+1;o<this.treeProps.length;o++){s="PROP_"+this.treeProps[o].ID;i=this.GetRowValues(u,s);if(!i){return false}h=[];if(this.showAbsent){r=[];l=[];l=BX.clone(u,true);for(a=0;a<i.length;a++){l[s]=i[a];h[h.length]=i[a];if(this.GetCanBuy(l))r[r.length]=i[a]}}else{r=i}if(!!this.selectedValues[s]&&BX.util.in_array(this.selectedValues[s],r)){u[s]=this.selectedValues[s]}else{if(this.showAbsent)u[s]=r.length>0?r[0]:h[0];else u[s]=r[0]}this.UpdateRow(o,u[s],i,r)}this.selectedValues=u;this.ChangeInfo()}return true};t.JCCatalogTopSection.prototype.RowLeft=function(){var t=0,e="",s=-1,i=BX.proxy_context;if(!!i&&i.hasAttribute("data-treevalue")){e=i.getAttribute("data-treevalue");for(t=0;t<this.treeProps.length;t++){if(this.treeProps[t].ID===e){s=t;break}}if(-1<s&&this.treeRowShowSize<this.showCount[s]){if(0>this.showStart[s]){this.showStart[s]++;BX.adjust(this.obTreeRows[s].LIST,{style:{marginLeft:this.showStart[s]*20+"%"}});BX.adjust(this.obTreeRows[s].RIGHT,{style:this.treeEnableArrow})}if(0<=this.showStart[s]){BX.adjust(this.obTreeRows[s].LEFT,{style:this.treeDisableArrow})}}}};t.JCCatalogTopSection.prototype.RowRight=function(){var t=0,e="",s=-1,i=BX.proxy_context;if(!!i&&i.hasAttribute("data-treevalue")){e=i.getAttribute("data-treevalue");for(t=0;t<this.treeProps.length;t++){if(this.treeProps[t].ID===e){s=t;break}}if(-1<s&&this.treeRowShowSize<this.showCount[s]){if(this.treeRowShowSize-this.showStart[s]<this.showCount[s]){this.showStart[s]--;BX.adjust(this.obTreeRows[s].LIST,{style:{marginLeft:this.showStart[s]*20+"%"}});BX.adjust(this.obTreeRows[s].LEFT,{style:this.treeEnableArrow})}if(this.treeRowShowSize-this.showStart[s]>=this.showCount[s]){BX.adjust(this.obTreeRows[s].RIGHT,{style:this.treeDisableArrow})}}}};t.JCCatalogTopSection.prototype.UpdateRow=function(t,e,s,i){var o=0,a=0,r="",h=0,n="",u={},l=false,c=false,p=false,f=0,P=this.treeEnableArrow,T=this.treeEnableArrow,b=0,d=null;if(-1<t&&t<this.obTreeRows.length){d=BX.findChildren(this.obTreeRows[t].LIST,{tagName:"li"},false);if(!!d&&0<d.length){l="PICT"===this.treeProps[t].SHOW_MODE;h=s.length;c=this.treeRowShowSize<h;n=c?100/h+"%":"20%";u={props:{className:""},style:{width:n}};if(l){u.style.paddingTop=n}for(o=0;o<d.length;o++){r=d[o].getAttribute("data-onevalue");p=r===e;if(BX.util.in_array(r,i)){u.props.className=p?"bx_active":""}else{u.props.className=p?"bx_active bx_missing":"bx_missing"}u.style.display="none";if(BX.util.in_array(r,s)){u.style.display="";if(p){f=a}a++}BX.adjust(d[o],u)}u={style:{width:(c?20*h:100)+"%",marginLeft:"0%"}};if(l){BX.adjust(this.obTreeRows[t].CONT,{props:{className:c?"bx_item_detail_scu full":"bx_item_detail_scu"}})}else{BX.adjust(this.obTreeRows[t].CONT,{props:{className:c?"bx_item_detail_size full":"bx_item_detail_size"}})}if(c){if(f+1===h){T=this.treeDisableArrow}if(this.treeRowShowSize<=f){b=this.treeRowShowSize-f-1;u.style.marginLeft=b*20+"%"}if(0===b){P=this.treeDisableArrow}BX.adjust(this.obTreeRows[t].LEFT,{style:P});BX.adjust(this.obTreeRows[t].RIGHT,{style:T})}else{BX.adjust(this.obTreeRows[t].LEFT,{style:{display:"none"}});BX.adjust(this.obTreeRows[t].RIGHT,{style:{display:"none"}})}BX.adjust(this.obTreeRows[t].LIST,u);this.showCount[t]=h;this.showStart[t]=b}}};t.JCCatalogTopSection.prototype.GetRowValues=function(t,e){var s=0,i,o=[],a=false,r=true;if(0===t.length){for(s=0;s<this.offers.length;s++){if(!BX.util.in_array(this.offers[s].TREE[e],o)){o[o.length]=this.offers[s].TREE[e]}}a=true}else{for(s=0;s<this.offers.length;s++){r=true;for(i in t){if(t[i]!==this.offers[s].TREE[i]){r=false;break}}if(r){if(!BX.util.in_array(this.offers[s].TREE[e],o)){o[o.length]=this.offers[s].TREE[e]}a=true}}}return a?o:false};t.JCCatalogTopSection.prototype.GetCanBuy=function(t){var e=0,s,i=false,o=true;for(e=0;e<this.offers.length;e++){o=true;for(s in t){if(t[s]!==this.offers[e].TREE[s]){o=false;break}}if(o){if(this.offers[e].CAN_BUY){i=true;break}}}return i};t.JCCatalogTopSection.prototype.SetCurrent=function(){var t=0,e=0,s=[],i="",o=false,a={},r=[],h=this.offers[this.offerNum].TREE;for(t=0;t<this.treeProps.length;t++){i="PROP_"+this.treeProps[t].ID;o=this.GetRowValues(a,i);if(!o){break}if(BX.util.in_array(h[i],o)){a[i]=h[i]}else{a[i]=o[0];this.offerNum=0}if(this.showAbsent){s=[];r=[];r=BX.clone(a,true);for(e=0;e<o.length;e++){r[i]=o[e];if(this.GetCanBuy(r)){s[s.length]=o[e]}}}else{s=o}this.UpdateRow(t,a[i],o,s)}this.selectedValues=a;this.ChangeInfo()};t.JCCatalogTopSection.prototype.ChangeInfo=function(){var t=0,e,s=-1,i=true;for(t=0;t<this.offers.length;t++){i=true;for(e in this.selectedValues){if(this.selectedValues[e]!==this.offers[t].TREE[e]){i=false;break}}if(i){s=t;break}}if(-1<s){if(!!this.obPict){if(!!this.offers[s].PREVIEW_PICTURE){BX.adjust(this.obPict,{style:{backgroundImage:"url("+this.offers[s].PREVIEW_PICTURE.SRC+")"}})}else{BX.adjust(this.obPict,{style:{backgroundImage:"url("+this.defaultPict.pict.SRC+")"}})}}if(this.secondPict&&!!this.obSecondPict){if(!!this.offers[s].PREVIEW_PICTURE_SECOND){BX.adjust(this.obSecondPict,{style:{backgroundImage:"url("+this.offers[s].PREVIEW_PICTURE_SECOND.SRC+")"}})}else if(!!this.offers[s].PREVIEW_PICTURE.SRC){BX.adjust(this.obSecondPict,{style:{backgroundImage:"url("+this.offers[s].PREVIEW_PICTURE.SRC+")"}})}else if(!!this.defaultPict.secondPict){BX.adjust(this.obSecondPict,{style:{backgroundImage:"url("+this.defaultPict.secondPict.SRC+")"}})}else{BX.adjust(this.obSecondPict,{style:{backgroundImage:"url("+this.defaultPict.pict.SRC+")"}})}}if(this.showSkuProps&&!!this.obSkuProps){if(0===this.offers[s].DISPLAY_PROPERTIES.length){BX.adjust(this.obSkuProps,{style:{display:"none"},html:""})}else{BX.adjust(this.obSkuProps,{style:{display:""},html:this.offers[s].DISPLAY_PROPERTIES})}}this.setPrice(this.offers[s].PRICE);this.offerNum=s;this.QuantitySet(this.offerNum)}};t.JCCatalogTopSection.prototype.setPrice=function(t){var e,s;if(!!this.obPrice){e=BX.Currency.currencyFormat(t.DISCOUNT_VALUE,t.CURRENCY,true);if(this.showOldPrice&&t.DISCOUNT_VALUE!==t.VALUE){e+=" <span>"+BX.Currency.currencyFormat(t.VALUE,t.CURRENCY,true)+"</span>"}BX.adjust(this.obPrice,{html:e});if(this.showPercent){if(t.DISCOUNT_VALUE!==t.VALUE){s={style:{display:""},html:t.DISCOUNT_DIFF_PERCENT}}else{s={style:{display:"none"},html:""}}if(!!this.obDscPerc){BX.adjust(this.obDscPerc,s)}if(!!this.obSecondDscPerc){BX.adjust(this.obSecondDscPerc,s)}}}};t.JCCatalogTopSection.prototype.Compare=function(){var t,e;if(!!this.compareData.compareUrl){switch(this.productType){case 0:case 1:case 2:e=this.compareData.compareUrl.replace("#ID#",this.product.id.toString());break;case 3:e=this.compareData.compareUrl.replace("#ID#",this.offers[this.offerNum].ID);break}t={ajax_action:"Y"};BX.ajax.loadJSON(e,t,BX.proxy(this.CompareResult,this))}};t.JCCatalogTopSection.prototype.CompareResult=function(t){var s,i;if(!!this.obPopupWin)this.obPopupWin.close();if(!BX.type.isPlainObject(t))return;this.InitPopupWindow();if(t.STATUS==="OK"){BX.onCustomEvent("OnCompareChange");s='<div style="width: 100%; margin: 0; text-align: center;"><p>'+BX.message("COMPARE_MESSAGE_OK")+"</p></div>";if(this.showClosePopup){i=[new e({ownerClass:this.obProduct.parentNode.parentNode.className,text:BX.message("BTN_MESSAGE_COMPARE_REDIRECT"),events:{click:BX.delegate(this.CompareRedirect,this)},style:{marginRight:"10px"}}),new e({ownerClass:this.obProduct.parentNode.parentNode.className,text:BX.message("BTN_MESSAGE_CLOSE_POPUP"),events:{click:BX.delegate(this.obPopupWin.close,this.obPopupWin)}})]}else{i=[new e({ownerClass:this.obProduct.parentNode.parentNode.className,text:BX.message("BTN_MESSAGE_COMPARE_REDIRECT"),events:{click:BX.delegate(this.CompareRedirect,this)}})]}}else{s='<div style="width: 100%; margin: 0; text-align: center;"><p>'+(!!t.MESSAGE?t.MESSAGE:BX.message("COMPARE_UNKNOWN_ERROR"))+"</p></div>";i=[new e({ownerClass:this.obProduct.parentNode.parentNode.className,text:BX.message("BTN_MESSAGE_CLOSE"),events:{click:BX.delegate(this.obPopupWin.close,this.obPopupWin)}})]}this.obPopupWin.setTitleBar(BX.message("COMPARE_TITLE"));this.obPopupWin.setContent(s);this.obPopupWin.setButtons(i);this.obPopupWin.show()};t.JCCatalogTopSection.prototype.CompareRedirect=function(){if(!!this.compareData.comparePath){location.href=this.compareData.comparePath}else{this.obPopupWin.close()}};t.JCCatalogTopSection.prototype.InitBasketUrl=function(){this.basketUrl=this.basketMode==="ADD"?this.basketData.add_url:this.basketData.buy_url;switch(this.productType){case 1:case 2:this.basketUrl=this.basketUrl.replace("#ID#",this.product.id.toString());break;case 3:this.basketUrl=this.basketUrl.replace("#ID#",this.offers[this.offerNum].ID);break}this.basketParams={ajax_basket:"Y"};if(this.showQuantity){this.basketParams[this.basketData.quantity]=this.obQuantity.value}if(!!this.basketData.sku_props){this.basketParams[this.basketData.sku_props_var]=this.basketData.sku_props}};t.JCCatalogTopSection.prototype.FillBasketProps=function(){if(!this.visual.BASKET_PROP_DIV){return}var t=0,e=null,s=false,i=null;if(this.basketData.useProps&&!this.basketData.emptyProps){if(!!this.obPopupWin&&!!this.obPopupWin.contentContainer){i=this.obPopupWin.contentContainer}}else{i=BX(this.visual.BASKET_PROP_DIV)}if(!!i){e=i.getElementsByTagName("select");if(!!e&&!!e.length){for(t=0;t<e.length;t++){if(!e[t].disabled){switch(e[t].type.toLowerCase()){case"select-one":this.basketParams[e[t].name]=e[t].value;s=true;break;default:break}}}}e=i.getElementsByTagName("input");if(!!e&&!!e.length){for(t=0;t<e.length;t++){if(!e[t].disabled){switch(e[t].type.toLowerCase()){case"hidden":this.basketParams[e[t].name]=e[t].value;s=true;break;case"radio":if(e[t].checked){this.basketParams[e[t].name]=e[t].value;s=true}break;default:break}}}}}if(!s){this.basketParams[this.basketData.props]=[];this.basketParams[this.basketData.props][0]=0}};t.JCCatalogTopSection.prototype.Add2Basket=function(){this.basketMode="ADD";this.Basket()};t.JCCatalogTopSection.prototype.BuyBasket=function(){this.basketMode="BUY";this.Basket()};t.JCCatalogTopSection.prototype.SendToBasket=function(){if(!this.canBuy){return}this.InitBasketUrl();this.FillBasketProps();BX.ajax.loadJSON(this.basketUrl,this.basketParams,BX.delegate(this.BasketResult,this))};t.JCCatalogTopSection.prototype.Basket=function(){var t="";if(!this.canBuy){return}switch(this.productType){case 1:case 2:if(this.basketData.useProps&&!this.basketData.emptyProps){this.InitPopupWindow();this.obPopupWin.setTitleBar(BX.message("TITLE_BASKET_PROPS"));if(BX(this.visual.BASKET_PROP_DIV)){t=BX(this.visual.BASKET_PROP_DIV).innerHTML}this.obPopupWin.setContent(t);this.obPopupWin.setButtons([new e({ownerClass:this.obProduct.parentNode.parentNode.className,text:BX.message("BTN_MESSAGE_SEND_PROPS"),events:{click:BX.delegate(this.SendToBasket,this)}})]);this.obPopupWin.show()}else{this.SendToBasket()}break;case 3:this.SendToBasket();break}};t.JCCatalogTopSection.prototype.BasketResult=function(t){var s="",i="",o,a=[];if(!!this.obPopupWin)this.obPopupWin.close();if(!BX.type.isPlainObject(t))return;o=t.STATUS==="OK";if(o&&this.basketAction==="BUY"){this.BasketRedirect()}else{this.InitPopupWindow();if(o){BX.onCustomEvent("OnBasketChange");switch(this.productType){case 1:case 2:i=this.product.pict.SRC;break;case 3:i=!!this.offers[this.offerNum].PREVIEW_PICTURE?this.offers[this.offerNum].PREVIEW_PICTURE.SRC:this.defaultPict.pict.SRC;break}s='<div style="width: 100%; margin: 0; text-align: center;"><img src="'+i+'" height="130" style="max-height:130px"><p>'+this.product.name+"</p></div>";if(this.showClosePopup){a=[new e({ownerClass:this.obProduct.parentNode.parentNode.className,text:BX.message("BTN_MESSAGE_BASKET_REDIRECT"),events:{click:BX.delegate(this.BasketRedirect,this)},style:{marginRight:"10px"}}),new e({ownerClass:this.obProduct.parentNode.parentNode.className,text:BX.message("BTN_MESSAGE_CLOSE_POPUP"),events:{click:BX.delegate(this.obPopupWin.close,this.obPopupWin)}})]}else{a=[new e({ownerClass:this.obProduct.parentNode.parentNode.className,text:BX.message("BTN_MESSAGE_BASKET_REDIRECT"),events:{click:BX.delegate(this.BasketRedirect,this)}})]}}else{s='<div style="width: 100%; margin: 0; text-align: center;"><p>'+(!!t.MESSAGE?t.MESSAGE:BX.message("BASKET_UNKNOWN_ERROR"))+"</p></div>";a=[new e({ownerClass:this.obProduct.parentNode.parentNode.className,text:BX.message("BTN_MESSAGE_CLOSE"),events:{click:BX.delegate(this.obPopupWin.close,this.obPopupWin)}})]}this.obPopupWin.setTitleBar(o?BX.message("TITLE_SUCCESSFUL"):BX.message("TITLE_ERROR"));this.obPopupWin.setContent(s);this.obPopupWin.setButtons(a);this.obPopupWin.show()}};t.JCCatalogTopSection.prototype.BasketRedirect=function(){location.href=!!this.basketData.basketUrl?this.basketData.basketUrl:BX.message("BASKET_URL")};t.JCCatalogTopSection.prototype.InitPopupWindow=function(){if(!!this.obPopupWin)return;this.obPopupWin=BX.PopupWindowManager.create("CatalogSectionBasket_"+this.visual.ID,null,{autoHide:false,offsetLeft:0,offsetTop:0,overlay:true,closeByEsc:true,titleBar:true,closeIcon:true,contentColor:"white"})}})(window);
/* End */
;; /* /bitrix/components/bitrix/catalog/templates/.default/bitrix/catalog.compare.list/.default/script.js?14750547573120*/
; /* /bitrix/components/bitrix/catalog/templates/.default/bitrix/catalog.top/.default/section/script.min.js?147505475726802*/

//# sourceMappingURL=page_56a2eecada117536cc8c8cfcf2e8cc35.map.js