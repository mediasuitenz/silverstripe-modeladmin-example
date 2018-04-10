<?php
use SilverStripe\Admin\ModelAdmin;

class ExampleModelAdmin extends ModelAdmin {
    private static $managed_models = ['ExampleModel'];
    private static $url_segment = 'example';
    private static $menu_title = 'Example Model Admin';
}
