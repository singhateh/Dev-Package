<?php

namespace App\View\Components\Jambasangsang;

use Illuminate\View\Component;

class Table extends Component
{

    public array $theaders;
    public  $tbodys;

    public function __construct(array $theaders = null,  $tbodys = null)
    {
        $this->theaders = $this->formatTableHeader($theaders);
        // $this->tbodys = $tbodys;
    }

    public function formatTableHeader(array $theaders): array
    {
        return array_map(function ($thead) {
            $name = is_array($thead) ? $thead['name'] : $thead;

            return [
                'name' => $name,
                'classes' => $this->textAlignClasses($thead['align'] ?? 'left'),
            ];
        }, $theaders);
    }

    public function textAlignClasses($align): String
    {
        return  [
            'left' => 'text-left',
            'right' => 'text-right',
            'center' => 'text-center',
        ][$align] ?? 'left';
    }


    public function render()
    {
        return view('components.jambasangsang.table');
    }
}
