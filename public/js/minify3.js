/**
 * @author Creiden
 */
( function( $ ) {

	var rules = [
		{
			selector: '.headerStyle4 .navigationButton span,.headerStyle3 .navigationButton span, .headerStyle9 .navigationButton span, .woocommerce .widget_price_filter .price_slider_amount .button, .woocommerce-page .widget_price_filter .price_slider_amount .button, .wpcf7-submit:hover, .headerStyle1 .navigationButton, [class*="btnStyle"].red .btnAfter, [class*="btnStyle"].red .btnBefore, [class*="btnStyle"] .btnAfter, [class*="btnStyle"] .btnBefore,.widget_wysija_cont .wysija-submit, .form-submit #submit, .comment-reply-link, #cancel-comment-reply-link, .edit-link a, .widget_display_search #bbp_search_submit, .bbp_widget_login .bbp-submit-wrapper button, #bbpress-forums .bbp-search-form #bbp_search_submit, .blockquote, .contentpostSC, .featuresHome.gridStyle .featureHomeImage, .headerStyle2 .navbar .nav > li > a:hover, .headerStyle2 .navbar .nav > li.open > a, .tagcloud a:hover , .loader .topLoader , .loader .bottomLoader,.headerStyle6 .navbar .nav > li > a:hover, .headerStyle6 .navbar .nav > li.open > a, .headerStyle5 .navbar .nav > li > a:hover, .headerStyle5 .navbar .nav > li.open > a',
			rule: 'border-color: {{primary}};'
		},
		{
			selector: '.mainHeader .navbar .nav > li > a:hover, .headerStyle4 .navbar .nav > li > a:hover, .headerStyle4 .navbar .nav > li.open > a, .headerStyle9 .navbar .nav > li > a:hover, .headerStyle9 .navbar .nav > li.open > a, .headerStyle1 .navbar .nav > li > a:hover, .headerStyle1 .navbar .nav > li.open > a, .headerStyle4 .navbar .nav > li > a:hover, .headerStyle4 .navbar .nav > li.open > a, .headerStyle5 .navbar .nav > li > a:hover, .headerStyle5 .navbar .nav > li.open > a',
			rule: 'border-bottom-color: {{primary}};'
		},
		{
			selector: '.aq_block_tabs ul.aq-nav li.ui-state-active:after, #singleCommentsTabbed li.active, .filterMenu li:first-child, .postBlog4 .postDate:after, .postBlog4 .postDate .dottedTriangle, #place_order, .woocommerce .widget_price_filter .price_slider_amount .button, .woocommerce-page .widget_price_filter .price_slider_amount .button, #circleFlipFooter, #megaMenu.megaMenuHorizontal ul.megaMenu li.menu-item.ss-nav-menu-mega ul.sub-menu-1, #megaMenu.megaMenuHorizontal ul.megaMenu li.menu-item.ss-nav-menu-reg ul.sub-menu',
			rule: 'border-top-color: {{primary}};'
		},
		{
			selector: '.aq_block_tabs ul.aq-nav li.ui-state-active',
			rule: 'border-top: 3px solid {{primary}};'
		},
		{
			selector: '.color, .navbar .searchFormIcon.searchActive > span, .top_header_style4 .dropdown-menu > li > a:hover, .top_header_style4 .dropdown-menu > li:hover, .headerStyle1 .dropdown-menu > li > a:hover, .headerStyle4 .dropdown-menu > li > a:hover, .headerStyle9 .dropdown-menu > li > a:hover, .headerStyle1 .dropdown-menu > li:hover, .headerStyle4 .dropdown-menu > li:hover, .headerStyle9 .dropdown-menu > li:hover,.headerStyle1 .navigationButton  span, .formError .formErrorContent, #respond .must-log-in a:hover, .comment-date, .edit-link a, .testimonials .TName, #wp-calendar tbody td:hover, #wp-calendar tbody td#today , .footerList .informationList span, #bbpress-forums .bbp-forum-freshness .forumFreshness a, #bbpress-forums .bbp-topic-freshness .forumFreshness a,.bbpSingleReply .bbp-meta .bbp-admin-links, .bbpSingleReply .bbp-meta .bbp-reply-permalink, .bbpSingleReply .bbp-reply-author .bbp-author-name, .LandContent a, .squarePostsWrapper .squarePostTitle:hover, .aq_block_tabs ul.aq-nav li.ui-state-active a, .aq_block_toggle h2.tab-head.colored, .aq_block_accordion h2.tab-head.colored, .teamShortcut, .teamEmail, .testimonialsSection .TName, .TestmonialStyle2 .testimonialName p, .postBlogStyleOne li, .likenum p, .postCreagory a p, .singlePortCat a, .singlePortTag a, .text_under_post .readmore, .text_under_post .readmore span, .shopDropDownOptions li:hover p, .woocommerce-message a, .cart-dropdown .cart-dropdown-elements .miniDetails p span, .customerLogin label span.required, .checkoutForm .form-row label .required, .order_details.shop_table td a, .order_details.shop_table .product-quantity, .container.removeMargin p, .contactDetailsSection ul li p.contactMailText, .headerStyle2 .dropdown-menu > li > a:hover, .headerStyle4 .dropdown-menu > li > a:hover, .headerStyle9 .dropdown-menu > li > a:hover, .mainHeader .navbar .nav > li > a:after, .cart-dropdown .cart-dropdown-header span:hover, .tagcloud a:hover , .bbpSingleReply .bbp-reply-content a, .smallHeader .navbar .nav > li > a:after, .top_header_style4 .btn-navbar span, .navbar .searchFormIcon > span:hover, .twitterBlock li span a, .testimonialsSection .carousel-linked-nav li.active, .widget_wp_recent_post_text h4:hover, .widget_wp_recent_post_text p a:hover, .widget_wp_recent_post_text span',
			rule: 'color: {{primary}};'
		},
		{
			selector: '.mainHeader .navbar .nav > li > a:hover, .mainHeader .navbar .nav > li.open > a,.widget ul li a:hover, .hoverlink, .aq_block_toggle h2.tab-head.colored, .aq_block_accordion h2.tab-head.colored, .headerStyle4 .navigationButton span,.headerStyle3 .navigationButton span, .headerStyle9 .navigationButton span, .afterFooter ul li a:hover, .headerStyle1 .navbar .nav > li > a:hover, .headerStyle1 .navbar .nav > li.open > a, .themeLink a, .widget ul li a:hover, .hoverlink, .footerList .widget_pages ul li.current_page_item > a:hover, .navbar .nav>.active>a,.navbar .nav>.active>a:hover,.navbar .nav>.active>a:focus, .navbar .nav>.active>a .active>a,.navbar .nav > li.open .active>a,.navbar .nav>.active>a .active,.navbar .nav > li.open .active, .featuresHome .image_title_wrap:hover .featureHomeImage span, .featuresHome .image_title_wrap:hover .featureHomeTitle, .featuresHome .image_title_wrap:hover .featureHomeImage span, .featuresHome .image_title_wrap:hover .featureHomeTitle, .featuresHome.gridStyle .image_title_wrap:hover .featureHomeImage span, .mainHeader .dropdown-menu > li:hover > a, .mainHeader .dropdown-menu > li:hover > a, .navbar .nav > li > a:hover, .navbar .nav > li.open > a, .top_header_style4 .nav > li > a:hover, .top_header_style4 .navbar .nav > li.open > a, .top_header_style4 .navbar .nav>.active>a, .top_header_style4 .navbar .nav>.active>a:hover, .header6 .navbar .searchFormIcon.searchActive > span, .megaMenu .current_page_item span, .megaMenu .sub-menu .menu-item li:hover span',
			rule: 'color: {{primary}} !important;'
		},
		{
			selector: '.top_header_style4,.top_header_style3, .offerCircle:hover, .wpcf7-submit, .highLightLeft:after, .highLightRight:after, .progress .bar, .top_header_style4, .headerStyle1 .navigationButton .icon-bar, [class*="btnStyle"].red, .pagination ul > li > span, .pagination ul > li > a:hover, .pagination ul > .active > a, .pagination ul > .active > span, .pagination ul > li:hover > a.prev, .pagination ul > li:hover > a.next, .widget_wysija_cont .wysija-submit, .form-submit #submit, .comment-reply-link, #cancel-comment-reply-link, .edit-link a, #titleColored, .circleAnimationSingle .circleAnimationDetails, .animation3:hover .back, .arrows_gallery .galleryIconArrow:hover, .squarePostCont, .iconAnnouncement, .testimonialsSection .carousel-linked-nav li.active a, .aq_block_toggles_wrapper .icon-minus, .aq_block_accordion_wrapper .icon-minus, .postBlog2 .postDate .dayMonth, .postBlog4 .postDate, .portfolioHoverCont, .itemMore, .addToCart.cf-one-button, .customerLogin form input.button, #place_order, #payment .placeOrder, .woocommerce .widget_price_filter .price_slider_amount .button, .woocommerce-page .widget_price_filter .price_slider_amount .button, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-range, #wp-calendar thead, .widget_product_search input[type="submit"], .widget_search .input-append button span, .searchform .input-append button, .widget_display_search #bbp_search_submit, .bbp_widget_login .bbp-submit-wrapper button, #bbpress-forums .bbp-search-form #bbp_search_submit, #bbpress-forums li.bbp-header, #bbp-user-navigation li.current:after, .bbp-topic-action #favorite-toggle a:hover, .bbp-topic-action #subscription-toggle a:hover, #bbpress-forums #bbp-your-profile fieldset.submit button, .headerStyle1 .navigationButton .icon-bar, .headerStyle2 .navigationButton .icon-bar, .top_header_style3, .headerStyle3 .navigationButton .icon-bar, .headerStyle4 .navigationButton .icon-bar, .headerStyle9 .navigationButton .icon-bar, .headerStyle5 .navigationButton .icon-bar, .headerStyle6 .navigationButton .icon-bar, .headerStyle7 .navigationButton .icon-bar, .featuresHome.gridStyle .featureHomeImage:after,.widgetDot, .headerDot, .postBlog1 .postDate .dayMonth, .faqItem .aq_block_toggle h6 div span, .itemSale, .pricingTable.active .bundleHeader, .pricingTable:hover .bundleHeader, .pricingTable.active .orderBundle, .pricingTable:hover .orderBundle, .top_header_style4, .top_header_style3, .offerCircle:hover, .wpcf7-submit, #megaMenu .sub-menu li li a:before',
			rule: 'background-color: {{primary}};'
		},
		{
			selector: '.cart-dropdown.openMini .cart-dropdown-header, .headerStyle1 .btn-navbar, .headerStyle2 .btn-navbar, .headerStyle4 .btn-navbar, .headerStyle9 .btn-navbar, .headerStyle5 .btn-navbar, .headerStyle6 .btn-navbar, .headerStyle2 .btn-navbar, .headerStyle2 .btn-navbar',
			rule: 'background-color: {{primary}} !important;'
		},
		// Secondary Color
		{
			selector: '.aq_block_toggle h2.tab-head.colored, .aq_block_accordion h2.tab-head.colored, .drop, .faqNavList:hover, .aq_block_tabs ul.aq-nav li.ui-state-active a, #circleflip-filters li:hover, .portOneCategories a, .singlePortTag a',
			rule: 'color: {{secondry}};'
		},
		{
			selector: '.dropcap, .postBlog1 .postDate .year, .blogStyle2 .like, .postBlog2 .postDate .year, .checkoutCoupon form input.button, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle, .widget_pages ul li.current_page_item > a, .widget-area .menu li.menu-item.active a, .backcolor, [class*="btnStyle"].heavyRed, .flatBtn, .pricingTable.active .price p, .pricingTable:hover .price p, #wp-calendar caption',
			rule: 'background-color: {{secondry}};'
		},
		{
			selector: '.woocommerce-tabs .tabs li.active a',
			rule: 'border-top: 2px solid {{secondry}};'
		},
		{
			selector: '.widget_nav_menu .menu-item a:hover',
			rule: 'border-left: 3px solid {{secondry}};'
		},
		{
			selector: '[class*="btnStyle"].heavyRed .btnAfter, [class*="btnStyle"].heavyRed .btnBefore',
			rule: 'border-color: {{secondry}};'
		},
	];
	
		
	var colors = {
		blue     : [ /* Dark color */ "#2977ab", /* Light color */ "#3498db" ],
		brown    : [ /* Dark color */ "#886137", /* Light color */ "#CAA176" ],
		green    : [ /* Dark color */ "#679416", /* Light color */ "#9BCC32" ],
		grey     : [ /* Dark color */ "#616161", /* Light color */ "#9E9E9E" ],
		lightred : [ /* Dark color */ "#AC3232", /* Light color */ "#EB7070" ],
		orange   : [ /* Dark color */ "#cc5711", /* Light color */ "#fa6b15" ],
		pink     : [ /* Dark color */ "#B80168", /* Light color */ "#FF32A5" ],
		purple   : [ /* Dark color */ "#76126f", /* Light color */ "#c295bf" ],
		red      : [ /* Dark color */ "#980910", /* Light color */ "#E32831" ],
		yellow   : [ /* Dark color */ "#d9aa09", /* Light color */ "#fec70b" ]
	};
	
	$( document ).ready( function() {
		$( '#showHide' ).on( 'click', function() {
			$( '#themeConf' ).toggleClass( 'openConf' );
		} );
		$( "#themeConfdiv5" ).on( 'click', 'img', function() {
			var theme = colors[$( this ).attr( 'alt' ) ] || colors.red;
			changeColors( theme[1], theme[0] );
		} );

	} );

	function changeColors( primary, secondary ) {
		$('#circleflip-configurator').length && $('#circleflip-configurator').remove();
		var sheet = ( function() {
			// Create the <style> tag
			var style = document.createElement( "style" );
			
			style.id = 'circleflip-configurator';
			
			// Add a media (and/or media query) here if you'd like!
			 style.setAttribute("media", "screen")
			// style.setAttribute("media", "@media only screen and (max-width : 1024px)")

			// WebKit hack :(
			style.appendChild( document.createTextNode( "" ) );

			// Add the <style> element to the page
			document.body.appendChild( style );

			return style.sheet;
		} )();
		var pRegex = /\{\{primary\}\}/, sRegex = /\{\{secondry\}\}/;
		$.each( rules, function( i, cssObject ) {
			var rule = cssObject.rule;
			rule = rule.replace( pRegex, primary );
			rule = rule.replace( sRegex, secondary );
			addCSSRule( sheet, cssObject.selector, rule, 0 );
		} );
		
	}

	function addCSSRule( sheet, selector, rules, index ) {
		if ( sheet.insertRule ) {
			sheet.insertRule( selector + "{" + rules + "}", index );
		}
		else {
			sheet.addRule( selector, rules, index );
		}
	}
	$(document).ready(function() {
		$("#layoutStyle").change(function() {
			if($(this).val() == 'boxed') {
				if($('.wasBoxedCF').length > 0) {
					$('.wasBoxedCF').addClass('boxedLayout');
				} else {
					$('body > *').wrapAll('<div class="boxedLayout wasBoxedCF"></div>');	
				}
					
				$('body').css('background-color','#ECECEC');
			} else {
				$('body > .boxedLayout').removeClass('boxedLayout');
				$('body').css('background-color','');
			}
		});
	});
	
} )( jQuery );
;/*!
 * jQuery Form Plugin
 * version: 3.51.0-2014.06.20
 * Requires jQuery v1.5 or later
 * Copyright (c) 2014 M. Alsup
 * Examples and documentation at: http://malsup.com/jquery/form/
 * Project repository: https://github.com/malsup/form
 * Dual licensed under the MIT and GPL licenses.
 * https://github.com/malsup/form#copyright-and-license
 */
