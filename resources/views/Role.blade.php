<?php

namespace app\views;
use App\Controllers\RoleController;
?>
<html>
<?php $ActivePageName = 'role'; ?>
@include('Nav_Barre')
<body>
@include('Head')
<br>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-1">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createRoleModal">+</button>
            </div>
        </div>
    </div>
<br>
<div><h3>Liste des roles :</h3></div>

<table id="tableRole" class="table table-striped table-hover table-Secondary .table-responsive" >
    <thead>
    <tr>
        <th>Id</th>
        <th>Role</th>
        <th>Permission</th>
        <th>Edit/Delete</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            foreach ($roles as $r){?>
            <tr>
                <td><?php echo $r->Id; ?></td>
                <td><?php echo $r->Nom;?></td>
                <td><?php echo $r->permission;?></td>
                <td><button  type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editRoleModal"><img class="fit-picture" src="/img/edit_black_24dp.svg" alt="edit"></button>
                    <button  type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteRoleModal"><img class="fit-picture" src="/img/delete_black_24dp.svg" alt="delete"></button></td>
            </tr>
                <?php
            }?>
    </tbody>
</table>














<!-- Modal create Role-->
<div class="modal fade" id="createRoleModal" tabindex="-1" aria-labelledby="createRoleModalLabel" aria-hidden="true">
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
