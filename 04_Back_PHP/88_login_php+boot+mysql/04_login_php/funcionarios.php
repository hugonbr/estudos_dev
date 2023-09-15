<?php
// Start the session
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: loginform.php");
    die();
}
?>
<?php
require('template/header.php');
?>
<div class="d-flex justify-content-between">
    <h2>Funcionários</h2>
    <button type="button" class="btn btn-success">
        Insert
    </button>
</div>
<!-- <div class="row justify-content-center"> -->
<!-- <div class="col-auto"> -->
<div class="table-responsive mt-2">
    <table class="table table-striped table-bordered text-center">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <!-- <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>
                    <button type="button" class="btn btn-warning">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr> -->
        </tbody>
    </table>
</div>
<!-- </div> -->
<!-- </div> -->
</div>
</main>
<?php
require('template/footer.php');
?>