

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Image</th>
      <th scope="col">Titre</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($cause as $causes ){?>
    <tr>
      <th scope="row"><?php echo $causes['id'] ?></th>
      <td><?php echo $causes['dates'] ?></td>
      <td><img src="<?php echo img_loader($causes['photos']) ?>" width=100></td>
      <td><?php echo $causes['titre'] ?></td>
      <td><a href="<?php echo site_url('ControllerContenu/deleteContenuCause')?>?id=<?php echo $causes['id']?>" class="btn btn-danger">Effacer</a></td>
    </tr>
    <?php }?>

  </tbody>
</table>