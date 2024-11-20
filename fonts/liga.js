/* A polyfill for browsers that don't support ligatures. */
/* The script tag referring to this file must be placed before the ending body tag. */

/* To provide support for elements dynamically added, this script adds
   method 'icomoonLiga' to the window object. You can pass element references to this method.
*/
(function () {
    'use strict';
    function supportsProperty(p) {
        var prefixes = ['Webkit', 'Moz', 'O', 'ms'],
            i,
            div = document.createElement('div'),
            ret = p in div.style;
        if (!ret) {
            p = p.charAt(0).toUpperCase() + p.substr(1);
            for (i = 0; i < prefixes.length; i += 1) {
                ret = prefixes[i] + p in div.style;
                if (ret) {
                    break;
                }
            }
        }
        return ret;
    }
    var icons;
    if (!supportsProperty('fontFeatureSettings')) {
        icons = {
            'home': '&#xe900;',
            'house': '&#xe900;',
            'home3': '&#xe902;',
            'house3': '&#xe902;',
            'pencil': '&#xe905;',
            'write': '&#xe905;',
            'pen': '&#xe908;',
            'write3': '&#xe908;',
            'image': '&#xe90d;',
            'picture': '&#xe90d;',
            'images': '&#xe90e;',
            'pictures': '&#xe90e;',
            'camera': '&#xe90f;',
            'photo': '&#xe90f;',
            'play': '&#xe912;',
            'video': '&#xe912;',
            'file-text': '&#xe922;',
            'file': '&#xe922;',
            'file-empty': '&#xe924;',
            'file3': '&#xe924;',
            'paste': '&#xe92d;',
            'clipboard-file': '&#xe92d;',
            'price-tag': '&#xe935;',
            'cart': '&#xe93a;',
            'purchase': '&#xe93a;',
            'phone': '&#xe942;',
            'telephone': '&#xe942;',
            'envelop': '&#xe945;',
            'mail': '&#xe945;',
            'location': '&#xe947;',
            'map-marker': '&#xe947;',
            'history': '&#xe94d;',
            'time': '&#xe94d;',
            'clock': '&#xe94e;',
            'time2': '&#xe94e;',
            'alarm': '&#xe950;',
            'time4': '&#xe950;',
            'stopwatch': '&#xe952;',
            'time5': '&#xe952;',
            'calendar': '&#xe953;',
            'date': '&#xe953;',
            'user': '&#xe971;',
            'profile2': '&#xe971;',
            'users': '&#xe972;',
            'group': '&#xe972;',
            'hour-glass': '&#xe979;',
            'loading': '&#xe979;',
            'spoon-knife': '&#xe9a3;',
            'food': '&#xe9a3;',
            'bin': '&#xe9ac;',
            'trashcan': '&#xe9ac;',
            'airplane': '&#xe9af;',
            'travel': '&#xe9af;',
            'clipboard': '&#xe9b8;',
            'board': '&#xe9b8;',
            'cross': '&#xea0f;',
            'cancel': '&#xea0f;',
            'checkmark': '&#xea10;',
            'tick': '&#xea10;',
            'checkmark2': '&#xea11;',
            'tick2': '&#xea11;',
            'play3': '&#xea1c;',
            'player8': '&#xea1c;',
            'share2': '&#xea82;',
            'social': '&#xea82;',
            'mail2': '&#xea83;',
            'contact2': '&#xea83;',
            'mail3': '&#xea84;',
            'contact3': '&#xea84;',
            'google': '&#xea88;',
            'brand2': '&#xea88;',
            'google2': '&#xea89;',
            'brand3': '&#xea89;',
            'facebook': '&#xea90;',
            'brand10': '&#xea90;',
            'facebook2': '&#xea91;',
            'brand11': '&#xea91;',
            'instagram': '&#xea92;',
            'brand12': '&#xea92;',
            'whatsapp': '&#xea93;',
            'brand13': '&#xea93;',
            'twitter': '&#xea96;',
            'brand16': '&#xea96;',
            'feed2': '&#xea9b;',
            'rss': '&#xea9b;',
            'feed3': '&#xea9c;',
            'rss2': '&#xea9c;',
            'youtube': '&#xea9d;',
            'brand21': '&#xea9d;',
            'youtube2': '&#xea9e;',
            'brand22': '&#xea9e;',
            'tumblr': '&#xeab9;',
            'brand49': '&#xeab9;',
            'tumblr2': '&#xeaba;',
            'brand50': '&#xeaba;',
            'linkedin': '&#xeac9;',
            'brand64': '&#xeac9;',
            'linkedin2': '&#xeaca;',
            'brand65': '&#xeaca;',
            'pinterest': '&#xead1;',
            'brand72': '&#xead1;',
            'pinterest2': '&#xead2;',
            'brand73': '&#xead2;',
          '0': 0
        };
        delete icons['0'];
        window.icomoonLiga = function (els) {
            var classes,
                el,
                i,
                innerHTML,
                key;
            els = els || document.getElementsByTagName('*');
            if (!els.length) {
                els = [els];
            }
            for (i = 0; ; i += 1) {
                el = els[i];
                if (!el) {
                    break;
                }
                classes = el.className;
                if (/icon-/.test(classes)) {
                    innerHTML = el.innerHTML;
                    if (innerHTML && innerHTML.length > 1) {
                        for (key in icons) {
                            if (icons.hasOwnProperty(key)) {
                                innerHTML = innerHTML.replace(new RegExp(key, 'g'), icons[key]);
                            }
                        }
                        el.innerHTML = innerHTML;
                    }
                }
            }
        };
        window.icomoonLiga();
    }
}());
