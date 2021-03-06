/*eslint-env es6*/
/*global jQuery, document*/

/*!
 * Bootstrap 4 multi dropdown navbar (https://bootstrapthemes.co/demo/resource/bootstrap-4-multi-dropdown-navbar/)
 * Copyright 2017.
 * Licensed under the GPL license
 */


jQuery(document).ready(function ($) {
    'use strict';

    $('.dropdown-menu a.dropdown-toggle').on('click', function () {
        var $el = $(this),
            $parent = $el.offsetParent(".dropdown-menu"),
            $subMenu = $el.next(".dropdown-menu");

        if (!$el.next().hasClass('show')) {
            $el.parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        $subMenu.toggleClass('show');

        $el.parent("li").toggleClass('show');

        $el.parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function () {
            $('.dropdown-menu .show').removeClass("show");
        });

        if (!$parent.parent().hasClass('navbar-nav')) {
            $el.next().css({ "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 });
        }

        return false;
    });
});
