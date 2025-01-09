<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Orders extends ResourceController
{

    protected $modelName = 'App\Models\OrderModel';
    protected $format    = 'json';
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        $order = $this->model->find($id);

        if (!$order) {
            return $this->failNotFound('Order not found');
        }
        return $this->respond($order);
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $input = $this->request->getJSON(true);
        
        if (empty($input)) {
            return $this->fail('No data provided');
        }
        
        if ($this->model->insert($input)) {
            return $this->respondCreated($input);
        }
        
        return $this->failValidationErrors($this->model->errors());
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        $input = $this->request->getJSON(true);
        
        if (!$this->model->find($id)) {
            return $this->failNotFound('Order not found');
        }
                
        if ($this->model->update($id, $input)) {
            return $this->respond($input);
        }
        
        return $this->failValidationErrors($this->model->errors());
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        if (!$this->model->find($id)) {
            return $this->failNotFound('Order not found');
        }
        $this->model->delete($id);
        return $this->respondDeleted(['id' => $id, 'message' => 'Order #' . $id . ' has been deleted']);
    }
}
