<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\OrderWriter;
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
        $data = $this->model->findOrderWriterById($id);
        if (!$data) {
            return $this->failNotFound('Writer not found');
        }
        
        $order = new OrderModel();
        $data['orders'] = $order->find($data['order_id']);
        return $this->respond($data);
    }

    // POST /writers
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

    // PUT /writers/{id}
    public function update($id = null)
    {
        $input = $this->request->getJSON(true);
        
        if (!$this->model->find($id)) {
            return $this->failNotFound('Writer not found');
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
            return $this->failNotFound('Writer not found');
        }
        $this->model->delete($id);
        return $this->respondDeleted(['id' => $id, 'message' => 'Writer deleted']);
    }

    // Hire Writer
    public function hire() 
    {
        $input = $this->request->getJSON(true);
        $order_id = $input['order_id'] ?? 0;
        // check order ID if it exists
        if (!$order_id) {
            return $this->fail('Order ID is required.');
        }

        $orderModel = new OrderModel();
        $orderExist = $orderModel->find($order_id);

        if (!$orderExist) {
            return $this->failNotFound('Order not Found');
        }

        // check writer ID if it exists
        $writer_id = $input['writer_id'] ?? 0;
        if (!$writer_id) {
            return $this->fail('Writer ID is required.');
        }

        $writerExists = $this->model->find($writer_id);
        if (!$writerExists) {
            return $this->fail('Writer ID not found.');
        }

        // then assign
        $orderWriter = new OrderWriter();

        $data = [
            'order_id' => $order_id,
            'writer_id' => $writer_id
        ];

        if ($orderWriter->insert($data)) {
            return $this->respond(['message' => 'Writer hired successfully']);
        }
    }
}
