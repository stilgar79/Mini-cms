<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_DefaultTemplate {

public function action_index()
 {
    $ko3_inner               = array();
    $ko3                     = array();
    $this->template->title   = 'Test skórek dla serwisu';

    $dana_inner['content']   = 'Jakas informacja';
    $test['content']         = 'Glówna jakaś informacja';
    $test['inner']           = View::factory('admin/bloki/blok', $dana_inner)
                                                                    ->render();
    $this->template->content = View::factory('admin/admin_default', $test);
 }
} // End Welcome
