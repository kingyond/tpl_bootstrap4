<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.bootstrap4
 *
 * @copyright   Hugo Fittipaldi (C) 2018. All rights reserved.
 * @license     GNU General Public License version 3 or later; see LICENSE
 */

defined('_JEXEC') or die;

require_once 'inc_vars.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <jdoc:include type="head" />
</head>

<body class="site <?php echo $option
    . ' view-' . $view
    . ($layout ? ' layout-' . $layout : ' no-layout')
    . ($task ? ' task-' . $task : ' no-task')
    . ($itemid ? ' itemid-' . $itemid : '')
    . ($browser ?: '')
    . ($pageclass ? ' ' . $pageclass : '');
?>">
    <header class="page-header">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="<?php echo $this->baseurl; ?>">
                <?php echo $logo; ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <jdoc:include type="modules" name="mainnav" style="none" />
                <?php if ($this->countModules('search')) : ?>

                <jdoc:include type="modules" name="search" style="none" />
                <?php endif; ?>

            </div>
        </nav>
    </header>

    <div class="page-body">
        <?php if ($this->countModules('showcase')) : ?>

        <!-- Begin Showcase -->
        <div class="showcase">
            <jdoc:include type="modules" name="showcase" style="none" />
        </div>
        <!-- End Showcase -->
        <?php endif; ?>

        <div class="<?php echo $container . ' ' . $wrapper; ?>wrapper">
            <div class="breadcrumbs">
            <?php if ($this->countModules('breadcrumbs')) : ?>

            <!-- Begin Breadcrumbs -->
                <jdoc:include type="modules" name="breadcrumbs" style="none" />
            <!-- End Breadcrumbs -->
            <?php endif; ?>

            </div>

            <main class="main">
                <!-- Begin Content -->
                <?php if ($this->countModules('content-top')) : ?>

                <jdoc:include type="modules" name="content-top" style="none" />
                <?php endif; ?>

                <jdoc:include type="message" />
                <jdoc:include type="component" />
                <?php if ($this->countModules('content-bottom')) : ?>

                <jdoc:include type="modules" name="content-bottom" style="none" />
                <?php endif; ?>

                <!-- End Content -->
            </main>

            <hr>

            <?php if ($this->countModules('left')) : ?>
            <!-- Begin Left Sidebar -->
            <aside class="aside aside--lft">
                <jdoc:include type="modules" name="left" style="none" />
            </aside>
            <!-- End Left Sidebar -->
            <?php endif; ?>

            <?php if ($this->countModules('right')) : ?>
            <!-- Begin Right Sidebar -->
            <aside class="aside aside--rgt">
                <jdoc:include type="modules" name="right" style="none" />
            </aside>
            <!-- End Right Sidebar -->
            <?php endif; ?>

        </div>
        <!-- /container -->
    </div>

    <footer class="page-footer">
        <div class="<?php echo $container; ?>">
            <?php if ($this->countModules('copyright')) : ?>

            <!-- Begin Copyright -->
            <div class="copyright">
                <jdoc:include type="modules" name="copyright" style="none" />
            </div>
            <!-- End Copyright -->
            <?php endif; ?>

        </div>
    </footer>

    <jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
