<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('job/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
id='.$form->getObject()->get() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('job/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'job/delete?
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
id='.$form->getObject()->get(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
