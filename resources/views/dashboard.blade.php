@extends(backpack_view('blank'))

@php
$widgets['after_content'][] = [
    'type' => 'div',
    'class' => 'row',
    'content' => [
        [
            'type' => 'progress_white ',
            'class' => 'card mb-2 bg-success',
            'value' => "<i class='las la-user-graduate' style='font-size: 50px;margin-right:250px;'></i>$student",
            'description' => 'Registered Student.',
            'progress' => $student,
        ],
        [
            'type' => 'progress_white',
            'class' => 'card mb-2 bg-info',
            'value' => "<i class='las la-chalkboard-teacher' style='font-size: 50px;margin-right:250px;'></i>$teacher",
            'description' => 'Registered Teacher.',

            'progressClass' => 'progress-bar bg-danger',
            'progress' => $teacher,
        ],
        [
            'type' => 'progress_white',
            'class' => 'card mb-2 bg-warning',
            'value' => "<i class='las la-address-book' style='font-size: 50px;margin-right:250px;'></i>$subject",
            'description' => 'Registered Subject.',
            'progress' => $subject,
            'progressClass' => 'progress-bar bg-info',
        ],
        // [
        //     'type' => 'progress_white',
        //     'class' => 'card mb-2 bg-danger',
        //     'value' => $student + $teacher,
        //     'description' => 'Registered Member.',
        //     'progress' => $student + $teacher,
        //     'progressClass' => 'progress-bar bg-info',
        // ],

         [
            'type' => 'progress_white',
            'class' => 'card mb-2 bg-danger',
            'value' => "<i class='las la-users' style='font-size: 50px;margin-right:250px;'></i>$group",
            'description' => 'Registered Group.',
            'progress' => $group,
            'progressClass' => 'progress-bar bg-info',
        ],
    ],
];
@endphp

@section('content')
    <h2 style="margin:20px 0px">Dashboard</h2>
@endsection
