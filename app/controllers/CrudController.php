<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class CrudController extends Controller {


    public function __construct(){
        parent::__construct();
        $this->call->model('crud_model');
    }
    public function insert(){
        if($this->form_validation->submitted()){
            $this->form_validation
            ->name('username')
                  ->required()
            ->name('password')
                  ->required()
            ->name('age')
                  ->required()
            ->name('email');
                  if ($this->form_validation->run())
                  {
                    $this->crud_model->insert($this->io->post('username'),$this->io->post('password'),$this->io->post('email'),$this->io->post('age'));
                    redirect('4/');
                    exit();
                  }
                
         }
         $this->call->view('insert');
    }

    public function show(){
        $data=$this->crud_model->show();
        $this->call->view('viewuser',$data);

    }
    public function delete($id){
        if($this->crud_model->delete($id)){
            redirect('4/');
            exit;
        }
    }

    public function edit($id){
        $data=$this->crud_model->get($id);
        $this->call->view('update',$data);
    }

    public function updateData(){
        if($this->form_validation->submitted()){
            $this->form_validation
            ->name('username')
                  ->required()
            ->name('password')
                  ->required()
            ->name('age')
                  ->required()
            ->name('email');
                  if ($this->form_validation->run())
                  {
                   $this->crud_model->update($this->io->post('id'),$this->io->post('username'),$this->io->post('password'),$this->io->post('email'),$this->io->post('age'));
                    redirect('4/');
                    exit;

                   }
         }
    }


}
?>