!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery"],e):e("undefined"!=typeof jQuery?jQuery:window.Zepto)}(function(e){"use strict";function t(t){var r=t.data;t.isDefaultPrevented()||(t.preventDefault(),e(t.target).ajaxSubmit(r))}function r(t){var r=t.target,a=e(r);if(!a.is("[type=submit],[type=image]")){var n=a.closest("[type=submit]");if(0===n.length)return;r=n[0]}var i=this;if(i.clk=r,"image"==r.type)if(void 0!==t.offsetX)i.clk_x=t.offsetX,i.clk_y=t.offsetY;else if("function"==typeof e.fn.offset){var o=a.offset();i.clk_x=t.pageX-o.left,i.clk_y=t.pageY-o.top}else i.clk_x=t.pageX-r.offsetLeft,i.clk_y=t.pageY-r.offsetTop;setTimeout(function(){i.clk=i.clk_x=i.clk_y=null},100)}function a(){if(e.fn.ajaxSubmit.debug){var t="[jquery.form] "+Array.prototype.join.call(arguments,"");window.console&&window.console.log?window.console.log(t):window.opera&&window.opera.postError&&window.opera.postError(t)}}var n={};n.fileapi=void 0!==e("<input type='file'/>").get(0).files,n.formdata=void 0!==window.FormData;var i=!!e.fn.prop;e.fn.attr2=function(){if(!i)return this.attr.apply(this,arguments);var e=this.prop.apply(this,arguments);return e&&e.jquery||"string"==typeof e?e:this.attr.apply(this,arguments)},e.fn.ajaxSubmit=function(t){function r(r){var a,n,i=e.param(r,t.traditional).split("&"),o=i.length,s=[];for(a=0;o>a;a++)i[a]=i[a].replace(/\+/g," "),n=i[a].split("="),s.push([decodeURIComponent(n[0]),decodeURIComponent(n[1])]);return s}function o(a){for(var n=new FormData,i=0;i<a.length;i++)n.append(a[i].name,a[i].value);if(t.extraData){var o=r(t.extraData);for(i=0;i<o.length;i++)o[i]&&n.append(o[i][0],o[i][1])}t.data=null;var s=e.extend(!0,{},e.ajaxSettings,t,{contentType:!1,processData:!1,cache:!1,type:u||"POST"});t.uploadProgress&&(s.xhr=function(){var r=e.ajaxSettings.xhr();return r.upload&&r.upload.addEventListener("progress",function(e){var r=0,a=e.loaded||e.position,n=e.total;e.lengthComputable&&(r=Math.ceil(a/n*100)),t.uploadProgress(e,a,n,r)},!1),r}),s.data=null;var c=s.beforeSend;return s.beforeSend=function(e,r){r.data=t.formData?t.formData:n,c&&c.call(this,e,r)},e.ajax(s)}function s(r){function n(e){var t=null;try{e.contentWindow&&(t=e.contentWindow.document)}catch(r){a("cannot get iframe.contentWindow document: "+r)}if(t)return t;try{t=e.contentDocument?e.contentDocument:e.document}catch(r){a("cannot get iframe.contentDocument: "+r),t=e.document}return t}function o(){function t(){try{var e=n(g).readyState;a("state = "+e),e&&"uninitialized"==e.toLowerCase()&&setTimeout(t,50)}catch(r){a("Server abort: ",r," (",r.name,")"),s(k),j&&clearTimeout(j),j=void 0}}var r=f.attr2("target"),i=f.attr2("action"),o="multipart/form-data",c=f.attr("enctype")||f.attr("encoding")||o;w.setAttribute("target",p),(!u||/post/i.test(u))&&w.setAttribute("method","POST"),i!=m.url&&w.setAttribute("action",m.url),m.skipEncodingOverride||u&&!/post/i.test(u)||f.attr({encoding:"multipart/form-data",enctype:"multipart/form-data"}),m.timeout&&(j=setTimeout(function(){T=!0,s(D)},m.timeout));var l=[];try{if(m.extraData)for(var d in m.extraData)m.extraData.hasOwnProperty(d)&&l.push(e.isPlainObject(m.extraData[d])&&m.extraData[d].hasOwnProperty("name")&&m.extraData[d].hasOwnProperty("value")?e('<input type="hidden" name="'+m.extraData[d].name+'">').val(m.extraData[d].value).appendTo(w)[0]:e('<input type="hidden" name="'+d+'">').val(m.extraData[d]).appendTo(w)[0]);m.iframeTarget||v.appendTo("body"),g.attachEvent?g.attachEvent("onload",s):g.addEventListener("load",s,!1),setTimeout(t,15);try{w.submit()}catch(h){var x=document.createElement("form").submit;x.apply(w)}}finally{w.setAttribute("action",i),w.setAttribute("enctype",c),r?w.setAttribute("target",r):f.removeAttr("target"),e(l).remove()}}function s(t){if(!x.aborted&&!F){if(M=n(g),M||(a("cannot access response document"),t=k),t===D&&x)return x.abort("timeout"),void S.reject(x,"timeout");if(t==k&&x)return x.abort("server abort"),void S.reject(x,"error","server abort");if(M&&M.location.href!=m.iframeSrc||T){g.detachEvent?g.detachEvent("onload",s):g.removeEventListener("load",s,!1);var r,i="success";try{if(T)throw"timeout";var o="xml"==m.dataType||M.XMLDocument||e.isXMLDoc(M);if(a("isXml="+o),!o&&window.opera&&(null===M.body||!M.body.innerHTML)&&--O)return a("requeing onLoad callback, DOM not available"),void setTimeout(s,250);var u=M.body?M.body:M.documentElement;x.responseText=u?u.innerHTML:null,x.responseXML=M.XMLDocument?M.XMLDocument:M,o&&(m.dataType="xml"),x.getResponseHeader=function(e){var t={"content-type":m.dataType};return t[e.toLowerCase()]},u&&(x.status=Number(u.getAttribute("status"))||x.status,x.statusText=u.getAttribute("statusText")||x.statusText);var c=(m.dataType||"").toLowerCase(),l=/(json|script|text)/.test(c);if(l||m.textarea){var f=M.getElementsByTagName("textarea")[0];if(f)x.responseText=f.value,x.status=Number(f.getAttribute("status"))||x.status,x.statusText=f.getAttribute("statusText")||x.statusText;else if(l){var p=M.getElementsByTagName("pre")[0],h=M.getElementsByTagName("body")[0];p?x.responseText=p.textContent?p.textContent:p.innerText:h&&(x.responseText=h.textContent?h.textContent:h.innerText)}}else"xml"==c&&!x.responseXML&&x.responseText&&(x.responseXML=X(x.responseText));try{E=_(x,c,m)}catch(y){i="parsererror",x.error=r=y||i}}catch(y){a("error caught: ",y),i="error",x.error=r=y||i}x.aborted&&(a("upload aborted"),i=null),x.status&&(i=x.status>=200&&x.status<300||304===x.status?"success":"error"),"success"===i?(m.success&&m.success.call(m.context,E,"success",x),S.resolve(x.responseText,"success",x),d&&e.event.trigger("ajaxSuccess",[x,m])):i&&(void 0===r&&(r=x.statusText),m.error&&m.error.call(m.context,x,i,r),S.reject(x,"error",r),d&&e.event.trigger("ajaxError",[x,m,r])),d&&e.event.trigger("ajaxComplete",[x,m]),d&&!--e.active&&e.event.trigger("ajaxStop"),m.complete&&m.complete.call(m.context,x,i),F=!0,m.timeout&&clearTimeout(j),setTimeout(function(){m.iframeTarget?v.attr("src",m.iframeSrc):v.remove(),x.responseXML=null},100)}}}var c,l,m,d,p,v,g,x,y,b,T,j,w=f[0],S=e.Deferred();if(S.abort=function(e){x.abort(e)},r)for(l=0;l<h.length;l++)c=e(h[l]),i?c.prop("disabled",!1):c.removeAttr("disabled");if(m=e.extend(!0,{},e.ajaxSettings,t),m.context=m.context||m,p="jqFormIO"+(new Date).getTime(),m.iframeTarget?(v=e(m.iframeTarget),b=v.attr2("name"),b?p=b:v.attr2("name",p)):(v=e('<iframe name="'+p+'" src="'+m.iframeSrc+'" />'),v.css({position:"absolute",top:"-1000px",left:"-1000px"})),g=v[0],x={aborted:0,responseText:null,responseXML:null,status:0,statusText:"n/a",getAllResponseHeaders:function(){},getResponseHeader:function(){},setRequestHeader:function(){},abort:function(t){var r="timeout"===t?"timeout":"aborted";a("aborting upload... "+r),this.aborted=1;try{g.contentWindow.document.execCommand&&g.contentWindow.document.execCommand("Stop")}catch(n){}v.attr("src",m.iframeSrc),x.error=r,m.error&&m.error.call(m.context,x,r,t),d&&e.event.trigger("ajaxError",[x,m,r]),m.complete&&m.complete.call(m.context,x,r)}},d=m.global,d&&0===e.active++&&e.event.trigger("ajaxStart"),d&&e.event.trigger("ajaxSend",[x,m]),m.beforeSend&&m.beforeSend.call(m.context,x,m)===!1)return m.global&&e.active--,S.reject(),S;if(x.aborted)return S.reject(),S;y=w.clk,y&&(b=y.name,b&&!y.disabled&&(m.extraData=m.extraData||{},m.extraData[b]=y.value,"image"==y.type&&(m.extraData[b+".x"]=w.clk_x,m.extraData[b+".y"]=w.clk_y)));var D=1,k=2,A=e("meta[name=csrf-token]").attr("content"),L=e("meta[name=csrf-param]").attr("content");L&&A&&(m.extraData=m.extraData||{},m.extraData[L]=A),m.forceSync?o():setTimeout(o,10);var E,M,F,O=50,X=e.parseXML||function(e,t){return window.ActiveXObject?(t=new ActiveXObject("Microsoft.XMLDOM"),t.async="false",t.loadXML(e)):t=(new DOMParser).parseFromString(e,"text/xml"),t&&t.documentElement&&"parsererror"!=t.documentElement.nodeName?t:null},C=e.parseJSON||function(e){return window.eval("("+e+")")},_=function(t,r,a){var n=t.getResponseHeader("content-type")||"",i="xml"===r||!r&&n.indexOf("xml")>=0,o=i?t.responseXML:t.responseText;return i&&"parsererror"===o.documentElement.nodeName&&e.error&&e.error("parsererror"),a&&a.dataFilter&&(o=a.dataFilter(o,r)),"string"==typeof o&&("json"===r||!r&&n.indexOf("json")>=0?o=C(o):("script"===r||!r&&n.indexOf("javascript")>=0)&&e.globalEval(o)),o};return S}if(!this.length)return a("ajaxSubmit: skipping submit process - no element selected"),this;var u,c,l,f=this;"function"==typeof t?t={success:t}:void 0===t&&(t={}),u=t.type||this.attr2("method"),c=t.url||this.attr2("action"),l="string"==typeof c?e.trim(c):"",l=l||window.location.href||"",l&&(l=(l.match(/^([^#]+)/)||[])[1]),t=e.extend(!0,{url:l,success:e.ajaxSettings.success,type:u||e.ajaxSettings.type,iframeSrc:/^https/i.test(window.location.href||"")?"javascript:false":"about:blank"},t);var m={};if(this.trigger("form-pre-serialize",[this,t,m]),m.veto)return a("ajaxSubmit: submit vetoed via form-pre-serialize trigger"),this;if(t.beforeSerialize&&t.beforeSerialize(this,t)===!1)return a("ajaxSubmit: submit aborted via beforeSerialize callback"),this;var d=t.traditional;void 0===d&&(d=e.ajaxSettings.traditional);var p,h=[],v=this.formToArray(t.semantic,h);if(t.data&&(t.extraData=t.data,p=e.param(t.data,d)),t.beforeSubmit&&t.beforeSubmit(v,this,t)===!1)return a("ajaxSubmit: submit aborted via beforeSubmit callback"),this;if(this.trigger("form-submit-validate",[v,this,t,m]),m.veto)return a("ajaxSubmit: submit vetoed via form-submit-validate trigger"),this;var g=e.param(v,d);p&&(g=g?g+"&"+p:p),"GET"==t.type.toUpperCase()?(t.url+=(t.url.indexOf("?")>=0?"&":"?")+g,t.data=null):t.data=g;var x=[];if(t.resetForm&&x.push(function(){f.resetForm()}),t.clearForm&&x.push(function(){f.clearForm(t.includeHidden)}),!t.dataType&&t.target){var y=t.success||function(){};x.push(function(r){var a=t.replaceTarget?"replaceWith":"html";e(t.target)[a](r).each(y,arguments)})}else t.success&&x.push(t.success);if(t.success=function(e,r,a){for(var n=t.context||this,i=0,o=x.length;o>i;i++)x[i].apply(n,[e,r,a||f,f])},t.error){var b=t.error;t.error=function(e,r,a){var n=t.context||this;b.apply(n,[e,r,a,f])}}if(t.complete){var T=t.complete;t.complete=function(e,r){var a=t.context||this;T.apply(a,[e,r,f])}}var j=e("input[type=file]:enabled",this).filter(function(){return""!==e(this).val()}),w=j.length>0,S="multipart/form-data",D=f.attr("enctype")==S||f.attr("encoding")==S,k=n.fileapi&&n.formdata;a("fileAPI :"+k);var A,L=(w||D)&&!k;t.iframe!==!1&&(t.iframe||L)?t.closeKeepAlive?e.get(t.closeKeepAlive,function(){A=s(v)}):A=s(v):A=(w||D)&&k?o(v):e.ajax(t),f.removeData("jqxhr").data("jqxhr",A);for(var E=0;E<h.length;E++)h[E]=null;return this.trigger("form-submit-notify",[this,t]),this},e.fn.ajaxForm=function(n){if(n=n||{},n.delegation=n.delegation&&e.isFunction(e.fn.on),!n.delegation&&0===this.length){var i={s:this.selector,c:this.context};return!e.isReady&&i.s?(a("DOM not ready, queuing ajaxForm"),e(function(){e(i.s,i.c).ajaxForm(n)}),this):(a("terminating; zero elements found by selector"+(e.isReady?"":" (DOM not ready)")),this)}return n.delegation?(e(document).off("submit.form-plugin",this.selector,t).off("click.form-plugin",this.selector,r).on("submit.form-plugin",this.selector,n,t).on("click.form-plugin",this.selector,n,r),this):this.ajaxFormUnbind().bind("submit.form-plugin",n,t).bind("click.form-plugin",n,r)},e.fn.ajaxFormUnbind=function(){return this.unbind("submit.form-plugin click.form-plugin")},e.fn.formToArray=function(t,r){var a=[];if(0===this.length)return a;var i,o=this[0],s=this.attr("id"),u=t?o.getElementsByTagName("*"):o.elements;if(u&&!/MSIE [678]/.test(navigator.userAgent)&&(u=e(u).get()),s&&(i=e(':input[form="'+s+'"]').get(),i.length&&(u=(u||[]).concat(i))),!u||!u.length)return a;var c,l,f,m,d,p,h;for(c=0,p=u.length;p>c;c++)if(d=u[c],f=d.name,f&&!d.disabled)if(t&&o.clk&&"image"==d.type)o.clk==d&&(a.push({name:f,value:e(d).val(),type:d.type}),a.push({name:f+".x",value:o.clk_x},{name:f+".y",value:o.clk_y}));else if(m=e.fieldValue(d,!0),m&&m.constructor==Array)for(r&&r.push(d),l=0,h=m.length;h>l;l++)a.push({name:f,value:m[l]});else if(n.fileapi&&"file"==d.type){r&&r.push(d);var v=d.files;if(v.length)for(l=0;l<v.length;l++)a.push({name:f,value:v[l],type:d.type});else a.push({name:f,value:"",type:d.type})}else null!==m&&"undefined"!=typeof m&&(r&&r.push(d),a.push({name:f,value:m,type:d.type,required:d.required}));if(!t&&o.clk){var g=e(o.clk),x=g[0];f=x.name,f&&!x.disabled&&"image"==x.type&&(a.push({name:f,value:g.val()}),a.push({name:f+".x",value:o.clk_x},{name:f+".y",value:o.clk_y}))}return a},e.fn.formSerialize=function(t){return e.param(this.formToArray(t))},e.fn.fieldSerialize=function(t){var r=[];return this.each(function(){var a=this.name;if(a){var n=e.fieldValue(this,t);if(n&&n.constructor==Array)for(var i=0,o=n.length;o>i;i++)r.push({name:a,value:n[i]});else null!==n&&"undefined"!=typeof n&&r.push({name:this.name,value:n})}}),e.param(r)},e.fn.fieldValue=function(t){for(var r=[],a=0,n=this.length;n>a;a++){var i=this[a],o=e.fieldValue(i,t);null===o||"undefined"==typeof o||o.constructor==Array&&!o.length||(o.constructor==Array?e.merge(r,o):r.push(o))}return r},e.fieldValue=function(t,r){var a=t.name,n=t.type,i=t.tagName.toLowerCase();if(void 0===r&&(r=!0),r&&(!a||t.disabled||"reset"==n||"button"==n||("checkbox"==n||"radio"==n)&&!t.checked||("submit"==n||"image"==n)&&t.form&&t.form.clk!=t||"select"==i&&-1==t.selectedIndex))return null;if("select"==i){var o=t.selectedIndex;if(0>o)return null;for(var s=[],u=t.options,c="select-one"==n,l=c?o+1:u.length,f=c?o:0;l>f;f++){var m=u[f];if(m.selected){var d=m.value;if(d||(d=m.attributes&&m.attributes.value&&!m.attributes.value.specified?m.text:m.value),c)return d;s.push(d)}}return s}return e(t).val()},e.fn.clearForm=function(t){return this.each(function(){e("input,select,textarea",this).clearFields(t)})},e.fn.clearFields=e.fn.clearInputs=function(t){var r=/^(?:color|date|datetime|email|month|number|password|range|search|tel|text|time|url|week)$/i;return this.each(function(){var a=this.type,n=this.tagName.toLowerCase();r.test(a)||"textarea"==n?this.value="":"checkbox"==a||"radio"==a?this.checked=!1:"select"==n?this.selectedIndex=-1:"file"==a?/MSIE/.test(navigator.userAgent)?e(this).replaceWith(e(this).clone(!0)):e(this).val(""):t&&(t===!0&&/hidden/.test(a)||"string"==typeof t&&e(this).is(t))&&(this.value="")})},e.fn.resetForm=function(){return this.each(function(){("function"==typeof this.reset||"object"==typeof this.reset&&!this.reset.nodeType)&&this.reset()})},e.fn.enable=function(e){return void 0===e&&(e=!0),this.each(function(){this.disabled=!e})},e.fn.selected=function(t){return void 0===t&&(t=!0),this.each(function(){var r=this.type;if("checkbox"==r||"radio"==r)this.checked=t;else if("option"==this.tagName.toLowerCase()){var a=e(this).parent("select");t&&a[0]&&"select-one"==a[0].type&&a.find("option").selected(!1),this.selected=t}})},e.fn.ajaxSubmit.debug=!1});