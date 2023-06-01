<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Pages extends BaseController
{

    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        #$data['title'] = ucfirst($page); // Capitalize the first letter

        return #view('templates/header', $data)
            view('templates/navbar')
            .view('pages/' . $page )
            . view('templates/footer');
    

    function view($page = 'hola')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        #$data['title'] = ucfirst($page); // Capitalize the first letter

        return #view('templates/header', $data)
        view('templates/navbar')
        .view('pages/' . $page )
        . view('templates/footer');
    }

    function view($page = 'Seguimiento')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        #$data['title'] = ucfirst($page); // Capitalize the first letter

        return #view('templates/header', $data)
        view('templates/navbar')
        .view('pages/' . $page )
        . view('templates/footer');
    }
    
}
}

