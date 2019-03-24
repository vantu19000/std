
<div class="wrap">
    <h1>Danh cho developer</h1>

    <form action="<?= get_admin_url() . '?controller=debug&task=runSql' ?>" method="post">
        <textarea style="width: 100%" name="data[sql]"></textarea>

        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Chạy sql">
        </p>

    </form>

</div>