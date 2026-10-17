<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contacts extends BaseController
{
    public function index()
    {
        $model = new ContactModel(); //access to  table, model

        $data['contacts'] = $model->findAll(); //gets info from table, stores in contacts
        return view('contacts/index', $data);
    }

    public function create()
    {
    $data['validation'] = \Config\Services::validation();
       return view('contacts/create', $data); //loads add contact page
    }

    public function store()
    {
        helper(['form', 'url']); // load multiple helper files at once
        $contactModel = new ContactModel();
        $data = []; //gets data
        if (!$this->validate('newContact')) { //validates input

            $data['validation'] = $this->validator; // saves contact

            return view('contacts/create', $data); //reloads contact page

        } else {

            $contactModel->save([

                'first_name' => $this->request->getPost('first_name'),

                 'last_name' => $this->request->getPost('last_name'),

                  'phone' => $this->request->getPost('phone'),

                    'email' => $this->request->getPost('email'),

                     'address_line' => $this->request->getPost('address_line'),

                      'city' => $this->request->getPost('city'),

                        'postcode' => $this->request->getPost('postcode'),

                          'created_at' => date('Y-m-d H:i:s') //stores current date/time
            ]);

            $data ['contacts'] = $contactModel->findAll(); // gets data, stores it
            return view('contacts/index', $data); // loads page and sends data | sends it to view
        } }



    public function edit ($id) { // id passed through url
       $contactModel = new ContactModel(); //interacts w database
          $data['contact'] = $contactModel->find($id);
             return view('contacts/edit', $data); //loads edit.php
     }


 public function update($id)
 {

     $contactModel = new ContactModel(); // creates function

     $contactModel->update($id, [
         'first_name' => $this->request->getPost('first_name'),

           'last_name' => $this->request->getPost('last_name'),

             'phone' => $this->request->getPost('phone'),

               'email' => $this->request->getPost('email'),

                 'address_line' => $this->request->getPost('address_line'),

                   'city' => $this->request->getPost('city'),

                     'postcode' => $this->request->getPost('postcode')
     ]);

     $data['contacts'] = $contactModel->findAll();
     return view('contacts/index', $data); // sends updated data to view and refreshes table
 }

     public function delete($id) {
       $contactModel = new ContactModel();
         $contactModel->delete($id);
           $data['contacts'] = $contactModel->findAll();
             return view('contacts/index', $data);
  }

            public function search() { // creates function, search

            $contactModel = new ContactModel();
              $keyword = $this->request->getPost('keyword'); // input
                $data['contacts'] = $contactModel->like('first_name', $keyword)->orLike('last_name', $keyword)->findAll();

            // gets data and searches for firstname or lastname in the table (the keyword)
            // finall comes back with matching results

            return view('contacts/index', $data); }
            //loads table




    }
