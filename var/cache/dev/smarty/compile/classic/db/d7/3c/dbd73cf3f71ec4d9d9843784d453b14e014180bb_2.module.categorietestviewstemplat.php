<?php
/* Smarty version 3.1.39, created on 2021-07-26 11:15:15
  from 'module:categorietestviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fe8b333f9bd5_25914665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbd73cf3f71ec4d9d9843784d453b14e014180bb' => 
    array (
      0 => 'module:categorietestviewstemplat',
      1 => 1627292037,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60fe8b333f9bd5_25914665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin C:\wamp64\www\prestafab/modules/categorietest/views/templates/hook/categorietest.tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132390630560fe8b333e8ad1_22532576', "page_title");
?>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Categorie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="" method="post">

                    <div class="modal-body">
                        
                      
                          <div class="form-group row">
        <label for="cat_ref" class="col-sm-4 col-form-label">Référence de la catégorie</label>
        <div class="col-sm-6">
            <input type="text" name="cat_ref" class="form-control" id="cat_ref"
                   placeholder="Entrez la référence de la catégorie" >
        </div>
    </div>
    <div class="form-group row">
        <label for="cat_name" class="col-sm-4 col-form-label">Nom de la catégorie</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="cat_name" id="cat_name"
                   placeholder="Entrez le nom de la catégorie" >
        </div>
    </div>
    <div class="form-group row">
        <label for="cat_desc" class="col-sm-4 col-form-label">Description</label>
        <div class="col-sm-6">
            <textarea class="form-control" id="cat_desc" name="cat_desc"
                      placeholder="Entrez la description" cols="20" rows="10"></textarea>
        </div>
    </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Ajouter catégorie">
                         </div>
                </form>
                </div>
            </div>
            </div>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Categorie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="" method="post">

                    <div class="modal-body">
                        <input type="hidden" name="id"  id="update_id"/>
                            <div class="form-group row">
                                <label for="cat_ref" class="col-sm-4 col-form-label" >Référence de la catégorie</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="catRef" class="form-control" id="refCat"
                                            placeholder="Entrez la référence de la catégorie" >
                                    </div>
                            </div>
                        <div class="form-group row">
                            <label for="cat_name" class="col-sm-4 col-form-label">Nom de la catégorie</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="catName" id="nomCat"
                                        placeholder="Entrez le nom de la catégorie" >
                                </div>
                        </div>
                            <div class="form-group row">
                                <label for="cat_desc" class="col-sm-4 col-form-label">Description</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" id="desCat" name="catDesc"
                                                    placeholder="Entrez la description" cols="20" rows="10"></textarea>
                                        </div>
                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button  class="btn btn-primary" type="submit" name="editCat">Save changes</button>
                         </div>
                </form>
                </div>
            </div>
            </div>

<?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)) {?>
    


    <table class="table table-bg">
        <thead>
        <tr>
            <th class="table-info" scope="col">Categorie id</th>
            <th class="table-info" scope="col">Categorie Reference</th>
            <th class="table-info" scope="col">Categorie Nom</th>
            <th class="table-info" scope="col">Categorie Description</th>
            <th class="table-info" scope="col">Action</th>
        </tr>
        </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>

    <tr>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_id'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_ref'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_name'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_desc'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td>
                <div class="col-md-10">
                    <div class="col-md-2">
                       <input type="hidden" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_id'], ENT_QUOTES, 'UTF-8');?>
" id="id" />
                        <button type="button" class="btn btn-info btn-sm editbtn" data-toggle="modal" data-target="#exampleModal" name="editbtn"><i class="material-icons">edit</i></button>
                    </div>

                    <div class="col-md-2" style="margin-left: 12px">
                     <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_id'], ENT_QUOTES, 'UTF-8');?>
" id="id" />
                         <button type="submit" class="btn btn-danger btn-sm" name="delete" id="delete" ><i class="material-icons">delete</i></button>
                    </form>
                    </div>
                </div>
               </td>
        </tr>
        <div class="module-item-wrapper-grid">
            <div class="module-container">

            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>
<?php }?>


<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('.editbtn').on('click',function(){
            $tr =$(this).closest('tr');


            var data =$tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);

            $('#update_id').val(data[0]);
            $('#refCat').val(data[1]);
            $('#nomCat').val(data[2]);
            $('#desCat').val(data[3]);

        });
    });

<?php echo '</script'; ?>
><!-- end C:\wamp64\www\prestafab/modules/categorietest/views/templates/hook/categorietest.tpl --><?php }
/* {block "page_title"} */
class Block_132390630560fe8b333e8ad1_22532576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_132390630560fe8b333e8ad1_22532576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal" name="editbtn">Add Category</button>
<?php
}
}
/* {/block "page_title"} */
}
