<style>
    @font-face {
        font-family: NexaBold;
        src: url('<?= get_template_directory_uri() ?>/assets/fonts/SVN-Nexa-Bold.ttf')
    }

    @font-face {
        font-family: FesterBold;
        src: url('<?= get_template_directory_uri() ?>/assets/fonts/new/SanFranciscoDisplay-Bold.otf')
    }

    @font-face {
        font-family: SanFranciscoDisplayBold;
        src: url('<?= get_template_directory_uri() ?>/assets/fonts/new/SanFranciscoDisplay-Medium.otf')
    }

    @font-face {
        font-family: SanFranciscoDisplayMedium;
        src: url('<?= get_template_directory_uri() ?>/assets/fonts/San-Francisco-Display-Medium.ttf')
    }

    @font-face {
        font-family: SanFranciscoDisplayLight;
        src: url('<?= get_template_directory_uri() ?>/assets/fonts/SF-Pro-Display-Light.ttf')
    }

    @font-face {
        font-family: SanFranciscoDisplayBlack;
        src: url('<?= get_template_directory_uri() ?>/assets/fonts/SF-Pro-Display-Black.otf')
    }

    @font-face {
        font-family: SanFranciscoDisplayRegular;
        src: url('<?= get_template_directory_uri() ?>/assets/fonts/SanFranciscoDisplayRegular.ttf')
    }

    @font-face {
        font-family: SanFranciscoDisplayUltra;
        src: url('<?= get_template_directory_uri() ?>/assets/fonts/SF-Pro-Display-Ultralight.otf')
    }

    @font-face {
        font-family: SFHeavy;
        src: url("<?= get_template_directory_uri() ?>/assets/fonts/SF-Pro-Display-Heavy.ttf")
    }

    @font-face {
        font-family: SanFranciscoDisplayThin;
        src: url("<?= get_template_directory_uri() ?>/assets/fonts/SF-Pro-Display-Thin.otf")
    }

    a {
        color: #0463be
    }

    img {
        max-width: 100%
    }

    .title {
        background: #0463be;
        padding: 10px 20px 10px 20px;
        font-weight: 700;
        color: #fff;
        text-align: center;
        font-family: FesterBold;
        vertical-align: middle;
        letter-spacing: 2px
    }

    .section {
        padding-bottom: 20px
    }

    #color3 {
        background-color: transparent
    }

    .hexagon-wrapper {
        text-align: center;
        margin: 10px;
        position: relative;
        display: inline-block
    }

    .hexagon {
        height: 100%;
        width: calc(100% * .57735);
        display: inline-block;
        border-top: 5px solid #0463be;
        border-bottom: 5px solid #0463be
    }

    .hexagon:before {
        position: absolute;
        top: 0;
        right: calc((100% / 2) - ((100% * .57735) / 2));
        background-color: inherit;
        height: inherit;
        width: inherit;
        content: '';
        transform: rotateZ(60deg);
        border-top: 5px solid #0463be;
        border-bottom: 5px solid #0463be
    }

    .hexagon:after {
        position: absolute;
        top: 0;
        right: calc((100% / 2) - ((100% * .57735) / 2));
        background-color: inherit;
        height: inherit;
        width: inherit;
        content: '';
        transform: rotateZ(-60deg);
        border-top: 5px solid #0463be;
        border-bottom: 5px solid #0463be
    }

    .hexagon-wrapper img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 65px
    }

    @media only screen and (min-width: 728px) {
        #hex3 {
            width: 150px;
            height: 150px
        }

        .hexagon-wrapper img {
            margin-top: 35px
        }

        .ourservice {
            margin-top: 40px;
            margin-bottom: 40px
        }

        .ourservice .ser-text {
            font-family: SanFranciscoDisplayBold;
            width: 80%;
            margin: 0 auto
        }
    }

    @media only screen and (max-width: 727px) {
        #hex3 {
            width: 100px;
            height: 100px
        }

        .hexagon-wrapper img {
            margin-top: 20px
        }

        .ourservice .ser-text {
            font-family: SanFranciscoDisplayRegular;
            width: 80%;
            margin: 0 auto
        }
    }

    .categories .category-items {
        font-size: 24px
    }

    .categories .heading {
        font-weight: 700;
        padding: 15px;
        font-family: SanFranciscoDisplayBold
    }

    .categories .chan {
        background-image: linear-gradient(45deg, transparent 50%, #00f 50%), linear-gradient(135deg, #00f 50%, transparent 50%), linear-gradient(to right, #b2cfec, #b2cfec)
    }

    .categories .le {
        background-image: linear-gradient(45deg, transparent 50%, #00f 50%), linear-gradient(135deg, #00f 50%, transparent 50%), linear-gradient(to right, transparent, transparent)
    }

    .categories select {
        background-color: #fff;
        border: thin solid #c7c7c7;
        border-left: none;
        border-right: none;
        border-bottom: none;
        display: inline-block;
        font: inherit;
        line-height: 2.5em;
        padding: 0 3.5em 0 1em;
        width: 100%;
        font-weight: 700;
        margin: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-appearance: none;
        -moz-appearance: none
    }

    .categories select.classic {
        background-position: calc(100% - 25px) calc(1em + 5px), calc(100% - 20px) calc(1em + 5px), 100% 0;
        background-size: 5px 5px, 5px 5px, 2.5em 3.5em;
        background-repeat: no-repeat
    }

    .categories {
        padding-top: 25px;
        background: #0463be
    }

    .categories .albumCate {
        margin-bottom: 0
    }

    .categories .albumCate img {
        width: 100%;
        max-height: 166px;
        margin-bottom: 25px
    }

    .categories .categoryBox {
        padding-left: 0;
        padding-right: 0;
        background: #fff;
        margin-top: -25px;
        margin-bottom: 0;
        border: 1px solid #c5c5c5;
        font-family: SanFranciscoDisplayBold
    }

    .paint-text .techno-left h6 {
        font-family: SanFranciscoDisplayBold;
        text-align: justify
    }

    .paint-text .techno-right:last-child {
        width: calc(100% + 15px)
    }

    .paint-text .techno-right {
        width: 100%;
        height: 100%
    }

    .paint-text .techno-left .month {
        background: #fff;
        padding: 2px 10px 2px 10px;
        max-width: 80px
    }

    .paint-text .techno-left p {
        font-size: 13px;
        font-family: SanFranciscoDisplayLight;
        text-align: justify;
        margin-top: 20px
    }

    .paint-text .techno-left .title {
        font-size: 14px
    }

    .paint-text .techno-left {
        background: #fdb301;
        padding: 20px;
        opacity: .9
    }

    .feature-news {
        padding-top: 20px
    }

    .feature-news p {
        font-size: 13px
    }

    .feature-news {
        background: #f4f4f4
    }

    .our-team h6 {
        margin-top: 20px;
        font-family: SanFranciscoDisplayBold
    }

    .our-team p {
        font-size: 13px;
        font-family: SanFranciscoDisplayLight;
        margin: 0;
        margin-bottom: 10px
    }

    .footer {
        background: #0463be;
        padding-top: 30px
    }

    .footer .social {
        float: left;
        text-align: center;
        width: 100%;
        margin-top: 20px
    }

    .footer .footer-info li a {
        font-family: SanFranciscoDisplayRegular;
        text-transform: uppercase;
        margin-left: -40px
    }

    .footer .footer-info {
        margin-top: 20px
    }

    @media only screen and (min-width: 728px) {
        .footer .product-list {
            margin-left: 40px
        }
    }

    .footer .footer-list li {
        list-style: none
    }

    a:hover {
        text-decoration: none;
        color: #a1a9b0
    }

    .footer .footer-list li a {
        font-family: SanFranciscoDisplayRegular;
        color: #fff
    }

    .footer .company-information ul {
        font-family: SanFranciscoDisplayRegular;
        margin-left: -20px
    }

    .footer .company-information h6 {
        font-family: SanFranciscoDisplayRegular
    }

    .footer .company-information {
        color: #fff
    }

    .menu-header .menu-mobile .navbar-toggler-icon {
        color: #fff
    }

    .menu-header .menu-mobile {
        border: 1px solid #fff
    }

    @media only screen and (min-width: 728px) {
        .menu-header .mainmenu {
            float: right !important
        }

        .menu-header .mainmenu li {
            float: left;
            padding-left: 15px;
            list-style: none
        }

        .menu-header .mainmenu li a:last-child {
            padding-right: 0
        }
    }

    .menu-header .mainmenu li a {
        text-transform: uppercase;
        color: #fff;
        font-family: SFHeavy
    }

    .menu-header .mainmenu li a:hover {
        color: #c5c5c5
    }

    .menu-header .mainmenu {
        color: #fff;
        padding-bottom: 0;
        margin-bottom: 0
    }

    @media only screen and (min-width: 728px) {
        .menu-header .mobilemenu {
            display: block
        }
    }

    section.slider {
        position: relative
    }

    .slider .bottom-bg {
        position: absolute;
        bottom: 40px;
        width: 100%;
        left: 0
    }

    .slider .bottom-bg img {
        width: 100%
    }

    .banner-post {
        position: relative
    }

    .banner-post .header-title-2 {
        width: 100%;
        position: absolute;
        top: 35%;
        text-align: center;
        font-weight: 700;
        font-family: SanFranciscoDisplayBold;
        color: #0463be
    }

    .banner-post .header-title {
        width: 100%;
        position: absolute;
        top: 35%;
        text-align: center;
        font-weight: 700;
        font-family: SanFranciscoDisplayBold;
        color: #fff;
        text-transform: uppercase
    }

    @media only screen and (min-width: 728px) {
        .banner-post .header-title {
            font-size: 100px;
            text-shadow: 2px 2px 5px #000
        }

        .banner-post .header-title-2 {
            font-size: 100px;
            text-shadow: 2px 2px 5px #000
        }
    }

    .banner-post .news-bottom-bg {
        position: absolute;
        bottom: 20px;
        width: 100%;
        left: 0
    }

    .breadcrumb {
        background: 0 0
    }

    .breadcrumb a {
        color: #0463be
    }

    .post-title {
        font-family: SanFranciscoDisplayMedium;
        margin: 10px 0 10px 0;
        color: #0463be
    }

    .lef-sidebar-title {
        font-size: 18px;
        color: #0463be;
        font-family: SanFranciscoDisplayBlack;
        text-transform: uppercase
    }

    .bottom-divide {
        width: 70%;
        display: block;
        height: 1px;
        border: 0;
        border-top: 4px solid #0463be
    }

    .raleted-box .raleted-title {
        margin: 15px 0 15px 0;
        font-weight: 400;
        font-family: SanFranciscoDisplayBold
    }

    .color-header {
        background: #0463be;
        padding: 10px 0 5px 0;
        color: #fff;
        font-family: SanFranciscoDisplayBold
    }

    .color-category {
        margin-top: 20px;
        margin-bottom: 20px
    }

    .color-category p {
        padding: 10px;
        color: #fff;
        font-weight: 700;
        background: #0463be
    }

    .color-large-title {
        font-size: 36px;
        font-family: SanFranciscoDisplayBold
    }

    @media only screen and (min-width: 728px) {
        .color-large-title {
            padding-left: 20px
        }
    }

    .left-right-0 {
        padding-left: 0;
        padding-right: 0
    }

    .tuyendung-child {
        margin-top: 40px;
        -webkit-box-shadow: 10px 10px 5px 0 rgba(0, 0, 0, .39);
        -moz-box-shadow: 10px 10px 5px 0 rgba(0, 0, 0, .39);
        box-shadow: 10px 10px 5px 0 rgba(0, 0, 0, .39);
        width: 95%
    }

    .tintuc-heading {
        margin-top: 20px;
        background: #0463be;
        padding: 10px;
        color: #fff;
        font-family: SanFranciscoDisplayBold
    }

    .company-duan-title {
        margin: 10px;
        font-family: SanFranciscoDisplayBold;
        text-transform: uppercase;
        font-weight: 700
    }

    .video-title {
        margin-top: 10px;
        padding: 10px;
        color: #fff;
        font-family: SanFranciscoDisplayBold;
        text-transform: uppercase;
        background: #0463be
    }

    .product .small-image {
        border: 7px solid #0463be;
        width: 100%;
        height: 150px
    }

    .product .large-image {
        border: 10px solid #0463be
    }

    .product .star {
        font-size: 18px;
        font-family: SanFranciscoDisplayUltra;
        color: #0463be
    }

    .product .price {
        font-family: SanFranciscoDisplayMedium;
        font-size: 25px;
        color: red
    }

    .product .info {
        padding: 5px;
        border-top: 2px solid #0463be;
        border-bottom: 2px solid #0463be
    }

    .recent-product-title {
        font-family: SanFranciscoDisplayBold;
        color: #0463be;
        margin-bottom: 20px
    }

    hr {
        display: block;
        height: 1px;
        border: 0;
        border-top: 2px solid #0463be;
        margin: 1em 0;
        padding: 0
    }

    .post-title {
        margin-top: 10px
    }

    @media only screen and (max-width: 728px) {
        #news-features h6 {
            margin-top: 10px
        }

        .post-title {
            margin-top: 10px
        }
    }

    #mobileToog {
        top: 0;
        right: 0;
        position: absolute;
        margin-top: -55px
    }

    .copyright {
        background: #0373de;
        padding: 15px;
        color: #fff;
        font-family: SanFranciscoDisplayThin;
        text-align: center
    }

    .sidenav {
        position: absolute;
        height: 100%;
        z-index: 99991;
        top: 0;
        left: 0;
        background-color: #357dbe;
        overflow-x: hidden;
        padding-top: 60px;
        transition: .5s;
        width: 60%
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #fff;
        display: block;
        transition: .3s
    }

    .sidenav a:hover {
        color: #c7c7c7
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 5px;
        font-size: 36px;
        float: right
    }

    .mobilediv {
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 99990;
        transition: margin-left .5s;
        margin-left: -100%
    }

    .closemobilenav {
        height: 100%;
        background: 0 0;
        opacity: .7;
        z-index: 99992
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px
        }

        .sidenav a {
            font-size: 18px
        }
    }

    .sidenav a {
        font-family: SFHeavy;
        font-size: 18px;
        text-transform: uppercase
    }

    .title-product {
        font-family: SanFranciscoDisplayMedium
    }

    .header-product {
        text-transform: uppercase;
        font-size: 25px;
        color: #0463be;
        font-family: SanFranciscoDisplayBold
    }

    .product-linebox {
        border: solid 2px #0463be;
        background: #0463be
    }

    .product-linechild {
        left: 100px;
        top: -4px;
        height: 10px;
        width: 40px;
        background: #0463be;
        position: absolute
    }

    @media screen and (min-width: 764px) {
        .imgnexpre {
            position: absolute;
            right: 15px;
            margin-top: 15px
        }

        .imageduan {
            height: 350px;
            width: 100%
        }

        .imagesingleduan {
            height: 400px;
            width: 100%
        }
    }

    @media screen and (max-width: 764px) {
        .imgnexpre {
            position: absolute;
            right: 15px;
            margin-top: -35px
        }

        .imageduan {
            height: auto;
            width: 100%
        }

        .imagesingleduan {
            height: auto;
            width: 100%
        }
    }

    .product-area .category-header {
        margin-top: 30px
    }

    .product-area .category-header .category-header-title {
        color: #fff;
        padding-left: 20px;
        font-size: 16px;
        height: 40px;
        line-height: 40px;
        text-transform: uppercase
    }

    .product-area .product-box {
        border: 1px solid #c5c6c7;
        box-shadow: 5px 5px 5px #c5c6c7;
        max-height: 410px
    }

    .product-area .product-box .product-sumary .readmore button {
        background: 0 0;
        border: 2px solid #007bff;
        color: #007bff;
        cursor: pointer
    }

    .product-area .product-box .product-sumary .readmore button:hover {
        background: #007bff;
        border: 2px solid #007bff;
        color: #fff
    }

    .product-area .product-box .product-sumary .readmore {
        margin-top: 20px;
        font-size: 16px
    }

    .product-area .product-box .product-sumary {
        margin-top: 20px;
        margin-bottom: 20px
    }

    .product-area .product-box .product-sumary .product-title {
        margin-top: 10px;
        text-transform: uppercase
    }

    .product-area .product-box .product-sumary small {
        margin-bottom: 20px;
        font-family: SanFranciscoDisplayThin;
        font-style: italic;
        color: #c7c7c7
    }

    .product-area .product-box .product-sumary h4 {
        font-family: SanFranciscoDisplayBold;
        font-size: 18px
    }
</style>