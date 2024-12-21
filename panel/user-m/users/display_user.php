<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Begin :: Header -->
    <?php require_once('../../infrastructure/settings/header/header.php'); ?>
    <!-- End :: Header -->
</head>

<body dir="rtl" class="bg-amber-200">

    <!-- Begin :: Nav -->
    <?php require_once('../../infrastructure/settings/navs/nav.php'); ?>
    <!-- End :: Nav -->

    <!-- Begin :: Infrastructure -->
    <?php
    // Include the database connection file
    require_once('../../infrastructure/settings/dbcon/db_connection.php');

    // Get the user ID from the URL parameter and validate it
    $userId = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Fetch user data from the database
    if ($userId > 0) {
        $query = "SELECT * FROM users WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            die("User not found.");
        }

        $user = $result->fetch_assoc();
    } else {
        die("Invalid user ID.");
    }
    ?>

    <div class="container-fluid pl-5 pr-5 mx-auto p-4">
        <h1 class="text-2xl font-bold mb-5">نمایش اطلاعات کاربر <span
                class="text-red-500"><?php echo $user['fullname']; ?></span></h1>
        <div class="flex flex-col sm:flex-row gap-3 mb-3">
            <a href="/panel/user-m/users/create_user.php"
                class="flex bg-lime-100 text-gray-500 rounded-md w-full sm:w-1/2 p-3 hover:bg-blue-200">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="text-nowrap">ایجاد کاربر</span>
                </div>
            </a>
            <a href="/panel/user-m/users/manage_users.php"
                class="flex bg-indigo-100 text-gray-500 rounded-md w-full sm:w-1/2 p-3 hover:bg-blue-200">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                    </svg>
                    <span class="text-nowrap">مدیریت کاربران</span>
                </div>
            </a>
        </div>
        <form action="update_user_action.php" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>" disabled>
            <div class="mb-4">
                <label for="username" class="block text-gray-700">نام کاربری</label>
                <input type="text" id="username" name="username" class="form-input mt-1 block w-full"
                    value="<?php echo htmlspecialchars($user['username']); ?>" disabled>
            </div>
            <div class="mb-4">
                <label for="fullname" class="block text-gray-700">نام و نام خانوادگی</label>
                <input type="text" id="fullname" name="fullname" class="form-input mt-1 block w-full"
                    value="<?php echo htmlspecialchars($user['fullname']); ?>" disabled>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">رمز کاربر</label>
                <input type="password" id="password" name="password" class="form-input mt-1 block w-full"
                    placeholder="برای اینکه رمز فعلی تغییر نکند، این فیلد را خالی رها کنید" disabled>
                <!-- <small class="text-gray-500">برای اینکه رمز فعلی تغییر نکند، این فیلد را خالی رها کنید</small> -->
            </div>
            <div class="mb-4">
                <label for="job_position" class="block text-gray-700">موقعیت شغلی</label>
                <select id="job_position" name="job_position" class="form-select mt-1 block w-full" disabled>
                    <option value="">انتخاب کنید...</option>
                    <option value="3" <?php echo $user['job_position'] == 3 ? 'selected' : ''; ?>>مدیر / سرپرست کارگاه
                    </option>
                    <option value="2" <?php echo $user['job_position'] == 2 ? 'selected' : ''; ?>>کارشناس / سرپرست
                    </option>
                    <option value="1" <?php echo $user['job_position'] == 1 ? 'selected' : ''; ?>>ادمین سیستم</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="phone_number" class="block text-gray-700">شماره تماس</label>
                <input type="text" id="phone_number" name="phone_number" class="form-input mt-1 block w-full"
                    value="<?php echo htmlspecialchars($user['phone_number']); ?>" disabled>
            </div>
            <div class="mb-4">
                <label for="job_title" class="block text-gray-700">عنوان شغلی</label>
                <input type="text" id="job_title" name="job_title" class="form-input mt-1 block w-full"
                    value="<?php echo htmlspecialchars($user['job_title']); ?>" disabled>
            </div>
            <div class="mb-4">
                <label for="company" class="block text-gray-700">شرکت ( محل خدمت )</label>
                <input type="text" id="company" name="company" class="form-input mt-1 block w-full"
                    value="<?php echo htmlspecialchars($user['company']); ?>" disabled>
            </div>
            <div class="mb-4">
                <label for="desc" class="block text-gray-700">توضیحات</label>
                <input type="text" id="desc" name="desc" class="form-input mt-1 block w-full"
                    value="<?php echo htmlspecialchars($user['description']); ?>" disabled>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">به روزرسانی کاربر را انجام بده
                !</button>
        </form>
    </div>
    <!-- End :: Infrastructure -->

    <!-- Begin :: Trail -->
    <?php require_once('../../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Trail -->

</body>

</html>