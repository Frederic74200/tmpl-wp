<?php

namespace Fchaput\MonPremierPlugin;

class MonPremierPlugin
{

    public function __construct(string $file)
    {
        register_activation_hook($file, [$this, 'plugin_activation']);
        add_action('admin_notices', [$this, 'notice_activation']);
    }

    public function plugin_activation()
    {
        set_transient('mon_premier_plugin_actived', true);
    }

    public function notice_activation()
    {
    }
}
