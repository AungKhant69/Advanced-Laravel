<?php

namespace App\Policies;

use App\Models\ScheduledClass;
use App\Models\User;

class ScheduledClassPolicy
{
    public function delete(User $user, ScheduledClass $scheduledClass){
        //if this user can delete scheduledClass, return true
        return $user->id === $scheduledClass->instructor_id;
     }

    /**   *****Organize all related authorization rules in one place*******
     * Create a new policy instance.
     */


}
