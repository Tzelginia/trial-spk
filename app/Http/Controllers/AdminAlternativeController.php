<?php

namespace App\Http\Controllers;

use App\Http\Requests\Alternative\AlternativeStoreRequest;
use App\Http\Requests\Alternative\AlternativeUpdateRequest;
use App\Models\Alternative;
use App\Models\Criteria;
use App\Models\TourismObject;
use Illuminate\Http\Request;

class AdminAlternativeController extends Controller
{
  public function index()
  {
    $this->authorize('admin');

    $usedIds    = Alternative::select('tourism_object_id')->distinct()->get();
    $usedIdsFix = [];

    foreach ($usedIds as $usedId) {
      array_push($usedIdsFix, $usedId->tourism_object_id);
    }

    $alternatives = TourismObject::whereIn('id', $usedIdsFix)
      ->with('alternatives')
      ->get();

    $tourismObjects = TourismObject::whereNotIn('id', $usedIdsFix)->get();

    return view('dashboard.alternative.index', [
      'title'           => 'Alternatives',
      'alternatives'    => $alternatives,
      'criterias'       => Criteria::all(),
      'tourism_objects' => $tourismObjects
    ]);
  }

  public function store(Request $request)
  {
    // dd($request);
    // $validate = $request->validated();

    // foreach ($validate['criteria_id'] as $key => $criteriaId) {
    //   $data = [
    //     'tourism_object_id' => $validate['tourism_object_id'],
    //     'criteria_id'       => $criteriaId,
    //     'alternative_value' => $validate['alternative_value'][$key],
    //   ];

    //   Alternative::create($data);
    // }
    $alternatives = TourismObject::get();
    $user_id = auth()->user()->id;
    $id_biaya = Criteria::where('name', 'Biaya')->first()->id;
    $id_ipk = Criteria::where('name', 'IPK')->first()->id;
    $id_minat = Criteria::where('name', 'Minat')->first()->id;
    $id_kesiapan = Criteria::where('name', 'Kesiapan')->first()->id;
    $id_keahlian = Criteria::where('name', 'Keahlian')->first()->id;
    
    if($request->first_kesiapan){
      foreach($alternatives as $alternative){
        $alternatives_value = new Alternative;
        $alternatives_value->criteria_id = $id_kesiapan;
        $alternatives_value->tourism_object_id = $alternative->id;
        $alternatives_value->user_id = $user_id;
        if($request->first_kesiapan == "3"){
          $alternatives_value->alternative_value = $request->first_kesiapan;
        }else{
          if($alternative->name == "Studi Independent"){
            $alternatives_value->alternative_value = 6 - $request->first_kesiapan;
          }else{
            $alternatives_value->alternative_value = $request->first_kesiapan;
          }
        }
        $alternatives_value->save();
       }
    }

    if($request->second_kesiapan){
       foreach($alternatives as $alternative){
        $alternatives_value = Alternative::where('criteria_id', $id_kesiapan)
        ->where('tourism_object_id')
        ->where('user_id', $user_id)->first();
        if($request->second_kesiapan == "3"){
          $alternatives_value->alternative_value = $alternatives_value->alternative_value + 1; 
        }elseif($request->second_kesiapan == "3"){
          
        }
       }
    }

    return redirect('/dashboard/questioner')
      ->with('success', 'Berhasil hore');
  }

  public function edit(Alternative $alternative)
  {
    $this->authorize('admin');

    // check if there is any new criteria which the user haven't filled the value
    $selectedCriteria = Alternative::where('tourism_object_id', $alternative->tourism_object_id)->pluck('criteria_id');
    $newCriterias     = Criteria::whereNotIn('id', $selectedCriteria)->get();

    $alternative      = TourismObject::where('id', $alternative->tourism_object_id)
      ->with('alternatives', 'alternatives.criteria')->first();

    return view('dashboard.alternative.edit', [
      'title'        => "Edit $alternative->name's Values",
      'alternative'  => $alternative,
      'newCriterias' => $newCriterias
    ]);
  }

  public function update(AlternativeUpdateRequest $request, Alternative $alternative)
  {
    $this->authorize('admin');

    $validate = $request->validated();

    // insert new alternative values if the new criteria exists
    if ($validate['new_tourism_object_id'] ?? false) {
      foreach ($validate['new_criteria_id'] as $key => $newCriteriaId) {
        $data = [
          'tourism_object_id' => $validate['new_tourism_object_id'],
          'criteria_id'       => $newCriteriaId,
          'alternative_value' => $validate['new_alternative_value'][$key],
        ];

        Alternative::create($data);
      }
    }

    foreach ($validate['criteria_id'] as $key => $criteriaId) {
      $data = [
        'criteria_id'       => $criteriaId,
        'alternative_value' => $validate['alternative_value'][$key],
      ];

      Alternative::where('id', $validate['alternative_id'][$key])
        ->update($data);
    }

    return redirect('/dashboard/alternatives')
      ->with('success', 'The selected alternative has been updated!');
  }

  public function destroy(Alternative $alternative)
  {
    $this->authorize('admin');

    Alternative::where('tourism_object_id', $alternative->tourism_object_id)
      ->delete();

    return redirect('/dashboard/alternatives')
      ->with('success', 'The selected alternative has been deleted!');
  }
}
