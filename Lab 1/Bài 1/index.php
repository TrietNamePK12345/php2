<?php
$course = [
    's1' => 'Course PHP',
    's2' => 'Course JAVA',
    's3' => 'Course PYTHON'
];
// model
function get_courses()
{
    global $course;
    echo '<pre>';

    return array_values($course);
}

function find_by_semester($semester)
{
    global $course;
    return (array_key_exists($semester,$course) ? $course[$semester]: 'Invalid Course');
}
// Controller
$list_of_course = get_courses();

$semester = $semester = (!empty($_GET['semester']) ? $_GET['semester'] : '');
$course_name = find_by_semester($semester);
$page_content = $course_name;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bài 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <select class="form-select" aria-label="Default select example">
        <option selected>Choose Courses</option>
        <?php
        foreach ($list_of_course as $key => $course_name) {
            echo '<option value="' . $key . '">' . $course_name . '</option>';
        }
        ?>
    </select>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
