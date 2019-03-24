<div id="wpbody" role="main">

    <div id="wpbody-content" aria-label="Nội dung chính" tabindex="0" style="overflow: hidden;">

        <div class="wrap">
            <h1>BMI Software Dashboard</h1>


            <div id="welcome-panel" class="welcome-panel">
                <div class="welcome-panel-content">
                    <h2>BMI Theme Manager</h2>
                    <div class="welcome-panel-column-container">
                        <div class="welcome-panel-column">
                            <a class="button button-primary button-hero load-customize hide-if-no-customize"
                               href="<?= get_admin_url().'admin.php?page=bmi_contact' ?>">Danh sách liên hệ >>
                            </a>
                            <p class="hide-if-no-customize"></p>
                        </div>
                        <div class="welcome-panel-column">

                            <a class="button button-primary button-hero load-customize hide-if-no-customize"
                               href="<?= get_admin_url() . 'edit.php?post_type=bmi-duan' ?>">Danh sách dự án >>
                            </a>


                        </div>
                        <div class="welcome-panel-column welcome-panel-last">

                            <a class="button button-primary button-hero load-customize hide-if-no-customize" target="_blank"
                               href="<?= get_site_url() .'/wp-admin/customize.php' ?>">Tuỳ chỉnh website của bạn >>
                            </a>


                        </div>
                    </div>
                </div>
            </div>

            <div id="dashboard-widgets-wrap">
                <div id="dashboard-widgets" class="metabox-holder">
                    <div id="postbox-container-1" class="postbox-container">
                        <div id="normal-sortables" class="meta-box-sortables ui-sortable">
                            <div id="dashboard_right_now" class="postbox ">
                                <h2 class="hndle ui-sortable-handle"><span>Liên hệ</span></h2>
                                <div class="inside">
                                    <div class="main">
                                        <p>Module liên hệ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="postbox-container-2" class="postbox-container">
                        <div id="side-sortables" class="meta-box-sortables ui-sortable">
                            <div id="dashboard_quick_press" class="postbox ">

                                <h2 class="hndle ui-sortable-handle">
                                    <span>
                                        <span class="hide-if-no-js">Email</span>
                                    </span>
                                </h2>
                                <div class="inside">

                                    <div class="drafts">
                                        <ul>
                                            <li>
                                                <p>Module email</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="postbox-container-3" class="postbox-container">
                        <div id="column3-sortables" class="meta-box-sortables ui-sortable empty-container"
                             data-emptystring="Kéo các hộp vào đây"></div>
                    </div>
                    <div id="postbox-container-4" class="postbox-container">
                        <div id="column4-sortables" class="meta-box-sortables ui-sortable empty-container"
                             data-emptystring="Kéo các hộp vào đây"></div>
                    </div>
                </div>

                <input type="hidden" id="closedpostboxesnonce" name="closedpostboxesnonce" value="92df18e1f1"><input
                        type="hidden" id="meta-box-order-nonce" name="meta-box-order-nonce" value="b9edb2670a"></div>
            <!-- dashboard-widgets-wrap -->

        </div><!-- wrap -->

        <div class="clear"></div>
    </div><!-- wpbody-content -->
    <div class="clear"></div>
</div>