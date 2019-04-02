<section class="section ourservice" style="margin-top: 20px;">
    <div class="container">
        <div class="row">
            <?php for ($i = 0; $i < 4; $i ++ ): ?>
                <?php
                $img = get_template_directory_uri() . '/assets/images/icon/setting.png';
                $text = $general->criteria_1;
                switch ($i){
                    case 1:
                        $img = get_template_directory_uri() . '/assets/images/icon/machine1.png';
                        $text = $general->criteria_2;
                        break;
                    case 2:
                        $img = get_template_directory_uri() . '/assets/images/icon/machine2.png';
                        $text = $general->criteria_3;
                        break;
                    case 3:
                        $text = $general->criteria_4;
                        $img = get_template_directory_uri() . '/assets/images/icon/machine3.png';
                        break;
                }
                ?>
                <div class="col-6 col-md-3 text-center">
                    <div id="hex3" class="hexagon-wrapper">
                        <div id="color3" class="hexagon text-center align-middle">
                            <img src="<?= $img ?>">
                        </div>
                    </div>
                    <div class="ser-text">
                        <p><?= $text ?></p>
                    </div>
                </div>

            <?php endfor; ?>

        </div>

        <div class="mt-2"></div>

        <div class="row" style="margin-top: 20px;">
            <div class="col-md-6 offset-md-3">
                <h4 class="title">DỊCH VỤ CỦA CHÚNG TÔI</h4>
            </div>
        </div>
    </div>
</section>