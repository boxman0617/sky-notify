<?php
SkyL::Import(Plugin::GetFile($plugin));
$__PluginDir__ = Plugin::GetPluginDir($plugin);
$__ConfigFile__ = $__PluginDir__.'/config.php';
if(file_exists($__ConfigFile__))
{
  SkyL::Import($__ConfigFile__);
}
