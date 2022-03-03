<div>
    <label for="dropzap">Zaposlenici: </label>
    <select name="dropzap" onchange="window.location = 'employee/'+this.options[this.selectedIndex].value">
@foreach($zaposlenici as $z)        
        <option value="{{$z->employeeNumber}}">{{$z->getFullNameAttribute()}}</option>
@endforeach
    </select> 
</div>