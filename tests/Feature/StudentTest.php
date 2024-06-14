<?php
use App\Models\Student;
use function PHPUnit\Framework\assertTrue;
test('create student', function () {
    $student = Student::create([
        'name' => 'Sem Jefferson',
        'email' => 'Jefferson@itc.edu.kh',
        'phone' => '098 78 62 10',
        'dob' => '2000-11-14'
    ]);
    assertTrue($student->exists());
});