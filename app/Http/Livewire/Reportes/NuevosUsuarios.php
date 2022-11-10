<?php

namespace App\Http\Livewire\Reportes;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Charts;
class NuevosUsuarios extends Component
{
    public $anio,$añofiltro,$Enero,$Febrero,$Marzo,$Abril,$Mayo,$Junio,$Julio,$Agosto,$Septiembre,$Octubre,$Noviembre,$Diciembre;
    public $arrayAños= [];
    public $valores=[];
    public function mount(){
        
    }
    public function render()

    
    {
        $this->anio=$this->anio;
        $Enero=User::whereYear('created_at', $this->anio)
        ->whereMonth('created_at', date('01'))->count();
        $Febrero=User::whereYear('created_at', $this->anio)
        ->whereMonth('created_at', date('02'))->count();
        $Marzo=User::whereYear('created_at', $this->anio)
        ->whereMonth('created_at', date('03'))->count();
        $Abril=User::whereYear('created_at', $this->anio)
        ->whereMonth('created_at', date('04'))->count();
        $Mayo=User::whereYear('created_at', $this->anio)
        ->whereMonth('created_at', date('05'))->count();
        $Junio=User::whereYear('created_at', $this->anio)
        ->whereMonth('created_at', date('06'))->count();
        $Julio=User::whereYear('created_at', $this->anio)
        ->whereMonth('created_at', date('07'))->count();
        $Agosto=User::whereYear('created_at', $this->anio)
        ->whereMonth('created_at', date('08'))->count();
        $Septiembre=User::whereYear('created_at',$this->anio)
        ->whereMonth('created_at', date('09'))->count();
        $Octubre=User::whereYear('created_at', $this->anio)
        ->whereMonth('created_at', date('10'))->count();
        $Noviembre=User::whereYear('created_at', $this->anio)
        ->whereMonth('created_at', date('11'))->count();
        $Diciembre=User::whereYear('created_at',$this->anio)
        ->whereMonth('created_at', date('12'))->count();
        
        array_push($this->arrayAños, $Enero,$Febrero,$Marzo,$Abril,$Mayo,$Junio,$Julio,$Agosto,$Septiembre,$Octubre,$Noviembre,$Diciembre);
        $this->valores= $this->arrayAños;
        /*dd($valores)*/;
        return view('livewire.reportes.nuevos-usuarios')->with(compact($this->valores));
    }


    
}
