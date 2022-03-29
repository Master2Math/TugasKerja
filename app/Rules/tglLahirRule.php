<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;
use DateTime;
class tglLahirRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {  
        $a = $value;          
        // $tgl_input = \Carbon\Carbon::parse($a);  
        // $today = \Carbon\Carbon::now();
        // //   dd($tgl_input, $today);
        // $formatTgl = new DateTime(date("m-d-Y",strtotime($a)));
        // $formatToday = new DateTime(date("m-d-Y",strtotime($today)));
        $date = \Carbon\Carbon::now();


$difference = $date->diff(\Carbon\Carbon::parse($a));
if($difference->y < 6){
    return false;
    
}else{
    return true;
}
//return $difference->y < 6;



    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Umur Anda Tidak Cukup atau dibawah 6 tahun';
    }
}
