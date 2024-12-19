<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // Get all roles
    public function index()
    {
        return response()->json(Role::all(), 200);
    }

    // Store new role
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:roles,name',
            'description' => 'nullable|string',
        ]);

        $role = Role::create($validated);
        return response()->json($role, 201);
    }

    // Show role by ID
    public function show($id)
    {
        $role = Role::find($id);
        if (!$role) {
            return response()->json(['message' => 'Role not found'], 404);
        }
        return response()->json($role, 200);
    }

    // Update role
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        if (!$role) {
            return response()->json(['message' => 'Role not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|unique:roles,name,' . $role->id,
            'description' => 'nullable|string',
        ]);

        $role->update($validated);
        return response()->json($role, 200);
    }

    // Delete role
    public function destroy($id)
    {
        $role = Role::find($id);
        if (!$role) {
            return response()->json(['message' => 'Role not found'], 404);
        }
        $role->delete();
        return response()->json(['message' => 'Role deleted'], 200);
    }
}

Role::create([
    'name' => 'admin',
    'description' => 'Administrator with full access'
]);

Role::create([
    'name' => 'employer',
    'description' => 'Employer who can post job listings'
]);

Role::create([
    'name' => 'job_seeker',
    'description' => 'Job seeker who can apply to jobs'
]);

$roles = Role::all();
foreach ($roles as $role) {
    $role->created_at = now();
    $role->updated_at = now();
    $role->save();
}

