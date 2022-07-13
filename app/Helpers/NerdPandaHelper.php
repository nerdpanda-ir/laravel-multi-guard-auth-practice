<?php
use Illuminate\Database\Events\QueryExecuted ;
use App\Facades\QueryExecutedFacade;
?>
<?php
if (!function_exists('queryExecutedToArray')){
    function queryExecutedToArray(QueryExecuted $event ):array {
        return QueryExecutedFacade::toArray($event);
    }
}
