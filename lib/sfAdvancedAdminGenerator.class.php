<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Propel Admin generator.
 *
 * This class generates an admin module with propel.
 *
 * @package    symfony
 * @subpackage generator
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfPropelAdminGenerator.class.php 3302 2007-01-18 13:42:46Z fabien $
 */

class sfAdvancedAdminGenerator extends sfPropelAdminGenerator
{
  /**
   * Initializes the current sfGenerator instance.
   *
   * @param sfGeneratorManager A sfGeneratorManager instance
   */
  public function initialize($generatorManager)
  {
    parent::initialize($generatorManager);

    $this->setGeneratorClass('sfAdvancedAdmin');
  }
}