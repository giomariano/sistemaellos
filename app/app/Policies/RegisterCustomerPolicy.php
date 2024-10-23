<?php

namespace App\Policies;

use App\Models\User;
use App\Models\RegisterCustomer;
use Illuminate\Auth\Access\HandlesAuthorization;

class RegisterCustomerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_register::customer');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, RegisterCustomer $registerCustomer): bool
    {
        return $user->can('view_register::customer');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_register::customer');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, RegisterCustomer $registerCustomer): bool
    {
        return $user->can('update_register::customer');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, RegisterCustomer $registerCustomer): bool
    {
        return $user->can('delete_register::customer');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_register::customer');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, RegisterCustomer $registerCustomer): bool
    {
        return $user->can('force_delete_register::customer');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_register::customer');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, RegisterCustomer $registerCustomer): bool
    {
        return $user->can('restore_register::customer');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_register::customer');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, RegisterCustomer $registerCustomer): bool
    {
        return $user->can('replicate_register::customer');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_register::customer');
    }
}
