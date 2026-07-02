<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * --------------------------------------------------------------------------
     * Display a listing of all employees.
     * --------------------------------------------------------------------------
     * HTTP Method: GET
     * Route: /employees
     *
     * This method fetches all employee records from the database.
     */
    public function index()
    {
        // Retrieve all employees from the database
        $employees = Employee::all();

        // Return the employees as a JSON response
        return response()->json([
            'message' => 'Employees fetched successfully.',
            'data' => $employees,
        ], 200);
    }

    /**
     * --------------------------------------------------------------------------
     * Show the form for creating a new employee.
     * --------------------------------------------------------------------------
     * HTTP Method: GET
     * Route: /employees/create
     *
     * In traditional Laravel (Blade), this returns a form view.
     * In API development, this method is usually NOT used because
     * the frontend (React, Vue, etc.) handles the form.
     */
    public function create()
    {
        return response()->json([
            'message' => 'Create method is not used in API development.'
        ], 200);
    }

    /**
     * --------------------------------------------------------------------------
     * Store a newly created employee.
     * --------------------------------------------------------------------------
     * HTTP Method: POST
     * Route: /employees
     *
     * This method:
     * 1. Validates incoming request data.
     * 2. Creates a new employee.
     * 3. Returns a success response.
     */
    public function store(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);

        // Create a new employee record
        $employee = Employee::create($validated);

        // Return success response
        return response()->json([
            'message' => 'Employee created successfully.',
            'data' => $employee,
        ], 201);
    }

    /**
     * --------------------------------------------------------------------------
     * Display a specific employee.
     * --------------------------------------------------------------------------
     * HTTP Method: GET
     * Route: /employees/{employee}
     *
     * Laravel automatically finds the employee using Route Model Binding.
     */
    public function show(Employee $id)
    {
        // Return the requested employee
        return response()->json([
            'message' => 'Employee fetched successfully.',
            'data' => $id,
        ], 200);
    }

    /**
     * --------------------------------------------------------------------------
     * Show the form for editing an employee.
     * --------------------------------------------------------------------------
     * HTTP Method: GET
     * Route: /employees/{employee}/edit
     *
     * Used in Blade applications.
     * APIs usually don't need this because React or another frontend
     * displays the edit form.
     */
    public function edit(Employee $employee)
    {
        return response()->json([
            'message' => 'Edit method is not used in API development.'
        ], 200);
    }

    /**
     * --------------------------------------------------------------------------
     * Update an existing employee.
     * --------------------------------------------------------------------------
     * HTTP Method: PUT/PATCH
     * Route: /employees/{employee}
     *
     * This method:
     * 1. Validates incoming data.
     * 2. Updates the employee.
     * 3. Returns the updated employee.
     */
    public function update(Request $request, Employee $employee)
    {
        // Validate request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);

        // Update employee information
        $employee->update($validated);

        // Return updated employee
        return response()->json([
            'message' => 'Employee updated successfully.',
            'data' => $employee,
        ], 200);
    }

    /**
     * --------------------------------------------------------------------------
     * Delete an employee.
     * --------------------------------------------------------------------------
     * HTTP Method: DELETE
     * Route: /employees/{employee}
     *
     * This method deletes the selected employee from the database.
     */
    public function destroy(Employee $employee)
    {
        // Delete the employee
        $employee->delete();

        // Return success response
        return response()->json([
            'message' => 'Employee deleted successfully.',
        ], 200);
    }
}