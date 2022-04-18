<?php

namespace App\Http\Controllers\Admin;

use App\Models\Classroom;
use App\Libraries\dashboardLib;
use App\Http\Requests\ClassroomRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ClassroomCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ClassroomCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Classroom::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/classroom');
        CRUD::setEntityNameStrings('schedule', 'schedule');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.co m/docs/crud-operation-list-entries
     * @return void
     */


    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name'      => 'image', // The db column name
            'label'     => 'Profile', // Table column heading
            'type'      => 'image',
            // 'prefix' => '/storage/',
            'height' => '70px',
            'width'  => '50px'
        ]);

        $this->crud->addColumn([
            'name'         => 'group',
            'type'         => 'relationship',
            'label'        => 'Group',
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
        CRUD::setValidation(ClassroomRequest::class);

        $this->crud->addField([
            'label'     => "Group",
            'type'      => 'select2',
            'name'      => 'group_id',
            'entity'   => 'group',
            'attribute' => 'group_name',
            'model'     => "\Modules\Group\Entities\Group",
        ]);

        $this->crud->addField([
            'label' => "Schedule Image",
            'name' => "image",
            'type' => 'image',
            'crop' => true,
            // 'aspect_ratio' => 3,
            // 'prefix'    => '/uploads/images',
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


    public function store()
    {

        // dd(request()->start_date);

        CRUD::addfield([
            'name' => 'created_by',
            'type' => 'hidden'
        ]);
        request()->merge([
            'created_by' => backpack_user()->id
        ]);

        $response = $this->traitStore();

        // $this->crud->entry->update([
        //     'code' => "001"
        // ]);

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
}
