<?php
namespace App\Helper;

use DateTimeZone;
use Carbon\Carbon;
use App\Model\Project;
use App\Model\YearBudget;
use App\Model\WorkStation;
use App\Model\ProjectAllocation;
use App\Model\TransferTransaction;
use App\Model\AllocationTransaction;

class CreateDemoProject
{
    public static function createDemoProject(){
        $project = new Project();
        $project->name = 'โครงการเงินอุดหนุนโรงเรียนเอกชน';
        $project->year_budget_id = YearBudget::where('status',1)->first()->id;
        $project->budget = 1300000000;
        $project->start = '2020-04-07';
        $project->end = '2020-04-07';
        $project->note = 'ข้อความ';
        $project->status = '1';
        $project->created_at = Carbon::now(new DateTimeZone('Asia/Bangkok'))->toDateTimeString();
        $project->updated_at = Carbon::now(new DateTimeZone('Asia/Bangkok'))->toDateTimeString();
        $project->save();

        for ($i=1; $i <= 13; $i++) { 
            $projectallocation = new ProjectAllocation();
            $projectallocation->project_id = 1;
            $projectallocation->subsidy_category_id = $i;
            $projectallocation->budget = 100000000;
            $projectallocation->save();
        }

        for ($i=1; $i <=2 ; $i++) { 
            $allocationtransaction = new AllocationTransaction();
            $allocationtransaction->project_id = 1;
            $allocationtransaction->subsidy_category_id = $i;
            $allocationtransaction->provincial_education_id = 39;
            $allocationtransaction->budget = 100000000;
            $allocationtransaction->allocation_type = 1;
            $allocationtransaction->save();
        }

        for ($i=1; $i <=2 ; $i++) { 
            $allocationtransaction = new TransferTransaction();
            $allocationtransaction->project_id = 1;
            $allocationtransaction->allocation_transaction_id = $i;
            $allocationtransaction->transfer = 100000000;
            $allocationtransaction->transfer_type = 1;
            $allocationtransaction->save();
        }

        for ($i=1; $i <=2 ; $i++) { 
            for ($j=1; $j <=2 ; $j++) { 
                $allocationtransaction = new AllocationTransaction();
                $allocationtransaction->project_id = 1;
                $allocationtransaction->subsidy_category_id = $i;
                $allocationtransaction->provincial_education_id = 39;
                $allocationtransaction->budget = 50000000;
                $allocationtransaction->allocation_type = 2;
                $allocationtransaction->provincial_sub_area_education_id = $j;
                $allocationtransaction->save();
            }
        }


        for ($i=1; $i <=4 ; $i++) { 
            $transfertransaction = new TransferTransaction();
            $transfertransaction->project_id = 1;
            $transfertransaction->allocation_transaction_id = $i+2;
            $transfertransaction->transfer = 50000000;
            $transfertransaction->transfer_type = 2;
            $transfertransaction->save();
        }

        for ($i=1; $i <=2 ; $i++) { 
            for ($j=1; $j <=2 ; $j++) { 
                $allocationtransaction = new AllocationTransaction();
                $allocationtransaction->project_id = 1;
                $allocationtransaction->subsidy_category_id = $i;
                $allocationtransaction->provincial_education_id = 39;
                $allocationtransaction->budget = 25000000;
                $allocationtransaction->allocation_type = 3;
                $allocationtransaction->school_id = $j;
                $allocationtransaction->provincial_sub_area_education_id = 1;
                $allocationtransaction->save();
            }
        }

        for ($i=1; $i <=4 ; $i++) { 
            $transfertransaction = new TransferTransaction();
            $transfertransaction->project_id = 1;
            $transfertransaction->allocation_transaction_id = $i+6;
            $transfertransaction->transfer = 25000000;
            $transfertransaction->transfer_type = 3;
            $transfertransaction->save();
        }


        return;
    }
}