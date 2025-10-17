<?php

namespace App\Infrastructure\Shared;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    // Get all records
    public function all(): Collection
    {
        return $this->model->all();
    }

    // Find by ID
    public function find(int $id): ?Model
    {
        return $this->model->find($id);
    }

    // Create a new record
    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    // Update a record by ID    
    public function update(int $id, array $data): ?Model
    {
        $record = $this->model->find($id);
        if (!$record) return null;

        $record->update($data);

        return $record;
    }

    // Delete a record by ID
    public function delete(int $id): bool
    {
        $record = $this->model->find($id);
        if (!$record) return false;

        return $record->delete();
    }
}
