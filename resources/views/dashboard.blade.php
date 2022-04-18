@extends(backpack_view('blank'))

@php
$widgets['before_content'][] = [
    'type' => 'div',
    'class' => 'row',
    'content' => [
        [
            'type' => 'progress_white',
            'class' => 'card mb-2 ',
            'value' => $student,
            'description' => 'Registered Student.',
            'progress' => $student,
        ],
        [
            'type' => 'progress_white',
            'class' => 'card mb-2',
            'value' => $teacher,
            'description' => 'Registered Teacher.',

            'progressClass' => 'progress-bar bg-danger',
            'progress' => $teacher,
        ],
        [
            'type' => 'progress_white',
            'class' => 'card mb-2',
            'value' => $subject,
            'description' => 'Registered Subject.',
            'progress' => $subject,
            'progressClass' => 'progress-bar bg-warning',
        ],
        [
            'type' => 'progress_white',
            'class' => 'card mb-2',
            'value' => $student + $teacher,
            'description' => 'Registered Member.',
            'progress' => $subject,
            'progressClass' => 'progress-bar bg-info',
        ],

         [
            'type' => 'progress_white',
            'class' => 'card mb-2',
            'value' => $group ,
            'description' => 'Registered Group.',
            'progress' => $group,
            'progressClass' => 'progress-bar bg-info',
        ],
    ],
];
@endphp

@section('content')
@endsection
