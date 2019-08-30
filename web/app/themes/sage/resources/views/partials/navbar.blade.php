<navbar>
    @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu'            => '',
            'container'       => '',
            'menu_class' => 'navbar__links',
            'item_spacing'    => 'preserve'
        ]) !!}
    @endif
</navbar>
