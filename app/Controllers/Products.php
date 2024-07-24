<?php
namespace App\Controllers;

use App\Models\ProductModel;

class Products extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('product_list', $data);
    }

    public function create()
    {
        return view('add_product');
    }

    public function store()
    {
        $model = new ProductModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price')
            ,'date' => $this->request->getPost('date')
        ];
        $model->insert($data);
        return redirect()->to('/');
    }

    public function edit($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id);
        return view('edit_product', $data);
    }

    public function update($id)
    {
        $model = new ProductModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price')
            // ,'price' => $this->request->getPost('price')
        ];
        $model->update($id, $data);
        return redirect()->to('/');
    }

    public function delete($id)
    {
        $model = new ProductModel();
        $model->delete($id);
        return redirect()->to('/');
    }
}
