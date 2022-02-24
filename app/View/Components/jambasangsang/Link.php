<?php

namespace App\View\Components\Jambasangsang;

use Illuminate\View\Component;

class Link extends Component
{
    public $path = "";

    public function __construct()
    {
        $this->path = request()->path();
    }

    public function render()
    {
        return function (array $data) {
            if(isset($data['attributes']['href'])) {

                $data['attributes']["link"] = $data['attributes']['href'];

                if ($data['attributes']['href'] == "/".$this->path) {
                    $data['attributes']['active'] = $data['attributes']['class']." link-active-class";
                } else {
                    $data['attributes']['active'] = $data['attributes']['class'];
                }
            }

            return 'components.jambasangsang.link';
        };
    }
}
