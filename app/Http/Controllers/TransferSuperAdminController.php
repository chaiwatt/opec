<?php

namespace App\Http\Controllers;

use App\Model\Project;
use Illuminate\Http\Request;
use App\Model\SubsidyCategory;
use App\Model\ProjectAllocation;
use App\Model\TransferTransaction;
use App\Model\AllocationTransaction;

class TransferSuperAdminController extends Controller
{
    public function Index(){
        $project = Project::where('status',1)->first();
        $subsidycategories = SubsidyCategory::get();
        $allocationtransactions = AllocationTransaction::where('project_id',$project->id)->get();
        $transfertransactions = TransferTransaction::where('project_id',$project->id)->where('transfer_type',1)->get();
        $projectallocations = ProjectAllocation::where('project_id',$project->id)->get();
        return view('transfer.superadmin.index')->withTransfertransactions($transfertransactions)
                                            ->withSubsidycategories($subsidycategories)
                                            ->withAllocationtransactions($allocationtransactions)
                                            ->withProjectallocations($projectallocations);
    }

    public function Create(){
        $project = Project::where('status',1)->first();
        $subsidycategories = SubsidyCategory::get();
        $allocationtransactions = AllocationTransaction::where('project_id',$project->id)->where('allocation_type',1)->get();
        $transfertransactions = TransferTransaction::where('project_id',$project->id)->where('transfer_type',1)->get();
        // return $transfertransactions;
        $projectallocations = ProjectAllocation::where('project_id',$project->id)->get();
        return view('transfer.superadmin.create')->withTransfertransactions($transfertransactions)
                                            ->withSubsidycategories($subsidycategories)
                                            ->withAllocationtransactions($allocationtransactions)
                                            ->withProjectallocations($projectallocations);
    }

    public function CreateSave(Request $request){
        $project = Project::where('status',1)->first();
        
        foreach( $request->projecttransfer as $key => $transfer ){
            echo 'key: ' . $key . ' transfer:' . $transfer . '</br>';
            if(($transfer != 0 && !Empty($transfer))){                   
                $check = TransferTransaction::where('project_id',$project->id)
                                            ->where('allocation_transaction_id',$key)->first();
                if(Empty($check)){
                    $allocationtransaction = new TransferTransaction();
                    $allocationtransaction->project_id = $project->id;
                    $allocationtransaction->allocation_transaction_id = $key;
                    $allocationtransaction->transfer = $transfer;
                    $allocationtransaction->transfer_type = 1;
                    $allocationtransaction->save();
                }
            }
        }
        return redirect()->back()->withSuccess('โอนเงินงบประมาณสำเร็จ');
    }
}
