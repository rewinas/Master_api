<?php
namespace App\Filters\v1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CustomersFilter extends ApiFilter{

    protected $safeParams = [
        'name'=> ['eq'],
        'type'=> ['eq'],
        'email'=>['eq'],
        'address' => ['eq'],
        'city'=> ['eq'],
        'state'=> ['eq'],
        'postalCode'=> ['eq','gt','lt']
    ];
    
    protected $coulmnMap =
    ['postalCode'=>'postal_code']; 

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt'=> '>',
        'gte'=> '>='
    ];

    // public function transform (Request $request){
    //     $eloQuery = [];

    //     foreach($this->safeParams as $parm => $operators ){
    //         $query = $request->query($parm);
    //         if(!isset($query)){
    //             continue;
    //         }

    //         $column = $this->coulmnMap[$parm] ?? $parm;
    //         foreach($operators as $operator){
    //             if(isset($query[$operator])){
    //                 $eloQuery[] = [$column, $this->operatorMap[$operator],$query[$operator]];
    //             }
    //         }
    //     }
    //     return $eloQuery;
    // }
}