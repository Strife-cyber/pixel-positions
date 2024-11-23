<?php

use App\Models\Employer;
use App\Models\Job;

test('it belongs to an employer', function () {
    // Arrange the world
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(['employer_id' => $employer->id]);

    // Act and Asser
    expect($job->employer->is($employer))->toBeTrue();
});

test('it can have tags', function () {
   $job = Job::factory()->create();

   $job->tag('Frontend');

   expect($job->tags)->toHaveCount(1);
});
