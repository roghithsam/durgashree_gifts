<?php
/*
Plugin Name: Custom DSG Styles
Plugin URI: https://profiles.wordpress.org/roghithsam/
Description: Customizes CSS for Wordpress pages.
Version: 1.0
Author: Roghithsam
Author URI: https://roghithsam.zhark.in
*/

function custom_dsg_styles() {

        wp_add_inline_style('woocommerce-dsg-general', '

            /* Zhark WP DEV by Roghithsam */
            
            /* archieve*/

            li.product{
            box-shadow: 0 2px 7px #dfdfdf;
                background: #fafafa;
                border-radius:5px;
            }
            li.product img{
                border-radius:5px 5px 0px 0px;
            }

            div#secondary {

                box-shadow: 0 2px 7px #dfdfdf;
                background: #fafafa;
                border-radius:5px;
                padding:10px;
            }

            .woostify-sorting .woostify-toolbar-left, .woostify-sorting form.woocommerce-ordering {
                margin-bottom: 10px;
            }

            .woostify-sorting{
                border-bottom:2px solid #fafafa;
                margin-bottom: 10px;
            }


            a.add_to_cart_button {
                display: inline-block;
                padding:2px 20px!important;
                border: 1px solid;
            }

            span.woostify-tag-on-sale{
                border-radius:50px;
            }


            /* general */
            .topbar-item.topbar-left {
                font-size: 16px;
                color: white;
                  animation: moveIcon 25s linear infinite;
            }

            .topbar-item.topbar-left i {
                font-size: 18px;
                margin-left: 5px;
                position: relative;
                color:white;
            }

            /* Ship and plane movement animation */
            @keyframes moveIcon {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(900px); /* Adjust as needed */
                }
            }

             /* Single product Page */
            ul.tabs.wc-tabs {
                border-bottom: 1px solid #7788993d;
            }


            .woocommerce-tabs.wc-tabs-wrapper li.active {
                margin-bottom: -1px;
                background-color: azure;
                border-top: 1px solid;
                border-right: 1px solid;
                border-left: 1px solid;
                border-bottom: 1px solid azure;
                border-radius: 5px 5px 0px 0px;
                padding: 0px 10px;
            }

            @media (max-width: 719px) {
                .woocommerce-tabs .tabs li {
                    margin-bottom: -1px;
                    width: fit-content;
                }
                .woocommerce-tabs .tabs li a{
                border: 0px; 
                }

             /* Home Page */

            figure.elementor-image-box-img {
                width: 80% !important;
            }
            .elementor-element-bd33b00.e-con-full.e-flex.e-con.e-child {
                margin-left:10px;
                flex-direction: row;
                justify-content: center;
                margin-bottom:50px;
                width: 95%;
            }
            .elementor-element-bd33b00 > div{
                text-wrap:nowrap;
                width:47%;
                padding:10px;
                border:1px solid #ddd;
            }
            .elementor-image-box-wrapper{
                text-align:center !important;
            }

            .elementor-element-31c5ab6 .e-con-inner{
                align-content: center !important;
            }

            a img.product-loop-image {
                width: 100%;
            }
            }

            .elementor-element.elementor-element-affce9e.e-flex.e-con-boxed.e-con.e-parent.e-lazyloaded {
                padding:50px 0px;
                background-color: #e6e6ff;
            }

            .elementor-element.elementor-element-31c5ab6.e-flex.e-con-boxed.e-con.e-parent.e-lazyloaded {
                background-color: #e6e6ff;
            }

        ');
}

add_action('wp_enqueue_scripts', 'custom_dsg_styles');
?>
