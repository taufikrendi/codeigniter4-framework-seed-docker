<?php

namespace App\Controllers;

use App\Models\RegistrationModel;

class Registration extends BaseController
{
    public function index()
    {
        $guid           = guid();
        $MovieModel     = new RegistrationModel();
        $data['title'] = "Create Movie";
        $rules          = [
            'fullname'      => ['label' => 'Nama Lengkap', 'rules' => 'min_length[3]|max_length[50]'],
            'email'         => ['label' => 'E-Mail', 'rules' => 'valid_email'],
            'password'      => ['label' => 'Password', 'rules' => 'min_length[9]|max_length[15]'],
            'repeatPassword'=> ['label' => 'Ulangi Kata Sandi', 'rules' => 'matches[password]'],
            'phone'         => ['label' => 'No. Telp', 'rules' => 'required']
        ];

        if($this->request->getMethod() == 'post'){
            if($this->validate($rules)){
                $movieData = array(
                    'registrations.id'      => $guid,
                    'accounts.id'           => $guid,
                    'profile.id'            => $guid,
                    'registrations.email'   => $this->request->getPost('email'),
                    'accounts.email'        => $this->request->getPost('email'),
                    'accounts.password'     => $this->request->getPost('repeatPassword'),
                    'profile.fullname'      => $this->request->getPost('fullname'),
                    'profile.phone'         => $this->request->getPost('phone')
                );

                var_dump($movieData);
                // esc => escape character, help prevent XSS attacks
                if($MovieModel->save(esc($movieData))){
                    //redirect same page, and show flash success message
                    return redirect()->to('/')->with('message_noti', 'Success create new movie!');
                }else {
                    //redirect same page, and show flash error message
                    return redirect()->back()->with('message_error', 'Registrasi Gagal!');
                }
            }else {
                // validation info
                $data['validation'] = $this->validator;
            }
        }
        return view('registration/index', $data);

//        if ($this->request->getMethod() == "post") {


//            if(!$rules){
//                session()->setFlashdata("Registrasi Gagal!", "Silahkan Perbaiki.");
//                return view('registration/index');
//            }

//            if($validation->withRequest($this->request->getPost())->run()){ }

//            $guid           = guid();
//            $fullname 	    = $this->request->getPost('fullname');
//            $email	        = $this->request->getPost('email');
//            $repeatPassword	= $this->request->getPost('repeatPassword');
//            $phone          = $this->request->getPost('phone');

//          $model->save([
//                'registrations.id'      => $guid,
//                'accounts.id'           => $guid,
//                'profile.id'            => $guid,
//                'registrations.email'   => $this->request->getVar('email'),
//                'accounts.email'        => $this->request->getVar('email'),
//                'accounts.password'     => $this->request->getVar('repeatPassword'),
//                'profile.fullname'      => $this->request->getVar('fullname'),
//                'profile.phone'         => $this->request->getVar('phone')
//          ]);
//            session()->setFlashdata("Sukses!", "Silahkan Cek E-Mail Anda Untuk Aktivasi");
//            var_dump($fullname, $email, $repeatPassword, $repeatPassword, $phone);
//        }
//
//        return view('registration/index');
    }

    public function forgot()
    {
        return view('registration/forgot');
    }
}
