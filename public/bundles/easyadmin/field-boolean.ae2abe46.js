(()=>{function t(e){return t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},t(e)}function e(t,e){for(var n=0;n<e.length;n++){var o=e[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,i(o.key),o)}}function n(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),Object.defineProperty(t,"prototype",{writable:!1}),t}function i(e){var n=function(e,n){if("object"!=t(e)||!e)return e;var i=e[Symbol.toPrimitive];if(void 0!==i){var o=i.call(e,n||"default");if("object"!=t(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===n?String:Number)(e)}(e,"string");return"symbol"==t(n)?n:n+""}function o(t,e){(function(t,e){if(e.has(t))throw new TypeError("Cannot initialize the same private elements twice on an object")})(t,e),e.add(t)}function r(t,e,n){if("function"==typeof t?t===e:t.has(e))return arguments.length<3?e:n;throw new TypeError("Private element is not present on this object")}document.addEventListener("DOMContentLoaded",(function(){document.querySelectorAll('td.field-boolean .form-switch input[type="checkbox"]').forEach((function(t){new f(t)}))}));var c=new WeakSet,f=n((function t(e){"use strict";!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),o(this,c),this.field=e,this.field.addEventListener("change",r(c,this,u).bind(this))}));function u(){var t=this,e=this.field.checked,n=this.field.getAttribute("data-toggle-url")+"&newValue="+e.toString();fetch(n,{method:"PATCH",headers:{"X-Requested-With":"XMLHttpRequest"}}).then((function(e){return e.ok||r(c,t,a).call(t),e.text()})).then((function(){})).catch((function(){return r(c,t,a).call(t)}))}function a(){this.field.checked=!this.field.checked,this.field.disabled=!0,this.field.closest(".form-switch").classList.add("disabled")}})();