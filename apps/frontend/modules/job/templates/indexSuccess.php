<h1>Jobeet jobs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Category</th>
      <th>Type</th>
      <th>Company</th>
      <th>Logo</th>
      <th>Url</th>
      <th>Position</th>
      <th>Location</th>
      <th>Description</th>
      <th>How to apply</th>
      <th>Token</th>
      <th>Is public</th>
      <th>Is activated</th>
      <th>Email</th>
      <th>Expires at</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobeet_jobs as $jobeet_job): ?>
    <tr>
      <td><a href="<?php echo url_for('job/show?
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
id='.$jobeet_job->get()) ?>"><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></a></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in E:\projets epitech\tuto-symfo-1-4\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('job/new') ?>">New</a>
