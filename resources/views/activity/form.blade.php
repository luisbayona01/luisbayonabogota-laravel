<div class="box box-info padding-1">
    <div class="box-body">
        {{-- dd($CulturalRight[0]->id) --}}
        <div class="form-group">
            {{ Form::label('NOMBRE ACTIVIDAD') }}
            {{ Form::text('activity_name', $activity->activity_name, ['class' => 'form-control', 'placeholder' => 'Activity Name','required']) }}
                    </div>
        <div class="form-group">
            {{ Form::label('HORA INICIO') }}
            {{ Form::text('start_time', $activity->start_time, ['class' => 'form-control','id' => 'start_time', 'placeholder' => 'Start Time','required']) }}
            
        </div>
        <div class="form-group">
            {{ Form::label('HORA FINAL') }}
            {{ Form::text('final_hour', $activity->final_hour, ['class' => 'form-control','id' => 'final_hour', 'placeholder' => 'Final Hour','required']) }}
           
        </div>
        <div class="form-group">
            {{ Form::label('FECHA') }}
              
            {{ Form::text('activity_date', $activity->activity_date, ['class' => 'form-control','id'=>'activity_date' , 'placeholder' => 'Activity Date','required' ]) }}
           
        </div>
        <div class="form-group">

            {{ Form::label('Derechos culturales') }}
      <select class="form-control" name="cultural_rights" required>
     
      @foreach ( $CulturalRight as  $CulturalRight )
      @if($CulturalRight->id == $activity->cultural_rights) 
     <option value="{{$CulturalRight->id }}" > {{$CulturalRight->cultural_rights}}</option>     
  @endif 
  @if($CulturalRight->id != $activity->cultural_rights)

  
     <option value="{{$CulturalRight->id}}" > {{$CulturalRight->cultural_rights}}</option>     
  @endif

@endforeach      
  </select>                  
    
   </div>
        <div class="form-group">
            {{ Form::label('Nac') }}

  <select class="form-control" name="nac_id" required>
    
      @foreach ( $Nac as  $Nac )
      @if($Nac->id == $activity->nac_id) 
     <option value="{{$Nac->id }}"> {{$Nac->nacs}}</option>     
  @endif 
  @if($Nac->id != $activity->nac_id)

  
     <option value="{{$Nac->id}}" > {{$Nac->nacs}}</option>     
  @endif

@endforeach      
  </select>                  
        </div>
        <div class="form-group">
            {{ Form::label('Experticias') }}
            

     <select class="form-control" name="expertises" required>
      
      @foreach ( $Expertises as  $Expertises )
      @if($Expertises->id == $activity->expertises) 
     <option value="{{$Expertises->id }}" > {{$Nac->nacs}}</option>     
  @endif 
  @if($Expertises->id != $activity->expertises)

  
     <option value="{{$Expertises->id}}" > {{$Expertises->expertises}}</option>     
  @endif

@endforeach   
</select>
        </div>
 
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>


<script>
$(document).ready(function(){

$('#start_time').timepicker();


$('#final_hour').click(function(){
 if($('#start_time').val()==''){
alert('porfavor selccione una fecha de inicio')
return false
}
let min =$('#start_time').val();
$('#final_hour').timepicker({
  minTime: min 

})

});

  $('#activity_date').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
})

    
</script>