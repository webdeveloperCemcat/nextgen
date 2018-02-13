<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.user_manager' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ObjectManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Model/UserManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Model/UserManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Doctrine/UserManager.php';

return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager(${($_ = isset($this->services['fos_user.util.password_updater']) ? $this->services['fos_user.util.password_updater'] : $this->load(__DIR__.'/getFosUser_Util_PasswordUpdaterService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->load(__DIR__.'/getFosUser_Util_CanonicalFieldsUpdaterService.php')) && false ?: '_'}, ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}->getManager(NULL), 'AppBundle\\Entity\\User');
