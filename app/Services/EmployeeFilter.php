<?php
namespace App\Services;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class EmployeeFilter{
    protected $safeParms = [
        'pfNumber' => ['eq', 're'],
        'surname' => ['eq', 're'],
        'otherNames' => ['eq', 're'],
        'phoneNumber' => ['eq', 're'],
        'email' => ['eq']
    ];

    protected $columnMap = [
        'pfNumber' => 'pf_number',
        'otherNames' => 'other_name',
        'phoneNumber' => 'phone_number'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        're' => 'regexp'
    ];

    public function transform(Request $request){
        $eloQuery = [];
        
        foreach($this->safeParms as $parm=>$operators){
            $query = $request->query($parm);
            error_log($query);
            
            if(isset($query)){
                continue;
            }
            
            $column = $this->columnMap[$parm]??$parm;
            
            foreach($operators as $operator){
                if(isset($query[$operator])){
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $eloQuery;
    }
}