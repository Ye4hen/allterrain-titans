(()=>{var e={713:e=>{e.exports=function(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}},318:e=>{e.exports=function(e){return e&&e.__esModule?e:{default:e}}},567:e=>{"use strict";e.exports=window.jQuery},707:e=>{"use strict";e.exports=window.wc_stripe}},t={};function r(n){var i=t[n];if(void 0!==i)return i.exports;var a=t[n]={exports:{}};return e[n](a,a.exports,r),a.exports}(()=>{var e=r(318),t=e(r(713)),n=e(r(567));function i(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function a(e){for(var r=1;r<arguments.length;r++){var n=null!=arguments[r]?arguments[r]:{};r%2?i(Object(n),!0).forEach((function(r){(0,t.default)(e,r,n[r])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):i(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var l=e(r(707)).default.credit_card;(0,n.default)((function(){var e,t;if("undefined"===wcStripeLinkParams||null===(e=wcStripeLinkParams)||void 0===e||null===(t=e.elementOptions)||void 0===t||!t.mode)return!1;if(l.is_payment_element_enabled())try{var r=l.stripe.linkAutofillModal(l.elements);(0,n.default)(document.body).on("keyup",'[name="billing_email"]',(function(e){r.launch({email:e.currentTarget.value})})),wcStripeLinkParams.launchLink&&r.launch({email:(0,n.default)('[name="billing_email"]').val()}),wcStripeLinkParams.linkIconEnabled&&((0,n.default)("#billing_email").addClass("stripe-link-icon-container"),(0,n.default)("#billing_email").after((0,n.default)(wcStripeLinkParams.linkIcon))),r.on("autofill",(function(e){var t=e.value,r=t.shippingAddress,i=void 0===r?null:r,o=t.billingAddress;if(i){var s=a({name:i.name},i.address);l.populate_shipping_fields(s)}if(o){var u=a({name:o.name},o.address);l.populate_billing_fields(u)}l.fields.toFormFields(),l.set_payment_method(l.gateway_id),l.show_new_payment_method(),l.hide_save_card(),i&&l.maybe_set_ship_to_different(),(0,n.default)('[name="terms"]').prop("checked",!0),l.fields.required("billing_phone")&&l.fields.isEmpty("billing_phone")||l.get_form().trigger("submit")}))}catch(e){console.log(e)}}))})()})();
//# sourceMappingURL=link-checkout.js.map