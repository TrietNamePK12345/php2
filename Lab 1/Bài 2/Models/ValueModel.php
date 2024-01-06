<?php

$course = [
    's1=' => 'Course PHP',
    's2=' => 'Course JAVA',
    's3=' => 'Course PYTHON'
];
// model
function find_by_semester($semester)
{
    global $course;
    return (array_key_exists($semester, $course) ? $course[$semester] : 'Không có khóa học được chọn');
}