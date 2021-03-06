(function() {
    var t, e, r, n, a, u, i = function(t, e) {
        return function() {
            return t.apply(e, arguments)
        }
    };
    e = function() {
        function t() {
            this.update = i(this.update, this)
        }
        return t.prototype.update = function(t) {
            var e, r, a;
            for (r in t) a = t[r], "items" !== r && (this[r] = a);
            return this.items = function() {
                var r, a, u, i;
                for (u = t.items, i = [], r = 0, a = u.length; a > r; r++) e = u[r], i.push(new n(e));
                return i
            }()
        }, t
    }(), n = function() {
        function t(t) {
            this.propertyArray = i(this.propertyArray, this), this.update = i(this.update, this), this.update(t)
        }
        return t.prototype.update = function(t) {
            var e, n;
            for (e in t) n = t[e], "properties" !== e && (this[e] = n);
            return this.properties = r.Utils.extend({}, t.properties)
        }, t.prototype.propertyArray = function() {
            var t, e, r, n;
            r = this.properties, n = [];
            for (t in r) e = r[t], n.push({
                name: t,
                value: e
            });
            return n
        }, t
    }(), r = {
        settings: {
            debug: !1,
            dataAPI: !0,
            requestBodyClass: null,
            rivetsModels: {},
            moneyFormat: null,
            moneyWithCurrencyFormat: null
        },
        cart: new e
    }, r.init = function(t, e) {
        return null == e && (e = {}), r.configure(e), r.Utils.log("Initialising CartJS."), r.cart.update(t), r.settings.dataAPI && (r.Utils.log('"dataAPI" setting is true, initialising Data API.'), r.Data.init()), r.settings.requestBodyClass && (r.Utils.log('"requestBodyClass" set, adding event listeners.'), $(document).on("cart.requestStarted", function() {
            return $("body").addClass(r.settings.requestBodyClass)
        }), $(document).on("cart.requestComplete", function() {
            return $("body").removeClass(r.settings.requestBodyClass)
        })), r.Rivets.init()
    }, r.configure = function(t) {
        return null == t && (t = {}), r.Utils.extend(r.settings, t)
    }, r.Utils = {
        log: function() {
            return r.Utils.console(console.log, arguments)
        },
        error: function() {
            return r.Utils.console(console.error, arguments)
        },
        console: function(t, e) {
            return r.settings.debug && "undefined" != typeof console && null !== console ? (e = Array.prototype.slice.call(e), e.unshift("[CartJS]:"), t.apply(console, e)) : void 0
        },
        wrapKeys: function(t, e, r) {
            var n, a, u;
            null == e && (e = "properties"), u = {};
            for (n in t) a = t[n], u["" + e + "[" + n + "]"] = null != r ? r : a;
            return u
        },
        unwrapKeys: function(t, e, r) {
            var n, a, u, i;
            null == e && (e = "properties"), a = {};
            for (n in t) i = t[n], u = n.replace("" + e + "[", "").replace("]", ""), a[u] = null != r ? r : i;
            return a
        },
        extend: function(t, e) {
            var r, n;
            for (r in e) n = e[r], t[r] = n;
            return t
        },
        clone: function(t) {
            var e, r;
            if (null == t || "object" != typeof t) return t;
            r = new t.constructor;
            for (e in t) r[e] = clone(t[e]);
            return r
        },
        isArray: Array.isArray || function(t) {
            return "[object Array]" === {}.toString.call(t)
        },
        ensureArray: function(t) {
            return r.Utils.isArray(t) ? t : null != t ? [t] : []
        },
        formatMoney: function(t, e) {
            var r;
            return null != (null != (r = window.Shopify) ? r.formatMoney : void 0) ? Shopify.formatMoney(t, e) : t
        },
        getSizedImageUrl: function(t, e) {
            var r, n;
            return null != (null != (r = window.Shopify) && null != (n = r.Image) ? n.getSizedImageUrl : void 0) ? Shopify.Image.getSizedImageUrl(t, e) : t
        }
    }, u = [], a = !1, r.Queue = {
        add: function(t, e, n) {
            var i;
            return null == n && (n = {}), i = {
                url: t,
                data: e,
                type: n.type || "POST",
                dataType: n.dataType || "json",
                success: r.Utils.ensureArray(n.success),
                error: r.Utils.ensureArray(n.error),
                complete: r.Utils.ensureArray(n.complete)
            }, n.updateCart && i.success.push(r.cart.update), u.push(i), a ? void 0 : (jQuery(document).trigger("cart.requestStarted", [r.cart]), r.Queue.process())
        },
        process: function() {
            var t;
            return u.length ? (a = !0, t = u.shift(), t.complete = r.Queue.process, jQuery.ajax(t)) : (a = !1, void jQuery(document).trigger("cart.requestComplete", [r.cart]))
        }
    }, r.Core = {
        getCart: function(t) {
            return null == t && (t = {}), t.type = "GET", t.updateCart = !0, r.Queue.add("/cart.js", {}, t)
        },
        addItem: function(t, e, n, a) {
            var u;
            return null == e && (e = 1), null == n && (n = {}), null == a && (a = {}), u = r.Utils.wrapKeys(n), u.id = t, u.quantity = e, r.Queue.add("/cart/add.js", u, a), r.Core.getCart()
        },
        updateItem: function(t, e, n, a) {
            var u;
            return null == n && (n = {}), null == a && (a = {}), u = r.Utils.wrapKeys(n), u.line = t, null != e && (u.quantity = e), console.log(u), a.updateCart = !0, r.Queue.add("/cart/change.js", u, a)
        },
        removeItem: function(t, e) {
            return null == e && (e = {}), r.Core.updateItem(t, 0, {}, e)
        },
        updateItemById: function(t, e, n, a) {
            var u;
            return null == n && (n = {}), null == a && (a = {}), u = r.Utils.wrapKeys(n), u.id = t, null != e && (u.quantity = e), a.updateCart = !0, r.Queue.add("/cart/change.js", u, a)
        },
        updateItemQuantitiesById: function(t, e) {
            return null == t && (t = {}), null == e && (e = {}), e.updateCart = !0, r.Queue.add("/cart/update.js", {
                updates: t
            }, e)
        },
        removeItemById: function(t, e) {
            var n;
            return null == e && (e = {}), n = {
                id: t,
                quantity: 0
            }, e.updateCart = !0, r.Queue.add("/cart/change.js", n, e)
        },
        clear: function(t) {
            return null == t && (t = {}), t.updateCart = !0, r.Queue.add("/cart/clear.js", {}, t)
        },
        getAttribute: function(t, e) {
            return t in r.cart.attributes ? r.cart.attributes[t] : e
        },
        setAttribute: function(t, e, n) {
            var a;
            return null == n && (n = {}), a = {}, a[t] = e, r.Core.setAttributes(a, n)
        },
        getAttributes: function() {
            return r.cart.attributes
        },
        setAttributes: function(t, e) {
            return null == t && (t = {}), null == e && (e = {}), e.updateCart = !0, r.Queue.add("/cart/update.js", r.Utils.wrapKeys(t, "attributes"), e)
        },
        clearAttributes: function(t) {
            return null == t && (t = {}), t.updateCart = !0, r.Queue.add("/cart/update.js", r.Utils.wrapKeys(r.Core.getAttributes(), "attributes", ""), t)
        },
        getNote: function() {
            return r.cart.note
        },
        setNote: function(t, e) {
            return null == e && (e = {}), e.updateCart = !0, r.Queue.add("/cart/update.js", {
                note: t
            }, e)
        }
    }, t = jQuery(document), r.Data = {
        init: function() {
            return r.Data.setEventListeners("on"), r.Data.render(null, r.cart)
        },
        destroy: function() {
            return r.Data.setEventListeners("off")
        },
        setEventListeners: function(e) {
            return t[e]("click", "[data-cart-add]", r.Data.add), t[e]("click", "[data-cart-remove]", r.Data.remove), t[e]("click", "[data-cart-remove-id]", r.Data.removeById), t[e]("click", "[data-cart-update]", r.Data.update), t[e]("click", "[data-cart-update-id]", r.Data.updateById), t[e]("click", "[data-cart-clear]", r.Data.clear), t[e]("change", "[data-cart-toggle]", r.Data.toggle), t[e]("change", "[data-cart-toggle-attribute]", r.Data.toggleAttribute), t[e]("submit", "[data-cart-submit]", r.Data.submit), t[e]("cart.requestComplete", r.Data.render)
        },
        add: function(t) {
            var e;
            return t.preventDefault(), e = jQuery(this), r.Core.addItem(e.attr("data-cart-add"), e.attr("data-cart-quantity"))
        },
        remove: function(t) {
            var e;
            return t.preventDefault(), e = jQuery(this), r.Core.removeItem(e.attr("data-cart-remove"))
        },
        removeById: function(t) {
            var e;
            return t.preventDefault(), e = jQuery(this), r.Core.removeItemById(e.attr("data-cart-remove-id"))
        },
        update: function(t) {
            var e;
            return t.preventDefault(), e = jQuery(this), r.Core.updateItem(e.attr("data-cart-update"), e.attr("data-cart-quantity"))
        },
        updateById: function(t) {
            var e;
            return t.preventDefault(), e = jQuery(this), r.Core.updateItemById(e.attr("data-cart-update-id"), e.attr("data-cart-quantity"))
        },
        clear: function(t) {
            return t.preventDefault(), r.Core.clear()
        },
        toggle: function() {
            var t, e;
            return t = jQuery(this), e = t.attr("data-cart-toggle"), t.is(":checked") ? r.Core.addItem(e) : r.Core.removeItemById(e)
        },
        toggleAttribute: function() {
            var t, e;
            return t = jQuery(this), e = t.attr("data-cart-toggle-attribute"), r.Core.setAttribute(e, t.is(":checked") ? "Yes" : "")
        },
        submit: function(t) {
            var e, n, a, u;
            return t.preventDefault(), e = jQuery(this).serializeArray(), n = void 0, u = void 0, a = {}, jQuery.each(e, function(t, e) {
                return "id" === e.name ? n = e.value : "quantity" === e.name ? u = e.value : a[e.name] = e.value
            }), r.Core.addItem(n, u, r.Utils.unwrapKeys(a))
        },
        render: function(t, e) {
            var n;
            return n = {
                item_count: e.item_count,
                total_price: e.total_price,
                total_price_money: r.Utils.formatMoney(e.total_price, r.settings.moneyFormat),
                total_price_money_with_currency: r.Utils.formatMoney(e.total_price, r.settings.moneyWithCurrencyFormat)
            }, jQuery("[data-cart-render]").each(function() {
                var t;
                return t = jQuery(this), t.text(n[t.attr("data-cart-render")])
            })
        }
    }, "rivets" in window ? (r.Rivets = {
        views: [],
        init: function() {
            return r.Rivets.bindViews()
        },
        destroy: function() {
            return r.Rivets.unbindViews()
        },
        bindViews: function() {
            var t;
            return r.Utils.log("Rivets.js is present, binding views."), r.Rivets.unbindViews(), t = r.Utils.extend({
                cart: r.cart
            }, r.settings.rivetsModels), jQuery("[data-cart-view]").each(function() {
                return r.Rivets.views.push(rivets.bind(this, t))
            })
        },
        unbindViews: function() {
            var t, e, n, a;
            for (a = r.Rivets.views, e = 0, n = a.length; n > e; e++) t = a[e], t.unbind();
            return r.Rivets.views = []
        }
    }, rivets.formatters.eq = function(t, e) {
        return t === e
    }, rivets.formatters.lt = function(t, e) {
        return e > t
    }, rivets.formatters.gt = function(t, e) {
        return t > e
    }, rivets.formatters.not = function(t) {
        return !t
    }, rivets.formatters.empty = function(t) {
        return !t.length
    }, rivets.formatters.plus = function(t, e) {
        return parseInt(t) + parseInt(e)
    }, rivets.formatters.minus = function(t, e) {
        return parseInt(t) - parseInt(e)
    }, rivets.formatters.prepend = function(t, e) {
        return e + t
    }, rivets.formatters.append = function(t, e) {
        return t + e
    }, rivets.formatters.money = function(t) {
        return r.Utils.formatMoney(t, r.settings.moneyFormat)
    }, rivets.formatters.money_with_currency = function(t) {
        return r.Utils.formatMoney(t, r.settings.moneyWithCurrencyFormat)
    }, rivets.formatters.productImageSize = function(t, e) {
        return r.Utils.getSizedImageUrl(t, e)
    }) : r.Rivets = {
        init: function() {},
        destroy: function() {}
    }, r.factory = function(t) {
        return t.init = r.init, t.configure = r.configure, t.cart = r.cart, t.settings = r.settings, t.addItem = r.Core.addItem, t.updateItem = r.Core.updateItem, t.updateItemById = r.Core.updateItemById, t.updateItemQuantitiesById = r.Core.updateItemQuantitiesById, t.removeItem = r.Core.removeItem, t.clear = r.Core.clear, t.getAttribute = r.Core.getAttribute, t.setAttribute = r.Core.setAttribute, t.getAttributes = r.Core.getAttributes, t.setAttributes = r.Core.setAttributes, t.clearAttributes = r.Core.clearAttributes, t.getNote = r.Core.getNote, t.setNote = r.Core.setNote
    }, "object" == typeof exports ? r.factory(exports) : "function" == typeof define && define.amd ? define(["exports"], function(t) {
        return r.factory(this.CartJS = t), t
    }) : r.factory(this.CartJS = {})
}).call(this);
