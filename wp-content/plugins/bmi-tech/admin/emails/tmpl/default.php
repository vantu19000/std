<?php
$items = isset($this->items)?$this->items:array();
?>


<div class="wrap">
    <h1 class="wp-heading-inline">Danh Sách Emails</h1>

    <a href="admin.php?page=bmi_emails&layout=compose" class="page-title-action"> Soạn email </a>

    <hr class="wp-header-end">

    <h2 class="screen-reader-text">Lọc danh sách bài đăng</h2>

    <form id="posts-filter" method="get">

        <input type="hidden" name="post_status" class="post_status_page" value="all">
        <input type="hidden" name="post_type" class="post_type_page" value="bmi-contact">


        <input type="hidden" id="_wpnonce" name="_wpnonce" value="481a6d11e2">
        <input type="hidden" name="_wp_http_referer" value="/duongthieu/realtop1/wp-admin/edit.php">
        <div class="tablenav top">

            <div class="alignleft actions bulkactions">
                <label for="bulk-action-selector-top" class="screen-reader-text">Lựa chọn thao tác hàng
                    loạt</label><select name="action" id="bulk-action-selector-top">
                    <option value="-1">Tác vụ</option>
                    <option value="trash">Bỏ vào thùng rác</option>
                </select>
                <input type="submit" id="doaction" class="button action" value="Áp dụng">
            </div>

            <div class="alignleft actions">
                <input type="text" name="search" placeholder="Email, Name" />
                </select><input type="submit" name="filter_action" id="post-query-submit" class="button" value="Lọc">
            </div>
            <h2 class="screen-reader-text">Điều hướng danh sách các bài viết</h2>
            <div class="tablenav-pages"><span class="displaying-num">35 mục</span>
                <span class="pagination-links"><span class="tablenav-pages-navspan" aria-hidden="true">«</span>
                <span class="tablenav-pages-navspan" aria-hidden="true">‹</span>
                <span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Trang hiện tại</label><input
                            class="current-page" id="current-page-selector" type="text" name="paged" value="1" size="1"
                            aria-describedby="table-paging"><span class="tablenav-paging-text"> trên <span class="total-pages">2</span></span></span>
                <a class="next-page" href="http://127.0.0.1:8080/duongthieu/realtop1/wp-admin/edit.php?paged=2"><span
                            class="screen-reader-text">Trang sau</span><span aria-hidden="true">›</span></a>
                <span class="tablenav-pages-navspan" aria-hidden="true">»</span></span>
            </div>
            <br class="clear">
        </div>
        <h2 class="screen-reader-text">Danh sách bài viết</h2>
        <table class="wp-list-table widefat fixed striped posts">
            <thead>
            <tr>
                <td id="cb" class="manage-column column-cb check-column">
                    <label class="screen-reader-text" for="cb-select-all-1">Chọn toàn bộ</label>
                    <input id="cb-select-all-1" type="checkbox">
                </td>
                <th scope="col" id="title" class="manage-column column-title column-primary sortable desc">
                    <a href="#">
                        <span>Tên</span>
                        <span class="sorting-indicator"></span>
                    </a>
                </th>
                <th scope="col" id="author" class="manage-column column-author">Email</th>
                <th scope="col" id="categories" class="manage-column column-categories">Số di động</th>
                <th scope="col" id="tags" class="manage-column column-tags">Lời nhắn</th>
                <th scope="col" id="date" class="manage-column column-date sortable asc">
                    <a href="#">
                        <span>Thời gian</span>
                        <span class="sorting-indicator"></span>
                    </a>
                </th>
            </tr>
            </thead>

            <tbody id="the-list">

            <?php if (count($items) > 0): ?>

			<?php foreach ($items AS $value): ?>

                <tr id="post-1" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-khong-phan-loai">

                    <th scope="row" class="check-column">
                        <label class="screen-reader-text" for="cb-select-1"><?= $value->fullname ?></label>
                        <input id="cb-select-1" type="checkbox" name="post[]" value="<?= $value->id ?>">
                        <div class="locked-indicator">
                            <span class="locked-indicator-icon" aria-hidden="true"></span>
                        </div>
                    </th>

                    <td class="title column-title has-row-actions column-primary page-title" data-colname="Tiêu đề">
                        <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
                        <strong>
                            <a class="row-title"
                               href="javascript:void(0)"
                               aria-label="“Chào tất cả mọi người!” (Chỉnh sửa)"><?= $value->fullname ?>
                            </a>
                        </strong>
						<?php if (1 == 2): ?>
                            <div class="row-actions">
                            <span class="edit">
                                <a href="#">Chỉnh sửa</a> | </span>
                                <span class="inline hide-if-no-js">
                                <a href="#" class="editinline">Sửa nhanh</a> | </span>
                                <span class="trash">
                                <a href="#" class="submitdelete">Xóa tạm</a> | </span>
                                <span class="view">
                                <a href="#" rel="bookmark" aria-label="Xem “Chào tất cả mọi người!”">Xem</a>
                            </span>
                            </div>
                            <button type="button" class="toggle-row"><span class="screen-reader-text">Hiển thị chi tiết</span></button>
						<?php endif; ?>
                    </td>


                    <td class="author column-author">
						<?= $value->email ?>
                    </td>
                    <td class="categories column-categories">
						<?= $value->mobile ?>
                    </td>
                    <td class="comments column-comments">
						<?= $value->message ?>
                    </td>
                    <td class="date column-date">Thời gian<br>
                        <abbr title="<?= $value->created_at ?>"><?= $value->created_at ?></abbr>
                    </td>
                </tr>

			<?php endforeach; ?>

            <?php else: ?>
            <tr>
                <td colspan="10">Không tìm thấy</td>
            </tr>
            <?php endif; ?>

            </tbody>

            <tfoot>
            <tr>
                <td id="cb" class="manage-column column-cb check-column">
                    <label class="screen-reader-text" for="cb-select-all-1">Chọn toàn bộ</label>
                    <input id="cb-select-all-1" type="checkbox">
                </td>
                <th scope="col" id="title" class="manage-column column-title column-primary sortable desc">
                    <a href="#">
                        <span>Tên</span>
                        <span class="sorting-indicator"></span>
                    </a>
                </th>
                <th scope="col" id="author" class="manage-column column-author">Email</th>
                <th scope="col" id="categories" class="manage-column column-categories">Số di động</th>
                <th scope="col" id="tags" class="manage-column column-tags">Lời nhắn</th>
                <th scope="col" id="date" class="manage-column column-date sortable asc">
                    <a href="#">
                        <span>Thời gian</span>
                        <span class="sorting-indicator"></span>
                    </a>
                </th>
            </tr>
            </tfoot>

        </table>
        <div class="tablenav bottom">

            <div class="alignleft actions bulkactions">
                <label for="bulk-action-selector-bottom" class="screen-reader-text">Lựa chọn thao tác hàng
                    loạt</label><select name="action2" id="bulk-action-selector-bottom">
                    <option value="-1">Tác vụ</option>
                    <option value="trash">Bỏ vào thùng rác</option>
                </select>
                <input type="submit" id="doaction2" class="button action" value="Áp dụng">
            </div>
            <div class="alignleft actions">
            </div>
            <div class="tablenav-pages"><span class="displaying-num">35 mục</span>
                <span class="pagination-links"><span class="tablenav-pages-navspan" aria-hidden="true">«</span>
                    <span class="tablenav-pages-navspan" aria-hidden="true">‹</span>
                    <span class="screen-reader-text">Trang hiện tại</span><span id="table-paging" class="paging-input"><span
                                class="tablenav-paging-text">1 trên <span class="total-pages">2</span></span></span>
                    <a class="next-page" href="http://127.0.0.1:8080/duongthieu/realtop1/wp-admin/edit.php?paged=2"><span
                                class="screen-reader-text">Trang sau</span><span aria-hidden="true">›</span></a>
                    <span class="tablenav-pages-navspan" aria-hidden="true">»</span>
                </span>
            </div>
            <br class="clear">
        </div>

    </form>



    <div id="ajax-response"></div>
    <br class="clear">
</div>