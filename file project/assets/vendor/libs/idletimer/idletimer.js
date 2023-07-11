/*! For license information please see idletimer.js.LICENSE.txt */
!function(){var e,t={};function i(e){return i="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},i(e)}(e=jQuery).idleTimer=function(t,n){var r;"object"===i(t)?(r=t,t=null):"number"==typeof t&&(r={timeout:t},t=null),n=n||document,r=e.extend({idle:!1,timeout:3e4,events:"mousemove keydown wheel DOMMouseScroll mousewheel mousedown touchstart touchmove MSPointerDown MSPointerMove"},r);var l=e(n),o=l.data("idleTimerObj")||{},a=function(t){var i=e.data(n,"idleTimerObj")||{};i.idle=!i.idle,i.olddate=+new Date;var r=e.Event((i.idle?"idle":"active")+".idleTimer");e(n).trigger(r,[n,e.extend({},i),t])},d=function(t){var i=e.data(n,"idleTimerObj")||{};if(("storage"!==t.type||t.originalEvent.key===i.timerSyncId)&&null==i.remaining){if("mousemove"===t.type){if(t.pageX===i.pageX&&t.pageY===i.pageY)return;if(void 0===t.pageX&&void 0===t.pageY)return;if(+new Date-i.olddate<200)return}clearTimeout(i.tId),i.idle&&a(t),i.lastActive=+new Date,i.pageX=t.pageX,i.pageY=t.pageY,"storage"!==t.type&&i.timerSyncId&&"undefined"!=typeof localStorage&&localStorage.setItem(i.timerSyncId,i.lastActive),i.tId=setTimeout(a,i.timeout)}},u=function(){var t=e.data(n,"idleTimerObj")||{};t.idle=t.idleBackup,t.olddate=+new Date,t.lastActive=t.olddate,t.remaining=null,clearTimeout(t.tId),t.idle||(t.tId=setTimeout(a,t.timeout))};if(null===t&&void 0!==o.idle)return u(),l;if(null===t);else{if(null!==t&&void 0===o.idle)return!1;if("destroy"===t)return function(){var t=e.data(n,"idleTimerObj")||{};clearTimeout(t.tId),l.removeData("idleTimerObj"),l.off("._idleTimer")}(),l;if("pause"===t)return function(){var t=e.data(n,"idleTimerObj")||{};null==t.remaining&&(t.remaining=t.timeout-(+new Date-t.olddate),clearTimeout(t.tId))}(),l;if("resume"===t)return function(){var t=e.data(n,"idleTimerObj")||{};null!=t.remaining&&(t.idle||(t.tId=setTimeout(a,t.remaining)),t.remaining=null)}(),l;if("reset"===t)return u(),l;if("getRemainingTime"===t)return function(){var t=e.data(n,"idleTimerObj")||{};if(t.idle)return 0;if(null!=t.remaining)return t.remaining;var i=t.timeout-(+new Date-t.lastActive);return i<0&&(i=0),i}();if("getElapsedTime"===t)return+new Date-o.olddate;if("getLastActiveTime"===t)return o.lastActive;if("isIdle"===t)return o.idle}return l.on((r.events+" ").split(" ").join("._idleTimer ").trim(),(function(e){d(e)})),r.timerSyncId&&e(window).on("storage",d),(o=e.extend({},{olddate:+new Date,lastActive:+new Date,idle:r.idle,idleBackup:r.idle,timeout:r.timeout,remaining:null,timerSyncId:r.timerSyncId,tId:null,pageX:null,pageY:null})).idle||(o.tId=setTimeout(a,o.timeout)),e.data(n,"idleTimerObj",o),l},e.fn.idleTimer=function(t){return this[0]?e.idleTimer(t,this[0]):this};var n=window;for(var r in t)n[r]=t[r];t.__esModule&&Object.defineProperty(n,"__esModule",{value:!0})}();