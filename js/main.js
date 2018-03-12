// (function($){
//     $(document).ready(function(){
//         var icon = $(".shop-cart-icon");
//         var modal = $(".xoo-wsc-modal");
//         var body = $("body");
//
//         icon.click(function(){
//             modal.addClass( 'xoo-wsc-active' );
//             body.addClass( 'xoo-wsc-active' );
//             })
//     });
// })(jQuery);
/*
(function($){
    $(document).ready(function(){
        var addtocart = $(".add_to_cart_button");
        var shopcarticon = $(".shop-cart-icon");
        addtocart.click(function(){
            shopcarticon.load("http://naja/wp-content/themes/naja/ajaxload.php");
        })

    });
})(jQuery); */
// (function($) {
//     $(function() {
//
//         $("#check").load("http://naja/checkout/");
//
//     })
// })(jQuery)
// (function($){
//     $(function(){
//         var steps = $(".checkout-display-steps-container>li");
//         var step1 = $(".checkout-steps-1");
//         var cart = $(".checker>div:nth-child(3)");
//         var cart_step = $(".multistep-nav.cart");
//         var empty = $(".checker .cart-empty");
//
//         steps.on ("click", function(){
//             setTimeout (function () {
//                 cart.addClass('hidden');
//                 cart_step.addClass('hidden');
//                 if (step1.hasClass('active')) {
//                     cart.removeClass('hidden');
//                     cart_step.removeClass('hidden');
//                 }
//             }, 10);
//
//             });
//         window.onload =  function() {
//             if (empty.hasClass('cart-empty')) {
//                 cart_step.addClass('hidden');
//             }
//         }
//     });
// })(jQuery);

