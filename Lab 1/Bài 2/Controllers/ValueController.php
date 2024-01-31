<?php
// Controller
$semester = '';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if(isset($_GET['semester'])) {
        $semester = $_GET['semester'];
    }
}
$course_name = find_by_semester($semester);
$page_content = $course_name;



