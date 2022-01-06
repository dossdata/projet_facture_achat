"use strict";
/*! https://github.com/MrLesion/customselect v1.1.0 by @MrLesion */!function(e){e.fn.customselect=function(t){var n={},r={_events:{},constants:{added:"customselect-added"},utils:{parseBool:function(e){var t;return"boolean"==typeof e?e:"boolean"==typeof(t=function(){switch(!1){case"true"!==e.toLowerCase():return!0;case"false"!==e.toLowerCase():return!1}}())?t:void 0},getCustomSelectID:function(e){for(var t="",n="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",r=n.length,o=0;o<e;o++)t+=n.charAt(Math.floor(Math.random()*r));return t},createElement:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"",n=document.createElement(e);return n.className=t,n},getSelectStyle:function(e,t){var n={list:"div",item:"div",type:e};return"list"===t.style&&(n.list="ul",n.item="li"),n},getObserverSelector:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;return null!==e.parentNode?document.querySelector(e.parentNode):null!==t?t:n.parentNode},createCustomEvents:function(e){e.split(" ").forEach((function(e){var t=new Event(e);r._events[e]=t}))},triggerCustomEvent:function(e,t){var n=r._events[t];n&&e.dispatchEvent(n)},triggerEvent:function(e,t){var n=new Event(t);e instanceof NodeList?e.forEach((function(e){e.dispatchEvent(n)})):e.dispatchEvent(n)}},init:function(e){Array.from(e).forEach((function(e){r.buildDomList(e,!0)})),r.utils.createCustomEvents("dropdown.open dropdown.close list.builded observer.addedNodes")},dropdown:{bindEvents:function(e){var t=document.getElementById(e.id);t.addEventListener("click",(function(e){if(e.target.className.indexOf("customselect-search-input")>-1)return!1;var t=e.target.closest(".customselect-dropdown");r.dropdown.closeAll(t),r.dropdown.toggle(t)})),document.addEventListener("click",(function(e){!1===(null!==e.target.closest(".customselect-dropdown"))&&r.dropdown.closeAll()})),t.addEventListener("dropdown.close",(function(e){var t=e.target.querySelector(".customselect-search-item");if(null!==t){var n=t.querySelector(".customselect-search-input");n.value="",r.utils.triggerEvent(n,"input")}}))},closeAll:function(e){var t=document.querySelectorAll(".customselect-dropdown");Array.from(t).filter((function(t){return t!==e})).forEach((function(e){r.utils.triggerCustomEvent(e,"dropdown.close"),e.classList.remove("open")}))},toggle:function(e){e.className.indexOf("open")>-1?(e.classList.remove("open"),r.utils.triggerCustomEvent(e,"dropdown.close")):(e.classList.add("open"),r.utils.triggerCustomEvent(e,"dropdown.open"))}},observer:{config:{childList:!0,attributes:!1,subtree:!0,characterData:!1},bind:function(e){var t=new MutationObserver((function(t){t.forEach((function(t){r.observer.callback(t,e)}))}));1===e.nodeType&&t.observe(e,r.observer.config)},callback:function(e,t){null!==e.addedNodes&&e.addedNodes.forEach((function(e){if(1===e.nodeType){var n=e.querySelector("select");e.matches("select")&&(n=e),null!==n&&n.length>0&&-1===n.className.indexOf(r.constants.added)&&r.buildDomList(t,!1),r.utils.triggerCustomEvent(t,"observer.addedNodes")}}))}},search:{build:function(e,t){var n=r.utils.createElement(e.item,"customselect-list-input-item customselect-search-item"),o=r.utils.createElement("input","customselect-search-input");return o.type="search",o.placeholder=t.searchText,n.appendChild(o),n},bindEvents:function(e){e.querySelector(".customselect-search-input").addEventListener("input",(function(t){var n=t.target.value.toLowerCase();r.search.query(n,e)}))},query:function(e,t){var n=Array.from(t.querySelectorAll(".customselect-list-input-item"));e.length>0?(t.classList.add("searching"),n.forEach((function(t){var n=t.querySelector(".customselect-list-input"),r=t.querySelector(".customselect-list-label");null!==n&&null!==r&&(n.value.toLowerCase().indexOf(e)>-1||r.innerText.toLowerCase().indexOf(e)>-1?t.classList.add("match"):t.classList.remove("match"))}))):(t.classList.remove("searching"),n.forEach((function(e){e.classList.remove("match")})))}},reset:{build:function(e,t){var n=r.utils.createElement("input","customselect-reset-input"),o=r.utils.getCustomSelectID(20);n.type="checkbox",n.id=o;var l=r.utils.createElement("label","customselect-list-label");l.innerText=t.resetText,l.htmlFor=o;var s=r.buildLabel(t.labelPosition,n,l,e);return s.classList.add("customselect-reset-item"),s},bindEvents:function(e,t){var n=e.querySelector(".customselect-reset-input"),o=Array.from(e.querySelectorAll(".customselect-list-input"));!1===o.filter((function(e){return e.checked})).length>0&&(n.checked=!0,0===o.length&&(e.querySelector(".customselect-dropdown-text").innerText=t.emptyText));null!==n&&n.addEventListener("click",(function(e){e.target.checked=!0,o.forEach((function(e){e.checked=!1,r.utils.triggerEvent(e,"change")}))}))}},bindSelect:function(e,t){e.onchange=function(e){var n=Array.from(e.target.options).filter((function(e){return e.selected}));Array.from(t.querySelectorAll(".customselect-list-input:checked")).forEach((function(e){e.checked=!1})),n.forEach((function(e){var n=t.querySelector('.customselect-list-input[value="'+e.value+'"]');n.checked=!0,r.utils.triggerEvent(n,"change")}))}},bindInput:function(e,t,n,o){e.addEventListener("change",(function(l){var s=t.filter((function(e){return e.value===l.target.value}))[0];if(s.selected=l.target.checked,!0===r.utils.parseBool(o.dropdown)){var i=e.closest(".customselect-dropdown"),c=t.filter((function(e){return!0===e.selected})),a=i.querySelector(".customselect-dropdown-text");if(0===c.length)!0===r.utils.parseBool(o.reset)&&c.length>0?a.innerText=o.resetText:a.innerText=o.emptyText;else{var u=c.map((function(e){return e.textContent})).filter((function(e){return e})).join(o.selectedDelimiter);c.length>o.selectedLimit&&c.length<t.length?u=c.length+" "+o.selectedText:c.length===t.length&&(u=o.allSelectedText),a.innerText=u}"select-one"===n.type&&i.classList.remove("open")}if(!0===r.utils.parseBool(o.reset)){var d=e.closest(".customselect-list"),p=Array.from(d.querySelectorAll(".customselect-list-input"));d.querySelector(".customselect-reset-input").checked=0===p.filter((function(e){return e.checked})).length}"function"==typeof o.onChange&&o.onChange(l.target,s.closest("select"))}))},bindByElement:function(e){var t=arguments.length>1&&void 0!==arguments[1]&&arguments[1],o=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;if(e.className.indexOf(r.constants.added)>-1)return!1;var l=r.utils.getCustomSelectID(20),s=e.dataset,i=Object.assign({},n);i=Object.assign(i,s);var c=r.utils.getSelectStyle(e.type,i),a=Array.from(e.children),u=a.filter((function(e){return e.selected}));if(e.dataset.customselectDataId=l,-1===i.targetTypes.indexOf(c.type))return console.warn(c.type+" is not a valid selector for customselect"),!1;0===u.length&&"select-one"===c.type&&(a[0].selected=!0);var d=r.utils.createElement(c.list,"customselect-list "+i.classList);if(d.id=l,d.dataset.placeholder=i.emptyText,d.dataset.type=c.type,!0===r.utils.parseBool(i.dropdown)){d.classList.add("customselect-dropdown");var p=r.utils.createElement(c.item,"customselect-list-input-item customselect-dropdown-text");d.appendChild(p)}if(!0===r.utils.parseBool(i.search)){d.classList.add("customselect-search");var f=r.search.build(c,i);d.appendChild(f)}if(!0===r.utils.parseBool(i.reset)){var m=r.reset.build(c,i);d.appendChild(m)}if(a.forEach((function(e){if("OPTGROUP"===e.nodeName){var t=r.buildDomOptGroup(e,l,c,i);d.appendChild(t)}else if("OPTION"===e.nodeName){var n=r.buildDomOption(e,l,c,i);d.appendChild(n.domInputGroup),r.bindInput(n.domCheckboxOptionInput,a,c,i)}})),r.addToDom(e,d,i),!0===t&&!0===r.utils.parseBool(i.observe)){var h=r.utils.getObserverSelector(n,o,e);r.observer.bind(h)}},bindByParent:function(e,t){var o=Array.from(e.querySelectorAll("select")).filter((function(e){return n.targetTypes.indexOf(e.type)>-1}));if(0===o.length){if(!0===t&&!0===r.utils.parseBool(n.observe)){var l=r.utils.getObserverSelector(n,e);r.observer.bind(l)}return!1}o.forEach((function(t){r.bindByElement(t,!0,e)}))},buildDomList:function(e,t){-1===n.targetTypes.indexOf(e.type)?r.bindByParent(e,t):r.bindByElement(e,t)},buildDomOptGroup:function(e,t,n,o){var l=r.utils.createElement(n.list,"customselect-optgroup"),s=r.utils.createElement(n.item,"customselect-optgroup-label");s.innerText=e.label,l.appendChild(s);var i=Array.from(e.children);return i.forEach((function(e){var s=r.buildDomOption(e,t,n,o);l.appendChild(s.domInputGroup),r.bindInput(s.domCheckboxOptionInput,i,n,o)})),l},buildDomOption:function(e,t,n,o){var l=r.utils.createElement("input","customselect-list-input"),s="",i=r.utils.getCustomSelectID(20);l.type="select-one"===n.type?"radio":"checkbox",l.value=e.value,l.id=i,l.checked=e.selected,"select-one"===n.type&&(s=t,l.name=s);var c=r.utils.createElement("label","customselect-list-label");c.innerText=e.text,c.htmlFor=i;var a=r.buildLabel(o.labelPosition,l,c,n);return e.disabled&&e.classList.add("disabled"),e.classList.length>0&&e.classList.forEach((function(e){a.classList.add(e)})),{domCheckboxOptionInput:l,domInputGroup:a}},buildLabel:function(e,t,n,o){var l=r.utils.createElement(o.item,"customselect-list-input-item");return"before"===e?(l.appendChild(n),l.appendChild(t)):"after"===e?(l.appendChild(t),l.appendChild(n)):(n.appendChild(t),l.appendChild(n)),l},destroyDomList:function(e){var t=e.dataset.customselectDataId,n=document.getElementById(t);null!==n&&(n.parentNode.removeChild(n),e.classList.remove(r.constants.added))},addToDom:function(e,t,n){var o=e.parentNode,l=r.utils.createElement("div","customselect-list-container");e.classList.add(r.constants.added),l.appendChild(e),l.appendChild(t),o.appendChild(l),r.triggerInitialState(l),!0===r.utils.parseBool(n.dropdown)&&r.dropdown.bindEvents(t),!0===r.utils.parseBool(n.search)&&r.search.bindEvents(t),!0===r.utils.parseBool(n.reset)&&r.reset.bindEvents(t,n),r.bindSelect(e,t),r.utils.triggerCustomEvent(t,"list.builded")},triggerInitialState:function(e){var t=e.querySelectorAll("input");t.length>0&&r.utils.triggerEvent(t,"change")}};return"string"==typeof t&&"function"==typeof e.fn.customselect.public[t]?e.fn.customselect.public[t](this,r):(n=e.extend({},e.fn.customselect.defaults,t),r.init(this),this)},e.fn.customselect.public={destroy:function(e,t){Array.from(e).forEach((function(e){t.destroyDomList(e)}))}},e.fn.customselect.defaults={labelPosition:"after",style:"list",dropdown:!1,search:!1,reset:!1,classList:"",targetTypes:["select-multiple","select-one"],parentNode:null,observe:!0,selectedLimit:3,selectedDelimiter:" | ",emptyText:"Nothing selected",selectedText:"selected",allSelectedText:"All selected",searchText:"Search options",resetText:"All",onChange:null}}(jQuery),function(){var e,t,n,r,o;
/*! http://mths.be/array-from v0.2.0 by @mathias */
Array.from||(e=function(){try{var e={},t=Object.defineProperty,n=t(e,e,e)&&t}catch(e){}return n||function(e,t,n){e[t]=n.value}}(),t=Object.prototype.toString,n=function(e){return"function"==typeof e||"[object Function]"==t.call(e)},r=Math.pow(2,53)-1,o=function(e){var t=function(e){var t=Number(e);return isNaN(t)?0:0!=t&&isFinite(t)?(t>0?1:-1)*Math.floor(Math.abs(t)):t}(e);return Math.min(Math.max(t,0),r)},e(Array,"from",{value:function(t){var r=this;if(null==t)throw new TypeError("`Array.from` requires an array-like object, not `null` or `undefined`");var l,s,i=Object(t);if(arguments.length>1){if(!n(l=arguments[1]))throw new TypeError("When provided, the second argument to `Array.from` must be a function");arguments.length>2&&(s=arguments[2])}for(var c,a,u=o(i.length),d=n(r)?Object(new r(u)):new Array(u),p=0;p<u;)c=i[p],a=l?void 0===s?l(c,p):l.call(s,c,p):c,e(d,p,{value:a,configurable:!0,enumerable:!0}),++p;return d.length=u,d},configurable:!0,writable:!0}))}.call("object"==typeof window&&window||"object"==typeof self&&self||"object"==typeof global&&global||{});