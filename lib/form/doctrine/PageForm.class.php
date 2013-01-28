<?php

/**
 * Page form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Leonid dll@gmail.com
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PageForm extends BasePageForm
{
  public function configure()
  {
    unset (
      $this['created_at'], $this['updated_at']
    );
  }
}
