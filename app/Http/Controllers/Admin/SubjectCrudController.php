<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SubjectRequest;
use App\Models\Subject;
use App\Models\Teacher;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Log;

/**
 * Class SubjectCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SubjectCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation {
        update as traitUpdate;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Subject::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/subject');
        CRUD::setEntityNameStrings('subject', 'subjects');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addFilter(
            [
                'name' => 'subjectName',
                'type' => 'select2',
                'labal' => 'SubjectName',
            ],
            function () {
                return Subject::pluck('SubjectName', 'SubjectName')->toArray();
            }
        );

        $this->crud->addColumn([
            'type' => 'checkbox',
            'name' => 'bulk_actions',
            'label' => ' <input type="checkbox" class="crud_bulk_actions_main_checkbox" style="width: 16px;  height: 16px; padding-left:0px;" />',
            'priority' => 1,
            'searchLogic' => false,
            'orderable' => false,
            'visibleInModal' => false,
        ]);

        $this->crud->orderBy('id', 'ASC');
        $this->crud->addColumn([
            'name' => "id",
            'label' => "ID",
            'type' => "text",
         ])->makeFirstColumn();



        $this->crud->addFilter(
            [
                'name' => 'code',
                'type' => 'select2',
                'label' => 'Code',
            ],
            function () {
                return Subject::pluck('code', 'code')->toArray();
            }
        );

        $this->crud->addColumn([
            'name' => 'code',
            'type' => 'text',
            'labal' => 'Code'
        ]);

        $this->crud->addColumn([
            'name' => 'subjectName',
            'type' => 'text',
            'labal' => 'SubjectName'
        ]);

        $this->crud->addColumn([
            'name' => "Teachers",
            'label' => "Teachers", // Table column heading
            'type' => "model_function",
            'function_name' => 'teacherCount', // the method in your Model
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
        CRUD::setValidation(SubjectRequest::class);

        CRUD::field('code');

        CRUD::field('subjectName');

        CRUD::addField([
            'label'         => "Teacher",
            'type'          => "select2_multiple",
            'name'          => 'teacher',
            'placeholder'   => "Select a Teacher",
            'model'         => 'App\Models\Teacher',
            'pivot'     => true,
        ]);

    }

    protected function setupShowOperation()
    {

        $this->crud->orderBy('id', 'ASC');
        $this->crud->addColumn([
            'name' => "id",
            'label' => "ID",
            'type' => "text",
         ])->makeFirstColumn();

        $this->crud->addColumn([
            'name' => 'code',
            'type' => 'text',
            'labal' => 'Code'
        ]);

        $this->crud->addColumn([
            'name' => 'subjectName',
            'type' => 'text',
            'labal' => 'SubjectName'
        ]);

        $this->crud->addColumn([
            'name' => "Teachers",
            'label' => "Total Teachers", // Table column heading
            'type' => "model_function",
            'function_name' => 'teacherCount', // the method in your Model
         ]);

         $this->crud->addColumn([
            'name'  => 'teacher',
            'label' => 'Name',
            'type'  => 'relationship',
         ]);
    }

    public function store()
    {
        CRUD::addfield([
            'name' => 'created_by',
            'type' => 'hidden'
        ]);
        request()->merge([
            'created_by' => backpack_user()->id
        ]);
        $response = $this->traitStore();
        return $response;
    }

    public function update()
    {
        CRUD::addfield([
            'name' => 'updated_by',
            'type' => 'hidden'
        ]);
        request()->merge([
            'updated_by' => backpack_user()->id
        ]);
        $response = $this->traitUpdate();
        return $response;
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
