<!DOCTYPE html>
<html lang="en">

<head>

        <?php require("./included.php"); ?>
        <script src="../scripts/ministry.js" defer></script>

</head>

<body>
    <div class="container mt-5">

        <div class="auth-form">
            <h4 class="mt-2 text-center">Capture Staff</h4>

            <form id="ministryForm" enctype="multipart/form-data">
                <input type="hidden" id="action" name="action" value="create">
                <input type="hidden" id="id" name="id">
                <div class="mb-3">
                    <label for="name" class="form-label">Ministry Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</body>

</html>