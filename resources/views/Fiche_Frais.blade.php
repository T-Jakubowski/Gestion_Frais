<?php

namespace app\views;
use App\Controllers\FicheFraisController;
?>
<html>
<?php $ActivePageName = 'fiche_frais'; ?>
@include('Nav_Barre')
<body>
@include('Head')
<br>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-1">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createLigneModal">+</button>
            </div>
        </div>
    </div>
<br>
<div><h3>Fiche </h3></div>
<div><h3>Frais forfait</h3></div>

<table id="tableLigne" class="table table-striped table-hover table-Secondary .table-responsive" >
    <thead>
    <tr>
        <th>Km</th>
        <th>Repas</th>
        <th>Nuite</th>
        <th>Edit/Delete</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <tr>
                <td><?php echo $ficheFrais->Km; ?></td>
                <td><?php echo $ficheFrais->Repas;?></td>
                <td><?php echo $ficheFrais->Nuite;?></td>
                <td><button  type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editLigneModal"><img class="fit-picture" src="/img/edit_black_24dp.svg" alt="edit"></button>
                    <button  type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteLigneModal"><img class="fit-picture" src="/img/delete_black_24dp.svg" alt="delete"></button></td>
            </tr>
    </tbody>
</table>


<div><h3>Frais forfait</h3></div>

<table id="tableLigne" class="table table-striped table-hover table-Secondary .table-responsive" >
    <thead>
    <tr>
        <th>Num</th>
        <th>Libelle</th>
        <th>Prix</th>
        <th>Edit/Delete</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <?php 
            $i = 0;
            foreach ($desLigneFrais as $uneLigne){ 
            $i += 1;    
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $uneLigne->Libelle;?></td>
                <td><?php echo $uneLigne->Prix;?></td>
                <td><button  type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editLigneModal"><img class="fit-picture" src="/img/edit_black_24dp.svg" alt="edit"></button>
                    <button  type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteLigneModal"><img class="fit-picture" src="/img/delete_black_24dp.svg" alt="delete"></button></td>
            </tr>
                <?php
            }?>
    </tbody>
</table>














<!-- Modal create Ligne-->
<div class="modal fade" id="createLigneModal" tabindex="-1" aria-labelledby="createRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createRoleModalLabel">Create Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="InsertRole" method="post" action="/role/add">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input id="addId" name="addId" type="text" class="form-control" placeholder="4" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Id</span>
                    </div>
                    <div class="input-group mb-3">
                        <input id="addRole" name="addRole" type="text" class="form-control" placeholder="admin" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Role</span>
                    </div>
                    <div class="input-group mb-3">
                        <input id="addPermission" name="addPermission" type="text" class="form-control" placeholder="00001111" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Permission</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="save">
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal edit Role-->
<div class="modal fade" id="editRoleModal" tabindex="-1" aria-labelledby="editRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createRoleModalLabel">Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="UpdateRole" method="post" action="/role/edit">
            <div class="modal-body">
                    <div class="input-group mb-3">
                        <input id="editId" name="editId" type="text" class="form-control" placeholder="4" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Id</span>
                    </div>
                    <div class="input-group mb-3">
                        <input id="editRole" name="editRole" type="text" class="form-control" placeholder="admin" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Role</span>
                    </div>
                    <div class="input-group mb-3">
                        <input id="editPermission" name="editPermission" type="text" class="form-control" placeholder="00001111" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Permission</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="save">
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal confirmDelete Role-->
<div class="modal fade" id="confirmDeleteRoleModal" tabindex="-1" aria-labelledby="confirmDeleteRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteRoleModalLabel">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3>Etes-vous sur de vouloir supprimé le Role <span id="wantToDelete"></span> ?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NON</button>
                <form id="DeleteRole" method="post" action="/role/delete">
                    <input id="idRoleToDelete" name="idRoleToDelete" value="none" hidden>
                    <button type="submit" class="btn btn-success">OUI</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
