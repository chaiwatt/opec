<?php

namespace App\Http\Controllers;

use App\Model\Project;
use Illuminate\Http\Request;
use App\Model\ProjectAllocation;
use App\Model\TransferTransaction;
use App\Model\AllocationTransaction;
use Illuminate\Support\Facades\Auth;
use App\Model\ProvincialSubAreaEducation;

class TransferProvincialController extends Controller
{
    public function Index(){
        $user = Auth::user();
        $project = Project::where('status',1)->first();
        $projectallocations = ProjectAllocation::where('project_id',$project->id)->get();
        $allocationtransactions = AllocationTransaction::where('project_id',$project->id)
                                                    ->where('provincial_education_id',$user->provincial_education_id)
                                                    ->where('allocation_type',2)->get();
        $transfertransactions = TransferTransaction::where('project_id',$project->id)->where('transfer_type',2)->get();
        return view('transfer.provincial.index')->withProjectallocations($projectallocations)
                                                ->withAllocationtransactions($allocationtransactions)
                                                ->withTransfertransactions($transfertransactions);

    }

    public function Create(){
        $user = Auth::user();
        $project = Project::where('status',1)->first();
        $projectallocations = ProjectAllocation::where('project_id',$project->id)->get();
        $allocationtransactions = AllocationTransaction::where('project_id',$project->id)
                                                    ->where('provincial_education_id',$user->provincial_education_id)
                                                    ->where('allocation_type',2)->get();
        $provincialsubareaeducations = ProvincialSubAreaEducation::where('provincial_education_id',$user->provincial_education_id)->get();
        return view('transfer.provincial.create')->withProjectallocations($projectallocations)
                                                ->withAllocationtransactions($allocationtransactions)
                                                ->withProvincialsubareaeducations($provincialsubareaeducations);
    }

    
    public function CreateSave(Request $request){
        $project = Project::where('status',1)->first();
        foreach( $request->projecttransfer as $key => $transfer ){
            if(($transfer != 0 && !Empty($transfer))){                   
                $check = TransferTransaction::where('project_id',$project->id)
                                            ->where('allocation_transaction_id',$key)->first();
                if(Empty($check)){
                    $transfertransaction = new TransferTransaction();
                    $transfertransaction->project_id = $project->id;
                    $transfertransaction->allocation_transaction_id = $key;
                    $transfertransaction->transfer = $transfer;
                    $transfertransaction->transfer_type = 2;
                    $transfertransaction->save();
                }
            }
        }
        return redirect()->back()->withSuccess('จัดสรรงบประมาณสำเร็จ');
    }
}
