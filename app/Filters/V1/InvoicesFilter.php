<?php
namespace App\Filters\v1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter{

    protected $safeParams = [
        'customerId'=> ['eq'],
        'amount'=> ['eq','lt','gt','lte','gte'],
        'status'=>['eq','ne'],
        'billedDate' => ['eq','lt','gt','lte','gte'],
        'paidDate'=> ['eq','lt','gt','lte','gte']
    ];
    
    protected $coulmnMap =
    ['customerId'=>'customer_id',
     'billedDate'=> 'billed_date',
     'paidDate' => 'paid_date']; 

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt'=> '>',
        'gte'=> '>='
    ];

   
}