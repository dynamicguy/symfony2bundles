<?php $view->extend('S2bBundle::layout') ?>
<?php $view->slots->set('current_menu_item', 'project_list') ?>

<?php $view->output('S2bBundle:Project:bigList', array('repos' => $repos)) ?>

<?php $view->slots->set('h1', '<span>'.count($repos).'</span> Projects') ?>
<?php $view->slots->set('title', 'All '.count($repos).' Projects') ?>
<?php $view->slots->set('slogan', 'All Open Source Projects sorted by '.$fields[$sort]) ?>
<?php $view->slots->set('description', 'All Open Source Symfony2 Projects sorted by '.$sort) ?>

<?php $view->slots->start('sidemenu') ?>
<h3>Sort by</h3>
<div class="sidemenu uppercase">
    <ul>
    <?php foreach($fields as $field => $text): ?>
        <li<?php $field == $sort && print ' class="current"' ?>>
            <a href="<?php echo $view->router->generate('project_list', array('sort' => $field)) ?>"><?php echo $text ?></a>
        </li>
    <?php endforeach ?>
    </ul>
</div>
<?php $view->output('S2bBundle:Repo:add') ?>
<?php $view->slots->stop() ?>
