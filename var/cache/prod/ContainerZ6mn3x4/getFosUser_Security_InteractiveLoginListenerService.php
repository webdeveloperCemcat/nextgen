<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.security.interactive_login_listener' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/EventListener/LastLoginListener.php';

return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener(${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->load(__DIR__.'/getFosUser_UserManagerService.php')) && false ?: '_'});
