<?php

namespace App\Controllers;

class Books extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $booksModel = new \App\Models\BooksModel();
        $table['books'] = $booksModel->findAll();
        $data = [
            'title' => 'Books repository',
            'activeOption' => 'books',
            'books' => $table['books'],
        ];

        return view('books_page', $data);
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
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        $data = [
            'title' => 'Create new book',
            'activeOption' => 'books'
        ];
        return view('new_book_page', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $rules = [
            'title' => 'required',
            'description' => 'permit_empty|min_length[5]',
            'path' => 'required|valid_url|max_length[255]|is_unique[books.path]',
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $post=$this->request->getPost(['title', 'author', 'description', 'published_year', 'path']);

        $booksModel = new \App\Models\BooksModel();
        $booksModel->insert([
            'title' => trim($post['title']),
            'author' => trim($post['author']),
            'description' => trim($post['description']),
            'published_year' => $post['published_year'],
            'path' => trim($post['path']),
        ]);

        return redirect()->to('books');
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
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
        //
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
        //
    }
}