(function($,window){
    $(function(){
        var shop = $("#shop-template");
        var title = $(".shop-title");
        var preload = $(".row.preload-hidden-container");
        var reference = $(".reference");
        var preload_product_page = $(".preload-product-page");
        var holder = $(".row-holder");
        var back_img = $(".single-product-img-1 .back-img");
        var reference_2 = $(".reference_2");
        var required = $("p.validate-required");
        var steps = $(".checkout-display-steps-container>li");
        var step1 = $(".checkout-steps-1");
        var cart = $(".checker>div:nth-child(3)");
        var cart_step = $(".multistep-nav.cart");
        var empty = $(".checker .cart-empty");
        var tab_left_1 = $("#tab_left_1");
        var tab_left_2 = $("#tab_left_2");
        var tab_left_3 = $("#tab_left_3");
        var tab_left_4 = $("#tab_left_4");
        var tab_right_1 = $("#tab_right_1");
        var tab_right_2 = $("#tab_right_2");
        var tab_right_3 = $("#tab_right_3");
        var tab_right_4 = $("#tab_right_4");
        var p_id_0 = $(".p-id-0");
        var p_id_1 = $(".p-id-1");
        var p_id_2 = $(".p-id-2");
        var p_id_3 = $(".p-id-3");
        var p_id_4 = $(".p-id-4");
        var p_id_5 = $(".p-id-5");
        var p_id_6 = $(".p-id-6");
        var p_id_7 = $(".p-id-7");
        var tab_0 = $('.nav-pills a[href="#tab_right_1"]');
        var tab_1 = $('.nav-pills a[href="#tab_left_1"]');
        var tab_2 = $('.nav-pills a[href="#tab_right_2"]');
        var tab_3 = $('.nav-pills a[href="#tab_left_2"]');
        var tab_4 = $('.nav-pills a[href="#tab_right_3"]');
        var tab_5 = $('.nav-pills a[href="#tab_left_3"]');
        var tab_6 = $('.nav-pills a[href="#tab_right_4"]');
        var tab_7 = $('.nav-pills a[href="#tab_left_4"]');

        p_id_0.on ("click", function() {
            tab_0.tab('show');
            setTimeout(function () {
                tab_left_1.addClass('lift-down');
                tab_right_1.addClass('lift-up');
                tab_left_2.removeClass('lift-down');
                tab_left_3.removeClass('lift-down');
                tab_left_4.removeClass('lift-down');
                tab_right_2.removeClass('lift-up');
                tab_right_3.removeClass('lift-up');
                tab_right_4.removeClass('lift-up');
            }, 300);
        });
        p_id_4.on ("click", function() {
            tab_1.tab('show');
            setTimeout(function () {
                tab_left_1.addClass('lift-down');
                tab_right_1.addClass('lift-up');
                tab_left_2.removeClass('lift-down');
                tab_left_3.removeClass('lift-down');
                tab_left_4.removeClass('lift-down');
                tab_right_2.removeClass('lift-up');
                tab_right_3.removeClass('lift-up');
                tab_right_4.removeClass('lift-up');
            }, 300);
        });
        p_id_1.on ("click", function() {
            tab_2.tab('show');
            setTimeout(function () {
                tab_left_2.addClass('lift-down');
                tab_right_2.addClass('lift-up');
                tab_left_1.removeClass('lift-down');
                tab_left_3.removeClass('lift-down');
                tab_left_4.removeClass('lift-down');
                tab_right_1.removeClass('lift-up');
                tab_right_3.removeClass('lift-up');
                tab_right_4.removeClass('lift-up');
            }, 300);
        });
        p_id_5.on ("click", function() {
            tab_3.tab('show');
            setTimeout(function () {
                tab_left_2.addClass('lift-down');
                tab_right_2.addClass('lift-up');
                tab_left_1.removeClass('lift-down');
                tab_left_3.removeClass('lift-down');
                tab_left_4.removeClass('lift-down');
                tab_right_1.removeClass('lift-up');
                tab_right_3.removeClass('lift-up');
                tab_right_4.removeClass('lift-up');
            }, 300);
        });
        p_id_2.on ("click", function() {
            tab_4.tab('show');
            setTimeout(function () {
                tab_left_3.addClass('lift-down');
                tab_right_3.addClass('lift-up');
                tab_left_1.removeClass('lift-down');
                tab_left_2.removeClass('lift-down');
                tab_left_4.removeClass('lift-down');
                tab_right_1.removeClass('lift-up');
                tab_right_2.removeClass('lift-up');
                tab_right_4.removeClass('lift-up');
            }, 300);
        });
        p_id_6.on ("click", function() {
            tab_5.tab('show');
            setTimeout(function () {
                tab_left_3.addClass('lift-down');
                tab_right_3.addClass('lift-up');
                tab_left_1.removeClass('lift-down');
                tab_left_2.removeClass('lift-down');
                tab_left_4.removeClass('lift-down');
                tab_right_1.removeClass('lift-up');
                tab_right_2.removeClass('lift-up');
                tab_right_4.removeClass('lift-up');
            }, 300);
        });
        p_id_3.on ("click", function() {
            tab_6.tab('show');
            setTimeout(function () {
                tab_left_4.addClass('lift-down');
                tab_right_4.addClass('lift-up');
                tab_left_1.removeClass('lift-down');
                tab_left_2.removeClass('lift-down');
                tab_left_3.removeClass('lift-down');
                tab_right_1.removeClass('lift-up');
                tab_right_2.removeClass('lift-up');
                tab_right_3.removeClass('lift-up');
            }, 300);
        });
        p_id_7.on ("click", function() {
            tab_7.tab('show');
            setTimeout(function () {
                tab_left_4.addClass('lift-down');
                tab_right_4.addClass('lift-up');
                tab_left_1.removeClass('lift-down');
                tab_left_2.removeClass('lift-down');
                tab_left_3.removeClass('lift-down');
                tab_right_1.removeClass('lift-up');
                tab_right_2.removeClass('lift-up');
                tab_right_3.removeClass('lift-up');
            }, 300);
        });
        steps.on ("click", function(){
            setTimeout (function () {
                cart.addClass('hidden');
                cart_step.addClass('hidden');
                if (step1.hasClass('active')) {
                    cart.removeClass('hidden');
                    cart_step.removeClass('hidden');
                }
            }, 10);

        });


        window.onload =  function() {
            tab_0.tab('show');
            setTimeout(function () {
                tab_left_1.addClass('lift-down');
                tab_right_1.addClass('lift-up');
                tab_left_2.removeClass('lift-down');
                tab_left_3.removeClass('lift-down');
                tab_left_4.removeClass('lift-down');
                tab_right_2.removeClass('lift-up');
                tab_right_3.removeClass('lift-up');
                tab_right_4.removeClass('lift-up');
            }, 300);
            $('.nav-pills a[href="#tab_left_1"]').tab('show');
            setTimeout(function () {
                tab_left_1.addClass('lift-down');
                tab_right_1.addClass('lift-up');
                tab_left_2.removeClass('lift-down');
                tab_left_3.removeClass('lift-down');
                tab_left_4.removeClass('lift-down');
                tab_right_2.removeClass('lift-up');
                tab_right_3.removeClass('lift-up');
                tab_right_4.removeClass('lift-up');
            }, 300);

            if (empty.hasClass('cart-empty')) {
                cart_step.addClass('hidden');
            }
            setTimeout(function () {
                preload.removeClass('preload-hidden-container');
            }, 1);
            setTimeout(function () {
                title.addClass('invis');
            }, 2000);
            setTimeout(function () {
                var block_height = reference.height() + 90 ;
                title.css('height', block_height);

            }, 2000);
            setTimeout(function () {
                preload_product_page.css ('position', 'relative');
                preload_product_page.css ('width', '100%');
                title.css ('display', 'none');
                holder.css ('display','none');

            }, 3000);
            setTimeout(function () {
                back_img.css('height', reference_2.height() - 1 )
            }, 2001);
            if (required.hasClass('validate-required')) {
                required.addClass('woocommerce-invalid');
            }
        };
        $( window ).resize(function() {
            back_img.css('height', reference_2.height() - 1 );
        });

    });
})(jQuery, window);

function goBack() {
    window.history.back();
};
// (function($){
//     $(document).ready(function(){
//         var required = $("p.validate-required");
//         window.onload =  function() {
//             if (required.hasClass('validate-required')) {
//                 required.addClass('woocommerce-invalid');
//             }
//         }
//
//     });
// })(jQuery);


