<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$sitename = $this->params->get('sitename') ? $this->params->get('sitename') : JFactory::getConfig()->get('sitename');
$slogan = $this->params->get('slogan');
$logotype = $this->params->get('logotype', 'text');
$logoimage = $logotype == 'image' ? $this->params->get('logoimage', '') : '';
if ($logoimage) {
  $logoimage = ' style="background-image:url('.JURI::base(true).'/'.$logoimage.');"';
}
?>

<!-- MAIN NAVIGATION -->
<nav id="t3-mainnav" class="wrap t3-mainnav navbar-fixed-top navbar-collapse-fixed-top">
  <div class="container navbar">
    <div class="navbar-inner">
    
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <i class="icon-reorder"></i>
      </button>

      <div id="site-title">
          <a href="<?php echo JURI::base(true) ?>" title="<?php echo strip_tags($sitename) ?>"><span class="nav-logo"></span><span id="site-name"><?php echo strip_tags($sitename) ?> <span id="toggle-site-menu"></span></span></a>
      </div>

  	  <div class="nav-collapse collapse<?php echo $this->getParam('navigation_collapse_showsub', 1) ? ' always-show' : '' ?>">
      <?php if ($this->getParam('navigation_type') == 'megamenu') : ?>
        <?php $this->megamenu($this->getParam('mm_type', 'mainmenu')) ?>
      <?php else : ?>
        <jdoc:include type="modules" name="<?php $this->_p('mainnav') ?>" style="raw" />
      <?php endif ?>
  		</div>
    </div>
  </div>
</nav>
<!-- //MAIN NAVIGATION -->