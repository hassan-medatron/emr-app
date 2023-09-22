<?php

namespace App\DataTables;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn();
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('users-table')
            ->columns($this->getColumns())
            ->responsive()
            ->minifiedAjax()
            ->dom(
                '<"row mb-4"
                    <"col-6" B>
                >

                <"row mb-4"
                    <"col-6 d-flex justify-content-start" l>
                    <"col-6 d-flex justify-content-end" f>
                >

                <"row mb-4"
                    <"col-12" t>
                >

                <"row"
                    <"col-6 d-flex justify-content-start " i>
                    <"col-6 d-flex justify-content-end" p>
                >'
            )
            ->orderBy(0, 'asc')
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel')->text('<i class="bx bx-spreadsheet"></i>'),
                Button::make('csv')->text('<i class="bx bx-align-left"></i>'),
                Button::make('pdf')->text('<i class="bx bx-file"></i>'),
                Button::make('print')->text('<i class="bx bx-printer"></i>'),
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('email'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Users_' . date('YmdHis');
    }
}
