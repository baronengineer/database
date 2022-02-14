<?php

 class About extends controller {
        public function index($nama='roni',$pekerjaan='programmer')
        {
            $data['nama'] = $nama;
            $data['pekerjaan'] = $pekerjaan;
            $data['judul'] = 'About me';
                
              
            $this->view('templates/header',$data);
            $this->view('about/index',$data);
            $this->view('templates/footer');
        }
    
        public function page ()
        {
            $data['judul'] = 'page';
            $this->view('templates/header',$data);
            $this->view('about/page');
            $this->view('templates/footer');
        }
        
 }