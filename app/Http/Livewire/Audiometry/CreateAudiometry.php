<?php

namespace App\Http\Livewire\Audiometry;

use Livewire\Component;

class CreateAudiometry extends Component
{


    public $dataRigth = [0, 0, 0, 0, 0, 0, 0];
    public $dataLeft = [0, 0, 0, 0, 0, 0, 0];

    public $frequency;
    public $listEjeX = ['125', '250', '500', '1000', '2000', '4000', '8000'];

    protected $listeners = [
        'addOtherEjeX',
        'updatedListEjeX',
        'removeEjeX'
    ];

    public function render()
    {
        return view('livewire.audiometry.create-audiometry');
    }

    public function addOtherEjeX()
    {
        $this->validate([
            'frequency' => 'required',
        ]);
        array_push($this->listEjeX, $this->frequency);
        array_push($this->dataRigth, 0);
        array_push($this->dataLeft, 0);

        $this->reset([
            'frequency',
        ]);
        $this->emit('listEjeXUpdated', $this->listEjeX, $this->dataRigth, $this->dataLeft);
    }

    public function updated()
    {
        $this->emit('listEjeXUpdated', $this->listEjeX, $this->dataRigth, $this->dataLeft);
    }
    public function removeEjeX($indexArray)
    {
        // Verificar si el índice existe y es válido
        if (isset($this->listEjeX[$indexArray]) && isset($this->dataRigth[$indexArray]) && isset($this->dataLeft[$indexArray])) {
            unset($this->listEjeX[$indexArray]);
            unset($this->dataRigth[$indexArray]);
            unset($this->dataLeft[$indexArray]);

            // Reindexar los arrays para llenar los huecos dejados por unset()
            $this->listEjeX = array_values($this->listEjeX);
            $this->dataRigth = array_values($this->dataRigth);
            $this->dataLeft = array_values($this->dataLeft);

            $this->emit('listEjeXUpdated', $this->listEjeX, $this->dataRigth, $this->dataLeft);
        }
    }
}
