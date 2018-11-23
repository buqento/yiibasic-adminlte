<aside class="main-sidebar">

    <section class="sidebar">


        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/site']],
                    [
                        'label' => 'Master Data',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'WBP', 'icon' => 'circle-o', 'url' =>[ '/wbp']],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
