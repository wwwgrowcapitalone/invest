(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[56692],{56692:function(e,t,n){"use strict";var r=n(11628),o=n(92510),i=n(19879),s=n(54175),a=n(95921),c=n(43812),d=n(30567),l=n(52406),u=n(11268),$=n.n(u),p=n(96616),m=n(24754),g=n(5852),f=n(86706),h=n(5747),w=n(39582),v=n(13333),x=n(75060),_=n(23361),j=n(35397);n(38653);var N=function(e){(0,a.Z)(n,e);var t=(0,c.Z)(n);function n(){var e;return(0,o.Z)(this,n),e=t.apply(this,arguments),(0,s.Z)((0,r.Z)(e),"getTopUI",function(){var t=e.props,n=t.topComponent,r=t.isNotFound,o=t.isFailure,i=t.isLoading;return n&&!(r||o||i)?n:null}),(0,s.Z)((0,r.Z)(e),"getBottomUI",function(){var t=e.props,n=t.bottomComponent,r=t.isNotFound,o=t.isFailure,i=t.isLoading;return n&&!(r||o||i)?n:null}),(0,s.Z)((0,r.Z)(e),"getMainContentUI",function(){var t=e.props,n=t.children,r=t.isLoading,o=t.isFailure,i=t.isNotFound;return r?e.getLoadingUI():i?(0,d.jsx)(x.default,{showHeader:!1}):!r&&o?(0,d.jsx)(_.default,{showHeader:!1}):(0,d.jsx)("div",{className:"pw14MainWrapper",children:n})}),(0,s.Z)((0,r.Z)(e),"getLoadingUI",function(){var t=e.props.loadingComponent;return t||(0,d.jsx)("div",{className:"center-align width100 pw14MinHeight100",children:(0,d.jsx)(h.ZP,{defaultScreen:w.P.LOADING})})}),(0,s.Z)((0,r.Z)(e),"onLoginButtonClick",function(){(0,p.w)(j.fD.OPEN_LOGIN_POPUP)}),(0,s.Z)((0,r.Z)(e),"on2FASuccessCallback",function(){var t=e.props.on2FASuccessCallback;e.updateHeader(),t&&t()}),(0,s.Z)((0,r.Z)(e),"updateHeader",function(){(0,p.w)(j.fD.UPDATE_HEADER)}),(0,s.Z)((0,r.Z)(e),"openPinPopup",function(){(0,p.w)(j.fD.OPEN_PIN_POPUP)}),(0,s.Z)((0,r.Z)(e),"onForgotPin",function(){(0,f.Jk)(),e.props.history.push(g.Z6.LOGIN+g.Z6.TWO_FACTOR_AUTH_FORGOT)}),e}return(0,i.Z)(n,[{key:"componentDidMount",value:function(){(0,f.su)(),(0,p.v)(j.fD.TWO_FA_SUCCESS,this.on2FASuccessCallback)}},{key:"componentWillUnmount",value:function(){(0,p.x)(j.fD.TWO_FA_SUCCESS,this.on2FASuccessCallback)}},{key:"render",value:function(){var e=this.props,t=e.marginTop,n=e.showExtendedFooter,r=e.isExtendedFooterOpen,o=e.isNotFound,i=e.isFailure,s=e.className;return(0,d.jsxs)("div",{children:[this.getTopUI(),(0,d.jsx)("div",{className:"container web-align ".concat(s),children:(0,d.jsxs)("div",{className:"row pw14Container",style:{marginTop:t},children:[this.getMainContentUI(),this.getBottomUI()]})}),o||i?null:(0,d.jsx)("div",{className:"col l12",children:(0,d.jsx)(v.Z,{showExtendedFooter:n,isExtendedFooterOpen:r})}),(0,d.jsx)(m.S,{})]})}}]),n}(l.PureComponent);N.propTypes={isLoading:$().bool,isFailure:$().bool};var E=function(e){return(0,d.jsx)("div",{className:"pw14ContentWrapper",children:e.children})},b=function(e){return(0,d.jsx)("div",{className:"pw14ActionWrapper",children:e.children})};N.Content=E,N.Action=b,N.defaultProps={marginTop:60,showExtendedFooter:!1,isExtendedFooterOpen:!1,className:""},t.Z=N},5747:function(e,t,n){"use strict";var r=n(17891),o=n(82845),i=n(5901),s=n(30567),a=n(52406),c=n(96616),d=function(e){var t=(0,a.useState)(null),d=t[0],l=t[1];return((0,a.useEffect)(function(){var e,t=!0;return(e=(0,r.Z)(function(){var e;return(0,i.__generator)(this,function(r){switch(r.label){case 0:return[4,n.e(40887).then(n.bind(n,40887))];case 1:return e=r.sent(),t&&l(e),[2]}})}),function(){return e.apply(this,arguments)})(),function(){t=!1}},[]),(0,c.a)(d))?null:(0,s.jsx)(d.default,(0,o.Z)({},e))};t.ZP=d},39582:function(e,t,n){"use strict";n.d(t,{P:function(){return r}});var r={LOADING:"LOADING",FAILED:"FAILED",EMPTY:"EMPTY",CONGRATS:"CONGRATS",NOT_FOUND:"NOT_FOUND",ERROR:"ERROR"}},23361:function(e,t,n){"use strict";n.r(t),n.d(t,{default:function(){return f}});var r=n(30567),o=n(52406),i=n(98148),s=n(43485),a=n(48811),c=n(66241),d=n(80672),l=n(5852),u=n(61233),$=n(79822);n(14678);var p={src:"//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/media/errorStateImg.3c1c598e.svg",height:222,width:253},m={src:"//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/media/errorStateDark.dbc6186b.svg",height:222,width:253},g=function(){var e="Start Trade Online at low brokerage with India's Leading Investment Platform - Groww. We offer Direct Mutual Funds, Equity Trading, Futures and Options, Digital Gold, Fixed Deposit and SGB etc",t={title:"500! Some Error Occured | Groww",desc:e=e.substring(0,150)+" ...",noIndex:!0,routeName:""};return(0,a.L)(t,"https://groww.in")},f=function(e){var t,n=e.showErrorCta;return(0,o.useEffect)(function(){var e=(0,c.Hk)();(0,i.L9)($.Z.Dev,e?u.Z.LoggedInErrorPage:u.Z.NotLoggedInErrorPage,{source:window.location.href})},[]),(0,r.jsx)(r.Fragment,{children:(t=void 0!==n&&n,(0,r.jsxs)("div",{className:"absolute-center center-align ep88Wrapper ep88TopMargin",children:[(0,r.jsx)(d.Z,{src:p,srcDark:m,width:220,height:200,addClass:"ep88ErrorImage"}),(0,r.jsx)("div",{className:"contentPrimary ep88TitleTop bodyMedium18",children:"Oops!"}),(0,r.jsx)("div",{className:"contentPrimary ep88ParaTxt bodyMedium18",children:"It seems something went wrong"}),t&&(0,r.jsx)(s.$7,{url:l.Z6.HOME,addAnchorClass:"ep88ErrorLink",children:(0,r.jsx)("p",{children:"Go to Home Page"})}),(0,r.jsx)("div",{className:"ep88TitleWrapper ep88ErrorTitle bodyMedium16",children:"Uh Oh! 500"}),(0,r.jsxs)("div",{className:"ep88ParaWrapper bodyRegular16",children:[(0,r.jsx)("div",{className:"ep88ErrorPara",children:"Some Error Occured"}),(0,r.jsx)(s.$7,{url:l.Z6.HOME,addAnchorClass:"ep88NfmLink",children:(0,r.jsx)("p",{children:"Go to Home Page"})})]}),g()]}))})}},75060:function(e,t,n){"use strict";n.r(t);var r=n(30567),o=n(52406),i=n(98148),s=n(43485),a=n(48811),c=n(66241),d=n(80672),l=n(5852),u=n(61233),$=n(79822);n(75048);var p=function(e){var t=e.showErrorCta;return(0,o.useEffect)(function(){var e=(0,c.Hk)();(0,i.L9)($.Z.Dev,e?u.Z.LoggedInNotFoundPage:u.Z.NotLoggedInNotFoundPage,{source:window.location.href})},[]),(0,r.jsx)(r.Fragment,{children:m(void 0===t||t)})},m=function(e){return(0,r.jsxs)("div",{className:"absolute-center center-align nfp17Wrapper nfp17TopMargin",children:[(0,r.jsx)(d.Z,{src:"https://groww.in/favicon32-groww.svg",width:50,height:50,addClass:"growwLogo"}),(0,r.jsx)("div",{className:"nfp17TitleWrapper nfp17ErrorTitle bodyMedium16",children:"Uh Oh! 404"}),(0,r.jsxs)("div",{className:"nfp17ParaWrapper bodyRegular16",children:[(0,r.jsx)("div",{className:"nfp17ErrorPara",children:"Page Not Found"}),e&&(0,r.jsx)(s.$7,{url:l.Z6.HOME,addAnchorClass:"nfp17NfmLink",children:(0,r.jsx)("p",{children:"Go to Home Page"})})]}),g()]})},g=function(){var e="Find and Invest in Direct Mutual funds, Stocks, US Stocks, ETFs, Digital Gold, SGB and Fixed Deposit at Groww - India's Leading Investment Platform.",t={title:"404! Page Not Found | Groww",desc:e=e.substring(0,150)+" ...",noIndex:!0,routeName:""};return(0,a.L)(t,"https://groww.in")};t.default=p},48811:function(e,t,n){"use strict";n.d(t,{H:function(){return d},L:function(){return c}});var r=n(30567);n(52406);var o=n(23653),i=n.n(o),s=n(46129),a=n.n(s);function c(e,t){var n=e.title,o=e.desc;o=o.length>315?o.substring(0,315)+" ...":o;var s=e.featuredImage?e.featuredImage:l.DEFAULT_GROWW_LOGO_270,a="noindex";t.includes(l.PROD_HOST)&&(a="index"),e.noIndex&&(a="noindex");var c=t+e.routeName,d=e.canonicalUrl?e.canonicalUrl:c;return(0,r.jsxs)(i(),{children:[(0,r.jsx)("title",{children:n}),(0,r.jsx)("meta",{name:"description",content:o}),(0,r.jsx)("meta",{name:"robots",content:a}),(0,r.jsx)("meta",{name:"twitter:card",content:"summary_large_image"}),(0,r.jsx)("meta",{name:"twitter:image",content:s}),(0,r.jsx)("meta",{name:"twitter:description",content:o}),(0,r.jsx)("meta",{name:"twitter:title",content:n}),(0,r.jsx)("meta",{name:"twitter:site",content:"_@groww"}),(0,r.jsx)("meta",{name:"twitter:creator",content:"_@groww"}),(0,r.jsx)("meta",{itemProp:"name",content:n}),(0,r.jsx)("meta",{itemProp:"description",content:o}),(0,r.jsx)("meta",{itemProp:"image",content:s}),(0,r.jsx)("meta",{property:"og:locale",content:"en_US"}),(0,r.jsx)("meta",{property:"og:type",content:"website"}),(0,r.jsx)("meta",{property:"og:title",content:n}),(0,r.jsx)("meta",{property:"og:image",content:s}),(0,r.jsx)("meta",{property:"og:description",content:o}),(0,r.jsx)("meta",{property:"og:url",content:c}),(0,r.jsx)("meta",{property:"og:site_name",content:"Groww"}),(0,r.jsx)("link",{rel:"publisher",href:"https://plus.google.com/b/112795119140865328446/+GrowwIn?"}),(0,r.jsx)("link",{rel:"canonical",href:d})]})}function d(){return(0,r.jsx)(a(),{type:"text/javascript",id:"customfitpreinit",strategy:"beforeInteractive","data-cfasync":"false",dangerouslySetInnerHTML:{__html:'!function(e,t,i,s){var n=t.getElementById("customfitpreinit");if(n){n.insertAdjacentHTML("beforebegin",\'<style type="text/css">.customfit-invisible-preinit-block{visibility:hidden !important; opacity:0 !important}</style>\');var r=document.querySelector("html");r.className=r.className+" customfit-invisible-preinit-block",setTimeout(function(){r.className=r.className.replace(/customfit-invisible-preinit-block/g,"")},5e3);var c=t.getElementsByTagName("script")[0],o=t.createElement("script");o.id="customfitinit",o.setAttribute("crossorigin","*"),o.deferred=!0,o.src="https://sdk.customfit.ai/386c0de0-5c09-11ed-8d45-7d3f706a22bf/cf-js-sdk-min.js",o.type="text/javascript",c.parentNode.insertBefore(o,c),o.onerror=function(){var e=t.getElementById("customfit-invisible-preinit-block");e&&e.parentNode.removeChild(e)}}}(window,document);'}})}var l={PROD_HOST:"https://groww.in",DEFAULT_GROWW_LOGO_270:"https://groww.in/groww-logo-270.png",FACEBOOK_PAGE:"https://www.facebook.com/growwapp",TWITTER_PAGE:"https://twitter.com/_groww",YOUTUBE_PAGE:"http://bit.ly/2rjkBHu",INSTAGRAM_PAGE:"https://www.instagram.com/groww_official/",LINKEDIN_PAGE:"https://in.linkedin.com/company/groww.in",YOUTUBE_MAIN_CHANNEL:"https://www.youtube.com/channel/UCw5TLrz3qADabwezTEcOmgQ"}},38653:function(){},14678:function(){},75048:function(){}}]);