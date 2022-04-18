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
        CRUD::column('id');
        CRUD::column('group_name');

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

        // CRUD::addField([
        //     'label'       => "Student",
        //     'type'        => "select2_from_ajax_multiple",
        //     'name'        => 'student_id',
        //     'attribute'   => "name",
        //     'data_source' => url("api/student"),
        //     'placeholder'             => "Add Students",
        //     'minimum_input_length'    => 1,
        //     'model' => 'App\Models\Group',
        //     'method'                  => 'GET',
        //     'include_all_form_fields' => false,
        // ]);
    }

    protected function setupShowOperation()
    {
        CRUD::column('group_name');

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
