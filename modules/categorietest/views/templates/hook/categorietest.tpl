{*Hello i am who you've been looking for *}

{block name="page_title"}

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal" name="editbtn">Add Category</button>
{/block }
{* #############################################################################333 *}
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
{* ################################################################################## *}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

{if !empty($categories)}
    


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
    {foreach from=$categories item=$categorie}

    <tr>
            <td>{$categorie.cat_id}</td>
            <td>{$categorie.cat_ref}</td>
            <td>{$categorie.cat_name}</td>
            <td>{$categorie.cat_desc}</td>
            <td>
                <div class="col-md-10">
                    <div class="col-md-2">
                       <input type="hidden" name="id" value="{$categorie.cat_id}" id="id" />
                        <button type="button" class="btn btn-info btn-sm editbtn" data-toggle="modal" data-target="#exampleModal" name="editbtn"><i class="material-icons">edit</i></button>
                    </div>

                    <div class="col-md-2" style="margin-left: 12px">
                     <form action="" method="post">
                            <input type="hidden" name="id" value="{$categorie.cat_id}" id="id" />
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
    {/foreach}
    </tbody>
    </table>
{/if}


<script>
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

</script>