<?php

namespace app\views;
use App\Controllers\UserController;
?>
<html>
<?php $ActivePageName = 'user'; ?>
@include('Nav_Barre')
<body>
@include('Head')
<br>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-1">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createUserModal">+</button>
            </div>
        </div>
    </div>
<br>
<div><h3>Liste des utilisateur :</h3></div>

<table id="tableUser" class="table table-striped table-hover table-Secondary .table-responsive" >
    <thead>
    <tr>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Edit/Delete</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            foreach ($users as $u){?>
            <tr>
                <td><?php echo $u->Prenom; ?></td>
                <td><?php echo $u->Nom;?></td>
                <td><button  type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editUserModal"><img class="fit-picture" src="/img/edit_black_24dp.svg" alt="edit"></button>
                    <button  type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteUserModal"><img class="fit-picture" src="/img/delete_black_24dp.svg" alt="delete"></button></td>
            </tr>
                <?php
            }?>
    </tbody>
</table>














<!-- Modal create User-->
<div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserModalLabel">Create User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="InsertUser" method="post" action="/user/add">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input id="addIdentifiant" name="addIdentifiant" type="text" class="form-control" placeholder="tjakubowski" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Identifiant</span>
                    </div>
                    <div class="input-group mb-3">
                        <input id="addNom" name="addNom" type="text" class="form-control" placeholder="Jakubowski" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Nom</span>
                    </div>
                    <div class="input-group mb-3">
                        <input id="addPrenom" name="addPrenom" type="text" class="form-control" placeholder="Thomas" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Prenom</span>
                    </div>
                    <div class="input-group mb-3">
                        <input id="addPassword" name="addPassword" type="text" class="form-control" placeholder="tgdtzUHDUZ51%" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Password</span>
                    </div>
                    <div class="input-group mb-3">
                        <input id="addIdRole" name="addIdRole" type="text" class="form-control" placeholder="1" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">IdRole</span>
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


<!-- Modal edit User-->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserModalLabel">Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="UpdateUser" method="post" action="/user/edit">
            <div class="modal-body">
                    <div class="input-group mb-3">
                        <input id="editIdentifiant" name="editIdentifiant" type="text" class="form-control" placeholder="tjakubowski" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Identifiant</span>
                    </div>
                    <div class="input-group mb-3">
                        <input id="editNom" name="editNom" type="text" class="form-control" placeholder="Jakubowski" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Nom</span>
                    </div>
                    <div class="input-group mb-3">
                        <input id="editPrenom" name="editPrenom" type="text" class="form-control" placeholder="Thomas" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Prenom</span>
                    </div>
                    <div class="input-group mb-3">
                        <input id="editPassword" name="editPassword" type="text" class="form-control" placeholder="tgdtzUHDUZ51%" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">Password</span>
                    </div>
                    <div class="input-group mb-3">
                        <input id="editIdRole" name="editIdRole" type="text" class="form-control" placeholder="1" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">IdRole</span>
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


<!-- Modal confirmDelete User-->
<div class="modal fade" id="confirmDeleteUserModal" tabindex="-1" aria-labelledby="confirmDeleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteUserModalLabel">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3>Etes-vous sur de vouloir supprimé le User <span id="wantToDelete"></span> ?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NON</button>
                <form id="DeleteUser" method="post" action="/user/delete">
                    <input id="idUserToDelete" name="idUserToDelete" value="none" hidden>
                    <button type="submit" class="btn btn-success">OUI</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
