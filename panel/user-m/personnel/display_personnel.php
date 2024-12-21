<!DOCTYPE html>
<html lang="en">

<!-- Begin :: Header -->
<?php require_once('../../infrastructure/settings/header/header.php'); ?>
<!-- End :: Header -->

<body dir="rtl" class="bg-fuchsia-200">

    <!-- Begin :: Nav -->
    <?php require_once('../../infrastructure/settings/navs/nav.php'); ?>
    <!-- End :: Nav -->

    <!-- Begin :: Infrastructure -->
    <div class="container-fluid pl-5 pr-5 mx-auto p-4">
        <?php
        require_once('../../infrastructure/settings/dbcon/db_connection.php');
        
        // Retrieve personnel ID from the query string
        $id = intval($_GET['id']);
        
        // Fetch personnel details
        $query = "SELECT * FROM `projectPersonnel` WHERE `id` = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $personnel = $result->fetch_assoc();

        if (!$personnel) {
            echo "<p class='text-red-500'>پرسنل مورد نظر یافت نشد.</p>";
            exit;
        }

        // Fetch users for the name dropdown
        $userQuery = "SELECT `id`, `fullname` FROM `users`";
        $userResult = $conn->query($userQuery);

        // Fetch projects for the projects dropdown
        $projectQuery = "SELECT `id`, `project_name` FROM `project`";
        $projectResult = $conn->query($projectQuery);

        // Prepare array of project IDs for the current personnel
        $currentProjectIDs = explode(',', $personnel['projectID']);

        // Define shift options
        $shiftOptions = [
            'روز' => 'روز',
            'شب' => 'شب'
        ];

        // Define role options
        $roleOptions = [
            'owner' => 'کارفرما',
            'contractor' => 'پیمانکار'
        ];
        ?>

        <h1 class="text-2xl font-bold mb-4">ویرایش اطلاعات پرسنل</h1>
        <div class="bg-white p-5 rounded-lg shadow-md">
            <form id="editForm" method="post" action="update_personnel_action.php">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($personnel['id']); ?>">

                <!-- Name -->
                <div class="mb-4">
                    <label class="block text-gray-700">نام پرسنل</label>
                    <select name="name" class="form-select mt-1 block w-full border-gray-300 rounded-md" required>
                        <?php
                        while ($user = $userResult->fetch_assoc()) {
                            $selected = ($user['id'] == $personnel['userID']) ? 'selected' : '';
                            echo "<option value='{$user['id']}' $selected>{$user['fullname']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <!-- Job Title -->
                <div class="mb-4">
                    <label class="block text-gray-700">عنوان شغلی</label>
                    <input type="text" name="job_title" value="<?php echo htmlspecialchars($personnel['job_title']); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                </div>

                <!-- Shift -->
                <div class="mb-4">
                    <label class="block text-gray-700">شیفت</label>
                    <select name="shift" class="form-select mt-1 block w-full h-auto border-gray-300 rounded-md"
                        required>
                        <?php
                        foreach ($shiftOptions as $key => $shift) {
                            $selected = ($key == $personnel['shift']) ? 'selected' : '';
                            echo "<option value='$key' $selected>$shift</option>";
                        }
                        ?>
                    </select>
                </div>

                <!-- Role -->
                <div class="mb-4">
                    <label class="block text-gray-700">نقش</label>
                    <select name="role" class="form-select mt-1 block w-full h-auto border-gray-300 rounded-md"
                        required>
                        <?php
                        foreach ($roleOptions as $key => $role) {
                            $selected = ($key == $personnel['role']) ? 'selected' : '';
                            echo "<option value='$key' $selected>$role</option>";
                        }
                        ?>
                    </select>
                </div>

                <!-- Projects -->
                <div class="mb-4">
                    <label class="block text-gray-700">پروژه‌ها</label>
                    <select name="projectID[]" class="form-select mt-1 block w-full h-auto border-gray-300 rounded-md"
                        required>
                        <?php
                        // Reset the project result set pointer to the beginning
                        $projectResult->data_seek(0);
                        
                        while ($project = $projectResult->fetch_assoc()) {
                            $selected = in_array($project['id'], $currentProjectIDs) ? 'selected' : '';
                            echo "<option value='{$project['id']}' $selected>{$project['project_name']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <!-- Submit and Back Buttons -->
                <div class="flex gap-4 mt-4">
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded">به‌روزرسانی</button>
                    <a href="manage_personnels.php" class="bg-gray-500 text-white p-2 rounded">بازگشت</a>
                </div>
            </form>
        </div>
    </div>
    <!-- End :: Infrastructure -->

    <!-- Begin :: Trail -->
    <?php require_once('../../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Trail -->

</body>

</html>