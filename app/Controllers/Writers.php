<?php

namespace App\Controllers;

use App\Models\Writer;
use CodeIgniter\RESTful\ResourceController;

class Writers extends ResourceController
{
    protected $modelName = 'App\Models\WriterModel';
    protected $format    = 'json';

    // GET /writers
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // GET /writers/{id}
    public function show($id = null)
    {
        $data = $this->model->find($id);
        if (!$data) {
            return $this->failNotFound('Item not found');
        }
        return $this->respond($data);
    }

    // POST /writers
    public function create()
    {
        $input = $this->request->getJSON(true);
        log_message('debug', print_r($input, true));  // Log the input for debugging

        if (empty($input)) {
            return $this->fail('No data provided');
        }
        
        
        if ($this->model->insert($input)) {
            print_r($this->model->errors); die;
            return $this->respondCreated($input);
        }
        return $this->failValidationErrors($this->model->errors());
    }

    // PUT /writers/{id}
    public function update($id = null)
    {
        $input = $this->request->getRawInput();
        if (!$this->model->find($id)) {
            return $this->failNotFound('Item not found');
        }
        if ($this->model->update($id, $input)) {
            return $this->respond($input);
        }
        return $this->failValidationErrors($this->model->errors());
    }

    // DELETE /writers/{id}
    public function delete($id = null)
    {
        if (!$this->model->find($id)) {
            return $this->failNotFound('Item not found');
        }
        $this->model->delete($id);
        return $this->respondDeleted(['id' => $id, 'message' => 'Item deleted']);
    }
}
