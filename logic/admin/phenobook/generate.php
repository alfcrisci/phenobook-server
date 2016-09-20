<?php 
$admin = true;
require "../../../files/php/config/require.php";

if($_POST){
  Entity::begin();
  $item = new Phenobook();
  $item->nombre = _post("nombre");
  $item->descripcion = _post("descripcion");
  $item->grupo = $__user->userGroup;


  if(!$alert->hasError){
    Entity::save($item);

    $users_ensayo = _post("usuarios");
    foreach((array)$users_ensayo  as $ue){
      $us_obj = new UserPhenobook();
      $us_obj->user = Entity::load("User", $ue);
      $us_obj->ensayo = $item;
      Entity::save($us_obj);
    }

    Entity::commit();
    redirect("index.php?id=$item->id&m=Libro de Campo agregado");
  }

}

$usuarios = obj2arr(Entity::listMe("User","active AND grupo = '".$__user->userGroup->id."' AND type = '" . User::$TYPE_OPERADOR . "'"));

?>

<div class="row">

  <div class="col-sm-8 col-md-offset-1">
    <form autocomplete="off" enctype="multipart/form-data" class="form-horizontal valid" 
    method="POST" action="<?= $_SERVER["PHP_SELF"]?>">
    <fieldset>
      <!-- Form Name -->
      <legend>Agregar libro de campo</legend>
      <div class="well">

        <div class="form-group">
          <label class="col-md-4 control-label" for="nombre"><?= __TRIAL_CRUD_ADD_NAME ?> *</label>  
          <div class="col-md-5">
            <input id="nombre" name="nombre" value="<?= _post("nombre"); ?>" type="text"  class="form-control input-md required">
            <span class="help-block"></span>  
          </div>
        </div>

        <div class="form-group ">
          <label class="col-md-4 control-label" for="usuarios"><?= __TRIAL_CRUD_ADD_ASSIGNED_USERS ?></label>  
          <div class="col-md-4">
            <?php
            printSelect("usuarios[]", null, $usuarios, null, "select-multiple","multiple" );
            ?>
            <span class="help-block"></span>  
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label" for="descripcion"><?= __TRIAL_CRUD_ADD_DESCRIPTIONS ?></label>  
          <div class="col-md-5">
            <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="5"><?= _post("descripcion"); ?></textarea>
            <span class="help-block"></span>  
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label" for="archivo"><?= __TRIAL_CRUD_ADD_FILE ?> *</label>  
          <div class="col-md-5">
            <input type="file" name="archivo" class="form-control input-md required">
            <span class="help-block">
              <?= __TRIAL_CRUD_ADD_FILE_INSTRUCTIONS ?>
            </span>  
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <div class="col-md-4 col-md-offset-4">
            <input type="submit" name="save" value="<?= __TRIAL_CRUD_ADD_CONTINUE ?>" class="btn btn-shadow btn-primary">
          </div>
        </div>

      </div>
    </fieldset>
  </form>
</div>
</div>
<?php 
require __ROOT."files/php/template/footer.php";
?>