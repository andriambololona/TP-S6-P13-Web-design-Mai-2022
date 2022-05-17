<?php
//var_dump($cause);
?>
<div class="col-md-4 w3_agile_mail_right">

    <h2>Insertion de Cause</h2>
    <br>
    <form method="post" action="<?php echo base_url("/index.php/ControllerContenu/insertContenuCause")?>" enctype="multipart/form-data">
        <select name="idCause" class="form-control">
            <?php foreach ($cause as $causes) { ?>
                <option value="<?php echo $causes['id'] ?>"><?php echo $causes['nom'] ?></option>
            <?php } ?>
        </select>
        <br>
        <br>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Dates</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputEmail3" placeholder="Date" name="date">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Titre</label>
            <div class="col-sm-10">
                <textarea  class="form-control" placeholder="Titre" name="titre" require=""></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Image</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="inputPassword" name="file">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea  class="form-control" name="description"></textarea>
            </div>
        </div>
        <button class="btn btn-success" name="submit" value="1">Valider</button>
        <br>
    </form>
</div>
<div class="clearfix"> </div>