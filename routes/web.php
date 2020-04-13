<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'demo'], function(){                 
    Route::get('create','Demo\DemoDataController@Create')->name('demo.create'); 
});
Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => 'dashboard'], function(){       
        Route::group(['prefix' => 'superadmin'], function(){       
            Route::get('','DashboardSuperAdminController@Index')->name('dashboard.superadmin.index'); 
        });
        Route::group(['prefix' => 'provincial'], function(){       
            Route::get('','DashboardProvincialController@Index')->name('dashboard.provincial.index'); 
        });
        Route::group(['prefix' => 'provincialarea'], function(){       
            Route::get('','DashboardProvincialAreaController@Index')->name('dashboard.provincialarea.index'); 
        });
        Route::group(['prefix' => 'school'], function(){       
            Route::get('','DashboardSchoolController@Index')->name('dashboard.school.index'); 
        });
        Route::group(['prefix' => 'teacher'], function(){       
            Route::get('','DashboardTeacherController@Index')->name('dashboard.teacher.index'); 
        });
    });
    Route::group(['prefix' => 'school'], function(){            
        Route::group(['prefix' => 'info'], function(){       
            Route::get('','SchoolInfoController@Index')->name('school.info.index'); 
        }); 
    });
    Route::group(['prefix' => 'cost'], function(){       
        Route::group(['prefix' => 'school'], function(){       
            Route::get('','CostSchoolController@Index')->name('cost.school.index'); 
        }); 
    });
    Route::group(['prefix' => 'setting'], function(){       
        Route::group(['prefix' => 'general'], function(){       
            Route::group(['prefix' => 'yearbudget'], function(){       
                Route::get('','SettingGeneralYearBudgetController@Index')->name('setting.general.yearbudget.index'); 
                Route::get('delete/{id}','SettingGeneralYearBudgetController@Delete')->name('setting.general.yearbudget.delete'); 
            });
            Route::group(['prefix' => 'subsidycategory'], function(){       
                Route::get('','SettingGeneralSubsidyCategoryController@Index')->name('setting.general.subsidycategory.index'); 
                Route::group(['prefix' => 'subsidysubcategory'], function(){       
                    Route::get('','SettingGeneralSubsidyCategorySubsidySubCategoryController@Index')->name('setting.general.subsidycategory.subsidysubcategory.index'); 
                });
            });
            Route::group(['prefix' => 'api'], function(){       
                Route::get('','SettingGeneralApiController@Index')->name('setting.general.api.index'); 
            });
        });

        Route::group(['prefix' => 'school'], function(){       
            Route::group(['prefix' => 'class'], function(){       
                Route::get('','SettingSchoolClassController@Index')->name('setting.school.class.index'); 
                Route::get('create','SettingSchoolClassController@Create')->name('setting.school.class.create'); 
                Route::post('createsave','SettingSchoolClassController@CreateSave')->name('setting.school.class.createsave'); 
                Route::get('edit/{id}','SettingSchoolClassController@Edit')->name('setting.school.class.edit'); 
                Route::get('delete/{id}','SettingSchoolClassController@Delete')->name('setting.school.class.delete'); 
            });
            Route::group(['prefix' => 'room'], function(){       
                Route::get('','SettingSchoolRoomController@Index')->name('setting.school.room.index'); 
                Route::get('create','SettingSchoolRoomController@Create')->name('setting.school.room.create'); 
                Route::post('createsave','SettingSchoolRoomController@CreateSave')->name('setting.school.room.createsave'); 
                Route::get('edit/{id}','SettingSchoolRoomController@Edit')->name('setting.school.room.edit'); 
                Route::get('delete/{id}','SettingSchoolRoomController@Delete')->name('setting.school.room.delete'); 
            });
            Route::group(['prefix' => 'student'], function(){       
                Route::get('','SettingSchoolStudentController@Index')->name('setting.school.student.index'); 
                Route::get('create','SettingSchoolStudentController@Create')->name('setting.school.student.create'); 
                Route::post('createsave','SettingSchoolStudentController@CreateSave')->name('setting.school.student.createsave'); 
                Route::get('edit/{id}','SettingSchoolStudentController@Edit')->name('setting.school.student.edit'); 
                Route::get('delete/{id}','SettingSchoolStudentController@Delete')->name('setting.school.student.delete'); 
            });
            Route::group(['prefix' => 'teacher'], function(){       
                Route::get('','SettingSchoolTeacherController@Index')->name('setting.school.teacher.index'); 
                Route::get('create','SettingSchoolTeacherController@Create')->name('setting.school.teacher.create'); 
                Route::post('createsave','SettingSchoolTeacherController@CreateSave')->name('setting.school.teacher.createsave'); 
                Route::get('edit/{id}','SettingSchoolTeacherController@Edit')->name('setting.school.teacher.edit'); 
                Route::get('delete/{id}','SettingSchoolTeacherController@Delete')->name('setting.school.teacher.delete'); 
            });
        });
    });
    Route::group(['prefix' => 'project'], function(){                 
        Route::get('','ProjectController@Index')->name('project.index'); 
        Route::get('create','ProjectController@Create')->name('project.create'); 
        Route::post('createsave','ProjectController@CreateSave')->name('project.createsave'); 
        Route::get('delete/{id}','ProjectController@Delete')->name('project.delete'); 
        Route::get('select/{id}','ProjectController@Select')->name('project.select'); 
        Route::group(['prefix' => 'allocation'], function(){       
            Route::get('/{id}','ProjectAllocationController@Index')->name('project.allocation.index'); 
            Route::get('create/{id}','ProjectAllocationController@Create')->name('project.allocation.create'); 
            Route::post('createsave/{id}','ProjectAllocationController@CreateSave')->name('project.allocation.createsave'); 
        });
    });
    Route::group(['prefix' => 'allocation'], function(){       
        Route::group(['prefix' => 'superadmin'], function(){       
            Route::get('','AllocationSuperAdminController@Index')->name('allocation.superadmin.index'); 
            Route::get('create','AllocationSuperAdminController@Create')->name('allocation.superadmin.create');
            Route::post('createsave','AllocationSuperAdminController@CreateSave')->name('allocation.superadmin.createsave');
        });
        Route::group(['prefix' => 'provincial'], function(){       
            Route::get('','AllocationProvincialController@Index')->name('allocation.provincial.index'); 
            Route::get('create','AllocationProvincialController@Create')->name('allocation.provincial.create'); 
            Route::post('createsave','AllocationProvincialController@CreateSave')->name('allocation.provincial.createsave'); 
        });
        Route::group(['prefix' => 'provincialarea'], function(){       
            Route::get('','AllocationProvincialAreaController@Index')->name('allocation.provincialarea.index'); 
            Route::get('create','AllocationProvincialAreaController@Create')->name('allocation.provincialarea.create'); 
            Route::post('createsave','AllocationProvincialAreaController@CreateSave')->name('allocation.provincialarea.createsave'); 
        });
    });
    Route::group(['prefix' => 'transfer'], function(){       
        Route::group(['prefix' => 'superadmin'], function(){       
            Route::get('','TransferSuperAdminController@Index')->name('transfer.superadmin.index'); 
            Route::get('create','TransferSuperAdminController@Create')->name('transfer.superadmin.create'); 
            Route::post('createsave','TransferSuperAdminController@CreateSave')->name('transfer.superadmin.createsave'); 
        });
        Route::group(['prefix' => 'provincial'], function(){       
            Route::get('','TransferProvincialController@Index')->name('transfer.provincial.index'); 
            Route::get('create','TransferProvincialController@Create')->name('transfer.provincial.create'); 
            Route::post('createsave','TransferProvincialController@CreateSave')->name('transfer.provincial.createsave'); 
        });
        Route::group(['prefix' => 'provincialarea'], function(){       
            Route::get('','TransferProvincialAreaController@Index')->name('transfer.provincialarea.index'); 
            Route::get('create','TransferProvincialAreaController@Create')->name('transfer.provincialarea.create'); 
            Route::post('createsave','TransferProvincialAreaController@CreateSave')->name('transfer.provincialarea.createsave'); 
        });
    });
    Route::group(['prefix' => 'api'], function(){       
        Route::group(['prefix' => 'setting'], function(){       
            Route::group(['prefix' => 'general'], function(){       
                Route::post('selectyear','Api\SettingGeneralController@SelectYear')->name('api.setting.general.selectyear'); 
                Route::post('addyear','Api\SettingGeneralController@AddYear')->name('api.setting.general.addyear'); 
                Route::post('addsubsidycategory','Api\SettingGeneralController@AddSubsidyCategory')->name('api.setting.general.addsubsidycategory'); 
            });
        });
        Route::group(['prefix' => 'webapi'], function(){       
            Route::get('project','Api\WebApiController@Project')->name('api.webapi.project'); 
            Route::get('allocation/{id}','Api\WebApiController@Allocation')->name('api.webapi.allocation'); 
        });
    });

});
