<?php if (wp_is_mobile()): ?>
    <script>
        function openNav() {
            document.getElementById("mobilediv").style.marginLeft = "0";
        }

        function closeNav() {
            document.getElementById("mobilediv").style.marginLeft = "-100%";
        }

        function openSub(id) {
            if (jQuery(".dropdown-content-mobile"+id).is(":visible")){
                jQuery(".dropdown"+id).find('i').removeClass('fa-caret-down');
                jQuery(".dropdown"+id).find('i').addClass('fa-caret-right');
            } else {
                jQuery(".dropdown"+id).find('i').removeClass('fa-caret-right');
                jQuery(".dropdown"+id).find('i').addClass('fa-caret-down');
            }
            jQuery(".dropdown-content-mobile"+id).slideToggle();
        }

    </script>
    <style>
        .dropdown{
            width: 100%;
        }
        .dropdown i {
            margin-left: 5px;
            font-size: 22px;
        }
        .dropdown-content-mobile {
            margin-left: 20px;
            width: 100%;
            display: none;
        }
        .dropdown-content-mobile a{
            font-size: 14px;
            font-weight: bold;
            font-family: SanFranciscoDisplayThin;
        }
    </style>
<?php endif; ?>


<?php if (!wp_is_mobile()): ?>
    <script>
        jQuery(window).scroll(function () {
            var sticky = jQuery('.menu-header'),
                scroll = jQuery(window).scrollTop();

            if (scroll >= 300) sticky.addClass('fixed-top');
            else sticky.removeClass('fixed-top');
        });
    </script>
<?php endif; ?>
