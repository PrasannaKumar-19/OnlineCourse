<?php
    include "includes/config.php";
    $noti = mysqli_num_rows(mysqli_query($bd,"SELECT * FROM notification;"));
?>
<section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
			<li><a href="change-password.php">Change Password</a></li>
                            <li><a href="semester.php">Semester </a></li>
                            <li><a   href="department.php">Department</a></li>
                             <li><a href="course.php">Course</a></li>
                              <li><a href="student-registration.php">Registration</a></li>
                               <li><a href="manage-students.php">Manage Students</a></li>
                               <li><a href="semesterFor.php">Semester edit</a></li>
                               <li><a href="excel.php">Enroll History</a></li>
                               <li><a href="user-log.php">Student Logs </a></li>
                               <li><a href="tutor_manage.php">Tutors </a></li>
                               <li><a href="notification.php"><span>Inbox</span><span style="background-color:red" class="badge"><?php echo $noti;?></span></a></li>
                            <li><a href="logout.php">Logout</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>