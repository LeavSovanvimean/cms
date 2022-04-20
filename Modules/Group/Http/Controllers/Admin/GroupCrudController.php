<?php

namespace Modules\Group\Http\Controllers\Admin;

use Modules\Group\Http\Requests\GroupRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class GroupCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class GroupCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\Modules\Group\Entities\Group::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/group');
        CRUD::setEntityNameStrings('group', 'groups');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->orderBy('id', 'ASC');
        $this->crud->addColumn([
            'name' => "id",
            'label' => "ID",
            'type' => "text",
         ])->makeFirstColumn();

        $this->crud->addColumn([
            'type' => 'checkbox',
            'name' => 'bulk_actions',
            'label' => ' <input type="checkbox" class="crud_bulk_actions_main_checkbox" style="width: 16px; height: 16px; padding-left:0px;" />',
            'priority' => 1,
            'searchLogic' => false,
            'orderable' => false,
            'visibleInModal' => false,
        ]);

        CRUD::column('group_name');
        CRUD::column('Year');
        CRUD::column('Semester');

        $this->crud->addColumn([
            'name' => "Teachers",
            'label' => "Teachers", // Table column heading
            'type' => "model_function",
            'function_name' => 'teacherCount', // the method in your Model
         ]);

        $this->crud->addColumn([
            'name' => "Students",
            'label' => "Students", // Table column heading
            'type' => "model_function",
            'function_name' => 'studentsCount', // the method in your Model
         ]);

         $this->crud->addColumn([
            'name' => "Active",
            'label' => "Active", // Table column heading
            'type' => "model_function",
            'function_name' => 'activeCount', // the method in your Model
         ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(GroupRequest::class);

        CRUD::field('group_name');

        $this->crud->addField([
            'name'        => 'year',
            'label'       => "Year",
            'type'        => 'select2_from_array',
            'options'     => [
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4'
            ],
            'allows_null' => false,
            'default'     => 'one',
            'wrapper' => [
                'class' => 'form-group col-md-6'
            ]
        ]);

        $this->crud->addField([
            'name'        => 'semester',
            'label'       => "Semester",
            'type'        => 'select2_from_array',
            'options'     => [
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                '8' => '8'
            ],
            'allows_null' => false,
            'default'     => 'one',
            'wrapper' => [
                'class' => 'form-group col-md-6'
            ]
        ]);

        CRUD::addField([
            'label'         => "Teacher",
            'type'          => "select2_multiple",
            'name'          => 'teacher',
            'placeholder'   => "Select a Teacher",
            'model'         => 'App\Models\Teacher',
            'pivot'     => true,
            // 'method'                  => 'POST',
            // 'include_all_form_fields' => false,
        ]);
    }

    protected function setupShowOperation()
    {

        CRUD::column('group_name');

        $this->crud->addColumn([
            'name' => "Teachers",
            'label' => "Total Teachers", // Table column heading
            'type' => "model_function",
            'function_name' => 'teacherCount', // the method in your Model
         ]);
        CRUD::column('teacher');

        $this->crud->addColumn([
            'name' => "Students",
            'label' => "Total Students", // Table column heading
            'type' => "model_function",
            'function_name' => 'studentsCount', // the method in your Model
         ]);

         $this->crud->addColumn([
            'name' => "Active",
            'label' => "Active", // Table column heading
            'type' => "model_function",
            'function_name' => 'activeCount', // the method in your Model
         ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
