<div class="container">
    <?php
    $args = [
        'title' => '가지고 있는 재료 선택하기',
        'terms' => get_terms('material', [
            'orderby' => 'count',
            'order' => 'DESC',
            'childless' => true
        ]),
    ];
    get_template_part('template-parts/page/content', 'refrigerator', $args);
    ?>
</div>