var astraGetParents=function(e,t){Element.prototype.matches||(Element.prototype.matches=Element.prototype.matchesSelector||Element.prototype.mozMatchesSelector||Element.prototype.msMatchesSelector||Element.prototype.oMatchesSelector||Element.prototype.webkitMatchesSelector||function(e){for(var t=(this.document||this.ownerDocument).querySelectorAll(e),a=t.length;0<=--a&&t.item(a)!==this;);return-1<a});for(var a=[];e&&e!==document;e=e.parentNode)t?e.matches(t)&&a.push(e):a.push(e);return a},getParents=function(e,t){console.warn("getParents() function has been deprecated since version 2.5.0 or above of Astra Theme and will be removed in the future. Use astraGetParents() instead."),astraGetParents(e,t)},astraToggleClass=function(e,t){e.classList.contains(t)?e.classList.remove(t):e.classList.add(t)},toggleClass=function(e,t){console.warn("toggleClass() function has been deprecated since version 2.5.0 or above of Astra Theme and will be removed in the future. Use astraToggleClass() instead."),astraToggleClass(e,t)};!function(){if("function"==typeof window.CustomEvent)return;function e(e,t){t=t||{bubbles:!1,cancelable:!1,detail:void 0};var a=document.createEvent("CustomEvent");return a.initCustomEvent(e,t.bubbles,t.cancelable,t.detail),a}e.prototype=window.Event.prototype,window.CustomEvent=e}();var astraTriggerEvent=function(e,t,a){var n=new CustomEvent(t,2<arguments.length&&void 0!==a?a:{});e.dispatchEvent(n)};!function(){var m=document.querySelectorAll("#masthead .main-header-menu-toggle"),u=document.getElementById("masthead"),o={},g="",p=document.body,v="";function e(e){g=e.detail.type;var t=document.querySelectorAll(".menu-toggle");if("dropdown"===g&&(document.getElementById("ast-mobile-popup").classList.remove("active","show"),h("updateHeader")),"off-canvas"===g)for(var a=0;a<t.length;a++)void 0!==t[a]&&t[a].classList.contains("toggled")&&t[a].click();n(g)}function h(e){var t="";if(null==(v=u.querySelector("#ast-mobile-header"))||"dropdown"!==v.dataset.type||"updateHeader"===e){if(void 0!==e&&"updateHeader"!==e)t=e.closest(".ast-mobile-popup-inner").querySelectorAll(".menu-item-has-children");else t=document.querySelector("#ast-mobile-popup").querySelectorAll(".menu-item-has-children");for(var a=0;a<t.length;a++){t[a].classList.remove("ast-submenu-expanded");for(var n=t[a].querySelectorAll(".sub-menu"),s=0;s<n.length;s++)n[s].style.display="none"}var o=document.querySelectorAll(".menu-toggle");document.body.classList.remove("ast-main-header-nav-open","ast-popup-nav-open"),document.documentElement.classList.remove("ast-off-canvas-active");for(var l=0;l<o.length;l++)o[l].classList.remove("toggled"),o[l].style.display="flex"}}function n(e){var t=document.querySelectorAll("#ast-mobile-header .menu-toggle"),a=document.querySelectorAll("#ast-desktop-header .menu-toggle");if(void 0===e&&null!==u)if(v=u.querySelector("#ast-mobile-header"))e=v.dataset.type;else{var n=u.querySelector("#ast-desktop-header");if(!n)return;e=n.dataset.toggleType}if("off-canvas"===e){for(var s=document.getElementById("menu-toggle-close"),o=document.querySelector(".ast-mobile-popup-inner").getElementsByTagName("a"),l=0;l<t.length;l++)t[l].removeEventListener("click",astraNavMenuToggle,!1),t[l].addEventListener("click",popupTriggerClick,!1),t[l].trigger_type="mobile";for(l=0;l<a.length;l++)a[l].removeEventListener("click",astraNavMenuToggle,!1),a[l].addEventListener("click",popupTriggerClick,!1),a[l].trigger_type="desktop";for(s.addEventListener("click",function(e){document.getElementById("ast-mobile-popup").classList.remove("active","show"),h(this)}),document.addEventListener("keyup",function(e){27===e.keyCode&&(e.preventDefault(),document.getElementById("ast-mobile-popup").classList.remove("active","show"),h())}),document.addEventListener("click",function(e){e.target===document.querySelector(".ast-mobile-popup-drawer.active .ast-mobile-popup-overlay")&&(document.getElementById("ast-mobile-popup").classList.remove("active","show"),h())}),link=0,len=o.length;link<len;link++)null!==o[link].getAttribute("href")&&"#"!==o[link].getAttribute("href")&&(o[link].addEventListener("click",f,!0),o[link].headerType="off-canvas");AstraToggleSetup()}else if("dropdown"===e){var r=document.querySelector(".ast-mobile-header-content"),i=document.querySelector(".ast-desktop-header-content"),c=r.getElementsByTagName("a"),d=i.getElementsByTagName("a");for(link=0,len=c.length;link<len;link++)null!==c[link].getAttribute("href")&&"#"!==c[link].getAttribute("href")&&(c[link].addEventListener("click",f,!0),c[link].headerType="dropdown");for(link=0,len=d.length;link<len;link++)d[link].addEventListener("click",f,!0),d[link].headerType="dropdown";for(l=0;l<t.length;l++)t[l].removeEventListener("click",popupTriggerClick,!1),t[l].addEventListener("click",astraNavMenuToggle,!1),t[l].trigger_type="mobile";for(l=0;l<a.length;l++)a[l].removeEventListener("click",popupTriggerClick,!1),a[l].addEventListener("click",astraNavMenuToggle,!1),a[l].trigger_type="desktop";AstraToggleSetup()}y()}function f(e){switch(e.currentTarget.headerType){case"dropdown":for(var t=document.querySelectorAll(".menu-toggle.toggled"),a=0;a<t.length;a++)t[a].click();break;case"off-canvas":document.getElementById("menu-toggle-close").click()}}null!=u&&(v=u.querySelector("#ast-mobile-header")),""!==v&&null!==v&&(g=v.dataset.type),document.addEventListener("astMobileHeaderTypeChange",e,!1),popupTriggerClick=function(e){var t=e.currentTarget.trigger_type,a=document.getElementById("ast-mobile-popup");p.classList.contains("ast-popup-nav-open")||p.classList.add("ast-popup-nav-open"),p.classList.contains("ast-main-header-nav-open")||p.classList.add("ast-main-header-nav-open"),document.documentElement.classList.contains("ast-off-canvas-active")||document.documentElement.classList.add("ast-off-canvas-active"),"desktop"===t&&(a.querySelector(".ast-mobile-popup-content").style.display="none",a.querySelector(".ast-desktop-popup-content").style.display="block"),"mobile"===t&&(a.querySelector(".ast-desktop-popup-content").style.display="none",a.querySelector(".ast-mobile-popup-content").style.display="block"),this.style.display="none",a.classList.add("active","show")},window.addEventListener("load",function(){n()}),document.addEventListener("astLayoutWidthChanged",function(){n()}),document.addEventListener("astPartialContentRendered",function(){m=document.querySelectorAll(".main-header-menu-toggle"),p.classList.remove("ast-main-header-nav-open"),document.addEventListener("astMobileHeaderTypeChange",e,!1),n(),y()});var s=window.innerWidth;window.addEventListener("resize",function(){"INPUT"!==document.activeElement.tagName&&function(){var e=document.getElementById("menu-toggle-close"),t=document.querySelector(".menu-toggle.toggled"),a=document.querySelector("#masthead > #ast-desktop-header .ast-desktop-header-content"),n=document.querySelector(".elementor-editor-active");a&&(a.style.display="none"),window.innerWidth!==s&&(t&&null===n&&t.click(),document.body.classList.remove("ast-main-header-nav-open","ast-popup-nav-open")),e&&null===n&&e.click(),l(),"dropdown"===g&&AstraToggleSetup()}()}),document.addEventListener("DOMContentLoaded",function(){var e,t;for(AstraToggleSetup(),e=document.querySelectorAll(".navigation-accessibility"),t=0;t<=e.length-1;t++)e[t]&&d(e[t])});var l=function(){var e=p.style.overflow;p.style.overflow="hidden";var t=document.documentElement.clientWidth;if(p.style.overflow=e,astra.break_point<t||0===t){if(0<m.length)for(var a=0;a<m.length;a++)null!==m[a]&&m[a].classList.remove("toggled");p.classList.remove("ast-header-break-point"),p.classList.add("ast-desktop"),astraTriggerEvent(p,"astra-header-responsive-enabled")}else p.classList.add("ast-header-break-point"),p.classList.remove("ast-desktop"),astraTriggerEvent(p,"astra-header-responsive-disabled")},y=function(){var e=document.querySelectorAll(".ast-account-action-login")[0];if(void 0!==e){var t=document.getElementById("ast-hb-login-close"),a=document.getElementById("ast-hb-account-login-wrap");e.onclick=function(e){e.preventDefault(),e.stopPropagation(),a.classList.contains("show")||a.classList.add("show")},t.onclick=function(e){e.preventDefault(),a.classList.remove("show")}}};l(),AstraToggleSubMenu=function(e){e.preventDefault();var t=this.parentNode;if(t.classList.contains("ast-submenu-expanded")&&document.querySelector("header.site-header").classList.contains("ast-builder-menu-toggle-link")&&!this.classList.contains("ast-menu-toggle")){var a=t.querySelector("a").getAttribute("href");""!==a&&"#"!==a&&(window.location=a)}for(var n=t.querySelectorAll(".menu-item-has-children"),s=0;s<n.length;s++){n[s].classList.remove("ast-submenu-expanded");var o=n[s].querySelector(".sub-menu, .children");null!==o&&(o.style.display="none")}var l=t.parentNode.querySelectorAll(".menu-item-has-children");for(s=0;s<l.length;s++)if(l[s]!=t){l[s].classList.remove("ast-submenu-expanded");for(var r=l[s].querySelectorAll(".sub-menu"),i=0;i<r.length;i++)r[i].style.display="none"}t.classList.contains("menu-item-has-children")&&(astraToggleClass(t,"ast-submenu-expanded"),t.classList.contains("ast-submenu-expanded")?t.querySelector(".sub-menu").style.display="block":t.querySelector(".sub-menu").style.display="none")},AstraNavigationMenu=function(e){console.warn("AstraNavigationMenu() function has been deprecated since version 1.6.5 or above of Astra Theme and will be removed in the future.")},AstraToggleMenu=function(e){if(console.warn("AstraToggleMenu() function has been deprecated since version 1.6.5 or above of Astra Theme and will be removed in the future. Use AstraToggleSubMenu() instead."),0<e.length)for(var t=0;t<e.length;t++)e[t].addEventListener("click",AstraToggleSubMenu,!1)},AstraToggleSetup=function(){if("off-canvas"===g||"full-width"===g){var e=document.querySelectorAll("#ast-mobile-popup");if(p.classList.contains("ast-header-break-point"))var t=document.querySelectorAll("#ast-mobile-header .main-header-menu-toggle");else t=document.querySelectorAll("#ast-desktop-header .main-header-menu-toggle")}else if(p.classList.contains("ast-header-break-point"))e=document.querySelectorAll("#ast-mobile-header"),t=document.querySelectorAll("#ast-mobile-header .main-header-menu-toggle");else e=document.querySelectorAll("#ast-desktop-header"),t=document.querySelectorAll("#ast-desktop-header .main-header-menu-toggle");if(0<t.length)for(var a=0;a<t.length;a++)if(t[a].setAttribute("data-index",a),o[a]||(o[a]=t[a],t[a].addEventListener("click",astraNavMenuToggle,!1)),void 0!==e[a]){if(document.querySelector("header.site-header").classList.contains("ast-builder-menu-toggle-link"))var n=e[a].querySelectorAll("ul.main-header-menu .menu-item-has-children > .menu-link, ul.main-header-menu .ast-menu-toggle");else n=e[a].querySelectorAll("ul.main-header-menu .ast-menu-toggle");if(0<n.length)for(var s=0;s<n.length;s++)n[s].addEventListener("click",AstraToggleSubMenu,!1)}},astraNavMenuToggle=function(e){e.preventDefault();var t=e.target.closest("#ast-desktop-header"),a=document.querySelector("#masthead > #ast-desktop-header .ast-desktop-header-content");if(null!=t&&""!==t)var n=t.querySelector(".main-header-menu-toggle");else n=document.querySelector("#masthead > #ast-desktop-header .main-header-menu-toggle");var s=document.querySelector("#masthead > #ast-desktop-header .ast-desktop-header-content .main-header-bar-navigation");if("desktop"===e.currentTarget.trigger_type)return null!==s&&""!==s&&void 0!==s&&(astraToggleClass(s,"toggle-on"),s.classList.contains("toggle-on")?s.style.display="block":s.style.display=""),astraToggleClass(n,"toggled"),void(n.classList.contains("toggled")?(p.classList.add("ast-main-header-nav-open"),"dropdown"===g&&(a.style.display="block")):(p.classList.remove("ast-main-header-nav-open"),a.style.display="none"));var o=document.querySelectorAll("#masthead > #ast-mobile-header .main-header-bar-navigation");m=document.querySelectorAll("#masthead > #ast-mobile-header .main-header-menu-toggle");var l="0",r=!1;if(null!==this.closest("#ast-fixed-header")&&(o=document.querySelectorAll("#ast-fixed-header > #ast-mobile-header .main-header-bar-navigation"),m=document.querySelectorAll("#ast-fixed-header .main-header-menu-toggle"),l="0",r=!0),void 0===o[l])return!1;for(var i=o[l].querySelectorAll(".menu-item-has-children"),c=0;c<i.length;c++){i[c].classList.remove("ast-submenu-expanded");for(var d=i[c].querySelectorAll(".sub-menu"),u=0;u<d.length;u++)d[u].style.display="none"}-1!==(this.getAttribute("class")||"").indexOf("main-header-menu-toggle")&&(astraToggleClass(o[l],"toggle-on"),astraToggleClass(m[l],"toggled"),r&&1<m.length&&astraToggleClass(m[1],"toggled"),o[l].classList.contains("toggle-on")?(o[l].style.display="block",p.classList.add("ast-main-header-nav-open")):(o[l].style.display="",p.classList.remove("ast-main-header-nav-open")))},p.addEventListener("astra-header-responsive-enabled",function(){var e=document.querySelectorAll(".main-header-bar-navigation");if(0<e.length)for(var t=0;t<e.length;t++){null!=e[t]&&(e[t].classList.remove("toggle-on"),e[t].style.display="");for(var a=e[t].getElementsByClassName("sub-menu"),n=0;n<a.length;n++)a[n].style.display="";for(var s=e[t].getElementsByClassName("children"),o=0;o<s.length;o++)s[o].style.display="";for(var l=e[t].getElementsByClassName("ast-search-menu-icon"),r=0;r<l.length;r++)l[r].classList.remove("ast-dropdown-active"),l[r].style.display=""}},!1);var t,a,r;a=navigator.userAgent,r=a.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i)||[],/trident/i.test(r[1])?t=/\brv[ :]+(\d+)/g.exec(a)||[]:"Chrome"===r[1]&&null!=(t=a.match(/\bOPR|Edge\/(\d+)/))||(r=r[2]?[r[1],r[2]]:[navigator.appName,navigator.appVersion,"-?"],null!=(t=a.match(/version\/(\d+)/i))&&r.splice(1,1,t[1]),"Safari"===r[0]&&r[1]<11&&bodyElement.classList.add("ast-safari-browser-less-than-11"));for(var i=document.getElementsByClassName("astra-search-icon"),c=0;c<i.length;c++)i[c].onclick=function(e){if(this.classList.contains("slide-search")){e.preventDefault();var t=this.parentNode.parentNode.parentNode.querySelector(".ast-search-menu-icon");if(t.classList.contains("ast-dropdown-active"))""!==(t.querySelector(".search-field").value||"")&&t.querySelector(".search-form").submit(),t.classList.remove("ast-dropdown-active");else t.classList.add("ast-dropdown-active"),t.querySelector(".search-field").setAttribute("autocomplete","off"),setTimeout(function(){t.querySelector(".search-field").focus()},200)}};function d(e){if(e){var t=e.getElementsByTagName("button")[0];if(void 0!==t||void 0!==(t=e.getElementsByTagName("a")[0])){var a=e.getElementsByTagName("ul")[0];if(void 0!==a){a.setAttribute("aria-expanded","false"),-1===a.className.indexOf("nav-menu")&&(a.className+=" nav-menu"),t.onclick=function(){-1!==e.className.indexOf("toggled")?(e.className=e.className.replace(" toggled",""),t.setAttribute("aria-expanded","false"),a.setAttribute("aria-expanded","false")):(e.className+=" toggled",t.setAttribute("aria-expanded","true"),a.setAttribute("aria-expanded","true"))};for(var n=a.getElementsByTagName("a"),s=a.getElementsByTagName("ul"),o=0,l=s.length;o<l;o++)s[o].parentNode.setAttribute("aria-haspopup","true");for(o=0,l=n.length;o<l;o++)n[o].addEventListener("focus",L,!0),n[o].addEventListener("blur",L,!0),n[o].addEventListener("click",b,!0)}else t.style.display="none"}}}function b(){var e=this||"";if(e&&!e.classList.contains("astra-search-icon")&&null===e.closest(".ast-builder-menu")&&-1!==new String(e).indexOf("#")){var t=e.parentNode;if(p.classList.contains("ast-header-break-point")){if(!document.querySelector("header.site-header").classList.contains("ast-builder-menu-toggle-link")||!t.classList.contains("menu-item-has-children")){document.querySelector(".main-header-menu-toggle").classList.remove("toggled");var a=document.querySelector(".main-header-bar-navigation");a.classList.remove("toggle-on"),a.style.display="none",astraTriggerEvent(document.querySelector("body"),"astraMenuHashLinkClicked")}}else for(;-1===e.className.indexOf("nav-menu");)"li"===e.tagName.toLowerCase()&&-1!==e.className.indexOf("focus")&&(e.className=e.className.replace(" focus","")),e=e.parentElement}}function L(){for(var e=this;-1===e.className.indexOf("navigation-accessibility");)"li"===e.tagName.toLowerCase()&&e.classList.toggle("focus"),e=e.parentElement}p.onclick=function(e){if(void 0!==e.target.classList&&!e.target.classList.contains("ast-search-menu-icon")&&0===astraGetParents(e.target,".ast-search-menu-icon").length&&0===astraGetParents(e.target,".ast-search-icon").length)for(var t=document.getElementsByClassName("ast-search-menu-icon"),a=0;a<t.length;a++)t[a].classList.remove("ast-dropdown-active")},"querySelector"in document&&"addEventListener"in window&&(p.addEventListener("mousedown",function(){p.classList.add("ast-mouse-clicked")}),p.addEventListener("keydown",function(){p.classList.remove("ast-mouse-clicked")}))}();